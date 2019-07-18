<?php
/**
 * Table Definition for chicas
 */
require_once 'DB/DataObject.php';

class DataObjects_Chicas extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'chicas';                          // table name
    var $id;                              // int(10)  not_null primary_key auto_increment
    var $nombre;                          // string(200)  
    var $apellido;                        // string(200)  
    var $fecha_nacimiento;                // date(10)  binary
    var $id_pais;                         // int(10)  
    var $ck_activa;                       // int(1)  

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Chicas',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>