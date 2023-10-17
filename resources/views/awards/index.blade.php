<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>List of awards by recipient</h1>
    <h1>Hello, <?=$name?> and <?=$greeting?></h1>
    <ul>
        <?php foreach ($awards as $award) : ?>
            <li>
                <?= $award; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>