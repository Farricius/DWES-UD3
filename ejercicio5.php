<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $valor = 5;
    $i = 1;

    do {
        echo "$valor x $i = ", $valor * $i, "<br>";
        $i++;
    } while ($i <= 10)

    ?>
</body>

</html>