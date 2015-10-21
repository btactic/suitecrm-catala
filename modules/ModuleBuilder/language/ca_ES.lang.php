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


$mod_strings = array(
	'LBL_LOADING' => 'Loading' /*for 508 compliance fix*/,
	'LBL_HIDEOPTIONS' => 'Hide Options' /*for 508 compliance fix*/,
	'LBL_DELETE' => 'Eliminar' /*for 508 compliance fix*/,
	'LBL_POWERED_BY_SUGAR' => 'Powered By SugarCRM' /*for 508 compliance fix*/,

//HOME
'LBL_HOME_EDIT_DROPDOWNS'=>'Editor de Llistes Desplegables',

//ASSISTANT
'LBL_AS_SHOW' => 'Show Assistant in future.',
'LBL_AS_IGNORE' => 'Ignore Assistant in future.',
'LBL_AS_SAYS' => 'Assistant Says:',


//STUDIO2
'LBL_MODULEBUILDER'=>'Constructor de Mòduls',
'LBL_STUDIO' => 'Estudi',
'LBL_DROPDOWNEDITOR' => 'Editor de Llistes Desplegables',
'LBL_EDIT_DROPDOWN'=>'Edit Dropdown',
'LBL_DEVELOPER_TOOLS' => 'Eines de Desenvolupament',
'LBL_SUGARPORTAL' => 'Sugar Portal Editor',
'LBL_SYNCPORTAL' => 'Sync Portal',
'LBL_PACKAGE_LIST' => 'Package List',
'LBL_HOME' => 'Inici',
'LBL_NONE'=>'-None-',
'LBL_DEPLOYE_COMPLETE'=>'Deploy complete',
'LBL_DEPLOY_FAILED'   =>'An error has occurred during deploy process, your package may not have installed correctly',
'LBL_ADD_FIELDS'=>'Agregar Camps Personalitzat',
'LBL_AVAILABLE_SUBPANELS'=>'Available Subpanels',
'LBL_ADVANCED'=>'Avançat',
'LBL_ADVANCED_SEARCH'=>'Recerca Avançada',
'LBL_BASIC'=>'Basic',
'LBL_BASIC_SEARCH'=>'Búsqueda Bàsica',
'LBL_CURRENT_LAYOUT'=>'Layout',
'LBL_CURRENCY' => 'Moneda',
'LBL_CUSTOM' => 'Personalitzat',
'LBL_DASHLET'=>'Sugar Dashlet',
'LBL_DASHLETLISTVIEW'=>'Sugar Dashlet ListView',
'LBL_DASHLETSEARCH'=>'Sugar Dashlet Search',
'LBL_POPUP'=>'PopupView',
'LBL_POPUPLIST'=>'Popup ListView',
'LBL_POPUPLISTVIEW'=>'Popup ListView',
'LBL_POPUPSEARCH'=>'Popup Search',
'LBL_DASHLETSEARCHVIEW'=>'Sugar Dashlet Search',
'LBL_DISPLAY_HTML'=>'Mostrar Còdig HTML',
'LBL_DETAILVIEW'=>'DetailView',
'LBL_DROP_HERE' => '[Deixar Anar Aquí]',
'LBL_EDIT'=>'Editar',
'LBL_EDIT_LAYOUT'=>'Editar Diseny',
'LBL_EDIT_ROWS'=>'Editar Files',
'LBL_EDIT_COLUMNS'=>'Editar Columnes',
'LBL_EDIT_LABELS'=>'Editar Etiquetes',
'LBL_EDIT_FIELDS'=>'Editar Camps Personalitzats',
'LBL_EDIT_PORTAL'=>'Edit Portal for ',
'LBL_EDIT_FIELDS'=>'Editar Camps Personalitzats',
'LBL_EDITVIEW'=>'EditView',
'LBL_FILLER'=>'(filler)',
'LBL_FIELDS'=>'Fields',
'LBL_FAILED_TO_SAVE' => 'Error al Guardar',
'LBL_FAILED_PUBLISHED' => 'Error al Publicar',
'LBL_HOMEPAGE_PREFIX' => 'My',
'LBL_LAYOUT_PREVIEW'=>'Layout Preview',
'LBL_LAYOUTS'=>'Layouts',
'LBL_LISTVIEW'=>'ListView',
'LBL_MODULES'=>'Mòdul',
'LBL_MODULE_TITLE' => 'Estudi',
'LBL_NEW_PACKAGE' => 'New Package',
'LBL_NEW_PANEL'=>'New Panel',
'LBL_NEW_ROW'=>'New Row',
'LBL_PACKAGE_DELETED'=>'Package Deleted',
'LBL_PUBLISHING' => 'Publicant ...',
'LBL_PUBLISHED' => 'Publicat',
'LBL_SELECT_FILE'=> 'Seleccionar Arxiu',
'LBL_SAVE_LAYOUT'=> 'Guardar Diseny',
'LBL_SELECT_A_SUBPANEL' => 'Seleccionar un Subpanell',
'LBL_SELECT_SUBPANEL' => 'Seleccionar Subpanell',
'LBL_SUBPANELS' => 'Subpanels',
'LBL_SUBPANEL' => 'Subpanel',
'LBL_SUBPANEL_TITLE' => 'Títol:',
'LBL_SEARCH_FORMS' => 'Buscar',
'LBL_SEARCH'=>'Buscar',
'LBL_STAGING_AREA' => 'Àrea de Disseny (arrossegui i deixi anar elements aquí)',
'LBL_SUGAR_FIELDS_STAGE' => 'Camps Sugar (faci clic en els elements per agregar-los a l´àrea de disseny)',
'LBL_SUGAR_BIN_STAGE' => 'Paperera Sugar (faci clic en els elements per agregar-los a l´àrea de disseny)',
'LBL_TOOLBOX' => 'Caixa d´Eines',
'LBL_VIEW_SUGAR_FIELDS' => 'Veure Camps Sugar',
'LBL_VIEW_SUGAR_BIN' => 'Veure Paperera Sugar',
'LBL_QUICKCREATE' => 'QuickCreate',
'LBL_EDIT_DROPDOWNS' => 'Edit a Global Dropdown',
'LBL_ADD_DROPDOWN' => 'Add a new Global Dropdown',
'LBL_BLANK' => '-blank-',
'LBL_TAB_ORDER' => 'Tab Order',
'LBL_TAB_PANELS' => 'Enable tabs',
'LBL_TAB_PANELS_HELP' => 'When tabs are enabled, use the "type" dropdown box<br />for each section to define how it will be displayed (tab or panel)',
'LBL_TABDEF_TYPE' => 'Display Type',
'LBL_TABDEF_TYPE_HELP' => 'Select how this section should be displayed. This option only has effect if you have enabled tabs on this view.',
'LBL_TABDEF_TYPE_OPTION_TAB' => 'Tab',
'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
'LBL_TABDEF_TYPE_OPTION_HELP' => 'Select Panel to have this panel display within the view of the layout. Select Tab to have this panel displayed within a separate tab within the layout. When Tab is specified for a panel, subsequent panels set to display as Panel will be displayed within the tab. <br/>A new Tab will be started for the next panel for which Tab is selected. If Tab is selected for a panel below the first panel, the first panel will necessarily be a Tab.',
'LBL_TABDEF_COLLAPSE' => 'Collapse',
'LBL_TABDEF_COLLAPSE_HELP' => 'Select to make the default state of this panel collapsed.',
'LBL_DROPDOWN_TITLE_NAME' => 'Nom',
'LBL_DROPDOWN_LANGUAGE' => 'Llenguatge per Defecte',
'LBL_DROPDOWN_ITEMS' => 'List Items',
'LBL_DROPDOWN_ITEM_NAME' => 'Item Name',
'LBL_DROPDOWN_ITEM_LABEL' => 'Display Label',
'LBL_SYNC_TO_DETAILVIEW' => 'Sync to DetailView',
'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Select this option to sync this EditView layout to the corresponding DetailView layout. Fields and field placement in the EditView<br>will be sync\'d and saved to the DetailView automatically upon clicking Save or Save & Deploy in the EditView. <br>Layout changes will not be able to be made in the DetailView.',
'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'This DetailView is sync\'d with the corresponding EditView.<br> Fields and field placement in this DetailView reflect the fields and field placement in the EditView.<br> Changes to the DetailView cannot be saved or deployed within this page. Make changes or un-sync the layouts in the EditView. ',
'LBL_COPY_FROM_EDITVIEW' => 'Copy from EditView',
'LBL_DROPDOWN_BLANK_WARNING' => 'Values are required for both the Item Name and the Display Label. To add a blank item, click Add without entering any values for the Item Name and the Display Label.',
'LBL_DROPDOWN_KEY_EXISTS' => 'Key already exists in list',
'LBL_NO_SAVE_ACTION' => 'Could not find the save action for this view.',
'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: badly formed document',



//RELATIONSHIPS
'LBL_MODULE' => 'Mòdul',
'LBL_LHS_MODULE'=>'Primary Module',
'LBL_CUSTOM_RELATIONSHIPS' => '* relationship created in Studio',
'LBL_RELATIONSHIPS'=>'Relationships',
'LBL_RELATIONSHIP_EDIT' => 'Edit Relationship',
'LBL_REL_NAME' => 'Nom',
'LBL_REL_LABEL' => 'Etiqueta',
'LBL_REL_TYPE' => 'Tipus',
'LBL_RHS_MODULE'=>'Related Module',
'LBL_NO_RELS' => 'No Relationships',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'Optional Condition' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'Column',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'Valor',
'LBL_SUBPANEL_FROM'=>'Subpanel from',
'LBL_RELATIONSHIP_ONLY'=>'No visible elements will be created for this relationship as there is a pre-existing visible relationship between these two modules.',
'LBL_ONETOONE' => 'One to One',
'LBL_ONETOMANY' => 'One to Many',
'LBL_MANYTOONE' => 'Many to One',
'LBL_MANYTOMANY' => 'Many to Many',


//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => 'Select a function or component.',
'LBL_QUESTION_MODULE1' => 'Select a module.',
'LBL_QUESTION_EDIT' => 'Select a module to edit.',
'LBL_QUESTION_LAYOUT' => 'Select a layout to edit.',
'LBL_QUESTION_SUBPANEL' => 'Select a subpanel to edit.',
'LBL_QUESTION_SEARCH' => 'Select a search layout to edit.',
'LBL_QUESTION_MODULE' => 'Select a module component to edit.',
'LBL_QUESTION_PACKAGE' => 'Select a package to edit, or create a new package.',
'LBL_QUESTION_EDITOR' => 'Select a tool.',
'LBL_QUESTION_DROPDOWN' => 'Select a dropdown to edit, or create a new dropdown.',
'LBL_QUESTION_DASHLET' => 'Select a dashlet layout to edit.',
'LBL_QUESTION_POPUP' => 'Select a popup layout to edit.',
//CUSTOM FIELDS
'LBL_RELATE_TO'=>'Relate To',
'LBL_NAME'=>'Nom',
'LBL_LABELS'=>'Labels',
'LBL_MASS_UPDATE'=>'Actualització Massiva',
'LBL_AUDITED'=>'Auditat',
'LBL_CUSTOM_MODULE'=>'Mòdul',
'LBL_DEFAULT_VALUE'=>'Valor per Defecte',
'LBL_REQUIRED'=>'Requerit',
'LBL_DATA_TYPE'=>'Tipus',
'LBL_HCUSTOM'=>'CUSTOM',
'LBL_HDEFAULT'=>'DEFAULT',
'LBL_LANGUAGE'=>'Llenguatge:',
'LBL_CUSTOM_FIELDS' => '* field created in Studio',

//SECTION
'LBL_SECTION_EDLABELS' => 'Editar Etiquetes',
'LBL_SECTION_PACKAGES' => 'Packages',
'LBL_SECTION_PACKAGE' => 'Package',
'LBL_SECTION_MODULES' => 'Mòdul',
'LBL_SECTION_PORTAL' => 'Portal',
'LBL_SECTION_DROPDOWNS' => 'Dropdowns',
'LBL_SECTION_PROPERTIES' => 'Properties',
'LBL_SECTION_DROPDOWNED' => 'Edit Dropdown',
'LBL_SECTION_HELP' => 'Ajuda',
'LBL_SECTION_ACTION' => 'Acció',
'LBL_SECTION_MAIN' => 'Main',
'LBL_SECTION_EDPANELLABEL' => 'Edit Panel Label',
'LBL_SECTION_FIELDEDITOR' => 'Edit Field',
'LBL_SECTION_DEPLOY' => 'Deploy',
'LBL_SECTION_MODULE' => 'Mòdul',
'LBL_SECTION_VISIBILITY_EDITOR'=>'Edit Visibility',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Per defecte',
'LBL_HIDDEN'=>'Hidden',
'LBL_AVAILABLE'=>'Disponible',
'LBL_LISTVIEW_DESCRIPTION'=>'There are three columns displayed below. The <b>Default</b> column contains fields that are displayed in a list view by default.  The <b>Additional</b> column contains fields that a user can choose to use for creating a custom view.  The <b>Available</b> column displays fields availabe for you as an admin to add to the Default or Additional columns for use by users.',
'LBL_LISTVIEW_EDIT'=>'Editor de Llistes',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Vista Preliminar',
'LBL_MB_RESTORE'=>'Restaurar',
'LBL_MB_DELETE'=>'Eliminar',
'LBL_MB_COMPARE'=>'Comparar',
'LBL_MB_DEFAULT_LAYOUT'=>'Default Layout',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'Afegir',
'LBL_BTN_SAVE'=>'Guardar [Alt+S]',
'LBL_BTN_SAVE_CHANGES'=>'Save Changes',
'LBL_BTN_DONT_SAVE'=>'Discard Changes',
'LBL_BTN_CANCEL'=>'Cancel·lar',
'LBL_BTN_CLOSE'=>'Tancar',
'LBL_BTN_SAVEPUBLISH'=>'Guardar i Publicar',
'LBL_BTN_NEXT'=>'Següent',
'LBL_BTN_BACK'=>'Enrere',
'LBL_BTN_CLONE'=>'Clone',
'LBL_BTN_ADDCOLS'=>'Agregar Columnes',
'LBL_BTN_ADDROWS'=>'Agregar Files',
'LBL_BTN_ADDFIELD'=>'Afegir Camp',
'LBL_BTN_ADDDROPDOWN'=>'Add Dropdown',
'LBL_BTN_SORT_ASCENDING'=>'Sort Ascending',
'LBL_BTN_SORT_DESCENDING'=>'Sort Descending',
'LBL_BTN_EDLABELS'=>'Editar Etiquetes',
'LBL_BTN_UNDO'=>'Desfer',
'LBL_BTN_REDO'=>'Repetir',
'LBL_BTN_ADDCUSTOMFIELD'=>'Agregar Camp Personalitzat',
'LBL_BTN_EXPORT'=>'Export Customizations',
'LBL_BTN_DUPLICATE'=>'Duplicar',
'LBL_BTN_PUBLISH'=>'Publicar',
'LBL_BTN_DEPLOY'=>'Deploy',
'LBL_BTN_EXP'=>'Exportar',
'LBL_BTN_DELETE'=>'Eliminar',
'LBL_BTN_VIEW_LAYOUTS'=>'View Layouts',
'LBL_BTN_VIEW_FIELDS'=>'View Fields',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'Vure Relacions',
'LBL_BTN_ADD_RELATIONSHIP'=>'Add Relationship',
'LBL_BTN_RENAME_MODULE' => 'Change Module Name',
'LBL_BTN_INSERT'=>'Insertar',
//TABS


//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Error: Camp Existent',
'ERROR_INVALID_KEY_VALUE'=> 'Error: Valor de Clau No vàlid: [\']',
'ERROR_NO_HISTORY' => 'No history files found',
'ERROR_MINIMUM_FIELDS' => 'The layout must contain at least one field',
'ERROR_GENERIC_TITLE' => 'Ha ocorregut un error',
'ERROR_REQUIRED_FIELDS' => 'Are you sure you wish to continue? The following required fields are missing from the layout:  ',
'ERROR_ARE_YOU_SURE' => 'Are you sure you wish to continue?',



//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'Package Name:',
'LBL_MODULE_NAME'=>'Module Name:',
'LBL_AUTHOR'=>'Author:',
'LBL_DESCRIPTION'=>'Descripció:',
'LBL_KEY'=>'Key:',
'LBL_ADD_README'=>' Readme',
'LBL_MODULES'=>'Mòdul',
'LBL_LAST_MODIFIED'=>'Last Modified:',
'LBL_NEW_MODULE'=>'New Module',
'LBL_LABEL'=>'Label:',
'LBL_LABEL_TITLE'=>'Etiqueta',
'LBL_WIDTH'=>'Width',
'LBL_PACKAGE'=>'Package:',
'LBL_TYPE'=>'Tipus:',
'LBL_TEAM_SECURITY'=>'Team Security',
'LBL_ASSIGNABLE'=>'Assignable',
'LBL_PERSON'=>'Person',
'LBL_COMPANY'=>'Company',
'LBL_ISSUE'=>'Issue',
'LBL_SALE'=>'Venta',
'LBL_FILE'=>'Arxiu',
'LBL_NAV_TAB'=>'Navigation Tab',
'LBL_CREATE'=>'Nou [Alt+N]',
'LBL_LIST'=>'Llista',
'LBL_VIEW'=>'Veure',
'LBL_LIST_VIEW'=>'Vista de Llista',
'LBL_HISTORY'=>'Veure Històrial',
'LBL_RESTORE_DEFAULT'=>'Restore Default',
'LBL_ACTIVITIES'=>'Activitats',
'LBL_SEARCH'=>'Buscar',
'LBL_NEW'=>'Nou',
'LBL_TYPE_BASIC'=>'basic',
'LBL_TYPE_COMPANY'=>'company',
'LBL_TYPE_PERSON'=>'person',
'LBL_TYPE_ISSUE'=>'issue',
'LBL_TYPE_SALE'=>'sale',
'LBL_TYPE_FILE'=>'Arxiu',
'LBL_RSUB'=>'This is the subpanel that will be displayed in your module',
'LBL_MSUB'=>'This is the subpanel that your module provides to the related module for display',
'LBL_MB_IMPORTABLE'=>'Importing',

// VISIBILITY EDITOR
'LBL_VE_VISIBLE'=>'visible',
'LBL_VE_HIDDEN'=>'hidden',
'LBL_PACKAGE_WAS_DELETED'=>'[[package]] was deleted',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'Export Customizations',
'LBL_EC_NAME'=>'Package Name:',
'LBL_EC_AUTHOR'=>'Author:',
'LBL_EC_DESCRIPTION'=>'Descripció:',
'LBL_EC_KEY'=>'Key:',
'LBL_EC_CHECKERROR'=>'Please select a module.',
'LBL_EC_CUSTOMFIELD'=>'customized field(s)',
'LBL_EC_CUSTOMLAYOUT'=>'customized layout(s)',
'LBL_EC_NOCUSTOM'=>'No modules have been customized.',
'LBL_EC_EMPTYCUSTOM'=>'has empty customizations.',
'LBL_EC_EXPORTBTN'=>'Exportar',
'LBL_MODULE_DEPLOYED' => 'Module has been deployed.',
'LBL_UNDEFINED' => 'undefined',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => 'Failed to retrieve data',
'LBL_AJAX_TIME_DEPENDENT' => 'A time dependent action is in progress. Please wait and try again in a few seconds.',
'LBL_AJAX_LOADING' => 'Carregant...',
'LBL_AJAX_DELETING' => 'Deleting...',
'LBL_AJAX_BUILDPROGRESS' => 'Build In Progress...',
'LBL_AJAX_DEPLOYPROGRESS' => 'Deploy In Progress...',
'LBL_AJAX_FIELD_EXISTS' =>'The field name you entered already exists. Please enter a new field name.',
//JS
'LBL_JS_REMOVE_PACKAGE' => 'Are you sure you wish to remove this package? This will permanently delete all files associated with this package.',
'LBL_JS_REMOVE_MODULE' => 'Are you sure you wish to remove this module? This will permanently delete all files associated with this module.',
'LBL_JS_DEPLOY_PACKAGE' => 'Any customizations that you made in Studio will be overwritten when this module is re-deployed. Are you sure you want to proceed?',

'LBL_DEPLOY_IN_PROGRESS' => 'Deploying Package',
'LBL_JS_VALIDATE_NAME'=>'Name - Must be alphanumeric, begin with a letter and contain no spaces.',
'LBL_JS_VALIDATE_PACKAGE_NAME'=>'Package Name already exists',
'LBL_JS_VALIDATE_KEY'=>'Key - Must be alphanumeric, begin with a letter and contain no spaces.',
'LBL_JS_VALIDATE_LABEL'=>'Please enter a label that will be used as the Display Name for this module',
'LBL_JS_VALIDATE_TYPE'=>'Please select the type of module you wish to build from the list above',
'LBL_JS_VALIDATE_REL_NAME'=>'Name - Must be alphanumeric with no spaces',
'LBL_JS_VALIDATE_REL_LABEL'=>'Label - please add a label that will be displayed above the subpanel',


//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>'Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts. \\n\\nDo you wish to continue?',
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'Are you sure you wish to delete this relationship?',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'This will make this relationship permanent. Are you sure you wish to deploy this relationship?',
'LBL_CONFIRM_DONT_SAVE' => 'Changes have been made since you last saved, would you like to save?',
'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Save Changes?',
'LBL_CONFIRM_LOWER_LENGTH' => 'Data may be truncated and this cannot be undone, are you sure you wish to continue?',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'Select the appropriate data type based on the type of data that will be entered into the field.',
'LBL_POPHELP_SEARCHABLE'=>'Select the boost level for this field. <br />Fields with a higher boost level will be given greater weight when the search is performed. <br />When a search is performed, matching records containing fields with a greater weight will be appear higher in the search results.<br /> If you change the boost level for a field from one level to another, perform a system index to apply the change. <br/> Be sure to select to delete the existing data at the time that the system index is performed.',
'LBL_POPHELP_IMPORTABLE'=>'<b>Yes</b>: The field will be included in an import operation.<br><b>No</b>: The field will not be included in an import.<br><b>Required</b>: A value for the field must be provided in any import.',
'LBL_POPHELP_IMAGE_WIDTH'=>'Enter a number for Width, as measured in pixels.<br> The uploaded image will be scaled to this Width.',
'LBL_POPHELP_IMAGE_HEIGHT'=>'Enter a number for the Height, as measured in pixels.<br> The uploaded image will be scaled to this Height.',
'LBL_POPHELP_DUPLICATE_MERGE'=>'<b>Enabled</b>: The field will appear in the Merge Duplicates feature, but will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Disabled</b>: The field will not appear in the Merge Duplicates feature, and will not be available to use for the filter conditions in the Find Duplicates feature.',
'LBL_POPHELP_GLOBAL_SEARCH'=>'Select to use this field when searching for records using the Global Search on this module.',
//Revert Module labels
'LBL_RESET' => 'Restablir [Alt+R]',
'LBL_RESET_MODULE' => 'Reset Module',
'LBL_REMOVE_CUSTOM' => 'Remove Customizations',
'LBL_CLEAR_RELATIONSHIPS' => 'Clear Relationships',
'LBL_RESET_LABELS' => 'Reset Labels',
'LBL_RESET_LAYOUTS' => 'Reset Layouts',
'LBL_REMOVE_FIELDS' => 'Remove Custom Fields',
'LBL_CLEAR_EXTENSIONS' => 'Clear Extensions',
'LBL_CLEAR_EXTENSIONS' => 'Clear Extensions',



'LBL_HISTORY_TIMESTAMP' => 'TimeStamp',
'LBL_HISTORY_TITLE' => ' history',

'parent' => 'Flex Relate',

'LBL_ILLEGAL_FIELD_VALUE' => 'Drop down key cannot contain quotes.',
'LBL_CONFIRM_SAVE_DROPDOWN' => 'You are selecting this item for removal from the dropdown list. Any dropdown fields using this list with this item as a value will no longer display the value, and the value will no longer be able to be selected from the dropdown fields. Are you sure you want to continue?',
'LBL_POPHELP_VALIDATE_US_PHONE'=>'Select to validate this field for the entry of a 10-digit<br> phone number, with allowance for the country code 1, and<br> to apply a U.S. format to the phone number when the record<br> is saved. The following format will be applied: (xxx) xxx-xxxx.',
'LBL_ALL_MODULES'=> 'All Modules',
'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (related {1} ID)',


'fieldTypes' => array(
				'varchar'=>'Campo de Texto',
				'int'=>'Entero',
				'float'=>'Decimal',
				'bool'=>'Casilla de Verificación',
				'enum'=>'Desplegable',
				'multienum' => 'Selección Múltiple',
                'date'=>'Fecha',
                'phone' => 'Teléfono',
                'currency' => 'Moneda',
                'html' => 'HTML',
                'radioenum' => 'Opción',
                'relate' => 'Relacionado',
                'address' => 'Dirección',
                'text' => 'Área de Texto',
                'url' => 'Enlace',
                'iframe' => 'IFrame',
                'datetimecombo' =>'Data i Hora',
				'decimal'=>'Decimal',
                'image' => 'Imatge',
),
'labelTypes' => array(
    '' => 'Frequently used labels',
	'all' => 'All Labels',
),

// Help
'help'=>array(
	'package'=>array(
			'create'=> 'Proporcione un <b>Nombre</b> para el paquete. El nombre que introduzca debe ser alfanumérico y no debe contener espacios. (Ejemplo: HR_Management)<br/><br/> Puede proporcionar la información del <b>Autor</b> y la <b>Descripción</b> del paquete. <br/><br/>Haga clic en <b>Guardar</b> para crear el paquete.',
			'modify'=> 'Las propiedades y acciones posibles del <b>Paquete</b> aparecen aquí.<br><br>Puede modificar el <b>Nombre</b>, <b>Autor</b> y <b>Descripción</b> del paquete, así como ver y personalizar cualquiera de los módulos contenidos en el paquete.<br><br>Haga clic en <b>Nuevo Módulo</b> para crear un módulo para el paquete.<br><br>Si el paquete contiene al menos un módulo, puede <b>Publicar</b> y <b>Desplegar</b> el paquete, así como <b>Exportar</b> las personalizaciones realizadas al paquete.',
			'name'=> 'Este es el <b>Nombre</b> del paquete actual. <br/><br/>El nombre que introduzca debe ser alfanumérico, comenzar por una letra y no contener espacios. (Example: HR_Management)',
			'author'=> 'Este es el <b>Autor</b> mostrado durante la instalación como el nombre de la entidad que ha creado el paquete.<br><br>El Autor podría ser un individuo o una empresa.',
			'description'=> 'Esta es la <b>Descripción</b> del paquete que se muestra durante la instalación.',
			'publishbtn'=> 'Haga clic en <b>Publicar</b> para guardar todos los datos introducidos y para crear un archivo .zip que sea una versión instalable del paquete.<br><br>Utilice el <b>Cargardor de Módulos</b> para subir el archivo .zip e instalar el paquete.',
			'deploybtn'=> 'Haga clic en <b>Desplegar</b> para guardar todos los datos introducidos y para instalar el paquete, incluyendo todos los módulos, en la instancia actual.',
			'duplicatebtn'=> 'Haga clic en <b>Duplicar</b> para copiar el contenido del paquete en un paquete nuevo y mostrar el recién creado paquete. <br/><br/>Se creará de forma automática un nuevo nombre para el nuevo paquete añadiendo un número al final del nombre del paquete original. Puede renombrar el nuevo paquete introduciendo un nuevo <b>Nombre</b> y haciendo clic en <b>Guardar</b>.',
			'exportbtn'=> 'Haga clic en <b>Exportar</b> para crear un archivo .zip que contenga las personalizaciones hechas al paquete.<br><br> El archivo generado no es una versión instalable del paquete.<br><br>Utilice el <b>Cargador de Módulos</b> para importar el archivo .zip y para que el paquete, personalizaciones incluidas, aparezca en el Constructor de Módulos.',
			'deletebtn'=> 'Haga clic en <b>Eliminar</b> para eliminar este paquete y todos los archivos relacionados con este paquete.',
			'savebtn'=> 'Haga clic en <b>Guardar</b> para guardar todos los datos introducidos relativos al paquete.',
			'existing_module'=> 'Haga clic en el icono <b>Módulo</b> para editar las propiedades y personalizar los campos, relaciones y diseños asociados al módulo.',
			'new_module'=> 'Haga clic en <b>Nuevo Módulo</b> para crear un nuevo módulo para este paquete.',
			'key'=> 'Esta <b>Clave</b> alfanumérica de 5 letras se usará para prefijar todos los directorios, nombres de clases y tablas de base de datos de todos los módulos en el paquete actual.<br><br>La clave se usa para contribuir a la unicidad de los nombres de tablas.',
			'readme'=> 'Haga clic para agregar un texto <b>Léame</b> para este paquete.<br><br>El Léame quedará disponible en el momento de instalación.',

),
	'main'=>array(

	),
	'module'=>array(
		'create'=> 'Provide a <b>Name</b> for the module. The <b>Label</b> that you provide will appear in the navigation tab. <br/><br/>Choose to display a navigation tab for the module by checking the <b>Navigation Tab</b> checkbox.<br/><br/>Then choose the type of module you would like to create. <br/><br/>Select a template type. Each template contains a specific set of fields, as well as pre-defined layouts, to use as a basis for your module. <br/><br/>Click <b>Save</b> to create the module.',
		'modify'=> 'You can change the module properties or customize the <b>Fields</b>, <b>Relationships</b> and <b>Layouts</b> related to the module.',
		'importable'=> 'Marcando la opción <b>Importable</b> se habilitará la importación para este módulo.<br><br>Un enlace al Asistente de Importación aparecerá en el panel de Atajos del módulo.  El Asistente de Importación le facilitará la importación de datos provenientes de fuentes externas en el módulo personalizado.',
		'team_security'=> 'Marcando la opción <b>Seguridad de Equipos</b> se habilitará la seguridad de equipos para este módulo.  <br/><br/>Si la seguridad de equipos está habilitada, el campo de selección de Equipo aparecerá en los registros del módulo ',
		'reportable'=> 'Marcando esta opción permitirá que este módulo tenga informes que corran contra él.',
		'assignable'=> 'Marcando esta opción permitirá que un registro de este módulo sea asignado a un usuario.',
		'has_tab'=> 'Marcando <b>Pestaña de Navegación</b> proveerá al módulo de una pestaña de navegación.',
		'acl'=> 'Marcando esta opción habilitará los Controles de Acceso para este módulo, incluyendo la Seguridad a Nivel de Campo.',
		'studio'=> 'Marcando esta opción permitirá que los administradores personalicen este módulo dentro del Estudio.',
		'audit'=> 'Marcando esta opción habilitará la Auditoría para este módulo. Los cambios a algunos de los campos serán registrados de forma que los administradores puedan revisar el historial de cambios.',
		'viewfieldsbtn'=> 'Haga clic en <b>Ver Campos</b> para ver los campos asociados con el módulo y crear y editar campos personalizados.',
		'viewrelsbtn'=> 'Haga clic en <b>Ver Relaciones</b> para ver las relaciones asociadas con este módulo y crear nuevas relaciones.',
		'viewlayoutsbtn'=> 'Haga clic en <b>Ver Diseños</b> para ver los diseños de este módulo y personalizar la disposición de los campos dentro de los diseños.',
		'duplicatebtn'=> 'Click <b>Duplicate</b> to copy the properties of the module into a new module and to display the new module. <br/><br/>For the new module, a new name will be generated automatically by appending a number to the end of the name of the module used to create the new one.',
		'deletebtn'=> 'Click <b>Delete</b> to delete this module.',
		'name'=> 'This is the <b>Name</b> of the current module.<br/><br/>The name must be alphanumeric and must start with a letter and contain no spaces. (Example: HR_Management)',
		'label'=> 'Esta es la <b>Etiqueta</b> que aparecerá en la pestaña de navegación del módulo. ',
		'savebtn'=> 'Click <b>Save</b> to save all entered data related to the module.',
		'type_basic'=> 'El tipo de plantilla <b>Básica</b> proporciona los campos básicos, como Nombre, Asignado a, Equipo, Fecha de Creación y Descripción.',
		'type_company'=> 'El tipo de plantilla <b>Empresa</b> proporciona campos particulares de una organización, como Nombre de Empresa, Industria y Dirección de Facturación.<br/><br/>Use esta plantilla para crear módulos que sean similares al módulo estándar de Cuentas.',
		'type_issue'=> 'El tipo de plantilla <b>Incidencia</b> proporciona campos particulares de casos e incidencias, como Número, Estado, Prioridad y Descripción.<br/><br/>Use esta plantilla para crear módulos que sean similares a los módulos estándar de Casos y Seguimiento de Incidencias.',
		'type_person'=> 'El tipo de plantilla <b>Persona</b> proporciona campos particulares de individuos, como Saludo, Cargo, Nombre, Dirección y Número de Teléfono.<br/><br/>Use esta plantilla para crear módulos que sean similares a los módulos estándar de Contactos y Clientes Potenciales.',
		'type_sale'=> 'El tipo de plantilla <b>Ventas</b> proporciona campos específicos de una oportunidad, como la Toma de Contacto, Etapa, Cantidad y Probabilidad.<br/><br/>Use esta plantilla para crear módulos que sean similares al módulo estándar de Oportunidades.',
		'type_file'=> 'La plantilla <b>Archivo</b> proporciona campos específicos de un Documento, como Nombre de Archivo, tipo de Documento, y Fecha de Publicación.<br><br>Use esta plantilla para crear módulos que sean similares al módulo estándar de Documentos.',

	),
	'dropdowns'=>array(
		'default' => 'Todas las <b>Listas Desplegables</b> de la aplicación se listan a aquí.<br><br>Las listas desplegables pueden ser usadas para campos de lista desplegable de cualquier módulo.<br><br>Para realizar cambios a una lista desplegable existente, haga clic en su nombre.<br><br>Haga clic en <b>Agregar Desplegable</b> para crear un nuevo desplegable.',
		'editdropdown'=> 'Las listas desplegables pueden ser utilizadas para campos desplegables estándar o personalizados de cualquier módule.<br><br>Proporcione un <b>Nombre</b> para la lista desplegable.<br><br>Si tiene instalado otros paquetes de idioma en la aplicación, podrá seleccionar el <b>Idioma</b> a utilizar para los elementos de la lista.<br><br>En el campo <b>Nombre de Elemento</b>, proporcione un nombre para la opción en la lista desplegable.  Este nombre no aparecerá en la lista desplegable que es visible a los usuarios.<br><br>En el campo <b>Etiqueta de Visualización</b>, proporcione una etiqueta que será visible a los usuarios.<br><br>Tras proporcionar el nombre de elemento y la etiqueta de visualización, haga clic en <b>Agregar</b> para agregar el elemento a la lista desplegable.<br><br>Para cambiar el orden de los elementos en la lista, arrastre y suelte elementos en las posiciones deseadas.<br><br>Para editar la etiqueta de visualización de un elemento, haga clic en el icono <b>Editar</b>, e introduzca una nueva etiqueta. Para eliminar un elemento de la lista desplegable, haga clic en el icono <b>Eliminar</b>.<br><br>Para deshacer un cambio realizado a una etiqueta de visualización, haga clic en <b>Deshacer</b>.  Para rehacer un cambio que ha sido previamente deshecho, haga clic en <b>Rehacer</b>.<br><br>Haga clic en <b>Guardar</b> para guardar la lista desplegable.',

	),
	'subPanelEditor'=>array(
		'modify'	=> 'All of the fields that can be displayed in the <b>Subpanel</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the Subpanel.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default column.',
		'savebtn'	=> 'Click <b>Save & Deploy</b> to save changes you made and to make them active within the module.',
		'historyBtn'=> 'Haga clic en <b>Ver Historial</b> para ver y restaurar del historial un diseño previamente guardado.',
	    'historyDefault'=> 'Click <b>Restore Default</b> to restore a view to its original layout.',
		'Hidden' 	=> 'Los campos <b>Ocultos</b> no aparecen en el subpanel.',
		'Default'	=> 'Los campos <b>Por Defecto</b> aparecen en el subpanel.',

	),
	'listViewEditor'=>array(
		'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Available</b> column contains fields that a user can select in the Search to create a custom ListView. <br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.',
		'savebtn'	=> 'Click <b>Save & Deploy</b> to save changes you made and to make them active within the module.',
		'historyBtn'=> 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
		'historyDefault'=> 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
		'Hidden' 	=> '<b>Hidden</b> fields not currently available for users to see in ListViews.',
		'Available' => '<b>Available</b> fields are not shown by default, but can be added to ListViews by users.',
		'Default'	=> '<b>Default</b> fields appear in ListViews that are not customized by users.'
	),
	'popupListViewEditor'=>array(
		'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.',
		'savebtn'	=> 'Click <b>Save & Deploy</b> to save changes you made and to make them active within the module.',
		'historyBtn'=> 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
		'historyDefault'=> 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
		'Hidden' 	=> '<b>Hidden</b> fields not currently available for users to see in ListViews.',
		'Default'	=> '<b>Default</b> fields appear in ListViews that are not customized by users.'
	),
	'searchViewEditor'=>array(
		'modify'	=> 'All of the fields that can be displayed in the <b>Search</b> form appear here.<br><br>The <b>Default</b> column contains the fields that will be displayed in the Search form.<br/><br/>The <b>Hidden</b> column contains fields available for you as an admin to add to the Search form.',
		'savebtn'	=> 'Clicking <b>Save & Deploy</b> will save all changes and make them active',
		'Hidden' 	=> '<b>Hidden</b> fields do not appear in the Search.',
		'historyBtn'=> 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
		'historyDefault'=> 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
		'Default'	=> '<b>Default</b> fields appear in the Search.'
	),
	'layoutEditor'=>array(
		'defaultdetailview'=> 'El área de <b>Diseño</b> contiene los campos que actualmente están siendo mostrados en la <b>Vista de Detalle</b>.<br/><br/>La <b>Caja de Herramientas</b> contiene la <b>Papelera de Reciclaje</b> y los campos y elementos del diseño que pueden ser agregados al mismo.<br><br>Haga cambios al diseño arrastrando y soltando elementos y campos entre la <b>Caja de Herramientas</b> y el <b>Diseño</b> así como dentro del mismo diseño.<br><br>Para quitar un campo del diseño, arrastre el campo a la <b>Papelera de Reciclaje</b>. El campo pasará a estar disponible en la Caja de Herramientas para ser agregado al diseño.',
		'defaultquickcreate'=> 'El área de <b>Diseño</b> contiene los campos que actualmente están siendo mostrados en el formulario de <b>Creación Rápida</b>.<br><br>El formulario de Creación Rápida aparece en los subpaneles de un módulo cuando el botón Crear es pulsado.<br/><br/>La <b>Caja de Herramientas</b> contiene la <b>Papelera de Reciclaje</b> y los campos y elementos del diseño que pueden ser agregados al mismo.<br><br>Haga cambios al diseño arrastrando y soltando elementos y campos entre la <b>Caja de Herramientas</b> y el <b>Diseño</b> así como dentro del mismo diseño.<br><br>Para quitar un campo del diseño, arrastre el campo a la <b>Papelera de Reciclaje</b>. El campo pasará a estar disponible en la Caja de Herramientas para ser agregado al diseño.',
		//this defualt will be used for edit view
		'default'	=> 'The <b>Layout</b> area contains the fields that are currently displayed within the <b>EditView</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.',
		'saveBtn'	=> 'Haga clic en <b>Guardar</b> para preservar los cambios que ha realizado al diseño desde la última vez que lo guardó.<br><br>Los cambios no se mostrarán en el módulo hasta que Despliegue los cambios guardados.',
		'historyBtn'=> 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
		'historyDefault'=> 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
		'publishBtn'=> 'Haga clic en <b>Guardar y Desplegar</b> para guardar todos los cambios que ha realizado al diseño desde la última vez que lo guardó, y para dejar activos los cambios en el módulo.<br><br>El diseño será mostrado de nuevo inmediatamente en el módulo.',
		'toolbox'	=> 'La <b>Caja de Herramientas</b> contiene la <b>Papelera de Reciclaje</b>, elementos de diseño adicionales y el conjunto de campos disponibles para ser agregados al diseño.<br/><br/>Los elementos de diseño y los campos de la Caja de Herramientas pueden ser arrastrados y soltados en el diseño, y los elementos de diseño y los campos pueden ser arrastrados y soltados del diseño a la Caja de Herramientas.<br><br>Los elementos de diseño son <b>Paneles</b> y <b>Filas</b>. Agregando una nueva fila o un nuevo panel al diseño proporciona ubicaciones adicionales en el diseño para los campos.<br/><br/>Arrastre y suelte cualquier campo en la Caja de Herramientas o en el diseño a una posición de campo ocupada para intercambiar las ubicacines de los dos campos.<br/><br/>El campo de <b>Relleno</b> crea espacio vacío en el diseño allí donde es colocado.',
		'panels'	=> 'El área de <b>Diseño</b> proporciona una vista sobre cómo el diseño aparecerá en el módulo cuando los cambios realizados al diseño sean desplegados.<br/><br/>Puede reposicionar campos, filas y paneles arrastrándolos y soltándolos en la ubicación deseada.<br/><br/>Quite elementos arrastrándolos y soltándolos en la <b>Papelera de Reciclaje</b> de la Caja de Herramientas, o agregue nuevos elementos y campos arrastrándolos de la <b>Caja de Herramientas</b> y soltándolos en la ubicación deseada del diseño.',
		'delete'	=> 'Arrastre y suelte cualquier elemento aquí para quitarlo del diseño',
		'property'	=> 'Edite la etiqueta mostrada para este campo. <br/>El <b>Orden de Tabulación</b> controla en qué orden la tecla tabulador cambiará el foco entre los distintos campos.',
	),
	'fieldsEditor'=>array(
		'default'	=> 'The <b>Fields</b> that are available for the module are listed here by Field Name.<br><br>Custom fields created for the module appear above the fields that are available for the module by default.<br><br>To edit a field, click the <b>Field Name</b>.<br/><br/>To create a new field, click <b>Add Field</b>.',
		'mbDefault'=> 'Los <b>Campos</b> disponibles para un módulo se listan aquí por Nombre de Campo.<br><br>Para personalizar la etiqueta del campo plantilla, haga clic en el Nombre de Campo.<br><br>Para crear un nuevo campo, haga clic en <b>Agregar Campo</b>. La etiqueta y el resto de propiedades del nuevo campo pueden ser editadas tras su creación haciendo clic en el Nombre de Campo.<br><br>Tras el despliegue del módulo, los nuevos campos creados con el Contructor de Módulos serán tradados como campos estándar del módulo desplegado en el Estudio.',
        'addField'	=> 'Seleccione un <b>Tipo de Datos</b> para el nuevo campo. El tipo que seleccione determinará que tipo de caracteres pueden introducirse para el campo. Por ejemplo, sólo se podrán introducir números enteros en campos que son del tipo de datos Entero.<br><br> Provea al campo de un <b>Nombre</b>.  El nombre debe ser alfanumérico y no contener espacios. El carácter subrayado también es válido.<br><br> La <b>Etiqueta de Visualización</b> es la etiqueta que aparecerá para los campos en los diseños de módulos.  La <b>Etiqueta del Sistema</b> se utiliza para hacer referencia al campo en el código.<br><br> Según el tipo de datos seleccionado para el campo, algunas o todas las siguientes propiedades podrán ser establecidas en el mismo:<br><br> El <b>Texto de Ayuda</b> aparece temporalmente cuando el usuario mantiene el cursor sobre el campo y puede ser utilizado para indicar al usuario el tipo de entrada deseada.<br><br> El <b>Texto de Comentario</b> sólo se ve en el Estudio y/o Constructor de Módulos, y puede ser utilizado para describir el campo a los administradores.<br><br> El <b>Valor por Defecto</b> que aparecerá en el campo.  Los usuarios pueden introducir un nuevo valor en el campo o dejar el valor predeterminado.<br><br> Seleccione la opción de <b>Actualización Masiva</b> para poder utilizar la característica de Actualización Masiva en el campo.<br><br>El valor del <b>Tamaño Máximo</b> determina el máximo número de caracteres que pueden ser introducidos en el campo.<br><br> Seleccione la opción <b>Campo Requerido</b> para hacer el campo requerido. Debe de suministrarse un valor para este campo para poder guardar un registro que lo contenga.<br><br> Seleccione la opción <b>Informable</b> para permitir que el campo sea utilizado en filtros y para mostrar datos en Informes.<br><br> Seleccione la opción <b>Auditar</b> para poder realizar un seguimiento de los cambios el campo en el Registro de Cambios.<br><br>Seleccione una de las opciones en el campo <b>Importable</b> para permitir, prohibir o requerir que el campo sea importado mediante el Asistente de Importación.<br><br>Seleccione una opción en el campo <b>Combinar Duplicados</b> para habilitar o no las características de Combinar Duplicados y Búsqueda de Duplicados.<br><br>Para ciertos tipos de datos se podrán establecer propiedades adicionales.',
		'editField' => 'La <b>Etiqueta de Visualización</b> de un campo de Sugar puede ser personalizada. El resto de propiedades del campo no pueden ser personalizadas.<br><br>Haga clic en <b>Clonar</b> para crear un nuevo campo con las mismas propiedades.',
        'mbeditField' => 'La <b>Etiqueta de Visualización</b> de un campo de Sugar puede ser personalizada. El resto de propiedades del campo no pueden ser personalizadas.<br><br>Haga clic en <b>Clonar</b> para crear un nuevo campo con las mismas propiedades.<br><br>Para quitar un campo plantilla de modo que no aparezca en el módulo, quite el campo de los <b>Diseños</b> correspondientes.'

	),
	'exportcustom'=>array(
	    'exportHelp'=> 'Exportar personalizaciones realizadas en el Estudio creando paquetes que pueden ser subidos en otras instancias de Sugar a través del <b>Cargador de Módulos</b>.<br><br>  Antes de empezar, proporcione un <b>Nombre de Paquete</b>.  Puede introducir la información sobre el <b>Autor</b> y la <b>Descripción</b> del paquete también.<br><br>Seleccione el o los módulos que contengan las personalizaciones que desea exportar. Sólo aquellos módulos que contengan personalizaciones aparecerán en la lista de selección.<br><br>Haga clic en <b>Exportar</b> para crear un archivo .zip para el paquete que contenga las personalizaciones.',
	    'exportCustomBtn'=> 'Haga clic en <b>Exportar</b> para crear un archivo .zip para el paquete que contenga las personalizaciones que desea exportar.',
	    'name'=> 'This is the <b>Name</b> of the package. This name will be displayed during installation.',
	    'author'=> 'This is the <b>Author</b> that is displayed during installation as the name of the entity that created the package. The Author can be either an individual or a company.',
	    'description'=> 'Esta es la <b>Descripción</b> del paquete que se muestra durante la instalación.',
	),
	'studioWizard'=>array(
		'mainHelp' 	=> 'Bienvenido al área de <b>Herramientas de Desarrollo</b>. <br/><br/>Use las herramientas de este área para crear y gestionar módulos y campos tanto estándar como personalizados.',
		'studioBtn'	=> 'Use el <b>Estudio</b> para personalizar los módulos desplegados.',
		'mbBtn'		=> 'Use el <b>Constructor de Módulos</b> para crear nuevos módulos.',
		'sugarPortalBtn' => 'Use el <b>Editor de Portal de Sugar</b> para administrar y personalizar el Portal Sugar.',
		'dropDownEditorBtn' => 'Use el <b>Editor de Listas Desplegables</b> para agregar y editar listas desplegables globales para campos de lista desplegable.',
		'appBtn' 	=> 'El modo de aplicación le permite personalizar varias propiedades del programa, como por ejemplo, cuántos informes se muestran en la página de inicio',
		'backBtn'	=> 'Volver al paso previo.',
		'studioHelp'=> 'Utilice el <b>Estudio</b> para establecer qué información del módulo se muestra y cómo lo hace.',
		'moduleBtn'	=> 'Haga clic para editar este módulo.',
		'moduleHelp'=> 'Los componentes del módulo que puede personalizar aparecen aquí.<br><br>Haga clic en un icono para seleccionar el componente a editar.',
		'fieldsBtn'	=> 'Crear y personalizar los <b>Campos</b> que almacenan la información en el módulo.',
		'labelsBtn' => 'Editar las <b>Etiquetas</b> mostradas para los campos y otros títulos del módulo.'	,
	    'relationshipsBtn' => 'Agregar nuevas <b>Relaciones</b> del módulo o ver las existentes.' ,
		'layoutsBtn'=> 'Personalizar los <b>Diseños</b> del módulo.  Los diseños son las diferentes vistas del módulo que contienen campos.<br><br>Puede establecer qué campos aparecen y cómo son organizados en cada diseño.',
		'subpanelBtn'=> 'Determina qué campos aparecen en los <b>Subpaneles</b> del módulo.',
		'portalBtn' => 'Personalizar los <b>Diseños</b> del módulo que aparecen en el <b>Portal Sugar</b>.',
		'layoutsHelp'=> 'Los <b>Diseños</b> de un módulo que pueden ser personalizados aparecen aquí.<br><br>Los diseños muestran los campos y sus datos.<br><br>Haga clic en un icono para seleccionar el diseño a editar.',
		'subpanelHelp'=> 'Los <b>Subpaneles</b> de un módulo que pueden ser personalizados aparecen aquí.<br><br>Haga clic en un icono para seleccionar el módulo a editar.',
        'newPackage'=> 'Haga clic en <b>Nuevo Paquete</b> para crear un nuevo paquete.',
        'exportBtn' => 'Haga clic en <b>Exportar Personalizaciones</b> para crear y descargar un paquete que contenga las personalizaciones que ha realizado en el Estudio a varios módulos específicos.',
        'mbHelp'    => 'Use el <b>Constructor de Módulos</b> para crear paquetes que contengan módulos personalizados basados en objetos estándar o personalizados.',
	    'viewBtnEditView' => 'Personalizar el diseño de <b>Vista de Edición</b> del módulo.<br><br>La Vista de Edición es el formulario que contiene los campos de entrada para capturar los datos introducidos por el usuario.',
	    'viewBtnDetailView' => 'Personalizar el diseño <b>Vista de Detalle</b> del módulo.<br><br>La Vista de Detalle muestra datos de campos introducidos por el usuario.',
		'viewBtnDashlet' => 'Personalizar el <b>Sugar Dashlet</b> del módulo, incluyendo la Vista de Lista y la Búsqueda del Sugar Dashlet.<br><br>El Sugar Dashlet estará disponible para ser añadido a las páginas del módulo Inicio.',
	    'viewBtnListView' => 'Personalizar el diseño <b>Vista de Lista</b> del módulo.<br><br>Los resultados de la Búsqueda aparecen en la Vista de Lista.',
	    'searchBtn' => 'Personalizar los diseños de <b>Búsqueda</b> del módulo.<br><br>Determina qué campos pueden ser utilizados para filtrar los registros que aparecen en la Vista de Lista.',
		'viewBtnQuickCreate' => 'Personalizar el diseño <b>Creación Rápida</b> del módulo.<br><br>El formulario de Creación Rápida aparece en los subpaneles y en el módulo de Emails.',

	    'searchHelp'=> 'Los formularios de <b>Búsqueda</b> que pueden ser personalizados aparecen aquí. <br><br>Los formularios de búsqueda contienen campos para filtrar registros.<br><br>Haga clic en un icono para seleccionar el diseño de búsqueda a editar.',
	    'dashletHelp' => 'Los diseños de <b>Sugar Dashlet</b> que pueden ser personalizados aparecen aquí.<br><br>El Sugar Dashlet estará disponible para ser añadido a las páginas del módulo Inicio.',
	    'DashletListViewBtn' => 'La <b>Vista de Lista de Sugar Dashlet</b> muestra los registros basándose en los fíltros de búsqueda del Sugar Dashlet.',
	    'DashletSearchViewBtn' => 'La <b>Búsqueda de Sugar Dashlet</b> filtra los registros de la vista de lista de Sugar Dashlet.',
	    'popupHelp' => 'The <b>Popup</b> layouts that can be customized appear here.<br>',
	    'PopupListViewBtn' => 'The <b>Popup ListView</b> displays records based on the Popup search views.',
	    'PopupSearchViewBtn' => 'The <b>Popup Search</b> views records for the Popup listview.',
		'BasicSearchBtn' => 'Personalizar el formulario de <b>Búsqueda Básica</b> que aparece en la pestaña de Búsqueda Básica en el área de Búsqueda del módulo.',
	    'AdvancedSearchBtn' => 'Personalizar el formulario de <b>Búsqueda Avanzada</b> que aparece en la pestaña de Búsqueda Avanzada en el área de Búsqueda del módulo.',
	    'portalHelp' => 'Administrar y personalizar el <b>Portal de Sugar</b>.',
	    'SPUploadCSS' => 'Subir una <b>Hoja de Estilos</b> para el Portal de Sugar.',
	    'SPSync' => '<b>Sincronice</b> las personalizaciones a la instancia del Portal de Sugar.',
	    'Layouts' => 'Personalizar los <b>Diseños</b> de los módulos del Portal de Sugar.',
	    'portalLayoutHelp' => 'Los módulos del Portal de Sugar aparecen en este área.<br><br>Seleccione un módulo para editar sus <b>Diseños</b>.',
		'relationshipsHelp' => 'Todas las <b>Relaciones</b> que existen entre el módulo y otros módulos desplegados aparecen aquí.<br><br>El <b>Nombre</b> de la relación es un nombre generado por el sistema para la relación.<br><br>El <b>Módulo Principal</b> es el módulo que posee las relaciones.  Por ejemplo, todas las propiedades de las relaciones para las que el módulo de Cuentas es el módulo principal se almacenan en las tablas de base de datos de Cuentas.<br><br>El <b>Tipo</b> es el tipo de relación existente entre el Módulo Principal y el <b>Módulo Relacionado</b>.<br><br>Haga clic en el título de una columna para ordenar por la columna.<br><br>Haga clic en una fila de la tabla de la relación para ver y editar las propiedades asociadas con la relación.<br><br>Haga clic en <b>Agregar Relación</b> para crear una nueva relación.<br><br>Se pueden crear relaciones entre dos módulos desplegados cualesquiera.',
        'relationshipHelp'=> 'Las <b>Relaciones</b> pueden ser creadas entre el módulo y otro módulo personalizado o desplegado.<br><br> Las relaciones se expresan visualmente a través de subpaneles y relacionan campos de los registros del módulo.<br><br>Seleccione uno de los siguientes <b>Tipos</b> de relación para el módulo:<br><br> <b>Uno-a-Uno</b> - Los registros de ambos módulos contendrán campos relacionados.<br><br> <b>Uno-a-Muchos</b> - Los registros del Módulo Principal contendrán un subpanel, y los registros del Módulo Relacionado contendrán un campo relacionado.<br><br> <b>Muchos-a-Muchos</b> - Los registros de ambos módulos mostrarán subpaneles.<br><br> Seleccione el <b>Módulo Relacionado</b> para la relación. <br><br>Si el tipo de relación implica el uso de subpaneles, seleccione la vista de subpanel para los módulos correspondientes.<br><br> Haga clic en <b>Guardar</b> para crear la relación.',
		'convertLeadHelp' => 'Here you can add modules to the convert layout screen and modify the layouts of existing ones.<br/>You can re-order the modules by dragging their rows in the table.<br/><br/>\n<b>Module:</b> The name of the module.<br/><br/>\n<b>Required:</b> Required modules must be created or selected before the lead can be converted.<br/><br/>\n<b>Copy Data:</b> If checked, fields from the lead will be copied to fields with the same name in the newly created records.<br/><br/>\n<b>Allow Selection:</b> Modules with a relate field in Contacts can be selected rather than created during the convert lead process.<br/><br/>\n<b>Edit:</b> Modify the convert layout for this module.<br/><br/>\n<b>Delete:</b> Remove this module from the convert layout.<br/><br/>',
        'editDropDownBtn' => 'Editar una Lista Desplegable global',
		'addDropDownBtn' => 'Agregar una nueva Lista Desplegable global',
	),
	'fieldsHelp'=>array(
		'default'=> 'The <b>Fields</b> in the module are listed here by Field Name.<br><br>The module template includes a pre-determined set of fields.<br><br>To create a new field, click <b>Add Field</b>.<br><br>To edit a field, click the <b>Field Name</b>.<br/><br/>After the module is deployed, the new fields created in Module Builder, along with the template fields, are regarded as standard fields in Studio.',
	),
	'relationshipsHelp'=>array(
		'default'=> 'The <b>Relationships</b> that have been created between the module and other modules appear here.<br><br>The relationship <b>Name</b> is the system-generated name for the relationship.<br><br>The <b>Primary Module</b> is the module that owns the relationships. The relationship properties are stored in the database tables belonging to the primary module.<br><br>The <b>Type</b> is the type of relationship exists between the Primary module and the <b>Related Module</b>.<br><br>Click a column title to sort by the column.<br><br>Click a row in the relationship table to view and edit the properties associated with the relationship.<br><br>Click <b>Add Relationship</b> to create a new relationship.',
		'addrelbtn'=> 'ayuda emergente para agregar relación...',
		'addRelationship'=> 'Las <b>Relaciones</b> pueden ser creadas entre el módulo y otro módulo personalizado o desplegado.<br><br> Las relaciones se expresan visualmente a través de subpaneles y relacionan campos de los registros del módulo.<br><br>Seleccione uno de los siguientes <b>Tipos</b> de relación para el módulo:<br><br> <b>Uno-a-Uno</b> - Los registros de ambos módulos contendrán campos relacionados.<br><br> <b>Uno-a-Muchos</b> - Los registros del Módulo Principal contendrán un subpanel, y los registros del Módulo Relacionado contendrán un campo relacionado.<br><br> <b>Muchos-a-Muchos</b> - Los registros de ambos módulos mostrarán subpaneles.<br><br> Seleccione el <b>Módulo Relacionado</b> para la relación. <br><br>Si el tipo de relación implica el uso de subpaneles, seleccione la vista de subpanel para los módulos correspondientes.<br><br> Haga clic en <b>Guardar</b> para crear la relación.',
	),
	'labelsHelp'=>array(
		'default'=> 'The <b>Labels</b> for the fields and other titles in the module can be changed.<br><br>Edit the label by clicking within the field, entering a new label and clicking <b>Save</b>.<br><br>If any language packs are installed in the application, you can select the <b>Language</b> to use for the labels.',
		'saveBtn'=> 'Click <b>Save</b> to save all changes.',
		'publishBtn'=> 'Click <b>Save & Deploy</b> to save all changes and make them active.',
	),
	'portalSync'=>array(
	    'default' => 'Enter the <b>Sugar Portal URL</b> of the portal instance to update, and click <b>Go</b>.<br><br>Then enter a valid Sugar user name and password, and then click <b>Begin Sync</b>.<br><br>The customizations made to the Sugar Portal <b>Layouts</b>, along with the <b>Style Sheet</b> if one was uploaded, will be transferred to specified the portal instance.',
	),
	'portalStyle'=>array(
	    'default' => 'You can customize the look of the Sugar Portal by using a style sheet.<br><br>Select a <b>Style Sheet</b> to upload.<br><br>The style sheet will be implemented in the Sugar Portal the next time a sync is performed.',
	),
	),

// assistantHelp

'assistantHelp'=>array(
	'package'=>array(
			//custom begin
			'nopackages'=> 'Para empezar un proyecto, haga clic en <b>Nuevo Paquete</b> y creará un nuevo paquete en el que albergar sus módulos personalizados. <br/><br/>Cada paquete puede contener uno o más módulos.<br/><br/>Por ejemplo, puede querer crear un paquete que contenga un módulo personalizado relacionado con el módulo estándar de Cuentas. O puede querer crear un paquete que contenga varios módulos nuevos que trabajan de forma conjunta como un proyecto y que están relacionados entre si y con otros módulos ya existentes en la aplicación.',
			'somepackages'=> 'Un <b>paquete</b> actúa como contenedor de módulos pesonalizados, todos los cuales son parte de un proyecto. El paquete puede contener uno o más <b>módulos</b> personalizados que pueden estar relacionados entre ellos o con otros módulos de la aplicación.<br/><br/>Tras la creación de un paquete para su proyecto, puede crear módulos para el paquete de forma inmediata, o volver al Constructor de Módulos más tarde para completar el proyecto.<br><br>Cuando el proyecto ha sido completado, puede <b>Desplegar</b> el paquete para instalar los módulos personalizados dentro de la aplicación.',
			'afterSave'=> 'Su nuevo paquete debería contener al menos un módulo. Puede crear uno o más módulos personalizados para el paquete.<br/><br/>Haga clic en <b>Nuevo Módulo</b> para crear un módulo personalizado para este paquete.<br/><br/> Tras la creación de al menos un módulo, puede publicar o desplegar el paquete y dejarlo así disponible para su instancia y/o para las instancias de otros usuarios.<br/><br/> Para desplegar el paquete en un paso a su instancia de Sugar, haga clic en <b>Desplegar</b>.<br><br>Haga clic en <b>Publicar</b> para guardar el paquete como un archivo .zip. Tras guardar el archivo .zip en su equipo, utilice el <b>Cargador de Módulos</b> para subir e instalar el paquete en su instancia de Sugar.  <br/><br/>Puede distribuir el archivo a otros usuarios para que lo suban e instalen en sus propias instancias de Sugar.',
			'create'=> 'A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom <b>modules</b> that can be related to each other or to other modules in the application.<br/><br/>After creating a package for your project, you can create modules for the package right away, or you can return to the Module Builder at a later time to complete the project.',
			),
	'main'=>array(
		'welcome'=> 'Use las <b>Herramientas de Desarrollo</b> para crear y administrar módulos y campos tanto estándar como personalizados. <br/><br/>Para administrar los módulos de la aplicación, haga clic en <b>Estudio</b>. <br/><br/>Para crear módulos personalizados, haga clic en <b>Constructor de Módulos</b>.',
		'studioWelcome'=> 'Todos los módulos actualmente instalados, incluyendo los objetos estándares así como los cargados por un módulo, son personalizables dentro del Estudio.'
	),
	'module'=>array(
		'somemodules'=> 'Ya que el paquete actual contiene al menos un módulo, puede <b>Desplegar</b> los módulos en el paquete dentro de su instancia de Sugar o <b>Publicar</b> el paquete a instalar en la instancia de Sugar actual o en otra instancia utilizando el <b>Cargador de Módulos</b>.<br/><br/>Para instalar el paquete directamente en su instancia de Sugar, haga clic en <b>Desplegar</b>.<br><br>Para crear un archivo .zip para el paquete que pueda ser cargado e instalado tanto en la instancia actual de Sugar como en otras instancias mediante el <b>Cargador de Módulos</b>, haga clic en <b>Publicar</b>.<br/><br/> Puede construir los módulos para este paquete en etapas, y publicarlos o desplegarlos cuando se sienta preparado para ello. <br/><br/>Tras publicar o deplegar de un paquete, puede hacer cambios a las propiedades del mismo y personalizar los módulos.  Tras ello, publique o despliegue de nuevo el paquete para que los cambios sean aplicados.' ,
		'editView'=> 'Aquí puede editar los campos existentes. Puede quitar cualquiera de los campos existentes o agregar los campos disponibles en el panel situado a la izquierda.',
		'create'=> 'When choosing the type of <b>Type</b> of module that you wish to create, keep in mind the types of fields you would like to have within the module. <br/><br/>Each module template contains a set of fields pertaining to the type of module described by the title.<br/><br/><b>Basic</b> - Provides basic fields that appear in standard modules, such as the Name, Assigned to, Team, Date Created and Description fields.<br/><br/> <b>Company</b> - Provides organization-specific fields, such as Company Name, Industry and Billing Address.  Use this template to create modules that are similar to the standard Accounts module.<br/><br/> <b>Person</b> - Provides individual-specific fields, such as Salutation, Title, Name, Address and Phone Number.  Use this template to create modules that are similar to the standard Contacts and Leads modules.<br/><br/><b>Issue</b> - Provides case- and bug-specific fields, such as Number, Status, Priority and Description.  Use this template to create modules that are similar to the standard Cases and Bugs modules.<br/><br/>Note: After you create the module, you can edit the labels of the fields provided by the template, as well as create custom fields to add to the module layouts.',
		'afterSave'=> 'Customize the module to suit your needs by editing and creating fields, establishing relationships with other modules and arranging the fields within the layouts.<br/><br/>To view the template fields and manage custom fields within the module, click <b>View Fields</b>.<br/><br/>To create and manage relationships between the module and other modules, whether modules already in the application or other custom modules within the same package, click <b>View Relationships</b>.<br/><br/>To edit the module layouts, click <b>View Layouts</b>. You can change the Detail View, Edit View and List View layouts for the module just as you would for modules already in the application within Studio.<br/><br/> To create a module with the same properties as the current module, click <b>Duplicate</b>.  You can further customize the new module.',
		'viewfields'=> 'Los campos del módulo pueden ser personalizados para ajustarse a sus necesidades.<br/><br/>No puede eliminar campos estándar, pero puede quitarlos de los diseños correspondientes dentro de las páginas de Diseños. <br/><br/>Puede editar las etiquetas de los campos estándar. El resto de propiedades de los campos estándar no son editables. No obstante, puede crear fácilmente nuevos campos que tengan propiedades similares haciendo clic en el nombre de un campo y después en <b>Clonar</b> dentro del formulario de <b>Propiedades</b>.  Introduzca cualquier propiedad nueva, y haga clic en <b>Guardar</b>.<br/><br/>Si está personalizando un nuevo módulo, una vez éste haya sido instalado, no todas las propiedades de los campos podrán ser editadas.  Establezca todas las propiedades para los campos estándar y personalizados antes de que publique e instale el paquete que contiene el módulo personalizado.',
		'viewrelationships'=> 'Puede crear relaciones muchos-a-muchos entre el módulo actual y cualquier otro módulo del paquete, y/o entre el módulo actual y otros módulos ya instalados en la aplicación.<br><br> Para crear relaciones uno-a-muchos y uno-a-uno, cree campos <b>Relativo a</b> y <b>Posiblemente Relativo a</b> para los módulos.',
		'viewlayouts'=> 'Puede controlar qué módulos están disponibles para captura de datos desde la <b>Vista de Edición</b>.  También puede controlar qué datos son mostrados desde la <b>Vista de Detalle</b>.  Las vistas no han de ser iguales. <br/><br/>El formulario de Creación Rápida se muestra cuando hace clic en <b>Crear</b> dentro del subpanel de un módulo. Por defecto, el diseño del formulario de <b>Creación Rápida</b> es el mismo que el diseño por defecto de <b>Vista de Edición</b>. Puede personalizar el formulario de Creación Rápida de forma que contenga menos y/o diferentes campos que el diseño de Vista de Edición. <br><br>Puede establecer la seguridad del módulo utilizando la personalización del Diseño conjuntamente con la <b>Administración de Roles</b>.<br><br>',
		'existingModule' => 'Tras crear y personalizar este módulo, puede crear módulos adicionales o volver al paquete para <b>Publicar</b> o <b>Desplegar</b> el mismo.<br><br>Si desea crear módulos adicionales, haga clic en <b>Duplicar</b> para crear un módulo con las mismas propiedades que el módulo actual, o vuelva a navegar al paquete y haga clic en <b>Nuevo Módulo</b>.<br><br> Si ya está listo para <b>Publicar</b> o <b>Desplegar</b> el paquete que contiene este módulo, vuelva a navegar al paquete para realizar estas funciones. Puede publicar y desplegar paquetes que contengan al menos un módulo.',
		'labels'=> 'Las etiquetas de los campos estándar así como las de los campos personalizados pueden ser cambiadas. Los cambios a las etiquetas de los campos no afecta a los datos almacenados en los mismos.',
	),
	'listViewEditor'=>array(
		'modify'	=> 'There are three columns displayed to the left. The "Default" column contains the fields that are displayed in a list view by default, the "Available" column contains fields that a user can choose to use for creating a custom list view, and the "Hidden" column contains fields available for you as an admin to either add to the default or Available columns for use by users but are currently disabled.',
		'savebtn'	=> 'Clicking <b>Save</b> will save all changes and make them active.',
		'Hidden' 	=> 'Hidden fields are fields that are not currently available to users for use in list views.',
		'Available' => 'Available fields are fields that are not shown by default, but can be enabled by users.',
		'Default'	=> 'Default fields are displayed to users who have not created custom list view settings.'
	),

	'searchViewEditor'=>array(
		'modify'	=> 'There are two columns displayed to the left. The "Default" column contains the fields that will be displayed in the search view, and the "Hidden" column contains fields available for you as an admin to add to the view.',
		'savebtn'	=> 'Clicking <b>Save & Deploy</b> will save all changes and make them active.',
		'Hidden' 	=> 'Hidden fields are fields that will not be shown in the search view.',
		'Default'	=> 'Default fields will be shown in the search view.'
	),
	'layoutEditor'=>array(
		'default'	=> 'There are two columns displayed to the left. The right-hand column, labeled Current Layout or Layout Preview, is where you change the module layout. The left-hand column, entitled Toolbox, contains useful elements and tools for use when editing the layout. <br/><br/>If the layout area is titled Current Layout then you are working on a copy of the layout currently used by the module for display.<br/><br/>If it is titled Layout Preview then you are working on a copy created earlier by a click on the Save button, that might have already been changed from the version seen by users of this module.',
		'saveBtn'	=> 'Clicking this button saves the layout so that you can preserve your changes. When you return to this module you will start from this changed layout. Your layout however will not be seen by users of the module until you click the Save and Publish button.',
		'publishBtn'=> 'Click this button to deploy the layout. This means that this layout will immediately be seen by users of this module.',
		'toolbox'	=> 'The toolbox contains a variety of useful features for editing layouts, including a trash area, a set of additional elements and a set of available fields. Any of these can be dragged and dropped onto the layout.',
		'panels'	=> 'This area shows how your layout will look to users of this module when it is depolyed.<br/><br/>You can reposition elements such as fields, rows and panels by dragging and dropping them; delete elements by dragging and dropping them on the trash area in the toolbox, or add new elements by dragging them from the toolbox and dropping them on to the layout in the desired position.'
	),
	'dropdownEditor'=>array(
		'default'	=> 'There are two columns displayed to the left. The right-hand column, labeled Current Layout or Layout Preview, is where you change the module layout. The left-hand column, entitled Toolbox, contains useful elements and tools for use when editing the layout. <br/><br/>If the layout area is titled Current Layout then you are working on a copy of the layout currently used by the module for display.<br/><br/>If it is titled Layout Preview then you are working on a copy created earlier by a click on the Save button, that might have already been changed from the version seen by users of this module.',
		'dropdownaddbtn'=> 'Haciendo clic en este botón se añade un nuevo elemento a la lista desplegable.',

	),
	'exportcustom'=>array(
	    'exportHelp'=> 'Customizations made in Studio within this instance can be packaged and deployed in another instance.  <br><br>Provide a <b>Package Name</b>.  You can provide <b>Author</b> and <b>Description</b> information for package.<br><br>Select the module(s) that contain the customizations to export. (Only modules containing customizations will appear for you to select.)<br><br>Click <b>Export</b> to create a .zip file for the package containing the customizations.  The .zip file can be uploaded in another instance through <b>Module Loader</b>.',
	    'exportCustomBtn'=> 'Haga clic en <b>Exportar</b> para crear un archivo .zip para el paquete que contenga las personalizaciones que desea exportar.',
	    'name'=> 'The <b>Name</b> of the package will be displayed in Module Loader after the package is uploaded for installation in Studio.',
	    'author'=> 'The <b>Author</b> is the name of the entity that created the package. The Author can be either an individual or a company.<br><br>The Author will be displayed in Module Loader after the package is uploaded for installation in Studio.',
	    'description'=> 'The <b>Description</b> of the package will be displayed in Module Loader after the package is uploaded for installation in Studio.',
	),
	'studioWizard'=>array(
		'mainHelp' 	=> 'Welcome to the <b>Developer Tools</b1> area. <br/><br/>Use the tools within this area to create and manage standard and custom modules and fields.',
		'studioBtn'	=> 'Use <b>Studio</b> to customize installed modules by changing the field arrangement, selecting what fields are available and creating custom data fields.',
		'mbBtn'		=> 'Use el <b>Constructor de Módulos</b> para crear nuevos módulos.',
		'appBtn' 	=> 'Use Application mode to customize various properties of the program, such as how many TPS reports are displayed on the homepage',
		'backBtn'	=> 'Volver al paso previo.',
		'studioHelp'=> 'Use <b>Studio</b> to customize installed modules.',
		'moduleBtn'	=> 'Haga clic para editar este módulo.',
		'moduleHelp'=> 'Select the module component that you would like to edit',
		'fieldsBtn'	=> 'Edit what information is stored in the module by controlling the <b>Fields</b> in the module.<br/><br/>You can edit and create custom fields here.',
		'labelsBtn' => 'Click <b>Save</b> to save your custom labels.',
		'layoutsBtn'=> 'Customize the <b>Layouts</b> of the Edit, Detail, List and search views.',
		'subpanelBtn'=> 'Edit what information is shown in this modules subpanels.',
		'layoutsHelp'=> 'Select a <b>Layout to edit</b>.<br/<br/>To change the layout that contains data fields for entering data, click <b>Edit View</b>.<br/><br/>To change the layout that displays the data entered into the fields in the Edit View, click <b>Detail View</b>.<br/><br/>To change the columns which appear in the default list, click <b>List View</b>.<br/><br/>To change the Basic and Advanced search form layouts, click <b>Search</b>.',
		'subpanelHelp'=> 'Select a <b>Subpanel</b> to edit.',
		'searchHelp' => 'Select a <b>Search</b> layout to edit.',
		'labelsBtn'	=> 'Click <b>Save</b> to save your custom labels.',
        'newPackage'=> 'Haga clic en <b>Nuevo Paquete</b> para crear un nuevo paquete.',
        'mbHelp'    => '<b>Welcome to Module Builder.</b><br/><br/>Use <b>Module Builder</b> to create packages containing custom modules based on standard or custom objects. <br/><br/>To begin, click <b>New Package</b> to create a new package, or select a package to edit.<br/><br/> A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom modules that can be related to each other or to modules in the application. <br/><br/>Examples: You might want to create a package containing one custom module that is related to the standard Accounts module. Or, you might want to create a package containing several new modules that work together as a project and that are related to each other and to modules in the application.',
        'exportBtn' => 'Click <b>Export Customizations</b> to create a package containing customizations made in Studio for specific modules.',
	),

	),
);
