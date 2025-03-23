<?php

class Controller {
    public function view($view, $data = []) {
        extract($data);

        //buffer
        require_once "app/views/$view.php";
        $contenido = ob_get_clean();

        require_once "app/views/layout.php";
    }
}