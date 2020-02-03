<php

?>
<!DOCTYPE html>
<html lang="en">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
<head>
  <title>Portfolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="height:80%">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#one">Mon site web</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#two">Accueil</a></li>
      <li><a href="#three">A propos de moi</a></li>
      <li><a href="#four">Compétences</a></li>
      <li><a href="#five">Expériences</a></li>
      <li><a href="#six">Formations</a></li>
      <li><a href="#seven">Réalisations</a></li>
      <li><a href="#eight">Contact</a></li>
    </ul>
  </div>
</nav>

<div id=two class="container" style="margin-top:50px">
  <h1 align=center><br> Bienvenue sur mon site !</h1>
  <p align=center><br><br>Texte de blabla.</p>
</div>

<div id=three class="container" style="margin-top:50px">
  <h1 align=center><br> A propos de moi </h1>
  <p align=center><br><br></p>
</div>

<div id=four class="container" style="margin-top:50px">
  <h1 align=center><br> Compétences </h1>
  <p align=center><br><br>aaaaaaaaaaaa</p>
</div>

<div id=five class="container" style="margin-top:50px">
  <h1 align=center><br> Expériences </h1>
  <p align=center><br><br>aaaaaaaaaaaa</p>
</div>

<div id=six class="container" style="margin-top:50px">
  <h1 align=center><br> Formations </h1>
  <p align="center"><br><br>aaaaaaaa</p> 
</div>

<div id=seven class="container" style="margin-top:50px">
  <h1 align=center><br> Réalisations </h1>
  <p align="center"><br><br>aaaaaaaa</p> 
</div>

<div id=eight class="container" style="margin-top:50px">
  <h1 align=center><br> Contact </h1>
  <p align="center"><br><br>aaaaaaaa</p> 
</div>



</body>
</html>