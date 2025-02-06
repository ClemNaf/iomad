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
 * English language strings.
 *
 * @package auth_iomadoidc
 * @author James McQuillan <james.mcquillan@remote-learner.net>
 * @author Lai Wei <lai.wei@enovation.ie>
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @copyright (C) 2014 onwards Microsoft, Inc. (http://microsoft.com/)
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'IOMAD OpenID Connect';
$string['auth_iomadoidcdescription'] = 'Le plugin d\'authentification IOMAD OpenID Connect fournit une fonctionnalité de connexion unique utilisant un IdP configurable.';

// Configuration pages.
$string['settings_page_other_settings'] = 'Autres options';
$string['settings_page_application'] = 'IdP et authentification';
$string['settings_page_cleanup_iomadoidc_tokens'] = 'Nettoyer les jetons OpenID Connect';
$string['settings_page_field_mapping'] = 'Mappage des champs';
$string['heading_basic'] = 'Paramètres de base';
$string['heading_basic_desc'] = '';
$string['heading_additional_options'] = 'Options supplémentaires';
$string['heading_additional_options_desc'] = '';
$string['heading_user_restrictions'] = 'Restrictions utilisateur';
$string['heading_user_restrictions_desc'] = '';
$string['heading_sign_out'] = 'Intégration de déconnexion';
$string['heading_sign_out_desc'] = '';
$string['heading_display'] = 'Affichage';
$string['heading_display_desc'] = '';
$string['heading_debugging'] = 'Débogage';
$string['heading_debugging_desc'] = '';
$string['idptype'] = 'Type de fournisseur d\'identité (IdP)';
$string['idptype_help'] = 'Trois types d\'IdP sont actuellement pris en charge :
<ul>
<li><b>Azure AD (v1.0)</b> : Azure AD avec des points de terminaison oauth2 v1.0, par exemple https://login.microsoftonline.com/common/oauth2/authorize.</li>
<li><b>Microsoft identity platform (v2.0)</b> : Azure AD avec des points de terminaison oath2 v2.0, par exemple https://login.microsoftonline.com/common/oauth2/v2.0/authorize.</li>
<li><b>Autre</b> : tout IdP non Azure AD.</li>
</ul>
Les différences entre les options <b>Azure AD (v1.0)</b> et <b>Microsoft identity platform (v2.0)</b> peuvent être trouvées sur <a href="https://docs.microsoft.com/en-us/azure/active-directory/azuread-dev/azure-ad-endpoint-comparison">https://docs.microsoft.com/en-us/azure/active-directory/azuread-dev/azure-ad-endpoint-comparison</a>.<br/>
Notamment, l\'application configurée peut utiliser un <b>certificat</b> en plus d\'un <b>secret</b> pour l\'authentification lors de l\'utilisation de l\'IdP <b>Microsoft identity platform (v2.0)</b>.<br/>
Les points de terminaison d\'autorisation et de jeton doivent être configurés en fonction du type d\'IdP configuré.';
$string['idp_type_azuread'] = 'Azure AD (v1.0)';
$string['idp_type_microsoft'] = 'Microsoft identity platform (v2.0)';
$string['idp_type_other'] = 'Autre';
$string['cfg_authenticationlink_desc'] = '<a href="{$a}" target="_blank">Lien vers la configuration de l\'IdP et de l\'authentification</a>';
$string['authendpoint'] = 'Point de terminaison d\'autorisation';
$string['authendpoint_help'] = 'L\'URI du point de terminaison d\'autorisation de votre IdP à utiliser.<br/>
Notez que si le site doit être configuré pour permettre aux utilisateurs d\'autres locataires d\'accéder, un point de terminaison d\'autorisation spécifique au locataire ne peut pas être utilisé.';
$string['cfg_autoappend_key'] = 'Auto-Ajout';
$string['cfg_autoappend_desc'] = 'Ajoutez automatiquement cette chaîne lors de la connexion des utilisateurs utilisant la méthode d\'authentification "Resource Owner Password Credentials". Cela est utile lorsque votre IdP nécessite un domaine commun, mais que vous ne souhaitez pas que les utilisateurs le saisissent lors de la connexion. Par exemple, si l\'utilisateur OpenID Connect complet est "james@example.com" et que vous entrez "@example.com" ici, l\'utilisateur n\'aura qu\'à entrer "james" comme nom d\'utilisateur. <br /><b>Note :</b> Dans le cas où des noms d\'utilisateur conflictuels existent - c\'est-à-dire qu\'un utilisateur Moodle existe avec le même nom, la priorité du plugin d\'authentification est utilisée pour déterminer quel utilisateur l\'emporte.';
$string['clientid'] = 'ID de l\'application';
$string['clientid_help'] = 'Votre ID d\'application / client enregistré sur l\'IdP.';
$string['clientauthmethod'] = 'Méthode d\'authentification du client';
$string['clientauthmethod_help'] = '<ul>
<li>Les IdP de tous types peuvent utiliser la méthode d\'authentification "<b>Secret</b>".</li>
<li>Les IdP de type <b>Microsoft identity platform (v2.0)</b> peuvent également utiliser la méthode d\'authentification <b>Certificat</b>.</li>
</ul>
Notez que la méthode d\'authentification <b>Certificat</b> n\'est pas prise en charge dans le flux de connexion <b>Resource Owner Password Credentials Grant</b>.';
$string['auth_method_secret'] = 'Secret';
$string['auth_method_certificate'] = 'Certificat';
$string['clientsecret'] = 'Secret du client';
$string['clientsecret_help'] = 'Lors de l\'utilisation de la méthode d\'authentification <b>secret</b>, il s\'agit du secret du client sur l\'IdP. Chez certains fournisseurs, il est également appelé clé.';
$string['clientprivatekey'] = 'Clé privée du certificat client';
$string['clientprivatekey_help'] = 'Lors de l\'utilisation de la méthode d\'authentification <b>certificat</b>, il s\'agit de la clé privée du certificat utilisé pour s\'authentifier auprès de l\'IdP.';
$string['clientcert'] = 'Clé publique du certificat client';
$string['clientcert_help'] = 'Lors de l\'utilisation de la méthode d\'authentification <b>certificat</b>, il s\'agit de la clé publique, ou du certificat, utilisé pour s\'authentifier auprès de l\'IdP.';
$string['cfg_domainhint_key'] = 'Indice de domaine';
$string['cfg_domainhint_desc'] = 'Lors de l\'utilisation du flux de connexion <b>Authorization Code</b>, passez cette valeur en tant que paramètre "domain_hint". "domain_hint" est utilisé par certains IdP OpenID Connect pour faciliter le processus de connexion des utilisateurs. Vérifiez auprès de votre fournisseur s\'il prend en charge ce paramètre.';
$string['cfg_err_invalidauthendpoint'] = 'Point de terminaison d\'autorisation invalide';
$string['cfg_err_invalidtokenendpoint'] = 'Point de terminaison de jeton invalide';
$string['cfg_err_invalidclientid'] = 'ID client invalide';
$string['cfg_err_invalidclientsecret'] = 'Secret client invalide';
$string['cfg_forceredirect_key'] = 'Redirection forcée';
$string['cfg_forceredirect_desc'] = 'Si activé, passera la page d\'index de connexion et redirigera vers la page OpenID Connect. Peut être contourné avec le paramètre d\'URL ?noredirect=1';
$string['cfg_icon_key'] = 'Icône';
$string['cfg_icon_desc'] = 'Une icône à afficher à côté du nom du fournisseur sur la page de connexion.';
$string['cfg_iconalt_o365'] = 'Icône Microsoft 365';
$string['cfg_iconalt_locked'] = 'Icône verrouillée';
$string['cfg_iconalt_lock'] = 'Icône de verrouillage';
$string['cfg_iconalt_go'] = 'Cercle vert';
$string['cfg_iconalt_stop'] = 'Cercle rouge';
$string['cfg_iconalt_user'] = 'Icône utilisateur';
$string['cfg_iconalt_user2'] = 'Icône utilisateur alternative';
$string['cfg_iconalt_key'] = 'Icône de clé';
$string['cfg_iconalt_group'] = 'Icône de groupe';
$string['cfg_iconalt_group2'] = 'Icône de groupe alternative';
$string['cfg_iconalt_mnet'] = 'Icône MNET';
$string['cfg_iconalt_userlock'] = 'Utilisateur avec icône de verrouillage';
$string['cfg_iconalt_plus'] = 'Icône plus';
$string['cfg_iconalt_check'] = 'Icône de coche';
$string['cfg_iconalt_rightarrow'] = 'Icône de flèche vers la droite';
$string['cfg_customicon_key'] = 'Icône personnalisée';
$string['cfg_customicon_desc'] = 'Si vous souhaitez utiliser votre propre icône, téléchargez-la ici. Cela remplace toute icône choisie ci-dessus. <br /><br /><b>Notes sur l\'utilisation des icônes personnalisées :</b><ul><li>Cette image ne sera <b>pas</b> redimensionnée sur la page de connexion, nous vous recommandons donc de télécharger une image ne dépassant pas 35x35 pixels.</li><li>Si vous avez téléchargé une icône personnalisée et que vous souhaitez revenir à l\'une des icônes par défaut, cliquez sur l\'icône personnalisée dans la boîte ci-dessus, puis cliquez sur "Supprimer", puis cliquez sur "OK", puis cliquez sur "Enregistrer les modifications" en bas de ce formulaire. L\'icône par défaut sélectionnée apparaîtra maintenant sur la page de connexion Moodle.</li></ul>';
$string['cfg_debugmode_key'] = 'Enregistrer les messages de débogage';
$string['cfg_debugmode_desc'] = 'Si activé, les informations seront enregistrées dans le journal Moodle pour aider à identifier les problèmes.';
$string['cfg_loginflow_key'] = 'Flux de connexion';
$string['cfg_loginflow_authcode'] = 'Flux de code d\'autorisation <b>(recommandé)</b>';
$string['cfg_loginflow_authcode_desc'] = 'En utilisant ce flux, l\'utilisateur clique sur le nom de l\'IdP (voir "Nom d\'affichage du fournisseur" ci-dessus) sur la page de connexion Moodle et est redirigé vers le fournisseur pour se connecter. Une fois connecté avec succès, l\'utilisateur est redirigé vers Moodle où la connexion Moodle se fait de manière transparente. C\'est la manière la plus standardisée et sécurisée pour l\'utilisateur de se connecter.';
$string['cfg_loginflow_rocreds'] = 'Flux de jetons d\'accès du propriétaire des ressources <b>(déprécié)</b>';
$string['cfg_loginflow_rocreds_desc'] = '<b>Ce flux de connexion est déprécié et sera bientôt supprimé du plugin.</b><br/>En utilisant ce flux, l\'utilisateur entre son nom d\'utilisateur et son mot de passe dans le formulaire de connexion Moodle comme il le ferait avec une connexion manuelle. Cela autorisera l\'utilisateur auprès de l\'IdP, mais ne créera pas de session sur le site de l\'IdP. Par exemple, si vous utilisez Microsoft 365 avec OpenID Connect, l\'utilisateur sera connecté à Moodle mais pas aux applications web Microsoft 365. L\'utilisation de la demande d\'autorisation est recommandée si vous souhaitez que les utilisateurs soient connectés à la fois à Moodle et à l\'IdP. Notez que tous les IdP ne prennent pas en charge ce flux. Cette option ne doit être utilisée que lorsque d\'autres types de jetons d\'autorisation ne sont pas disponibles.';
$string['iomadoidcresource'] = 'Ressource';
$string['iomadoidcresource_help'] = 'La ressource OpenID Connect pour laquelle envoyer la demande.<br/>
<b>Note</b> ce paramètre n\'est pas pris en charge dans l\'IdP <b>Microsoft identity platform (v2.0)</b>.';
$string['iomadoidcscope'] = 'Portée';
$string['iomadoidcscope_help'] = 'La portée OIDC à utiliser.';
$string['cfg_opname_key'] = 'Nom d\'affichage du fournisseur';
$string['cfg_opname_desc'] = 'Il s\'agit d\'une étiquette destinée à l\'utilisateur final qui identifie le type de justificatifs que l\'utilisateur doit utiliser pour se connecter. Cette étiquette est utilisée dans toutes les parties destinées aux utilisateurs de ce plugin pour identifier votre fournisseur.';
$string['cfg_redirecturi_key'] = 'URI de redirection';
$string['cfg_redirecturi_desc'] = 'Il s\'agit de l\'URI à enregistrer en tant qu\'"URI de redirection". Votre IdP OpenID Connect devrait demander cela lors de l\'enregistrement de Moodle en tant que client. <br /><b>NOTE :</b> Vous devez entrer cela dans votre IdP OpenID Connect *exactement* comme il apparaît ici. Toute différence empêchera les connexions utilisant OpenID Connect.';
$string['tokenendpoint'] = 'Point de terminaison de jeton';
$string['tokenendpoint_help'] = 'L\'URI du point de terminaison de jeton de votre IdP à utiliser.<br/>
Notez que si le site doit être configuré pour permettre aux utilisateurs d\'autres locataires d\'accéder, un point de terminaison de jeton spécifique au locataire ne peut pas être utilisé.';
$string['cfg_userrestrictions_key'] = 'Restrictions utilisateur';
$string['cfg_userrestrictions_desc'] = 'Autoriser uniquement les utilisateurs à se connecter qui répondent à certaines restrictions. <br /><b>Comment utiliser les restrictions utilisateur : </b> <ul><li>Entrez un modèle de <a href="https://en.wikipedia.org/wiki/Regular_expression">expression régulière</a> qui correspond aux noms d\'utilisateur des utilisateurs que vous souhaitez autoriser.</li><li>Entrez un modèle par ligne</li><li>Si vous entrez plusieurs modèles, un utilisateur sera autorisé s\'il correspond à L\'UN des modèles.</li><li>Le caractère "/" doit être échappé avec "\".</li><li>Si vous n\'entrez aucune restriction ci-dessus, tous les utilisateurs pouvant se connecter à l\'IdP OpenID Connect seront acceptés par Moodle.</li><li>Tout utilisateur qui ne correspond à aucun des modèles saisis sera empêché de se connecter en utilisant OpenID Connect.</li></ul>';
$string['cfg_userrestrictionscasesensitive_key'] = 'Restrictions utilisateur sensibles à la casse';
$string['cfg_userrestrictionscasesensitive_desc'] = 'Cela contrôle si l\'option "/i" dans l\'expression régulière est utilisée dans la correspondance des restrictions utilisateur.<br/>Si activé, toutes les vérifications de restrictions utilisateur seront effectuées comme sensibles à la casse. Notez que si cela est désactivé, tous les modèles sur les cas de lettres seront ignorés.';
$string['cfg_signoffintegration_key'] = 'Déconnexion unique (de Moodle à IdP)';
$string['cfg_signoffintegration_desc'] = 'Si l\'option est activée, lorsqu\'un utilisateur Moodle connecté à l\'IdP configuré se déconnecte de Moodle, l\'intégration déclenchera une demande au point de terminaison de déconnexion ci-dessous, tentant de déconnecter également l\'utilisateur de l\'IdP.<br/>
Notez que pour l\'intégration avec Microsoft Azure AD, l\'URL du site Moodle ({$a}) doit être ajoutée en tant qu\'URI de redirection dans l\'application Azure créée pour l\'intégration Moodle et Microsoft 365.';
$string['cfg_logoutendpoint_key'] = 'Point de terminaison de déconnexion de l\'IdP';
$string['cfg_logoutendpoint_desc'] = 'L\'URI du point de terminaison de déconnexion de votre IdP à utiliser.';
$string['cfg_frontchannellogouturl_key'] = 'URL de déconnexion du canal frontal';
$string['cfg_frontchannellogouturl_desc'] = 'Il s\'agit de l\'URL que votre IdP doit déclencher lorsqu\'il tente de déconnecter les utilisateurs de Moodle.<br/>
Pour Microsoft Azure AD / Microsoft identity platform, le paramètre est appelé "URL de déconnexion du canal frontal" et est configurable dans l\'application Azure.';
$string['cfg_field_mapping_desc'] = 'Les données de profil utilisateur peuvent être mappées de l\'IdP Open ID Connect à Moodle.<br/>
<ul>
<li>Les données de profil de base sont disponibles à partir des jetons d\'ID de tous les IdP.</li>
<li>Si Azure AD est utilisé comme IdP, des données de profil supplémentaires peuvent être mises à disposition en installant et en configurant le <a href="https://moodle.org/plugins/local_o365">plugin d\'intégration Microsoft 365 (local_o365)</a>.</li>
<li>Si la fonctionnalité de synchronisation de profil SDS est activée dans le plugin local_o365, certains champs de profil peuvent être synchronisés de SDS à Moodle lors de l\'exécution de la tâche planifiée "Synchroniser avec SDS", et ne se produiront pas lors de l\'exécution de la tâche planifiée "Synchroniser les utilisateurs avec Azure AD", ni lorsque l\'utilisateur se connecte.</li>
</ul>';
$string['cfg_cleanupiomadoidctokens_key'] = 'Nettoyer les jetons OpenID Connect';
$string['cfg_cleanupiomadoidctokens_desc'] = 'Si vos utilisateurs rencontrent des problèmes pour se connecter en utilisant leur compte Microsoft 365, essayez de nettoyer les jetons OpenID Connect. Cela supprime les jetons errants et incomplets qui peuvent causer des erreurs. ATTENTION : Cela peut interrompre les connexions en cours, il est donc préférable de le faire pendant les périodes d\'inactivité.';
$string['settings_section_basic'] = 'Paramètres de base';
$string['settings_section_authentication'] = 'Authentification';
$string['settings_section_endpoints'] = 'Points de terminaison';
$string['settings_section_other_params'] = 'Autres paramètres';
$string['authentication_and_endpoints_saved'] = 'Paramètres d\'authentification et de points de terminaison mis à jour.';
$string['application_updated'] = 'Paramètre de l\'application OpenID Connect mis à jour.';
$string['application_updated_azure'] = 'Paramètre de l\'application OpenID Connect mis à jour.<br/>
<span class="warning" style="color: red;">L\'administrateur Azure devra <b>Fournir le consentement de l\'administrateur</b> et <b>Vérifier la configuration</b> à nouveau sur la <a href="{$a}" target="_blank">page de configuration de l\'intégration Microsoft 365</a> si les paramètres "Type de fournisseur d\'identité (IdP)" ou "Méthode d\'authentification du client" sont mis à jour.</span>';

$string['event_debug'] = 'Message de débogage';

$string['task_cleanup_iomadoidc_state_and_token'] = 'Nettoyer l\'état OIDC et le jeton invalide';

$string['errorauthdisconnectemptypassword'] = 'Le mot de passe ne peut pas être vide';
$string['errorauthdisconnectemptyusername'] = 'Le nom d\'utilisateur ne peut pas être vide';
$string['errorauthdisconnectusernameexists'] = 'Ce nom d\'utilisateur est déjà pris. Veuillez en choisir un autre.';
$string['errorauthdisconnectnewmethod'] = 'Utiliser la méthode de connexion';
$string['errorauthdisconnectinvalidmethod'] = 'Méthode de connexion invalide reçue.';
$string['errorauthdisconnectifmanual'] = 'Si vous utilisez la méthode de connexion manuelle, entrez les informations d\'identification ci-dessous.';
$string['errorauthdisconnectinvalidmethod'] = 'Méthode de connexion invalide reçue.';
$string['errorauthgeneral'] = 'Il y a eu un problème lors de votre connexion. Veuillez contacter votre administrateur pour obtenir de l\'aide.';
$string['errorauthinvalididtoken'] = 'id_token invalide reçu.';
$string['errorauthloginfailednouser'] = 'Connexion invalide : Utilisateur non trouvé dans Moodle. Si ce site a activé le paramètre "authpreventaccountcreation", cela peut signifier que vous devez demander à un administrateur de créer un compte pour vous d\'abord.';
$string['errorauthloginfaileddupemail'] = 'Connexion invalide : Un compte existant sur ce Moodle a la même adresse e-mail que le compte que vous essayez de créer, et le paramètre "Autoriser les comptes avec le même e-mail" (allowaccountssameemail) est désactivé.';
$string['errorauthnoauthcode'] = 'Aucun code d\'autorisation n\'a été reçu du serveur d\'identité. Les journaux d\'erreurs peuvent avoir plus d\'informations.';
$string['errorauthnocredsandendpoints'] = 'Veuillez configurer les informations d\'identification et les points de terminaison du client OpenID Connect.';
$string['errorauthnohttpclient'] = 'Veuillez définir un client HTTP.';
$string['errorauthnoidtoken'] = 'id_token OpenID Connect non reçu.';
$string['errorauthnoaccesstoken'] = 'Jeton d\'accès non reçu.';
$string['errorauthunknownstate'] = 'État inconnu.';
$string['errorauthuseralreadyconnected'] = 'Vous êtes déjà connecté à un autre utilisateur OpenID Connect.';
$string['errorauthuserconnectedtodifferent'] = 'L\'utilisateur OpenID Connect qui s\'est authentifié est déjà connecté à un utilisateur Moodle.';
$string['errorbadloginflow'] = 'Type d\'authentification spécifié invalide. Remarque : Si vous recevez cela après une installation ou une mise à jour récente, veuillez vider le cache de Moodle.';
$string['errorjwtbadpayload'] = 'Impossible de lire la charge utile JWT.';
$string['errorjwtcouldnotreadheader'] = 'Impossible de lire l\'en-tête JWT';
$string['errorjwtempty'] = 'JWT vide ou non chaîne reçu.';
$string['errorjwtinvalidheader'] = 'En-tête JWT invalide';
$string['errorjwtmalformed'] = 'JWT mal formé reçu.';
$string['errorjwtunsupportedalg'] = 'Algorithme JWS ou JWE non pris en charge';
$string['errorlogintoconnectedaccount'] = 'Cet utilisateur Microsoft 365 est connecté à un compte Moodle, mais la connexion OpenID Connect n\'est pas activée pour ce compte Moodle. Veuillez vous connecter au compte Moodle en utilisant la méthode d\'authentification définie pour utiliser les fonctionnalités de Microsoft 365';
$string['erroriomadoidcnotenabled'] = 'Le plugin d\'authentification OpenID Connect n\'est pas activé.';
$string['errornodisconnectionauthmethod'] = 'Impossible de se déconnecter car il n\'y a pas de plugin d\'authentification activé pour revenir en arrière. (soit la méthode de connexion précédente de l\'utilisateur, soit la méthode de connexion manuelle).';
$string['erroriomadoidcclientinvalidendpoint'] = 'URI de point de terminaison invalide reçu.';
$string['erroriomadoidcclientnocreds'] = 'Veuillez définir les informations d\'identification du client avec setcreds';
$string['erroriomadoidcclientnoauthendpoint'] = 'Aucun point de terminaison d\'autorisation défini. Veuillez définir avec $this->setendpoints';
$string['erroriomadoidcclientnotokenendpoint'] = 'Aucun point de terminaison de jeton défini. Veuillez définir avec $this->setendpoints';
$string['erroriomadoidcclientinsecuretokenendpoint'] = 'Le point de terminaison de jeton doit utiliser SSL/TLS pour cela.';
$string['errorrestricted'] = 'Ce site a mis en place des restrictions sur les utilisateurs pouvant se connecter avec OpenID Connect. Ces restrictions vous empêchent actuellement de terminer cette tentative de connexion.';
$string['errorucpinvalidaction'] = 'Action invalide reçue.';
$string['erroriomadoidccall'] = 'Erreur dans OpenID Connect. Veuillez vérifier les journaux pour plus d\'informations.';
$string['erroriomadoidccall_message'] = 'Erreur dans OpenID Connect : {$a}';
$string['errorinvalidredirect_message'] = 'L\'URL vers laquelle vous essayez de rediriger n\'existe pas.';
$string['error_empty_tenantnameorguid'] = 'Le nom ou le GUID du locataire ne peut pas être vide lors de l\'utilisation des IdP Azure AD (v1.0) ou Microsoft identity platform (v2.0).';
$string['error_invalid_client_authentication_method'] = "Méthode d\'authentification client invalide";
$string['error_empty_client_secret'] = 'Le secret du client ne peut pas être vide lors de l\'utilisation de la méthode d\'authentification "secret"';
$string['error_empty_client_private_key'] = 'La clé privée du certificat client ne peut pas être vide lors de l\'utilisation de la méthode d\'authentification "certificat"';
$string['error_empty_client_cert'] = 'La clé publique du certificat client ne peut pas être vide lors de l\'utilisation de la méthode d\'authentification "certificat"';
$string['error_empty_tenantname_or_guid'] = 'Le nom ou le GUID du locataire ne peut pas être vide lors de l\'utilisation de la méthode d\'authentification "certificat"';
$string['error_endpoint_mismatch_auth_endpoint'] = 'Le point de terminaison d\'autorisation configuré ne correspond pas au type d\'IdP configuré.<br/>
<ul>
<li>Lors de l\'utilisation du type d\'IdP "Azure AD (v1.0)", utilisez le point de terminaison v1.0, par exemple https://login.microsoftonline.com/common/oauth2/authorize</li>
<li>Lors de l\'utilisation du type d\'IdP "Microsoft identity platform (v2.0)", utilisez le point de terminaison v2.0, par exemple https://login.microsoftonline.com/common/oauth2/v2.0/authorize</li>
</ul>';
$string['error_endpoint_mismatch_token_endpoint'] = 'Le point de terminaison de jeton configuré ne correspond pas au type d\'IdP configuré.<br/>
<ul>
<li>Lors de l\'utilisation du type d\'IdP "Azure AD (v1.0)", utilisez le point de terminaison v1.0, par exemple https://login.microsoftonline.com/common/oauth2/token</li>
<li>Lors de l\'utilisation du type d\'IdP "Microsoft identity platform (v2.0)", utilisez le point de terminaison v2.0, par exemple https://login.microsoftonline.com/common/oauth2/v2.0/authorize</li>
</ul>';
$string['error_empty_iomadoidcresource'] = 'La ressource ne peut pas être vide lors de l\'utilisation d\'Azure AD (v1.0) ou d\'autres types d\'IdP.';
$string['erroruserwithusernamealreadyexists'] = 'Une erreur s\'est produite lors de la tentative de renommage de votre compte Moodle. Un utilisateur Moodle avec le nouveau nom d\'utilisateur existe déjà. Demandez à votre administrateur de site de résoudre ce problème en premier.';

$string['eventuserauthed'] = 'Utilisateur autorisé avec OpenID Connect';
$string['eventusercreated'] = 'Utilisateur créé avec OpenID Connect';
$string['eventuserconnected'] = 'Utilisateur connecté à OpenID Connect';
$string['eventuserloggedin'] = 'Utilisateur connecté avec OpenID Connect';
$string['eventuserdisconnected'] = 'Utilisateur déconnecté d\'OpenID Connect';
$string['eventuserrenameattempt'] = 'Le plugin auth_iomadoidc a tenté de renommer un utilisateur';

$string['iomadoidc:manageconnection'] = 'Autoriser la connexion et la déconnexion OpenID';
$string['iomadoidc:manageconnectionconnect'] = 'Autoriser la connexion OpenID';
$string['iomadoidc:manageconnectiondisconnect'] = 'Autoriser la déconnexion OpenID';

$string['privacy:metadata:auth_iomadoidc'] = 'Authentification OpenID Connect';
$string['privacy:metadata:auth_iomadoidc_prevlogin'] = 'Méthodes de connexion précédentes pour annuler les connexions Microsoft 365';
$string['privacy:metadata:auth_iomadoidc_prevlogin:userid'] = 'L\'ID de l\'utilisateur Moodle';
$string['privacy:metadata:auth_iomadoidc_prevlogin:method'] = 'La méthode de connexion précédente';
$string['privacy:metadata:auth_iomadoidc_prevlogin:password'] = 'Le champ de mot de passe utilisateur précédent (crypté).';
$string['privacy:metadata:auth_iomadoidc_token'] = 'Jetons OpenID Connect';
$string['privacy:metadata:auth_iomadoidc_token:iomadoidcuniqid'] = 'L\'identifiant unique de l\'utilisateur OIDC.';
$string['privacy:metadata:auth_iomadoidc_token:username'] = 'Le nom d\'utilisateur de l\'utilisateur Moodle';
$string['privacy:metadata:auth_iomadoidc_token:userid'] = 'L\'ID de l\'utilisateur Moodle';
$string['privacy:metadata:auth_iomadoidc_token:iomadoidcusername'] = 'Le nom d\'utilisateur de l\'utilisateur OIDC';
$string['privacy:metadata:auth_iomadoidc_token:scope'] = 'La portée du jeton';
$string['privacy:metadata:auth_iomadoidc_token:tokenresource'] = 'La ressource du jeton';
$string['privacy:metadata:auth_iomadoidc_token:authcode'] = 'Le code d\'authentification pour le jeton';
$string['privacy:metadata:auth_iomadoidc_token:token'] = 'Le jeton';
$string['privacy:metadata:auth_iomadoidc_token:expiry'] = 'L\'expiration du jeton';
$string['privacy:metadata:auth_iomadoidc_token:refreshtoken'] = 'Le jeton de rafraîchissement';
$string['privacy:metadata:auth_iomadoidc_token:idtoken'] = 'Le jeton d\'ID';

// In the following strings, $a refers to a customizable name for the identity manager. For example, this could be
// "Microsoft 365", "OpenID Connect", etc.
$string['ucp_general_intro'] = 'Ici, vous pouvez gérer votre connexion à {$a}. Si activé, vous pourrez utiliser votre compte {$a} pour vous connecter à Moodle au lieu d\'un nom d\'utilisateur et d\'un mot de passe distincts. Une fois connecté, vous n\'aurez plus besoin de vous souvenir d\'un nom d\'utilisateur et d\'un mot de passe pour Moodle, toutes les connexions seront gérées par {$a}.';
$string['ucp_login_start'] = 'Commencez à utiliser {$a} pour vous connecter à Moodle';
$string['ucp_login_start_desc'] = 'Cela changera votre compte pour utiliser {$a} pour vous connecter à Moodle. Une fois activé, vous vous connecterez en utilisant vos informations d\'identification {$a} - votre nom d\'utilisateur et mot de passe Moodle actuels ne fonctionneront pas. Vous pouvez déconnecter votre compte à tout moment et revenir à une connexion normale.';
$string['ucp_login_stop'] = 'Arrêtez d\'utiliser {$a} pour vous connecter à Moodle';
$string['ucp_login_stop_desc'] = 'Vous utilisez actuellement {$a} pour vous connecter à Moodle. En cliquant sur "Arrêter d\'utiliser la connexion {$a}", vous déconnecterez votre compte Moodle de {$a}. Vous ne pourrez plus vous connecter à Moodle avec votre compte {$a}. Vous serez invité à créer un nom d\'utilisateur et un mot de passe, et à partir de ce moment, vous pourrez vous connecter directement à Moodle.';
$string['ucp_login_status'] = 'La connexion {$a} est :';
$string['ucp_status_enabled'] = 'Activé';
$string['ucp_status_disabled'] = 'Désactivé';
$string['ucp_disconnect_title'] = 'Déconnexion {$a}';
$string['ucp_disconnect_details'] = 'Cela déconnectera votre compte Moodle de {$a}. Vous devrez créer un nom d\'utilisateur et un mot de passe pour vous connecter à Moodle.';
$string['ucp_title'] = 'Gestion de {$a}';
$string['ucp_o365accountconnected'] = 'Ce compte Microsoft 365 est déjà connecté à un autre compte Moodle.';

// Clean up IOMADOIDC tokens.
$string['cleanup_iomadoidc_tokens'] = 'Nettoyer les jetons OpenID Connect';
$string['unmatched'] = 'Non apparié';
$string['delete_token'] = 'Supprimer le jeton';
$string['mismatched'] = 'Non apparié';
$string['na'] = 'n/a';
$string['mismatched_details'] = 'L\'enregistrement du jeton contient le nom d\'utilisateur "{$a->tokenusername}"; l\'utilisateur Moodle correspondant a le nom d\'utilisateur "{$a->moodleusername}".';
$string['delete_token_and_reference'] = 'Supprimer le jeton et la référence';
$string['table_token_id'] = 'ID de l\'enregistrement du jeton';
$string['table_iomadoidc_username'] = 'Nom d\'utilisateur OIDC';
$string['table_token_unique_id'] = 'ID unique OIDC';
$string['table_matching_status'] = 'Statut de correspondance';
$string['table_matching_details'] = 'Détails';
$string['table_action'] = 'Action';
$string['token_deleted'] = 'Le jeton a été supprimé avec succès';
$string['no_token_to_cleanup'] = 'Il n\'y a pas de jeton OIDC à nettoyer.';

$string['errorusermatched'] = 'Le compte Microsoft 365 "{$a->aadupn}" est déjà associé à l\'utilisateur Moodle "{$a->username}". Pour terminer la connexion, veuillez d\'abord vous connecter en tant que cet utilisateur Moodle et suivre les instructions dans le bloc Microsoft.';

// User mapping options.
$string['update_oncreate_and_onlogin'] = 'À la création et à chaque connexion';
$string['update_oncreate_and_onlogin_and_usersync'] = 'À la création, à chaque connexion et à chaque exécution de la tâche de synchronisation des utilisateurs';
$string['update_onlogin_and_usersync'] = 'À chaque connexion et à chaque exécution de la tâche de synchronisation des utilisateurs';

// Remote fields.
$string['settings_fieldmap_feild_not_mapped'] = '(non mappé)';
$string['settings_fieldmap_field_city'] = 'Ville';
$string['settings_fieldmap_field_companyName'] = 'Nom de l\'entreprise';
$string['settings_fieldmap_field_objectId'] = 'ID de l\'objet';
$string['settings_fieldmap_field_country'] = 'Pays';
$string['settings_fieldmap_field_department'] = 'Département';
$string['settings_fieldmap_field_displayName'] = 'Nom affiché';
$string['settings_fieldmap_field_surname'] = 'Nom de famille';
$string['settings_fieldmap_field_faxNumber'] = 'Numéro de fax';
$string['settings_fieldmap_field_telephoneNumber'] = 'Numéro de téléphone';
$string['settings_fieldmap_field_givenName'] = 'Prénom';
$string['settings_fieldmap_field_jobTitle'] = 'Titre du poste';
$string['settings_fieldmap_field_mail'] = 'E-mail';
$string['settings_fieldmap_field_mobile'] = 'Mobile';
$string['settings_fieldmap_field_postalCode'] = 'Code postal';
$string['settings_fieldmap_field_preferredLanguage'] = 'Langue';
$string['settings_fieldmap_field_state'] = 'État';
$string['settings_fieldmap_field_streetAddress'] = 'Adresse';
$string['settings_fieldmap_field_userPrincipalName'] = 'Nom d\'utilisateur (UPN)';
$string['settings_fieldmap_field_employeeId'] = 'ID de l\'employé';
$string['settings_fieldmap_field_businessPhones'] = 'Téléphone de bureau';
$string['settings_fieldmap_field_mobilePhone'] = 'Téléphone mobile';
$string['settings_fieldmap_field_officeLocation'] = 'Bureau';
$string['settings_fieldmap_field_preferredName'] = 'Nom préféré';
$string['settings_fieldmap_field_manager'] = 'Nom du gestionnaire';
$string['settings_fieldmap_field_manager_email'] = 'E-mail du gestionnaire';
$string['settings_fieldmap_field_teams'] = 'Équipes';
$string['settings_fieldmap_field_groups'] = 'Groupes';
$string['settings_fieldmap_field_roles'] = 'Rôles';
$string['settings_fieldmap_field_onPremisesSamAccountName'] = 'Nom de compte SAM sur site';
$string['settings_fieldmap_field_extensionattribute'] = 'Attribut d\'extension {$a}';
$string['settings_fieldmap_field_sds_school_id'] = 'ID de l\'école SDS ({$a})';
$string['settings_fieldmap_field_sds_school_name'] = 'Nom de l\'école SDS ({$a})';
$string['settings_fieldmap_field_sds_school_role'] = 'Rôle de l\'école SDS ("Étudiant" ou "Enseignant")';
$string['settings_fieldmap_field_sds_student_externalId'] = 'ID externe de l\'étudiant SDS';
$string['settings_fieldmap_field_sds_student_birthDate'] = 'Date de naissance de l\'étudiant SDS';
$string['settings_fieldmap_field_sds_student_grade'] = 'Niveau de l\'étudiant SDS';
$string['settings_fieldmap_field_sds_student_graduationYear'] = 'Année de graduation de l\'étudiant SDS';
$string['settings_fieldmap_field_sds_student_studentNumber'] = 'Numéro d\'étudiant SDS';
$string['settings_fieldmap_field_sds_teacher_externalId'] = 'ID externe de l\'enseignant SDS';
$string['settings_fieldmap_field_sds_teacher_teacherNumber'] = 'Numéro d\'enseignant SDS';
