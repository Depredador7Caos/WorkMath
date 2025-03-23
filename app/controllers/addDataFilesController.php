<?php

class AddDataFilesController extends Controller {
    public function index(){
        $this->view('addDataFiles/addDataFiles', ['mensaje', "nueva vista"]);
    }
}