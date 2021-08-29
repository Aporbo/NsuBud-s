
<html>
<head>
	<title> Step3 </title>
<?php
	include("step3_background/background.php");
?>
	<link href="step3_css/step3.css" rel="stylesheet" type="text/css">
    <link href="../../nsubud_font/font.css" rel="stylesheet" type="text/css">
    <LINK REL="SHORTCUT ICON" HREF="../../nsubud_title_icon/Faceback.ico" />
	<script src="step3_js/que_check.js" language="javascript">
	</script>
</head>
<body>

<form method="post" name="sq" onSubmit="return check()">

<div style="position:absolute; left:33.5%; top:43%;"> <h3> Secret Question 2: </h3> </div>

<div style="position:absolute; left:45%; top:45%;">
<select name="que" style="height:38;font-size:18px;padding:3;">
		<option value="select one">select one</option>
		<option value="what was your favorite food as a child?">what was your favorite food as a child?</option>
		<option value="what was the last name of your first boss?">what was the last name of your first boss?</option>
		<option value="what is the name of your favorite sports team?">what is the name of your favorite sports team?</option>
		<option value="what was you first pets name?">what was you first pet's name?</option>
		<option value="what is the name of your favorite book?">what is the name of your favorite book?</option>
		<option value="who is your all-time favorite movie character?">who is your all-time favorite movie character?</option>
		<option value="what was the make of your fist car?">what was the make of your fist car?</option>
		<option value="what was the make of your first motorcycle?">what was the make of your first motorcycle?</option>
		<option value="who is you favorite author?">who is you favorite author?</option>
</select>
</div>

<div style="position:absolute; left:35.8%; top:52.7%;"> <h3> Your Answer:  </h3> </div>
<div style="position:absolute; left:45%; top:55%;">  <input type="text" name="ans" / style="height:35; width:350; font-size:18px;" maxlength="50">   </div>

<div style="position:absolute; left:45%; top:67%;"> <input type="submit" name="Finish" value="Finish" id="Next_button" > </div>

</form>

<div style=" position:absolute; left:16%; top:42%;"> <img src="img/waiting.gif"> </div>

<?php
		include("step3_erorr/step3_erorr.php");
?>

</body>
</html>
