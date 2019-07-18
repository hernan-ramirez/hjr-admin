<?php
/**
 * Table Definition for opiniones
 */
require_once 'DB/DataObject.php';

class DataObjects_Opiniones extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'opiniones';                       // table name
    var $id;                              // int(4)  not_null primary_key auto_increment
    var $titulo;                          // string(255)  not_null
    var $copete;                          // blob(65535)  blob
    var $id_columnista;                   // int(11)  not_null
    var $cuerpo;                          // blob(16777215)  not_null blob
    var $id_autor;                        // int(10)  
    var $fecha_creacion;                  // datetime(19)  binary

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Opiniones',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>