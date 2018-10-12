<?php
if(isset($_GET['aksi'])=='edit'){
	$hasil1 = $conn->view_data_pilih($_GET['id'])->data;
	$row = $hasil1->fetch_assoc();
	$content .= '<form action="index.php?page=lihat&&aksi=update" method="post"><table>';
	$content .= '<tr>';
	$content .= '<th>Username</th>';
	$content .= '<td>:</td>';
	$content .= '<td><input type="text" length="10" value="'.$row['username'].'" name="username" /></td>';
	$content .= '</tr>';
	$content .= '<tr>';
	$content .= '<th>Nama</th>';
	$content .= '<td>:</td>';
	$content .= '<td><input type="text" length="30" value="'.$row['nama'].'" name="nama"></input></td>';
	$content .= '</tr>';
	$content .= '<tr>';
	$content .= '<th>Email</th>';
	$content .= '<td>:</td>';
	$content .= '<td><input type="text" length="255" value="'.$row['email'].'" name="email"></input></td>';
	$content .= '</tr>';
	$content .= '<tr>';
	$content .= '<td colspan="3" >';
	$content .= '<button type="submit" name="id" value="'.$row['id'].'">SIMPAN</button>';
	$content .= '</td>';
	$content .= '</tr>';
	$content .= '</table></form>';
}
else{
	$content .= '<form action="index.php?page=lihat&&aksi=tambah" method="post"><table>';
	$content .= '<tr>';
	$content .= '<th>Username</th>';
	$content .= '<td>:</td>';
	$content .= '<td><input type="text" length="10" name="username" /></td>';
	$content .= '</tr>';
	$content .= '<tr>';
	$content .= '<th>Nama</th>';
	$content .= '<td>:</td>';
	$content .= '<td><input type="text" length="30" name="nama"></input></td>';
	$content .= '</tr>';
	$content .= '<tr>';
	$content .= '<th>Email</th>';
	$content .= '<td>:</td>';
	$content .= '<td><input type="text" length="255" name="email"></input></td>';
	$content .= '</tr>';
	$content .= '<tr>';
	$content .= '<td colspan="3" >';
	$content .= '<button type="submit">SIMPAN</button>';
	$content .= '</td>';
	$content .= '</tr>';
	$content .= '</table></form>';
}
?>