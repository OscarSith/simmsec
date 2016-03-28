<?php include 'tpl/header.tpl.php' ?>
<div class="col-sm-12">
	<section class="row">
		<h4 class="hline-red">
			<span class="pull-left">COTIZA Y CONTÁCTANOS</span>
			<div class="clearfix"></div>
		</h4>
		<div class="row" id="list-products">
			<div class="col-sm-6 text-justify">
				<form>
					<div class="form-group">
						<input type="text" class="form-control" name="nombres" placeholder="NOMBRES">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="correo" placeholder="CORREO">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="telefono" placeholder="TELEFONO">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="empresa" placeholder="EMPRESA">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="producto" placeholder="PRODUCTO">
					</div>
					<div class="form-group">
						<textarea rows="8" class="form-control" name="mensaje" placeholder="MENSAJE"></textarea>
					</div>
					<div class="form-group text-center">
						<button type="button" class="btn-lg btn btn-danger">Enviar</button>
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
<?php include 'tpl/footer.tpl.php' ?>