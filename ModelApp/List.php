<?PHP
/**
 *
 * Modelo de Listado 
 *
 * Se encarga de generar un listado con todas
 * las relaciones de tablas que se encuentran 
 * especificadas en el .ini de ModelDB
 * Se necesita Structures_DataGrid para funcionar 
 * y FormBuilder para tomar las relaciones del DataObject
 *
 * @link http://pear.php.net/manual/en/package.structures.structures-datagrid.php Sitio Structures_DataGrid
 *
 * @author Hernan Ramirez <Hernan.Javier.Ramirez@gmail.com>
 * @version 1.0
 * @since 2005.03.15
 * @package ModelApp
 * @see Listado
 * @todo <B>Instalar</B> Structures_DataGrid en  /{$include_path}/Structures/DataGrid
 *
 */

/**
 *
 * PLANTILLA
 * DB_DO
 * APP
 * DB_DO_FB
 *
 */
require_once 'ModelApp/Smarty.php';
require_once 'ModelApp/DataObject.php';
require_once 'ModelApp/Application.php';
require_once 'DB/DataObject/FormBuilder.php';

/**
 *
 * Creo la tabla a representar incorporando un layer
 * entre DB y template llamado Structures_DataGrid por
 * Andrew Nagy [andrew.nagy@villanova.edu]
 *
 */
require_once('Structures/DataGrid.php');


/**
 *
 * Listado genérico de mi modelo
 * @see List.php
 * @package ModelApp
 *
 */
class Listado
{

	/**#@+
	 *
	 * Variables del Listado
	 * @var string Directorio de las plantillas despues del /View
	 * @access public
	 *
	 */	
	var $dg;
	var $datos;
	var $smarty;

	var $orden;

	var $rango;
	var $paginas;
	var $pagina;
	/**#@-*/
	
	
	/**
	 *
	 * Doy los valores por defecto
	 * Si no estan seteados por el usuario
	 * Método Constructor
	 *
	 */
	function Listado(){ 

		Application::getCongif();
		$conf = PEAR::getStaticProperty('Application','config');
		if(isset( $_POST['orden'] )){ $this->orden = $_POST['orden']; }else{ $this->orden = 'id DESC' ;}
		if(isset( $_POST['pager']['range'] )){ $this->rango = $_POST['pager']['range']; }else{ $this->rango = $conf['Application']['row_for_page'] ;}
		if(isset( $_POST['pager']['page'] )){ $this->pagina = $_POST['pager']['page']; }else{ $this->pagina = 1 ;}

	}


	/**
	 *
	 * Vuelco el DataGrid
	 * Con campos relacionados
	 * @param $ob
	 * @return $dg
	 * @access public
	 *
	 */
	function getDataGrid($ob){ 

		$ob->orderBy( $this->orden );
		
		if ($this->pagina <= 1) { 
			$numeroRegistro = 1; 
		}else{ 
			$numeroRegistro = $this->pagina * $this->rango - $this->rango + 1; 
		}
		
		$ob->limit( $numeroRegistro , $this->rango ); 
		$ob->find();
		$this->paginas = ceil( $ob->count() / $this->rango );
			
		$dg =& new Structures_DataGrid();
		$dg->bind( $ob, array(
			'formbuilder_integration' => true,
			'generate_columns' => true
		));
		$this->dg = $dg;
		
	}
	
	
	/**
	 *
	 * Asigno las variables para la plantilla
	 * @param $template
	 * @return $sm
	 * @access public
	 *
	 */
	function sendToTemplate($template){	
		
		$sm = $this->smarty;	
		$sm = new MySmarty();
		Application::getLang();
				
		$sm->assign('lang', PEAR::getStaticProperty('Application','lang') );
		$sm->assign( 'datos', $this->dg->_dataSource->fetch() );
		$sm->assign( 'pages', $this->paginas );
		$sm->assign( 'range', $this->rango );

		/**
		 * Mando a mostrar
		 */
		$sm->display( $sm->plantilla . $template );
		
	}
}
?>