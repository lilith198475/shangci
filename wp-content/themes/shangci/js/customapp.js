
  $(document).ready(function() {		 
	 // browser window scroll (in pixels) after which the "back to top" link is shown
	     var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 400,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});
 
		   //Slider
			$("#content-slider").lightSlider({
                loop:true,
                keyPress:true
            });
			
		   //Gallery	
            $('#image-gallery').lightSlider({
                gallery:true,
                item:1,
                thumbItem:9,
                slideMargin: 0,
                speed:500,
                loop:true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }  
            });
			
		//Multiple choice dropdown menu
			
			$('#ms').change(function() {
				
			}).multipleSelect({
				width: '100%'
			});
			
			$('#ms2').change(function() {
				
			}).multipleSelect({
				width: '100%'
			});
			
			$('#ms3').change(function() {
			
			}).multipleSelect({
				width: '100%'
			});
			
			$('#ms4').change(function() {
				
			}).multipleSelect({
				width: '100%'
			});
			
			$('#ms5').change(function() {
				
			}).multipleSelect({
				width: '100%'
			});
		});
		
		$('.lightimg').click(function(){
			var src = $(this).attr("src");
			console.log(src);
			$('.modal-body img').attr("src",src);
			$('#myModal').modal({show:true});
		});
		
		$('.magimg').click(function(){
			
			$(this).magnify();
		});
		
		$('.open-more-filter').click(function()
		{ 
			$(this).text(function(i,old){
				return old=='+' ?  '-' : '+';
			});
		});
			
			
		$('.more-filter').click(function(event){
					event.preventDefault();
		});
		
		
		$('.glyph-switch').click(function(event){
					event.preventDefault();
					var $glphy = $(this).children("i");
					$glphy.toggleClass(function(){
						if ($(this).hasClass("glyphicon-triangle-top")){
							$(this).removeClass("glyphicon-triangle-top");
							return "glyphicon-triangle-bottom";
						}else{
							console.log("no");
							$(this).removeClass("glyphicon-triangle-bottom");
							return "glyphicon-triangle-top";	
						}
		});
			   	
				
});

$(".report iframe").each(function(){
	$(this).addClass("embed-responsive-item");
	 if($(this).parent().is("p") ){
		$(this).unwrap();
		$(this).wrap("<div class='embed-responsive embed-responsive-4by3'></div>") 
	 }
	 

});
//$('#ms').val(["21", "22"]);
 


		
		
		