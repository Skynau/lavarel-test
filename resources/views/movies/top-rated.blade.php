<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top-rated</title>
</head>
<body>
    <h1>50 Top-rated movied</h1>
    <ul>
        <?php foreach ($top50Movies as $movie) : ?>
            <li>
                <?= $movie->name; ?>
                ( <?= $movie->year ?> ) 
                /<?= $movie->rating ?>/
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>