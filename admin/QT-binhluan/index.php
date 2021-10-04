<?php
if (isset($_GET['url'])) {
    $url = $_GET['url'];
    if ($url == 'tong-hop') {
        $page = 'tong-hop-bl.php';
    } else if ($url == 'chi-tiet') {
        $page = 'chi-tiet-bl.php';
    }
} else {
    $page = 'tong-hop-bl.php';
}
require_once "../layout.php";
