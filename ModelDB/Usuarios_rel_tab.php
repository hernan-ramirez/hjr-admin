<?php
/**
 * Table Definition for usuarios_rel_tab
 */
require_once 'ModelDB/Usuarios.php';

class DataObjects_Usuarios_rel_tab extends DataObjects_Usuarios 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'usuarios_rel_tab';                // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $id_tablas;                       // int(10)  not_null
    var $id_solapas_tablas;               // int(10)  not_null

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Usuarios_rel_tab',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>