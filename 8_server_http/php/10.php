<?php
	//1.if...else if...else
	$num = 90;
	if($num < 60){
		echo '不及格';
	}else if($num < 90){
		echo '及格';
	}else{
		echo '优秀';
	}
	echo ' ';

	//2.switch...case
	$num2 = 90;
	switch($num2){
		case 60:
			echo '不及格';
			break;
		case 80:
			echo '及格';
			break;
		case 90:
			echo '优秀';
			break;
	}
?>