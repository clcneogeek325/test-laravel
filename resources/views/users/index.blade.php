@extends('base')
@section('contenido')
  
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Detalles del usuario</h4>
      </div>
      <div class="modal-body">
      <div id="id_detalles">


      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


  <div class="jumbotron">
        
<a class="btn btn-lg btn-success" href="/user/create">Alta usuario</a>

      


        <h1>Lista de usuarios</h1>



          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Username</th>
                <th>email</th>
              </tr>
            </thead>
            <tbody>
           @foreach($users as $key => $user)
              <tr>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->username }}</td>
                  <td>{{ $user->email }}</td>
                  <td>

                      <a class="btn btn-small btn-primary" href="/user/{!! $user->id !!}/edit">Editar</a>
                      <a class="btn btn-small btn-danger" href="/user/{!! $user->id !!}/delete">Dar de baja</a>
                      <button pk="{!! $user->id !!}" id="btn_detalles" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Detalles</button>

                  </td>
              </tr>
          @endforeach
            </tbody>
          </table>
        
        
      </div>

      <script type="text/javascript">
      
        $("#btn_detalles").click(function (){
          $("#id_detalles").empty();
           var id= $(this).attr('pk');
          $.ajax({

              method:"GET",
              contentType:"application/json",
              dataType:"json",
              url:"/user/"+id+"/json",
              success:function(response){
                  var user = response;
                           
                     $("#id_detalles").append("<p>id: "+user.id+"<p>");
                     $("#id_detalles").append("<p>Nombre completo: "+user.nombre+"<p>");
                     $("#id_detalles").append("<p>Apellddos: "+user.apellidos+"<p>");
                     $("#id_detalles").append("<p>Email: "+user.email+"<p>");
                     $("#id_detalles").append("<p>Username: "+user.username+"<p>");

              }

          });
        });

      </script>
@endsection