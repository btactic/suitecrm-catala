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
	'LBL_USER_CALENDARS' => 'Calendaris d’Usuari',
	'LBL_SHARED' => 'Compartit',
	'LBL_PREVIOUS_SHARED' => 'Anterior',
	'LBL_NEXT_SHARED' => 'Següent',
	'LBL_SHARED_CAL_TITLE' => 'Calendari Compartit',
	'LBL_USERS' => 'Usuari',
	'LBL_REFRESH' => 'Actualitzar',
	'LBL_EDIT_USERLIST' => 'Llista d’Usuaris',
	'LBL_SELECT_USERS' => 'Seleccioni usuaris per a la visualització de calendari',
	'LBL_FILTER_BY_TEAM' => 'Filtrat d’usuaris per equip:',
	'LBL_ASSIGNED_TO_NAME' => 'Assignat a',
	'LBL_DATE' => 'Data i Hora d’Inici',
	'LBL_CREATE_MEETING' => 'Programar Reunió',
	'LBL_CREATE_CALL' => 'Programar Trucada',
	'LBL_HOURS_ABBREV' => 'h',
	'LBL_MINS_ABBREV' => 'm',


	'LBL_YES' => 'Si',
	'LBL_NO' => 'No',
	'LBL_SETTINGS' => 'Configuració',
	'LBL_CREATE_NEW_RECORD' => 'Crear activitat',
	'LBL_LOADING' => 'Carregant...',
	'LBL_SAVING' => 'Guardant...',
	'LBL_SENDING_INVITES' => 'Guardant i enviant invitacions...',
	'LBL_CONFIRM_REMOVE' => 'Està segur que vol eliminar aquest registre?',
	'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Està segur que vol eliminar tots els registres recurrents?',
	'LBL_EDIT_RECORD' => 'Editar activitat',
	'LBL_ERROR_SAVING' => 'Error al desar',
	'LBL_ERROR_LOADING' => 'Error al carregar',
	'LBL_GOTO_DATE' => 'Anar a la data',
	'NOTICE_DURATION_TIME' => 'El temps de durada te que ser major que 0',
	'LBL_STYLE_BASIC' => 'Bàsic',
	'LBL_STYLE_ADVANCED' => 'Avançat',

	'LBL_INFO_TITLE' => 'Detalls Addicionals',
	'LBL_INFO_DESC' => 'Descripció',
	'LBL_INFO_START_DT' => 'Data d’inici',
	'LBL_INFO_DUE_DT' => 'Data Venciment',
	'LBL_INFO_DURATION' => 'Durada',
	'LBL_INFO_NAME' => 'Assumpte',
	'LBL_INFO_RELATED_TO' => 'Relacionat amb',

	'LBL_NO_USER' => 'No hi ha resultats pel camp: Assignat a',
	'LBL_SUBJECT' => 'Assumpte',
	'LBL_DURATION' => 'Durada',
	'LBL_STATUS' => 'Estat',
	'LBL_DATE_TIME' => 'Data i hora',


	'LBL_SETTINGS_TITLE' => 'Configuració',
	'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Mostra els intervals de temps en setmanes i dies:',
	'LBL_SETTINGS_TIME_STARTS'=>'Hora d’inici:',
	'LBL_SETTINGS_TIME_ENDS'=>'Hora de finalització:',
	'LBL_SETTINGS_CALLS_SHOW' => 'Veure trucades:',
	'LBL_SETTINGS_TASKS_SHOW' => 'Veure tasques:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Mostrar reunions, trucades i tasques realitzades:',

	'LBL_SAVE_BUTTON' => 'Desar',
	'LBL_DELETE_BUTTON' => 'Eliminar',
	'LBL_APPLY_BUTTON' => 'Aplicar',
	'LBL_SEND_INVITES' => 'Enviar Invitacions',
	'LBL_CANCEL_BUTTON' => 'Cancel·lar',
	'LBL_CLOSE_BUTTON' => 'Tancar',

	'LBL_GENERAL_TAB' => 'Detalls',
	'LBL_PARTICIPANTS_TAB' => 'Assistents',
	'LBL_REPEAT_TAB' => 'Repetició',

	'LBL_REPEAT_TYPE' => 'Repetir',
	'LBL_REPEAT_INTERVAL' => 'Cada',
	'LBL_REPEAT_END' => 'Últim',
	'LBL_REPEAT_END_AFTER' => 'Desprès de',
	'LBL_REPEAT_OCCURRENCES' => 'Ocurrències',
	'LBL_REPEAT_END_BY' => 'Per',
	'LBL_REPEAT_DOW' => 'En',
	'LBL_REPEAT_UNTIL' => 'Repetir fins',
	'LBL_REPEAT_COUNT' => 'Nombre de recurrències',
	'LBL_REPEAT_LIMIT_ERROR' => 'La seva solicitud anava a crear més de $limit reunions.',

	'LBL_EDIT_ALL_RECURRENCES' => 'Editeu totes les recurrències',
	'LBL_REMOVE_ALL_RECURRENCES' => 'Eliminar totes les recurrències',

	'LBL_DATE_END_ERROR' => 'La data de finalització és anterior a la data d’inici',
	'ERR_YEAR_BETWEEN' => 'Ho sentim, el calendari no suporta l’any que heu introduït<br>L’any ha d’estar comprés entre 1970 i 2037',
	'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: no està definit en aquesta vista',
    'LBL_NO_ITEMS_MOBILE' => 'El seu calendari està lliure aquesta setmana.',

);

$mod_list_strings = array(
	'dom_cal_weekdays'=>
		array(
			"dg.",
			"dl.",
			"dt.",
			"dc.",
			"dj.",
			"dv.",
			"ds.",
		),
	'dom_cal_weekdays_long'=>
		array(
			"diumenge",
			"dilluns",
			"dimarts",
			"dimecres",
			"dijous",
			"divendres",
			"dissabte",
		),
	'dom_cal_month'=>
		array(
			"",
			"gen.",
			"febr.",
			"març",
			"abr.",
			"maig",
			"juny",
			"jul.",
			"ag.",
			"set.",
			"act.",
			"nov.",
			"des.",
		),
	'dom_cal_month_long'=>
		array(
			"",
			"gener",
			"febrer",
			"març",
			"abril",
			"maig",
			"juny",
			"juliol",
			"agost",
			"setembre",
			"octubre",
			"novembre",
			"desembre",
		),
);
?>
