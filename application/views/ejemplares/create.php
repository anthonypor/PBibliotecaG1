
<form method="post" action="<?php echo base_url('ejemplarCreate');?>">
<div class="row">
    <div class="col-lg-12">                     
            <div class="pull-right">
               <a class="btn btn-primary fas fa-plus-square" href="<?php echo base_url('ejemplar/create') ?>"> Create New Product</a>
            </div>
     </div>
</div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Titulo del Libro</label>
                <div class="col-md-9">
                    <input type="text" name="ejem_titulo" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Editorial</label>
                <div class="col-md-9">
                    <input type="text" name="ejem_editorial" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Paginas</label>
                <div class="col-md-9">
                    <input type="text" name="ejem_paginas" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Isnb</label>
                <div class="col-md-9">
                    <input type="text" name="ejem_isbn" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Idioma</label>
                <div class="col-md-9">
                    <input type="text" name="ejem_idioma" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Portada</label>
                <div class="col-md-9">
                    <input type="text" name="ejem_portada" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Digital</label>
                <div class="col-md-9">
                    <input type="text" name="ejem_digital" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Audio</label>
                <div class="col-md-9">
                    <input type="text" name="ejem_audio" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Resumen</label>
                <div class="col-md-9">
                    <input type="text" name="ejem_resumen" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Tipo</label>
                <div class="col-md-9">
                    <input type="text" name="ejem_tipo_id" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Categoria</label>
                <div class="col-md-9">
                    <input type="text" name="ejem_cate_id" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Valoracion</label>
                <div class="col-md-9">
                    <input type="text" name="ejem_valoracion" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Año</label>
                <div class="col-md-9">
                    <input type="text" name="ejem_anio" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Nprestamos</label>
                <div class="col-md-9">
                    <input type="text" name="ejem_nprestamos" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2 pull-right">
            <input type="submit" name="Save" class="btn btn-primary">
        </div>
    </div>
    
</form>
</div>
