<?php 
include('sql.php');
session_start();
if(isset($_SESSION['username']))
{
}else{
    header('refresh:3;url=login.php'); 
   echo "密码已过期！请重新登录";
}

 ?>