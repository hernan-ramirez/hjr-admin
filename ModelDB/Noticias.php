<?php
/**
 * Table Definition for noticias
 */
require_once 'DB/DataObject.php';

class DataObjects_Noticias extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'noticias';                        // table name
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
    var $ck_movil;                        // int(1)  
    var $fecha_creacion;                  // datetime(19)  binary
    var $_id_usuario;                     // int(10)  

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Noticias',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
	
	var $fb_fieldLabels = array(
		'ck_goltv' => 'Sale en GolTV'
	);
	
	var $fb_linkDisplayFields = array(
		'titulo'
	); 
    
}
?>