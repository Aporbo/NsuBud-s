<?php
class signup
{
   private error = "";
   public function evaluate($data)
   {
       foreach($data as $key =>$value){
       if(empty($value)){
           $error= $error . $key . "is empty!<br>";
         }
       }
       if($error == ""){
       //no error
       $this->create_user($data)
       }
       else{
           return $error;
       }
   }
   public function crrate_user($data)
{

    $firtname= $data['first_name'];
    $lastname= $data['last_name'];
    $gender= $data['gender'];
    $email= $data['email'];
    $password= $data['password'];
    //create these
    $userid= $data['userid'];
    $urlAddress= $data['url_address'];








    $query = "insert into 
    users
    (userid, first_name,last_name,gender,email,password,url_address) 
    values('$userid','$first_name','$last_name','$gender','$email','$password','$url_address')";
    $DB = new database();
    $DB->save($query);
}
}