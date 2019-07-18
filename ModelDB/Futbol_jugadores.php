<?php
/**
 * Table Definition for futbol_jugadores
 */
require_once 'ModelDB/Futbol_partidos.php';

class DataObjects_Futbol_jugadores extends DataObjects_Futbol_partidos 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'futbol_jugadores';                // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $apellido;                        // string(100)  not_null
    var $nombre;                          // string(100)  
    var $apodo;                           // string(100)  
    var $fecha_nacimiento;                // date(10)  binary
    var $lugar_nacimiento;                // string(200)  
    var $id_puesto;                       // int(10)  
    var $numero;                          // int(2)  
    var $altura;                          // string(30)  
    var $peso;                            // string(30)  
    var $debut_en_primera;                // string(200)  
    var $trayectoria;                     // blob(16777215)  blob
    var $titulos;                         // blob(16777215)  blob
    var $id_jugadores_fotos;              // int(11)  

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Futbol_jugadores',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>