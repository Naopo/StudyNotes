<?php
	//客户端连接远程数据库

	//进入cmd，连接：
	//mysql -u用户名 -p密码 -h服务器IP地址 -P端口号 -D数据库名
	//例子：
	//mysql -uroot -p123456 -h127.0.0.1 -P3306 -Dtest

	//数据库无法连接，提示malformed packet，一般是由于数据库版本过低，导致传输协议不一致
	//解决办法：
	//cmd连接远程数据库
	//mysql>set passwords=FALSE;
	//mysql>set PASSWORD=PASSWORD('你的密码')；
	//即可;