<?php
    include_once "./server.php";
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
    
    <div div class="container">
        <div class="row g-4">
        <?php
            foreach($dischi as $disco){
                echo '<div class="col-4 col-md-6 col-sm-12"><div class="card h-100" style="width: 18rem;">';
                echo '<img src = "'. $disco["url_della_cover"] .'">';
                echo '<h5 class="card-title text-center mt-4 mb-4">Titolo: '.$disco["titolo"].'</h5>';
                echo '<p class="card-text mb-2">Artista: '.$disco["artista"].'</p>';
                echo '<p class="card-text mb-2">Anno di pubblicazione: '.$disco["anno_di_pubblicazione"].'</p>';
                echo '<p class="card-text mb-2">Genere: '.$disco["genere"].'</p></div></div>';
            }
        ?>
        </div>
    </div>
</body>
</html>