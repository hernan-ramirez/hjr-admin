<?php
/**
 * Table Definition for publicaciones
 */
require_once 'DB/DataObject.php';

class DataObjects_Publicaciones extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'publicaciones';                   // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $id_lista_tablas;                 // int(10)  not_null
    var $id_publicado;                    // int(10)  not_null
    var $id_estructura;                   // int(10)  not_null
    var $id_seccion;                      // int(10)  not_null
    var $posicion;                        // int(10)  not_null

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Publicaciones',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>