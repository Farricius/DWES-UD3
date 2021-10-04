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

        $limite = 7; // Hasta

        for ($expo = 0; $expo < $limite; $expo++) { // Hasta antes de ^7
            echo "<tr>";
            echo "<td>$expo</td>";
            $result = pow(2, $expo);
            echo "<td> $result </td>";
            echo "</tr>";
        }
        ?>

    </table>

</body>

</html>