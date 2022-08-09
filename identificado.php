<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css" />
    <title>Document</title>
</head>

<body style="margin: 0%">
    <div id="map">
        <div class="dropdown formulario">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                data-bs-toggle="dropdown" aria-expanded="false">
                Mostrar formulario
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <div class="form-check">
        
                    <label class="form-check-label" for="flexCheckDefault">
                        Reportes
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
                <div class="form-check">

                    <label class="form-check-label" for="flexCheckChecked">
                        Mis reportes
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                </div>
            </ul>
        </div>
        <div class="dropdown formulario-login">
            <label for="exampleInputEmail1" class="form-label">Hola <?php echo $_SESSION["Nombre_usuario"]?> </label>
        </div>
    </div>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>

</html>