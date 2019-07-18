<?php
/**
 * Table Definition for usuarios_sectores
 */
require_once 'ModelDB/Usuarios.php';

class DataObjects_Usuarios_sectores extends DataObjects_Usuarios 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'usuarios_sectores';               // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $sector;                          // string(255)  not_null
    var $descripcion;                     // string(255)  
    var $orden;                           // int(3)  not_null

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Usuarios_sectores',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>