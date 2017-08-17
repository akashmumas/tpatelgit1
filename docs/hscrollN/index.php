 <!doctype html>
<html lang="en-US">
<head>
	<title>Webpage Title</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" >
	<meta name="viewport" content="width=device-width,initial-scale=1" >
	<?php include '_partial/head.php' ?>


	<link rel="stylesheet" href="css/normalize.css" type="text/css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/examples.css" type="text/css">

	

	<style type="text/css">
		#pinContainer {
			width: 100vw;
			height: 100vh;
			overflow: hidden;
			-webkit-perspective: 1000;
					perspective: 1000;
		}
		#slideContainer {
			width: 500vw; /* to contain 4 panels, each with 100% of window width */
			height: 100vh;
		}
		.panel {
			height: 100vh;
			width: 100vw; /* relative to parent -> 25% of 400% = 100% of window width */
			float: left;
		}
		
		.blue{
			background:#209DE2!important;
		}
		.red{
			background:#D9534F!important;
		}
		.green{
			background:#5CB85C!important;
		}
		.yellow{
			background:#F0AD4E!important;
		}
		.panel .pp{
			    padding-top: 12%;
		}
		
		.prog {
		  height: 8px;
		  left: 0;
		  position: fixed;
		  right: 0;
		  bottom: 0;
		  z-index: 9999;
		}
		.prog .bar {
		  -webkit-transition: width .1s;
		  transition: width .1s;
		  background-color: #f90f0f;
		  height: 100%;
		  width: 0;
		}
	</style>
</head>
<body style="">
	<header>
		<?php include '_partial/header.php' ?>
	</header>
	<div class="clearfix"></div>
	<section class="" style="height:100vh">
		
	</section>
	<section id="section-home1" class="container-fluid p-lr-none p-tb-md bg-f1f" style="overflow:hidden;">		
	<div class="col-xs-12 p-lr-none">	
		<div class="prog">
		  <div class="bar"></div>
		</div>
		<div id="pinContainer">
			
			<div id="slideContainer">
				
				<section id="s1" class="panel blue">
					<div class="col-xs-12 p-lr-none">
						<div class="col-sm-10 col-sm-offset-1 p-lr-none pp">
							<div class="col-md-6 p-t-xxl">
								<h1 class="text-fff">HOME LOAN</h1>
								<p class="text-fff">Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
							</div>
							<div class="col-md-6">
								<img src="img/hazzle-free-process.png" class="" width="100%" >
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</section>
				<section id="s2" class="panel red">
					<div class="col-xs-12 p-lr-none">
						<div class="col-sm-10 col-sm-offset-1 p-lr-none pp">
							<div class="col-md-6 p-t-xxl">
								<h1 class="text-fff">BUSINESS LOAN</h1>
								<p class="text-fff">Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
							</div>
							<div class="col-md-6">
								<img src="img/hazzle-free-process2.png" class="" width="100%" >
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</section>
				<section id="s3" class="panel green">
					<div class="col-xs-12 p-lr-none">
						<div class="col-sm-10 col-sm-offset-1 p-lr-none pp">
							<div class="col-md-6 p-t-xxl">
								<h1 class="text-fff">PERSONAL LOAN</h1>
								<p class="text-fff">Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
							</div>
							<div class="col-md-6">
								<img src="img/hazzle-free-process3.png" class="" width="100%" >
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</section>
				<section id="s4" class="panel yellow">
					<div class="col-xs-12 p-lr-none">
						<div class="col-sm-10 col-sm-offset-1 p-lr-none pp">
							<div class="col-md-6 p-t-xxl">
								<h1 class="text-fff">LOAN AGAINST PROPERTY</h1>
								<p class="text-fff">Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
							</div>
							<div class="col-md-6">
								<img src="img/hazzle-free-process4.png" class="" width="100%" >
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</section>
				<section id="s5" class="panel red">
					<div class="col-xs-12 p-lr-none">
						<div class="col-sm-10 col-sm-offset-1 p-lr-none pp">
							<div class="col-md-6 p-t-xxl">
								<h1 class="text-fff">LOAN AGAINST PROPERTY</h1>
								<p class="text-fff">Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
							</div>
							<div class="col-md-6">
								<img src="img/hazzle-free-process5.png" class="" width="100%" >
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</section>
				
			</div>
		</div>
	</div>
	</section>
	<section class="" style="height:100vh">
		
	</section>
	<div class="clearfix"></div>
	<footer>
		<?php include '_partial/footer.php' ?>
	</footer>	
	<?php include '_partial/footer-scripts.php' ?>
	<script type="text/javascript" src="js/lib/highlight.pack.js"></script>
	<script type="text/javascript" src="js/lib/modernizr.custom.min.js"></script>
	<script type="text/javascript" src="js/examples.js"></script>
	
	<script type="text/javascript" src="js/lib/greensock/TweenMax.min.js"></script>
	<script type="text/javascript" src="scrollmagic/uncompressed/ScrollMagic.js"></script>
	<script type="text/javascript" src="scrollmagic/uncompressed/plugins/animation.gsap.js"></script>
	<script type="text/javascript" src="scrollmagic/uncompressed/plugins/debug.addIndicators.js"></script>
	<script>
		$(function () { // wait for document ready
			// init
			var controller = new ScrollMagic.Controller();

			// define movement of panels
			var wipeAnimation = new TimelineMax()
				// animate to second panel
				.to("#slideContainer", 0.5, {z: 0})		// move back in 3D space
				.to("#slideContainer", 1,   {x: "-20%"})	// move in to first panel
				.to("#slideContainer", 0.5, {z: 0})				// move back to origin in 3D space
				// animate to third panel
				.to("#slideContainer", 0.5, {z: 0})
				.to("#slideContainer", 1,   {x: "-40%"})
				.to("#slideContainer", 0.5, {z: 0})
				// animate to forth panel
				.to("#slideContainer", 0.5, {z: 0})
				.to("#slideContainer", 1,   {x: "-60%"})
				.to("#slideContainer", 0.5, {z: 0})
				// animate to forth panel
				.to("#slideContainer", 0.5, {z: 0})
				.to("#slideContainer", 1,   {x: "-80%"})
				.to("#slideContainer", 0.5, {z: 0});

			// create scene to pin and link animation
			new ScrollMagic.Scene({
					triggerElement: "#pinContainer",
					triggerHook: "onLeave",
					duration: "200%"
				})
				.setPin("#pinContainer")
				.setTween(wipeAnimation)
				.addIndicators() // add indicators (requires plugin)
				.addTo(controller);
		});
	</script>
	<script>
		function fn() {
				  $(function() {
					var dH, wH;
					dH = $('#section-home1').height();
					wH = $(window).height();
					return $('body').on('mousewheel', function() {
					  var sP, sT;
					  sT = $('body').scrollTop() - wH;
					  sP = (sT / (dH - wH)) * 100;
					  return $('.prog .bar').css('width', sP + '%');
					  
					});
				  });
			}
	</script>
	<script>
		$(window).scroll(function(){
			var wst= $(window).scrollTop();
			var st= $('#slideContainer').offset().top;
			if(st <= wst){
				fn();
				$('.bar').show();
			}
		});
		$(window).scroll(function (){
			var barWidth = $('.bar').width();
			if(barWidth >= $(window).width()){
				$('.bar').hide();
			}
		});
	</script>
</body>
</html>