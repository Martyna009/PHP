<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";
    // connect to database

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    $sql = "DROP FROM myUsers Where id = 7 ";
    while($row = mysqli_fetch_assoc($result)){
}    
        else{
        echo "Usunięto";    
}
?>    
</body>
</html>