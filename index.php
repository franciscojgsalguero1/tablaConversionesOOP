<!DOCTYPE html>
<?php
    /*
        *
        * @author Francisco José Gordo Salguero
        * Fecha Inicio: 16/12/2020
        * Fecha Fin: ??/12/2020
        * Centre: IES Francesc de Borja Moll
        * Curso: 2do FPS DAW Presencial
        * Modulo: Programación en Entorno Servidor (PHP)
        * Practica: tabla de Conversiones
        * @versión: 1.0
    */
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tablas de Conversiones OOP</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <style>
            <?php 
                include_once 'libs/css/style.css'; 
            ?>
        </style>
    </head>
    <body>
        <?php
        // put your code here
        
        include_once 'objects/tablaConversiones.php';
            
        $tabla = new tablaConversiones();

        $tabla->output .= "<table class='table table-bordered'>";
        $tabla->output .= "<tr>";
        // imprimimos cabecera
        foreach ($tabla->heading as $value) {
            $tabla->output .= "<th>" . $value . " </th>";
        }
        $tabla->output .= "</tr>";
        foreach ($tabla->var as $valor) {

            $tabla->contador++;
            $tabla->output .= "<th> {$tabla->contador} </th>";
            if ($tabla->contador === 3) {
                $valor = true;
            }

            if ($valor === null) {
                $tabla->output2 = "null";
            } elseif($valor === true) {
                $tabla->output2 = "true";
            } elseif($valor === 2) {
                $tabla->output2 = "unset(\$var)";
            } elseif($valor === "") {
                $tabla->output2 = "\"\"";
            } elseif($valor === false) {
                $tabla->output2 = "false";
            }else {
                $tabla->output2 = $valor;
            }

            $tabla->output .= "<th> \$var= ". $tabla->output2 ." </th>";

            foreach ($tabla->funciones as $funcion) {

                if ($valor === 2) {
                    unset($valor);
                }
                if ($tabla->$funcion($valor)) {
                    $tabla->output .= "<td class='true'> True </td>";
                } else {
                    $tabla->output .= "<td class='false'> False </td>";
                }
            }
            $tabla->output .= "<tr>";
        }

        $tabla->output .= "</table>";

        echo $tabla->output;
        ?>
    </body>
</html>
