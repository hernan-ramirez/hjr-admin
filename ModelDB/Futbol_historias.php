<?php
/**
 * Table Definition for futbol_historias
 */
require_once 'ModelDB/Futbol_partidos.php';

class DataObjects_Futbol_historias extends DataObjects_Futbol_partidos 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'futbol_historias';                // table name
    var $id;                              // int(10)  not_null primary_key auto_increment
    var $anio;                            // string(4)  
    var $torneo;                          // string(200)  not_null
    var $relator;                         // string(200)  
    var $cuerpo;                          // blob(16777215)  not_null blob

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Futbol_historias',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>