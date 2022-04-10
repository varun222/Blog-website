<?php
include('./header.php');
?>
 <style>
        .first-text{
            position: absolute;
            top:250px;
            left:200px;
            color:white;
            font-family:"cursive"
            font-size: 2.5em;
        }
    </style>


 

<!-- start Course page-->
<div class="container-fluild bg-light">
    <div class="row">
     
        <img src="./Images/img(11).webp" alt="signup" style="height:500px; width:100%;object-fit:cover; box-shadow:10px;">
         <h1 class="first-text" ></center>PAYMENT PROFILE</center></h1>
    </div>
</div>    

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Payment</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Order ID:</a>
        </li>
         
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<br>

<?php
include('./form.php');
?>
<?php
include('./footer.php');
?>
  