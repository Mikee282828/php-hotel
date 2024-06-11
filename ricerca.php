<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="GET">
        <select name="parkingSpot">
            <option value="true">
                Con parcheggio
            </option>
            <option value="">
                Senza parcheggio
            </option>
            <option value="all">
                Qualsiasi
            </option>
        </select>
        <select name="ratings">
            <option value="1">
                MAGGIORE UGUALE DI 1
            </option>
            <option value="2">
                MAGGIORE UGUALE DI 2
            </option>
            <option value="3">
                MAGGIORE UGUALE DI 3
            </option>
            <option value="4">
                MAGGIORE UGUALE DI 4
            </option>
            <option value="5">
                MAGGIORE UGUALE DI 5
            </option>
        </select>
        <input type="submit">
    </form>
</body>

</html>