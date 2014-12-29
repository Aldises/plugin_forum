<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This file replaces the legacy STATEMENTS section in db/install.xml,
 * lib.php/modulename_install() post installation hook and partially defaults.php
 *
 * @package    mod_testforum
 * @copyright  2011 Your Name <your@email.adress>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Post installation procedure
 *
 * @see upgrade_plugins_modules()
 */
//initialization Q2A
require_once(dirname(dirname(__FILE__)) . '/q2a/qa-include/qa-base.php');
//use install DB function of Q2A
require_once(dirname(dirname(__FILE__)) . '/q2a/qa-include/qa-db-install.php');

function xmldb_testforum_install() {
    error_log('post installation function called in install');
    //error_log(dirname(__FILE__).'/lib.php');
    //error_log(dirname(dirname(__FILE__)).'/q2a/qa-include/qa-db-install.php');
    qa_db_connect();
    qa_db_install_tables();
}
/**
 * Post installation recovery procedure
 *
 * @see upgrade_plugins_modules()
 */
function xmldb_testforum_install_recovery() {
    error_log('post installation function called in recovery');
}
