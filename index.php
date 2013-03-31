  <!--
  LAB ASSIGNMENT 1 - CS3240
  NAME : MADHU MAITHRI PARVATANENI
  MATRIC NUMBER : A0074807Y
  WEBSITE : HOMEPAGE OF A HOTEL'S WEBSITE
  -->
  
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
     <?php include'db.php'; ?>
     
     <!--<?php
     function enterinsql($user_id, $bookid, $hotelname, $country, $city, $number, $arrivdata, $returndate) {
	$db->query("INSERT into `Booking` values ('$user_id', '$bookid', '$hotelname', '$country', '$city', '$number', '$arrivdata', '$returndate')");  
     }
     ?>-->
     
     
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
				  <li>
				  <form class="navbar-search">
				  <input type="text" class="search-query" placeholder="Search">
				  </form>
			      </li>
				  <li class="divider-vertical"></li>
				  <li class="divider-vertical"></li>
				  <li><a href="#" style="color:white"><i class="icon-lock icon-white"></i> Login/Signup</a></li>
				  <li class="divider-vertical"></li>
				  <li class="divider-vertical"></li>
				  <li>
				  <div class="btn-group">
				  <a class="btn btn-inverse dropdown-toggle" data-toggle="dropdown" href="#">
				  English
				  <span class="caret"></span>
				  </a>
				  <ul class="dropdown-menu">
				  <!-- dropdown menu links -->
				  </ul>
				  </div>
				  </li>
			  
				  </li>  
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
			    <li class="nav-header"><i class="icon-home"></i> HOME</li>
			    <li class="active"><a href="#">Homepage</a></li>
		<li class="nav-header"><i class="icon-globe"></i> LOCATIONS</li>
		<li><a href="#">New York</a></li>
		<li><a href="#">Singapore</a></li>
		<li><a href="#">Dubai</a></li>
		<li><a href="#">Paris</a></li>
		<li class="nav-header"><i class="icon-calendar"></i> PLAN EVENTS</li>
		<li><a href="#">Business</a></li>
		<li><a href="#">Weddings</a></li>
		<li><a href="#">Family Getaways</a></li>
		<li class="nav-header"><i class="icon-bullhorn"></i> PROMOTIONS</li>
		<li><a href="#">Hot Deals For Everyone</a></li>
		<li><a href="#">Loyalty Programme Exclusive</a></li>
			    <li class="nav-header"><i class="icon-comment"></i> CONTACT US</li>
		<li><a href="#">Contact Details</a></li>          
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
				  <br/>
				  
				  <blockquote class="well">
				  <p style="font-size: 32px; font-family:Georgia;">Renaissance provides 7-star luxury and service for the price of a 4-star.</p>
				  <small>Sidney Gosel, <cite title="Source Title">The New York Times</cite></small>
				  </blockquote>
				  
			  </div>
			  
	      <div class="span3">    
		  <br/>
				  
				  <strong> City </strong>
				  <select type="text" class="input-medium" id="city" style="margin-left:50px;">
				   
				   <!-- database city -->
				   <?php
    
					$hotel_query = $db->query("SELECT distinct city FROM `Hotel`");
					while($hotel = $db->fetch_assoc($hotel_query))
					{
					     echo '
						   <option>'.stripslashes($hotel['city']).'</option>
						  ';
					}
				   ?> 

					 <!-- <option>New York</option>
					  <option>Singapore</option>
					  <option>Dubai</option>
					  <option>Paris</option>-->
				  </select>
				  
				  <strong> Hotel Name </strong>
				  <select type="text" id="hotel_name" class="input-medium" style="margin-left:50px;">
				  
				   <?php
    
					$hotel_query = $db->query("SELECT distinct city FROM `Hotel`");
					$hotel = $db->fetch_assoc($hotel_query);

					$choice = $hotel['city'];

		    			$hotel_query = $db->query("SELECT name FROM `Hotel` where city = '$choice'");
					while($hotel = $db->fetch_assoc($hotel_query))
					{
					 echo '<option>'
					 .stripslashes($hotel['name']).
					 '</option>';
					}    
				   ?> 
 
				  </select>
				  
				  <div>
				  <strong> Arrive <input type="text" id="datepicker" class="input-medium" style="margin-left:20px;"/></strong>
				  <script>
				  $(function() {
				  $( "#datepicker" ).datepicker({minDate: 0});
				  });
				  </script>
				  </div>
				  
				  <div>
			      <strong> Depart <input type="text" id="datepicker2" class="input-medium" style="margin-left:16px;"/></strong>
				  <script>
				  $(function() {
				  $( "#datepicker2" ).datepicker({ minDate: $( "#datepicker" ).val()+1 });
				  });
				  </script>
				  </div>
				  <div>
				  <strong> Rooms </strong>
				  <select type="text" class="input-small" style="margin-left:81px;">
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					  <option>5</option>
				  </select>
				  </div>
				  <div>
				  <strong> Persons per room </strong>
				  <select type="text" class="input-small" style="margin-left:4px;">
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
				  </select>
				  </div>
				  
  
				  
			  </div>	 
			  
			  <div class="span4">    
			  <br/>
			  <strong> Room Type </strong>
				  <select type="text" id="room_type" class="input-medium" style="margin-left:65px;">
					  <!-- <option>Single Room</option>
					  <option>Double Room</option>
					  <option>Luxury Suite</option> -->
				  </select>
			   
			  <div>
			  <div>
			  <!-- Carousel items -->
			  
			  <div class="active item"><img src="img/room3.jpg" id="single" alt=""><h6 id="singleslogan">Luxury Suite</h6></div>
			  <!--<div class="item"><img src="img/room2.jpg" alt=""><h6>Double Room</h6></div>
			  <div class="item"><img src="img/room3.jpg" alt=""><h6>Luxury Suite</h6></div>-->
			  
			  <!-- Carousel nav -->
			  
			  </div>
		      </div>           
			  </div><!--/span-->
			  
			  <div class="span1">
			  <br/>
			  <br/>
			  <br/>
			  <br/>
	      <button id="booknow" class="btn btn-medium btn-warning" type="button" style="margin-left: -50px; font-size: 24px; width: 100px;" onclick="enterinsql()">
	       <strong>Book Now!</strong>
	      </button>
			  <label id="errormsg" style="color:red; font-size: 12px; margin-left: -50px;" ></label>
			  </div>			
	     
	    </div><!--/row-->
	  </div><!--/span-->
		  
	</div><!--/row-->
  
	<hr>
	    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
	    <script>

	       $("#city").change(function() {
		  $("#hotel_name").load("gethotelname.php?choice=" + $("#city").val());
		    
		     $("#room_type").load("getroomtype.php?choice=&citychoice=" + $("#city").val());		    		    
	       });
	       
	       	       
	       $("#hotel_name").click(function() {
		    var value = $("#hotel_name").val();
		    value = value.replace(new RegExp(" ","g"), "%20"); 

		     $("#room_type").load("getroomtype.php?choice=" + value + "&citychoice=" + $("#city").val());		    		    
	       });
	       
	       
	       
	       
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
						       //<?php enterinsql('ishaans', '123456', 'Fortuna Gate', 'India', 'Mumbai', 101, '2013-04-1', '2013-04-4'); ?>;
						  
						  });
	    </script>
						  
						  
  
	<footer>
	  <p>&copy; Company 2013</p>
	</footer>
  
      </div><!--/.fluid-container-->
  
     
  
    </body>
  </html>
