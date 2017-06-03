<?php
//print_r(dirname(__DIR__));
if (!class_exists('Controller')) {
    require_once $_SERVER['DOCUMENT_ROOT'].'/core/Controller.php';
}



class Controllers_Home extends Controller {

    /**
     * Основной рабочий метод
     *
     * @return string
     */
    public function run() {
        require_once($_SERVER['DOCUMENT_ROOT'].'/views/header.php');
        require_once($_SERVER['DOCUMENT_ROOT'].'/views/home.php');
        require_once($_SERVER['DOCUMENT_ROOT'].'/views/footer.php');


    }
    public function initialize(array $params = array()) {
        if (!empty($_REQUEST['url_param'])) {
            $this->redirect('/');
        }

        return true;
    }

}