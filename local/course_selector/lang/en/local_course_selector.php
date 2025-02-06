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
 * @package   local_course_selector
 * @based on  standard Moodle course_selector
 * @copyright 2021 Derick Turner
 * @author    Derick Turner
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['courseselectortoomany'] = 'course_selector a obtenu plus d\'un cours sélectionné, même si multi-sélection est faux';
$string['cannotcallusgetselectedcourse'] = 'Vous ne pouvez pas appeler course_selector::get_selected_course si multi-sélection est vrai';
$string['clear'] = 'Effacer';
$string['searchoptions'] = 'Options de recherche';
$string['courseselectorpreserveselected'] = 'Conserver les cours sélectionnés, même s\'ils ne correspondent plus à la recherche';
$string['courseselectorautoselectunique'] = 'Si un seul cours correspond à la recherche, le sélectionner automatiquement';
$string['courseselectorsearchanywhere'] = 'Correspondre au texte de recherche n\'importe où dans le nom du cours';
$string['toomanycoursesmatchsearch'] = 'Trop de cours ({$a->count}) correspondent à \'{$a->search}\'';
$string['pleasesearchmore'] = 'Veuillez rechercher un peu plus';
$string['toomanycoursestoshow'] = 'Trop de cours ({$a}) à afficher';
$string['pleaseusesearch'] = 'Veuillez utiliser la recherche';
$string['nomatchingcourses'] = 'Aucun cours ne correspond à \'{$a}\'';
$string['none'] = 'Aucun';
$string['pluginname'] = 'Sélecteurs de cours';
$string['previouslyselectedcourses'] = 'Cours précédemment sélectionnés ne correspondant pas à \'{$a}\'';
$string['privacy:metadata'] = 'Le plugin Local course selector IOMAD ne montre que des données stockées ailleurs.';
$string['search'] = 'Rechercher';