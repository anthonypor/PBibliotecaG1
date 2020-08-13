
<form method="post" action="<?php echo base_url('usuario/update/'.$us->usua_id);?>">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Login</label>
                <div class="col-md-9">
                    <input type="text" name="usuario" class="form-control" value="<?php echo $us->usuario; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Password</label>
                <div class="col-md-9">
                    <input type="text" name="password" class="form-control" value="<?php echo $us->password; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Codigo</label>
                <div class="col-md-9">
                    <input type="text" name="usua_codigo" class="form-control" value="<?php echo $us->usua_codigo; ?>">
                </div>
            </div>
        </div>

        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Nuevo nombre del usuario</label>
                <div class="col-md-9">
                    <input type="text" name="usua_nombres" class="form-control" value="<?php echo $us->usua_nombres; ?>">
                </div>
            </div>
        </div>

        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Nuevo apellido del usuario</label>
                <div class="col-md-9">
                    <input type="text" name="usua_apellidos" class="form-control" value="<?php echo $us->usua_apellidos; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Direccion</label>
                <div class="col-md-9">
                    <input type="text" name="usua_direccion" class="form-control" value="<?php echo $us->usua_direccion; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Correo</label>
                <div class="col-md-9">
                    <input type="text" name="usua_email" class="form-control" value="<?php echo $us->usua_email; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Telefono o celular</label>
                <div class="col-md-9">
                    <input type="text" name="usua_telefono" class="form-control" value="<?php echo $us->usua_telefono; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Estatus</label>
                <div class="col-md-9">
                    <input type="text" name="usua_esadmin" class="form-control" value="<?php echo $us->usua_esadmin; ?>">
                </div>
            </div>
        </div>

        <div class="col-md-8 col-md-offset-2 pull-right">
            <input type="submit" name="Save" class="btn btn-primary btn-xs fas fa-edit">
        </div>
    </div>
    
</form>
</div>