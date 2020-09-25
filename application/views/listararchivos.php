
<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">Titulo</th><th>Archivo</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($ejemplares as $row): ?>
        <tr>
            <td><?php echo $row->ejem_titulo?></td>
            <td>
                <audio src="<?php echo base_url('uploads/'.$row->ejem_audio); ?>"preload="none" controls>
                
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>