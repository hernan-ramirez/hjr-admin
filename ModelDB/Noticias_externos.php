<?php
/**
 * Table Definition for noticias_externos
 */
require_once 'ModelDB/Noticias.php';

class DataObjects_Noticias_externos extends DataObjects_Noticias
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'noticias_externos';               // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $id_noticia;                      // int(10)  not_null
    var $prioridad;                       // int(2)  not_null

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Noticias_externos',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>