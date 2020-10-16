<table id = "tablecat" class = "table table-striped table-bordered " style="width:100%">
  <thead>
      <tr>
          <th style="width: 5%;background-color:#6B6C73;color: white;">Categorias</th>
          <th style="width: 5%;background-color:#6B6C73;color: white;">Opciones</th>
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
<script type="text/javascript">
$(document).ready(function() {
    $('#tablecat').DataTable({
        "Ajax": {
            url : "/get_items",
            type : 'GET',
            responsive: 'true',
            dom: 'Btrtilp',
            buttons: [
               { extend: 'excelHtml5',
                text: '<i class="fas fa-file-excel"></i>',
                titleAttr: 'Exportar a Excel',
                className: 'btn btn-successs'
               },
            ]
        },
    });
});
</script>
<a class="btn btn-primary fas fa-plus-square" href="<?php echo base_url('categoria/create') ?>"> Crear </a>
