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
 * @package   local_report_license_usage
 * @copyright 2021 Derick Turner
 * @author    Derick Turner
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Rapport de vue d\'ensemble de la complétion';
$string['privacy:metadata:local_report_user_lic_allocs:id'] = 'ID de l\'enregistrement de l\'allocation de licence utilisateur du rapport local';
$string['privacy:metadata:local_report_user_lic_allocs:courseid'] = 'ID du cours';
$string['privacy:metadata:local_report_user_lic_allocs:action'] = 'Action d\'allocation';
$string['privacy:metadata:local_report_user_lic_allocs:userid'] = 'ID de l\'utilisateur';
$string['privacy:metadata:local_report_user_lic_allocs:licenseid'] = 'ID de licence';
$string['privacy:metadata:local_report_user_lic_allocs:issuedate'] = 'Horodatage Unix de délivrance de licence';
$string['privacy:metadata:local_report_user_lic_allocs'] = 'Informations utilisateur de l\'allocation de licence utilisateur du rapport local';
$string['hideexpiry'] = 'Surligner l\'expiration';
$string['report_completion_overview:view'] = 'Voir le rapport de vue d\'ensemble de la complétion des cours';
$string['showexpiry'] = 'Surligner tout';
$string['showexpiryonly'] = 'Surligner uniquement les cours avec une durée valide';
$string['showexpiryonly_help'] = 'Si cette option est cochée, alors les cours qui n\'ont pas une durée valide ne seront pas affichés en couleur dans la vue d\'ensemble graphique par défaut.';
$string['showfulldetail'] = 'Afficher les détails complets de la complétion';
$string['showfulldetail_help'] = 'Si cette option est cochée, alors toutes les informations de complétion sont affichées, sinon ce ne sont que les dates de complétion et d\'expiration.';
$string['warningduration'] = 'Limite d\'avertissement d\'expiration';
$string['warningduration_help'] = 'C\'est la valeur de temps avant qu\'un cours n\'expire où le rapport affichera les couleurs d\'avertissement d\'expiration au lieu des couleurs OK.';
$string['coursesummary'] = 'Inscrit: {$a->enrolled}
Commencé: {$a->timestarted}
Terminé: {$a->timecompleted}
Expire: {$a->timeexpires}
Note: {$a->finalscore}';
$string['coursesummary_extra_indate'] = 'Inscrit: {$a->enrolled}
Commencé: {$a->timestarted}
Terminé: {$a->timecompleted}
Expire: {$a->timeexpires}
Note: {$a->finalscore}
Dernière complétion: {$a->lastcompleted}
Expire: {$a->timeexpired}';
$string['coursesummary_extra_outdate'] = 'Inscrit: {$a->enrolled}
Commencé: {$a->timestarted}
Terminé: {$a->timecompleted}
Expire: {$a->timeexpires}
Note: {$a->finalscore}
Dernière complétion: {$a->lastcompleted}
Expire: {$a->timeexpired}';
$string['coursesummary_expired'] = 'Inscrit: {$a->enrolled}
Commencé: {$a->timestarted}
Expire: {$a->timeexpires}
Note: {$a->finalscore}';
$string['coursesummary_noexpiry'] = 'Inscrit: {$a->enrolled}
Commencé: {$a->timestarted}
Terminé: {$a->timecompleted}
Note: {$a->finalscore}';
$string['coursesummary_nograde'] = 'Inscrit: {$a->enrolled}
Commencé: {$a->timestarted}
Terminé: {$a->timecompleted}
Expire: {$a->timeexpires}
Résultat: Réussi';
$string['coursesummary_nograde_noexpiry'] = 'Inscrit: {$a->enrolled}
Commencé: {$a->timestarted}
Terminé: {$a->timecompleted}
Résultat: Réussi';
$string['coursesummary_partial'] = 'Terminé: {$a->timecompleted}
Expire: {$a->timeexpires}';
$string['coursesummary_partial_extra_indate'] = 'Terminé: {$a->timecompleted}
Expire: {$a->timeexpires}
Dernière complétion: {$a->lastcompleted}
Expire: {$a->timeexpired}';
$string['coursesummary_partial_extra_outdate'] = 'Terminé: {$a->timecompleted}
Expire: {$a->timeexpires}
Dernière complétion: {$a->lastcompleted}
Expire: {$a->timeexpired}';
$string['report_completion_overview_title'] = 'Rapport de vue d\'ensemble de la complétion';
$string['notcompleted'] = 'En cours';
$string['notcompleted-expiring'] = 'En cours (A faire)';
$string['notcompleted-indate'] = 'En cours (OK)';
$string['notcompleted-outdate'] = 'En cours (Expire)';
$string['notenrolled']  = 'Non inscrit';
$string['notenrolled-expiring']  = 'Non inscrit (A faire)';
$string['notenrolled-indate']  = 'Non inscrit (OK)';
$string['notenrolled-outdate']  = 'Non inscrit (Expire)';
$string['indate'] = 'OK';
$string['expiring'] = 'A faire';
$string['expired'] = 'Expire';
$string['coursestatus'] = '{$a} statut';
$string['coursecompletion'] = '{$a} complétion';
$string['courseexpiry'] = '{$a} expiration';
$string['bycourses'] = 'Vue par cours';
$string['byusers'] = 'Vue par utilisateur';
