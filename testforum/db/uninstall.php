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
 * @see uninstall_plugin()
 *
 * @package    mod_testforum
 * @copyright  2011 Your Name <your@email.adress>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once (dirname(dirname(__FILE__)).'/q2a/qa-include/qa-base.php');

/**
 * Custom uninstallation procedure
 */
function xmldb_testforum_uninstall() {
    error_log('post uninstallation function called in uninstall');

    //Drop all Q2A tables
    $conn = mysql_connect(QA_FINAL_MYSQL_HOSTNAME, QA_FINAL_MYSQL_USERNAME, QA_FINAL_MYSQL_PASSWORD);
    mysql_select_db(QA_FINAL_MYSQL_DATABASE, $conn);
    /*mysql_query(
        "SET foreign_key_checks = 0; " .
        "DROP TABLE qa_blobs,qa_cache,qa_categories,qa_categorymetas,qa_contentwords,qa_cookies," .
        "qa_iplimits,qa_options,qa_pages,qa_postmetas,qa_posts,qa_posttags,qa_sharedevents,qa_tagmetas," .
        "qa_tagwords,qa_titlewords,qa_userevents,qa_userfavorites,qa_userlevels,qa_userlimits," .
        "qa_usermetas,qa_usernotices,qa_userpoints,qa_uservotes,qa_widgets,qa_words;", $conn
    );*/

    mysql_query(
    'DROP TABLE qa_blobs,qa_cache,qa_categorymetas,qa_contentwords,qa_cookies,qa_iplimits,qa_options,qa_pages,qa_postmetas,qa_posttags,qa_sharedevents,qa_tagmetas,qa_tagwords,qa_titlewords,qa_userevents,qa_userfavorites,qa_userlevels,qa_userlimits,qa_usermetas,qa_usernotices,qa_userpoints,qa_uservotes,qa_widgets,qa_words,qa_posts,qa_categories;', $conn
    );

    return true;
}
