<?php
if ($enable == 'home') {
	$home = 'active';
} else {
	$home = '';
}
if ($enable == 'clients') {
	$clients = 'active';
} else {
	$clients = '';
}
if ($enable == 'bills') {
	$bills = 'active';
} else {
	$bills = '';
}
if ($enable == 'trash') {
	$trash = 'active';
} else {
	$trash = '';
}

?>
<div class="row">
	<div class="col-12 d-flex justify-content-center">
		<div class="logo-container">
			<a href="<?= base_url(); ?>">
				<img src="<?= base_url(); ?>/public/assets/img/logo.png" alt="Logo">
			</a>
			<p class="text-center mt-2">Facturaci&oacute;n Electr&oacute;nica</p>

		</div>
	</div>
</div>

<div class="row">
	<div class="col-12">
		<div class="menu">
			<nav class="nav flex-column nav-pills">
				<a class="nav-link <?= $home; ?>" href="<?= base_url(); ?>">
					<span class="mr-2"><i class="fas fa-home"></i></span>
					Inicio
				</a>
				<a class="nav-link <?= $clients; ?>" href="<?= base_url('clientes'); ?>">
					<span class="mr-2"><i class="fas fa-users"></i></span>
					Clientes
				</a>
				<a class="nav-link <?= $bills; ?>" href="<?= base_url('facturas'); ?>">
					<span class="mr-2"><i class="fas fa-file-invoice-dollar"></i></span>
					Facturas
				</a>
				<a class="nav-link <?= $trash; ?>" href="<?= base_url('papelera'); ?>">
					<span class="mr-2"><i class="fas fa-trash-alt"></i></span>
					Papelera
				</a>
			</nav>
		</div>
	</div>
</div>

<div class="row mt-5">
	<div class="col-12">
		<div class="footer">
			<p class="text-center">
				<small>
					Copyright
					<span class="ml-2 mr-2">
						<i class="fas fa-copyright"></i>
					</span>
					<?= date('Y'); ?>
					Jonathan Arias
				</small>
			</p>
		</div>
	</div>
</div>