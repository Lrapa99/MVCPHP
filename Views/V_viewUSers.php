<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Servicios</title>
</head>

<body>
    <table>

        <thead>

            <tr>
                <td>Cups</td>
                <td>Descripcion</td>
                <td>Valor</td>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach ($servicios as $servicio) {
                
                echo "<tr>";
                echo   "<td>" . $servicio['cups'] . "</td>";
                echo   "<td>" . $servicio['descripcion'] . "</td>";
                echo   "<td>$" . number_format($servicio['valor']). "</td>";
                echo "<tr>";
            }

            ?>
        </tbody>
    </table>

    <script src="./JS/app.js"></script>
</body>

</html>