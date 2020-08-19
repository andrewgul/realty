<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить объявление</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.min.css" integrity="sha512-ADrqa2PY1TZtb/MoLZIZu/Z/LlPaWQeDMBV73EMwjGam43/JJ5fqW38Rq8LJOVGCDfrJeOMS3Q/wRUVzW5DkjQ==" crossorigin="anonymous" />
</head>
<body>
    <div class="container">
        <h2 class="title">Добавить новое объявление</h2>
        <form enctype="multipart/form-data" action="php/add_new_realty.php" method="POST">
            <div class="columns">
                <div class="column">
                    <div class="field">
                        <label class="label">Название</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Дом, квартира, комната..." name="title">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Описание</label>
                        <div class="control">
                            <textarea class="textarea" placeholder="Расположена в зеленом районе, рядом с метро..." name="descr"></textarea>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Адрес</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="г. Москва, ул. Пушкина..." name="addr">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Координаты</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="55.793224, 37.80..." name="coord">
                        </div>
                    </div>
                </div>
                <div class="column">
                <label class="label">Фото (до 3-ех штук)</label>
                    <div class="field">
                        <div class="file">
                            <label class="file-label">
                                <input class="file-input" type="file" name="photo[]">
                                <span class="file-cta">
                                    <span class="file-icon">
                                        <i class="fas fa-upload"></i>
                                    </span>
                                    <span class="file-label">
                                    Выберите фото...
                                    </span>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="file">
                            <label class="file-label">
                                <input class="file-input" type="file" name="photo[]">
                                <span class="file-cta">
                                    <span class="file-icon">
                                        <i class="fas fa-upload"></i>
                                    </span>
                                    <span class="file-label">
                                    Выберите фото...
                                    </span>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="file">
                            <label class="file-label">
                                <input class="file-input" type="file" name="photo[]">
                                <span class="file-cta">
                                    <span class="file-icon">
                                        <i class="fas fa-upload"></i>
                                    </span>
                                    <span class="file-label">
                                    Выберите фото...
                                    </span>
                                </span>
                            </label>
                        </div>
                    </div>
                    <label class="label">Параметры</label>
                    <div class="field">
                        <label class="checkbox">
                            <input type="checkbox" name="kids">
                            Возможно проживание с детьми
                        </label>
                    </div>
                    <div class="field">
                        <label class="checkbox">
                            <input type="checkbox" name="pets">
                            Возможно проживание с животными
                        </label>
                    </div>
                    <label class="label">Удобства</label>
                    <div class="field">
                        <label class="checkbox">
                            <input type="checkbox" name="refr">
                            Холодильник
                        </label>
                    </div>
                    <div class="field">
                        <label class="checkbox">
                            <input type="checkbox" name="tv">
                            Телевизор
                        </label>
                    </div>
                    <div class="field">
                        <label class="checkbox">
                            <input type="checkbox" name="balc">
                            Балкон
                        </label>
                    </div>
                    <div class="field">
                        <label class="checkbox">
                            <input type="checkbox" name="wash">
                            Стиральная Машина
                        </label>
                    </div>
                </div>
            </div>
            <button class="button is-large is-success">Добавить</button>
        </form>
    </div>
</body>
</html>