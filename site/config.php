<?php namespace ProcessWire;

/**
 * ProcessWire Configuration File
 *
 * Site-specific configuration for ProcessWire
 *
 * Please see the file /wire/config.php which contains all configuration options you may
 * specify here. Simply copy any of the configuration options from that file and paste
 * them into this file in order to modify them.
 *
 * SECURITY NOTICE
 * In non-dedicated environments, you should lock down the permissions of this file so
 * that it cannot be seen by other users on the system. For more information, please
 * see the config.php section at: https://processwire.com/docs/security/file-permissions/
 *
 * This file is licensed under the MIT license
 * https://processwire.com/about/license/mit/
 *
 * ProcessWire 3.x, Copyright 2016 by Ryan Cramer
 * https://processwire.com
 *
 */

if(!defined("PROCESSWIRE")) die();

/*** SITE CONFIG *************************************************************************/

/** @var Config $config */

/**
 * Enable debug mode?
 *
 * Debug mode causes additional info to appear for use during dev and debugging.
 * This is almost always recommended for sites in development. However, you should
 * always have this disabled for live/production sites.
 *
 * @var bool
 *
 */

/* TODO: deactivate that again !! */
$config->debug = false;


/*** INSTALLER CONFIG ********************************************************************/


/**
 * Installer: Database Configuration
 *
 */
$config->dbHost = 'localhost';
$config->dbName = 'vati_base';
$config->dbUser = 'root';
$config->dbPass = 'Grizzlytank33';
$config->dbPort = '3306';

/**
 * Installer: User Authentication Salt
 *
 * Must be retained if you migrate your site from one server to another
 *
 */
$config->userAuthSalt = '57af0d24c7f2cac1c9bd8f247b89f299';

/**
 * Installer: File Permission Configuration
 *
 */
$config->chmodDir = '0755'; // permission for directories created by ProcessWire
$config->chmodFile = '0644'; // permission for files created by ProcessWire

/**
 * Installer: Time zone setting
 *
 */
$config->timezone = 'Europe/Berlin';

/**
 * Installer: Unix timestamp of date/time installed
 *
 * This is used to detect which when certain behaviors must be backwards compatible.
 * Please leave this value as-is.
 *
 */
$config->installed = 1494597074;


/**
 * Installer: HTTP Hosts Whitelist
 *
 */
$config->httpHosts = array('localhost:5757', 'sarasvati', 'sarasvati:8888', '127.0.0.1');

/* experimental for locale fixing */
/* setlocale(LC_ALL,'en_US.UTF-8');
geht nicht...  */
