<?php 
	$userName = "vthoongg";
	$myPhone = "123123123"; 
	$a=5;
	$b=7;
	/*echo $a + $b;
	echo "<br>";
	echo $userName;
	function tongHaiSo($a,$b){
		return $a+$b;
	}
	echo "<br>";
	echo tongHaiSo(12,6);*/
	// $number = 5;
	// if ($number%2 ==0) {
	// 	# code...
	// 	echo "So nay la so chan";
	// }
	// else {
	// 	echo "Day la so le";
	// }
	$number = 10;
	if ( $number < 1 || $number >12 ){
		echo $number +" khong phai la thang trong nam";
	}
	else{
		if($number = 1 ||$number =3||$number =5||$number =7||$number =8||$number =10||$number =12){
			echo "Thang co 31 ngay";
		}
		elseif($number =4||$number =6||$number =9||$number =11){
			echo "Thang co 30 ngay";
		}
		else {
			echo "Thang co 28 ngay";
		}
		
	}
?>