<!doctype html>
<html lang="en-US">
<head>
	<title>Crescent- Contact</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" >
	<meta name="viewport" content="width=device-width,initial-scale=1" >
	<?php include '_partial/head.php' ?>

	<style type="text/css">
		.butterfly{width: 200px;height:100px;margin: 0 auto; position: absolute;top: 50%;left: 50%;transform: rotate(30deg);}
		.butterfly .left{height: 140px;float: left;
    	width: 80px;
    	background-size: 200%;
    	background-image: url(./butterfly.png);
    	background-repeat: no-repeat;
    	animation: flapLeft .2s .2s infinite;
    	transform-origin: 100% 50%;;
		}
		.butterfly .right{height: 140px;float: left;background-position: 100% 0;
    width: 80px;
    background-size: 200%;
    background-image: url(./butterfly.png);
    background-repeat: no-repeat;
    animation: flapRight .2s .2s infinite;
    transform-origin: 0 50%;
	}

    @keyframes flapLeft{
    	0%{transform: rotateY(0deg);}
    	50%{transform: rotateY(60deg);}
    }

     @keyframes flapRight{
    	0%{transform: rotateY(0deg);}
    	50%{transform: rotateY(-60deg);}
    }


	</style>
</head>
<body>
	<?php //include '_partial/header.php' ?>

	<div class="clearfix"></div>

	<div class="container ">
		<div class="butterfly" id="butterfly1">
			<div class="left"></div>
			<div class="right"></div>
		</div>
	</div>

	<div class="clearfix"></div>

	<?php //include '_partial/footer.php' ?>
	<?php include '_partial/footer-scripts.php' ?>

	<script type="text/javascript">
		$(window).mousemove(function(event) {
  			// alert("hello");
	    $("#butterfly1").css({top: event.pageY, left: event.pageX});
	});
	</script>

</body>
</html>