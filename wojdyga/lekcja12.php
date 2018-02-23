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
        if($link = mysql_connect("localhost", "root", "", "testowa")):
            //udało się połączyć z bazą
            $query = 'SELECT * FROM testowa';
            if($result = mysqli_query($link, $query)):
            //udało się wykonać zapytanie
    ?>
    <table>
        <tr>
            <th>Imię</th>
            <th>Nazwisko</th>
        </tr>
        <?php
            //Odczytanie i wyświetlenie danych pobranych z tabeli
            while($row = mysqli_fetch_row())
        ?>
    </table>
</body>
</html>