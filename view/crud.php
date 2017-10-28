<div class="container">
	<div class="row">
		<div class="col">
			<h2>Lista de Usuarios</h2>
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
			
		</div>

		<div class="col">
			<h2>Registro de Usuario</h2>
			<form method="post" action="<?=$sitePath?>usuarioTask.php?task=add">
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
					<input class="form-control" type="text" name="pass2" id="pass2" placeholder="Repite la Contraseña">
				</div>
				<button type="Submit" class="btn btn-primary">Enviar</button>
				<button type="Reset" class="btn btn-danger">Cancelar</button>
			</form>

		</div>
	
	</div>
</div>