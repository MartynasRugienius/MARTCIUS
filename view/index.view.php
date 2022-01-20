<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <th>Klase</th>
        <th>Kodas</th>
        <th>Vardas</th>
        <th>Pavarde</th>
        <th>Kontroliniu darbu vidurkis</th>
        <th>Duomenu formavimo data</th>
    </tr>
    <tr>
        <?php foreach($students as $class => $student):?>
        <?php foreach($student as $infoItem => $studentInfo):?>
        <tr>
            <?php $avg = array_sum($studentInfo["grades"]) / count($studentInfo["grades"])?>

            <td><?=$class; ?></td>
            <td><?=$infoItem; ?></td>
            <td><?=$studentInfo ['name']; ?></td>
            <td><?=$studentInfo ['surname']; ?></td>
            <td><?=number_format($avg, 1); ?></td>
            <td><?=$studentInfo['date']; ?></td>

        </tr>
        <?php endforeach;?>
        <?php endforeach;?>
    </tr>
</table>

</body>
</html>