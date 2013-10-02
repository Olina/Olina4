<?php
/**
 * All requests routed through here. This is an overview of what actaully happens during
 * a request.
 *
 * @package OlinaCore
 */

// ---------------------------------------------------------------------------------------
//
// PHASE: BOOTSTRAP
//
define('OLINA_INSTALL_PATH', dirname(__FILE__));
define('OLINA_SITE_PATH', OLINA_INSTALL_PATH . '/site');

require(OLINA_INSTALL_PATH.'/src/bootstrap.php');

$olina = COlina::Instance();


// ---------------------------------------------------------------------------------------
//
// PHASE: FRONTCONTROLLER ROUTE
//
$olina->FrontControllerRoute();


// ---------------------------------------------------------------------------------------
//
// PHASE: THEME ENGINE RENDER
//
$olina->ThemeEngineRender();
