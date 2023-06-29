<?php
if( !empty($_GET["lastname"]) && !empty($_GET["firstname"]) && !empty($_GET["myDate"]) && !empty($_GET["pays"])
&& !empty($_GET["building"]) && !empty($_GET["room"])){
  
     echo "<p>bonjour ".htmlspecialchars($_GET['lastname'])." 
     ".htmlspecialchars($_GET['firstname'])."nous sommes le ".strftime('%d-%m-%y', strtotime(($_GET['myDate']))).
     " en ".$_GET['pays']." immeuble ".$_GET['building']." chambre ".$_GET['room']."</p>";
    
}else{
    echo "veuillez remplir tous les champs";
}