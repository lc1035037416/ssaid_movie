<?php 
	include("sql.php");
	session_start();
	@$userAccount=$_SESSION['user'];
	if (isset($_SESSION['user'])) {
		# code...
		
	}else{
		echo "<script type='text/javascript'>alert('请先登录');
   window.location.href='login.html';
   </script>";
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>首页</title>
	<link rel="stylesheet" type="text/css" href="css/style.css?v=20181129" />
	<style type="text/css">

</head>
<body>
<div class="head">
	<p>欢迎来到明日电影！</p>
	<a href="login.html" target="_blank">请登录</a>
	<a href="sign.html">立即注册>></a>
	<p><?php echo $userAccount;?></p>
	<a href="quit.php">退出登录</a>
</div>
<div class="nav">
	<div class="logo">
		<a href="#">明日电影</a>
	</div>
	<div class="search d7">
		<form>
		  <input type="text" placeholder="搜索从这里开始...">
		  <button type="submit">搜索</button>
		</form>
	</div>
</div>