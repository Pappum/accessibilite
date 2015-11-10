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
            $i = 0;
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
                    <button onclick="window.location.hash='#content'" tabindex="<?php echo $i += 1; ?>" accesskey="c">Aller au contenu</button>
                    <button onclick="window.location.hash='#menu'" tabindex="<?php echo $i += 1; ?>" accesskey="m">Aller au menu</button>
                    <button onclick="window.location.hash='#recherche'" tabindex="<?php echo $i += 1; ?>" accesskey="r">Aller à la recherche</button>
                </div>
                
                
                <h1>Web Agency</h1>
                <nav id="navigation" role="navigation" aria-label="Menu principal">
                    <ul role="menubar" aria-hidden="false" class="nav-menu" id="menu">
                        <li role="menuitem"><a href="index.php" title="Accueil" tabindex="<?php echo $i += 1; ?>">Accueil</a></li>

                        <li role="menuitem" aria-haspopup="true" class="nav-item">
                            <a href="video.php" title="Fonctionnalités" tabindex="<?php echo $i += 1; ?>">Fonctionnalités</a>
                            <div class="sub-nav">
                                <ul class="sub-nav-group" aria-hidden="true">
                                    <li><a href="video.php" title="Vidéo" tabindex="<?php echo $i += 1; ?>">Vidéo</a></li>
                                    <li><a href="calendrier.php" title="Calendrier" tabindex="<?php echo $i += 1; ?>">Calendrier</a></li>
                                    <li><a href="tableau.php" title="Tableau" tabindex="<?php echo $i += 1; ?>">Tableau</a></li>
                                </ul>
                            </div>
                        </li>
                        
                        <li role="menuitem" aria-haspopup="true" class="nav-item">
                            <a href="site.php" title="Nos services" tabindex="<?php echo $i += 1; ?>">Nos services</a>
                            <div class="sub-nav">
                                <ul class="sub-nav-group" aria-hidden="true">
                                    <li><a href="site.php" title="Site internet" tabindex="<?php echo $i += 1; ?>">Site internet</a></li>
                                    <li><a href="webdesign.php" title="Webdesign" tabindex="<?php echo $i += 1; ?>">Webdesign</a></li>
                                    <li><a href="mobile.php" title="Solution mobile" tabindex="<?php echo $i += 1; ?>">Solution mobile</a></li>
                                </ul>
                            </div>
                        </li>

                        <li role="menuitem"><a href="contact.php" title="Contact" tabindex="<?php echo $i += 1; ?>">Contact</a></li>
                    </ul>

                    <div id="recherche" role="search">
                        <form>
                            <input tabindex="<?php echo $i += 1; ?>" type="text" placeholder="Rechercher" title="Recherche par mots-clés" />
                            <input tabindex="<?php echo $i += 1; ?>" type="submit" value="Ok" />
                        </form>
                    </div>
                </nav>
            </div>
		</header>

		<main id="contenu" role="main">
            <nav role="navigation" aria-label="Fil d'Ariane" id="fil">
                <ul class="wrapper">
                    <li><a href="index.php" title="Accueil" tabindex="<?php echo $i += 1; ?>">Accueil</a></li>
                    <li class="current">Liste tableau</li>
                </ul>
            </nav>
            <section id="liste-tableau" class="wrapper">
                <p id="liste">Part du marché des navigateurs internet</p>
                
                <?php
                    // A changer en fonction du serveur

                    // Donnée en BDD
                    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
                    $result = $bdd->query('SELECT * FROM navigateur WHERE annee="2015"');
                    $data = $result->fetch(PDO::FETCH_OBJ);

                    $result2 = $bdd->query('SELECT * FROM navigateur WHERE annee="2014"');
                    $data2 = $result2->fetch(PDO::FETCH_OBJ);

                ?>
                
                <ul>
                    <li>2015</li>
                    <ul>
                        <li>Chrome (<?php echo $data->chrome; ?>)</li> 
                        <li>Firefox (<?php echo $data->firefox; ?>)</li>
                        <li>IE (<?php echo $data->ie; ?>)</li>
                    </ul>
                </ul>
                
                <ul>
                    <li>2014</li>
                    <ul>
                        <li>Chrome (<?php echo $data2->chrome; ?>)</li>
                        <li>Firefox (<?php echo $data2->firefox; ?>)</li>
                        <li>IE (<?php echo $data2->ie; ?>)</li>
                    </ul>
                </ul>
                
                <br>
                <a id="prec" href="tableau.php?return=true#sheh" tabindex="<?php echo $i += 1; ?>">Revenir sur la page précédente</a>
			</section>
		</main>

		<footer role="contentinfo">
            <div class="wrapper">
            	<div class="grid-4-medium-2">
            		<div>
            			<ul>
                            <span>Menu</span>
                            <li><a href="video.php" title="Fonctionnalités" tabindex="<?php echo $i += 1; ?>">Fonctionnalités</a></li>
                            <li><a href="site.php" title="Nos services" tabindex="<?php echo $i += 1; ?>">Nos services</a></li>
                            <li><a href="contact.php" title="Contact" tabindex="<?php echo $i += 1; ?>">Contact</a></li>
						</ul>
            		</div>
            		<div>
            		    <span>Contact</span>
            		    <p>03 88 36 20 43<br>2 rue de Strasbourg<br>67500 Haguenau</p>
            		</div>
            		<div>
            		    <span>Réseaux sociaux</span>
            		    <p>
            		        <a href="http://www.facebook.com" title="Lien page Facebook" tabindex="<?php echo $i += 1; ?>"><img src="assets/images/fb.png" alt="Logo Facebook"></a>
            		        <a href="http://www.twitter.com" title="Lien page Twitter" tabindex="<?php echo $i += 1; ?>"><img src="assets/images/tw.png" alt="Logo Twitter"></a>
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


	</body>
</html>