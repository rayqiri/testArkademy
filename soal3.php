<?php

function drawLine($n){
	for($i=0; $i<$n; $i++){
		$r = str_repeat('&emsp;',$i);
		print_r($r.'* <br>');
	}
}
echo drawLine(8);