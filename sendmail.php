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

                #customers {
                    font-family: Arial, Helvetica, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                  }
                  
                  #customers td, #customers th {
                    border: 1px solid #ddd;
                    padding: 8px;
                  }
                  
                  #customers tr:nth-child(even){background-color: #black;}
                  
                  #customers tr:hover {background-color: #ddd;}
                  
                  #customers th {
                    padding-top: 12px;
                    padding-bottom: 12px;
                    text-align: left;
                    background-color: #04AA6D;
                    color: white;
                  }
                  </style>

                </head>

                <body>

                    <table id='customers' width='100%' cellspacing=1>
                        <tr bgcolor='black'>
                            <th><center>Nombre</th>
                            <th><center>Correo</center></th>
                            <th><center>Teléfono</th>
                        </tr>
                        <tr bgcolor='#eee'>
                            <td>" . $_POST["wk_nombre"] . "</td>
                            <td>" . $_POST["wk_correo"] . "</td>
                            <td>" . $_POST["wk_telefono"] . "</td>
                        </tr>
                        <tr bgcolor='black'>
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
