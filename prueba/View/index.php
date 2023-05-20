<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width">
        
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="reset.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <title>Prueba Browser Travel</title>


        <script src="https://code.jquery.com/jquery-3.7.0.min.js"  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="  crossorigin="anonymous"></script>
        <script type="text/javascript" src="../Controller/funciones.js"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
        <?php
            include_once("../Controller/info.php");
        ?>
        
    </head>
    
    <body>
    <div class="Contenedor">
        <header>
            <div class="headersection">
            <img src="../img/clouds.png" class="attachment-full size-full" alt="">
            </div>  
        </header>

        <main>
            <div class="mainsection">
                <div class="lista">
                    <select class="form-select selector" aria-label="Default select example" id="CiudadConsulta" name="CiudadConsulta" onchange="consulta(this)">
                        <option selected>Seleccione Ciudad para consulta</option>
                        <?php 
                            foreach (ciudades() as $ciudades_lista){
                                echo "<option value='".$ciudades_lista['idCiudad']."' lat='".$ciudades_lista['lat']."' long='".$ciudades_lista['long']."'>".$ciudades_lista['Nombre']."</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="resultado" id="resultado" style="padding-top: 20px">
                    

                </div>
            </div>
        </main>

        <footer>
            <div>
                <img src="https://browsertravelsolutions.com/wp-content/uploads/2022/02/Logo-1.png" class="attachment-full size-full" alt="" loading="lazy">
            </div>
        </footer>
    </div>
    </body>
</html>
