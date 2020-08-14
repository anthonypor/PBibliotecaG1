

<table class="table table-striped table-dark ">
  <thead>
      <tr>
          <th>Titulo</th>
          <th>Editorial</th>
      <th>Paginas</th>
      <th>Idioma</th>
      <th>Audio</th>
      <th>Resumen</th>
      <th>Tipo</th>
      <th>Categoria</th>
      <th>Año</th>
      <th>Opciones</th>
      </tr>
  </thead>
  <tbody>
   <?php foreach ($rows as $row) : ?>      
      <tr>
          <td><?php echo $row->ejem_titulo; ?></td>
          <td><?php echo $row->ejem_editorial; ?></td> 
          <td><?php echo $row->ejem_paginas; ?></td>
          <td><?php echo $row->ejem_idioma; ?></td>          
          <td><?php echo $row->ejem_audio; ?></td> 
          <td><?php echo $row->ejem_resumen; ?></td> 
          <td><?php echo $row->ejem_tipo_id; ?></td> 
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
<div class="row">
    <div class="col-lg-12">                     
            <div class="pull-right">
               <a class="btn btn-primary fas fa-plus-square" href="<?php echo base_url('ejemplar/create') ?>"> Crear </a>
            </div>
     </div>
</div>