<?php
class JConfig {
/* Site Settings */
var $offline = '0';
var $offline_message = 'Witryna jest w trakcie prac konserwacyjnych.<br /> Zajrzyj p�niej.';
var $sitename = 'Kraina Mroku - Aleara MMORPG';
var $editor = 'tinymce';
var $list_limit = '20';
var $legacy = '0';
/* Debug Settings */
var $debug = '0';
var $debug_lang = '0';
/* Database Settings */
var $dbtype = 'mysql';
var $host = 'sql.boo.pl';
var $user = 'demonix';
var $password = 'nowinski0704';
var $db = 'aleara';
var $dbprefix = 'joomla_';
/* Server Settings */
var $live_site = '';
var $secret = 'Vzib70l1Jrm9gV4Z';
var $gzip = '0';
var $error_reporting = '-1';
var $helpurl = 'http://help.joomla.org';
var $xmlrpc_server = '0';
var $ftp_host = '127.0.0.1';
var $ftp_port = '21';
var $ftp_user = '';
var $ftp_pass = '';
var $ftp_root = '';
var $ftp_enable = '0';
var $force_ssl = '0';
/* Locale Settings */
var $offset = '0';
var $offset_user = '0';
/* Mail Settings */
var $mailer = 'mail';
var $mailfrom = 'syer@wp.pl';
var $fromname = 'Kraina Mroku - Aleara MMORPG';
var $sendmail = '/usr/sbin/sendmail';
var $smtpauth = '0';
var $smtpsecure = 'none';
var $smtpport = '25';
var $smtpuser = '';
var $smtppass = '';
var $smtphost = 'localhost';
/* Cache Settings */
var $caching = '0';
var $cachetime = '15';
var $cache_handler = 'file';
/* Meta Settings */
var $MetaDesc = 'Joomla! - dynamiczny system portalowy i system zarz�dzania tre�ci�';
var $MetaKeys = 'joomla, pcj1x5y2z';
var $MetaTitle = '1';
var $MetaAuthor = '1';
/* SEO Settings */
var $sef           = '0';
var $sef_rewrite   = '0';
var $sef_suffix    = '0';
/* Feed Settings */
var $feed_limit   = 10;
var $feed_email   = 'author';
var $log_path = '/home/sites/a/al/ale/aleara.boo.pl/portal/logs';
var $tmp_path = '/home/sites/a/al/ale/aleara.boo.pl/portal/tmp';
/* Session Setting */
var $lifetime = '15';
var $session_handler = 'database';
}
?>