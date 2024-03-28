<?php
include 'Config.php';



//on insere les données du formulaire dans la table 
 $sql = "UPDATE user SET etat=1 WHERE id=$_REQUEST[id]";

$result = mysqli_query($db, $sql);
header('Location: list_user.php');     



?>
