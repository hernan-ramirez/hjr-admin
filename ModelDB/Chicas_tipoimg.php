<?php
/**
 * Table Definition for chicas_tipoimg
 */
require_once 'ModelDB/Chicas.php';

class DataObjects_Chicas_tipoimg extends DataObjects_Chicas 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'chicas_tipoimg';                  // table name
    var $id;                              // int(10)  not_null primary_key auto_increment
    var $tipo_imagen;                     // string(200)  not_null

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Chicas_tipoimg',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>