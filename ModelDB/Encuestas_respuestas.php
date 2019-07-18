<?php
/**
 * Table Definition for encuestas_respuestas
 */
require_once 'ModelDB/Encuestas_preguntas.php';

class DataObjects_Encuestas_respuestas extends DataObjects_Encuestas_preguntas 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'encuestas_respuestas';            // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $respuesta;                       // string(255)  not_null
    var $id_preguntas;                    // int(10)  not_null
    var $votos;                           // int(5)  
    var $orden;                           // int(5)  not_null
    var $ck_correcta;                     // int(1)  

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Encuestas_respuestas',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>