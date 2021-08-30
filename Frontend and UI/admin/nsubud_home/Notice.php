<html>
<head>
<title> Notice </title>
<script>
	function time_get()
	{
		d = new Date();
		mon = d.getMonth()+1;
		time = d.getDate()+"-"+mon+"-"+d.getFullYear()+" "+d.getHours()+":"+d.getMinutes();
		notice_form.notice_time.value=time;
	}
</script>
</head>
<body>


<!--notice-->
<script>
	function open_notice_form()
	{
		document.getElementById("notice_form").style.display='block';
	}
	function close_notice_form()
	{
		document.getElementById("notice_form").style.display='none';
	}
</script>
<style>
#notice_button
{
	font-size:18px;
	height:50;
	width:100;
	padding:2;
	background-color:#a85b9b; 
	color:#FFFFFF;
	border-top:#29447E;
	border-right-color:#29447E;
	border-bottom-color:#1A356E;
	border-left-color:#29447E;
	font-weight:bold;
	box-shadow:0px 0px 10px 1px rgb(0,0,0);
}
</style>



<!--notice -->

<div style="position:absolute; left:37%; top:10%;"> <img src="img/Notice.png" height="100" width="100"></div>
<div style="position:absolute; left:45%; top:10%;  color:#a85b9b; font-size:72px;">   Notice  </div>
<hr style="position:absolute;left:25%;top:27%;height:0.5%;width:50%; border-color:#CCCCCC; box-shadow:0px 5px 5px 0px rgb(0,0,0); ">

<div style="position:absolute; left:30%; top:35%; ">
    <img src="img/users.png" height="180" width="180">
</div>
<div style="position:absolute; left:45%; top:42%;  text-transform:capitalize; font-size:48;"> All Users </div>
<form method="post" name="notice_form">
<div style="position:absolute; left:20%; top:72%; "> 
	<input type="text" style="height:50; width:800; font-size:20px; color:#a85b9b;" name="notice_txt" maxlength="90" placeholder="Write a notice..">
</div>
<input type="hidden" name="notice_time">
<div style="position:absolute; left:72%; top:83%; ">  
    <input type="submit" name="notice_users" value="Notice" id="notice_button" onClick="time_get()">
</div> 
</form>

<div style="position:absolute; left:90%; top:100%;" > &nbsp; </div>	
</body>
</html>

