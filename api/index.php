<?php
    include __DIR__ . '/../db/data.php';

    $genre = strtolower($_GET['search'] ?? '');
    
    

    if ($genre) {
        $arr_results = [];
        foreach ($arr_dischi as $disco) {
           if (strtolower($disco['genre']) == $genre){
            $arr_results[] = $disco;
           }
        }

    } else {
        $arr_results = $arr_dischi;
    }

    header('Content-Type: application/json');
    
    echo json_encode($arr_results);