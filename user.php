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
        <h1>Welcome To Brisbane Study Center</h1>
        <?php
        // check session variable
        if (isset($_SESSION['valid_user']))
        {
            //make the database connection
            $conn  = db_connect();
            $user_check = $_SESSION['valid_user'];

            //make a query to check if a valid user
            $ses_sql = "select fname from users where email='$user_check'";
            $result = $conn -> query($ses_sql);
            if ($result -> num_rows == 1) {
                
                $fname = $_SESSION['fname'];
				echo "<p>Welcome <b>$fname</b></p>";
                echo "<p><a href=\"logout.php\">Logout</a></p>";
            }
            else {
                echo "<p>Something is wrong.</p>";
                echo "<p><a href=\"login.php\" id=\"6\" 
				onClick=\"nav_item_selected(6)\">Login</a></p>";
            }
        }
        else
        {
            echo "<p>You are not logged in.</p>";
            echo "<p><a href=\"login.php\" id=\"6\" 
			onClick=\"nav_item_selected(6)\">Login</a></p>";
        }
        ?>
         	<div>
            		<img src="images/timetable.png" width="480" height="350" align="right">
         			<img src="images/profile.png" width="180" height="250"><br>
                	<label for="image">* Profile photo:</label><br>
                    <input type="file" id="image" name="image" placeholder="photo"/><br>
            </div>
        <div>       
        <a href="https://pearsonpte.com/wp-content/uploads/2014/10/Tutorial.pdf">Visit PTE</a><br><br>
        <a href="https://www.wksu.kz/images/stories/the_new_prepare_for__general_training_modules.pdf">Visit IELTS</a>
        
        </div>
        
    </div>
	<div id="footer" class="bg-secondary mt-3">
        <h3 class="text-center font-weight-bold text-white">Brisbane Study Center</h3>
    </div>
</body>
</html>