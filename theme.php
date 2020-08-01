<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
		<meta name="description" content="<?= $Wcms->page('description') ?>">
		<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">

		<meta property="og:url" content="<?= $this->url() ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
		<meta property="og:title" content="<?= $Wcms->page('title') ?>" />
		<meta name="twitter:site" content="<?= $this->url() ?>" />
		<meta name="twitter:title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
		<meta name="twitter:description" content="<?= $Wcms->page('description') ?>" />

		<title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>

		<link rel="icon" type="image/png" href="<?= $Wcms->asset('img/favicon.png') ?>">
		<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/theme.css') ?>">
		<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/style.css') ?>">
		<?= $Wcms->css() ?>
	</head>

	<body>
		<?= $Wcms->settings() ?>
		<?= $Wcms->alerts() ?>

		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<a class="navbar-brand" href="<?= $Wcms->url() ?>"><?= $Wcms->siteTitle() ?></a>
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-collapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="menu-collapse">
				<ul class="nav navbar-nav navbar-right ml-auto">
					<?= $Wcms->menu() ?>
				</ul>
			</div>
		</nav>
		
		<section class="content">
			<?= $Wcms->block('subside') ?>

			<?= $Wcms->page('content') ?>

			<?php echo contact_form(); ?>
		</section>

		<footer class="footer text-center">
			<?= $Wcms->footer() ?>
		</footer>

		<script src="<?= $Wcms->asset('js/jquery.min.js') ?>"></script>
		<script src="<?= $Wcms->asset('js/bootstrap.bundle.min.js') ?>"></script>
		<?= $Wcms->js() ?>
	</body>
</html>
