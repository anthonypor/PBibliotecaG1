
<table id = "table" class = "table table-striped table-bordered " style="width:100%">
  <thead>
      <tr>
        <th>Login</th>
        <th>Password</th>
        <th>Codigo</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Direccion</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Estatus</th>
        <th>Opciones</th>
      </tr>
  </thead>
  <tbody>
   <?php foreach ($registro as $dat) : ?>      
      <tr>
          <td><?php echo $dat->usuario; ?></td>
          <td><?php echo $dat->password; ?></td> 
          <td><?php echo $dat->usua_codigo; ?></td>
          <td><?php echo $dat->usua_nombres; ?></td>          
          <td><?php echo $dat->usua_apellidos; ?></td> 
          <td><?php echo $dat->usua_direccion; ?></td> 
          <td><?php echo $dat->usua_email; ?></td> 
          <td><?php echo $dat->usua_telefono; ?></td> 
          <td><?php echo $dat->usua_esadmin; ?></td> 

      <td>
        <form method="DELETE" action="<?php echo base_url('usuario/delete/'.$dat->usua_id);?>">
         <a class="btn btn-info btn-xs fas fa-edit" href="<?php echo base_url('usuario/editar/'.$dat->usua_id) ?>"><i class="glyphicon glyphicon-pencil">Editar</i></a>
          <button type="submit" class="btn btn-danger btn-xs fas fa-trash-alt"><i class="glyphicon glyphicon-remove">Eliminar</i></button>
        </form>
      </td>     
      </tr>
   <?php endforeach; ?>
  </tbody>
</table>
<script type="text/javascript">
$(document).ready(function() {
    $('#table').DataTable({
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
<a class="btn btn-primary fas fa-plus-square" href="<?php echo base_url('usuario/crear') ?>"> Crear </a>
