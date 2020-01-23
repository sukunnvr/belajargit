<?php
$no_pasien = $_GET['no_pasien'];
include('connection.php');

$query = mysqli_query($koneksi,"SELECT * FROM tblpasien WHERE no_pasien='$no_pasien' LIMIT 1");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<html>
	<form action="update.php" method="post">
	<!-- <input type="number" name="no_pasien" value=<?php echo $result[0]['no_pasien']?>> -->

	<label>no_pasien</label><br/>
	<input type="text" name="no_pasien" value="<?php echo $result[0]['no_pasien']?>"/>
	<br/><br/>

	<label>nama</label><br/>
	<input type="text" name="nama" value="<?php echo $result[0]['nama']?>"/>
	<br/><br/>

	<label>alamat</label><br/>
	<textarea name="alamat" cols="30" rows="10"><?php echo $result[0]['alamat']?></textarea>
	<br/><br/>
	
	<label>jenis kelamin</label><br/>
	<select>
		<option value="laki-laki" <?php echo ($result[0]['jenis_kelamin'] == 'Laki-laki')
			? 'selected': '';?> >Laki-laki</option>
		<option value="pqerempuan" <?php echo ($result[0]['jenis_kelamin'] == 'perempuan')
			? 'selected': '';?> >Perempuan</option>
	</select>
	<br/><br/>

	<label>Umur</label><br/>
	<input type="text" name="umur" value="<?php echo $result[0]['umur']?>"/>
	<br/><br/>

	<label>Keluhan</label><br/>
	<input type="text" name="keluhan" value="<?php echo $result[0]['keluhan']?>"/>
	<br/><br/>

	<label>No Hp</label><br/>
	<input type="text" name="no_hp" value="<?php echo $result[0]['no_hp']?>"/>
	<br/><br/>
	<button type="submit">Perbaharui</button>
	</form>
</html>