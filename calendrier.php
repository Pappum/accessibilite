<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Calendrier | Agence web à Strasbourg</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Owl Carousel -->
		<link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
		<link rel="stylesheet" href="assets/owl-carousel/owl.transitions.css">
		
		<!-- Styles -->
		<link rel="stylesheet" href="assets/css/knacss-unminified.css">
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/calendrier.css">
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
                    <button onclick="window.location.hash='#date'" tabindex="<?php echo $i += 1; ?>" accesskey="c">Aller au contenu</button>
                    <button onclick="window.location.hash='#menu'" tabindex="<?php echo $i += 1; ?>" accesskey="m">Aller au menu</button>
                    <button onclick="window.location.hash='#recherche'" tabindex="<?php echo $i += 1; ?>" accesskey="r">Aller à la recherche</button>
                </div>
                
                
                <h1>Web Agency</h1>
                <nav id="navigation" role="navigation" aria-label="Menu principal">
                    <ul role="menubar" aria-hidden="false" class="nav-menu" id="menu">
                        <li role="menuitem"><a href="index.php" title="Accueil" tabindex="<?php echo $i += 1; ?>">Accueil</a></li>

                        <li role="menuitem" aria-haspopup="true" class="nav-item">
                            <a href="#" title="Fonctionnalités" class="active" tabindex="<?php echo $i += 1; ?>">Fonctionnalités</a>
                            <div class="sub-nav">
                                <ul class="sub-nav-group" aria-hidden="true">
                                    <li><a href="video.php" title="Vidéo" tabindex="<?php echo $i += 1; ?>">Vidéo</a></li>
                                    <li><a href="#" class="active" title="Calendrier (rubrique courante)" tabindex="<?php echo $i += 1; ?>">Calendrier</a></li>
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
		    <section>
            <nav role="navigation" aria-label="Fil d'Ariane" id="fil">
                <ul class="wrapper">
                    <li>Accueil</li>
                    <li class="current">Calendrier</li>
                </ul>
            </nav>
            <div class="wrapper">
                <div id="calendrier" role="application">
                   <h2>Calendrier accessible et naviguable avec les flèches du clavier</h2>
                   <label id="date_label" for="date">Date</label>:
                   <input id="date" type="text" tabindex="<?php echo $i += 1; ?>"/>
                   <button id="bn_date" tabindex="<?php echo $i += 1; ?>">Choisir la date...</button> 
                   <div id="dp1" class="datepicker" aria-hidden="true">
                      <div id="month-wrap">
                         <div id="bn_prev" role="button" aria-labelledby="bn_prev-label" tabindex="0"><img class="bn_img" src="assets/images/prev.png" alt="<<"/></div>
                         <div id="month" role="heading" aria-live="assertive" aria-atomic="true">Novembre 2015</div>
                         <div id="bn_next" role="button" aria-labelledby="bn_next-label" tabindex="0"><img class="bn_img" src="assets/images/next.png" alt=">>"/></div>
                      </div>
                      <table id="cal" role="grid" aria-activedescendant="errMsg" aria-labelledby="month" tabindex="0">
                         <thead>
                            <tr id="weekdays">
                               <th id="Monday"><abbr title="Lundi">Lu</abbr></th>
                               <th id="Tuesday"><abbr title="Mardi">Ma</abbr></th>
                               <th id="Wednesday"><abbr title="Mercredi">Me</abbr></th>
                               <th id="Thursday"><abbr title="Jeudi">Je</abbr></th>
                               <th id="Friday"><abbr title="Vendredi">Ve</abbr></th>
                               <th id="Saturday"><abbr title="Samedi">Sa</abbr></th>
                               <th id="Sunday"><abbr title="Dimanche">Di</abbr></th>
                            </tr>
                         </thead>
                         <tbody>
                            <tr><td id="errMsg" colspan="7">Javascript doit être activité</td></tr>
                         </tbody>
                      </table>
                      <div id="bn_prev-label" class="offscreen">Mois précédent</div>
                      <div id="bn_next-label" class="offscreen">Mois suivant</div>
                   </div>
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
            		        <a href="http://www.facebook.com" title="Lien page Facebook"><img src="assets/images/fb.png" alt="Logo Facebook"></a>
            		        <a href="http://www.twitter.com" title="Lien page Twitter"><img src="assets/images/tw.png" alt="Logo Twitter"></a>
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
        <script src="assets/js/calendrier.js"></script>

        
	</body>
</html>