<?php
	session_start();
	error_reporting(1);
	if(isset($_SESSION['fbuser']))
	{
			$con= mysqli_connect("localhost","root","");
		mysqli_select_db($con,"nsubud");
		$user_email=$_SESSION['fbuser'];
		$que_user_info=mysqli_query($con,"select * from users where Email='$user_email'");
		$user_data=mysqli_fetch_array($que_user_info);
		$userid=$user_data[0];
		
		if(isset($_POST['help']))
		{
			$fb_txt=$_POST['help_txt'];
			$star=$_POST['star'];
			$fb_time=$_POST['help_time'];
			mysqli_query($con,"insert into help(user_id,help_txt,star,Date) values($userid,'$fb_txt','$star','$fb_time')");
		}
		
		if(isset($_POST['delete_help']))
		{
			$fb_id=intval($_POST['help_id']);
			mysqli_query($con,"delete from help where help_id=$fb_id");
		}
		
		
		include("background.php");
?>
<html>
<head>
<title> Help </title>
<style>
#help_button
{
	font-size:14px;
	height:30;
	width:80;
	padding:2;
	background-color:#e21c6f; color:#FFFFFF;
	border-top:#29447E;
	border-right-color:#29447E;
	border-bottom-color:#1A356E;
	border-left-color:#29447E;
	font-weight:bold;
}
</style>
<script>
	function blank_help_check()
	{
		var help_txt=document.help_form.help_txt.value;
		if(help_txt=="")
		{
			return false;
		}
		return true;
	}
	function help_name_underLine(fid)
	{
		document.getElementById("uname"+fid).style.textDecoration = "underline";
	}
	function help_name_NounderLine(fid)
	{
		document.getElementById("uname"+fid).style.textDecoration = "none"
	}
	
	function time_get()
	{
			d = new Date();
			mon = d.getMonth()+1;
			time = d.getDate()+"-"+mon+"-"+d.getFullYear()+" "+d.getHours()+":"+d.getMinutes();
			help_form.help_time.value=time;
	}
</script>
</head>
<body>
	
	<div style="position:absolute; left:25%; top:10%;"> <img style="height:95px; " src="img/help_icon.png"> </div>
	<div style="position:absolute; left:35%; top:12%;"> <h1 style="color:#3B59A4;"> Help </h1> </div>
    <hr style="position:absolute;left:25%;top:25%;height:0.5%;width:50%; border-color:#e21c6f; box-shadow:0px 5px 5px 0px rgb(0,0,0); ">
    
    <div style=" background:#00122e
; position:absolute; left:25%; top:32%; height:24%; width:41.4%; z-index:-1; box-shadow:0px 2px 10px 1px rgb(0,0,0);"> </div>
    
    <form method="post" name="help_form" onSubmit="return blank_help_check()">
	
	<div style="position:absolute; left:25.3%; top:32.5%;">
		<textarea style="height:100; width:550;" name="help_txt" maxlength="100" placeholder="Write your problem and send us"></textarea>
	</div>	
    <div style="position:absolute; left:26%; top:48.4%;"> <img style="height:40px; weight:100%" src="img/star.png"> </div>
    <div style="position:absolute; left:30%; top:50.5%;">
    	<select name="star" style=" font-size:16px; height:25; width:90;"> 
			<option value="Account"> Account </option> 
			<option value="Password"> Password </option> 
            <option value="Login"> Login </option> 
			<option value="Message"> Message </option>
            <option value="signup"> signup </option> 
		</select> 
    </div>
    <input type="hidden" name="help_time">
    <div style="position:absolute; left:59%; top:50%;"> <input type="submit" value="Help" name="help" id="help_button" onClick="time_get()"> </div>
    </form>
    
<?php
		$que_help=mysqli_query($con,"select * from help order by help_id desc");
?>
    <div style="position:absolute; left:20%; top:63%;">
    <table border="0">
<?php
	while($help_data=mysqli_fetch_array($que_help))
	{
		$help_id=$help_data[0];
		$fb_user_id=$help_data[1];
		$fb_txt=$help_data[2];
		$fb_type=$help_data[3];
		$fb_time=$help_data[4];
		$que_fb_user_info=mysqli_query($con,"select * from users where user_id=$fb_user_id");
		$fb_user_data=mysqli_fetch_array($que_fb_user_info);
		$user_name=$fb_user_data[1];
		$user_email=$fb_user_data[2];
		$user_gender=$fb_user_data[4];
		$que_fb_user_pic=mysqli_query($con,"select * from user_profile_pic where user_id=$fb_user_id");
		$fetch_user_pic=mysqli_fetch_array($que_fb_user_pic);
		$user_pic=$fetch_user_pic[2];
?>
	<tr>
<?php    
    if($fb_user_id==$userid)
    {
?>
	<td colspan="3"align="right" style="border-top:outset; border-top-width:thin;"> 
			<form method="post">  
				<input type="hidden" name="help_id" value="<?php echo $help_id; ?>" >
				<input type="submit" name="delete_help" value="Delete" style="background-color:#FFFFFF; border:#FFFFFF;  "> 
			</form>
     </td>
     <td>  </td>
<?php
	}
	else
	{
?>
	<td colspan="3"align="right" style="border-top:outset; border-top-width:thin;">&nbsp;  </td>
     <td>  </td>
     
			
<?php
	}
?>
			
     </tr>
    
	<tr>
    	<td style="padding-left:25;" rowspan="2"> <img src="../../fb_users/<?php echo $user_gender; ?>/<?php echo $user_email; ?>/Profile/<?php echo $user_pic; ?>" height="60" width="55">  </td>
        <td colspan="2" style="padding:7;"> <a href="../fb_view_profile/view_profile.php?id=<?php echo $fb_user_id; ?>" style="text-transform:capitalize; text-decoration:none; color:#003399;" onMouseOver="help_name_underLine(<?php echo $help_id; ?>)" onMouseOut="help_name_NounderLine(<?php echo $help_id; ?>)" id="uname<?php echo $help_id; ?>"> <?php echo $user_name; ?> </a>   </td>
       
    </tr>
    <tr>
		<td colspan="2" style=" padding-left:7; "><?php echo $fb_txt; ?></td>
        <td> </td>
        <td> </td>
	</tr>
    <tr>
    	<td> </td>
        <td style=" padding-left:7;"> <span style="color:#999999;">  <?php echo $fb_type; ?>  </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color:#999999;"> <?php echo $fb_time; ?> </span> </td>
        <td> </td>
    </tr>
    <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<?php
	}
	
?>
   </table></div>
   
   <div style="position:absolute; left:90%; top:100%;" > &nbsp; </div>	

</body>
</html>
<?php
	}
	else
	{
		header("location:../../index.php");
	}
?>