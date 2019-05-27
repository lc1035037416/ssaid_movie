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
	<link rel="stylesheet" type="text/css" href="css/style.css?v=1905271" />
	<link rel="stylesheet" type="text/css" href="css/type.css?v=1905272">

    <link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- <script type="text/javascript">
		//页面加载后执行
		window.onload=function(){
			//选择器
			function $(name){
				return typeof name==='string'?document.querySelector(name):null;
			}	
			$("#btn").onclick=function(){
				$(".cover").style.display="none";
			}


		}
	</script> -->
</head>
<body>
<div class="head">
	<p>欢迎来到明日电影！</p>
	<a href="login.html" target="_blank">请登录</a>
	<a href="login.html">立即注册>></a>
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
		  <!-- <button type="submit">搜索</button> -->
		</form>
	</div>
</div>




    <!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。也可以根据需要只加载单个插件。 -->
    <script src="js/bootstrap.min.js"></script>
<!-- <h2 id="carousel-examples">Examples</h2> -->
  <div class="bs-example" data-example-id="simple-carousel">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="images/LF1.png" alt="First slide">
        </div>
        <div class="item">
          <img src="images/LF2.png" alt="Second slide">
        </div>
        <div class="item">
          <img src="images/LF3.png" alt="Third slide">
        </div>
      </div>
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div><!-- /example -->






<!-- <div id="banner">
	<div id="carousel">
		<img src="images/11.png" data-url="#">
		<img src="images/22.png" data-url="#">
		<img src="images/33.png" data-url="#">
		<img src="images/44.png" data-url="#">
	</div>
</div>

<script src="js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
<script src="js/slider.js" type="text/javascript" charset="utf-8"></script>
<script>
	$(function() {
		$('#carousel').carousel({
			curDisplay: 0, //默认索引
			autoPlay: false, //是否自动播放
			interval: 3000 //间隔时间
		});
	});
</script> -->
<div class="cont">
	<dir class="cont_head">
		<h1>热度最高—>></h1>
	</dir>
	<div class="cont_movie">
		<div>
			<img src="movie/0.png">
			<a href="nobody.php"><button>购票</button></a>
		</div>
		<div>
			<img src="movie/1.png">
			<a href="nobody.php"><button>购票</button></a>
		</div>
		<div>
			<img src="movie/2.png">
			<a href="nobody.php"><button>购票</button></a>
		</div>
		<div>
			<img src="movie/3.png">
			<a href="nobody.php"><button>购票</button></a>
		</div>
		<div>
			<img src="movie/4.png">
			<a href="nobody.php"><button>购票</button></a>
		</div>
		<div>
			<img src="movie/5.png">
			<a href="nobody.php"><button>购票</button></a>
		</div>
		<div>
			<img src="movie/6.png">
			<a href="nobody.php"><button>购票</button></a>
		</div>
		<div>
			<img src="movie/7.png">
			<a href="nobody.php"><button>购票</button></a>
		</div>
		<div>
			<img src="movie/8.png">
			<a href="nobody.php"><button>购票</button></a>
		</div>
		<div>
			<img src="movie/9.png">
			<a href="nobody.php"><button>购票</button></a>
		</div>
		
	</div>
	<!-- <div class="page"><button>1</button></div> -->



<div class="page">
<nav aria-label="Page navigation">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</div>











</div>
<div class="end">
	<p>©2018 Ssaid www.ssaid.cn</p>
</div>
<!-- <div class=cover id="cover">
	<div class="login">
		<form action="seve.php" method="post">
			<input type="text" name="user">
			<input type="password" name="pswd">
			<button id="btn" name="login">登录</button>
		</form>
	</div>
</div> -->

</body>
</html>