<?php
include('./config.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .first-text{
            position: absolute;
            top:300px;
            left:500px;
            color:black;
            font-family:"cursive"
            font-size: 2.5em;
        }
    </style>
</head>
<body>
<h1 class="text-center1" style=color:yellow><center></center></h1>
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
     <h5 class="text-center" style=color:green;>Happy Online courses :)</h5>
    </div>    
      
<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password= $_POST['password'];

    $result = mysqli_query($mysqli,"INSERT INTO profile values ('' ,'$name ' ,'$email','$password')");//herre , we have to left for removing error

    if($result)
    {
        $alert="<script>alert('*****THANK YOU ********');</script>";
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