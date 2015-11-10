<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Web Agency | Agence web à Haguenau</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Owl Carousel -->
		<link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
		<link rel="stylesheet" href="assets/owl-carousel/owl.transitions.css">
		
		<!-- Styles -->
		<link rel="stylesheet" href="assets/css/knacss-unminified.css">
		<link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        
	</head>
	<body>
	
	<?php 
        // Init variable tabindex
        $tb = 0;
    ?>
		<header role="banner">
           <div class="wrapper">
                
                <!-- NE MARCHE PAS 
                <ul id="evitement">
                   <li><a id="test" href="#contenu" tabindex="1" accesskey="c">Aller au contenu</a></li>
                   <li><a href="#menu" tabindex="2" accesskey="m">Aller au menu</a></li> 
                   <li><a href="#recherche" tabindex="3" accesskey="r">Aller à la recherche</a></li>
                </ul> -->
                
                <!-- Autre solution -->
                <div id="evitement">
                    <button onclick="window.location.hash='#content'" tabindex="<?php echo $tb += 1; ?>" accesskey="c">Aller au contenu</button>
                    <button onclick="window.location.hash='#menu'" tabindex="<?php echo $tb += 1; ?>" accesskey="m">Aller au menu</button>
                    <button onclick="window.location.hash='#recherche'" tabindex="<?php echo $tb += 1; ?>" accesskey="r">Aller à la recherche</button>
                </div>
                                
                <h1>Web Agency</h1>
                <nav id="navigation" role="navigation" aria-label="Menu principal">
                    <ul role="menubar" aria-hidden="false" class="nav-menu" id="menu">
                        <li role="menuitem"><a href="index.php" title="Accueil" tabindex="<?php echo $tb += 1; ?>">Accueil</a></li>

                        <li role="menuitem" aria-haspopup="true" class="nav-item">
                            <a href="#" class="active" title="Fonctionnalités" tabindex="<?php echo $tb += 1; ?>">Fonctionnalités</a>
                            <div class="sub-nav">
                                <ul class="sub-nav-group" aria-hidden="true">
                                    <li><a href="video.php" title="Vidéo" tabindex="<?php echo $tb += 1; ?>">Vidéo</a></li>
                                    <li><a href="calendrier.php" title="Calendrier" tabindex="<?php echo $tb += 1; ?>">Calendrier</a></li>
                                    <li><a href="#" class="active" title="Tableau (rubrique courante)" tabindex="<?php echo $tb += 1; ?>">Tableau</a></li>
                                </ul>
                            </div>
                        </li>
                        
                        <li role="menuitem" aria-haspopup="true" class="nav-item">
                            <a href="#" title="Nos services" tabindex="<?php echo $tb += 1; ?>">Nos services</a>
                            <div class="sub-nav">
                                <ul class="sub-nav-group" aria-hidden="true">
                                    <li><a href="#" title="Site internet" tabindex="<?php echo $tb += 1; ?>">Site internet</a></li>
                                    <li><a href="#" title="Webdesign" tabindex="<?php echo $tb += 1; ?>">Webdesign</a></li>
                                    <li><a href="#" title="Solution mobile" tabindex="<?php echo $tb += 1; ?>">Solution mobile</a></li>
                                </ul>
                            </div>
                        </li>

                        <li role="menuitem"><a href="contact.php" title="Contact" tabindex="<?php echo $tb += 1; ?>">Contact</a></li>
                    </ul>

                    <div id="recherche" role="search">
                        <form>
                            <input tabindex="<?php echo $tb += 1; ?>" type="text" placeholder="Rechercher" title="Recherche par mots-clés" />
                            <input tabindex="<?php echo $tb += 1; ?>" type="submit" value="Ok" />
                        </form>
                    </div>
                </nav>
            </div>
		</header>

		<main id="contenu" role="main">
            <nav role="navigation" aria-label="Fil d'Ariane" id="fil">
                <ul class="wrapper">
                    <li><a href="index.php" title="Accueil" tabindex="<?php echo $tb += 1; ?>">Accueil</a></li>
                    <li class="current">Tableau</li>
                </ul>
            </nav>
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
				<section id="tableau" class="wrapper">
					<a id="content" href="tableau-liste.php#prec" tabindex="<?php echo $tb += 1; ?>">Afficher le tableau sous forme de liste</a>

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
										<td tabindex="'.($tb += 1).'" contenteditable="true" headers="l1c2 l'.($i+1).'c1" name="chrome">'.$data['chrome'].'</td>
										<td tabindex="'.($tb += 1).'" contenteditable="true" headers="l1c3 l'.($i+1).'c1" name="firefox">'.$data['firefox'].'</td>
										<td tabindex="'.($tb += 1).'" contenteditable="true" headers="l1c4 l'.($i+1).'c1" name="ie">'.$data['ie'].'</td>
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
					
					<div id="results"></div>
					
					<?php 
					
                    if(isset($_GET['return']) && $_GET['return'] == 'true'){
                        echo('<a href="#" id="sheh" tabindex="'.($tb += 1).'">Page tableau</a>');
                    }
					
					?>
				</section>
		</main>

		<footer role="contentinfo">
            <div class="wrapper">
            	<div class="grid-4-medium-2">
            		<div>
            			<ul>
                            <span>Menu</span>
                            <li><a href="#" title="Fonctionnalités" tabindex="<?php echo $tb += 1; ?>">Fonctionnalités</a></li>
                            <li><a href="#" title="Nos services" tabindex="<?php echo $tb += 1; ?>">Nos services</a></li>
                            <li><a href="#" title="Contact" tabindex="<?php echo $tb += 1; ?>">Contact</a></li>
						</ul>
            		</div>
            		<div>
            		    <span>Contact</span>
            		    <p>03 88 36 20 43<br>2 rue de Strasbourg<br>67500 Haguenau</p>
            		</div>
            		<div>
            		    <span>Réseaux sociaux</span>
            		    <p>
            		        <a href="http://www.facebook.com" title="Lien page Facebook" tabindex="<?php echo $tb += 1; ?>"><img src="assets/images/fb.png" alt="Logo Facebook"></a>
            		        <a href="http://www.twitter.com" title="Lien page Twitter" tabindex="<?php echo $tb += 1; ?>"><img src="assets/images/tw.png" alt="Logo Twitter"></a>
            		    </p>
            		</div>
            		<div>
            			<p>© Web Agency - <a tabindex="<?php echo $i += 1; ?>" href="#" title="Mentions légales">Mentions légales</a></p>
            			<p><a tabindex="<?php echo $i += 1; ?>" href="accessibilite.php" title="Accessibilité">Accessibilité</a></p>
            		</div>
            	</div>
            </div>
		</footer>


		<!-- Import Jquery -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>
		<script src="assets/js/jquery-accessibleMegaMenu.js"></script>

		<script src="assets/owl-carousel/owl.carousel.js"></script>
		<script src="assets/js/function.js"></script>

		<script> 
			$(document).ready(function() {
				$("td").focus(function() { 
					if($(this).attr("contenteditable") == "true") {    
						// le"id" du td doit contenir l'id de la BDD 
						// le "name" doit contenir le nom du champ à modifier
				 
						var contenu_avant = $(this).text(); 
						var id_bdd = $(this).parent().attr("id"); 
						var champ_bdd = $(this).attr("name"); 
                        							 
						$(this).blur(function() { 
							var contenu_apres = $(this).text(); 
					 
							if (contenu_avant != contenu_apres) {
								parametre = 'id='+id_bdd+'&champ='+champ_bdd+'&contenu='+contenu_apres; 
								$.ajax({ 
									url: "updatedynamique.php",  
									type: "POST",  
									data: parametre,  
									success: function(html) {  
                                        contenu_avant = contenu_apres; 
                                        $("#results").html("Mise à jour de la cellule : " +champ_bdd+ " " +id_bdd);
									} 
								}); 
							}
							
						});
					};
				}); 
			});
		</script> 

	</body>
</html>