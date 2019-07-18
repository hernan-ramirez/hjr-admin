<?php
/**
 * Table Definition for futbol_formacion
 */
require_once 'ModelDB/Futbol_partidos.php';

class DataObjects_Futbol_formacion extends DataObjects_Futbol_partidos 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'futbol_formacion';                // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $id_partido;                      // int(10)  not_null
    var $id_jugador;                      // int(10)  not_null
    var $orden;                           // int(3)  not_null

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Futbol_formacion',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>