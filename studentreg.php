<?php
include('./config.php');
?>
 

<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrinkto-fit=no">


<title>Login Form</title>
<style>
             .first-text{
                position: absolute;
            top:200px;
            left:200px;
            color:black;
            font-family:"cursive"
            font-size: 2.5em;
             }
        
    </style>
</head>
<body>
<?php
include('./header.php');
?>
<!-- start Course page-->
<div class="container-fluild bg-light">
    <div class="row">
     
        <img src="./Images/img(11).webp" alt="signup" style="height:500px; width:100%;object-fit:cover; box-shadow:10px;">
         <h1 class="first-text"></center>Welcome to online courses!!</center></h1>
    </div>
</div>    
        <h1 class="text-center1" style=color:yellow><center>STUDENT REGESTRATION</center></h1>
      <!-- yeha prr signup ka code hai -->
    <form action ="" method="POST">
      <h5 ><center>Name :  <input type="text" name="name"><br></center></h5>
     <h5><center> Email:  <input type="email" name="email"><br></center></h5>
      <h5><center>Password:  <input type="password" name="password">
    <br></center></h5>  
         
      <center><input type="submit" name="submit" style="color:blue;",background-color:black></center>
    
          
     </form>
         
 

    </div>
    <div class="container mt-5">
     <h5 class="text-center" style=color:green;>Happy Online Learning :)</h5>
    </div>    
      
<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password= $_POST['password'];

    $result = mysqli_query($mysqli,"INSERT INTO lpu values ('' ,'$name ' ,'$email','$password')");//herre , we have to left for removing error

    if($result)
    {
        $alert="<script>alert('Regestration successfully');</script>";
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