<?php
/**
 * Table Definition for usuarios_permisos
 */
require_once 'ModelDB/Usuarios.php';

class DataObjects_Usuarios_permisos extends DataObjects_Usuarios 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'usuarios_permisos';               // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $id_perfil;                       // int(10)  not_null
    var $id_tablas;                       // int(10)  not_null
    var $mostrar_listado;                 // blob(16777215)  blob
    var $deshabilitar_abm;                // blob(16777215)  blob
    var $oculto_abm;                      // blob(16777215)  blob
    var $ck_activo;                       // int(1)  

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Usuarios_permisos',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>