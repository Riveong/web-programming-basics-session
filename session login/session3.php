<?php
session_start();
$_SESSION['keranjang']=array();
$i=0;

if (isset($_POST['item'])) 
{
    foreach($_POST['item'] as $anu){

        $_SESSION['keranjang'][$i] = $anu;
        $i++;

    }





}








echo "BARANG SUDAH MASUK KE KERANJANG";
echo "<a href='session2.php'> pilih ulang";
echo "<a href='session4.php'> Lihat keranjang";

?>