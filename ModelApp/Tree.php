<?PHP
/**
 *
 * Manejo de árboles en XML 
 *
 * La idea es volcar el contenido de base desde 
 * el DO modelado en ModelDB hacia la estructura
 * de un XML con las etiquetas que lee nuestro componente
 * de JavaScript, como DIVs anidados.
 *
 * @link http://php.net Sitio PHP
 *
 * @author Hernan Ramirez <Hernan.Javier.Ramirez@gmail.com>
 * @version 1.0
 * @since 2005.03.15
 * @package ModelApp
 * @see Tree
 * @todo <B>Instalar</B> DOMXML como módulo de PHP
 *
 */


/**
 *
 * Arbol model
 * @see Tree.php
 * @package ModelApp
 *
 */
class Tree 
{

	/**
	 *
	 * Documento en forma de objeto del XML
	 * @access public
	 * @var object
	 * 
	 */
	var $doc;

	/**
	 *
	 * Elementos que van a componer el documento
	 * @access private
	 * @var object
	 * 
	 */
	var $elements;
	
	/**
	 *
	 * En caso de que sea desde una carpeta almaceno los archivos
	 * @access private
	 * @var array
	 * 
	 */
	var $files;

	/**
	 *
	 * Creo el XML del arbol con los elementos
	 * a partir de un objecto
	 * @access private
	 * @param $ob
	 * @return $doc y $ele
	 * 
	 */
	function setElementsFromObject($ob){
	
		$doc = domxml_new_doc('1.0');
		//$doc = new DOMDocument;
		$ob->orderBy('id ASC');
		$ob->find();

		while ( $ob->fetch() ) {
			$ele[$ob->id] = $doc->create_element( 'DIV' );
			$contenido = $doc->create_element( 'A' );
			$contenido->set_content( htmlentities($ob->nombre) );				
			$ele[$ob->id]->set_attribute( 'id', $ob->id );			
			$ele[$ob->id]->set_attribute( 'class', 'doc' );
			$ele[$ob->id]->append_child( $contenido );
		}
		
		$this->doc = $doc;
		$this->elements = $ele;
		
	}
	
	
	/**
	 *
	 * Lo estructuro diciendo cuales son sus padres e hijos
	 * @access public
	 * @param $ob
	 * @return $doc
	 * 
	 */
	function setStructuresFromObject($ob){
		
		$this->setElementsFromObject($ob);
	
		$ob->orderBy('id DESC');
		$ob->find();
		$ele = $this->elements;
		$doc = $this->doc;
		
		while ( $ob->fetch() ) {
			if ( $ob->id_estructura != $ob->id ){
				if ( $ob->id_estructura == '' ){
					$ele[$ob->id] = $doc->append_child( $ele[$ob->id] );			
				}else{
					if ( is_object($ele[$ob->id_estructura]) ){ // Verifico si existe el padre
						
						// Desde aquí, si es carpeta lo posiciono primero
						if ( $ele[$ob->id]->get_attribute('class') == 'folder' ){
							$primerElemento = $ele[$ob->id_estructura]->first_child();
							$ele[$ob->id_estructura]->insert_before( $ele[$ob->id] , $primerElemento->next_sibling() );
						}else{
							$ele[$ob->id_estructura]->append_child( $ele[$ob->id] );
						}
						// Para que salgan las carpetas arriba
						
						$ele[$ob->id_estructura]->set_attribute( 'class', 'folder' );
					}
				}
			}
		} //end while
		
	} 


	/**
	 *
	 * Creo el XML del arbol con los elementos
	 * a partir de un directorio
	 * @access private
	 * @param $folder
	 * @return $doc
	 * 
	 */
	function setElementsFromForder($folder){
	
		/**
		 * Listo los archivos de la carpeta Classes 
		 */
		$this->files = &File_Find::glob( '/.*\.php/', $folder, 'perl' ) ;

		$doc = domxml_new_doc('1.0');
		
		$indice = 1;
		while (list ($key, $val) = each ( $this->files )) {
		
			require_once( $folder . $val );

			/**
			 * Armo los links de cada Item 
			 */		
			$q['object'] = strtolower(str_replace('.php', '', $val));
			$class = 'dataobjects_' . $q['object'];
			
			$ele[$class] = $doc->create_element( 'DIV' );
			$ele[$class]->set_attribute( 'id', $indice++ );
			$ele[$class]->set_attribute( 'class', 'doc' );
			
			$a = $doc->create_element( 'A' );			
			$a->set_content( ucfirst(str_replace('_', ' ', str_replace('dataobjects_', '', $class))) );	
			$a->set_attribute( 'href', 'tabsJobs.php?q=' . base64_encode( serialize($q) ) );
			$a->set_attribute( 'target', 'Jobs' );
			
			$ele[$class]->append_child( $a );		

		}
		reset($this->files);
		
		$this->doc = $doc;
		$this->elements = $ele;

	}


	/**
	 *
	 * Lo estructuro diciendo cuales son sus padres e hijos
	 * @access public
	 * @param $folder
	 * @return $doc
	 * 
	 */
	function setStructuresFromFolder($folder){
	
		$this->setElementsFromForder($folder);
		$ele =& $this->elements;
		$doc =& $this->doc;
		
		// Marco el estado de carpetas y documentos, para luego poner las carpetas primero
		while (list ($key, $val) = each ( $this->files )) {
		
			$class = 'dataobjects_' . strtolower(str_replace('.php', '', $val));
			if ( get_parent_class( $class ) != 'db_dataobject'){
				$ele[get_parent_class( $class )]->set_attribute( 'class', 'folder' );
			}
			
		}// end while
		
		
		reset($this->files);
		while (list ($key, $val) = each ( $this->files )) {
		
			$class = 'dataobjects_' . strtolower(str_replace('.php', '', $val));

			if ( get_parent_class( $class ) != 'db_dataobject'){
				$padre = $ele[get_parent_class( $class )];
			}else{
				$padre = $doc;	
			}
			
			// Desde aquí, si es carpeta lo posiciono primero						
			if ( $ele[$class]->get_attribute('class') == 'folder' && !is_null($padre->first_child()) ){
				$primerElemento = $padre->first_child();
				$padre->insert_before( $ele[$class] , $primerElemento->next_sibling() );
			}else{
				$padre->append_child( $ele[$class] );
			}
			// Para que salgan las carpetas arriba
			
		}// end while
	
	}
	
}
?>