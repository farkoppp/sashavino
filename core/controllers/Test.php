<?php

if (!class_exists('Controller')) {
    require_once dirname(dirname(__FILE__)) . '/Controller.php';
}

class Controllers_Test extends Controller {

    /**
     * Основной рабочий метод
     *
     * @return string
     */
    public function run() {
        print_r($_REQUEST);

        return "Мы выводим страницу <b>Test<b>";
    }
    public function initialize(array $params = array()) {
        if (empty($params)) {
            $this->redirect('/test/');
        }
        print_r($params);
        return true;
    }

}