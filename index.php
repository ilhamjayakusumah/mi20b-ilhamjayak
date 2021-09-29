
<?php
    $username = "root";
    $password="";
    $db="persuratan_ilham";

    $conn=mysqli_connect('localhost',$username, $password, $db);

        if($conn->connect_error){
            die( "Koneksi anda gagal : ". mysqli_connect_error());
        }
        else{
            echo "Koneksi berhasil";
        }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

	
	<table border="1" align="center">
        <h2 align="center">Data Surat Masuk </h2>
    <tr>
			<th>No</th>
            <th>Nomor Surat</th>
			<th>Tanggal Surat</th>
			<th>Jenis Surat</th>
			<th>TTD Surat</th>
            <th>TTD Menyetujui</th>
            <th>TTD Mengetahui</th>	
		</tr>
    <?php 
        $query_mysqli = mysqli_query($conn, "SELECT * FROM tbl_surat  ");
        $nomor = 1;
        while($isi = mysqli_fetch_array($query_mysqli)){
	?>
	<tr>
		<td><?php echo $nomor++; ?></td>
        <td><?php echo $isi['no_surat']; ?></td>
		<td><?php echo $isi['tgl_surat']; ?></td>
		<td><?php echo $isi['jenis_surat']; ?></td>
        <td><?php echo $isi['ttd_surat']; ?></td>
        <td><?php echo $isi['ttd_mengetahui']; ?></td>
        <td><?php echo $isi['ttd_menyetujui']; ?></td>

	</tr>
	<?php } ?>
</table>
</body>
</html>