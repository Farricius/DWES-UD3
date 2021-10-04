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
    $fechaNacimiento = 1955;

    $fechaDiscoteca = date('Y') - $fechaNacimiento;

    if ($fechaDiscoteca > 65) {
        echo "NO puede entrar, es anciano";
    } elseif ($fechaDiscoteca > 18) {
        echo "Es  mayor para entrar";
    } else {
        echo "Es menor edad, no puede";
    }

    echo "<br>";

    $fechaHoy = new DateTime("2021-10-04");
    $fechaCliente = new DateTime("2001-02-02");
    
    $interval = $fechaHoy->diff($fechaCliente);
    echo $interval->format('Esta persona tiene: %Y Años, %m meses y %d días');

    echo "<br>";

    //echo strtotime($fechaHoy);

    
    if ($interval > 65) {
        echo "NO puede entrar, es anciano";
    } elseif ($interval > 18) {
        echo "Es  mayor para entrar";
    } else {
        echo "Es menor edad, no puede";
    }

    ?>

</body>

</html>