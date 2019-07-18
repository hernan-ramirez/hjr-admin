<?php
/**
 * Table Definition for usuarios_perfiles
 */
require_once 'ModelDB/Usuarios.php';

class DataObjects_Usuarios_perfiles extends DataObjects_Usuarios 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'usuarios_perfiles';               // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $perfil;                          // string(255)  not_null
    var $ck_admin;                        // int(1)  
    var $ck_externo;                      // int(1)  

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Usuarios_perfiles',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>