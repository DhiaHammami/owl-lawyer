<?php

$search = $_POST['search'];
$sql = "select * from bibliotheque where nom like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	echo $row["nom"]."  ".$row["image"]."  ".$row["fichier"]."<br>";
}
} else {
	echo "0 records";
}


?>