<?php

include_once "functions.php";

if (!$isAuth) {
    redirect();
}

//Параметр $_POST работает только при отправке формы, но ссылка где идет вопросительный знак после ссылки - это параметр $_GET
//Пример: https://twitter.com/delete_post.php?id=

if (isset($_GET['id']) && !empty($_GET['id'])) {
    if (!delete_post($_GET['id'])) {
        $_SESSION['error-message'] = 'Во время удаления поста что-то пошло не так :(';
    }
}

redirect('user_posts.php');