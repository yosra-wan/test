<!DOCTYPE html>
<html lang="fr">
<head>

   

<meta charset="UTF-8">
 <!-- bootstrap -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title> crud client</title>
<!--<link rel="stylesheet" href="style.css">-->
<script type="text/javascript" src="jquery.js"></script>
<!-- le css de bootstrap -->
<link rel="stylesheet" href="bootstrap.min.css">
<!--Jquery -->
<!--<script src="jquery.js"></script>-->
<script src="animation.js"></script>

<!-- Le javaScript de Bootstrap -->
<script src="bootstrap.min.js"></script>
</head>
<div class="container">
<h4 class="mt-5 text-center text-danger">
    Liste des produits
</h4>
<hr style="background-color: grey; margin-top: 5px; margin-bottom: 20px;">

<?php
$mysqli = new mysqli('localhost','root','','label_store') or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM produits") or die($mysqli->error);

   
    $num_rows = mysqli_num_rows($result);

    if($num_rows != 0) { ?>
    
<table class="table">
  <thead>
    <tr>
      <th scope="col">id_produit</th>
      <th scope="col">titre</th>
      <th scope="col">prix</th>
      <th scope="col">image</th>
      <th scope="col">type</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
      <?php

while($produit= mysqli_fetch_assoc($result))
    {   
    
    ?>
    <tr>
      <th scope="row"><?php echo $produit['id'] ?></th>
      <td><?php echo $produit['titre'] ?></td>
      <td><?php echo $produit['prix'] ?></td>
      <td><?php echo $produit['_image'] ?></td>
      <td><?php echo $produit['type'] ?></td>
      <td>
        <a href="?page=modifier_produit&id=<?php echo $produit['id'] ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
            </svg>
        </a>
            <a href="includes/supprimer_produit.php?id=<?php echo $produit['id'] ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
        </a>

      </td>
    </tr>
  <?php } ?>
  </tbody>
</table>
<div class="ml-auto">
<a href="#ivraison.php" class="btn btn-primary  mx-5">Ajouter produit</a>
    </div>
<?php }?>
<p > essai21 </p> 
    </div>