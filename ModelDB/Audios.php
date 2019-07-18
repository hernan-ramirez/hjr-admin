<?php
/**
 * Table Definition for audios
 */
require_once 'DB/DataObject.php';

class DataObjects_Audios extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'audios';                          // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $nombre;                          // string(255)  not_null
    var $titulo;                          // string(255)  not_null
    var $archivo_audio;                   // string(255)  not_null
    var $duracion;                        // string(100)  
    var $entrevistado;                    // string(255)  
    var $entrevistador;                   // string(255)  
    var $id_pais;                         // int(10)  
    var $id_deporte;                      // int(10)  
    var $fecha_creacion;                  // datetime(19)  not_null binary

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Audios',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>