<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "sistema@dobermanprint.com.mx";
    $to = "contacto@dobermanprint.com.mx";
    $subject = "Contacto desde la Página Web";
    
    $message = "
                <html>
                <head>
                <title>HTML email</title>
                </head>

                <body>

                    <table width='100%' cellspacing=1 cellpading=2 border=1>
                        <tr bgcolor='black'>
                            <th><center><font color='white'>Nombre</th>
                            <th><center><font color='white'>Correo</center></th>
                            <th><center><font color='white'>Teléfono</th>
                            <th><center><font color='white'>Asunto</th>
                        </tr>
                        <tr bgcolor='#eee'>
                            <td>" . $_POST["wk_nombre"] . "</td>
                            <td>" . $_POST["wk_correo"] . "</td>
                            <td>" . $_POST["wk_telefono"] . "</td>
                            <td>" . $_POST["wk_asunto"] . "</td>
                        </tr>
                        <tr bgcolor='black'>
                            <th colspan=4><font color='white'>Mensaje</th>
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
        $_POST["wk_asunto"] <> "" && 
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
