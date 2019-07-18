<?PHP
/**
 *
 * Archivo en Blanco
 *
 * El objetivo de este archivo es el de presentar una pantalla 
 * inicial en el frame derecho, en la actualidad en blanco o con el 
 * diseño que se le ponga a <B>blank.htm</B> del template gráfico.
 * @link http://localhost/Admin.2005/View/Default/blank.htm Presentación Gráfica
 *
 * @author Hernan Ramirez <Hernan.Javier.Ramirez@gmail.com>
 * @version 1.0
 * @since 2005.03.15
 * @package ControllerApp
 * @todo Implementar mensaje de bienvenida o lo que se pida con alguna utilidad.
 * @see MainBlank
 *
 */
 

/**
 * Incluyo mi modelo de plantilla.
 */ 
require_once 'ModelApp/Smarty.php';


/**
 * Clase principal de <B>blank.php</B>
 * @see blank.php
 * @package ControllerApp
 */ 
class MainBlank
{

	/**
	 * <B>setSmarty</B>
	 * Creo una instancia de la plantilla para visualizarla.
	 *
	 * @see MySmarty
	 * @param Sin parámetros
	 * @return NULL
	 * @access public
	 * @static
	 * @final
	 */
	function main(){
	
		/**
		 * Mando a mostrar
		 */	
		$sm = new MySmarty();
		$sm->display( $sm->plantilla . 'blank.htm' );
		
	}

}


MainBlank::main();
?>