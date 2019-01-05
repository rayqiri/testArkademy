<form method="get" action="">
<table>
	<tr>
		<td>Total Belanja</td>
		<td><input name="total" type="number" value="<?=$_GET['total']?>"></td>
	</tr>
	<tr>
		<td>Jumlah Bayar</td>
		<td><input name="jumlah" type="number" value="<?=$_GET['jumlah']?>"></td>
	</tr>
	<tr>
		<td><input name="aksi" type="submit" value="Hitung"></td>
	</tr>
</table> 
<?php
if(isset($_GET['aksi'])){
	$total = $_GET['total'];
	$jumlah = $_GET['jumlah'];
	$sisa = $jumlah - $total;
echo hitungUang($sisa);
}
function hitungUang($uang)
{

	$temp=$uang;
	$data = array();
	$data=[50000,20000,10000,5000,2000,1000,500];
	printf("\nSisa Uang Kembalian : ".$uang."<br>");
	printf("\nOutput Pecahan Uang : <br>");
	for($i=0; $i<7; $i++){
		if($temp >= $data[$i]){
		$jml = floor($temp / $data[$i]);
		$temp = $temp - ($data[$i] * $jml);	
		}else{
			$jml =0;
			$temp = $temp;
		}
		

		
		
		printf("\nPecahan %d : %d Lembar<br>",$data[$i],$jml);

	}
}

