<?php
	//1.PHP与MySQL之间建立连接
		//mysqli_connect(host,username,passwd,dbname,port)
	$conn = mysqli_connect('127.0.0.1','root','liquan','liquan','3306');
		//var_dump($conn);可以用这行代码进行测试
	//2.定义SQL语句
	$sql = "select * from quan_user";
	//3.PHP向MySQL数据库发送SQL语句
		//mysqli_query(link,query)
		//mysqli_query($conn,'set names utf8');解决中文乱码问题
	$result = mysqli_query($conn,$sql);

	//var_dump(mysqli_num_rows($result));//记录数
	//var_dump(mysqli_num_fields($result));//字段数

	//进行解析 解析出来的只有一条数据
	//$arr = mysqli_fetch_array($result,MYSQLI_ASSOC);
	//var_dump($arr);

	//进行解析 解析出来的只有一条数据
	//$arr = mysqli_fetch_assoc($result);
	//var_dump($arr);

	//进行解析 解析出来所有的数据
	while($arr = mysqli_fetch_assoc($result)){
		echo $arr['user_id'].' '.$arr['user_name'].' '.$arr['user_gender'].' '.$arr['user_email'].' ';
	}

	//4.关闭与MySQL之间的连接
	mysqli_close($conn);
?>