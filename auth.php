<?php
    session_start();

    if (!empty($_POST['login']) && !empty($_POST['password'])) {
        include "php/db.php";
        $query = "SELECT `login`, `password` FROM `users` WHERE `login`='$_POST[login]'";
        $result = mysqli_query($connect, $query);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            if ($row['password'] = $_POST['password']) {
                $_SESSION['authorized'] = true;
                header("Location: new_realty.php");
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.min.css" integrity="sha512-ADrqa2PY1TZtb/MoLZIZu/Z/LlPaWQeDMBV73EMwjGam43/JJ5fqW38Rq8LJOVGCDfrJeOMS3Q/wRUVzW5DkjQ==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
</head>
<body>
    <div class="container">
        <a href="index.php"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i>&nbsp;Ко всем объявлениям</a>      
        <div class="columns">
            <div class="column is-half is-offset-one-quarter">
            <p class="title">Для продолжения необходима авторизация</p>
                <form action="" method="POST">
                    <div class="field">
                        <label class="label">Логин</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="username" name="login">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Пароль</label>
                        <div class="control">
                            <input class="input" type="password" placeholder="*******" name="password">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <button class="button is-link is-fullwidth">Авторизоваться</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>