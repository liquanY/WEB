<?php
	//1.PHP与MySQL之间建立连接
		//mysqli_connect(host,username,passwd,dbname,port)
	$conn = mysqli_connect('127.0.0.1','root','liquan','liquan','3306');
		//var_dump($conn);可以用这行代码进行测试
	//2.定义SQL语句
	$sql = "insert into quan_user values(null,'juanzi','nv','444')";
	//3.PHP向MySQL数据库发送SQL语句
		//mysqli_query(link,query)
	$result = mysqli_query($conn,$sql);
		//var_dump($result);可以用这行代码进行测试
	//4.关闭与MySQL之间的连接
	mysqli_close($conn);
?>