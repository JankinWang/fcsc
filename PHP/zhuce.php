<link rel="stylesheet" type="text/css" href="../CSS/zhuce.css">
<script src="../JS/zhuce.js" type="text/javascript" charset="utf-8" async defer></script>
	
</style>
<div>
	<a href="http://localhost/feicuicheng/" class="zhuCeBiaoti_css">首页</a>&nbsp;&nbsp;
	<sanp .zhuCeBiaoti_css>注册账户</sanp>
	<form id="zhuce_form" action="zhuce.php" method="post">

		<input type="text" required="" onblur ="queRenMiMa(0)" class="input_css"  name="username" value="" placeholder="账号">
		<div class="cuoWuTiShi"></div>
		<input type="password" required="" onblur ="queRenMiMa(1)" class="input_css"  name="password" value="" placeholder="密码">
		<div class="cuoWuTiShi"></div>
		<input type="password" required="" onblur ="queRenMiMa(2)"  class="input_css"  name="" value="" placeholder="确认密码">
		<div class="cuoWuTiShi"></div>
		<input type="text" required="" onblur ="queRenMiMa(3)" class="input_css"  name="telephone" value="" placeholder="联系方式">
		<div class="cuoWuTiShi"></div>
		<input type="email"   onblur ="queRenMiMa(4)" class="input_css"  name="emali" value="" placeholder="E-mali">
		<div class="cuoWuTiShi"></div>
		<input type="text" required=""  onblur ="queRenMiMa(5)" class="input_css"  name="Name" value="" placeholder="真实姓名">
		<div class="cuoWuTiShi"></div>
		<input type="text"  required="" onblur ="queRenMiMa(6)" class="input_css"  name="mibao" value="" placeholder="密保问题">
		<div class="cuoWuTiShi"></div>
		<input type="text" required=""  onblur ="queRenMiMa(7)" class="input_css"  name="daan" value="" placeholder="密码答案">
		<div class="cuoWuTiShi"></div>
		<div class="buttons_css">
		<input class="zhuCeAnNiu_css" type="submit"  name="" value="注册账户">
		<input class="chongZhi_css" onclick="chongZhi()" type="button" name="" value="重置">
        </div>
	</form>
</div>



<?php
header("content-type:text/html;charset=utf-8");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database1";
$link=mysqli_connect($servername,$username,$password,$dbname);
mysqli_query($link,"set names utf8");
session_start();
 if(isset($_POST["username"])&&$_POST['username'] !== $_SESSION['username'])
 {  
 	$Array=array($_POST["username"],$_POST["password"],$_POST["telephone"],$_POST["emali"],$_POST["Name"],$_POST["mibao"],$_POST["daan"]);
 	
    baoCunZhuCe($link,$Array);
    $_SESSION['username']=$_POST['username'];
 }
 // else if(isset($_POST["username"])&&$_POST['username'] == $_SESSION['username'])
 // {
 		  
 //    echo"用户名已存在";
 // }



 function baoCunZhuCe($link, $Array)
 {
     $sql = "INSERT INTO `account`(`username`, `password`,telephone,emali,name, `密保问题`, `密保答案`) VALUES ('".$Array[0]."','".$Array[1]."','".$Array[2]."','".$Array[3]."','".$Array[4]."','".$Array[5]."','".$Array[6]."')";
       $result=mysqli_query($link,$sql);
      // while($row=mysqli_fetch_array($result)){
      // 	echo $row[0];
      // }
      //echo $sql;
        // header('location:zhuce.php');
 }
 
?>