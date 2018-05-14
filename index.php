<?php  
	
	include_once("function/koneksi.php");
	include_once("function/helper.php");

?>

<html>
	<head>
	<title>Aplikasi Assessment</title>
	<link href="<?php echo BASE_URL."css/style.css"; ?>" type="text/css" rel="stylesheet" />
	</head>

	<body>
	<div id="Judul" align="center">
		<?php echo "Aplikasi Assessement"?>

	</div>

	<br>

	<div id="Form">
		<form>
			Nama: <input type="text" name="nama" value="<?php  ?>"><br>

			NIP: <input type="text" name="nip" value="<?php ?>"><br>

			Jenis Kelamin: <input type="text" name="gender" value="<?php ?>"><br>

			Tanggal Lahir: <input type="text" name="birthdate" value="<?php ?>"><br>

			Usia: <input type="text" name="usia" value="<?php ?>"><br>

			TMT CPNS: <input type="text" name="tmt" value="<?php ?>"><br>

			Masa Kerja: <input type="text" name="masa" value="<?php ?>"><br>
		</form>
	</div>
	</body>

</html>