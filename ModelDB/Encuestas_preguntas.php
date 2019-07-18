<?php
/**
 * Table Definition for encuestas_preguntas
 */
require_once 'DB/DataObject.php';

class DataObjects_Encuestas_preguntas extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'encuestas_preguntas';             // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $pregunta;                        // string(255)  not_null
    var $fecha_inicio;                    // date(10)  not_null binary
    var $fecha_fin;                       // date(10)  not_null binary
    var $id_trivia;                       // int(10)  
    var $orden;                           // int(5)  

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Encuestas_preguntas',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>