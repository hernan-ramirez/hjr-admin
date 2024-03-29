<?php /*
 * FCKeditor - The text editor for internet
 * Copyright (C) 2003-2004 Frederico Caldeira Knabben
 * 
 * Licensed under the terms of the GNU Lesser General Public License:
 * 		http://www.opensource.org/licenses/lgpl-license.php
 * 
 * For further information visit:
 * 		http://www.fckeditor.net/
 * 
 * File Name: io.php
 * 	This is the File Manager Connector for ASP.
 * 
 * Version:  2.0 RC2
 * Modified: 2004-12-17 07:50:01
 * 
 * File Authors:
 * 		Frederico Caldeira Knabben (fredck@fckeditor.net)
 */

function GetUrlFromPath( $resourceType, $folderPath )
{
	if ( $resourceType == '' )
		return RemoveFromEnd( $GLOBALS["UserFilesPath"], '/' ) . $folderPath ;
	else
		return $GLOBALS["UserFilesPath"] . $resourceType . $folderPath ;
}

function RemoveExtension( $fileName )
{
	return substr( $fileName, 0, strrpos( $fileName, '.' ) ) ;
}

function ServerMapFolder( $resourceType, $folderPath )
{
	// Get the resource type directory.
//	$sResourceTypePath = $GLOBALS["UserFilesDirectory"] . $resourceType . '\\' ;
	$sResourceTypePath = $GLOBALS["UserFilesDirectory"] . $resourceType . '/' ;
	
	// Ensure that the directory exists.
	CreateServerFolder( $sResourceTypePath ) ;

	// Return the resource type directory combined with the required path.
//	return $sResourceTypePath . str_replace( '/', '\\', RemoveFromStart( $folderPath, '/' ) ) ;
	return $sResourceTypePath . RemoveFromStart( $folderPath, '/' ) ;
}

function GetParentFolder( $folderPath )
{
	$sPattern = "-[/\\\\][^/\\\\]+[/\\\\]?$-" ;
	return preg_replace( $sPattern, '', $folderPath ) ;
}

function CreateServerFolder( $folderPath )
{
	$sParent = GetParentFolder( $folderPath ) ;

	// Check if the parent exists, or create it.
	if ( !file_exists( $sParent ) ) 
	{
		$sErrorMsg = CreateServerFolder( $sParent ) ;
		if ( $sErrorMsg != '' )
			return $sErrorMsg ;
	}
	
	if ( !file_exists( $folderPath ) )
	{
		// Turn off all error reporting.
		error_reporting( 0 ) ;
		// Enable error tracking to catch the error.
		ini_set( 'track_errors', '1' ) ;

		mkdir( $folderPath, 0777 ) ;

		$sErrorMsg = $php_errormsg ;

		// Restore the configurations.
		ini_restore( 'track_errors' ) ;
		ini_restore( 'error_reporting' ) ;

		return $sErrorMsg ;
	}
	else
		return '' ;
}

function GetRootPath()
{
	$sRealPath = realpath( './' ) ; 

//	$sSelfPath = str_replace( '/', '\\', $_SERVER['PHP_SELF'] ) ;
	$sSelfPath = $_SERVER['PHP_SELF'] ;
//	$sSelfPath = substr( $sSelfPath, 0, strrpos( $sSelfPath, '\\' ) ) ;
	$sSelfPath = substr( $sSelfPath, 0, strrpos( $sSelfPath, '/' ) ) ;

	return substr( $sRealPath, 0, strlen( $sRealPath ) - strlen( $sSelfPath ) ) ;
}
?>