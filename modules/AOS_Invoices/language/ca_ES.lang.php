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
    'LBL_DESCRIPTION' => 'Descripció',
    'LBL_DELETED' => 'Esborrat',
    'LBL_NAME' => 'Títol',
    'LBL_CREATED_USER' => 'Creat per Usuari',
    'LBL_MODIFIED_USER' => 'Modificat per Usuari',
    'ERR_DELETE_RECORD' => 'Ha d’especificar un número de registre per esborrar el compte.',
    'LBL_ACCOUNT_NAME' => 'Títol',
    'LBL_ACCOUNT' => 'Compte:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activitats',
    'LBL_ADDRESS_INFORMATION' => 'Informació d’adreça',
    'LBL_ANNUAL_REVENUE' => 'Ingressos Anuals:',
    'LBL_ANY_ADDRESS' => 'Qualsevol adreça:',
    'LBL_ANY_EMAIL' => 'Qualsevol Correu electrònic:',
    'LBL_ANY_PHONE' => 'Tel. Qualsevol:',
    'LBL_RATING' => 'Puntuació',
    'LBL_ASSIGNED_USER' => 'Usuari',
    'LBL_BILLING_ADDRESS_CITY' => 'Ciutat de facturació:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'País de facturació:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'CP de facturació:',
    'LBL_BILLING_ADDRESS_STATE' => 'Estat/Província de facturació:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Carrer de facturació 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Carrer de facturació 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Carrer de facturació 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Carrer de facturació:',
    'LBL_BILLING_ADDRESS' => 'Direcció facturació:',
    'LBL_ACCOUNT_INFORMATION' => 'Visió general',
    'LBL_CITY' => 'Ciutat:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactes',
    'LBL_COUNTRY' => 'País:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Comptes',
    'LBL_DUPLICATE' => 'Possible compte duplicat',
    'LBL_EMAIL' => 'Correu electrònic:',
    'LBL_EMPLOYEES' => 'Empleats:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Industria:',
    'LBL_LIST_ACCOUNT_NAME' => 'Nom del Compte',
    'LBL_LIST_CITY' => 'Ciutat',
    'LBL_LIST_EMAIL_ADDRESS' => 'Direcció correu electrònic',
    'LBL_LIST_PHONE' => 'Telèfon',
    'LBL_LIST_STATE' => 'Estat',
    'LBL_MEMBER_OF' => 'Membre de:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Organitzacions Membre',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Correu electrònic alternatiu:',
    'LBL_OTHER_PHONE' => 'Tel. Alternatiu:',
    'LBL_OWNERSHIP' => 'Propietari:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID Compte Origen',
    'LBL_PHONE_ALT' => 'Telèfon alternatiu:',
    'LBL_PHONE_FAX' => 'Fax oficina:',
    'LBL_PHONE_OFFICE' => 'Telèfon oficina:',
    'LBL_PHONE' => 'Telèfon:',
    'LBL_POSTAL_CODE' => 'Codi postal:',
    'LBL_SAVE_ACCOUNT' => 'Desar Compte',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Ciutat d’enviament:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'País d’enviament:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'CP d’enviament:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Estat/Província d’enviament:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Carrer d’enviament 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Carrer d’enviament 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Carrer d’enviament 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Carrer d’enviament:',
    'LBL_SHIPPING_ADDRESS' => 'Direcció d’enviament:',
    'LBL_STATE' => 'Estat o regió:',
    'LBL_TICKER_SYMBOL' => 'Sigla bursátil:',
    'LBL_TYPE' => 'Tipus:',
    'LBL_WEBSITE' => 'Web:',
    'LNK_ACCOUNT_LIST' => 'Comptes',
    'LNK_NEW_ACCOUNT' => 'Nou Compte',
    'MSG_DUPLICATE' => 'Crear aquest compte pot crear un compte duplicat. Pot seleccionar un compte de la llista de sota o pot fer clic a Desar per a continuar creant un nou compte amb la informació prèviament ingressada.',
    'MSG_SHOW_DUPLICATES' => 'Crear aquest compte pot crear una compte duplicat. Pot clicar Desar per a continuar creant una nou compte amb la informació prèviament ingressat o pot clicar Cancel·lar.',
    'NTC_DELETE_CONFIRMATION' => 'Està segur de que desitja eliminar el registre?',
    'LBL_LIST_FORM_TITLE' => 'Llista de factures',
    'LBL_MODULE_NAME' => 'Factures',
    'LBL_MODULE_TITLE' => 'Factures: Inici',
    'LBL_HOMEPAGE_TITLE' => 'Les meves factures',
    'LNK_NEW_RECORD' => 'Crear factura',
    'LNK_LIST' => 'Veure factures',
    'LBL_SEARCH_FORM_TITLE' => 'Cercar factures',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Veure Històrial',
    'LBL_NEW_FORM_TITLE' => 'Nova factura',
    'LBL_TERMS_C' => 'Condicions',
    'LBL_APPROVAL_ISSUE' => 'Incidències d’aprovació',
    'LBL_APPROVAL_STATUS' => 'Estat d’aprovació',
    'LBL_BILLING_ACCOUNT' => 'Compte',
    'LBL_BILLING_CONTACT' => 'Contacte',
    'LBL_EXPIRATION' => 'Vàlid fins',
    'LBL_INVOICE_NUMBER' => 'Número de factura',
    'LBL_OPPORTUNITY' => 'Nom de l’Oportunitat',
    'LBL_TEMPLATE_DDOWN_C' => 'Plantilles de factures',
    'LBL_STAGE' => 'Etapa de pressupost',
    'LBL_TERM' => 'Condicions de pagament',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotal',
    'LBL_DISCOUNT_AMOUNT' => 'Descompte',
    'LBL_TAX_AMOUNT' => 'Impost',
    'LBL_SHIPPING_AMOUNT' => 'Trameses',
    'LBL_TOTAL_AMT' => 'Total',
    'VALUE' => 'Títol',
    'LBL_EMAIL_ADDRESSES' => 'Direccions de correu electrònic:',
    'LBL_LINE_ITEMS' => 'Línies d’articles',
    'LBL_GRAND_TOTAL' => 'Gran total',
    'LBL_QUOTE_NUMBER' => 'Número de pressupost',
    'LBL_QUOTE_DATE' => 'Data de pressupost',
    'LBL_INVOICE_DATE' => 'Data de facturació',
    'LBL_DUE_DATE' => 'Data Venciment',
    'LBL_STATUS' => 'Estat',
    'LBL_INVOICE_STATUS' => 'Estat de la factura',
    'LBL_PRODUCT_QUANITY' => 'Quantitat',
    'LBL_PRODUCT_NAME' => 'Producte',
    'LBL_PART_NUMBER' => 'Codi Producte',
    'LBL_PRODUCT_NOTE' => 'Nota',
    'LBL_PRODUCT_DESCRIPTION' => 'Descripció',
    'LBL_LIST_PRICE' => 'P.V.P',
    'LBL_DISCOUNT_AMT' => 'Descompte',
    'LBL_UNIT_PRICE' => 'Preu de venda',
    'LBL_TOTAL_PRICE' => 'Total',
    'LBL_VAT' => 'Impost', //VAT
    'LBL_VAT_AMT' => 'Quantitat d’impost', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'Afegir línea de producte',
    'LBL_SERVICE_NAME' => 'Servei',
    'LBL_SERVICE_LIST_PRICE' => 'P.V.P',
    'LBL_SERVICE_PRICE' => 'Preu de venda',
    'LBL_SERVICE_DISCOUNT' => 'Descompte',
    'LBL_ADD_SERVICE_LINE' => 'Afegir línia de servei',
    'LBL_REMOVE_PRODUCT_LINE' => 'Eliminar',
    'LBL_PRINT_AS_PDF' => 'Imprimir com PDF',
    'LBL_EMAIL_INVOICE' => 'Enviar factura per correu electrònic',
    'LBL_LIST_NUM' => 'Número',
    'LBL_PDF_NAME' => 'Factura',
    'LBL_EMAIL_NAME' => 'Factura per a',
    'LBL_NO_TEMPLATE' => 'ERROR\nNo s’han trobat plantilles. Si no ha creat una plantilla de factura, vagi al mòdul de Plantilles PDF i creïn una',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Subtotal + Impost',//pre shipping
    'LBL_EMAIL_PDF' => 'Enviar PDF per correu electrònic',
    'LBL_ADD_GROUP' => 'Agregar grup',
    'LBL_DELETE_GROUP' => 'Eliminar grup',
    'LBL_GROUP_NAME' => 'Nom del grup',
    'LBL_GROUP_TOTAL' => 'Total del grup',
    'LBL_SHIPPING_TAX' => 'Impost sobre l’enviament',
    'LBL_SHIPPING_TAX_AMT' => 'Impost sobre l’enviament',
    'LBL_IMPORT_LINE_ITEMS' => 'Importar línies de productes',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotal (moneda per defecte)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Descompte (moneda per defecte)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Impost (moneda per defecte)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Enviament (moneda per defecte)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (moneda per defecte)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Despesa d’enviament (moneda per defecte)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Gran total (moneda per defecte)',
    'LBL_INVOICE_TO' => 'Facturar a',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Grups de línies d’articles ',
    'LBL_AOS_PRODUCT_QUOTES' => 'Pressupostos de Productes',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Pressupostos: factures',
);
