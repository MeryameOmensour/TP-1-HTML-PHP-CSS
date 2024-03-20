<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        background-color: rgb(210, 145, 61);
    }
    p{
        font-size: medium;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        background-color: white;
    }
    p{
        background-color: wheat;
    }
    </style>
</head>
<body>
   
<h1>Tableau des achats</h1>
    <form action="calcul.php" method="post">
        <table>
            <tr>
                <th>Article</th>
                <th>Prix</th>
                <th>Quantité</th>
            </tr>
            <tr>
            <td> <p>Article 1</p><img src="im1.jpg" id="im1"> </td>
                <td><input type="number" name="prix1"></td>
                <td><input type="number" name="quantite1"></td>
</tr>
            <tr>
            <td> <p>Article 2</p><img src="im2.jpg" id="im2"> </td>
                <td><input type="number" name="prix2"></td>
                <td><input type="number" name="quantite2"></td>
            </tr>
            <tr>
            <td> <p>Article3</p><img src="im3.jpg" id="im3"> </td>
                <td><input type="number" name="prix3"></td>
                <td><input type="number" name="quantite3"></td>
            </tr>
            <!-- Ajouter plus de lignes si nécessaire -->
        </table>
        <input type="submit" value="Calculer">
    </form>
</body>
</html>


PHP (calcul.php) :
php
<?php
$articles = array(
    array($_POST['article1'], $_POST['prix1'], $_POST['quantite1']),
    array($_POST['article2'], $_POST['prix2'], $_POST['quantite2'])
    // Ajouter plus de lignes si nécessaire
);

$total_articles = 0;
$prix_total = 0;

echo "<h1>Récapitulatif des achats</h1>";
echo "<table>";
echo "<tr><th>Article</th><th>Prix</th><th>Quantité</th></tr>";

foreach ($articles as $article) {
    echo "<tr>";
    echo "<td>" . $article[0] . "</td>";
    echo "<td>" . $article[1] . " €</td>";
    echo "<td>" . $article[2] . "</td>";
    echo "</tr>";
    $total_articles += $article[2];
    $prix_total += $article[1] * $article[2];
}

echo "</table>";

echo "<p>Nombre total d'articles : " . $total_articles . "</p>";
echo "<p>Prix total : " . $prix_total . " €</p>";
?>
   





</body>
</html>