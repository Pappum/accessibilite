<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Vidéo | Agence web à Strasbourg</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Owl Carousel -->
		<link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
		<link rel="stylesheet" href="assets/owl-carousel/owl.transitions.css">
		
		<!-- Styles -->
		<link rel="stylesheet" href="assets/css/knacss-unminified.css">
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/px-video.css" />
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
                    <button onclick="window.location.hash='#video'" tabindex="<?php echo $i += 1; ?>" accesskey="c">Aller au contenu</button>
                    <button onclick="window.location.hash='#menu'" tabindex="<?php echo $i += 1; ?>" accesskey="m">Aller au menu</button>
                    <button onclick="window.location.hash='#recherche'" tabindex="<?php echo $i += 1; ?>" accesskey="r">Aller à la recherche</button>
                </div>
                
                
                <h1>Web Agency</h1>
                <nav id="navigation" role="navigation" aria-label="Menu principal">
                    <ul role="menubar" aria-hidden="false" class="nav-menu" id="menu">
                        <li role="menuitem"><a href="index.php" title="Accueil" tabindex="<?php echo $i += 1; ?>">Accueil</a></li>

                        <li role="menuitem" aria-haspopup="true" class="nav-item">
                            <a href="#" class="active" title="Fonctionnalités" tabindex="<?php echo $i += 1; ?>">Fonctionnalités</a>
                            <div class="sub-nav">
                                <ul class="sub-nav-group" aria-hidden="true">
                                    <li><a class="active" href="#" title="Vidéo (rubrique courante)" tabindex="<?php echo $i += 1; ?>">Vidéo</a></li>
                                    <li><a href="calendrier.php" title="Calendrier" tabindex="<?php echo $i += 1; ?>">Calendrier</a></li>
                                    <li><a href="tableau.php" title="Tableau" tabindex="<?php echo $i += 1; ?>">Tableau</a></li>
                                </ul>
                            </div>
                        </li>
                        
                        <li role="menuitem" aria-haspopup="true" class="nav-item">
                            <a href="#" title="Nos services" tabindex="<?php echo $i += 1; ?>">Nos services</a>
                            <div class="sub-nav">
                                <ul class="sub-nav-group" aria-hidden="true">
                                    <li><a href="site.php" title="Site internet" tabindex="<?php echo $i += 1; ?>">Site internet</a></li>
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
		    <section>
            <nav role="navigation" aria-label="Fil d'Ariane" id="fil">
                <ul class="wrapper">
                    <li>Accueil</li>
                    <li class="current">Vidéo</li>
                </ul>
            </nav>
            <div class="wrapper">
                <div class="px-video-container" id="video" tabindex="<?php echo $i += 1; ?>">
                    <h2>Vidéo accessible sous-titrées</h2>
                    <div class="px-video-img-captions-container">
                        <div class="px-video-captions hide"></div>
                        <video width="640" height="360" poster="assets/images/poster.jpg" controls>
                            <!-- Lien vidéo -->
                            <source src="assets/media/video-web.mp4" type="video/mp4" />
                            <source src="" type="video/webm" />

                            <!-- Sous titre -->
                            <track kind="subtitles" label="Sous-titre Anglais" src="assets/media/sous_titres_en.vtt" srclang="en" default />

                            <!-- Vidéo support IE -->
                            <div>
                                <a href="assets/media/video-web.mp4">
                                    <img src="assets/images/poster.jpg" width="640" height="360" alt="Télécharger la vidéo" />
                                </a>
                            </div>
                        </video>
                    </div>
                    <div class="px-video-controls"></div>
                </div>
            </div>
		    </section>
        </main>

		<footer role="contentinfo">
            <div class="wrapper">
            	<div class="grid-4-medium-2">
            		<div>
            			<ul>
                            <span>Menu</span>
                            <li><a href="#" title="Fonctionnalités">Fonctionnalités</a></li>
                            <li><a href="#" title="Nos services">Nos services</a></li>
                            <li><a href="#" title="Contact">Contact</a></li>
						</ul>
            		</div>
            		<div>
            		    <span>Contact</span>
            		    <p>03 88 36 20 43<br>2 rue de Strasbourg<br>67500 Haguenau</p>
            		</div>
            		<div>
            		    <span>Réseaux sociaux</span>
            		    <p>
            		        <a href="http://www.facebook.com" title="Lien page Facebook"><img src="assets/images/fb.png" alt="Logo Facebook"></a>
            		        <a href="http://www.twitter.com" title="Lien page Twitter"><img src="assets/images/tw.png" alt="Logo Twitter"></a>
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
        
        <script src="assets/js/px-video.js"></script>

        <script>

        new InitPxVideo({
            "videoId": "video",
            "captionsOnDefault": true,
            "seekInterval": 20,
            "videoTitle": "Présentation",
            "debug": true
        });

        </script>
	</body>
</html>