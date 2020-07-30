<table border=1>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Usuarios</th>
            <th>Contraseñas</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($usuarios as $row): ?>
        <tr>
            <td><?php echo $row->usua_id; ?></td>
            <td><?php echo $row->usua_nombres; ?></td>
            <td><?php echo $row->usuario; ?></td>
            <td><?php echo $row->password; ?></td>
        </tr>

        <?php endforeach?>
    </tbody>
</table>