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
 * Strings for component 'block_rss_client', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   block_rss_client
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['addfeed'] = 'Ajouter une URL de flux RSS';
$string['addheadlineblock'] = 'Ajouter un bloc de titres RSS';
$string['addnew'] = 'Ajouter un nouveau';
$string['addnewfeed'] = 'Ajouter un nouveau flux';
$string['cannotmakemodification'] = 'Vous n\'êtes pas autorisé à apporter des modifications à ce flux RSS pour le moment.';
$string['clientchannellink'] = 'Site source...';
$string['clientnumentries'] = 'Le nombre d\'entrées à afficher par défaut par flux.';
$string['clientshowchannellinklabel'] = 'Un lien vers le site d\'origine (lien du canal) doit-il être affiché? (Notez que si aucun lien de flux n\'est fourni dans le flux d\'actualités, aucun lien ne sera affiché) :';
$string['clientshowimagelabel'] = 'Afficher l\'image du canal si disponible';
$string['configblock'] = 'Configurer ce bloc';
$string['couldnotfindfeed'] = 'Impossible de trouver le flux avec l\'ID.';
$string['couldnotfindloadrssfeed'] = 'Impossible de trouver ou de charger le flux RSS.';
$string['customtitlelabel'] = 'Titre personnalisé (laissez vide pour utiliser le titre fourni par le flux)';
$string['deletefeedconfirm'] = 'Voulez-vous vraiment supprimer ce flux?';
$string['disabledrssfeeds'] = 'Les flux RSS sont désactivés';
$string['displaydescriptionlabel'] = 'Afficher la description de chaque lien?';
$string['editafeed'] = 'Modifier un flux';
$string['editfeeds'] = 'Modifier, s\abonner ou se désabonner du flux RSS';
$string['editnewsfeeds'] = 'Modifier les flux d\'actualités';
$string['editrssblock'] = 'Modifier le bloc de titres RSS';
$string['enableautodiscovery'] = 'Activer la découverte automatique des flux?';
$string['enableautodiscovery_help'] = 'Si activé, les flux sur les pages Web sont trouvés automatiquement. Par exemple, si https://docs.moodle.org est entré, alors https://docs.moodle.org/en/index.php?title=Special:RecentChanges&feed=rss serait trouvé.';
$string['failedfeed'] = 'Échec du téléchargement du flux - réessayer après {$a}';
$string['failedfeeds'] = 'Un ou plusieurs flux RSS ont échoué';
$string['feed'] = 'Flux';
$string['feedadded'] = 'Flux RSS ajouté';
$string['feeddeleted'] = 'Flux RSS supprimé';
$string['feeds'] = 'Flux RSS';
$string['feedsaddedit'] = 'Ajouter/Modifier flux';
$string['feedsconfigurenewinstance'] = 'Cliquez ici pour configurer ce bloc pour afficher les flux RSS.';
$string['feedsconfigurenewinstance2'] = 'Cliquez sur l\'icône d\'édition ci-dessus pour configurer ce bloc pour afficher les flux RSS.';
$string['feedupdated'] = 'Flux RSS mis à jour';
$string['feedurl'] = 'URL du flux';
$string['findmorefeeds'] = 'Trouver plus de flux RSS';
$string['choosefeedlabel'] = 'Choisissez les flux que vous souhaitez rendre disponibles dans ce bloc:';
$string['managefeeds'] = 'Gérer les flux RSS';
$string['nofeeds'] = 'Aucun flux RSS défini pour ce site.';
$string['numentries'] = 'Entrées par flux';
$string['pickfeed'] = 'Choisir un flux RSS';
$string['pluginname'] = 'Flux RSS';
$string['privacy:metadata:block_rss_client:description'] = 'La description du flux RSS.';
$string['privacy:metadata:block_rss_client:preferredtitle'] = 'Le titre préféré (personnalisé) du flux RSS.';
$string['privacy:metadata:block_rss_client:shared'] = 'Si le flux RSS est disponible pour tous les cours.';
$string['privacy:metadata:block_rss_client:skiptime'] = 'Le temps défini en secondes que le cron attendra entre les tentatives de réessayer les flux RSS en échec.';
$string['privacy:metadata:block_rss_client:skipuntil'] = 'Le temps maximum défini que le cron tentera d\'ouvrir les flux RSS en échec.';
$string['privacy:metadata:block_rss_client:tableexplanation'] = 'Les informations du bloc RSS sont stockées ici.';
$string['privacy:metadata:block_rss_client:title'] = 'Le titre du flux RSS.';
$string['privacy:metadata:block_rss_client:url'] = 'L\'URL du flux RSS.';
$string['privacy:metadata:block_rss_client:userid'] = 'L\'ID de l\'utilisateur qui a ajouté le flux RSS.';
$string['remotenewsfeed'] = 'Flux RSS';
$string['refreshfeedstask'] = 'Tâche de rafraîchissement des flux RSS';
$string['rss_client:addinstance'] = 'Ajouter un nouveau bloc de flux RSS';
$string['rss_client:createprivatefeeds'] = 'Créer des flux RSS privés';
$string['rss_client:createsharedfeeds'] = 'Créer des flux RSS partagés';
$string['rss_client:manageanyfeeds'] = 'Gérer tous les flux RSS';
$string['rss_client:manageownfeeds'] = 'Gérer mes flux RSS';
$string['rss_client:myaddinstance'] = 'Ajouter un nouveau bloc de flux RSS au tableau de bord';
$string['seeallfeeds'] = 'Voir tous les flux';
$string['sharedfeed'] = 'Flux partagé';
$string['shownumentrieslabel'] = 'Nombre maximum d\'entrées à afficher par bloc.';
$string['submitters'] = 'Qui sera autorisé à définir de nouveaux flux RSS? Les flux définis sont disponibles pour n\'importe quelle page de votre site.';
$string['submitters2'] = 'Soumetteurs';
$string['timeout'] = 'Temps en minutes avant qu\'un flux RSS n\'expire en cache. Notez que ce temps définit le temps minimum avant l\'expiration; le flux sera rafraîchi en cache lors de la prochaine exécution de cron après expiration. Les valeurs recommandées sont de 30 minutes ou plus.';
$string['timeoutdesc'] = 'Temps en minutes pour qu\'un flux RSS vive en cache.';
$string['timeout2'] = 'Délai';
$string['updatefeed'] = 'Mettre à jour l\'URL du flux RSS';
$string['viewfeed'] = 'Voir le flux';
