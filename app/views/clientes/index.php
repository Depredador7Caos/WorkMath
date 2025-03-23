<h3> Clientes </h3>

<a class="btn-primary" href="?url=clientes/createCliente">Agregar</a>

<hr class="line-success">

<div class="conatiner-tabla">
    <table>
        <thead>
            <tr>
                <th>nombre</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>id</th>
                <th>id</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($clientes as $cliente): ?>
                <tr>
                    <td><?= $cliente['nombre']?></td>
                    <td><?= $cliente['direccion']?></td>
                    <td><?= $cliente['telefono']?></td>
                    <td><a class="btn-warning" href="?url=clientes/editarCliente/<?= $cliente['id']?>">Editar</a></td>
                    <td><a class="btn-danger" href="?url=clientes/deleteCliente/<?= $cliente['id']?>">Eliminar</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

