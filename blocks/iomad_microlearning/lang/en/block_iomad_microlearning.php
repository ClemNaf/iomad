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
 * @package   block_iomad_microlearning
 * @copyright 2021 Derick Turner
 * @author    Derick Turner
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

//French
$string['action'] = 'Action';
$string['active'] = 'Actif';
$string['active_help'] = 'Si le fil n\'est pas actif, aucun message ne sera envoyé aux utilisateurs et il ne sera pas visible sur leur tableau de bord';
$string['blocktitle'] = 'Fils de microlearning';
$string['bulkassigngroups'] = 'Attribuer des groupes de fils par CSV';
$string['clonethread'] = 'Cloner le fil';
$string['clonethreadcheckfull'] = 'Êtes-vous sûr de vouloir cloner le fil {$a} et tous les nuggets associés dans un nouveau fil? Cela ne copie pas les utilisateurs actuellement assignés.';
$string['copy'] = ' (copie)';
$string['cmid'] = 'ID du module de cours';
$string['cmid_help'] = 'Numéro d\'identification du module de cours dans ce champ pour la section de cours unique. Vous devez définir soit cela, soit la valeur de l\'ID de section.';
$string['cmidalreadyinuse'] = 'L\'ID du module de cours est déjà utilisé';
$string['company_threads_for'] = 'Fils de microlearning pour l\'entreprise {$a}';
$string['company_users_for'] = 'Utilisateurs pour le fil de microlearning {$a}';    
$string['creategroup'] = 'Créer un nouveau groupe';
$string['crontask'] = 'IOMAD microlearning cron';
$string['defaultdue'] = 'Dû après';
$string['defaultdue_help'] = 'C\'est le temps après lequel le nugget programmé devient dû. Il peut être écrasé en modifiant le calendrier du fil.';
$string['deletegroup'] = 'Supprimer le groupe {$a}';
$string['deletegroupcheckfull'] = 'Voulez-vous supprimer le groupe {$a}? Cela supprimera également les utilisateurs associés à ce groupe.';
$string['deletenugget'] = 'Supprimer le nugget';
$string['deletenuggetcheckfull'] = 'Êtes-vous sûr de vouloir supprimer le nugget {$a}';
$string['deletethread'] = 'Supprimer le fil';
$string['deletethreadcheckfull'] = 'Êtes-vous sûr de vouloir supprimer complètement le fil {$a} et tous les nuggets et utilisateurs associés';
$string['duedate'] = 'Date d\'échéance';
$string['duedatebeforescheduledate'] = 'La date d\'échéance est antérieure à la date programmée';
$string['editgroup'] = 'Modifier le groupe';
$string['editnugget'] = 'Modifier le nugget';
$string['editthread'] = 'Modifier le fil';
$string['erroredgroups'] = 'Affectations de groupes en erreur';
$string['group'] = 'Groupe de fil';
$string['group_help'] = 'C\'est le groupe dans le fil de microlearning auquel l\'utilisateur sera assigné';
$string['groupcreatedok'] = 'Le groupe a été créé avec succès';
$string['groupdeletedok'] = 'Le groupe a été supprimé avec succès';
$string['groupupdatedok'] = 'Le groupe a été mis à jour avec succès';
$string['halt_until_fulfilled'] = 'Arrêter les messages jusqu\'à ce qu\'ils soient complétés';
$string['halt_until_fulfilled_help'] = 'Définissez ceci sur vrai si vous souhaitez arrêter l\'envoi de messages jusqu\'à ce que le nugget précédent soit complété.';
$string['importgroupsfromfile'] = 'Importer les affectations de groupes d\'utilisateurs de fil';
$string['importthread'] = 'Importer le fil';
$string['importthreadcheckfull'] = 'Êtes-vous sûr de vouloir importer le fil {$a} et tous les nuggets associés dans un nouveau fil dans cette entreprise? Cela ne copie pas les utilisateurs actuellement assignés.';
$string['importusergroups'] = 'Importer les groupes d\'utilisateurs de fil';
$string['incorrecturl'] = 'L\'URL spécifiée n\'est pas sur ce site';
$string['interval'] = 'Intervalle de sortie';
$string['interval_help'] = 'C\'est l\'intervalle par défaut entre les dates de calendrier pour chaque nugget';
$string['ibnalidthreadid'] = 'Le fil que vous recherchez n\'existe pas.';
$string['iomad_microlearning:addinstance'] = 'Ajouter un bloc de microlearning';
$string['iomad_microlearning:assign_threads'] = 'Attribuer un utilisateur à un fil de microlearning';
$string['iomad_microlearning:importgroupfromcsv'] = 'Attribuer des groupes de fils aux utilisateurs via CSV';
$string['iomad_microlearning:manage_groups'] = 'Gérer les groupes de fils';
$string['iomad_microlearning:edit_nuggets'] = 'Modifier les nuggets de microlearning';
$string['iomad_microlearning:edit_threads'] = 'Modifier les fils de microlearning';
$string['iomad_microlearning:import_threads'] = 'Importer les fils de microlearning';
$string['iomad_microlearning:myaddinstance'] = 'Ajouter un bloc de microlearning à mon tableau de bord';
$string['iomad_microlearning:thread_clone'] = 'Cloner un fil de microlearning';
$string['iomad_microlearning:thread_delete'] = 'Supprimer un fil de microlearning';
$string['iomad_microlearning:thread_view'] = 'Voir les fils de microlearning';
$string['iomad_microlearning:view'] = 'Voir IOMAD microlearning';
$string['learninggroups'] = 'Gérer les groupes de fils';
$string['learningnuggets'] = 'Gérer les nuggets';
$string['learningschedules'] = 'Gérer les calendriers';
$string['learningusers'] = 'Gérer les utilisateurs de fil';
$string['message_preset'] = 'Envoyer un message après';
$string['message_preset_help'] = 'Entrez un délai en utilisant les unités fournies après lequel envoyer le message.';
$string['message_time'] = 'Heure d\'envoi du message';
$string['message_time_help'] = 'Entrez une heure programmée à laquelle le message sera envoyé.';
$string['microlearning'] = 'Microlearning';
$string['microlearninglinkexpires'] = 'Number of days after email link expires';
$string['microlearninglinkexpires_help'] = 'This is the number of days after which the microlearning link emaild to the user will expire and the user will need to log in using the normal process';
$string['missingname'] = 'Nugget name is missing';
$string['missingsectionorcmid'] = 'Please enter either a course section or course module ID';
$string['namehelp'] = 'group name';
$string['namehelp_help'] = 'This is the group name used within the microlearning thread.  Names are unique within threads but can be reused across multiple threads';
$string['nameinuse'] = 'Name is already in use';
$string['nolearningthreads'] = 'There are no microlearning threads';
$string['nonuggets'] = 'There are no nuggets created for this thread';
$string['nugget'] = 'Microlearning nugget';
$string['nuggetcreated'] = 'Microlearning nugget created';
$string['nuggetcreatedok'] = 'Nugget created OK';
$string['nuggetcupdatedok'] = 'Nugget updated OK';
$string['nuggetdeleted'] = 'Microlearning nugget deleted';
$string['nuggetmoved'] = 'Microlearning nugget order moved';
$string['nuggetname'] = 'Nugget name';
$string['nuggetname_help'] = 'Choose a unique name for the learning nugget';
$string['nuggetorder'] = 'Order';
$string['nuggets'] = 'Microlearning nuggets';
$string['nuggetupdated'] = 'Microlearning nugget updated';
$string['pluginname'] = 'IOMAD microlearning threads';
$string['privacy:metadata'] = 'Le bloc Microlearning IOMAD ne montre que les données stockées dans d\'autres emplacements.';
$string['privacy:metadata:microlearning_thread_user'] = 'Informations sur les données utilisateur du fil de discussion Microlearning. Aucune donnée personnelle n\'est conservée.';
$string['privacy:metadata:microlearning_thread_user:id'] = 'Identifiant de l\'enregistrement du fil de discussion Microlearning';
$string['privacy:metadata:microlearning_thread_user:userid'] = 'Identifiant de l\'utilisateur du fil de discussion Microlearning';
$string['privacy:metadata:microlearning_thread_user:threadid'] = 'Identifiant du fil de discussion Microlearning';
$string['privacy:metadata:microlearning_thread_user:nuggetid'] = 'Identifiant du nugget du fil de discussion Microlearning';
$string['privacy:metadata:microlearning_thread_user:groupid'] = 'Identifiant du groupe du fil de discussion Microlearning';
$string['privacy:metadata:microlearning_thread_user:schedule_date'] = 'Date de planification du fil de discussion Microlearning';
$string['privacy:metadata:microlearning_thread_user:due_date'] = 'Date d\'échéance du fil de discussion Microlearning';
$string['privacy:metadata:microlearning_thread_user:reminder1_date'] = 'Date du premier rappel du fil de discussion Microlearning';
$string['privacy:metadata:microlearning_thread_user:reminder2_date'] = 'Date du deuxième rappel du fil de discussion Microlearning';
$string['privacy:metadata:microlearning_thread_user:messagetime'] = 'Heure d\'envoi des messages après le fil de discussion Microlearning';
$string['privacy:metadata:microlearning_thread_user:message_delivered'] = 'Indicateur de message délivré du fil de discussion Microlearning';
$string['privacy:metadata:microlearning_thread_user:reminder1_delivered'] = 'Indicateur de premier rappel délivré du fil de discussion Microlearning';
$string['privacy:metadata:microlearning_thread_user:reminder2_delivered'] = 'Indicateur de deuxième rappel délivré du fil de discussion Microlearning';
$string['privacy:metadata:microlearning_thread_user:timecompleted'] = 'Heure de complétion du nugget du fil de discussion Microlearning';
$string['privacy:metadata:microlearning_thread_user:accesskey'] = 'Clé d\'accès par e-mail du fil de discussion Microlearning';
$string['privacy:metadata:microlearning_thread_user:timecreated'] = 'Heure de création du fil de discussion Microlearning';
$string['reminder1'] = 'First reminder';
$string['reminder1_help'] = 'Time after which the first reminder will be sent if the nugget is not marked complete.';
$string['reminder2'] = 'Second reminder';
$string['reminder2_help'] = 'Time after which the second reminder will be sent if the nugget is not marked complete.';
$string['reminderdatebeforescheduledate'] = 'The reminder date is before the scheduled date';
$string['reminderdatesoutoforder'] = 'The reminder dates are out of order';
$string['resetschedule'] = 'Reset schedule';
$string['resetschedulecheckfull'] = 'Do you want to completely reset the schedule for {$a}?';
$string['scheduledate'] = 'Schedule date';
$string['scheduleoutoforder'] = 'The schedule dates are out of order';
$string['scheduletype'] = 'Schedule type';
$string['scheduletype_help'] = 'This controls what start date the user being assigned will get.  Standard means they are added according to the defined schedule. Start today means that they will be scheduled to start the thread today.  Start on next scheduled will start the user on the next scheduled date defined by the current thread.';
$string['sectionid'] = 'Course section ID';
$string['sectionid_help'] = 'Input the course section ID number into this field for the unique course section.  You must define either this or the CMID value.';
$string['sectionidalreadyinuse'] = 'Section ID is already in use';
$string['selectthread'] = 'Select microlearning thread';
$string['send_message'] = 'Send message';
$string['send_message_help'] = 'Set to true if you want emails to be sent to users for nuggets being scheduled or reminders to complete.';
$string['send_reminder'] = 'Send reminder';
$string['send_reminder_help'] = 'Set this to true if you with to send reminder emails to assigned users.';
$string['standard'] = 'Standard';
$string['startdate'] = 'Date de début';
$string['startdate_help'] = 'La date à laquelle le fil de microlearning sera programmé';
$string['startnextscheduled'] = 'Commencer le jour suivant programmé';
$string['starttoday'] = 'Commencer aujourd\'hui';
$string['threadcreated'] = 'Fil de microlearning créé';
$string['threadcreatedok'] = 'Fil créé OK';
$string['threaddeleted'] = 'Fil de microlearning supprimé';
$string['threadname'] = 'Nom du fil';
$string['threadname_help'] = 'Le nom du fil de microlearning';
$string['threads'] = 'Fils de microlearning';
$string['threadschedule'] = 'Calendrier du fil';
$string['threadscheduleresetok'] = 'Calendrier du fil réinitialisé OK';
$string['threadscheduleupdatedok'] = 'Calendrier du fil mis à jour OK';
$string['threadscheduleupdated'] = 'Calendrier du fil de microlearning mis à jour';
$string['threadupdated'] = 'Fil de microlearning mis à jour';
$string['threadupdatedok'] = 'Fil mis à jour OK';
$string['timecreated'] = 'Temps créé';
$string['updown'] = 'Haut/Bas';
$string['uploadgroupresult'] = 'Résultat de l\'importation des groupes';
$string['userassigned'] = 'Utilisateur assigné';
$string['userunassigned'] = 'Utilisateur non assigné';
$string['url'] = 'URL';
$string['url_help'] = 'Spécifiez une URL de site à la place';
$string['microllinkexpires'] = 'Lien par e-mail de microlearning expire';
$string['microllinkexpires_help'] = 'C\'est la durée après laquelle le lien envoyé par e-mail ne connectera pas automatiquement l\'utilisateur.';
