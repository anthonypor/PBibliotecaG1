<table class="table table-striped table-hover ">
  <thead>
      <tr>
          <
          <th>Categorias</th>
          <th>Opciones</th>
      </tr>
  </thead>
  <tbody>
   <?php foreach ($register as $cot) : ?>      
      <tr>
          <td><?php echo $cot->cate_nombre; ?></td>

      <td>
        <form method="DELETE" action="<?php echo base_url('categoria/delete/'.$cot->cate_id);?>">
         <a class="btn btn-success btn-xs fas fa-edit" href="<?php echo base_url('categoria/edit/'.$cot->cate_id) ?>"><i class="glyphicon glyphicon-pencil">Editar</i></a>
          <button type="submit" class="btn btn-danger btn-xs "><i class="glyphicon glyphicon-remove">Eliminar</i></button>
        </form>
      </td>     
      </tr>
   <?php endforeach; ?>
  </tbody>
</table>
<a class="btn btn-primary fas fa-plus-square" href="<?php echo base_url('categoria/create') ?>"> Crear </a>
