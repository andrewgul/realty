<?php
include "../php/db.php";

$query = "SELECT `id`, `title`, `descr`, `addr`, `coord` FROM `realty`";
$result = mysqli_query($connect, $query);

$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data);
