(function ($) {
	$(document).ready(function () {   
	  $('.right-nav-mobile').click(function(){
        $(this).toggleClass('toogle-active')
        $('.mobile-navText').slideToggle(300) 
      });
		/* hide mobile bar */
		$('.navMobile-content a').click(function(){ 
			$('.toogle-active').trigger('click') 
		}); 		
		
		/* Model Box 1 */
		$('.planDetail').click(function(){ 
			$('.plan-content').fadeIn()
		});
		$('.closePopup').click(function(){ 
			$('.plan-content').fadeOut()
		});
		
		/* Model Box 2 */
		$('.planDetail-2').click(function(){ 
			$('.plan-content-12').fadeIn()
		});
		$('.closePopup').click(function(){ 
			$('.plan-content-12').fadeOut()
		});
		
		/* drop down */
		$('.right-nav ').click(function(event){
			event.preventDefault();
			$(this).toggleClass('active-top')
			$('.drop-down').slideToggle(300) 
		});
		
		/* password show hide */
		$(".toggle-password").click(function() {
		  $(this).toggleClass("fa-eye fa-eye-slash");
		  var input = $($(this).attr("toggle"));
		  if (input.attr("type") == "password") {
			input.attr("type", "text");
		  } else {
			input.attr("type", "password");
		  }
		});
		
		/* Change tab class and display content*/
		$('.tabs-nav a').on('click', function (e) {
			e.preventDefault();
			var tabLink = $(this);
			var target = $(this).data('atr'); 
			$('.tabs-nav li').removeClass('tab-active');
			$(this).parent().addClass('tab-active');
			$('.tabs-stage > div').hide();
			$('#'+target).fadeIn("200", function() { 
			 });
		}); 
		    
			/* custom accordion tab  */
		$(document).on('click', '.accordion-block>.accord>li>a', function(){
			$(this).toggleClass('active'); 
			$(this).parent().toggleClass('li-act');
			$(this).siblings('.accordion-content').stop().slideToggle();
			$(this).closest('li').siblings('li').find('.accordion-content').slideUp();
			$(this).closest('li').siblings('li').find('a').removeClass('active'); 
			$(this).parent().siblings().removeClass('li-act');  
		});		
		
		/* owl slider */ 	
		 $('.loop-12').owlCarousel({
                items:1,
			 	animateOut:'fadeOut',
                loop:false,
                center:true,
                margin:10,
			 	dots:false,
			 	nav:true,
				navText: ["<span class='carousel-nav-left'><i class='fas fa-arrow-left'></i></span>","<span class='carousel-nav-right'><i class='fas fa-arrow-right'></i></span>"],
                callbacks: true,
                URLhashListener: true,
                startPosition: 'URLHash'
              });
		
		/* owl slider */ 
		$('.slider-One').owlCarousel({ 
			loop:true,  
			margin:10,
			dots:false,
			nav:true,
			navText: ["<span class='carousel-nav-left left-arrow'><i class='fas fa-chevron-left'></i></span>","<span class='carousel-nav-right right-arrow'><i class='fas fa-chevron-right'></i></span>"],
			responsiveClass:true,
			responsive:{
				0:{
					items:1,
					nav:true,
				},
				600:{
					items:3,
					nav:false
				},
				1000:{
					items:4,
					nav:true, 
				}
			}
		}); 
		
		$('.slider-Profile').owlCarousel({ 
			loop:false,  
			margin:0,
			dots:false,
			nav:true,
			navText: ["<span class='carousel-nav-left left-arrow'><i class='fas fa-chevron-left'></i></span>","<span class='carousel-nav-right right-arrow'><i class='fas fa-chevron-right'></i></span>"],
			items:1
		});
		
		/* M Custom Scrollbar */
		/*$(".top-scroll").mCustomScrollbar();*/
		
		$('button.nextBtn').on("click",function(){
			$(window).scrollTop(0);
		});
	});   
})(jQuery);

		$(".user-login a").each(function(i,v){
			$(this).click(function(){
			 $(".popCustom #nav-tabContent .tab-pane").each(function(ind,v){
			 if(i==ind){
				 $(this).addClass("active in") 
			 }
			else{
				$(this).removeClass("active in")
			}
			});
			$("#id01 .w3-bar .tablink").each(function(inde,v){
				 if(i==inde){
					 $(this).addClass("active-12") 
				  }
				else{
					$(this).removeClass("active-12")
				 }
			});
			});
		});
		
		$('#id01 .w3-bar .tablink').click(function(){
			$(this).addClass("active-12");
		    $(this).siblings().removeClass("active-12");
		});
		
		$('.login-form .p1 a, .login-form .p2 a').click(function(){
			$('.fade.in').fadeOut(300)
		});
		
		$('.p1 a').click(function(){
			$('#id01').fadeOut(300)
		});

		$('.f-step a').click(function(){
			$(this).parents('.stepwizard-step').nextAll('.f-step').find('.btn-success').removeClass('btn-success');
		});

		$(document).ready(function(){
			/* New js */
			function readURL(input) {
				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#blah').attr('src', e.target.result);
					}

					reader.readAsDataURL(input.files[0]);
				}
			}

			$("#imgInp").change(function(){
				readURL(this);
			}); 

			$(".nextBtn").on("click", function() {
				$(window).scrollTop(0);
			});

		});
