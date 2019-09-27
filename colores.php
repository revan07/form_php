<html>
<head><title>casilla de verificacion colores</title></head>
<body>
  <h1>Colores 1 (Formulario)</h1>

  <form action="formulario_colores.php" method="get">
    <p>Elija los colores a cambiar:<br>
      <label><input type="checkbox" name="fondo" value="el color del fondo"> Color del fondo de la página</label><br>
      <label><input type="checkbox" name="letra" value="el color de la letra"> Color de la letra de la página</label>
    </p>

    <p>
      <input type="submit" value="Enviar">
      <input type="reset" value="Borrar">
    </p>
  </form>

</body>
</html>