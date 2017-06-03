<?php

if (!class_exists('Controller')) {
    require_once dirname(dirname(__FILE__)) . '/Controller.php';
}

class Controllers_Photo
    extends Controller {

    /**
     * Основной рабочий метод
     *
     * @return string
     */
    public function run() {
        print_r($_REQUEST);

//        return "Мы выводим страницу <b>Photos<b>";
        require_once('./views/photo.php');



    }
    public function initialize(array $params = array()) {
        if (empty($params)) {
            $this->redirect('/photo/');
        }
        print_r($params);
        return true;
    }

}