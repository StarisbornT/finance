<?php include 'sidebar.php'; ?>
<?php

if(isset($_POST['update'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $user_id = $_SESSION['user_id'];

    // Handle image upload
    if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image_tmp = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];
        $image_path = 'uploads/' . $image_name;

        move_uploaded_file($image_tmp, $image_path);
    }

   
    $sql = "UPDATE users SET names='$name', email='$email', images='$image_path' WHERE id = $user_id";
    
    $result = mysqli_query($conn, $sql);

    if($result) {
        echo "<script>
        alert('Updated Successfully');
        window.location.href='profile.php';
        </script>";
    } else {
        echo "Error updating profile: " . mysqli_error($conn);
    }
}

?>



<div id="content">
    <!-- topbar -->
    <?php include 'topbar.php' ?>
    <!-- end topbar -->
    <!-- dashboard inner -->
    <div class="midde_cont">
        <div class="container-fluid">
            <div class="row column_title">
                <div class="col-md-12">
                    <div class="page_title">
                        <h2>Dashboard</h2>
                    </div>
                </div>
            </div>
            <div>
                <form action="" enctype="multipart/form-data" method="POST">
                    <?php if (!empty($image)) : ?>
                    <div>
                        <img src="<?php echo $image; ?>" alt="User Image" style="max-width: 200px; max-height: 200px;">
                    </div>
                    <?php endif; ?>

                    Image <input type="file" name="image" class="form-control">
                    Name <input type="text" name="name" class="form-control" value="<?php echo $name ?>">
                    Email <input type="email" name="email" class="form-control" value="<?php echo $email ?>">
                    <input type="submit" name="update" class="btn btn-primary" value="Update">
                </form>
            </div>
        </div>


        <?php include 'footer.php' ?>