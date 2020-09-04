
<form method="post" action="<?php echo base_url('categoria/guardar') ?>">

<div class="form-group">
    <label>Categoria</label>
    <input type="text" class="form-control" name="cate_nombre">
    
  </div>
  <?php echo form_error('cate_nombre'); ?>
<p>
<input type="submit" value="Guardar" class="btn btn-primary">
</p>

</form>