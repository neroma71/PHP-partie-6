<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="traitement.php" method="get">
        <p>
        <label for="lastname">nom</label>
             <input type="text" name="lastname" id="lastname">
        </p>
        <p>
        <label for="firstname">prenom</label>
            <input type="text" name="firstname" id="firstname">
        </p>
        <p>
        <label for="date">date</label>
            <input type="date" name="myDate" id="date">
        </p>    
        <input type="submit" value="envoyer">
    </form>
</body>

</html>