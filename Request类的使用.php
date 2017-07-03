<?php
	//1、如果要获取当前的请求信息，可以使用\think\Request类
	//2、检测变量是否设置，has方式，Request::instance()->has('id','get')，支持所有的系统变量
	//3、可以通过不同的方法获取不同的变量，param()方法是框架提供的用于自动识别GET、POST请求的一种变量获取方式，是系统推荐的获取请求参数的方法。
	//4、通过isGet()、isPost()等方法判断请求类型，例如
	//if(Request::instance()->isGet()) echo "当前为GET请求";