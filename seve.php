<?php 
 include('index.php');
 include('sql.php');
header("Content-Type:text/html;charset=utf-8"); 

 // if(isset($_POST['login'])) 
 // { 
  $user =$_POST['user']; 
  $pswd =$_POST['pswd']; 
  $sql = "select user from user where user='$user' and pswd='$pswd'";
  $query = $db->query($sql);
  // $rows = mysql_num_rows($query);
  if(($user=='')||($pswd=='')) 
  { 
   header('refresh:3;url=login.html'); 
   echo "改用户名或密码不能为空，3秒后跳转到登录页面"; 
   exit; 
  } 
  else if(mysqli_num_rows($query)>0)
  { 

	//登录成功将信息保存到session中 
	   session_start(); 
	   $_SESSION['user']=$user; 
	   // $_SESSION['views']=1; 
	   //跳转到用户首页 
	   header('refresh:0;url=index.php'); 
  } 
  else 
  { 
   //用户名或密码错误 
   header('refresh:3;url=login.html'); 
   echo "用户名或密码错误，3秒后跳转到登录页面"; 
   exit; 
  } 
 // } 
?>