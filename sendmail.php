<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "sistema@dobermanprint.com.mx";
    $to = "contacto@dobermanprint.com.mx;
    $subject = "Contacto desde la Página Web";
    
    $message = "
                <html>
                <head>
                <title>HTML email</title>
                </head>

                <body>

                    <table>
                        <tr>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Teléfono</th>
                        </tr>
                        <tr>
                            <td>" . $_POST["wk_nombre"] . "</td>
                            <td>" . $_POST["wk_correo"] . "</td>
                            <td>" . $_POST["wk_telefono"] . "</td>
                        </tr>
                        <tr>
                            <th colspan=4>Mensaje</th>
                        </tr>
                        <tr>
                            <td colspan=4>" . $_POST["wk_mensaje"] . "</td>
                        </tr>
                    </table>

                </body>

                </html>";

    if ($_POST["wk_nombre"] <> "" && 
        $_POST["wk_correo"] <> "" && 
        $_POST["wk_telefono"] <> "" && 
        $_POST["wk_mensaje"]){
        
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From:" . $from;
            mail($to,$subject,$message, $headers);
            echo "El correo fue enviado. ";
    }
?> 

<script language="javascript">
    window.open("index.htm", "_self");
</script>
