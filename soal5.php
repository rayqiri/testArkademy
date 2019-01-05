<form method="get" action="">
<table>
    <td>Jumlah Orang</td>
    <td><input name="jumlah" type="number" value="<?=$_GET['jumlah']?>"></td>
  </tr>
  <tr>
    <td><input type="submit" value="Hitung"></td>
  </tr>
</table>
<?php
if(isset($_GET['jumlah'])){
  $jumlah = $_GET['jumlah'];

echo"Result :".handShake($jumlah);
}

function handShake($jml)
{
	$total = 0;
	for($i=0; $i<$jml; $i++){
		$total = $total + $i;	
	}
	return $total;
}
