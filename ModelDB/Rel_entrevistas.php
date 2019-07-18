<?php
/**
 * Table Definition for rel_entrevistas
 */
require_once 'ModelDB/Relaciones.php';

class DataObjects_Rel_entrevistas extends DataObjects_Relaciones 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'rel_entrevistas';                 // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $id_noticia;                      // int(10)  not_null
    var $id_entrevistas;                  // int(10)  not_null

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Rel_entrevistas',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>