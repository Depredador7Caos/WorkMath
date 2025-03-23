<a href="?url=clientes"><-</a>
<h3> Modificadon cliente </h3>

<form action="?url=clientes/editarCliente/<?php echo $cliente['id']; ?>" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="nombre" value="<?php echo $cliente['nombre']; ?>">
    </div>
    
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="direccion" value="<?php echo $cliente['direccion']; ?>">
    </div>
    
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Telefono</label>
        <input type="text" class="form-control" name="telefono" value="<?php echo $cliente['telefono']; ?>">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>