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
 * Anobody can login using iomadsaml2
 *
 * @package   auth_iomadsaml2
 * @copyright Brendan Heywood <brendan@catalyst-au.net>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

 $string['alterlogout'] = 'Alternative Logout URL';
 $string['alterlogout_help'] = 'L\'URL pour rediriger un utilisateur après l\'exécution de tous les mécanismes de déconnexion internes';
 $string['anyauth'] = 'Allowed any auth type';
 $string['anyauth_help'] = 'Oui : Autoriser la connexion SAML pour tous les utilisateurs ? Non : Seulement les utilisateurs ayant iomadsaml2 comme type.';
 $string['anyauthotherdisabled'] = 'Vous vous êtes connecté avec succès en tant que \'{$a->username}\' mais votre type d\'authentification \'{$a->auth}\' est désactivé.';
 $string['attemptsignout'] = 'Attempt IdP Signout';
 $string['attemptsignout_help'] = 'Cela tentera de communiquer avec l\'IdP pour envoyer une demande de déconnexion';
 $string['auth_iomadsaml2description'] = 'Authenticate with a IOMAD SAML2 Identity Provider (IdP)';
 $string['auth_iomadsaml2blockredirectdescription'] = 'Rediriger ou afficher un message aux connexions IOMAD SAML2 en fonction des restrictions de groupe configurées';
 $string['autocreate'] = 'Auto create users';
 $string['autocreate_help'] = 'Autoriser la création d\'utilisateurs Moodle à la demande';
 $string['autologin'] = 'Auto-login';
 $string['autologin_help'] = 'Sur les pages permettant l\'accès invité sans connexion, connectez automatiquement les utilisateurs à Moodle avec un compte utilisateur réel s\'ils sont connectés à l\'IdP (en utilisant l\'authentification passive).';
 $string['autologinbysession'] = 'Check once per session';
 $string['autologinbycookie'] = 'Check when the specified cookie exists or changes';
 $string['autologincookie'] = 'Auto-login cookie';
 $string['autologincookie_help'] = 'Nom du cookie utilisé pour décider quand tenter la connexion automatique (uniquement pertinent si l\'option cookie est sélectionnée ci-dessus).';
 $string['availableidps'] = 'Select available IdPs';
 $string['availableidps_help'] = 'Si un fichier XML de métadonnées IdP contient plusieurs entités IdP, vous devrez sélectionner les entités disponibles pour que les utilisateurs puissent se connecter.';
 $string['blockredirectheading'] = 'Account blocking actions';
 $string['attrsimple'] = 'Simplify attributes';
 $string['attrsimple_help'] = 'Divers IdP tels qu\'ADFS utilisent des clés d\'attributs longues telles que des urns ou des noms de schéma XML avec espace de noms. Si défini sur Oui, cela simplifiera ces clés, par exemple, mappe http://schemas.xmlsoap.org/ws/2005/05/identity/claims/givenname à \'givenname\'.';
 $string['certificatedetails'] = 'Certificate details';
 $string['certificatedetailshelp'] = '<h1>Contenu du certificat public auto-généré SAML2</h1><p>Le chemin du certificat est ici :</p>';
 $string['checkcertificateexpiry'] = 'SAML certificate expiry';
 $string['checkcertificateexpired'] = 'Le certificat SAML a expiré il y a {$a}';
 $string['checkcertificatewarn'] = 'Le certificat SAML expirera dans {$a}';
 $string['checkcertificateok'] = 'Le certificat SAML expirera dans {$a}';
 $string['certificate_help'] = 'Régénérer la clé privée et le certificat utilisés par ce SP. | <a href=\'{$a}\'>Voir le certificat SP</a>';
 $string['certificatelock_help'] = 'Verrouiller les certificats empêchera leur réécriture une fois générés.';
 $string['certificatelock'] = 'Lock certificate';
 $string['certificatelock_locked'] = 'Le certificat est verrouillé';
 $string['certificatelock_lockedmessage'] = 'Les certificats sont actuellement verrouillés.';
 $string['certificatelock_unlock'] = 'Unlock certificates';
 $string['certificatelock_regenerate'] = 'Ne pas régénérer les certificats car ils sont verrouillés !';
 $string['certificatelock_warning'] = 'Attention. Vous êtes sur le point de verrouiller les certificats, êtes-vous sûr de vouloir faire cela ? <br> Les certificats ne sont pas actuellement verrouillés';
 $string['certificate'] = 'Régénérer le certificat';
 $string['commonname'] = 'Common Name';
 $string['countryname'] = 'Country';
 $string['debug'] = 'Debugging';
 $string['debug_help'] = '<p>Cela ajoute un débogage supplémentaire au journal Moodle normal | <a href=\'{$a}\'>Voir la configuration SSP</a></p>';
 $string['duallogin'] = 'Dual login';
 $string['duallogin_help'] = '
 <p>Si activé, les utilisateurs verront à la fois un bouton de connexion manuel et un bouton de connexion SAML. Si désactivé, ils seront toujours dirigés directement vers la page de connexion IdP.</p>
 <p>Si passif, les utilisateurs déjà authentifiés dans l\'IDP seront automatiquement connectés, sinon ils seront envoyés à la page de connexion Moodle.</p>
 <p>Si désactivé, les administrateurs peuvent toujours voir la page de connexion manuelle via /login/index.php?saml=off</p>
 <p>Si activé, les pages externes peuvent créer des liens profonds dans Moodle en utilisant saml, par exemple /course/view.php?id=45&saml=on</p>
 <p>Si défini sur tester la connexion IdP, le réseau sera vérifié pour la connectivité, et si fonctionnel, la connexion SAML sera initiée.<p/>';
 $string['emailtaken'] = 'Can\'t create a new account, because {$a} email address is already registered';
 $string['emailtakenupdate'] = 'Votre e-mail n\'a pas été mis à jour, car l\'adresse e-mail {$a} est déjà enregistrée';
 $string['errorinvalidautologin'] = 'Invalid autologin request';
 $string['errorparsingxml'] = 'Erreur lors de l\'analyse XML : {$a}';
 $string['exception'] = 'SAML2 exception: {$a}';
 $string['expirydays'] = 'Expiry in Days';
 $string['error'] = 'Login error';
 $string['fielddelimiter'] = 'Field delimiter';
 $string['fielddelimiter_help'] = 'Le délimiteur à utiliser lorsqu\'un champ reçoit un tableau de valeurs de l\'IdP.';
 $string['flaggedresponsetypemessage'] = 'Display custom message';
 $string['flaggedresponsetyperedirect'] = 'Redirect to external URL';
 $string['flagredirecturl'] = 'Redirect URL';
 $string['flagredirecturl_help'] = '
 <p>L\'URL pour rediriger un utilisateur n\'est pas autorisé à accéder à Moodle en fonction des restrictions de groupe configurées.</p>
 <p>(Utilisé uniquement lorsque le \'Type de réponse\' est \'Rediriger vers une URL externe\'.)</p>';
 $string['flagmessage'] = 'Response message';
 $string['flagmessage_help'] = '
 <p>Le message à afficher lorsqu\'un utilisateur n\'est pas autorisé à accéder à Moodle en fonction des restrictions de groupe configurées.</p>
 <p>(Affiché uniquement lorsque le \'Type de réponse\' est \'Afficher un message personnalisé\'.)</p>';
 $string['flagmessage_default'] = 'Vous êtes connecté à votre fournisseur d\'identité, cependant, ce compte a un accès limité à Moodle, veuillez contacter votre administrateur pour plus de détails.';
 $string['flagresponsetype'] = 'Account blocking response type';
 $string['flagresponsetype_help'] = 'Si l\'accès est bloqué en fonction des restrictions de groupe configurées, comment Moodle doit-il répondre ?';
 $string['idpattr_help'] = 'Quel attribut IdP doit être comparé à un champ utilisateur Moodle ?';
 $string['idpattr'] = 'Mapping IdP';
 $string['idpmetadata_badurl'] = 'Invalid metadata at {$a}';
 $string['idpmetadata_help'] = 'Pour utiliser plusieurs IdP, entrez chaque URL de métadonnées publiques sur une nouvelle ligne.<br/>Pour remplacer un nom, placez le texte avant le http. par exemple, "Nom IdP forcé http://ssp.local/simplesaml/iomadsaml2/idp/metadata.php"';
$string['idpmetadata'] = 'XML de métadonnées IdP OU URL XML publique';
$string['idpmetadata_invalid'] = 'Le XML IdP n\'est pas valide';
$string['idpmetadata_noentityid'] = 'Le XML IdP n\'a pas d\'entityID';
$string['idpmetadatarefresh_help'] = 'Exécuter une tâche planifiée pour mettre à jour les métadonnées IdP à partir de l\'URL des métadonnées IdP';
$string['idpmetadatarefresh'] = 'Actualisation des métadonnées IdP';
$string['idpnamedefault'] = 'Connexion via IOMAD SAML2';
$string['idpnamedefault_varaible'] = 'Connexion via IOMAD SAML2 ({$a})';
$string['idpname_help'] = 'par exemple, myUNI - ceci est détecté à partir des métadonnées et sera affiché sur la page de connexion double (si activé)';
$string['idpname'] = 'Remplacement de l\'étiquette IdP';
$string['localityname'] = 'Localité';
$string['logdirdefault'] = '/tmp/';
$string['logdir_help'] = 'Le répertoire de journalisation où SSPHP écrira, le fichier sera nommé simplesamlphp.log';
$string['logdir'] = 'Répertoire de journalisation';
$string['logtofile'] = 'Activer la journalisation dans un fichier';
$string['logtofile_help'] = 'Activer cette option redirigera la sortie du journal SSPHP vers un fichier dans le répertoire de journalisation';
$string['manageidpsheading'] = 'Gérer les fournisseurs d\'identité disponibles (IdP)';
$string['mdlattr_help'] = 'Quel champ utilisateur Moodle doit être comparé à l\'attribut IdP ?';
$string['mdlattr'] = 'Mappage Moodle';
$string['wantassertionssigned'] = 'Vouloir des assertions signées';
$string['wantassertionssigned_help'] = 'Si les assertions reçues par ce SP doivent être signées';
$string['assertionsconsumerservices'] = 'Services consommateurs d\'assertions';
$string['assertionsconsumerservices_help'] = 'Liste des liaisons que le SP doit prendre en charge';
$string['spentityid'] = 'ID d\'entité';
$string['spentityid_help'] = 'Remplacer l\'ID d\'entité du fournisseur de services. Dans la plupart des cas, laissez vide et une bonne valeur par défaut sera utilisée à la place.';
$string['allowcreate'] = 'Autoriser la création';
$string['allowcreate_help'] = 'Autoriser la création d\'utilisateurs IdP à la demande';
$string['authncontext'] = 'AuthnContext';
$string['authncontext_help'] = 'Permet l\'augmentation des assertions. Laissez vide sauf si nécessaire';
$string['metadatafetchfailed'] = 'Échec de la récupération des métadonnées : {$a}';
$string['metadatafetchfailedstatus'] = 'Échec de la récupération des métadonnées : Code d\'état {$a}';
$string['metadatafetchfailedunknown'] = 'Échec de la récupération des métadonnées : Erreur cURL inconnue';
$string['multiidp:label:displayname'] = 'Nom affiché';
$string['multiidp:label:alias'] = 'Alias';
$string['multiidp:label:active'] = 'Actif';
$string['multiidp:label:defaultidp'] = 'IdP par défaut';
$string['multiidp:label:admin'] = 'Pour les utilisateurs administrateurs uniquement';
$string['multiidp:label:admin_help'] = 'Tous les utilisateurs qui se connectent en utilisant cet IdP seront automatiquement nommés administrateurs du site';
$string['multiidp:label:whitelist'] = 'Adresses IP redirigées';
$string['multiidp:label:whitelist_help'] = 'Si défini, cela forcera les clients à utiliser cet IdP. Format : xxx.xxx.xxx.xxx/bitmask. Séparez plusieurs sous-réseaux sur une nouvelle ligne.';
$string['multiidpinfo'] = '
<ul>
<li>Un IdP ne peut être utilisé que s\'il est défini comme actif</li>
<li>Lorsque la connexion double est activée, tous les IdP actifs seront affichés sur la page de connexion</li>
<li>Lorsqu\'un IdP est défini comme par défaut et que la connexion double n\'est pas activée, cet IdP sera automatiquement utilisé sauf si ?multiidp=on ou saml=off est passé sur /login/index.php</li>
<li>Un IdP peut recevoir un alias, en accédant à /login/index.php?idpalias={alias}, l\'alias peut être utilisé directement pour cet IdP</li>
</ul>';
$string['multiidpbuttons'] = 'Boutons avec icônes';
$string['multiidpdisplay'] = 'Type d\'affichage multiple IdP';
$string['multiidpdisplay_help'] = 'Si un fichier XML de métadonnées IdP contient plusieurs entités IdP, comment chaque IdP disponible sera-t-il affiché ?';
$string['multiidpdropdown'] = 'Liste déroulante';
$string['nameidasattrib'] = 'Exposer NameID en tant qu\'attribut';
$string['nameidasattrib_help'] = 'La revendication NameID sera exposée à SSPHP en tant qu\'attribut nommé nameid';
$string['noattribute'] = 'Vous vous êtes connecté avec succès mais nous n\'avons pas trouvé votre attribut \'{$a}\' pour vous associer à un compte dans Moodle.';
$string['noidpfound'] = 'L\'IdP \'{$a}\' n\'a pas été trouvé comme IdP configuré.';
$string['nouser'] = 'Vous vous êtes connecté avec succès en tant que \'{$a}\' mais vous n\'avez pas de compte dans Moodle.';
$string['nullprivatecert'] = 'Échec de la création du certificat privé.';
$string['nullpubliccert'] = 'Échec de la création du certificat public.';
$string['organizationalunitname'] = 'Unité organisationnelle';
$string['organizationname'] = 'Organisation';
$string['passivemode'] = 'Mode passif';
$string['plugindisabled'] = 'Le plugin d\'authentification IOMAD SAML2 est désactivé';
$string['pluginname'] = 'IOMAD SAML2';
$string['privatekeypass'] = 'Mot de passe de la clé du certificat privé';
$string['privatekeypass_help'] = 'Cela est utilisé pour signer le certificat local Moodle, changer cela invalidera le certificat actuel.';
$string['regenerateheading'] = 'Régénérer la clé privée et le certificat';
$string['regenerate_submit'] = 'Régénérer';
$string['requestedattributes'] = 'Attributs demandés';
$string['requestedattributes_help'] = 'Certains IdP nécessitent que le SP déclare quels attributs seront demandés ou sont requis. Ajoutez chaque attribut sur une nouvelle ligne et ceux-ci seront présents dans les métadonnées SP sous la balise <code>AttributeConsumingService</code>. Si vous voulez qu\'un champ soit requis, mettez un espace puis * après cette ligne. {$a->example}';
$string['rememberidp'] = 'Se souvenir du service de connexion';
$string['required'] = 'Ce champ est requis';
$string['requireint'] = 'Ce champ est requis et doit être un entier positif';
$string['showidplink'] = 'Afficher le lien IdP';
$string['showidplink_help'] = 'Cela affichera le lien IdP lorsque le site est configuré.';
$string['source'] = 'Source : {$a}';
$string['spmetadata_help'] = '<a href=\'{$a}\'>Voir les métadonnées du fournisseur de services</a> | <a href=\'{$a}?download=1\'>Télécharger les métadonnées SP</a>
<p>Vous devrez peut-être donner cela à l\'administrateur IdP pour vous mettre sur liste blanche.</p>';
$string['spmetadatasign_help'] = 'Signer les métadonnées SP.';
$string['spmetadatasign'] = 'Signature des métadonnées SP';
$string['spmetadata'] = 'Métadonnées SP';
$string['sspversion'] = 'Version SimpleSAMLphp';
$string['stateorprovincename'] = 'État ou province';
$string['status'] = 'Statut';
$string['suspendeduser'] = 'Vous vous êtes connecté avec succès en tant que \'{$a}\' mais votre compte a été suspendu dans Moodle.';
$string['taskmetadatarefresh'] = 'Tâche d\'actualisation des métadonnées';
$string['test_auth_button_login'] = 'Connexion IdP';
$string['test_auth_button_logout'] = 'Déconnexion IdP';
$string['test_auth_str'] = 'Tester isAuthenticated et connexion';
$string['test_endpoint'] = 'URL de test de connexion';
$string['test_endpoint_desc'] = 'Entrez une URL pour tester la connexion pour la redirection IdP depuis le navigateur client. Certains utilisateurs ou réseaux peuvent ne pas avoir de connectivité à l\'IdP en fonction des autorisations de compte ou de réseau.';
$string['test_idp_conn'] = 'Tester la connexion IdP';
$string['test_noticetestrequirements'] = 'Pour utiliser ce test, le plugin doit être configuré, activé et le mode de débogage doit être activé dans les paramètres du plugin.';
$string['test_passive_str'] = 'Tester en utilisant isPassive';
$string['testdebuggingdisabled'] = 'Pour utiliser cette page de test, le débogage SAML doit être activé';
$string['tolower'] = 'Correspondance de casse';
$string['tolower:exact'] = 'Exact';
$string['tolower:lowercase'] = 'Minuscule';
$string['tolower:caseandaccentinsensitive'] = 'Insensible à la casse et aux accents';
$string['tolower:caseinsensitive'] = 'Insensible à la casse';
$string['tolower_help'] = '
<p>Exact : la correspondance est sensible à la casse (par défaut).</p>
<p>Minuscule : applique la minuscule à l\'attribut IdP avant la correspondance.</p>
<p>Insensible à la casse : ignore la casse lors de la correspondance.</p>';
$string['wrongauth'] = 'Vous vous êtes connecté avec succès en tant que \'{$a}\' mais vous n\'êtes pas autorisé à accéder à Moodle.';
$string['auth_data_mapping'] = 'Mappage des données';
$string['auth_fieldlockfield'] = 'Verrouiller la valeur ({$a})';
$string['auth_fieldmapping'] = 'Mappage des données ({$a})';
$string['auth_fieldlock_expl'] = '<p><b>Verrouiller la valeur :</b> Si activé, empêchera les utilisateurs et les administrateurs Moodle de modifier directement le champ. Utilisez cette option si vous maintenez ces données dans le système d\'authentification externe. </p>';
$string['auth_fieldlocks'] = 'Verrouiller les champs utilisateur';
$string['auth_updatelocalfield'] = 'Mettre à jour localement ({$a})';
$string['auth_updateremotefield'] = 'Mettre à jour à distance ({$a})';
$string['cannotmapfield'] = 'Collision de mappage détectée - deux champs mappent au même élément de note {$a}';
$string['locked'] = 'Verrouillé';
$string['unlocked'] = 'Déverrouillé';
$string['unlockedifempty'] = 'Déverrouillé si vide';
$string['update_never'] = 'Jamais';
$string['update_oncreate'] = 'À la création';
$string['update_onlogin'] = 'À chaque connexion';
$string['update_onupdate'] = 'À la mise à jour';
$string['phone1'] = 'Téléphone';
$string['phone2'] = 'Téléphone mobile';
$string['nameidpolicy'] = 'Politique NameID';
$string['nameidpolicy_help'] = '';
$string['grouprules'] = 'Règles de groupe';
$string['grouprules_help'] = '<p>Une liste de règles pour pouvoir contrôler l\'accès en fonction de la valeur de l\'attribut de groupe.</p>
<p>Chaque ligne doit avoir une règle au format : {autoriser ou refuser} {attributs de groupe}={valeur}.</p>
<p>La règle la plus haute dans la liste sera appliquée en premier.</p>
Exemple : <br/>
autoriser admins=oui<br>
refuser admins=non<br>
autoriser examrole=proctor<br>
refuser library=overdue<br>';
/*
 * Privacy provider (GDPR)
 */
$string["privacy:no_data_reason"] = "Le plugin d\'authentification IOMAD Saml2 ne stocke aucune donnée personnelle.";

/*
 * Signing Algorithm
 */
$string['sha1'] = 'SHA1 hérité (dangereux)';
$string['sha256'] = 'SHA256';
$string['sha384'] = 'SHA384';
$string['sha512'] = 'SHA512';
$string['signaturealgorithm'] = 'Algorithme de signature';
$string['signaturealgorithm_help'] = 'C\'est l\'algorithme qui sera utilisé pour signer les demandes SAML. Avertissement : L\'algorithme SHA1 n\'est fourni que pour des raisons de compatibilité, sauf si vous devez absolument l\'utiliser, il est recommandé de l\'éviter et d\'utiliser au moins SHA256 à la place.';
$string['selectloginservice'] = 'Sélectionnez un service de connexion';
$string['regenerateheader'] = 'Régénérer la clé privée et le certificat';
$string['regeneratewarning'] = 'Attention ! Générer un nouveau certificat écrasera l\'actuel et vous devrez peut-être mettre à jour votre IDP';
$string['regeneratepath'] = 'Chemin du certificat : {$a}';
$string['regenerateheader'] = 'Régénérer la clé privée et le certificat';
$string['regeneratesuccess'] = 'Clé privée et certificat régénérés avec succès';
