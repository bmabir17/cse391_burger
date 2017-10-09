
<html>
<head>
	<title></title>
	
	<!--<link rel="stylesheet" type="text/css" href="start.css"> !-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" ></script>
	<link href="https://fonts.googleapis.com/css?family=Lemonada" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" ></script>
	<link rel="stylesheet" type="text/css" href="navbar.css">
	<style type="text/css">
		#background {
	    position: fixed;
	    top: 50%;
	    left: 50%;
	    min-width: 100%;
	    min-height: 100%;
	    width: auto;
	    height: auto;
	    z-index: -100;
	    -webkit-transform: translateX(-50%) translateY(-50%);
	    transform: translateX(-50%) translateY(-50%);
	    background: url(startp.jpg);
	    background-size: cover;
		}
		.container h1 {
		    color: white;
		}
		.content {
		  position: relative;
		  width: 500px;
		  margin: 0 auto;
		  padding: 20px;
		}
		.content video {
		  width: 100%;
		  display: block;
		}
		.content:before {
		  content: '';
		  position: absolute;
		  background: rgba(0, 0, 0, 0.5);
		  border-radius: 5px;
		  top: 0;
		  right: 0;
		  bottom: 0;
		  left: 0;
		}
		.hero-section {
			padding-top: 30px;
		  background: url("") 50% no-repeat;
		  background-size: cover;
		  height: 60vh;
		  text-align: center;
		  display: -webkit-flex;
		  display: -ms-flexbox;
		  display: flex;
		  -webkit-align-items: center;
		      -ms-flex-align: center;
		          align-items: center;
		  -webkit-justify-content: center;
		      -ms-flex-pack: center;
		          justify-content: center;
		}

		.hero-section .hero-section-text {
		  
		}
		.hero-text{
			color: white;
		  	font-family: 'Slabo+27px', serif;
		  	text-shadow: 4px 4px 4px black;
		  	font-size: 108px;
		}
		.hero-subtext{
			color: black;
			text-shadow: 4px 4px 4px #aaa;
		  	font-size: 38px;
		}

	</style>

</head>
<body>
<div class="content">
	<video autoplay loop muted poster="startp.jpg" id="background" style="background: rgba(0, 0.3, 0.5, 0.9);">

        <source src="video/v2.mp4" type="video/mp4">

    </video>
</div>

<div class="container-fluid">
	<div class="row" >
		<?php include('customerNav.php')		?>
	</div>
	<div class="hero-section">
	  <div class="hero-section-text">
	    <h1 ><p class="hero-text" > Make your <span>Own</span> Taste<br></p></h1>
	    <br>
	    <h3 class="hero-subtext">So lets start !!</h3>
	    
	    	<button   type="button" class="btn btn-secondary btn-lg" >
				<a href="mainpage.php" style="color:#39a111;">Custom Burger Order</a> 
			</button>
			<button   type="button" class="btn btn-primary btn-lg" style="background-color: #39a111;">
				<a href="mainpage.php" style="color:white;"> Regular Menu</a> 
			</button>
		
	  </div>
	</div>
	
</div>

</body>
</html>