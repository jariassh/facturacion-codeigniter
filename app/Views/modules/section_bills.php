<div class="container-fluid">
	<div class="row">
		<h3 class="ml-4">
			<span class="mr-2"><i class="fas fa-file-invoice-dollar"></i></span>
			Facturas
		</h3>
	</div>
	<div class="row">
		<div class="col-9">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?= base_url(); ?>">Inicio</a></li>
					<li class="breadcrumb-item active" aria-current="page">
						Facturas
					</li>
				</ol>
			</nav>
		</div>
		<div class="col-3">
			<a href="<?= base_url('facturas/nueva-factura'); ?>" class="btn btn-primary btn-block mt-1">
				<span class="mr-2"><i class="fas fa-file-invoice"></i></span>
				Nueva Factura
			</a>
		</div>
	</div>
	<div class="row mt-3">
		<p class="ml-4">Mostrando: <strong>1</strong> de <strong>1</strong> </p>
	</div>
	<hr>
	<div class="row content-clients">
		<div class="col-12 list-clients">
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
						<td><a href="#">Juan Pérez</a></td>
						<td>15/Octubre/2021</td>
						<td>Contado</td>
						<td>$150.000</td>
						<td>$0.0</td>
						<td>
							<a href="<?= base_url('facturas/editar-factura'); ?>" class="btn btn-warning btn-sm">
								<span class="mr-2"><i class="fas fa-edit"></i></span>
								Editar
							</a>
							<a href="#" class="btn btn-danger btn-sm">
								<span class="mr-2"><i class="fas fa-trash-alt"></i></span>
								Eliminar
							</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>