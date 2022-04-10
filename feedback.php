<?php
include('./config.php');
?>
<?php
include('./header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         .col-25 {    
  float: left;    
  width: 25%;    
  margin-top: 6px;    
}    
    
.col-75 {    
  float: left;    
  width: 75%;    
  margin-top: 6px;    
}    
    
/* Clear floats after the columns */    
.row:after {    
  content: "";    
  display: table;    
  clear: both;    
}  
.first-text{
            position: absolute;
            top:200px;
            left:200px;
            color:black;
            font-family:"cursive"
            font-size: 2.  
    
     
}
    </style>
</head>
<body>
<div class="container-fluild bg-light">
    <div class="row">
     
        <img src="./Images/img(11).webp" alt="signup" style="height:500px; width:100%;object-fit:cover; box-shadow:10px;">
         <h1 class="first-text"></center>GIVE YOUR FEEDBACK HERE !!</center></h1>
    </div>
</div>    
<form action ="" method="POST"><center>
<h1 style='color:green'>FEEDBACK FORM</h1>
<h5>Name:  <input type="name" name="name"><br></h5>
     <h5>Email:  <input type="email" name="email"><br></h5>
    
    <h5> Country:<input type="country" name="country"><br></h5>   
    
           
        
       
    <div class="row">    
      <div class="col-25">    
       <center> <label for="feed_back">FeedBack</label></center>    
      </div>    
      <div class="col-75">    
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>    
      </div>    
    </div>     
         
      <center><input type="submit" name="submit" style="color:blue;",background-color:black></center>
</center>
    
</form>          
<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $country=$_POST['country'];
    $subject= $_POST['subject'];

    $result = mysqli_query($mysqli,"INSERT INTO record values ('' ,'$name ' ,'$email','$country','$subject')");//herre , we have to left for removing error

    if($result)
    {
        $alert="<script>alert('Thanks for your feedback');</script>";
        echo $alert;

    }
    else
    {
        $alert="<script>alert('Failed to register');</script>";
        echo $alert;

    }

}
?>

</body>
</html>
<?php
include('footer.php');
?>