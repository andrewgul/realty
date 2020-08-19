<?php
session_start();

include "php/get_realty_info.php"
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$realty['title']?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.min.css" integrity="sha512-ADrqa2PY1TZtb/MoLZIZu/Z/LlPaWQeDMBV73EMwjGam43/JJ5fqW38Rq8LJOVGCDfrJeOMS3Q/wRUVzW5DkjQ==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
</head>
<body>
    <div class="container">
        <a href="index.php"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i>&nbsp;Ко всем объявлениям</a>
        <p class="title"><?=$realty['title']?></p>
        <p class="subtitle"><?=$realty['addr']?> (<?=$realty['coord']?>)</p>
        <hr>
        <div class="columns">
            <div class="column">
                <div class="field">
                <div class="label">Описание</div>
                <p><?=$realty['descr']?></p>
                </div>
                <div class="label">Дополнительная информация</div>
                <p><span class="tag <?=$realty['pets'] ? "is-success" : "is-danger" ?>"><i class="fa fa-paw" aria-hidden="true"></i>&nbsp С животными <?=$realty['pets'] ? "можно" : "нельзя"?></span></p>
                <p><span class="tag <?=$realty['kids'] ? "is-success" : "is-danger" ?>"><i class="fa fa-child" aria-hidden="true"></i>&nbsp С детьми <?=$realty['kids'] ? "можно" : "нельзя"?></span></p>
                <div class="field">
                <div class="label">Удобства</div>
                <?php
                if (!$realty['refr'] && !$realty['tv'] && !$realty['balc'] && !$realty['wash']) {
                ?>
                <p>Никаких удобств не предусмотрено</p>
                <?php
                } else {
                ?>
                <?=$realty['refr'] ? "<p><i class='fa fa-snowflake-o' aria-hidden='true'></i>&nbsp Холодильник</p>" : ""?>    
                <?=$realty['tv'] ? "<p><i class='fa fa-television' aria-hidden='true'></i>&nbsp Телевизор</p>" : ""?>    
                <?=$realty['balc'] ? "<p><i class='fa fa-tree' aria-hidden='true'></i>&nbsp Балкон</p>" : ""?>    
                <?=$realty['wash'] ? "<p><i class='fa fa-television' aria-hidden='true'></i>&nbsp Стиральная машина</p>" : ""?>    
                <?php
                }
                ?>
                </div>
            </div>
            <div class="column">
                <?php
                if ($photos[0] || $photos[1] || $photos[2]) {
                ?>
                <div class="label">Фотографии</div>
                <?php
                    foreach ($photos as $photo) {
                        if ($photo != NULL) {
                ?>
                <figure class="image">
                    <img src="<?=substr($photo, 3)?>">
                </figure>
                <?php
                        }
                    }
                }
                ?>
            </div> 
    </div>
</body>
</html>