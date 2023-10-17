<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Top 50 video games</h1>
        <ul>
            <?php foreach ($top50VideoGames as $games) : ?>
                <li>
                    <?= $games->name; ?>
                </li>
            <?php endforeach; ?>
        </ul>
</body>
</html>