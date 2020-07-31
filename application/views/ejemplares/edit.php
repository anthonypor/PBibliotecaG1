
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
                <label class="col-md-3">Idioma</label>
                <div class="col-md-9">
                    <input type="text" name="ejem_idioma" class="form-control" value="<?php echo $ejem->ejem_idioma; ?>">
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
                <label class="col-md-3">Año</label>
                <div class="col-md-9">
                    <input type="text" name="ejem_anio" class="form-control" value="<?php echo $ejem->ejem_anio; ?>">
                </div>
            </div>
        </div>
        
        <div class="col-md-8 col-md-offset-2 pull-right">
            <input type="submit" name="Save" class="btn btn-primary btn-xs fas fa-edit">
        </div>
    </div>
    
</form>
</div>