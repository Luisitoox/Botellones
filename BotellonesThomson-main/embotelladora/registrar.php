
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="registrar.css?v=<php echo time();?>">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
</head>

<img src="./img/fondoo.jpg" alt="" id="imagen">

<script> 
        $(document).ready(function() { 

            $('#formulario').submit(function(event) { 
                event.preventDefault(); 

                var cedulaC = $('#cedulaC').val();
                var nombreC = $('#nombreC').val();
                var telefonoC = $('#telefonoC').val();
                var fecha = $('#fecha').val(); 
                var hora = $('#hora').val(); 
                var cantidad = $('#cantidad').val(); 
                var data =

                {   
                    "cedulaC" : $('#cedulaC').val(),
                    "nombreC" : $('#nombreC').val(),
                    "telefonoC" : $('#telefonoC').val(),
                    "fecha" : $('#fecha').val(),
                    "hora" : $('#hora').val(),
                    "cantidad" : $('#cantidad').val(),
                    
                }
                
                $.ajax({ 
                    url: 'insertar.php', 
                    type: 'POST', 
                    data: data, 
                    success: function(response) { 
                       console.log(response);
                       document.getElementById("response").innerHTML = response;
                    } 
                }); 
            }); 
        }); 
</script> 

<body style= "background-color: #F5F5DC; !important">
    <h1 align="center" style="color: aquamarine;  !important">BOTELLONES THOMSON</h1> 
    <form id="formulario" method="POST" align="center"> 

        <label for="cedulaC">Cedula:</label> 
        <input type="text" id="cedulaC" pattern="[0-9]*" min="7" max="8" name="cedulaC"  required><br><br>

        <label for="nombreC">Nombre:</label> 
        <input type="text" id="nombreC" name="nombreC"  required><br><br>

        <label for="telefonoC">Telefono:</label> 
        <input type="text" id="telefonoC" name="telefonoC"  required><br><br>
 
        <label for="fecha">Fecha:</label> 
        <input type="date" id="fecha" name="fecha" required><br> <br>
 
        <label for="hora">Hora:</label> 
        <input type="time" id="hora" name="hora" required><br> <br>
 
        <label for="cantidad">Botellones Llenados:</label> 
        <input type="number" id="cantidad" min="1" max="100" name="cantidad" required><br> <br>
 
        <button type="submit" style="background-color:  #4bb3f3; color: white; !important">Guardar</button>
        <button type="reset" style="background-color:  #4bb3f3; color: white; !important">Vaciar</button>
        
    </form>

    <br><br> 
 
    <h2 align="center" style="color: aquamarine !important">LISTA DE LLENADO DE BOTELLONES</h2> 
    <div id="lista_llenados" align="center" > 

    <table border="2" style="text-align:center;background-color: rgb(252, 252, 252) !important;  border-color:#269e98">
        <tr>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Cantidad</th>
        </tr> 
    <tbody id="response"></tbody>
    </table><br> <br> <br>

    <a href="fpdf/ReporteRegistros.php"  target="_blank" >
       <button type="submit" style="background-color:  white; color: #4bb3f3; !important">Generar Reporte</button>
    </a> 

    <a  href="cerrarsesion.php">
       <button type="" style="background-color:  white; color: #4bb3f3; !important">Cerrar Sesión</button>
       <br>
       <br>
    </a> 

    
    

</body>
</html>