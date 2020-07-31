<table class="table table-striped table-hover ">
  <thead>
      <tr>
          <th>ID</th>
          <th>Categorias</th>
          <th>Opciones</th>
      </tr>
  </thead>
  <tbody>
   <?php foreach ($registros as $reg) : ?>      
      <tr>
          <td><?php echo $reg->cate_nombre; ?></td>

      <td>
        <form method="DELETE" action="<?php echo base_url('categoria/delete/'.$reg->cate_id);?>">
         <a class="btn btn-success btn-xs fas fa-edit" href="<?php echo base_url('categoria/edit/'.$reg->cate_id) ?>"><i class="glyphicon glyphicon-pencil">Editar</i></a>
          <button type="submit" class="btn btn-danger btn-xs "><i class="glyphicon glyphicon-remove">Eliminar</i></button>
        </form>
      </td>     
      </tr>
   <?php endforeach; ?>
  </tbody>
</table>