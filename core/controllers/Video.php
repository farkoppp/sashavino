<?php

if (!class_exists('Controller')) {
    require_once  $_SERVER['DOCUMENT_ROOT'].'/core/Controller.php';
}

class Controllers_Video
    extends Controller {

    /**
     * Основной рабочий метод
     *
     * @return string
     */
    public function run() {
//        print_r($_REQUEST);

//        return "Мы выводим страницу <b>Video<b>";
        require_once($_SERVER['DOCUMENT_ROOT'].'/views/video.php');
        echo get_class($this);
        echo mb_strtolower(str_replace(  "Controllers_","",__CLASS__));
        $db = new PDO('sqlite:db.sqlite');
        $rows = $db->query('SELECT * FROM video');

        while ($row = $rows->fetch())
        {
            // Оператором echo выводим на экран поля таблицы file , title и description

            echo '<iframe width="100"  src='.$row['file'].' frameborder="1" allowfullscreen></iframe>';
            echo 'url: '.$row['file'];
            echo '<br/>';
            echo 'название: '.$row['title'];
            echo '<br/>';
            echo 'описание: '.$row['description'];
            echo '<br/>';
            echo '<br/>';
        }
//        echo $db; 


    }
    public function initialize(array $params = array()) {
        if (empty($params)) {
            $this->redirect('/video/');
        }
        print_r($params);

//        echo "<br/>";
//        echo "<br/>";
//        print_r($_SERVER);
//        echo "<br/>";
//        echo "<br/>";
        return true;
    }

}