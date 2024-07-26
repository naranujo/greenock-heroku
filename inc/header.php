<!doctype html>
<html lang="<?php echo $lang ?>">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Greenock Trust</title>
	<meta name="description" content="<?php echo $description[$lang] ?>" />
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#133b3c">
	<meta name="msapplication-TileColor" content="#133b3c">
	<meta name="theme-color" content="#133b3c">
	<link href="/css/all.min.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Hepta+Slab:wght@300;400;600&display=swap" rel="stylesheet">
	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/aos.css" rel="stylesheet">
	<link href="/css/styles.css?v111220201700" rel="stylesheet">
</head>

<body id="<?php echo $template ?>">
	<header class="container mb-5 d-md-block " id="top">
		<nav class="navbar navbar-expand-lg fixed-top bg-primary pt-2 pb-0 " id="mainNav">
			<div class="container pb-2">
				<a class="navbar-brand mr-0" href="/"><img src="/imgs/logo.svg" width="180px" /></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="bar"></span>
					<span class="bar"></span>
					<span class="bar"></span>
				</button>
				<div class="collapse navbar-collapse " id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#top">
								<?php echo $title0[$lang]?><span class="sr-only">Menu</span>
							</a>
						</li>
						<li class="nav-item pl-lg-2 pl-xl-4">
							<a class="nav-link js-scroll-trigger" href="#nosotros">
								<?php echo $title1[$lang]?>
							</a>
						</li>
						<li class="nav-item pl-lg-2 pl-xl-4">
							<a class="nav-link js-scroll-trigger" href="#servicios">
								<?php echo $title2[$lang]?>
							</a>
						</li>
						<li class="nav-item pl-lg-2 pl-xl-4">
							<a class="nav-link js-scroll-trigger" href="#clientes">
								<?php echo $title3[$lang]?>
							</a>
						</li>
						<li class="nav-item  pl-lg-2 pl-xl-4">
							<a class="nav-link js-scroll-trigger" href="#contacto">
								<?php echo $title4[$lang]?>
							</a>
						</li>
						<li class="nav-item  pl-lg-2 pl-xl-5 pr-0 mr-0">
							<a class="nav-link d-inline-block pr-0 <?php if ($lang == 'es') {echo 'current';}?>"
								href="/es/">Esp</a> |
							<a class="nav-link d-inline-block pl-0 pr-0 <?php if ($lang == 'en') {echo 'current';}?>"
								href="/en/">Eng</a> |
							<a class="nav-link d-inline-block pl-0 pr-0 <?php if ($lang == 'pt') {echo 'current';}?>"
								href="/pt/">Por</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header><!-- /header-->