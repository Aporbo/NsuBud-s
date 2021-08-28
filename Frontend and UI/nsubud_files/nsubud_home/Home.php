<?php
		include("background.php");
?>
<html>
<head>
<title>Home</title>
	<link href="Home_css/Home.css" rel="stylesheet" type="text/css">
	<script src="Home_js/home.js" language="javascript"></script>
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
			posting_pic.pic_post_time.value=time;
		}
	</script>
</head>
<body id="body">


<div style="position:fixed; background:#3A3E41; opacity: 0.8; left:0%; top:0%; height:100%; width:100%; z-index:3"></div>
<div style="position:fixed; background:#FFF; left:17%; top:5%; height:90%; width:65.5%; z-index:3"></div>


<div style="position:fixed; left:35%; top:8%; z-index:3;"> <img src="img/Warning_icon.png" height="100" width="100"></div>
<div style="position:fixed; left:43%; top:8%; z-index:3; color:#971111; font-size:72px;">   warning  </div>

<div style="position:fixed; left:20%; top:32%; color:#971111; font-size:20px; z-index:3;">  
</div>

<form method="post">
    <input type="hidden" name="warning_id" value="" >
<div style="position:fixed; left:62%; top:83%; z-index:3;">  
    <input type="submit" name="delete_warning" value="I accept Warning" id="accept_button">
</div> 
</form>
 

<div style="position:fixed; background:#3A3E41; opacity: 0.8; left:0%; top:0%; height:100%; width:100%; z-index:3"></div>
<div style="position:fixed; background:#FFF; left:17%; top:5%; height:90%; width:65.5%; z-index:3"></div>


<div style="position:fixed; left:39%; top:8%; z-index:3;"> <img src="img/Notice.png" height="100" width="100"></div>
<div style="position:fixed; left:47%; top:12%; z-index:3; color:#a85b9b; font-size:48px;">   Notice  </div>

<div style="position:fixed; left:20%; top:32%; font-size:20px; z-index:3;"> 
</div>

<div style="position:fixed; left:62%; top:75%; font-size:20px; color:#999999; z-index:3;"> Notice Time:  
</div>

<form method="post">
    <input type="hidden" name="notice_id" value="" >
<div style="position:fixed; left:62%; top:83%; z-index:3;">  
    <input type="submit" name="delete_notice" value="I accept Notice" id="accept_button">
</div> 
</form>
 


	
	<!--Status-->
	<div style=" background:#FFFFFF; position:absolute; left:21%; top:8%; height:22%; width:41.4%; z-index:-1; box-shadow:0px 2px 5px 1px rgb(0,0,0);"> </div>
	<div style="position:absolute; left:21%; top:8%;"> <img src="img/Status.PNG"><input type="button" onClick="upload_close();"  value="Update Status" style="background:#FFFFFF; border:#FFFFFF;"> <img src="img/photo&video.PNG"><input type="button"  value="Add Photos" onClick="upload_open();" name="file" style="background:#FFFFFF; border:#FFFFFF;"></div>
<div style=" background:#F2F2F2; position:absolute; left:21%; top:26.5%; height:6.5%; width:41.4%; z-index:-1;"> </div>

 

	<form method="post" name="posting_txt" onSubmit="return blank_post_check();" id="post_txt">
	
	<div style="position:absolute; left:21.3%; top:11.5%;">
		<textarea style="height:100; width:550;" name="post_txt" maxlength="511" placeholder="What's on your mind?"></textarea>
        <input type="hidden" name="txt_post_time">
	</div>	
	<div style="position:absolute; left:50%; top:28.5%;">
	<select style="background: transparent; border-bottom:5px;" name="priority"> 
<option value="Public"> Public </option> 
<option value="Private"> Only me </option> 
	</select> 
	</div>
	<div style="position:absolute; left:57%; top:28%;"> <input type="submit" value="post" name="txt" id="post_button" onClick="time_get()"> </div>
	</form>
	
	<form method="post" enctype="multipart/form-data" name="posting_pic" style="display:none;" id="post_pic" onSubmit="return Img_check();">
	
	<div style="position:absolute; left:21.3%; top:11.5%;">
		<textarea style="height:100; width:550;" name="post_txt" maxlength="511" placeholder="What's on your mind?"></textarea>
	</div>
    <input type="hidden" name="pic_post_time">
	<div style="position:absolute; left:50%; top:28.5%;">
	<select style="background: transparent; border-bottom:5px;" name="priority"> 
<option value="Public"> Public </option> 
<option value="Private"> Only me </option> 
</select> </div>
	<div style="position:absolute; left:22%; top:28.5%;"> <input type="file" name="file" id="img"> </div>
	<div style="position:absolute; left:57%; top:28%;"> <input type="submit" value="post" name="file" id="post_button" onClick="time_get1()"> </div>
	</form>
	
	
	
	<div style="position:absolute;left:19%; top:39%;">
	<table cellspacing="0">

		<tr>
			
				<td colspan="4"align="right" style="border-top:outset; border-top-width:thin;">&nbsp;  </td>
			<td>  </td>
			<td> </td>
		
			<td colspan="4"align="right" style="border-top:outset; border-top-width:thin;"> 
			<form method="post">  
				<input type="hidden" name="post_id" value="" >
				<input type="submit" name="delete_post"value="delete post" style="background-color:#FFFFFF; border:#FFFFFF;  "> 
			</form></a> </td>
			<td>  </td>
			<td> </td>
		</tr>
		
		<tr>
			<td colspan="4"align="right" style="border-top:outset; border-top-width:thin;">&nbsp;  </td>
			<td>  </td>
			<td> </td>
		</tr>
	

 	
 	<tr>
		<td width="5%" style="padding-left:25;" rowspan="2"> <img src="" height="60" width="55">  </td>
		<td > </td>
		<td> </td>
		<td> </td>
	</tr>
	<tr>
		<td colspan="3" style="padding:7;"> <a href="" style="text-transform:capitalize; text-decoration:none; color:#003399; id="">  </a>  </td>
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
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;"> </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;">  </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;">  </td>	
	</tr>
	
	
	
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;">    </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;">   </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;">  </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;">  </td>	
	</tr>
	
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;">   </td>	
	</tr>
	
	
	
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;">    </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;">   </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;">  </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;">  </td>	
	</tr>
	
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;">   </td>	
	</tr>
	
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;">    </td>	
	</tr>
	

	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;">    </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;">   </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;">  </td>	
	</tr>
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;">  </td>	
	</tr>
	
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;">   </td>	
	</tr>
	
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;">    </td>	
	</tr>
	
	<tr>
		<td></td>
		<td colspan="3" style="padding-left:7;">     </td>	
	</tr>
	

	<tr>
		<td>   </td>
		<td colspan="3"><img src="" width="400" height="400"> </td>
		<td> </td>
		<td> </td>
	</tr>
	
	<tr style="color:#a85b9b;">
		<td >   </td>
		
			
			<td style="padding-top:15;">
		<form method="post">
		<input type="hidden" name="postid" value="">
		<input type="hidden" name="userid" value="">
		<input type="submit" value="Unlike" name="Unlike" style="border:#FFFFFF; background:#FFFFFF; font-size:15px; color:#a85b9b;" id=""></form></td>
			
			<td style="padding-top:15;">
		<form method="post">
		<input type="hidden" name="postid" value="">
		<input type="hidden" name="userid" value="">
		<input type="submit" value="Like" name="Like" style="border:#FFFFFF; background:#FFFFFF; font-size:15px; color:#a85b9b;"  id=""></form></td>
		 
		 
		
		<td colspan="3"> &nbsp; <input type="button" value="" style="background:#FFFFFF; border:#FFFFFF;font-size:15px; color:#a85b9b;" onClick=""  id=""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <span style="color:#999999;">  </span> </td>
		<td>   </td>
	</tr>
	<tr>
		<td>   </td>
		<td  bgcolor="#EDEFF4" style="width:9;" colspan="3"><img src="img/like.PNG"><span style="color:#a85b9b;"></span> like this. </td>
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
		<td width="4%" bgcolor="#EDEFF4" style="padding-left:12; padding-right:12;" rowspan="2">  <img src="" height="40" width="47">    </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;padding-right:7;" > <a href="" style="text-transform:capitalize; text-decoration:none; color:#d91835;"  id=""</a> </td>
	
			<td  rowspan="2" bgcolor="#EDEFF4"> 
			<form method="post">  
				<input type="hidden" name="comm_id" value="" >
				<input type="submit" name="delete_comment" value="Delete Comment" style="background-color:#FFFFFF; border:#FFFFFF; "> &nbsp;
			</form> </td>
		
		<td rowspan="2" bgcolor="#EDEFF4">
			<form method="post">  
				<input type="hidden" name="comm_id" value="" >
				<input type="submit" name="delete_comment" value="delete comment" style="background-color:#FFFFFF; border:#FFFFFF;"> &nbsp;
			</form> </td>
		
			<td align="right" rowspan="2" bgcolor="#EDEFF4">  </td>
		
		
	</tr>
	
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> </td>
	</tr>
	
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> </td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">  </td>
	</tr>
	
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> </td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">       </td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">   </td>
	</tr>
	
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> </td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">       </td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">   </td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">    </td>
	</tr>
	
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> </td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">       </td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">   </td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">    </td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">     </td>
	</tr>

	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> </td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">       </td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">   </td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">    </td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">     </td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> ></td>
	</tr>
	
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"> </td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">       </td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">   </td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">    </td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">     </td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2"></td>
	</tr>
	<tr>
		<td> </td>
		<td bgcolor="#EDEFF4"> </td>
		<td bgcolor="#EDEFF4" style="padding-left:7;" colspan="2">      </td>
	</tr>
	
	<tr>
	<td> </td>
	<td width="4%" style="padding-left:17;" bgcolor="#EDEFF4" rowspan="2">  <img src="" style="height:33; width:33;">    </td>
		<td bgcolor="#EDEFF4" colspan="2" style="padding-top:15;"> 
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
	
</body>
</html>
