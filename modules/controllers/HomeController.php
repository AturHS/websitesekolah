<?php

use \modules\controllers\MainController;

class HomeController extends MainController {

    public function index() {

        $this->model('artikel'); // memanggil model artikel

        $data = $this->artikel->get(array(
            'limit' => '0,5'
        )); // mendapatkan data pada model artikel

        $this->template('home', array('artikel' => $data)); // view home yang sudah dimasukkan kedalam template
    }
}
?>
