<html>
<head>
<title></title>
	<link href="about_css/about.css" rel="stylesheet" type="text/css">
	<script src="about_js/about.js"></script>
</head>
<body bgcolor="#E9EAED">




<div style="position:absolute;left:30%; display:none;  top:51%; height:9.8%; width:6.9%; background-color:#F6F7F8; z-index:1;" id="timeline_txt_background"> </div>
<div style="position:absolute;left:31.5%; top:54%; font-weight:bold; z-index:1;"> <a href="Profile.php" style="text-decoration:none; color:#3B59B0;" onMouseOver="on_timeline_txt();" onMouseOut="out_timeline_txt();">  Timeline </a> </div>
<div style="position:absolute;left:38.3%; top:54%; font-weight:bold; z-index:1;">  About   </div>
<div style="position:absolute;left:43.1%; display:none; top:51%; height:9.8%; width:8.4%; background-color:#F6F7F8; z-index:1;" id="photos_txt_background"> </div>
<div style="position:absolute;left:44.7%; top:54%; font-weight:bold; z-index:1; color:#3B59B0;"> <a href="photos.php" style="text-decoration:none; color:#3B59B0;" onMouseOver="on_photos_txt();" onMouseOut="out_photos_txt();">  Photos </a> <samp style="color:#717171;"></samp> </div>


<div style="position:absolute;left:15%;top:68%;height:12%;width:70%; background-color:#F6F7F8; box-shadow:0px -1px 5px 1px rgb(0,0,0);"> </div>

<div style="position:absolute;left:16%;top:69%;"> <img src="img/about1.PNG"> </div>
<div style="position:absolute;left:19%;top:66.3%;"> <h2> About </h2> </div>

<div style="position:absolute;left:15%; top:80%; height:125%; width:70%; background:#FFF; box-shadow:0px -1px 5px 1px rgb(0,0,0); z-index:-1;">
</div>
	
       
 <!--Work and education--> 
 <div style="position:absolute;left:17%;top:85%;"> <h3> Work and education </h3> </div>

<div id="work_static" onClick="work_static_hide()">   
<div style="position:absolute;left:19%;top:97%;"> <img src="img/job.PNG"> </div>

		<div style="position:absolute;left:26%;top:101%; color:#000; font-weight:bold;"> </div>

		<div style="position:absolute;left:26%;top:101%; color:#80062d; font-weight:bold; "> Add a job </div>

<div style="position:absolute;left:19%;top:115%;"> <img src="img/school.PNG"> </div>

		<div style="position:absolute;left:26%;top:119%; color:#000; font-weight:bold;"> </div>

		<div style="position:absolute;left:26%;top:119%; color:#80062d; font-weight:bold;"> Depertment </div>



<div style="position:absolute;left:43.5%;top:87.5%;"> <input type="button" style="background-image:url(img/edit_button.PNG); border:none; height:24;" value="             " onClick="work_static_hide()"> </div> 
</div>

<form method="post" style="display:none"  id="Work_form">
<div style="position:absolute;left:19%;top:94%;color:#80062d;"> Job </div>
<div style="position:absolute;left:19%;top:98.5%;"> <input type="text" value="" name="job" style="height:33;width:350;font-size:16px;" maxlength="35"> </div>
<div style="position:absolute;left:19%;top:108%;color:#80062d;"> School or College </div>
<div style="position:absolute;left:19%;top:112.5%;"> <input type="text" value="" name="edu" maxlength="35" style="height:33;width:350;font-size:16px;"> </div>

<div style="position:absolute;left:24%;top:122%;"> <input type="submit" value="Save" name="work_sub" class="save_button" > </div>
<div style="position:absolute;left:32%;top:122%;"> <input type="button" value="Cancel"  class="cancel_button" onClick="work_form_hide()"> </div>

</form>


<div style="position:absolute;left:48.2%; top:82%; height:120%; width:0.05%; background:#CCC;">
</div>

<!--Living-->
<div style="position:absolute;left:51%;top:85%;"> <h3> Living </h3> </div>
<div id="Living_static" onClick="Living_static_hide()"> 
<div style="position:absolute;left:53%;top:97%;"> <img src="img/city.PNG"> </div>


		<div style="position:absolute;left:60%;top:101%; color:#000; font-weight:bold;text-transform:capitalize;">  </div>


		<div style="position:absolute;left:60%;top:101%; color:#80062d; font-weight:bold;"> Add Your Current City </div>

<div style="position:absolute;left:53%;top:115%;"> <img src="img/hometown.PNG"> </div>

		<div style="position:absolute;left:60%;top:119%; color:#000; font-weight:bold; text-transform:capitalize;">  </div>

		<div style="position:absolute;left:60%;top:119%; color:#80062d; font-weight:bold;"> Add your hometown </div>



<div style="position:absolute;left:80%;top:87.5%;"> <input type="button" style="background-image:url(img/edit_button.PNG); border:none; height:24;" value="             " onClick="Living_static_hide()"> </div> 
</div>

<form method="post" style="display:none" id="Living_form">
<div style="position:absolute;left:53%;top:94%;color:#80062d;"> Current City </div>
<div style="position:absolute;left:53%;top:98.5%;"> <input type="text" value="" name="city" style="height:33;width:350;font-size:16px;" onKeyPress="return isStringKey(event)" maxlength="15"> </div>
<div style="position:absolute;left:53%;top:108%;color:#80062d;"> hometown </div>
<div style="position:absolute;left:53%;top:112.5%;"> <input type="text" value="" name="hometown" onKeyPress="return isStringKey(event)" maxlength="15" style="height:33;width:350;font-size:16px;"> </div>

<div style="position:absolute;left:59%;top:122%;"> <input type="submit" value="Save" name="leving_sub" class="save_button"> </div>
<div style="position:absolute;left:67%;top:122%;"> <input type="button" value="Cancel"  class="cancel_button" onClick="living_form_hide()"> </div>

</form>

<div style="position:absolute;left:17%; top:139%; height:0.09%; width:66%; background:#CCC; z-index:1">
</div>

 <!--Basic Information--> 


 <div style="position:absolute;left:17%;top:145%;"> <h3> Basic Information </h3> </div>
 
<div id="basic_static" onClick="basic_static_hide()"> 

 <div style="position:absolute;left:19%;top:156%; font-size:18px; color:#89919C;"> Birthday </div>
 <div style="position:absolute;left:25%;top:156%; font-size:18px;"> </div>

<div style="position:absolute;left:19%; top:163%; font-size:18px; color:#89919C;">Gender</div>
<div style="position:absolute;left:25%;top:163%; font-size:18px;"> </div>


<div style="position:absolute;left:19%; top:169%; font-size:18px; color:#89919C;">Relationship </div>

		<div style="position:absolute;left:27%;top:169.5%;"> </div>

		<div style="position:absolute;left:27%;top:169.5%; color:#80062d; font-weight:bold;"> Add Relationship </div>

<div style="position:absolute;left:43.5%;top:147.5%;"> <input type="button" style="background-image:url(img/edit_button.PNG); border:none; height:24;" value="             " onClick="basic_static_hide()"> </div> 
</div>

<form method="post" style="display:none" id="basic_form">
<div style="position:absolute;left:19%;top:156%; font-size:18px; color:#89919C;"> Birthday </div>


<div style="position:absolute; left:25%; top:155.7%;">
	<select name="day" style="width:61;font-size:15px;height:29;padding:3;">
	<option value="Day:"> Day: </option>
	
	<script type="text/javascript">
	
		for(i=1;i<=31;i++)
		{
			document.write("<option value='"+i+"'>" + i + "</option>");
		}
		
	</script>
	
	</select>
	</div>	
    
    <div style="position:absolute;left:30%; top:155.7%;">
	<select name="month" style="width:78;font-size:15px;height:29;padding:3;">
	<option value="Month:"> Month: </option>
	
	<script type="text/javascript">
	
		var m=new Array("","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
		for(i=1;i<=m.length-1;i++)
		{
			document.write("<option value='"+i+"'>" + m[i] + "</option>");
		}	
	</script>
	
	</select>
	</div>
    
    
    <div style='position:absolute;left:36.3%;top:155.7%;'>
	<select name="year" style="width:66; font-size:15px; height:29; padding:3;">
	<option value="Year:"> Year: </option>
	
	<script type="text/javascript">
	
		for(i=2021;i>=1960;i--)
		{
			document.write("<option value='"+i+"'>" + i + "</option>");
		}
	
	</script>
	
	</select>
	</div>		
    
    <div style="position:absolute;left:19%; top:163%; font-size:18px; color:#89919C;">Gender</div>
<div style="position:absolute;left:25%;top:163%; font-size:18px;"> </div>

<div style="position:absolute;left:19%; top:169%; font-size:18px; color:#89919C;">Relationship </div>


<div style="position:absolute;left:27%; top:169%;">
	<select name="relationship" style="font-size:15px;height:29;padding:3;">
	<option value=""> ------------ </option>
	
	<script type="text/javascript">
	
		var rel=new Array("Single","In a relationship","Engaged","Married","Its complicated","In an open relationship","Windowed","Separated","Divoced");
		for(i=0;i<=rel.length-1;i++)
		{
			document.write("<option value='"+rel[i]+"'>" + rel[i] + "</option>");
		}	
	</script>
	
	</select>
	</div>
    
    <div style="position:absolute;left:24%;top:180%;"> <input type="submit" value="Save" name="basic_sub" class="save_button"> </div>
<div style="position:absolute;left:32%;top:180%;"> <input type="button" value="Cancel"  class="cancel_button" onClick="basic_form_hide()"> </div>

</form>




<!--Contact Information--> 

<div style="position:absolute;left:51%;top:145%;"> <h3> Contact Information </h3> </div>

<div id="contact_static" onClick="contact_static_hide()">
<div style="position:absolute;left:53%;top:156%; font-size:18px; color:#89919C;"> Mobile Phones </div>

		<div style="position:absolute;left:62%;top:156%; font-size:18px;"> </div>

			<div style="position:absolute;left:70%;top:156%;"> <img src="img/only_me.PNG"> </div>
	

		<div style="position:absolute;left:62%;top:156.4%; color:#80062d; font-weight:bold;"> Add Your NSU Id </div>
		


<div style="position:absolute;left:53%; top:162%; font-size:18px; color:#89919C;">Email</div>

<div style="position:absolute;left:58%;top:162%; font-size:18px;">  </div>
   <div style="position:absolute;left:53%; top:169%; font-size:18px; color:#89919C;">Website</div>
  

		<div style="position:absolute;left:59%;top:169%; color:#80062d; font-weight:bold;">  </div>

		<div style="position:absolute;left:59%;top:169%; color:#80062d; font-weight:bold;"> Add Website </div>


<div style="position:absolute;left:53%; top:175%; font-size:18px; color:#89919C;">Facebook ID </div>


		<div style="position:absolute;left:61%;top:175%; color:#80062d; font-weight:bold;"> </div>
		

		<div style="position:absolute;left:61%;top:175%; color:#80062d; font-weight:bold;"> Add Facebook ID </div>


<div style="position:absolute;left:80%;top:147.5%;"> <input type="button" style="background-image:url(img/edit_button.PNG); border:none; height:24;" value="             " onClick="contact_static_hide()"> </div> 
</div>

<form method="post" style="display:none" name="contact" id="contact_form" onSubmit="return contact_check()">
<div style="position:absolute;left:53%;top:156%; font-size:18px; color:#89919C;">  NSU ID </div>
<div style="position:absolute;left:62%;top:155.4%;"> <input type="text" value="" name="mno" onKeyPress="return isNumberKey(event)" style="height:33;width:150;font-size:16px;" maxlength="10"> </div>

<div style="position:absolute;left:74%;top:155.4%;">
	<select style="height:33;font-size:19px;" name="priority">
    	<option value="Private"> Only me </option>  
		<option value="Public"> Public </option> 
	</select>
</div>

<div style="position:absolute;left:53%; top:162%; font-size:18px; color:#89919C;">Email</div>

<div style="position:absolute;left:61%;top:161.6%; font-size:18px;"> <input type="text" value="" style="height:33; width:300; color:#000; font-size:16px; "  disabled></div>
    
  <div style="position:absolute;left:53%; top:169%; font-size:18px; color:#89919C;">Website</div>
<div style="position:absolute;left:61%;top:168%;"> <input type="text" value="" name="web" maxlength="40" style="height:33;width:300;font-size:16px;"> </div>
<div style="position:absolute;left:53%; top:175%; font-size:18px; color:#89919C;">Facebook ID </div>
<div style="position:absolute;left:61%;top:174.4%;"> <input type="text" value="" name="nsubudid" maxlength="40" style="height:33;width:300;font-size:16px;"> </div>

<div style="position:absolute;left:59%;top:185%;"> <input type="submit" value="Save" name="contact_sub" class="save_button"> </div>
<div style="position:absolute;left:67%;top:185%;"> <input type="button" value="Cancel"  class="cancel_button" onClick="contact_form_hide()"> </div>

</form>



<div style="position:absolute;left:58%;top:193%; display:none;" id="mobile_no_erorr"><img src="img/wrong.png"> The phone number is invalid.</div>

<div style="position:absolute;left:24%;top:220%; color:#E9EAED;">.</div>

</body>
</html>
