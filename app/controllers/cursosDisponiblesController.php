<?php

class CursosDisponiblesController extends Controller{
    public function index() {
        $this -> view('cursosDisponibles/index', ['mensaje' => 'desde opcionesController!']);
    }   
}