<?php session_start(); ?>

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
	 
	 
	.clearfix:after 
	{
	content: "\0020";
	display: block;
	height: 0;
	clear: both;
	overflow: hidden;
	visibility: hidden;
	}

	
    </style>
    <link href="chosen/chosen.css" rel="stylesheet"/>  
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
	<script type="text/javascript" src="js/jquery-1.7.1.js"></script>
	<script type="text/javascript" src="js/jquerymx-3.2.custom.js"></script>
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
  <?php include'db.php';
  
      if(!isset($_SESSION['username'])) {
	header("Location: Login.html?from=booking");
      }

  ?>
  <?php
 if (isset($_POST['submit'])) {
    $userid = $_SESSION['username'];
    $city = $_POST['city'];
    $hotelname = $_POST['hotel_name'];
    $numberGuests = $_POST['numGuests'];
    $arriveDate = DateTime::createFromFormat('m/j/Y', $_POST['arriveDate']);
    $arriveDate = $arriveDate->format('Y-m-d');
    
    $departDate = DateTime::createFromFormat('m/j/Y', $_POST['departDate']);
    $departDate = $departDate->format('Y-m-d');
    
    $db->query("INSERT into `Booking` (`guest_id`, `hotel_name`, `hotel_country`, `hotel_city`, `room_number`, `arrival`, `departure`, `guests`)
		       values ('$userid', '$hotelname', 'India', '$city', 501, '$arriveDate', '$departDate', `$numberGuests`)");
  
  $_SESSION['registered'] = true; 
  }
  ?>

  
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
						echo '<li style="color:white;font-size:20px;margin-top:10px;">Hi '.$_SESSION['username'].' !</li>' ;
						echo '<li class="divider-vertical"></li>
							  <li class="divider-vertical"></li>' ;
					    echo '<li><a href="logout.php" style="color:white"><i class="icon-lock icon-white"></i> Logout</a></li>';
					}
					else 
					{
						echo '<li><a href="Login.php" style="color:white"><i class="icon-lock icon-white"></i> Login/Signup</a></li>
								<li class="divider-vertical"></li>
								<li class="divider-vertical"></li>';
					}
				?>
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
			  <li class="nav-header" style="font-size:18px"><i class="icon-home"></i> HOME</li>
			  <br/><li style="font-size:18px"><a href="index.php">Homepage</a></li>
	      <br/>
			  <li class="nav-header" style="font-size:18px"><i class="icon-tags"></i> BOOKINGS</li>
	      <br/><li class="active" ><a href="Booking.php" style="font-size:18px">Book Here</a></li>
			  <br/><li><a href="View.php" style="font-size:18px">View Your Booking</a></li>
			  <br/><li><a href="Modify.php" style="font-size:18px">Modify Your Booking</a></li>
			  <br/><li><a href="Cancel.php" style="font-size:18px">Cancel Your Booking</a></li>
			  <br/>
			  <br/>
			  <br/>
			  <li><a href="Booking.php"><button id="booknow" class="btn btn-medium btn-warning" type="button" style="margin-left: 30px; font-size: 24px; width: 200px; height: 50px;"><strong>Click To Book!</strong></button></a></li>
					  
	    </ul>
	  </div><!--/.well -->
	</div><!--/span-->
		
	<div class="span9">
	      <br/>
	      <br/>
	      <br/>
	      <br/>
	      <br/>
	      <br/>
	      <br/>
		  <div><h3 style="margin-left:20px">Book Your Room Here</h3></div>
		  
		      <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
		      
		      <?php
		      if (isset($_SESSION['registered'])) {
			$userid = $_SESSION['username'];
			  $booking_query = $db->query("Select max(`booking_id`) as 'booking_id' from `Booking` where guest_id = '$userid'");
			  $booking = $db->fetch_assoc($booking_query);

			$message = 'Congratulations, your booking is successul!<br/>Please note your Booking Id - '.$booking['booking_id'].' for future references';
			echo '<h4 name="message">'.$message.'</h4>';
			unset($_SESSION['registered']); 
		      }
		      ?>
		       <div class="row-fluid">
			<div class="input-append span4">
			      <br/>
			  <div class="side-by-side clearfix" style="margin-left:20px">				
			    <select id="form_field" name="facility[]" data-placeholder="Which are the facilities you would like	? (Optional to Choose)" style="width: 430px;height: 400px" multiple class="chzn-select" tabindex="8">
			    <option value=""></option>
			      <optgroup>
				  <option value="pool">Swimming Pool</option>
				  <option value="gym">Fitness Club</option>
				  <option value="restaurant">Restaurant</option>
				  <option value="wifi">Wi-Fi</option>
			      </optgroup>
			      </select>
				  <button name="faciltybtn" style="height: 29px; display:inline" id="loadbtn" type="button" class="btn btn-primary">Ok</button>
			    </div>
			</div>
		  </div><!--/span-->		
			      
		  <strong style="margin-left:20px"> Choose Location </strong>
		  <select type="text" name="city" id="city" class="input-medium" style="margin-left:79px;">
		  
		  <?php
		    $hotel_query = $db->query("SELECT distinct city FROM `Hotel`");
		    while($hotel = $db->fetch_assoc($hotel_query))
		    {
			 echo '<option>'.stripslashes($hotel['city']).'</option>';
		    }
		     ?> 
		  </select>
			      
		  <br/>
		  <strong style="margin-left:20px"> Choose Hotel Name </strong>
		  <select type="text" name="hotel_name" id="hotel_name" class="input-medium" style="margin-left:60px;">
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
		  <strong style="margin-left:20px"> Choose Arrival date <input type="text" name="arriveDate" id="datepicker" class="input-medium" style="margin-left:58px;"/></strong>
		  <script>
		  $(function() 
		  {
		  $( "#datepicker" ).datepicker({minDate: 0});
		  });
		  
		  </script>
		  </div>
			      
		  <div>
		  <strong style="margin-left:20px"> Choose Departure Date <input type="text" name="departDate" id="datepicker2" class="input-medium" style="margin-left:32px;"/></strong>
		  <script>
		  $(function() {
		  $( "#datepicker2" ).datepicker({ minDate: $( "#datepicker" ).val()+1 });
		  });
		  </script>
		  </div>
		  
		  <div>
		  <strong style="margin-left:20px"> Type Of Room </strong>
		  <select type="text" name="room_type" id="room_type" class="input-medium" style="margin-left:100px;width:200px;">
		  <!-- <option>Standard Single Room</option>
		  <option>Standard Double Room</option>
		  <option>Superior Single Room</option>
		  <option>Superior Double Room</option> -->
		  </select>
		  <div>
		      <!--<div>
		      <strong style="margin-left:20px"> Number Of Rooms </strong>
		      <select type="text" name="numRooms"class="input-small" style="margin-left:71px;">
		      <option>1</option>
		      <option>2</option>
		      <option>3</option>
		      </select>
		      </div> -->
		      
		      <div>
		      <strong style="margin-left:20px"> Number Of Guests </strong>
		      <select type="text" name="numGuests" class="input-small" style="margin-left:4px;">
		      <option>1</option>
		      <option>2</option>
		      <option>3</option>
		      <option>4</option>
		      <option>5</option>
		      <option>6</option>
		      <option>7</option>
		      <option>8</option>
		      </select>
		      </div>
		      
		      
		      <br/>
		      <br/>
		      <br/>
		      <div style="margin-left:20px">
		      <!--<a href="Login.html"></a>-->
		      <button name="submit" type="submit" class="btn btn-primary">Book Now!</button>
		      <a href="index.php"><button type="button" class="btn">Cancel</button></a>
		      </div>		
		  </div><!--/hererow-->
	  </form>
      <hr>
	  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
      <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
	  <script src="chosen/chosen.jquery.js" type="text/javascript"></script>
	  <script type="text/javascript">
	    
	    $("#loadbtn").click(function() {
	             var select = $('select#form_field');
		    var selectedItem= select.find(':selected');
		      var selectedVal = selectedItem[0].val();
		  $("#hotel_name").load("gethotelname.php?choice=" + $("#city").val() + "&facilty=0");
	      
	    });
	    
	    $("#city").change(function() {
		  $("#hotel_name").load("gethotelname.php?choice=" + $("#city").val() + "&facilty=");
		    
		     $("#room_type").load("getroomtype.php?choice=&citychoice=" + $("#city").val());		    		    
	       });
	       
		       
	    $("#hotel_name").click(function() {
		 var value = $("#hotel_name").val();
		 value = value.replace(new RegExp(" ","g"), "%20"); 

		  $("#room_type").load("getroomtype.php?choice=" + value + "&citychoice=" + $("#city").val());		    		    
	    });
	       
	       
	    $("select").find("option:selected").each(function(){
	      var value = $("#hotel_name").val();
		value = value.replace(new RegExp(" ","g"), "%20"); 
       
		 $("#room_type").load("getroomtype.php?choice=" + value + "&citychoice=" + $("#city").val());		    		    
	    });
	       
						$(document).ready(function()
						{
								     
						});
						$(".chzn-select").chosen();
				     $(".chzn-select-deselect").chosen({ allow_single_deselect: true });
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
						
						$("#datepicker2").focus(function () 
						{
							var date = $("#datepicker").datepicker('getDate');
							if (date){
							date.setDate(date.getDate() + 1);
							$( "#datepicker2" ).datepicker( "option", "minDate", date );
							}
						});
	  </script>
						

    </div><!--/.fluid-container-->
     
 

  </body>
</html>
