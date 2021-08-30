<?php
	include("background.php");
?>
<html>
<head>
	<title>Users</title>
	<script>
		function user_name_underLine(uid)
		{
			document.getElementById("uname"+uid).style.textDecoration = "underline";
		}
		function user_name_NounderLine(uid)
		{
			document.getElementById("uname"+uid).style.textDecoration = "none"
		}
	</script>
</head>
<body>
	<div style="position:absolute; left:27%; top:10%;"> <img src="img/all_users.png" height="100" width="100"> </div>
	<div style="position:absolute; left:35%; top:12%;"> <h1 style="color:#a85b9b;"> All Users(20)</h1> </div>
    <hr style="position:absolute;left:25%;top:25%;height:0.5%;width:50%; border-color:#CCCCCC; box-shadow:0px 5px 5px 0px rgb(0,0,0); ">
    
    <div style="position:absolute; left:26%; top:42%;"> <img src="img/male.png" height="60" width="60">  </div>
    <div style="position:absolute; left:30.5%; top:42%;"> <h2> Male(<span style="color:#999;">10</span>) </h2> </div>
    <div style="position:absolute; left:19%; top:55%;">
    <table border="1">
    <tr>
    	<th> User ID</th>
        <th> Name </th>
        <th> nsubud join Date</th>
        <th> Delete </th>
    </tr>

    	<tr>
        	<td>  </td>
        	<td> <a href="" style="text-transform:capitalize; color:#a85b9b; text-decoration:none;"  id="">  </a> </td>
            <td>  </td>
            <td style="padding-left:13; padding-top:8;"> <form method="post"> 
            	<input type="hidden" name="user_male_id" value=""> 
            	<input type="submit" name="mdelete" value="delete post" style="background-color:#FFFFFF; border:#FFFFFF;  "> 
                 </form> 
            </td>
        </tr>

   	</table>
    </div>
    
    

    <div style="position:absolute; left:58%; top:42%;"> <img src="img/female.png" height="60" width="60">  </div>
    <div style="position:absolute; left:63%; top:42%;"> <h2> Female(<span style="color:#999;">10</span>) </h2> </div>
    <div style="position:absolute; left:53%; top:55%;">
    <table border="1">
    <tr>
    	<th> User ID</th>
        <th> Name </th>
        <th> nsubud join Date</th>
        <th> Delete </th>
    </tr>

    	<tr>
        	<td>  </td>
        	<td> <a href="" style="text-transform:capitalize; color:#a85b9b; text-decoration:none;" id="45"> Sabrina sabina</a> </td>
            <td> </td>
            <td style="padding-left:13; padding-top:8;"> <form method="post"> 
            	 <input type="hidden" name="user_female_id" value="">
            	 <input type="submit" name="fdelete" value="delete post" style="background-color:#FFFFFF; border:#FFFFFF;  ">  
                 </form> 
            </td>
        </tr>

   	</table>
    </div>
<div style="position:absolute; left:90%; top:100%;" > &nbsp; </div>	
</body>
</html>
