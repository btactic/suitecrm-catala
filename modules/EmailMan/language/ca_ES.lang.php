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

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
	'LBL_SEND_DATE_TIME'						=> 'Data de Tramesa',
	'LBL_IN_QUEUE'								=> 'En Cua?',
	'LBL_IN_QUEUE_DATE'							=> 'Data de posada en Cua',

	'ERR_INT_ONLY_EMAIL_PER_RUN'				=> 'Només es permeten valors sencers per el nombre de missatges enviats per lot',

	'LBL_ATTACHMENT_AUDIT'						=> ' ha estat enviat. No s´ha duplicat en local per minimitzar la utilització d´espai al disc dur.',
	'LBL_CONFIGURE_SETTINGS'					=> 'Configurar',
	'LBL_CUSTOM_LOCATION'						=> 'Definit per l´Usuari',
	'LBL_DEFAULT_LOCATION'						=> 'Per Defecte',
	
	'LBL_DISCLOSURE_TITLE'						=> 'Afegir Missatge sobre Confidencialitat de Contingut a Cada Correu',
	'LBL_DISCLOSURE_TEXT_TITLE'					=> 'Confidencialitat de Contingut',
	'LBL_DISCLOSURE_TEXT_SAMPLE'				=> 'AVÍS: Aquest missatge de correu és per a ús únic del destinatari(s) i pot contenir informació privada i confidencial. Queda prohibit qualsevol tipus de revisió, ús, revelació o distribució no autoritzada. Si vostè no és el destinatari previst, si us plau, destrueixi totes les còpies del missatge original i notifiqui el remitent de manera que puguem corregir la direcció de correu en el nostre registre. Gràcies.',
	
	'LBL_EMAIL_DEFAULT_CHARSET'					=> 'Redactar missatges de correu en aquest joc de caràcters',
	'LBL_EMAIL_DEFAULT_EDITOR'					=> 'Redactar correu fent servir aquest client',
	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'		=> 'Esborrar arxius adjunts i Notes relacionades al costat dels Missatges esborrats',
	'LBL_EMAIL_GMAIL_DEFAULTS'					=> 'Omplir prèviament valors per defecte per a Gmail',
	'LBL_EMAIL_PER_RUN_REQ'						=> 'Nombre de Missatges enviats per lot',
	'LBL_EMAIL_SMTP_SSL'						=> 'Habilitar SMTP sobre SSL',
	'LBL_EMAIL_USER_TITLE'						=> 'User Email Defaults',
	'LBL_EMAIL_OUTBOUND_CONFIGURATION'			=> 'Outgoing Mail Configuration',
	'LBL_EMAILS_PER_RUN'						=> 'Nombre de Missatges enviats per lot',
	'LBL_ID'									=> 'Id',
	'LBL_LIST_CAMPAIGN'							=> 'Campanya',
	'LBL_LIST_FORM_PROCESSED_TITLE'				=> 'Processats',
	'LBL_LIST_FORM_TITLE'						=> 'Cua',
	'LBL_LIST_FROM_EMAIL'						=> 'Correu del Remitent',
	'LBL_LIST_FROM_NAME'						=> 'Nom del Remitent',
	'LBL_LIST_IN_QUEUE'							=> 'En Procés',
	'LBL_LIST_MESSAGE_NAME'						=> 'Missatge de Màrqueting',
	'LBL_LIST_RECIPIENT_EMAIL'					=> 'Correu del Destinatari',
	'LBL_LIST_RECIPIENT_NAME'					=> 'Nom del Destinatari',
	'LBL_LIST_SEND_ATTEMPTS'					=> 'Intents de Tramesa',
	'LBL_LIST_SEND_DATE_TIME'					=> 'Enviar el',
	'LBL_LIST_USER_NAME'						=> 'Nom d´Usuari',
	'LBL_LOCATION_ONLY'							=> 'Ubicació',
	'LBL_LOCATION_TRACK'						=> 'Ubicació dels arxius de següiment de campanya (com campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY'                     => 'Guardar copies dels missatges de la campanya:',
    'LBL_CAMP_MESSAGE_COPY_DESC'                     => 'Desitja guardar còpies completes de <bold>CADA</bold> missatge de correu enviat durant totes les campanyes? <bold>Es recomana el valor per defecte de no fer-ho</bold>. Si elegeix no, només es guardarà la plantilla enviada i les variables per recrear el missatge individual.',
	'LBL_MAIL_SENDTYPE'							=> 'Agent de Transferència de Correu (MTA):',
	'LBL_MAIL_SMTPAUTH_REQ'						=> 'Usar Autentificació SMTP?',
	'LBL_MAIL_SMTPPASS'							=> 'Clau de pas SMTP:',
	'LBL_MAIL_SMTPPORT'							=> 'Port SMTP:',
	'LBL_MAIL_SMTPSERVER'						=> 'Servidor SMTP:',
	'LBL_MAIL_SMTPUSER'							=> 'Usuari SMTP:',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Choose your Email provider',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Yahoo! Mail Password',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Yahoo! Mail ID',
	'LBL_GMAIL_SMTPPASS'					=> 'Gmail Password',
	'LBL_GMAIL_SMTPUSER'					=> 'Gmail Email Address',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Exchange Password',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Exchange Username',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Exchange Server Port',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Exchange Server',
	'LBL_EMAIL_LINK_TYPE'				=> 'Client de correu',
    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>Sugar Mail Client:</b> Send emails using the email client in the Sugar application.<br><b>External Mail Client:</b> Send email using an email client outside of the Sugar application, such as Microsoft Outlook.',
	'LBL_MARKETING_ID'							=> 'Id de Màrqueting',
    'LBL_MODULE_ID'                             => 'EmailMan',
	'LBL_MODULE_NAME'							=> 'Configuració de Correu',
	'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS'    => 'Configure Campaign Email Settings',
	'LBL_MODULE_TITLE'							=> 'Administració de Cua d´Email Sortint',
	'LBL_NOTIFICATION_ON_DESC' 					=> 'Envia correus de notificació quan s´assignen registres.',
	'LBL_NOTIFY_FROMADDRESS' 					=> 'Direcció remitent:',
	'LBL_NOTIFY_FROMNAME' 						=> 'Nom remitent:',
	'LBL_NOTIFY_ON'								=> 'Activar notificacions?',
	'LBL_NOTIFY_SEND_BY_DEFAULT'				=> 'Enviar notificacions per defecte en usuaris nous?',
	'LBL_NOTIFY_TITLE'							=> 'Opcions de Notificació de Correu',
	'LBL_OLD_ID'								=> 'Id Antic',
	'LBL_OUTBOUND_EMAIL_TITLE'					=> 'Opcions de Correu Sortint',
	'LBL_RELATED_ID'							=> 'Id Relacionat',
	'LBL_RELATED_TYPE'							=> 'Tipus Relacionat',
	'LBL_SAVE_OUTBOUND_RAW'						=> 'Guardar els Missatges Sortints en format original',
	'LBL_SEARCH_FORM_PROCESSED_TITLE'			=> 'Recerca de Processats',
	'LBL_SEARCH_FORM_TITLE'						=> 'Recerca de Cues',
	'LBL_VIEW_PROCESSED_EMAILS'					=> 'Veure Correus Processats',
	'LBL_VIEW_QUEUED_EMAILS'					=> 'Veure Correus En Cua',
	'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'	=> 'Valor en Config.php per site_url',
	'TXT_REMOVE_ME_ALT'							=> 'Per borrar la subscripció a aquesta llista de correu vagi a',
	'TXT_REMOVE_ME_CLICK'						=> 'faci clic aquí',
	'TXT_REMOVE_ME'								=> 'Per borrar la subscripció a aquesta llista de correu',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> 'Enviar notificació usant com a remitent la direcció d´email de l´usuari assignador?',

	'LBL_SECURITY_TITLE'						=> 'Configuració de Seguretat de Correu',
	'LBL_SECURITY_DESC'							=> 'Marqui allò que NO hauria de ser permès a Email entrant o mostrades en el mòdul d´Emails.',
	'LBL_SECURITY_APPLET'						=> 'Etiqueta Applet',
	'LBL_SECURITY_BASE'							=> 'Etiqueta Base',
	'LBL_SECURITY_EMBED'						=> 'Etiqueta Embed',
	'LBL_SECURITY_FORM'							=> 'Etiqueta Form',
	'LBL_SECURITY_FRAME'						=> 'Etiqueta Frame',
	'LBL_SECURITY_FRAMESET'						=> 'Etiqueta Frameset',
	'LBL_SECURITY_IFRAME'						=> 'Etiqueta iFrame',
	'LBL_SECURITY_IMPORT'						=> 'Etiqueta Import',
	'LBL_SECURITY_LAYER'						=> 'Etiqueta Layer',
	'LBL_SECURITY_LINK'							=> 'Etiqueta Link',
	'LBL_SECURITY_OBJECT'						=> 'Etiqueta Object',
	'LBL_SECURITY_OUTLOOK_DEFAULTS'				=> 'Seleccionar les precaucions mínimes de seguretat per defecte a Outlook (pot provocar errors en la visualització del contingut).',
	'LBL_SECURITY_SCRIPT'						=> 'Etiqueta Script',
	'LBL_SECURITY_STYLE'						=> 'Etiqueta Style',
	'LBL_SECURITY_TOGGLE_ALL'					=> 'Canviar Totes les Opcions',
	'LBL_SECURITY_XMP'							=> 'Etiqueta Xmp',
    'LBL_YES'                                   => 'Sí',
    'LBL_NO'                                    => 'No',
    'LBL_PREPEND_TEST'                          => '[Prova]: ',
	'LBL_SEND_ATTEMPTS'							=> 'Intents d´Enviament',
	'LBL_OUTGOING_SECTION_HELP'                 => 'Configure the default outgoing mail server for sending email notifications, including workflow alerts.',
    'LBL_ALLOW_DEFAULT_SELECTION'               => 'Allow users to use this account for outgoing email:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => 'When this option selected, all users will be able to send emails using the same outgoing<br> mail account used to send system notifications and alerts.  If the option is not selected,<br> users can still use the outgoing mail server after providing their own account information.',
    'LBL_FROM_ADDRESS_HELP'                     => 'When enabled, the assigning user\\\'s name and email address will be included in the From field of the email. This feature might not work with SMTP servers that do not allow sending from a different email account than the server account.',
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL_LOGO' => 'Yahoo Mail' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Exchange' /*for 508 compliance fix*/,
	'LBL_HELP' => 'Ajuda' /*for 508 compliance fix*/,
);

?>