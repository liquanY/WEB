<?php
	//1.while循环
	$i = 0;
	while($i < 10){
		echo $i;
		$i++;
	}
	echo ' ';

	//2.do...while
	$i2 = 0;
	do{
		echo $i2;
		$i2++;
	}while($i2 < 10);
	echo ' ';

	//3.for循环
	for($i3=0; $i3<10; $i3++){
		echo $i3;
	}
	echo ' ';

	//4.foreach循环
	$arr = [1,2,3,4,5];
	foreach($arr as $value){
		echo $value;
	}
	echo ' ';
	foreach($arr as $key=>$value){
		echo "[$key]=>$value";
	}
?>