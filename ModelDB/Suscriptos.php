<?php
/**
 * Table Definition for suscriptos
 */
require_once 'DB/DataObject.php';

class DataObjects_Suscriptos extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'suscriptos';                      // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $nombre;                          // string(255)  not_null
    var $apellido;                        // string(255)  not_null
    var $sexo;                            // string(5)  
    var $fecha_nacimiento;                // date(10)  binary
    var $mail;                            // string(255)  not_null
    var $clave;                           // string(255)  not_null
    var $direccion;                       // string(255)  
    var $id_pais;                         // int(10)  
    var $newsletter;                      // string(255)  
    var $fecha_creacion;                  // datetime(19)  not_null binary

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Suscriptos',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>