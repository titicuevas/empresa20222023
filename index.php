<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamentos</title>
</head>
<body>
    <?php
    $pdo = new PDO('pgsql:host=localhost;dbname=empresa', 'empresa', 'empresa');
    $sent = $pdo->query('SELECT * FROM departamentos ORDER BY codigo');
    $filas = $query->fetchAll();
    echo "<pre>";
    foreach ($filas as $fila => $value) {
        echo "<tr>
        <td>ID:".$fila->id."</td>
        <td>Codigo:".$fila->codigo."</td>
        <td>Denominacion:".$fila->denominacion."</td>
        </tr>";
        var_dump($fila);
        print_r($fila);
        
    }
    echo "</pre>";
    ?>
</body>
</html>
