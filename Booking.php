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
 	date_default_timezone_set('Singapore');
	$d1 = date('m/j/y');
	$arriveDate = DateTime::createFromFormat('m/j/Y',$_POST['departDate']);

	if ($arriveDate < $d1) {
	      	$_SESSION['message'] = "Please enter a valid depearture date";
	}
	else {
	
 	if(!isset($_POST['departDate']) || empty($_POST['departDate'])) {
		$_SESSION['message'] = "Please fill in your departure date";
    }
    
    else if(!isset($_POST['arriveDate']) || empty($_POST['arriveDate'])) {
    	$_SESSION['message'] = "Please fill in your arrival date";
    }
    
    else if(!isset($_POST['hotel_name']) || empty($_POST['hotel_name'])) {
    	$_SESSION['message'] = "Please select Hotel. Remove facilities filter to view all hotels";
    }
    else {
    	$userid = $_SESSION['username'];
    	$city = $_POST['city'];
    
    	$hotelname = $_POST['hotel_name'];
	$roomType = $_POST['room_type'];
    	$number = $_POST['numGuests'];
    
	$arriveDate = DateTime::createFromFormat('m/j/Y',$_POST['arriveDate']);
	$arriveDate = $arriveDate->format('Y-m-d');
    
	$departDate = DateTime::createFromFormat('m/j/Y', $_POST['departDate']);
    	$departDate = $departDate->format('Y-m-d');    	
    $roomquery = $db->query("SELECT distinct r.`capacity` as capacity FROM `Room` r WHERE r.`type` = '$roomType'");
    $roomnumber_result = mysql_fetch_assoc($roomquery);
    $capacity = intval($roomnumber_result['capacity']);
    $numberOfRoomsNeeded = (int)(intval($number)/$capacity);
    if (intval($number)%$capacity > 0) {
      $numberOfRoomsNeeded = $numberOfRoomsNeeded + 1;
    }
      $check_query = $db->query("SELECT *
    	FROM `Room` r
	    WHERE r.`hotel_name` = '$hotelname' AND r.`hotel_country` = 'India' AND r.`hotel_city` = '$city' AND r.`type` = '$roomType'
	    AND r.`number` NOT IN (
		    SELECT b.`room_number`
		    FROM `Booking` b
		    WHERE b.`hotel_name` = '$hotelname' AND b.`hotel_country` = 'India' AND b.`hotel_city` = '$city'
			AND ('$arriveDate' BETWEEN b.`arrival` AND b.`departure`
			OR '$departDate' BETWEEN b.`arrival` AND b.`departure`
			OR b.`arrival` BETWEEN '$arriveDate' AND '$departDate'
			OR b.`departure` BETWEEN '$arriveDate' AND '$departDate')
    	)");

    	$count=mysql_num_rows($check_query);
	    if ($count >= $numberOfRoomsNeeded) {
	      			$number = intval($number);
	      while ($numberOfRoomsNeeded > 0) {
	      	$row = mysql_fetch_assoc($check_query);
			$roomnumber = intval($row['number']);
			$guestNumber = $number;
			if ($capacity < $number){
			  $guestNumber = $capacity;
			}
			
			$db->query("INSERT into `Booking` (`guest_id`, `hotel_name`, `hotel_country`, `hotel_city`, `room_number`, `arrival`, `departure`, `guests`)
                   values ('$userid', '$hotelname', 'India', '$city', $roomnumber, '$arriveDate', '$departDate', $guestNumber)");
     		$_SESSION['registered'] = true;
		$numberOfRoomsNeeded = $numberOfRoomsNeeded - 1;
		$number = $number - $capacity;
	      }
    	}
   		else {
	    	  
     	    $_SESSION['registered'] = false;
    	}
    }
  }
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
	      <?php
	      	    if(isset($_SESSION['username']) && $_SESSION['username'] == 'admin') {
			  echo '<br/><li><a href="View.php" style="font-size:18px">View All Bookings</a></li>';
		    }
		    else {
			 echo '
			  <br/><li><a href="Modify.php" style="font-size:18px">Modify Your Booking</a></li>
			  <br/><li><a href="Cancel.php" style="font-size:18px">Cancel Your Booking</a></li>
			  <br/>
			  <br/>
			  <br/>
			  <li><a href="Booking.php"><button id="booknow" class="btn btn-medium btn-warning" type="button" style="margin-left: 30px; font-size: 24px; width: 200px; height: 50px;"><strong>Click To Book!</strong></button></a></li>';
			 
		    }
		?>					  
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
		      if (isset($_SESSION['message'])) {
		      	echo '<h4 name="message"><font color = "red">'.$_SESSION['message'].'</font></h4>';
			  	unset($_SESSION['message']);
			  } 
			  else if (isset($_SESSION['registered'])) {
			 	 if ($_SESSION['registered']==true ) {
			 	  $userid = $_SESSION['username'];
			  	  $booking_query = $db->query("Select max(`booking_id`) as 'booking_id' from `Booking` where guest_id = '$userid'");
			  	  $booking = $db->fetch_assoc($booking_query);
  
			  	  $message = 'Congratulations, your booking is successul!<br/>Please note your Booking Id - '.$booking['booking_id'].' for future references';
			  	  echo '<h4 name="message"><font color = "red">'.$message.'</font></h4>';
			      unset($_SESSION['registered']); 
				}
				else {
			  		$message = 'Sorry, All the rooms are full!<br/>Please select another room type';
			  		echo '<h4 name="message"><font color = "red">'.$message.'</font></h4>';
			  		unset($_SESSION['registered']); 
				}
		      }
		      ?>
		       <div class="row-fluid">
			<div class="input-append span4">
			      <br/>
			  <div class="side-by-side clearfix" style="margin-left:20px">				
			    <select id="form_field" name="facility" data-placeholder="Which are the facilities you would like	? (Optional to Choose)" style="width: 430px;height: 400px" multiple class="chzn-select" tabindex="8">
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
		    $( "#datepicker2" ).datepicker({ minDate: '+1D' });		
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
		      <select type="text" name="numGuests" class="input-small" style="margin-left:60px;">
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
	      var temp = "";
	      var G = document.getElementsByTagName('optgroup');
	      var O = G[0].getElementsByTagName('option');
	      for(i = 0; i < O.length; i++){
		    if (O[i].selected) {
		        temp = temp + i;
		    }
	      }	      
		  $("#hotel_name").load("gethotelname.php?choice=" + $("#city").val() + "&facility=" + temp);
	      
	    });
	    
	    $("#city").change(function() {
	      var temp = "";
	      var G = document.getElementsByTagName('optgroup');
	      var O = G[0].getElementsByTagName('option');
	      for(i = 0; i < O.length; i++){
		    if (O[i].selected) {
		        temp = temp + i;
		    }
	      }
		  $("#hotel_name").load("gethotelname.php?choice=" + $("#city").val() + "&facility=" + temp);
		    
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
						
						$('#datepicker').datepicker({					
						onSelect: function() 
						{
						$( "#datepicker" ).datepicker({minDate: 'dateToday'});

							//$( "#datepicker" ).datepicker({ minDate: new Date(2013, 1 - 1, 1) });
						var date = $(this).datepicker('getDate',"minDate");
						if (date){
						date.setDate(date.getDate() + 1);
						$( "#datepicker2" ).datepicker( "option", "minDate", date );
						}

						}}); 
						
						$('#datepicker2').datepicker({minDate: 'dateToday'});
							
						
						
			  	  </script>
						

    </div><!--/.fluid-container-->
     
 

  </body>
</html>
