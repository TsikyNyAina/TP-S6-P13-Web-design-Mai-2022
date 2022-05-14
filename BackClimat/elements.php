<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Ajout Article sur le rechauffement climatique</title>
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

							<!-- Logo -->
								<a href="index.html" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Admin</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="deconnect.php">Log Out</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<div class="row">
							<h1>Ajout Article Sur Le rechauffement climatique</h1>

							<div class="col-5">
								<h2>Ajout Article</h2>
								<div class="col-6">
									Titre: 
									<input type="text" name="titre" id="titre">
								</div>
								<div class="col-6 col-6-xsmall">
									Sout-Titre: 
									<input type="text" name="soustitre" id="soustitre">
									<br>
								</div>
								<div class="col-6 col-12-xsmall">
									Source: 
									<input type="text" name="source" id="source">
									<br>
								</div>
								<div class="col-10">
									Resume: 
									<textarea name="resume" id="resume"></textarea>
								</div>
								<div class="col-md-12 text-center "><button class="form1"  onclick="ajouteArticle()">Ajouter article</button></div>
							</div>
							<div class="col-1"> <p>|</p> <p>|</p> <p>|</p> <p>|</p> <p>|</p> <p>|</p></div>
							<div class="col-5">
								<h2>AJout Paragraphe</h2>
								
								
									<div class="col-6">
										Titre: 
										<input type="text" name="ptitre" id="ptitre">
									</div>

									<div class="col-12">
										Contenu: 
										<textarea name="contenu" id="contenu" rows="6"></textarea>
									</div>
									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" value="Ajouter Paragraphe" class="primary" onclick="ajoutePara()"/></li>
										</ul>
									</div>
							</div>
							</div>
							<!-- Image -->
								<section id="articlee">
									<p>Article</p>
								</section>
								<section id="paragraphe">
									<p>Paragraphe</p>
								</section>
								<form action="Ajout.php" method="GET">
									<input type="submit" name="valider" value="Valider">
								</form>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							
							<section>
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
							</section>
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
			<script>
				async function ajouteArticle() {
					var titre = $('#titre').val();
					var soustitre = $('#soustitre').val();
					var source = $('#source').val();
					var resume = $('#resume').val();
					console.log(titre);
			        $('#articlee').empty();
			        $.ajax({
		                url: "AjoutArticle.php",
		                method: 'GET',
		                data: "titre=" + titre+ "&soustitre=" + soustitre+ "&source=" + source + "&resume=" + resume,
						success:async function(response){
							let res=jQuery.parseJSON(response);
							console.log(res);
							$('#articlee').append('<h1>'+res["titre"]+'</h1><h2>'+res["soustitre"]+'</h2><p>'+res['datearticle']+'</p><p>'+res['resume']+'</p>');
						},
						error: function(textStatus,errorThrown){
						    console.log(textStatus);
						    console.log(errorThrown);
						}
					});
				}

				async function ajoutePara() {
					var ptitre = $('#ptitre').val();
					var contenu = $('#contenu').val();
					
			        $('#paragraphe').empty();
			        $.ajax({
		                url: "AjoutPara.php",
		                method: 'GET',
		                data: "ptitre=" + ptitre+ "&contenu=" + contenu,
						success:async function(response){
							let res=jQuery.parseJSON(response);
							// let res = (response);
							$('#paragraphe').append('<h1>Paragraphe</h1>');
							for (var i in res){
								$('#paragraphe').append('<div><h2>'+res[i]['titre']+'</h2><p>'+res[i]['contenu']+'</p></div>');
							}
						},
						error: function(textStatus,errorThrown){
						    console.log(textStatus);
						    console.log(errorThrown);
						}
					});
				}
			</script>

	</body>
</html>