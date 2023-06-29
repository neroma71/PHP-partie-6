<?php
if( !empty($_GET["lastname"]) && !empty($_GET["firstname"]) && !empty($_GET["myDate"])){
  
     echo "<p>bonjour ".htmlspecialchars($_GET['lastname'])." 
     ".htmlspecialchars($_GET['firstname'])."nous sommes le".$_GET['myDate']."</p>";
    
}else{
    echo "veuillez remplir tous les champs";
}