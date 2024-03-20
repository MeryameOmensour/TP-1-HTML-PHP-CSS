<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body{
    background-color: rgb(241, 188, 119);
}
h2{
    font-family: 'Courier New', Courier, monospace; 
    font-size: x-large;
    font-style: oblique;
}
img{
    background-position: 60%;
}
label{
    font-family: 'Times New Roman', Times, serif;
    font-size: large;
}
input{
    color: rgb(229, 143, 30);
}
select{
    color: rgb(229, 143, 30);
}


    </style>
</head>
<body>
    <form action="les styles.php" method="post">
    <centre class="bi">
        <h2>Bienvenue dans votre magasin MeyShope </h2>
     <img src="ima.jpg" width="20%" height="10%"><br>
     <label>votre nom</label><br>
     <input type="text" name="nom" id="nom"><br>
     <label> votre adresse</label><br>
     <input type="text" name="adresse" id="adresse"><br><br>
     <label for="groupe"> le type de Hijabe que tu veux</label><br>
     <select name="groupe" id="groupe"><br>
        <option value="1">shayla</option>
        <option value="2">khimar</option>
        <option value="1">Niqab</option>
        <option value="1">hijab</option>
     </select><br>
     <input type="submit" value="ok"><br>

<a href="les styles.html">les styles</a>


    </centre>
    </form>
</body>
</html>