<?php

$data = [
    0=>[
        'Lokaal'=> 1,
        'Tijd'=> '11:00',
        'Student'=> 1048381,
        'Bezetting'=> '4/6'
    ],
    1=>[
        'Lokaal'=> 2,
        'Tijd'=> '13:00',
        'Student'=> 1056832,
        'Bezetting'=> '4/4'
    ]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table>
    <tbody>
       <?php foreach($data as $index=>$study ){?>
    <tr>
        <td><?= $study['Lokaal'] ?></td>
        <td><?= $study['Tijd'] ?></td>
        <td><?= $study['Student'] ?></td>
        <td><?= $study['Bezetting'] ?></td>
    </tr>
    <?php } ?>
    </tbody>

</table>

</body>
</html>
