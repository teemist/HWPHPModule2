<?php
require_once 'vendor/autoload.php';
require_once '../config/config.php';

$loader = new Twig\Loader\FilesystemLoader('../template');
$twig = new \Twig\Environment($loader);

// обработка GET запроса и переход на страницу с картинкой в полном размере
if (isset($_GET['pic'])) {
    $template = $twig->load('picture.tmpl');

    $pic = $_GET['pic'];
    echo $template->render(['pic' => $pic]);
} // вывод всех фотографий
else {

    $template = $twig->load('gallery.tmpl');
    // скан папки с картинками
//    $pics = array_diff(scandir('../img/small'), array('..', '.'));


    // Свзяь PDO с БД
    try {
        $dbh = new PDO(DSN, USER, PASS);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    // Получение названий картинок
    $sql = "SELECT filename FROM images";
    $dbpics = $dbh->query($sql);
    // Вывод картинок в шаблон
    $filename = array();
    foreach ($dbpics as $dbpic) {
        array_push($filename, $dbpic['filename']);
    }
    echo $template->render(['pics' => $filename]);
}
