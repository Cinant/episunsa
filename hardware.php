<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/principalcss.css">
<link rel="stylesheet" type="text/css" href="css/cssmenu.css" />

<script type="text/javascript" src="js/jquery-2.1.4.min.js" ></script>
<script  src="js/jquery.slides.min.js"></script>
<TITLE>FLAT GROUND SHOP</TITLE>
<link rel="shortcut icon" href="img/flat_ground1.jpg">
<script>
$(document).ready(function(){
$(function() {
  if ($.browser.msie && $.browser.version.substr(0,1)<7)
  {
    $('li').has('ul').mouseover(function(){
        $(this).children('ul').css('visibility','visible');
        }).mouseout(function(){
        $(this).children('ul').css('visibility','hidden');
        })
  }
});

});
</script> 
<style type="text/css">
  h4{
    width: 50px;
    height: 50px;
    position: relative;
  }
   p{
    color: black;
    text-align: center;
  }
  .hola{
    width:390px;
    height: 390px;
    border-style: solid;
    border-radius: 10px;
  }
  #hola1{
    bottom: 0px;
    position: relative;
    clear: both;
    width: 100%;
    background-color: green;
    margin-top: 5000px;
  }
  #imgofertas{
    background-color: black;
  }
  #primerafila {
    text-align: right;
  }
  #fground{
    float:left;
    width: 150px;
  }
  #buscar{
    float: right;
    width: 340px;
    margin: 0px;
    padding: 0px;
    margin-top: 50px;
  }
  #contenedor2{
    width: 500px;
    height: 300px;
  }
  #fground2{
    width: 150px;
    height: 150px;
  }
 #footer2{
    background-color: black;
    color: white;
    width: 100%;
  }
  #cont2{
    margin-left: 500px;
  }
</style>
</head>
<body>
  <div id="imgofertas" COLSPAN=20 BGCOLOR="RED"><center><img src="img/Captura.png"></center></div>
  <div id="primerafila"><label><img  src="img/0067-phone.png">LLAMANOS AHORA: 017340499</label></div>
  
  <div id="contenedor2">
  <div id="fground">
  <a href="inicio.php"><img  id="fground2" src="img/flat_ground1.jpg" border="0" width="10%"></a>
  </div>
  <div  id="buscar">
  <INPUT TYPE="TEXT" NAME="CONTENIDO_A_BUSCAR" VALUE="BUSCAR" onclick="borrar()"/>
  <img  class="pequeños" src="img/0135-search.png">
  </div>
  </div>
	
  <ul id="menu">
    
    <li>
    <a href="#">INICIO</a>
<ul>
      <li><a href="tablas.php">TABLAS</a></li>
      <li><a href="trucks.php">TRUCKS</a></li>
      <li><a href="ruedas.php">RUEDAS</a></li>
      <li><a href="zapatillas.php">ZAPATILLAS</a></li>
      <li><a href="hardware.php">HARDWARE</a></li>
      <li><a href="accesorios.php">ACCESORIOS</a></li>
      <li><a href="ropa.php">ROPA</a></li>
      <li><a href="#">OFERTAS</a></li>
    </ul>
    </li>

    <li>
        <a href="#">TODAS LAS MARCAS</a>
        <ul>
            <li><a href="#">ADIDAS</a></li>
            <li><a href="#">BALCKOUT</a></li>
            <li><a href="#">COCONUT</a></li>
            <li><a href="#">DIAMOND</a></li>
        </ul>
    </li>
    <li><a href="https://www.facebook.com/mantrask8shop">FACEBOOK</a></li>
    <li><a href="https://www.youtube.com/user/MANTRASKATE">YOUTUBE</a></li>
    <li><a href="https://twitter.com/MANTRASKATE">TWITTER</a></li>
	<li><a href="https://instagram.com/mantra_skate/">INSTAGRAM</a></li>
	<li><a href="#">TIENDAS Y ENVIOS</a></li>
	</ul> 
	

	
 <div id="menu1">
 <ul>
 <li><a href="#" title="1" id="title1">CATEGORÍAS</a></li>
  <li><a href="tablas.php" title="2">TABLAS</a></li>
  <li><a href="trucks.php" title="3">TRUCKS</a></li>
  <li><a href="ruedas.php" title="">RUEDAS</a></li>
  <li><a href="zapatillas.php" title="">ZAPATILLAS</a></li>
  <li><a href="hardware.php" title="">HARDWARE</a></li>
  <li><a href="accesorios.php" title="">ACCESORIOS</a></li>
  <li><a href="ropa.php" title="">ROPA</a></li>
  <li><a href="#" title="" id="title1">INFORMACIÓN</a></li>
  <li><a href="entrega.php" title="">ENTREGA - ENVIOS</a></li>
  <li><a href="avisolegal.php" title="">AVISO LEGAL</a></li>
  <li><a href="condicionesdeventa.php" title="">CONDICIONES DE USO</a></li>
  <li><a href="#" title="">SOBRE</a></li>
  <li><a href="pago.php" title="">PAGO SEGURO</a></li>
  <li><a href="#" title="">NUESTRAS TIENDAS</a></li>
  <li><a href="#" title="" id="title1">FABRICANTES</a></li>
  <li><a href="adidas.php" title="">ADIDAS</a></li>
  <li><a href="almost.php" title="">ALMOST</a></li>
  <li><a href="ambig.php" title="">AMBIG</a></li>
  <li><a href="antihero.php" title="">ANTI-HERO</a></li>
  <li><a href="baker.php" title="">BAKER</a></li>
  <li><a href="blackout.php" title="">BLACKOUT</a></li>
  <li><a href="bones.php" title="">BONES</a></li>
  <li><a href="brigada.php" title="">BRIGADA</a></li>
  <li><a href="bstyle.php" title="">BRO STYLE</a></li>
  <li><a href="chocolate.php" title="">CHOCOLATE</a></li>

 </ul>
</div>
  

<div id="cont2">
    <?php
      include ("conexion1.php");
      $mysql=mysql_connect($servidor,$usuario,$clave);
      mysql_select_db(base_de_datos1,$mysql);
      $consulta="SELECT  imagen_id,marca,precio,descripcion  from imagenes5 where categoria='Hardware'";
      $result=@mysql_query($consulta) or die(mysql_error());
     
      $consulta2="SELECT  count(imagen_id) as cuenta from imagenes5 where categoria='Hardware'";
      $result2=@mysql_query($consulta2) or die(mysql_error());
      $datos1 = mysql_fetch_assoc($result2);
      $valor=$datos1['cuenta'];
      ?>
      <table>
       <tr>
         
         <?php 
           $hola=0;
      while ($reg=mysql_fetch_assoc($result)) {
      echo '<td><img class="hola" src="mostrarimg1.php?id='.$reg["imagen_id"].'"/><p>'.$reg["marca"].'-'.$reg["descripcion"].'<br>Precio de venta: S/.'.$reg["precio"].'</p></td>';
         $hola++;
        
         if(($hola%3)==0 && ($hola<$valor)){
          echo "</tr>";
          echo "<tr>";
      
          }else{
          if (($hola%3)==0 && ($hola==$valor)) {
             echo "</tr>";
          }
            
          }
         ?>
   
       <?php
      }
      ?>
      </table>
</div>

   <DIV id="footer1">
    <div ID="footer2">
      <CENTER>
      Información de la tienda

      FLAT GROUND ,SAN MIGUEL: C.C. Shopping Center, tienda 155- 2° piso. Atrás de Plaza San Miguel. Mapa de como llegar: http://goo.gl/maps/i5NEV <BR>
      De Lunes a Sábado de 11:00 - 9:00pm / Domingos 4:00 - 8:00pm
      Llámanos ahora: 017340498
      Escriba su dirección email: flatground@gmail.com
      </CENTER>
    </div>
    </DIV>
	
</body>
</html>