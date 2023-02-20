<?php
session_start();





echo "<center><h1> Isi keranjang </h1> ";
echo "<a href='sessiondes.php'>[logout]</a></center>";
echo "<ol>";



echo "<b>barang yang anda pilih</b>";

foreach ($_SESSION['keranjang'] as $anu){

echo "<li>$anu</li>";




}








echo "</ol>";



?>