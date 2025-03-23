<?php

class OpcionesController extends Controller{
    public function index() {
        $this -> view('opciones/opciones', ['mensaje' => 'desde opcionesController!']);
    }   
}