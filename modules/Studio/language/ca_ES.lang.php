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
'LBL_EDIT_LAYOUT'=>'Editar Diseny',
'LBL_EDIT_ROWS'=>'Editar Files',
'LBL_EDIT_COLUMNS'=>'Editar Columnes',
'LBL_EDIT_LABELS'=>'Editar Etiquetes',
'LBL_EDIT_FIELDS'=>'Editar Camps Personalitzats',
'LBL_ADD_FIELDS'=>'Agregar Camps Personalitzat',
'LBL_DISPLAY_HTML'=>'Mostrar codi HTML',
'LBL_SELECT_FILE'=> 'Seleccionar Arxiu',
'LBL_SAVE_LAYOUT'=> 'Desar Diseny',
'LBL_SELECT_A_SUBPANEL' => 'Seleccionar un Subpanell',
'LBL_SELECT_SUBPANEL' => 'Seleccionar Subpanell',
'LBL_MODULE_TITLE' => 'Estudi',
'LBL_TOOLBOX' => 'Caixa d\'Eines',
'LBL_STAGING_AREA' => 'Àrea de Disseny (arrossegui i deixi anar elements aquí)',
'LBL_SUGAR_FIELDS_STAGE' => 'Camps de SuiteCRM (faci clic en els elements per a afegir-los a l\'àrea de disseny)',
'LBL_SUGAR_BIN_STAGE' => 'Paperera de SuiteCRM (faci clic als elements per afegir-los a l\'àrea de disseny)',
'LBL_VIEW_SUGAR_FIELDS' => 'Veure camps de SuiteCRM',
'LBL_VIEW_SUGAR_BIN' => 'Veure paperera de SuiteCRM',
'LBL_FAILED_TO_SAVE' => 'Error al Desar',
'LBL_CONFIRM_UNSAVE' => 'Els canvis no s\'han guardat i es perdran. Està segur de que vol continuar?',
'LBL_PUBLISHING' => 'Publicant ...',
'LBL_PUBLISHED' => 'Publicat',
'LBL_FAILED_PUBLISHED' => 'Error al Publicar',
'LBL_DROP_HERE' => '[Deixar Anar Aquí]',

//CUSTOM FIELDS
'LBL_NAME'=>'Nom',
'LBL_LABEL'=>'Etiqueta',
'LBL_MASS_UPDATE'=>'Actualització Massiva',
'LBL_AUDITED'=>'Auditat',
'LBL_CUSTOM_MODULE'=>'Mòdul',
'LBL_DEFAULT_VALUE'=>'Valor per Defecte',
'LBL_REQUIRED'=>'Requerit',
'LBL_DATA_TYPE'=>'Tipus',


'LBL_HISTORY'=>'Històrial',

//WIZARDS
//STUDIO WIZARD
'LBL_SW_WELCOME'=>'<h2>Benvingut al Estudi!</h2><br> Què desitja fer avui?<br><b> Si us plau, seleccioni una de les següents opcions.</b>',
'LBL_SW_EDIT_MODULE'=>'Editar un Mòdul',
'LBL_SW_EDIT_DROPDOWNS'=>'Editar Llistes Desplegables',
'LBL_SW_EDIT_TABS'=>'Configurar Pestanyes',
'LBL_SW_RENAME_TABS'=>'Renombrar Pestanyes',
'LBL_SW_EDIT_GROUPTABS'=>'Configurar Grups de Pestanyes',
'LBL_SW_EDIT_PORTAL'=>'Editar Portal',
'LBL_SW_EDIT_WORKFLOW'=>'Editar Workflow',
'LBL_SW_REPAIR_CUSTOMFIELDS'=>'Reparar Camps Personalitzats',
'LBL_SW_MIGRATE_CUSTOMFIELDS'=>'Migrar Camps Personalitzats',


//SELECT MODULE WIZARD
'LBL_SMW_WELCOME'=>'<h2>Benvingut al Estudi!</h2><br><b>Si us plau, seleccioni un dels següents mòduls.',

//SELECT MODULE ACTION
'LBL_SMA_WELCOME'=>'<h2>Editar un Mòdul</h2>Què dessitja fer amb aquest mòdul?<br><b>Si us plau, seleccioni l\'acció que desitja realitzar.',
'LBL_SMA_EDIT_CUSTOMFIELDS'=>'Editar Camps Personalitzats',
'LBL_SMA_EDIT_LAYOUT'=>'Editar Diseny',
'LBL_SMA_EDIT_LABELS' =>'Editar Etiquetes',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Vista Preliminar',
'LBL_MB_RESTORE'=>'Restaurar',
'LBL_MB_DELETE'=>'Esborrar',
'LBL_MB_COMPARE'=>'Comparar',
'LBL_MB_WELCOME'=> '<h2>Històrial</h2><br> l\'Historial li perment veure edicions publicades anteriorment del fitxer amb el que actualment està treballant. Pot comparar amb i restaurar versions prèvies. Si restaura un arxiu, aquest es convertirà en el seu arxiu de treball. Ho ha de publicar abans que sigui visible per a qualsevol altra persona.<br> Què desitja fer avui?<br><b> Por favor, seleccioni una de les següents opcions.</b>',

//EDIT DROP DOWNS
'LBL_ED_CREATE_DROPDOWN'=> 'Crea una Llista Desplegable',
'LBL_ED_WELCOME'=>'<h2>Editor de Llistes Desplegables</h2><br><b>Pot editar una llista desplegable existent, o crear una nova.',
'LBL_DROPDOWN_NAME' => 'Nom de Llista Desplegable:',
'LBL_DROPDOWN_LANGUAGE' => 'Llenguatge de Llista Desplegable:',
'LBL_TABGROUP_LANGUAGE' => 'Llenguatge:',

//EDIT CUSTOM FIELDS
'LBL_EC_WELCOME'=>'<h2>Editor de Camps Personalitzats</h2><br><b>Pot veure o editar un camp personalitzat existent, crear un nou camp personalitzat, o netejar la caché de camps personalitzats.',
'LBL_EC_VIEW_CUSTOMFIELDS'=> 'Veure Camps Personalitzats',
'LBL_EC_CREATE_CUSTOMFIELD'=>'Crear Camp Personalitzat',
'LBL_EC_CLEAR_CACHE'=>'Netejar Caché',

//SELECT MODULE
'LBL_SM_WELCOME'=> '<h2>Historial</h2><br><b>Si us plau, seleccioni l\'arxiu que dessitja visualitzar.</b>',
//END WIZARDS

//DROP DOWN EDITOR
'LBL_DD_DISPALYVALUE'=>'Valor de Visualització',
'LBL_DD_DATABASEVALUE'=>'Valor de Base de dades',
'LBL_DD_ALL'=>'Tot',

//BUTTONS
'LBL_BTN_SAVE'=>'Desar',
'LBL_BTN_CANCEL'=>'Cancel·lar',
'LBL_BTN_SAVEPUBLISH'=>'Desar i Publicar',
'LBL_BTN_HISTORY'=>'Històrial',
'LBL_BTN_NEXT'=>'Següent',
'LBL_BTN_BACK'=>'Enrere',
'LBL_BTN_ADDCOLS'=>'Agregar Columnes',
'LBL_BTN_ADDROWS'=>'Agregar Files',
'LBL_BTN_UNDO'=>'Desfer',
'LBL_BTN_REDO'=>'Repetir',
'LBL_BTN_ADDCUSTOMFIELD'=>'Agregar Camp Personalitzat',
'LBL_BTN_TABINDEX'=>'Editar Ordre de Pestanyes',

//TABS
'LBL_TAB_SUBTABS'=>'Subpestanyes',
'LBL_MODULES'=>'Mòduls',
//nsingh: begin bug#15095 fix
'LBL_MODULE_NAME' => 'Administració',
'LBL_CONFIGURE_GROUP_TABS' => 'Configurar Grups de Pestanyes',
 //end bug #15095 fix
'LBL_GROUP_TAB_WELCOME'=>'El disseny dels Grups de Pestanyes s\'usarà sempre que un usuari elegeixi utilitzar Grups de Pestanyes en lloc de les Pestanyes de Mòduls habituals en Dc. Compte>Opcions de Presentació.',
'LBL_RENAME_TAB_WELCOME'=>'Faci clic en el Valor de Visualització de qualsevol pestanya de la següent taula per rebatejar la pestanya.',
'LBL_DELETE_MODULE'=>'&nbsp;Esborrar&nbsp;Mòdul',
'LBL_DISPLAY_OTHER_TAB_HELP' => 'Seleccioni mostrar la pestanya "Altres" a la barra de navegació. Per defecte, la pestanya "Altres" mostra aquells mòduls que encara no s\'han inclòs en altres grups.',
'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Sel·lecciona un dels idiomes disponibles, edita les etiquetes de grup i fes click en guardar i desplegar per aplicar les etiquetes amb l\'idioma escollit.',
'LBL_ADD_GROUP'=>'Afegir Grup',
'LBL_NEW_GROUP'=>'Nou Grup',
'LBL_RENAME_TABS'=>'Renombrar Pestanyes',
'LBL_DISPLAY_OTHER_TAB' => 'Mostrar la pestanya \'Altres\'',

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Per defecte',
'LBL_ADDITIONAL'=>'Addicional',
'LBL_AVAILABLE'=>'Disponible',
'LBL_LISTVIEW_DESCRIPTION'=>'A continuació es mostren tres columnes. La columna "Per defecte" conté els camps que es mostren en una llista per defecte, la columna "Addicional" conté camps que un usuari pot elegir a l\'hora de crear una vista personalitzada, i la columna "Disponible" mostra columnes disponibles per a vostè com a administrador per a, o bé afegir-les a les columnes per defecte, o a les addicionals perquè siguin usades per usuaris ja que actualment no estan sent utilitzades.',
'LBL_LISTVIEW_EDIT'=>'Editor de Llistes',

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Error: Camp Existent',
'ERROR_INVALID_KEY_VALUE'=> "Error: Valor de Clau No vàlid: [']",

//SUGAR PORTAL
'LBL_SW_SUGARPORTAL'=>'Portal de SuiteCRM',
'LBL_SMP_WELCOME'=>' Si us plau, seleccioni el mòdul que desitja editar de la següent llista',
'LBL_SP_WELCOME'=>'Benvingut a l\'estudi per al portal de SuiteCRM. Pot escollit editar mòduls aquí, o realitzar una sincronització amb una instància de portal. <br> Si us plau, escolleixi una opció de la llista següent.',
'LBL_SP_SYNC'=>'Sincronització de Portal',
'LBL_SYNCP_WELCOME'=>'Si us plau, introdueixi l\'URL de la instància de portal que desitja actualitzar i feu clic al botó Vés. <br> Després d\'això, se li demanarà el seu nom i contrasenya. <br> Si us plau, introdueixi el seu nom i contrasenya de SuiteCRM i feu clic al botó Inicia Sincronització.',
'LBL_LISTVIEWP_DESCRIPTION'=>'Té dues columnes a continuació: Per defecte, que inclou els camps que es mostraran, i Disponible, que inclou els camps que no es mostraran, però que estan disponibles per ser mostrats. Simplement ha d\'arrossegar els camps entre ambdues columnes. També pot canviar l\'ordre dels elements en una columna arrossegant-los i deixant-los anar.',
'LBL_SP_STYLESHEET'=>'Pujar un Full d\'Estil',
'LBL_SP_UPLOADSTYLE'=>'Faci clic al botó d\'exploració i seleccioni el full d\'estil que desitja pujar del seu ordinador.<br> La pròxima vegada que realitzi una sincronització al portal, s\'inclourà el full d\'estils.',
'LBL_SP_UPLOADED'=> 'Pujat',
'ERROR_SP_UPLOADED'=>'Si us plau, asseguri\'s que està pujant un full d\'estils CSS.',
'LBL_SP_PREVIEW'=>'Aquí té una presentació preliminar de l\'aparença que tindrà el seu full d\'estils',

	'LBL_SAVE' => 'Desar' /*for 508 compliance fix*/,
	'LBL_UNDO' => 'Desfer' /*for 508 compliance fix*/,
	'LBL_REDO' => 'Repetir' /*for 508 compliance fix*/,
	'LBL_INLINE' => 'de línia' /*for 508 compliance fix*/,
	'LBL_DELETE' => 'Eliminar' /*for 508 compliance fix*/,
	'LBL_ADD_FIELD' => 'Afegir Camp' /*for 508 compliance fix*/,
	'LBL_MAXIMIZE' => 'Maximitzar' /*for 508 compliance fix*/,
	'LBL_MINIMIZE' => 'Minimitzar' /*for 508 compliance fix*/,
	'LBL_PUBLISH' => 'Publicar' /*for 508 compliance fix*/,
	'LBL_ADDROWS' => 'Agregar Files' /*for 508 compliance fix*/,
	'LBL_ADDFIELD' => 'Afegir Camp' /*for 508 compliance fix*/,
	'LBL_EDIT' => 'Editar' /*for 508 compliance fix*/,

'LBL_LANGUAGE_TOOLTIP' => 'Seleccioni l\'idioma que desitja editar.',
'LBL_SINGULAR' => 'Etiqueta singular',
'LBL_PLURAL' => 'Etiqueta plural',
'LBL_RENAME_MOD_SAVE_HELP' => 'Cliqui <b>Desar</b> per aplicar els canvis.'

);
?>