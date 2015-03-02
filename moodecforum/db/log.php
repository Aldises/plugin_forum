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
 * Definition of log events
 *
 * NOTE: this is an example how to insert log event during installation/update.
 * It is not really essential to know about it, but these logs were created as example
 * in the previous 1.9 moodecforum.
 *
 * @package    mod_moodecforum
 * @copyright  2011 Your Name <your@email.adress>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

global $DB;

$logs = array(
    array('module'=>'moodecforum', 'action'=>'add', 'mtable'=>'moodecforum', 'field'=>'name'),
    array('module'=>'moodecforum', 'action'=>'update', 'mtable'=>'moodecforum', 'field'=>'name'),
    array('module'=>'moodecforum', 'action'=>'view', 'mtable'=>'moodecforum', 'field'=>'name'),
    array('module'=>'moodecforum', 'action'=>'view all', 'mtable'=>'moodecforum', 'field'=>'name')
);