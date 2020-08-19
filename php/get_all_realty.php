<?php
include "db.php";

$query = "SELECT `id`, `title`, `descr`, `addr`, `coord`, `ph1`, `ph2`, `ph3` FROM `realty`";

$result = mysqli_query($connect, $query);

$realty_all = [];
while ($row = mysqli_fetch_assoc($result)) {
    $realty_all[] = $row;
}