<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercice 1</title>
</head>
<body>
<?php
    require_once('form.php');
    $action='index.php';
    $personne="jerome";
    $message="message";
    $form = new Form();
    echo $form->create($action); // créer le début du formulaire
    echo $form->text('personne',$personne); // créer un input de type texte avec comme valeur par défaut $nom
    echo $form->text('message',$message); // créer un input de type texte avec comme valeur par défaut $message
    echo $form->textarea("un message de textarea"); // créer un textarea
    echo $form->radio("radio", "radio");
    echo $form->submit('Envoyer'); //Créer un bouton pour soumettre le formulaire se nommant Envoyer
    echo $form->end(); //fermer le formulaire
    
?>
</body>
</html>