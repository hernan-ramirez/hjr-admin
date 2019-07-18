<?php
/**
 * Table Definition for secciones
 */
require_once 'DB/DataObject.php';

class DataObjects_Secciones extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'secciones';                       // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $id_lista_tablas;                 // int(10)  not_null
    var $seccion;                         // string(255)  not_null
    var $cantidad;                        // int(10)  not_null
    var $orden;                           // int(10)  

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Secciones',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>