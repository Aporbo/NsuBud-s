
<html>
<head>
<title> ></title>
</head>
<body bgcolor="#E9EAED">


<div style="position:absolute;left:30%; display:none;  top:51%; height:9.8%; width:6.9%; background-color:#F6F7F8; z-index:1;" id="timeline_txt_background"> </div>
<div style="position:absolute;left:31.5%; top:54%; font-weight:bold; z-index:1;"> <a href="" style="text-decoration:none; color:#e1465d;" onMouseOver="on_timeline_txt();" onMouseOut="out_timeline_txt();">  Timeline </a> </div>
<div style="position:absolute;left:37.1%; display:none; top:51%; height:9.8%; width:5.9%; background-color:#F6F7F8; z-index:1;" id="about_txt_background"> </div>
<div style="position:absolute;left:38.3%; top:54%; font-weight:bold; z-index:1;"> <a href="" style="text-decoration:none; color:#e1465d;" onMouseOver="on_about_txt();" onMouseOut="out_about_txt();"> About </a>  </div>
<div style="position:absolute;left:44.7%; top:54%; font-weight:bold; z-index:1; color:#000000;"> Photos  <samp style="color:#717171;"> </samp> </div>




<div style="position:absolute;left:15%;top:68%;height:12%;width:70%; background-color:#F6F7F8; box-shadow:0px -1px 5px 1px rgb(0,0,0);"> </div>

<div style="position:absolute;left:16%;top:69%;"> <img src="img/photos.PNG"> </div>
<div style="position:absolute;left:19%;top:66.3%;"> <h2> Photos </h2> </div>

<div style="position:absolute;left:15%; top:80%; height:125%; width:70%; background:#FFF; box-shadow:0px -1px 5px 1px rgb(0,0,0); z-index:-1;">
</div>

<script>
function open_profile_photo_album()
{
	document.getElementById("profile_photo_album").style.display='block';
	document.getElementById("albums").style.display='none';
}
function open_cover_photo_album()
{
	document.getElementById("cover_photo_album").style.display='block';
	document.getElementById("albums").style.display='none';
}
function open_timeline_photos_album()
{
	document.getElementById("timeline_photos_album").style.display='block';
	document.getElementById("albums").style.display='none';
}
function back()
{
	document.getElementById("profile_photo_album").style.display='none';
	document.getElementById("cover_photo_album").style.display='none';
	document.getElementById("timeline_photos_album").style.display='none';
	document.getElementById("albums").style.display='block';
}
function open_profile_photo()
{
	document.getElementById("profile_pic_open_box").style.display='block';
}
function close_profile_photo()
{
	document.getElementById("profile_pic_open_box").style.display='none';
}


</script>

<div id="albums">
<div style="position:absolute; left:18%; top:85%;">
<img src=" style="height:200; width:200; box-shadow:0px 0px 5px 1px rgb(0,0,0);" onClick="open_profile_photo_album()">
</div>
<div style="position:absolute; left:23%; top:118%;"> <h3> Profile </h3> </div>

<div style="position:absolute; left:41%; top:85%;">
<img src="" style="height:200; width:200; box-shadow:0px 0px 5px 1px rgb(0,0,0);" id="cover_photo" onClick="open_cover_photo_album()" >
</div>
<div style="position:absolute; left:46.4%; top:118%;"> <h3> Cover </h3> </div>



<div style="position:absolute; left:65%; top:85%;">
<img src="" style="height:200; width:200; box-shadow:0px 0px 5px 1px rgb(0,0,0);" id="timeline_photos" onClick="open_timeline_photos_album()">
</div>
<div style="position:absolute; left:70%; top:118%;"> <h3> Timeline </h3> </div>
</div>

<!--profile_photo_album-->
<div style="display:none;" id="profile_photo_album">
<div style="position:absolute; left:21%; top:100%;">
<img src="" style="height:200; width:200; box-shadow:0px 0px 5px 1px rgb(0,0,0);" onClick="open_profile_photo()">
</div>
<div style="position:absolute; left:18%; top:85%;"> <img src="img/Go back.png" height="50" width="50" onClick="back()"> </div>
</div>

<!--cover_photo_album-->
<div style="display:none;" id="cover_photo_album">
<div style="position:absolute; left:21%; top:100%;">
<img src="" style="height:200; width:200; box-shadow:0px 0px 5px 1px rgb(0,0,0);" onClick="open_cover_photo()">
</div>
<div style="position:absolute; left:18%; top:85%;"> <img src="img/Go back.png" height="50" width="50" onClick="back()"> </div>
</div>

<!--timeline_photos_album bg-->
<div style="display:none;" id="timeline_photos_album">
<div style="position:absolute;left:15%; top:80%; height:10%; width:70%; background:#FFF; box-shadow:0px -1px 5px 1px rgb(0,0,0); z-index:-1;">
</div>


<script>
function timeline_photos_open(photo_id,vid)
{
	var xmlhttp;

  	xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function()
	{	
  			var details=document.getElementById("photos_ID");
	  		details.innerHTML=xmlhttp.responseText;
	}
	xmlhttp.open("GET","open_timeline_photos_album.php?photo="+photo_id+"&v_id="+vid,true);
	xmlhttp.send(null);
}

function close_timeline_album_photo()
{
	document.getElementById("timeline_album_photo").style.display='none';
}
</script>

<div style="position:absolute; left:18%; top:85%;">
<img src="img/Go back.png" height="50" width="50" onClick="back()">
<table cellpadding="41">
<tr>

		<td><img src="" style="height:200; width:200; box-shadow:0px 0px 5px 1px rgb(0,0,0);" onClick="timeline_photos_open(">
        </td>

</tr>
</table>
</div>

</div>

<div id="photos_ID"> </div>



<div style="position:absolute;left:24%;top:220%; color:#E9EAED;">.</div>



</body>
</html>