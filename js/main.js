//$(document).ready(function(){
//    $('#spin_img').addClass("spinner");
//    setTimeout(function(){
//        $('#arrow_img1').addClass("arrow_img1_trans");
//    }, 1000);
//    setTimeout(function(){
//        $('#arrow_img2').addClass("arrow_img2_trans");
//    }, 2000);
//    setTimeout(function(){
//        $('#arrow_img3').addClass("arrow_img3_trans");
//    }, 3000);
//    setTimeout(function(){
//        $('#arrow_img1').addClass("arrow_img1_trans2");
//        $('#arrow_img2').addClass("arrow_img2_trans2");
//        $('#arrow_img3').addClass("arrow_img3_trans2");
//        $('#spin_img').addClass("spinner_opacity");
//    }, 5000);
//    	setTimeout(function(){
//        $('#start_screen').addClass("animated fadeOut");
//        $('#start_screen').css("z-index", "-999");
//        $('.second_wrapper').css("display", "block");
//    }, 5500);
//});

document.addEventListener('DOMContentLoaded', function () {
  particleground(document.getElementById('particles'), {
    dotColor: '#5cbdaa',
    lineColor: '#5cbdaa'
  });
}, false);

$(document).ready(function(){
	$(".about-section").mouseenter(function(){
    	$(".social-media ul li a .fa").addClass("bounce");
    	$(".social-media ul li a .fa-facebook").addClass("facebook");
    	$(".social-media ul li a .fa-instagram").addClass("instagram");
    	$(".social-media ul li a .fa-twitter").addClass("twitter");
    	$(".social-media ul li a .fa-linkedin").addClass("linkedin");
		
	});
	$(".about-section").mouseleave(function(){
    	$(".social-media ul li a .fa").removeClass("bounce");
		$(".social-media ul li a .fa-facebook").removeClass("facebook");
    	$(".social-media ul li a .fa-instagram").removeClass("instagram");
    	$(".social-media ul li a .fa-twitter").removeClass("twitter");
    	$(".social-media ul li a .fa-linkedin").removeClass("linkedin");
	});
});