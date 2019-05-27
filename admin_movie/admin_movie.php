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

<!DOCTYPE html>
<html>
<head>
    <title></title>
<style type="text/css">
    ul li {
    display:inline-block;
    list-style:none;
    width:200px;
    border:1px solid #00C6FF;
}
.qiu {
    background:yellow;
}
</style>
</head>
<body>
    <a <?php session_destroy() ?> href="login.php"></a>
<div class="headline2">
    <ul>
        <li class="qiu">标题1</li>
        <li>标题2</li>
        <li>标题3</li>
    </ul>

</div>

<div class="detail">
    1
</div>
<div class="detail" style="display: none;">
    2
</div>
<div class="detail" style="display: none;">
    3
</div>
    <script src="js/bt.js"></script>
</body>
</html>