import { CountUp } from './import/countUp.js';

$(document).ready(function(){
	//Création du carousel
	$(".owl-carousel").owlCarousel({
		loop:true,
		items:3,
		margin:10
	});
	//Evenement pour l'ouverture et la fermeture du menu au click sur la navicon
	$('.navicon').click(function(){
		$(".navicon").toggleClass('open');
		$('.navigation').toggleClass('open');
	});

	//Création d'une zone d'arrêt pour le bouton "Espace Client"
	//Création des potentielles variables utilisés pour la position
	var contactPos,footerPos,scrollPos;
	//Récupération de la hauteur de la fenêtre
	var height=window.innerHeight;
	$('.hero').css({
		height:height,
	});
	//Récupération de la position et la hauteur de la ligne "numRow" de l'index
	let numPos= $('.numRow').position();
	let numH= $('.numRow').height();
	//Fonction pour capturer des nouvelles valeurs de hauteur et de position dans le cas d'un redimensionnement de la fênetre (pour le responsive)
	$(window).resize(function(){
		height=window.innerHeight;
		$('.hero').css({
			height:height,
		});
		numPos= $('.numRow').position();
		numH= $('.numRow').height();
		//Si une zone de contact apparaît dans la page, prendre sa position
		if($('.contactArea').length==1)
			contactPos=$('.contactArea').position();
		//Sinon (cas sans contact) prends la position du footer
		else
			footerPos=$('footer').position();
	})
	//Si zone de contact apparaît dans la page, la prendre comme zone d'arrêt
	if($('.contactArea').length==1){
		contactPos=$('.contactArea').position();
		//Evenement pour detecter le scroll dans la page
		$(document).scroll(function(){
			//Si la différence entre l'arrondie de la position du contact et de la hauteur de la fenêtre est inférieur à la position du scroll, mettre au bouton "Espace client"  la classe "stop"
			if($(document).scrollTop()>=(parseInt(contactPos.top)-height))
				$('.customerArea').addClass('stop');
			//Sinon, enlever la classe "stop"
			else
				$('.customerArea').removeClass('stop');
		})
	}
	//Sinon, prendre le footer comme zone d'arrêt
	else{
		footerPos=$('footer').position();
		//Evenement pour detecter le scroll dans la pag
		$(document).scroll(function(){
			//Si la différence entre l'arrondie de la position du footer et de la hauteur de la fenêtre est inférieur à la position du scroll, mettre au bouton "Espace client" la classe "stop"
			if($(document).scrollTop()>=(parseInt(footerPos.top)-height))
				$('.customerArea').addClass('stop');
			//Sinon, enlever la classe "stop"
			else
				$('.customerArea').removeClass('stop');
		})
	};

	$(document).scroll(function(){
		if($(document).scrollTop()>=(parseInt(numPos.top)+(numH/4)))
		{
			if($('.numRow').hasClass("activate")==false){

				$('.numRow').addClass('activate');

				let first = new CountUp('1st', 23,{
					duration: 3,
				});
				if (!first.error) {
					first.start();
				} else {
				  console.error(first.error);
				}
				let second = new CountUp('2nd', 10000,{
					duration: 3,
					separator: " ",
				});
				if (!second.error) {
					second.start();
				} else {
				  console.error(second.error);
				}
				let third = new CountUp('3rd', 40,{
					duration: 3,
				});
				if (!third.error) {
					third.start();
				} else {
				  console.error(third.error);
				}
			}
		}
	});

	if($('.mailAlert').length == 1)
	{
		var mailAlert = $(".mailAlert");
		var mailAlertBtn = $(".mailAlert button");
		mailAlertBtn.on("click", function(){
			mailAlert.remove();
		});
	}
});