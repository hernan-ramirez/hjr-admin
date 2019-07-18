<?php
/**
 * Table Definition for f1_carreras
 */
require_once 'DB/DataObject.php';

class DataObjects_F1_carreras extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'f1_carreras';                     // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $fecha_carrera;                   // date(10)  not_null binary
    var $premio;                          // string(200)  not_null
    var $vueltas;                         // int(11)  
    var $circuito;                        // string(200)  
    var $distancia;                       // string(100)  
    var $dist_vuelta;                     // string(200)  
    var $prom_ganador;                    // string(250)  
    var $record_vuelta;                   // string(250)  
    var $descripcion;                     // blob(16777215)  blob

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_F1_carreras',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>