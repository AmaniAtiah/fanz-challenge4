<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <div class="container">
        <div class="card">
            <h1>Convert from decimal to binary</h1>

            <?php
            include 'convert.php';

            $result = decimalToBinary(10);
            echo '<p>Binary representation for number 10: '. $result. '</p>';

            ?>
        </div>
    </div>
</body>

</html>