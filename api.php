<?php
    header('Content-Type: application/json');
    include './db/data.php';

    echo json_encode($arr_discs);