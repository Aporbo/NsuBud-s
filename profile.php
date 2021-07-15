<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile | NSUBUD's</title>
</head>


<style type="text/css">
#blue_bar{
    height: 50px;
    background-color: #405d9b;
    color:#d9dfeb;
}
#search_box{
    width: 400px;
    height: 20px;
    padding: 4px;
    border-radius: 5px;
    border: none;
    font-size: 14px;
    background-image: url(search.png);
    background-repeat: no-repeat;
    background-position: right;
}
#profile_pic{
    width: 150px;
    margin-top: -200px;
    border-radius: 50%;
    border: solid 2px white;
}
#menu_buttons{
    width: 100px;
    display: inline-block;
margin: 2px;
}

#friends_img{
    width: 75px;
    float: left;
    margin: 8px;
}
#friends_bar{
    background-color: white;
    min-height: 400px;
    margin-top: 20px;
    color:#aaa;
    padding: 8px;    
}
#friends{
    clear: both;
    font-size: 12px;
    font-weight: bold;
    color:#405d9b ;
}

   textarea{
      width: 100%;
      border: none;
      font-size: 14px;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      height: 50px;
   }

    #post_button{
        float:right;
        background-color: #405d9b;
        border: none;
        color: white;
        padding: 4px;
        font-size: 14px;
        border-radius: 2px;
        width: 50px;
    }

    #post_bar{
        margin-top: 20px;
        background-color: white;
        padding: 10px;
    }
    #post{
        padding:4px;
        font-size: 13px;
        display: flex;
        margin-bottom: 20px;
    }

</style>

<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color:#d0d8e4">
    <br>
    <!-- top bar started -->
<div id="blue_bar">
<div style="width:800px; margin:auto; font-size:30px ">
    NSUBUD's &nbsp &nbsp  <input type="text" id="search_box" placeholder="Search for people">
    <img style="width: 50px; float:right" src="selfie.jpg" alt="">
</div>
</div>
     <!-- started cover -->
     <div style="width: 800px; margin: auto; min-height:400px ">
      
     <div style="background-color: white; text-align:center; color: #405d9b">
         <img src="mountain.jpg" style="width: 100%;" alt="">
         <img id="profile_pic" src="selfie.jpg" alt="">
         <br>
        <div style="font-size:20px">
        Merry banda
        </div>
         <br>
         <div id="menu_buttons" >Timeline</div>
         <div id="menu_buttons" >About</div>
         <div id="menu_buttons" >Friends</div>
         <div id="menu_buttons" >Photos</div>
         <div id="menu_buttons" >Settings</div>
     </div>
 <!-- below cover -->
     <div style="display:flex">
     <!-- friends -->
     <div style="min-height: 400px; flex:1">

      <div id="friends_bar" >
          Friends <br>
          <div id="friends" >
 <img id="friends_img" src="user1.jpg" alt="">
 <br>
 First User
          </div>

          <div id="friends" >
 <img id="friends_img" src="user2.jpg" alt="">
 <br>
 Second User
          </div>
          <div id="friends" >
 <img id="friends_img" src="user3.jpg" alt="">
 <br>
 Third User
          </div>
          <div id="friends" >
 <img id="friends_img" src="user4.jpg" alt="">
 <br>
 Fourth User
          </div>
          
      </div>

     </div>
     <!-- post area -->
     <div  style="min-height: 400px; flex:2.5; padding: 20px; padding-right:0px">

     <div style="border: solid thin #aaa; padding:10px; background-color:white" >
         <textarea placeholder="What's on your mind" ></textarea>
         <input type="submit" id="post_button" value="Post">
         <br>
     </div>
     <!-- posts -->
<div id="post_bar">

  <!-- posts 1-->

    <div id="post">    
    <div>
    <img src="user1.jpg" alt="" style="width: 75px; margin-right:4px">
    </div>
    <div>
        <div style="font-weight:bold; color:#405d9b ">First Guy</div>
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi sed numquam dolorem consequuntur accusamus natus, quod libero temporibus fugiat magnam excepturi vel iure odio voluptates laboriosam suscipit optio? Consequatur nobis nam, minima nihil natus doloremque ipsa consequuntur odit fugiat fugit repudiandae veritatis molestias atque mollitia debitis maxime reprehenderit architecto eius!
    <br><br>
    <a href="">Like</a> .    <a href="">Comment</a>    .   <span style="color:#999">16 july 2021</span>

 
    </div>
    </div>

     <!-- posts 2-->

     <div id="post">    
    <div>
    <img src="user3.jpg" alt="" style="width: 75px; margin-right:4px">
    </div>
    <div>
        <div style="font-weight:bold; color:#405d9b ">Third Guy</div>
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi tenetur cum, facere magni iure perferendis asperiores autem nam accusantium corrupti. Minus et fuga dolorem harum asperiores quas ad soluta doloremque, praesentium numquam vero ipsam eveniet blanditiis hic itaque dicta qui vitae. Error voluptate dicta deleniti dolores unde sit, atque ut.
    <br><br>
    <a href="">Like</a> .    <a href="">Comment</a>    .   <span style="color:#999">16 july 2021</span>

 
    </div>
    </div>

     <!-- posts 3-->

     <div id="post">    
    <div>
    <img src="user4.jpg" alt="" style="width: 75px; margin-right:4px">
    </div>
    <div>
        <div style="font-weight:bold; color:#405d9b ">Fourth Guy</div>
   Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi dolorum asperiores, maiores facere corporis at officia consequuntur? Repellendus assumenda sequi recusandae ab a saepe maxime sapiente voluptate nisi consequuntur hic minus distinctio, quae obcaecati, itaque tempore magni aut perferendis nam facilis ipsa dicta unde libero. In nemo tempore blanditiis deleniti.
    <br><br>
    <a href="">Like</a> .    <a href="">Comment</a>    .   <span style="color:#999">16 july 2021</span>

 
    </div>
    </div>

</div>



     </div>
     </div>
     

     </div>
</body>
</html>