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
	'LBL_LOADING' => 'Carregant' /*for 508 compliance fix*/,
	'LBL_HIDEOPTIONS' => 'Oculta les opcions' /*for 508 compliance fix*/,
	'LBL_DELETE' => 'Eliminar' /*for 508 compliance fix*/,
	'LBL_POWERED_BY_SUGAR' => 'Desenvolupat per SugarCRM' /*for 508 compliance fix*/,

//HOME
'LBL_HOME_EDIT_DROPDOWNS'=>'Editor de Llistes Desplegables',

//ASSISTANT
'LBL_AS_SHOW' => 'Mostrar l\'assistent al futur.',
'LBL_AS_IGNORE' => 'Ignorar l\'assistent en un futur.',
'LBL_AS_SAYS' => 'L\'assistent diu:',


//STUDIO2
'LBL_MODULEBUILDER'=>'Constructor de Mòduls',
'LBL_STUDIO' => 'Estudi',
'LBL_DROPDOWNEDITOR' => 'Editor de Llistes Desplegables',
'LBL_EDIT_DROPDOWN'=>'Editar la llista desplegable',
'LBL_DEVELOPER_TOOLS' => 'Eines de Desenvolupament',
'LBL_SUGARPORTAL' => 'Editor del Portal de SuiteCRM',
'LBL_SYNCPORTAL' => 'Sincronitzar el portal',
'LBL_PACKAGE_LIST' => 'Llista de paquets',
'LBL_HOME' => 'Inici',
'LBL_NONE'=>'-Cap-',
'LBL_DEPLOYE_COMPLETE'=>'Desplegament completat',
'LBL_DEPLOY_FAILED'   =>'Hi ha hagut un error durant el desplegament del procés. Es possible que el seu paquet no s\'hagi instal·lat correctament',
'LBL_ADD_FIELDS'=>'Agregar Camps Personalitzat',
'LBL_AVAILABLE_SUBPANELS'=>'Subpanells disponibles',
'LBL_ADVANCED'=>'Avançat',
'LBL_ADVANCED_SEARCH'=>'Cerca Avançada',
'LBL_BASIC'=>'Bàsic',
'LBL_BASIC_SEARCH'=>'Cerca bàsica',
'LBL_CURRENT_LAYOUT'=>'Disseny',
'LBL_CURRENCY' => 'Moneda',
'LBL_CUSTOM' => 'Personalitzat',
'LBL_DASHLET'=>'Dashlet de SuiteCRM',
'LBL_DASHLETLISTVIEW'=>'Veure llista de Dashlets de SuiteCRM',
'LBL_DASHLETSEARCH'=>'Cercar Dashlet de SuiteCRM',
'LBL_POPUP'=>'Vista de finestra emergent',
'LBL_POPUPLIST'=>'Llista de les vistes emergents',
'LBL_POPUPLISTVIEW'=>'Llista de les vistes emergents',
'LBL_POPUPSEARCH'=>'Cerca de finestra emergent',
'LBL_DASHLETSEARCHVIEW'=>'Cercar Dashlet de SuiteCRM',
'LBL_DISPLAY_HTML'=>'Mostrar codi HTML',
'LBL_DETAILVIEW'=>'Vista detallada',
'LBL_DROP_HERE' => '[Deixar Anar Aquí]',
'LBL_EDIT'=>'Editar',
'LBL_EDIT_LAYOUT'=>'Editar Diseny',
'LBL_EDIT_ROWS'=>'Editar Files',
'LBL_EDIT_COLUMNS'=>'Editar Columnes',
'LBL_EDIT_LABELS'=>'Editar Etiquetes',
'LBL_EDIT_PORTAL'=>'Editar portal per a',
'LBL_EDIT_FIELDS'=>'Editar camps',
'LBL_EDITVIEW'=>'Vista d\'edició',
'LBL_FILLER'=>'(filler)',
'LBL_FIELDS'=>'Camps',
'LBL_FAILED_TO_SAVE' => 'Error al desar',
'LBL_FAILED_PUBLISHED' => 'Error al Publicar',
'LBL_HOMEPAGE_PREFIX' => 'El meu',
'LBL_LAYOUT_PREVIEW'=>'Vista preliminar del disseny',
'LBL_LAYOUTS'=>'Dissenys',
'LBL_LISTVIEW'=>'Vista de llista',
'LBL_MODULES'=>'Mòdul',
'LBL_MODULE_TITLE' => 'Estudi',
'LBL_NEW_PACKAGE' => 'Nou paquet',
'LBL_NEW_PANEL'=>'Nou panell',
'LBL_NEW_ROW'=>'Nova fila',
'LBL_PACKAGE_DELETED'=>'Paquet eliminat',
'LBL_PUBLISHING' => 'Publicant ...',
'LBL_PUBLISHED' => 'Publicat',
'LBL_SELECT_FILE'=> 'Seleccionar Arxiu',
'LBL_SAVE_LAYOUT'=> 'Desar Diseny',
'LBL_SELECT_A_SUBPANEL' => 'Seleccionar un Subpanell',
'LBL_SELECT_SUBPANEL' => 'Seleccionar Subpanell',
'LBL_SUBPANELS' => 'Subpanells',
'LBL_SUBPANEL' => 'Subpanell',
'LBL_SUBPANEL_TITLE' => 'Títol:',
'LBL_SEARCH_FORMS' => 'Cercar',
'LBL_SEARCH'=>'Cercar',
'LBL_STAGING_AREA' => 'Àrea de Disseny (arrossegui i deixi anar elements aquí)',
'LBL_SUGAR_FIELDS_STAGE' => 'Camps de SuiteCRM (faci clic en els elements per a afegir-los a l\'àrea de disseny)',
'LBL_SUGAR_BIN_STAGE' => 'Paperera de SuiteCRM (faci clic als elements per afegir-los a l\'àrea de disseny)',
'LBL_TOOLBOX' => 'Caixa d\'Eines',
'LBL_VIEW_SUGAR_FIELDS' => 'Veure camps de SuiteCRM',
'LBL_VIEW_SUGAR_BIN' => 'Veure paperera de SuiteCRM',
'LBL_QUICKCREATE' => 'Creació ràpida',
'LBL_EDIT_DROPDOWNS' => 'Editar una llista desplegable global',
'LBL_ADD_DROPDOWN' => 'afegir una nova llista desplegable global',
'LBL_BLANK' => '-buit-',
'LBL_TAB_ORDER' => 'ordre de tabulació',
'LBL_TAB_PANELS' => 'Habilitar pestanyes',
'LBL_TAB_PANELS_HELP' => 'Quan pestanyes estan habilitades, utilitzeu el quadre desplegable "Tipus"<br />per a cada secció per definir la forma en què es mostrarà (fitxa o panell)',
'LBL_TABDEF_TYPE' => 'Tipus de visualització',
'LBL_TABDEF_TYPE_HELP' => 'Seleccioni la forma en que s\'ha de mostrar aquesta secció. Aquesta opció només tindrà efecte si ha habilitat el mode pestanyes per aquesta vista.',
'LBL_TABDEF_TYPE_OPTION_TAB' => 'Pestanya',
'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panell',
'LBL_TABDEF_TYPE_OPTION_HELP' => 'Seleccioneu Panell perquè el panell es mostri a la vista inicial o en la vista del panell anterior que s\'hagi seleccionat com Pestaña. <br/> Seleccioneu Pestanya per mostrar el panell en una pestanya independent. Quan s\'ha seleccionat un panell com Pestaña, els següents panells seleccionats com Panell es mostraran a la vista d\'aquesta pestanya. <br/> Sempre que seleccioni un panell com Pestaña serà el primer panell a mostrar en aquesta Pestaña. <br/> Si es selecciona com Pestaña el segon panell o posteriors, el primer panell s\'establirà automàticament com Pestanya si s\'hagués seleccionat anteriorment com Panell.',
'LBL_TABDEF_COLLAPSE' => 'Reduir ',
'LBL_TABDEF_COLLAPSE_HELP' => 'Seleccionar per fer que l\'estat per defecte d\'aquest panell sigui plegat.',
'LBL_DROPDOWN_TITLE_NAME' => 'Nom',
'LBL_DROPDOWN_LANGUAGE' => 'Llenguatge per Defecte',
'LBL_DROPDOWN_ITEMS' => 'Llista d\'elements',
'LBL_DROPDOWN_ITEM_NAME' => 'Nom de l\'element',
'LBL_DROPDOWN_ITEM_LABEL' => 'Mostrar etiqueta',
'LBL_SYNC_TO_DETAILVIEW' => 'Sincronitza amb la vista detallada',
'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Seleccioneu aquesta opció per sincronitzar el disseny de la vista d\'Edició amb el corresponent disseny de la vista de Detall. Els camps i la seva col·locació a la vista de Detall seran sincronitzats i guardats automàticament a la vista de Detall en prémer a Desa or Guardar i Desplegar a la vista de Edició. No es podran realitzar canvis en el disseny de la vista de Detall.',
'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'This DetailView is sync\'d with the corresponding EditView.<br> Fields and field placement in this DetailView reflect the fields and field placement in the EditView.<br> Changes to the DetailView cannot be saved or deployed within this page. Make changes or un-sync the layouts in the EditView. ',
'LBL_COPY_FROM_EDITVIEW' => 'Copiar de la vista d\'edició',
'LBL_DROPDOWN_BLANK_WARNING' => 'Els valors són necessaris tant per el nom de l\'element com per la etiqueta de visualització. Per afegir un element en blanc, faci clic a Agregar, sense entrar cap valor pel nom de l\'element ni per l\'etiqueta de visualització.',
'LBL_DROPDOWN_KEY_EXISTS' => 'La clau ja existeix a la llista',
'LBL_NO_SAVE_ACTION' => 'No s\'ha pogut trobar la opció desar per aquesta vista.',
'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: document mal format.',



//RELATIONSHIPS
'LBL_MODULE' => 'Mòdul',
'LBL_LHS_MODULE'=>'Mòdul principal',
'LBL_CUSTOM_RELATIONSHIPS' => '* relació creada a l\'estudi',
'LBL_RELATIONSHIPS'=>'Relacions',
'LBL_RELATIONSHIP_EDIT' => 'Editar relació',
'LBL_REL_NAME' => 'Nom',
'LBL_REL_LABEL' => 'Etiqueta',
'LBL_REL_TYPE' => 'Tipus',
'LBL_RHS_MODULE'=>'Mòdul relacionat',
'LBL_NO_RELS' => 'Sense relacions',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'Condició opcional' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'Columna',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'Valor',
'LBL_SUBPANEL_FROM'=>'Subpanell de',
'LBL_RELATIONSHIP_ONLY'=>'No es crearà cap element visible per aquesta relació, ja que existia anteriorment una relació visible entre aquests dos mòduls.',
'LBL_ONETOONE' => 'Un a un',
'LBL_ONETOMANY' => 'Un a molts',
'LBL_MANYTOONE' => 'Molts a un',
'LBL_MANYTOMANY' => 'Molts a molts',


//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => 'Seleccioni una funció o un component.',
'LBL_QUESTION_MODULE1' => 'Seleccioni un mòdul.',
'LBL_QUESTION_EDIT' => 'Seleccioni un mòdul a editar.',
'LBL_QUESTION_LAYOUT' => 'Seleccioni un disseny a editar.',
'LBL_QUESTION_SUBPANEL' => 'Seleccioni un subpanell a editar.',
'LBL_QUESTION_SEARCH' => 'Seleccioni un disseny de cerca a editar.',
'LBL_QUESTION_MODULE' => 'Seleccioni un component de mòdul a editar.',
'LBL_QUESTION_PACKAGE' => 'Seleccioni un paquet a editar, o creï un nou paquet.',
'LBL_QUESTION_EDITOR' => 'Seleccioni una eina.',
'LBL_QUESTION_DROPDOWN' => 'Seleccioni una llista desplegable a editar, o creï una nova llista desplegable.',
'LBL_QUESTION_DASHLET' => 'Seleccioni un disseny de Dashlet a editar.',
'LBL_QUESTION_POPUP' => 'Seleccioni un disseny de finestra emergent a editar.',
//CUSTOM FIELDS
'LBL_RELATE_TO'=>'Relacionat amb',
'LBL_NAME'=>'Nom',
'LBL_LABELS'=>'Etiquetes',
'LBL_MASS_UPDATE'=>'Actualització Massiva',
'LBL_AUDITED'=>'Auditat',
'LBL_CUSTOM_MODULE'=>'Mòdul',
'LBL_DEFAULT_VALUE'=>'Valor per Defecte',
'LBL_REQUIRED'=>'Requerit',
'LBL_DATA_TYPE'=>'Tipus',
'LBL_HCUSTOM'=>'PERSONALITZAT',
'LBL_HDEFAULT'=>'PER DEFECTE',
'LBL_LANGUAGE'=>'Llenguatge:',
'LBL_CUSTOM_FIELDS' => '* camp creat a l\'estudi',

//SECTION
'LBL_SECTION_EDLABELS' => 'Editar Etiquetes',
'LBL_SECTION_PACKAGES' => 'Paquets',
'LBL_SECTION_PACKAGE' => 'Paquet',
'LBL_SECTION_MODULES' => 'Mòdul',
'LBL_SECTION_PORTAL' => 'Portal',
'LBL_SECTION_DROPDOWNS' => 'Menús desplegables',
'LBL_SECTION_PROPERTIES' => 'Propietats',
'LBL_SECTION_DROPDOWNED' => 'Editar la llista desplegable',
'LBL_SECTION_HELP' => 'Ajuda',
'LBL_SECTION_ACTION' => 'Acció',
'LBL_SECTION_MAIN' => 'Principal',
'LBL_SECTION_EDPANELLABEL' => 'Editar etiqueta del panell',
'LBL_SECTION_FIELDEDITOR' => 'Editar camp',
'LBL_SECTION_DEPLOY' => 'Desplegar',
'LBL_SECTION_MODULE' => 'Mòdul',
'LBL_SECTION_VISIBILITY_EDITOR'=>'Editar visibilitat',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Per defecte',
'LBL_HIDDEN'=>'Ocult',
'LBL_AVAILABLE'=>'Disponible',
'LBL_LISTVIEW_DESCRIPTION'=>'Hi ha tres columnes que es mostren a continuació. El <b> per defecte </b> la columna conté els camps que es mostren en una vista de llista per defecte. El <b> addicional </b> columna conté els camps que l\'usuari pot triar per crear una vista personalitzada. El <b> disponible </b> columna mostra els camps disponibles per a vostè com un administrador per afegir a l\'omissió o columnes addicionals per al seu ús pels usuaris.',
'LBL_LISTVIEW_EDIT'=>'Editor de Llistes',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Vista Preliminar',
'LBL_MB_RESTORE'=>'Restaurar',
'LBL_MB_DELETE'=>'Eliminar',
'LBL_MB_COMPARE'=>'Comparar',
'LBL_MB_DEFAULT_LAYOUT'=>'Disseny per defecte',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'Afegir',
'LBL_BTN_SAVE'=>'Desar',
'LBL_BTN_SAVE_CHANGES'=>'Desar els canvis',
'LBL_BTN_DONT_SAVE'=>'Descartar els canvis',
'LBL_BTN_CANCEL'=>'Cancel·lar',
'LBL_BTN_CLOSE'=>'Tancar',
'LBL_BTN_SAVEPUBLISH'=>'Desar i Publicar',
'LBL_BTN_NEXT'=>'Següent',
'LBL_BTN_BACK'=>'Enrere',
'LBL_BTN_CLONE'=>'Clonar',
'LBL_BTN_ADDCOLS'=>'Agregar Columnes',
'LBL_BTN_ADDROWS'=>'Agregar Files',
'LBL_BTN_ADDFIELD'=>'Afegir Camp',
'LBL_BTN_ADDDROPDOWN'=>'Afegir menú desplegable',
'LBL_BTN_SORT_ASCENDING'=>'Ordenar ascendentment',
'LBL_BTN_SORT_DESCENDING'=>'Ordenar descendentment',
'LBL_BTN_EDLABELS'=>'Editar Etiquetes',
'LBL_BTN_UNDO'=>'Desfer',
'LBL_BTN_REDO'=>'Repetir',
'LBL_BTN_ADDCUSTOMFIELD'=>'Agregar Camp Personalitzat',
'LBL_BTN_EXPORT'=>'Exportar personalitzacions',
'LBL_BTN_DUPLICATE'=>'Duplicar',
'LBL_BTN_PUBLISH'=>'Publicar',
'LBL_BTN_DEPLOY'=>'Desplegar',
'LBL_BTN_EXP'=>'Exportar',
'LBL_BTN_DELETE'=>'Eliminar',
'LBL_BTN_VIEW_LAYOUTS'=>'Veure dissenys',
'LBL_BTN_VIEW_FIELDS'=>'Veure camps',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'Vure Relacions',
'LBL_BTN_ADD_RELATIONSHIP'=>'Afegir relació',
'LBL_BTN_RENAME_MODULE' => 'Canviar el nom del mòdul',
'LBL_BTN_INSERT'=>'Insertar',
//TABS


//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Error: Camp Existent',
'ERROR_INVALID_KEY_VALUE'=> 'Error: Valor de Clau No vàlid: [\']',
'ERROR_NO_HISTORY' => 'No s\'han trobat arxius de la historial',
'ERROR_MINIMUM_FIELDS' => 'El disseny ha de contenir almenys un camp',
'ERROR_GENERIC_TITLE' => 'Ha ocorregut un error',
'ERROR_REQUIRED_FIELDS' => 'Està segur que vol continuar? Els següents camps requerits no es troben al disseny:',
'ERROR_ARE_YOU_SURE' => 'Està segur que desitja continuar?',



//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'Nom del paquet:',
'LBL_MODULE_NAME'=>'Nom del mòdul:',
'LBL_AUTHOR'=>'Autor:',
'LBL_DESCRIPTION'=>'Descripció:',
'LBL_KEY'=>'Clau:',
'LBL_ADD_README'=>'Llegiu-me',
'LBL_LAST_MODIFIED'=>'Última modificació:',
'LBL_NEW_MODULE'=>'Nou mòdul',
'LBL_LABEL'=>'Etiqueta:',
'LBL_LABEL_TITLE'=>'Etiqueta',
'LBL_WIDTH'=>'Amplada',
'LBL_PACKAGE'=>'Paquet:',
'LBL_TYPE'=>'Tipus:',
'LBL_TEAM_SECURITY'=>'Seguretat d\'equips',
'LBL_ASSIGNABLE'=>'Assignable',
'LBL_PERSON'=>'Persona',
'LBL_COMPANY'=>'Empresa',
'LBL_ISSUE'=>'Incidència',
'LBL_SALE'=>'Venta',
'LBL_FILE'=>'Arxiu',
'LBL_NAV_TAB'=>'Pestanya de navegació',
'LBL_CREATE'=>'Crear',
'LBL_LIST'=>'Llista',
'LBL_VIEW'=>'Veure',
'LBL_LIST_VIEW'=>'Vista de Llista',
'LBL_HISTORY'=>'Veure Històrial',
'LBL_RESTORE_DEFAULT'=>'Restaurar predeterminat',
'LBL_ACTIVITIES'=>'Activitats',
'LBL_NEW'=>'Nou',
'LBL_TYPE_BASIC'=>'bàsic',
'LBL_TYPE_COMPANY'=>'companyia',
'LBL_TYPE_PERSON'=>'persona',
'LBL_TYPE_ISSUE'=>'incidència',
'LBL_TYPE_SALE'=>'venda',
'LBL_TYPE_FILE'=>'Arxiu',
'LBL_RSUB'=>'Aquest és el subpanell que es mostrarà al seu mòdul',
'LBL_MSUB'=>'Aquest en un subpanel que el teu módul proporciona per a que sigui mostrat pel módul relacionat',
'LBL_MB_IMPORTABLE'=>'Important',

// VISIBILITY EDITOR
'LBL_VE_VISIBLE'=>'visible',
'LBL_VE_HIDDEN'=>'ocult',
'LBL_PACKAGE_WAS_DELETED'=>'[[package]] ha estat eliminat',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'Exportar personalitzacions',
'LBL_EC_NAME'=>'Nom del paquet:',
'LBL_EC_AUTHOR'=>'Autor:',
'LBL_EC_DESCRIPTION'=>'Descripció:',
'LBL_EC_KEY'=>'Clau:',
'LBL_EC_CHECKERROR'=>'Si us plau, seleccioni un mòdul',
'LBL_EC_CUSTOMFIELD'=>'camp(s) personalitzats',
'LBL_EC_CUSTOMLAYOUT'=>'disseny(s) personalitzats',
'LBL_EC_NOCUSTOM'=>'No s\'ha personalitzat cap mòdul.',
'LBL_EC_EMPTYCUSTOM'=>'té personalitzacions buides.',
'LBL_EC_EXPORTBTN'=>'Exportar',
'LBL_MODULE_DEPLOYED' => 'El módul s\'ha desplegat.',
'LBL_UNDEFINED' => 'no definit',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => 'Error al recuperar les dades',
'LBL_AJAX_TIME_DEPENDENT' => 'Una acció depenent del temps està en curs. Espereu i torneu a intentar en uns pocs segons.',
'LBL_AJAX_LOADING' => 'Carregant...',
'LBL_AJAX_DELETING' => 'Eliminant...',
'LBL_AJAX_BUILDPROGRESS' => 'Construcció en progrés...',
'LBL_AJAX_DEPLOYPROGRESS' => 'Desplegament en progres...',
'LBL_AJAX_FIELD_EXISTS' =>'El nom del camp que ha introduït ja existeix. Si us plau, introdueixi un nou nom pel camp.',

'LBL_AJAX_RESPONSE_TITLE' => 'Resultat',
'LBL_AJAX_RESPONSE_MESSAGE' => 'Aquesta operació s\'ha realitzat correctament',
'LBL_AJAX_LOADING_TITLE' => 'En curs...',
'LBL_AJAX_LOADING_MESSAGE' => 'Si us plau, esperi, carregant...',

//JS
'LBL_JS_REMOVE_PACKAGE' => 'Està segur que vol eliminar aquest paquet? Això eliminarà permanentment tots els fitxers associats a aquest paquet.',
'LBL_JS_REMOVE_MODULE' => 'Està segur que vol eliminar aquest mòdul? Això eliminarà permanentment tots els fitxers associats amb aquest mòdul.',
'LBL_JS_DEPLOY_PACKAGE' => 'Qualsevol personalització que vostè va fer en l\'estudi es sobreescriuran quan es torna a desplegar aquest mòdul. Esteu segur que voleu continuar?',

'LBL_DEPLOY_IN_PROGRESS' => 'Desplegant el paquet',
'LBL_JS_VALIDATE_NAME'=>'Nom - Ha de ser alfanumèric, començar amb una lletra i no contenir espais.',
'LBL_JS_VALIDATE_PACKAGE_NAME'=>'El nom del paquet ja existeix',
'LBL_JS_VALIDATE_KEY'=>'Clau - Ha de ser alfanumèrica, començar amb una lletra i no contenir espais.',
'LBL_JS_VALIDATE_LABEL'=>'Si us plau, introdueixi l\'etiqueta que s\'utilitzarà com a nom visible d\'aquest mòdul',
'LBL_JS_VALIDATE_TYPE'=>'Si us plau, seleccioni el tipus de mòdul que vol construir a partir de la llista anterior',
'LBL_JS_VALIDATE_REL_NAME'=>'Nom - Ha de ser alfanumeric i sense espais',
'LBL_JS_VALIDATE_REL_LABEL'=>'Etiqueta - si us plau, agregui la etiqueta que serà mostrada sobre el subpanell',


//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>'La supressió d\'aquest camp personalitzat eliminarà tant el camp personalitzat i totes les dades relacionades amb el camp personalitzat a la base de dades. El camp serà ja no apareixerà a les distribucions de mòduls. \\n\\n Voleu continuar?',
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'Està segur que desitja eliminar aquesta relació?',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'Això farà la relació permanent. Està segur que desitja utilitzar aquesta relació?',
'LBL_CONFIRM_DONT_SAVE' => 'Hi ha canvis pendents de ser desats, desitja desar-los ara?',
'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Desar canvis?',
'LBL_CONFIRM_LOWER_LENGTH' => 'Les dades poden ser truncades i això no es podrà desfer, està segur que desitja continuar?',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'Seleccioni el tipus de dades apropiat segons el tipus de dades que seran introduides al camp.',
'LBL_POPHELP_SEARCHABLE'=>'Select the boost level for this field. <br />Fields with a higher boost level will be given greater weight when the search is performed. <br />When a search is performed, matching records containing fields with a greater weight will be appear higher in the search results.<br /> If you change the boost level for a field from one level to another, perform a system index to apply the change. <br/> Be sure to select to delete the existing data at the time that the system index is performed.',
'LBL_POPHELP_IMPORTABLE'=>'<b>Sí</b>: El camp serà inclòs en una operació d\'importació.<br><b>No</b>: El camp no serà inclòs en una importació.<br><b>Requerit</b>: S\'ha de subministrar un calor per al camp en qualsevol importació.',
'LBL_POPHELP_IMAGE_WIDTH'=>'Introdueixi un número per a l\'amplada, com a mesura en píxels.<br> La imatge pujada serà escalada a aquesta amplada.',
'LBL_POPHELP_IMAGE_HEIGHT'=>'Introdueixi un número per a l\'altura, com a mesura en píxels.<br> La imatge pujada serà escalada a aquesta altura.',
'LBL_POPHELP_DUPLICATE_MERGE'=>'<b>Enabled</b>: The field will appear in the Merge Duplicates feature, but will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Disabled</b>: The field will not appear in the Merge Duplicates feature, and will not be available to use for the filter conditions in the Find Duplicates feature.',
'LBL_POPHELP_GLOBAL_SEARCH'=>'Seleccioni aquesta opció per a utilitzar aquest camp en la cerca de registres des de la cerca global en aquest mòdul.',
//Revert Module labels
'LBL_RESET' => 'Restablir',
'LBL_RESET_MODULE' => 'Restablir el mòdul',
'LBL_REMOVE_CUSTOM' => 'Eliminar les personalitzacions',
'LBL_CLEAR_RELATIONSHIPS' => 'Netejar relacions',
'LBL_RESET_LABELS' => 'Restablir etiquetes',
'LBL_RESET_LAYOUTS' => 'Restablir dissenys',
'LBL_REMOVE_FIELDS' => 'Eliminar camps personalitzats',
'LBL_CLEAR_EXTENSIONS' => 'Netejar extensions',
'LBL_HISTORY_TIMESTAMP' => 'Registre de temps.',
'LBL_HISTORY_TITLE' => 'historial',

'parent' => 'Possiblement relacionat amb ',

'LBL_ILLEGAL_FIELD_VALUE' => 'Drop down key cannot contain quotes.',
'LBL_CONFIRM_SAVE_DROPDOWN' => 'Està seleccionant aquest element per a la seva eliminació de la llista desplegable. Qualsevol camp desplegable que usi aquesta llista amb aquest element com a valor ja no mostrarà aquest valor, i el valor ja no podrà ser seleccionat en els camps desplegables. Esteu segur que voleu continuar?',
'LBL_POPHELP_VALIDATE_US_PHONE'=>'Seleccionar per validar aquest camp per a l\'ingrés d\'un nombre <br> telèfon de 10 dígits, amb previsió per al codi de país 1 i <br> d\'aplicar un format d\'Estats Units per al número de telèfon quan es guarda el registre Extremadura. El següent format s\'aplicarà: (xxx) xxx-xxxx.',
'LBL_ALL_MODULES'=> 'Tots els mòduls',
'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (relacionat {1} ID)',


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
    '' => 'Etiquetes freqüents',
	'all' => 'Totes les etiquetes',
),

// Help
'help'=>array(
	'package'=>array(
			'create'=> 'Proporcioni un <b>Nom</b> par al paquet. El nom que introdueixi ha de ser alfanumèric i no pot contenir espais. (Exemple: HR_Management)<br/><br/> Pot proporcionar la informació del <b>Autor</b> i la <b>Descripció</b> del paquet. <br/><br/>Faci clic a <b>Desar</b> par a crear el paquet.',
			'modify'=> 'Las propiedades y acciones posibles del <b>Paquete</b> aparecen aquí.<br><br>Puede modificar el <b>Nombre</b>, <b>Autor</b> y <b>Descripción</b> del paquete, así como ver y personalizar cualquiera de los módulos contenidos en el paquete.<br><br>Haga clic en <b>Nuevo Módulo</b> para crear un módulo para el paquete.<br><br>Si el paquete contiene al menos un módulo, puede <b>Publicar</b> y <b>Desplegar</b> el paquete, así como <b>Exportar</b> las personalizaciones realizadas al paquete.',
			'name'=> 'Este es el <b>Nombre</b> del paquete actual. <br/><br/>El nombre que introduzca debe ser alfanumérico, comenzar por una letra y no contener espacios. (Example: HR_Management)',
			'author'=> 'Este es el <b>Autor</b> mostrado durante la instalación como el nombre de la entidad que ha creado el paquete.<br><br>El Autor podría ser un individuo o una empresa.',
			'description'=> 'Esta es la <b>Descripción</b> del paquete que se muestra durante la instalación.',
			'publishbtn'=> 'Faci clic a <b>Publicar</b> per a desar totes les dades introduides i crear un fitxer .zip que és una versió instal·lable del paquet.<br><br>Utilitzi el <b>Cargardor de Mòduls</b> per a pujar el fitxer .zip i instal·lar el paquet.',
			'deploybtn'=> 'Faci clic a <b>Desplegar</b> per a desar totes les dades introduïdes i instal·lar el paquet, incloent tots els mòduls, en la instància actual.',
			'duplicatebtn'=> 'Haga clic en <b>Duplicar</b> para copiar el contenido del paquete en un paquete nuevo y mostrar el recién creado paquete. <br/><br/>Se creará de forma automática un nuevo nombre para el nuevo paquete añadiendo un número al final del nombre del paquete original. Puede renombrar el nuevo paquete introduciendo un nuevo <b>Nombre</b> y haciendo clic en <b>Guardar</b>.',
			'exportbtn'=> 'Haga clic en <b>Exportar</b> para crear un archivo .zip que contenga las personalizaciones hechas al paquete.<br><br> El archivo generado no es una versión instalable del paquete.<br><br>Utilice el <b>Cargador de Módulos</b> para importar el archivo .zip y para que el paquete, personalizaciones incluidas, aparezca en el Constructor de Módulos.',
			'deletebtn'=> 'Haga clic en <b>Eliminar</b> para eliminar este paquete y todos los archivos relacionados con este paquete.',
			'savebtn'=> 'Faci clic a <b>Desar i Desplegar</b> per a desar tots els canvis que ha realitzat i per a que estiguin aplicats al mòdul.',
			'existing_module'=> 'Haga clic en el icono <b>Módulo</b> para editar las propiedades y personalizar los campos, relaciones y diseños asociados al módulo.',
			'new_module'=> 'Haga clic en <b>Nuevo Módulo</b> para crear un nuevo módulo para este paquete.',
			'key'=> 'Esta <b>Clave</b> alfanumérica de 5 letras se usará para prefijar todos los directorios, nombres de clases y tablas de base de datos de todos los módulos en el paquete actual.<br><br>La clave se usa para contribuir a la unicidad de los nombres de tablas.',
			'readme'=> 'Haga clic para agregar un texto <b>Léame</b> para este paquete.<br><br>El Léame quedará disponible en el momento de instalación.',

),
	'main'=>array(

	),
	'module'=>array(
		'create'=> 'Proporcionar un <b> Nom </b> per al mòdul. La <b> Etiqueta </b> que vostè proporcioni apareixerà a la pestanya de navegació. <br/> Trieu per mostrar una pestanya de navegació per al mòdul marcant la <b> Pestanya de navegació </b> casella de verificació. <br/> A continuació, seleccioneu el tipus de mòdul que voleu crear. <br/> Seleccioneu un tipus de plantilla. Cada plantilla conté un conjunt específic dels camps, així com els dissenys predefinits, per utilitzar com a base per a la seva mòdul. <br/> Feu clic a <b> Desa </b> per crear el mòdul.',
		'modify'=> 'Vostè pot canviar les propietats del mòdul o personalitzar el <b> Camps </b>, <b> Relacions </b> i <b> Layouts </b> en relació amb el mòdul.',
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
		'duplicatebtn'=> 'Feu clic a <b> Duplica </b> per copiar les propietats del mòdul en un mòdul nou i per mostrar el nou mòdul. <br/> Per al nou mòdul, un nou nom es generarà automàticament afegint un número al final del nom del mòdul utilitzat per crear la nova.',
		'deletebtn'=> 'Cliqui <b>Eliminar</b> per eliminar aquest mòdul.',
		'name'=> 'Aquest és el <b>Nom</b> del mòdul actual.<br/><br/>El nom ha de ser alfanumèric, ha de començar amb una lletra i no pot contenir espais. (Example: HR_Management)',
		'label'=> 'Esta es la <b>Etiqueta</b> que aparecerá en la pestaña de navegación del módulo. ',
		'savebtn'=> 'Cliqui <b>Desar</b> per desar tota la informació relacionada amb el mòdul.',
		'type_basic'=> 'El tipo de plantilla <b>Básica</b> proporciona los campos básicos, como Nombre, Asignado a, Equipo, Fecha de Creación y Descripción.',
		'type_company'=> 'El tipo de plantilla <b>Empresa</b> proporciona campos particulares de una organización, como Nombre de Empresa, Industria y Dirección de Facturación.<br/><br/>Use esta plantilla para crear módulos que sean similares al módulo estándar de Cuentas.',
		'type_issue'=> 'El tipo de plantilla <b>Incidencia</b> proporciona campos particulares de casos e incidencias, como Número, Estado, Prioridad y Descripción.<br/><br/>Use esta plantilla para crear módulos que sean similares a los módulos estándar de Casos y Seguimiento de Incidencias.',
		'type_person'=> 'El tipus de plantilla <b>Persona</b> disposa de camps específics, com per exemple, Salutació, Títol, Nom, Adreça, Número de Telèfon. <br /><br />Utilitzi aquesta plantilla per a crear mòduls que són similars als mòduls estàndards de Contactes i Clients Potencials.',
		'type_sale'=> 'El tipo de plantilla <b>Ventas</b> proporciona campos específicos de una oportunidad, como la Toma de Contacto, Etapa, Cantidad y Probabilidad.<br/><br/>Use esta plantilla para crear módulos que sean similares al módulo estándar de Oportunidades.',
		'type_file'=> 'La plantilla <b>Archivo</b> proporciona campos específicos de un Documento, como Nombre de Archivo, tipo de Documento, y Fecha de Publicación.<br><br>Use esta plantilla para crear módulos que sean similares al módulo estándar de Documentos.',

	),
	'dropdowns'=>array(
		'default' => 'Todas las <b>Listas Desplegables</b> de la aplicación se listan a aquí.<br><br>Las listas desplegables pueden ser usadas para campos de lista desplegable de cualquier módulo.<br><br>Para realizar cambios a una lista desplegable existente, haga clic en su nombre.<br><br>Haga clic en <b>Agregar Desplegable</b> para crear un nuevo desplegable.',
		'editdropdown'=> 'Las listas desplegables pueden ser utilizadas para campos desplegables estándar o personalizados de cualquier módule.<br><br>Proporcione un <b>Nombre</b> para la lista desplegable.<br><br>Si tiene instalado otros paquetes de idioma en la aplicación, podrá seleccionar el <b>Idioma</b> a utilizar para los elementos de la lista.<br><br>En el campo <b>Nombre de Elemento</b>, proporcione un nombre para la opción en la lista desplegable.  Este nombre no aparecerá en la lista desplegable que es visible a los usuarios.<br><br>En el campo <b>Etiqueta de Visualización</b>, proporcione una etiqueta que será visible a los usuarios.<br><br>Tras proporcionar el nombre de elemento y la etiqueta de visualización, haga clic en <b>Agregar</b> para agregar el elemento a la lista desplegable.<br><br>Para cambiar el orden de los elementos en la lista, arrastre y suelte elementos en las posiciones deseadas.<br><br>Para editar la etiqueta de visualización de un elemento, haga clic en el icono <b>Editar</b>, e introduzca una nueva etiqueta. Para eliminar un elemento de la lista desplegable, haga clic en el icono <b>Eliminar</b>.<br><br>Para deshacer un cambio realizado a una etiqueta de visualización, haga clic en <b>Deshacer</b>.  Para rehacer un cambio que ha sido previamente deshecho, haga clic en <b>Rehacer</b>.<br><br>Haga clic en <b>Guardar</b> para guardar la lista desplegable.',

	),
	'subPanelEditor'=>array(
		'modify'	=> 'Tots els camps que es poden mostrar al <b> subpanel </b> apareixen aquí. A el <b> per defecte </b> la columna conté els camps que es mostren en el subpanel. <br /> <br/> La columna <b> Ocult </b> conté els camps que es poden afegir a la columna per defecte.',
		'savebtn'	=> 'Feu clic a <b> Desa i Desplegar </b> per desar els canvis realitzats i perquè siguin actius dins del mòdul.',
		'historyBtn'=> 'Haga clic en <b>Ver Historial</b> para ver y restaurar del historial un diseño previamente guardado.',
	    'historyDefault'=> 'Feu clic a <b> Restaura valors per defecte </b> per restaurar la vista al format original.',
		'Hidden' 	=> 'Los campos <b>Ocultos</b> no aparecen en el subpanel.',
		'Default'	=> 'Los campos <b>Por Defecto</b> aparecen en el subpanel.',

	),
	'listViewEditor'=>array(
		'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Available</b> column contains fields that a user can select in the Search to create a custom ListView. <br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.',
		'savebtn'	=> 'Feu clic a <b> Desa i Desplegar </b> per desar els canvis realitzats i perquè siguin actius dins del mòdul.',
		'historyBtn'=> 'Feu clic a <b> Mostra l\'historial </b> per veure i restaurar un disseny prèviament guardat de la història. <br> <B> Restaura </b> a <b> Mostra l\'historial </b> restaura la col·locació de camp dins dels dissenys guardats anteriorment. Per canviar les etiquetes de camp, feu clic a la icona edita al costat de cada camp.',
		'historyDefault'=> 'Feu clic a <b> Restaura valors per defecte </ b> per restaurar la vista en el seu format original. <br> <B> Restaura valors per defecte </ b> només es restaura la col·locació de camp dins el traçat original. Per canviar les etiquetes de camp, feu clic a la icona Edita al costat de cada camp.',
		'Hidden' 	=> '<b>Hidden</b> fields not currently available for users to see in ListViews.',
		'Available' => '<b>Available</b> fields are not shown by default, but can be added to ListViews by users.',
		'Default'	=> '<b>Default</b> fields appear in ListViews that are not customized by users.'
	),
	'popupListViewEditor'=>array(
		'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.',
		'savebtn'	=> 'Feu clic a <b> Desa i Desplegar </ b> per desar els canvis realitzats i perquè siguin actius dins del mòdul.',
		'historyBtn'=> 'Feu clic a <b> Mostra l\'historial </b> per veure i restaurar un disseny prèviament guardat de la història. <br> <B> Restaura </b> a <b> Mostra l\'historial </b> restaura la col·locació de camp dins dels dissenys guardats anteriorment. Per canviar les etiquetes de camp, feu clic a la icona edita al costat de cada camp.',
		'historyDefault'=> 'Feu clic a <b> Restaura valors per defecte </b> per restaurar la vista en el seu format original.<br><br><b>Restaura valors per defecte </b> només es restaura la col·locació de camp dins el vista original. Per canviar les etiquetes de camp, feu clic a la icona Edita al costat de cada camp.',
		'Hidden' 	=> '<b>Hidden</b> fields not currently available for users to see in ListViews.',
		'Default'	=> '<b>Default</b> fields appear in ListViews that are not customized by users.'
	),
	'searchViewEditor'=>array(
		'modify'	=> 'All of the fields that can be displayed in the <b>Search</b> form appear here.<br><br>The <b>Default</b> column contains the fields that will be displayed in the Search form.<br/><br/>The <b>Hidden</b> column contains fields available for you as an admin to add to the Search form.',
		'savebtn'	=> 'Clicant <b>Desar i Aplicar</b> els canvis seran actius',
		'Hidden' 	=> 'Els camps <b>Ocults</b> no apareixen a la cerca.',
		'historyBtn'=> 'Feu clic a <b> Mostra l\'historial </b> per veure i restaurar un disseny prèviament guardat de la història. <br> <B> Restaura </b> a <b> Mostra l\'historial </b> restaura la col·locació de camp dins dels dissenys guardats anteriorment. Per canviar les etiquetes de camp, feu clic a la icona edita al costat de cada camp.',
		'historyDefault'=> 'Feu clic a <b> Restaura valors per defecte </b> per restaurar la vista en el seu format original.<br><br><b>Restaura valors per defecte </b> només es restaura la col·locació de camp dins el vista original. Per canviar les etiquetes de camp, feu clic a la icona Edita al costat de cada camp.',
		'Default'	=> 'Les files per <b>Defecte</b> apareixen a la cerca.'
	),
	'layoutEditor'=>array(
		'defaultdetailview'=> 'El área de <b>Diseño</b> contiene los campos que actualmente están siendo mostrados en la <b>Vista de Detalle</b>.<br/><br/>La <b>Caja de Herramientas</b> contiene la <b>Papelera de Reciclaje</b> y los campos y elementos del diseño que pueden ser agregados al mismo.<br><br>Haga cambios al diseño arrastrando y soltando elementos y campos entre la <b>Caja de Herramientas</b> y el <b>Diseño</b> así como dentro del mismo diseño.<br><br>Para quitar un campo del diseño, arrastre el campo a la <b>Papelera de Reciclaje</b>. El campo pasará a estar disponible en la Caja de Herramientas para ser agregado al diseño.',
		'defaultquickcreate'=> 'El área de <b>Diseño</b> contiene los campos que actualmente están siendo mostrados en el formulario de <b>Creación Rápida</b>.<br><br>El formulario de Creación Rápida aparece en los subpaneles de un módulo cuando el botón Crear es pulsado.<br/><br/>La <b>Caja de Herramientas</b> contiene la <b>Papelera de Reciclaje</b> y los campos y elementos del diseño que pueden ser agregados al mismo.<br><br>Haga cambios al diseño arrastrando y soltando elementos y campos entre la <b>Caja de Herramientas</b> y el <b>Diseño</b> así como dentro del mismo diseño.<br><br>Para quitar un campo del diseño, arrastre el campo a la <b>Papelera de Reciclaje</b>. El campo pasará a estar disponible en la Caja de Herramientas para ser agregado al diseño.',
		//this defualt will be used for edit view
		'default'	=> 'The <b>Layout</b> area contains the fields that are currently displayed within the <b>EditView</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.',
		'saveBtn'	=> 'Faci clic a <b>Desar</b> per a preservar els canvis que ha realitzat al disseny des de l\'última vegada que el va desar.<br><br>Els canvis no es mostraran al mòdul fins que apliqui els canvis desats.',
		'historyBtn'=> 'Feu clic a <b> Mostra l\'historial </b> per veure i restaurar un disseny prèviament guardat de la història. <br> <B> Restaura </b> a <b> Mostra l\'historial </b> restaura la col·locació de camp dins dels dissenys guardats anteriorment. Per canviar les etiquetes de camp, feu clic a la icona edita al costat de cada camp.',
		'historyDefault'=> 'Feu clic a <b> Restaura valors per defecte </ b> per restaurar la vista en el seu format original. <br> <B> Restaura valors per defecte </ b> només es restaura la col·locació de camp dins el traçat original. Per canviar les etiquetes de camp, feu clic a la icona Edita al costat de cada camp.',
		'publishBtn'=> 'Cliqui <b>Desar i aplicar</b> per a desar tots els canvis que ha realitzat al disseny des de l\'últim cop que els va desar, i per a deixar actius els canvis al mòdul.<br><br>El disseny serà mostrat immediatament al mòdul.',
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
	    'exportHelp'=> 'Export customizations made in Studio by creating packages that can be uploaded into another SuiteCRM instance through the <b>Module Loader</b>.<br><br>  First, provide a <b>Package Name</b>.  You can provide <b>Author</b> and <b>Description</b> information for package as well.<br><br>Select the module(s) that contain the customizations you wish to export. Only modules containing customizations will appear for you to select.<br><br>Then click <b>Export</b> to create a .zip file for the package containing the customizations.',
	    'exportCustomBtn'=> 'Haga clic en <b>Exportar</b> para crear un archivo .zip para el paquete que contenga las personalizaciones que desea exportar.',
	    'name'=> 'Aquest és el <b>Nom</b> del paquet. Aquest nom serà mostrat durant la instal·lació.',
	    'author'=> 'Aquest és <b>l\'Autor</b> que és mostrat durant la instal·lació com el nom de la entitat que ha creat el paquet. L\'autor pot ser una companyia o una persona individual.',
	    'description'=> 'Esta es la <b>Descripción</b> del paquete que se muestra durante la instalación.',
	),
	'studioWizard'=>array(
		'mainHelp' 	=> 'Bienvenido al área de <b>Herramientas de Desarrollo</b>. <br/><br/>Use las herramientas de este área para crear y gestionar módulos y campos tanto estándar como personalizados.',
		'studioBtn'	=> 'Use el <b>Estudio</b> para personalizar los módulos desplegados.',
		'mbBtn'		=> 'Use el <b>Constructor de Módulos</b> para crear nuevos módulos.',
		'sugarPortalBtn' => 'Utilitzi <b>L\'editor del portal SuiteCRM</b> per a gestionar i personalitzar el portal de SuiteCRM.',
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
		'portalBtn' => 'Personalitzar el mòdul <b>Dissenys</b> que apareix al <b>Portal de SuiteCRM</b>.',
		'layoutsHelp'=> 'Los <b>Diseños</b> de un módulo que pueden ser personalizados aparecen aquí.<br><br>Los diseños muestran los campos y sus datos.<br><br>Haga clic en un icono para seleccionar el diseño a editar.',
		'subpanelHelp'=> 'Los <b>Subpaneles</b> de un módulo que pueden ser personalizados aparecen aquí.<br><br>Haga clic en un icono para seleccionar el módulo a editar.',
        'newPackage'=> 'Haga clic en <b>Nuevo Paquete</b> para crear un nuevo paquete.',
        'exportBtn' => 'Haga clic en <b>Exportar Personalizaciones</b> para crear y descargar un paquete que contenga las personalizaciones que ha realizado en el Estudio a varios módulos específicos.',
        'mbHelp'    => 'Use el <b>Constructor de Módulos</b> para crear paquetes que contengan módulos personalizados basados en objetos estándar o personalizados.',
	    'viewBtnEditView' => 'Personalizar el diseño de <b>Vista de Edición</b> del módulo.<br><br>La Vista de Edición es el formulario que contiene los campos de entrada para capturar los datos introducidos por el usuario.',
	    'viewBtnDetailView' => 'Personalizar el diseño <b>Vista de Detalle</b> del módulo.<br><br>La Vista de Detalle muestra datos de campos introducidos por el usuario.',
		'viewBtnDashlet' => 'Customize the module\'s <b>SuiteCRM Dashlet</b>, including the SuiteCRM Dashlet\'s ListView and Search.<br><br>The SuiteCRM Dashlet will be available to add to the pages in the Home module.',
	    'viewBtnListView' => 'Personalizar el diseño <b>Vista de Lista</b> del módulo.<br><br>Los resultados de la Búsqueda aparecen en la Vista de Lista.',
	    'searchBtn' => 'Personalizar los diseños de <b>Búsqueda</b> del módulo.<br><br>Determina qué campos pueden ser utilizados para filtrar los registros que aparecen en la Vista de Lista.',
		'viewBtnQuickCreate' => 'Personalitzar el disseny <b>Creació ràpida</b> de mòdul.<br><br>El formulari de creació ràpida apareix als subpanells i en el mòdul de correu electrònic.',

	    'searchHelp'=> 'Los formularios de <b>Búsqueda</b> que pueden ser personalizados aparecen aquí. <br><br>Los formularios de búsqueda contienen campos para filtrar registros.<br><br>Haga clic en un icono para seleccionar el diseño de búsqueda a editar.',
	    'dashletHelp' => 'The <b>SuiteCRM Dashlet</b> layouts that can be customized appear here.<br><br>The SuiteCRM Dashlet will be available to add to the pages in the Home module.',
	    'DashletListViewBtn' => 'The <b>SuiteCRM Dashlet ListView</b> displays records based on the SuiteCRM Dashlet search filters.',
	    'DashletSearchViewBtn' => 'The <b>SuiteCRM Dashlet Search</b> filters records for the SuiteCRM Dashlet listview.',
	    'popupHelp' => 'Els dissenys de <b>Finestres emergents</ b> que es poden personalitzar apareixen aquí.<br>',
	    'PopupListViewBtn' => 'The <b>Popup ListView</b> displays records based on the Popup search views.',
	    'PopupSearchViewBtn' => 'The <b>Popup Search</b> views records for the Popup listview.',
		'BasicSearchBtn' => 'Personalizar el formulario de <b>Búsqueda Básica</b> que aparece en la pestaña de Búsqueda Básica en el área de Búsqueda del módulo.',
	    'AdvancedSearchBtn' => 'Personalizar el formulario de <b>Búsqueda Avanzada</b> que aparece en la pestaña de Búsqueda Avanzada en el área de Búsqueda del módulo.',
	    'portalHelp' => 'Gestionar i personalitzar el <b>Portal de SuiteCRM</b>.',
	    'SPUploadCSS' => 'Puja a <b> Full d\'estil </b> per al Portal SuiteCRM.',
	    'SPSync' => '<b>Sync</b> customizations to the SuiteCRM Portal instance.',
	    'Layouts' => 'Personalitzeu els <b> Dissenys </b> dels mòduls del Portal de SuiteCRM.',
	    'portalLayoutHelp' => 'Els mòduls dins del Portal SuiteCRM apareixen en aquesta àrea..<br><br> Seleccioneu un mòdul per editar els <b>Dissenys</ b>.',
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
		'saveBtn'=> 'Cliqui <b>Desar</b> per desar tots els canvis.',
		'publishBtn'=> 'Feu clic a <b>Desa i Desplegar</b> per guardar tots els canvis i fer que s\'activin.',
	),
	'portalSync'=>array(
	    'default' => 'Enter the <b>SuiteCRM Portal URL</b> of the portal instance to update, and click <b>Go</b>.<br><br>Then enter a valid SuiteCRM user name and password, and then click <b>Begin Sync</b>.<br><br>The customizations made to the SuiteCRM Portal <b>Layouts</b>, along with the <b>Style Sheet</b> if one was uploaded, will be transferred to specified the portal instance.',
	),
	'portalStyle'=>array(
	    'default' => 'Vostè pot personalitzar l\'aspecte del Portal SuiteCRM mitjançant l\'ús d\'un full d\'estil. <br><br> Seleccioneu una <b> Full d\'estil </b> per a carregar. <br> El full d\'estil es durà a terme al Portal SuiteCRM la propera alhora una sincronització es porta a terme.',
	),
	),

// assistantHelp

'assistantHelp'=>array(
	'package'=>array(
			//custom begin
			'nopackages'=> 'Para empezar un proyecto, haga clic en <b>Nuevo Paquete</b> y creará un nuevo paquete en el que albergar sus módulos personalizados. <br/><br/>Cada paquete puede contener uno o más módulos.<br/><br/>Por ejemplo, puede querer crear un paquete que contenga un módulo personalizado relacionado con el módulo estándar de Cuentas. O puede querer crear un paquete que contenga varios módulos nuevos que trabajan de forma conjunta como un proyecto y que están relacionados entre si y con otros módulos ya existentes en la aplicación.',
			'somepackages'=> 'Un <b>paquete</b> actúa como contenedor de módulos pesonalizados, todos los cuales son parte de un proyecto. El paquete puede contener uno o más <b>módulos</b> personalizados que pueden estar relacionados entre ellos o con otros módulos de la aplicación.<br/><br/>Tras la creación de un paquete para su proyecto, puede crear módulos para el paquete de forma inmediata, o volver al Constructor de Módulos más tarde para completar el proyecto.<br><br>Cuando el proyecto ha sido completado, puede <b>Desplegar</b> el paquete para instalar los módulos personalizados dentro de la aplicación.',
			'afterSave'=> 'Your new package should contain at least one module. You can create one or more custom modules for the package.<br/><br/>Click <b>New Module</b> to create a custom module for this package.<br/><br/> After creating at least one module, you can publish or deploy the package to make it available for your instance and/or other users\' instances.<br/><br/> To deploy the package in one step within your SuiteCRM instance, click <b>Deploy</b>.<br><br>Click <b>Publish</b> to save the package as a .zip file. After the .zip file is saved to your system, use the <b>Module Loader</b> to upload and install the package within your SuiteCRM instance.  <br/><br/>You can distribute the file to other users to upload and install within their own SuiteCRM instances.',
			'create'=> 'A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom <b>modules</b> that can be related to each other or to other modules in the application.<br/><br/>After creating a package for your project, you can create modules for the package right away, or you can return to the Module Builder at a later time to complete the project.',
			),
	'main'=>array(
		'welcome'=> 'Use las <b>Herramientas de Desarrollo</b> para crear y administrar módulos y campos tanto estándar como personalizados. <br/><br/>Para administrar los módulos de la aplicación, haga clic en <b>Estudio</b>. <br/><br/>Para crear módulos personalizados, haga clic en <b>Constructor de Módulos</b>.',
		'studioWelcome'=> 'Todos los módulos actualmente instalados, incluyendo los objetos estándares así como los cargados por un módulo, son personalizables dentro del Estudio.'
	),
	'module'=>array(
		'somemodules'=> 'Since the current package contains at least one module, you can <b>Deploy</b> the modules in the package within your SuiteCRM instance or <b>Publish</b> the package to be installed in the current SuiteCRM instance or another instance using the <b>Module Loader</b>.<br/><br/>To install the package directly within your SuiteCRM instance, click <b>Deploy</b>.<br><br>To create a .zip file for the package that can be loaded and installed within the current SuiteCRM instance and other instances using the <b>Module Loader</b>, click <b>Publish</b>.<br/><br/> You can build the modules for this package in stages, and publish or deploy when you are ready to do so. <br/><br/>After publishing or deploying a package, you can make changes to the package properties and customize the modules further.  Then re-publish or re-deploy the package to apply the changes.' ,
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
		'savebtn'	=> 'Clicant <b>Desar</b> es desaran tots els canvis i es faran efectius.',
		'Hidden' 	=> 'Camps ocults són camps que no estan disponibles actualment per als usuaris per al seu ús en les vistes de llista.',
		'Available' => 'Els camps disponibles són camps que no es mostren per defecte, però es poden activar pels usuaris.',
		'Default'	=> 'Camps per defecte apareixen als usuaris que no han creat configuració de la vista de llista personalitzat.'
	),

	'searchViewEditor'=>array(
		'modify'	=> 'There are two columns displayed to the left. The "Default" column contains the fields that will be displayed in the search view, and the "Hidden" column contains fields available for you as an admin to add to the view.',
		'savebtn'	=> 'En fer clic a <b> Desa i Desplegar </b> guardar tots els canvis i fer que s\'activa.',
		'Hidden' 	=> 'Camps ocults són camps que no es mostren a la vista de cerca.',
		'Default'	=> 'Camps predeterminats es mostraran a la vista de cerca.'
	),
	'layoutEditor'=>array(
		'default'	=> 'There are two columns displayed to the left. The right-hand column, labeled Current Layout or Layout Preview, is where you change the module layout. The left-hand column, entitled Toolbox, contains useful elements and tools for use when editing the layout. <br/><br/>If the layout area is titled Current Layout then you are working on a copy of the layout currently used by the module for display.<br/><br/>If it is titled Layout Preview then you are working on a copy created earlier by a click on the Save button, that might have already been changed from the version seen by users of this module.',
		'saveBtn'	=> 'Clicking this button saves the layout so that you can preserve your changes. When you return to this module you will start from this changed layout. Your layout however will not be seen by users of the module until you click the Save and Publish button.',
		'publishBtn'=> 'Click this button to deploy the layout. This means that this layout will immediately be seen by users of this module.',
		'toolbox'	=> 'La caixa d\'eines conté una varietat de característiques útils per als dissenys d\'edició, incloent una àrea d\'escombraries, un conjunt d\'elements addicionals i un conjunt de camps disponibles. Qualsevol d\'ells pot arrossegar i deixar anar en el disseny.',
		'panels'	=> 'This area shows how your layout will look to users of this module when it is depolyed.<br/><br/>You can reposition elements such as fields, rows and panels by dragging and dropping them; delete elements by dragging and dropping them on the trash area in the toolbox, or add new elements by dragging them from the toolbox and dropping them on to the layout in the desired position.'
	),
	'dropdownEditor'=>array(
		'default'	=> 'There are two columns displayed to the left. The right-hand column, labeled Current Layout or Layout Preview, is where you change the module layout. The left-hand column, entitled Toolbox, contains useful elements and tools for use when editing the layout. <br/><br/>If the layout area is titled Current Layout then you are working on a copy of the layout currently used by the module for display.<br/><br/>If it is titled Layout Preview then you are working on a copy created earlier by a click on the Save button, that might have already been changed from the version seen by users of this module.',
		'dropdownaddbtn'=> 'Haciendo clic en este botón se añade un nuevo elemento a la lista desplegable.',

	),
	'exportcustom'=>array(
	    'exportHelp'=> 'Customizations made in Studio within this instance can be packaged and deployed in another instance.  <br><br>Provide a <b>Package Name</b>.  You can provide <b>Author</b> and <b>Description</b> information for package.<br><br>Select the module(s) that contain the customizations to export. (Only modules containing customizations will appear for you to select.)<br><br>Click <b>Export</b> to create a .zip file for the package containing the customizations.  The .zip file can be uploaded in another instance through <b>Module Loader</b>.',
	    'exportCustomBtn'=> 'Haga clic en <b>Exportar</b> para crear un archivo .zip para el paquete que contenga las personalizaciones que desea exportar.',
	    'name'=> 'El <b> Nom </b> del paquet es mostrarà en el mòdul carregador després que el paquet es carrega per a la instal·lació en estudi.',
	    'author'=> 'El <b> Autor </b> és el nom de l\'entitat que va crear el paquet. L\'autor pot ser un individu o una empresa. <br> L\'Autor es mostrarà en el mòdul carregador després que el paquet es carrega per a la instal·lació en estudi.',
	    'description'=> 'El <b> Descripció </b> del paquet es mostrarà en el mòdul carregador després que el paquet es carrega per a la instal·lació en estudi.',
	),
	'studioWizard'=>array(
		'mainHelp' 	=> 'Benvingut a la <b> Eines de Desenvolupament </b> zona. <br/><br/> Utilitzeu les eines dins d\'aquesta àrea per crear i administrar mòduls i camps estàndard i personalitzats.',
		'studioBtn'	=> 'Utilitzeu <b> Studio </b> per personalitzar mòduls instal·lats canviant la disposició de camp, la selecció del que es disposa dels camps i la creació de camps de dades personalitzades.',
		'mbBtn'		=> 'Use el <b>Constructor de Módulos</b> para crear nuevos módulos.',
		'appBtn' 	=> 'Utilitzeu la manera d\'aplicació per personalitzar les diferents propietats del programa, com quants es mostren els informes de TPS a la pàgina principal.',
		'backBtn'	=> 'Volver al paso previo.',
		'studioHelp'=> 'Utilitzeu <b>Studio</b> per personalitzar els mòduls instal·lats.',
		'moduleBtn'	=> 'Haga clic para editar este módulo.',
		'moduleHelp'=> 'Seleccioneu el component de mòdul que voleu editar',
		'fieldsBtn'	=> 'Edita la informació que s\'emmagatzema en el mòdul mitjançant el control de la <b> Camps </b> en el mòdul. <br/> Vostè pot editar i crear camps personalitzats aquí.',
		'labelsBtn' => 'Feu clic a <b>Desa</b> per guardar les teves etiquetes personalitzades.',
		'layoutsBtn'=> 'Personalitzeu els <b> Layouts </b> de l\'Edició, Detall, de llista i buscar punts de vista.',
		'subpanelBtn'=> 'Edita la informació que es mostra en els subpanells d\'aquest mòdul.',
		'layoutsHelp'=> 'Seleccioneu un <b> Disseny per editar </b>.<br/<br/> Per canviar el disseny que conté camps de dades per a la introducció de dades, feu clic a <b> Mostra l\'</b>. <br/<br/> Per canviar la presentació que mostra les dades introduïdes en els camps de la vista d\'edició, feu clic a <b> Detallat </b>. <br/> Per canviar les columnes que apareixen a la llista predeterminada, feu clic a <b> Vista de llista </b>. <br/> per canviar la recerca de dissenys Bàsic i Avançat, feu clic a <b> Cercar </b> .Seleccionar a <b> Cercar </b> disseny per editar .',
		'subpanelHelp'=> 'Seleccioni un <b>Subpanell</b> a editar.',
		'searchHelp' => 'Seleccioneu un disseny de <b>Cerca</b> a editar.',
		'labelsBtn'	=> 'Feu clic a <b>Desa</b> per guardar les teves etiquetes personalitzades.',
        'newPackage'=> 'Haga clic en <b>Nuevo Paquete</b> para crear un nuevo paquete.',
        'mbHelp'    => '<b> Benvinguts al Mòdul Constructor. </b> <br/> ús <b> Mòdul Constructor </b> per crear paquets que continguin mòduls personalitzats en base a objectes estàndard o personalitzats. <br/> Per començar, feu clic a <b> Nou paquet </b> per crear un nou paquet, o seleccionar un paquet per editar. <br/> A <b> Paquet </b > actua com un contenidor per mòduls personalitzats, tots els quals formen part d\'un projecte. El paquet pot contenir un o més mòduls personalitzats que poden estar relacionats entre si o amb els mòduls de l\'aplicació. <br/> Exemples: Vostè pot ser que desitgi per crear un paquet que conté un mòdul personalitzat que es relaciona amb el mòdul de comptes estàndard. O bé, és possible que vulgueu crear un paquet que conté diversos mòduls nous que funcionen junts com un projecte i que es relacionen entre si i amb els mòduls de l\'aplicació.',
        'exportBtn' => 'Cliqui <b>Exportar personalitzacions</b> per a crear un paquet que contingui les personalitzacions realitzades a l\'estudi per mòduls específics.',
	),

	),
);
