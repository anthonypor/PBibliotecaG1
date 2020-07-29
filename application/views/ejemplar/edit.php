<div class="container">
<form method="post" action="<?php echo base_url('ejemplar/update/'.$ejem->ejem_id);?>">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Titulo</label>
                <div class="col-md-9">
                    <input type="text" name="ejem_titulo" class="form-control" value="<?php echo $ejem->ejem_titulo; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Editorial</label>
                <div class="col-md-9">
                    <input type="text" name="ejem_editorial" class="form-control" value="<?php echo $ejem->ejem_editorial; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Paginas</label>
                <div class="col-md-9">
                    <input type="text" name="ejem_paginas" class="form-control" value="<?php echo $ejem->ejem_paginas; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Isbn</label>
                <div class="col-md-9">
                    <input type="text" name="ejem_isbn" class="form-control" value="<?php echo $ejem->ejem_isbn; ?>">
                </div>
            </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Idioma</label>
                <div class="col-md-9">
                    <input type="text" name="ejem_idioma" class="form-control" value="<?php echo $ejem->ejem_idioma; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Portada</label>
                <div class="col-md-9">
                    <input type="text" name="ejem_portada" class="form-control" value="<?php echo $ejem->ejem_portada; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Digital</label>
                <div class="col-md-9">
                    <input type="text" name="ejem_digital" class="form-control" value="<?php echo $ejem->ejem_digital; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Audio</label>
                <div class="col-md-9">
                    <input type="text" name="ejem_audio" class="form-control" value="<?php echo $ejem->ejem_audio; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Resumen</label>
                <div class="col-md-9">
                    <input type="text" name="ejem_resumen" class="form-control" value="<?php echo $ejem->ejem_resumen; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Tipo</label>
                <div class="col-md-9">
                    <input type="text" name="ejem_tipo_id" class="form-control" value="<?php echo $ejem->ejem_tipo_id; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Categoria</label>
                <div class="col-md-9">
                    <input type="text" name="ejem_cate_id" class="form-control" value="<?php echo $ejem->ejem_cate_id; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Valoracion</label>
                <div class="col-md-9">
                    <input type="text" name="ejem_valoracion" class="form-control" value="<?php echo $ejem->ejem_valoracion; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Año</label>
                <div class="col-md-9">
                    <input type="text" name="ejem_anio" class="form-control" value="<?php echo $ejem->ejem_anio; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Nprestamos</label>
                <div class="col-md-9">
                    <input type="text" name="ejem_nprestamos" class="form-control" value="<?php echo $ejem->ejem_nprestamos; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2 pull-right">
            <input type="submit" name="Save" class="btn btn-primary btn-xs fas fa-edit">
        </div>
    </div>
    
</form>
</div>