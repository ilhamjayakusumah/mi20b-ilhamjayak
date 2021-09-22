<?php 
 
 $today = date("j-F-Y, ");  
 $kota = array ("Ciamis","Tasikmalaya","Bandung");
 $instansi = "Jalan Ir. H. Juanda KM. 2 No. 106, Panglayungan, Kec. Cipedes, Tasikmalaya, Jawa Barat 46151";
 $barang = array ("Kamera","Bola Sepak", "Bola Volly","Proyektor","Karpet");
 $tandanama = "Ilham Jaya Kusumah";
 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Meet Two | Surat | Ilham</title>
</head>
<body>
    
<h2 align="center"><b>Surat Peminjaman Barang</b></h2>
<hr size="10px">

<?php
      
   echo $today."<br><br>";
?>

Nomor : 01/LP3I/2021<br>
Perihal : <u><b>Permohonan Peminjam Barang</b></u><br><br>
<b>Yth.</b><br>
Kepala Kampus <br>
Politeknik LP3I Tasikmalaya<br>
<b>Di tempat</b><br>

<br><br>

Assalamu'alaikum WR.WB<br>
Dalam rangka pelaksanaan kegiatan Pra-Ujikom Mahasiswa TK.2  diselenggarakan pada : <br> <br>
Hari/ Tanggal     : Selasa 24 September 2021<br>
Waktu             : 08.00 s.d. selesai <br>
Tempat            : Aula Politeknik LP3I Tasikmalaya <br><br>

Maka saya bermaksud untuk meminjam
<?php
    echo "<b>$barang[3]</b>"." dan "."<b>$barang[0]</b>"." pada kegiatan tersebut";
?>
Atas perhatiannya saya ucapkan terimakasih.<br>
Wassalamu'alaikum WR.WB <br><br>
<b>Tertanda</b><br><br><br><br>

<?php
 
    echo $tandanama;
?>

</body>
</html>
