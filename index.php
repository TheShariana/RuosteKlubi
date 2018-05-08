<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ruoste Klubi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300|Roboto+Slab:300" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="media-queries.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
</head>

<body id="ruoste" data-spy="scroll" data-target=".navbar" data-offset="50">
  <div id="pagewrap">
    <?php include("navbar.html"); ?>

    <div id="rustCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#rustCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#rustCarousel" data-slide-to="1"></li>
        <li data-target="#rustCarousel" data-slide-to="2"></li>
      </ul>
      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/maisema.jpg" alt="" width="1200" height="700">
          <div class="carousel-caption">
            <?php include("logo.html"); ?>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/maisema2.jpg" alt="" width="1200" height="700">
          <div class="carousel-caption">
            <?php include("logo.html"); ?>
          </div> 
        </div>
        <div class="carousel-item">
          <img src="images/maisema3.jpg" alt="" width="1200" height="700">
          <div class="carousel-caption">
            <?php include("logo.html"); ?>
          </div>
        </div>
      </div>
      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#rustCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#rustCarousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>

    <div class="container">
    <!-- Section (Säännöt) -->
      <?php include("sections/rules.html"); ?>
    <!-- Container (Pluginit) -->
      <?php include("sections/plugins.html"); ?>
    <!-- Container (Adminit) -->
      <?php include("sections/admins.html"); ?>
    <!-- Container (Contact Section) -->
      <?php include("sections/contact.html"); ?>
    </div>

  <!-- Footer -->
    <footer class="text-center">
      <a class="up-arrow" href="#ruoste" data-toggle="tooltip" title="TAKAISIN YLÖS">
        <span class="glyphicon glyphicon-chevron-up"></span>
      </a><br><br>
      <p><a href="http://steamcommunity.com/profiles/76561198155700742" target="_blank" data-toggle="tooltip" title="View the steam profile">Shariana</a> © 2018  -  <a href="http://pelikaista.fi" target="_blank" data-toggle="tooltip" title="Visit the web page">  Pelikaista.fi</a></p> 
    </footer>

    <script>
      $(document).ready(function(){
        // Initialize Tooltip
        $('[data-toggle="tooltip"]').tooltip();
        
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#ruoste']").on('click', function(event) {

          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== "") {

            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 900, function(){
         
              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
            });
          } // End if
        });
      })
    </script>
  </div>
</body>
</html>
