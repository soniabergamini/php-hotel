<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- DATA -->
    <?php
    $parking = $_GET["formParking"];
    $vote = $_GET["formVote"];
    $hotelsView = [];
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

    // Populates a filtered array based on user choices
    if ($parking == "onlyPark") {
        foreach ($hotels as $building) {
            if ($building["parking"]=="1" && $building["vote"] >= $vote) {
                $hotelsView[] = $building;
            }
        };
    } else {
        foreach ($hotels as $building) {
            if ($building["vote"] >= $vote) {
                $hotelsView[] = $building;
            }
        }
    }
    
    ?>

    <!-- HEADER -->
    <header>
        <h1 class="text-3xl font-bold text-center text-green-600">HOTELS ARRAY</h1>
    </header>

    <!-- MAIN -->
    <main>
        <!-- Hotels printed in an unordered list -->
        <!-- <div class="box-content	m-auto px-5">
            <?php // foreach ($hotels as $building) { ?>
                <h4 class="box-content m-auto pt-4"><mark>Building:</mark></h4>
                <ul class="box-content m-auto list-disc list-inside">
                    <?php // foreach ($building as $key => $value) { ?>
                        <li class="box-content m-auto p-1">
                            <strong><?php //echo $key ?>: </strong>
                            <span><?php// echo $value ?></span>
                        </li>
                        <hr>
                    <?php// } ?>
                </ul>
            <?php//} ?>
        </div> -->

        <!-- Hotels printed in Tailwind Table with Filters -->
        <div class="flex justify-center my-10">
            <table class="table-fixed">

                <!-- Table indexes -->
                <thead class="bg-green-600 text-white">
                    <tr>
                        <?php foreach ($hotels[0] as $key => $value) { ?>
                            <th class="py-2 border px-5"> <?php echo strtoupper(str_replace("_", " ", $key)) ?></th>
                        <?php } ?>
                    </tr>
                </thead>

                <!-- Table data -->
                <tbody>
                    <?php foreach ($hotelsView as $building) { ?>
                        <tr>
                            <?php foreach ($building as $key => $data) { ?>
                                <td class="border px-7 py-2 text-center">
                                    <?php
                                    // Manage the true/false of parking key
                                    if ($key == "parking" && $data == "1") {
                                        echo "Present";
                                    } elseif ($key == "parking" && $data == "") {
                                        echo "Absent";
                                    } else {
                                        echo $data;
                                    }
                                    ?>
                                </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>

    </main>

</body>

</html>