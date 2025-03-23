<?php

class Clientes extends Model {

    public function getAll(){
        return $this->db->query("SELECT * FROM clientes")->fetchAll();
    }

    public function getId($id){
        $query = ("SELECT * FROM clientes WHERE id = ?");
        $stmt = $this -> db -> prepare($query);
        $stmt -> execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function insertCliente($nombre,$direccion,$telefono){
        $query = "INSERT INTO clientes (nombre, direccion, telefono) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$nombre,$direccion,$telefono]);
    }
    
    public function actualizarCliente($id, $nombre,$direccion,$telefono){
        $query = "UPDATE clientes SET nombre=?, direccion=?, telefono=? WHERE id = ?";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$id, $nombre,$direccion,$telefono]);
    }

    public function deleteCliente($id){
        $query = "DELETE FROM clientes  WHERE id = ?";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$id]);
    }
}