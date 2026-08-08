<?php 

require('./functions.php');


if (isset($_POST["login"])) {
	
	$username = $_POST["username"];
	$password= $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	// cek username
	if (mysqli_num_rows($result) === 1) {
		
		// cek password
		$row = mysqli_fetch_assoc($result);
		if(password_verify($password, $row["password"])) {

			header("Location: ../pages/tentang.html");
			exit;
		}


	}

	$error = true;

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Masuk ke Akun Kursus Musik</title>
	<link rel="stylesheet" href="../../css/autentikasi/login.css">
</head>
<body>

	<div class="container">
		<a href="../../../index.php">
			<img src="../../assets/logo/logo.jpg">
		</a>
		<h1>Masuk</h1>

<?php if (isset($error)) : ?>

	<p style="color:red; font-style: italic; font-size:11px;">Username Salah / Password Salah / Tidak ada Data yang di Inputkan</p>

<?php endif; ?>

		<form action="" method="post">
			<table border="0" cellspacing="0" cellpadding="5">
				<tr>
					<td class="user"><label for="myusernames">Username</label>
					</td>
				</tr>
				<tr>
					<td><input type="text" name="username" id="myusernames"></td>
				</tr>
				<tr>
					<td class="pass"><label for="mypasswords">Password</label>
					</td>
				</tr>
				<tr>
					<td><input type="password" name="password" id="mypasswords"></td>
				</tr>
			</table>
			<p>Belum punya akun? <a href="register.php">Buatlah akun!</a></p>	
			<button type="submit" name="login" class="kirim-daftar">Masuk</button>
		</form>
	</div>

</body>
</html>