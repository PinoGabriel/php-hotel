<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
    <title>alberghi</title>
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


    $votoCercato = $_GET['vote'];
    $counter = 1;


?>

<body>

<h2 class="pt-1 pb-2">Hotel trovati in base alla ricerca:</h2>

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
            <?php foreach ($hotels as $hotel) { ?>
            <?php if ( $hotel['vote'] >= $votoCercato) { ?>
                <tr>
                    <th scope="row"><?php echo $counter++; ?></th>
                    <td><?php echo $hotel['name']; ?></td>
                    <td><?php echo $hotel['description']; ?></td>
                    <td><?php echo $hotel['parking'] ? 'Sì' : 'No'; ?></td>
                    <td><?php echo $hotel['vote']; ?></td>
                    <td><?php echo $hotel['distance_to_center'] . " km"; ?></td>
                </tr>
            <?php } ?>
            <?php } ?>
        </tbody>
    </table>


<h2 class="pt-5 pb-2">Milestone 0</h2>

    <?php foreach ($hotels as $hotel) { ?>
<p>
    <?php echo "Titolo: <b>" . $hotel['name'] . "</b>" . "<br>" ?>
    <?php echo "Descrizione: <b>" . $hotel['description'] . "</b>" . "<br>" ?>
    <?php echo "Parcheggio: <b>" . $hotel['parking'] . "</b>" . "<br>" ?>
    <?php echo "Vote: <b>" . $hotel['vote'] . "</b>" . "<br>" ?>
    <?php echo "Distanza dal centro: <b>" . $hotel['distance_to_center'] . " km" . "</b>" . "<br>" ?>
</p>
<?php } ?>
</body>
</html>