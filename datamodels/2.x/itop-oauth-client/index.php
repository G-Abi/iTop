<?php
/**
 *  @copyright   Copyright (C) 2010-2024 Combodo SAS
 *  @license     http://opensource.org/licenses/AGPL-3.0
 */

namespace Combodo\iTop\OAuthClient;

use Combodo\iTop\OAuthClient\Controller\OAuthClientController;

require_once(APPROOT.'application/startup.inc.php');

if (version_compare(ITOP_DESIGN_LATEST_VERSION , '3.0') >= 0) {
	$sTemplates = MODULESROOT.'itop-oauth-client/templates';
} else {
	$sTemplates = MODULESROOT.'itop-oauth-client/templates/legacy';
}

$oUpdateController = new OAuthClientController($sTemplates, 'itop-oauth-client');
$oUpdateController->AllowOnlyAdmin();
$oUpdateController->SetDefaultOperation('CreateMailbox');
$oUpdateController->HandleOperation();


