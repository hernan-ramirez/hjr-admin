<?php
/**
 * Table Definition for ranking_puestos
 */
require_once 'ModelDB/Ranking.php';

class DataObjects_Ranking_puestos extends DataObjects_Ranking
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'ranking_puestos';                 // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $id_ranking;                      // int(10)  not_null
    var $id_jugador;                      // int(10)  not_null
    var $puesto;                          // int(10)  not_null
    var $puntos;                          // int(10)  

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Ranking_puestos',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>