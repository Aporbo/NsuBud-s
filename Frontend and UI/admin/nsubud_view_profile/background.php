<html>
<head>
	<title>title </title>
    <link href="../nsubud_font/font.css" rel="stylesheet" type="text/css">
    <LINK REL="SHORTCUT ICON" HREF="../img/Faceback.ico" />
	<script src="background_file/background_js/event.js"></script>
	<script src="background_file/background_js/searching.js"></script>
	<script src="background_file/background_js/searched_reco_event.js"></script>
<script src="background_file/background_js/profile_pic&cover_pic.js"></script>
	<link href="background_file/background_css/profile.css" rel="stylesheet" type="text/css">
</head>
<body id="body">


<div style="position:fixed;left:0;top:0; height:6%; width:100%; z-index:2; background:#d91835">   </div>

<div style="position:fixed;left:4.05%;top:0.8%;font-size:25;font-weight:900; z-index:3;"> <a href="../nsubud_home/Home.php" style="color:#FFFFFF; text-decoration:none;" onMouseOver="on_head_nsubud_text()" onMouseOut="out_head_nsubud_text()"> <font face="mynsubudFont"> NSUBUD's </font> </a> </div>

<div style="position:fixed;left:4%;top:1%; height:5%; width:8%; z-index:2; background:#4A63A5; display:none;" id="head_nsubud_text_backgraound">   </div>


<div style="position:fixed; left:60.7%; top:1.6%; z-index:2;"> <a href="../nsubud_home/Group_Message.php"> <img style="height:28px" src="background_file/background_icons/messages.jpg"> </a> </div>


<script>
	function bcheck()
	{
		s=document.nsubud_search.search1.value;
		
		if(s=="")
		{
			return false;
		}
		return true;
	}
</script>
<form name="nsubud_search" action="../nsubud_home/Search_Display_submit.php" method="get" onSubmit="return bcheck()">
	<div style="position:fixed; left:19%; top:1.2%; z-index:2;"> <input type="text" name="search1" placeholder="Search for people" style="height:25; width:500;" onKeyUp="searching();" id="search_text1"> </div>
	
	<div id="searching_ID"></div> 
	
	<div style="position:fixed; left:54.2%;top:1.6%; z-index:2;">
	<input type="submit" value=" " style="background-image:url(background_file/background_icons/search.png);">
	</div>
</form>
	
<div style="position:fixed; left:90%; top:0.6%; z-index:2;">
	<table cellspacing="0">
	<tr id="hedarname2">
	
		<td style="padding-left:7;" id="head_img" onMouseOver="head_pro_pic_over()" onMouseOut="head_pro_pic_out()"> <a href="../nsubud_home/Home.php">  <img src="img/admin.png" style="height:27; width:25;"> </a>  </td>
		
		<td id="head_name_bg"  onMouseOver="head_pro_pic_over()" onMouseOut="head_pro_pic_out()"> <a href="../nsubud_home/Home.php" id="head_name_font" style="color:#DEDEEF; font-size:12; font-weight:900;font-family:lucida Bright; text-transform:capitalize; text-decoration:none;"> &nbsp;  Admin &nbsp;</a> </td>
	</tr>
	</table>
</div>


<script src="background_file/background_js/options.js"></script>

        <div style="position:fixed; left:97%; top:0.4%; z-index:2;"> <img src="background_file/background_icons/nexusae0_home_settings_icon2.png" height="35" width="35" onClick="open_option()"> </div>
        
<div style="display:none" id="option">

<div style="position:fixed; left:97%; top:0.4%; z-index:2;"> <img src="background_file/background_icons/nexusae0_home_settings_icon2.png" height="35" width="35" onClick="close_option()"> </div>

        <div style="position:fixed; left:85%; top:6%; z-index:3; background:#FFF; height:32%; width:14.8%; box-shadow:0px 2px 10px 1px rgb(0,0,0);"> </div>
        
         <div style="position:fixed; left:85.8%; top:7.8%; z-index:3;">
        <a href="../nsubud_home/Home.php"> <img src="img/News_Feed.PNG"  onMouseOver="head_new_over()" onMouseOut="head_new_out()"></a>
        </div>
        <div style="position:fixed; left:88%; top:5%; z-index:3;">
                 <a href="../nsubud_home/Home.php" style="text-decoration:none; color:#000;" id="head_new" onMouseOver="head_new_over()" onMouseOut="head_new_out()" ><h4>News Feed</h4></a> 
        </div>
        
	<div style="position:fixed; left:86%; top:13%; z-index:3;"> <a href="../nsubud_home/Settings.php"> <img src="img/settings2.png" height="25" width="23" onMouseOver="head_settings_over()" onMouseOut="head_settings_out()"> </a> </div>
<div style="position:fixed; left:88.2%; top:10%; z-index:3;"><a href="../nsubud_home/Settings.php" style="text-decoration:none; color:#000;" id="head_settings" onMouseOver="head_settings_over()" onMouseOut="head_settings_out()"><h4> Account Settings </h4></a></div>

	<div style="position:fixed; left:86%; top:17.8%; z-index:3;"> <a href="../nsubud_home/Group_Message.php"> <img src="img/group.png" height="25" width="23" onMouseOver="head_g_chat_over()" onMouseOut="head_g_chat_out()"> </a> </div>
<div style="position:fixed; left:88.2%; top:15%; z-index:3;"><a href="../nsubud_home/Group_Message.php" style="text-decoration:none; color:#000;" id="head_g_chat" onMouseOver="head_g_chat_over()" onMouseOut="head_g_chat_out()"><h4> Group Chat </h4></a></div>

	<div style="position:fixed; left:86%; top:22.8%; z-index:3;"> <a href="../nsubud_home/Notice.php"> <img src="img/Notice.png" height="25" width="23" onMouseOver="head_notice_over()" onMouseOut="head_notice_out()"> </a> </div>
<div style="position:fixed; left:88.2%; top:20%; z-index:3;"><a href="../nsubud_home/Notice.php" style="text-decoration:none; color:#000;" id="head_notice" onMouseOver="head_notice_over()" onMouseOut="head_notice_out()"><h4> Notice </h4></a></div>

<div style="position:fixed; left:86.1%; top:27.5%; z-index:3;"> <a href="../nsubud_home/help.php"> <img src="background_file/background_icons/icon-help.png" height="20" width="20" onMouseOver="head_help_over()" onMouseOut="head_help_out()"> </a> </div>
<div style="position:fixed; left:88.3%; top:24.5%; z-index:3;"><a href="../nsubud_home/help.php" style="text-decoration:none; color:#000;" id="head_help" onMouseOver="head_help_over()" onMouseOut="head_help_out()"><h4> Help </h4></a></div>

<div style="position:fixed; left:86%; top:32.5%; z-index:3;"> <a href="../nsubud_logout/logout.php"> <img src="background_file/background_icons/logout.png" height="20" width="20"  onMouseOver="head_logout_over()" onMouseOut="head_logout_out()"> </a> </div>
<div style="position:fixed; left:88.3%; top:29.1%; z-index:3;"><a href="../nsubud_logout/logout.php" style="text-decoration:none; color:#000;" id="head_logout" onMouseOver="head_logout_over()" onMouseOut="head_logout_out()"><h4> Logout </h4></a></div>
</div>
		

<hr style="position:absolute;left:15%;top:4.8%;height:55%;width:0; border-color:#CCCCCC; box-shadow:-1px 0px 5px 0px rgb(0,0,0);">

<hr style="position:absolute;left:85.01%;top:4.8%;height:55.1%;width:0; border-color:#CCCCCC;box-shadow:1px 0px 5px 0px rgb(0,0,0); ">

<hr style="position:absolute;left:15%;top:59.5%;height:0%;width:70.15%; border-color:#CCCCCC; box-shadow:0px 5px 5px 1px rgb(0,0,0);">


<div style="position:absolute; left:15.11%; top:6%;">  <img src="img/NSU.jpg" height="279" width="943" onMouseOver="dis_cover_pic_edit();" onMouseOut="out_cover_pic_edit();" onClick="open_cover_photo()"> </div>

<div style="position:absolute; left:79%; top:46%; z-index:1;">
<form method="post">
<input type="submit" value="offline" name="offline_set">
</form>
</div>

<script>
	function open_warning_form()
	{
		document.getElementById("warning_form").style.display='block';
	}
	function close_warning_form()
	{
		document.getElementById("warning_form").style.display='none';
	}
</script>
<style>
#warning_button
{
	font-size:18px;
	height:50;
	width:100;
	padding:2;
	background-color:#5B74A8; 
	color:#FFFFFF;
	border-top:#29447E;
	border-right-color:#29447E;
	border-bottom-color:#1A356E;
	border-left-color:#29447E;
	font-weight:bold;
	box-shadow:0px 0px 10px 1px rgb(0,0,0);
}
</style>
<div style="position:absolute; left:69%; top:40%; z-index:1;">
<input type="button" value="warning" onClick="open_warning_form()">
</div>


<div style="display:none;" id="warning_form">

<div style="position:fixed; background:#3A3E41; opacity: 0.8; left:0%; top:0%; height:100%; width:100%; z-index:3" onClick="close_warning_form()"></div>
<div style="position:fixed; background:#FFF; left:17%; top:5%; height:90%; width:65.5%; z-index:3"></div>

<div style="position:fixed; left:35%; top:8%; z-index:3;"> <img src="img/warning_icon.png" height="100" width="100"></div>
<div style="position:fixed; left:43%; top:8%; z-index:3; color:#971111; font-size:72px;">   warning  </div>

<div style="position:fixed; left:25%; top:29%; z-index:3;">
    <img src="img/Aporbo.jpg" style="height:240; width:240; z-index:3;">
</div>
<div style="position:fixed; left:45%; top:42%; z-index:3; text-transform:capitalize; font-size:48;"> Aporbo Ghosh </div>
<form method="post">
<div style="position:fixed; left:20%; top:72%; z-index:3;"> 
	<input type="text" style="height:50; width:800; font-size:20px; color:#971111;" name="warning_txt" maxlength="90" placeholder="Write a warning..">
</div>
    <input type="hidden" name="warning_id" value="" >
<div style="position:fixed; left:72%; top:83%; z-index:3;">  
    <input type="submit" name="warning_user" value="warning" id="warning_button">
</div> 
</form>
</div>    
    


<div style="position:absolute; left:75%; top:40%; z-index:1;">
	<form method="post">
    	<input type="hidden" name="delete_id" value="" >
    	<input type="submit" name="delete_user" value="Delete this user"> 
    </form>
 </div>

<!--cover pic open dailog box-->
<div style="display:none;" id="cover_pic_open_box">
<div style="position:fixed; background:#3A3E41; opacity: 0.8; left:0%; top:0%; height:100%; width:100%; z-index:3" onClick="close_cover_photo()"></div>
<div style="position:fixed; background:#FFF; left:17%; top:5%; height:90%; width:65.5%; z-index:3"></div>
<div style="position:fixed; left:20%; top:10%;z-index:4;">
<img src="imh/NSU.jpg" style="height:500; width:800; ">
</div>
</div>





<div style="position:absolute; left:75%; top:30%; z-index:1; display:none;" id="edit_cover_button" > <input type="button" onMouseOver="dis_cover_pic_edit();" value="Change Cover" onMouseOut="out_cover_pic_edit();" onClick="Change_cover_pic()"> </div>


<div style="display:none;" id="change_cover_pic_dailogbox"> 
<div style="position:fixed; background:#3A3E41; opacity: 0.8; left:0%; top:0%; height:100%; width:100%; z-index:3"></div>
<div style="position:fixed; background:#d91835; left:30%; top:20%; height:10%; width:35%; z-index:3"></div>
<div style="position:fixed;  left:31%; top:22%; z-index:3">  <img src="background_file/background_icons/upload_profile_pic.png" height="45" width="50"> </div>
<div style="position:fixed;  left:35%; top:19%; z-index:3">
<h1 style="color:#FFFFFF;"> Upload Cover Picture </h1> </div>
<div style="position:fixed;  left:63.7%; top:19%; z-index:4">  <input type="button" style="height:22; width:22; background:url(background_file/background_icons/exit.png) no-repeat; border:none;" onClick="hide_cover_change_box()"> </div>

<form method="post" enctype="multipart/form-data" name="posting_pic"  onSubmit="return cover_Img_check();">
	<div style="position:fixed; left:35%; top:40%; z-index:4;"> <input type="file" name="file2" id="img"> </div>
	<div style="position:fixed; left:53%; top:40%; z-index:4;"> <input type="submit" value="Upload" name="file2" id="upload_button"> </div>
</form>


<div style="position:fixed; background:#FFFFFF; left:30%; top:30%; height:30%; width:35%; z-index:3"></div>
<div style="position:fixed;left:30.1%;top:54%; height:6%; width:34.9%;  background:#E9EAED; z-index:3; ">   </div>

<div style="position:fixed;left:29.9%; top:20%; height:0.7%; width:35.1%; background-color:#666666; z-index:3; box-shadow:0px -6px 10px 1px rgb(0,0,0); "> </div>
<div style="position:fixed;left:29.9%; top:20%; height:40.1%; width:0.3%; background-color:#666666; z-index:3; box-shadow:-5px 0px 10px 1px rgb(0,0,0); "> </div>
<div style="position:fixed;left:29.9%; top:60.1%; height:0.7%; width:35.1%; background-color:#666666; z-index:3; box-shadow:0px 6px 10px 1px rgb(0,0,0); "> </div>
<div style="position:fixed;left:64.7%; top:20%; height:40.1%; width:0.3%; background-color:#666666; z-index:3;box-shadow:5px 0px 10px 1px rgb(0,0,0);  "> </div>

</div>


<!--cover img add button-->
<div style="position:absolute; left:75%; top:30%; z-index:1; display:none;" id="edit_cover_button" > <input type="button" onMouseOver="dis_cover_pic_edit();" value="Add Cover" onMouseOut="out_cover_pic_edit();" onClick="upload_cover_pic()"> </div>

<!--Cover pic add dailog box-->
<div style="display:none;" id="upload_cover_pic_dailogbox"> 
<div style="position:fixed; background:#3A3E41; opacity: 0.8;  left:0%; top:0%; height:100%; width:100%; z-index:3"></div>
<div style="position:fixed; background:#d91835; left:30%; top:20%; height:10%; width:35%; z-index:3"></div>
<div style="position:fixed;  left:31%; top:22%; z-index:3">  <img src="background_file/background_icons/upload_profile_pic.png" height="45" width="50"> </div>
<div style="position:fixed;  left:35%; top:19%; z-index:3">
<h1 style="color:#FFFFFF;"> Upload Cover Picture </h1> </div>
<div style="position:fixed;  left:63.7%; top:19%; z-index:4">  <input type="button" style="height:22; width:22; background:url(background_file/background_icons/exit.png) no-repeat; border:none;" onClick="hide_cover_add_box()"> </div>

<form method="post" enctype="multipart/form-data" name="posting_pic"  onSubmit="return cover_Img_check();">
	<div style="position:fixed; left:35%; top:40%; z-index:4;"> <input type="file" name="file1" id="img"> </div>
	<div style="position:fixed; left:53%; top:40%; z-index:4;"> <input type="submit" value="Upload" name="file1" id="upload_button"> </div>
</form>


<div style="position:fixed; background:#FFFFFF; left:30%; top:30%; height:30%; width:35%; z-index:3"></div>
<div style="position:fixed;left:30.1%;top:54%; height:6%; width:34.9%;  background:#E9EAED; z-index:3; ">   </div>
<!--Cover pic add dailog box boder-->
<div style="position:fixed;left:29.9%; top:20%; height:0.7%; width:35.1%; background-color:#666666; z-index:3; box-shadow:0px -6px 10px 1px rgb(0,0,0); "> </div>
<div style="position:fixed;left:29.9%; top:20%; height:40.1%; width:0.3%; background-color:#666666; z-index:3; box-shadow:-5px 0px 10px 1px rgb(0,0,0); "> </div>
<div style="position:fixed;left:29.9%; top:60.1%; height:0.7%; width:35.1%; background-color:#666666; z-index:3; box-shadow:0px 6px 10px 1px rgb(0,0,0); "> </div>
<div style="position:fixed;left:64.7%; top:20%; height:40.1%; width:0.3%; background-color:#666666; z-index:3;box-shadow:5px 0px 10px 1px rgb(0,0,0);  "> </div>

</div>




<div style="position:absolute; left:16.5%; top:33%; z-index:1;">
	<table border="0">
	<tr>
		<td>  <img src="img/Aporbo.jpg" style="height:150; width:150;" onMouseOver="dis_pro_pic_edit();" onMouseOut="out_pro_pic_edit();" onClick="open_profile_photo()">  </td>
		<td>  &nbsp; &nbsp; <samp  style="color:#FFFFFF; font-size:16; font-weight:900;font-family:lucida Bright; text-transform:capitalize; text-decoration:none; background-color:#000000;" id="left_name">   Aporbo Ghosh </samp> </td>
	</tr>
	</table>
</div>


<div style="position:absolute;left:16.3%; top:32.7%; height:25.3%; width:12%; background-color:#FFFFFF; "> </div>


<div style="position:absolute;left:16.25%; top:32.6%; height:0.10%; width:12.1%; background-color:#CCCCCC; "> </div>
<div style="position:absolute;left:16.25%; top:32.65%; height:25.5%; width:0.06%; background-color:#CCCCCC; "> </div>
<div style="position:absolute;left:16.25%; top:58%; height:0.3%; width:12.1%; background-color:#CCCCCC; z-index:1"> </div>
<div style="position:absolute;left:28.3%; top:32.65%; height:25.5%; width:0.06%; background-color:#CCCCCC; z-index:1; "> </div>

<!--Profile change button-->
<div style="position:absolute; left:17.4%; top:52%; z-index:1; display:none;" id="edit_pro_button" > <input type="button" value="Edit Profile Picture" onMouseOver="dis_pro_pic_edit();" onMouseOut="out_pro_pic_edit();" onClick="upload_pro_pic()"> </div>


<div style="display:none;" id="profile_pic_open_box">
<div style="position:fixed; background:#3A3E41; opacity: 0.8; left:0%; top:0%; height:100%; width:100%; z-index:3" onClick="close_profile_photo()"></div>
<div style="position:fixed; background:#FFF; left:17%; top:5%; height:90%; width:65.5%; z-index:3"></div>
<div style="position:fixed; left:20%; top:10%;z-index:4;">
<img src="img/Aporbo.jpg" style="height:500; width:800; ">
</div>
</div>


<div style="display:none;" id="profile_pic_open_box">
<div style="position:fixed; background:#3A3E41; opacity: 0.8; left:0%; top:0%; height:100%; width:100%; z-index:3" onClick="close_profile_photo()"></div>
<div style="position:fixed; background:#FFF; left:17%; top:5%; height:90%; width:65.5%; z-index:3"></div>
<div style="position:fixed; left:20%; top:10%;z-index:4;">
<img src="img/Aporbo.jpg" style="height:500; width:800; ">
</div>
</div>

<!--Profile change dailog box-->
<div style="display:none;" id="upload_pic"> 
<div style="position:fixed; background:#3A3E41; opacity: 0.8; left:0%; top:0%; height:100%; width:100%; z-index:3"></div>
<div style="position:fixed; background:#d91835; left:30%; top:20%; height:10%; width:35%; z-index:3"></div>
<div style="position:fixed;  left:31%; top:22%; z-index:3">  <img src="background_file/background_icons/upload_profile_pic.png" height="45" width="50"> </div>
<div style="position:fixed;  left:35%; top:19%; z-index:3">
<h1 style="color:#FFFFFF;"> Upload Profile Picture </h1> </div>
<div style="position:fixed;  left:63.7%; top:19%; z-index:5;">  <input type="button" style="height:22; width:22; background:url(background_file/background_icons/exit.png) no-repeat; border:none;" onClick="hide_profile_change_box()"> </div>

<form method="post" enctype="multipart/form-data" name="posting_pic"  onSubmit="return profile_Img_check();">
	<div style="position:fixed; left:35%; top:40%; z-index:4;"> <input type="file" name="file" id="img1"> </div>
	<div style="position:fixed; left:53%; top:40%; z-index:4;"> <input type="submit" value="Upload" name="file" id="upload_button"> </div>
</form>


<div style="position:fixed; background:#FFFFFF; left:30%; top:30%; height:30%; width:35%; z-index:3"></div>
<div style="position:fixed;left:30.1%;top:54%; height:6%; width:34.9%;  background:#E9EAED; z-index:3; ">   </div>
<!--Profile change dailog box boder-->
<div style="position:fixed;left:29.9%; top:20%; height:0.7%; width:35.1%; background-color:#666666; z-index:4; box-shadow:0px -6px 10px 1px rgb(0,0,0); "> </div>
<div style="position:fixed;left:29.9%; top:20%; height:40.1%; width:0.3%; background-color:#666666; z-index:4; box-shadow:-5px 0px 10px 1px rgb(0,0,0); "> </div>
<div style="position:fixed;left:29.9%; top:60.1%; height:0.7%; width:35.1%; background-color:#666666; z-index:4; box-shadow:0px 6px 10px 1px rgb(0,0,0); "> </div>
<div style="position:fixed;left:64.7%; top:20%; height:40.1%; width:0.3%; background-color:#666666; z-index:4;box-shadow:5px 0px 10px 1px rgb(0,0,0);  "> </div>

</div>

<!--Profile,name then white bottam-->
<div style=" background:#FFFFFF; position:absolute; left:15.1%; top:50.6%; height:10%; width:69.9%; z-index:-1;"> </div>

<div style="position:absolute;left:29.9%; top:51%; height:9.8%; width:0.05%; background-color:#717171; z-index:1;"> </div>
<div style="position:absolute;left:37%; top:51%; height:9.8%; width:0.05%; background-color:#717171; z-index:1; "> </div>
<div style="position:absolute;left:43%; top:51%; height:9.8%; width:0.05%; background-color:#717171; z-index:1; "> </div>
<div style="position:absolute;left:51.6%; top:51%; height:9.8%; width:0.05%; background-color:#717171; z-index:1; "> </div>

<script> 
	function on_timeline_txt()
	{
		document.getElementById("timeline_txt_background").style.display='block';
	}
	function out_timeline_txt()
	{
		document.getElementById("timeline_txt_background").style.display='none';
	}
	function on_about_txt()
	{
		document.getElementById("about_txt_background").style.display='block';
	}
	function out_about_txt()
	{
		document.getElementById("about_txt_background").style.display='none';
	}
	function on_photos_txt()
	{
		document.getElementById("photos_txt_background").style.display='block';
	}
	function out_photos_txt()
	{
		document.getElementById("photos_txt_background").style.display='none';
	}
</script>




<script>
		function up_online()
		{
		 	document.getElementById("online_bg").style.display='block';
			document.getElementById("down_onlne").style.display='block';
			document.getElementById("down_onlne_img").style.display='block';
			document.getElementById("up_online").style.display='none';
			document.getElementById("up_online_img").style.display='none';
		}
		function down_online()
		{
		 	document.getElementById("online_bg").style.display='none';
			document.getElementById("down_onlne").style.display='none';
			document.getElementById("down_onlne_img").style.display='none';
			document.getElementById("up_online").style.display='block';
			document.getElementById("up_online_img").style.display='block';
		}
</script>
<div style="display:none;" id="online_bg">
<div style="position:fixed; left:84%; top:6%; background-color:#7F7F7F;  height:89.2%; width:16%; z-index:2;"></div>



	<div style="position:fixed; left:89%; top:8%; color:#FFF; z-index:2;"> Not found </div>

	<div style="position:fixed; left:84.5%; top:6%; z-index:2;">
	<table>

			 <tr>
			   	   <td> <a href="> <img src="img/Aporbo.jpg" height="30" width="30"> </a> </td>
				   <td style="color:#ffffff;"> <a href="" style="text-transform:capitalize; text-decoration:none; color:#ffffff;"> Aporbo Ghosh </a> &nbsp; </td>	
				   <td><img src="background_file/background_icons/online_symbol.png"  /></td>   
			 </tr>	

</table>
</div>
</div>



<div style="position:fixed; left:84%; top:95.2%;z-index:2;" id="up_online"> <input type="button" style="height:30; width:216; border:groove;" value="" onClick="up_online()"/>  </div>
<div style="position:fixed; left:84%; top:95.2%; display:none;z-index:2;" id="down_onlne"> <input type="button" style=" height:30; width:216; border:groove;" value="" onClick="down_online()" />  </div>
<div style="position:fixed; left:88%; top:95.7%;z-index:2;" id="up_online_img"> <img src="background_file/background_icons/online.png" onClick="up_online()" /></div>
<div style="position:fixed; left:88%; top:95.7%;z-index:2; display:none;"id="down_onlne_img"> <img src="background_file/background_icons/online.png" onClick="down_online()" /></div>

</body>
</html>