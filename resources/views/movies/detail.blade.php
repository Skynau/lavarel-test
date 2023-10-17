<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table>
        <tr>
            <th>
                Name
            </th>
            <th>
                Mins
            </th>
            <th>
                Year
            </th>
            <th>
                Rating
            </th>
            <th>
                Votes
            </th>
        </tr>
        <tr>
            <td>
                <?= $shawshank[0]->name ?>
            </td>
            <td>
                <?= $shawshank[0]->length ?>
            </td>
            <td>
                <?= $shawshank[0]->year ?>
            </td>
            <td>
                <?= $shawshank[0]->rating ?>
            </td>
            <td>
                <?= $shawshank[0]->votes_nr ?>
            </td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <th>
                Name
            </th>
            <th>
                Description
            </th>
        </tr>
        <?php foreach ($cast as $key => $member) : ?>
            <tr>
                <th>
                    <?= $cast[$key]->name ?>
                </th>
                <th>
                    <?= $cast[$key]->description?>
                </th>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>