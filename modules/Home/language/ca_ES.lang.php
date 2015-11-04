<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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

$mod_strings  = array(
    'LBL_MODULE_NAME' => 'Inici',
    'LBL_MODULES_TO_SEARCH' => 'Mòduls on cercar',
    'LBL_NEW_FORM_TITLE' => 'Nou Contacte',
    'LBL_FIRST_NAME' => 'Nom:',
    'LBL_LAST_NAME' => 'Cognoms:',
    'LBL_LIST_LAST_NAME' => 'Cognoms',
    'LBL_PHONE' => 'Telèfon:',
    'LBL_EMAIL_ADDRESS' => 'Correu:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'El Meu Objectiu',
    'LBL_PIPELINE_FORM_TITLE' => 'Objectiu per Etapa de Vendes',
    'LBL_CAMPAIGN_ROI_FORM_TITLE' => 'ROI Campanya',
    'LBL_MY_CLOSED_OPPORTUNITIES_GAUGE' => 'El Meu Indicador d\'Oportunitats Tancades',
    'LNK_NEW_CONTACT' => 'Nou Contacte',
    'LNK_NEW_ACCOUNT' => 'Nou Compte',
    'LNK_NEW_OPPORTUNITY' => 'Nova Oportunitat',
    'LNK_NEW_LEAD' => 'Nou Client Potencial',
    'LNK_NEW_CASE' => 'Nou Cas',
    'LNK_NEW_NOTE' => 'Nova Nota o Arxiu Adjunt',
    'LNK_NEW_CALL' => 'Programar Trucada',
    'LNK_NEW_EMAIL' => 'Arxivar Email',
    'LNK_COMPOSE_EMAIL' => 'Redactar Email',
    'LNK_NEW_MEETING' => 'Programar Reunió',
    'LNK_NEW_TASK' => 'Nova Tasca',
    'LNK_NEW_BUG' => 'Informar d\'Incidència',
    'LBL_ADD_BUSINESSCARD' => 'Nova Tarja de Visita',
    'ERR_ONE_CHAR' => 'Si us plau, indiqui un número o lletra per la seva cerca...',
    'LBL_OPEN_TASKS' => 'Les Meves Tasques Pendents',
    'LBL_SEARCH_RESULTS_IN' => 'en',
    'LNK_NEW_SEND_EMAIL' => 'Redactar Correu',
    'LBL_NO_ACCESS' => 'No té accés a aquesta zona. Contacti amb l\'administrador per a obtenir accés.',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Sense Resultats --',
    'LBL_NO_RESULTS' => '<h2>No s\'han trobat resultats. Si us plau, realitzi una nova cerca.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Trucs per a la Cerca:</h3><ul><li>Asseguris que ha seleccionat les categories adequades més a dalt.</li><li>Ampliï els seus criteris de recerca.</li><li>Si tot i així no obté resultats, provi amb l\'opció de cerca avançada.</li></ul >',

  'LBL_RELOAD_PAGE' => 'Si us plau, <a href="javascript: window.location.reload()">refresqui la pàgina</a> per a utilitzar aquest Dashlet de SuiteCRM.',
  'LBL_ADD_DASHLETS' => 'Afegir Dashlets',
  'LBL_ADD_PAGE' => 'Afegir Pàgina',
  'LBL_DEL_PAGE' => 'Esborrar Pàgina',
  'LBL_WEBSITE_TITLE' => 'Lloc Web',
  'LBL_RSS_TITLE' => 'Font de noticies',
  'LBL_DELETE_PAGE' => 'Esborrar Pàgina',
  'LBL_CHANGE_LAYOUT' => 'Canviar Disseny',
  'LBL_RENAME_PAGE' => 'Renombrar Pàgina',
  'LBL_CLOSE_DASHLETS' => 'Tancar',
  'LBL_OPTIONS' => 'Opcions',
  // dashlet search fields
  'LBL_TODAY'=>'Avui',
  'LBL_YESTERDAY' => 'Ahir',
  'LBL_TOMORROW'=>'Demà',
  'LBL_LAST_WEEK'=>'La Setmana Pasada',
  'LBL_NEXT_WEEK'=>'La Próxima Setmana',
  'LBL_LAST_7_DAYS'=>'Últims 7 Dies',
  'LBL_NEXT_7_DAYS'=>'Següents 7 Dies',
  'LBL_LAST_MONTH'=>'Últim Mes',
  'LBL_NEXT_MONTH'=>'Següent Mes',
  'LBL_LAST_QUARTER'=>'Úlimo Trimestre',
  'LBL_THIS_QUARTER'=>'Aquest Trimestre',
  'LBL_LAST_YEAR'=>'Últim Any',
  'LBL_NEXT_YEAR'=>'Proper Any',
  'LBL_LAST_30_DAYS' => 'Últims 30 Dies',
  'LBL_NEXT_30_DAYS' => 'Pròxims 30 dies',
  'LBL_THIS_MONTH' => 'Aquest Mes',
  'LBL_THIS_YEAR' => 'Aquest Any',

    'LBL_MODULES' => 'Mòduls',
    'LBL_CHARTS' => 'Gràfics',
    'LBL_TOOLS' => 'Eines',
    'LBL_WEB' => 'Web',
  'LBL_SEARCH_RESULTS' => 'Resultats de la Cerca',
  'LBL_MAX_DASHLETS_REACHED' => 'Ha assolit el nombre màxim de Dashlets de SuiteCRM que ha establert el seu administrador. Si us plau, elimini un Dashlet de SuiteCRM per a poder afegir-ne més.',
  'LBL_ADDING_DASHLET' => 'Afegint Dashlet de SuiteCRM...',
  'LBL_ADDED_DASHLET' => 'Dashlet de SuiteCRM afegit',
  'LBL_REMOVE_DASHLET_CONFIRM' => 'Està segur que vol eliminar el Dashlet de SuiteCRM?',
  'LBL_REMOVING_DASHLET' => 'Eliminant Dashlet de SuiteCRM...',
  'LBL_REMOVED_DASHLET' => 'Dashlet de SuiteCRM eliminat',
  'LBL_DASHLET_CONFIGURE_GENERAL' => 'General',
  'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtres',
  'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Només els Meus Elements',
  'LBL_DASHLET_CONFIGURE_TITLE' => 'Títol',
  'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Mostrar Files',

  'LBL_DASHLET_DELETE' => 'Eliminar Dashlet de SuiteCRM',
  'LBL_DASHLET_REFRESH' => 'Refrescar Dashlet de SuiteCRM',
  'LBL_DASHLET_EDIT' => 'Editar Dashlet de SuiteCRM',

    'LBL_TRAINING_TITLE' => 'Formació',

  'LBL_CREATING_NEW_PAGE' => 'Creant Nova Pàgina...',
  'LBL_NEW_PAGE_FEEDBACK' => 'Ha creat una nova pàgina. Pot afegir nou contingut amb l\'opció d\'afegir Dashlets de SuiteCRM.',
  'LBL_DELETE_PAGE_CONFIRM' => 'Està segur que desitja eliminar aquesta pàgina?',
  'LBL_SAVING_PAGE_TITLE' => 'Guardant Títol de Página...',
  'LBL_RETRIEVING_PAGE' => 'Recuperant Pàgina...',

  // Default out-of-box names for tabs
  'LBL_HOME_PAGE_1_NAME' => 'El meu CRM',
  'LBL_HOME_PAGE_2_NAME' => 'Página de Vendes',
  'LBL_HOME_PAGE_3_NAME' => 'Página de Màrqueting i Suport',
  'LBL_HOME_PAGE_6_NAME' => 'Màrketing',//bug 16510, separate the support and marketing page from each other
  'LBL_HOME_PAGE_4_NAME' => 'Monitoratge',
  'LBL_CLOSE_SITEMAP' => 'Tancar',

    'LBL_SEARCH' => 'Cercar',
    'LBL_CLEAR' => 'Netejar',

    'LBL_BASIC_CHARTS' => 'Gràfics Bàsics',
    'LBL_REPORT_CHARTS' => 'Gràfics d\'Informes',

    'LBL_MY_FAVORITE_REPORT_CHARTS' => 'Els Meus Informes Favorits',
    'LBL_GLOBAL_REPORT_CHARTS' => 'Informes del Equip Globlal',
    'LBL_MY_TEAM_REPORT_CHARTS' => 'Informes del Meu Equip',
    'LBL_MY_SAVED_REPORT_CHARTS' => 'Els Meus Informes Guardats',

  'LBL_DASHLET_SEARCH' => 'Cercar Dashlet de SuiteCRM',

//ABOUT page
    'LBL_VERSION' => 'Versió',
    'LBL_BUILD' => 'Build',


    'LBL_VIEWLICENSE_COM' => '<P>Aquest programa és programari lliure; pot redistribuir-lo i/o modificar-lo sota els termes de la < a href="LICENSE.txt" target="_blank" class="body " > GNU General Public License versió 3</a> tal qual està publicada per la Free Software Foundation, incloent els permisos addicionals establerts a les capçaleres del codi font.</P>',
    'LBL_ADD_TERM_COM' => '<P>The interactive user interfaces in modified source and object code versions of this program must display Appropriate Legal Notices, as required under Section 5 of the GNU Affero General Public License version 3. In accordance with Section 7(b) of the GNU General Public License version 3, these Appropriate Legal Notices must retain the display of the &quot;Powered by SugarCRM&quot; logo. If the display of the logo is not reasonably feasible for technical reasons, the Appropriate Legal Notices must display the words &quot;Powered by SugarCRM&quot;.</P>',


  'LBL_SUGAR_COMMUNITY_EDITION' => 'Sugar Community Edition',
  'LBL_AND' => 'i',
  'LBL_ARE' => 'son',
  'LBL_TRADEMARKS' => 'marques registrades',
  'LBL_OF' => 'de',
  'LBL_FOUNDERS' => 'Fundadors',
  'LBL_JOIN_SUGAR_COMMUNITY' => 'Unir-se a la comunitat de SuiteCRM',
  'LBL_DETAILS_SUGARFORGE' => 'Col·labori i desenvolupi extensions de SuiteCRM',
  'LBL_DETAILS_SUGAREXCHANGE' => 'Compri i vengui extensions certificades de SuiteCRM',
  'LBL_TRAINING' => 'Formació',
  'LBL_DETAILS_TRAINING' => 'Aprengui més sobre SuiteCRM utilitzant material formatiu interactiu en línia',
  'LBL_FORUMS' => 'Foros',
  'LBL_DETAILS_FORUMS' => 'Debati sobre SuiteCRM amb usuaris i desenvolupadors experts de la comunitat',
  'LBL_WIKI' => 'Wiki',
  'LBL_DETAILS_WIKI' => 'Busqui en la Base de Coneixements sobre temes d\'usuaris i desenvolupadors',
  'LBL_DEVSITE' => 'Lloc del Desenvolupador',
  'LBL_DETAILS_DEVSITE' => 'Descobreixi recursos, tutorials, i enllaços útils per accelerar els seus desenvolupaments sobre SuiteCRM',
 'LBL_GET_SUGARCRM_RSS' => 'Obtindre SuiteCRM RSS',
  'LBL_SUGARCRM_NEWS' => 'Noticies sobre SuiteCRM',
  'LBL_SUGARCRM_TRAINING_NEWS' => 'Noticies sobre formació de SuiteCRM',
  'LBL_SUGARCRM_FORUMS' => 'Fòrums de SuiteCRM',
  'LBL_SUGARFORGE_NEWS' => 'Noticies sobre SuiteCRM',
  'LBL_ALL_NEWS' => 'Totes les Notícies',
  'LBL_SOURCE_CODE' => 'Còdig Font',
    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - proveïdors de CE framework',
  'LBL_SOURCE_XTEMPLATE' => 'XTemplate - Un motor de plantilles per a PHP creat per Barnabás Debreceni',
  'LBL_SOURCE_NUSOAP' => 'NuSOAP - Un conjunt de classes PHP que permeten als desenvolupadors crear i consumir serveis web creat per NuSphere Corporation i Dietrich Ayala',
  'LBL_SOURCE_JSCALENDAR' => 'JS Calendar - Un calendari per introduir dates creat per Mihai Bazon',
  'LBL_SOURCE_PHPPDF' => 'PHP PDF - Un calendari per introduir dates creat per Mihai Bazon',
  'LBL_SOURCE_HTTP_WEBDAV_SERVER' => 'HTTP_WebDAV_Server - Una Implementació de Servidor WebDAV en PHP.',
  'LBL_SOURCE_PCLZIP' => 'PclZip - llibrería que ofereix funcions de compressió i extracció per a arxius Zip, per Vincent Blavet',
  'LBL_SOURCE_SMARTY' => 'Smarty - Un motor de plantilles per PHP.',
  'LBL_SOURCE_YAHOO_UI_LIB' => 'Yahoo! User Interface Library - La Biblioteca d\'Utilitats de Interfície Gráfica facilita la implementació de característiques per un cliente amb una interfície rica.',
  'LBL_SOURCE_PHPMAILER' => 'PHPMailer - Una clase per transferencia de correu per PHP amb característiques completes.',
  'LBL_SOURCE_JSHRINK' => 'JShrink - Un minifier Javascript escrit en PHP',
  'LBL_SOURCE_CRYPT_BLOWFISH' => 'Crypt_Blowfish - Permet una ràpida encriptació blowfish en ambos sentits sense necessitar la extensió PHP MCrypt.',
  'LBL_SOURCE_XML_HTMLSAX3' => 'XML_HTMLSax3 - Un analitzador SAX per HTML i altres documents amb XML mal format',
  'LBL_SOURCE_YAHOO_UI_LIB_EXT' => 'Yahoo! UI Extensions Library - Extensions per Yahoo! User Interface Library, per Jack Slocum',
  'LBL_SOURCE_SWFOBJECT' => 'SWFObject - detecció JavaScript i script de incrustació del reproductor de Flash.',
  'LBL_SOURCE_TINYMCE' => 'TinyMCE - Control d\'edició WYSIWYG per navegadors web que permet al usuari editar el contingut HTML',
  'LBL_SOURCE_EXT' => 'Ext - Framework JavaScript per clients d\'aplicacions web.',
  'LBL_SOURCE_RECAPTCHA' => 'reCAPTCHA l\'ajuda a evitar abusos automatitzats del seu lloc (com comentaris de spam o registres d\'usuaris falsos) utilitzant un CAPTCHA per assegurar que només un humà realitza certes accions.',
  'LBL_SOURCE_TCPDF' => 'TCPDF - Una classe PHP per generar documents PDF.',
  'LBL_SOURCE_CSSMIN' => 'CssMin - Un analitzador i minimitzador de css.',
  'LBL_SOURCE_PHPSAML' => 'PHP-SAML - Un simple joc d\'eines SAML per a PHP.',
  'LBL_SOURCE_ISCROLL' => 'iScroll - El desbordament: desplaçament per a mòbils webkit. Desplaçament natiu dins d\'una amplada fixa / alçada de l\'element.',
  'LBL_SOURCE_FLASHCANVAS' => 'FlashCanvas - FlashCanvas és una biblioteca JavaScript que suma el suport HTML5 Canvas per a Internet Explorer. Es fa formes i imatges a través de Flash API de dibuix. És compatible amb gairebé totes les API de lona i, en molts casos, corre més ràpid que altres biblioteques similars que utilitzen VML o Silverlight.',
  'LBL_SOURCE_JIT' => 'JavaScript InfoVis Toolkit - El JavaScript InfoVis Toolkit proporciona eines per crear visualitzacions de dades interactives per a la Web.',
  'LBL_SOURCE_ZEND' => 'Zend Framework - Un codi font obert, orientat a objectes amb un framework d\'aplicaciones web en PHP5.',
  'LBL_SOURCE_PARSECSV' => 'parseCSV - analitzador de dades CSV per a PHP',
  'LBL_SOURCE_PHPJS' => 'php.js - Utilitzar funcions PHP en JavaScript',
  'LBL_SOURCE_PHPSQL' => 'PHP SQL Parser',
  'LBL_SOURCE_HTMLPURIFIER' => 'Purificador HTML - Una biblioteca compatible amb els estàndars HTML de filtració.',
  'LBL_SOURCE_XHPROF' => 'XHProf - un analitzador jeràrquic a nivell funcional per a PHP',
  'LBL_SOURCE_ELASTICA' => 'Elastica - client PHP per a distribuïr motors de cerca elasticsearch',
  'LBL_SOURCE_FACEBOOKSDK' => 'Facebook PHP SDK',
  'LBL_SOURCE_JQUERY' => 'JQuery - JQuery en una ràpidam petita i funcional llibreria de Javascript.',
  'LBL_SOURCE_JQUERY_UI' => 'JQuery UI - JQuery UI és un conjunt d\'interaccions d\'interfaces, efectes, widgets i temes fets a partir de la llibreria de Javascript JQuery.',
  'LBL_SOURCE_OVERLIB' => 'OverlibMWS - la llibreria overlibmws utilitza javascript per finestres emergents DHTML que serveixen d\'ajuda informativa i de navegació per la web.',

  'LBL_DASHLET_TITLE' => 'Portal',
  'LBL_DASHLET_OPT_TITLE' => 'Títol',
  'LBL_DASHLET_INCORRECT_URL' => 'La ubicació especificada de la web es incorrecta',
  'LBL_DASHLET_OPT_URL' => 'Adreça del lloc web',
  'LBL_DASHLET_OPT_HEIGHT' => 'Altura del Dashlet (en píxels)',
  'LBL_DASHLET_SUGAR_NEWS' => 'Noticies sobre SuiteCRM',
  'LBL_DASHLET_DISCOVER_SUGAR_PRO' => 'Descobrir SuiteCRM',
	'LBL_POWERED_BY_SUGAR' => 'Desenvolupat per SugarCRM' /*for 508 compliance fix*/,
	'LBL_MORE_DETAIL' => 'Més detalls' /*for 508 compliance fix*/,
	'LBL_BASIC_SEARCH' => 'Búsqueda Bàsica' /*for 508 compliance fix*/,
	'LBL_ADVANCED_SEARCH' => 'Cerca Avançada' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Icona de la pàgina d\'inici',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Torni a la seva pàgina d\'inici en un sol clic.',
    'LBL_TOUR_MODULES' => 'Mòdul',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Tots els seus mòduls importants estan aquí.',
    'LBL_TOUR_MORE' => 'Més mòduls',
    'LBL_TOUR_MORE_DESCRIPTION' => 'La resta dels seus mòduls estan aquí.',
    'LBL_TOUR_SEARCH' => 'Cerca de text complet',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'La cerca ara es molt millor.',
    'LBL_TOUR_NOTIFICATIONS' => 'Notificacions',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'Les notificacions de l\'aplicació SuiteCRM aniran aquí.',
    'LBL_TOUR_PROFILE' => 'Perfil',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Accedir al perfil, la configuració i finalitzar sessió.',
    'LBL_TOUR_QUICKCREATE' => 'Creació Ràpida',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Creació de registres ràpida sense perdre posició.',
    'LBL_TOUR_FOOTER' => 'Peu de pàgina plegable',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Plegui i desplegui el peu de pàgina facilment.',
    'LBL_TOUR_CUSTOM' => 'Apps personalitzades',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'integracions personalitzades hauríen d\'anar aquí.',
    'LBL_TOUR_BRAND' => 'La teva marca',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'El seu logo va aquí. Passi el ratolí per sobre per a més informació.',
    'LBL_TOUR_WELCOME' => 'Benvingut a SuiteCRM',
    'LBL_TOUR_WATCH' => 'Veure les novetats de SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">Nova barra de navegació simplificada</li><li class="icon-ok">Nova peu plegable</li><li class="icon-ok">Millora de la cerca</li><li class="icon-ok">Actualitzat menú d\'accions</li></ul><p>I molt més!</p>',
    'LBL_TOUR_VISIT' => 'Per a més informació visiti la nostra aplicació',
    'LBL_TOUR_DONE' => 'Ja està!',
    'LBL_TOUR_REFERENCE_1' => 'sempre pots referenciar al nostre ',
    'LBL_TOUR_REFERENCE_2' => 'a través del link de soport a sota de la pestanya del perfil.',
    'LNK_TOUR_DOCUMENTATION' => 'documentació',
    'LBL_TOUR_CALENDAR_URL_1' => 'Do you share your SuiteCRM calendar with 3rd party applications, such as Microsoft Outlook or Exchange? If so, you have a new URL. This new, more secure URL includes a personal key which will prevent unauthorized publishing of your calendar.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Recuperar el teu nou calendari compartit URL',
    'LBL_ABOUT' => 'Quant a',
    'LBL_CONTRIBUTORS' => 'Colaboradors',
    'LBL_ABOUT_SUITE' => 'Sobre SuiteCRM',
    'LBL_PARTNERS' => 'Partners',
    'LBL_FEATURING' => 'Els mòduls AOS, AOW, AOR, AOP, AOE i Replanificació són de SalesAgility.',

    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - CRM de codi obert per a tot el món',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite per Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps per Jeffrey J.Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM LOGO proporcionat per Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribució a SuiteCRM 7.3 publicada per ResponseTap',


    'LBL_LANGUAGE_SPANISH' => 'Traducció a l\'espanyol proporcionada per Disytel openConsulting',
    'LBL_LANGUAGE_RUSSIAN' => 'Traducció al rus proporcionada per likhobory',

    'LBL_ABOUT_SUITE_1' => 'SuiteCRM és una derivació (fork) de SugarCRM. Hi ha uns quants articles a la web que expliquen les raons per les quals va ser necessaria la derivació.',
    'LBL_ABOUT_SUITE_2' => 'SuiteCRM està publicat sota la llicència de codi obert - GPL3',
    'LBL_ABOUT_SUITE_3' => 'SuiteCRM és totalment compatible amb SugarCRM 6.5.x',
    'LBL_ABOUT_SUITE_4' => 'Tot el codi desenvolupat i administrat pel projecte SuiteCRM serà publicat com a codi obert - GPL3',
    'LBL_ABOUT_SUITE_5' => 'El suport de SuiteCRM està disponible tant de forma gratuita com de pagament',

    'LBL_SUITE_PARTNERS' => 'Tenim socis lleials de SuiteCRM que són apassionats del codi obert. Per veure la nostra llista completa de socis, visiteu la nostra pàgina web.',


  // Dashlet Categories
  'dashlet_categories_dom' => array(
      'Module Views' => 'Vistes del Mòdul',
      'Portal' => 'Portal',
      'Charts' => 'Gràfics',
      'Tools' => 'Eines',
      'Miscellaneous' => 'Altres'
			),
      );

?>
