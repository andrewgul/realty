<?php
if (!empty($_POST['title']) && !empty($_POST['descr']) && !empty($_POST['addr']) && !empty($_POST['coord'])) {
    include "db.php";

    // -- Это временно --
    echo "POST Отправлен";

    echo "<pre>";
    var_dump($_FILES['photo']['name']);
    echo "</pre><br />";
    echo sizeof($_FILES['photo']['name']);
    // -- --

    // Загрузка файлов
    // !!! Возможно путь потом придется изменить
    $uploaddir = "../photos/";
    
    // Проверка, есть ли загруженные файлы
    if (!empty($_FILES['photo']['name'][0]) || !empty($_FILES['photo']['name'][1]) || !empty($_FILES['photo']['name'][2])) {

        // Создаем массив, в который будет записываться информация о загруженных файлах
        $upload_info = [];

        // Если файл(-ы) были загружены, перебираем их 
        for ($i = 0; $i < 3; $i++) {

            // Если у файла есть имя
            if (!empty($_FILES['photo']['name'][$i])) {
                
                // Задаем имя файла на сервере
                $uploadfile = $uploaddir . basename($_FILES['photo']['name'][$i]);

                // Перемещаем в указанную ранее директорию
                if (move_uploaded_file($_FILES['photo']['tmp_name'][$i], $uploadfile)) {
                    $upload_info[] = $uploadfile;
                    echo "Файл загружен";
                }
            } else {
                $upload_info[] = NULL;
            }
        }
    } 

    echo "<pre>";
    var_dump($upload_info);
    echo "</pre><br />";

// Над этим подумать... Явно не лучшая реализация
$kids = isset($_POST['kids']) ? 1 : 0;
$pets = isset($_POST['pets']) ? 1 : 0;
$refr = isset($_POST['refr']) ? 1 : 0;
$tv = isset($_POST['tv']) ? 1 : 0;
$balc = isset($_POST['balc']) ? 1 : 0;
$wash = isset($_POST['wash']) ? 1 : 0;

$query = "INSERT INTO realty
                (`id`,
                `title`,
                `descr`,
                `addr`,
                `coord`,
                `ph1`,
                `ph2`,
                `ph3`,
                `kids`,
                `pets`,
                `refr`,
                `tv`,
                `balc`,
                `wash`)
            VALUES
                (NULL,
                '$_POST[title]',
                '$_POST[descr]',
                '$_POST[addr]',
                '$_POST[coord]',
                '$upload_info[0]',
                '$upload_info[1]',
                '$upload_info[2]',
                '$kids',
                '$pets',
                '$refr',
                '$tv',
                '$balc',
                '$wash')";

    if (mysqli_query($connect, $query)) {
        echo "Данные загружены";
        $id = mysqli_insert_id($connect);
        header("Location: ../realty.php?id=$id");
    } else {
        echo "Что-то пошло не так " . mysqli_error($connect);
    }
} else {
    header("Location: ../new_realty.php");
}