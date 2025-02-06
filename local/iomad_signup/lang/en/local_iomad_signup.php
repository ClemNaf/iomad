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

$string['authenticationtypes'] = 'Sélectionnez les types d\'authentification';
$string['authenticationtypes_desc'] = 'Ce sont les types d\'authentification qui peuvent être utilisés pour attribuer automatiquement un utilisateur à une entreprise.';
$string['autoenrol'] = 'Auto-inscrire l\'utilisateur';
$string['autoenrol_help'] = 'En sélectionnant cette option, les nouveaux utilisateurs seront automatiquement inscrits aux cours non autorisés ou d\'auto-inscription assignés à l\'entreprise.';
$string['autoenrol_unassigned'] = 'Auto-inscrire aux cours non assignés';
$string['autoenrol_unassigned_help'] = 'En sélectionnant cette option, les nouveaux utilisateurs seront automatiquement inscrits aux cours non autorisés ou d\'auto-inscription non assignés à une entreprise.';
$string['choosepassword'] = 'Créer un nouvel utilisateur';
$string['company'] = 'Entreprise par défaut à laquelle les utilisateurs sont assignés';
$string['configcompany'] = 'C\'est l\'entreprise à laquelle l\'utilisateur sera assigné une fois qu\'il aura terminé le processus d\'inscription si aucune autre entreprise n\'est définie soit par le biais du formulaire d\'inscription, soit par le biais du domaine de messagerie.';
$string['configrole'] = 'C\'est le rôle qui sera attribué à l\'utilisateur lorsqu\'il aura terminé le processus d\'inscription.';
$string['emailasusernamehelp'] = 'Entrez votre adresse e-mail. Cela sera votre nom d\'utilisateur.';
$string['emaildomaindoesntmatch'] = 'Votre domaine de messagerie ne figure pas dans la liste des domaines acceptés pour cette entreprise.';
$string['enable'] = 'Activer';
$string['enable_help'] = 'Les nouveaux utilisateurs seront assignés à une entreprise lors de leur création lorsque cette option est activée.';
$string['logininfo'] = 'Remplissez le formulaire ci-dessous pour créer un nouvel utilisateur. Un e-mail sera envoyé à l\'adresse e-mail que vous spécifiez pour vérifier le compte et permettre l\'accès.';
$string['pluginname'] = 'Inscription IOMAD';
$string['privacy:metadata'] = 'Le plugin d\'inscription IOMAD local ne montre que les données stockées dans d\'autres emplacements.';
$string['role'] = 'Rôle à attribuer';
$string['showinstructions'] = 'Afficher les instructions d\'auto-inscription sur la page de connexion';
$string['showinstructions_help'] = 'Par défaut, Moodle affichera les instructions d\'auto-inscription sur la page de connexion lorsque l\'auto-inscription est activée. Cela permet de les supprimer.';
$string['useemail'] = 'Forcer l\'e-mail à être le nom d\'utilisateur';
$string['useemail_help'] = 'En sélectionnant cette option, vous supprimerez la possibilité pour un utilisateur de sélectionner son propre nom d\'utilisateur. Son adresse e-mail sera utilisée à la place.';
