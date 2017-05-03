<!doctype html>
<html>
	<head>
		<title>Subir imagen a la base de datos</title>
	</head>
	<body>
		<form action="subida_de_img5.php" method="post" enctype="multipart/form-data">
		    <label for="imagen">Imagen:</label>
		    <input type="file" name="imagen" id="imagen" /><br>
		    Categoria: <input type="text" name="categoria" id="categoria1"/><br>
		    Sub-categoria :<input type="text" name="scategoria" id="scategoria1"/><br>
			Marca: <input type="text" name="marca" id="marca1"/><br>
		    Precio de venta : <input type="text" name="precio_venta" id="precio_venta1"/><br>
		    Descripcion : <input type="text" name="descripcion" id="descripcion1"/><br>
			<input type="submit" name="subir" value="Subir"/>
		</form>
		</body>
</html>