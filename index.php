<?php
    include ("cifrar.php");
    error_reporting(0);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Metodo AES</title>
</head>

<body class="bg-secondary-subtle">
    <div class="mt-5 text-center text-body-tertiary fw-bold fs-1 text-white">
        Metodo AES
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-6">
            <form method="post" class="p-5">
                <div class="d-flex justify-content-center">
                    <div class="col-sm-12 col-md-12 col-lg-12 mt-0">
                        <div class="shadow bg-white container text-center rounded p-5 text-wrap">
                            <label for="mensajeCifrar" class="fw-lighter fs-4">Mensaje a cifrar:</label><br>
                            <input type="text" id="mensajeCifrar" name="mensajeCifrar" class="form-control contorno" required><br><br>
                            <label for="llaveCifrar" class="fw-lighter fs-4">Llave:</label><br>
                            <input type="password" id="llaveCifrar" name="llaveCifrar" class="form-control contorno" required><br><br>
                            <button type="submit" name="Cifrar" value="Cifrar" class="btn btn-primary fw-lighter">Cifrar</button>
                            <div class="border rounded mt-3">
                                <?php
                                echo cifradoCorrecto($llave_correcta);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        
        <div class="col-md-12 col-sm-12 col-lg-6">
            <form method="post" class="p-5">
                <div class="d-flex justify-content-center">
                    <div class="col-sm-12 col-md-12 col-lg-12 mt-0">
                        <div class="shadow bg-white container text-center rounded p-5 text-wrap">
                            <label for="mensajeDescifrar"class="fw-lighter fs-4">Mensaje a descifrar:</label><br>
                            <input type="text" id="mensajeDescifrar" name="mensajeDescifrar" class="form-control contorno" required><br><br>
                            <label for="llaveDescifrar"class="fw-lighter fs-4">Llave:</label><br>
                            <input type="password" id="llaveDescifrar" name="llaveDescifrar" class="form-control contorno" required><br><br>
                            <button type="submit" name="Descifrar" value="Descifrar" class="btn btn-primary fw-lighter">Cifrar</button>
                            
                            <div class="border rounded mt-3 text-wrap">
                                <?php
                                desifradoCorrecto($llave_correcta);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div> 
</body>
</html>