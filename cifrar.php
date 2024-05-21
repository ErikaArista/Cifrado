

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $llave_correcta = '123456789';

        function cifrar($mensaje, $llave)
        {
            $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
            $mensaje_encriptado = openssl_encrypt($mensaje, 'aes-256-cbc', $llave, 0, $iv);
            return base64_encode($iv . $mensaje_encriptado);
        }

        function descifrar($mensaje, $llave)
        {
            $datos = base64_decode($mensaje);
            $iv_length = openssl_cipher_iv_length('aes-256-cbc');
            $iv = substr($datos, 0, $iv_length);
            $datos_encriptados = substr($datos, $iv_length);
            return openssl_decrypt($datos_encriptados, 'aes-256-cbc', $llave, 0, $iv);
        }

        function cifradoCorrecto($llave_correcta)
        {
            if (isset($_POST['mensajeCifrar']) && isset($_POST['llaveCifrar'])) {
                $mensajeCifrar = $_POST['mensajeCifrar'];
                $llaveCifrar = $_POST['llaveCifrar'];
    
                if ($llaveCifrar === $llave_correcta) {
                    echo 
                    "<div>
                        <span class='fw-lighter fs-5'> Mensaje cifrado: </span>
                    </div>".htmlspecialchars($mensajeCifrar);

                    $mensajeCifrado = cifrar($mensajeCifrar, $llaveCifrar);

                    echo  "<div class='mt-3'>
                    <span class='fw-lighter fs-5'> Mensaje descifrado: </span>
                    </div>" . htmlspecialchars($mensajeCifrado). "<br>";
                    
                } else {
                    echo "Llave incorrecta para cifrar el mensaje.<br>";
                }
            }
        }

        function desifradoCorrecto($llave_correcta)
        {
            if (isset($_POST['mensajeDescifrar']) && isset($_POST['llaveDescifrar'])) {
                $mensajeDescifrar = $_POST['mensajeDescifrar'];
                $llaveDescifrar = $_POST['llaveDescifrar'];
    
                if ($llaveDescifrar === $llave_correcta) {

                    echo 
                    "<div>
                        <span class='fw-lighter fs-5'> Mensaje cifrado: </span>
                    </div>".htmlspecialchars($mensajeDescifrar);
                    
                    $mensajeDescifrado = descifrar($mensajeDescifrar, $llaveDescifrar);

                    echo  "<div class='mt-3'>
                    <span class='fw-lighter fs-5 '> Mensaje descifrado: </span>
                    </div>" . htmlspecialchars($mensajeDescifrado). "<br>";
                } else {
                    echo "<br>" . "Llave incorrecta para descifrar el mensaje.<br>";
                }
            }
        }
        

    }
    ?>