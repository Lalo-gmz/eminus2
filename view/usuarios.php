<div class="container">
	<div id="formulario" class="row" style="display:<?=$visibleF?>;">
		<div class="col-md-12">
  			<div class="modal-dialog" role="document">
    			<div class="modal-content">
     				<div class="modal-header">
      					<h5 class="modal-title" id="exampleModalLabel">Registro de Usuario</h5>
        
      				</div>
      				<form method="POST" action="<?=$sitePath?>usuarios.php">
      				<div class="modal-body">
			        		<input class="form-control" type="hidden" name="task" value="<?=$accion?>">
			        		<?=$input?>
							<div class="form-group">
								<label for="nombre" >Matricula: </label>
								<input class="form-control" required="" type="text" name="matricula" value="<?=$campo1?>">
							</div>
							<div class="form-group ">
								<label for="nombre" >Nombre: </label>
								<input class="form-control" required=""  type="text" name="nombre" value="<?=$campo2?>">
							</div>
							<div class="form-group">
								<label for="ap1" >Pimer Apellido: </label>
								<input class="form-control" required="" type="text" name="ap1" value="<?=$campo3?>">
							</div>
							<div class="form-group">
								<label for="ap2" >Segundo Apellido: </label>
								<input class="form-control" required="" type="text" name="ap2" value="<?=$campo4?>">
							</div>
							<div class="form-group">
								<label for="mail" >Correo Electrónico: </label>
								<input class="form-control" required="" type="mail" name="mail" value="<?=$campo5?>">
							</div>
							<div class="form-group">
								<label for="tel" >Teléfono: </label>
								<input class="form-control" required="" type="number" name="tel" value="<?=$campo6?>">
							</div>
							<div class="form-group">
								<label for="contra" >Contraseña: </label>
								<input class="form-control" required="" type="text" name="contra" value="<?=$campo7?>">
							</div>
							<div class="form-group">
							    <label for="escuela">Escuela:</label>
							    <select class="form-control" name="escuela" value="<?=$campo8?>">
							      <option value="1">1</option>
							      <option value="2">2</option>
							      <option value="3">3</option>
							    </select>
							</div>
			     	</div>
			      	<div class="modal-footer">
				      	<button type="button" class="btn btn-secondary" id="cancelModal">Cancelar</button>
				        <button type="Submit" id="enviarUsuario" class="btn btn-primary">Enviar</button>
				    </div>
			   		</form>
   				</div>
  			</div>
  		</div>
  	</div>
	<div id="contenido" class="row" style="display:<?=$visibleC?>;">
		<div class="col-md-12"><br>
			<h3>Lista de Usuarios</h3>	
			<div class="col-md-12">
				<button id="mimodal" type="button" class="btn pull-right btn-primary"><i class="fa fa-plus"></i> Agregar</button>
			</div>
			<br><br>
			<div class="table-responsive">
				<table class="table table-bordered table-striped bg-blanco">
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
						<?php echo $tabla ?>
					</tbody>
					</table>
					
			</div><br>
			<nav aria-label="Page navigation example">
					  <ul class="pagination ">
					    <?php echo $paginador ?>
					  </ul>
			</nav>	
		</div>
	</div>
<br>
<br>