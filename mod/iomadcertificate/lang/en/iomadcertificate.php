<?php

// This file is part of the IOMAD Certificate module for Moodle - http://moodle.org/
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
 * @package   mod_iomadcertificate
 * @copyright 2021 Derick Turner
 * @author    Derick Turner
 * @basedon   mod_certificate by Mark Nelson <markn@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['addlinklabel'] = 'Ajouter une autre option d\'activité liée';
$string['addlinktitle'] = 'Cliquez pour ajouter une autre option d\'activité liée';
$string['areaintro'] = 'Introduction au certificat';
$string['awarded'] = 'Décerné';
$string['awardedto'] = 'Décerné à';
$string['back'] = 'Retour';
$string['border'] = 'Bordure';
$string['borderblack'] = 'Noir';
$string['borderblue'] = 'Bleu'; 
$string['borderbrown'] = 'Marron';
$string['bordercolor'] = 'Lignes de bordure';
$string['bordercolor_help'] = 'Puisque les images peuvent augmenter considérablement la taille du fichier PDF, vous pouvez choisir d\'imprimer une bordure de lignes au lieu d\'utiliser une image de bordure (assurez-vous que l\'option \'Image de bordure\' est définie sur Non). L\'option \'Lignes de bordure\' imprimera une bordure de trois lignes de largeurs variées dans la couleur choisie.';
$string['bordergreen'] = 'Vert';
$string['borderlines'] = 'Lignes';
$string['borderstyle'] = 'Image de bordure';
$string['borderstyle_help'] = 'L\'option \'Image de bordure\' vous permet de choisir une image de bordure dans le dossier certificate/pix/borders. Sélectionnez l\'image de bordure que vous souhaitez autour des bords du certificat ou sélectionnez \'pas de bordure\'.';
$string['iomadcertificate'] = 'Vérification du code de certificat:';
$string['iomadcertificate:addinstance'] = 'Ajouter une instance de certificat';
$string['iomadcertificate:manage'] = 'Gérer une instance de certificat';
$string['iomadcertificate:printteacher'] = 'Être répertorié comme enseignant sur le certificat si l\'impression de l\'enseignant est activée';
$string['iomadcertificate:student'] = 'Récupérer un certificat';
$string['iomadcertificate:view'] = 'Voir un certificat';
$string['iomadcertificate:viewother'] = 'Voir le certificat d\'un autre utilisateur';
$string['iomadcertificatename'] = 'Nom du certificat';
$string['iomadcertificatereport'] = 'Rapport des certificats';
$string['iomadcertificatesfor'] = 'Certificats pour';
$string['iomadcertificatetype'] = 'Type de certificat';
$string['iomadcertificatetype_help'] = 'C\'est ici que vous déterminez la disposition du certificat. Le dossier de type de certificat comprend quatre certificats par défaut :
A4 Embedded imprime sur du papier de format A4 avec une police intégrée.
A4 Non-Embedded imprime sur du papier de format A4 sans polices intégrées.
Letter Embedded imprime sur du papier de format lettre avec une police intégrée.
Letter Non-Embedded imprime sur du papier de format lettre sans polices intégrées.

Les types non intégrés utilisent les polices Helvetica et Times. Si vous pensez que vos utilisateurs n\'auront pas ces polices sur leur ordinateur, ou si votre langue utilise des caractères ou des symboles qui ne sont pas pris en charge par les polices Helvetica et Times, choisissez un type intégré. Les types intégrés utilisent les polices Dejavusans et Dejavuserif. Cela rendra les fichiers PDF assez volumineux ; il n\'est pas recommandé d\'utiliser un type intégré à moins que ce ne soit votre seule option.

De nouveaux dossiers de type peuvent être ajoutés au dossier certificate/type. Le nom du dossier et toutes les nouvelles chaînes de langue pour le nouveau type doivent être ajoutés au fichier de langue du certificat.';
$string['certify'] = 'Ce certificat atteste que';
$string['code'] = 'Code';
$string['completiondate'] = 'Date de fin de cours';
$string['course'] = 'Pour';
$string['coursegrade'] = 'Note du cours';
$string['coursename'] = 'Cours';
$string['coursetimereq'] = 'Minutes requises dans le cours';
$string['coursetimereq_help'] = 'Entrez ici la durée minimale, en minutes, pendant laquelle un étudiant doit être connecté au cours avant de pouvoir recevoir le certificat.';
$string['credithours'] = 'Heures de crédit';
$string['customtext'] = 'Texte personnalisé';
$string['customtext_help'] = 'Si vous souhaitez que le certificat imprime des noms différents pour l\'enseignant pour ceux qui sont assignés au rôle d\'enseignant, ne sélectionnez pas Imprimer l\'enseignant ou une image de signature sauf pour l\'image de ligne. Entrez les noms des enseignants dans cette zone de texte tels que vous souhaitez qu\'ils apparaissent. Par défaut, ce texte est placé en bas à gauche du certificat. Les balises HTML suivantes sont disponibles : &lt;br&gt;, &lt;p&gt;, &lt;b&gt;, &lt;i&gt;, &lt;u&gt;, &lt;img&gt; (src et width (ou height) sont obligatoires), &lt;a&gt; (href est obligatoire), &lt;font&gt; (les attributs possibles sont : couleur, (code couleur hexadécimal), face, (arial, times, courier, helvetica, symbol)).';
$string['datefmt'] = 'Format de date';
$string['datefmt_help'] = 'Choisissez un format de date pour imprimer la date sur le certificat. Ou choisissez la dernière option pour imprimer la date dans le format de la langue choisie par l\'utilisateur.';
$string['datehelp'] = 'Date';
$string['deletissuediomadcertificates'] = 'Supprimer les certificats délivrés';
$string['delivery'] = 'Livraison';
$string['delivery_help'] = 'Choisissez ici comment vous souhaitez que vos étudiants reçoivent leur certificat.
Ouvrir dans le navigateur : Ouvre le certificat dans une nouvelle fenêtre de navigateur.
Force Download : Ouvre la fenêtre de téléchargement de fichiers du navigateur.
Envoyer par e-mail : En choisissant cette option, le certificat sera envoyé à l\'étudiant en pièce jointe par e-mail.
Après qu\'un utilisateur a reçu son certificat, s\'il clique sur le lien du certificat depuis la page d\'accueil du cours, il verra la date à laquelle il a reçu son certificat et pourra consulter son certificat reçu.';
$string['designoptions'] = 'Options de conception';
$string['download'] = 'Téléchargement forcé';
$string['emailiomadcertificate'] = 'E-mail';
$string['emailothers'] = 'Envoyer à d\'autres';
$string['emailothers_help'] = 'Entrez ici les adresses e-mail, séparées par une virgule, de ceux qui doivent être alertés par e-mail chaque fois que des étudiants reçoivent un certificat.';
$string['emailstudenttext'] = 'Ci-joint votre certificat pour {$a->course}.';
$string['emailteachers'] = 'Envoyer aux enseignants';
$string['emailteachers_help'] = 'Si activé, les enseignants sont alertés par e-mail chaque fois que des étudiants reçoivent un certificat.';
$string['emailteachermail'] = '
{$a->student} a reçu son certificat : \'{$a->certificate}\'
pour {$a->course}.
Vous pouvez consulter le certificat ici :
    {$a->url}';
$string['emailteachermailhtml'] = '
{$a->student} a reçu son certificat : \'<i>{$a->certificate}</i>\'
pour {$a->course}.
Vous pouvez consulter le certificat ici :
    <a href="{$a->url}">Rapport de Certificat</a>';
$string['entercode'] = 'Entrez le code du certificat pour vérification :';
$string['fontsans'] = 'Famille de polices sans empattement';
$string['fontsans_desc'] = 'Famille de polices sans empattement pour les certificats avec polices intégrées';
$string['fontserif'] = 'Famille de polices à empattement';
$string['fontserif_desc'] = 'Famille de polices à empattement pour les certificats avec polices intégrées';
$string['getiomadcertificate'] = 'Obtenez votre certificat';
$string['grade'] = 'Note';
$string['gradedate'] = 'Date de la note';
$string['gradefmt'] = 'Format de la note';
$string['gradefmt_help'] = 'Il existe trois formats disponibles si vous choisissez d\'imprimer une note sur le certificat :
Note en pourcentage : Imprime la note en pourcentage.
Note en points : Imprime la valeur en points de la note.
Note en lettre : Imprime la note en pourcentage sous forme de lettre.';
$string['gradeletter'] = 'Note en lettre';
$string['gradepercent'] = 'Note en pourcentage';
$string['gradepoints'] = 'Note en points';
$string['imagetype'] = 'Type d\'image';
$string['incompletemessage'] = 'Pour télécharger votre certificat, vous devez d\'abord compléter toutes les activités requises. Veuillez retourner au cours pour terminer vos travaux.';
$string['intro'] = 'Introduction';
$string['issueoptions'] = 'Options de délivrance';
$string['issued'] = 'Délivré';
$string['issueddate'] = 'Date de délivrance';
$string['landscape'] = 'Paysage';
$string['lastviewed'] = 'Vous avez reçu ce certificat pour la dernière fois le :';
$string['letter'] = 'Lettre';
$string['lockingoptions'] = 'Options de verrouillage';
$string['modulename'] = 'Certificat IOMAD';
$string['modulename_help'] = 'Ce module permet la génération dynamique de certificats en fonction de conditions prédéfinies par l\'enseignant.';
$string['modulename_link'] = 'Certificate_module';
$string['modulenameplural'] = 'Certificats IOMAD';
$string['myiomadcertificates'] = 'Mes certificats';
$string['noiomadcertificates'] = 'Il n\'y a pas de certificats';
$string['noiomadcertificatesissued'] = 'Il n\'y a pas de certificats qui ont été délivrés';
$string['noiomadcertificatesreceived'] = 'n\'a pas reçu de certificats de cours.';
$string['nofileselected'] = 'Vous devez choisir un fichier à télécharger !';
$string['nogrades'] = 'Pas de notes disponibles';
$string['notapplicable'] = 'N/A';
$string['notfound'] = 'Le numéro de certificat n\'a pas pu être validé.';
$string['notissued'] = 'Non délivré';
$string['notissuedyet'] = 'Pas encore délivré';
$string['notreceived'] = 'Vous n\'avez pas reçu ce certificat';
$string['openbrowser'] = 'Ouvrir dans une nouvelle fenêtre';
$string['opendownload'] = 'Cliquez sur le bouton ci-dessous pour enregistrer votre certificat sur votre ordinateur.';
$string['openemail'] = 'Cliquez sur le bouton ci-dessous, et votre certificat vous sera envoyé en pièce jointe par email.';
$string['openwindow'] = 'Cliquez sur le bouton ci-dessous pour ouvrir votre certificat dans une nouvelle fenêtre de navigateur.';
$string['or'] = 'Ou';
$string['orientation'] = 'Orientation';
$string['orientation_help'] = 'Choisissez si vous souhaitez que votre certificat soit en mode portrait ou paysage.';
$string['pluginadministration'] = 'Administration des certificats IOMAD';
$string['pluginname'] = 'Certificat IOMAD';
$string['portrait'] = 'Portrait';
$string['printdate'] = 'Date d\'impression';
$string['printdate_help'] = 'C\'est la date qui sera imprimée sur le certificat si une date d\'impression est sélectionnée. Si la date de fin de cours est sélectionnée mais que l\'étudiant n\'a pas terminé le cours, la date à laquelle le certificat a été reçu sera imprimée. Vous pouvez également choisir d\'imprimer la date en fonction de la date à laquelle une activité a été notée. Si un certificat est délivré avant que cette activité ne soit notée, la date de réception sera imprimée.';
$string['printerfriendly'] = 'Page adaptée à l\'impression';
$string['printhours'] = 'Imprimer les heures de crédit';
$string['printhours_help'] = 'Saisissez ici le nombre d\'heures de crédit à imprimer sur le certificat.';
$string['printgrade'] = 'Imprimer la note';
$string['printgrade_help'] = 'Vous pouvez choisir n\'importe quel élément de note de cours disponible dans le carnet de notes pour imprimer la note de l\'utilisateur reçue pour cet élément sur le certificat. Les éléments de note sont répertoriés dans l\'ordre dans lequel ils apparaissent dans le carnet de notes. Choisissez le format de la note ci-dessous.';
$string['printnumber'] = 'Imprimer le code';
$string['printnumber_help'] = 'Un code unique de 10 chiffres composé de lettres et de chiffres aléatoires peut être imprimé sur le certificat. Ce numéro peut ensuite être vérifié en le comparant au numéro de code affiché dans le rapport des certificats.';
$string['printoutcome'] = 'Imprimer le résultat';
$string['printoutcome_help'] = 'Vous pouvez choisir n\'importe quel résultat de cours pour imprimer le nom du résultat et le résultat reçu par l\'utilisateur sur le certificat. Un exemple pourrait être \'Résultat de l\'affectation : Compétent\'.';
$string['printseal'] = 'Image de sceau ou de logo';
$string['printseal_help'] = 'Cette option vous permet de sélectionner un sceau ou un logo à imprimer sur le certificat à partir du dossier certificate/pix/seals. Par défaut, cette image est placée dans le coin inférieur droit du certificat.';
$string['printsignature'] = 'Image de signature';
$string['printsignature_help'] = 'Cette option vous permet d\'imprimer une image de signature du dossier certificate/pix/signatures. Vous pouvez imprimer une représentation graphique d\'une signature ou imprimer une ligne
pour une signature manuscrite. Par défaut, cette image est placée en bas à gauche du certificat.';
$string['printteacher'] = 'Imprimer le nom de l\'enseignant';
$string['printteacher_help'] = 'Pour imprimer le nom de l\'enseignant sur le certificat, définissez le rôle de l\'enseignant au niveau du module. Faites-le si, par exemple, vous avez plus d\'un enseignant pour le cours ou plus d\'un certificat dans le cours et que vous souhaitez imprimer des noms d\'enseignants différents sur chaque certificat. Cliquez pour modifier le certificat, puis cliquez sur l\'onglet \'Rôles attribués localement\'. Ensuite, attribuez le rôle d\'enseignant (enseignant en édition) au certificat (ils n\'ont pas besoin d\'être un enseignant dans le cours - vous pouvez attribuer ce rôle à n\'importe qui). Ces noms seront imprimés sur le certificat pour l\'enseignant.';
$string['printwmark'] = 'Image de filigrane';
$string['printwmark_help'] = 'Une image de filigrane peut être placée en arrière-plan du certificat. Il peut s\'agir d\'un logo, d\'un sceau, d\'un blason, d\'un texte ou de tout ce que vous souhaitez utiliser comme arrière-plan graphique.';
$string['receivedcerts'] = 'Certificats reçus';
$string['receiveddate'] = 'Date de réception';
$string['removecert'] = 'Certificats émis supprimés';
$string['report'] = 'Rapport';
$string['reportcert'] = 'Rapport des certificats';
$string['reportcert_help'] = 'Si vous choisissez oui ici, alors la date de réception de ce certificat, le numéro de code et le nom du cours seront affichés sur les rapports de certificats utilisateur. Si vous choisissez d\'imprimer une note sur ce certificat, alors cette note sera également affichée sur le rapport de certificat.';
$string['requiredtimenotmet'] = 'Vous devez passer au moins un minimum de {$a->requiredtime} minutes dans le cours avant de pouvoir accéder à ce certificat';
$string['requiredtimenotvalid'] = 'Le temps requis doit être un nombre valide supérieur à 0';
$string['reviewiomadcertificate'] = 'Vérifiez votre certificat';
$string['savecert'] = 'Enregistrer les certificats';
$string['savecert_help'] = 'Si vous choisissez cette option, une copie du fichier PDF du certificat de chaque utilisateur sera enregistrée dans le répertoire moodledata. Un lien vers le certificat enregistré de chaque utilisateur sera affiché dans le rapport de certificat.';
$string['seal'] = 'Sceau';
$string['sigline'] = 'ligne';
$string['signature'] = 'Signature';
$string['statement'] = 'a terminé le cours';
$string['summaryofattempts'] = 'Résumé des certificats précédemment reçus';
$string['textoptions'] = 'Options de texte';
$string['title'] = 'CERTIFICAT de RÉUSSITE';
$string['to'] = 'Décerné à';
$string['typeA4_embedded'] = 'A4 Intégré';
$string['typeA4_non_embedded'] = 'A4 Non Intégré';
$string['typeletter_embedded'] = 'Lettre Intégrée';
$string['typeletter_non_embedded'] = 'Lettre Non Intégrée';
$string['unsupportedfiletype'] = 'Le fichier doit être un fichier jpeg ou png';
$string['uploadimage'] = 'Télécharger une image';
$string['uploadimagedesc'] = 'Ce bouton vous amènera à un nouvel écran où vous pourrez télécharger des images';
$string['userdateformat'] = 'Format de date de l\'utilisateur';
$string['validate'] = 'Vérifier';
$string['verifyiomadcertificate'] = 'Vérifier le certificat';
$string['viewiomadcertificateviews'] = 'Voir {$a} certificats émis';
$string['viewed'] = 'Vous avez reçu ce certificat le:';
$string['viewtranscript'] = 'Voir les certificats';
$string['watermark'] = 'Filigrane';
$string['companycertify'] = 'Ce certificat de réussite reconnaît que';
$string['companydetails'] = 'a terminé avec succès le programme de formation en ligne intitulé';
$string['companyscore'] = 'avec un score global de {$a}';
$string['companydate'] = 'le {$a}';
$string['companydatecap'] = 'Le {$a}';

