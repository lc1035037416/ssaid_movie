<?php 
//error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html;charset=utf-8");
//连接数据库
$host="localhost";
$user="root";
$psd="123456";
//$dbname="pp";
$db = new mysqli($host,$user,$psd);
if($db->connect_errno<>0){
	echo "无法连接到数据库!";
	echo $db->connect_errno;
}else{
	//echo "已连接到数据库!";	
}
//设置编码
$db->query("SET NAMES utf8");
//创建数据库
$sql = 'CREATE DATABASE movie';
$db->query($sql);
$db->select_db('movie');
//创建用户表
$sql= <<< END
CREATE TABLE `movie`.`user` (
  `id` int(18) NOT NULL AUTO_INCREMENT,
  `user` varchar(11) NOT NULL,
  `pswd` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user` (`user`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
END;
$db->query($sql);

