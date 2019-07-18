<?php
/**
 * Table Definition for futbol_jugadores_puestos
 */
require_once 'ModelDB/Futbol_jugadores.php';

class DataObjects_Futbol_jugadores_puestos extends DataObjects_Futbol_jugadores 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'futbol_jugadores_puestos';        // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $puesto;                          // string(255)  not_null
    var $orden;                           // int(10)  

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Futbol_jugadores_puestos',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>