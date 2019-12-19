<!DOCTYPE html>

<html>
<head>
<title>-110 de QI</title>
<meta charset="utf-8" />
<body style="background:#A0A0A0">

</head>
<body>
    <h1> L'orienté Objet </h1>

</form>     
<?php
 require 'class/form1.class.php';
 $form = new form($_POST);

    echo '<form method="post" action="#">';

    $form->texte("Nom");
    $form->texte("Prenom");
    $form->email("Mail");
    $form->texte("téléphone");
    $form->date("Naissance");
    $form->submit("Envoyer");

  // $uti = new form($_POST['Nom'], $_POST['Prenon']);
  // echo $uti->getNom().'<br>';
    
?>