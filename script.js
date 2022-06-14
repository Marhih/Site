$(function(){
	$('nav.mobile').click(function(){
		var listamenu = $('nav.mobile ul');
		if(listamenu.is(':hidden') == true){
			var icone = $('.botao-menu-mobile').find('i');
			icone.removeClass('fa-solid fa-bars');
			icone.addClass('fa-solid fa-xmark');
			listamenu.fadeIn();
		}
		else{
			var icone = $('.botao-menu-mobile i');
			icone.removeClass('fa-solid fa-xmark');
			icone.addClass('fa-solid fa-bars');
			listamenu.fadeOut();
		}
	})
})