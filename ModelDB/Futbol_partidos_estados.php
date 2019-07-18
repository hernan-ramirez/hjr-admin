<?php
/**
 * Table Definition for futbol_partidos_estados
 */
require_once 'ModelDB/Futbol_partidos.php';

class DataObjects_Futbol_partidos_estados extends DataObjects_Futbol_partidos 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'futbol_partidos_estados';         // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $estado_partido;                  // string(255)  not_null

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Futbol_partidos_estados',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>