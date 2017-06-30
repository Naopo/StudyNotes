<?php
	/*
 	 * 命名空间的认识
	 * 1、namespace定义当前文件位于哪个文件夹，例如：
	 * namespace think\cache\driver;
	 * class File
	 * {
	 *  }
	 * 就是定义File类位于think\cache\driver文件夹内
	 *
	 * 2、use用于调用其他类文件，例如：
	 * use app\common\model\Teacher;
	 * 就是调用application/common/model文件夹下的Teacher.php文件
	 * Teacher.php对应的就是文件中的Teacher类
	 * 
	 * 3、根命名空间（类库包）
	 * 系统内置的几个根命名空间（类库包）如下：
	 *  名称       描述           类库目录
	 * +--------+--------------+--------------------------
	 * |think   |系统核心类库   |thinkphp/library/think
	 * +--------+--------------+--------------------------
	 * |traits  |系统Trait类库  |thinkphp/library/traits
	 * +--------+--------------+--------------------------
	 * |app     |应用类库       |application
	 * +--------+--------------+--------------------------
	 *
	 * 4、注意！！类名采用驼峰命名法，且首字母大写！大写！大写！所以首字母大写的是类文件或者类名（狭义的）！
 	 */