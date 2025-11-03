<?php
    $json_dischi = file_get_contents("dischi.json");
    $dischi = json_decode($json_dischi, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Dischi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Dischi</h1>
    
    <div>
        <ul>
            <?php
                var_dump($dischi);
            ?>
        </ul>
    </div>
</body>
</html>