<?php
    $json_dischi = file_get_contents("dischi.json");
    $dischi = json_decode($json_dischi, true);
    var_dump($dischi);
?>