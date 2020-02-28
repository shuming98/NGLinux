<?php
$conn=mysqli_connect('127.0.0.1','root','','nglinux');
mysqli_query($conn,'set names utf8');
//$content =  $_POST['textarea'];
$content = htmlspecialchars($_POST['textarea']);
$content = addslashes($content);
$sql="insert into forum(content) values ('$content')";
$res=mysqli_query($conn,$sql);

if(!$res){
	echo '留言失败，请尝试再次留言';
	exit();
}else{
	header('location:../../forum.php');
}
mysqli_close($conn);
?>