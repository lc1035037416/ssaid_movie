<?php 
 include('login.php');
 include('sql.php');
header("Content-Type:text/html;charset=utf-8"); 

 // if(isset($_POST['login'])) 
 // { 
  $username =$_POST['username']; 
  $password =$_POST['password']; 
  $sql = "select user from admin_movie where user='$username' and psd='$password'";
  $query = $db->query($sql);
  // $rows = mysql_num_rows($query);
  if(($username=='')||($password=='')) 
  { 
   header('refresh:3;url=login.php'); 
   echo "改用户名或密码不能为空，3秒后跳转到登录页面"; 
   exit; 
  } 
  else if(mysqli_num_rows($query)>0)
  { 

	//登录成功将信息保存到session中 
	   session_start(); 
	   $_SESSION['username']=$username; 
	   // $_SESSION['views']=1; 
	   //跳转到用户首页 
	   header('refresh:0;url=admin_movie.php'); 
  } 
  else 
  { 
   //用户名或密码错误 
   header('refresh:3;url=login.php'); 
   echo "用户名或密码错误，3秒后跳转到登录页面"; 
   exit; 
  } 
 // } 
?>