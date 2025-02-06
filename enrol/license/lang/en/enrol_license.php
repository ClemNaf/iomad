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
 * @package   enrol_license
 * @copyright 2021 Derick Turner
 * @author    Derick Turner
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['canntenrol'] = 'L\'inscription est désactivée ou inactive';
$string['customwelcomemessage'] = 'Message de bienvenue personnalisé';
$string['defaultrole'] = 'Attribution de rôle par défaut';
$string['defaultrole_desc'] = 'Sélectionnez le rôle qui doit être attribué aux utilisateurs lors de l\'inscription par licence';
$string['enrolenddate'] = 'Date de fin';
$string['enrolenddaterror'] = 'La date de fin d\'inscription ne peut pas être antérieure à la date de début';
$string['enrolme'] = 'Cliquez ici pour commencer ce cours';
$string['enrolperiod'] = 'Période d\'inscription';
$string['enrolperiod_desc'] = 'Durée par défaut de la période d\'inscription (en secondes).'; // TODO: fixme!
$string['enrolstartdate'] = 'Date de début';
$string['groupkey'] = 'Utiliser les clés d\'inscription de groupe';
$string['groupkey_desc'] = 'Utiliser par défaut les clés d\'inscription de groupe.';
$string['groupkey_help'] = 'En plus de restreindre l\'accès au cours uniquement à ceux qui connaissent la clé, l\'utilisation d\'une clé d\'inscription de groupe signifie que les utilisateurs sont automatiquement ajoutés au groupe lorsqu\'ils s\'inscrivent au cours.

Pour utiliser une clé d\'inscription de groupe, une clé d\'inscription doit être spécifiée dans les paramètres du cours ainsi que la clé d\'inscription de groupe dans les paramètres du groupe.';
$string['licensecrontask'] = 'Tâche planifiée d\'inscription par licence';
$string['licensenolongervalid'] = 'Votre licence pour ce cours n\'est plus valide';
$string['licensenotyetvalid'] = 'Votre accès à ce cours sera disponible le {$a}';
$string['license:unenrolself'] = 'L\'utilisateur peut se désinscrire lui-même';
$string['longtimenosee'] = 'Désinscrire après inactivité';
$string['longtimenosee_help'] = 'Si les utilisateurs n\'ont pas accédé à un cours pendant une longue période, ils sont automatiquement désinscrits. Ce paramètre spécifie cette limite de temps. Cela est distinct de la durée d\'inscription qui est définie par la licence elle-même.';
$string['maxenrolled'] = 'Nombre maximum d\'utilisateurs inscrits';
$string['maxenrolled_help'] = 'Spécifie le nombre maximum d\'utilisateurs pouvant s\'inscrire par licence. 0 signifie aucune limite.';
$string['maxenrolledreached'] = 'Le nombre maximum d\'utilisateurs autorisés à s\'inscrire par licence a déjà été atteint.';
$string['nolicenseinformationfound'] = 'Votre compte n\'a pas de licence valide pour accéder à ce cours. Si vous avez besoin d\'accès, contactez votre gestionnaire d\'entreprise pour organiser une licence.';
$string['password'] = 'Clé d\'inscription';
$string['password_help'] = 'Une clé d\'inscription permet de restreindre l\'accès au cours uniquement à ceux qui connaissent la clé.

Si le champ est laissé vide, tout utilisateur peut s\'inscrire au cours.

Si une clé d\'inscription est spécifiée, tout utilisateur tentant de s\'inscrire au cours devra fournir la clé. Notez qu\'un utilisateur n\'a besoin de fournir la clé d\'inscription qu\'UNE SEULE FOIS, lorsqu\'il s\'inscrit au cours.';
$string['passwordinvalid'] = 'Clé d\'inscription incorrecte, veuillez réessayer';
$string['passwordinvalidhint'] = 'Cette clé d\'inscription était incorrecte, veuillez réessayer<br />
(Voici un indice - elle commence par \'{$a}\')';
$string['pluginname'] = 'Inscription par licence';
$string['pluginname_desc'] = 'Le plugin d\'inscription par licence permet aux utilisateurs d\'accéder aux cours après avoir reçu une licence pour eux. En interne, l\'inscription se fait via le plugin d\'inscription manuelle qui doit être activé dans le même cours.';
$string['privacy:metadata'] = 'Le plugin d\'inscription par licence ne montre que les données stockées dans d\'autres emplacements.';
$string['requirepassword'] = 'Exiger une clé d\'inscription';
$string['requirepassword_desc'] = 'Exiger une clé d\'inscription dans les nouveaux cours et empêcher la suppression de la clé d\'inscription des cours existants.';
$string['role'] = 'Attribuer un rôle';
$string['license:config'] = 'Configurer les instances d\'inscription par licence';
$string['license:manage'] = 'Gérer les utilisateurs inscrits';
$string['license:unenrol'] = 'Désinscrire les utilisateurs du cours';
$string['license:unenrollicense'] = 'Désinscrire la licence du cours';
$string['sendcoursewelcomemessage'] = 'Envoyer un message de bienvenue du cours';
$string['sendcoursewelcomemessage_help'] = 'Si activé, les utilisateurs reçoivent un message de bienvenue par e-mail lorsqu\'ils s\'inscrivent par licence à un cours.';
$string['showhint'] = 'Afficher l\'indice';
$string['showhint_desc'] = 'Afficher la première lettre de la clé d\'accès invité.';
$string['status'] = 'Autoriser les inscriptions par licence';
$string['status_desc'] = 'Autoriser par défaut les utilisateurs à s\'inscrire par licence dans le cours.';
$string['status_help'] = 'Ce paramètre détermine si un utilisateur peut s\'inscrire (et également se désinscrire s\'il a l\'autorisation appropriée) lui-même au cours.';
$string['unenrollicenseconfirm'] = 'Voulez-vous vraiment vous désinscrire du cours "{$a}" ?';
$string['usepasswordpolicy'] = 'Utiliser la politique de mot de passe';
$string['usepasswordpolicy_desc'] = 'Utiliser la politique de mot de passe standard pour les clés d\'inscription.';
$string['welcometocourse'] = 'Bienvenue à {$a}';
$string['welcometocoursetext'] = 'Bienvenue à {$a->coursename} !

Si vous ne l\'avez pas encore fait, vous devriez éditer votre page de profil afin que nous puissions en savoir plus sur vous :

  {$a->profileurl}';
