<?php
/**
 * Table Definition for trivias_participantes
 */
require_once 'ModelDB/Trivias.php';

class DataObjects_Trivias_participantes extends DataObjects_Trivias 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'trivias_participantes';           // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $id_suscripto;                    // int(10)  not_null
    var $id_trivia;                       // int(10)  not_null
    var $ck_correcta;                     // int(1)  not_null

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Trivias_participantes',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>