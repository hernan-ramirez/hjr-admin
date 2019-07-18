<?php
/**
 * Table Definition for destinos
 */
require_once 'DB/DataObject.php';

class DataObjects_Destinos extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'destinos';                        // table name
    var $id;                              // int(10)  not_null primary_key auto_increment
    var $destino;                         // string(100)  not_null

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Destinos',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>