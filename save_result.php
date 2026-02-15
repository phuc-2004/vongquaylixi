<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");

$prize = $_POST['prize'];
$time = date("d-m-Y H:i:s");

$data = "Thời gian: $time | Kết quả: $prize\n";

file_put_contents("history.txt", $data, FILE_APPEND);

echo "Saved";
?>
