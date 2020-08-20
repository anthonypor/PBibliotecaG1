
<h1>Informacion del usuario</h1>
<form method="post" class="was-validated" action="<?php echo base_url('usuario/guardar') ?>">
  <div class="form-group">
    <label for="usuario">Login</label>
      <input type="text" class="form-control" id="usuario" placeholder="Login" name="usuario" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Por favor rellene este campo.</div>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
      <input type="text" class="form-control" id="password" placeholder="Password" name="password" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Por favor rellene este campo.</div>
  </div>
  <div class="form-group">
    <label for="usua_codigo">Codigo</label>
      <input type="text" class="form-control" id="usua_codigo" placeholder="Codigo" name="usua_codigo" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Por favor rellene este campo.</div>
  </div>
  <div class="form-group">
    <label for="usua_nombres">Nombre del usuario</label>
      <input type="text" class="form-control" id="usua_nombres" placeholder="Nombre del usuario" name="usua_nombres" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Por favor rellene este campo.</div>
  </div>
  <div class="form-group">
    <label for="usua_apellidos">Apellido del usuario</label>
      <input type="text" class="form-control" id="usua_apellidos" placeholder="Apellido del usuario" name="usua_apellidos" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Por favor rellene este campo.</div>
  </div>
  <div class="form-group">
    <label for="usua_direccion">Dirección</label>
      <input type="text" class="form-control" id="usua_direccion" placeholder="Dirección" name="usua_direccion" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Por favor rellene este campo.</div>
  </div>
  <div class="form-group">
    <label for="usua_email">Correo</label>
      <input type="text" class="form-control" id="usua_email" placeholder="Correo" name="usua_email" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Por favor rellene este campo.</div>
  </div>
  <div class="form-group">
    <label for="usua_telefono">Teléfono o celular</label>
      <input type="text" class="form-control" id="usua_telefono" placeholder="Teléfono o celular" name="usua_telefono" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Por favor rellene este campo.</div>
  </div>
  <div class="form-group">
    <label for="usua_esadmin">Estatus</label>
      <input type="text" class="form-control" id="usua_esadmin" placeholder="Estatus" name="usua_esadmin" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Por favor rellene este campo.</div>
  </div>
<p>

<input type="submit" value="Guardar" class="btn btn-primary">
</p>

</form>