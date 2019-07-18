<?php
/**
 * Table Definition for chicasimg
 */
require_once 'ModelDB/Chicas.php';

class DataObjects_Chicasimg extends DataObjects_Chicas 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'chicasimg';                       // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $id_tipoimg;                      // int(11)  not_null
    var $archivo_imagen_chicas;           // string(255)  not_null
    var $fecha_creacion;                  // date(10)  not_null binary

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Chicasimg',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>