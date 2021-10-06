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
    $a = 3;
    $b = 213312;
    $c = 34;

    if ($a > $b && $a > $c) {
        echo $a;
    } elseif ($b > $c && $b > $a) {
        echo $b;
    } else {
        echo $c;
    }
    ?>
</body>

</html>

