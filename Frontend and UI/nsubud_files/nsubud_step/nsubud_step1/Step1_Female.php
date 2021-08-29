
<html>
<head>
	<title> Step1 </title>
	<link href="step1_css/step1.css" rel="stylesheet" type="text/css">
    <link href="../../nsubud_font/font.css" rel="stylesheet" type="text/css">
    <LINK REL="SHORTCUT ICON" HREF="../../nsubud_title_icon/Faceback.ico" />
	<script src="step1_js/Image_check.js" language="javascript">
	</script>
</head>

<div style="position:absolute; left:35%; top:50%;">
<img src="step1_images/Female.jpg" style=" height:60; width:60;"/> 
</div>

<div style="position:absolute; left:39%; top:50%;"> 
	<table>
		<tr>
			<td></td> <td>&nbsp;  </td> <td style="text-transform:capitalize"> <h4></h4></td>
		</tr>
	</table> 
</div>


<form method="post" enctype="multipart/form-data" name="uimg" onSubmit="return Img_check();">
	<div style="position:absolute; left:40%; top:65%;">	
		<input type="file" name="file" id="img"/>  
	</div>
    
	<div style="position:absolute; left:57.5%; top:64%; " id="upload">	
		<input type="submit" value="Upload" name="file" id="upload_button"/>	
	</div>
</form>
	
</body>
</html>
