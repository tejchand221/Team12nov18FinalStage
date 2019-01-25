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
    <script src="js/register.js"></script>
    <link rel="stylesheet" href="css/register.css">
    <title>Brisbane Study Center</title>
</head>
<body onLoad="run_first()">
<div id="banner" 
		style="background-image: url('images/brisbane.png'); background-size: 100% 100%;">
        <h1 class="text-center display-1 font-weight-bold text-white" >Brisbane Study Center</h1>
    </div>
	
    <?php include("include/nav.inc") ?>
    <div class="container">
    	<form action="user1.php" method="post">
        <div class="bg-light mt-3 px-2 member_frm" style="border-radius: 5px; border: #0000ff solid thick">
        	<h1>Registration Form</h1>
          
            <p><i>Fields marked with an asterisk (*) are mandatery.</i></p>
            <div class="row">
            	<div class="col">
                	<label for="fname">* First Name:</label>
                    <input type="text" id="fname" name="fname" size="30" maxlength="50" required />
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label for="lname">* Last Name:</label>
                    <input type="text" id="lname" name="lname" size="30" maxlength="50" required />
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label for="dob">* Date Of Birth:</label>
                    <input type="date" id="dob" name="dob" required />
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label for="email">* Email:</label>
                	<input type="email" id="email" name="email" size="30" maxlength="50" required />
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label for="phone">* Phone:</label>
                	<input type="int" id="phone" name="phone" size="10" maxlength="10" placeholder="10 digits" required />
                </div>
            </div>
            
            <div class="row">
            	<div class="col">
                	<label for="address">* Address:</label>
                    <input type="text" id="address" name="address" size="30" maxlength="80" required />
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label for="zip">* Postcode:</label>
                    <input type="text" id="postcode" name="postcode" size="10" maxlength="10" placeholder="4 digits"
                               onChange="checkZIPCode(document)" required />
                    <span class="error_msg" id="zip_msg"></span>
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label for="password">* Password:</label>
                    <input type="password" id="password" name="password" size="20" maxlength="20" required />
                    <span id="pwd_msg" class="error_msg"></span>
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label for="rePassword">* Re-try:</label>
                    <input type="password" id="rePassword" size="20" maxlength="20"
                               onChange="checkRePassword(document)" />
                </div>
            </div>
            
            <div class="row">
            	<div class="col">
                	<label>&nbsp;</label>
                    <input type="submit" id="submit" value="Submit" onClick="return validateInfo(document)" />
                    <input type="reset" id="reset" value="Clear Form" onClick="reset_frm(document)" />
                </div>
            </div>
        </div>
        </form>
    </div>
	<div id="footer" class="bg-secondary mt-3">
        <h3 class="text-center font-weight-bold text-white">Brisbane Study Center</h3>
    </div>
</body>
</html>


