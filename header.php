<!DOCTYPE html>
<html>
	<head>
		<title>Arnaud Tunga FullStack developer</title>
		<meta charset="utf-8" />

		<meta name="description" content="Arnaud Tunga Ireland fullStack developer based in Paris, I can create app, website, videogame with last technologies. If you need a developer for your project contact me it will be a pleasure to work with you and dont forget openSource is life" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/assets/favicon.png" />

        <!-- feuilles de styles min -->
        <?php wp_head(); ?>
    </head>
    <body >
        <?php $hero = get_field('hero'); ?>

		<div class="main-wrapper  push">
			<header class="main-header ">

				<h1 class="main-title">
					<!-- <img src="<?php bloginfo('template_directory'); ?>/assets/avatar.png" alt="<?php echo $hero['small_title']; ?>"> -->
					<img src="<?php echo $hero['image']; ?>" alt="<?php echo $hero['small_title']; ?>">

					<?php echo $hero['small_title']; ?>
					<b class="under"><?php echo $hero['main_title']; ?></b>
				</h1>

			</header><!-- /header -->

			<nav class="main-nav  ">
				<h2 class="hidden">Main-nav</h2>
				<ul ><li><a class=" js-scrollTo" href=".aboutMe">Home</a></li><li><a class=" js-scrollTo" href=".skills">Skills</a></li><li><a class=" js-scrollTo" href=".portfolio">Portfolio</a></li><li><a class=" js-scrollTo" href=".contact">Contact</a></li>
				</ul>
			</nav>
			<div class="menu-side  ">
				<div class="menu-btn ">&#9776; Menu</div>
			</div>
		</div>
		<nav class="secondary-nav pushy pushy-left  ">
			<h2 class="hidden">Secondary-nav</h2>
			<ul ><li><a class=" js-scrollTo" href=".main-header">Home</a></li><li><a class=" js-scrollTo" href=".skills">Skills</a></li><li><a class=" js-scrollTo" href=".portfolio">Portfolio</a></li><li><a class=" js-scrollTo" href=".contact">Contact</a></li>
			</ul>
		</nav>