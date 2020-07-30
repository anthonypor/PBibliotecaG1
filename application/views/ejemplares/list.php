
<div class="row">
    <div class="col-lg-12">                     
            <div class="pull-right">
               <a class="btn btn-primary fas fa-plus-square" href="<?php echo base_url('ejemplares/create') ?>"> Create New Product</a>
            </div>
     </div>
</div>
<div class="table-responsive">
<table class="table table-striped table-dark ">
  <thead>
      <tr>
          <th>Titulo</th>
          <th>Editorial</th>
      <th>Paginas</th>
          <th>Isnb</th>
      <th>Idioma</th>
      <th>Portada</th>
      <th>Digital</th>
      <th>Audio</th>
      <th>Resumen</th>
      <th>Tipo</th>
      <th>Categoria</th>
      <th>Valoracion</th>
      <th>Año</th>
      <th>Nprestamos</th>
      <th>Opciones</th>
      </tr>
  </thead>
  <tbody>
   <?php foreach ($data as $d) { ?>      
      <tr>
          <td><?php echo $d->ejem_titulo; ?></td>
          <td><?php echo $d->ejem_editorial; ?></td> 
          <td><?php echo $d->ejem_paginas; ?></td>
          <td><?php echo $d->ejem_isbn; ?></td>
          <td><?php echo $d->ejem_idioma; ?></td>
          <td><?php echo $d->ejem_portada; ?></td> 
          <td><?php echo $d->ejem_digital; ?></td>          
          <td><?php echo $d->ejem_audio; ?></td> 
          <td><?php echo $d->ejem_resumen; ?></td> 
          <td><?php echo $d->ejem_tipo_id; ?></td> 
          <td><?php echo $d->ejem_cate_id; ?></td> 
          <td><?php echo $d->ejem_valoracion; ?></td> 
          <td><?php echo $d->ejem_anio; ?></td> 
          <td><?php echo $d->ejem_nprestamos; ?></td> 
      <td>
        <form method="DELETE" action="<?php echo base_url('ejemplar/delete/'.$d->ejem_id);?>">
         <a class="btn btn-info btn-xs fas fa-edit" href="<?php echo base_url('ejemplar/edit/'.$d->ejem_id) ?>"><i class="glyphicon glyphicon-pencil">Editar</i></a>
          <button type="submit" class="btn btn-danger btn-xs fas fa-trash-alt"><i class="glyphicon glyphicon-remove">Eliminar</i></button>
        </form>
      </td>     
      </tr>
      <?php } ?>
  </tbody>
</table>
</div>