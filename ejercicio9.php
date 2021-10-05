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

    $date = new DateTime("2021-10-04");

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
    echo "APARTADO 2";
    echo "<br>";

    //echo strtotime($fechaHoy);

    $fecha_nacimiento = "04-10-2003";
    $dia_actual = date ("Y-m-d");
    $edad_diff = date_diff(date_create($fecha_nacimiento) , date_create($dia_actual));
    //var_dump($edad_diff);
    echo $edad_diff->y;

    if ($edad_diff > 65) {
        echo " NO puede entrar, es anciano";
    } elseif ($edad_diff > 18) {
        echo " Es  mayor para entrar";
    } else {
        echo " Es menor edad, no puede";
    }

    ?>

</body>

</html>