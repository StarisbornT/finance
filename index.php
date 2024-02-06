<?php include 'server.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>


<body>


    <!-- Navbar Start -->
    <?php include 'includes/header.php'; ?>
    <!-- Navbar End -->

    <?php 
    if(isset($_GET['login'])) {
        include 'includes/login.php';
    }
    elseif(isset($_GET['signup'])) {
        include 'includes/signup.php';
    }
    elseif(isset($_GET['profile'])) {
        include 'dashboard/index.php';
    }
     else {
        include 'includes/home.php';
    }
    ?>


    <!-- Footer Start -->
    <?php include 'includes/footer.php'; ?>
    <!-- Footer End -->


    <!-- Copyright Start -->

    <!-- Copyright End -->


    <!-- Back to Top -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>