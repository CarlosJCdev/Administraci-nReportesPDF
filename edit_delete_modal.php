<!-- Editar -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	 <center><h4 class="modal-title" id="myModalLabel">Editar registro</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php?id=<?php echo $row['id']; ?>">

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Fecha:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="fecha" value="<?php echo $row['fecha']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Turno:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="turno" value="<?php echo $row['turno']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Capturista:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="capturista" value="<?php echo $row['capturista']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Autobus:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="autobus" value="<?php echo $row['autobus']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Rol:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="rol" value="<?php echo $row['rol']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Conductor:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="conductor" value="<?php echo $row['conductor']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Dueño:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="inversionista" value="<?php echo $row['inversionista']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Monto:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="monto" value="<?php echo $row['monto']; ?>">
					</div>
				</div>

            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> Cancelar</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="fa fa-check"></span> Actualizar</a>
			</form>




            </div>

        </div>
    </div>
</div>

<!-- Eliminar -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<center><h4 class="modal-title" id="myModalLabel">Borrar registro</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Estas seguro en borrar datos?</p>
				<h2 class="text-center">Conductor: <?php echo $row['conductor']; ?></h2>
					<br>
				<h2 class="text-center">Fecha: <?php echo $row['fecha']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> Cancelar</button>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="fa fa-trash"></span> Si</a>
            </div>

        </div>
    </div>
</div>
