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

$lang = array_merge($lang, [
	'BOTS_24HOUR_TOTAL'	=> [
		1 => ' %d bot,',
		2 => ' %d bots,',
	],
	'USERS_24HOUR_TOTAL'	=>  '%d registrato,',
	'HIDDEN_24HOUR_TOTAL'	=> ' %d nascosto',
	'GUEST_ONLINE_24'		=> [
		1 => ' e %d ospite',
		2 => ' e %d ospiti',
	],
	'LAST_24_HOURS'	=>   'attivo nelle ultime 24 ore',
	'24HOUR_TOPICS'			=> 'Nuovi argomenti %d',
	'24HOUR_POSTS'			=> 'Nuovi post %d',
	'24HOUR_USERS'			=> 'Nuovi utenti %d',
	'NO_ONLINE_BOTS'		=> 'Nessun bot attivo',

	'TWENTYFOURHOUR_STATS'	=> 'Attività nelle ultime 24 ore',
	'TOTAL_24HOUR_USERS'	=> [
		1 => 'In totale era attivo %d utente :: ',
		2 => 'In totale erano attivi %d utenti :: ',
	],
	'SHOW_LIST'	=> 'Mostra elenco',
	'HIDE_LIST'	=> 'Nascondi elenco',
	'EXTENSION_REQUIREMENTS'	=> 'This extension requires phpBB version %1$s.<br>Please check which versions you have and update accordingly to use this extension.',
	//Donation
	'PAYPAL_IMAGE_URL'          => 'https://www.paypalobjects.com/webstatic/en_US/i/btn/png/silver-pill-paypal-26px.png',
	'PAYPAL_ALT'                => 'Donate using PayPal',
	'BUY_ME_A_BEER_URL'         => 'https://paypal.me/RMcGirr83',
	'BUY_ME_A_BEER'				=> 'Buy me a beer for creating this extension',
	'BUY_ME_A_BEER_SHORT'		=> 'Make a donation for this extension',
	'BUY_ME_A_BEER_EXPLAIN'		=> 'This extension is completely free. It is a project that I spend my time on for the enjoyment and use of the phpBB community. If you enjoy using this extension, or if it has benefited your forum, please consider <a href="https://paypal.me/RMcGirr83" target="_blank" rel="noreferrer noopener">buying me a beer</a>. It would be greatly appreciated. <i class="fa fa-smile-o" style="color:green;font-size:1.5em;" aria-hidden="true"></i>',
]);
