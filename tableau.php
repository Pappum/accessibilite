<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Accueil | Web Agency</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Owl Carousel -->
		<link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
		<link rel="stylesheet" href="assets/owl-carousel/owl.transitions.css">
		
		<!-- Styles -->
		<link rel="stylesheet" href="assets/css/knacss-unminified.css">
		<link rel="stylesheet" href="assets/css/style.css">
		
	</head>
	<body>

		<header role="banner">
			<ul id="evitement">
			   <li><a href="#contenu" tabindex="1">Aller au contenu</a></li>
			   <li><a href="#menu" tabindex="2">Aller au menu</a></li> 
			   <li><a href="#recherche" tabindex="3">Aller à la recherche</a></li>
			</ul>
			<nav id="navigation" role="navigation" aria-label="Menu principal" class="wrapper">
				<ul role="menubar" aria-hidden="false" class="nav-menu" id="menu">
					<li role="menuitem"><a href="index.html" title="Accueil (rubrique courante)" tabindex="4">Accueil</a></li>
					
					<li role="menuitem"><a href="about.html" title="" tabindex="5" class="active">A propos</a></li>
					
					<li role="menuitem" aria-haspopup="true" class="nav-item">
						<a href="services.html" title="Nos services" tabindex="6">Nos services</a>
						<div class="sub-nav">
							<ul class="sub-nav-group" aria-hidden="true">
								<li><a href="#">Site internet</a></li>
								<li><a href="#">Webdesign</a></li>
								<li><a href="#">Solution mobile</a></li>
							</ul>
						</div>
					</li>

					<li role="menuitem"><a href="son.html" title="" tabindex="7">Son</a></li>
					
					<li role="menuitem"><a href="contact.html" title="Contact" tabindex="8">Contact</a></li>
				</ul>

				<div id="recherche" role="search">
					<form>
						<input type="text" placeholder="Rechercher" title="Recherche par mots-clés" />
						<input type="submit" value="Ok" />
					</form>
				</div>
			</nav>
		</header>

		<main id="contenu" role="main">
			<section>
				<?php

			// A changer en fonction du serveur
		
			$adresse = 'localhost';
			$user = 'root';
			$password = 'root';
			$base = 'test';
		
			$db = mysqli_connect($adresse, $user, $password, $base) or die(mysqli_connect_error());

			$reqValue = "
					SELECT annee, chrome, firefox, ie
					FROM navigateur
			";
			$rValue = mysqli_query($db, $reqValue) or die(mysqli_connect_error());
		
		?>
			</section>        
				<section id="tableau">
					<a href="tableau-liste.html#liste">Accéder à la liste</a>

					<table summary="Part du marché des navigateurs internet. Par lignes, vous trouverez par année, les parts en pourcentages des principaux navigateurs (Chrome, Firefox, Internet Explorer).">
							<tr>
								<th id="l1c1" scope="col">Année</th>
								<th id="l1c2" scope="col">Chrome</th>
								<th id="l1c3" scope="col">Firefox</th>
								<th id="l1c4" scope="col" abbr="Internet Explorer">IE</th>
							</tr>
							<?php
								// while($data = mysqli_fetch_assoc($rValue)) {
								//     print_r($data);
								//     echo '
								//     <tr>
								//         <th scope="row">'.$data['annee'].'</th>
								//         <td>'.$data['chrome'].'</td>
								//         <td>'.$data['firefox'].'</td>
								//         <td>'.$data['ie'].'</td>
								//     </tr>';
								// }
								for ($i = 1 ; $i <= 2 ; $i++) {
									$data = mysqli_fetch_assoc($rValue);
									echo '
									<tr id="'.$data['annee'].'">
										<th id="l'.($i+1).'c1" headers="l1c1" scope="row">'.$data['annee'].'</th>
										<td contenteditable="true" headers="l1c2 l'.($i+1).'c1" name="chrome">'.$data['chrome'].'</td>
										<td contenteditable="true" headers="l1c3 l'.($i+1).'c1" name="firefox">'.$data['firefox'].'</td>
										<td contenteditable="true" headers="l1c4 l'.($i+1).'c1" name="ie">'.$data['ie'].'</td>
									</tr>';
								}
							?>
							<!-- <tr>
								<th id="l2c1" headers="l1c1" scope="row">2015</th>
								<td id="val1" contenteditable="true" headers="l1c2 l2c1">53,91%</td> 
								<td id="val2" contenteditable="true" headers="l1c3 l2c1">17,83%</td>
								<td id="val3" contenteditable="true" headers="l1c4 l2c1">19,24%</td>
							</tr>
							<tr>
								<th id="l3c1" headers="l1c1" scope="row">2014</th>
								<td id="val4" contenteditable="true" headers="l1c2 l3c1">48,78%</td>
								<td id="val5" contenteditable="true" headers="l1c3 l3c1">19,57%</td>
								<td id="val6" contenteditable="true" headers="l1c4 l3c1">23,19%</td>
							</tr> -->
							<caption>Part du marché des navigateurs internet</caption>
					</table>

					<input type="submit" name="save" value="Sauvegarder" id="save"/>

					<div id="sheh"></div>
				</section>
		</main>

		<footer role="contentinfo">
			<div class="wrapper">
				<ul>
					<li><a href="apropos.html"></a>A propos</li>
					<li><a href="mentions.html"></a>Mentions légales</li>
				</ul>
				<p>© Web Agency</p>
			</div>

			<div id="results"></div>
		</footer>


		<!-- Import Jquery -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>
		<script src="assets/js/jquery-accessibleMegaMenu.js"></script>

		<script src="assets/owl-carousel/owl.carousel.js"></script>
		<script src="assets/js/function.js"></script>

		<script> 
			$(document).ready(function() {
				$("td").click(function() { 
					if($(this).attr("contenteditable") == "true") {    
						// le"id" du td doit contenir l'id de la BDD 
						// le "name" doit contenir le nom du champ à modifier
				 
						var contenu_avant = $(this).text(); 
						var id_bdd = $(this).parent().attr("id"); 
						var champ_bdd = $(this).attr("name"); 
							 
						$(this).blur(function() { 
							var contenu_apres = $(this).text(); 
					 
							if (contenu_avant != contenu_apres && isNaN(contenu_apres) == false) {
								parametre = 'id='+id_bdd+'&champ='+champ_bdd+'&contenu='+contenu_apres; 
								$.ajax({ 
									url: "updatedynamique.php",  
									type: "POST",  
									data: parametre,  
									success: function(html) {  
										alert("Mise à jour effectuée !");
									} 
								}); 
							}
							else {
								alert('Ce n\'est pas un nombre');
							}
						});
					};
				}); 
			});
		</script> 

	</body>
</html>