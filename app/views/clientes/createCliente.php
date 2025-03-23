<a href="?url=clientes"><-</a>
<h3> Clientes </h3>

<form action="?url=clientes/createCliente" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="exampleInputEmail1" value="payaso" name="nombre" aria-describedby="emailHelp">
    </div>
    
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="direccion" aria-describedby="emailHelp">
    </div>
    
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Telefono</label>
        <input type="text" class="form-control" name="telefono" id="exampleInputPassword1">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>