<?php
		include("background.php");
?>
<html>
<head>
<title>  Chat </title>

<script>
	function chat_name_underLine(fid)
	{
		document.getElementById("uname"+fid).style.textDecoration = "underline";
	}
	function chat_name_NounderLine(fid)
	{
		document.getElementById("uname"+fid).style.textDecoration = "none"
	}
</script>
</head>
<body>
	
	<div style="position:absolute; left:25%; top:10%;"> <img src="img/group.png" height="100" width="150"> </div>
	<div style="position:absolute; left:35%; top:12%;"> <h1 style="color:red;">Chat </h1> </div>
  
    <hr style="position:absolute;left:25%;top:25%;height:0.5%;width:50%; border-color:#CCCCCC; box-shadow:0px 5px 5px 0px rgb(0,0,0); ">
    

    <div style="position:absolute; left:20%; top:40%;">
    <table border="0">

	<tr>

	<td colspan="3"align="right" style="border-top:outset; border-top-width:thin;"> 
			<form method="post">  
				<input type="hidden" name="chat_id" value="12345" >
				<input type="submit" name="delete_chat" value="delete chat" style="background-color:#FFFFFF; border:#FFFFFF;  ">  
			</form>
     </td>
     <td>  </td>
			
     </tr>
    
	<tr>
    	<td style="padding-left:25;" rowspan="2"> <img src="img/post2.jpg" height="60" width="55">  </td>
        <td colspan="2" style="padding:7;"> <a href="" style="text-transform:capitalize; text-decoration:none; color:#003399;" onMouseOver="" onMouseOut="" id=""> Aporbo Ghosh</a>   </td>
       
    </tr>
   
    
   
	<tr>
		<td colspan="2" style="padding-left:7;"> hello</td>
        <td> </td>
	</tr>
	
	<tr>
		<td colspan="2" style="padding-left:7;"></td>	
        <td> </td>
        
	</tr>
	<tr>
    	<td> </td>
		<td colspan="2" style="padding-left:7;"> How's going on? </td>
        <td> </td>
	</tr>
	
	
   
    
    <tr>
    	<td> </td>
        <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color:#CCC;"> 9:12Am </span> </td>
        <td> </td>
    </tr>
    <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>

   </table></div>
   
   <div style="position:absolute; left:90%; top:100%;" > &nbsp; </div>	

</body>
</html>