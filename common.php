<?php

/**
*
*
* @package - Activity 24 hours
* @copyright (c) 2015 RMcGirr83
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
// Some characters you may want to copy&paste:
// ’ » “ ” …

$lang = array_merge($lang, array(
	'BOTS_24HOUR_TOTAL'	=> array(
		1 => '%d bot',
		2 => '%d bots',
	),
	'USERS_24HOUR_TOTAL'	=>  '%d registrati,',
	'HIDDEN_24HOUR_TOTAL'	=> ' %d nascosti, ',
	'GUEST_ONLINE_24'		=> array(
		1 => ' and %d ospite',
		2 => ' and %d ospiti',
	),
	'LAST_24_HOURS'	=> ' attivo nelle ultime 24 ore',
	'24HOUR_TOPICS'			=> 'Nuovi Argomenti %d',
	'24HOUR_POSTS'			=> 'Nuovi Post %d',
	'24HOUR_USERS'			=> 'Nuovi Utenti %d',
	'NO_ONLINE_BOTS'		=> 'Nessun bot attivo',

	'TWENTYFOURHOUR_STATS'	=> 'Attività nelle ultime 24 ore',
	'TOTAL_24HOUR_USERS'	=> array(
		1 => 'In total there was %d utente :: ',
		2 => 'In total there were %d utenti :: ',
	),
));
