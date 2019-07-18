<?php
/**
 * Table Definition for popups
 */
require_once 'DB/DataObject.php';

class DataObjects_Popups extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'popups';                          // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $nombre;                          // string(255)  not_null
    var $archivo_popups;                  // string(255)  not_null
    var $link;                            // string(255)  
    var $id_pais;                         // int(10)  
    var $cliente;                         // string(255)  
    var $ancho;                           // int(4)  not_null
    var $alto;                            // int(4)  not_null
    var $arriba;                          // int(4)  not_null
    var $derecha;                         // int(4)  not_null
    var $menubar;                         // string(3)  not_null
    var $scrollbars;                      // string(3)  not_null
    var $palablas_claves;                 // string(255)  
    var $fecha_creacion;                  // datetime(19)  binary

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Popups',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>