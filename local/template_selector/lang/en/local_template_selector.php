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
 * @package   local_template_selector
 * @copyright 2021 Derick Turner
 * @author    Derick Turner
 * @basedon   Standard Moodle template selector
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Strings for component 'local_template_selector', language 'en'
 */

$string['templateselectortoomany'] = 'template_selector a obtenu plus d\'un modèle sélectionné, même si multi-sélection est faux';
$string['cannotcallusgetselectedtemplate'] = 'Vous ne pouvez pas appeler template_selector::get_selected_template si multi-sélection est vrai';
$string['clear'] = 'Effacer';
$string['searchoptions'] = 'Options de recherche';
$string['templateselectorpreserveselected'] = 'Conserver les modèles sélectionnés, même s\'ils ne correspondent plus à la recherche';
$string['templateselectorautoselectunique'] = 'Si un seul modèle correspond à la recherche, le sélectionner automatiquement';
$string['templateselectorsearchanywhere'] = 'Correspondre au texte de recherche n\'importe où dans le nom du modèle';
$string['toomanytemplatesmatchsearch'] = 'Trop de modèles ({$a->count}) correspondent à \'{$a->search}\'';
$string['pleasesearchmore'] = 'Veuillez rechercher un peu plus';
$string['toomanytemplatestoshow'] = 'Trop de modèles ({$a}) à afficher';
$string['pleaseusesearch'] = 'Veuillez utiliser la recherche';
$string['nomatchingtemplates'] = 'Aucun modèle ne correspond à \'{$a}\'';
$string['none'] = 'Aucun';
$string['pluginname'] = 'Sélecteurs de modèles locaux';
$string['previouslyselectedtemplates'] = 'Modèles précédemment sélectionnés ne correspondant pas à \'{$a}\'';
$string['privacy:metadata'] = 'Le plugin \'Sélecteurs de modèles locaux IOMAD\' ne montre que les données stockées dans d\'autres emplacements.';
$string['search'] = 'Chercher';
