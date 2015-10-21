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

	'LBL_MODULE_NAME' => 'Calendari',
	'LBL_MODULE_TITLE' => 'Calendari',
	'LNK_NEW_CALL' => 'Programar Trucada',
	'LNK_NEW_MEETING' => 'Programar Reunió',
	'LNK_NEW_APPOINTMENT' => 'Crear Cita',
	'LNK_NEW_TASK' => 'Crear Tasca',
	'LNK_CALL_LIST' => 'Trucades',
	'LNK_MEETING_LIST' => 'Reunions',
	'LNK_TASK_LIST' => 'Tasques',
	'LNK_VIEW_CALENDAR' => 'Avui',
	'LNK_IMPORT_CALLS' => 'Importar Trucades',
	'LNK_IMPORT_MEETINGS' => 'Importar Reunions',
	'LNK_IMPORT_TASKS' => 'Importar Tasques',
	'LBL_MONTH' => 'Mes',
	'LBL_DAY' => 'Dia',
	'LBL_YEAR' => 'Any',
	'LBL_WEEK' => 'Setmana',
	'LBL_PREVIOUS_MONTH' => 'Mes Anterior',
	'LBL_PREVIOUS_DAY' => 'Dia Anterior',
	'LBL_PREVIOUS_YEAR' => 'Any Anterior',
	'LBL_PREVIOUS_WEEK' => 'Setmana Anterior',
	'LBL_NEXT_MONTH' => 'Mes Següent',
	'LBL_NEXT_DAY' => 'Dia Següent',
	'LBL_NEXT_YEAR' => 'Any Següent',
	'LBL_NEXT_WEEK' => 'Setmana Següent',
	'LBL_AM' => 'AM',
	'LBL_PM' => 'PM',
	'LBL_SCHEDULED' => 'Planificat',
	'LBL_BUSY' => 'Ocupat',
	'LBL_CONFLICT' => 'Conflicte',
	'LBL_USER_CALENDARS' => 'Calendaris d´Usuari',
	'LBL_SHARED' => 'Compartit',
	'LBL_PREVIOUS_SHARED' => 'Anterior',
	'LBL_NEXT_SHARED' => 'Següent',
	'LBL_SHARED_CAL_TITLE' => 'Calendari Compartit',
	'LBL_USERS' => 'Usuari',
	'LBL_REFRESH' => 'Actualitzar',
	'LBL_EDIT_USERLIST' => 'Llista d´Usuaris',
	'LBL_SELECT_USERS' => 'Seleccioni usuaris per a la visualització de calendari',
	'LBL_FILTER_BY_TEAM' => 'Filtrat d´usuaris per equip:',
	'LBL_ASSIGNED_TO_NAME' => 'Assignat a',
	'LBL_DATE' => 'Data i Hora d´Inici',  
	'LBL_CREATE_MEETING' => 'Programar Reunió',
	'LBL_CREATE_CALL' => 'Programar Trucada',
	'LBL_HOURS_ABBREV' => 'h',
	'LBL_MINS_ABBREV' => 'm',


	'LBL_YES' => 'Si',
	'LBL_NO' => 'No',
	'LBL_SETTINGS' => 'Configuració',
	'LBL_CREATE_NEW_RECORD' => 'Create Activity',
	'LBL_LOADING' => 'Loading ......',
	'LBL_SAVING' => 'Saving ......',
	'LBL_SENDING_INVITES' => 'Saving & Sending Invites .....',
	'LBL_CONFIRM_REMOVE' => 'Are you sure you want to remove the record?',
	'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Are you sure you want to remove all recurring records?',
	'LBL_EDIT_RECORD' => 'Edit Activity',
	'LBL_ERROR_SAVING' => 'Error while saving',
	'LBL_ERROR_LOADING' => 'Error while loading',
	'LBL_GOTO_DATE' => 'Goto Date',
	'NOTICE_DURATION_TIME' => 'El temps de durada te que ser major que 0',
	'LBL_STYLE_BASIC' => 'Basic',
	'LBL_STYLE_ADVANCED' => 'Avançat',

	'LBL_INFO_TITLE' => 'Detalls Addicionals',
	'LBL_INFO_DESC' => 'Descripció',
	'LBL_INFO_START_DT' => 'Data d´inici',
	'LBL_INFO_DUE_DT' => 'Data Venciment',
	'LBL_INFO_DURATION' => 'Durada',
	'LBL_INFO_NAME' => 'Assumpte',
	'LBL_INFO_RELATED_TO' => 'Relatiu a',

	'LBL_NO_USER' => 'No match for field: Assigned to',
	'LBL_SUBJECT' => 'Assumpte',
	'LBL_DURATION' => 'Durada',
	'LBL_STATUS' => 'Estat',
	'LBL_DATE_TIME' => 'Date and Time',


	'LBL_SETTINGS_TITLE' => 'Configuració',
	'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Display time slots in Day and Week views:',
	'LBL_SETTINGS_TIME_STARTS'=>'Start time:', 
	'LBL_SETTINGS_TIME_ENDS'=>'End time:', 
	'LBL_SETTINGS_CALLS_SHOW' => 'Show Calls:',
	'LBL_SETTINGS_TASKS_SHOW' => 'Show Tasks:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Show Completed Meetings, Calls and Tasks:',

	'LBL_SAVE_BUTTON' => 'Guardar [Alt+S]',
	'LBL_DELETE_BUTTON' => 'Eliminar',
	'LBL_APPLY_BUTTON' => 'Apply',
	'LBL_SEND_INVITES' => 'Enviar Invitacions',
	'LBL_CANCEL_BUTTON' => 'Cancel·lar',
	'LBL_CLOSE_BUTTON' => 'Tancar',

	'LBL_GENERAL_TAB' => 'Detalls',
	'LBL_PARTICIPANTS_TAB' => 'Assistents',
	'LBL_REPEAT_TAB' => 'Recurrence',	
	
	'LBL_REPEAT_TYPE' => 'Repeat',
	'LBL_REPEAT_INTERVAL' => 'Every',
	'LBL_REPEAT_END' => 'Últim',	
	'LBL_REPEAT_END_AFTER' => 'Desprès de',
	'LBL_REPEAT_OCCURRENCES' => 'recurrences',
	'LBL_REPEAT_END_BY' => 'By',	
	'LBL_REPEAT_DOW' => 'On',	
	'LBL_REPEAT_UNTIL' => 'Repeat Until',
	'LBL_REPEAT_COUNT' => 'Number of recurrences',
	'LBL_REPEAT_LIMIT_ERROR' => 'Your request was going to create more than $limit meetings.',
	
	'LBL_EDIT_ALL_RECURRENCES' => 'Edit All Recurrences',
	'LBL_REMOVE_ALL_RECURRENCES' => 'Delete All Recurrences',

	'LBL_DATE_END_ERROR' => 'End date is before start date',
	'ERR_YEAR_BETWEEN' => 'Sorry, calendar cannot handle the year you requested<br>Year must be between 1970 and 2037',
	'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: not defined for this view',
    'LBL_NO_ITEMS_MOBILE' => 'Your calendar is clear for the week.',

);

$mod_list_strings = array(
	'dom_cal_weekdays'=>
		array(
			"Sun",
			"Mon",
			"Tue",
			"Wed",
			"Thu",
			"Fri",
			"Sat",
		),
	'dom_cal_weekdays_long'=>
		array(
			"Sunday",
			"Monday",
			"Tuesday",
			"Wednesday",
			"Thursday",
			"Friday",
			"Saturday",
		),
	'dom_cal_month'=>
		array(
			"",
			"Jan",
			"Feb",
			"Mar",
			"Apr",
			"May",
			"Jun",
			"Jul",
			"Aug",
			"Sep",
			"Oct",
			"Nov",
			"Dec",
		),
	'dom_cal_month_long'=>
		array(
			"",
			"January",
			"February",
			"March",
			"April",
			"May",
			"June",
			"July",
			"August",
			"September",
			"October",
			"November",
			"December",
		),
);
?>
