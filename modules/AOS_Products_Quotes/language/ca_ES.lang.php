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
    'LBL_ASSIGNED_TO_ID' => 'ID Usuari Assignat',
    'LBL_ASSIGNED_TO_NAME' => 'Assignat a',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data de Creació',
    'LBL_DATE_MODIFIED' => 'Última Modificació',
    'LBL_MODIFIED' => 'Modificat Per',
    'LBL_MODIFIED_NAME' => 'Modificat per Nom',
    'LBL_CREATED' => 'Creat Per',
    'LBL_DESCRIPTION' => 'Nota',
    'LBL_DELETED' => 'Esborrat',
    'LBL_NAME' => 'Nom',
    'LBL_NUMBER' => 'Número', //PR 3296
    'LBL_CREATED_USER' => 'Creat Per Usuari',
    'LBL_MODIFIED_USER' => 'Modificat per Usuari',
    'LBL_LIST_FORM_TITLE' => 'Llista de productes cotitzats',
    'LBL_MODULE_NAME' => 'Línies d\'articles',
    'LBL_MODULE_TITLE' => 'Productes cotitzats: Inici',
    'LBL_HOMEPAGE_TITLE' => 'Els meus productes cotitzats',
    'LNK_NEW_RECORD' => 'Crear cotització d\'un producte',
    'LNK_LIST' => 'Cotitzacions de productes',
    'LBL_SEARCH_FORM_TITLE' => 'Buscar Presupostos de Productos',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Veure Històrial',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activitats',
    'LBL_NEW_FORM_TITLE' => 'Nou Presupost de Producte',
    'LBL_PRODUCT_NAME' => 'Nom',
    'LBL_PRODUCT_NUMBER' => 'Número', //PR 3296
    'LBL_PRODUCT_QTY' => 'Quantitat',
    'LBL_PRODUCT_COST_PRICE' => 'Preu de cost',
    'LBL_PRODUCT_LIST_PRICE' => 'Llistat de preus',
    'LBL_PRODUCT_UNIT_PRICE' => 'Preu unitari',
    'LBL_PRODUCT_DISCOUNT' => 'Descompte',
    'LBL_PRODUCT_DISCOUNT_AMOUNT' => 'Import de descompte',
    'LBL_PART_NUMBER' => 'Codi Producte',
    'LBL_PRODUCT_DESCRIPTION' => 'Descripció',
    'LBL_DISCOUNT' => 'Tipus de descompte',
    'LBL_VAT_AMT' => 'Quantitat d\'impost',
    'LBL_VAT' => 'Impost',
    'LBL_PRODUCT_TOTAL_PRICE' => 'Preu total',
    'LBL_PRODUCT_NOTE' => 'Nota',
    'Quote' => '',
    'LBL_FLEX_RELATE' => 'Relacionat amb',
    'LBL_PRODUCT' => 'Producte',

    'LBL_SERVICE_MODULE_NAME' => 'Serveis',
    'LBL_SERVICE_NUMBER' => 'Número', //PR 3296
    'LBL_LIST_NUM' => 'Número',
    'LBL_PARENT_ID' => 'Id pare',
    'LBL_GROUP_NAME' => 'Grup',
    'LBL_GROUP_DESCRIPTION' => 'Descripció', //PR 3296
    'LBL_PRODUCT_COST_PRICE_USDOLLAR' => 'Preu de cost (moneda per defecte)',
    'LBL_PRODUCT_LIST_PRICE_USDOLLAR' => 'Llista de preus (moneda per defecte)',
    'LBL_PRODUCT_UNIT_PRICE_USDOLLAR' => 'Preu unitari (moneda per defecte)',
    'LBL_PRODUCT_TOTAL_PRICE_USDOLLAR' => 'Preu total (moneda per defecte)',
    'LBL_PRODUCT_DISCOUNT_USDOLLAR' => 'Descompte (moneda per defecte)',
    'LBL_PRODUCT_DISCOUNT_AMOUNT_USDOLLAR' => 'Import de descompte (moneda per defecte)',
    'LBL_VAT_AMT_USDOLLAR' => 'Import d\'impost (moneda per defecte)',
    'LBL_PRODUCTS_SERVICES' => 'Producte / Servei',
    'LBL_PRODUCT_ID' => 'ID del producte',

    'LBL_AOS_CONTRACTS' => 'Contractes',
    'LBL_AOS_INVOICES' => 'Factures',
    'LBL_AOS_PRODUCTS' => 'Productes',
    'LBL_AOS_QUOTES' => 'Pressupostos',
);