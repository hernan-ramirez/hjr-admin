<?php
/**
 * Table Definition for usuarios_lista_tablas
 */
require_once 'ModelDB/Usuarios.php';

class DataObjects_Usuarios_lista_tablas extends DataObjects_Usuarios 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'usuarios_lista_tablas';           // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $nombre;                          // string(255)  not_null
    var $tabla;                           // string(255)  
    var $link;                            // string(255)  
    var $include;                         // string(255)  
    var $descripcion;                     // string(255)  
    var $id_sectores;                     // int(10)  not_null

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Usuarios_lista_tablas',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>