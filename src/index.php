<?php
session_start();

if (!isset($_SESSION["timeOpen"])) {
    $_SESSION["timeOpen"] = time();
    echo "Добро пожаловать! Это ваш первый визит.";
} else {
    $res = time() - (int)$_SESSION['timeOpen'];
    echo "Вы зашли на сайт $res секунд назад.";

    //$_SESSION["timeOpen"] = time();
}
?>

<a class="button" href="logout.php">Кнопка выхода с сайта</a>