<?php
/**
 * Table Definition for fotos
 */
require_once 'DB/DataObject.php';

class DataObjects_Fotos extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'fotos';                           // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $alias;                           // string(255)  not_null multiple_key
    var $archivo_imagen;                  // string(255)  
    var $id_pais;                         // int(10)  
    var $id_deporte;                      // int(10)  
    var $id_liga;                         // int(10)  
    var $id_agencias;                     // int(10)  
    var $palablas_claves;                 // string(255)  
    var $_id_usuario;                     // int(10)  
    var $fecha_creacion;                  // datetime(19)  binary

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Fotos',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE

	var $fb_linkDisplayFields = array(
		'archivo_imagen'
	); 
}
?>