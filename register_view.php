<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="register.css">
    <title>inscription</title>
  </head>
  <body>
    <?php include "connect.php"; ?>
<h3>INSCRIVEZ-VOUS</h3>

<form action="register.php" method="post">
      <table align="center" collapse="10">

        <tr>
          <td>Nom :</td>
            <td><input type="text" id="" name="nom"></td>
        </tr>

        <tr>
          <td>Prenoms :</td>
            <td><input type="text" id="" name="prenom"></td>
        </tr>

        <tr>
          <td>gentilité :</td>
            <td>homme <input type="radio" name="sexe" value="homme"> femme <input type="radio" name="sexe" value="femme"> </td>
        </tr>

        <tr>
          <td>lieu d'habitation :</td>
            <td><input type="text" id="" name="habitation"></td>
        </tr>

        <tr>
          <td>pseudo :</td>
            <td><input type="text" id="" name="psdo"></td>
        </tr>

        <tr>
          <td>email :</td>
            <td><input type="email" id="" name="email"></td>
        </tr

        <tr>
          <td>mot de passe :</td>
            <td><input type="password" id="" name="mdp"></td>
        </tr>

        <tr>
          <td>confirmer mot de passe :</td>
            <td><input type="password" id="" name="cmdp"></td>
        </tr>


          <td>contact :</td>
            <td><input type="text" id="" name="numero"></td>
        </tr>

        <tr>
          <td align="center" colspan="2"><input type="submit" name="valider"  value="s'inscrire"> &nbsp; &nbsp; <input type="reset" value="annuler"></td>
      </td>
        </tr>

      </table>

      </form>
  </body>
</html>
