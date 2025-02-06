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
 * @package   local_iomad_signup
 * @copyright 2021 Derick Turner
 * @author    Derick Turner
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Suivi de la réalisation IOMAD';
$string['privacy:metadata'] = 'Le plugin \'Suivi de la réalisation IOMAD local\' ne montre que les données stockées dans d\'autres emplacements.';
$string['privacy:metadata:local_iomad_track:id'] = 'ID de suivi IOMAD local';
$string['privacy:metadata:local_iomad_track:courseid'] = 'ID du cours';
$string['privacy:metadata:local_iomad_track:coursename'] = 'Nom du cours.';
$string['privacy:metadata:local_iomad_track:userid'] = 'ID de l\'utilisateur';
$string['privacy:metadata:local_iomad_track:companyid'] = 'ID de l\'entreprise de l\'utilisateur';
$string['privacy:metadata:local_iomad_track:timecompleted'] = 'Temps de fin du cours';
$string['privacy:metadata:local_iomad_track:timeenrolled'] = 'Temps d\'inscription au cours';
$string['privacy:metadata:local_iomad_track:timestarted'] = 'Temps de début du cours';
$string['privacy:metadata:local_iomad_track:finalscore'] = 'Score final du cours';
$string['privacy:metadata:local_iomad_track:licenseid'] = 'ID de licence';
$string['privacy:metadata:local_iomad_track:licensename'] = 'Nom de la licence';
$string['privacy:metadata:local_iomad_track:licenseallocated'] = 'Horodatage Unix du moment où la licence a été allouée';
$string['privacy:metadata:local_iomad_track:modifiedtime'] = 'Temps de modification de l\'enregistrement';
$string['privacy:metadata:local_iomad_track'] = 'Informations utilisateur de suivi IOMAD local';
$string['privacy:metadata:local_iomad_track_certs:id'] = 'ID d\'enregistrement de certificat de suivi IOMAD local';
$string['privacy:metadata:local_iomad_track_certs:trackid'] = 'ID de suivi de certificat';
$string['privacy:metadata:local_iomad_track_certs:filename'] = 'Nom de fichier de certificat';
$string['privacy:metadata:local_iomad_track_certs'] = 'Informations de certificat de suivi IOMAD local';
$string['fixtracklicensetask'] = 'Tâche ad-hoc de correction des détails de suivi de licence IOMAD';
$string['iomad_track:importfrommoodle'] = 'Importer les informations de réalisation des tables Moodle';
$string['importcompletionsfrommoodle'] = 'Importer les informations de réalisation stockées des tables Moodle';
$string['importcompletionsfrommoodlefull'] = 'Cela exécutera une tâche ad-hoc pour importer toutes les informations de réalisation de Moodle dans les tables de rapport IOMAD.';
$string['importcompletionsfrommoodlefullwitherrors'] = 'Cela exécutera une tâche ad-hoc pour importer UNE PARTIE des informations de réalisation de Moodle dans les tables de rapport IOMAD. Tous les cours n\'ont pas la réalisation activée ou les critères définis et leurs informations seront manquées. Si vous voulez savoir quels sont ces cours, utilisez le lien de vérification sur la page précédente.';
$string['importmoodlecompletioninformation'] = 'Tâche ad-hoc pour importer les informations de réalisation des tables Moodle';
$string['fixenrolleddatetask'] = 'Tâche ad-hoc pour mettre à jour les informations de réalisation stockées pour utiliser le timestamp d\'inscription \'timecreated\' si ce n\'est pas déjà défini.';
$string['fixcourseclearedtask'] = 'Tâche ad-hoc pour mettre à jour le champ \'coursecleared\' dans les enregistrements de réalisation stockés';
$string['fixtracklicensetask'] = 'Tâche ad-hoc pour corriger les informations de licence stockées';
$string['importcompletionrecords'] = 'Importer les enregistrements de réalisation';
$string['uploadcompletionresult'] = 'Résultat du téléchargement du fichier de réalisation';
$string['completionimportfromfile'] = 'Importation de la réalisation à partir du fichier';
$string['importcompletionsfromfile'] = 'Importer les informations de réalisation à partir du fichier';
$string['courseswithoutcompletionenabledcouunt'] = 'Nombre de cours sans réalisation activée = {$a}';
$string['courseswithoutcompletioncriteriacouunt'] ='Nombre de cours sans critères de réalisation = {$a}';
$string['checkcoursestatusmoodle'] = 'Vérifier les paramètres du cours pour l\'importation';
