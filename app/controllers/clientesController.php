<?php

require_once __DIR__ . "/../models/Clientes.php";

class ClientesController extends Controller{

    private $clientesModel;

    public function __construct(){
        $this -> clientesModel = new Clientes();
    }

    public function index() {
        $clientes = $this -> clientesModel -> getAll();
        $this -> view('clientes/index', ['clientes' => $clientes]);
    }

    public function createCliente(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre    = $_POST['nombre'];
            $direccion = $_POST['direccion'];
            $telefono  = $_POST['telefono'];

            $this->clientesModel->insertCliente($nombre,$direccion,$telefono);

            header("Location: ?url=clientes");
            exit;
        }

        $this -> view('clientes/createCliente');
    }


    public function editarCliente($id){

        $cliente = $this->clientesModel->getId($id);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre    = $_POST['nombre'];
            $direccion = $_POST['direccion'];
            $telefono  = $_POST['telefono'];

            $this->clientesModel->actualizarCliente($nombre, $direccion, $telefono, $id);

            header("Location: ?url=clientes");
            exit;
        }
        
        $this -> view('clientes/editarCliente', ['cliente' => $cliente]);
    }

    public function deleteCliente($id){

        $this->clientesModel->deleteCliente($id);
        
        header("Location: ?url=clientes");
        exit;
    }
}