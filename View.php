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
  <?php include'db.php'; ?>
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
			  <br/><li><a href="View.php" style="font-size:18px">View Your Booking</a></li>
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
		  <div>        
					<h3 style="margin-left:20px">View Bookings</h3></div>
					
					<br/>
					
		            <div class="row-fluid" style="margin-left:20px">
			      <div style="margin-left:20px">
			      <a href="CreateUser.php"><button type="button" class="btn"> Create a Guest </button></a>
			      <a href="EditUser.php"><button type="button" class="btn"> Edit/Delete a Guest </button></a>
			      <a href="index.php"><button type="button" class="btn"> Create/Edit Rooms </button></a><br/>
			      </div>
						<?php
						      $booking_query = $db->query("SELECT * FROM `Booking`");						
						      //$booking_query = mysqli_query($con,"SELECT guest_id,booking_id FROM `Booking` WHERE guest_id='$guest_id'");
						      //$result=mysqli_query($booking_query);
						      $count=mysql_num_rows($booking_query);
						      if($count==0)
						      {
							echo '<h4> There are no bookings currently.</h4>';
							echo '<br/><br/><a href="index.php"><button type="button" class="btn">Back to Home</button></a>';
						      }
						      
						      else
						      {
						      echo '<table border ="1">
						      <tr>
						      <td style="width:200px; height: 30px" align="middle"><b> Guest Id </b></td>
						      <td style="width:200px; height: 30px" align="middle"><b> Booking Id </b></td>
						      <td style="width:200px; height: 30px" align="middle"><b> View Option </b></td>
						      <td style="width:200px; height: 30px" align="middle"><b> Modify Option </b></td>
						      <td style="width:200px; height: 30px" align="middle"><b> Book Option </b></td>
						      </tr>
						      </table>';
						      while($booking = mysql_fetch_assoc($booking_query))
						      {
						      
						      echo '<table border ="1">
						      <tr>
						      <td style="width:200px; height: 30px" align="middle">' .stripslashes($booking['guest_id']). '</td>
						      <td style="width:200px; height: 30px" align="middle">' .stripslashes($booking['booking_id']). '</td>
						      <td style="width:200px; height: 30px" align="middle"><a href="viewbooking.php?bookingid='.$booking['booking_id'].'"><button class= "btn">View Booking</button></a></td>
						      <td style="width:200px; height: 30px" align="middle"><a href="Modify.php?bookingid='.$booking['booking_id'].'"><button class= "btn">Modify Booking</button></a></td>
						      <td style="width:200px; height: 30px" align="middle"><a href="Cancel.php?bookingid='.$booking['booking_id'].'"><button class= "btn">Cancel Booking</button></a></td>
						      </tr>
						      </table>';
						      }    
						      echo '<br/><br/><a href="index.php"><button type="button" class="btn">Back to Home</button></a>';
						      }
						?> 
                    </div><!--/span-->		
							
        </div><!--/hererow-->

      <hr>
	  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
      <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
	  <script src="chosen/chosen.jquery.js" type="text/javascript"></script>
	  <script type="text/javascript">
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
