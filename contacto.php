<?php include 'tpl/header.tpl.php' ?>
<div class="col-sm-12">
	<section class="row">
		<h4 class="hline-red">
			<span class="pull-left">COTIZA Y CONTÁCTANOS</span>
			<div class="clearfix"></div>
		</h4>
		<div class="row" id="list-products">
			<div class="col-sm-6 text-justify">
				<form method="post" action="#">
					<?php if (isset($_SESSION['ERRORS'])): ?>
						<div class="alert alert-warning">
							<p><?php echo $_SESSION['ERRORS'] ?></p>
						</div>
						<?php unset($_SESSION['ERRORS']) ?>
					<?php elseif (isset($_SESSION['SUCCESS'])): ?>
						<div class="alert alert-success">
							<p><?php echo $_SESSION['SUCCESS'] ?></p>
						</div>
						<?php unset($_SESSION['SUCCESS']) ?>
					<?php endif ?>
					<div class="form-group">
						<input type="text" class="form-control" name="nombres" placeholder="NOMBRES" value="<?php echo isset($_SESSION['DATA_FORM']) ? $_SESSION['DATA_FORM']['nombres'] : ''?>">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="correo" placeholder="CORREO" value="<?php echo isset($_SESSION['DATA_FORM']) ? $_SESSION['DATA_FORM']['correo'] : ''?>">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="telefono" placeholder="TELEFONO" value="<?php echo isset($_SESSION['DATA_FORM']) ? $_SESSION['DATA_FORM']['telefono'] : ''?>">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="empresa" placeholder="EMPRESA" value="<?php echo isset($_SESSION['DATA_FORM']) ? $_SESSION['DATA_FORM']['empresa'] : ''?>">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="producto" placeholder="PRODUCTO" value="<?php echo isset($_SESSION['DATA_FORM']) ? $_SESSION['DATA_FORM']['producto'] : ''?>">
					</div>
					<div class="form-group">
						<textarea rows="8" class="form-control" name="mensaje" placeholder="MENSAJE"><?php echo isset($_SESSION['DATA_FORM']) ? $_SESSION['DATA_FORM']['mensaje'] : ''?></textarea>
					</div>
					<div class="form-group text-center">
						<button class="btn-lg btn btn-danger">Enviar</button>
					</div>
				</form>
			</div>
			<div class="col-sm-6">
				<img src="img/foto-contacto.jpg" class="img-responsive empty-img">
			</div>
		</div>
		<div class="clearfix"></div>
	</section>
</div>
<?php unset($_SESSION['DATA_FORM']) ?>
<?php include 'tpl/footer.tpl.php' ?>