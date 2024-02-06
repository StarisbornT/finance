<?php
// Handle logout
if (isset($_GET['logout'])) {
  session_unset(); // Unset all session variables
  session_destroy(); // Destroy the session
  header("Location: index.php"); // Redirect to the homepage
  exit();
}
 ?>
<nav class="navbar navbar-expand-lg bg-primary bg-gradient fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.html"><img src="images/logo2.png" width="200px" height="100px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarText">
            <ul class="navbar-nav mb-2 mb-lg-0 fs-5">
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
                </li>

                <?php 
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                    // User is logged in, display Log Out button
                    
                    echo '
                    <a class="nav-item nav-link text-light" href="index.php?logout=true">Logout</a>
                    <a class="nav-item nav-link text-light" href="index.php?profile">Dashboard</a>
                   ';
                } else {
                    // User is not logged in, display Sign In and Sign Up links
                    echo '
                            <a class="nav-item nav-link text-light" href="index.php?login">Sign In</a>
                       
                        
                            <a class="nav-item nav-link text-light" href="index.php?signup">Sign Up</a>
                        ';
                    }
                ?>
            </ul>
        </div>

    </div>
</nav>