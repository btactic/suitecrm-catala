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
	// DON'T CONVERT THESE THEY ARE MAPPINGS
	'db_name' => 'LBL_LIST_ACCOUNT_NAME',
	'db_website' => 'LBL_LIST_WEBSITE',
	'db_billing_address_city' => 'LBL_LIST_CITY',
	// END DON'T CONVERT
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
	// Dashlet Categories
	'LBL_CHARTS'    => 'Gràfics',
	'LBL_DEFAULT' => 'Vistes',
	'LBL_MISC'    => 'Altres',
	'LBL_UTILS'    => 'Utilitats',
	// END Dashlet Categories

	'ACCOUNT_REMOVE_PROJECT_CONFIRM' => 'Està segur que desitja treure aquest compte del projecte?',
	'ERR_DELETE_RECORD' => 'Ha d´especificar un número de registre per eliminar el compte.',
	'LBL_ACCOUNT_INFORMATION' => 'Informació del Compte',
	'LBL_ACCOUNT_NAME' => 'Nom:',
	'LBL_ACCOUNT' => 'Compte:',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Activitats',
	'LBL_ADDRESS_INFORMATION' => 'Direccions',
	'LBL_ANNUAL_REVENUE' => 'Compte Bancari:',
	'LBL_ANY_ADDRESS' => 'Qualsevol direcció:',
	'LBL_ANY_EMAIL' => 'Qualsevol correu:',
	'LBL_ANY_PHONE' => 'Qualsevol telèfon:',
	'LBL_ASSIGNED_TO_NAME' => 'Assignat a:',
	'LBL_ASSIGNED_TO_ID' => 'Usuari Assignat:',
	'LBL_BILLING_ADDRESS_CITY' => 'Ciutat de cobrament:',
	'LBL_BILLING_ADDRESS_COUNTRY' => 'País de cobrament:',
	'LBL_BILLING_ADDRESS_POSTALCODE' => 'CP de cobrament:',
	'LBL_BILLING_ADDRESS_STATE' => 'Estat/Província de cobrament:',
	'LBL_BILLING_ADDRESS_STREET_2' =>'Carrer de cobrament 2',
	'LBL_BILLING_ADDRESS_STREET_3' =>'Carrer de cobrament 3',
	'LBL_BILLING_ADDRESS_STREET_4' =>'Carrer de cobrament 4',
	'LBL_BILLING_ADDRESS_STREET' => 'Carrer de cobrament:',
	'LBL_BILLING_ADDRESS' => 'Direcció de cobrament:',
	'LBL_BUG_FORM_TITLE' => 'Comptes',
	'LBL_BUGS_SUBPANEL_TITLE' => 'Incidències',
	'LBL_CALLS_SUBPANEL_TITLE' => 'Trucades',
	'LBL_CAMPAIGN_ID' => 'ID Campanya',
	'LBL_CASES_SUBPANEL_TITLE' => 'Casos',
	'LBL_CITY' => 'Ciutat:',
	'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactes',
	'LBL_COUNTRY' => 'País:',
	'LBL_DATE_ENTERED' => 'Creat:',
	'LBL_DATE_MODIFIED' => 'Modificat:',
	'LBL_MODIFIED_ID'=>'Modificat Per Id:',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Comptes',
	'LBL_DESCRIPTION_INFORMATION' => 'Informació addicional',
	'LBL_DESCRIPTION' => 'Descripció:',
	'LBL_DUPLICATE' => 'Possible compte duplicat',
	'LBL_EMAIL' => 'Correu:',
	'LBL_EMAIL_OPT_OUT' => 'Refusar Correu:',
	'LBL_EMAIL_ADDRESSES' => 'Direccions de Correu:',
	'LBL_EMPLOYEES' => 'Empleats:',
	'LBL_FAX' => 'Fax:',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Històrial',
	'LBL_HOMEPAGE_TITLE' => 'Els Meus Comptes',
	'LBL_INDUSTRY' => 'Industria:',
	'LBL_INVALID_EMAIL'=>'Correu no vàlid:',
	'LBL_INVITEE' => 'Contactes',
	'LBL_LEADS_SUBPANEL_TITLE' => 'Clients Potencials',
	'LBL_LIST_ACCOUNT_NAME' => 'Nom',
	'LBL_LIST_CITY' => 'Ciutat',
	'LBL_LIST_CONTACT_NAME' => 'Contacte',
	'LBL_LIST_EMAIL_ADDRESS' => 'Correu',
	'LBL_LIST_FORM_TITLE' => 'Llista de Comptes',
	'LBL_LIST_PHONE' => 'Telèfon',
	'LBL_LIST_STATE' => 'Estat/Província',
	'LBL_LIST_WEBSITE' => 'Lloc Web',
	'LBL_MEETINGS_SUBPANEL_TITLE' => 'Reunions',
	'LBL_MEMBER_OF' => 'Membre de:',
	'LBL_MEMBER_ORG_FORM_TITLE' => 'Organitzacions Membre',
	'LBL_MEMBER_ORG_SUBPANEL_TITLE'=>'Organitzacions Membre',
	'LBL_MODULE_NAME' => 'Comptes',
	'LBL_MODULE_TITLE' => 'Comptes: Inici',
	'LBL_MODULE_ID'=> 'Comptes',
	'LBL_NAME'=>'Nom:',
	'LBL_NEW_FORM_TITLE' => 'Nou Compte',
	'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunitats',
	'LBL_OTHER_EMAIL_ADDRESS' => 'Correu alternatiu:',
	'LBL_OTHER_PHONE' => 'Tel. alternatiu:',
	'LBL_OWNERSHIP' => 'Propietari:',
	'LBL_PARENT_ACCOUNT_ID' => 'ID Compte Origen',
	'LBL_PHONE_ALT' => 'Telèfon alternatiu:',
	'LBL_PHONE_FAX' => 'Fax oficina:',
	'LBL_PHONE_OFFICE' => 'Telèfon oficina:',
	'LBL_PHONE' => 'Telèfon:',
	'LBL_POSTAL_CODE' => 'Còdig postal:',
	'LBL_PRODUCTS_TITLE'=>'Productes',
	'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projectes',
	'LBL_PUSH_BILLING' => 'Emissió de Factures',
	'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'Copiar a Contactes',
	'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'Copiar...',
	'LBL_PUSH_SHIPPING' => 'Emissió d´Enviaments',
	'LBL_RATING' => 'Rating:',
	'LBL_SAVE_ACCOUNT' => 'Guardar Compte',
	'LBL_SEARCH_FORM_TITLE' => 'Recerca de Comptes',
	'LBL_SHIPPING_ADDRESS_CITY' => 'Ciutat d´enviament:',
	'LBL_SHIPPING_ADDRESS_COUNTRY' => 'País d´enviament:',
	'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'CP d´enviament:',
	'LBL_SHIPPING_ADDRESS_STATE' => 'Estat/Província d´enviament:',
	'LBL_SHIPPING_ADDRESS_STREET_2' => 'Carrer d´enviament 2',
	'LBL_SHIPPING_ADDRESS_STREET_3' => 'Carrer d´enviament 3',
	'LBL_SHIPPING_ADDRESS_STREET_4' => 'Carrer d´enviament 4',
	'LBL_SHIPPING_ADDRESS_STREET' => 'Carrer d´enviament:',
	'LBL_SHIPPING_ADDRESS' => 'Direcció d´enviament:',
	'LBL_SIC_CODE' => 'CIF/DNI:',
	'LBL_STATE' => 'Estat/Província:',
	'LBL_TASKS_SUBPANEL_TITLE' => 'Tasques',
	'LBL_TEAMS_LINK'=>'Equips',
	'LBL_TICKER_SYMBOL' => 'Sigla bursátil:',
	'LBL_TYPE' => 'Tipus:',
	'LBL_USERS_ASSIGNED_LINK'=>'Usuaris Assignats',
	'LBL_USERS_CREATED_LINK'=>'Creat per Usuaris',
	'LBL_USERS_MODIFIED_LINK'=>'Usuaris Modificats',
	'LBL_VIEW_FORM_TITLE' => 'Vista del Compte',
	'LBL_WEBSITE' => 'Web:',
	'LBL_CREATED_ID'=>'Creat Per Id',
	'LBL_CAMPAIGNS' =>'Campanyes',
	'LNK_ACCOUNT_LIST' => 'Comptes',
	'LNK_NEW_ACCOUNT' => 'Nou Compte',
	'LNK_IMPORT_ACCOUNTS' => 'Import Accounts',
	'MSG_DUPLICATE' => 'El registre per al compte que crearà podria ser un duplicat d´un altre registre de compte existent. Els registres de compte amb noms similars es llisten a continuació.<br>Faci clic en Guardar per continuar amb la creació d´aquest compte, o en Cancel·lar per tornar al mòdul sense crear el compte.',
	'MSG_SHOW_DUPLICATES' => 'El registre per al compte que crearà podria ser un duplicat d´un altre registre de compte existent. Els registres de compte amb noms similars es llisten a continuació.<br>Faci clic en Guardar per continuar amb la creació d´aquest compte, o en Cancel·lar per tornar al mòdul sense crear el compte.',
	'NTC_COPY_BILLING_ADDRESS' => 'Copiar direcció de cobrament a direcció d´enviament',
	'NTC_COPY_BILLING_ADDRESS2' => 'Copiar a direcció d´enviament',
	'NTC_COPY_SHIPPING_ADDRESS' => 'Copiar direcció d´enviament a direcció de cobrament',
	'NTC_COPY_SHIPPING_ADDRESS2' => 'Copiar a direcció de cobrament',
	'NTC_DELETE_CONFIRMATION' => 'Està segur que desitja eliminar aquest registre?',
	'NTC_REMOVE_ACCOUNT_CONFIRMATION' => 'Està segur que desitja treure aquest registre?',
	'NTC_REMOVE_MEMBER_ORG_CONFIRMATION' => 'Està segur que desitja treure aquest registre com a organització membre?',
	'LBL_ASSIGNED_USER_NAME' => 'Assignat a:',
    'LBL_PROSPECT_LIST' => 'Públic Objectiu',
    'LBL_ACCOUNTS_SUBPANEL_TITLE'=>'Comptes',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projectes',
	'LBL_COPY' => 'Copy' /*for 508 compliance fix*/,
    //For export labels
    'LBL_ACCOUNT_TYPE' => 'Account Type',
    'LBL_CAMPAIGN_ID' => 'ID Campanya',
    'LBL_PARENT_ID' => 'Parent ID',
    'LBL_PHONE_ALTERNATE' => 'Phone Alternate',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Assigned User Name',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Related Contacts\' Emails',
);
?>
