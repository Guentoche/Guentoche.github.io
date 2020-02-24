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
  <h1 align=center><br>Bonjour et bienvenue sur mon site !</h1>
  <h4 align=center><br> Théo PEAN <br> Développeur Web <br></h4>
</div>

<div id=three class="container" style="margin-top:50px">
  <h1 align=center><br> A propos de moi </h1>
  <h4 align=center><br> Bonjour et bienvenue sur mon site ! Je m'appelle Théo et je suis diplômé d'un BTS SN IR. Après l'obtention de mon diplôme, j'ai choisi de me spécialiser dans le developpement Web. J'intègre une formation Développement Web & Mobile à l'ECE TECH. Je suis actuellement à la recherche d'une entreprise afin d'effectuer une année d'alternance. Hormis cela je suis passioné par la culture geek et l'informatique. <br></h4>
</div>

<div id=four class="container" style="margin-top:50px">
  <h1 align=center><br> Compétences </h1>
  <h4 align=center><br><br> Language et techs </h4>
</div>

<div id=five class="container" style="margin-top:50px">
  <h1 align=center><br> Expériences </h1>
  <h3 align=center><br><br> BCA, Itron, RATP </h4>
</div>

<div id=six class="container" style="margin-top:50px">
  <h1 align=center><br> Formations </h1>
  <h4 align="center"><br><br> BTS SN, BAC STI2D </h4> 
</div>

<div id=seven class="container" style="margin-top:50px">
  <h1 align=center><br> Réalisations </h1>
  <h4 align="center"><br><br> Ce site, Projet BTS: Autolib </h4> 
</div>

<div id=eight class="container" style="margin-top:50px">
  <h1 align=center><br> Contact </h1>
  <h4 align="center"><br><br> Numéro de téléphone, Mail, GitHub </h4> 
</div>



</body>
</html>