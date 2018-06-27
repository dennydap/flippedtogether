<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title ?></title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body class="font-opensans">
	<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-darkgray" id="navbarDefault">
		<div class="container">
			<a class="navbar-brand" href="<?php echo base_url(); ?>">FlippedTogether</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link js-btn-learnmore mouse-pointer" href="<?php echo base_url('#whatis'); ?>">Pelajari</a>
					</li>
					<li class="nav-item">
						<a class="nav-link mouse-pointer" href="<?php echo base_url('posts/explore'); ?>">Jelajahi</a>
					</li>
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown">
						<?php if($this->session->has_userdata('logged_in')) { ?>
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<?php echo $this->session->userdata('username'); ?>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<?php if($this->session->userdata('role') == 'user') { ?>
									<a class="dropdown-item" href="<?php echo base_url("/"); ?>">Dashboard</a>
								<?php } else { ?>
									<a class="dropdown-item" href="<?php echo base_url("/"); ?>">Dashboard</a>
								<?php } ?>
									<a class="dropdown-item" href="<?php echo base_url("/user/logout"); ?>">Logout</a>
							</div>
						<?php } else { ?>
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Belum Login?
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="<?php echo base_url('user/masuk'); ?>">Masuk</a>
								<a class="dropdown-item" href="<?php echo base_url('user/daftar'); ?>">Daftar</a>
							</div>
						<?php } ?>
					</li>
				</ul>
			</div>
		</nav>
	</div>