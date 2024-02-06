<?php
if(isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];
    $sql = "SELECT * FROM users WHERE id = '$userId'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Fetch the user's details
        $row = $result->fetch_assoc();
        $userId = $row['id'];
        $name = $row['names'];
        $image = $row['images'];
        $email = $row['email'];       
    } else {
        // Handle the case if the user's details are not found
        echo "User details not found.";
    } 
}
?>
<div class="container-fluid mt-5 hero">

    <p class="text-center text-md-start" style="margin-top:20%;"></p>
    <h1 class="text-center text-md-start">Welcome <?php echo $name ?></h1>
    <p class="text-center text-md-start">
        Email: <?php echo $email; ?>
    </p>



</div>
</div>