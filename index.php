<?php
$parkingSpot = $_GET["parkingSpot"];
$ratings = $_GET["ratings"];
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-hotel</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <table id="tabellaHotel">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Parking</th>
            <th>Ratings</th>
            <th>Distance to city center</th>
        </tr>
        <?php
        foreach ($hotels as $hotel) {
            if (($hotel["parking"] == $parkingSpot || $parkingSpot == "all")&&($hotel["vote"]>=$ratings)) {
                echo "<tr>";
                foreach ($hotel as $key => $info) {
                    if ($key == "distance_to_center") {
                        echo "<td>" . $info . " km" . "</td>";
                    } elseif ($key == "parking") {
                        if ($info == true) {
                            echo "<td>Yes</td>";
                        } else {
                            echo "<td>No</td>";
                        }
                    } elseif ($key == "vote") {
                        echo "<td>" . $info . "/5</td>";
                    } else {
                        echo "<td>" . $info . "</td>";
                    }
                }
                echo "</tr>";
            }
        }
        ?>
    </table>

</body>

</html>