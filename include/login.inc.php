<?php 

if (isset($_POST['login'])) {

	require 'dbcon.inc.php';

	$email = $_POST['email'];
	$password = $_POST['pwd'];
	
	if (empty($email) || empty($password)) {
		header("Location: ../login.php?loginerror=emptyfeilds");
		exit();
	}
	else {
		$sql = "SELECT * FROM user WHERE name=? OR email=?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
		 	header("Location: ../login.php?loginerror=sqlerror");
			exit();
		}
		else {	

			mysqli_stmt_bind_param($stmt, "ss", $email, $email);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($result)) {
				$pwdCheck = password_verify($password, $row['pwd']);
				if ($pwdCheck = false) {
					header("Location: ../login.php?error=wrongpassword");
					exit();
				}
				else if ($pwdCheck = true) {
					
					session_start();
					
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_name'] = $row['name'];
					$_SESSION['u_email'] = $row['email'];
					$_SESSION['u_pwd'] = $row['pwd'];

					$u_id = $_SESSION['u_id'];
			
					header("Location: ../index.php?login=success");
					exit();
				}
			}
			else {
				header("Location: ../login.php?error=nouser");
				exit();
			}
		}
	}
}

else {
	header("Location: ../login.php");
	exit();
}
