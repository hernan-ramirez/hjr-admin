<?php
/**
 * Table Definition for mensajes_diego
 */
require_once 'DB/DataObject.php';

class DataObjects_Mensajes_diego extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'mensajes_diego';                  // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $nombre;                          // string(200)  not_null
    var $apellido;                        // string(200)  not_null
    var $mensaje;                         // blob(16777215)  blob

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Mensajes_diego',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
