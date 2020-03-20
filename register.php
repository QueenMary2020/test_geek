<?php

  // code...

include ('connect.php');
// If form submitted, insert values into the database.

        // removes backslashes
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$sexe = $_POST['sexe'];
$habitation = $_POST['habitation'];
$psdo = $_POST['psdo'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];
$cmdp = $_POST['cmdp'];
$numero = $_POST['numero'];

        $sqr = 'INSERT INTO utilisateur (nom, prenom, sexe, lieu_dhabitation, pseudo, email, mot_de_passe, confirmer_mot_de_passe	, contact)
VALUES("'.$nom.'", "'.$prenom.'", "'.$sexe.'", "'.$habitation.'", "'.$psdo.'", "'.$email.'", "'.$mdp.'", "'.$cmdp.'", "'.$numero.'")';
        $result = mysqli_query($connect, $sqr);
        if($result){
            echo "ENREGISTREMENT EFFECTUE AVEC SUCCESS cliquer sur <a href='login.php'>Login</a> pour vous connecter";
}else {
  echo mysqli_connect_error();
}
?>
