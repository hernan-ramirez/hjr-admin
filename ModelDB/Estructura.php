<?php
/**
 * Table Definition for estructura
 */
require_once 'DB/DataObject.php';

class DataObjects_Estructura extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'estructura';                      // table name
    var $id;                              // int(10)  not_null primary_key unsigned auto_increment
    var $nombre;                          // string(50)  not_null
    var $id_estructura;                   // int(10)  multiple_key unsigned
    var $link;                            // blob(16777215)  blob
    var $tipo;                            // int(5)  
    var $ck_activa;                       // int(1)  
    var $orden;                           // int(10)  not_null unsigned

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Estructura',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>