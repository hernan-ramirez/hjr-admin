<?php
/**
 * Table Definition for estructura_contenido
 */
require_once 'ModelDB/Estructura.php';

class DataObjects_Estructura_contenido extends DataObjects_Estructura
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'estructura_contenido';            // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $id_estructura;                   // int(10)  not_null
    var $id_lista_tablas;                 // int(10)  not_null

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Estructura_contenido',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>