<?php
/**
 * Advanced OpenWorkflow, Automating SugarCRM.
 * @package Advanced OpenWorkflow for SugarCRM
 * @copyright SalesAgility Ltd http://www.salesagility.com
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author SalesAgility <info@salesagility.com>
 */


$app_list_strings['moduleList']['AOW_WorkFlow'] = 'Flux de Treball';
$app_list_strings['moduleList']['AOW_Conditions'] = 'Condicions del Flux de Treball';
$app_list_strings['moduleList']['AOW_Processed'] = 'Auditoria de Processos';
$app_list_strings['moduleList']['AOW_Actions'] = 'Accions del Flux de Treball';
$app_list_strings['aow_status_list']['Active'] = 'Actiu';
$app_list_strings['aow_status_list']['Inactive'] = 'Inactiu';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Igual a';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'No igual a';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Més gran que';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Més petit que';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Més gran o igual a';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Més petit o igual a';
$app_list_strings['aow_operator_list']['Contains'] = 'Conté';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Comença amb';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Finalitza amb';
$app_list_strings['aow_operator_list']['is_null'] = 'És Nul';
$app_list_strings['aow_sql_operator_list']['Equal_To'] = '=';
$app_list_strings['aow_sql_operator_list']['Not_Equal_To'] = '!=';
$app_list_strings['aow_sql_operator_list']['Greater_Than'] = '>';
$app_list_strings['aow_sql_operator_list']['Less_Than'] = '<';
$app_list_strings['aow_sql_operator_list']['Greater_Than_or_Equal_To'] = '>=';
$app_list_strings['aow_sql_operator_list']['Less_Than_or_Equal_To'] = '<=';
$app_list_strings['aow_sql_operator_listt']['Contains'] = 'COM';
$app_list_strings['aow_sql_operator_listt']['Starts_With'] = 'COM';
$app_list_strings['aow_sql_operator_listt']['Ends_With'] = 'COM';
$app_list_strings['aow_sql_operator_listt']['is_null'] = 'ÉS NUL';
$app_list_strings['aow_process_status_list']['Complete'] = 'Completat';
$app_list_strings['aow_process_status_list']['Running'] = 'Corrent';
$app_list_strings['aow_process_status_list']['Pending'] = 'Pendent';
$app_list_strings['aow_process_status_list']['Failed'] = 'Fallat';
$app_list_strings['aow_condition_operator_list']['And'] = 'I';
$app_list_strings['aow_condition_operator_list']['OR'] = 'O';
$app_list_strings['aow_condition_type_list']['Value'] = 'Valor';
$app_list_strings['aow_condition_type_list']['Field'] = 'Camp';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Cap Canvi';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'En el Grup de Seguretat';
$app_list_strings['aow_condition_type_list']['Date'] = 'Data';
$app_list_strings['aow_condition_type_list']['Multi'] = 'Un de';
$app_list_strings['aow_action_type_list']['Value'] = 'Valor';
$app_list_strings['aow_action_type_list']['Field'] = 'Camp';
$app_list_strings['aow_action_type_list']['Date'] = 'Data';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Round Robin';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Menys Ocupat';
$app_list_strings['aow_action_type_list']['Random'] = 'Aleatori ';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Valor';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Camp';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Minuts';
$app_list_strings['aow_date_type_list']['hour'] = 'Hores';
$app_list_strings['aow_date_type_list']['day'] = 'Dies';
$app_list_strings['aow_date_type_list']['week'] = 'Setmanes';
$app_list_strings['aow_date_type_list']['month'] = 'Messos';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Hores Laborals';
$app_list_strings['aow_date_options']['now'] = 'Ara';
$app_list_strings['aow_date_options']['today'] = 'Avui';
$app_list_strings['aow_date_options']['field'] = 'Aquest camp';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'Tots els usuaris';
$app_list_strings['aow_assign_options']['role'] = 'Tots els usuaris de rol';
$app_list_strings['aow_assign_options']['security_group'] = 'Tots els usuaris del Grup de Seguretat';
$app_list_strings['aow_email_type_list']['Email Address'] = 'Correu';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Registre de Correu Electrònic';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Camp Relacionat';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Usuari';
$app_list_strings['aow_email_type_list']['Users'] = 'Usuaris';
$app_list_strings['aow_email_to_list']['to'] = 'Per a';
$app_list_strings['aow_email_to_list']['cc'] = 'Cc';
$app_list_strings['aow_email_to_list']['bcc'] = 'Bcc';
$app_list_strings['aow_run_on_list']['All_Records'] = 'Tots els registres';
$app_list_strings['aow_run_on_list']['New_Records'] = 'Nous registres';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Registres modificats';
$app_list_strings['aow_run_when_list']['Always'] = 'Sempre';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Només al desar';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Només al planificador';



