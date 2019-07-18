<?php
/**
 * Table Definition for noticias_goltv
 */
require_once 'ModelDB/Noticias.php';

class DataObjects_Noticias_goltv extends DataObjects_Noticias
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'noticias_goltv';                  // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $titulo;                          // string(42)  not_null
    var $copete;                          // string(182)  not_null
    var $cuerpo;                          // blob(16777215)  blob
    var $id_foto;                         // int(10)  
    var $epigrafe;                        // string(255)  
    var $id_pais;                         // int(4)  not_null
    var $id_deporte;                      // int(10)  not_null
    var $id_liga;                         // int(10)  
    var $id_autor;                        // int(4)  
    var $audio;                           // string(255)  
    var $ck_goltv;                        // int(1)  
    var $fecha_creacion;                  // datetime(19)  binary
    var $_id_usuario;                     // int(10)  

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Noticias_goltv',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>