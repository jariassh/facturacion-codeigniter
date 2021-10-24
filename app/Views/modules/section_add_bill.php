<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-12">
							<h4 class="card-title">
								<span class="mr-2"><i class="fas fa-file-invoice-dollar"></i></span>
								Crear Factura
							</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-9">
							<nav id="breadcrumbNewClient" aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?= base_url(); ?>">Inicio</a></li>
									<li class="breadcrumb-item"><a href="<?= base_url('facturas'); ?>">Facturas</a></li>
									<li class="breadcrumb-item active" aria-current="page">
										Nueva-Factura
									</li>
								</ol>
							</nav>
						</div>
						<div class="col-3">
							<div class="row pt-2">
								<div class="col-12">
									<a href="<li class=" breadcrumb-item"><a href="<?= base_url('facturas'); ?>" class="btn btn-secondary btn-block mt-1">
											<span class="mr-2"><i class="fas fa-arrow-circle-left"></i></span>
											Regresar
										</a>
								</div>
							</div>
						</div>
					</div>

					<div class="row mt-5 mb-3 justify-content-center">
						<div class="col-9">
							<form method="post" action="" enctype="multipart/form-data">
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label for="nombre">
												<span class="mr-2">
													<i class="fas fa-user"></i>
												</span>
												Nombres y Apellidos
											</label>
											<input type="text" name="nombre" id="nombre" class="form-control" placeholder="" disabled>
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label for="nitcc">
												<span class="mr-2">
													<i class="fas fa-user"></i>
												</span>No. Identificaci&oacute;n
											</label>
											<input type="number" name="nitcc" id="nitcc" class="form-control" placeholder="" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-8">
										<div class="form-group">
											<label for="fechafact">
												<span class="mr-2">
													<i class="fas fa-calendar-alt"></i>
												</span>
												Fecha
											</label>
											<input type="datetime-local" name="fechafact" id="fechafact" class="form-control" placeholder="" required>
										</div>
									</div>
									<div class="col-4">
										<div class="form-group">
											<label for="paymentmode">
												<span class="mr-2">
													<i class="fas fa-money-check-alt"></i>
												</span>
												Forma de Pago
											</label>
											<select type="select" name="paymentmode" id="paymentmode" class="form-control" required>
												<option value="">Seleccione</option>
												<option value="1">Efectivo</option>
												<option value="2">Tarjeta de Cr&eacute;dito</option>
												<option value="3">Tarjeta de D&eacute;bito</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-4">
										<div class="form-group">
											<label for="valor">
												<span class="mr-2">
													<i class="fas fa-money-bill-wave"></i>
												</span>
												Valor
											</label>
											<input type="number" name="valor" id="valor" class="form-control" placeholder="" required>
										</div>
									</div>
									<div class="col-8">
										<div class="form-group">
											<label for="saldo">
												<span class="mr-2">
													<i class="fas fa-coins"></i>
												</span>
												Saldo
											</label>
											<input type="email" name="saldo" id="saldo" class="form-control" placeholder="" required>
										</div>
									</div>
								</div>
								<div class="row justify-content-center mt-3">
									<div class="col-6">
										<button type="submit" class="btn btn-primary btn-block mt-1">
											<span class="mr-2"><i class="fas fa-save"></i></span>
											Guardar Factura
										</button>
									</div>

								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>