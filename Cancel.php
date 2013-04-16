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
    <title>The Fortuna Group</title>
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
	header("Location: Login.html?from=cancel");
      }
  ?>
  
  <?php
    if(isset($_POST['cancelbtn'])) {
      $bookingid = $_POST['bookingID'];
      if($bookingid == "Choose Booking ID") {
	$_SESSION['registered'] = false;
      }
      else {
	$db->query("DELETE FROM `Booking` WHERE booking_id='$bookingid'");
	$_SESSION['registered'] = true;
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
              <br/><li><a href="Booking.php" style="font-size:18px">Book Here</a></li>
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
		  <div><h3 style="margin-left:20px">Cancel Your Booking</h3></div>
		  <h5 style="margin-left:20px">Please select Booking ID to cancel.</h5>
		  
		  <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
		            <div class="row-fluid">
					<?php
					if (isset($_SESSION['registered'])) {
					   if ($_SESSION['registered']==true ) {
  					    $message = 'Your Booking Has been Cancelled';
					    echo '<div><strong style="margin-left:20px"><font color = "red">'.$message.'</font></strong></div>';
					    unset($_SESSION['registered']); 
					    }
					  else {
					    $message = 'Please select a valid Booking ID';
					    echo '<div><strong style="margin-left:20px"><font color = "red">'.$message.'</font></strong></div>';
					    unset($_SESSION['registered']); 
					  }
					}
					?>
					<?php
					  $username = $_SESSION['username'];
					  if ($username == 'admin') {
					    $bookingid = $_GET['bookingid'];
					    $booking_query = $db->query("SELECT guest_id FROM `Booking` WHERE booking_id = '$bookingid'");
					    $booking = $db->fetch_assoc($booking_query);
					  echo '<div>
					  <strong style="margin-left:20px"> User ID: </strong><input type="text" disabled class="input-medium" style="margin-left:138px" value="'
					  .$booking['guest_id'].
					  '"></div>';
					  }
					?>
					
					<div>
					<?php
					  $username = $_SESSION['username'];
					  if ($username == 'admin') {
					       echo '<strong style="margin-left:20px"> Chosen Booking ID </strong>';
					      echo '<select type="text" disabled class="input-medium" name="bookingID" id="bookingID" style="margin-left:60px;width:200px;">';
					    $bookingid = $_GET['bookingid'];
					      echo '<option>'
					      .$bookingid.
					      '</option>';
					  ?>
					      <script>
					    $(function() 
					    {
							  $("#hotel_city").load("getdetails.php?id=" + <?php echo $_GET['bookingid']; ?> + "&choice=hotel_city");
							  $("#hotel_name").load("getdetails.php?id=" + <?php echo $_GET['bookingid']; ?> + "&choice=hotel_name");
							  $("#booking_dates").load("getdetails.php?id=" + <?php echo $_GET['bookingid']; ?> + "&choice=dates");
							  $("#booked_room_type").load("getdetails.php?id=" + <?php echo $_GET['bookingid']; ?> + "&choice=type");
							  $("#numGuests").load("getdetails.php?id=" + <?php echo $_GET['bookingid']; ?> + "&choice=guests");
							   $("#allTypes").load("getdetails.php?id=" + <?php echo $_GET['bookingid']; ?> + "&choice=allType");
					    });
					    </script>	    
					  <?php }
					  else {
					    echo '<strong style="margin-left:20px"> Choose Booking ID </strong>';
					    echo '<select type="text" class="input-medium" name="bookingID" id="bookingID" style="margin-left:60px;width:200px;">';
					    echo '<option> Choose Booking ID </option>';
					      $booking_query = $db->query("SELECT booking_id FROM `Booking` WHERE guest_id = '$username'");
					     while($booking = $db->fetch_assoc($booking_query))
					     {
					      echo '<option>'
					      .stripslashes($booking['booking_id']).
					      '</option>';
					     }
					  }
					 ?>
					</select>
					</div>
					
					<div>
					<strong style="margin-left:20px"> Location </strong>
					<select type="text" disabled class="input-medium" name="hotel_city" id="hotel_city" style="margin-left:129px;">
					
					</select>
					</div>
					
					<div>
					<strong style="margin-left:20px"> Hotel Name </strong>
					<select type="text" disabled class="input-medium" name="hotel_name" id="hotel_name" style="margin-left:110px;">
			
					</select>
					</div>
					
					<div>
					<strong style="margin-left:13px"> Number Of Guests </strong>
					<select type="text" disabled name="numGuests" id="numGuests" class="input-small" style="margin-left:67px;">
					
					</select>
					</div>
					
					<div id="booking_dates">
		
					</div>
					
					<div id="booked_room_type">
		
					</div> <br/>
					
					<br/>
					<br/>
					<br/>
					<div style="margin-left:20px">
					<button type="submit" name="cancelbtn" class="btn btn-primary" onclick="return confirm('Are you sure you want to cancel this booking?');">Confirm Cancellation</button>
					<?php
					  $username = $_SESSION['username'];
					  if ($username == 'admin') {
					    
					    echo '<a href="View.php"><button type="button" class="btn">Back</button></a>';
					  }
					  else {
					     echo '<a href="index.php"><button type="button" class="btn">Back</button></a>';
					  }
					  ?>
					</div>
        </div><!--/hererow-->
	</form>

      <hr>
	  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
      <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
	  <script src="chosen/chosen.jquery.js" type="text/javascript"></script>
	  <script type="text/javascript">
	    
	    	    $("#bookingID").change(function() {
						    
						  
						    var value = $("#bookingID").val();
						    value = value.replace(new RegExp(" ","g"), "%20"); 
						      $("#hotel_city").load("getdetails.php?id=" + value + "&choice=hotel_city");
						      $("#hotel_name").load("getdetails.php?id=" + value + "&choice=hotel_name");
						      $("#booking_dates").load("getdetails.php?id=" + value + "&choice=dates");
						      $("#booked_room_type").load("getdetails.php?id=" + value + "&choice=type");
						      $("#numGuests").load("getdetails.php?id=" + value + "&choice=guests");


						    
						    
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
