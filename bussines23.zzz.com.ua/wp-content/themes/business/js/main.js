$(function() {

	$(window).on('load', function() {
    	let i = 7;
    	let str = 37;
    	function changeNumber(i) {
    		str = str+i;
  			$('.key-number').text(str);
  			i++;
  			if (str==100) {
				clearTimeout(timer);
			}
		}
		let timer = setInterval(() => changeNumber(i), 2000);	
	});


  

 $(document).ready(function(){
     $('.reviews-slider').slick({
     	autoplay: true,
    	autoplaySpeed: 5000,
     });

     $(".reviews-slider").on('afterChange', function(event, slick, currentSlide){
     	$("#numb-slider").text(currentSlide + 1);
  	});


    $('.toggle').on('click', function() {
       $('.nav-mob').slideToggle(300, function(){
            $('.toggle').addClass('close');  
            if( $(this).css('display') === "none"){
                $(this).removeAttr('style');
                $('.toggle').removeClass('close');  
            }
             
       });

    });


  });


});