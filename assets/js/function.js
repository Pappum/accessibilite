$(document).ready(function() {

    // Div evitement
    $("#evitement button:first-child").click(function(){
        $("#contenu").focus();
    });
    $("#evitement button:nth-child(2)").click(function(){
        $("#menu li:first-child a").focus();
    });
    $("#evitement button:nth-child(3)").click(function(){
        $("#recherche input:first-child").focus();
    });
    
    // Slider
	$("#owl-demo").owlCarousel({
 
        navigation : false,
		autoPlay: 3000,
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem: true
 
	});
    
    $('.owl-controls').append('<div class="owl-buttons"><a href="#" tabindex="16" class="owl-prev">Précédent</a><a href="#" tabindex="16" class="owl-next">Suivant</a></div>');
    
    $("#navigation").accessibleMegaMenu({
        /* prefix for generated unique id attributes, which are required 
           to indicate aria-owns, aria-controls and aria-labelledby */
        uuidPrefix: "accessible-megamenu",

        /* css class used to define the megamenu styling */
        menuClass: "nav-menu",

        /* css class for a top-level navigation item in the megamenu */
        topNavItemClass: "nav-item",

        /* css class for a megamenu panel */
        panelClass: "sub-nav",

        /* css class for a group of items within a megamenu panel */
        panelGroupClass: "sub-nav-group",

        /* css class for the hover state */
        hoverClass: "hover",

        /* css class for the focus state */
        focusClass: "focus",

        /* css class for the open state */
        openClass: "open"
    });
    
    jQuery(document.documentElement).keyup(function (event) {    

        var owl = jQuery("#owl-demo");

        if ($("#owl-demo").is(":focus")) {
            if (event.keyCode == 37) {
                owl.trigger('owl.prev');
            } else if (event.keyCode == 39) {
                owl.trigger('owl.next');
            }
        }
        
        if ($(".owl-next").is(":focus")) {
            if (event.keyCode == 37) {
                $(".owl-prev").focus();
            } 
        }
        
        if ($(".owl-prev").is(":focus")) {
            if (event.keyCode == 39) {
                $(".owl-next").focus();
            } 
        }

        $(".owl-next").click(function () {
            owl.trigger('owl.next');
        });

        $(".owl-prev").click(function () {
            owl.trigger('owl.prev');
        });

    });
        
});