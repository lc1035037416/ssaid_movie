<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>管理员登录</title>
	<style type="text/css">
	.head{
		height: 150px;
		background-color: #F30;
	}
		.head aa{
			margin: 80px;
			font-size: 50px;
			color: #FFF;
		}
	.login{
		background-color: #F000;
		margin-left:auto;
		margin-right:auto;
		width:200px;
		height: 200px;
		margin-top:10%; 
	}
/**/
button.blue {
	color:white;
	background:#4C8FFB;
	border:1px #3079ED solid;
	box-shadow:inset 0 1px 0 #80B0FB;
}
button.blue:hover {
	border:1px #2F5BB7 solid;
	box-shadow:0 1px 1px #EAEAEA,inset 0 1px 0 #5A94F1;
	background:#3F83F1;
}
button.blue:active {
	box-shadow:inset 0 2px 5px #2370FE;
}
/**/
	</style>
</head>
<body>
	<div class="head">
		<aa>后台登录</aa>
		
	</div>
		<div class="login">
			<form action="seve.php" method="post">
				<bb>账号</bb>
				<input type="text" name="username">
				<p>
				<bb>密码</bb>
				<input type="password" name="password">
				<p>
				<!-- <input class="an_btn" type="submit" value="登录"> -->
				<button class="blue" name="login">登录</button>

			</form>
				
			
		</div>


</body>
</html>