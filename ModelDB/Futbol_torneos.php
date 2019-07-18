<?php
/**
 * Table Definition for futbol_torneos
 */
require_once 'ModelDB/Futbol_partidos.php';

class DataObjects_Futbol_torneos extends DataObjects_Futbol_partidos 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'futbol_torneos';                  // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $torneo;                          // string(200)  not_null
    var $cantidad_grupos;                 // int(3)  
    var $ver_mas;                         // string(255)  

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Futbol_torneos',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE

	var $select_display_field = 'torneo';
}
?>