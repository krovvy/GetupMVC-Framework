<?php
/**
 * All requests routed through here. This is an overview of what actaully happens during
 * a request.
 *
 * @package GetupMVCCore
 */

// ---------------------------------------------------------------------------------------
//
// PHASE: BOOTSTRAP
//
define('GETUPMVC_INSTALL_PATH', dirname(__FILE__));
define('GETUPMVC_SITE_PATH', GETUPMVC_INSTALL_PATH . '/site');

require(GETUPMVC_INSTALL_PATH.'/src/bootstrap.php');

$ly = CGetupMVC::Instance();


// ---------------------------------------------------------------------------------------
//
// PHASE: FRONTCONTROLLER ROUTE
//
$ly->FrontControllerRoute();


// ---------------------------------------------------------------------------------------
//
// PHASE: THEME ENGINE RENDER
//
$ly->ThemeEngineRender();
