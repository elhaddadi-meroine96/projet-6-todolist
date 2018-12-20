<?php

$fichierJson = file_get_contents('todo.json');

            
if(isset($_POST['name'])){
   $san = trim(filter_input(INPUT_POST,'name', FILTER_SANITIZE_STRING)); //Sanitizer
   $tr = json_decode($fichierJson, true); //décode 
   $tr[] = ['id' => sizeof($tr),'name' =>  $san,'etat' => true]; //crée un tableau
   $encode = json_encode($tr); //encode le tableau
   file_put_contents('todo.json',$encode); 
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To-do list by Méroine</title>
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/main.css" />
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
 </head>
  <body>
        <form class="item-add" action="index.php" method="post" >

          <div class="list">

                   <h1 class="header">A faire</h1>
                  <?php require ('add.php');
                  echo $true;?>
                <br>
                <br>
                <input type="submit" class="submit" id="enregistrer" value="Enregistrer">
                <br>
                <h2 class="archives"> Archives </h2>
                <?php require ('add.php');
                  echo $false;?>   
            </form>
                  <br>
        <form class="item-add" action="index.php" method="post" >
                <input type="text" name="name" placeholder="Ajouter une tâche" class="input" required>
                <input type="submit" name="submit" value="Ajouter" class="submit">
                </form>
          </div>
 </body>
</html>