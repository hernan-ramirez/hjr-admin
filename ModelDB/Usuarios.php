<?php
/**
 * Table Definition for usuarios
 */
require_once 'DB/DataObject.php';

class DataObjects_Usuarios extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'usuarios';                        // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $apellido;                        // string(255)  not_null
    var $nombre;                          // string(255)  not_null
    var $usuario;                         // string(255)  not_null
    var $clave;                           // string(255)  not_null
    var $id_perfil;                       // int(10)  not_null
    var $id_pais;                         // int(10)  not_null

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Usuarios',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
	var $fb_linkDisplayFields = array(
		'deporte',
		'apellido'
	); 
}
?>