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
	//module
	'LBL_MODULE_NAME' => 'Documents',
	'LBL_MODULE_TITLE' => 'Documents: Inici',
	'LNK_NEW_DOCUMENT' => 'Crear Document',
	'LNK_DOCUMENT_LIST'=> 'Llista de Documents',
	'LBL_DOC_REV_HEADER' => 'Versions',
	'LBL_SEARCH_FORM_TITLE'=> 'Recerca de Documents',
	//vardef labels
	'LBL_DOCUMENT_ID' => 'Id de Document',
	'LBL_NAME' => 'Nom de Document',
	'LBL_DESCRIPTION' => 'Descripció',
	'LBL_CATEGORY' => 'Categoria',
	'LBL_SUBCATEGORY' => 'Subcategoría',
	'LBL_STATUS' => 'Estat',
	'LBL_CREATED_BY'=> 'Creat per',
	'LBL_DATE_ENTERED'=> 'Data Creación',
	'LBL_DATE_MODIFIED'=> 'Data Modificació',
	'LBL_DELETED' => 'Eliminat',
	'LBL_MODIFIED'=> 'Modificat per ID',
	'LBL_MODIFIED_USER' => 'Modificat per',
	'LBL_CREATED'=> 'Creat per',
	'LBL_REVISIONS'=>'Versions',
	'LBL_RELATED_DOCUMENT_ID'=>'ID de Document Relacionat',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'ID de Versió de Document Relacionat',
	'LBL_IS_TEMPLATE'=>'Es una Plantilla',
	'LBL_TEMPLATE_TYPE'=>'Tipus de Document',
	'LBL_ASSIGNED_TO_NAME'=>'Assignat a:',
	'LBL_REVISION_NAME' => 'Número de Versió',
	'LBL_MIME' => 'Tipus MIME',
	'LBL_REVISION' => 'Versió',
	'LBL_DOCUMENT' => 'Document Relacionat',
	'LBL_LATEST_REVISION' => 'Última Versió',
	'LBL_CHANGE_LOG'=> 'Històrial de Canvis:',
	'LBL_ACTIVE_DATE'=> 'Data de Publicació',
	'LBL_EXPIRATION_DATE' => 'Data de Caducitat',
	'LBL_FILE_EXTENSION'  => 'Extensió d´Arxiu',
	'LBL_LAST_REV_MIME_TYPE' => 'Last revision MIME type',
	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Sense especificar',
    'LBL_HOMEPAGE_TITLE' => 'My Documents',
	//quick search
	'LBL_NEW_FORM_TITLE' => 'Nou Document',
	//document edit and detail view
	'LBL_DOC_NAME' => 'Nom de Document:',
	'LBL_FILENAME' => 'Nom d´Arxiu:',
	'LBL_LIST_FILENAME' => 'Nom d´Arxiu',
	'LBL_DOC_VERSION' => 'Versió:',
	'LBL_FILE_UPLOAD' => 'Nom d´Arxiu',

	'LBL_CATEGORY_VALUE' => 'Categoria:',
	'LBL_LIST_CATEGORY' => 'Categoría',
	'LBL_SUBCATEGORY_VALUE'=> 'Subcategoría:',
	'LBL_DOC_STATUS'=> 'Estat:',
	'LBL_LAST_REV_CREATOR' => 'Versió Creada Per:',
	'LBL_LASTEST_REVISION_NAME' => 'Lastest revision name:',
	'LBL_SELECTED_REVISION_NAME' => 'Selected revision name:',
	'LBL_CONTRACT_STATUS' => 'Contract status:',
	'LBL_CONTRACT_NAME' => 'Nom de Contracte:',
	'LBL_LAST_REV_DATE' => 'Data de Versió:',
	'LBL_DOWNNLOAD_FILE'=> 'Arxiu de Descarrega:',
	'LBL_DET_RELATED_DOCUMENT'=>'Document Relacionat:',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>"Versió de Document Relacionat:",
	'LBL_DET_IS_TEMPLATE'=>'Plantilla? :',
	'LBL_DET_TEMPLATE_TYPE'=>'Tipus de Document:',
	'LBL_DOC_DESCRIPTION'=>'Descripció:',
	'LBL_DOC_ACTIVE_DATE'=> 'Data de Publicació:',
	'LBL_DOC_EXP_DATE'=> 'Data de Caducitat:',

	//document list view.
	'LBL_LIST_FORM_TITLE' => 'Llista de Documents',
	'LBL_LIST_DOCUMENT' => 'Document',
	'LBL_LIST_CATEGORY' => 'Categoría',
	'LBL_LIST_SUBCATEGORY' => 'Subcategoría',
	'LBL_LIST_REVISION' => 'Versió',
	'LBL_LIST_LAST_REV_CREATOR' => 'Publicat Per',
	'LBL_LIST_LAST_REV_DATE' => 'Data de Versió',
	'LBL_LIST_VIEW_DOCUMENT'=>'Veure',
    'LBL_LIST_DOWNLOAD'=> 'Descarregar',
	'LBL_LIST_ACTIVE_DATE' => 'Data de Publicació',
	'LBL_LIST_EXP_DATE' => 'Data de Caducitat',
	'LBL_LIST_STATUS'=>'Estat',
	'LBL_LINKED_ID' => 'Linked id',
	'LBL_SELECTED_REVISION_ID' => 'Selected revision id',
	'LBL_LATEST_REVISION_ID' => 'Latest revision id',
	'LBL_SELECTED_REVISION_FILENAME' => 'Selected revision filename',
	'LBL_FILE_URL' => 'File url',
    'LBL_REVISIONS_PANEL' => 'Revision Details',
    'LBL_REVISIONS_SUBPANEL' => 'Versions',

	//document search form.
	'LBL_SF_DOCUMENT' => 'Nom de Document:',
	'LBL_SF_CATEGORY' => 'Categoría:',
	'LBL_SF_SUBCATEGORY'=> 'Subcategoría:',
	'LBL_SF_ACTIVE_DATE' => 'Data de Publicació:',
	'LBL_SF_EXP_DATE'=> 'Data de Caducitat:',

	'DEF_CREATE_LOG' => 'Document Creat',

	//error messages
	'ERR_DOC_NAME'=>'Nom de Document',
	'ERR_DOC_ACTIVE_DATE'=>'Data de Publicació',
	'ERR_DOC_EXP_DATE'=> 'Data de Caducitat',
	'ERR_FILENAME'=> 'Nom d´Arxiu',
	'ERR_DOC_VERSION'=> 'Versió de Document',
	'ERR_DELETE_CONFIRM'=> 'Desitja eliminar aquesta versió del document?',
	'ERR_DELETE_LATEST_VERSION'=> 'No té permisos per eliminar l´última versió d´un document.',
	'LNK_NEW_MAIL_MERGE' => 'Combinar Correspondència',
	'LBL_MAIL_MERGE_DOCUMENT' => 'Plantilla per Combinar Correspondència:',
	'ERR_MISSING_FILE' => 'This document is missing a file, most likely due to  an error during upload.  Please retry uploading the file or contact your administrator.',

	'LBL_TREE_TITLE' => 'Documents',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Nom de Document',
	'LBL_CONTRACT_NAME'=>'Nom de Contracte:',
	'LBL_LIST_IS_TEMPLATE'=>'Plantilla?',
	'LBL_LIST_TEMPLATE_TYPE'=>'Tipus de Document',
	'LBL_LIST_SELECTED_REVISION'=>'Versió Seleccionada',
	'LBL_LIST_LATEST_REVISION'=>'Última Versió',
	'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Contractes Relacionats',
	'LBL_LAST_REV_CREATE_DATE'=>'Data de Creació de l´Última Versió',
    //'LNK_DOCUMENT_CAT'=>'Categorias de Documents',
    'LBL_CONTRACTS' => 'Contractes',
    'LBL_CREATED_USER' => 'Usuari Creat',
    'LBL_THEREVISIONS_SUBPANEL_TITLE' => 'Reversions',
    'LBL_DOCUMENT_INFORMATION' => 'Informació del Públic Objectiu',
	'LBL_DOC_ID' => 'Document Source ID',
	'LBL_DOC_TYPE' => 'Source',
	'LBL_LIST_DOC_TYPE' => 'Source',
    'LBL_DOC_TYPE_POPUP' => 'Select a source to which this document will be uploaded<br> and from which it will be available.',
	'LBL_DOC_URL' => 'Document Source URL',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Nom d´Arxiu',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'The first 20 most recently modified files are displayed in descending order in the list below. Use the Search to find other files.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Nom d´Arxiu',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'The user attempted to access an invalid external API ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'The login check failed for external API ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Comptes',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactes',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunitats',
    'LBL_CASES_SUBPANEL_TITLE' => 'Casos',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Seguiment d´Incidències',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Pressupostos',
	'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Productes',
);


?>
