<?php
	session_start();
	error_reporting(1);
	if(isset($_SESSION['tempfbuser']))
	{
			$con= mysqli_connect("localhost","root","");
		mysqli_select_db($con,"nsubud");
		$user=$_SESSION['tempfbuser'];
		$que1=mysqli_query($con,"select * from users where Email='$user' ");
		$rec=mysqli_fetch_array($que1);
		$userid=$rec[0];
		$gender=$rec[4];
		$que2=mysqli_query($con,"select * from user_secret_quotes where user_id=$userid");
		$count1=mysqli_num_rows($que2);
		if($count1==0)
		{
		
			$que3=mysqli_query($con,"select * from user_profile_pic where user_id=$userid");
			$count3=mysqli_num_rows($que3);
			if($count3>0)
			{
?>
<?php
	if(isset($_POST['Next']))
	{
		$que1=$_POST['que'];
		$ans1=$_POST['ans'];

		mysqli_query($con,"insert into user_secret_quotes(user_id,Question1,Answer1) values('$userid','$que1','$ans1')");
		header("location:../fb_step3/Secret_Question2.php");
	}
?>
<html>
<head>
	<title> Step2 </title>
<?php
	include("step2_background/background.php");
?>
	<link href="step2_css/step2.css" rel="stylesheet" type="text/css">
    <link href="../../fb_font/font.css" rel="stylesheet" type="text/css">
    <LINK REL="SHORTCUT ICON" HREF="../../fb_title_icon/nsubud.ico" />
	<script src="step2_js/que_check.js" language="javascript">
	</script>
</head>
<body>

<form method="post" name="sq" onSubmit="return check()">

<div style="position:absolute; left:33.5%; top:43%;"> <h3> Secret Question 1: </h3> </div>

<div style="position:absolute; left:45%; top:45%;">
<select name="que" style="height:38;font-size:18px;padding:3;">
		<option value="select one">select one</option>
		<option value="Where did you graduate High School?">Where did you graduate High School?

		</option>
		<option value="What was your first job?">What was your first job?</option>
		<option value="In what city were you born?">In what city were you born?</option>
		<option value="What is your favorite sports team?">What is your favorite sports team?</option>
		<option value="What is your favorite movie?">What is your favorite movie?</option>
		<option value="When is your anniversary?">When is your anniversary?</option>
		<option value="what is the first name of your oldest nephew?">what is the first name of your oldest nephew?</option>
		<option value="what is the first name of your favorite aunt?">what is the first name of your favorite aunt?</option>
		<option value="where did you spend you honeymoon?">where did you spend you honeymoon?</option>
</select>
</div>

<div style="position:absolute; left:35.8%; top:52.7%;"> <h3> Your Answer:  </h3> </div>
<div style="position:absolute; left:45%; top:55%;">  <input type="text" name="ans" / style="height:35; width:350; font-size:18px;" maxlength="50">   </div>

<div style="position:absolute; left:45%; top:67%;"> <input type="submit" name="Next" value="Next" id="Next_button" > </div>

</form>

<div style=" position:absolute; left:16%; top:42%;"> <img src="img/waiting.gif"> </div>

<?php
		include("step2_erorr/step2_erorr.php");
?>
</body>
</html>
<?php
			}
			else
			{
				if($gender=="Male")
				{
					header("location:../fb_step1/Step1_Male.php");
				}
				else
				{
					header("location:../fb_step1/Step1_Female.php");
				}
			}
		}
		else
		{
			header("location:../fb_step3/Secret_Question2.php");
		}
	}
	else
	{
		header("location:../../../index.php");
	}
?>