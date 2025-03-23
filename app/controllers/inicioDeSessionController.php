<?php

class InicioDeSessionController extends Controller{
    public function index(){
        $this -> view("inicioDeSession/index", [""]);
    }
}