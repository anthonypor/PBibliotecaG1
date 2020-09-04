
<form method="post" action="<?php echo base_url('categoria/update/'.@$cat->cate_id);?>">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Categoría</label>
                <div class="col-md-9">
                    <input type="text" name="cate_nombre" class="form-control" value="<?php echo @$cat->cate_nombre; ?>">
                    <?php echo form_error('cate_nombre', '<div class="error text-danger">', '</div>'); ?>
                </div>
            </div>
        </div>
        
        <div class="col-md-8 col-md-offset-2 pull-right">
            <input type="submit" name="Save" class="btn btn-primary btn-xs fas fa-edit">
        </div>
    </div>
    
</form>
</div>