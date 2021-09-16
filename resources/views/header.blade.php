
<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Mega Menu | CodingNepal</title>
    
<link rel="stylesheet" type="text/css" href="{{ asset('css\app.css') }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <nav>
    <div class="wrapper">
      <div class="logo"> <img src="https://tamkine.org/wp-content/uploads/2021/02/cropped-logo.png" alt="..." height="20"><a href="https://tamkine.org/fr/">Tamkine.org</a></div>
      
      <input type="radio" name="slider" id="menu-btn">
      <input type="radio" name="slider" id="close-btn">
      <ul class="nav-links">
        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
        <li><a href="#">Acceuil</a></li>
        <li><a href="#">À propos</a></li>
        <li><a href="formation">Nos Formation</a></li>
        <li>
          <a href="#" class="desktop-item">Nos Actualité</a>
          <input type="checkbox" id="showDrop">
          <label for="showDrop" class="mobile-item">Dropdown Menu</label>
          <ul class="drop-menu">
            <li><a href="#">Drop menu 1</a></li>
            <li><a href="#">Drop menu 2</a></li>
            <li><a href="#">Drop menu 3</a></li>
            <li><a href="#">Drop menu 4</a></li>
          </ul>
        </li>
        <li>
          <a href="#" class="desktop-item">Nos Cours</a>
          <input type="checkbox" id="showDrop">
          <label for="showDrop" class="mobile-item">Dropdown Menu</label>
          <ul class="drop-menu">
            <li><a href="#">Drop menu 1</a></li>
            <li><a href="#">Drop menu 2</a></li>
            <li><a href="#">Drop menu 3</a></li>
            <li><a href="#">Drop menu 4</a></li>
          </ul>
        </li>
        <li><a href="#">Se connecter</a></li>
      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
  
</html><!-- /.============= Navbar =============-->
  <script>$(document).ready(function() {
    // Calculating the distance from the top of the page to the initial position of the navbar, and store it in a variable
    var navbarOffest = $(".navbar").offset().top;
  
    $(window).on("scroll", function() {
      var navbarHeight = $(".navbar").outerHeight();
  
      if ($(window).scrollTop() >= navbarOffest) {
        $(".navbar").addClass("navbar-fixed-top");
        $("body").css("padding-top", navbarHeight + "px");
      } else {
        $(".navbar").removeClass("navbar-fixed-top");
        $("body").css("padding-top", "0");
      }
    });
  });</script>
      
      </header>
     