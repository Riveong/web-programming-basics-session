<?php
session_start();

if (isset($_POST['user'] ) && isset($_POST['pass'])){
$_SESSION['user'] = $_POST['user'];
$_SESSION['pass'] = $_POST['pass'];
$user = $_SESSION['user'];
$pass = $_SESSION['pass'];
}

else{
$user = $_SESSION['user'];
$pass = $_SESSION['pass'];
}
//info login credentialnya
$user1 = 'onggabriel';
$pass1 = '205314111';



if($user != $user1 && $pass != $pass1){
echo "Maaf, username atau password salah <br>";
echo "<a href='session1.php'>coba kembali";



}

else {
echo "<center>";
echo "<h1> PILIH BARANG</h1>";
echo "<p>Selamat datang, $user</p>";
echo "<a href='sessiondes.php'>[logout]</a>";
echo "</center>";




echo "<form method='post' action='session3.php'>";
echo "makanan minuman<br>";
echo "<input type='checkbox' id='makanan' name='item[]' value='gula'>Gula<br>";
echo "<input type='checkbox' id='makanan' name='item[]' value='teh'>Teh<br>";
echo "<input type='checkbox' id='makanan' name='item[]' value='kopi'>Kopi<br>";
echo "<input type='checkbox' id='makanan' name='item[]' value='susu'>Susu<br>";
echo "<input type='checkbox' id='makanan' name='item[]' value='biskuit'>Biskuit<br>";



echo "peralatan mandi<br>";
echo "<input type='checkbox' id='mandi' name='item[]' value='sikat'>Sikat gigi<br>";
echo "<input type='checkbox' id='mandi' name='item[]' value='pasta'>Pasta gigi<br>";
echo "<input type='checkbox' id='mandi' name='item[]' value='sabun'>Sabun<br>";
echo "<input type='checkbox' id='mandi' name='item[]' value='shampoo'>Shampoo<br>";
echo "<input type='checkbox' id='mandi' name='item[]' value='sabun2'>Sabun Cuci muka<br>";




echo "Alat tulis<br>";
echo "<input type='checkbox' id='tulis' name='item[]' value='pensil'>pensil<br>";
echo "<input type='checkbox' id='tulis' name='item[]' value='penggaris'>penggaris<br>";
echo "<input type='checkbox' id='tulis' name='item[]' value='penghapus'>penghapus<br>";
echo "<input type='checkbox' id='tulis' name='item[]' value='ballpoint'>ballpoint<br>";
echo "<input type='checkbox' id='tulis' name='item[]' value='hvs'>kertas hvs<br>";



echo "<input type='submit'>";






echo "</form>";



}

?>