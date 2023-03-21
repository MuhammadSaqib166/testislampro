<?php
session_start(); 
include "../db_conn.php";

	if(isset($_POST['submit'])){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $email = validate($_POST['email']);
	    $password = validate($_POST['password']);

        if (empty($email)) {
            header("Location: adminLogin.php?error=Email is required");
        }else if(empty($password)){
            header("Location: adminLogin.php?error=Password is required");
        }else{

		$query = "SELECT * FROM `admin` 
		WHERE `email` = '$_POST[email]' AND `password` = '$_POST[password]'";
		$result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result) == 1){
			session_start();
			$_SESSION['email'] = $_POST['email'];
			header("Location: index.php");
		}else{
			header("Location: adminLogin.php?error=Inncorect Email or password");
		}
	}
}


?>