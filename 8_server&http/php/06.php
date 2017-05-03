<?php
	//1.直接量方式定义数组
	$arr1 = [1,2,3,4,5];
	//进行测试
	var_dump($arr1);

	//2.定义索引数组
	$arr2 = array(
		'0' => 'liquan',
		'2' => 'haoyajuan'
	);
	//进行测试
	var_dump($arr2);

	//3.定义关联数组数组
	$arr3 = array(
		'p1' => 'quanquan',
		'p2' => 'juanjuan'
	);
	var_dump($arr3);
?>