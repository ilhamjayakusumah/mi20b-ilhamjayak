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
   
 <title>View Persuratan</title>
 <link rel="stylesheet" href="../assets/css/bootsrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<style>
    .table{
        border: 2px;
        width: 80%;
    }
</style>
</head>
<body>

<br><h2 align="center">List Surat</h2><br>
<table class="table" align="center" border=5px>

  <thead class="table-dark"> 
      <th>Noo</th>
    <th>Nomor Surat</th>
    <th>Tanggal Surat</th>
    <th>Jenis Surat</th>
    <th>TTD Surat</th>
    <th>TTD Mengetahui</th>
    <th>TTD Menyetujui</th>
    <th colspan="2">Action</th>
</thead>

  <tbody>
    <?php
     $list_surat = mysqli_query($conn, "SELECT * from tbl_surat");
     $no=1;
     foreach ($list_surat as $row){
        if($row["jenis_surat"]=='1'){
            $js="Surat Keputusan";
        }
        else if($row["jenis_surat"]=='2'){
            $js="Surat Pernyataan";
        }
        else if($row["jenis_surat"]=='3'){
            $js="Surat Peminjaman";
        } else{
            $js="Kode Bermasalah";
        }
       
         echo "<tr>
             <td>$no</td>
             <td>".$row['no_surat']."</td>
             <td>".$row['tgl_surat']."</td>
             <td>".$js."</td>
             <td>".$row['ttd_surat']."</td>
             <td>".$row['ttd_mengetahui']."</td>
             <td>".$row['ttd_menyetujui']."</td>
             <td>Edit</td>
             <td>Delete</td>
               </tr>";
               $no++;
     }
     ?>




</thead>

  </tbody>

</table>

</body>
<script src="assets/"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>

