

<form method="post" class="was-validated" action="<?php echo base_url('usuario/update/'.@$us->usua_id);?>">
<form>
  <div class="row">
    <div class="col">
    <label class="col-md-3">Login</label>
                    <input type="text" name="usuario" class="form-control" value="<?php echo @$us->usuario; ?>" required>
                    <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Por favor rellene este campo.</div>
                        <?php echo '<td><font color="red">'.form_error('usuario').'</font></td>';?>
    </div>
    <div class="col">
    <label class="col-md-3">Password</label>
                    <input type="text" name="password" class="form-control" value="<?php echo @$us->password; ?>" required>
                    <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Por favor rellene este campo.</div>
                        <?php echo '<td><font color="red">'.form_error('password').'</font></td>';?>      
    </div>
  </div>
  <form>
  <div class="row">
    <div class="col">
    <label class="col-md-3">Codigo</label>
                    <input type="text" name="usua_codigo" class="form-control" value="<?php echo @$us->usua_codigo; ?>" required>
                    <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Por favor rellene este campo.</div>
                        <?php echo '<td><font color="red">'.form_error('usua_codigo').'</font></td>';?>
    </div>
    <div class="col">
    <label class="col-md-3">Nombre</label>
                    <input type="text" name="usua_nombres" class="form-control" value="<?php echo @$us->usua_nombres; ?>" required>
                    <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Por favor rellene este campo.</div>
                        <?php echo '<td><font color="red">'.form_error('usua_nombres').'</font></td>';?>
    </div>
  </div>
  <form>
  <div class="row">
    <div class="col">
    <label class="col-md-3">Apellido</label>
                    <input type="text" name="usua_apellidos" class="form-control" value="<?php echo @$us->usua_apellidos; ?>" required>
                    <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Por favor rellene este campo.</div>
                        <?php echo '<td><font color="red">'.form_error('usua_apellidos').'</font></td>';?>
    </div>
    <div class="col">
    <label class="col-md-3">Direccion</label>
                    <input type="text" name="usua_direccion" class="form-control" value="<?php echo @$us->usua_direccion; ?>" required>
                    <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Por favor rellene este campo.</div>
                        <?php echo '<td><font color="red">'.form_error('usua_direccion').'</font></td>';?>
    </div>
  </div>
  <form>
  <div class="row">
    <div class="col">
    <label class="col-md-3">Correo</label>
                    <input type="text" name="usua_email" class="form-control" value="<?php echo @$us->usua_email; ?>" required>
                    <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Por favor rellene este campo.</div>
                        <?php echo '<td><font color="red">'.form_error('usua_email').'</font></td>';?>
    </div>
    <div class="col">
    <label class="col-md-3">Celular</label>
                    <input type="text" name="usua_telefono" class="form-control" value="<?php echo @$us->usua_telefono; ?>" required>
                    <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Por favor rellene este campo.</div>
                        <?php echo '<td><font color="red">'.form_error('usua_telefono').'</font></td>';?>
    </div>
  </div>
  <form>
  <div class="row">
    <div class="col">
    <label class="col-md-3">Estatus</label>
                    <input type="text" name="usua_esadmin" class="form-control" value="<?php echo @$us->usua_esadmin; ?>" required>
                    <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Por favor rellene este campo.</div>
                        <?php echo '<td><font color="red">'.form_error('usua_esadmin').'</font></td>';?>
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name">
    </div>
  </div>
        <div class="col-md-8 col-md-offset-2 pull-right">
            <input type="submit" name="Save" class="btn btn-primary btn-xs fas fa-edit">
        </div>
    </div>
    
</form>
</div>