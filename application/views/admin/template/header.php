<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8" />
	<title><?= $title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">



	<?php include('header_link.php') ?>

</head>

<body data-sidebar="dark">
	<div id="layout-wrapper">
		<div id="preloader">
			<div id="status">
				<div class="spinner-chase">
					<div class="chase-dot"></div>
					<div class="chase-dot"></div>
					<div class="chase-dot"></div>
					<div class="chase-dot"></div>
					<div class="chase-dot"></div>
					<div class="chase-dot"></div>
				</div>
			</div>
		</div>
		<header id="page-topbar">
			<div class="navbar-header">
				<div class="d-flex">
					<!-- LOGO -->
					<div class="navbar-brand-box">
						<a href="<?= base_url() ?>" class="logo logo-light">

							<img src="<?= base_url('assets/images/img/unipath-logo.jpg') ?>" alt="" height="50">


						</a>
					</div>
					<button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect"
						id="vertical-menu-btn">
						<i class="fa fa-fw fa-bars"></i>
					</button>
				</div>

				<div class="d-flex">
					<div class="dropdown d-none d-lg-inline-block ms-1">
						<button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
							<i class="bx bx-fullscreen"></i>
						</button>
					</div>

					<div class="dropdown d-inline-block">
						<button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
							data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							 
							<span class="d-none d-xl-inline-block ms-1"
								key="t-henry"><?= ucwords(sessionId('admin_name')) ?></span>
							<i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
						</button>
						<div class="dropdown-menu dropdown-menu-end">
							 
							<div class="dropdown-divider"></div>
							<a class="dropdown-item text-danger" href="<?= base_url('adminLogout') ?>"><i
									class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span
									key="t-logout">Logout</span></a>
						</div>
					</div>
				</div>
			</div>
		</header>
		<?php include('navbar.php') ?>