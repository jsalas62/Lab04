<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios Propuestos Lab03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <script src="script.js"></script>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-9 mt-2">
                <form action="pregunta2.html" method="post">
                    <?php
                    echo "<h1>Bienvenido</h1>";
                    $nombre = $_POST['nombre'];
                    $direccion = $_POST['direccion'];
                    $email = $_POST['email'];
                    $edad = $_POST['edad'];
                    if ($edad > 18) {
                        echo "<p>¡Hola! " . $nombre . "</p>";
                        echo "<p>Tu dirección es " . $direccion . "</p>";
                        echo "<p>Tienes  " . $edad .  " años y tu correo es $email </p>";
                    } else {
                        echo "<h4>Solo se admiten usuarios mayores de edad</h4>";
                    }
                    ?>
                    <br>
                    <button type="submit" class="btn btn-primary">Regresar</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Agregamos el script de bootstrap al final del body -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>

</html>