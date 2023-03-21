<?php
session_start();
include "../db_conn.php";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the entered email and password match the ones in the database
    $sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        // The user has entered the correct credentials, so create a session
        $row = mysqli_fetch_assoc($result);
        $_SESSION['admin_id'] = $row['id'];
        $_SESSION['admin_email'] = $row['email'];
        $_SESSION['logged_in'] = true;
        header("Location: index.php");
        exit();
    } else {
        // The entered credentials are incorrect, so show an error message
        $error = "Incorrect email or password";
	}
}
?>

<?php
	include "../db_conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>ADMIN LOGIN</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
     <form action="admin_check_login.php" method="post">
     	<h2>ADMIN LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Admin Email</label>
     	<input type="email" name="email" placeholder="Admin Email"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit" name="submit">Login</button>
		  <a href="../home.php" class="ca">Go to Home</a>
     </form>
  
</body>
</html>


