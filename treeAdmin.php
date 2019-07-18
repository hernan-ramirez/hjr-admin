<?PHP
require_once 'File/Find.php';
require_once 'ModelApp/Smarty.php';
require_once 'ModelApp/Application.php';
require_once 'ModelApp/Tree.php';

class MainTree
{
	
	function main(){
	
		$arbol = new Tree;
		$arbol->setStructuresFromFolder('./ModelDB/');
		
		
		/**
		 * Asigno las variables a la plantilla
		 */
		$sm = new MySmarty();
		Application::getLang();
		
		$sm->assign('lang', PEAR::getStaticProperty('Application','lang') );
		$sm->assign('arbol', $arbol->doc->dump_mem() );
		
		
		/**
		 * Mando a mostrar
		 */
		$sm->display($sm->plantilla . 'treeAdmin.htm');
		
	}
	
}

MainTree::main();
?>