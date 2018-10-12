<?php
class conn{
	private $host = "localhost";
	private $uname = "root";
	private $pass = "";
	private $db = "db_crud";

	function __construct(){
		$koneksi = new mysqli($this->host, $this->uname, $this->pass, $this->db);
		if($koneksi->connect_errno!=''){
			die("<p>Gagal Terhubung Ke Database!!!</br> Kode Error: ".$koneksi->connect_error."</p>");
		}
		//else{
		//	echo ("<p>Berhasil Terhubung Ke Database.</p>");
		//}
		$this->koneksi = $koneksi;
		return $this;
	}
	
	function view_data_pilih($id){
		$query = "SELECT * FROM akun WHERE id='$id'";
		$this->data = $this->koneksi->query($query) or die('<p>ERROR: '.$this->koneksi->error.'</p>');
		return $this;
	}
	
	function view_data(){
		$this->data = $this->koneksi->query('SELECT * FROM akun')or die('<p>ERROR: '.$this->koneksi->error.'</p>');
		$this->jumlah = $this->data->num_rows;
		return $this;
	}
	
	function hapus($id){
		$query = "DELETE FROM akun WHERE id='$id'";
		$this->hapus = $this->koneksi->query($query) or die('<p>ERROR: '.$this->koneksi->error.'</p>');
		return $this;
	}
	
	function ubah_data($id, $un, $nm, $em){
		$query = "UPDATE akun SET username='$un', nama='$nm', email='$em' where id='$id'";
		$this->ubah = $this->koneksi->query($query) or die('<p>ERROR: '.$this->koneksi->error.'</p>');
		return $this;
	}
	
	function input($un,$nm,$em){
		$this->tambah = $this->koneksi->query("INSERT INTO akun VALUES('','$un','$nm','$em')");
		return $this;
	}
}
?>