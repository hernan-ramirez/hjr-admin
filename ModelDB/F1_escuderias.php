<?php
/**
 * Table Definition for f1_escuderias
 */
require_once 'ModelDB/F1_carreras.php';

class DataObjects_F1_escuderias extends DataObjects_F1_carreras 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table = 'f1_escuderias';                   // table name
    var $id;                              // int(11)  not_null primary_key auto_increment
    var $nombre;                          // string(100)  not_null
    var $chasis;                          // string(200)  
    var $motor;                           // string(100)  
    var $neumaticos;                      // string(100)  
    var $id_primer_piloto;                // int(11)  
    var $id_segundo_piloto;               // int(11)  
    var $id_tester_piloto;                // int(11)  
    var $debut_f1;                        // string(200)  
    var $gps_disputados;                  // int(11)  
    var $victorias;                       // int(11)  
    var $poles_position;                  // int(11)  
    var $record_vueltas;                  // int(11)  
    var $titulos_mundiales;               // string(200)  
    var $id_pais;                         // int(11)  
    var $peso;                            // string(255)  
    var $amortiguadores;                  // string(255)  
    var $llantas_delanteras;              // string(255)  
    var $llantas_traseras;                // string(255)  
    var $frenos;                          // string(255)  
    var $discos_freno;                    // string(255)  
    var $direccion;                       // string(255)  
    var $volante;                         // string(255)  
    var $asiento;                         // string(255)  
    var $cinturones;                      // string(255)  
    var $deposito_combustible;            // string(255)  
    var $capacidad_combustible;           // string(255)  
    var $proveedor_combustible;           // string(255)  
    var $proveedor_lubricantes;           // string(255)  
    var $bateria;                         // string(255)  
    var $instrumental;                    // string(255)  
    var $configuracion_motor;             // string(255)  
    var $sistema_refrigeracion;           // string(255)  
    var $transmision;                     // string(255)  
    var $dimensiones;                     // string(255)  
    var $director_general;                // string(255)  
    var $director_tecnico;                // string(255)  
    var $domicilio;                       // string(255)  
    var $telefono;                        // string(255)  
    var $web_oficial;                     // string(255)  

    /* ZE2 compatibility trick*/
    function __clone() { return $this;}

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_F1_escuderias',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>