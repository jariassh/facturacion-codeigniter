<div class="container-fluid">
	<div class="row">
		<h3 class="ml-4">
			<span class="mr-2"><i class="fas fa-users"></i></span>
			Clientes
		</h3>
	</div>
	<div class="row">
		<div class="col-9">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?= base_url(); ?>">Inicio</a></li>
					<li class="breadcrumb-item active" aria-current="page">
						Clientes
					</li>
				</ol>
			</nav>
		</div>
		<div class="col-3">
			<a href="<?= base_url('clientes/nuevo-cliente'); ?>" class="btn btn-primary btn-block mt-1">
				<span class="mr-2"><i class="fas fa-user-plus"></i></span>
				Nuevo Cliente
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
						<td><a href="#">Juan Pérez</a></td>
						<td>1117523599</td>
						<td>Cra 50B #73-49</td>
						<td>(4) - 4332620</td>
						<td>23/Octubre/2021</td>
						<td>
							<a href="<?= base_url('clientes/editar-cliente'); ?>" class="btn btn-warning btn-sm pl-4 pr-4">
								<span class="mr-2"><i class="fas fa-edit"></i></span>
								Editar
							</a>
							<a href="#" class="btn btn-danger btn-sm pl-4 pr-4">
								<span class="mr-2"><i class="fas fa-trash"></i></span>
								Borrar
							</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>