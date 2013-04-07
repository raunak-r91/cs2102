<?php session_start(); ?>
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
	header("Location: Login.html?from=booking");
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
		   <?php
		  if (isset($_POST['submit'])) {
		      if (!isset($_POST['name'])|| empty($_POST['name'])) {
			  echo '<h5 style="color:red;margin-left:20px">Please enter a name for the hotel!</h5>';
		      }
		      else if (!isset($_POST['city'])|| empty($_POST['city'])) {
			  echo '<h5 style="color:red;margin-left:20px">Please enter the city of the hotel!</h5>';
		      }
		      else if (!isset($_POST['address']) || empty($_POST['address'])) {
			  echo '<h5 style="color:red;margin-left:20px">Please enter the address of the hotel!</h5>';
		      }
		      else if (!isset($_POST['phone'])|| empty($_POST['phone'])) {
			  echo '<h5 style="color:red;margin-left:20px">Please enter the contact number of the hotel!</h5>';
		      }
		      else if (!isset($_POST['email'])|| empty($_POST['email'])) {
			  echo '<h5 style="color:red;margin-left:20px">Please enter the email of the hotel!</h5>';
		      }
		      else {
			  $name = $_POST['name'];
			  $email = $_POST['email'];
			  $address = $_POST['address'];
			  $phone = $_POST['phone'];
			  $city = $_POST['city'];
			  $pool = 0;
			  $gym = 0;
			  $restaurant = 0;
			  $wifi = 0;
			  if ($_POST['pool'] == 'YES'){
			    $pool = 1;
			  }
			  if ($_POST['gym'] == 'YES'){
			    $gym = 1;
			  }
			  if ($_POST['restaurant'] == 'YES'){
			    $restaurant = 1;
			  }
			  if ($_POST['wifi'] == 'YES'){
			    $wifi = 1;
			  }
			  
			
			  $inserthotel = $db->query("INSERT INTO `Hotel`(`name`, `country`, `city`, `address`, `phone_number`, `email`, `swimming_pool`, `gym`, `restaurant`, `wifi`)
						    VALUES ('$name','India','$city','$address','$phone','$email',$pool,$gym,$restaurant, $wifi)'");
			    
			    echo '<h5 style="color:red;margin-left:20px">Guest with '.$userid.' has been created</h5>';
		      }
		  }
		  ?>
		  <h3 style="margin-left:20px">Create A Guest</h3></div>
		  <br/>
		  <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		            <div class="row-fluid" style="margin-left:20px">
						<strong style="margin-left:20px">Hotel City </strong><input name="city" style="width:200px;margin-left:80px" type="text" class="input-block-level">
						<br/><strong style="margin-left:20px">Hotel Name </strong><input name="name" style="width:200px;margin-left:80px" type="text" class="input-block-level">
						<br/><strong style="margin-left:20px"> Email ID </strong><input name="email"style="width:200px;margin-left:86px" type="text" class="input-block-level">
						<br/><strong style="margin-left:20px"> Address </strong><input name="address" style="width:200px;margin-left:86px" type="text" class="input-block-level">
						<br/><strong style="margin-left:20px"> Phone Number </strong><input name="phone" style="width:200px;margin-left:44px" type="text" class="input-block-level">
						
		  </br><strong style="margin-left:20px"> Swimming Pool </strong>
		  <select type="text" name="pool" id="pool" class="input-medium" style="margin-left:60px;width:200px;">
		  <option>YES</option>
		  <option>NO</option>
		  </select>
		  
		  </br><strong style="margin-left:20px"> Gym </strong>
		  <select type="text" name="gym" id="gym" class="input-medium" style="margin-left:114px;width:200px;">
		  <option>YES</option>
		  <option>NO</option>
		  </select>
		  
		  </br><strong style="margin-left:20px"> Restaurant </strong>
		  <select type="text" name="restaurant" id="restaurant" class="input-medium" style="margin-left:80px;width:200px;">
		  <option>YES</option>
		  <option>NO</option>
		  </select>
		  
		  </br><strong style="margin-left:20px"> Wifi </strong>
		  <select type="text" name="wifi" id="wifi" class="input-medium" style="margin-left:114px;width:200px;">
		  <option>YES</option>
		  <option>NO</option>
		  </select>
		  
                    </div><!--/span-->
					<br/><button style="margin-left:40px" name="submit" class="btn btn-primary" type="submit">Create Hotel</button>
        		  </form>	
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
