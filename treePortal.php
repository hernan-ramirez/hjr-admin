<?PHP
require_once 'ModelApp/DataObject.php';
require_once 'ModelApp/Smarty.php';
require_once 'ModelApp/Tree.php';
require_once 'ModelApp/Application.php';

class TreePortal
{
	
	function main(){
	
		/**
		 *
		 * Objeto del arbol en base  
		 *
		 */
		$mDO = new MyDO();
		$mDO->getDataObject('estructura');		

		$arbol = new Tree;
		$arbol->setStructuresFromObject($mDO->ob);		
			

		/**
		 * Asigno las variables a la plantilla
		 */
		$sm = new MySmarty();
		$sm->assign('arbol', $arbol->doc->dump_mem() );

		Application::getLang();
		$sm->assign('lang', PEAR::getStaticProperty('Application','lang') );
		
		/**
		 * Mando a mostrar
		 */
		$sm->display($sm->plantilla . 'treeAdmin.htm');
		
	}
	
}

TreePortal::main();
?>