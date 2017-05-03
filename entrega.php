<!DOCTYPE html>
<html>
<head>
<style>
#texto{
	margin: 0px;
	padding : 0px;
	margin-left: 400px;
 	vertical-align: text-top;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width">
	<title>Envios a Lima y provincias</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/principalcss.css">
<link rel="stylesheet" type="text/css" href="css/cssmenu.css" />

<script type="text/javascript" src="js/jquery-2.1.4.min.js" ></script>
<script  src="js/jquery.slides.min.js"></script>
<script type="text/javascript">
 function elegir(){
  var tabla=document.getElementById("li1").innerHTML;
  var truck=document.getElementById("li2").innerHTML;
  }
</script>
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
  #footer1{
    margin-top: 200px;
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
      <li onclick="elegir()" id="li1"><a href="tablas.php">TABLAS</a></li>
      <li onclick="elegir()" id="li2"><a href="trucks.php">TRUCKS</a></li>
      <li onclick="elegir()" id="li3"><a href="ruedas.php">RUEDAS</a></li>
      <li onclick="elegir()" id="li4"><a href="zapatillas.php">ZAPATILLAS</a></li>
      <li onclick="elegir()" id="li5"><a href="hardware.php">HARDWARE</a></li>
      <li onclick="elegir()" id="li6"><a href="accesorios.php">ACCESORIOS</a></li>
      <li onclick="elegir()" id="li7"><a href="ropa.php">ROPA</a></li>
      <li onclick="elegir()" id="li8"><a href="#">OFERTAS</a></li>
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

<div id='texto'>
Envío y transporte de su paquete a Lima y provincias
Todos los envios a Lima son enviados por OLVA y a provincia por CRUZ DEL SUR<br>
Todos los envios son pagados por adelantado con un depósito a nuestra cuenta del BCP<br>

Numero de cuenta ahorros: 193-21038318-0-25<br>
Banco de Crédito - Agente BCP <br>
A nombre de: Oscar L. N.<br>

Por favor no olvides hacerlo por un agente BCP que encuentras en cualquier tienda así no cobran comisión y conservar tu voucher.<br>
Enviar un mensaje a Mensaje a Mantra<br>
Consultas al 017340499<br>
WhatsApp: 962268546 <br>

Los paquetes son empaquetados y protegidos para no estropear sus productos.<br>

------------------------------------------------------------------------------------------------------------------------------------------------------

<ul>100% Entregas realizadas

<li>1.- Javier Moscoso Velarde - Cusco - 03/07/14</li>
<li>2.- Luis Daniel Castillo Aruhuanca - Ilo - 15/07/14</li>
<li>3.- Héctor Anibal Garay Velezmoro  - Cajamarca - 15/07/14</li>
<li>4.- Emanuel Hermoza Arias - Puno - 16/07/14</li>
<li>5.- Michael Shasta Leland - Piura - 18/07/14</li>
<li>6.- Alexander Flores Orosco - Arequipa - 19/07/14</li>
<li>7.- Francis Mamani Guevara - Puno - 10/08/14</li>
<li>8.- Francis Mamani Guevara - Puno - 19/08/14</li>
<li>9.- Luis Daniel Castillo Aruhuanca - Ilo - 27/08/14</li>
<li>10.- Andree Condori Pacheco - Arequipa - 02/09/14</li>
<li>11.- Cristian Coronado Panta - Tumbes - 02/09/14</li>
<li>12.- Rony Sueldo Torres - Lima(Los Olivos) - 03/09/14</li>
<li>13.- Eduardo Mosquera Foronda - Huaraz - 04/09/14</li>
<li>14.- Luis Daniel Castillo Aruhuanca - Ilo - 17/09/14</li>
<li>15.- Cristhian Huayta Cuentas - Puno - 25/09/14</li>
<li>16.- Diego Gomez Reinaga - Ayacucho - 26/09/14</li>
<li>17.- Emanuel Hermoza Arias - Puno - 27/09/14</li>
<li>18.- Arnold Hilasaca Torres - Juliaca - 30/09/14</li>
<li>19.- Rhay Valladares Ramirez - Huaraz - 30/09/14</li>
<li>20.- Jean Piere Machaca Da Crúz - Lima(SJL) - 07/10/14</li>
<li>21.- Jose Cubas - Tarapoto - 08/10/14</li>
<li>22.- Diego Gomez Reinaga - Ayacucho - 11/10/14</li>
<li>23.- Julver Velasquez Guevara - Chiclayo - 11/10/14</li>
<li>24.- Jose Diaz Anton - Chiclayo - 13/10/14</li>
<li>25.- Luis Daniel Castillo Aruhuanca - Ilo - 12/11/14</li>
<li>26.- Jose Cubas - Tarapoto - 13/11/14</li>
<li>27.- Eduardo Mosquera Foronda - Huaraz - 14/11/14</li>
<li>28.- Favio Ruiz - Arequipa - 15/11/14</li>
<li>29.- Ronaldo Reyner Muñoz Huanca - Puno - 17/11/14</li>
<li>30.- Rony Sueldo Torres - Lima(Los Olivos) - 19/11/14</li>
<li>31.- javier Bailon Mendoza - Arequipa - 20/11/14</li>
<li>32.- Daniel Cervantes S. - Chincha - 22/11/14</li>
<li>33.- Isaac Tong - Piura - 25/11/14</li>
<li>34.- Ricardo Braul - Huaraz - 29/11/14</li>
<li>35.- Jose Cubas - Tarapoto - 30/11/14</li>
<li>36.- Marcial Paredes - Huamanga - 09/01/15</li>
</ul>
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