<HTML>
<HEAD>
<title>Koneksi Database MySQL</title>
</HEAD>
<BODY>
<h1>Koneksi database dengan mysqli_fetch_array</h1>

<?php
$conn= mysqli_connect("localhost","root","") or die ("could not connect to mysql"); 
mysqli_select_db($conn, "pabw") or die ("no database");
$hasil = mysqli_query($conn, "select * from liga");
while ($row=mysqli_fetch_array($hasil)) {
echo "<b>Liga " .$row["negara"]; //array asosiatif
echo " mempunyai " .$row[2]; //array numeris
echo " wakil di liga champion </b><br>";
}
?>
</BODY>
</HTML>