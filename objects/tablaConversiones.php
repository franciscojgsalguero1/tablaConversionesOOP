<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
    *
    * Description of tablaConversiones
    * @author Francisco José Gordo Salguero
    * Fecha Inicio: 16/12/2020
    * Fecha Fin: ??/12/2020
    * Centre: IES Francesc de Borja Moll
    * Curso: 2do FPS DAW Presencial
    * Modulo: Programación en Entorno Servidor (PHP)
    * Practica: tabla de Conversiones
    * @versión: 1.0
*/

class tablaConversiones {
    //put your code here
    
    public $contador = 0;
    public $output = "";
    public $output2 = "";
    public $heading = array('Numero ','Contenido de $var ', 'isset($var) ', 'empty($var) ', '(bool) $var ', 'is_null($var)');
    public $var = array(null, 0, true, false, "0", "", "foo", array(), 2);
    public $funciones = array('llamarIsset', 'llamarEmpty', 'llamarBool', 'llamarIsnull');
    
    public function __construct(){
        
    }
    
    public function llamarIsset($valor) {
        return isset($valor);
    }
    
    public function llamarEmpty($valor) {
        return empty($valor);
    }

    public function llamarBool($valor) {
        return (bool) $valor;
    }

    public function llamarIsnull($valor) {
        return is_null($valor);
    }
}