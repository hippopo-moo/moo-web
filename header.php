<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>moo-web</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
	<?php wp_head(); ?>
</head>
<body>
	<header class="header">
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand" href="#">moo-web</a>
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="ナビゲーションの切替">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">HOME<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">SKILLS</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">WORKS</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">ABOUT</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">BLOG</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">CONTACT</a>
				</li>
				</ul>
			</div>
		</nav>
		<div class="header-image">
			<img src="<?php bloginfo('template_directory'); ?>/images/header.jpg" alt="">
		</div>
	</header>