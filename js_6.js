$('document').ready(function(){

	$(".static-page-list li").on("click",function(){
		$(this).find(".static-section-content").toggle(400);
		$(this).find(".open-section").toggle();
		$(this).find(".close-section").toggle();
	});
	
	//---for FAQ
	$(".faq-static-page-list li").on("click",function(){
		$(this).toggleClass('dark-back');
		$(this).find(".faq-static-section-content").toggleClass('dark-back');
		$(this).find(".faq-static-section-content").toggle(400);
		$(this).find(".ui-icon-plus").toggle();
		$(this).find(".ui-icon-minus").toggle();
	});
	
	//'---for policy
	$(".infopage-list li a").click(function() {
		var aid=$(this).attr("href");
		
		$('html, #mainContainer').animate({
			scrollTop: $(aid).offset().top-165
		}, 500);
	});
});