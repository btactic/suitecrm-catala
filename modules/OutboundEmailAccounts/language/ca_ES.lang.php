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
    'LBL_ASSIGNED_TO_ID' => 'ID Usuari Assignat',
    'LBL_ASSIGNED_TO_NAME' => 'Assignat a',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data de Creació',
    'LBL_DATE_MODIFIED' => 'Última Modificació',
    'LBL_MODIFIED' => 'Modificat Per',
    'LBL_MODIFIED_NAME' => 'Modificat Per Nom',
    'LBL_CREATED' => 'Creat Per',
    'LBL_DESCRIPTION' => 'Descripció',
    'LBL_DELETED' => 'Eliminat',
    'LBL_NAME' => 'Nom',
    'LBL_CREATED_USER' => 'Creat Per Usuari',
    'LBL_MODIFIED_USER' => 'Modificat Per Usuari',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_EDIT_BUTTON' => 'Editar',
    'LBL_REMOVE' => 'Eliminar',
    'LBL_LIST_FORM_TITLE' => 'Llista de comptes d’E-mail sortints',
    'LBL_MODULE_NAME' => 'Comptes d’E-mail sortints',
    'LBL_MODULE_TITLE' => 'Comptes d’E-mail sortints',
    'LBL_HOMEPAGE_TITLE' => 'Els meus comptes d’E-mail sortints',
    'LNK_NEW_RECORD' => 'Crear comptes d’E-mail sortints',
    'LNK_LIST' => 'Vista de compte de correu electrònic sortint',
    'LBL_SEARCH_FORM_TITLE' => 'Cerca comptes d’E-mail sortints',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Veure Històrial',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activitats',
    'LBL_NEW_FORM_TITLE' => 'Noves comptes d’E-mail sortints',
    'LBL_USERNAME' => 'Nom d’usuari',
    'LBL_PASSWORD' => 'Clau de pas',
    'LBL_SMTP_SERVERNAME' => 'Nom del servidor SMTP',
    'LBL_SMTP_AUTH' => 'SMTP Auth',
    'LBL_SMTP_PORT' => 'Port SMTP',
    'LBL_SMTP_PROTOCOL' => 'Protocol SMTP',
    'LBL_EDITVIEW_PANEL1' => 'Configuració del compte',
    'LBL_CHANGE_PASSWORD' => 'Modificar la contrasenya',
    'LBL_SEND_TEST_EMAIL' => 'Enviar correu electrònic de prova',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'L’administrador encara no ha configurat la compta sortint per defecte. No és possible enviar un correu electrònic de prova.',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Utilitzar Autentificació SMTP?',
    'LBL_MAIL_SMTPPASS' => 'Clau de pas SMTP:',
    'LBL_MAIL_SMTPPORT' => 'Port SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'Servidor SMTP:',
    'LBL_MAIL_SMTPUSER' => 'Usuari SMTP:',
    'LBL_MAIL_SMTP_SETTINGS' => 'Especificació del servidor SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Triï el seu proveïdor de correu electrònic:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Contrasenya de Yahoo! Mail:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Id de Yahoo! Mail:',
    'LBL_GMAIL_SMTPPASS' => 'Contrasenya de Gmail:',
    'LBL_GMAIL_SMTPUSER' => 'Direcció de correu electrònic de Gmail:',
    'LBL_EXCHANGE_SMTPPASS' => 'Contrasenya d’Exchange:',
    'LBL_EXCHANGE_SMTPUSER' => 'Nom d’usuari d’Exchange:',
    'LBL_EXCHANGE_SMTPPORT' => 'Port del servidor d’Exchange:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Servidor d’Exchange:',

    'LBL_TYPE' => 'Tipus',
    'LBL_MAIL_SENDTYPE' => 'Mode d’enviament de mail',
    'LBL_MAIL_SMTPSSL' => 'Mail SMTP/SSL',
    'LBL_SMTP_FROM_NAME' => '"De" nom',
    'LBL_SMTP_FROM_ADDR' => '"De" adreça',
);
