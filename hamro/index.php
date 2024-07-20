<?php
include('includes/connect.php');
include('functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hamro Electronics</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
    
  <body>
    <!-- Navbar -->
     <div class="class-container-fluid p-=0">
       <!--first child-->
       <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="./images/logo.png" alt="logo" style="width: 7%; height: 7%;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-phone"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price:110/-</a>
        </li>


      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!--second child-->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
<ul class="navbar-nav me-auto">

    <li class="nav-item">
        <a class="nav-link" href="#">Welcome Guest</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
    </li>
</ul>
</nav>

<!--third child-->
<div class="bg-light">
<h3 class="text-center">Hamro Electronics</h3>
<p class="text-center">Get the latest released electronic gadgets.</p>
</div>


<!--fourth child-->
<div class="row px-1">
<div class="col-md-10">
    <!--products image-->
    <div class="row">
<!--fetching products from database-->
<?php
// calling getproducts function from common_function.php
         getproducts();
        ?>
<!--row end-->
    </div>
    <!--col end-->
</div>
<div class="col-md-2 bg-secondary p-0">
    <!--products details ie category and brands-->
    <ul class="navbar-nav me-auto text-center">
      <!--Brands-->
      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h4>Brands</h4></a>
      </li>
     <?php
      // calling getbrands function from common_function.php
      getbrands();
    
      ?>

      <!--categories-->
      <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
      </li>

      <?php
      // calling getcategories function from common_function.php
      getcategories();

      ?>


    </ul>

     
         
</div>

</div>



<!--last child-->
<div class="bg-info p-3 text-center">
    <p>&#169; All right reserved</p><p> Designed by Birat and team-2024.</p>
</div>
     </div>


  <!-- Bootstrap Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html> 