
<html>
<head>
<title> Chat </title>
<style>
#chat_button
{
	font-size:14px;
	height:25;
	width:80;
	padding:2;
	background-color:#a85b9b
; color:#FFFFFF;
	border-top:#29447E;
	border-right-color:#29447E;
	border-bottom-color:#1A356E;
	border-left-color:#29447E;
	font-weight:bold;
}
</style>
<script>
	function blank_chat_check()
	{
		var chat_txt=document.chat_form.chat_txt.value;
		if(chat_txt=="")
		{
			return false;
		}
		return true;
	}
	function chat_name_underLine(fid)
	{
		document.getElementById("uname"+fid).style.textDecoration = "underline";
	}
	function chat_name_NounderLine(fid)
	{
		document.getElementById("uname"+fid).style.textDecoration = "none"
	}
	
	function time_get()
	{
			d = new Date();
			mon = d.getMonth()+1;
			time = d.getDate()+"-"+mon+"-"+d.getFullYear()+" "+d.getHours()+":"+d.getMinutes();
			chat_form.chat_time.value=time;
	}
</script>
</head>
<body>
	
	<div style="position:absolute; left:25%; top:10%;"> <img src="img/group.png" height="90" width="140"> </div>
	<div style="position:absolute; left:35%; top:12%;"> <h1 style="color:#000000
;">Chat </h1> </div>
  
    <div style=" background:#FFF; position:absolute; left:25%; top:31.5%; height:21%; width:41.4%; z-index:-1; box-shadow:0px 2px 5px 1px rgb(0,0,0);"> </div>
    <div style=" background:#F2F2F2; position:absolute; left:25%; top:47%; height:8%; width:41.4%; z-index:-1;"> </div>
    
    <form method="post" name="chat_form" onSubmit="return blank_chat_check()">
	
	<div style="position:absolute; left:25.3%; top:32.5%;">
		<textarea style="height:100; width:550;" name="chat_txt" maxlength="511" placeholder="type"></textarea>
	</div>	
   	<input type="hidden" name="chat_time">
    <div style="position:absolute; left:59%; top:49.6%;"> <input type="submit" value="Send" name="Message_send" id="chat_button" onClick="time_get()"> </div>
    </form>
    

    <div style="position:absolute; left:20%; top:63%;">
    <table border="0">

	<tr>

	<td colspan="3"align="right" style="border-top:outset; border-top-width:thin;"> 
			<form method="post">  
				<input type="hidden" name="chat_id" value="" >
				<input type="submit" name="delete_chat" value="delete " style="background-color:#FFFFFF; border:#FFFFFF;  "> 
			</form>
     </td>
     <td>  </td>

	<td colspan="3"align="right" style="border-top:outset; border-top-width:thin;">&nbsp;  </td>
     <td>  </td>
     

			
     </tr>
    
	<tr>
    	<td style="padding-left:25;" rowspan="2"> <img src="" height="60" width="55">  </td>
        <td colspan="2" style="padding:7;"> <a href="" style="text-transform:capitalize; text-decoration:none; color:#003399;" onMouseOver="" onMouseOut="" id="">  </a>   </td>
       
    </tr>
   
    
    
	<tr>
		<td colspan="2" style="padding-left:7;"> </td>
        <td> </td>
	</tr>
	

	<tr>
		<td colspan="2" style="padding-left:7;"></td>	
        <td> </td>
        
	</tr>
	<tr>
    	<td> </td>
		<td colspan="2" style="padding-left:7;"> </td>
        <td> </td>
	</tr>

	<tr>
		
		<td colspan="2" style="padding-left:7;"> </td>	
        <td> </td>
	</tr>
	<tr>
		<td> </td>
		<td colspan="2" style="padding-left:7;"> </td>	
        <td> </td>
	</tr>
	<tr>
		<td> </td>
		<td colspan="2" style="padding-left:7;"> </td>	
        <td> </td>
	</tr>

	<tr>
		<td colspan="2" style="padding-left:7;">         </td>	
        <td> </td>
	</tr>
	<tr>
		<td> </td>
		<td colspan="2" style="padding-left:7;">          </td>	
        <td> </td>
	</tr>
	<tr>
		<td> </td>
		<td colspan="2" style="padding-left:7;">         </td>	
        <td> </td>
	</tr>
	<tr>
		<td> </td>
		<td colspan="2" style="padding-left:7;">        </td>	
        <td> </td>
	</tr>
	
	
	
	<tr>
		<td colspan="2" style="padding-left:7;">         </td>	
        <td> </td>
	</tr>
	<tr>
		<td> </td>
		<td colspan="2" style="padding-left:7;">          </td>	
        <td> </td>
	</tr>
	<tr>
		<td> </td>
		<td colspan="2" style="padding-left:7;">           </td>	
        <td> </td>
	</tr>
	<tr>
		<td> </td>
		<td colspan="2" style="padding-left:7;">        </td>	
        <td> </td>
	</tr>
	
	<tr>
		<td> </td>
		<td colspan="2" style="padding-left:7;">          </td>	
        <td> </td>
	</tr>
	
	
	
	<tr>
		<td colspan="2" style="padding-left:7;">         </td>	
        <td> </td>
	</tr>
	<tr>
		<td></td>
		<td colspan="2" style="padding-left:7;">          </td>	
        <td> </td>
	</tr>
	<tr>
		<td> </td>
		<td colspan="2" style="padding-left:7;">         </td>	
        <td> </td>
	</tr>
	<tr>
		<td> </td>
		<td colspan="2" style="padding-left:7;">        </td>	
        <td> </td>
	</tr>
	
	<tr>
		<td> </td>
		<td colspan="2" style="padding-left:7;">         c </td>	
        <td> </td>
	</tr>
	
	<tr>
		<td> </td>
		<td colspan="2" style="padding-left:7;">           </td>
        <td> </td>	
	</tr>
	
	
	<tr>
		<td colspan="2" style="padding-left:7;">         </td>	
        <td> </td>
	</tr>
	<tr>
		<td> </td>
		<td colspan="2" style="padding-left:7;">          </td>	
        <td> </td>
	</tr>
	<tr>
		<td> </td>
		<td colspan="2" style="padding-left:7;">         </td>	
        <td> </td>
	</tr>
	<tr>
		<td> </td>
		<td colspan="2" style="padding-left:7;">        </td>	
        <td> </td>
	</tr>
	
	<tr>
		<td> </td>
		<td colspan="2" style="padding-left:7;">          </td>	
        <td> </td>
	</tr>
	
	<tr>
		<td> </td>
		<td colspan="2" style="padding-left:7;">           </td>	
        <td> </td>
	</tr>
	
	<tr>
    	<td> </td>
		<td colspan="2" style="padding-left:7;">           </td>	
        <td> </td>
	</tr>
  
    
    <tr>
    	<td> </td>
        <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color:#CCC;"> </span> </td>
        <td> </td>
    </tr>
    <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>

   </table></div>

<div style="position:absolute; left:90%; top:100%;" > &nbsp; </div>	

</body>
</html>
