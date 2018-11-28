<?php
	if (!isset($page_title)) {
		$page_title = 'Page Title';
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $page_title ?> - GeekPall</title>
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="wrapper push">
		<div class="page">
			<header class="header">
				<div class="container">
					<div class="header-inner">
						<div class="header-block">
							<a href="index.php" class="logo-block">
								<img src="img/logo.svg" alt="GeekPall">
							</a>
						</div>
						<div class="header-block">
							<ul class="top-nav">
								<li><a href="index.php">Home</a></li>
								<li><a href="how-it-works.php">How it works</a></li>
								<li><a href="what-can-do.php">What your geek can do</a></li>
								<li><a href="total-protection.php">Total antivirus protection</a></li>
								<li><a href="about-us.php">About us</a></li>
							</ul>
							<div class="menu-opener">
								<div class="bar"></div>
								<div class="bar"></div>
								<div class="bar"></div>
							</div>
						</div>
					</div>
				</div>
			</header>