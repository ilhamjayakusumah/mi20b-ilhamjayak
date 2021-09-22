<?php 
 
$mybiodata = array(
    "Nama : Ilham Jaya Kusumah",
    "Alamat : Kawali",
    "email : kusumah@gmail.com",
    "No HP : 085711372583"
);

$matkul = array (
    "1. System Design Analysis",
    "2. WEB Programming",
    "3. English Environment"

);
 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Meet Two | Ilham</title>
</head>
<body>
    
<h2>Biodata</h2>

<?php

    // pemanggilan array 
    echo $mybiodata[0]; echo "<br>";
    echo $mybiodata[1]; echo "<br>";
    echo $mybiodata[2]; echo "<br>";
    echo $mybiodata[3]; echo "<br><br>";

    echo "Mata Kuliah yang saya pelajari : <br>";

    echo $matkul[0]; echo "<br>";
    echo $matkul[1]; echo "<br>";
    echo $matkul[2]; echo "<br>";

?>

</body>
</html>
