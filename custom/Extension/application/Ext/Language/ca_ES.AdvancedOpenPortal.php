<?php
/**
 *
 * @package Advanced OpenPortal
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
 * @author Salesagility Ltd <support@salesagility.com>
 */


$app_list_strings['moduleList']['AOP_AOP_Case_Events'] = 'Case Events';
$app_list_strings['moduleList']['AOP_AOP_Case_Updates'] = 'Case Updates';
$app_list_strings['moduleList']['AOP_Case_Events'] = 'Case Events';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Case Updates';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '========== Please reply above this line ==========';

$app_list_strings['case_state_dom'] =
  array (
      'Open' => 'Obert',
      'Closed' => 'Tancat',
  );
$app_list_strings['case_state_default_key'] = 'Open';
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
  array (
      'Open_New' => 'Nou',
      'Open_Assigned' => 'Assignat',
      'Closed_Closed' => 'Tancat',
      'Open_Pending Input' => 'Pendent d\'Informació',
      'Closed_Rejected' => 'Rebutjat',
      'Closed_Duplicate' => 'Duplicat',
  );
$app_list_strings['contact_portal_user_type_dom'] =
    array (
        'Single' => 'Usuari individual',
        'Account' => 'Compta d\'usuari',
    );
$app_list_strings['dom_email_distribution_for_auto_create']=array (
    'AOPDefault' => 'Utilitza el AOP predeterminat',
    'singleUser' => 'Usuari individual',
    'roundRobin' => 'Round-Robin',
    'leastBusy' => 'Menys-Ocupat',
    'random' => 'Aleatori ',
);