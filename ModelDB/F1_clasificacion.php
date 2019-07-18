<?php
/**
 * Table Definition for f1_clasificacion
 */
require_once 'ModelDB/F1_carreras.php';

class DataObjects_F1_clasificacion extends DataObjects_F1_carreras 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'f1_clasificacion';                // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $id_carrera;                      // int(10)  not_null
    var $id_piloto;                       // int(10)  not_null
    var $dia;                             // string(100)  not_null
    var $posicion;                        // int(10)  not_null
    var $tiempo;                          // string(250)  not_null

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_F1_clasificacion',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>