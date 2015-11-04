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
  'LBL_MODULE_NAME' => 'Oportunitats',
  'LBL_MODULE_TITLE' => 'Oportunitats: Inici',
  'LBL_SEARCH_FORM_TITLE' => 'Cerca d\'oportunitats',
  'LBL_VIEW_FORM_TITLE' => 'Vista d\'Oportunitats',
  'LBL_LIST_FORM_TITLE' => 'Llista d\'Oportunitats',
  'LBL_OPPORTUNITY_NAME' => 'Nom Oportunitat:',
  'LBL_OPPORTUNITY' => 'Oportunitat:',
  'LBL_NAME' => 'Nom Oportunitat',
  'LBL_INVITEE' => 'Contactes',
  'LBL_CURRENCIES' => 'Monedes',
  'LBL_LIST_OPPORTUNITY_NAME' => 'Nom',
  'LBL_LIST_ACCOUNT_NAME' => 'Compte',
  'LBL_LIST_AMOUNT' => 'Quantitat',
  'LBL_LIST_AMOUNT_USDOLLAR' => 'Quantitat',
  'LBL_LIST_DATE_CLOSED' => 'Data Tancament',
  'LBL_LIST_SALES_STAGE' => 'Etapa Vendes',
  'LBL_ACCOUNT_ID'=>'ID Compte',
  'LBL_CURRENCY_ID'=>'ID Moneda',
  'LBL_CURRENCY_NAME'=>'Nom de Moneda',
  'LBL_CURRENCY_SYMBOL'=>'Símbol de Moneda',
//DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
  'UPDATE' => 'Oportunitat - Actualitzar Moneda',
  'UPDATE_DOLLARAMOUNTS' => 'Actualitzar Quantitats Dólar EEUU',
  'UPDATE_VERIFY' => 'Verificar Quantitats',
  'UPDATE_VERIFY_TXT' => 'Verificar que els valors de les quantitats en les oportunitats son números decimals vàlids amb només caràcters numérics (0-9) i decimals(.)',
  'UPDATE_FIX' => 'Corregir Quantitats',
  'UPDATE_FIX_TXT' => 'Intenta corregir qualsevol quantitat no vàlida creant un número decimal vàlid a partir de la quantitat actual. Abans faci una còpia de seguretat de totes les quantitats modificades en el camp de la base de dades amount_backup. Si una vegada la correcció detecta problemes, no torni a realitzar aquesta operació sense restaurar els valors previs desde la còpia de seguretat, ja que si no, tornaria a escriure al damunt de la còpia de seguretat amb noves dades no vàlides.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Actualitza les quantitats en Dòlars EEUU per les oportunitats basades en el canvi actual de monedes. Aquest valor es fa servir per calcular gràfics i vistes de llistes de quantitats monétaries.',
  'UPDATE_CREATE_CURRENCY' => 'Creació de nova moneda:',
  'UPDATE_VERIFY_FAIL' => 'Error de verificació de el registre:',
  'UPDATE_VERIFY_CURAMOUNT' => 'Quantitat actual:',
  'UPDATE_VERIFY_FIX' => 'La correcció donaría',
  'UPDATE_INCLUDE_CLOSE' => 'Registres tancats inclòsos',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Nova quantitat:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Nova moneda:',
  'UPDATE_DONE' => 'Fet',
  'UPDATE_BUG_COUNT' => 'Problemes detectats i suposadament corregits:',
  'UPDATE_BUGFOUND_COUNT' => 'Problemes detectats:',
  'UPDATE_COUNT' => 'Registres actualitzats:',
  'UPDATE_RESTORE_COUNT' => 'Registres amb quantitats restaurades:',
  'UPDATE_RESTORE' => 'Restaurar Quantitats',
  'UPDATE_RESTORE_TXT' => 'Restaura els valors de les quantitas desde la còpia de seguretat creada durant la correcció.',
  'UPDATE_FAIL' => 'No s\'ha pogut actualitzar - ',
  'UPDATE_NULL_VALUE' => 'La quantitat es NULL, establint-la a 0 -',
  'UPDATE_MERGE' => 'Unificar Monedes',
  'UPDATE_MERGE_TXT' => 'Unifica múltiples monedes en una única moneda. Si detecta que hi ha múltiples registres de tipus moneda per la mateixa moneda, pot unificar-les. Això també unificará les monedes per la resta de mòduls.',
  'LBL_ACCOUNT_NAME' => 'Compte:',
  'LBL_AMOUNT' => 'Quantitat:',
  'LBL_AMOUNT_USDOLLAR' => 'Quantitat en Dòlars EEUU:',
  'LBL_CURRENCY' => 'Moneda:',
  'LBL_DATE_CLOSED' => 'Data de tancament:',
  'LBL_TYPE' => 'Tipus:',
  'LBL_CAMPAIGN' => 'Campanya:',
  'LBL_NEXT_STEP' => 'Proper pas:',
  'LBL_LEAD_SOURCE' => 'Presa de contacte:',
  'LBL_SALES_STAGE' => 'Etapa de vendes:',
  'LBL_PROBABILITY' => 'Probabilitat (%):',
  'LBL_DESCRIPTION' => 'Descripció:',
  'LBL_DUPLICATE' => 'Possible oportunitat duplicada',
  'MSG_DUPLICATE' => 'El registre per l\'oportunitat que va a crear podria ser un duplicat d\'un altre registre d\'oportunitat existent. Els registres d\'oportunitat amb noms similars es llisten a continuació.<br>Faci clic a Desar per continuar amb la creació d\'aquesta oportunitat, o en Cancel·lar per tornar al mòdul sense crear l\'oportunitat.',
  'LBL_NEW_FORM_TITLE' => 'Nou Compte',
  'LNK_NEW_OPPORTUNITY' => 'Nova Oportunitat',
  'LNK_OPPORTUNITY_LIST' => 'Oportunitats',
  'ERR_DELETE_RECORD' => 'Ha d\'especificar un número de registre a eliminar.',
  'LBL_TOP_OPPORTUNITIES' => 'Les Meves Principals Oportunitats',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Està segur de que vol eliminar aquest contacte de l\'oportunitat?',
	'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Està segur de que vol eliminar aquesta oportunitat del projecte?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Oportunitats',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Activitats',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Històrial',
    'LBL_RAW_AMOUNT'=>'Quantitat Bruta',
	
    'LBL_LEADS_SUBPANEL_TITLE' => 'Clients Potencials',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactes',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projectes',
	'LBL_ASSIGNED_TO_NAME' => 'Assignat a:',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuari Assignat',
  'LBL_MY_CLOSED_OPPORTUNITIES' => 'Les Meves Oportunitats Tancades',
  'LBL_TOTAL_OPPORTUNITIES' => 'Total d\'Oportunitats',
  'LBL_CLOSED_WON_OPPORTUNITIES' => 'Oportunitats Guanyades',
  'LBL_ASSIGNED_TO_ID' =>'Assignada a ID',
  'LBL_CREATED_ID'=>'Creada per ID',
  'LBL_MODIFIED_ID'=>'Modificada per ID',
  'LBL_MODIFIED_NAME'=>'Modificada per Usuari',
    'LBL_CREATED_USER' => 'Usuari Creat',
    'LBL_MODIFIED_USER' => 'Usuari Modificat',
  'LBL_CAMPAIGN_OPPORTUNITY' => 'Campanya',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projectes',
  'LABEL_PANEL_ASSIGNMENT' => 'Assignació',
  'LNK_IMPORT_OPPORTUNITIES' => 'Importar oportunitats',
  'LBL_EDITLAYOUT' => 'Editar Diseny' /*for 508 compliance fix*/,
  //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'ID Campanya',
    'LBL_OPPORTUNITY_TYPE' => 'Tipus d\'oportunitat',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Nom d\'usuari assignat',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Id de l\'usuari assignat',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificat Per ID',
    'LBL_EXPORT_CREATED_BY' => 'Creat per Id',
    'LBL_EXPORT_NAME'=>'Nom',

  // SNIP
  'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Correus electrònics de contactes relacionats',
);

?>
