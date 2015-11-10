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
                    <button onclick="window.location.hash='#owl-demo'" tabindex="<?php echo $i += 1; ?>" accesskey="c">Aller au contenu</button>
                    <button onclick="window.location.hash='#menu'" tabindex="<?php echo $i += 1; ?>" accesskey="m">Aller au menu</button>
                    <button onclick="window.location.hash='#recherche'" tabindex="<?php echo $i += 1; ?>" accesskey="r">Aller à la recherche</button>
                </div>
                
                
                <h1>Web Agency</h1>
                <nav id="navigation" role="navigation" aria-label="Menu principal">
                    <ul role="menubar" aria-hidden="false" class="nav-menu" id="menu">
                        <li role="menuitem"><a href="index.php" title="Accueil" tabindex="<?php echo $i += 1; ?>">Accueil</a></li>

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

                        <li role="menuitem"><a href="#" class="active" title="Contact (rubrique courante)" tabindex="<?php echo $i += 1; ?>">Contact</a></li>
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
                    <li><a href="index.php" tabindex="<?php echo $i += 1; ?>">Accueil</a></li>
                    <li class="current">Tableau</li>
                </ul>
            </nav>
			<section id="formulaire" class="wrapper">
                <h2>Contact</h2>
				<form>
                    <div>
                        <label for="nom">
                            Votre nom <span class="obligatoire">*</span><br/>
                            <span class="form-error error-nom">Veuillez renseigner votre nom</span>
                        </label>
                        <input type="text" id="nom" name="nom" required aria-invalid="true" tabindex="<?php echo $i += 1; ?>" />
                    </div>
                    <div>
                        <label for="prenom">
                            Votre prénom <span class="obligatoire">*</span><br/>
                            <span class="form-error error-prenom">Veuillez renseigner votre prénom</span>
                        </label>
                        <input type="text" id="prenom" name="prenom" required aria-invalid="true" tabindex="<?php echo $i += 1; ?>" />
                    </div>
                    <div>
                        <label for="mail">
                            Votre adresse mail <span class="obligatoire">*</span><br/>
                            <span class="form-error error-mail">Veuillez renseigner votre adresse mail</span>
                        </label>
                        <input type="mail" id="mail" name="mail" required aria-invalid="true" tabindex="<?php echo $i += 1; ?>" />
                    </div>
                    <div>
                        <label for="tel">
                            Votre téléphone <span c error-nomlass="obligatoire">*</span><br/>
                            <span class="form-error error-tel">Veuillez renseigner votre téléphone</span>
                        </label>
                        <input type="tel" id="tel" name="tel" required aria-invalid="true" tabindex="<?php echo $i += 1; ?>" />
                    </div>
                    <div>
                        <label for="sujet">
                            Sujet de votre message <span class="obligatoire">*</span><br/>
                            <span class="form-error error-sujet">Veuillez renseigner le sujet de votre message</span>
                        </label>
                        <input type="text" id="sujet" name="sujet" required aria-invalid="true" tabindex="<?php echo $i += 1; ?>" />
                    </div>
                    <div>
                        <label for="message">
                            Votre message <span class="obligatoire">*</span><br/>
                            <span class="form-error error-message">Veuillez remplir votre message</span>
                        </label>
                        <textarea id="message" name="message" required aria-invalid="true" tabindex="<?php echo $i += 1; ?>"></textarea>
                    </div>
                    <div>
                        <input tabindex="<?php echo $i += 1; ?>" type="submit" value="Envoyer" onclick="if(envoyer()){submit();}"/>
                        <input tabindex="<?php echo $i += 1; ?>" type="reset" value="Annuler" />
                    </div>
				</form>
			</section>
		</main>

		<footer role="contentinfo">
            <div class="wrapper">
            	<div class="grid-4-medium-2">
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
		<script src="assets/js/form.js"></script>
		
	</body>
</html>