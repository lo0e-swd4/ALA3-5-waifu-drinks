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

$sql = "SELECT * FROM aanbiedingen";
if($result = $conn->query($sql)){

while($row = $result->fetch_object()){
    echo "<section class='aanbieding'><a href='details.php>?id=".$row->aanbiedingen_id."'>".$row->titel."</section>";
}
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