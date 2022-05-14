<?php session_start(); ?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Rechauffement climatique | Gestion informations</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">
							<h1>Gestion Contenu rechauffement climatique</h1>
							<!-- Logo -->
								<a href="index.php" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Admin</span>
								</a>
						</div>
					</header>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<section>
								<h2>Connexion Admin</h2>
								<form method="post" action="traitementLogin.php">
									<div class="fields">
										<div class="field">
											<input type="email" name="mail" id="mail" placeholder="Email" />
										</div>
										<div class="field">
											<input type="password" name="mdp" id="mdp" placeholder="Mot de passe" />
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Se Connecter" class="primary" /></li>
									</ul>
								</form>
							</section>
							<?php if(isset($_SESSION['erreur'])){ ?>
							<section>
								<p style="color: red;"><?php echo($_SESSION['erreur']); ?></p>
							</section>
							<?php } ?>
							
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							
							<!-- <section>
								<h2>Follow</h2>
								<ul class="icons">
									<li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon brands style2 fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="#" class="icon brands style2 fa-500px"><span class="label">500px</span></a></li>
									<li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</section> -->
							<ul class="copyright">
								<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>