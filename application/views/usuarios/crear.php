
<h1>Informacion del usuario</h1>
<form method="post" action="<?php echo base_url('usuario/guardar') ?>">
<div class="form-group">
    <label>Login</label>
    <input type="text" class="form-control" name="usua_login" >
    
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control" name="usua_password" >
    
  </div>
  <div class="form-group">
    <label>Codigo</label>
    <input type="text" class="form-control" name="usua_codigo" >
    
  </div>
  <div class="form-group">
    <label>Nombre del usuario</label>
    <input type="text" class="form-control" name="usua_nombres" >
    
  </div>
  <div class="form-group">
    <label>Apellido del usuario</label>
    <input type="text" class="form-control" name="usua_apellidos" >
    
  </div>
  <div class="form-group">
    <label>Dirección</label>
    <input type="text" class="form-control" name="usua_direccion" >
    
  </div>
  <div class="form-group">
    <label>Correo</label>
    <input type="text" class="form-control" name="usua_email" >
    
  </div>
  <div class="form-group">
    <label>Teléfono o celular</label>
    <input type="text" class="form-control" name="usua_telefono" >
    
  </div>
  <div class="form-group">
    <label>Estatus</label>
    <input type="text" class="form-control" name="usua_esadmin" >
    
  </div>
<p>
<input type="submit" value="Guardar" class="btn btn-primary">
</p>

</form>