<?php
/**
 * Table Definition for prensa
 */
require_once 'DB/DataObject.php';

class DataObjects_Prensa extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'prensa';                          // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $titulo;                          // string(180)  not_null
    var $copete;                          // string(255)  not_null
    var $cuerpo;                          // blob(16777215)  blob
    var $fecha_creacion;                  // datetime(19)  binary
    var $_id_usuario;                     // int(10)  

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Prensa',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>