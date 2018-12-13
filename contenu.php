<!DOCTYPE html>
<html lang>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" media="screen" href="contenu.css" />

</head>
<body>

<?php
if(isset($_POST['ajouter'])){

// SANITIZING//

    if(isset($_POST['message']) && $_POST['message'] != ""){
        
      $Sanitize = filter_input($_POST,'message', FILTER_SANITIZE_STRING);
      $Validate = filter_input($_POST,'message', FILTER_VALIDATE_STRING);
    }
    }

      function submit()
    {
     echo "<input type='checkbox'>";
    }


// JSON //
    $contenu_json = json_encode('message');
    $todo = 'todo.json';
    $fichier = fopen($todo, 'w+');
    fwrite($fichier, $contenu_json);
    fclose($fichier);




    ?>
    </body>
    </html>
