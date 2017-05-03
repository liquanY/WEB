<?php
	//1.创建mysqli对象(通过构造器)
	$mysqli = new mysqli('127.0.0.1','root','liquan','liquan','3306');
	//2.定义SQL语句
	$sql = "select * from quan_user";
	//3.向MySQL数据库发送SQL语句
		//$mysqli->query('set names utf8');解决中文乱码问题
	$result = $mysqli->query($sql);
	//解析结果集
	while($arr = $result->fetch_array()){
		echo $arr['user_id'].' '.$arr['user_name'].' '.$arr['user_gender'].' '.$arr['user_email'].' ';
	}
	//4.关闭连接
	$mysqli->close();
?>