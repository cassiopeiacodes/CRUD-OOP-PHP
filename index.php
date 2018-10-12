<?php
include ('koneksi.php');
$conn = new conn();

$content = '<h2>Menu : </h2>';
$content .= '<li><a href="index.php?page=lihat">Lihat</a></li>';
$content .= '<li><a href="index.php?page=update">Tambah Pengguna</a></li>';
$content .= '<hr>';

if(isset($_GET['page'])){
	include $_GET['page'].'.php';
	}
else{
	$content .= '<P>Belajar CRUD OOP</P>';
}
echo $content;
?>