<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-12">
							<h4 class="card-title">
								<span class="mr-2"><i class="fas fa-user-plus"></i></span>
								Registrar Clientes
							</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-9">
							<nav id="breadcrumbNewClient" aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?= base_url(); ?>">Inicio</a></li>
									<li class="breadcrumb-item"><a href="<?= base_url('clientes'); ?>">Clientes</a></li>
									<li class="breadcrumb-item active" aria-current="page">
										Nuevo-Cliente
									</li>
								</ol>
							</nav>
						</div>
						<div class="col-3">
							<div class="row pt-2">
								<div class="col-12">
									<a href="<li class=" breadcrumb-item"><a href="<?= base_url('clientes'); ?>" class="btn btn-secondary btn-block mt-1">
											<span class="mr-2"><i class="fas fa-arrow-circle-left"></i></span>
											Regresar
										</a>
								</div>
							</div>
						</div>
					</div>

					<div class="row mt-5 mb-3">
						<div class="col-3 text-center">
							<h4>Información Básica</h4>
						</div>
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
											<input type="text" name="nombre" id="nombre" class="form-control" placeholder="" required>
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
											<label for="direccion">
												<span class="mr-2">
													<i class="fas fa-home"></i>
												</span>Direcci&oacute;n
											</label>
											<input type="text" name="direccion" id="direccion" class="form-control" placeholder="" required>
										</div>
									</div>
									<div class="col-4">
										<div class="form-group">
											<label for="telefono">
												<span class="mr-2">
													<i class="fas fa-phone-alt"></i>
												</span>
												No. Tel&eacute;fono
											</label>
											<input type="number" name="telefono" id="telefono" class="form-control" placeholder="" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-4">
										<div class="form-group">
											<label for="password">
												<span class="mr-2">
													<i class="fas fa-user-lock"></i>
												</span>
												Contrase&ntilde;a
											</label>
											<input type="password" name="password" id="password" class="form-control" placeholder="" required>
										</div>
									</div>
									<div class="col-8">
										<div class="form-group">
											<label for="correo">
												<span class="mr-2">
													<i class="fas fa-envelope"></i>
												</span>
												Correo Eletr&oacute;nico
											</label>
											<input type="email" name="correo" id="correo" class="form-control" placeholder="" required>
										</div>
									</div>
								</div>
								<div class="row justify-content-center mt-3">
									<div class="col-6">
										<button type="submit" class="btn btn-primary btn-block mt-1">
											<span class="mr-2"><i class="fas fa-save"></i></span>
											Guardar Cliente
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