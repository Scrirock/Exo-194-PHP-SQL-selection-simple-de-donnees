<?php

/**
 * 1. Importez le fichier SQL se trouvant dans le dossier SQL.
 * 2. Connectez vous à votre base de données avec PHP
 * 3. Sélectionnez tous les utilisateurs et affichez toutes les infos proprement dans un div avec du css
 *    ex:  <div class="classe-css-utilisateur">
 *              utilisateur 1, données ( nom, prenom, etc ... )
 *         </div>
 *         <div class="classe-css-utilisateur">
 *              utilisateur 2, données ( nom, prenom, etc ... )
 *         </div>
 * 4. Faites la même chose, mais cette fois ci, triez le résultat selon la colonne ID, du plus grand au plus petit.
 * 5. Faites la même chose, mais cette fois ci en ne sélectionnant que les noms et les prénoms.
 */

require "Classes/DB.php";

$conn = DB::getInstance();

$infoUser = $conn->prepare("SELECT * FROM exo_194.user");
$infoUser->execute();

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>selecteur simple</title>
</head>
<body>

<?php

foreach ($infoUser->fetchAll() as $user){
    echo "<div class='infoUsers'>";
    echo "<p><span>Nom: </span>".$user["nom"]."</p>";
    echo "<p><span>Prenom: </span>".$user["prenom"]."</p>";
    echo "<p><span>Rue: </span>".$user["rue"]."</p>";
    echo "<p><span>Numero: </span>".$user["numero"]."</p>";
    echo "<p><span>Code postal: </span>".$user["code_postal"]."</p>";
    echo "<p><span>Ville: </span>".$user["ville"]."</p>";
    echo "<p><span>Pays: </span>".$user["pays"]."</p>";
    echo "<p><span>Mail: </span>".$user["mail"]."</p>";
    echo "</div>";
}

?>

</body>
</html>
