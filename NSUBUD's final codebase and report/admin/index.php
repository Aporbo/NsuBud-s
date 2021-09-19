<?php
error_reporting(1);
if(isset($_POST['Login']))
{
		$con= mysqli_connect("localhost","root","");
	mysqli_select_db($con,"nsubud");
	
	$user=$_POST['username'];
	$pass=$_POST['password'];
	
	
	$que_admin_check=mysqli_query($con,"select * from admin_info where Username='$user' and Password='$pass'");
	
	$count1=mysqli_num_rows($que_admin_check);
	
	if($count1>0)
	{
		session_start();
		$_SESSION['fbadmin']=$user;
		header("location:fb_home/Home.php");
	}
	else
	{
		header("location:../index.php");
	}
}
?>
<html>
<head>
<title> NSUBUD's Admin </title>
<link href="fb_font/font.css" rel="stylesheet" type="text/css">
<LINK REL="SHORTCUT ICON" HREF="img/nsubud.ico" />
<style>
#login_button
{
	font-size:15px;
	height:35;
	width:100;
	padding:2;
	background-color:#b7467b; 
	color:#FFFFFF;
	border-top:#29447E;
	border-right-color:#29447E;
	border-bottom-color:#1A356E;
	border-left-color:#29447E;
	font-weight:bold;
	box-shadow:0px 0px 5px 2px rgb(0,0,0);
}
#go_to_fb
{
	font-size:15px;
	height:35;
	width:200;
	padding:2;
	background-color:#CCC; 
	color:#000;
	border-top:#29447E;
	border-right-color:#29447E;
	border-bottom-color:#1A356E;
	border-left-color:#29447E;
	font-weight:bold;
	box-shadow:0px 0px 5px 2px rgb(0,0,0);
}
</style>
</head>
<body>

<!--head background-->
	<div style="position:absolute;left:0%;top:0%; height:13.2%; width:100%; z-index:-1; background:#d91835">   </div>
	
	<div style="position:absolute;left:36%; top:3.3%; font-size:45; font-weight:900; color:#2a245f; font-weight:bold; box-shadow:0px -10px 20px 1px rgb(0,0,0);"> <font face="myFbFont"> NSUBUD's Admin </font> </div>
	<!--body background-->
	<div style="position:absolute;left:0%;top:13.2%; height:90%; width:100%; z-index:-1; background:#EDF0F5">   </div>
	<!--bottam background-->
	<div style="position:absolute;left:0%;top:110%; height:5%; width:100%; z-index:-1; background:#FFFFFF">   </div>
    
    <div style="position:absolute; left:5%; top:25%;"> <img src="img/logo.png" width="600" height="420"> </div> 
    <div style="position:absolute;left:49%; right:48%; top:35%; height:50%; width:2; background-color:#2a245f;"> </div>
    <div style="position:absolute;left:60%;top:26%; height:60%; width:30%; background:#FFF; box-shadow:0px 0px 10px 3px rgb(21,57,147);">   </div>
    
    <div style="position:absolute;left:70.5%; top:28%; font-size:45; font-weight:900; color:#6e447e; font-weight:bold;">  Login </div>
    
     <div style="position:absolute;left:60%;top:39%; height:2%; width:30%; background:#e21c6f; box-shadow:0px 0px 10px 3px rgb(21,57,147);">   </div>
     
     <form  method="post">
     <div style="position:absolute;left:62%; top:45%; font-size:25; font-weight:900; color:#6e447e; font-weight:bold;">  Username </div>
     <div style="position:absolute; left:62%; top:50%;  "> <input type="text" name="username" style="width:350; height:40; font-size:20px;"/> </div>
     <div style="position:absolute;left:62%; top:58%; font-size:25; font-weight:900; color:#6e447e; font-weight:bold;">  Password </div>
     <div style="position:absolute;left:62%; top:63%; font-size:13px; "> <input type="password" name="password" style="width:350; height:40; font-size:20px;"> </div>
     <div style="position:absolute;left:80.5%;top:75%; ">  <input type="submit" name="Login" value="Log In" id="login_button" />  </div>
    </form>
    
    <form action="../index.php">
    	<div style="position:absolute;left:62%;top:75%; "> <input type="submit" value="Go back to NSUBUD's" id="go_to_fb"> </div>
    </form>
    

</body>
</html>