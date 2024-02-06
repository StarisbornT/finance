<?php 
session_start();
include 'database.php';

if (isset($_POST['signup'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($name) || empty($email)  || empty($password)) {
        echo "<script>
            alert('All fields are required.');
            window.location.href='signup.php';
        </script>";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // Check if email format is valid
        echo "<script>
            alert('Invalid Email Format');
            window.location.href='signup.php';
        </script>";
    }
    else {
        $hashedPassword = md5($password);
        $sql = "INSERT INTO users (names, email, passwords)
             VALUES ('$name', '$email', '$hashedPassword')";
                if ($conn->query($sql) === TRUE) {
                    $_SESSION['loggedin'] = true;
                    $_SESSION['user_id'] = $row['id'];
                    echo "<script>
                    alert('Successfully Signed up');
                    window.location.href='index.php';
                    </script>"; 
                }

    }
}

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($email) || empty($password)) {
        echo "<script> 
        alert('All Fields are Required');
        window.location.href='index.php?login';
         </script>";
    }
        else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script> 
            alert('Invalid Email Format');
            window.location.href='index.php?login';
             </script>";
        }else {
            // Generate MD5 hash for the password
    $hashedPassword = md5($password);

    // Prepare and execute the SQL query to fetch user data
    $sql = "SELECT * FROM users WHERE email = '$email' AND passwords = '$hashedPassword'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['loggedin'] = true;
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['fullname'];
        $userNameForURL = urlencode($row['fullname']); 
        echo "<script>
            alert('Successfully Signed in');
            window.location.href='index.php';
        </script>";
        
    } else {
        // User not found, login failed
        echo"<script>
        alert('Invalid email or password');
        window.location.href='index.php?login'
    </script>";
    }
        }
        
    }
}
?>