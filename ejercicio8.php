<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table border="3" bgcolor="red" style=color:antiquewhite>

        <tr>
            <th> Elevado </th>
            <th> Resultado </th>
        </tr>

        <?php

        $limite = 10; // Hasta

        for ($expo = 0; $expo < $limite; $expo++) { // Hasta antes de ^7

            if ($expo == 4)
                continue;

            echo "<tr>";
            echo "<td>$expo</td>";
            $result = pow(2, $expo);

            echo "<td> $result </td>";
            echo "</tr>";

            if ($expo == 5)
                break;
        }
        ?>

    </table>

</body>

</html>