<?php

/**
 * @defgroup pages_admin
 */
 
/**
 * @file pages/admin/index.php
 *
 * Copyright (c) 2000-2012 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Handle requests for site administration functions. 
 *
 * @ingroup pages_admin
 */



switch ($op) {
	//
	// Settings
	//
	case 'settings':
	case 'saveSettings':
		define('HANDLER_CLASS', 'AdminSettingsHandler');
		import('pages.admin.AdminSettingsHandler');
		break;
	//
	// Conference Management
	//
	case 'conferences':
		define('HANDLER_CLASS', 'AdminConferenceHandler');
		import('pages.admin.AdminConferenceHandler');
		break;
	//
	// Languages
	//
	case 'languages':
		define('HANDLER_CLASS', 'AdminLanguagesHandler');
		import('pages.admin.AdminLanguagesHandler');
		break;
	//
	// Authentication sources
	//
	case 'auth':
	case 'updateAuthSources':
	case 'createAuthSource':
	case 'editAuthSource':
	case 'updateAuthSource':
	case 'deleteAuthSource':
		define('HANDLER_CLASS', 'AuthSourcesHandler');
		import('pages.admin.AuthSourcesHandler');
		break;
	//
	// Merge users
	//
	case 'mergeUsers':
		define('HANDLER_CLASS', 'AdminPeopleHandler');
		import('pages.admin.AdminPeopleHandler');
		break;
	//
	// Administrative functions
	//
	case 'systemInfo':
	case 'phpinfo':
	case 'expireSessions':
	case 'clearTemplateCache':
	case 'clearDataCache':
		define('HANDLER_CLASS', 'AdminFunctionsHandler');
		import('pages.admin.AdminFunctionsHandler');
		break;
	case 'index':
		define('HANDLER_CLASS', 'AdminHandler');
		import('pages.admin.AdminHandler');
		break;
}

?>
