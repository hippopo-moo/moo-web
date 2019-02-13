<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>moo-web</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/animate.css">
	<link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/animate.css">
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
						<a class="nav-link" href="<?php echo get_site_url(); ?>/#">HOME<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo get_site_url(); ?>/#skills">SKILLS</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo get_site_url(); ?>/#works">WORKS</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about">ABOUT</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo get_site_url(); ?>/#blog">BLOG</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo get_site_url(); ?>/#contact">CONTACT</a>
				</li>
				</ul>
			</div>
		</nav>
		<div class="header-text">
			<span class="animation-text">名刺代わりのホームページ、作ってみませんか？</span>
			<p>制作からメンテナンスまでおまかせ！</p>
		</div>
		<div class="header-image">
			<img src="<?php bloginfo('template_directory'); ?>/images/header.jpg" alt="">
		</div>
	</header>