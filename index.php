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
        <p>
        <label for="pays">date</label>
           <select name="pays">
            <option value="France">France</option>
            <option value="Angleterre">Angleterre</option>
            <option value="Italie">Italie</option>
           </select>
        </p>
        <p> 
        <label for="building">building</label>
            <input type="text" name="building" id="building">
        </p> 
        <p> 
        <label for="room">room</label>
            <input type="text" name="room" id="room">
        </p>    
        <input type="submit" value="envoyer">
    </form>
</body>

</html>