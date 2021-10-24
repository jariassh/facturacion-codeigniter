<?php
date_default_timezone_set('UTC');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Facturación Web</title>

	<link rel="stylesheet" href="<?= base_url() ?>/public/css/style.css">
	<link rel="stylesheet" href="<?= base_url() ?>/public/css/plugins/bootstrap.min.css">
	<script src="<?= base_url() ?>/public/js/plugins/fontawesome.js"></script>
	<script src="<?= base_url(); ?>/public/js/plugins/chart.min.js"></script>
	<script src="<?= base_url(); ?>/public/js/plugins/jquery-3.6.0.min.js"></script>
</head>

<body class="container-fluid">

	<aside class="bg-dark">
		<?= $aside; ?>
	</aside>
	<section>
		<?= $content; ?>
	</section>

	<script src="<?= base_url(); ?>/public/js/plugins/bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>/public/js/facturas_home_grafico.js"></script>
</body>

</html>