<?php
include "php/get_all_realty.php"
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Объявление <?=$_POST['id']?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.min.css" integrity="sha512-ADrqa2PY1TZtb/MoLZIZu/Z/LlPaWQeDMBV73EMwjGam43/JJ5fqW38Rq8LJOVGCDfrJeOMS3Q/wRUVzW5DkjQ==" crossorigin="anonymous" />
</head>
<body>
    <div class="container">
        <p class="title">Доступные объявления</p>
        <?php
        foreach($realty_all as $r) {
        // Это не очень выглядит, но я пока не придумал, 
        // как сделать по-другому
        $selected_photo = "photos/no_photo.jpg";
        $photos = [$r['ph1'], $r['ph2'], $r['ph3']];
        foreach ($photos as $photo) {
            if ($photo != NULL) {
                $selected_photo = substr($photo, 3);
                break;
            }
        }
        ?>
        <article class="media box">
            <figure class="media-left">
                <p class="image is-64x64">
                    <img src="<?=$selected_photo?>">
                </p>
            </figure>
            <div class="media-content">
                <div class="content">
                <p>
                    <strong><a href="realty.php?id=<?=$r['id']?>"><?=$r['title']?></a></strong>
                    <br>
                    <p></p>
                    <p><b><?=$r['addr']?>(<?=$r['coord']?>)</b></p>
                    <?=$r['descr']?>
                </p>
                </div>
            </div>
        </article>
        <?php
        }
        ?>
    <a href="new_realty.php">Добавить новое объявление (необходима аутентификация)</a>
    </div>
</body>
</html>