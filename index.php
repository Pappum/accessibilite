<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Web Agency | Agence web à Strasbourg</title>
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
                    <button onclick="window.location.hash='#owl-demo'" tabindex="<?php echo $i += 1; ?>" accesskey="c">Aller au contenu</button>
                    <button onclick="window.location.hash='#menu'" tabindex="<?php echo $i += 1; ?>" accesskey="m">Aller au menu</button>
                    <button onclick="window.location.hash='#recherche'" tabindex="<?php echo $i += 1; ?>" accesskey="r">Aller à la recherche</button>
                </div>
                
                
                <h1>Web Agency</h1>
                <nav id="navigation" role="navigation" aria-label="Menu principal">
                    <ul role="menubar" aria-hidden="false" class="nav-menu" id="menu">
                        <li role="menuitem"><a class="active" href="#" title="Accueil (rubrique courante)" tabindex="<?php echo $i += 1; ?>">Accueil</a></li>

                        <li role="menuitem" aria-haspopup="true" class="nav-item">
                            <a href="#" title="Fonctionnalités" tabindex="<?php echo $i += 1; ?>">Fonctionnalités</a>
                            <div class="sub-nav">
                                <ul class="sub-nav-group" aria-hidden="true">
                                    <li><a href="video.php" title="Vidéo" tabindex="<?php echo $i += 1; ?>">Vidéo</a></li>
                                    <li><a href="calendrier.php" title="Calendrier" tabindex="<?php echo $i += 1; ?>">Calendrier</a></li>
                                    <li><a href="tableau.php" title="Tableau" tabindex="<?php echo $i += 1; ?>">Tableau</a></li>
                                </ul>
                            </div>
                        </li>
                        
                        <li role="menuitem" aria-haspopup="true" class="nav-item">
                            <a href="#" title="Nos services" tabindex="<?php echo $i += 1; ?>">Nos services</a>
                            <div class="sub-nav">
                                <ul class="sub-nav-group" aria-hidden="true">
                                    <li><a href="#" title="Site internet" tabindex="<?php echo $i += 1; ?>">Site internet</a></li>
                                    <li><a href="#" title="Webdesign" tabindex="<?php echo $i += 1; ?>">Webdesign</a></li>
                                    <li><a href="#" title="Solution mobile" tabindex="<?php echo $i += 1; ?>">Solution mobile</a></li>
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
                <section id="slider">
                    <div id="owl-demo" class="owl-carousel owl-theme" tabindex="<?php echo $i += 1; ?>">
    					<div class="item"><img src="assets/images/fullimage1.jpg" index="-1" alt="The Last of us"></div>
    					<div class="item"><img src="assets/images/fullimage2.jpg" index="0" alt="GTA V"></div>
    					<div class="item"><img src="assets/images/fullimage3.jpg" index="1" alt="Mirror Edge"></div>
				    </div>
                </section>
                        
			     <section id="service">
                    <div class="wrapper">
                        <h2 class="txtcenter">Nos services</h2>
                        <hr>
                        <div class="grid-3-small-1 txtcenter">
                            <div>
                                <a href="#" title="Site internet" tabindex="<?php echo $i += 1; ?>"><span class="icone"><img src="assets/images/web.png" alt="Site internet"></span></a>
                                <h3>Site internet</h3>
                                <p>Création de site sur mesure, à votre image et adapté à vos objectifs. Nous donnons vie à vos projets et nous vous accompagnons au quotidien dans la gestion de votre site.</p>
                                <a href="#" tabindex="<?php echo $i += 1; ?>" title="En savoir plus sur les sites internet" class="bouton">En savoir plus</a>
                            </div>
                            <div>
                                <a href="#" tabindex="<?php echo $i += 1; ?>" title="Webdesign"><span class="icone"><img src="assets/images/webdesign.png" alt="Webdesign"></span></a>
                                <h3>Webdesign</h3>
                                <p>De la création du logo à l'élaboration de la charte graphique, nous assurerons la conception graphique de votre site Internet ou de votre application web dans sa totalité.</p>
                                <a href="#" tabindex="<?php echo $i += 1; ?>" title="En savoir plus sur le Webdesign" class="bouton">En savoir plus</a>
                            </div>
                            <div>
                                <a href="#" tabindex="<?php echo $i += 1; ?>" title="Solution mobile"><span class="icone"><img src="assets/images/mobile.png" alt="Solution mobile"></span></a>
                                <h3>Solution mobile</h3>
                                <p>Pour offrir toujours plus de performance et valeur ajoutée à ses clients, Web Agency maitrise la dernière technologie en matière de web mobile : le responsive design.</p>
                                <a href="#" tabindex="<?php echo $i += 1; ?>" title="En savoir plus sur les solutions mobiles" class="bouton">En savoir plus</a>
                            </div>
                        </div>
                    </div>
			     </section>
                        
			    <section id="membres">
                    <div class="wrapper">
                        <h3 class="txtcenter">A propos de Web Agency</h2>
                        <hr>
                        <div class="txtcenter">
                            <p>Agence de web globale créée en 2010, Web Agency vous assure une cohérence stratégique et créative pour chacun de vos projets de communication : Site internet, identité visuelle, publicité, référencement. Nous vous apportons des idées porteuses de valeurs et capables de créer la différence. Et parce que nous sommes une agence à taille humaine, la créativité, la passion et notre personnalité sont nos forces. </p>
                        </div>
                    </div>
                </section>
		</main>

		<footer role="contentinfo">
            <div class="wrapper">
            	<div class="grid-4-small-1">
            		<div>
            			<ul>
                            <span>Menu</span>
                            <li><a href="#" title="Fonctionnalités" tabindex="<?php echo $i += 1; ?>">Fonctionnalités</a></li>
                            <li><a href="#" title="Nos services" tabindex="<?php echo $i += 1; ?>">Nos services</a></li>
                            <li><a href="#" title="Contact" tabindex="<?php echo $i += 1; ?>">Contact</a></li>
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
            			<p>© Web Agency - <a href="#" title="Mentions légales">Mentions légales</a></p>
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