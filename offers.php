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
    <h4>Select best offer that matches your timings</h4>
    	<p>
	<img src="images/offer1.png" width="260" height="340">
   <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" style="padding-left:430px;">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="GCRJ28AFLXURQ">
        <input type="image" src="https://www.paypalobjects.com/en_AU/i/btn/btn_paynow_SM.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
        <img alt="PayPal" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1">
      </form>
	<img src="images/offer2.png" width="260" height="340">
     <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" style="padding-left:430px;">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="GCRJ28AFLXURQ">
        <input type="image" src="https://www.paypalobjects.com/en_AU/i/btn/btn_paynow_SM.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
        <img alt="PayPal" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1">
      </form>
	<img src="images/offer3.png" width="260" height="340">
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" style="padding-left:430px;">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="GCRJ28AFLXURQ">
        <input type="image" src="https://www.paypalobjects.com/en_AU/i/btn/btn_paynow_SM.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
        <img alt="PayPal" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1">
      </form>
	<img src="images/offer4.png" width="260" height="340">
     <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" style="padding-left:430px;">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="GCRJ28AFLXURQ">
        <input type="image" src="https://www.paypalobjects.com/en_AU/i/btn/btn_paynow_SM.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
        <img alt="PayPal" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1">
      </form>
	</p>
    </div>
	<div id="footer" class="bg-secondary mt-3">
        <h3 class="text-center font-weight-bold text-white">Brisbane Study Center</h3>
    </div>
</body>
</html>