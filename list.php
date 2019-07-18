<?PHP
require_once 'ModelApp/List.php';


/**
 * **
 */
class MainList
{

	function main(){
		
		$queryDecode = unserialize( base64_decode( $_GET['q'] ) );
		$mDO = new MyDO();
		$tL = new Listado();
		
		
		$mDO->getDataObject($queryDecode['object']);
		$tL->getDataGrid($mDO->ob);			
		$tL->sendToTemplate('list.htm');
		
	}	
}

MainList::main();
?>