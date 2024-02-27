<?php 

include_once __DIR__ ."./data/init.php";

// var_dump($hotels);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- characters and viewport tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- SEO tags -->
    <meta name="author" content="Serena Malusà" />
    <meta name="description" content="php exercise">

    <!-- title and icon -->
    <title>PHP Hotels</title>
    <link rel="icon" href="./imgs/logo-small.ico">

    <!-- CSS -->
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Parking</th>
            <th scope="col">Vote</th>
            <th scope="col">Distance from City center</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hotels as $hotel): ?>
            <tr>
            <td><?= $hotel['name'] ?></td>
            <td><?= $hotel['description'] ?></td>
            <td><?= $hotel['parking'] ?></td>
            <td><?= $hotel['vote'] ?></td>
            <td><?= $hotel['distance_to_center'] ?></td>
            </tr>
            <? endforeach; ?>
        </tbody>
    </table>
    
</body>
</html>