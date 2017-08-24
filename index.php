<!doctype html>
<html lang="en-US" class="no-js">
<head>
	<title>Trusha Patel</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" >
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<?php include '_partial/head.php' ?>
<!--    <script src="js/jquery.particleground.js"></script>-->
<style>      
        

    
</style>    
</head>
<body>
	<div class="main_wrapper">
		<div id="start_screen">
			<div id="logo_wrapper">
				<img id="spin_img" src="img/spinner.png" style="width:40px" />
				<img id="arrow_img1" src="img/arrow1.png" style="width:110px" />
				<img id="arrow_img2" src="img/arrow2.png" style="width:75px" />
				<img id="arrow_img3" src="img/arrow3.png" style="width:60px" />
			</div>
		</div>

		<div class="second_wrapper" style="display:none;position:relative;z-index:10;">
			<header>
				<?php include '_partial/header.php' ?>
			</header>
		<div class="clearfix"></div>

		<section class="ban-section">
			<div id="part-wrap" class="particle-wrap text-center">
				<div class="ban-overlay"></div>
				<div class="scroll-down"><i class="fa fa-long-arrow-down" aria-hidden="true"></i></div>
				<span class="name-wrap">
				<span class="name wow animated fadeInUp" data-wow-delay="0s">t</span>
				<span class="name wow animated fadeInUp" data-wow-delay="0.2s">r</span>
				<span class="name wow animated fadeInUp" data-wow-delay="0.4s">u</span>
				<span class="name wow animated fadeInUp" data-wow-delay="0.6s">s</span>
				<span class="name wow animated fadeInUp" data-wow-delay="0.8s">h</span>
				<span class="name wow animated fadeInUp" data-wow-delay="1s">a</span>
<!--				<span class="name">&nbsp;</span>s-->
				<span class="name">&nbsp;</span>
				<span class="name wow animated fadeInUp" data-wow-delay="1.2s">p</span>
				<span class="name wow animated fadeInUp" data-wow-delay="1.4s">a</span>
				<span class="name wow animated fadeInUp" data-wow-delay="1.6s">t</span>
				<span class="name wow animated fadeInUp" data-wow-delay="1.8s">e</span>
				<span class="name wow animated fadeInUp" data-wow-delay="2s">l</span>
				</span>
				<div id="particles" class="text-center">
				</div>
			</div>
		</section>
		
		<section class="about-section">
			<h1>fdhvidevnidn</h1>
		</section>

		<footer>
			<?php include '_partial/footer.php' ?>
		</footer>
		<div class="clearfix"></div>        
		</div>
		<?php include '_partial/footer-scripts.php' ?> 
	</div>   
</body>
</html>









































<!DOCTYPE html>
<html>
<head>
<style>
.box
{
	width:500px;
    height:500px;
    border:1px solid black;
    position:relative;
    overflow:hidden;
    box-sizing:border-box;
}
.dots
{
	width:15px;
    height:15px;
    background-color:black;
    border-radius: 100%;
    position:absolute;
    transition:all 2s ease;
}
</style>
<script>
function adddots()
{
	var numdots = document.getElementById("inputdot").value;
    var outerbox = document.getElementById("box");
    for(i=0;i<numdots;i++)
    {
    var innerDiv = document.createElement('div');
	innerDiv.className = 'dots';
    outerbox.appendChild(innerDiv);
    }
    move();
}    
function move()
{	
	var boxwidth = document.getElementById("box").offsetWidth;
    var boxheight = document.getElementById("box").offsetHeight;    
	var select = document.getElementsByClassName("dots");
    var max = select.length;
    for (i=0; i<max; i++) {
	var topval = Math.floor(Math.random()*boxwidth);
    var leftval = Math.floor(Math.random()*boxheight);
    select[i].style.top = topval+'px';
    select[i].style.left = leftval+'px';
}
};
setInterval(move,100);		
</script>
</head>
<body>

<h2>Random dots</h2>
<p>select number of dots : <input type="number" id="inputdot" /></p>
<button type="button" onclick="adddots();"> Click me!</button>
<br /><br />
<div id="box" class="box">
</div>
<br /><br />
<p id="text"></p>



</body>
</html> 














































