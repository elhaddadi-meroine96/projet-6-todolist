<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>To do list</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="formulaire.css" />

</head>
<body>
<form method="post" action="contenu.php">

<hr>
<p> A FAIRE</p>
  <div>
      <input type="checkbox" id="course" name="drone" value="faireSesCourses" checked>
      <label for="faireSesCourses">Faire les courses</label>
  </div>
   <div>
      <input type="checkbox" id="qcm" name="drone" value="TerminerLeProjetQcm">
      <label for="TerminerLeProjetQcm">Terminer le projet "QCM"</label>
  </div>
   <div>  
      <input type="checkbox" id="grandmere" name="drone" value="RappelerGrandMere">
      <label for="RappelerGrandMere">Rappeler Grand-mère</label>
   </div>
<br>
<input type="submit"  name="enregistrer" value="Enregistrer" >

<p>ARCHIVE<p>
<div>

</div>
<!-- AJOUT DE TACHE ETAPE 1 -->

<hr>
<h2> Ajouter une tâche</h2>
<p> La tâche à effectuer</p>
<textarea cols="50" id="message" name="message"></textarea>
<br>
<br>
<input type="submit" name="ajouter" value="Ajouter" onclick="submit()">
 </form>
</body>
</html>