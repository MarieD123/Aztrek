$(document).ready(function () {

	const bpNav = 992;
    const burger = $('.nav-toggle');
    const nav = $(burger.data("target"));

    //Faire fonctionner le menu responsive uniquement en mobile (bp<768)
    function setMenu() {

        // si la taille de la fênetre est inférieur au breakpoint et que "resp-nav" n'existe pas déjà, on le créé
        if ($(window).width() < bpNav && !$('.resp-nav').length) {
            //création d'une seconde nav à la fin du body pour le responsive
            $('body').prepend('<nav class="resp-nav"></nav>');
            //création d'un contenu html dans "resp-nav" et on y met une copie du contenu de "main-nav"
            $('.resp-nav').html(nav.html());

            //Sous menu responsive
            $(".resp-nav .has-sublist > a").click(function () {
                $(".has-sublist ul").slideUp();
                $(this).next().stop(true).slideToggle();
                $(".has-sublist > a").not(this).removeClass('expanded');
                $(this).toggleClass('expanded');
            });
		}

        //suppression de la resp nav sur les grands écrans (>bp)
        if ($(window).width() >= bpNav && $('.resp-nav').length) {
            $('.resp-nav').remove();
        }

    }

    //initialisation de la fonction au chargement de la page et lorsqu'on redimensionne la fenêtre
    setMenu();
    $(window).resize(setMenu);



    //Lorsqu'on clic sur le burger, le menu apparait grâce à un nouvelle class (qui lui indique left:0 au lieu de left=-100% du départ)
    burger.click(function () {
        $('body').toggleClass("nav-expanded");
    });

	//////////////////////////////////////////////////////

	//Nav changement de background

	function setHeaderBg() {
		var headerHeight=document.getElementById("top").offsetHeight;
		var header = $(".container-fixed");
		var scroll = $(window).scrollTop();

		if (scroll >= headerHeight) {
			header.removeClass('bg-transparent').addClass("bg-white");
		} else {
			header.removeClass("bg-white").addClass('bg-transparent');
		}
	}
	setHeaderBg();
	$(window).scroll(function () {
		setHeaderBg();
	});
	$(window).resize(function () {
		setHeaderBg();
	});

	//////////////////////////////////////////////////////

	//Carousel de la section "paroles de voyageurs"

	$(".owl-carousel").owlCarousel({
		loop: true,
		margin: 10,
		items: 1,
		nav: true
    });
    
    ////////////////////////////////////////////////////////

    //Filtre liste séjours
    $(".item h3").click(function () {
        //Permet de refermer tous les autres sous menus
        $(".sub-list").slideUp();
        //ouvre le sous menu sur lequel on clic
        //"next()" permet de cibler l'élément juste après le h3, "stop(true)" permet d'éviter que la file d'attente des animations soit enregistrée (lorsqu'on clic plein de fois sur le h3)
        $(this).next().stop(true).slideToggle();
        //faire pivoter le triangle lorsqu'on ouvre le sous menu
        $(".item h3").not(this).removeClass('expanded');
        $(this).toggleClass('expanded');
    });
});