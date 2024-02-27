<?php 

    require_once __DIR__ ."./logic.php";

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

<div class="container">

    <form class="card mt-5 p-4" method="GET">
        <select class="form-select col-4" name="vote">
            <option selected value="1">Filter for vote</option>
            <option value="1">1 stella</option>
            <option value="2">2 stelle</option>
            <option value="3">3 stelle</option>
            <option value="4">4 stelle</option>
            <option value="5">5 stelle</option>
        </select>
        <div class="form-check px-4 my-3">
            <input class="form-check-input" type="checkbox" id="parking" name="parking">
            <label class="form-check-label" for="parking">
                Do you need parking?
            </label>
        </div>
        <button type="submit" class="btn btn-primary col-2">Submit</button>
    </form>

    <div class="card mt-5">
        <div class="card-body">
    
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
                    <?php foreach ($filterd_hotels as $hotel): ?>
                    <tr>
                    <td><?= $hotel['name'] ?></td>
                    <td><?= $hotel['description'] ?></td>
                    <td><?= $hotel['parking'] ? 'Yes':'No' ?></td>
                    <td><?= $hotel['vote'] ?></td>
                    <td><?= $hotel['distance_to_center'] ?> km</td>
                    </tr>
                    <? endforeach; ?>
                </tbody>
            </table>
            
        </div>
    </div>

</div>


    
</body>
</html>