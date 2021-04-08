<?php 

$server = "localhost";
$user = "root";
$pass = "";
$db = "energy";

$conn = new mysqli($server, $user, $pass, $db);

if($conn->connect_error){
    die("verbinding mislukt");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <main>
<?php

$sql = "SELECT * FROM aanbiedingen WHERE aanbiedingen_id=".$_GET['id'];
if($result = $conn->query($sql)){

    $row = $result->fetch_object();
    echo "<section class='aanbieding'>".$row->titel."</section>";
    echo "<section class='aanbieding'>".$row->begindatum."</section>";
    echo "<section class='aanbieding'>".$row->omschrijving."</section>";

    $result->close();
}else{
    echo "query mislukt";
}

?>
</main>
</body>
</html>
<?php
$conn->close();
?>