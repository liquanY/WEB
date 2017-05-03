<?php
	/*
	JavaScript定义对象的三种方式
		直接量方式
			{属性名:属性值,方法名:function(){}}
		Object方式
			new Object()
		构造器方式
			function 构造器(){}
			var 对象=new 构造器();
	JavaScript的面向对象是基于原型(ProtoType)的
	PHP的面向对象是基于类(Class)的
	*/

	//1.定义类
	class Hero{
		function sayMe(){
			echo 'this is quange.';
		}
	}
	//2.创建对象
	$hero = new Hero;
	//对象如何调用方法
	$hero->sayMe();
?>