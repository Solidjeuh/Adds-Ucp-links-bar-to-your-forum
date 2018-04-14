<?php
/**
*
* @package phpBB Extension - phpbbucplinks
* @copyright (c) 2018 martin - http://www.martins-phpbb.com
* Nederlandse vertaling @ Solidjeuh <https://www.muziekpromo.net>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'USER_CONTROL_PANEL'        => 'UCP',
	'FRONT_PAGE'                => 'Voorpagina',
	'OVERVIEW'                  => 'Overzicht',
	'MANAGE_SUBSCRIPTIONS'      => 'Beheer abonnementen',
	'MANAGE_BOOKMARKS'          => 'Beheer favorieten',
	'MANAGE_DRAFTS'             => 'Beheer concepten',
	'MANAGE_ATTACHMENTS'        => 'Beheer bijlagen',
	'MANAGE_NOTIFICATIONS'      => 'Beheer notificaties',
	'PROFILES'                  => 'Profiel',
	'EDIT_PROFILE'              => 'Bewerk Profiel',
	'EDIT_SIGNATURE'            => 'Bewerk onderschrift',
	'EDIT_AVATAR'               => 'Bewerk Avatar',
	'EDIT_ACCOUNT_SETTINGS'     => 'Bewerk Account instellingen',
	'MANAGE_REMEMBER_ME'        => 'Beheer "Onthoud me"',
	'BOARD_PREFERENCES'         => 'Forum voorkeuren',
	'EDIT_GLOBAL_SETTINGS'      => 'Bewerk Globale Instellingen',
	'EDIT_POSTING_DEFAULTS'     => 'Wijzig bericht standaarden',
	'EDIT_DISPLAY_OPTIONS'      => 'Wijzig weergave-opties',
	'EDIT_NOTIFICATION_OPTIONS' => 'Wijzig notificatie opties',
	'EXTENSIONS'                => 'Extensies',
	'USER_GROUPS'               => 'Gebruikersgroepen',
	'EDIT_MEMBERSHIPS'          => 'Wijzig lidmaatschappen',
	'MANAGE_GROUPS'             => 'Beheer groepen',
	'FRIENDS_FOE'               => 'Vrienden & Vijanden',
	'MANAGE_FRIENDS'            => 'Beheer vrienden',
	'MANAGE_FOES'               => 'Beheer vijanden',
	'PRIVATE_MESSAGESS'         => 'Privé berichten',
	'COMPOSE_MESSAGE'           => 'Bericht opstellen',
	'MANAGE_PM_DRAFTS'          => 'Beheer concepten',
	'INBOX'                     => 'Inbox',
	'OUTBOX'                    => 'Outbox',
	'SENT_MESSAGES'             => 'Verzend berichten',
	'RULES_FOLDERS_SETTINGS'    => 'Regels, mappen en instellingen',
	'MCHAT_PREFERENCES'         => 'Mchat Voorkeuren',
	'AJAX_CHAT_SETTINGS'        => 'Ajax Chat Instellingen',
	'MANAGE_LINK_ACCOUNTS'      => 'Beheer link accounts',
	'CREATE_LINK_ACCOUNT'       => 'Maak link accounts',
));
