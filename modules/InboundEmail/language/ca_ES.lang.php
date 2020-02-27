<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(


    'LBL_RE' => 'RE: ',

    'ERR_BAD_LOGIN_PASSWORD' => 'Usuari o clau de pas incorrecta',
    'ERR_INI_ZLIB' => 'No va poder deshabilitar-se la compressió Zlib temporalment. Pot ser que "Comprovar Configuració" falli.',
    'ERR_NO_IMAP' => 'No s’han trobat les llibreries d’IMAP. Si us plau, resolgui això abans de continuar amb la configuració de correu electrònic entrant',
    'ERR_NO_OPTS_SAVED' => 'No s’han guardat valors òptims amb el seu compte de correu electrònic entrant. Si us plau, revisi la configuració',
    'ERR_TEST_MAILBOX' => 'Si us plau, comprovi la seva configuració i intenti-ho de nou.',

    'LBL_ASSIGN_TO_USER' => 'Assignar a Usuari',
    'LBL_AUTOREPLY' => 'Plantilla de Resposta Automàtica',
    'LBL_AUTOREPLY_HELP' => 'Seleccioni una resposta automàtica per a notificar als remitents de correu electrònic que la seva resposta ha estat rebuda.',
    'LBL_BASIC' => 'Configuració Bàsica',
    'LBL_CASE_MACRO' => 'Macro de Casos',
    'LBL_CASE_MACRO_DESC' => 'Estableix la macro que serà analitzada i utilitzada per vincular el correu electrònic importat a un cas.',
    'LBL_CASE_MACRO_DESC2' => 'Estableixi això a qualsevol valor que desitgi, però preservi el <b>"%1"</b>.',
    'LBL_CLOSE_POPUP' => 'Tancar Finestra',
    'LBL_CREATE_TEMPLATE' => 'Crear',
    'LBL_DELETE_SEEN' => 'Esborrar correus electrònics llegits després de l’importació',
    'LBL_EDIT_TEMPLATE' => 'Editar',
    'LBL_EMAIL_OPTIONS' => 'Opcions de gestió de correu electrònic',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Opcions de gestió de rebots',
    'LBL_FILTER_DOMAIN_DESC' => 'No enviar respostes automàtiques a aquest domini.',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Seleccioni aquesta opció per a que es creïn automàticament registres de correu electrònic a SuiteCRM per a tots els correus entrants.',
    'LBL_FILTER_DOMAIN' => 'No enviar Respostes automàtiques al domini',
    'LBL_FIND_SSL_WARN' => '<br>La comprovació de SSL pot durar bastant temps. Si us plau, tingui paciència.<br>',
    'LBL_FROM_ADDR' => 'Direcció del remitent',
    'LBL_FROM_ADDR_DESC' => 'L’adreça de correu electrònic proporcionada pot no aparèixer en el camp "De" la secció de l’adreça del correu enviat per les restriccions imposades pel proveïdor del servei de correu. Amb aquestes circumstàncies, l’adreça de correu definida al servidor de correu de sortida serà el que s’utilitzarà.',
    'LBL_FROM_NAME' => 'Nom del remitent',
    'LBL_GROUP_QUEUE' => 'Assignar a Grup',
    'LBL_HOME' => 'Inici',
    'LBL_LIST_MAILBOX_TYPE' => 'Utilització del compte de correu',
    'LBL_LIST_NAME' => 'Nom:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Grupo/Personal',
    'LBL_LIST_SERVER_URL' => 'Servidor de correu',
    'LBL_LIST_STATUS' => 'Estat:',
    'LBL_LOGIN' => 'Nom d’Usuari',
    'LBL_MAILBOX_DEFAULT' => 'SAFATA D’ENTRADA',
    'LBL_MAILBOX_SSL' => 'Usar SSL',
    'LBL_MAILBOX_TYPE' => 'Accions Possibles',
    'LBL_DISTRIBUTION_METHOD' => 'Mètode de Distribució',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Crear Plantilla de Resposta per Cas',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Seleccioni una resposta automàtica per a notificar als remitents de correu electrònic que s’ha creat un nou cas. El correu conté el número de cas a la línia d’assumpte d’acord amb la configuració de la macro de cas. Aquesta resposta només s’enviarà quan es rebi el primer correu d’un remitent.',
    'LBL_MAILBOX' => 'Carpeta Monitorizada',
    'LBL_TRASH_FOLDER' => 'Paperera',
    'LBL_SENT_FOLDER' => 'Elements Enviats',
    'LBL_SELECT' => 'Seleccionar',
    'LBL_MARK_READ_NO' => 'Correu electrònic marcat com borrat desprès de l’importació',
    'LBL_MARK_READ_YES' => 'Correu electrònic deixat en el servidor desprès de l’importació',
    'LBL_MARK_READ' => 'Deixar missatges en el servidor',
    'LBL_MAX_AUTO_REPLIES' => 'Número de respostes automàtiques',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Estableix el màxim nombre de respostes automàtiques a enviar a una única direcció de correu electrònic durant un període de 24 hores.',
    'LBL_PERSONAL_MODULE_NAME' => 'Compte de correu personal',
    'LBL_CREATE_CASE' => 'Crear cas a partir de correu electrònic',
    'LBL_CREATE_CASE_HELP' => 'Seleccioni aquesta opció per a crear registres de casos a SuiteCRM a partir dels correus electrònics entrants, de forma automàtica.',
    'LBL_MODULE_NAME' => 'Compta de correu electrònic de grup',
    'LBL_BOUNCE_MODULE_NAME' => 'Safata de correu de gestió de rebots',
    'LBL_MODULE_TITLE' => 'Correu electrònic entrant',
    'LBL_NAME' => 'Nom',
    'LBL_NONE' => 'Cap',
    'LBL_ONLY_SINCE_NO' => 'No. Comprovar contra tots els correus electrònics al servidor de correu.',
    'LBL_ONLY_SINCE_YES' => 'Si.',
    'LBL_PASSWORD' => 'Clau de pas',
    'LBL_POP3_SUCCESS' => 'La seva prova de connexió de POP3 va tenir èxit.',
    'LBL_POPUP_TITLE' => 'Comprovar Configuració',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Seleccionar Carpetes Subscrites',
    'LBL_SELECT_TRASH_FOLDERS' => 'Seleccionar Paperera',
    'LBL_SELECT_SENT_FOLDERS' => 'Seleccionar Carpeta d’Elements Enviats',
    'LBL_DELETED_FOLDERS_LIST' => 'Les següents carpetes %s o no existeixen o han estat eliminades del servidor',
    'LBL_PORT' => 'Port del servidor de correu',
    'LBL_REPLY_TO_NAME' => 'Nom de "Contestar A"',
    'LBL_REPLY_TO_ADDR' => 'Direcció de "Contestar A"',
    'LBL_SAME_AS_ABOVE' => 'Usan el mateix Nom/Direcció',
    'LBL_SERVER_OPTIONS' => 'Configuració Avançada',
    'LBL_SERVER_TYPE' => 'Protocol del Servidor de Correu',
    'LBL_SERVER_URL' => 'Direcció del servidor de correu electrònic',
    'LBL_SSL_DESC' => 'Si el seu servidor de correu suporta connexions segures de sockets (SSL), habilitar aquesta opció forçarà connexions SSL en importar el correu.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'L’equip seleccionat té accés al compte de correu. Si ha seleccionat una Carpeta de Grup, l’equip assignat a la Carpeta de Grup reemplaçarà l’equip seleccionat.',
    'LBL_SSL' => 'Usar SSL',
    'LBL_STATUS' => 'Estat',
    'LBL_SYSTEM_DEFAULT' => 'Per Defecte en el Sistema',
    'LBL_TEST_BUTTON_TITLE' => 'Provar',
    'LBL_TEST_SETTINGS' => 'Provar Configuració',
    'LBL_TEST_SUCCESSFUL' => 'Conexió completada amb éxit.',
    'LBL_TEST_WAIT_MESSAGE' => 'Un moment, si us plau...',
    'LBL_WARN_IMAP_TITLE' => 'Correu electrònic entrant deshabilitat',
    'LBL_WARN_IMAP' => 'Avís:',
    'LBL_WARN_NO_IMAP' => 'El correu electrònic entrant <b>no pot</b> funcionar sense les llibreríes de C del cliente de IMAP habilitades/compiladas en el mòdul de PHP.  Si us plau, contacti amb el seu administrador per resoldre el problema.',

    'LNK_LIST_CREATE_NEW_GROUP' => 'Nou compte de correu de grup',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'nou compte de gestió de rebots',
    'LNK_LIST_MAILBOXES' => 'Tots els comptes de correu electrònic',
    'LNK_LIST_SCHEDULER' => 'Planificacions',
    'LNK_SEED_QUEUES' => 'Crear Cap de sèrie per a Cues d’Equips',
    'LBL_GROUPFOLDER_ID' => 'Id de Carpeta de Grup',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Permetre als usuaris enviar correus electrònics utilitzant el nom i la direcció del camp "De" com a direcció de resposta',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Quan se selecciona aquesta opció, el Nom i Adreça del remitent associats al compte de correu electrònic d’aquest grup apareixeran com una opció per al camp "De" a l’escriu-re un correu per als usuaris que tinguin accés al compte de correu del grup.',
    'LBL_STATUS_ACTIVE' => 'Actiu',
    'LBL_STATUS_INACTIVE' => 'Inactiu',
    'LBL_IS_PERSONAL' => 'Personal',
    'LBL_IS_GROUP' => 'grup',
    'LBL_ENABLE_AUTO_IMPORT' => 'Importar correus electrònics automàticament',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Avís: Està modificant la seva configuració d’importació automàtica, la qual cosa pot provocar la pèrdua de dades.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Avís: La importació automàtica ha d’estar habilitada per a la creació automàtica de casos.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Esborranys',
    'LBL_LIST_TITLE_MY_INBOX' => 'Bústia d’entrada',
    'LBL_LIST_TITLE_MY_SENT' => 'Correu electrònic enviat',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Correus electrònics arxivats',
    'LNK_MY_DRAFTS' => 'Esborranys',
    'LNK_MY_INBOX' => 'Correu electrònic',
    'LNK_VIEW_MY_INBOX' => 'Mostra el correu electrònic',
    'LNK_QUICK_REPLY' => 'Contestar',
    'LNK_SENT_EMAIL_LIST' => 'Correus electrònics enviats',
    'LBL_EDIT_LAYOUT' => 'Editar Diseny' /*for 508 compliance fix*/,

    'LBL_MODIFIED_BY' => 'Modificat Per',
    'LBL_SERVICE' => 'Servei',
    'LBL_STORED_OPTIONS' => 'Opcions emmagatzemades',
    'LBL_GROUP_ID' => 'Grup id',
    'LBL_REPLY_ASSIGNING_BEHAVIOR' => 'Assignar respostes a', // PR 6009
    'LBL_REPLY_ASSIGNING_BEHAVIOR_HELP' => 'Quan un correu electrònic entrant és una resposta enviada des de SuiteCRM, a qui si li assigna la resposta:<br><br><b>No fer res:</b> el comportament per defecte. El correu electrònic no està assignat a ningú.<br><br><b> Va respondre al propietari del correu electrònic:</b> el correu electrònic s’assigna al propietari del correu electrònic contestat, o el últim correu electrònic enviat des de SuiteCRM en el fil. <br><br><b> Propietari de registres associats:</b> el correu electrònic s’assigna al propietari del registre que va respondre al correu electrònic, o el últim correu electrònic enviat des de SuiteCRM en el fil, està relacionat amb.', // PR 6009

    'LBL_CREATE_CONTACT' => 'Crear contacte a partir del correu', // PR 5721
    'LBL_CREATE_CONTACT_HELP' => 'Seleccioni per crear automàticament un contacte en SuiteCRM de cada correu entrant.', // PR 5721
    'LBL_CONTACT_DEFAULT_LANGUAGE' => 'Idioma de contacte per defecte', // PR 5721
    'LBL_FILL_CONTACT_NAME' => 'Ompliu el Nom del Contacte', // PR 5721 - Escaped required
    'LBL_FILL_CONTACT_NAME_HELP' => 'Seleccioni per omplir automàticament amb el nom i cognom al nou contacte creat a partir dels coreus entrants.', // PR 5721
    'LBL_CONTACT_DEFAULT_SOURCE' => 'Nova font de Contacte', // PR 5721
    'LBL_NEW_CASE_STATUS' => 'Estat el cas', // PR 5721
    'LBL_NEW_CASE_PRIORITY' => 'Prioritat del cas', // PR 5721
    'LBL_NEW_CASE_TYPE' => 'Tipus de cas', // PR 5721
);
