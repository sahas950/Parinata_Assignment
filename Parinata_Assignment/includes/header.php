<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container"> 
        <div class="navbar-header"> 
            <button type="button" class="navbar-toggle" data-toggle="collapse" ">
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
            </button> 
            <a class="navbar-brand" href="index.php">My Project</a> 
        </div> 
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right"> 
                <?php 
                    //checking if user is logged in or not.
                    if (isset($_SESSION['email'])) { 
                ?> 
                <li>
                    <a href = "settings.php">
                        <span class = "glyphicon glyphicon-cog"></span>Change Password
                    </a>
                </li> 
                <li>
                    <a href = "logout.php">
                        <span class = "glyphicon glyphicon-log-in"></span> Logout
                    </a>
                </li> 
                    <?php
} else { ?> 
                <li>
                    <a href="signup.php">
                        <span class="glyphicon glyphicon-user"></span> Sign Up
                    </a>
                </li> 
                <li>
                    <a href="login.php">
                        <span class="glyphicon glyphicon-log-in"></span> Login
                    </a>
                </li> 
                    <?php } ?> 
            </ul> 
        </div> 
    </div> 
</div>