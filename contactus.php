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
    	<h1>Australia</h1>
<p>Phone: 1 800 729 282 (Free call within Australia)</p>
<p>
Office Hours: Monday – Friday, 9:00 AM – 6:00 PM local time.
Closed on local holidays.</p>

<h1>New Zealand</h1>
<p>Phone: 0508 306 723 (Free call within New Zealand)</p>
<p>Office Hours: Monday – Friday, 9:00 AM – 6:00 PM local time.
Closed on local holidays.</p>
<h1>India</h1>
<p>Phone: 0008004402020 (Free call within India)</p>
<p>Office Hours: Monday – Friday, 9:00 AM – 6:00 PM local time.
Closed on local holidays.</p>
    </div>
	<div id="footer" class="bg-secondary mt-3">
        <h3 class="text-center font-weight-bold text-white">Brisbane Study Center</h3>
    </div>
</body>
</html>