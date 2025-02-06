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
 * Version information
 *
 * @package    tool
 * @subpackage iomadmerge
 * @copyright  Derick Turner
 * @author     Derick Turner
 * @basedon    admin tool merge by:
 * @author     Nicolas Dunand <Nicolas.Dunand@unil.ch>
 * @author     Mike Holzer
 * @author     Forrest Gaston
 * @author     Juan Pablo Torres Herrera
 * @author     Jordi Pujol-Ahulló, SREd, Universitat Rovira i Virgili
 * @author     John Hoopes <hoopes@wisc.edu>, University of Wisconsin - Madison
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Fusionner des comptes utilisateurs';
$string['header'] = 'Fusionner deux utilisateurs en un seul compte';
$string['header_help'] =
'<p>En donnant un utilisateur à supprimer et un utilisateur à conserver, cela fusionnera les données utilisateur
 associées au premier utilisateur dans le second utilisateur. Notez que les deux utilisateurs doivent déjà exister et aucun compte ne sera réellement supprimé. Ce processus est laissé à l\'administr
ateur pour le faire manuellement.</p>

<p><strong>Ne faites cela que si vous savez ce que vous faites car cela n\'est pas réversible !</strong></p>';
$string['usermergingheader'] = '&laquo;{$a->username}&raquo; (ID utilisateur = {$a->id})';
$string['errorsameuser'] = 'Tentative de fusionner le même utilisateur';
$string['iomadmerge'] = 'Fusionner des comptes utilisateurs';
$string['iomadmerge:iomadmerge'] = 'Fusionner des comptes utilisateurs';
$string['merging'] = 'Fusionné';
$string['into'] = 'dans';
$string['newuserid'] = 'ID utilisateur à conserver';
$string['olduserid'] = 'ID utilisateur à supprimer';
$string['iomadmerge:view'] = 'Fusionner des comptes utilisateurs';
$string['tableok'] = 'Table {$a} : mise à jour OK';
$string['tableko'] = 'Table {$a} : mise à jour PAS OK !';
$string['logok'] = 'Voici les requêtes qui ont été envoyées à la base de données :';
$string['logko'] = 'Une erreur s\'est produite :';
$string['logid'] = 'Pour référence ultérieure, ces résultats sont enregistrés dans le journal ID {$a}.';
$string['dbok'] = 'Fusion réussie';
$string['dbko_transactions'] = '<strong>Échec de la fusion !</strong> <br/>Votre moteur de base de données
    prend en charge les transactions. Par conséquent, l\'ensemble de la transaction actuelle a été annulée
    et <strong>aucune modification n\'a été apportée à votre base de données</strong>.';
$string['dbko_no_transactions'] = '<strong>Échec de la fusion !</strong> <br/>Votre moteur de base de données
    ne prend pas en charge les transactions. Par conséquent, votre base de données <strong>a été mise à jour</strong>.
    L\'état de votre base de données peut être incohérent. <br/>Mais, consultez le journal de fusion
    et, s\'il vous plaît, informez les développeurs du plugin de l\'erreur. Vous obtiendrez une solution
    dans un court délai. Après avoir mis à jour le plugin à sa dernière version, qui inclura la solution
    à ce problème, répétez l\'action de fusion pour la compléter avec succès.';
$string['tableskipped'] = 'Pour des raisons de journalisation ou de sécurité, nous sautons <strong>{$a}</strong>.
    <br />Pour supprimer ces entrées, supprimez l\'ancien utilisateur une fois ce script exécuté avec succès.';
$string['invaliduser'] = 'Utilisateur invalide';
$string['cligathering:description'] = "Introduisez des paires d'identifiants d'utilisateurs à fusionner le premier dans le\n
second. Le premier identifiant d'utilisateur (fromid) 'perdra' toutes ses données pour être 'migré'\n
dans le second (toid). L'utilisateur 'toid' inclura les données des deux utilisateurs.";
$string['cligathering:stopping'] = 'Pour arrêter la fusion, appuyez sur Ctrl+C ou tapez -1 sur les champs fromid ou toid.';
$string['cligathering:fromid'] = 'Identifiant de l\'utilisateur source (fromid) :';
$string['cligathering:toid'] =   'Identifiant de l\'utilisateur cible   (toid) :';
$string['viewlog'] = 'Voir les journaux de fusion';
$string['loglist'] = 'Tous ces enregistrements sont des actions de fusion effectuées, montrant si elles se sont bien déroulées :';
$string['newuseridonlog'] = 'Utilisateur conservé';
$string['olduseridonlog'] = 'Utilisateur supprimé';
$string['nologs'] = 'Il n\'y a pas encore de journaux de fusion. Tant mieux pour vous !';
$string['wronglogid'] = 'Le journal que vous demandez n\'existe pas.';
$string['deleted'] = 'Utilisateur avec ID {$a} a été supprimé';
$string['errortransactionsonly'] = 'Erreur : les transactions sont requises, mais votre type de base de données {$a}
    ne les prend pas en charge. Si nécessaire, vous pouvez autoriser la fusion d\'utilisateurs sans transactions.
    Veuillez examiner les paramètres du plugin pour les configurer en conséquence.';
$string['eventusermergedsuccess'] = 'Fusion réussie';
$string['eventusermergedfailure'] = 'Échec de la fusion';

// Settings page
$string['transactions_setting'] = 'Seules les transactions sont autorisées';
$string['transactions_setting_desc'] = 'Si activé, la fusion d\'utilisateurs ne fonctionnera pas
    du tout sur les bases de données qui ne prennent PAS en charge les transactions (recommandé).
    L\'activer est nécessaire pour garantir que votre base de données reste cohérente
    en cas d\'erreurs de fusion. <br />Si désactivé, vous exécuterez toujours des actions de fusion.
    En cas d\'erreurs, le journal de fusion vous montrera quel était le problème.
    Le signaler aux partisans du plugin vous donnera une solution en peu de temps.
    <br />Surtout, les tables de base de Moodle et certains plugins tiers sont déjà
    pris en compte par ce plugin. Si vous n\'avez pas de plugins tiers
    dans votre installation Moodle, vous pouvez être tranquille en exécutant ce plugin
    en activant ou désactivant cette option.';
$string['transactions_supported'] = 'Pour votre information, votre base de données
    <strong>prend en charge les transactions</strong>.';
$string['transactions_not_supported'] = 'Pour votre information, votre base de données
<strong>ne supporte pas les transations</strong>';
$string['excluded_exceptions'] = 'Exclure les exceptions';
$string['excluded_exceptions_desc'] = 'L\'expérience sur ce sujet suggère
    que toutes ces tables de base de données doivent être exclues de la fusion. Voir
    README pour plus de détails. <br>
    Par conséquent, pour appliquer le comportement par défaut du plugin, vous devez choisir \'{$a}\'
    pour exclure toutes ces tables du processus de fusion (recommandé).<br>
    Si vous préférez, vous pouvez exclure l\'une de ces tables et les inclure dans le
    processus de fusion (non recommandé).';

//New strings

// Progress bar
$string['choose_users'] = 'Choisir les utilisateurs à fusionner';
$string['review_users'] = 'Confirmer les utilisateurs à fusionner';
$string['results'] = 'Résultats de la fusion et journal';

// Form Strings
$string['form_header'] = 'Trouver les utilisateurs à fusionner';
$string['form_description'] = '<p>Vous pouvez rechercher des utilisateurs ici si vous ne connaissez pas
    le nom d\'utilisateur / l\'identifiant de l\'utilisateur. Sinon, vous pouvez
    développer le formulaire pour entrer ces informations directement. Veuillez consulter l\'aide sur les champs pour plus
    d\'informations</p>';
$string['searchuser'] = 'Rechercher un utilisateur';
$string['searchuser_help'] = 'Entrez un nom d\'utilisateur, un prénom / nom de famille, une adresse e-mail
    ou un identifiant d\'utilisateur pour rechercher des utilisateurs potentiels. Vous pouvez également spécifier si vous voulez
    rechercher uniquement dans un champ particulier.';
$string['iomadmergeadvanced'] = '<strong>Entrée directe de l\'utilisateur</strong>';
$string['iomadmergeadvanced_help'] = 'Ici, vous pouvez entrer les champs ci-dessous si
    vous savez exactement quels utilisateurs vous voulez fusionner.<br /><br />
    Cliquez sur le bouton "rechercher" pour vérifier / confirmer que les entrées saisies
    sont en fait des utilisateurs.';
$string['iomadmerge_confirm'] = 'Après confirmation, le processus de fusion commencera.
    <br /><strong>Cela ne sera pas réversible !</strong>
    Êtes-vous sûr de vouloir continuer ?';
$string['clear_selection'] = 'Effacer la sélection d\'utilisateurs actuelle';

// Merge users select table
$string['olduser'] = 'Utilisateur à supprimer';
$string['newuser'] = 'Utilisateur à conserver';
$string['saveselection_submit'] = 'Enregistrer la sélection';
$string['userselecttable_legend'] = '<b>Sélectionner les utilisateurs à fusionner</b>';

// Merge users review table
$string['userreviewtable_legend'] = '<b>Examiner les utilisateurs à fusionner</b>';

// Error string
$string['error_return'] = 'Retourner au formulaire de recherche';
$string['no_saveselection'] = 'Vous n\'avez pas sélectionné un ancien ou un nouvel utilisateur.';
$string['invalid_option'] = 'Option de formulaire invalide';

// Settings page
$string['suspenduser_setting'] = 'Suspendre l\'ancien utilisateur';
$string['suspenduser_setting_desc'] = 'Si activé, il suspend automatiquement l\'ancien utilisateur
    lors d\'un processus de fusion réussi, empêchant l\'utilisateur de se connecter à Moodle (recommandé).
    Si désactivé, l\'ancien utilisateur reste actif.
    Dans les deux cas, l\'ancien utilisateur n\'aura pas ses données associées.';
$string['transactions_setting'] = 'Seules les transactions sont autorisées';
$string['transactions_setting_desc'] = 'Si activé, la fusion d\'utilisateurs ne fonctionnera pas
    du tout sur les bases de données qui ne prennent PAS en charge les transactions (recommandé).
    L\'activer est nécessaire pour garantir que votre base de données reste cohérente
    en cas d\'erreurs de fusion. <br />Si désactivé, vous exécuterez toujours des actions de fusion.
    En cas d\'erreurs, le journal de fusion vous montrera quel était le problème.
    Le signaler aux partisans du plugin vous donnera une solution en peu de temps.
    <br />Surtout, les tables de base de Moodle et certains plugins tiers sont déjà
    pris en compte par ce plugin. Si vous n\'avez pas de plugins tiers
    dans votre installation Moodle, vous pouvez être tranquille en exécutant ce plugin
    en activant ou désactivant cette option.';


// quiz attempts strings
$string['quizattemptsaction'] = 'Comment résoudre les tentatives de quiz';
$string['quizattemptsaction_desc'] = 'Lors de la fusion des tentatives de quiz, il peut exister trois cas :
    <ol>
    <li>Seul l\'ancien utilisateur a des tentatives de quiz. Toutes les tentatives apparaîtront comme si elles avaient été faites par le nouvel utilisateur.</li>
    <li>Seul le nouvel utilisateur a des tentatives de quiz. Tout est correct et rien n\'est fait.</li>
    <li>Les deux utilisateurs ont des tentatives pour le même quiz. <strong>Vous devez choisir quoi faire dans ce cas de conflit.
    </strong>. Vous devez choisir l\'une des actions suivantes :
        <ul>
        <li><strong>{$a->renumber}</strong>. Les tentatives de l\'ancien utilisateur sont fusionnées avec celles du nouvel utilisateur
        et renumérotées par le moment où elles ont été commencées.</li>
        <li><strong>{$a->delete_fromid}</strong>. Les tentatives de l\'ancien utilisateur sont supprimées. Les tentatives du nouvel utilisateur
        sont conservées, car cette option les considère comme les plus importantes.</li>
        <li><strong>{$a->delete_toid}</strong>. Les tentatives du nouvel utilisateur sont supprimées. Les tentatives de
        l\'ancien utilisateur sont conservées, car cette option les considère comme les plus importantes.</li>
        <li><strong>{$a->remain}</strong> (par défaut). Les tentatives ne sont pas fusionnées ni supprimées, restant liées à
        l\'utilisateur qui les a faites. C\'est l\'action la plus sûre, mais la fusion des utilisateurs de l\'utilisateur A à l\'utilisateur B ou de B à A peut
        produire des notes de quiz différentes.</li>
        </ul>
    </li>
    </ol>';
$string['qa_action_renumber'] = 'Fusionner les tentatives des deux utilisateurs et renuméroter';
$string['qa_action_delete_fromid'] = 'Conserver les tentatives du nouvel utilisateur';
$string['qa_action_delete_toid'] = 'Conserver les tentatives de l\'ancien utilisateur';
$string['qa_action_remain'] = 'Ne rien faire : ne pas fusionner ni supprimer';
$string['qa_action_remain_log'] = 'Les données utilisateur de la table <strong>{$a}</strong> ne sont pas mises à jour.';
$string['qa_chosen_action'] = 'Option active pour les tentatives de quiz : {$a}.';

$string['qa_grades'] = 'Notes recalculées pour les quiz : {$a}.';

$string['uniquekeynewidtomaintain'] = 'Conserver les données du nouvel utilisateur';
$string['uniquekeynewidtomaintain_desc'] = 'En cas de conflit,
    comme lorsque la colonne liée à l\'identifiant de l\'utilisateur est une clé unique,
    ce plugin conservera les données du nouvel utilisateur (par défaut). Cela signifie également que les données de l\'ancien utilisateur sont
    supprimées pour maintenir la cohérence. Sinon, si vous décochez cette option,
    les données de l\'ancien utilisateur seront conservées.';

$string['starttime'] = 'Début de la fusion à {$a}';
$string['finishtime'] = 'Fin de la fusion à {$a}';
$string['timetaken'] = 'La fusion a pris {$a} secondes';
$string['privacy:metadata'] = 'Le plugin Fusionner des comptes utilisateurs ne stocke aucune donnée personnelle.';


