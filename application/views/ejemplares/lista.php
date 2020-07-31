

<table class="table table-striped table-dark ">
  <thead>
      <tr>
          <th>Titulo</th>
          <th>Editorial</th>
      <th>Paginas</th>
      <th>Idioma</th>
      <th>Audio</th>
      <th>Resumen</th>
      <th>Año</th>
      <th>Opciones</th>
      </tr>
  </thead>
  <tbody>
   <?php foreach ($registros as $reg) : ?>      
      <tr>
          <td><?php echo $reg->ejem_titulo; ?></td>
          <td><?php echo $reg->ejem_editorial; ?></td> 
          <td><?php echo $reg->ejem_paginas; ?></td>
          <td><?php echo $reg->ejem_idioma; ?></td>          
          <td><?php echo $reg->ejem_audio; ?></td> 
          <td><?php echo $reg->ejem_resumen; ?></td> 
          <td><?php echo $reg->ejem_anio; ?></td> 
      <td>
        <form method="DELETE" action="<?php echo base_url('ejemplar/delete/'.$reg->ejem_id);?>">
         <a class="btn btn-info btn-xs fas fa-edit" href="<?php echo base_url('ejemplar/edit/'.$reg->ejem_id) ?>"><i class="glyphicon glyphicon-pencil">Editar</i></a>
          <button type="submit" class="btn btn-danger btn-xs fas fa-trash-alt"><i class="glyphicon glyphicon-remove">Eliminar</i></button>
        </form>
      </td>     
      </tr>
   <?php endforeach; ?>
  </tbody>
</table>
