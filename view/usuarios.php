<div class="container">
	<div class="row">
		<div class="col-md-12">
			<br>
			
			<?php 
			if (isset($_GET['alerta'])) {
				if ($_GET['alerta'] == 1) {
					echo '<h3><span class="badge badge-danger">Contraseñas no coinciden</span><h3>';
				}
				if ($_GET['alerta'] == 2) {
					echo '<h3><span class="badge badge-success">Registrado Correctamente</span><h3>';
				}
			}	
			?>
			<div class="row">
				<div class="col-md-12">
				<h3>Lista de Usuarios</h3>	
				</div>
				<div class="col-md-12 pull-left">
				<button type="button" class="btn pull-right btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fa fa-plus"></i> Agregar</button>
				</div>
			</div>
			<div class="row-fluid">
				<table class="table table-responsive bg-blanco">
				<thead>
					<tr>
						<th>id</th>
						<th>Matricula</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Apellido</th>
						<th>Correo</th>
						<th>Teléfono</th>
						<th>Escuela</th>
						<th>Acciones</th>

					</tr>
				</thead>
				<tbody id="tabla">
					
				</tbody>
				</table>
			</div>	
		</div>
	</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro de Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="fmUsuarios" method="post" action="usuarios.php?task=add">
				<div class="form-group">
					<label for="nombre" >Nombre: </label>
					<input class="form-control" type="text" name="nombre" id="nombre" placeholder="Introduce el Nombre">
				</div>
				<div class="form-group">
					<label for="pass" >Contraseña: </label>
					<input class="form-control" type="text" name="pass1" id="pass" placeholder="Introduce la Contraseña">
				</div>
				<div class="form-group">
					<label for="pass2" >Repite Contraseña: </label>
					<input class="form-control" type="text" name="pass2" id="pass2" placeholder="Repite la Contraseña" >
				</div>
		
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="Submit" id="enviarUsuario" class="btn btn-primary">Enviar</button>
      </div>
    </form>
    </div>
  </div>
</div>
<br>
<br>