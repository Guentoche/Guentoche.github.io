<php

?>
<!DOCTYPE html>
<html lang="en">
<script type="text/javascript">
  // Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')&&location.hostname == this.hostname) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({scrollTop: target.offset().top}, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
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