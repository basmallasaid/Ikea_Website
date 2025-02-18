<?php
if (isset($_POST['Login'])) {
	session_start();

	require 'connection.php';

	$email = $_POST['email'];
	$pass = $_POST['password'];

	if (empty($email) || empty($pass)) {
		header("Location: ../login.php?error=emptyfields");
		exit();
	} else {
		$sql = "SELECT * FROM acc_table WHERE email=?;";
		$stmt = mysqli_stmt_init($db);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../login.php?error=sqlerror");
			exit();
		} else {
			mysqli_stmt_bind_param($stmt, "s", $email);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($result)) {
				$pwdCheck = $row['password'];
				if ($pwdCheck != $pass) {
					echo '
                <script>
                    alert("Wrong Password !!!");
                    window.location=" ../login.php?error=wrongpassword";
                </script>';
					exit();
				} elseif ($pwdCheck == $pass) {
					$_SESSION['acc_id'] = $row['acc_id'];
					$_SESSION['fname'] = $row['f_name'];
					$_SESSION['lname'] = $row['l_name'];
					$_SESSION['phone'] = $row['phone'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['position'] = $row['position'];
					$_SESSION['username'] = $row['username'];
					$_SESSION['address'] = $row['address'];

					$_SESSION['password'] = $pass;
					if ($_SESSION['position'] == "admin") {
						echo '
				<script>
					alert("login successful!");
					window.location="../homepageadmin.php";
				</script>';

						exit();
					} else {
						echo '
						
				<script>
					alert("login successful!");
					window.location="../homepageuser.php";
				</script>';

						exit();
					}
				}
			} else {
				echo '
            <script>
                alert("unsuccessfull login !!!");
                window.location="../login.php";
            </script>';
				exit();
			}
		}
	}

} else {
	header("Location: ../homepagegen.php");
	exit();
}

?>