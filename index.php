<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>The Renaissance Group</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
   
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
	  
	 .jumbotron
	 {
	 width:1147px;
	 height:478px;
	 }
	  
	.jumbotron2
	 {
	 width:300px;
	 height:123px;
	 }
	
    </style>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
	<link rel="stylesheet" href="/resources/demos/style.css" />
	
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>
  <?php include 'db.php'; ?>
  <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.10.0.custom.min.js"></script>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          <div class="nav-collapse collapse">
			<ul class="nav  pull-right">
				
					<?php 
					if(isset($_SESSION['username'])) {
						echo '<li style="color:white">Hi, '.$_SESSION['username'].'</li>' ;
					}
					else {
						echo '<li><a href="Login.html" style="color:white"><i class="icon-lock icon-white"></i> Login/Signup</a></li>
								<li class="divider-vertical"></li>
								<li class="divider-vertical"></li>';
					}
				?>
 				
            </ul>			
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">

        <div class="span3">
		<img src="img/logo8.jpg" id="logo">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
			  <li class="nav-header" style="font-size:18px"><i class="icon-home"></i> HOME</li>
			  <br/><li class="active" style="font-size:18px"><a href="index.php">Homepage</a></li>
              <br/>
			  <li class="nav-header" style="font-size:18px"><i class="icon-tags"></i> BOOKINGS</li>
              <br/><li><a href="Booking.php" style="font-size:18px">Book Here</a></li>
			  <br/><li><a href="View.html" style="font-size:18px">View Your Booking</a></li>
			  <br/><li><a href="Modify.html" style="font-size:18px">Modify Your Booking</a></li>
			  <br/><li><a href="Cancel.html" style="font-size:18px">Cancel Your Booking</a></li>
			  <br/>
			  <br/>
			  <br/>
			  <li><form><a href="Booking.php"><button id="booknow" class="btn btn-medium btn-warning" type="button" style="margin-left: 30px; font-size: 24px; width: 200px; height: 50px;"><strong>Click To Book!</strong></button></a></form></li>
                			  
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
		
        <div class="span9">
		<div class="jumbotron">
		<div class="container"> 
							<div id="myCarousel" class="carousel slide">
								<div class="carousel-inner">
									<div class="item">
										<img src="img/H2.jpg" alt="">
										<div class="carousel-caption span4 pull-left">
											<h4>Majesty Towers, Renaissance Dubai</h4>
										</div>
									</div>
									<div class="item">
										<img src="img/H1.jpg" alt="">
										<div class="carousel-caption span4 pull-left">
											<h4>The Lobby, Renaissance Singapore</h4>
										</div>
									</div>
									<div class="item">
										<img src="img/H3.jpg" alt="">
										<div class="carousel-caption span4 pull-left">
											<h4>Rhode Lounge, Renaissance New York</h4>
										</div>
									</div>
									<div class="item">
										<img src="img/H4.jpg" alt="">
										<div class="carousel-caption span4 pull-left">
											<h4>Shiro Lounge, Renaissance Dubai</h4>
										</div>
									</div>
									<div class="item active">
										<img src="img/H7.jpg" alt="">
										<div class="carousel-caption span4 pull-left">
											<h4>The Alp Towers, Renaissance Paris</h4>
										</div>
									</div>
									<div class="item">
										<img src="img/H8.jpg" alt="">
										<div class="carousel-caption span4 pull-left">
											<h4>Waterfront, Renaissance Singapore</h4>
										</div>
									</div>
								</div> <!-- /.carousel-inner --> 
								<!-- Carousel nav -->
								<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
								<a class="right carousel-control" style="margin-right:20px" href="#myCarousel" data-slide="next">&rsaquo;</a>
							</div><!-- /.carousel -->
							</div>
						
       
      </div>
         
          <div class="row-fluid">
			<div class="span4">
				<br/>
				<blockquote class="well">
				<p style="font-size: 32px; font-family:Georgia;">Renaissance provides 7-star luxury and service for the price of a 4-star.</p>
				<small>Sidney Gosel, <cite title="Source Title">The New York Times</cite></small>
				</blockquote>	
			</div>
			
			 
			<div class="span3">    
             <br/>
			 <div class="active item"><img src="img/room2.jpg" id="single" alt="" style="margin-left:-20px;"><h6 id="singleslogan">Standard Double Bed</h6></div>
			 </div>	
			 <div class="span3">    
             <br/>
			 <div class="active item"><img src="img/room3.jpg" id="single" alt="" style="margin-left:-40px;"><h6 id="singleslogan">Superior Double Bed</h6></div>
			 </div>	
			
			<div class="span2" style="margin-left:-25px;width:220px;">
			<br/>
				<blockquote class="well">
				<p style="font-size: 26px; font-family:Georgia;">Voted Best in Hospitality by the HMA in 2013.</p>
				</blockquote>
			</div>			
            
          </div><!--/row-->
        </div><!--/span-->
		
      </div><!--/row-->

      <hr>
	  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
      <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
	  <script>
						$(document).ready(function(){
							$('.carousel').carousel();
						});
	    
						$("#singleslogan").click(function () 
						{
						if($('#single').is(":visible"))
						$( "#single" ).hide();
						else
						$( "#single" ).show();
						return false;
						});
						
						$("#booknow").click(function () 
						{
						if((($("#datepicker").val()=="")) && (($("#datepicker2").val()=="")))
						document.getElementById('errormsg').innerHTML="*Please fill in your arrival and departure dates";
						
						else if((($("#datepicker").val()=="")))
						document.getElementById('errormsg').innerHTML="*Please fill in your arrival date";
						
						else if(((($("#datepicker2").val()==""))))
						document.getElementById('errormsg').innerHTML="*Please fill in your departure date";
						
						else
						document.getElementById('errormsg').innerHTML="";
						});
	  </script>
						
						

      <footer>
        <p>&copy; Company 2013</p>
      </footer>

    </div><!--/.fluid-container-->

   

  </body>
</html>
