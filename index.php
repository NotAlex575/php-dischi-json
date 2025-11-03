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
        <br><br>
        <h2>Nuovo disco</h2>
        <form action="server.php" method="post" class="container my-5 p-4 border rounded shadow-sm bg-light">
            <h4 class="mb-4 text-center">Aggiungi un nuovo disco</h4>

            <div class="row g-3">
                <div class="col-12">
                    <label for="url_image_input" class="form-label">Link dell'immagine</label>
                    <input type="text" class="form-control" id="url_image_input" name="url_image_input" placeholder="https://...">
                </div>

                <div class="col-12">
                    <label for="titolo_input" class="form-label">Titolo Album</label>
                    <input type="text" class="form-control" id="titolo_input" name="titolo_input" placeholder="Bohemian Rhapsody">
                </div>

                <div class="col-md-6">
                    <label for="artista_input" class="form-label">Nome artista</label>
                    <input type="text" class="form-control" id="artista_input" name="artista_input" placeholder="Queen">
                </div>

                <div class="col-md-6">
                    <label for="data_input" class="form-label">Anno pubblicazione</label>
                    <input type="number" min="1000" max="9999" class="form-control" id="data_input" name="data_input">
                </div>

                <div class="col-12">
                    <label for="genere_input" class="form-label">Genere</label>
                    <input type="text" class="form-control" id="genere_input" name="genere_input" placeholder="Rock, Pop...">
                </div>

                <div class="col-12 text-center mt-4">
                    <button type="submit" class="btn btn-primary px-5">Invia</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>