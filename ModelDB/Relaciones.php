<?php
/**
 * Table Definition for relaciones
 */
require_once 'DB/DataObject.php';

class DataObjects_Relaciones extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'relaciones';                      // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $id_izq_tabla;                    // int(10)  not_null
    var $id_izq_registro;                 // int(10)  not_null
    var $id_der_registro;                 // int(10)  not_null
    var $id_der_tabla;                    // int(10)  not_null

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Relaciones',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>