<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php echo $error;?>

<?php echo form_open_multipart('Archivos/subir');?>
<p>
<label>Titulo</label>
<input type="text" name="titulo">
</p>

<p>
<label>Archivo</label>
<input type="file" name="userfile" size="20" />
</p>
<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>