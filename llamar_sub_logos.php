<!doctype html>
<html>
	<head>
		<title>Subir imagen de los logos de las marcas vender a la base de datos</title>
	</head>
	<body>
		<form action="subirlogo.php" method="post" enctype="multipart/form-data">
		    <label for="imagen">Imagen:</label>
		    <input type="file" name="imagen" id="imagen" /><br>
		    Marca: <input type="text" name="marca" id="marca"/><br>
		    Descripcion : <input type="text" name="descripcion" id="descripcion"/><br>
			<input type="submit" name="subir" value="Subir"/>
		</form>
		</body>
</html>