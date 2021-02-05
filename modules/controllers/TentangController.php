<?php
use \modules\controllers\MainController;

class TentangController extends MainController {

    public function index() {

        $this->model('tentang');

        $data = $this->tentang->get();

        if(count($data)) {

            $data = $data[0];
        }

        $this->template('tentang', array('tentang' => $data));
    }
}
?>