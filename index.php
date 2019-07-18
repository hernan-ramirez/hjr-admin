<?PHP
/**
 *
 * Archivo de Marcos 
 *
 * Es el contenedor de FRAMESETs 
 * Inicia los marcos en <B>indexFrame.htm</B>.<BR>
 *
 * Esta Formado por:
 *
	*<PRE>
	*<var>INDEXFRAME</var>
	*  <B>"Menu"</B>
	*    &#8226;tabsMenu (tabs con controles para los árboles)
	*      &deg;treeAdmin
	*      &deg;treePortal
	*  <B>"Jobs"</B>
	*    &#8226;blank
	*    &#8226;tabsJobs (tabs sin controles)
	*      &deg;list
	*      &deg;form
	*    &#8226;tabsJobNewOpen (tabs sin controles)
	*      &deg;form
	*      &deg;relations
	*      &deg;public
	*</PRE>
 *
 * @link http://localhost/Admin.2005/View/Default/indexFrame.htm Presentación Gráfica
 *
 * @author Hernan Ramirez <Hernan.Javier.Ramirez@gmail.com>
 * @version 1.0
 * @since 2005.03.15
 * @package ControllerApp
 * @see MainIndex
 *
 */


/**
 * Incluyo mi modelo de plantilla.
 */ 
require_once 'ModelApp/Smarty.php';

/**
 * Clase principal de <B>index.php</B>
 * @see index.php
 * @package ControllerApp
 */ 
class MainIndex
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
		$sm->display( $sm->plantilla . 'indexFrame.htm' );
		
	}

}

MainIndex::main();
?>