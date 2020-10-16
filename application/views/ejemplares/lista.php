<div class="table-responsive">
<table id = "book-table" class = "table table-striped table-bordered " style="width:100%">
  <thead>
      <tr>
          <th style="width: 5%;background-color:#6B6C73;color: white;">Titulo</th>
          <th style="width: 5%;background-color:#6B6C73;color: white;">Editorial</th>
      <th style="width: 5%;background-color:#6B6C73;color: white;">Paginas</th>
      <th style="width: 5%;background-color:#6B6C73;color: white;">Idioma</th>
      <th style="width: 5%;background-color:#6B6C73;color: white;">Portada</th>
      <th style="width: 5%;background-color:#6B6C73;color: white;">Resumen</th>
      <th style="width: 5%;background-color:#6B6C73;color: white;">Categoria</th>
      <th style="width: 5%;background-color:#6B6C73;color: white;">Año</th>
      <th style="width: 5%;background-color:#6B6C73;color: white;">Opciones</th>
      </tr>
  </thead>
  <tbody>
   <?php foreach ($rows as $row) : ?>      
      <tr>
          <td><?php echo $row->ejem_titulo; ?></td>
          <td><?php echo $row->ejem_editorial; ?></td> 
          <td><?php echo $row->ejem_paginas; ?></td>
          <td><?php echo $row->ejem_idioma; ?></td>   
          <td><img src="<?php echo base_url('uploads/'.$row->ejem_audio); ?>" width="130"  ></td>        
          <td><?php echo $row->ejem_resumen; ?></td>  
          <td><?php echo $row->cate_nombre; ?></td> 
          <td><?php echo $row->ejem_anio; ?></td> 
      <td>
        <form method="DELETE" action="<?php echo base_url('ejemplar/delete/'.$row->ejem_id);?>">
         <a class="btn btn-info btn-xs fas fa-edit" href="<?php echo base_url('ejemplar/edit/'.$row->ejem_id) ?>"><i class="glyphicon glyphicon-pencil">Editar</i></a>
          <button type="submit" class="btn btn-danger btn-xs fas fa-trash-alt"><i class="glyphicon glyphicon-remove">Eliminar</i></button>
        </form>
      </td>     
      </tr>
   <?php endforeach; ?>
  </tbody>
</table>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $('#book-table').DataTable({
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
<div class="form-row text-center">
    <div class="col-lg-12">                     
            <div class="pull-right">
               <a class="btn btn-primary fas fa-plus-square" href="<?php echo base_url('ejemplar/create') ?>"> Crear </a>
            </div>
     </div>
</div>
<hr>
<div class="form-row text-center">
    <div class="col-lg-12">                     
            <div class="pull-right">
               <a class="btn btn-primary fas fa-print" href="<?php echo base_url('reportes/index') ?>"> Imprimir </a>
            </div>
     </div>
</div>
<hr><hr>
