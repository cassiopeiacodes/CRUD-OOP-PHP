<?php
if(isset($_GET['aksi'])){
	if($_GET['aksi']=='hapus'){
		$conn->hapus($_GET['id'])->hapus;
		$content .= 'Data Telah Di Hapus!</br>';
	}
	elseif($_GET['aksi']=='update'){
		$conn->ubah_data($_POST['id'], $_POST['username'], $_POST['nama'], $_POST['email'])->ubah;
		$content .= 'Data Telah Di Ubah!</br>';
	}
	elseif($_GET['aksi']=='tambah'){
		$conn->input($_POST['username'], $_POST['nama'], $_POST['email'])->tambah;
		$content .= 'Data Telah Di Tambahkan!</br>';
	}
}

$no = 1;
$hasil1 = $conn->view_data()->data;

if ($conn->view_data()->jumlah > 0) {
	$content .= '<form method="POST" action="lihat.php"><table border="1">';
	$content .= '<tr>';
	$content .= '<th>No</th>';
	$content .= '<th>Username</th>';
	$content .= '<th>Nama</th>';
	$content .= '<th>email</th>';
	$content .= '<th colspan="2">Aksi</th>';
	$content .= '</tr>';
	$content .= '<tr>';
	
	while($row = $hasil1->fetch_assoc()) {
		$content .= '<tr>';
		$content .= '<td>'.$no++.'</td>';
		$content .= '<td>'.$row['username'].'</td>';
		$content .= '<td>'.$row['nama'].'</td>';
		$content .= '<td>'.$row['email'].'</td>';
		$content .= '<td><a href="index.php?page=update&&aksi=edit&&id='.$row['id'].'">Ubah</a></td>';
		$content .= '<td><a href="index.php?page=lihat&&aksi=hapus&&id='.$row['id'].'">Hapus</a></td>';
		$content .= '</tr>';
	}
	$content .= '</table></form>';
}
else $content .= '<h3 style="text-align:center; color: #ff33cc;">Tidak ada data</h3>';
?>