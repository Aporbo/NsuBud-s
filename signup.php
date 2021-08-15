<?php


if ($_SERVER['REQUEST_METHOD'] =='POST'){

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NSUBUD's | Signup</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color:#e9ebee;">
   <div id="bar">
       <div style="font-size:40px">
       NSUBUD's 
       </div> 
       <div id="signup_button" >
       Log in
       </div>
      
   </div>

   <div id="bar2">
         Sign up to NSUBUD's <br><br>
         <form method="post" action ="">
         <input type="text" name="first_name" placeholder="First Name" id="text"><br><br>

         <input type="text" name="last_name" placeholder="Last Name" id="text"><br><br>

       <span style="font-weight: normal;"> Gender: </span> <br>
         <select id="text" name="gender">
             <option >Male</option>
             <option >Female</option>

         </select> <br><br>

         <input type="text"name="email" placeholder="Email" id="text"><br><br>
         <input type="password" name="password" placeholder="Password" id="text"><br><br>
         <input type="password" name="password1" placeholder="Re-Type Password" id="text"><br><br>

         <input type="submit" id="button" value="Sign up" >
         <br><br><br>
         </form>
   </div>

</body>
</html>