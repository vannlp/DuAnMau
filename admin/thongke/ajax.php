<?php
require_once '../../global.php';
require_once URL_MODEL.'ThongKe.php';


$data = getThongKeHH();

echo json_encode($data);

?>