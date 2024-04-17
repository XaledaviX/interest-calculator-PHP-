<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <title>calculadora</title>
</head>
<body>
    <header class="container-navbar">
        <nav class="navbar">
            <h1>Calculadora de Intereses</h1>
        </nav>
    </header>

    <main class="principal-content">
        <form method="post">
            <h2>Nombre</h2>
            <input type="text" id="field1" name="nombre">

            <h2>Apellido</h2>
            <input type="text" id="field2" name="apellido">

            <h2>cedula</h2>
            <div class="cedula">
                <select id="letras" name="letras">
                <option value="v">V</option>
                <option value="E">E</option>
                <input type="text" id="field3" name="field3">
            </div>

            <h2>Capital</h2>
            <input type="text" id="field5" name="capital">

            <h2>Taza de interes</h2>
            <input type="text" id="field8" name="taza">

            <h2>Tiempo</h2>
            <input type="text" id="field6" name="tiempo">
            <div class="container-buttoms">
                <div>
                    <button id="submitButton" class="button-disabled" type="submit" name="btn1"><h1>Simple</h1></button>
                </div>
                <div>
                    <button id="submitButton2" class="button-disabled2" type="submit" name="btn2"><h1>Compuesto</h1></button>
            </div>
            </div>           
        </form>
            
    <section class="container-response">   
        <div id="respuesta">
            <?php
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $completo = strtoupper($nombre .' '. $apellido);

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST['btn1'])) {
                        $capital = $_POST['capital'];
                        $taza = $_POST['taza'];
                        $tiempo = $_POST['tiempo'];

                        $resultado = ($capital * $taza / 12 * $tiempo);
                        echo "<h2>
                        $completo </br>
                        El resultado es: $resultado$
                        </h2>";

                    } elseif (isset($_POST['btn2'])) {
                            $capital = $_POST['capital'];
                            $taza = $_POST['taza'];
                            $tiempo = $_POST['tiempo'];

                            $resultado = ($taza * $capital/ 100 - $capital);
                            echo "<h2>
                        $completo </br>
                        El resultado es: $resultado$
                        </h2>";
                        } else {
                            echo "<h2>Llena los datos y presiona el tipo de interes que deseas calcular...</h2>";
                        }
                }
                ?>
            </div>
        
    </section>
    </main>
</body>
</html>