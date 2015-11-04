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




$mod_strings = array (
	'LBL_MODULE_NAME' => 'Projecte',
	'LBL_MODULE_TITLE' => 'Projecte Inici',
	'LBL_SEARCH_FORM_TITLE' => 'Cerca de Projectes',
    'LBL_LIST_FORM_TITLE' => 'Llista de Projectes',
    'LBL_HISTORY_TITLE' => 'Històrial',

	'LBL_ID' => 'ID:',
	'LBL_DATE_ENTERED' => 'Data Creació:',
	'LBL_DATE_MODIFIED' => 'Data Modificació:',
	'LBL_ASSIGNED_USER_ID' => 'Assignat a:',
    'LBL_ASSIGNED_USER_NAME' => 'Assignat a:',
	'LBL_MODIFIED_USER_ID' => 'Modificat per:',
	'LBL_CREATED_BY' => 'Creat per:',
	'LBL_TEAM_ID' => 'Equip:',
	'LBL_NAME' => 'Nom:',
    'LBL_PDF_PROJECT_NAME' => 'Nom de Projecte:',
	'LBL_DESCRIPTION' => 'Descripció:',
	'LBL_DELETED' => 'Esborrat:',
    'LBL_DATE' => 'Data:',
	'LBL_DATE_START' => 'Data Inici:',
	'LBL_DATE_END' => 'Data Fi:',
	'LBL_PRIORITY' => 'Prioritat:',
    'LBL_STATUS' => 'Estat:',
    'LBL_MY_PROJECTS' => 'Els Meus Projectes',
    'LBL_MY_PROJECT_TASKS' => 'Les Meves Tasques de Projecte',
    
	'LBL_TOTAL_ESTIMATED_EFFORT' => 'Treball Estimat (h):',
	'LBL_TOTAL_ACTUAL_EFFORT' => 'Treball Total Real (h):',

	'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_DAYS' => 'Dies',
	'LBL_LIST_ASSIGNED_USER_ID' => 'Assignat a',
	'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Treball Total Estimat (h)',
	'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Treball Total Real (h)',
    'LBL_LIST_UPCOMING_TASKS' => 'Tasques de Proper Venciment (1 Setmana)',
    'LBL_LIST_OVERDUE_TASKS' => 'Tasques Vençudes',
    'LBL_LIST_OPEN_CASES' => 'Casos Oberts',
    'LBL_LIST_END_DATE' => 'Data Fi',
    'LBL_LIST_TEAM_ID' => 'Equip',
    

	'LBL_PROJECT_SUBPANEL_TITLE' => 'Projectes',
	'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Tasques de Projecte',
	'LBL_CONTACT_SUBPANEL_TITLE' => 'Contactes',
	'LBL_ACCOUNT_SUBPANEL_TITLE' => 'Comptes',
	'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Oportunitats',
	'LBL_QUOTE_SUBPANEL_TITLE' => 'Presupuests',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Nou Projecte',

	'CONTACT_REMOVE_PROJECT_CONFIRM' => 'Està segur de que vol esborrar aquest contacte d\'aquest projecte?',

	'LNK_NEW_PROJECT'	=> 'Crear Projecte',
	'LNK_PROJECT_LIST'	=> 'Llista de Projectes',
	'LNK_NEW_PROJECT_TASK'	=> 'Crear Tasca de Projecte',
	'LNK_PROJECT_TASK_LIST'	=> 'Tasques de Projecte',
	
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Proyectes',
	'LBL_ACTIVITIES_TITLE'=>'Activitats',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Activitats',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Històrial',
	'LBL_QUICK_NEW_PROJECT'	=> 'Nou Projecte',
	
	'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Tasques de Projecte',
	'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactes',
	'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Comptes',
	'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunitats',
    'LBL_CASES_SUBPANEL_TITLE' => 'Casos',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Incidències',
    'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Productes',
    

    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Nom de Tasca',
    'LBL_DURATION' => 'Duració',
    'LBL_ACTUAL_DURATION' => 'Duració Real',
    'LBL_START' => 'Inici',
    'LBL_FINISH' => 'Fi',
    'LBL_PREDECESSORS' => 'Anteriors',
    'LBL_PERCENT_COMPLETE' => '% Completat',
    'LBL_MORE'  => 'Més...',

    'LBL_PERCENT_BUSY' => '% Ocupat',
    'LBL_TASK_ID_WIDGET' => 'id',
    'LBL_TASK_NAME_WIDGET' => 'description',
    'LBL_DURATION_WIDGET' => 'duration',
    'LBL_START_WIDGET' => 'date_start',
    'LBL_FINISH_WIDGET' => 'date_finish',
    'LBL_PREDECESSORS_WIDGET' => 'predecessors_',
    'LBL_PERCENT_COMPLETE_WIDGET' => 'percent_complete',
    'LBL_EDIT_PROJECT_TASKS_TITLE'=> 'Editar Tasques de Projecte',
    
    'LBL_OPPORTUNITIES' => 'Oportunitats',
	'LBL_LAST_WEEK' => 'Anterior',
	'LBL_NEXT_WEEK' => 'Següent',
	'LBL_PROJECTRESOURCES_SUBPANEL_TITLE' => 'Recursos del projecte',
	'LBL_PROJECTTASK_SUBPANEL_TITLE' => 'Tasques de Projecte',
	'LBL_HOLIDAYS_SUBPANEL_TITLE' => 'Vacances',
	'LBL_PROJECT_INFORMATION' => 'Visió general del projecte',
	'LBL_EDITLAYOUT' => 'Editar Diseny' /*for 508 compliance fix*/,
	'LBL_INSERTROWS' => 'Inserir files' /*for 508 compliance fix*/,

);
?>