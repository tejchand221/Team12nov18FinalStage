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
    <div class="container">
    	<div class="row">
        	<div class="col">
            	<div class="bg-light mt-3 px-2" style="border-radius: 5px; border: #0000ff solid thick">
            		<h1>About Us</h1>
            		<p><a href="register.php"><img src="images/about.jpg" width="480" height="350" ><br></a></p><p>In the month of November 2014, Department of Home Affairs of Australia (then Department of Immigration and Border Protection) started accepting PTE Academic as standard English Language Test for visa application. Two of our Founder Directors realised that there is a need of proper and knowledgeable PTE training institution to train visa applicants with necessary skills, strategies, and techniques to ace PTE. Both of our directors have exceptional scores of IELTS 9, PTE 90 and one of our directors has GMAT 720+. They took the initiation of imparting their knowledge of English language to the aspirants of PTE Academic on December 6, 2014. The institution which started in a small classroom of a house has now expanded to 5 Branches in Australia and grown to employ more than 30 people.</p>
            	</div>
            </div>
        </div>
    </div>
	<div id="footer" class="bg-secondary mt-3">
        <h3 class="text-center font-weight-bold text-white">Brisbane Study Center</h3>
    </div>
</body>
</html>