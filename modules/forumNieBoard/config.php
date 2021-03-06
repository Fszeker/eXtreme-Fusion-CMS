<?php defined('EF5_SYSTEM') || exit;
/*********************************************************
| eXtreme-Fusion 5
| Content Management System
|
| Copyright (c) 2005-2013 eXtreme-Fusion Crew
| http://extreme-fusion.org/
|
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
*********************************************************/

$mod_info = array(
	'title' => 'forumNieBoard&trade;',
	'description' => 'Forum społecznościowe',
	'developer' => 'eXtreme Crew',
	'support' => 'http://extreme-fusion.org/',
	'version' => '1.0',
	'dir' => 'forumNieBoard',
	'category' => 'forum'
);

$admin_page[1] = array(
	'title' => 'Forum',
	'image' => 'images/protection.png',
	'page' => 'admin/forum.php',
	'perm' => 'admin'
);

$perm[1] = array(
	'name' => 'admin',
	'desc' => 'Zarządzanie modułem forumNieBoard&trade;'
);

$new_table[1] = array(
	'module_forum',
	"(
		`validation_type` TINYINT UNSIGNED NOT NULL DEFAULT '0'
	) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;"
);

$drop_table[1] = 'module_forum';