<?php
/**
 * Table Definition for visitas
 */
require_once 'DB/DataObject.php';

class DataObjects_Visitas extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'visitas';                         // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $id_tabla;                        // int(11)  not_null
    var $id_estructura;                   // int(11)  not_null
    var $id_nota;                         // int(11)  not_null
    var $fecha_creacion;                  // datetime(19)  not_null binary

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Visitas',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>