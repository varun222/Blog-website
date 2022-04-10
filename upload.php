
<?php
include('./header.php');
?>
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






<div class="container-fluild bg-light">
    <div class="row">
     
        <img src="./Images/img(11).webp" alt="signup" style="height:500px; width:100%;object-fit:cover; box-shadow:10px;">
         <h1 class="first-text"></center>Welcome to online courses!!</center></h1>
    </div>
</div>  
<br>
<br>  

    <form>
<h5 style="color:blue;">PLEASE UPLOAD DOCUMENT</h5>
        <form method="post" enctype="multipart/form-data">
    <input type="file" name="doc[]" multiple/>
    <input  style="color:red"type="submit" name="submit"/>
    <br>
</form>

 

<?php
if(isset($_POST['submit'])){
    echo "<pre>";
    print_r($_FILES);
    //move_uploaded_file
    foreach($_FILES['doc']['name'] as $key=>$val){
        move_uploaded_file($_FILES['doc']['tmp_name'][$key],'image/'.$val);
        $alert="<script>alert('Document upload successfully');</script>";
        echo $alert;

    }
    

}
 
?>
<br>
<br>
<?php
include('footer.php');
?>