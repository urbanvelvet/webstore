<?php
/**
* WebS ite Global Settings
*
*/

require_once('webstore.conf');  

define('SALT_LENGTH', 9);

// WebSite Settings  ========================================

$root				= $_SERVER['DOCUMENT_ROOT'];
$rootArray 			= explode('/', $root);
array_pop($rootArray);
$baseDir			= implode('/', $rootArray).'/';
$webDir				= $baseDir. '/htdocs/';
$domain				= $_SERVER['SERVER_NAME'];
$currentPage 		= $_SERVER['PHP_SELF'];

// Session Settings ===========================================

# session_save_path($baseDir. 'sessions');
# session_cache_limiter('private, must-revalidate');
# session_cache_expire(30);

session_cache_limiter("nocache");
session_name('YourVisitID');
session_start();

$_SESSION['Domain'] = $domain;

// WebStore Settings ========================================

$Options_MaxRows	= array(10, 25, 50, 100);
$maxRows			= $Options_MaxRows[0];

$C_NavGroupId				= '';
$Class_1					= 0;
$Class_2					= 0;
$Class_3					= 0;
$searchString               = '';

?>