<?php
/**
 * Table Definition for entrevistas
 */
require_once 'DB/DataObject.php';

class DataObjects_Entrevistas extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'entrevistas';                     // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $titulo;                          // string(255)  not_null
    var $copete;                          // blob(65535)  not_null blob
    var $cuerpo;                          // blob(16777215)  not_null blob
    var $id_pais;                         // int(10)  
    var $id_deporte;                      // int(10)  
    var $id_liga;                         // int(10)  
    var $entrevistado;                    // string(100)  
    var $id_foto;                         // int(10)  
    var $id_autor;                        // int(10)  
    var $audio;                           // string(255)  
    var $fecha_creacion;                  // datetime(19)  binary

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Entrevistas',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>