<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
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
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
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
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

/*********************************************************************************

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array(


	'LBL_RE'					=> 'RE:',

	'ERR_BAD_LOGIN_PASSWORD'=> 'Usuari o clau de pas incorrecta',
	'ERR_BODY_TOO_LONG'		=> '\rEl text del cos és massa llarg per capturar el correu electrònic COMPLET. Truncat.',
	'ERR_INI_ZLIB'			=> 'No va poder deshabilitar-se la compressió Zlib temporalment. Pot ser que "Comprovar Configuració" falli.',
	'ERR_MAILBOX_FAIL'		=> 'No es va poder recuperar cap compte de correu electrònic.',
	'ERR_NO_IMAP'			=> 'No s’han trobat les llibreries d’IMAP. Si us plau, resolgui això abans de continuar amb la configuració de correu electrònic entrant',
	'ERR_NO_OPTS_SAVED'		=> 'No s’han guardat valors òptims amb el seu compte de correu electrònic entrant. Si us plau, revisi la configuració',
	'ERR_TEST_MAILBOX'		=> 'Si us plau, comprovi la seva configuració i intenti-ho de nou.',

	'LBL_APPLY_OPTIMUMS'	=> 'Aplicar Valors Òptims',
	'LBL_ASSIGN_TO_USER'	=> 'Assignar a Usuari',
	'LBL_AUTOREPLY_OPTIONS'	=> 'Opcions de Resposta Automàtica',
	'LBL_AUTOREPLY'			=> 'Plantilla de Resposta Automàtica',
	'LBL_AUTOREPLY_HELP'	=> 'Seleccioni una resposta automàtica per a notificar als remitents de correu electrònic que la seva resposta ha estat rebuda.',
	'LBL_BASIC'				=> 'Configuració Bàsica',
	'LBL_CASE_MACRO'		=> 'Macro de Casos',
	'LBL_CASE_MACRO_DESC'	=> 'Estableix la macro que serà analitzada i utilitzada per vincular el correu electrònic importat a un cas.',
	'LBL_CASE_MACRO_DESC2'	=> 'Estableixi això a qualsevol valor que desitgi, però preservi el <b>"%1"</b>.',
	'LBL_CERT_DESC'			=> 'Foçar la validació del Certificat de Seguretat del servidor - no utilitzar en certificats no firmats per una autoritat arrel reconeguda.',
	'LBL_CERT'				=> 'Validar Certificat',
	'LBL_CLOSE_POPUP'		=> 'Tancar Finestra',
	'LBL_CREATE_NEW_GROUP'	=> '--Crear Grup al Desar--',
	'LBL_CREATE_TEMPLATE'	=> 'Crear',
	'LBL_SUBSCRIBE_FOLDERS'	=> 'Subscriure’s a Carpetes',
	'LBL_DEFAULT_FROM_ADDR'	=> 'Per defecte: ',
	'LBL_DEFAULT_FROM_NAME'	=> 'Per defecte: ',
	'LBL_DELETE_SEEN'		=> 'Esborrar correus electrònics llegits després de l’importació',
	'LBL_EDIT_TEMPLATE'		=> 'Editar',
	'LBL_EMAIL_OPTIONS'		=> 'Opcions de gestió de correu electrònic',
	'LBL_EMAIL_BOUNCE_OPTIONS' => 'Opcions de gestió de rebots',
	'LBL_FILTER_DOMAIN_DESC'=> 'No enviar respostes automàtiques a aquest domini.',
	'LBL_ASSIGN_TO_GROUP_FOLDER_DESC'=> 'Seleccioni aquesta opció per a que es creïn automàticament registres de correu electrònic a SuiteCRM per a tots els correus entrants.',
	'LBL_POSSIBLE_ACTION_DESC'		=> 'Per a usar l’opció Nou Cas, ha de seleccionar una Carpeta de Grup',
	'LBL_FILTER_DOMAIN'		=> 'No enviar Respostes automàtiques al domini',
	'LBL_FIND_OPTIMUM_KEY'	=> 'f',
	'LBL_FIND_OPTIMUM_MSG'	=> '<br>Buscant variables òptimes de connexió.',
	'LBL_FIND_OPTIMUM_TITLE'=> 'Cercar Configuració Óptima',
	'LBL_FIND_SSL_WARN'		=> '<br>La comprovació de SSL pot durar bastant temps. Si us plau, tingui paciència.<br>',
	'LBL_FORCE_DESC'		=> 'Alguns servidors IMAP/POP3 requereixen opcions especials. Marqui per forçar una opció negativa en connectar (ej., /notls)',
	'LBL_FORCE'				=> 'Forçar Negatiu',
	'LBL_FOUND_MAILBOXES'	=> 'S’han trobat les següents carpetes utilitzables.<br>Faci clic en una per seleccionar-la:',
	'LBL_FOUND_OPTIMUM_MSG'	=> '<br>Opcions òptimes trobades.	Premi el següent botó per aplicar-les al seu compte de correu.',
	'LBL_FROM_ADDR'			=> 'Direcció del remitent',
    // as long as XTemplate doesn't support output escaping, transform
    // quotes to html-entities right here (bug #48913)
    'LBL_FROM_ADDR_DESC'    => "L'adreça de correu electrònic propotcionada por no aparèixer en el camp &quot;From&quot; la secció de l'adreça del correu enviat per les restriccions imposades pel proveïdor del servei de correu. Amb aquestes circustàncies, l'adreça de correu definida al servidor de correu de sortida serà el que s'utilitzarà.",
	'LBL_FROM_NAME_ADDR'	=> 'Nom/Correu electrònic del remitent',
	'LBL_FROM_NAME'			=> 'Nom del remitent',
	'LBL_GROUP_QUEUE'		=> 'Assignar a Grup',
    'LBL_HOME'              => 'Inici',
	'LBL_LIST_MAILBOX_TYPE'	=> 'Utilització del compte de correu',
	'LBL_LIST_NAME'			=> 'Nom:',
	'LBL_LIST_GLOBAL_PERSONAL'			=> 'Grupo/Personal',
	'LBL_LIST_SERVER_URL'	=> 'Servidor de correu',
	'LBL_LIST_STATUS'		=> 'Estat:',
	'LBL_LOGIN'				=> 'Nom d’Usuari',
	'LBL_MAILBOX_DEFAULT'	=> 'INBOX',
	'LBL_MAILBOX_SSL_DESC'	=> 'Usar SSL en la connexió. Si no funciona, comprovi que la seva instal·lació de PHP inclou "--with-imap-ssl" en la configuració.',
	'LBL_MAILBOX_SSL'		=> 'Usar SSL',
	'LBL_MAILBOX_TYPE'		=> 'Accions Possibles',
	'LBL_DISTRIBUTION_METHOD' => 'Mètode de Distribució',
	'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Crear Plantilla de Resposta per Cas',
	'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Seleccioni una resposta automàtica per a notificar als remitents de correu electrònic que s’ha creat un nou cas. El correu conté el número de cas a la línia d’assumpte d’acord amb la configuració de la macro de cas. Aquesta resposta només s’enviarà quan es rebi el primer correu d’un remitent.',
	'LBL_MAILBOX'			=> 'Carpeta Monitorizada',
	'LBL_TRASH_FOLDER'		=> 'Paperera',
	'LBL_GET_TRASH_FOLDER'	=> 'Obtenir Paperera',
	'LBL_SENT_FOLDER'		=> 'Elements Enviats',
	'LBL_GET_SENT_FOLDER'	=> 'Obtenir Elements Eliminats',
	'LBL_SELECT'				=> 'Seleccionar',
	'LBL_MARK_READ_DESC'	=> 'Importar i marcar missatges com llegits al servidor de correu; no esborrar.',
	'LBL_MARK_READ_NO'		=> 'Correu electrònic marcat com borrat desprès de l’importació',
	'LBL_MARK_READ_YES'		=> 'Correu electrònic deixat en el servidor desprès de l’importació',
	'LBL_MARK_READ'			=> 'Deixar missatges en el servidor',
	'LBL_MAX_AUTO_REPLIES'	=> 'Número de respostes automàtiques',
	'LBL_MAX_AUTO_REPLIES_DESC'	=> 'Estableix el màxim nombre de respostes automàtiques a enviar a una única direcció de correu electrònic durant un període de 24 hores.',
	'LBL_PERSONAL_MODULE_NAME' => 'Compte de correu personal',
	'LBL_CREATE_CASE'      => 'Crear cas a partir de correu electrònic',
	'LBL_CREATE_CASE_HELP'  => 'Seleccioni aquesta opció per a crear registres de casos a SuiteCRM a partir dels correus electrònics entrants, de forma automàtica.',
	'LBL_MODULE_NAME'		=> 'Compta de correu electrònic de grup',
	'LBL_BOUNCE_MODULE_NAME' => 'Safata de correu de gestió de rebots',
	'LBL_MODULE_TITLE'		=> 'Correu electrònic entrant',
	'LBL_NAME'				=> 'Nom',
    'LBL_NONE'              => 'Cap',
	'LBL_NO_OPTIMUMS'		=> 'No s’han trobat valors óptims.  Si us plau, comprovi la seva configuració i provi de nou.',
	'LBL_ONLY_SINCE_DESC'	=> 'En usar POP3, PHP no es poden realitzar filtres en missatges Nous/No Llegits.  Aquesta opció permet que se sol·licitin missatges des de l’última vegada que la safata va ser consultada.  Això millorarà significativament el rendiment si el seu servidor de correu no suporta IMAP.',
	'LBL_ONLY_SINCE_NO'		=> 'No. Comprovar contra tots els correus electrònics al servidor de correu.',
	'LBL_ONLY_SINCE_YES'	=> 'Si.',
	'LBL_ONLY_SINCE'		=> 'Importar només des de l’última comprovació',
	'LBL_OUTBOUND_SERVER'	=> 'Servidor de correu electrònic sortint',
	'LBL_PASSWORD_CHECK'	=> 'Comprovar Clau de pas',
	'LBL_PASSWORD'			=> 'Clau de pas',
	'LBL_POP3_SUCCESS'		=> 'La seva prova de connexió de POP3 va tenir èxit.',
	'LBL_POPUP_FAILURE'		=> 'Prova de connexió fallida. L’error és el següent:',
	'LBL_POPUP_SUCCESS'		=> 'Prova de connexió exitosa.  La seva configuració funciona.',
	'LBL_POPUP_TITLE'		=> 'Comprovar Configuració',
	'LBL_GETTING_FOLDERS_LIST' 		=> 'Obtenint Llista de Carpetes',
	'LBL_SELECT_SUBSCRIBED_FOLDERS' 		=> 'Seleccionar Carpetes Subscrites',
	'LBL_SELECT_TRASH_FOLDERS' 		=> 'Seleccionar Paperera',
	'LBL_SELECT_SENT_FOLDERS' 		=> 'Seleccionar Carpeta d’Elements Enviats',
	'LBL_DELETED_FOLDERS_LIST' 		=> 'Les següents carpetes %s o no existeixen o han estat eliminades del servidor',
	'LBL_PORT'				=> 'Port del servidor de correu',
	'LBL_QUEUE'				=> 'Cua del compte de correu',
	'LBL_REPLY_NAME_ADDR'	=> 'Contestar a Nom/Correu electrònic',
	'LBL_REPLY_TO_NAME'		=> 'Nom de "Contestar A"',
	'LBL_REPLY_TO_ADDR'		=> 'Direcció de "Contestar A"',
	'LBL_SAME_AS_ABOVE'		=> 'Usan el mateix Nom/Direcció',
	'LBL_SAVE_RAW'			=> 'Desar Codi Font Original',
	'LBL_SAVE_RAW_DESC_1'	=> 'Seleccioni "Si" si vol preservar el codi font original per cada correu electrònic importat.',
	'LBL_SAVE_RAW_DESC_2'	=> 'Els arxius adjunts grans poden produir erroror en bases de dades configurades de forma restringida o incorrecta.',
	'LBL_SERVER_OPTIONS'	=> 'Configuració Avançada',
	'LBL_SERVER_TYPE'		=> 'Protocol del Servidor de Correu',
	'LBL_SERVER_URL'		=> 'Direcció del servidor de correu electrònic',
	'LBL_SSL_DESC'			=> 'Si el seu servidor de correu suporta connexions segures de sockets (SSL), habilitar aquesta opció forçarà connexions SSL en importar el correu.',
	'LBL_ASSIGN_TO_TEAM_DESC' => 'L’equip seleccionat té accés al compte de correu. Si ha seleccionat una Carpeta de Grup, l’equip assignat a la Carpeta de Grup reemplaçarà l’equip seleccionat.',
	'LBL_SSL'				=> 'Usar SSL',
	'LBL_STATUS'			=> 'Estat',
	'LBL_SYSTEM_DEFAULT'	=> 'Per Defecte en el Sistema',
	'LBL_TEST_BUTTON_KEY'	=> 't',
	'LBL_TEST_BUTTON_TITLE'	=> 'Provar',
	'LBL_TEST_SETTINGS'		=> 'Provar Configuració',
	'LBL_TEST_SUCCESSFUL'	=> 'Conexió completada amb éxit.',
	'LBL_TEST_WAIT_MESSAGE'	=> 'Un moment, si us plau...',
	'LBL_TLS_DESC'			=> 'Utilitzar Transport Layer Security per connectar-se al servidor de correu - només utilitzar això si el seu servidor de correu suporta aquest protocol.',
	'LBL_TLS'				=> 'Usar TLS',
	'LBL_WARN_IMAP_TITLE'	=> 'Correu electrònic entrant deshabilitat',
	'LBL_WARN_IMAP'			=> 'Avís:',
	'LBL_WARN_NO_IMAP'		=> 'El correu electrònic entrant <b>no pot</b> funcionar sense les llibreríes de C del cliente de IMAP habilitades/compiladas en el mòdul de PHP.  Si us plau, contacti amb el seu administrador per resoldre el problema.',

	'LNK_CREATE_GROUP'		=> 'Crear Nou Grup',
	'LNK_LIST_CREATE_NEW_GROUP'	 => 'Nou compte de correu de grup',
	'LNK_LIST_CREATE_NEW_BOUNCE' => 'nou compte de gestió de rebots',
	'LNK_LIST_MAILBOXES'	=> 'Tots els comptes de correu electrònic',
	'LNK_LIST_QUEUES'		=> 'Totes les Cues',
	'LNK_LIST_SCHEDULER'	=> 'Planificacions',
	'LNK_LIST_TEST_IMPORT'	=> 'Provar importació de correu electrònic',
	'LNK_NEW_QUEUES'		=> 'Crear Nova Cua',
	'LNK_SEED_QUEUES'		=> 'Crear Cap de sèrie per a Cues d’Equips',
	'LBL_GROUPFOLDER_ID'	=> 'Id de Carpeta de Grup',
	'LBL_ASSIGN_TO_GROUP_FOLDER' => 'Assignar a Carpeta de Grup',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Permetre als usuaris enviar correus electrònics utilitzant el nom i la direcció del camp "De" com a direcció de resposta',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Quan se selecciona aquesta opció, el Nom i Adreça del remitent associats al compte de correu electrònic d’aquest grup apareixeran com una opció per al camp "De" a l’escriu-re un correu per als usuaris que tinguin accés al compte de correu del grup.',
    'LBL_STATUS_ACTIVE'     => 'Actiu',
    'LBL_STATUS_INACTIVE'   => 'Inactiu',
    'LBL_IS_PERSONAL' => 'personal',
    'LBL_IS_GROUP' => 'grup',
    'LBL_ENABLE_AUTO_IMPORT' => 'Importar correus electrònics automàticament',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Avís: Està modificant la seva configuració d’importació automàtica, la qual cosa pot provocar la pèrdua de dades.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Avís: La importació automàtica ha d’estar habilitada per a la creació automàtica de casos.',
	'LBL_EDIT_LAYOUT' => 'Editar Diseny' /*for 508 compliance fix*/,
);
?>
