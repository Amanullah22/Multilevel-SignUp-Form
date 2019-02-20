<!DOCTYPE html>
<?php
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"budget_lawn");
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<link rel="shortcut icon" href="Pics/2.jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Contact Form</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <style>
.glyphicon {
    font-size: 20px;
	color: white !important;
	opacity: 1;
}

body,h1,h2,h3,h4,h5,h6 {font-family: "Open Sans", sans-serif;}
.w3-navbar,h1,button {font-family: "Open Sans", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
body{
	background:#ECF0F1;
}

.btn {
      padding: 10px 20px;
      background-color: #2E4053;
      color: white;
      border-radius: 0;
      transition: .2s;
  }
  
  .btn:hover, .btn:focus {
      background-color: maroon;
      color: white;
  }


.modal-header, h4, .close {
      color: #fff !important;
      text-align: left;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 20px 0px 0px;
  }

.modal {
    bottom: 0;
    position: fixed;
    overflow-x: hidden;
    top: 60px;
    width: 1050px;
	color: black;
	margin:auto;
	overflow-y: auto !important;
}

.modal-dialog {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
}

.modal-open {
    overflow: hidden;
}

#try{
	width:400px;
}

#try option{
  width:50px;   
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

* {
    box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
    float: left;
    width: 47%;
	margin-left:21px;
	margin-top:20px;
    height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Mark the steps that are finished and valid: */
.progress-bar.finish {
  background-color: green;
}

.progress-bar.active {
  background-color: green;
}

input, select, option {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: "Open Sans", sans-serif;
  border: 1px solid #aaaaaa;
  color:black;
  font-weight:normal;
}

.btn3 {
	padding: 5px 5px;
      background-color: green;
      color: white;
      border-radius: 0;
      transition: .2s;
	  text-align:left;
	  font-family:"Calibri";
	  font-weight:normal;
}

.btn3:hover {
     background-color: maroon !important;
     color: white;
  }
  
#check {
	align:center;
	width:20px;
	margin-left:45px;
}

#check1 {
	align:center;
	width:20px;
	margin-left:70px;
}

#showdiv {
    display: none;
}

.ui-datepicker {
  margin-left: 80px;
}
</style>


<script>
function showDiv() {
   document.getElementById('showdiv').style.display = "block";
}

function myFunction1() {
    $("#2").show("slow");
	$("#1").hide("slow"); 
}
function myFunction2() {
    $("#3").show("slow");
    $("#2").hide("slow");
}
function myFunction3() {
    $("#1").show("slow");
	$("#2").hide("slow");
    
}
function myFunction4() {
    $("#4").show("slow");
	$("#3").hide("slow");
}
function myFunction5() {
    $("#3").show("slow");
    $("#4").hide("slow");
}
function myFunction6() {
    $("#2").show("slow");
    $("#3").hide("slow"); 
}

$(function() {
    $( "#datepicker" ).datepicker();
});
</script>

<body>
<div class="container">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10 content">
			
<button style="margin-left:20px" class="w3-btn w3-padding-16 w3-large w3-green w3-margin-top" data-toggle="modal" data-target="#myModal1">Sign Up</button>
		
	<div  class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-lg">
    
     <!-- Modal content-->
<div class="modal-content w3-center">
<div style="background-color:#2E4053;" class="modal-body">
 
<!-- First Tab -->
  <div id="1" style="margin-left:0px;display:block;">
  <form id="msform" action="Form3.php"  method="post">
  <button type="button" class="close" data-dismiss="modal"><span style="margin-right:20px;" class="glyphicon glyphicon-remove"></span></button>
  <h2 style="color:white;text-align:center;margin-left:10px;margin-bottom:30px;margin-top:0px;font-family:Oswald;">Step 1. ENTER YOUR ADDRESS</h2>
	<div class="progress" style="height:30px;margin-bottom:0px;">
	<div  class="progress-bar" role="progressbar" style="background:#1A5276;display:flex;align-items: center;justify-content:center;width:25%;border:1px solid white;color:white;font-size:15px;">
      <b>1. ENTER YOUR ADDRESS</b>
    </div>
    <div  class="progress-bar" role="progressbar" style="display:flex;align-items: center;justify-content:center;background:#5499C7;width:25%;border:1px solid white;color:white;font-size:15px;">
      <b>2. PRICING & SERVICES</b>
    </div>
    <div  class="progress-bar" role="progressbar" style="display:flex;align-items: center;justify-content:center;background:#5499C7;width:25%;border:1px solid white;color:white;font-size:15px;">
      <b>3. ACCOUNT INFORMATION</b>
    </div>
	<div  class="progress-bar" role="progressbar" style="display:flex;align-items: center;justify-content:center;background:#5499C7;width:25%;border:1px solid white;color:white;font-size:15px;">
      <b>4. PAYMENT METHOD</b>
    </div>
    </div>
    <div class="row" style="font-weight:bold;color:grey;background-color:#D5D8DC;text-align:center;height:100%;width:100%;margin:auto;">
	<div class="column" style="text-align:left;color:black;">
	First Name <font color="red">*</font> <br>
    <input  type="text" name="fname" required>
	Phone <font color="red">*</font><br>
    <input  type="text" name="phone1" required>
	Address <font color="red">*</font><br>
    <input  type="text" name="address" required>
	Lot Type <font color="red">*</font><br>
	<select name="lot_name" placeholder="Please Choose One" style="font-weight:normal;color:grey;" required>
	<?php
	$res = mysqli_query($link,"select * from `lot_type`");
	while($row = mysqli_fetch_array($res))
	{
		?>
	<option value="<?php echo $row["lot_name"]; ?>"><?php echo $row["lot_name"]; ?></option>
	<?php
	}
	?>
	</select>
	</div>
	<div class="column" style="text-align:left;color:black;">
    Last Name <font color="red">*</font><br>
    <input  type="text" name="lname" required>
	Email <font color="red">*</font><br>
    <input  type="text" name="email" required>
	Zip Code <font color="red">*</font><br>
    <input  type="number" name="zipcode" required>
	How did you hear about us? <font color="red">*</font><br>
    <select name="reference" placeholder="Please Choose One" style="font-weight:normal;color:grey;" required>
	<?php
	$res = mysqli_query($link,"select * from `reference`");
	while($row = mysqli_fetch_array($res))
	{
		?>
	<option value="<?php echo $row["ref_name"]; ?>"><?php echo $row["ref_name"]; ?></option>
	<?php
	}
	?>
	</select>
  </div>
  <input style="width:300px;border:none;margin-top:5px;margin-bottom:15px;font-family:Oswald;" type="submit" name="next_step1" class="next btn action-button" value="GO TO THE NEXT STEP" />
</div>
</form>

<?php
if (isset($_POST['next_step1'])) {
	
	$fname = ($_POST['fname']);
	$lname = ($_POST['lname']);
	$email = ($_POST['email']);
	$address = ($_POST['address']);
	if(isset($_POST['phone1']) && !empty($_POST['phone1'])){
		$phone1 = ($_POST['phone1']);
	}
	else{ $phone1="";}
	
	$zipcode = ($_POST['zipcode']);
	
	if(isset($_POST['lot_name']) && !empty($_POST['lot_name'])){
		$lot = ($_POST['lot_name']);
	}
	else{ $lot="";}
	
	if(isset($_POST['reference']) && !empty($_POST['reference'])){
		$reference = ($_POST['reference']);
	}
	else{ $reference="";}
	
	$res = mysqli_query($link,"select * from `addresses`");
	
    //if($res->num_rows==0) {
        //echo "<div class='container text-center'><h3>Sorry we do not provide services here,<br><a href='Start.php' style='color:blue;'>Please Try Again!</h3></div>";
    //}
	//else if(($res->num_rows>0)){
	
		$sql = "INSERT INTO users(fname,lname,phone,email,address,zipcode,lot_type,reference) VALUES('$fname','$lname','$phone1','$email','$address','$zipcode','$lot','$reference')";
		mysqli_query($link,$sql);
	//} 
	//else 
	//{// echo "<div class='container text-center'><h3>Server did'nt respond,<br><a href='Start.php' style='color:blue;'>Please Try Again!</h3></div>";}
}
?>
</div>

<!-- Second Tab -->
  <div id="2" style="margin-left:0px;display:none;">
  <form id="msform" action="Form3.php"  method="post" onsubmit="myFunction2();return false;">
  <button type="button" class="close" data-dismiss="modal"><span style="margin-right:20px;" class="glyphicon glyphicon-remove"></span></button>
  <h2 style="color:white;text-align:center;margin-left:10px;margin-bottom:30px;margin-top:0px;font-family:Oswald;">Step 2. PRICING & SERVICES</h2>
	<div class="progress" style="height:30px;margin-bottom:0px;">
	<div  class="progress-bar" role="progressbar" style="background:#1A5276;display:flex;align-items: center;justify-content:center;width:25%;border:1px solid white;color:white;font-size:15px;">
      <b>1. ENTER YOUR ADDRESS</b>
    </div>
    <div  class="progress-bar" role="progressbar" style="display:flex;align-items: center;justify-content:center;background:#1A5276;width:25%;border:1px solid white;color:white;font-size:15px;">
      <b>2. PRICING & SERVICES</b>
    </div>
    <div  class="progress-bar" role="progressbar" style="display:flex;align-items: center;justify-content:center;background:#5499C7;width:25%;border:1px solid white;color:white;font-size:15px;">
      <b>3. ACCOUNT INFORMATION</b>
    </div>
	<div  class="progress-bar" role="progressbar" style="display:flex;align-items: center;justify-content:center;background:#5499C7;width:25%;border:1px solid white;color:white;font-size:15px;">
      <b>4. PAYMENT METHOD</b>
    </div>
    </div>
    <div class="row" style="background-color:#D5D8DC;text-align:center;height:100%;width:100%;margin:auto;">
  <div class="column">
	<b>Address:</b>
	<br>
	<button onclick="myFunction3()" style="font-family:Oswald;font-size:20px;text-align:center;margin-top:30px;width:100px;border:none;background:green;float:left;" type="button" name="previous" class="btn3"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;&nbsp;BACK</button>
	<hr style="margin-top:90px;">
	<h2 style="text-align:center;font-family:Oswald;">MOWING WEEKLY PRICE <font style="color:green;">($30.5)</font></h2>
	<input style="width:400px;height:60px;background:#2E4053;border:2px solid grey;font-family:Oswald;color:white;" type="button" name="weekly" id="weekly" onclick="showDiv(); " value="SIGN UP FOR WEEKLY SERVICE" />
  </div>
  <div class="column">
    <b>Zip Code:</b>
	<hr style="margin-top:90px;">
	<h2 style="text-align:center;font-family:Oswald;">MOWING BI-WEEKLY PRICE <font style="color:green;">($40.5)</font></h2>
	<input style="width:400px;height:60px;background:#2E4053;border:2px solid grey;font-family:Oswald;color:white;" type="button" name="bi_weekly" id="bi_weekly" onclick="showDiv(); " value="SIGN UP FOR BI-WEEKLY SERVICE" />
  </div>
  <p>Select Availability for Mowing Service Only</p>
  <input name="date" class="datepicker" style="text-align:center;margin-bottom:20px;width:400px;" id="datepicker" type="text" data-language='en' placeholder="Click to Check Availability *" required />
  <p style="color:grey;font-weight:bold;">Note: Recurring Mowing Service Day Will be whatever day of the week you select to start</p><br>
	<hr style="width:900px;margin-left:50px;">
	<div id="showdiv">
	<h2 style="text-align:center;font-family:Oswald;">WE ALSO OFFER THE FOLLOWING SERVICES</h2>
	<div class="column" style="text-align:left;">
    <h3 style="font-size:20px;font-family:Oswald;margin-left:50px">SIGN UP FOR:</h3><br>
	<input id="check" type="checkbox" name="service[]" value="scalp(spring only)"> <font style="font-size:20px;color:grey; !important">Scalp (Spring Only) </font><font style="color:red;font-size:20px;">$61</font><br>
	<input id="check" type="checkbox" name="service[]" value="lawn fertiization and weed control"> <font style="font-size:20px;color:grey; !important">Lawn Fertilization & Weed Control </font><font style="color:red;font-size:20px;">$59</font><br>
	<input id="check" type="checkbox" name="service[]" value="shrub fertilization"> <font style="font-size:20px;color:grey; !important">Shrub Fertilization </font><font style="color:red;font-size:20px;">$59</font><br>
	<input id="check" type="checkbox" name="service[]" value="fire ant control"> <font style="font-size:20px;color:grey; !important">Fire Ant Control </font><font style="color:red;font-size:20px;">$105</font><br>
	<input id="check" type="checkbox" name="service[]" value="aeration"> <font style="font-size:20px;color:grey; !important">Aeration </font><font style="color:red;font-size:20px;">$140</font><br>
  </div>
  <div class="column" style="text-align:left;">
    <h3 style="font-size:20px;font-family:Oswald;margin-bottom:28px;margin-left:70px;">REQUEST A FREE PHYSICAL ESTIMATE:</h3>
	<input id="check1" type="checkbox" name="service[]" value="Shrub Trimming"> <font style="font-size:20px;color:grey; !important">Shrub Trimming </font><br>
	<input id="check1" type="checkbox" name="service[]" value="Bed Weeding"> <font style="font-size:20px;color:grey; !important">Bed Weeding </font><br>
	<input id="check1" type="checkbox" name="service[]" value="Leaf Clean Up"> <font style="font-size:20px;color:grey; !important">Leaf Clean Up </font><br>
	<input id="check1" type="checkbox" name="service[]" value="Crape Myrtle Trimming"> <font style="font-size:20px;color:grey; !important">Crape Myrtle Trimming </font><br>
  </div>
  <input style="width:300px;border:none;margin-top:20px;margin-bottom:20px;font-family:Oswald;" type="submit" name="next_step2" class="next btn action-button" value="NEXT" />
  <p style="text-align:center;font-family:Oswald;color:red;font-size:17px;">We Will Contact You to Schedule the following Services</p>
	<p style="color:grey;font-weight:normal;">Have questions? Visit our <font style="color:red;font-weight:bold;">FAQ </font>page or call us to set up service at <font style="color:black;font-weight:bold;">972-424-3930</font></p></div>
  </div></form>
  
<?php
  $value = 0;
  
  function weekly() {
    $GLOBALS['value'] = 30.5;
  }
  
  function bi_weekly() {
    $GLOBALS['value'] = 40.5;
}

	if(array_key_exists('weekly',$_POST)){
   weekly();
}

if(array_key_exists('bi_weekly',$_POST)){
   bi_weekly();
}
   
if (isset($_POST['next_step2'])) {
	
	$mow = 0;
	
	if(isset($_POST['date']) && !empty($_POST['date'])){
	$date = date('Y-m-d', strtotime($_POST['date']));
	}
	else{ $date="";}
	
	if(isset($_POST['service']) && !empty($_POST['service'])){
		$service = ($_POST['service']);
	}
	else{ $service="";}
	
	$res = mysqli_query($link,"select * from `addresses`");
	
    //if($res->num_rows==0) {
        //echo "<div class='container text-center'><h3>Sorry we do not provide services here,<br><a href='Start.php' style='color:blue;'>Please Try Again!</h3></div>";
    //}
	//else if(($res->num_rows>0)){
	
		$N = count($service);
		$sql = "INSERT INTO users(date,mow) VALUES('$date','$mow')";
		for($i=0; $i < $N; $i++)
		{
			$sql = "INSERT INTO users(service) VALUES('$service[$i]')";
		}
		mysqli_query($link,$sql);
	//} 
	//else 
	//{// echo "<div class='container text-center'><h3>Server did'nt respond,<br><a href='Start.php' style='color:blue;'>Please Try Again!</h3></div>";}
echo $date;
echo "<br>";
echo $value;
echo "<br>";
$N = count($service);

    echo("You selected $N door(s): ");
    for($i=0; $i < $N; $i++)
    {
      echo($service[$i] . " ");
    }
}
?>
</div>
  
  <!-- Third Tab -->
  <div id="3" style="margin-left:0px;display:none;">
  <form id="msform" action=""  method="post" onsubmit="myFunction4();return false">
  <button type="button" class="close" data-dismiss="modal"><span style="margin-right:20px;" class="glyphicon glyphicon-remove"></span></button>
  <h2 style="color:white;text-align:center;margin-left:10px;margin-bottom:30px;margin-top:0px;font-family:Oswald;">Step 3. ACCOUNT INFORMATION</h2>
	<div class="progress" style="height:30px;margin-bottom:0px;">
	<div  class="progress-bar" role="progressbar" style="background:#1A5276;display:flex;align-items: center;justify-content:center;width:25%;border:1px solid white;color:white;font-size:15px;">
      <b>1. ENTER YOUR ADDRESS</b>
    </div>
    <div  class="progress-bar" role="progressbar" style="display:flex;align-items: center;justify-content:center;background:#1A5276;width:25%;border:1px solid white;color:white;font-size:15px;">
      <b>2. PRICING & SERVICES</b>
    </div>
    <div  class="progress-bar" role="progressbar" style="display:flex;align-items: center;justify-content:center;background:#1A5276;width:25%;border:1px solid white;color:white;font-size:15px;">
      <b>3. ACCOUNT INFORMATION</b>
    </div>
	<div  class="progress-bar" role="progressbar" style="display:flex;align-items: center;justify-content:center;background:#5499C7;width:25%;border:1px solid white;color:white;font-size:15px;">
      <b>4. PAYMENT METHOD</b>
    </div>
    </div>
    <div class="row" style="background-color:#D5D8DC;text-align:center;height:600px;width:100%;margin:auto;">
	<div class="column">
	<b>Address:</b>
	<br>
	<button onclick="myFunction6()" style="font-family:Oswald;font-size:20px;text-align:center;margin-top:30px;width:100px;border:none;background:green;float:left;" type="button" name="previous" class="btn3"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;&nbsp;BACK</button>
	<hr style="margin-top:90px;">
	<h3 style="font-size:20px;font-family:Oswald;margin-left:40px">PERSONAL INFORMATION</h3><br>
    <input  style="width:300px !important;margin-left:60px !important;margin-bottom:10px !important;" type="text" name="fname">
	<input  style="width:300px !important;margin-left:60px !important;margin-bottom:10px !important;" type="text" name="lname">
    <input  style="width:300px !important;margin-left:60px !important;margin-bottom:10px !important;" type="number" name="phone">
	<input  style="width:300px !important;margin-left:60px !important;margin-bottom:10px !important;" placeholder="Alternate Phone"type="number" name="altphone">
	<input  style="width:300px !important;margin-left:60px !important;margin-bottom:10px !important;" type="text" name="email">
  </div>
  <div class="column">
	<b>Zip Code:</b>
	<hr style="margin-top:90px;">
	<h3 style="font-size:20px;font-family:Oswald;margin-right:140px">ADDITIONAL INFORMATION</h3><br>
    <input id="check1" type="checkbox" name="info" value="Locked Gates"> <font style="font-size:20px;color:grey; !important;margin-right:500px;">Locked Gates? </font><br>
	<input id="check1" type="checkbox" name="info" value="Pets"> <font style="font-size:20px;color:grey; !important;margin-right:500px">Pets? </font><br>
    <textarea style="color:black;margin-top:10px;margin-right:25px" rows="6" cols="40" name="comment" form="usrform">Notes/Comments</textarea>
  </div>
  <input style="width:300px;border:none;margin-top:200px;font-family:Oswald;" type="submit" name="next" class="next btn action-button" value="NEXT" />
</div>
</form>
</div>

<!-- Fourth Tab -->
<div id="4" style="margin-left:0px;display:none;">
  <form id="msform" action=""  method="post" onsubmit="return false;">
  <button type="button" class="close" data-dismiss="modal"><span style="margin-right:20px;" class="glyphicon glyphicon-remove"></span></button>
  <h2 style="color:white;text-align:center;margin-left:10px;margin-bottom:30px;margin-top:0px;font-family:Oswald;">Step 4. PAYMENT METHOD</h2>
	<div class="progress" style="height:30px;margin-bottom:0px;">
	<div  class="progress-bar" role="progressbar" style="background:#1A5276;display:flex;align-items: center;justify-content:center;width:25%;border:1px solid white;color:white;font-size:15px;">
      <b>1. ENTER YOUR ADDRESS</b>
    </div>
    <div  class="progress-bar" role="progressbar" style="display:flex;align-items: center;justify-content:center;background:#1A5276;width:25%;border:1px solid white;color:white;font-size:15px;">
      <b>2. PRICING & SERVICES</b>
    </div>
    <div  class="progress-bar" role="progressbar" style="display:flex;align-items: center;justify-content:center;background:#1A5276;width:25%;border:1px solid white;color:white;font-size:15px;">
      <b>3. ACCOUNT INFORMATION</b>
    </div>
	<div  class="progress-bar" role="progressbar" style="display:flex;align-items: center;justify-content:center;background:#1A5276;width:25%;border:1px solid white;color:white;font-size:15px;">
      <b>4. PAYMENT METHOD</b>
    </div>
    </div>
	<div class="row" style="background-color:#D5D8DC;text-align:center;height:600px;width:100%;margin:auto;">
   <div class="column" style="width:300px;">
	<b>Address:</b>
	<br>
	<button onclick="myFunction5()" style="font-family:Oswald;font-size:20px;text-align:center;margin-top:30px;width:100px;border:none;background:green;float:left;" type="button" name="previous" class="btn3"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;&nbsp;BACK</button>
	<hr style="margin-top:90px;">
	</div>
	<div class="column" style="width:300px;">
	<b>Zip Code:</b>
	<hr style="margin-top:90px;">
	</div>
	<div class="column" style="width:300px;">
	<b>Initial payment for first service:</b>
	<hr style="margin-top:90px;">
	</div>
	<div class="column" style="font-family:inherit;font-size:16px;font-weight:normal;margin-top:-180px;color:grey;width:970px;font-weight:normal;">
	<p>We will e-mail your bill once monthly on the last day of the month for that month’s services. The credit card on file for your account will be charged on the 1st of each month for the previous month’s services. We will pre-charge your 1st service today in order to validate the credit card provided. The one-time payment will be applied towards your 1st invoice.
	</p></div>
	<div class="column" style="text-align:left;margin-top:-220px;">
	<select style="font-weight:normal;color:grey;margin-bottom:10px;height:47.5px;" required>
	<option value="">Card Type</option>
	<option value="master">Master Card</option>
	<option value="visa">Visa</option>
	<option value="american express">American Express</option>
	<option value="discover">Discover</option>
	</select>
	<input style="margin-bottom:10px;" type="text" name="billing address" placeholder="Billing Address">
	<input type="text" name="billing zip code" placeholder="Billing Zip Code">
	</div>
	<div class="column" style="text-align:left;margin-top:-220px;">
	<input style="margin-bottom:10px;" type="text" name="card_number" placeholder="Credit Card Number *" required>
	<input style="margin-bottom:10px;" type="text" name="billing_city/state" placeholder="Billing City/State">
            <div class="form-group col-xs-6" style="margin-right:200px;width:473px;text-align:left;">
                <input style="width:210px;margin-left:-15px;" type="text" name="exp_date" required pattern="[0-9]{2}/[0-9]{2}" placeholder="Expiration Date *" required>
				<input style="width:200px;margin-left:10px;" type="number" name="snumber" placeholder="Security Number *" required>	
			<a href=""
				onmouseover="document.getElementById('place-holder-1').src='verify.png';"
				onmouseout="document.getElementById('place-holder-1').src='';">
				<p style="float:right;color:red;font-size:25px;margin-left:200px;margin-top:-40px;">&#10067;</p>
				<img src="" id="place-holder-1" style="zindex: 100; position: absolute; margin-left:-180px;margin-top:50px;" />
			</a>
		</div>
	</div>
	<div class="column" style="font-family:inherit;font-size:16px;font-weight:normal;margin-top:-120px;color:grey;width:970px;font-weight:normal;">
	<input id="check1" style="margin-left:-15px;" type="checkbox" name="terms" value="agreed" required> <font style="font-size:20px;color:grey; !important">Agree to terms of Service </font>
	<p><br>Your prices are based upon your lot type and size. The lot type you selected will be verified by our office staff and your price will be adjusted accordingly if inaccurate information was supplied during your account set up.
	</p>
	<input style="margin-top:20px;width:300px;border:none;margin-bottom:20px;font-family:Oswald;" type="submit" name="submit" class="next btn action-button" value="SUBMIT ORDER"/>
	</div>
	</div>
	</form>
	</div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </body>
  </html>
