<html>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700');

$base-spacing-unit: 24px;
$half-spacing-unit: $base-spacing-unit / 2;

$color-alpha: #1772FF;
$color-form-highlight: #EEEEEE;

*, *:before, *:after {
	box-sizing:border-box;
}

body {
	padding:$base-spacing-unit;
	font-family:'Source Sans Pro', sans-serif;
	margin:0;
}

h1,h2,h3,h4,h5,h6 {
	margin:0;
}

.container {
	max-width: 1000px;
	margin-right:auto;
	margin-left:auto;
	display:flex;
	justify-content:center;
	align-items:center;
	min-height:100vh;
}

.table {
	width:100%;
	border:1px solid $color-form-highlight;
}

.table-header {
	display:flex;
	width:100%;
	background:#000;
	padding:($half-spacing-unit * 1.5) 0;
}

.table-row {
	display:flex;
	width:100%;
	padding:($half-spacing-unit * 1.5) 0;
	
	&:nth-of-type(odd) {
		background:$color-form-highlight;
	}
}

.table-data, .header__item {
	flex: 1 1 20%;
	text-align:center;
}

.header__item {
	text-transform:uppercase;
}

.filter__link {
	color:white;
	text-decoration: none;
	position:relative;
	display:inline-block;
	padding-left:$base-spacing-unit;
	padding-right:$base-spacing-unit;
	
	&::after {
		content:'';
		position:absolute;
		right:-($half-spacing-unit * 1.5);
		color:white;
		font-size:$half-spacing-unit;
		top: 50%;
		transform: translateY(-50%);
	}
	
	&.desc::after {
		content: '(desc)';
	}

	&.asc::after {
		content: '(asc)';
	}
	
}
    </style>
<?php
session_start();
$nama = $_SESSION['nama'];
$email = $_SESSION['email'];
$nomor = $_SESSION['nomor'];
$bayar = $_SESSION['bayar'];
$_SESSION['samsung'] = $_POST['samsung'];
$_SESSION['lg'] = $_POST['lg'];
$_SESSION['advan'] = $_POST['advan'];

if ($_SESSION['samsung']==0){
    $samsung = "no";

} else {
    $samsung = $_SESSION['samsung'] ;
}

if ($_SESSION['lg']==0){
    $lg = "no";

} else {
    $lg = $_SESSION['lg'] ;
}
if ($_SESSION['advan']==0){
    $advan = "no";

} else {
    $advan = $_SESSION['advan'] ;
}

echo "<b>Konfirmasi pesanan atas nama $nama";
echo "<table>";
echo "<tr>";
echo "<td>";
echo "nama";
echo "</td>";
echo "<td>";
echo $nama;
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "email";
echo "</td>";
echo "<td>";
echo $email;
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "no HP";
echo "</td>";
echo "<td>";
echo $nomor;
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "cara pembayaran";
echo "</td>";
echo "<td>";
echo $bayar;
echo "</td>";
echo "</tr>";
echo "</table>";


echo "<h1>BARANG YANG DI BELI</h1>";
if ($samsung != "no"){
    echo "TV SAMSUNG berjumlah : $samsung<br>";
}
if ($lg != "no"){
    echo "TV LG berjumlah : $samsung<br>";
}
if ($advan != "no"){
    echo "TV ADVAN berjumlah : $samsung<br>";
}


?>




</html>