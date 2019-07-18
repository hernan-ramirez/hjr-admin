<?php
/**
 * Table Definition for proyecto_tareas
 */
require_once 'DB/DataObject.php';

class DataObjects_Proyecto_tareas extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'proyecto_tareas';                 // table name
    var $id;                              // int(10)  not_null primary_key auto_increment
    var $tarea;                           // string(255)  not_null
    var $descripcion;                     // blob(16777215)  blob
    var $id_usuario;                      // int(10)  
    var $id_proyecto_estados;             // int(10)  
    var $fecha_inicio;                    // date(10)  binary
    var $fecha_fin;                       // date(10)  binary

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Proyecto_tareas',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>