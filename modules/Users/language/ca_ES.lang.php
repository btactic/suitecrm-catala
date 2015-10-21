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

 * Description:	Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
    'LBL_DELETE_USER_CONFIRM'           => 'When the User record is deleted, the corresponding Employee record will also be deleted. After the user is deleted, any workflow definitions and reports involving the user might need to be updated.<br/><br/>Deleting a User record cannot be undone.',
	'LBL_DELETE_GROUP_CONFIRM'          => 'Are you sure you want to delete this Group User? Click OK to delete the User record.<br/>After clicking OK, you will be given the ability to reassign records assigned to the Group User to another user.',
	'LBL_DELETE_PORTAL_CONFIRM'         => 'Are you sure you want to delete this Portal API User? Click OK to delete the User record.',


	'LNK_IMPORT_USERS'                 => 'Import Users',
	'ERR_DELETE_RECORD'					=> 'Ha d´especificar un número de registre a esborrar.',
	'ERR_EMAIL_INCORRECT'				=> 'Provide a valid email address in order to create and send the password.',
	'ERR_EMAIL_NO_OPTS'					=> 'No s´ha trobat una configuració òptima per el Correu Entrant.',
	'ERR_ENTER_CONFIRMATION_PASSWORD'	=> 'Si us plau, escriu un altre cop per confirmar, la nova clau de pas.',
	'ERR_ENTER_NEW_PASSWORD'			=> 'Si us plau, escriu la nova clau de pas.',
	'ERR_ENTER_OLD_PASSWORD'			=> 'Si us plau, escriu la seva clau de pas antiga.',
	'ERR_IE_FAILURE1'					=> '[Clic aquí per tornar]',
	'ERR_IE_FAILURE2'					=> 'Hi va haver un problema connectant la Compte de Correu.  Si us plau, comprovi la seva configuració i intenti-ho de nou.',
	'ERR_IE_MISSING_REQUIRED'			=> 'La configuració del Correu Entrant no conté tota la informació requerida.\n  Si us plau, comprovi la seva configuració i intentin-ho de nou.\n\nSi no ha configurat el Correu Entrant, si us plau, esborri els valors de tots els camps d\'aquesta secció.',
	'ERR_INVALID_PASSWORD'				=> 'Ha d´indicar un usuari i clau de pas vàlids.',
	'ERR_NO_LOGIN_MOBILE'				=> 'El seu primer inici de sessió en aquesta aplicació ha de ser completat amb un navegador que no sigui mòbil, o en manera normal. Si us plau, torni a intentar-ho amb un navegador complet o faci clic en l´enllaç per a la manera normal més a baix. Preguem disculpi les molèsties.',
	'ERR_LAST_ADMIN_1'					=> 'el nom d´usuari "',
	'ERR_LAST_ADMIN_2'					=> '" és l´últim usuari Administrador.  Almenys un usuari ha de ser Administrador. Revisi la configuració de l´usuari Administrador.',
	'ERR_PASSWORD_CHANGE_FAILED_1'		=> 'Canvi de clau de pas fallit per ',
	'ERR_PASSWORD_CHANGE_FAILED_2'		=> ' fallit.  La nova clau de pas ha de ser establerta.',
	'ERR_PASSWORD_CHANGE_FAILED_3'		=> '.	The new password is invalid.',
	'ERR_PASSWORD_INCORRECT_OLD_1'		=> '﻿La clau de pas antiga és incorrecta per a l´usuari ',
	'ERR_PASSWORD_INCORRECT_OLD_2'		=> '. Introdueixi-la de nou.',
	'ERR_PASSWORD_MISMATCH'				=> 'Les claus de pas no coincideixen.',
	'ERR_PASSWORD_USERNAME_MISSMATCH'   => 'You must specify a valid User Name and Email Address.',
	'ERR_PASSWORD_LINK_EXPIRED'         => 'Your link has expired, please generate a new one',
	'ERR_REENTER_PASSWORDS'				=> 'Si us plau introdueixi de nou la clau de pas.  Els valors de \\"Nova clau de pas\\" i \\"Confirmar clau de pas\\" no coincideixen.',
	'ERR_REPORT_LOOP'					=> 'El sistema ha detectat dependències cícliques en la jerarquia d´informadors. Un usuari no pot informar-se a si mateix, ni pot cap dels seus responsables informar-li a ell.',
	'ERR_RULES_NOT_MET'                 => 'The password you entered did not meet the password requirements.  Please try again.',
	'ERR_USER_INFO_NOT_FOUND'			=> 'User Information not found',
	'ERR_USER_NAME_EXISTS_1'			=> 'El nom d´usuario ',
	'ERR_USER_NAME_EXISTS_2'			=> ' ja existeix.  ﻿No es permeten noms d´usuari duplicats. Canviï el nom d´usuari.',
	'ERR_USER_IS_LOCKED_OUT'			=> 'This user is locked out of the Sugar application and cannot log in using his/her existing password.',

	'LBL_PASSWORD_SENT'                => 'Password Updated',
	'LBL_CANNOT_SEND_PASSWORD'         => 'Cannot send password',
	'ERR_EMAIL_NOT_SENT_ADMIN'			=> 'System is unable to process your request. Please check:',
	'ERR_SMTP_URL_SMTP_PORT'			=> 'SMTP Server URL and Port',
	'ERR_SMTP_USERNAME_SMTP_PASSWORD'	=> 'SMTP Username and  SMTP Password',
	'ERR_RECIPIENT_EMAIL'				=> 'Recipient Email Address',
	'ERR_SERVER_STATUS'					=> 'Your server status',
	'ERR_SERVER_SMTP_EMPTY'				=> 'The system is unable to send an email to the user. Please check the Outgoing Mail Configuration in <a href="index.php?module=EmailMan&action=config">Email Settings</a>.',

	'LBL_ADDRESS_CITY'					=> 'Ciutat de direcció',
	'LBL_ADDRESS_COUNTRY'				=> 'País de direcció',
	'LBL_ADDRESS_INFORMATION'			=> 'Direccions',
	'LBL_ADDRESS_POSTALCODE'			=> 'CP de direcció',
	'LBL_ADDRESS_STATE'					=> 'Estat/Província de direcció',
	'LBL_ADDRESS_STREET'				=> 'Carrer de direcció',
	'LBL_ADDRESS'						=> 'Direcció',
	'LBL_ADMIN_USER'					=> 'System Administrator User',


	'LBL_ADMIN_DESC'					=> 'User can access the Administration page all records.',
	'LBL_REGULAR_DESC'					=> 'User can access modules and records based on roles.',

    'LBL_PHOTO' => 'Photo',

	'LBL_ADMIN'							=> 'Administrador',
	'LBL_ADVANCED'                     => 'Avançat',
    'LBL_ANY_ADDRESS'                  => 'Direcció Alternativa:',
	'LBL_ANY_EMAIL'						=> 'Qualsevol Correu',
	'LBL_ANY_PHONE'						=> 'Un altre telèfon',
	'LBL_BUTTON_CREATE'					=> 'Crear',
	'LBL_BUTTON_EDIT'					=> 'Editar',
	'LBL_CALENDAR_OPTIONS'				=> 'Opcions del Calendari',
	'LBL_CHANGE_PASSWORD'               => 'Cambiar Clau de pas',
	'LBL_CHANGE_SYSTEM_PASSWORD'		=> 'Please provide a new password.',
	'LBL_CHANGE_PASSWORD_TITLE'         => 'Clau de pas',
    'LBL_CHOOSE_A_KEY'					=> 'Establir una clau per evitar la publicació no autoritzada en el seu calendari',
    'LBL_NO_KEY'                        => 'Key is not set. Please set key to enable publishing.',
	'LBL_CHOOSE_WHICH'					=> 'Seleccionar les pestanyes a mostrar',
	'LBL_CITY'							=> 'Ciutat',

	'LBL_CLEAR_BUTTON_TITLE'			=> 'Netejar',


	'LBL_CONFIRM_PASSWORD'				=> 'Confirmar clau de pas',
	'LBL_CONFIRM_REGULAR_USER'			=> 'You have changed the user type from System Administrator User to Regular User.  After saving this change, the user will no longer have system administrator privileges.\n\nClick OK to proceed.\nClick Cancel to return to the record.',
	'LBL_COUNTRY'						=> 'País',
	'LBL_CURRENCY_TEXT'					=> 'Estableix la moneda per defecte',
	'LBL_CURRENCY'						=> 'Moneda',
	'LBL_CURRENCY_EXAMPLE'				=> 'Exemple de Visualització de Moneda',
	'LBL_CURRENCY_SIG_DIGITS'			=> 'Dígits Significatius en Moneda',
	'LBL_CURRENCY_SIG_DIGITS_DESC'		=> 'Número de decimals a visualitzar per la moneda',
	'LBL_NUMBER_GROUPING_SEP'			=> 'Separador de milers',
	'LBL_NUMBER_GROUPING_SEP_TEXT'		=> 'Caràcter emprat per separar les unitats de millar',
	'LBL_DECIMAL_SEP'					=> 'Símbol decimal',
	'LBL_DECIMAL_SEP_TEXT'				=> 'Caràcter emprat com separador de decimals',
	'LBL_FDOW'					=> 'First Day of Week',
	'LBL_FDOW_TEXT'				=> 'First Day displayed in Week, Month, and Year Views',
	'LBL_DATE_FORMAT_TEXT'				=> 'Estableix el format de text per a la data',
	'LBL_DATE_FORMAT'					=> 'Format de data',
	'LBL_DEFAULT_SUBPANEL_TITLE'		=> 'Usuaris',
	'LBL_DEPARTMENT'					=> 'Departament',
	'LBL_DESCRIPTION'					=> 'Descripció:',
	'LBL_DISPLAY_TABS'					=> 'Mostrar Pestanyes',
	'LBL_DOWNLOADS'                    => 'Downloads',
	'LBL_DST_INSTRUCTIONS'				=> '(+DST) ﻿indica que s´està aplicant l´Horari d´Estiu',
	'LBL_EDIT_TABS'						=> 'Editar Pestanyes',
	'LBL_EDIT'							=> 'Editar',
	'LBL_USER_HASH'						=> 'Clau de pas',
	'LBL_AUTHENTICATE_ID'				=> 'Authentication Id',
	'LBL_ACCOUNT_NAME'					=> 'Nom del Compte',
	'LBL_USER_PREFERENCES'				=> 'User Preferences',
	'LBL_EXT_AUTHENTICATE'				=> 'External Authentication',
	'LBL_EMAIL_OTHER'					=> 'Correu 2',
	'LBL_EMAIL'							=> 'Correu',
	'LBL_EMAIL_CHARSET'					=> 'Joc de Caràcters per el Correu Sortint',
	'LBL_EMAIL_EDITOR_OPTION'			=> 'Format de correu',
	'LBL_EMAIL_GMAIL_DEFAULTS'			=> 'Omplir prèviament valors per defecte per a Gmail',
	'LBL_EMAIL_LINK_TYPE'				=> 'Client de correu',

    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>Sugar Mail Client:</b> Send emails using the email client in the Sugar application.<br><b>External Mail Client:</b> Send email using an email client outside of the Sugar application, such as Microsoft Outlook.',

    'LBL_EMAIL_NOT_SENT'                => 'System is unable to process your request. Please contact the system administrator.',
    'LBL_EMAIL_PROVIDER'               => 'Email Provider',
	'LBL_EMAIL_SHOW_COUNTS'				=> 'Mostrar comptador de correus?',
	'LBL_EMAIL_SIGNATURE_ERROR1'		=> 'Aquesta firma requereix un nom.',
    'LBL_EMAIL_SMTP_SSL'				=> 'Habilitar SMTP sobre SSL',
    'LBL_EMAIL_TEMPLATE_MISSING'            => 'No email template is selected for the email containing the password that will be sent to the user.  Please select an email template in the Password Management page.',
    'LBL_EMPLOYEE_STATUS'				=> 'Estat del Empleat',
    'LBL_EMPLOYEE_INFORMATION'         => 'Informació del Empleat',
	'LBL_ERROR'							=> 'Error',
	'LBL_EXPORT_CHARSET'				=> 'Joc de Caràcters d´Importació/Exportació',
	'LBL_EXPORT_CHARSET_DESC'			=> 'Elegeixi el joc de caràcters utilitzat en la seva configuració regional.  Aquesta propietat s´utilitzarà per la importació de dades, correus de sortida, exportació .csv, generació de PDF, i generació de vCard.',
	'LBL_EXPORT_DELIMITER'				=> 'Delimitador per Exportació',
	'LBL_EXPORT_DELIMITER_DESC'			=> 'Especifiqui el/els caràcter(es) per delimitar les dades exportades.',
	'LBL_FAX_PHONE'						=> 'Fax',
	'LBL_FAX'							=> 'Fax',
	'LBL_FIRST_NAME'					=> 'Nom',
    'LBL_GENERATE_PASSWORD_BUTTON_KEY'  => 'G',
    'LBL_SYSTEM_GENERATED_PASSWORD'     =>'System Generated Password',
    'LBL_GENERATE_PASSWORD_BUTTON_LABEL'   => 'Reset Password',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE'   => 'Reset Password',
    'LBL_GENERATE_PASSWORD'             => 'Reset Password',
	'LBL_GROUP_DESC'					=> 'Aquest usuari només s´utilitzarà per assignar elements a un grup a través de la funcionalitat de Correu Entrant. Aquest usuari no pot iniciar la sessió a través de l´interfície web de Sugar.',
	'LBL_GROUP_USER_STATUS'				=> 'Usuari de Grup',
	'LBL_GROUP_USER'					=> 'Usuari de Grup',
	'LBL_HIDE_TABS'						=> 'Amagar Pestanyes',
	'LBL_HOME_PHONE'					=> 'Telèfon de casa',
	'LBL_INBOUND_TITLE'					=> 'Informació de Compte',
	'LBL_IS_ADMIN'						=> 'Es Administrador',
	'LBL_LANGUAGE'						=> 'Llenguatge',
	'LBL_LAST_NAME'						=> 'Cognoms',
    'LBL_LAST_NAME_SLASH_NAME'			=> 'Last Name/Name',
    'LBL_LAYOUT_OPTIONS'                => 'Opcions de Diseny',
	'LBL_LDAP'							=> 'LDAP',
	'LBL_LDAP_AUTHENTICATION'			=> 'LDAP Authentication',
	'LBL_LIST_ACCEPT_STATUS'			=> 'Estat d´Acceptació',
	'LBL_LIST_ADMIN'					=> 'Administrador',
	'LBL_LIST_DEPARTMENT'				=> 'Departament',
	'LBL_LIST_EMAIL'					=> 'Correu',
	'LBL_LIST_FORM_TITLE'				=> 'Llista d´Usuaris',
	'LBL_LIST_GROUP'					=> 'Grup',
	'LBL_LIST_LAST_NAME'				=> 'Cognoms',
	'LBL_LIST_MEMBERSHIP'				=> 'Membres',
	'LBL_LIST_NAME'						=> 'Nom',
	'LBL_LIST_PRIMARY_PHONE'			=> 'Telèfon',
	'LBL_LIST_PASSWORD'					=> 'Clau de pas',
	'LBL_LIST_STATUS'					=> 'Estat',
	'LBL_LIST_TITLE'					=> 'Títol',
	'LBL_LIST_USER_NAME'				=> 'Identificador',
	'LBL_LOCALE_DEFAULT_NAME_FORMAT'	=> 'Format de Visualització de Nom',
	'LBL_LOCALE_DESC_FIRST'				=> '[Nom]',
	'LBL_LOCALE_DESC_LAST'				=> '[Cognom]',
	'LBL_LOCALE_DESC_SALUTATION'		=> '[Títol]',
	'LBL_LOCALE_DESC_TITLE'				=> '[Carrèc]',
	'LBL_LOCALE_EXAMPLE_NAME_FORMAT'	=> 'Exemple',
	'LBL_LOCALE_NAME_FORMAT_DESC'		=> 'Estableixi com desitja que es mostrin els noms.',
	'LBL_LOCALE_NAME_FORMAT_DESC_2'	=> '<i>"s" Títol<br>"f" Nom<br>"l" Cognom</i>',
    'LBL_SAVED_SEARCH'                  => 'Recerques i Disenys Guardats',

	// LOGIN PAGE STRINGS
	'LBL_LOGIN_BUTTON_KEY'				=> 'L',
	'LBL_LOGIN_BUTTON_LABEL'			=> 'Login',
	'LBL_LOGIN_BUTTON_TITLE'			=> 'Login [Alt+L]',
	'LBL_LOGIN_WELCOME_TO'				=> 'Benvingut a',
	'LBL_LOGIN_OPTIONS'					=> 'Opcions',
    'LBL_LOGIN_FORGOT_PASSWORD'         => 'Ha olblidat la seva clau de pas?',
    'LBL_LOGIN_SUBMIT'      		    => 'Enviar',
    'LBL_LOGIN_ATTEMPTS_OVERRUN'        => 'Too many failed login attempts.',
    'LBL_LOGIN_LOGIN_TIME_ALLOWED'      => 'You can try logging in again in ',
    'LBL_LOGIN_LOGIN_TIME_DAYS'     	=> 'days.',
    'LBL_LOGIN_LOGIN_TIME_HOURS'    	=> 'h.',
    'LBL_LOGIN_LOGIN_TIME_MINUTES'      => 'min.',
   	'LBL_LOGIN_LOGIN_TIME_SECONDS'      => 'sec.',
    'LBL_LOGIN_ADMIN_CALL'              => 'Please contact the system administrator.',
	// END LOGIN PAGE STRINGS
    'LBL_LOGGED_OUT_1' => 'You have been logged out. To login again please click ',
    'LBL_LOGGED_OUT_2' => 'here',
    'LBL_LOGGED_OUT_3' => '.',
	'LBL_MAIL_FROMADDRESS'				=> 'Direcció remitent',
	'LBL_MAIL_FROMNAME'					=> 'Nom remitent',
	'LBL_MAIL_OPTIONS_TITLE'			=> 'Opcions de Correu',
	'LBL_MAIL_SENDTYPE'					=> 'Agent de Transferència de Correu (MTA)',
	'LBL_MAIL_SMTPAUTH_REQ'				=> 'Usar autentificació SMTP?',
	'LBL_MAIL_SMTPPORT'					=> 'Port SMTP',
	'LBL_MAILMERGE_TEXT'				=> 'Habilitar la Combinación de Correspondència (ha d´estar habilitada també per l´administrador del sistema en la Configuració)',
	'LBL_MAILMERGE'						=> 'Combinar Correspondència',
	'LBL_MAX_TAB'						=> 'Número de pestanyes',
    'LBL_MAX_TAB_DESCRIPTION'           => 'Número de pestanyes mostrades en la part superior de la pàgina abans de apareixer el menú flotant',
    'LBL_MAX_SUBTAB'                    => 'Número de subpestanyes',
    'LBL_MAX_SUBTAB_DESCRIPTION'        => 'Número de subpestanyes mostrades per cada pestanya abans de apareixer el menú flotant',
	'LBL_MESSENGER_ID'					=> 'Compte de Missatgeria Instantània',
	'LBL_MESSENGER_TYPE'				=> 'Tipus de Missatgeria Instantània',
	'LBL_MOBILE_PHONE'					=> 'Mòbil',
	'LBL_MODIFIED_BY'                  =>'Modificat Per',
	'LBL_CREATED_BY_NAME' => 'Creat Per', //bug 48978
    'LBL_MODIFIED_BY_ID'               =>'Modificat Per ID',
    'LBL_MODULE_NAME'					=> 'Usuaris',
	'LBL_MODULE_TITLE'					=> 'Usuaris: Inici',
    'LBL_NAME'							=> 'Nom y Cognoms',
    'LBL_SIGNATURE_NAME'                                        =>  'Nom',
    'LBL_NAVIGATION_PARADIGM'           => 'Navegació',
    'LBL_NAVIGATION_PARADIGM_DESCRIPTION'   => 'Veure mòduls en pestanyes agrupades per categories, o veure mòduls en diferentes pestanyes per cada mòdul',
    'LBL_USE_GROUP_TABS'                => 'Module Menu Filters',
	'LBL_NEW_FORM_TITLE'				=> 'Nou Usuari',
	'LBL_NEW_PASSWORD'					=> 'Nova clau de pas',
	'LBL_NEW_PASSWORD1'					=> 'Clau de pas',
	'LBL_NEW_PASSWORD2'					=> 'Confirmar clau de pas',
	'LBL_NEW_USER_PASSWORD_1'			=> 'Password was changed successfully.',
	'LBL_NEW_USER_PASSWORD_2'			=> 'An email was sent to the user containing a system-generated password.',
	'LBL_NEW_USER_PASSWORD_3'			=> 'Password was created successfully.',
	'LBL_NEW_USER_BUTTON_KEY'			=> 'N',
	'LBL_NEW_USER_BUTTON_LABEL'			=> 'Nou Usuari',
	'LBL_NEW_USER_BUTTON_TITLE'			=> 'Nou Usuari [Alt+N]',
	'LBL_NORMAL_LOGIN'					=> 'Canviar a Vista Normal',
	'LBL_NOTES'							=> 'Notes',
	'LBL_OFFICE_PHONE'					=> 'Telèfon de la oficina',
	'LBL_OLD_PASSWORD'					=> 'Clau de pas antiga',
	'LBL_OTHER_EMAIL'					=> 'Correu alternatiu',
	'LBL_OTHER_PHONE'					=> 'Un altre telèfon',
	'LBL_OTHER'							=> 'Un altre',
	'LBL_PASSWORD'						=> 'Clau de pas',
    'LBL_PASSWORD_GENERATED'            => 'New password generated',
    'LBL_PASSWORD_EXPIRATION_LOGIN'     => 'Your password has expired. Please provide a new password.',
    'LBL_PASSWORD_EXPIRATION_GENERATED' => 'Your password is system-generated',
    'LBL_PASSWORD_EXPIRATION_TIME'      => 'Your password has expired. Please provide a new password.',

	'LBL_PSW_MODIFIED'                  => 'Password Last Changed',
    'LBL_PHONE'							=> 'Qualsevol telèfon',
	'LBL_PICK_TZ_WELCOME'				=> 'Benvingut a Sugar.',
	'LBL_PICK_TZ_DESCRIPTION'           => 'Abans de continuar, si us plau, confirmi la seva zona horària. Seleccioni la zona horària apropiada de la següent llista, i faci clic a Guardar per continuar. La zona horària pot ser canviada en qualsevol moment en "El meu Compte".',
	'LBL_PORTAL_ONLY_DESC'				=> 'Use for the Portal API. This type cannot login through the Sugar web interface.',
	'LBL_PORTAL_ONLY_USER'					=> 'Portal API User',
	'LBL_POSTAL_CODE'					=> 'Còdig postal',
	'LBL_PRIMARY_ADDRESS'				=> 'Direcció principal',
	'LBL_PROMPT_TIMEZONE_TEXT'			=> 'Marcar per sol·licitar l´usuari que confirmi la Zona Horària en l´inici de sessió.',
	'LBL_PROMPT_TIMEZONE'				=> 'Confirmació de Zona Horària',
	'LBL_PROVIDE_USERNAME_AND_EMAIL' 	=> 'Provide both a User Name and an Email Address.',
	'LBL_PUBLISH_KEY'					=> 'Clau de Publicació',

	'LBL_RECAPTCHA_NEW_CAPTCHA'         => 'Get another CAPTCHA',
	'LBL_RECAPTCHA_SOUND'				=> 'Switch to Sound',
	'LBL_RECAPTCHA_IMAGE'				=> 'Switch to Image',
	'LBL_RECAPTCHA_INSTRUCTION'         => 'Enter the Two Words Below',
	'LBL_RECAPTCHA_INSTRUCTION_OPPOSITE'=> 'Enter the Two Words to the Right',
	'LBL_RECAPTCHA_FILL_FIELD'			=> 'Enter the text that appears in the image.',
	'LBL_RECAPTCHA_INVALID_PRIVATE_KEY'	=> 'Invalid Recaptcha Private Key',
	'LBL_RECAPTCHA_INVALID_REQUEST_COOKIE'=> 'The challenge parameter of the verify Recaptcha script was incorrect.',
	'LBL_RECAPTCHA_UNKNOWN'				=> 'Unknown Recaptcha Error',

	'LBL_RECEIVE_NOTIFICATIONS_TEXT'	=> 'Rebre un correu de notificació quan se li ha assignat un registre.',
	'LBL_RECEIVE_NOTIFICATIONS'			=> 'Notificació d´assignació',
	'LBL_REGISTER'                      => 'Es un usuari nou? Si us plau, registri´s',
	'LBL_REGULAR_USER'                  => 'Regular User',
	'LBL_REMINDER_TEXT'					=> 'Establir configuració per defecte per als avisos recordatoris de trucades i reunions',
	'LBL_REMINDER'						=> 'Recordatoris',
	'LBL_REMINDER_POPUP' => 'Popup',
	'LBL_REMINDER_EMAIL' => 'Correu',
    'LBL_REMINDER_EMAIL_ALL_INVITEES'   => 'Email all invitees',
	'LBL_REMOVED_TABS'					=> 'Administrar Pestanyes Eliminades',
	'LBL_REPORTS_TO_NAME'				=> 'Informa a',
	'LBL_REPORTS_TO'					=> 'Informa a',
    'LBL_REPORTS_TO_ID'                => 'Informa a ID:',
	'LBL_REQUEST_SUBMIT'				=> 'Your request has been submitted.',
	'LBL_RESET_TO_DEFAULT'				=> 'Reiniciar a preferencies per defecte',
	'LBL_RESET_PREFERENCES'				=> 'Preferències d´Usuari',
    'LBL_RESET_PREFERENCES_WARNING'     => 'Està segur de que vol reiniciar totes les seves preferencies? Advertència: La seva sessío actual serà tancada.',
    'LBL_RESET_PREFERENCES_WARNING_USER' => 'Are you sure you want reset all of the preferences for this user?',
    'LBL_RESET_HOMEPAGE'                => 'Pàgina d´Inici',
    'LBL_RESET_DASHBOARD'               => 'Gràfic',
    'LBL_RESET_HOMEPAGE_WARNING'        => 'Està segur de que vol reiniciar la seva Pàgina d´Inici?',
    'LBL_RESET_HOMEPAGE_WARNING_USER'   => 'Are you sure you want reset the Homepage for this user?',
	'LBL_SALUTATION'                    => 'Salutació',
    'LBL_ROLES_SUBPANEL_TITLE'			=> 'Rols',
	'LBL_SEARCH_FORM_TITLE'				=> 'Recerca d´Usuaris',
	'LBL_SEARCH_URL'					=> 'Direcció de Recerca',
	'LBL_SELECT_CHECKED_BUTTON_LABEL'	=> 'Seleccionar Usuaris Marcats',
	'LBL_SELECT_CHECKED_BUTTON_TITLE'	=> 'Seleccionar Usuaris Marcats',
	'LBL_SETTINGS_URL_DESC'				=> 'Usar aquest URL per establir la configuració d´inici de sessió del complement de Sugar per a Microsoft&reg; Outlook&reg; i del complement Sugar per Microsoft&reg; Word&reg;.',
	'LBL_SETTINGS_URL'					=> 'URL',
	'LBL_SIGNATURE'						=> 'Firma',
	'LBL_SIGNATURE_HTML'				=> 'Firma HTML',
	'LBL_SIGNATURE_DEFAULT'				=> 'Usar firma?',
	'LBL_SIGNATURE_PREPEND'				=> 'Firmar sobre la resposta?',
	'LBL_SIGNATURES'					=> 'Firmes',
	'LBL_STATE'							=> 'Estat/Província',
	'LBL_STATUS'						=> 'Estat',
    'LBL_SUBPANEL_LINKS'                => 'Enllaços de Subpanell',
    'LBL_SUBPANEL_LINKS_DESCRIPTION'    => 'En les Vistes de Detall, mostra una fila amb enllaços a dreceres del Subpanell.',
    'LBL_SUBPANEL_TABS'                 => 'Pestanyes del Subpanell',
    'LBL_SUBPANEL_TABS_DESCRIPTION'     => 'En les Vistes de Detall, agrupa els Subpanells en pestanyes i mostra només una pestanya a la vegada.',
    'LBL_SUGAR_LOGIN'					=> 'Es Usuari de Sugar',
    'LBL_SUPPORTED_THEME_ONLY'          => 'Només afecta a temes que suporten aquesta opció.',
    'LBL_SWAP_LAST_VIEWED_DESCRIPTION'  => 'Mostra la barra de Recents en el lateral, si està marcat.  Per defecte la barra es mostrada en la part superior.',
    'LBL_SWAP_SHORTCUT_DESCRIPTION'     => 'Mostra la barra de Dreceres en la part superior, si està marcat.  Per defecte la barra es mostrada en el lateral.',
    'LBL_SWAP_LAST_VIEWED_POSITION'     => 'Barra de Recents en un lateral',
    'LBL_SWAP_SHORTCUT_POSITION'        => 'Dreceres en la part superior',
	'LBL_TAB_TITLE_EMAIL'				=> 'Opcions de correu',
	'LBL_TAB_TITLE_USER'				=> 'Opcions d´usuari',
	'LBL_THEME'							=> 'Tema',
	'LBL_THEME_COLOR'					=> 'Color',
	'LBL_THEME_FONT'					=> 'Font',
	'LBL_TIME_FORMAT_TEXT'				=> 'Estableix el format de text per a l´hora',
	'LBL_TIME_FORMAT'					=> 'Format d´hora',
	'LBL_TIMEZONE_DST_TEXT'				=> 'Aplicar Horari d´Estiu',
	'LBL_TIMEZONE_DST'					=> 'Horari d´Estiu',
	'LBL_TIMEZONE_TEXT'					=> 'Estableix la zona horària',
	'LBL_TIMEZONE'						=> 'Zona horària',
	'LBL_TITLE'							=> 'Títol',
	'LBL_USE_REAL_NAMES'				=> 'Mostrar Nom Complert',
	'LBL_USE_REAL_NAMES_DESC'			=> 'Mostra el nom complert d´un usuario enlloc del seu identificador',
	'LBL_USER_INFORMATION'				=> 'Informació del usuari',
	'LBL_USER_LOCALE'					=> 'Configuració Regional',
	'LBL_USER_NAME'						=> 'Identificador',
	'LBL_USER_SETTINGS'					=> 'Configuració del usuari',
	'LBL_USER_TYPE'		   			    => 'User Type',
	'LBL_USER_ACCESS'                  => 'Accés',
	'LBL_USER'							=> 'Usuari',
	'LBL_WORK_PHONE'					=> 'Telèfon del treball',
	'LBL_YOUR_PUBLISH_URL'				=> 'Direcció de publicació',
    'LBL_ICAL_PUB_URL'                  => 'iCal integration URL',
    'LBL_ICAL_PUB_URL_HELP'             => 'Use this URL to subscribe to the Sugar calendar within iCal.',
	'LBL_YOUR_QUERY_URL'				=> 'Direcció de consulta',
	'LNK_NEW_USER'						=> 'Crear Nou Usuari',
	'LNK_NEW_PORTAL_USER'				=> 'Create Portal API User',
	'LNK_NEW_GROUP_USER'				=> 'Create Group User',
	'LNK_USER_LIST'						=> 'Usuaris',
	'LNK_REASSIGN_RECORDS'				=> 'Reasignar Registres',
    'LBL_PROSPECT_LIST'                 => 'Públic Objectiu',
    'LBL_EMAILS'                        => 'Correu',
    'LBL_PROCESSING'                    => 'En procés',
    'LBL_UPDATE_FINISH'                 => 'Actualització completa',
    'LBL_AFFECTED'                      => 'afectats',

    'LBL_USER_NAME_FOR_ROLE'            =>'Users/Teams/Roles',
    'LBL_SESSION_EXPIRED'               => 'You have been logged out because your session has expired.',

// INBOUND EMAIL STRINGS
	'LBL_APPLY_OPTIMUMS'				=> 'Aplicar Valors Òptims',
	'LBL_ASSIGN_TO_USER'				=> 'Assignar a Usuari',
	'LBL_BASIC'							=> 'Configuració entrant',
	'LBL_CERT_DESC'						=> 'Forçar validació del Certificat de Seguretat del servidor de correu - no usar si és de firma pròpia.',
	'LBL_CERT'							=> 'Validar Certificat',
	'LBL_FIND_OPTIMUM_KEY'				=> 'f',
	'LBL_FIND_OPTIMUM_MSG'				=> '<br>Buscant variables òptimes de connexió.',
	'LBL_FIND_OPTIMUM_TITLE'			=> 'Buscar Configuració Òptima',
	'LBL_FORCE'							=> 'Forçar Negatiu',
	'LBL_FORCE_DESC'					=> 'Alguns servidors IMAP/POP3 requereixen opcions especials. Marqui per forçar una opció negativa en connectar (ej., /notls)',
	'LBL_FOUND_OPTIMUM_MSG'				=> '<br>Opcions òptimes trobades.	Pressioni el següent botó per aplicar-les a la seva safata de correu.',
	'LBL_EMAIL_INBOUND_TITLE'			=> 'Opcions del Correu Entrant',
	'LBL_EMAIL_OUTBOUND_TITLE'			=> 'Opcions del Correu Sortint',
	'LBL_LOGIN'							=> 'Nom d´Usuari',
	'LBL_MAILBOX_DEFAULT'				=> 'INBOX',
	'LBL_MAILBOX_SSL_DESC'				=> 'Usar SSL en la connexió. Si no funciona, comprovi que la seva instal·lació de PHP inclou "--with-imap-ssl" en la configuració.',
	'LBL_MAILBOX'						=> 'Carpeta Monitoritzada',
	'LBL_MAILBOX_TYPE'					=> 'Accions Possibles',
	'LBL_MARK_READ_NO'					=> 'Correu marcat com a borrador després d´importació',
	'LBL_MARK_READ_YES'					=> 'Correu deixat al servidor després d´importació',
	'LBL_MARK_READ_DESC'				=> 'Importar i marcar missatges com llegits al servidor de correu; no esborrar.',
	'LBL_MARK_READ'						=> 'Deixar missatges en el servidor',
	'LBL_ONLY_SINCE_NO'					=> 'No. Comprovar contra tots els correus al servidor de correu.',
	'LBL_ONLY_SINCE_YES'				=> 'Si.',
	'LBL_ONLY_SINCE_DESC'				=> 'PHP no pot distingir entre missatges Nous i No Llegits quan s´usa POP3.	﻿Marqui aquesta opció per buscar missatges des de l´última vegada que la safata va ser comprovada.	Això millorarà significativament el rendiment si el seu servidor de correu no suporta IMAP.',
	'LBL_ONLY_SINCE'					=> 'Importar només des de l´última comprovació',
	'LBL_PORT'							=> 'Port del servidor de correu',
	'LBL_SERVER_OPTIONS'				=> 'Configuració Avançada',
	'LBL_SERVER_TYPE'					=> 'Protocol del servidor de correu',
	'LBL_SERVER_URL'					=> 'Direcció del servidor de correu',
	'LBL_SSL'							=> 'Usar SSL',
	'LBL_SSL_DESC'						=> 'Usar Secure Socket Layer per connectar-se al seu servidor de correu.',
	'LBL_TEST_BUTTON_KEY'				=> 't',
	'LBL_TEST_BUTTON_TITLE'				=> 'Comprovar [Alt+T]',
	'LBL_TEST_SETTINGS'					=> 'Comprovar Configuració',
	'LBL_TEST_SUCCESSFUL'				=> 'Connexió completada amb èxit.',
	'LBL_TLS_DESC'						=> 'Usar Transport Layer Security per connectar-se al servidor de correu - sol usi això si el seu servidor de correu suporta aquest protocol.',
	'LBL_TLS'							=> 'Usar TLS',
	'LBL_TOGGLE_ADV'					=> 'Mostrar Avançat',
    'LBL_OWN_OPPS'                      => 'No hi han oportunitats',
	'LBL_EXTERNAL_AUTH_ONLY'			=> 'Authenticate this user only through',
	'LBL_ONLY'							=> 'Only',
    'LBL_OWN_OPPS_DESC'                 => 'Marqui aquesta opció si a aquest usuari no se li assignaran oportunitats. Pot ignorar aquest indicador per a usuaris que no són gerents i no estan involucrats en activitats de vendes. Usat pel mòdul d´Objectius.',
// END INBOUND EMAIL STRINGS
	'LBL_LDAP_ERROR' => 'Error de LDAP: Si us plau, contacti amb un administrador',
	'LBL_LDAP_EXTENSION_ERROR' => 'Error de LDAP: Les extensions no s´han carregat',

// PROJECT RESOURCES STRINGS
	'LBL_USER_HOLIDAY_SUBPANEL_TITLE' => 'Festius del Usuari',
	'LBL_RESOURCE_NAME' => 'Nom',
	'LBL_RESOURCE_TYPE' => 'Tipus',

	'LBL_PDF_SETTINGS'  =>  'PDF Settings',
	'LBL_PDF_PAGE_FORMAT'  =>  'Page Format',
	'LBL_PDF_PAGE_FORMAT_TEXT'  =>  'The format used for pages',
	'LBL_PDF_PAGE_ORIENTATION'  =>  'Page Orientation',
	'LBL_PDF_PAGE_ORIENTATION_TEXT'  =>  '',
	'LBL_PDF_PAGE_ORIENTATION_P'  =>  'Portrait',
	'LBL_PDF_PAGE_ORIENTATION_L'  =>  'Landscape',
	'LBL_PDF_MARGIN_HEADER'  =>  'Header Margin',
	'LBL_PDF_MARGIN_HEADER_TEXT'  =>  '',
	'LBL_PDF_MARGIN_FOOTER'  =>  'Footer Margin',
	'LBL_PDF_MARGIN_FOOTER_TEXT'  =>  '',
	'LBL_PDF_MARGIN_TOP'  =>  'Top Margin',
	'LBL_PDF_MARGIN_TOP_TEXT'  =>  '',
	'LBL_PDF_MARGIN_BOTTOM'  =>  'Bottom Margin',
	'LBL_PDF_MARGIN_BOTTOM_TEXT'  =>  '',
	'LBL_PDF_MARGIN_LEFT'  =>  'Left Margin',
	'LBL_PDF_MARGIN_LEFT_TEXT'  =>  '',
	'LBL_PDF_MARGIN_RIGHT'  =>  'Right Margin',
	'LBL_PDF_MARGIN_RIGHT_TEXT'  =>  '',
	'LBL_PDF_FONT_NAME_MAIN'  =>  'Font for Header and Body',
	'LBL_PDF_FONT_NAME_MAIN_TEXT'  =>  'The selected font will be applied to the text in the header and the body of the PDF Document',
	'LBL_PDF_FONT_SIZE_MAIN'  =>  'Main Font Size',
	'LBL_PDF_FONT_SIZE_MAIN_TEXT'  =>  '',
	'LBL_PDF_FONT_NAME_DATA'  =>  'Font for Footer',
	'LBL_PDF_FONT_NAME_DATA_TEXT'  =>  'The selected font will be applied to the text in the footer of the PDF Document',
	'LBL_PDF_FONT_SIZE_DATA'  =>  'Data Font Size',
	'LBL_PDF_FONT_SIZE_DATA_TEXT'  =>  '',
	'LBL_LAST_ADMIN_NOTICE' => 'You have selected yourself. You cannot change the User Type or Status of yourself.',
	'LBL_MAIL_SMTPUSER'	=> 'Usuari SMTP',
	'LBL_MAIL_SMTPPASS'	=> 'Clau de pas SMTP',
	'LBL_MAIL_SMTPSERVER' => 'Servidor SMTP',
	'LBL_SMTP_SERVER_HELP' => 'This SMTP Mail Server can be used for outgoing mail. Provide a username and password for your email account in order to use the mail server.',
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'The administator has not yet configured the default outbound account.  Unable to send test email.',
    'LBL_MAIL_SMTPAUTH_REQ'				=> 'Usar autentificació SMTP?',
	'LBL_MAIL_SMTPPASS'					=> 'Clau de pas SMTP',
	'LBL_MAIL_SMTPPORT'					=> 'Port SMTP',
	'LBL_MAIL_SMTPSERVER'				=> 'Servidor SMTP',
	'LBL_MAIL_SMTPUSER'					=> 'Usuari SMTP',
	'LBL_MAIL_SMTPTYPE'                => 'SMTP Server Type:',
	'LBL_MAIL_SMTP_SETTINGS'           => 'SMTP Server Specification',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Choose your Email provider:',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Yahoo! Mail Password:',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Yahoo! Mail ID:',
	'LBL_GMAIL_SMTPPASS'					=> 'Gmail Password:',
	'LBL_GMAIL_SMTPUSER'					=> 'Gmail Email Address:',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Exchange Password:',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Exchange Username:',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Exchange Server Port:',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Exchange Server:',
        'LBL_OK'   =>'Acceptar',
        'LBL_CANCEL'    => 'Cancel·lar',
        'LBL_DELETE_USER' => 'Delete User',
	// Wizard
	'LBL_WIZARD_TITLE' => 'User Wizard',
    'LBL_WIZARD_WELCOME_TAB' => 'Benvingut',
    'LBL_WIZARD_WELCOME_TITLE' => 'Welcome to SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Click <b>Next</b> to configure a few basic settings for using Sugar.',
    'LBL_WIZARD_WELCOME_NOSMTP' => 'Click <b>Next</b> to configure a few basic settings for using Sugar.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Següent',
    'LBL_WIZARD_BACK_BUTTON' => 'Enrera',
    'LBL_WIZARD_SKIP_BUTTON' => 'Skip',
    'LBL_WIZARD_FINISH_BUTTON' => 'Fi',
    'LBL_WIZARD_FINISH_TAB' => 'Fi',
    'LBL_WIZARD_FINISH_TITLE' => 'You are ready to use SuiteCRM!',

    'LBL_WIZARD_FINISH' => 'Click <b>Finish</b> below to save your settings and to begin using SuiteCRM. For more information on using SuiteCRM:<br /><br />
<table cellpadding=0 cellspacing=0>
<tr><td><!--not_in_theme!-->Visit www.suitecrm.com <img src=include/images/sugarcrm_login.png style="margin-right: 5px;"></td><td><a href="http://www.suitecrm.com/" target="_blank"><b>Suite CRM</b></a></td></tr>
</table>',

    'LBL_WIZARD_FINISH1' => 'What would you like to do next?',
    'LBL_WIZARD_FINISH2' => 'Start Using SuiteCRM',
    'LBL_WIZARD_FINISH3' => 'Import Data ',
    'LBL_WIZARD_FINISH4' => 'Import data from external sources into the application.',
    'LBL_WIZARD_FINISH5' => 'Create Users',
    'LBL_WIZARD_FINISH6' => 'Create new user accounts for people to use to access the application.',
    'LBL_WIZARD_FINISH7' => 'View and Manage Application Settings',
    'LBL_WIZARD_FINISH8' => 'Manage advanced settings, including default application settings.',
    'LBL_WIZARD_FINISH9' => 'Configure the Application ',
    'LBL_WIZARD_FINISH10' => 'Use Studio to create and manage application fields and layouts.',
    'LBL_WIZARD_FINISH11' => 'Visit SuiteCRM Site ',
    'LBL_WIZARD_FINISH12' => 'Find training materials and classes that will help you get started as a system administrator or end user of the application.',
    'LBL_WIZARD_FINISH14' => 'Documentation ',
    'LBL_WIZARD_FINISH15' => 'Product Guides and Release Notes ',
    'LBL_WIZARD_FINISH16' => 'Knowledge Base ',
    'LBL_WIZARD_FINISH17' => 'Tips from SuiteCRM',
    'LBL_WIZARD_FINISH18' => 'Forums ',
    'LBL_WIZARD_FINISH19' => 'Forums dedicated to the Sugar Community to discuss topics of interest with each other and with SugarCRM Developers ',
    'LBL_WIZARD_FINISH2DESC' => 'Go directly to the application Home page.',
    'LBL_WIZARD_PERSONALINFO' => 'Your Information',
    'LBL_WIZARD_LOCALE' => 'Your Locale',
    'LBL_WIZARD_SMTP' => 'Your Email Account',
    'LBL_WIZARD_PERSONALINFO_DESC' => 'Provide information about yourself. The information you provide about yourself will be visible to other Sugar users.<br />Fields marked with <span class="required">*</span> are required.',
    'LBL_WIZARD_LOCALE_DESC' => 'Specify your time zone and how you would like dates, currencies and names to appear in Sugar.',
    'LBL_WIZARD_SMTP_DESC' => 'Provide your email account username and password for the default outbound email server.',
	'LBL_EAPM_SUBPANEL_TITLE' => 'External Accounts',

	'LBL_EDITLAYOUT' => 'Editar Diseny' /*for 508 compliance fix*/,
	'LBL_HELP' => 'Ajuda' /*for 508 compliance fix*/,
	'LBL_CHECKMARK' => 'Checkmark' /*for 508 compliance fix*/,
	'LBL_THEMEPREVIEW' => 'Vista Preliminar' /*for 508 compliance fix*/,

    'LBL_OAUTH_TOKENS' => 'OAuth Tokens',
    'LBL_OAUTH_TOKENS_SUBPANEL_TITLE' => 'OAuth Access Tokens',

    //For export labels
    'LBL_MODIFIED_USER_ID' => 'Modified User ID',
    'LBL_PHONE_HOME' => 'Phone Home',
    'LBL_PHONE_MOBILE' => 'Mòbil',
    'LBL_PHONE_WORK' => 'Phone Work',
    'LBL_PHONE_OTHER' => 'Phone Other',
    'LBL_PHONE_FAX' => 'Fax',
    'LBL_PORTAL_ONLY' => 'Usuari Només de Portal',
    'LBL_SHOW_ON_EMPLOYEES' => 'Display Employee Record',
    'LBL_IS_GROUP' => 'Is Group',
    'LBL_EXPORT_CREATED_BY' => 'Created By ID',

    'LBL_DATE_MODIFIED' => 'Última Modificació',
    'LBL_DATE_ENTERED' => 'Data Creació',
    'LBL_DELETED' => 'Esborrat',
    'LBL_HIDEOPTIONS' => 'Hide Options',
    'LBL_SHOWOPTIONS' => 'Show Options',

    'LBL_SUITE_SUPERCHARGED' => 'Supercharged by SuiteCRM',
    'LBL_SUITE_POWERED_BY' => 'Powered By SugarCRM',
    'LBL_SUITE_TOP' => 'Back to top',
    'LBL_SUITE_PRINT' => 'Print this page',
    'LBL_SUITE_DESC1' => 'SuiteCRM has been written and assembled by SalesAgility, one of the worlds most knowledgeable SugarCRM consultancies.',
    'LBL_SUITE_DESC2' => 'SuiteCRM is intended to deliver on the promise of SugarCRM - a freely available open source CRM project that combines great functionality, with community and commitment.',
    'LBL_SUITE_DESC3' => 'There will be no licenced software as part of the project managed by SalesAgility. All the code is free. All the code is available for free download. There is no hidden agenda to charge for access to the code. It is and always will be free and open source. There will be no paid-for versions.',
    'LBL_QUICK_ACCOUNT' => 'Nou Compte',
    'LBL_QUICK_CONTACT' => 'Nou Contacte',
    'LBL_QUICK_OPPORTUNITY' => 'Nova Oportunitat',
    'LBL_QUICK_LEAD' => 'Nou Client Potencial',
    'LBL_QUICK_DOCUMENT' => 'Crear Document',
    'LBL_QUICK_CALL' => 'Programar Trucada',
    'LBL_QUICK_TASK' => 'Nova Tasca',

    'LBL_ENABLE_NOTIFICATIONS' => 'Enable Desktop Notifications',

); // END STRINGS DEFS

?>