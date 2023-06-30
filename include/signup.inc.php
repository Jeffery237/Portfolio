<?php 

if (isset($_POST['submit'])) {
	// code...

	require 'dbcon.inc.php';

	$name = $_POST['name'];
	$email =$_POST['email'];
	$pwd = $_POST['pwd'];
	$pwdrep = $_POST['pwdrep'];

	if (empty($name) || empty($email) || empty($pwd) || empty($pwdrep)) {
		// code...
		header("Location: ../signup.php?error=emptyfeilds&name=".$name."&email=".$email. "&pwd=".$pwd. "&pwdrep=".$pwdrep);
		exit();
	}
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $name)) {
		// code...
		header("Location: ../signup.php?error=invalidemail&name=".$email .$name);
		exit();
	}
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: ../signup.php?error=token_name(token)=".$name);
		exit();
	}
	elseif (!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
		header("Location: ../signup.php?error=invalidemail&name=".$email);
		exit();
	}
	elseif ($pwd !== $pwdrep) {
		header("Location: ../signup.php?error=incompatiblepasswordcheck&name=".$name."&email=".$email);
		exit();
	}
	else {

		$sql = "SELECT name FROM user WHERE name=?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../signup.php?error=sqlerror");
			exit();
		}
		else {
		mysqli_stmt_bind_param($stmt, "s", $name);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		$resultCheck = mysqli_stmt_num_rows($stmt);
		if ($resultCheck > 0) {
			header("Location: ../signup.php?error=usertaken&mail=".$email);
			exit();
		}
		else {

			$sql = "INSERT INTO user(name, pwd,email) VAlUES (?, ?, ?)";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../signup.php?error=usertaken");
			exit();
			}

			else {
				$hashedPwd = password_hash($pwd, PASSWORD_BCRYPT);

				mysqli_stmt_bind_param($stmt, "sss", $name, $hashedPwd, $email);
				mysqli_stmt_execute($stmt);
				header("Location: ../login.php?signup=success");
				exit();
			}
		}
	}
}

mysqli_stmt_close($stmt);
mysqli_close($conn);

}

else {
	header("Location: ../signup.php");
	exit();
}



?>