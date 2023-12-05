<?php
    require 'includes/common.php';
?>


<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Project</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
        <!-- Header -->
        <?php
            include 'includes/header.php';
        ?>
        <!-- Header End -->
        
        <!-- Main -->
        <div class="banner-image">
            <div class="inner-banner-image">
                <center>
                    <div class="banner-content">
                        <h1>Simple User Registration and Login page</h1>
                        <br>
                        <a class="btn btn-success btn-lg " href="login.php">Login</a>
                        <a class="btn btn-success btn-lg " href="signup.php">Register</a>

                    </div>
                </center>
            </div>
        </div>
        <!-- Main End -->
        
        <!-- Footer -->
        <?php
        include 'includes/footer.php';
        ?>
        <!-- Footer End -->
        
    </body>
</html> 
