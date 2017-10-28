<div class="container">
	<div class="row">
		<div class="col">
			<h3>Lista de Usuarios</h3>
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
			<table class="table">
				<thead>
					<tr>
						<th>id</th>
						<th>Matricula</th>
						<th>Contraseña</th>
						<th>Acciones</th>

					</tr>
				</thead>
				<tbody>
					<?php foreach ($usuarios as $key): ?>
						<tr>
							<th><?=$key['idUsuario']?></th>
							<td><?=$key['matricula']?></td>
							<td><?=$key['contrasena']?></td>
							<td><a class="btn btn-warning" href="<?=$sitePath?>vista1.php?id=<?=$key['idUsuario']?>&task=edit"><i class="fa fa-pencil"></i></a><a class="btn btn-danger" href="<?=$sitePath?>vista1.php?id=<?=$key['idUsuario']?>&task=del"><i class="fa fa-trash"></i></a></td>

						</tr>
					<?php endforeach ?>
				</tbody>

			</table>
		</div>

		<div class="col">
			<h2>Registro de Usuario</h2>
			<form method="post" action="<?=$sitePath?>vista1.php?task=add">
				<input type="hidden" name="task" value="<?= $accion ?>">
				<?= $inputHidden?>
				<div class="form-group">
					<label for="nombre" >Nombre: </label>
					<input class="form-control" type="text" name="nombre" id="nombre" placeholder="Introduce el Nombre" value="<?= $datoNombre ?>">
				</div>
				<div class="form-group">
					<label for="pass" >Contraseña: </label>
					<input class="form-control" type="text" name="pass1" id="pass" placeholder="Introduce la Contraseña" value="<?= $datoContra ?>">
				</div>
				<div class="form-group">
					<label for="pass2" >Repite Contraseña: </label>
					<input class="form-control" type="text" name="pass2" id="pass2" placeholder="Repite la Contraseña" value="<?= $datoContra2 ?>">
				</div>
				<button type="Submit" class="btn btn-primary">Enviar</button>
				<button type="Reset" class="btn btn-danger">Cancelar</button>
			</form>

		</div>
	
	</div>
</div>