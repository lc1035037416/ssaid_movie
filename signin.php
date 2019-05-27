<?php 
error_reporting(0); 
 include('sign.html');
 include('sql.php');
header("Content-Type:text/html;charset=utf-8"); 

 // if(isset($_POST['login'])) 
 // { 
  $user =$_POST['user']; 
  $pswd =$_POST['pswd']; 
  $sql = "INSERT INTO user (user, pswd) VALUES ('$user', '$pswd')";
  $query = $db->query($sql);
  // $rows = mysql_num_rows($query);
  if(($user=='')||($pswd=='')) 
  { 
   header('refresh:3;url=sign.html'); 
   echo "改用户名或密码不能为空，3秒后跳转到登录页面"; 
   exit; 
  } 
  else if($query)
  { 
      
   
    //用户名或密码错误 
  //跳转到登录页面 
    echo "<script>alert('注册成功，跳转到登录页面');window.location.href='login.html';</script>";
     header('refresh:0;url=login.html'); 
     exit; 
	  
  } 
  else 
  { 
  // header('refresh:3;url=sign.html'); 
   echo "<script type='text/javascript'>alert('用户名已存在');
   location='javascript:history.back()';
   </script>"; 
  } 
 // } 
?>