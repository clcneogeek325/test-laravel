<?php namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use App\User;
use \Auth;
use Input;
class UserController extends Controller {
   public function __construct()
    {
        $this->middleware('auth');
    }


  
        public function index(){
		        $users = User::all();

		   
		        return view('users/index',['users'=>$users]);
		 }

		 public function users_json($id){
                $user = User::findOrFail($id);
		        return $user->toJson();
		 }


		 public function create(){
  
 				return view('users/create');
		 }

	public function store(Request $request)
	{
		$this->validate($request, [
	        'username' => 'required',
	        'password' => 'required',
	        'email' => 'required'
	    ]);

	   User::create($input);
       

	    return redirect("/home");

	}



	public function edit($id)
	{
		$user = User::findOrFail($id);
 		return view('users.edit')->withUser($user);	
 		
 	}



	public function update($id, Request $request)
	{
		$user = User::findOrFail($id);

		$this->validate($request, [
		    'username' => 'required',
		    'email' => 'required'
		]);

		$input = $request->all();

		$user->fill($input)->save();

		//Session::flash('flash_message', 'Task successfully added!');

		return redirect("/home");
	}

	public function destroy($id)
	{
		$u = User::findOrFail($id);
		$u->delete();
		return "Eliminado correctamente";

	}




       

    
     

 }