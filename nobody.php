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
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/type.css?v=20181125">
	<style type="text/css">

	</style>
	<script>
function ly()
{
    alert("购买成功！");
}
</script>
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
		<a href="index.php">明日电影</a>
	</div>
	<div class="search d7">
		<form>
		  <input type="text" placeholder="搜索从这里开始...">
		  <button type="submit">搜索</button>
		</form>
	</div>
</div>
<div class="movie-deta">
	<div class="movie-img">
		<img src="movie/0.png">
	</div>
	<div class="movie-text">
		<span>无名之辈 （A Cool Fish）</span><br><br>
		<p>导演：饶晓志 
		<br>主演：陈建斌,任素汐,潘斌龙,章宇,马吟吟 <br>类型：喜剧,剧情 <br>制片国家/地区：中国大陆 <br>片长：108分钟 <br>剧情介绍：在一座山间小城中，一对低配劫匪、一个落魄的泼皮保安、一个身体残疾却性格彪悍的毒舌女以及一系列生活在社会不同轨迹上的小人物，在一个貌似平常的日子里，因为一把丢失的老枪和一桩当天发生在城中的乌龙劫案，从而被阴差阳错地拧到一起，发生的一幕幕令人啼笑皆非的荒诞喜剧。<p>
	</div>
	<hr>

	<div class="price">
		<div class="money">
			<nobr>影院票价：<span>32</span>元</nobr>
		</div>
		<div class="pay">
			<a href="#" onclick="ly()">购票</a>
		</div>
	</div>
	<div class="index">
	<a href="index.php">返回首页</a>
	</div>
</div>
<div class="end" style="margin-top: 100px">
	<p>©2018 Ssaid www.ssaid.cn</p>
</div>
</body>
</html>