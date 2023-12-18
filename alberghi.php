<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
    <title>Document</title>
</head>

<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<body>

<?php foreach ($hotels as $hotel) { ?>
<p>
    <?php echo "Titolo: <b>" . $hotel['name'] . "</b>" . "<br>" ?>
    <?php echo "Descrizione: <b>" . $hotel['description'] . "</b>" . "<br>" ?>
    <?php echo "Parcheggio: <b>" . $hotel['parking'] . "</b>" . "<br>" ?>
    <?php echo "Vote: <b>" . $hotel['vote'] . "</b>" . "<br>" ?>
    <?php echo "Distanza dal centro: <b>" . $hotel['distance_to_center'] . " km" . "</b>" . "<br>" ?>
</p>
<?php } ?>



<table class="table">
        <thead>
            <tr>
                <th class="pt-4" scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Parcheggio</th>
                <th scope="col">Vote</th>
                <th scope="col">Distanza dal centro</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hotels as $index => $hotel) { ?>
                <tr>
                    <th scope="row"><?php echo $index + 1; ?></th>
                    <td><?php echo $hotel['name']; ?></td>
                    <td><?php echo $hotel['description']; ?></td>
                    <td><?php echo $hotel['parking'] ? 'Sì' : 'No'; ?></td>
                    <td><?php echo $hotel['vote']; ?></td>
                    <td><?php echo $hotel['distance_to_center'] . " km"; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>