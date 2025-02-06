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
 * @package   local_iomad_settings
 * @copyright 2021 Derick Turner
 * @author    Derick Turner
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Paramètres IOMAD';
$string['privacy:metadata'] = 'Le plugin Local IOMAD settings ne montre que les données stockées dans d\'autres emplacements.';
$string['customtext2'] = 'Texte personnalisé 2';
$string['customtext3'] = 'Texte personnalisé 3';
$string['dateformat'] = 'Format de date';
$string['emaildelay'] = 'Délai d\'envoi de l\'e-mail';
$string['emaildelay_help'] = 'Tous les e-mails IOMAD auront cette valeur (en secondes) ajoutée à l\'heure d\'envoi par défaut. Cela permet un délai d\'envoi par défaut, tout comme pour les messages de forum, de tout e-mail IOMAD. Les délais seront toujours impactés par la tâche cron local_mail, mais ce délai sera une valeur minimale.';
$string['iomad_autoenrol_managers'] = 'Inscrire les managers en tant que non-étudiants';
$string['iomad_autoenrol_managers_help'] = 'Si cette case n\'est pas cochée, alors les comptes des managers ne seront pas inscrits en tant que rôles d\'enseignant de l\'entreprise sur les cours d\'inscription manuelle.';
$string['iomad_autoreallocate_licenses'] = 'Réattribuer automatiquement la licence';
$string['iomad_autoreallocate_licenses_help'] = 'Si cette case est cochée, alors lorsqu\'une entrée de cours sous licence d\'un utilisateur est supprimée dans le rapport de l\'utilisateur, le système essaiera automatiquement de réattribuer une autre licence du pool de licences de l\'entreprise.';
$string['iomadcertificate_logo'] = 'Logo par défaut pour le certificat de l\'entreprise IOMAD';
$string['iomadcertificate_signature'] = 'Signature par défaut pour le certificat de l\'entreprise IOMAD';
$string['iomadcertificate_border'] = 'Bordure par défaut pour le certificat de l\'entreprise IOMAD';
$string['iomadcertificate_watermark'] = 'Filigrane par défaut pour le certificat de l\'entreprise IOMAD';
$string['iomadcertificate_logodesc'] = 'Il s\'agit de l\'image de logo par défaut utilisée pour le type de certificat de l\'entreprise IOMAD. Vous pouvez le remplacer dans les pages de modification de l\'entreprise. L\'image téléchargée doit mesurer 80 pixels de hauteur et avoir un fond transparent.';
$string['iomadcertificate_signaturedesc'] = 'Il s\'agit de l\'image de signature par défaut utilisée pour le type de certificat de l\'entreprise IOMAD. Vous pouvez le remplacer dans les pages de modification de l\'entreprise. L\'image téléchargée doit mesurer 31 pixels x 150 pixels et avoir un fond transparent.';
$string['iomadcertificate_borderdesc'] = 'Il s\'agit de l\'image de bordure par défaut utilisée pour le type de certificat de l\'entreprise IOMAD. Vous pouvez le remplacer dans les pages de modification de l\'entreprise. L\'image téléchargée doit mesurer 800 pixels x 604 pixels.';
$string['iomadcertificate_watermarkdesc'] = 'Il s\'agit de l\'image de filigrane par défaut utilisée pour le type de certificat de l\'entreprise IOMAD. Vous pouvez le remplacer dans les pages de modification de l\'entreprise. L\'image téléchargée ne doit pas dépasser 800 pixels x 604 pixels.';
$string['iomad_allow_username'] = 'Peut spécifier le nom d\'utilisateur';
$string['iomad_allow_username_help'] = 'En sélectionnant cette option, le champ de nom d\'utilisateur sera présenté lors de la création de comptes. Cela remplacera le paramètre d\'utilisation de l\'adresse e-mail comme nom d\'utilisateur.';
$string['iomad_downloaddetails'] = 'Télécharger les détails de l\'activité dans le rapport de complétion du cours.';
$string['iomad_downloaddetails_help'] = 'En sélectionnant cette option, tous les détails des critères de complétion du cours pour l\'utilisateur ainsi que leur statut seront inclus. Sans cela, seul leur statut sera inclus.';
$string['iomad_hidevalidcourses'] = 'Afficher uniquement les résultats de cours actuels dans les rapports par défaut';
$string['iomad_hidevalidcourses_help'] = 'Cela modifie l\'affichage des rapports de complétion pour qu\'il ne montre que les résultats de cours actuels (ceux qui n\'ont pas encore expiré ou n\'ont pas d\'expiration) par défaut.';
$string['iomad_max_list_classrooms'] = 'Salles de classe répertoriées au maximum';
$string['iomad_max_list_classrooms_help'] = 'Cela définit le nombre maximum de salles de classe affichées sur une page';
$string['iomad_max_list_companies'] = 'Entreprises répertoriées au maximum';
$string['iomad_max_list_companies_help'] = 'Cela définit le nombre maximum d\'entreprises affichées sur une page';
$string['iomad_max_list_competencies'] = 'Compétences répertoriées au maximum';
$string['iomad_max_list_competencies_help'] = 'Cela définit le nombre maximum de compétences affichées sur une page';
$string['iomad_max_list_courses'] = 'Cours répertoriés au maximum';
$string['iomad_max_list_courses_help'] = 'Cela définit le nombre maximum de cours affichés sur une page';
$string['iomad_max_list_email_templates'] = 'Modèles d\'e-mail répertoriés au maximum';
$string['iomad_max_list_email_templates_help'] = 'Cela définit le nombre maximum de modèles d\'e-mail affichés sur une page';
$string['iomad_max_list_frameworks'] = 'Cadres répertoriés au maximum';
$string['iomad_max_list_frameworks_help'] = 'Cela définit le nombre maximum de cadres affichés sur une page';
$string['iomad_max_list_licenses'] = 'Licences répertoriées au maximum';
$string['iomad_max_list_licenses_help'] = 'Cela définit le nombre maximum de licences affichées sur une page';
$string['iomad_max_list_templates'] = 'Modèles de plan d\'apprentissage répertoriés au maximum';
$string['iomad_max_list_templates_help'] = 'Cela définit le nombre maximum de modèles de plan d\'apprentissage affichés sur une page';
$string['iomad_max_list_users'] = 'Utilisateurs répertoriés au maximum';
$string['iomad_max_list_users_help'] = 'Cela définit le nombre maximum d\'utilisateurs affichés sur une page';
$string['iomad_max_select_courses'] = 'Cours répertoriés au maximum dans le sélecteur';
$string['iomad_max_select_courses_help'] = 'Cela définit le nombre maximum de cours affichés dans un sélecteur de recherche de formulaire avant que \'trop de cours\' ne soit affiché';
$string['iomad_max_select_frameworks'] = 'Cadres répertoriés au maximum dans le sélecteur';
$string['iomad_max_select_frameworks_help'] = 'Cela définit le nombre maximum de cadres affichés dans un sélecteur de recherche de formulaire avant que \'trop de cadres\' ne soit affiché';
$string['iomad_max_select_templates'] = 'Modèles de plan d\'apprentissage répertoriés au maximum dans le sélecteur';
$string['iomad_max_select_templates_help'] = 'Cela définit le nombre maximum de modèles de plan d\'apprentissage affichés dans un sélecteur de recherche de formulaire avant que \'trop de modèles\' ne soit affiché';
$string['iomad_max_select_users'] = 'Utilisateurs répertoriés au maximum dans le sélecteur';
$string['iomad_max_select_users_help'] = 'Cela définit le nombre maximum d\'utilisateurs affichés dans un sélecteur de recherche de formulaire avant que \'trop d\'utilisateurs\' ne soit affiché';
$string['iomad_report_fields'] = 'Champs de profil de rapport supplémentaires';
$string['iomad_report_fields_help'] = 'Il s\'agit d\'une liste de champs de profil séparés par une virgule. Si vous souhaitez utiliser un champ de profil facultatif, vous devez utiliser profile_field_<shortname> où <shortname> est le nom court défini pour le champ de profil. L\'ordre donné est l\'ordre dans lequel ils sont affichés.';
$string['iomad_report_grade_places'] = 'Nombre de décimales pour les notes dans les rapports';
$string['iomad_report_grade_places_help'] = 'Cela définit le nombre de décimales qui seront affichées dans les rapports IOMAD chaque fois qu\'une note d\'un utilisateur est listée';
$string['iomad_settings:addinstance'] = 'Ajouter un nouveau bloc de paramètres IOMAD';
$string['iomad_showcharts'] = 'Afficher les graphiques de complétion de cours par défaut';
$string['iomad_showcharts_help'] = 'Si coché, les graphiques seront affichés en premier avec une option pour les afficher en texte à la place';
$string['iomad_show_company_structure'] = 'Afficher la hiérarchie de l\'entreprise dans le sélecteur';
$string['iomad_show_company_structure_help'] = 'Si coché, les entreprises filles apparaîtront en retrait sous l\'entreprise parent dans le sélecteur d\'entreprise. Cela peut causer des problèmes de performance pour les sites plus importants.';
$string['iomad_sync_department'] = 'Synchroniser le département de l\'entreprise avec le profil';
$string['iomad_sync_department_help'] = 'En sélectionnant ceci, le champ de profil de l\'utilisateur pour le département sera synchronisé avec le nom du département de l\'entreprise auquel l\'utilisateur est affecté (Défini à partir du département de l\'entreprise), ou l\'utilisateur sera affecté à un département de l\'entreprise qui correspond (Défini au département de l\'entreprise). Si l\'utilisateur est dans plusieurs départements, alors cela affichera \'Multiple\' à la place.';
$string['iomad_sync_institution'] = 'Synchroniser le nom de l\'entreprise avec le profil';
$string['iomad_sync_institution_help'] = 'En sélectionnant ceci, le champ de profil de l\'institution de l\'utilisateur sera synchronisé avec le shortname ou le nom de l\'entreprise à laquelle l\'utilisateur est affecté. Si l\'utilisateur est dans plusieurs entreprises, alors cela affichera \'Multiple\' à la place.';
$string['iomad_use_email_as_username'] = 'Utiliser l\'adresse e-mail comme nom d\'utilisateur';
$string['iomad_use_email_as_username_help'] = 'En sélectionnant ceci, vous changerez la manière dont le nom d\'utilisateur d\'un utilisateur est automatiquement créé pour un nouveau compte utilisateur dans IOMAD pour qu\'il utilise simplement leur adresse e-mail';
$string['iomad_useicons'] = 'Utiliser des icônes dans le tableau de bord IOMAD';
$string['iomad_useicons_help'] = 'En sélectionnant ceci, les icônes du tableau de bord seront remplacées par des images au lieu de caractères Font Awesome.';
$string['iomad_showcompanydropdown'] = 'Afficher le sélecteur d\'entreprise dans la barre de navigation';
$string['iomad_showcompanydropdown_help'] = 'En sélectionnant ceci, le sélecteur de changement d\'entreprise sera affiché dans la barre de navigation lorsque l\'utilisateur peut accéder à plusieurs entreprises. Les utilisateurs devront se voir donner un autre moyen d\'accéder au sélecteur d\'entreprise si cela est désactivé et qu\'ils n\'ont pas accès au tableau de bord IOMAD dans leur entreprise actuelle.';
$string['reset_annually'] = 'Annuellement';
$string['reset_daily'] = 'Quotidiennement';
$string['reset_never'] = 'Jamais';
$string['reset_sequence'] = 'Réinitialiser le numéro de séquence';
$string['serialnumberformat'] = 'Format du numéro de série';
$string['serialnumberformat_help'] = '<p>Les champs de texte personnalisés et le format de numéro de série peuvent avoir les variables suivantes :</p><ul>
                                        <li>{EC} = Code d\'établissement</li>
                                        <li>{CC} = Numéro d\'identifiant du cours</li>
                                        <li>{CD:DDMMYY} = Date (avec format)</li>
                                        <li>{SEQNO:n} = Numéro de séquence (avec remplissage n)</li>
                                        <li>{SN} = Numéro de série du certificat (vide s\'il est utilisé dans le champ Format du numéro de série))</li>
                                        </ul>';

// SAMPLE Certificate.
$string['sampletitle'] = 'Certificat de formation';
$string['samplecertify'] = 'Ceci est pour certifier que';
$string['samplestatement'] = 'a suivi un cours de formation en ligne sur';
$string['sampledate'] = 'le';
$string['samplecoursegrade'] = 'avec le résultat de';
$string['typesample'] = 'Exemple';
$string['samplecode'] = 'Numéro de certificat :';
$string['samplesigned'] = 'Signé : ';
$string['sampleonbehalfof'] = 'Au nom de l\'entreprise';
