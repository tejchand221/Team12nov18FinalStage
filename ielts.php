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
    	<div class="bg-light mt-3 px-2" style="border-radius: 5px; border: #0000ff solid thick">
    	<h1>Ielts</h1>
        <p><a href="https://www.ielts-exam.net/ielts-speaking-test/">Speaking test</a><br>
        <a href="https://www.ielts-exam.net/ielts-writing/">Writing test</a><br>
        <a href="https://www.ielts-exam.net/ielts_reading/">Reading test</a><br> 
        <a href="https://www.ielts-exam.net/IELTS-listening-preparation/">Listening test</a><br>
        <a href="https://www.idp.com/australia/ielts/book-my-test/brisbane/">BOOK YOUR TEST NOW</a>
        </p>
        
         </div> 
    </div>
	<div id="footer" class="bg-secondary mt-3">
        <h3 class="text-center font-weight-bold text-white">Brisbane Study Center</h3>
    </div>
</body>
</html>