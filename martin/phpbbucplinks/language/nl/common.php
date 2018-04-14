<?php
/**
*
* @package phpBB Extension - phpbbucplinks
* @copyright (c) 2018 martin - http://www.martins-phpbb.com
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
	'FRONT_PAGE'                => 'Front Page',
	'OVERVIEW'                  => 'Overview',
	'MANAGE_SUBSCRIPTIONS'      => 'Manage Subscriptions',
	'MANAGE_BOOKMARKS'          => 'Manage Bookmarks',
	'MANAGE_DRAFTS'             => 'Manage Drafts',
	'MANAGE_ATTACHMENTS'        => 'Manage Attachments',
	'MANAGE_NOTIFICATIONS'      => 'Manage Notifications',
	'PROFILES'                  => 'Profile',
	'EDIT_PROFILE'              => 'Edit Profile',
	'EDIT_SIGNATURE'            => 'Edit Signature',
	'EDIT_AVATAR'               => 'Edit Avatar',
	'EDIT_ACCOUNT_SETTINGS'     => 'Edit Account Settings',
	'MANAGE_REMEMBER_ME'        => 'Manage "Remember Me"',
	'BOARD_PREFERENCES'         => 'Board Preferences',
	'EDIT_GLOBAL_SETTINGS'      => 'Edit Global Settings',
	'EDIT_POSTING_DEFAULTS'     => 'Edit Posting Defaults',
	'EDIT_DISPLAY_OPTIONS'      => 'Edit Display Options',
	'EDIT_NOTIFICATION_OPTIONS' => 'Edit Notification Options',
	'EXTENSIONS'                => 'Extensions',
	'USER_GROUPS'               => 'Usergroups',
	'EDIT_MEMBERSHIPS'          => 'Edit Memberships',
	'MANAGE_GROUPS'             => 'Manage Groups',
	'FRIENDS_FOE'               => 'Friends & Foes',
	'MANAGE_FRIENDS'            => 'Manage Friends',
	'MANAGE_FOES'               => 'Manage Foes',
	'PRIVATE_MESSAGESS'         => 'Private Messages',
	'COMPOSE_MESSAGE'           => 'Compose Message',
	'MANAGE_PM_DRAFTS'          => 'Manage Pm Draft',
	'INBOX'                     => 'Inbox',
	'OUTBOX'                    => 'Outbox',
	'SENT_MESSAGES'             => 'Sent Messages',
	'RULES_FOLDERS_SETTINGS'    => 'Rules Folder Settings',
	'MCHAT_PREFERENCES'         => 'Mchat Preferences',
	'AJAX_CHAT_SETTINGS'        => 'Ajax Chat Settings',
	'MANAGE_LINK_ACCOUNTS'      => 'Manage link accounts',
	'CREATE_LINK_ACCOUNT'       => 'Create link accounts',
));
