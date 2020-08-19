<?php
include "db.php";

if (isset($_GET['id'])) {
    $query = "SELECT * FROM `realty` WHERE id='$_GET[id]'";

    $result = mysqli_query($connect, $query);

    // Проверка на то, что есть заявка с указанными айди
    if ($result->num_rows) {
        $realty = mysqli_fetch_assoc($result);

        $photos = [$realty['ph1'], $realty['ph2'], $realty['ph3']];
    } else {
        header("Location: index.php");
    }
} else {
    header("Location: index.php");
}

