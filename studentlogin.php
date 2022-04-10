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
    <title>Login form</title>
    <style>
             .first{
                position: absolute;
            top:300px;
            left:200px;
            color:black;
            font-family:"cursive"
            font-size: 2.5em;
             }
        
    </style>
    
    

    
</head>
<body>
<div class="container-fluild bg-dark">
    <div class="row">
     
        <img src="./Images/img(11).webp" alt="signup" style="height:500px; width:100%;object-fit:cover; box-shadow:10px;">
        <div class="first">
        <h1>ONLINE COURSES</h1>
        <h3> LET'S LEARN MORE !! :)</h3>
        </div>
         
    </div>
</div> 
<br>   
<form action ="" method="POST">
    <h3 style="color:green"><center>Login form</center></h3>
     <h5><center> Email:  <input type="email" name="email"><br></center></h5>
      <h5><center>Password:  <input type="password" name="password">
    <br></center></h5>  
         
      <center><input type="submit" name="submit" style="color:blue;",background-color:black></center>
    
          
     </form>
     
   
  </body>
</html>
<?php
     
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $email_search="SELECT* FROM lpu where email='$email' ";
        $query=mysqli_query($mysqli,$email_search);
        $email_count=mysqli_num_rows($query);
        if($email_count){
            $email_pass=mysqli_fetch_assoc($query);
            $db_pass=$email_pass['password'];
            
            if($db_pass){
                echo"login succesfully";
                $alert="<script>alert('login successfully');</script>";
                 echo $alert;
                 ?> 
                 <script>
                     location.replace("studentreg.php");

                  </script>
                  <?php 

            }
            else{
                echo"password in correct";
                $alert="<script>alert('incorrect password');</script>";
                echo $alert;
                ?> 
                <script>
                    location.replace("index.php");

                 </script>
                 <?php  

            }
            
        } 
        else{
            echo"invalid email";
            $alert="<script>alert('unable to login ');</script>";
            echo $alert;
            ?> 
            <script>
                location.replace("index.php");

             </script>
             <?php 
        }     


       

    }
?>
<?php
include('footer.php');
?>