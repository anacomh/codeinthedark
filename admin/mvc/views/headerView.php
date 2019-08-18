<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="<?php echo ADMIN_CSS; ?>style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo ADMIN_CSS; ?>font-awesome/css/font-awesome.min.css" />
<link href="https://fonts.googleapis.com/css?family=Montserrat:700|Space+Mono:400,700" rel="stylesheet">
<title>Administration</title>
</head>

<body>


	<div class="main-container">

		<div class="main-column-left">

			<!-- Admin logo -->
			<h1 class="main-logo">
				<a href="<?php echo ADMIN_URL; ?>">
					<img src="<?php echo ADMIN_IMG; ?>logo.png" alt="Code in the Dark"/>
				</a>
			</h1>

			<br><br>

			<!-- SIDE MENU -->
			<nav class="side-menu">
				<a href="<?php echo ADMIN_URL.'users'; ?>">
					<i class="fa fa-home"></i> Users
				</a>
				<a href="<?php echo ADMIN_URL.'rounds'; ?>">
					<i class="fa fa-shopping-cart"></i> Rounds
				</a>
				<a href="<?php echo ADMIN_URL.'wall'; ?>">
					<i class="fa fa-envelope"></i> Wall Board
				</a>
				<a href="<?php echo ADMIN_URL.'socket'; ?>">
					<i class="fa fa-plus"></i> Main Controller
				</a>
				<a href="<?php echo BASE_URL.'vote'; ?>">
					<i class="fa fa-star"></i> Vote
				</a>
				<a href="<?php echo ADMIN_URL.'options'; ?>">
					<i class="fa fa-sliders"></i>Options
				</a>
			</nav>

		</div>

		<div class="main-column-right">

			<div class="top-bar">
				<div class="row">

					<div class="col col4 right text-right">
						<div class="top-menu">
							<a href="<?php echo ADMIN_URL.'login/logout'; ?>">
								<i class="fa fa-sign-out"></i> Logout
							</a>
						</div>
					</div>

				</div>
			</div>

			<div class="admin-content">
