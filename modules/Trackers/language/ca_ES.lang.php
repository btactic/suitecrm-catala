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
		  //Labels for methods in the TrackerReporter.php file that are shown in TrackerDashlet
		  'ShowActiveUsers'      => 'Mostrar Usuaris Actius',
		  'ShowLastModifiedRecords' => 'Últims 10 Registres Modificats',
		  'ShowTopUser' => 'Usuari Més Actiu',
		  'ShowMyModuleUsage' => 'El Meu Us de Mòduls',
		  'ShowMyWeeklyActivities' => 'La Meva Activitat Setmanal',
		  'ShowTop3ModulesUsed' => 'Els Meus 3 Mòduls Més Usats',
		  'ShowLoggedInUserCount' => 'Número d\'Usuaris Actius',
		  'ShowMyCumulativeLoggedInTime' => 'El Meu Temps de Sessió Acumulat (Aquesta Setmana)',
		  'ShowUsersCumulativeLoggedInTime' => 'Temps de Sessió Acumulat de Tots els Usuaris (Aquesta Setmana)',
		  
		  //Column header mapping
		  'action' => 'Acció',
		  'active_users' => 'Número d\'Usuaris Actius',
		  'date_modified' => 'Data de l\'Última Acció',
		  'different_modules_accessed' => 'Número de Mòduls Accedits',
		  'first_name' => 'Nom',
		  'item_id' => 'ID',
		  'item_summary' => 'Nom',
		  'last_action' => 'Data/Hora de l\'Última Acció',
		  'last_name' => 'Cognom',
		  'module_name' => 'Nom de Mòdul',
		  'records_modified' => 'Total de Registres Modificats',
		  'top_module' => 'Mòduls Més Accedits',
		  'total_count' => 'Total de Visites a Pàgines',
		  'total_login_time' => 'Hora (hh:mm:ss)',
		  'user_name' => 'Nom d\'usuari',
		  'users' => 'Usuaris',
		  
		  //Administration related labels
		  'LBL_ENABLE' => 'Habilitat',
		  'LBL_MODULE_NAME_TITLE' => 'Monitoratges',
		  'LBL_MODULE_NAME' => 'Monitoratge',
		  'LBL_TRACKER_SETTINGS' => 'Configuració de Monitoratge',
		  'LBL_TRACKER_QUERIES_DESC' => 'Consultes de Monitoratges',
		  'LBL_TRACKER_QUERIES_HELP' => 'Monitoritzar sentències SQL quan "Registrar consultes lentes" estigui habilitat i el temps d\'execució de la consulta superi el valor del "Temps llindar per a consultes lentes"',
		  'LBL_TRACKER_PERF_DESC' => 'Rendiment de Monitoratge',
		  'LBL_TRACKER_PERF_HELP' => 'Monitoritzar accessos a base de dades, arxius accedits i utilització de memòria',
		  'LBL_TRACKER_SESSIONS_DESC' => 'Sessions de Monitoratge',
		  'LBL_TRACKER_SESSIONS_HELP' => 'Monitoritzar usuaris actius i informació de la sessió dels usuaris',
		  'LBL_TRACKER_DESC' => 'Accions de Monitorització',
		  'LBL_TRACKER_HELP' => 'Monitoritzar visites dels usuaris a pàgines (mòduls i registres accedits) i registres guardats',
		  'LBL_TRACKER_PRUNE_INTERVAL' => 'Número de dies de dades de Monitorització a desar quan el Planificador compacti les taules',
		  'LBL_TRACKER_PRUNE_RANGE' => 'Número de dies',
);
?>