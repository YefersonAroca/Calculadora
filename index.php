<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/normalize.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch&family=Kanit:wght@300&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css">
        <title>Calculadora</title>
    </head>
    <body>
        
        <div class="container">
    <h1>Prueba Calculadora en PHP</h1>
    <form id="formulario">
      <div class="form-group">
        <input type="text" class="form-control" id="numero1" placeholder="Primer numero">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="numero2" placeholder="Segundo numero">
      </div>
      <div class="form-group">
        <select class="custom-select" id="opcion">
          <option selected>Operacion a realizar</option>
          <option value="sumar">Suma</option>
          <option value="restar">Resta</option>
          <option value="multiplicar">Multiplicación</option>
          <option value="dividir">División</option>
        </select>
      </div>
      <div class="form-group">
        <input type="number" class="form-control" id="resultado" placeholder="Resultado" readonly>
      </div>

      <div class="form-group">
        <button type=submit class="btn btn-primary btn-block btn-lg" onclick="enviar(event)">Calcular</button>
        <button type="reset" class="btn btn-danger btn-block btn-lg">Limpiar</button>
      </div>
    </form>
  </div>
  </div>

  <script src="javaScript/index.js"></script>
    
    </body>
</html>
