    <nav class="navbar-expand-lg bg-primary navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav md-auto">
                <li class="nav-item"><a class="nav-link" id="0" onClick="nav_item_selected(0)" href="index.php">Home</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php" id="1" onClick="nav_item_selected(1)">About Us</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="courses.php" id="2" onClick="nav_item_selected(2)">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="offers.php" id="3" onClick="nav_item_selected(3)">Offers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="success.php" id="4" onClick="nav_item_selected(4)">Our Success</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus.php" id="5" onClick="nav_item_selected(5)">Contact Us</a>
                </li>
                <?php if(isset($_SESSION['valid_user'])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="user.php" id="6" onClick="nav_item_selected(6)"><?php echo $_SESSION['fname']; ?></a>
                </li>
               <li class="nav-item">
                   
                    <a class="nav-link" href="logout.php" id="7" onClick="nav_item_selected(6)">Sign-out</a>
                </li>
                <?php else: ?>
                <div style="position: absolute ;left:87%; top:auto; right:auto;">
                <li class="nav-item">
                    <a class="nav-link" href="login.php" id="6" onClick="nav_item_selected(6)">Sign-in</a>
                </li></div>
                <div style="position: absolute ;left:92%; top:auto; right:auto;">
                <li class="nav-item">
                    <a class="nav-link" href="register.php" id="7" onClick="nav_item_selected(7)">Register</a>
                </li>
                <?php endif; ?>
                </div>
            </ul>
        </div>
    </nav>

