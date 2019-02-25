<html>
<head>
<title>HTML Ejercicio #10</title>
<style type="text/css">
.texto {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-style: normal;
	font-weight: bold;
	color: #003;
}
</style>
</head>
<body>

<div>
<form action="php_ejercicio_#10.php" method="post">
    <table width="500" border="1" class="texto">
      <tr>
        <td width="190">Un campo de texto plano</td>
        <td width="294"><?php echo $_POST["texto_plano"]; ?></td>
      </tr>
      <tr>
        <td>Un area de texto de 3 lineas</td>
        <td><?php echo $_POST["area_texto"]; ?></td>
      </tr>
      <tr>
        <td>Un campo de seleccion</td>
        <td><?php echo $_POST["seleccion"]; ?></td>
      </tr>
      <tr>
        <td>Un campo de tipo check</td>
        <td><?php echo $_POST["tipo_check"]; ?></td>
      </tr>
      <tr>
        <td>Un grupo de campos radiales</td>
         <td><?php echo $_POST["tipo_radio"]; ?></td>
      </tr>
      <tr>
        <td>Un boton</td>
         <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Un campo de tipo rango</td>
         <td>&nbsp;</td>
      </tr>
    </table>
</form>
</div>

</body>
</html>