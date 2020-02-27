<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
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
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
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
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_ASSIGNED_TO_NAME' => 'Administrador de contractes',
    'LBL_CONTRACT_ACCOUNT' => 'Compte',
    'LBL_OPPORTUNITY' => 'Oportunitat',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data de Creació',
    'LBL_DATE_MODIFIED' => 'Última Modificació',
    'LBL_MODIFIED' => 'Modificat Per',
    'LBL_MODIFIED_NAME' => 'Modificat per Nom',
    'LBL_CREATED' => 'Creat Per',
    'LBL_DESCRIPTION' => 'Descripció',
    'LBL_DELETED' => 'Esborrat',
    'LBL_NAME' => 'Títol del contracte',
    'LBL_CREATED_USER' => 'Creat per Usuari',
    'LBL_MODIFIED_USER' => 'Modificat per Usuari',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_FORM_TITLE' => 'Llista de contractes',
    'LBL_MODULE_NAME' => 'Contractes',
    'LBL_MODULE_TITLE' => 'Contractes: Inici',
    'LBL_HOMEPAGE_TITLE' => 'Els meus contractes',
    'LNK_NEW_RECORD' => 'Crear contracte',
    'LNK_LIST' => 'Veure contractes',
    'LBL_SEARCH_FORM_TITLE' => 'Cercar contractes',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Veure Històrial',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activitats',
    'LBL_NEW_FORM_TITLE' => 'Nou contracte',
    'LBL_CONTRACT_NAME' => 'Nom del contracte',
    'LBL_REFERENCE_CODE ' => 'Codi de referència',
    'LBL_START_DATE' => 'Data d\'inici',
    'LBL_END_DATE' => 'Data fi',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Valor del contracte',
    'LBL_STATUS' => 'Estat',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Data de la signatura del client',
    'LBL_COMPANY_SIGNED_DATE' => 'Data de la signatura de la companyia',
    'LBL_RENEWAL_REMINDER_DATE' => 'Data de recordatori de renovació',
    'LBL_CONTRACT_TYPE' => 'Tipus de contracte',
    'LBL_CONTACT' => 'Contacte',
    'LBL_ADD_GROUP' => 'Agregar grup',
    'LBL_DELETE_GROUP' => 'Eliminar grup',
    'LBL_GROUP_NAME' => 'Nom del grup',
    'LBL_GROUP_TOTAL' => 'Total del grup',
    'LBL_PRODUCT_QUANITY' => 'Quantitat',
    'LBL_PRODUCT_NAME' => 'Producte',
    'LBL_PART_NUMBER' => 'Codi Producte',
    'LBL_PRODUCT_NOTE' => 'Nota',
    'LBL_PRODUCT_DESCRIPTION' => 'Descripció',
    'LBL_LIST_PRICE' => 'Llista',
    'LBL_DISCOUNT_AMT' => 'Descompte',
    'LBL_UNIT_PRICE' => 'Preu de venda',
    'LBL_TOTAL_PRICE' => 'Total',
    'LBL_VAT' => 'Impost',
    'LBL_VAT_AMT' => 'Quantitat d\'impost',
    'LBL_SERVICE_NAME' => 'Servei',
    'LBL_SERVICE_LIST_PRICE' => 'Llista',
    'LBL_SERVICE_PRICE' => 'Preu de venda',
    'LBL_SERVICE_DISCOUNT' => 'Descompte',
    'LBL_LINE_ITEMS' => 'Línies d\'articles',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotal',
    'LBL_DISCOUNT_AMOUNT' => 'Descompte',
    'LBL_TAX_AMOUNT' => 'Impost',
    'LBL_SHIPPING_AMOUNT' => 'Enviament',
    'LBL_TOTAL_AMT' => 'Total',
    'LBL_GRAND_TOTAL' => 'Gran total',
    'LBL_SHIPPING_TAX' => 'Impost sobre l\'enviament',
    'LBL_SHIPPING_TAX_AMT' => 'Impost sobre l\'enviament',
    'LBL_ADD_PRODUCT_LINE' => 'Afegir línea de producte',
    'LBL_ADD_SERVICE_LINE' => 'Afegir línia de servei',
    'LBL_PRINT_AS_PDF' => 'Imprimir com a PDF',
    'LBL_EMAIL_PDF' => 'Enviar PDF per correu electrònic',
    'LBL_PDF_NAME' => 'Contracte',
    'LBL_EMAIL_NAME' => 'Contracte per',
    'LBL_NO_TEMPLATE' => 'ERROR\nNo s\'han trobat plantilles. Si no ha creat una plantilla de contracte, vagi al mòdul de plantilles PDF i creïn una',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Valor del contracte (moneda per defecte)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotal (moneda per defecte)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Descompte (moneda per defecte)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Impost (moneda per defecte)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Enviament (moneda per defecte)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (moneda per defecte)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Despesa d\'enviament (moneda per defecte)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Gran total (moneda per defecte)',

    'LBL_CALL_ID' => 'Identificador de trucada',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Grups de línies d\'articles ',
    'LBL_AOS_PRODUCT_QUOTES' => 'Pressupostos de Productes',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Pressupostos: contractes',
);