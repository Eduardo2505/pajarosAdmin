
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
	<h1>Editar</h1>

	
    <!-- <form action="<?php echo site_url('') ?>admin/updateVeces" method="post">
		<label>Id</label><input type="number" name="id"><br>
		<label>veces</label><input type="number" name="veces"><br>
		<label>Fecha</label><input type="date" name="lastView"><br>
		<input type="submit" value="Enviar">
	</form> -->

	<form action="<?php echo site_url('') ?>admin/update" method="post">
		<label>Id</label><input type="number" name="id"><br>
		<label>Título</label><input type="text" name="titulo"><br>
		<label>Pájaro</label><input type="text" name="pajaro"><br>
		<input type="submit" value="Enviar">
	</form>

	
</body>
</html>