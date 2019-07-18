<?php
class DataObjects_Titulos extends  DB_DataObject {
	var $__table = 'titulos'; 
	var $id; // this is a primary id (it's specified in a config file - explained later)
	var $titulo;
	var $promedio;

   // these are usefull to be consistant with a autogenerated file.
    
    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Titulos',$k,$v); }

    // now define your table structure.
    // key is column name, value is type
    function table() {
        return array(
            'id'     => DB_DATAOBJECT_INT,
            'titulo'   => DB_DATAOBJECT_STR,
            'promedio'   => DB_DATAOBJECT_INT 
        );
    }
    
    // now define the keys.
    function keys() {
        return array('id');
    }

}
?>