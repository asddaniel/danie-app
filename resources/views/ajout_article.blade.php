<!doctype html>
<html lang="en">
  <head>
    <title>{{$name}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/theme.css">
    <script type="text/javascript" defer src="js/laravel.js"></script>
  </head>
  <body>
  <div class="container">  
<h2>Ajouter un article</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Article</button>

<div id="id01" class="modal">
  
  <form name="formulaire" class="modal-content animate" action="https://www.w3schools.com/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container">
      <label for="Titre"><b>Titre de l'article</b></label>
      <input type="text" placeholder="Donner un Titre à l'article" name="title" required>
    <label for="author"><b>Auteur </b></label>
      <input type="text" placeholder="le nom de l'auteur" name="authors_id" required>
      <label for="contenu"><b>Contenu</b></label>
      <textarea name="slug" placeholder="contenu de l'article"></textarea>
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        
      <button type="submit">Enregistrer</button>
     
    </div>

    
  </form>
</div>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>



    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    
    <script src="js/main.js"></script>
  </body>
</html>