<?php
/**
 * Table Definition for proyecto_estados
 */
require_once 'ModelDB/Proyecto_tareas.php';

class DataObjects_Proyecto_estados extends DataObjects_Proyecto_tareas
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'proyecto_estados';                // table name
    var $id;                              // int(10)  not_null primary_key auto_increment
    var $estado;                          // string(255)  not_null

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Proyecto_estados',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>