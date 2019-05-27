<?php 
include("index.php");
session_destroy();
echo "<script type='text/javascript'>alert('注销成功');
   window.location.href='login.html';
   </script>";
 ?>