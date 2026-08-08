<?php 

require('./functions.php');

if (isset($_POST["register"])) {
	
	if (registrasi($_POST) > 0) {
		
		echo "<script>
			alert('user baru berhasil ditambahkan!');
		</script>";

		header("Location: login.php");
			exit;

	} else {
		echo mysqli_error($conn);
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar ke Kursus Musik</title>
	<link rel="stylesheet" href="../../css/autentikasi/register.css">
</head>
<body>

	<div class="container">
		<a href="../../../index.php">
			<img src="../../assets/logo/logo.jpg">
		</a>
		<h1>Daftar</h1>
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
				<tr>
					<td class="pass"><label for="mypasswords2">Konfirmasi Password</label>
					</td>
				</tr>
				<tr>
					<td><input type="password" name="password2" id="mypasswords2"></td>
				</tr>
			</table>
			<p>Punya akun? <a href="login.php">Segeralah masuk!</a></p>	
			<button type="submit" name="register" class="kirim-daftar">Daftar</button>
		</form>
	</div>

</body>
</html>