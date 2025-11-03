<?php
    $json_dischi = file_get_contents("dischi.json");
    $dischi = json_decode($json_dischi, true);
    $nuovo_disco = [
        "titolo" => $_POST["titolo_input"] ?? "", 
        "artista" => $_POST["artista_input"] ?? "",
        "url_della_cover" => $_POST["url_image_input"] ?? "",
        "anno_di_pubblicazione" => $_POST["data_input"] ?? "",
        "genere" => $_POST["genere_input"] ?? ""
    ];
    $dischi[] = $nuovo_disco;
    $json_text_updated = json_encode($dischi);
    file_put_contents("./dischi.json", $json_text_updated);
    header("Location: ./index.php");
?>