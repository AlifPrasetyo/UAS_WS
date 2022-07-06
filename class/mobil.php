<?php 

include "koneksi.php";

	
class mobil extends database{

	function __construct()
			{
				$this->getConnection();
			}

			
	function tampil_data(){
		$sql = "SELECT * FROM mobil";
				$result = mysqli_query($this->getConnection(),$sql);
				while ($row = mysqli_fetch_array($result)) {
					$hasil[] = $row;
				}
				return $hasil;
	}

	function hapus($id){
$sql = "DELETE from mobil where id='$id'";
				$result = mysqli_query($this->getConnection(),$sql);

				
	}
	
function input($jenis_mobil,$seat,$harga){
	
			$sql = "insert into mobil( `jenis_mobil`, `seat`,`harga`) values('$jenis_mobil','$seat','$harga')";
		
				$result = mysqli_query($this->getConnection(),$sql);

		
	}	

	function edit($id){
			$sql = "SELECT * from mobil where id='$id'";
				$result = mysqli_query($this->getConnection(),$sql);
				while ($row = mysqli_fetch_array($result)) {
					$hasil[] = $row;
				}
				return $hasil;
	}


	function update($id,$jenis_mobil,$seat,$harga){

$sql = "UPDATE mobil SET jenis_mobil='$jenis_mobil', seat='$seat', harga='$harga' WHERE id='$id'";
				$result = mysqli_query($this->getConnection(),$sql);
		}
} 
?>