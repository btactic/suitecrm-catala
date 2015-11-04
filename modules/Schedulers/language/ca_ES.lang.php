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
global $sugar_config;

$mod_strings = array (
// OOTB Scheduler Job Names:
'LBL_OOTB_WORKFLOW'		=> 'Tasques de Procés de Workflow',
'LBL_OOTB_REPORTS'		=> 'Executar Tasques Programadas de Generació d\'Informes',
'LBL_OOTB_IE'			=> 'Comprovar Safata d\'Entrada',
'LBL_OOTB_BOUNCE'		=> 'Executar Procés Nocturn de Correus de Campanya Rebotats',
'LBL_OOTB_CAMPAIGN'		=> 'Executar Procés Nocturn de Campanyes de Correu Massiu',
'LBL_OOTB_PRUNE'		=> 'Truncar Base de dades al Inici de Mes',
'LBL_OOTB_TRACKER'		=> 'Prune Tracker Tables',
'LBL_OOTB_SUGARFEEDS'   => 'Prune SuiteCRM Feed Tables',
'LBL_OOTB_LUCENE_INDEX' => 'Realitzar l\'índex de Lucene',
'LBL_OOTB_OPTIMISE_INDEX' => 'Optimitzar l\'índex AOD',
'LBL_UPDATE_TRACKER_SESSIONS' => 'Actualitzar la taula tracker_sessions',
'LBL_OOTB_SEND_EMAIL_REMINDERS'	=> 'Executar les notificacions de recordatori per correu electrònic',
'LBL_OOTB_CLEANUP_QUEUE' => 'Netejar la cua de tasques',
'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Eliminar documents del sistema de fitxers',

// List Labels
'LBL_LIST_JOB_INTERVAL' => 'Interval:',
'LBL_LIST_LIST_ORDER' => 'Programadors:',
'LBL_LIST_NAME' => 'Programador:',
'LBL_LIST_RANGE' => 'Ranc:',
'LBL_LIST_REMOVE' => 'Eliminar:',
'LBL_LIST_STATUS' => 'Estat:',
'LBL_LIST_TITLE' => 'Llista de programacions:',
'LBL_LIST_EXECUTE_TIME' => 'S\'executarà a: ',
// human readable:
'LBL_SUN'		=> 'Diumenge',
'LBL_MON'		=> 'Dilluns',
'LBL_TUE'		=> 'Dimarts',
'LBL_WED'		=> 'Dimecres',
'LBL_THU'		=> 'Dijous',
'LBL_FRI'		=> 'Divendres',
'LBL_SAT'		=> 'Dissabte',
'LBL_ALL'		=> 'Cada dia',
'LBL_EVERY_DAY'	=> 'Cada dia',
'LBL_AT_THE'	=> 'Al',
'LBL_EVERY'		=> 'Cada',
'LBL_FROM'		=> 'des de',
'LBL_ON_THE'	=> 'en el',
'LBL_RANGE'		=> ' a ',
'LBL_AT' 		=> 'a',
'LBL_IN'		=> 'en',
'LBL_AND'		=> 'i',
'LBL_MINUTES'	=> 'minuts',
'LBL_HOUR'		=> 'hores',
'LBL_HOUR_SING'	=> 'hora',
'LBL_MONTH'		=> 'mes',
'LBL_OFTEN'		=> 'Tan sovint com sigui possible.',
'LBL_MIN_MARK'	=> 'marca per minut',


// crontabs
'LBL_MINS' => 'min',
'LBL_HOURS' => 'hrs',
'LBL_DAY_OF_MONTH' => 'data',
'LBL_MONTHS' => 'mes',
'LBL_DAY_OF_WEEK' => 'dia',
'LBL_CRONTAB_EXAMPLES' => 'El que es mostra a sobre utilitza la notació estàndard de crontab.',
'LBL_CRONTAB_SERVER_TIME_PRE' =>  'Les especificacions del cron s\'executen basant-se en la configuració de la zona horària del servidor (',
'LBL_CRONTAB_SERVER_TIME_POST' => '). Si us plau, especifiqui el temps d\'execució del programador en conseqüència.',
// Labels
'LBL_ALWAYS' => 'Sempre',
'LBL_CATCH_UP' => 'Executar si falla',
'LBL_CATCH_UP_WARNING' => 'des-sel·leccioni de l\'execució d\'aquesta tasca pot durar més d\'un moment.',
'LBL_DATE_TIME_END' => 'Data i hora de finalització',
'LBL_DATE_TIME_START' => 'Data i hora d\'inici',
'LBL_INTERVAL' => 'Interval',
'LBL_JOB' => 'Treball',
'LBL_JOB_URL' => 'URL del treball',
'LBL_LAST_RUN' => 'Última execució exitosa',
'LBL_MODULE_NAME' => 'Planificador de SuiteCRM',
'LBL_MODULE_TITLE' => 'Planificacions',
'LBL_NAME' => 'Nom del treball',
'LBL_NEVER' => 'Mai',
'LBL_NEW_FORM_TITLE' => 'Nova programació',
'LBL_PERENNIAL' => 'perpetu',
'LBL_SEARCH_FORM_TITLE' => 'Cerca de programació',
'LBL_SCHEDULER' => 'Programador:',
'LBL_STATUS' => 'Estat',
'LBL_TIME_FROM' => 'Actiu des de',
'LBL_TIME_TO' => 'Actiu fins',
'LBL_WARN_CURL_TITLE' => 'Avís cURL:',
'LBL_WARN_CURL' => 'Advertència:',
'LBL_WARN_NO_CURL' => 'Aquest sistema no té les llibreries cURL habilitades / compilades en el mòdul de PHP (--with-curl=/ruta/a/libreria_curl). Si us plau, contacteu amb l\'administrador per resoldre el problema. Sense la funcionalitat que proveeix cURL, el planificador no pot utilitzar fils amb les seves tasques.',
'LBL_BASIC_OPTIONS' => 'Configuració bàsica',
'LBL_ADV_OPTIONS'		=> 'Opcions avançades',
'LBL_TOGGLE_ADV' => 'Mostrar les opcions avançades',
'LBL_TOGGLE_BASIC' => 'Mostrar opcions bàsiques',
// Links
'LNK_LIST_SCHEDULER' => 'Programadors',
'LNK_NEW_SCHEDULER' => 'Crear programador',
'LNK_LIST_SCHEDULED' => 'Tasques programades',
// Messages
'SOCK_GREETING' => '"\n Aquest és la interfície d\'usuari per al Servei de Planificació de SuiteCRM. \n [Ordres de dimoni disponibles: començar | reinici | apagat | estat] \n Per sortir, escriviu" quit ". Per aturar el servei "apagat". \n"',
'ERR_DELETE_RECORD' => 'Ha d\'especificar un número de registre per eliminar la programació.',
'ERR_CRON_SYNTAX' => 'Sintaxi de cron invàlida',
'NTC_DELETE_CONFIRMATION' => 'Està segur de que desitja eliminar el registre?',
'NTC_STATUS' => 'Estableixi l\'estat a Inactiu per a treure aquesta programació de les llistes desplegables de la selecció de Programador',
'NTC_LIST_ORDER' => 'Estableixi l\'ordre en que aquesta planificació apareixerà a les llistes desplegables de la secció del Planificador',
'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Per a configurar el calendari de Windows',
'LBL_CRON_INSTRUCTIONS_LINUX' => 'Per a configurar el Crontab',
'LBL_CRON_LINUX_DESC' => 'Nota: per a executar els programadors de SuiteCRM, afegeixi la següent línia al seu fitxer crontab:',
'LBL_CRON_WINDOWS_DESC' => 'Nota: Per executar els planificadors de SuiteCRM, creeu un fitxer de procés per lots a executar utilitzant els Tasques Programades de Windows. L\'arxiu de procés per lots hauria de contenir les següents comandes:',
'LBL_NO_PHP_CLI' => 'si el teu host no té habilitat PHP binarim pots utilitzar wget o curl per llançar els teus treballs.',
// Subpanels
'LBL_JOBS_SUBPANEL_TITLE'	=> 'Registre de tasques',
'LBL_EXECUTE_TIME'			=> 'Hora d\'Execució',

//jobstrings
'LBL_REFRESHJOBS' => 'Actualitzar treballs',
'LBL_POLLMONITOREDINBOXES' => 'Comprovar comptes de correu entrant',
'LBL_PERFORMFULLFTSINDEX' => 'Cerca de text complet a l\'Índex del sistema',

'LBL_RUNMASSEMAILCAMPAIGN' => 'Executar Procés Nocturn de Campanyes de Correu Massiu',
'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Executar Procés Nocturn de Correus de Campanya Rebotats',
'LBL_PRUNEDATABASE' => 'Truncar Base de dades al Inici de Mes',
'LBL_TRIMTRACKER' => 'Prune Tracker Tables',
'LBL_TRIMSUGARFEEDS'   => 'Prune SuiteCRM Feed Tables',
'LBL_SENDEMAILREMINDERS'=> 'Executar l\'enviament de recordatoris per correu electrònic',
'LBL_CLEANJOBQUEUE' => 'Netejar la cua de treballs',
'LBL_REMOVEDOCUMENTSFROMFS' => 'Eliminar documents del sistema de fitxers',
);
?>
