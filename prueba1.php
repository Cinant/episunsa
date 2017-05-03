<<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script> var variableJS = "contenido de la variable javascript"; </script>
<?php
$variablePHP = "<script> document.write(variableJS) </script>";
echo "variablePHP = ".$variablePHP."<br>";
?>
<script> var variableJS1 ="hola"; </script>



<?php
$variablePH1 = "<script> document.write(variableJS1) </script>";
echo "variablePHP = ".(int)$variablePHP1+10;
if (strcmp ($variablePHP1 , "hola" ) ) {
echo "Hola mundo";
}
?>
</head>
<body>

</body>
</html>