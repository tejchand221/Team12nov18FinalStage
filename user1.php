<?php
//must appear BEFORE the <html> tag
session_start();
include_once('include/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/nav.js"></script>
    <script src="js/read_more.js"></script>
    <title>Brisbane Study Center</title>
</head>
<body onLoad="run_first()">
<div id="banner" 
		style="background-image: url('images/brisbane.png'); background-size: 100% 100%;">
        <h1 class="text-center display-1 font-weight-bold text-white" >Brisbane Study Center</h1>
    </div>
<?php include("include/nav.inc") ?>
<?php
if(isset($_POST['fname'],$_POST['lname'],$_POST['dob'], $_POST['email'],$_POST['phone'], $_POST['address'],$_POST['postcode'], $_POST['password'])) {
    //make the database connection
    $conn  = db_connect();
    $fname = $conn -> real_escape_string($_POST['fname']);
	$lname = $conn -> real_escape_string($_POST['lname']);
	$dob = $conn -> real_escape_string($_POST['dob']);
    $email = $conn -> real_escape_string($_POST['email']);
	$phone = $conn -> real_escape_string($_POST['phone']);
	$address = $conn -> real_escape_string($_POST['address']);
	$postcode = $conn -> real_escape_string($_POST['postcode']);
    $password = $conn -> real_escape_string($_POST['password']);
    
    //create an insert query
    $sql = "insert into users (fname, lname, dob, email, phone, address, postcode, password) 
			VALUES ('$fname', '$lname', '$dob', '$email', '$phone', '$address', '$postcode', '$password')";
    //execute the query
    if($conn -> query($sql))
    {
        echo "<div class=\"container\">";
        echo "<h1>Welcome to Brisbane Study Center</h1>";
        echo "<p>Hi <b>$fname</b></p>";
        echo "<p><a href=\"login.php\" id=\"6\" 
				onClick=\"nav_item_selected(6)\">You can login now</a></p>";
        echo "</div>";
    }
    $conn -> close();
}
else {
    die("Input error");
}
?>
<div id="footer" class="bg-secondary mt-3">
        <h3 class="text-center font-weight-bold text-white">Brisbane Study Center</h3>
    </div>
</body>
</html>




