<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
</head>

<body>
    <!-- DATA -->
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
    var_dump($hotels)
    ?>

    <!-- HEADER -->
    <header>
        <h1>HOTELS ARRAY</h1>
    </header>

    <!-- MAIN -->
    <main>
        <div>
            <?php foreach ($hotels as $building) { ?>
                <h4>Building: </h4>
                <ul> 
                    <?php foreach ($building as $key => $value) { ?>
                        <li>
                            <strong><?php echo $key ?>: </strong>
                            <span><?php echo $value ?></span>
                        </li>
                        <hr>
                    <?php } ?>
                </ul>
            <?php } ?>
        </div>
    </main>

</body>

</html>