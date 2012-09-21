CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_added` datetime NOT NULL,
  `orig_login` datetime NOT NULL,
  `status` enum('active','suspended','closed') NOT NULL DEFAULT 'active',
  `logged_in` enum('Y','N') NOT NULL DEFAULT 'N',
  `receive_email` enum('Y','N') NOT NULL DEFAULT 'Y',
  `last_login` datetime NOT NULL,
  `last_response` datetime NOT NULL,
  `notes` text NOT NULL,
  `orig_ip` varchar(48) NOT NULL,
  `orig_host` varchar(48) NOT NULL,
  `last_ip` varchar(48) NOT NULL,
  `last_host` varchar(48) NOT NULL,
  `username` varchar(48) NOT NULL,
  `password` varchar(255) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL DEFAULT 'english',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;

CREATE TABLE IF NOT EXISTS `cfg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `max_slots` int(12) NOT NULL DEFAULT '12',
  `port` int(12) NOT NULL,
  `date_added` datetime NOT NULL,
  `last_updated` datetime NOT NULL,
  `type` enum('game','voip','other') NOT NULL DEFAULT 'other',
  `available` enum('Y','N') NOT NULL DEFAULT 'Y',
  `based_on` enum('cmd','cfg') NOT NULL DEFAULT 'cmd',
  `is_steam` enum('Y','N') NOT NULL DEFAULT 'N',
  `is_punkbuster` enum('Y','N') NOT NULL DEFAULT 'N',
  `notes` text NOT NULL,
  `description` text NOT NULL,
  `cmd_line` text NOT NULL,
  `automagical` blob NOT NULL,
  `size` varchar(36) NOT NULL,
  `short_name` varchar(36) NOT NULL,
  `query_name` varchar(64) NOT NULL,
  `steam_name` varchar(128) NOT NULL,
  `long_name` varchar(255) NOT NULL,
  `mod_name` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `style` varchar(255) NOT NULL,
  `log_file` varchar(255) NOT NULL,
  `reserved_ports` varchar(255) NOT NULL,
  `tcp_ports` varchar(255) NOT NULL,
  `udp_ports` varchar(255) NOT NULL,
  `executable` varchar(255) NOT NULL,
  `map` varchar(255) NOT NULL,
  `setup_cmd` varchar(255) NOT NULL,
  `working_dir` varchar(255) NOT NULL,
  `setup_dir` varchar(255) NOT NULL,
  `config_file` varchar(255) NOT NULL,
  `pid_file` varchar(255) NOT NULL,
  `cfg_default` text NOT NULL,
  `cfg_ip` varchar(64) NOT NULL,
  `cfg_port` varchar(64) NOT NULL,
  `cfg_max_slots` varchar(64) NOT NULL,
  `cfg_map` varchar(64) NOT NULL,
  `cfg_password` varchar(64) NOT NULL,
  `cfg_internet` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;


CREATE TABLE IF NOT EXISTS `cfg_addons` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `srvid` int(11) unsigned NOT NULL,
  `networkid` int(11) unsigned NOT NULL,
  `date_added` datetime NOT NULL,
  `type` enum('mod','mappack','other') NOT NULL,
  `available` enum('Y','N') NOT NULL DEFAULT 'Y',
  `status` enum('complete','running') NOT NULL DEFAULT 'running',
  `notes` text NOT NULL,
  `remove_dirs` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `addon_hash` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;

CREATE TABLE IF NOT EXISTS `cfg_configs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `srvid` int(11) unsigned NOT NULL,
  `name` varchar(64) NOT NULL,
  `dir` varchar(128) NOT NULL,
  `description` varchar(255) NOT NULL,
  `rmcmd1` varchar(64) NOT NULL,
  `rmcmd2` varchar(64) NOT NULL,
  `rmcmd3` varchar(64) NOT NULL,
  `rmcmd4` varchar(64) NOT NULL,
  `rmcmd5` varchar(64) NOT NULL,
  `rmcmd6` varchar(64) NOT NULL,
  `rmcmd7` varchar(64) NOT NULL,
  `rmcmd8` varchar(64) NOT NULL,
  `rmcmd9` varchar(64) NOT NULL,
  `rmcmd10` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;

CREATE TABLE IF NOT EXISTS `cfg_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `srvid` int(11) NOT NULL,
  `opt1_name` varchar(255) NOT NULL,
  `opt1_edit` varchar(255) NOT NULL DEFAULT 'N',
  `opt1_value` varchar(255) NOT NULL,
  `opt2_name` varchar(255) NOT NULL,
  `opt2_edit` varchar(255) NOT NULL DEFAULT 'N',
  `opt2_value` varchar(255) NOT NULL,
  `opt3_name` varchar(255) NOT NULL,
  `opt3_edit` varchar(255) NOT NULL DEFAULT 'N',
  `opt3_value` varchar(255) NOT NULL,
  `opt4_name` varchar(255) NOT NULL,
  `opt4_edit` varchar(255) NOT NULL DEFAULT 'N',
  `opt4_value` varchar(255) NOT NULL,
  `opt5_name` varchar(255) NOT NULL,
  `opt5_edit` varchar(255) NOT NULL DEFAULT 'N',
  `opt5_value` varchar(255) NOT NULL,
  `opt6_name` varchar(255) NOT NULL,
  `opt6_edit` varchar(255) NOT NULL DEFAULT 'N',
  `opt6_value` varchar(255) NOT NULL,
  `opt7_name` varchar(255) NOT NULL,
  `opt7_edit` varchar(255) NOT NULL DEFAULT 'N',
  `opt7_value` varchar(255) NOT NULL,
  `opt8_name` varchar(255) NOT NULL,
  `opt8_edit` varchar(255) NOT NULL DEFAULT 'N',
  `opt8_value` varchar(255) NOT NULL,
  `opt9_name` varchar(255) NOT NULL,
  `opt9_edit` varchar(255) NOT NULL DEFAULT 'N',
  `opt9_value` varchar(255) NOT NULL,
  `opt10_name` varchar(255) NOT NULL,
  `opt10_edit` varchar(255) NOT NULL DEFAULT 'N',
  `opt10_value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;

CREATE TABLE IF NOT EXISTS `cfg_rcon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `srvid` int(11) NOT NULL,
  `cmd` varchar(255) NOT NULL,
  `allow_client` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `billing_clientid` int(10) unsigned NOT NULL,
  `date_added` datetime NOT NULL,
  `orig_login` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `last_response` datetime NOT NULL,
  `status` enum('active','suspended','closed') NOT NULL DEFAULT 'active',
  `logged_in` enum('Y','N') NOT NULL DEFAULT 'N',
  `notes` text NOT NULL,
  `orig_ip` varchar(48) NOT NULL,
  `orig_host` varchar(48) NOT NULL,
  `last_ip` varchar(48) NOT NULL,
  `last_host` varchar(48) NOT NULL,
  `username` varchar(48) NOT NULL,
  `password` varchar(255) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `street_address1` varchar(255) NOT NULL,
  `street_address2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;

CREATE TABLE IF NOT EXISTS `configuration` (
  `setting` varchar(36) NOT NULL,
  `value` varchar(64) NOT NULL
) ENGINE=MyISAM;

CREATE TABLE IF NOT EXISTS `domains` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `last_updated_by` int(10) unsigned NOT NULL,
  `updatenum` tinyint(2) unsigned NOT NULL DEFAULT '1',
  `date_added` datetime NOT NULL,
  `last_updated` datetime NOT NULL,
  `is_enabled` enum('Y','N') NOT NULL DEFAULT 'Y',
  `ip` varchar(20) NOT NULL,
  `mx` varchar(255) NOT NULL,
  `domain` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;

CREATE TABLE IF NOT EXISTS `loadavg` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `networkid` int(11) unsigned NOT NULL,
  `mem_total` int(11) unsigned NOT NULL,
  `mem_free` int(11) unsigned NOT NULL,
  `date_added` datetime NOT NULL,
  `cpu` decimal(6,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;

CREATE TABLE IF NOT EXISTS `network` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parentid` int(11) unsigned NOT NULL,
  `available` enum('Y','N') NOT NULL DEFAULT 'Y',
  `physical` enum('Y','N') NOT NULL DEFAULT 'N',
  `os` enum('linux','windows','other') NOT NULL DEFAULT 'other',
  `linux_flavor` enum('arch','centos','debian','fedora','generic','gentoo','ubuntu') NOT NULL DEFAULT 'generic',
  `date_added` datetime NOT NULL,
  `conn_user` blob NOT NULL,
  `conn_pass` blob NOT NULL,
  `conn_port` blob NOT NULL,
  `ip` varchar(20) NOT NULL,
  `location` varchar(48) NOT NULL,
  `datacenter` varchar(48) NOT NULL,
  `description` varchar(255) NOT NULL,
  `accounts_dir` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;

CREATE TABLE IF NOT EXISTS `notify` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `typeid` int(10) unsigned NOT NULL,
  `relid` int(10) unsigned NOT NULL,
  `seen` enum('Y','N') NOT NULL DEFAULT 'N',
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;

CREATE TABLE IF NOT EXISTS `notify_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `notify_type` varchar(36) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(48) NOT NULL,
  `href` varchar(48) NOT NULL,
  `image` varchar(128) NOT NULL,
  `image_text` varchar(48) NOT NULL,
  `popup_text` varchar(128) NOT NULL,
  `sort_order` int(12) NOT NULL,
  `template` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;

CREATE TABLE IF NOT EXISTS `servers` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL,
  `billingid` int(11) unsigned NOT NULL,
  `domainid` int(10) unsigned NOT NULL,
  `port` int(11) unsigned NOT NULL,
  `max_slots` int(11) unsigned NOT NULL,
  `system_priority` tinyint(3) NOT NULL,
  `system_cpucore` tinyint(3) NOT NULL,
  `date_created` datetime NOT NULL,
  `type` enum('game','voip','other') NOT NULL DEFAULT 'other',
  `status` enum('active','suspended','closed') NOT NULL DEFAULT 'active',
  `creation_status` enum('complete','running','failed') NOT NULL DEFAULT 'running',
  `update_status` enum('complete','running','failed') NOT NULL DEFAULT 'complete',
  `enable_priority` enum('Y','N') NOT NULL DEFAULT 'N',
  `enable_cpucore` enum('Y','N') NOT NULL DEFAULT 'N',
  `show_cmd_line` enum('Y','N') NOT NULL DEFAULT 'N',
  `client_file_man` enum('Y','N') NOT NULL DEFAULT 'Y',
  `cmd_line` text NOT NULL,
  `notes` text NOT NULL,
  `server` varchar(36) NOT NULL,
  `ip` varchar(64) NOT NULL,
  `subdomain` varchar(255) NOT NULL,
  `config_file` varchar(255) NOT NULL,
  `log_file` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `map` varchar(255) NOT NULL,
  `executable` varchar(255) NOT NULL,
  `working_dir` varchar(255) NOT NULL,
  `setup_dir` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;

CREATE TABLE IF NOT EXISTS `servers_addons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_added` datetime NOT NULL,
  `is_installed` enum('Y','N') NOT NULL DEFAULT 'Y',
  `srvid` int(11) NOT NULL,
  `addonid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;

CREATE TABLE IF NOT EXISTS `servers_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `srvid` int(11) NOT NULL,
  `opt1_name` varchar(255) NOT NULL,
  `opt1_edit` enum('Y','N') NOT NULL DEFAULT 'N',
  `opt1_value` varchar(255) NOT NULL,
  `opt2_name` varchar(255) NOT NULL,
  `opt2_edit` enum('Y','N') NOT NULL DEFAULT 'N',
  `opt2_value` varchar(255) NOT NULL,
  `opt3_name` varchar(255) NOT NULL,
  `opt3_edit` enum('Y','N') NOT NULL DEFAULT 'N',
  `opt3_value` varchar(255) NOT NULL,
  `opt4_name` varchar(255) NOT NULL,
  `opt4_edit` enum('Y','N') NOT NULL DEFAULT 'N',
  `opt4_value` varchar(255) NOT NULL,
  `opt5_name` varchar(255) NOT NULL,
  `opt5_edit` enum('Y','N') NOT NULL DEFAULT 'N',
  `opt5_value` varchar(255) NOT NULL,
  `opt6_name` varchar(255) NOT NULL,
  `opt6_edit` enum('Y','N') NOT NULL DEFAULT 'N',
  `opt6_value` varchar(255) NOT NULL,
  `opt7_name` varchar(255) NOT NULL,
  `opt7_edit` enum('Y','N') NOT NULL DEFAULT 'N',
  `opt7_value` varchar(255) NOT NULL,
  `opt8_name` varchar(255) NOT NULL,
  `opt8_edit` enum('Y','N') NOT NULL DEFAULT 'N',
  `opt8_value` varchar(255) NOT NULL,
  `opt9_name` varchar(255) NOT NULL,
  `opt9_edit` enum('Y','N') NOT NULL DEFAULT 'N',
  `opt9_value` varchar(255) NOT NULL,
  `opt10_name` varchar(255) NOT NULL,
  `opt10_edit` enum('Y','N') NOT NULL DEFAULT 'N',
  `opt10_value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;

CREATE TABLE IF NOT EXISTS `templates` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `networkid` int(11) unsigned NOT NULL,
  `date_created` datetime NOT NULL,
  `type` enum('game','voip','other') NOT NULL DEFAULT 'other',
  `available` enum('Y','N') NOT NULL DEFAULT 'Y',
  `is_default` enum('Y','N') NOT NULL DEFAULT 'N',
  `automagical` enum('Y','N') NOT NULL DEFAULT 'N',
  `status` enum('none','complete','running','failed') NOT NULL DEFAULT 'none',
  `installation_status` enum('none','complete','running','failed') NOT NULL DEFAULT 'none',
  `server` varchar(36) NOT NULL,
  `template_hash` varchar(128) NOT NULL,
  `description` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;

CREATE TABLE IF NOT EXISTS `tickets` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `threadid` int(11) unsigned NOT NULL DEFAULT '0',
  `userid` int(11) unsigned NOT NULL,
  `response_userid` int(11) unsigned NOT NULL,
  `priority` enum('low','medium','high') NOT NULL DEFAULT 'medium',
  `category` enum('support','billing','sales') NOT NULL DEFAULT 'support',
  `date_added` datetime NOT NULL,
  `last_updated` datetime NOT NULL,
  `status` enum('open','closed') NOT NULL DEFAULT 'open',
  `opened_by` enum('user','admin') NOT NULL DEFAULT 'user',
  `response_type` enum('user','admin') NOT NULL DEFAULT 'admin',
  `read_admin` enum('Y','N') NOT NULL DEFAULT 'N',
  `read_user` enum('Y','N') NOT NULL DEFAULT 'N',
  `subject` varchar(255) NOT NULL,
  `ticket_text` text NOT NULL,
  `internal_notes` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;

