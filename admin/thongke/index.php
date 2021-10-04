<?php

if (isset($_GET['url'])) {
    $url = $_GET['url'];
    if ($url == 'thong-ke') {
        $page = 'thong-ke.php';
    } else if ($url == 'bieu-do') {
        $page = 'bieu-do.php';
    } else {
        $page = '404.php';
    }
} else {
    $page = 'thong-ke.php';
}
require_once "../layout.php";
