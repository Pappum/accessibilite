//Fonctions pour la vérification des mails

function contientChiffre(chaine) {
	return /[0-9]/g.test(chaine);
}

function contientLettre(chaine) {
	return /[a-z]/ig.test(chaine);
}

// Fonction d'envoi
function envoyer() {
	verifprenom();
	verifnom();
	verifmail();
	veriftelephone();
	verifsujet();
	verifmessage();
	if (verifprenom() && verifnom() && verifmail() && veriftelephone() && verifsujet() && verifmessage()) {
		var confirme = confirm("Confirmez l'envoi de votre message");
		if (confirme == true) {
			return true;
		}
		else {
			return false;
		};
	}
	else {
		alert("Le formulaire n'est pas valide");
	}
}

//Verification du prénom
function verifprenom() {
	var prenom = $('input#prenom');
	if (contientChiffre(prenom.val()) == true || prenom.val() == "") {
		prenom.css('border-color', 'red');
		prenom.parent().find('span.error-prenom').css('display', 'block');
		return false;
	}
	else {
		prenom.css('border-color', 'initial');
		return true;
	}
}

//Vérification du nom
function verifnom() {
	var nom = $('input#nom');
	if (contientChiffre(nom.val()) == true || nom.val() == "") {
		nom.css('border-color', 'red');
		nom.parent().find('span.error-nom').css('display', 'block');
		return false;
	}
	else {
		nom.css('border-color', 'initial');
		return true;
	}
}

//Vérification du mail
function verifmail() {
	var mail = $('input#mail');
	if (mail.val().length < 5 || mail.val().indexOf("@") == -1 ||  mail.val().indexOf(".", mail.val().indexOf("@")) == -1 || mail.val() == "") {
		mail.css('border-color', 'red');
		mail.parent().find('span.error-mail').css('display', 'block');
		return false;
	}
	else {
		mail.css('border-color', 'initial');
		return true;
	}
}

//Vérification du téléphone
function veriftelephone() {
	var tel = $('input#tel');
	if (contientLettre(tel.val()) == true || tel.val() == "") {
		tel.css('border-color', 'red');
		tel.parent().find('span.error-tel').css('display', 'block');
		return false;
	}
	else {
		tel.css('border-color', 'initial');
		return true;
	}
}

//Vérification du mail
function verifsujet() {
	var sujet = $('input#sujet');
	if (sujet.val() == "") {
		sujet.css('border-color', 'red');
		sujet.parent().find('span.error-sujet').css('display', 'block');
		return false;
	}
	else {
		sujet.css('border-color', 'initial');
		return true;
	}
}

//Vérification de la description
function verifmessage() {
	var message = $('textarea');
	if (message.val().length == 0) {
		message.css('border-color', 'red');
		message.parent().find('span.error-message').css('display', 'block');
		return false;
	}
	else {
		message.css('border-color', 'initial');
		return true;
	}
}







