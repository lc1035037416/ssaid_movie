<?php
//链接数据库
$host = '127.0.0.1';
$user = 'root';
$pwd  = '123456';
$dbname = 'movie';

$db = new mysqli( $host, $user, $pwd, $dbname );

if( $db->connect_errno <> 0){
	die('链接数据库失败');
}

//设定数据库数据传输的编码
$db->query("SET NAMES UTF8");