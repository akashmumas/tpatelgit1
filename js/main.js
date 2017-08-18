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
//    setTimeout(function(){
//        $('#start_screen').addClass("animated fadeOut");
//        $('#start_screen').css("display", "none");
//        $('.second_wrapper').css("display", "block");
//    }, 5500);
//});

document.addEventListener('DOMContentLoaded', function () {
  particleground(document.getElementById('particles'), {
    dotColor: '#5cbdaa',
    lineColor: '#5cbdaa'
  });
}, false);