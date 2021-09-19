
<html>
<head>
<title></title>
<link href="Profile_css/Profile.css" rel="stylesheet" type="text/css">
<script src="Profile_js/Profile.js"> </script>
<script>
	function time_get()
	{
			d = new Date();
			mon = d.getMonth()+1;
			time = d.getDate()+"-"+mon+"-"+d.getFullYear()+" "+d.getHours()+":"+d.getMinutes();
			posting_txt.txt_post_time.value=time;
	}
	function time_get1()
	{
		d = new Date();
		mon = d.getMonth()+1;
		time = d.getDate()+"-"+mon+"-"+d.getFullYear()+" "+d.getHours()+":"+d.getMinutes();
		posting_pic1.pic_post_time.value=time;
	}
</script>
</head>
<body bgcolor="#E9EAED">



<div style="position:absolute;left:31.5%; top:54%; font-weight:bold; z-index:1;">  Timeline  </div>
<div style="position:absolute;left:37.1%; display:none; top:51%; height:9.8%; width:5.9%; background-color:#F6F7F8; z-index:1;" id="about_txt_background"> </div>
<div style="position:absolute;left:38.3%; top:54%; font-weight:bold; z-index:1;"> <a href="about.php" style="text-decoration:none; color:#b01937;" onMouseOver="on_about_txt();" onMouseOut="out_about_txt();"> About </a>  </div>
<div style="position:absolute;left:43.1%; display:none; top:51%; height:9.8%; width:8.4%; background-color:#F6F7F8; z-index:1;" id="photos_txt_background"> </div>
<div style="position:absolute;left:44.7%; top:54%; font-weight:bold; z-index:1; color:#b01937;"> <a href="photos.php" style="text-decoration:none; color:#b01937;" onMouseOver="on_photos_txt();" onMouseOut="out_photos_txt();">  Photos </a> <samp style="color:#717171;">  </samp> </div>

<!--Status-->
<div style=" background:#FFFFFF; position:absolute; left:37.2%; top:65%; height:22%; width:41.4%; z-index:-1; box-shadow:0px 2px 5px 1px rgb(0,0,0);"> </div>
<div style="position:absolute; left:37.2%; top:65%;"> <img src="img/Status.PNG"><input type="button" onClick="upload_close();"  value="Update Status" style="background:#FFFFFF; border:#FFFFFF;"> <img src="img/photo&video.PNG"><input type="button"  value="Add Photos" onClick="upload_open();" name="file" style="background:#FFFFFF; border:#FFFFFF;"></div>
<div style=" background:#F2F2F2; position:absolute; left:37.2%; top:85%; height:6.5%; width:41.4%; z-index:-1; "> </div>


<form method="post" name="posting_txt" onSubmit="return blank_post_check();" id="post_txt">
	
	<div style="position:absolute; left:37.5%; top:69.5%;">
		<textarea style="height:100; width:550;" name="post_txt" maxlength="511" placeholder="What's on your mind?"></textarea>
	</div>	
    <input type="hidden" name="txt_post_time">
	<div style="position:absolute; left:66%; top:86.9%;">
	<select style="background: transparent; border-bottom:5px;" name="priority"> 
<option value="Public"> Public </option> 
<option value="Private"> Only me </option> 
	</select>
	</div>
	<div style="position:absolute; left:73%; top:86.5%;"> <input type="submit" value="post" name="txt" id="post_button" onClick="time_get()"> </div>
	</form>
	
	
	<form method="post" enctype="multipart/form-data" name="posting_pic1" style="display:none;" id="post_pic" onSubmit="return post_Img_check();">
	
	<div style="position:absolute; left:37.5%; top:69.5%;">
		<textarea style="height:100; width:550;" name="post_txt" maxlength="511" placeholder="What's on your mind?" id="pic_post_txt1" ></textarea>
	</div>
    <input type="hidden" name="pic_post_time"> 
	<div style="position:absolute; left:38%; top:86.5%;"> <input type="file" name="file" id="post_img"> </div>
	<div style="position:absolute; left:66%; top:86.9%;">
	<select style="background: transparent; border-bottom:5px;" name="priority"> 
<option value="Public"> Public </option> 
<option value="Private"> Only me </option> 
	</select>
	</div>
	<div style="position:absolute; left:73%; top:86.5%;"> <input type="submit" value="post" name="file" id="post_button" onClick="time_get1()"> </div>
	</form>





	<!-- post bg-->
	<div style="position:absolute; left:37.2%; top:96%; background:#FFFFFF; height:80%; width:50%; z-index:-1; box-shadow:0px 2px 5px 1px rgb(0,0,0);" > </div>
	


<div style="position:absolute;left:37.3%; top:96%;">
<table cellspacing="0">
	<tr>
			
			if($post_txt=="Join Faceback")
			{
				<td colspan="5"align="right" style="border-top:outset; border-top-width:thin;">&nbsp;  </td>
			<td>  </td>
			<td> </td>
		
			}
			else
			{
			
			<td colspan="4" align="right" style="border-top:outset; border-top-width:thin;"> 
			<form method="post">  
				<input type="hidden" name="post_id" value="" >
				<input type="submit" name="delete_post" value="delete post" style="background-color:#FFFFFF; border:;  "> 
			</form> </td>
			<td>  </td>
			<td> </td>
			\}
		</tr>
		<tr>
		<td width="5%" style="padding-left:10;" rowspan="2"> <img src="../../nsubud_users/" height="60" width="55">  </td>
		<td > </td>
		<td> </td>
		<td> </td>
	</tr>
	<tr>
		<td colspan="3" style="padding:7;"> <a href="#" style="text-transform:capitalize; text-decoration:none; color:#003399;" onMouseOver="post_name_underLine()" onMouseOut="post_name_NounderLine)" id="uname"> </a>  </td>
		<td> </td>
		<td> </td>
		<td> </td>
	</tr>

	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"></td>
	</tr>
	
	<tr >
		<td></td>
		<td colspan="3" style="padding-left:7;"> </td>	
	</tr>
	<tr >
		<td> </td>
		<td colspan="3" style="padding-left:7;"> </td>
	</tr>
	
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"> </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"> </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"> </td>	
	</tr>
	
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"> </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"></td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"></td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"> </td>	
	</tr>
	
	
	
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"> </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"> </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"></td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"> </td>	
	</tr>
	
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"> </td>	
	</tr>
	
	
	
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"> </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"> </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"> </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"> </td>	
	</tr>
	
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"> </td>	
	</tr>
	
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"></td>	
	</tr>
	
	
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"> </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"> </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"> </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"> </td>	
	</tr>
	
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"> </td>	
	</tr>
	
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"> </td>	
	</tr>
	
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"> </td>	
	</tr>
	



	<tr>
		<td>   </td>
		<td colspan="3"><img src="../../nsubud_users/" width="400" height="400"> </td>
		<td> </td>
		<td> </td>
	</tr>
	
	<tr style="color:#a85b9b;">
		<td >   </td>
			
			<td style="padding-top:15;">
		<form method="post">
		<input type="hidden" name="postid" value="">
		<input type="hidden" name="userid" value="">
		<input type="submit" value="Unlike" name="Unlike" style="border:#FFFFFF; background:#FFFFFF; font-size:15px; color:#a85b9b;" onMouseOver="unlike_underLine()" onMouseOut="unlike_NounderLine()" id="unlike"></form></td>
			
			<td style="padding-top:15;">
		<form method="post">
		<input type="hidden" name="postid" value="">
		<input type="hidden" name="userid" value="">
		<input type="submit" value="Like" name="Like" style="border:#FFFFFF; background:#FFFFFF; font-size:15px; color:#a85b9b;" onMouseOver="like_underLine()" onMouseOut="like_NounderLine()" id="like"></form></td>
			
		 
		 	$que_comment=mysqli_query($con,"select * from user_post_comment where post_id =$postid order by comment_id");
	$count_comment=mysqli_num_rows($que_comment);
		 ?>
		
		<td colspan="3"> &nbsp; <input type="button" value="Comment)" style="background:#FFFFFF; border:#FFFFFF;font-size:15px; color:#a85b9b;" onClick="Comment_focus();" onMouseOver="Comment_underLine" onMouseOut="Comment_NounderLine()" id="comment">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <span style="color:#999999;">   </span> </td>
		<td>   </td>
	</tr>
	<tr>
		<td>   </td>
		<td  bgcolor="" style="width:9;" colspan="3"><img src="img/like.PNG"><span style="color:#a85b9b;"></span> like this. </td>
		<td> </td>
		<td> </td>
	</tr>
	<tr>
		<td>   </td>
		<td> </td>
		<td> </td>
		<td> </td>
	</tr>



	<tr>
		<td> </td>
		<td width="4%" bgcolor="" style="padding-left:12;padding-right:12;" rowspan="2">  <img src="../../nsubud_users/Profile" height="40" width="47">    </td>
		<td bgcolor="" style="padding-left:7;padding-right:7;" > <a href="#" style="text-transform:capitalize; text-decoration:none; color:#d91835;" onMouseOver="Comment_name_underLine()" onMouseOut="Comment_name_NounderLine()" id="cuname"> </a> </td>
		<td rowspan="2" bgcolor=""> 
			<form method="post">  
				<input type="hidden" name="comm_id" value="" >
				<input type="submit" name="delete_comment" value="Delete comment" style="background-color:#FFFFFF; border:#FFFFFF;"> &nbsp;
			</form> </td>
</tr>

	<tr>
		<td> </td>
		<td bgcolor="" style="padding-left:7;" colspan="2"></td>
	</tr>

	<tr>
		<td> </td>
		<td bgcolor="" style="padding-left:7;" colspan="2"> </td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor=""> </td>
		<td bgcolor="" style="padding-left:7;" colspan="2"> </td>
	</tr>
	
	<tr>
		<td> </td>
		<td bgcolor="" style="padding-left:7;" colspan="2"> </td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor=""> </td>
		<td bgcolor="" style="padding-left:7;" colspan="2"></td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor=""> </td>
		<td bgcolor="" style="padding-left:7;" colspan="2"></td>
	</tr>
	
	<tr>
		<td> </td>
		<td bgcolor="" style="padding-left:7;" colspan="2"> </td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor=""> </td>
		<td bgcolor="" style="padding-left:7;" colspan="2"> </td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor=""> </td>
		<td bgcolor="" style="padding-left:7;" colspan="2"></td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor=""> </td>
		<td bgcolor="" style="padding-left:7;" colspan="2"> </td>
	</tr>
	
	<tr>
		<td> </td>
		<td bgcolor="" style="padding-left:7;" colspan="2"> </td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor=""> </td>
		<td bgcolor="" style="padding-left:7;" colspan="2"></td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor=""> </td>
		<td bgcolor="" style="padding-left:7;" colspan="2"></td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor=""> </td>
		<td bgcolor="" style="padding-left:7;" colspan="2"></td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor=""> </td>
		<td bgcolor="" style="padding-left:7;" colspan="2"></td>
	</tr>
	
	<tr>
		<td> </td>
		<td bgcolor="" style="padding-left:7;" colspan="2"> </td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor=""> </td>
		<td bgcolor="" style="padding-left:7;" colspan="2"> </td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor=""> </td>
		<td bgcolor="" style="padding-left:7;" colspan="2"></td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor=""> </td>
		<td bgcolor="" style="padding-left:7;" colspan="2"></td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor=""> </td>
		<td bgcolor="" style="padding-left:7;" colspan="2"> </td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor=""> </td>
		<td bgcolor="" style="padding-left:7;" colspan="2"> </td>
	</tr>
	
	<tr>
		<td> </td>
		<td bgcolor="" style="padding-left:7;" colspan="2"> </td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor=""> </td>
		<td bgcolor="" style="padding-left:7;" colspan="2"> </td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor=""> </td>
		<td bgcolor="" style="padding-left:7;" colspan="2"></td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor=""> </td>
		<td bgcolor="" style="padding-left:7;" colspan="2"></td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor=""> </td>
		<td bgcolor="" style="padding-left:7;" colspan="2"></td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor=""> </td>
		<td bgcolor="" style="padding-left:7;" colspan="2"></td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor=""> </td>
		<td bgcolor="" style="padding-left:7;" colspan="2"></td>
	</tr>

<tr>
	<td> </td>
	<td width="4%" style="padding-left:17;" bgcolor="" rowspan="2">  <img src="../../nsubud_users" style="height:33; width:33;">    </td>
		<td bgcolor="" colspan="2" style="padding-top:15;"> 
		<form method="post" name="commenting" onSubmit="return blank_comment_check()"> 
		<input type="text" name="comment_txt" placeholder="Write a comment..." maxlength="420" style="width:440;" id=""> 
		<input type="hidden" name="postid" value=""> 
		<input type="hidden" name="userid" value=""> 
		<input type="submit" name="comment" style="display:none;"> 
		</form> </td>
	</tr>
<tr><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td></tr>

</table>
</div>

<script>
	function on_about_bg()
	{
		document.getElementById("about_on_bg").style.display='block';
	}
	function out_about_bg()
	{
		document.getElementById("about_on_bg").style.display='none';	
	}
	function on_photos_bg()
	{
		document.getElementById("photos_on_bg").style.display='block';
	}
	function out_photos_bg()
	{
		document.getElementById("photos_on_bg").style.display='none';	
	}
</script>


<!-- About bg-->
	<a href="about.php"> <div style="position:absolute; left:15%; top:65%; background:#F6F7F8; height:6%; width:20%; z-index:-1; box-shadow:0px 0px 5px 0px rgb(0,0,0);" onMouseOver="on_about_bg()"> </div>
	<div style="display:none;" id="about_on_bg">	
	<div style="position:absolute; left:15%; top:65%; background:#F9FAnsubud; height:6%; width:20%; z-index:-1;" onMouseOut="out_about_bg()">  </div>
	<div style="position:absolute; left:32%; top:66%;"> <img src="img/edit.PNG"> </div>
	</div>
	</a>	
	<div style="position:absolute; left:16%; top:66%;"> <a href="about.php" style="color:#6A7480;text-decoration:none;font-size:17px; font-weight:bold;"> About </a> </div>
	
	<div style="position:absolute; left:15%; top:71.2%; background:#FFFFFF; height:25%; width:20%; z-index:-1; box-shadow:0px 2px 5px 0px rgb(0,0,0);"> </div>	
	<div style="position:absolute;left:17%; top:74%; font-weight:bold;"> Basic Information </div>
	<div style="position:absolute;left:17%; top:79%; font-size:15px; color:#89919C;">Birthday</div>
	<div style="position:absolute;left:22%; top:79%; font-size:15px;"> </div>
	<div style="position:absolute;left:17%; top:83%; font-size:15px; color:#89919C;">Gender</div>
	<div style="position:absolute;left:22%; top:83%; font-size:15px;"> </div>
	<div style="position:absolute;left:17%; top:87%; font-size:15px; color:#89919C;">Current location</div>
	<div style="position:absolute;left:17%; top:91%; font-size:15px; color:#89919C;">Hometown</div>
	<div style="position:absolute;left:25%; top:87%; font-size:15px; text-transform:capitalize;">   </div>

	<div style="position:absolute;left:25%; top:87%; font-size:15px;"> <a href="about.php" style="text-decoration:none; color:#b01937;"> Add Your City </a> </div>

		<div style="position:absolute;left:23%; top:91%; font-size:15px; text-transform:capitalize;">  </div>

		<div style="position:absolute;left:23%; top:91%; font-size:15px;"> <a href="about.php" style="text-decoration:none;color:#b01937;"> Add your hometown </a> </div>




<!-- Photos bg-->
	<a href="photos.php"> <div style="position:absolute; left:15%; top:100%; background:#F6F7F8; height:6.1%; width:20%; z-index:-1; box-shadow:0px 0px 5px 0px rgb(0,0,0);" onMouseOver="on_photos_bg()"> </div>
	<div style="display:none;" id="photos_on_bg">	
	<div style="position:absolute; left:15%; top:100%; background:#F9FAnsubud; height:6%; width:20%; z-index:-1;" onMouseOut="out_photos_bg()">  </div>
	<div style="position:absolute; left:32%; top:101%;"> <img src="img/edit.PNG"> </div>
	</div>
	</a>	
	<div style="position:absolute; left:16%; top:101%;"> <a href="photos.php" style="color:#6A7480;text-decoration:none;font-size:17px; font-weight:bold;"> Photos </a> </div>
	
	<div style="position:absolute; left:15%; top:106.2%; background:#FFFFFF; height:51.7%; width:20%; z-index:-1; box-shadow:0px 2px 5px 0px rgb(0,0,0);"> </div>	
	

	<div style="position:absolute; left:15.5%; top:108%;"> <img src="../../nsubud_users/Profile" height="90" width="78">  </div>
	<div style="position:absolute; left:22%; top:108%;"> <img src="../../nsubud_users/Post" height="90" width="78">  </div>
	<div style="position:absolute; left:28.5%; top:108%;"> <img src="../../nsubud_users/Post" height="90" width="78">  </div>
	<div style="position:absolute; left:15.5%; top:125%;"> <img src="../../nsubud_users/Post/" height="90" width="78">  </div>
	<div style="position:absolute; left:22%; top:125%;"> <img src="../../nsubud_users/Post/" height="90" width="78">  </div>
	<div style="position:absolute; left:28.5%; top:125%;"> <img src="../../nsubud_users/Post/" height="90" width="78">  </div>
	<div style="position:absolute; left:15.5%; top:142%;"> <img src="../../nsubud_users/Post/" height="90" width="78">  </div>
	<div style="position:absolute; left:22%; top:142%;"> <img src="../../nsubud_users/Post/" height="90" width="78">  </div>
	<div style="position:absolute; left:28.5%; top:142%;"> <img src="../../nsubud_users/Post/" height="90" width="78">  </div>

		
</body>
</html>
