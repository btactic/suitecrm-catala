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

    'LBL_ADD_MODULE' => 'Afegir',
    'LBL_ADDRCITY' => 'Ciutat',
    'LBL_ADDRCOUNTRY' => 'País',
    'LBL_ADDRCOUNTRY_ID' => 'Id País',
    'LBL_ADDRSTATEPROV' => 'Estat',
    'LBL_ADMINISTRATION' => 'Administració de Conectors',
    'LBL_ADMINISTRATION_MAIN' => 'Configuració de Conectors',
    'LBL_AVAILABLE' => 'Disponible',
    'LBL_BACK' => '< Enrera',
    'LBL_COMPANY_ID' => 'Id Companyia',
	'LBL_CONFIRM_CONTINUE_SAVE' => 'Alguns camps requerits s’han deixat en blanc.  ¿Vol continuar i desar els canvis?',
    'LBL_CONNECTOR' => 'Conector',
    'LBL_CONNECTOR_FIELDS' => 'Camps del Conector',
    'LBL_DATA' => 'Datdes',
    'LBL_DEFAULT' => 'Per Defecte',
    'LBL_DELETE_MAPPING_ENTRY' => 'Està segur de que desitja esborrar aquesta entrada?',
    'LBL_DISABLED' => 'Deshabilitat',
    'LBL_DUNS' => 'DUNS',
    'LBL_EMPTY_BEANS' => 'No s’ha trobat cap ocurrencia per els criteris de cerca.',
    'LBL_ENABLED' => 'Habilitat',
    'LBL_EXTERNAL' => 'Permet als usuaris crear registres de comptes externs a aquest connector.',
    'LBL_EXTERNAL_SET_PROPERTIES' => 'Per utilitzar aquest connector, les propietats també s’han d’establir a la pàgina de configuració de connectors.',
    'LBL_FINSALES' => 'Vendes Anuals',
    'LBL_MARKET_CAP' => 'Cap. Bursàtil',
    'LBL_MERGE' => 'Combinar',
    'LBL_MODIFY_DISPLAY_TITLE' => 'Habilitar Conectors',
    'LBL_MODIFY_DISPLAY_DESC' => 'Seleccioni quins mòduls estàn habilitats per cada conector.',
    'LBL_MODIFY_DISPLAY_PAGE_TITLE' => 'Configuració de Conectors: Habilitar Conectors',
    'LBL_MODULE_FIELDS' => 'Camps del Mòdul',
    'LBL_MODIFY_MAPPING_TITLE' => 'Mapejar Camps del Conector',
    'LBL_MODIFY_MAPPING_DESC' => 'Mapejar camps del conector a camps del mòdul per determinar quines dades del conector poden ser vistos i combinats junt amb els registres del mòdul.',
    'LBL_MODIFY_MAPPING_PAGE_TITLE' => 'Configuració de Conectors: Mapejar Camps del Conector',
    'LBL_MODIFY_PROPERTIES_TITLE' => 'Establir Propietats del Conector',
    'LBL_MODIFY_PROPERTIES_DESC' => 'Configurar les propietats de cada conector, incloent les URLs i les claus del API.',
    'LBL_MODIFY_PROPERTIES_PAGE_TITLE' => 'Configuració de Conectors: Establir les Propietats del Conector',
    'LBL_MODIFY_SEARCH_TITLE' => 'Administrar Cerca de Conectors',
	'LBL_MODIFY_SEARCH' => 'Cerca',
    'LBL_MODIFY_SEARCH_DESC' => 'Seleccioni els camps del connector a utilitzar per la cerca de dades de cada mòdul.',
    'LBL_MODIFY_SEARCH_PAGE_TITLE' => 'Configuració de Connectors: Administrar Cerca de Connectors',
	'LBL_MODULE_NAME' => 'Conectors',
    'LBL_NO_PROPERTIES' => 'No hi ha propietats configurables per aquest conector.',
    'LBL_PARENT_DUNS' => 'DUNS Parent',
    'LBL_PREVIOUS' => '< Enrera',
    'LBL_QUOTE' => 'Pressupost',
    'LBL_RECNAME' => 'Nom de la Companyia',
    'LBL_RESET_TO_DEFAULT' => 'Reestablir valors Per Defecte',
    'LBL_RESET_TO_DEFAULT_CONFIRM' => 'Està segur de que vol restablir la configuració per defecte?',
    'LBL_RESET_BUTTON_TITLE' => 'Restablir',
	'LBL_RESULT_LIST' => 'Llista de Dades',
    'LBL_RUN_WIZARD' => 'Executar Assistent',
    'LBL_SAVE' => 'Desar',
	'LBL_SEARCHING_BUTTON_LABEL' => 'Buscant...',
    'LBL_SHOW_IN_LISTVIEW' => 'Mostrar en Vista de Llista de Combinació',
    'LBL_SMART_COPY' => 'Copia Inteligent',
    'LBL_SUMMARY' => 'Resumen',
    'LBL_STEP1' => 'Cercar i Veure Dades',
    'LBL_STEP2' => 'Combinar Registres amb',
    'LBL_TEST_SOURCE' => 'Prova de Conector',
    'LBL_TEST_SOURCE_FAILED' => 'Error en Prova',
    'LBL_TEST_SOURCE_RUNNING' => 'Realizant Prova...',
    'LBL_TEST_SOURCE_SUCCESS' => 'Prova Exitosa',
    'LBL_TITLE' => 'Combinació de Dades',
    'LBL_ULTIMATE_PARENT_DUNS' => 'DUNS Parent Final',

    'ERROR_RECORD_NOT_SELECTED' => 'Error: Si us plau, seleccioni un registre de la llista abans de continuar.',
    'ERROR_EMPTY_WRAPPER' => 'Error: Ha estat impossible recuperar la instància adaptadora (wrapper) per l’origen [{$source_id}]',
    'ERROR_EMPTY_SOURCE_ID' => 'Error: El Id d’origen no ha estat especificat o està buit.',
    'ERROR_EMPTY_RECORD_ID' => 'Error: El Id de registre no ha estat especifícat o està buit.',
    'ERROR_NO_ADDITIONAL_DETAIL' => 'Error: No s’han trobat més detalls per el registre.',
    'ERROR_NO_SEARCHDEFS_DEFINED' => 'No s’han habilitat mòduls per aquest conector.  Seleccioni un mòdul per aquest conector en la pàgina Habilitar Conectors.',
    'ERROR_NO_SEARCHDEFS_MAPPED' => 'Error: No hi ha cap connector habilitat amb camps de cerca definits.',
    'ERROR_NO_SOURCEDEFS_FILE' => 'Error: No s’ha trobat cap arxiu sourcedefs.php.',
    'ERROR_NO_SOURCEDEFS_SPECIFIED' => 'Error: No s’han especificat orígens d’on obtenir dades.',
    'ERROR_NO_CONNECTOR_DISPLAY_CONFIG_FILE' => 'Error: No s’han mapejat conectors a aquest mòdul.',
    'ERROR_NO_SEARCHDEFS_MAPPING' => 'Error: No s’han definit camps de cerca per al mòdul i el connector.  Si us plau, contacti amb el administrador del sistema.',
    'ERROR_NO_FIELDS_MAPPED' => 'Error: Té que mapejar com a mínim un camp del Conector a un camp de mòdul per cada entrada de mòdul.',
    'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => 'Error: No s’ha mapejat cap camp de mòdul per ser mostrat com part dels resultats.  Si us plau, contacti amb el administrador del sistema.',
    'LBL_TWITTER_USER' => 'Usuari de Twitter',
    'LBL_FACEBOOK_USER' => 'Usuari de Facebook',
);

?>