<?php
/**
 * Table Definition for banners
 */
require_once 'DB/DataObject.php';

class DataObjects_Banners extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'banners';                         // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $nombre;                          // string(255)  not_null
    var $archivo_banners;                 // string(255)  not_null
    var $link;                            // string(255)  
    var $id_destino;                      // int(10)  not_null
    var $id_pais;                         // int(10)  
    var $cliente;                         // string(255)  
    var $palablas_claves;                 // string(255)  
    var $fecha_creacion;                  // datetime(19)  binary

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Banners',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>