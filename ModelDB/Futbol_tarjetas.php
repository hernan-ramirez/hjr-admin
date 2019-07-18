<?php
/**
 * Table Definition for futbol_tarjetas
 */
require_once 'ModelDB/Futbol_partidos.php';

class DataObjects_Futbol_tarjetas extends DataObjects_Futbol_partidos 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'futbol_tarjetas';                 // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $id_partido;                      // int(10)  not_null
    var $id_jugador;                      // int(10)  not_null
    var $minuto;                          // int(10)  not_null
    var $tarjeta;                         // int(1)  not_null

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Futbol_tarjetas',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>