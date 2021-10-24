<div class="container-fluid container-trash">
	<div class="row">
		<h3 class="ml-4">
			<span class="mr-2"><i class="fas fa-trash"></i></span>
			Papelera
		</h3>
	</div>
	<div class="row">
		<div class="col-9">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?= base_url(); ?>">Inicio</a></li>
					<li class="breadcrumb-item active" aria-current="page">
						Papelera
					</li>
				</ol>
			</nav>
		</div>
		<div class="col-3">
			<a href="#" class="btn btn-danger btn-block mt-1">
				<span class="mr-2"><i class="fas fa-trash"></i></span>
				Vaciar Papelera
			</a>
		</div>
	</div>
	<!-- <div class="row mt-2">
		<div class="col-12">
			<div class="card cards-trash">
				<div class="card-body">
					<div class="row mb-2">
						<div class="col-12">
							<h4 class="small card-title">
								<span class="mr-2"><i class="fas fa-user-minus"></i></span>
								Clientes Eliminados
							</h4>
						</div>

					</div>
					<div class="row mt-2">
						<div class="col-12 table-lits-trash">
							<table class="table table-light text-center table-borderless ">
								<thead>
									<tr>
										<th>Nombre</th>
										<th>Cédula</th>
										<th>Direccion</th>
										<th>Teléfono</th>
										<th>Fecha Registro</th>
										<th>Acciones</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Juan Pérez</td>
										<td>1117523599</td>
										<td>Cra 50B #73-49</td>
										<td>(4) - 4332620</td>
										<td>23/Octubre/2021</td>
										<td>
											<a href="#" class="btn btn-secondary btn-sm">
												<span class="mr-2"><i class="fas fa-undo"></i></span>
												Recuperar
											</a>
											<a href="#" class="btn btn-danger btn-sm">
												<span class="mr-2"><i class="fas fa-minus-circle"></i></span>
												Destruir
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<div class="accordion" id="accordionUsersTrash">
		<div class="card">
			<div class="card-header" id="headingUsersTrash">
				<div class="row">
					<div class="col-11">
						<h2 class="mb-0">
							<button class="btn  btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseUsersTrash" aria-expanded="true" aria-controls="collapseUsersTrash">
								<span class="mr-2"><i class="fas fa-user-minus"></i></span>
								Clientes Eliminados
							</button>
						</h2>
					</div>
					<div class="col-1 d-flex justify-content-center align-items-center">
						<span class="counter-items-trash">
							<p class="text-center mt-1">10</p>
						</span>
					</div>
				</div>
			</div>

			<div id="collapseUsersTrash" class="collapse hide" aria-labelledby="headingUsersTrash" data-parent="#accordionUsersTrash">
				<div class="card-body">
					<div class="row mt-2">
						<div class="col-12 table-lits-trash">
							<table class="table table-light text-center table-borderless ">
								<thead>
									<tr>
										<th>Nombre</th>
										<th>Cédula</th>
										<th>Direccion</th>
										<th>Teléfono</th>
										<th>Fecha Registro</th>
										<th>Acciones</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Juan Pérez</td>
										<td>1117523599</td>
										<td>Cra 50B #73-49</td>
										<td>(4) - 4332620</td>
										<td>23/Octubre/2021</td>
										<td>
											<a href="#" class="btn btn-secondary btn-sm">
												<span class="mr-2"><i class="fas fa-undo"></i></span>
												Recuperar
											</a>
											<a href="#" class="btn btn-danger btn-sm">
												<span class="mr-2"><i class="fas fa-minus-circle"></i></span>
												Destruir
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="accordion mt-3" id="accordionBills">
		<div class="card">
			<div class="card-header" id="headingBills">
				<div class="row">
					<div class="col-11">
						<h2 class="mb-0">
							<button class="btn  btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseBills" aria-expanded="true" aria-controls="collapseBills">
								<span class="mr-2"><i class="fas fa-trash-alt"></i></span>
								Facturas Eliminadas
							</button>
						</h2>
					</div>
					<div class="col-1 d-flex justify-content-center align-items-center">
						<span class="counter-items-trash">
							<p class="text-center mt-1">10</p>
						</span>
					</div>
				</div>
			</div>

			<div id="collapseBills" class="collapse hide" aria-labelledby="headingBills" data-parent="#accordionBills">
				<div class="card-body">
					<div class="row mt-2">
						<div class="col-12 table-lits-trash">
							<table class="table table-light text-center table-borderless ">
								<thead>
									<tr>
										<th>Cliente</th>
										<th>Fecha</th>
										<th>Forma de Pago</th>
										<th>Valor</th>
										<th>Saldo</th>
										<th>Acciones</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Juan Pérez</td>
										<td>15/Octubre/2021</td>
										<td>Contado</td>
										<td>$150.000</td>
										<td>$0.0</td>
										<td>
											<a href="#" class="btn btn-secondary btn-sm">
												<span class="mr-2"><i class="fas fa-undo"></i></span>
												Recuperar
											</a>
											<a href="#" class="btn btn-danger btn-sm">
												<span class="mr-2"><i class="fas fa-minus-circle"></i></span>
												Destruir
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- <div class="row mt-3">
		<div class="col-12">
			<div class="card cards-trash">
				<div class="card-body">
					<div class="row mb-2">
						<div class="col-12">
							<h4 class="small card-title">
								<span class="mr-2"><i class="fas fa-trash-alt"></i></span>
								Facturas Eliminadas
							</h4>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div> -->
</div>