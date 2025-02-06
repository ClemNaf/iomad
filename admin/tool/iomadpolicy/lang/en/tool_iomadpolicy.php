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
 * Plugin strings are defined here.
 *
 * @package     tool_iomadpolicy
 * @category    string
 * @copyright   2018 David Mudrák <david@moodle.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptanceacknowledgement'] = 'Je reconnais avoir reçu une demande de consentement au nom des utilisateurs ci-dessus.';
$string['acceptancenote'] = 'Remarques';
$string['acceptancepolicies'] = 'Politiques';
$string['acceptancessavedsucessfully'] = 'Les accords ont été enregistrés avec succès.';
$string['acceptancestatusaccepted'] = 'Accepté';
$string['acceptancestatusacceptedbehalf'] = 'Accepté au nom de l\'utilisateur';
$string['acceptancestatusdeclined'] = 'Refusé';
$string['acceptancestatusdeclinedbehalf'] = 'Refusé au nom de l\'utilisateur';
$string['acceptancestatusoverall'] = 'Total';
$string['acceptancestatuspartial'] = 'Partiellement accepté';
$string['acceptancestatuspending'] = 'En attente';
$string['acceptanceusers'] = 'Utilisateurs';
$string['actions'] = 'Actions';
$string['activate'] = 'Définir le statut sur "Actif"';
$string['activating'] = 'Activation d\'une politique';
$string['activateconfirm'] = '<p>Vous êtes sur le point d\'activer la politique <em>\'{$a->name}\'</em> et de rendre la version <em>\'{$a->revision}\'</em> la version actuelle.</p><p>Tous les utilisateurs devront accepter cette nouvelle version de la politique pour pouvoir utiliser le site.</p>';
$string['activateconfirmyes'] = 'Activer';
$string['agreepolicies'] = 'Veuillez accepter les politiques suivantes';
$string['backtoprevious'] = 'Retour à la page précédente';
$string['backtotop'] = 'Retour en haut';
$string['cachedef_iomadpolicy_optional'] = 'Cache du drapeau facultatif/obligatoire pour les versions de politique';
$string['consentbulk'] = 'Consentement';
$string['consentpagetitle'] = 'Consentement';
$string['contactdpo'] = 'Pour toute question concernant les politiques, veuillez contacter le délégué à la protection des données.';
$string['dataproc'] = 'Traitement des données personnelles';
$string['declineacknowledgement'] = 'Je reconnais avoir reçu une demande de refus de consentement au nom des utilisateurs ci-dessus.';
$string['declinetheiomadpolicy'] = 'Refuser le consentement de l\'utilisateur';
$string['deleting'] = 'Suppression d\'une version';
$string['deleteconfirm'] = '<p>Êtes-vous sûr de vouloir supprimer la politique <em>\'{$a->name}\'</em> ?</p><p>Cette opération ne peut pas être annulée.</p>';
$string['editingiomadpolicydocument'] = 'Modification de la politique';
$string['erroriomadpolicyversioncompulsory'] = 'Les politiques obligatoires ne peuvent pas être refusées !';
$string['erroriomadpolicyversionnotfound'] = 'Il n\'y a pas de version de politique avec cet identifiant.';
$string['errorsaveasdraft'] = 'Les modifications mineures ne peuvent pas être enregistrées en tant que brouillon';
$string['errorusercantviewiomadpolicyversion'] = 'L\'utilisateur n\'a pas accès à cette version de la politique.';
$string['event_acceptance_created'] = 'Accord de politique utilisateur créé';
$string['event_acceptance_updated'] = 'Accord de politique utilisateur mis à jour';
$string['filtercapabilityno'] = 'Permission : Impossible d\'accepter';
$string['filtercapabilityyes'] = 'Permission : Peut accepter';
$string['filterrevision'] = 'Version : {$a}';
$string['filterrevisionstatus'] = 'Version : {$a->name} ({$a->status})';
$string['filterrole'] = 'Role : {$a}';
$string['filters'] = 'Filtres';
$string['filterstatusdeclined'] = 'Statut : Refusé';
$string['filterstatuspending'] = 'Statut : En attente';
$string['filterstatusyes'] = 'Statut : Accepté';
$string['filterplaceholder'] = 'Rechercher un mot-clé ou sélectionner un filtre';
$string['filteriomadpolicy'] = 'Politique : {$a}';
$string['guestconsent:continue'] = 'Continuer';
$string['guestconsentmessage'] = 'Si vous continuez à naviguer sur ce site, vous acceptez nos politiques :';
$string['iagree'] = 'J\'accepte les {$a}';
$string['idontagree'] = 'Non merci, je refuse {$a}';
$string['iagreetotheiomadpolicy'] = 'Donner son consentement';
$string['inactivate'] = 'Définir le statut sur "Inactif"';
$string['inactivating'] = 'Désactivation d\'une politique';
$string['inactivatingconfirm'] = '<p>Vous êtes sur le point de désactiver la politique <em>\'{$a->name}\'</em> et de rendre la version <em>\'{$a->revision}\'</em> inactive.</p>';
$string['inactivatingconfirmyes'] = 'Désactiver';
$string['invalidversionid'] = 'Il n\'y a pas de politique avec cet identifiant !';
$string['irevoketheiomadpolicy'] = '
Retirer le consentement de l\'utilisateur';
$string['listactivepolicies'] = 'Liste des politiques actives';
$string['minorchange'] = 'Modification mineure';
$string['minorchangeinfo'] = 'Une modification mineure ne modifie pas le sens de la politique. Les utilisateurs ne sont pas tenus d\'accepter à nouveau la politique si la modification est marquée comme une modification mineure.';
$string['managepolicies'] = 'Gérer les politiques';
$string['movedown'] = 'Descendre';
$string['moveup'] = 'Monter';
$string['mustagreetocontinue'] = 'Avant de continuer, vous devez accepter toutes ces politiques.';
$string['newiomadpolicy'] = 'Nouvelle politique';
$string['newversion'] = 'Nouvelle version';
$string['noactivepolicies'] = 'Il n\'y a pas de politiques avec une version active.';
$string['nofiltersapplied'] = 'Aucun filtre appliqué';
$string['nopermissiontoagreedocs'] = 'Pas de permission pour accepter les politiques';
$string['nopermissiontoagreedocs_desc'] = 'Désolé, vous n\'avez pas les permissions requises pour accepter les politiques.<br />Vous ne pourrez pas utiliser ce site tant que les politiques suivantes ne seront pas acceptées :';
$string['nopermissiontoagreedocsbehalf'] = 'Pas de permission pour accepter les politiques au nom de cet utilisateur';
$string['nopermissiontoagreedocsbehalf_desc'] = 'Désolé, vous n\'avez pas les permissions requises pour accepter les politiques suivantes au nom de {$a} :';
$string['nopermissiontoagreedocscontact'] = 'Pour obtenir de l\'aide supplémentaire, veuillez contacter';
$string['nopermissiontoviewiomadpolicyversion'] = 'Vous n\'avez pas les permissions pour voir cette version de la politique.';
$string['nopolicies'] = 'Il n\'y a pas de politiques pour les utilisateurs enregistrés avec une version active.';
$string['selectiomadpolicyandversion'] = 'Utilisez le filtre ci-dessus pour sélectionner la politique et/ou la version';
$string['steppolicies'] = 'Politique {$a->numiomadpolicy} sur {$a->totalpolicies}';
$string['pluginname'] = 'Politiques IOMAD';
$string['policiesagreements'] = 'Politiques et accords';
$string['importiomadpolicy'] = 'Importer les politiques de l\'outil_policy';
$string['iomadpolicy:accept'] = 'Accepter les politiques';
$string['iomadpolicy:acceptbehalf'] = 'Donner son consentement pour les politiques au nom de quelqu\'un d\'autre';
$string['iomadpolicy:managedocs'] = 'Gérer les politiques';
$string['iomadpolicy:viewacceptances'] = 'Voir les rapports d\'accord des utilisateurs';
$string['iomadpolicydocaudience'] = 'Consentement de l\'utilisateur';
$string['iomadpolicydocaudience0'] = 'Tous les utilisateurs';
$string['iomadpolicydocaudience1'] = 'Utilisateurs authentifiés';
$string['iomadpolicydocaudience2'] = 'Invités';
$string['iomadpolicydoccontent'] = 'Politique complète';
$string['iomadpolicydochdriomadpolicy'] = 'Politique';
$string['iomadpolicydochdrversion'] = 'Version du document';
$string['iomadpolicydocname'] = 'Nom';
$string['iomadpolicydocoptional'] = 'Accord facultatif';
$string['iomadpolicydocoptionalyes'] = 'Facultatif';
$string['iomadpolicydocoptionalno'] = 'Obligatoire';
$string['iomadpolicydocrevision'] = 'Version';
$string['iomadpolicydocsummary'] = 'Résumé';
$string['iomadpolicydocsummary_help'] = 'Ce texte doit fournir un résumé de la politique, potentiellement sous une forme simplifiée et facilement accessible, en utilisant un langage clair et simple.';
$string['iomadpolicydoctype'] = 'Type';
$string['iomadpolicydoctype0'] = 'Politique du site';
$string['iomadpolicydoctype1'] = 'Politique de confidentialité';
$string['iomadpolicydoctype2'] = 'Politique des tiers';
$string['iomadpolicydoctype99'] = 'Autre politique';
$string['iomadpolicydocuments'] = 'Documents de politique';
$string['iomadpolicynamedversion'] = 'Politique {$a->name} (version {$a->revision} - {$a->id})';
$string['iomadpolicypriorityagreement'] = 'Afficher la politique avant d\'afficher d\'autres politiques';
$string['iomadpolicyversionacceptedinbehalf'] = 'Le consentement pour cette politique a été donné en votre nom.';
$string['iomadpolicyversionacceptedinotherlang'] = 'Le consentement pour cette version de la politique a été donné dans une langue différente.';
$string['previousversions'] = '{$a} versions précédentes';
$string['privacy:metadata:acceptances'] = 'Informations sur les accords de politique conclus par les utilisateurs.';
$string['privacy:metadata:acceptances:iomadpolicyversionid'] = 'La version de la politique pour laquelle le consentement a été donné.';
$string['privacy:metadata:acceptances:userid'] = 'L\'utilisateur auquel cet accord de politique se rapporte.';
$string['privacy:metadata:acceptances:status'] = 'Le statut de l\'accord.';
$string['privacy:metadata:acceptances:lang'] = 'La langue utilisée pour afficher la politique lors de la conclusion du consentement.';
$string['privacy:metadata:acceptances:usermodified'] = 'L\'utilisateur qui a donné son consentement pour la politique, s\'il a été donné au nom d\'un autre utilisateur.';
$string['privacy:metadata:acceptances:timecreated'] = 'L\'heure à laquelle l\'utilisateur a accepté la politique.';
$string['privacy:metadata:acceptances:timemodified'] = 'L\'heure à laquelle l\'utilisateur a mis à jour son accord.';
$string['privacy:metadata:acceptances:note'] = 'Tout commentaire ajouté par un utilisateur lorsqu\'il donne son consentement au nom d\'un autre utilisateur.';
$string['privacy:metadata:subsystem:corefiles'] = 'L\'outil de politique stocke les fichiers inclus dans le résumé et la politique complète.';
$string['privacy:metadata:versions'] = 'Informations sur les versions de politique.';
$string['privacy:metadata:versions:name'] = 'Le nom de la politique.';
$string['privacy:metadata:versions:type'] = 'Type de politique.';
$string['privacy:metadata:versions:audience'] = 'Le type d\'utilisateurs qui doivent donner leur consentement.';
$string['privacy:metadata:versions:archived'] = 'Le statut de la politique (active ou inactive).';
$string['privacy:metadata:versions:usermodified'] = 'L\'utilisateur qui a modifié la politique.';
$string['privacy:metadata:versions:timecreated'] = 'L\'heure à laquelle cette version de la politique a été créée.';
$string['privacy:metadata:versions:timemodified'] = 'L\'heure à laquelle cette version de la politique a été mise à jour.';
$string['privacy:metadata:versions:iomadpolicyid'] = 'La politique à laquelle cette version est associée.';
$string['privacy:metadata:versions:revision'] = 'Le nom de révision de cette version de la politique.';
$string['privacy:metadata:versions:summary'] = 'Le résumé de cette version de la politique.';
$string['privacy:metadata:versions:summaryformat'] = 'Le format du champ de résumé.';
$string['privacy:metadata:versions:content'] = 'Le contenu de cette version de la politique.';
$string['privacy:metadata:versions:contentformat'] = 'Le format du champ de contenu.';
$string['privacysettings'] = 'Paramètres de confidentialité';
$string['readiomadpolicy'] = 'Veuillez lire notre {$a}';
$string['refertofulliomadpolicytext'] = 'Veuillez vous référer au {$a} complet si vous souhaitez consulter le texte.';
$string['response'] = 'Réponse';
$string['responseby'] = 'Répondant';
$string['responseon'] = 'Date';
$string['revokeacknowledgement'] = 'Je reconnais avoir reçu une demande de retrait de consentement au nom des utilisateurs ci-dessus.';
$string['save'] = 'Enregistrer';
$string['saveasdraft'] = 'Enregistrer comme brouillon';
$string['selectuser'] = 'Sélectionner l\'utilisateur {$a}';
$string['selectusersforconsent'] = 'Sélectionner les utilisateurs pour donner leur consentement au nom de.';
$string['settodraft'] = 'Créer un nouveau brouillon';
$string['status'] = 'Statut de la politique';
$string['statusformtitleaccept'] = 'Accepter la politique';
$string['statusformtitledecline'] = 'Refuser la politique';
$string['statusformtitlerevoke'] = 'Retirer la politique';
$string['statusinfo'] = 'Une politique avec le statut \'Actif\' exige que les utilisateurs donnent leur consentement, soit lorsqu\'ils se connectent pour la première fois, soit dans le cas des utilisateurs existants lorsqu\'ils se connectent à nouveau.';
$string['status0'] = 'Brouillon';
$string['status1'] = 'Actif';
$string['status2'] = 'Inactif';
$string['useracceptanceactionaccept'] = 'Accepter';
$string['useracceptanceactionacceptone'] = 'Accepter {$a}';
$string['useracceptanceactionacceptpending'] = 'Accepter les politiques en attente';
$string['useracceptanceactiondecline'] = 'Décliner';
$string['useracceptanceactiondeclineone'] = 'Décliner {$a}';
$string['useracceptanceactiondeclinepending'] = 'Décliner les politiques en attente';
$string['useracceptanceactiondetails'] = 'Détails';
$string['useracceptanceactionrevoke'] = 'Retirer';
$string['useracceptanceactionrevokeall'] = 'Retirer les politiques acceptées';
$string['useracceptanceactionrevokeone'] = 'Retirer l\'acceptation de {$a}';
$string['useracceptancecount'] = '{$a->agreedcount} de {$a->userscount} ({$a->percent}%)';
$string['useracceptancecountna'] = 'N/A';
$string['useracceptances'] = 'Accords de l\'utilisateur';
$string['useriomadpolicysettings'] = 'Politiques';
$string['usersaccepted'] = 'Accords';
$string['viewarchived'] = 'Voir les versions précédentes';
$string['viewconsentpageforuser'] = 'Voir cette page au nom de {$a}';