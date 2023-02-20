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
$_SESSION['nama'] = $_POST['nama'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['nomor'] = $_POST['nomor'];
$_SESSION['bayar'] = $_POST['bayar'];



$nama = $_SESSION['nama'];
echo "selamat datang, $nama <br>";
echo "silahkan pilih barang";
echo "<form method='post' action='testing.php'>";
echo "<table>";
echo "<tr>";
echo "<td>nama barang</td>";
echo "<td>jumlah</td>";
echo "</tr>";
echo "<tr>";
echo "<td>samsung tv</td>";
echo "<td><input type='text' name='samsung' id='samsung' value='0'></td>";
echo "</tr>";
echo "<tr>";
echo "<td>lg tv</td>";
echo "<td><input type='text' name='lg' id='lg' value='0'></td>";
echo "</tr>";
echo "<tr>";
echo "<td>advan tv</td>";
echo "<td><input type='text' name='advan' id='advan' value='0'></td></table>";
echo "</tr>";
echo "<input type='submit'>";







?>



</html>