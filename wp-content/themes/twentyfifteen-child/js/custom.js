/*----------------corporate Name-------------*/

$('body').on('click','.btn-hire',function(){
    var corporatename = $(this).attr('id');
$('#corporatename').val(corporatename); 
});

/*----------------read more-------------*/

$('').readmore({
      collapsedHeight: 100,
      afterToggle: function(trigger, element, expanded) {
        if(! expanded) { // The "Close" link was clicked
          $('.job-content').animate({scrollTop: $(element).offset().top}, {duration: 100});
        }
      }
    });

    $('article').readmore({speed: 1000});
    


/*----------------map-------------*/
$('.map-container')
	.click(function(){
			$(this).find('iframe').addClass('clicked')})
	.mouseleave(function(){
			$(this).find('iframe').removeClass('clicked')});

/*----------------prettyPhoto-------------*/

$(document).ready(function(){
				$("area[rel^='prettyPhoto']").prettyPhoto();
				
				$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: false});
				$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
		
				$("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
					custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
					changepicturecallback: function(){ initialize(); }
				});

				$("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
					custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
					changepicturecallback: function(){ _bsap.exec(); }
				});
});

/*----------------form-------------*/


function submitForm1()
{
	
    var productName  = $('#productname').val();
	var enqName  = $('#enqName').val();
	var enqContact  = $('#enqContact').val();
	var enqEmail  = $('#enqEmail').val();
	var company  = $('#enqCompany').val();
	var description  = $('#description').val();
	var designation  = $('#enqAddress').val();
	
	var  filter  = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        if(productName=='')
        {
              $('#productname').css('border',' 1px solid red');
		$('#productname').attr('placeholder','Enter the Product Name');
		$('#productname').focus(function(){
		$('#productname').css('border-color','');
		$('#productname').attr('placholder','');
		});
		return false;
	}
	if(enqName=='')
	{
		$('#enqName').css('border',' 1px solid red');
		$('#enqName').attr('placeholder','Enter the Name');
		$('#enqName').focus(function(){
			$('#enqName').css('border-color','');
			$('#enqName').attr('placholder','');
		});
		return false;
	}
	if(company=='')
	{
		$('#enqCompany').css('border',' 1px solid red');
		$('#enqCompany').attr('placeholder','Enter the Company Name');
		$('#enqCompany').focus(function(){
			$('#enqCompany').css('border-color','');
			$('#enqCompany').attr('placholder','');
		});
		return false;
	}
	if(designation=='')
	{
		$('#enqDesc').css('border',' 1px solid red');
		$('#enqDesc').attr('placeholder','Enter the Designation');
		$('#enqDesc').focus(function(){
			$('#enqDesc').css('border-color','');
			$('#enqDesc').attr('placholder','');
		});
		return false;
	}
	if(enqEmail=='')
	{
		$('#enqEmail').css('border',' 1px solid red');
		$('#enqEmail').attr('placeholder','Enter the Email');
		$('#enqEmail').focus(function(){
			$('#enqEmail').css('border-color','');
			$('#enqEmail').attr('placholder','');
		});
		return false;
	}
	if(enqContact=='')
	{
		$('#enqContact').css('border',' 1px solid red');
		$('#enqContact').attr('placeholder','Enter the Contact No.');
		$('#enqContact').focus(function(){
			$('#enqContact').css('border-color','');
			$('#enqContact').attr('placholder','');
		});
		return false;
	}
	
	if(!filter.test(enqEmail))
		{
			$("#enqEmail").css("border-color","red");
			document.getElementById('enqEmail').value= "";
		    $('#enqEmail').attr("placeholder", "Enter  the valid Email ID");
			 $("#enqEmail").focus(function(){
		        $(this).css("border-color","");
		         $(this).attr("placeholder", "");
		  });
	   
		  return false;
				
		}
	if(description=='')
	   {
		$('#description').css('border',' 1px solid red');
		$('#enqEmail').attr('placeholder','Enter the Message');
		$('#description').focus(function(){
			$('#description').css('border-color','');
			$('#description').attr('placholder','');
		});
		return false;
	    }
	else{
		$("#demo").hide();
        $("#gif").show();
	}
}







/*----------------header-------------*/

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
        $("header").addClass("darkHeader");
    } else {
        $("header").removeClass("darkHeader");
    }
});


/*----------------counter-------------*/

jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 5,
                time: 3000
            });
        });

/*----------------counter-------------*/

$(".nav-bars").click(function(){
    $(".navigation, .nav-bars").toggleClass("menu");
});

/*----------------counter-------------*/

if ($('#back-to-top').length) {
    var scrollTrigger = 100, // px
        backToTop = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('#back-to-top').addClass('show');
            } else {
                $('#back-to-top').removeClass('show');
            }
        };
    backToTop();
    $(window).on('scroll', function () {
        backToTop();
    });
    $('#back-to-top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 600);
    });
}

   $('.schedule-demo-click').on('click', function (e) {
       e.preventDefault();
        $('html,body').animate({
            scrollTop: $('#schedule-demo-tour').offset().top-20
        }, 600);
    });

/*----------------portfolio-------------*/

$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixItUp({
  				selectors: {
    			  target: '.portfolio',
    			  filter: '.filter'	
    		  },
    		  load: {
      		  filter: '.all'  
      		}     
				});								
			
			}

		};
		
		// Run the show!
		filterList.init();
		
		
	});	

/*----------------thank message-------------*/

$('#fademgs').delay(5000).slideUp(400)

/*----------------client scroll-------------*/

$('.carrotCell').carrotCell({ step: 1 });

/*----------------gallery-------------*/
/* $(function(){
		var $gallery = $('.gallery a').simpleLightbox();
		
		$gallery.on('show.simplelightbox', function(){
			console.log('Requested for showing');
		})
		.on('shown.simplelightbox', function(){
			console.log('Shown');
		})
		.on('close.simplelightbox', function(){
			console.log('Requested for closing');
		})
		.on('closed.simplelightbox', function(){
			console.log('Closed');
		})
		.on('change.simplelightbox', function(){
			console.log('Requested for change');
		})
		.on('next.simplelightbox', function(){
			console.log('Requested for next');
		})
		.on('prev.simplelightbox', function(){
			console.log('Requested for prev');
		})
		.on('nextImageLoaded.simplelightbox', function(){
			console.log('Next image loaded');
		})
		.on('prevImageLoaded.simplelightbox', function(){
			console.log('Prev image loaded');
		})
		.on('changed.simplelightbox', function(){
			console.log('Image changed');
		})
		.on('nextDone.simplelightbox', function(){
			console.log('Image changed to next');
		})
		.on('prevDone.simplelightbox', function(){
			console.log('Image changed to prev');
		})
		.on('error.simplelightbox', function(e){
			console.log('No image found, go to the next/prev');
			console.log(e);
		});
	});
*/





