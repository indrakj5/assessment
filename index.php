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

	<div class="row">

		USULAN ASSESSMENT<br><br>

		<form id="Form" action="/data_unit_kerja.php">
			<table>

				<div class="form">
				<tr>
					<td> NAMA </td>
					<td>: <input type="text" id="nama" name="nama" value="<?php  ?>"></td>
				</tr>
				</div>

				<div class="form">
				<tr>
					<td> NIP </td>
					<td>: <input type="text" id="nip" name="nip" value="<?php ?>"></td>
				</tr>
				</div>

				<div class="form">
				<tr>
					<td> PANGKAT </td>
					<td>: <select id="pangkat" name="pangkat" class="form-control select" >
						<option></option>
						{foreach from=$unit_kerja item=row}
							<option value="{row.code_pangkat">{$row.code_pangkat}</option>
						{/foreach}
					</select>
					</td>
				</tr>
				</div>

				<div class="form">
				<tr>
					<td> JENIS KELAMIN </td>
					<td>: <select id="gender" name="gender" class="form-control select" >
						<option></option>
						{foreach from=$unit_kerja item=row}
							<option value="{row.code_gender">{$row.code_gender}</option>
						{/foreach}
					</select>
					</td>
				</tr>
				</div>

				<div class="form">
				<tr>
					<td> GOLONGAN </td>
					<td>: <select id="golongan" name="golongan" class="form-control select" >
						<option></option>
						{foreach from=$unit_kerja item=row}
							<option value="{row.code_golongan">{$row.code_golongan}</option>
						{/foreach}
					</select>
					</td>
				</tr>
				</div>

				<div class="form">
				<tr>
					<td> JABATAN </td>
					<td>: <input type="text" id="jabatan" name="jabatan" value="<?php  ?>"></td>
				</tr>
				</div>
				
				<div class="form">
				<tr>
					<td> TMT JABATAN </td>
					<td>: <input type="date" id="tmt" name="tmt" value="<?php ?>"></td>
				</tr>
				</div>
				
				<div class="form">
				<tr>
					<td> USULAN NOMENKLATUR </td>
						<td>: <select id="nomenklatur" name="nomenklatur" class="form-control select" >
						<option></option>
						{foreach from=$unit_kerja item=row}
							<option value="{row.code_nomenklatur">{$row.code_nomenklatur}</option>
						{/foreach}
					</select>
					</td>
				</tr>
				</div>

				<div class="form">
				<tr>
					<td> FILE SURAT USULAN </td>
					<td>: <input type="text" id="file_su" name="file_su" value="<?php ?>"></td>
				</tr>
				</div>

				<div class="form">
				<tr>
					<td> PENDIDIKAN </td>
				</tr>
				</div>

				<div class="form">
				<tr>
					<td> SMA </td>
					<td>: <input type="text" id="sma" name="sma" value="<?php ?>"></td>
				</tr>
				</div>

				<div class="form">
				<tr>
					<td> DIPLOMA </td>
					<td>: <input type="text" id="diploma" name="diploma" value="<?php ?>"></td>
				</tr>
				</div>

				<div class="form">
				<tr>
					<td> STRATA 1 </td>
					<td>: <input type="text" id="s1" name="s1" value="<?php ?>"></td>
				</tr>
				</div>

				<div class="form">
				<tr>
					<td> STRATA 2 </td>
					<td>: <input type="text" id="s2" name="s2" value="<?php ?>"></td>
				</tr>
				</div>

				<div class="form">
				<tr>
					<td> Masa Kerja </td>
					<td>: <input type="text" id="masa" name="masa" value="<?php ?>"></td>
				</tr>
				</div>

				<div class="form">
				<tr>
					<td> Pensiun </td>
					<td>: <input type="number" id="Pensiun" name="Pensiun" value="<?php ?>"></td>
				</tr>
				</div>

				<div class="form">
				<tr>
					<td> DIKLAT JABATAN </td>
						<td>: <select id="diklat" name="diklat" class="form-control select" >
						<option></option>
						{foreach from=$unit_kerja item=row}
							<option value="{row.code_diklat">{$row.code_diklat}</option>
						{/foreach}
					</select>
					</td>
				</tr>
				</div>

				<div class="form">
				<tr>
					<td> JENIS UNIT KERJA </td>
						<td>: <select id="jenis_unit" name="jenis_unit" class="form-control select" >
						<option></option>
						{foreach from=$unit_kerja item=row}
							<option value="{row.code_jenis_unit">{$row.jenis_unit}</option>
						{/foreach}
					</select>
					</td>
				</tr>
				</div>

				<div class="form">
				<tr>
					<td> LOKASI </td>
					<td>: <input type="text" id="lokasi" name="lokasi" value="<?php ?>"></td>
				</tr>
				</div>

				<div class="form">
				<tr>
					<td> PROVINSI </td>
					<td>: <input type="text" id="provinsi" name="provinsi" value="<?php ?>"></td>
				</tr>
				</div>

				<div class="form">
				<tr>
					<td> TANGGAL LAHIR </td>
					<td>: <input type="date" id="birthdate" name="birthdate" value="<?php ?>"></td>
				</tr>
				</div>

				<div class="form">
				<tr>
					<td> USIA </td>
					<td>: <input type="text" id="usia" name="usia" value="<?php ?>"></td>
				</tr>
				</div>
				
				

				<div class="form">
				<tr>
					<td>
					<input id="submit" type="submit">
					</td>

					<td>
					<input type="reset">
					</td>
				</tr>
				</div>
			</table>
		</form>


	</body>

</html>