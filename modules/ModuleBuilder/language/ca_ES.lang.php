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
    'LBL_LOADING' => 'Carregant' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Oculta les opcions' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Eliminar' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'Proporcioni un <b>Nom</b> par al paquet. El nom que introdueixi ha de ser alfanumèric i no pot contenir espais. (Exemple: HR_Management)<br/><br/> Pot proporcionar la informació del <b>Autor</b> i la <b>Descripció</b> del paquet. <br/><br/>Faci clic a <b>Desar</b> par a crear el paquet.',
            'modify' => 'Las propiedades y acciones posibles del <b>Paquete</b> aparecen aquí.<br><br>Puede modificar el <b>Nombre</b>, <b>Autor</b> y <b>Descripción</b> del paquete, así como ver y personalizar cualquiera de los módulos contenidos en el paquete.<br><br>Haga clic en <b>Nuevo Módulo</b> para crear un módulo para el paquete.<br><br>Si el paquete contiene al menos un módulo, puede <b>Publicar</b> y <b>Desplegar</b> el paquete, así como <b>Exportar</b> las personalizaciones realizadas al paquete.',
            'name' => 'Este es el <b>Nombre</b> del paquete actual. <br/><br/>El nombre que introduzca debe ser alfanumérico, comenzar por una letra y no contener espacios. (Example: HR_Management)',
            'author' => 'Este es el <b>Autor</b> mostrado durante la instalación como el nombre de la entidad que ha creado el paquete.<br><br>El Autor podría ser un individuo o una empresa.',
            'description' => 'Esta es la <b>Descripción</b> del paquete que se muestra durante la instalación.',
            'publishbtn' => 'Faci clic a <b>Publicar</b> per a desar totes les dades introduides i crear un fitxer .zip que és una versió instal·lable del paquet.<br><br>Utilitzi el <b>Cargardor de Mòduls</b> per a pujar el fitxer .zip i instal·lar el paquet.',
            'deploybtn' => 'Faci clic a <b>Desplegar</b> per a desar totes les dades introduïdes i instal·lar el paquet, incloent tots els mòduls, en la instància actual.',
            'duplicatebtn' => 'Haga clic en <b>Duplicar</b> para copiar el contenido del paquete en un paquete nuevo y mostrar el recién creado paquete. <br/><br/>Se creará de forma automática un nuevo nombre para el nuevo paquete añadiendo un número al final del nombre del paquete original. Puede renombrar el nuevo paquete introduciendo un nuevo <b>Nombre</b> y haciendo clic en <b>Guardar</b>.',
            'exportbtn' => 'Haga clic en <b>Exportar</b> para crear un archivo .zip que contenga las personalizaciones hechas al paquete.<br><br> El archivo generado no es una versión instalable del paquete.<br><br>Utilice el <b>Cargador de Módulos</b> para importar el archivo .zip y para que el paquete, personalizaciones incluidas, aparezca en el Constructor de Módulos.',
            'deletebtn' => 'Haga clic en <b>Eliminar</b> para eliminar este paquete y todos los archivos relacionados con este paquete.',
            'savebtn' => 'Faci clic a <b>Desar i Desplegar</b> per a desar tots els canvis que ha realitzat i per a que estiguin aplicats al mòdul.',
            'existing_module' => 'Haga clic en el icono <b>Módulo</b> para editar las propiedades y personalizar los campos, relaciones y diseños asociados al módulo.',
            'new_module' => 'Haga clic en <b>Nuevo Módulo</b> para crear un nuevo módulo para este paquete.',
            'key' => 'Esta <b>Clave</b> alfanumérica de 5 letras se usará para prefijar todos los directorios, nombres de clases y tablas de base de datos de todos los módulos en el paquete actual.<br><br>La clave se usa para contribuir a la unicidad de los nombres de tablas.',
            'readme' => 'Haga clic para agregar un texto <b>Léame</b> para este paquete.<br><br>El Léame quedará disponible en el momento de instalación.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Proporcionar un <b> Nom </b> per al mòdul. La <b> Etiqueta </b> que vostè proporcioni apareixerà a la pestanya de navegació. <br/> Trieu per mostrar una pestanya de navegació per al mòdul marcant la <b> Pestanya de navegació </b> casella de verificació. <br/> A continuació, seleccioneu el tipus de mòdul que voleu crear. <br/> Seleccioneu un tipus de plantilla. Cada plantilla conté un conjunt específic dels camps, així com els dissenys predefinits, per utilitzar com a base per a la seva mòdul. <br/> Feu clic a <b> Desa </b> per crear el mòdul.',
            'modify' => 'Vostè pot canviar les propietats del mòdul o personalitzar el <b> Camps </b>, <b> Relacions </b> i <b> Layouts </b> en relació amb el mòdul.',
            'importable' => 'Marcando la opción <b>Importable</b> se habilitará la importación para este módulo.<br><br>Un enlace al Asistente de Importación aparecerá en el panel de Atajos del módulo.  El Asistente de Importación le facilitará la importación de datos provenientes de fuentes externas en el módulo personalizado.',
            'team_security' => 'Marcando la opción <b>Seguridad de Equipos</b> se habilitará la seguridad de equipos para este módulo.  <br/><br/>Si la seguridad de equipos está habilitada, el campo de selección de Equipo aparecerá en los registros del módulo ',
            'reportable' => 'Marcando esta opción permitirá que este módulo tenga informes que corran contra él.',
            'assignable' => 'Marcando esta opción permitirá que un registro de este módulo sea asignado a un usuario.',
            'has_tab' => 'Marcando <b>Pestaña de Navegación</b> proveerá al módulo de una pestaña de navegación.',
            'acl' => 'Marcando esta opción habilitará los Controles de Acceso para este módulo, incluyendo la Seguridad a Nivel de Campo.',
            'studio' => 'Marcando esta opción permitirá que los administradores personalicen este módulo dentro del Estudio.',
            'audit' => 'Marcando esta opción habilitará la Auditoría para este módulo. Los cambios a algunos de los campos serán registrados de forma que los administradores puedan revisar el historial de cambios.',
            'viewfieldsbtn' => 'Haga clic en <b>Ver Campos</b> para ver los campos asociados con el módulo y crear y editar campos personalizados.',
            'viewrelsbtn' => 'Haga clic en <b>Ver Relaciones</b> para ver las relaciones asociadas con este módulo y crear nuevas relaciones.',
            'viewlayoutsbtn' => 'Haga clic en <b>Ver Diseños</b> para ver los diseños de este módulo y personalizar la disposición de los campos dentro de los diseños.',
            'duplicatebtn' => 'Feu clic a <b> Duplica </b> per copiar les propietats del mòdul en un mòdul nou i per mostrar el nou mòdul. <br/> Per al nou mòdul, un nou nom es generarà automàticament afegint un número al final del nom del mòdul utilitzat per crear la nova.',
            'deletebtn' => 'Cliqui <b>Eliminar</b> per eliminar aquest mòdul.',
            'name' => 'Aquest és el <b>Nom</b> del mòdul actual.<br/><br/>El nom ha de ser alfanumèric, ha de començar amb una lletra i no pot contenir espais. (Example: HR_Management)',
            'label' => 'Esta es la <b>Etiqueta</b> que aparecerá en la pestaña de navegación del módulo. ',
            'savebtn' => 'Cliqui <b>Desar</b> per desar tota la informació relacionada amb el mòdul.',
            'type_basic' => 'El tipo de plantilla <b>Básica</b> proporciona los campos básicos, como Nombre, Asignado a, Equipo, Fecha de Creación y Descripción.',
            'type_company' => 'El tipo de plantilla <b>Empresa</b> proporciona campos particulares de una organización, como Nombre de Empresa, Industria y Dirección de Facturación.<br/><br/>Use esta plantilla para crear módulos que sean similares al módulo estándar de Cuentas.',
            'type_issue' => 'El tipo de plantilla <b>Incidencia</b> proporciona campos particulares de casos e incidencias, como Número, Estado, Prioridad y Descripción.<br/><br/>Use esta plantilla para crear módulos que sean similares a los módulos estándar de Casos y Seguimiento de Incidencias.',
            'type_person' => 'El tipus de plantilla <b>Persona</b> disposa de camps específics, com per exemple, Salutació, Títol, Nom, Adreça, Número de Telèfon. <br /><br />Utilitzi aquesta plantilla per a crear mòduls que són similars als mòduls estàndards de Contactes i Clients Potencials.',
            'type_sale' => 'El tipo de plantilla <b>Ventas</b> proporciona campos específicos de una oportunidad, como la Toma de Contacto, Etapa, Cantidad y Probabilidad.<br/><br/>Use esta plantilla para crear módulos que sean similares al módulo estándar de Oportunidades.',
            'type_file' => 'La plantilla <b>Archivo</b> proporciona campos específicos de un Documento, como Nombre de Archivo, tipo de Documento, y Fecha de Publicación.<br><br>Use esta plantilla para crear módulos que sean similares al módulo estándar de Documentos.',

        ),
        'dropdowns' => array(
            'default' => 'Todas las <b>Listas Desplegables</b> de la aplicación se listan a aquí.<br><br>Las listas desplegables pueden ser usadas para campos de lista desplegable de cualquier módulo.<br><br>Para realizar cambios a una lista desplegable existente, haga clic en su nombre.<br><br>Haga clic en <b>Agregar Desplegable</b> para crear un nuevo desplegable.',
            'editdropdown' => 'Las listas desplegables pueden ser utilizadas para campos desplegables estándar o personalizados de cualquier módule.<br><br>Proporcione un <b>Nombre</b> para la lista desplegable.<br><br>Si tiene instalado otros paquetes de idioma en la aplicación, podrá seleccionar el <b>Idioma</b> a utilizar para los elementos de la lista.<br><br>En el campo <b>Nombre de Elemento</b>, proporcione un nombre para la opción en la lista desplegable.  Este nombre no aparecerá en la lista desplegable que es visible a los usuarios.<br><br>En el campo <b>Etiqueta de Visualización</b>, proporcione una etiqueta que será visible a los usuarios.<br><br>Tras proporcionar el nombre de elemento y la etiqueta de visualización, haga clic en <b>Agregar</b> para agregar el elemento a la lista desplegable.<br><br>Para cambiar el orden de los elementos en la lista, arrastre y suelte elementos en las posiciones deseadas.<br><br>Para editar la etiqueta de visualización de un elemento, haga clic en el icono <b>Editar</b>, e introduzca una nueva etiqueta. Para eliminar un elemento de la lista desplegable, haga clic en el icono <b>Eliminar</b>.<br><br>Para deshacer un cambio realizado a una etiqueta de visualización, haga clic en <b>Deshacer</b>.  Para rehacer un cambio que ha sido previamente deshecho, haga clic en <b>Rehacer</b>.<br><br>Haga clic en <b>Guardar</b> para guardar la lista desplegable.',

        ),
        'subPanelEditor' => array(
            'modify' => 'Tots els camps que es poden mostrar al <b> subpanel </b> apareixen aquí. A el <b> per defecte </b> la columna conté els camps que es mostren en el subpanel. <br /> <br/> La columna <b> Ocult </b> conté els camps que es poden afegir a la columna per defecte.'
        ,
            'savebtn' => 'Feu clic a <b> Desa i Desplegar </b> per desar els canvis realitzats i perquè siguin actius dins del mòdul.',
            'historyBtn' => 'Haga clic en <b>Ver Historial</b> para ver y restaurar del historial un diseño previamente guardado.',
            'historyDefault' => 'Feu clic a <b> Restaura valors per defecte </b> per restaurar la vista al format original.',
            'Hidden' => 'Los campos <b>Ocultos</b> no aparecen en el subpanel.',
            'Default' => 'Los campos <b>Por Defecto</b> aparecen en el subpanel.',

        ),
        'listViewEditor' => array(
            'modify' => 'Todos los campos que pueden ser mostrados en la <b>Vista de Lista</b> aparecen aquí.<br><br>La columna <b>Por Defecto</b> contiene los campos que son mostrados en la Vista de Lista por defecto.<br/><br/>La columna <b>Displonibles</b> contiene los campos que un usuario puede seleccionar en la Búsqueda para crear una Vista de Lista personalizada. <br/><br/>La columna <b>Ocultos</b> muestra los campos que pueden ser agregados a las columnas Por Defecto o Disponibles.'
        ,
            'savebtn' => 'Feu clic a <b> Desa i Desplegar </b> per desar els canvis realitzats i perquè siguin actius dins del mòdul.',
            'historyBtn' => 'Feu clic a <b> Mostra l’historial </b> per veure i restaurar un disseny prèviament guardat de la història. <br> <B> Restaura </b> a <b> Mostra l’historial </b> restaura la col·locació de camp dins dels dissenys guardats anteriorment. Per canviar les etiquetes de camp, feu clic a la icona edita al costat de cada camp.',
            'historyDefault' => 'Feu clic a <b> Restaura valors per defecte </ b> per restaurar la vista en el seu format original. <br> <B> Restaura valors per defecte </ b> només es restaura la col·locació de camp dins el traçat original. Per canviar les etiquetes de camp, feu clic a la icona Edita al costat de cada camp.',
            'Hidden' => 'Los campos <b>Ocultos</b> son campos que no están disponibles actualmente para que los usuarios los utilicen en las vistas de lista.',
            'Available' => 'Camps <b>disponibles</b> no es mostren per defecte, però es poden afegir a ListViews pels usuaris.',
            'Default' => '<b>per defecte</b>Els camps apareix en ListViews que no són personalitzats per part dels usuaris.'
        ),
        'popupListViewEditor' => array(
            'modify' => 'Tots els camps que es poden visualitzar en la <b>ListView</b> apareixen aquí. <br><br>La columna <b>per defecte</b> conté els camps que es mostren a la ListView predeterminada. <br/> <br/> La columna <b>ocults</b> conté camps que es poden afegir a l’omissió o columna disponible.'
        ,
            'savebtn' => 'Feu clic a <b> Desa i Desplegar </ b> per desar els canvis realitzats i perquè siguin actius dins del mòdul.',
            'historyBtn' => 'Feu clic a <b> Mostra l’historial </b> per veure i restaurar un disseny prèviament guardat de la història. <br> <B> Restaura </b> a <b> Mostra l’historial </b> restaura la col·locació de camp dins dels dissenys guardats anteriorment. Per canviar les etiquetes de camp, feu clic a la icona edita al costat de cada camp.',
            'historyDefault' => 'Feu clic a <b> Restaura valors per defecte </b> per restaurar la vista en el seu format original.<br><br><b>Restaura valors per defecte </b> només es restaura la col·locació de camp dins el vista original. Per canviar les etiquetes de camp, feu clic a la icona Edita al costat de cada camp.',
            'Hidden' => 'Los campos <b>Ocultos</b> son campos que no están disponibles actualmente para que los usuarios los utilicen en las vistas de lista.',
            'Default' => '<b>per defecte</b>Els camps apareix en ListViews que no són personalitzats per part dels usuaris.'
        ),
        'searchViewEditor' => array(
            'modify' => 'Tots els camps que es poden mostrar al formulari <b>Filtre</b> apareixen aquí.<br><br> La columna <b>Per defecte</b>conté els camps que es mostraran al formulari de cerca.<br/><br/>La columna<b> ocults</b>conté camps disponibles per a vostè com a administrador per afegir al formulari de cerca.'
        ,
            'savebtn' => 'Clicant <b>Desar i Aplicar</b> els canvis seran actius',
            'Hidden' => 'Els camps <b>Ocults</b> no apareixen a la cerca.',
            'historyBtn' => 'Feu clic a <b> Mostra l’historial </b> per veure i restaurar un disseny prèviament guardat de la història. <br> <B> Restaura </b> a <b> Mostra l’historial </b> restaura la col·locació de camp dins dels dissenys guardats anteriorment. Per canviar les etiquetes de camp, feu clic a la icona edita al costat de cada camp.',
            'historyDefault' => 'Feu clic a <b> Restaura valors per defecte </b> per restaurar la vista en el seu format original.<br><br><b>Restaura valors per defecte </b> només es restaura la col·locació de camp dins el vista original. Per canviar les etiquetes de camp, feu clic a la icona Edita al costat de cada camp.',
            'Default' => 'Les files per <b>Defecte</b> apareixen a la cerca.'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => 'El área de <b>Diseño</b> contiene los campos que actualmente están siendo mostrados en la <b>Vista de Detalle</b>.<br/><br/>La <b>Caja de Herramientas</b> contiene la <b>Papelera de Reciclaje</b> y los campos y elementos del diseño que pueden ser agregados al mismo.<br><br>Haga cambios al diseño arrastrando y soltando elementos y campos entre la <b>Caja de Herramientas</b> y el <b>Diseño</b> así como dentro del mismo diseño.<br><br>Para quitar un campo del diseño, arrastre el campo a la <b>Papelera de Reciclaje</b>. El campo pasará a estar disponible en la Caja de Herramientas para ser agregado al diseño.',
            'defaultquickcreate' => 'El área de <b>Diseño</b> contiene los campos que actualmente están siendo mostrados en el formulario de <b>Creación Rápida</b>.<br><br>El formulario de Creación Rápida aparece en los subpaneles de un módulo cuando el botón Crear es pulsado.<br/><br/>La <b>Caja de Herramientas</b> contiene la <b>Papelera de Reciclaje</b> y los campos y elementos del diseño que pueden ser agregados al mismo.<br><br>Haga cambios al diseño arrastrando y soltando elementos y campos entre la <b>Caja de Herramientas</b> y el <b>Diseño</b> así como dentro del mismo diseño.<br><br>Para quitar un campo del diseño, arrastre el campo a la <b>Papelera de Reciclaje</b>. El campo pasará a estar disponible en la Caja de Herramientas para ser agregado al diseño.',
            //this default will be used for edit view
            'default' => 'L’àrea de <b>disseny</b> conté els camps que es mostren actualment dins de <b>EditView</b>. <br/> <br/> La <b>caixa d’eines</b> conté la <b>Paperera de reciclatge</b> i els camps i elements de presentació que es poden afegir a la disposició. <br><br>Fes canvis a la disposició per arrossegar i deixar anar elements i camps entre la <b>caixa d’eines</b> i la <b>disposició</b> i dins la mateixa disposició. <br> <br>Per a eliminar un camp de la disposició, arrossegueu el camp a la <b>Paperera de reciclatge</b>. El camp serà disponible en la caixa d’eines per afegir a la disposició.',
            'saveBtn' => 'Faci clic a <b>Desar</b> per a preservar els canvis que ha realitzat al disseny des de l’última vegada que el va desar.<br><br>Els canvis no es mostraran al mòdul fins que apliqui els canvis desats.',
            'historyBtn' => 'Feu clic a <b> Mostra l’historial </b> per veure i restaurar un disseny prèviament guardat de la història. <br> <B> Restaura </b> a <b> Mostra l’historial </b> restaura la col·locació de camp dins dels dissenys guardats anteriorment. Per canviar les etiquetes de camp, feu clic a la icona edita al costat de cada camp.',
            'historyDefault' => 'Feu clic a <b> Restaura valors per defecte </ b> per restaurar la vista en el seu format original. <br> <B> Restaura valors per defecte </ b> només es restaura la col·locació de camp dins el traçat original. Per canviar les etiquetes de camp, feu clic a la icona Edita al costat de cada camp.',
            'publishBtn' => 'Cliqui <b>Desar i aplicar</b> per a desar tots els canvis que ha realitzat al disseny des de l’últim cop que els va desar, i per a deixar actius els canvis al mòdul.<br><br>El disseny serà mostrat immediatament al mòdul.',
            'toolbox' => 'La <b>Caja de Herramientas</b> contiene la <b>Papelera de Reciclaje</b>, elementos de diseño adicionales y el conjunto de campos disponibles para ser agregados al diseño.<br/><br/>Los elementos de diseño y los campos de la Caja de Herramientas pueden ser arrastrados y soltados en el diseño, y los elementos de diseño y los campos pueden ser arrastrados y soltados del diseño a la Caja de Herramientas.<br><br>Los elementos de diseño son <b>Paneles</b> y <b>Filas</b>. Agregando una nueva fila o un nuevo panel al diseño proporciona ubicaciones adicionales en el diseño para los campos.<br/><br/>Arrastre y suelte cualquier campo en la Caja de Herramientas o en el diseño a una posición de campo ocupada para intercambiar las ubicacines de los dos campos.<br/><br/>El campo de <b>Relleno</b> crea espacio vacío en el diseño allí donde es colocado.',
            'panels' => 'El área de <b>Diseño</b> proporciona una vista sobre cómo el diseño aparecerá en el módulo cuando los cambios realizados al diseño sean desplegados.<br/><br/>Puede reposicionar campos, filas y paneles arrastrándolos y soltándolos en la ubicación deseada.<br/><br/>Quite elementos arrastrándolos y soltándolos en la <b>Papelera de Reciclaje</b> de la Caja de Herramientas, o agregue nuevos elementos y campos arrastrándolos de la <b>Caja de Herramientas</b> y soltándolos en la ubicación deseada del diseño.',
            'delete' => 'Arrastre y suelte cualquier elemento aquí para quitarlo del diseño',
            'property' => 'Edite la etiqueta mostrada para este campo. <br/>El <b>Orden de Tabulación</b> controla en qué orden la tecla tabulador cambiará el foco entre los distintos campos.',
        ),
        'fieldsEditor' => array(
            'default' => 'Els <b>camps</b> que estan disponibles per al mòdul s’esmenten pel seu nom de camp. <br><br>Els camps personalitzats creats per al mòdul apareixen sobre els camps que estan disponibles per al mòdul per defecte. <br> <br>Per editar un camp, feu clic al <b>Camp nom</b>. <br/> <br/> Per crear un nou camp, feu clic a <b>Afegir camp</b>.',
            'mbDefault' => 'Los <b>Campos</b> disponibles para un módulo se listan aquí por Nombre de Campo.<br><br>Para personalizar la etiqueta del campo plantilla, haga clic en el Nombre de Campo.<br><br>Para crear un nuevo campo, haga clic en <b>Agregar Campo</b>. La etiqueta y el resto de propiedades del nuevo campo pueden ser editadas tras su creación haciendo clic en el Nombre de Campo.<br><br>Tras el despliegue del módulo, los nuevos campos creados con el Contructor de Módulos serán tradados como campos estándar del módulo desplegado en el Estudio.',
            'addField' => 'Seleccione un <b>Tipo de Datos</b> para el nuevo campo. El tipo que seleccione determinará que tipo de caracteres pueden introducirse para el campo. Por ejemplo, sólo se podrán introducir números enteros en campos que son del tipo de datos Entero.<br><br> Provea al campo de un <b>Nombre</b>.  El nombre debe ser alfanumérico y no contener espacios. El carácter subrayado también es válido.<br><br> La <b>Etiqueta de Visualización</b> es la etiqueta que aparecerá para los campos en los diseños de módulos.  La <b>Etiqueta del Sistema</b> se utiliza para hacer referencia al campo en el código.<br><br> Según el tipo de datos seleccionado para el campo, algunas o todas las siguientes propiedades podrán ser establecidas en el mismo:<br><br> El <b>Texto de Ayuda</b> aparece temporalmente cuando el usuario mantiene el cursor sobre el campo y puede ser utilizado para indicar al usuario el tipo de entrada deseada.<br><br> El <b>Texto de Comentario</b> sólo se ve en el Estudio y/o Constructor de Módulos, y puede ser utilizado para describir el campo a los administradores.<br><br> El <b>Valor por Defecto</b> que aparecerá en el campo.  Los usuarios pueden introducir un nuevo valor en el campo o dejar el valor predeterminado.<br><br> Seleccione la opción de <b>Actualización Masiva</b> para poder utilizar la característica de Actualización Masiva en el campo.<br><br>El valor del <b>Tamaño Máximo</b> determina el máximo número de caracteres que pueden ser introducidos en el campo.<br><br> Seleccione la opción <b>Campo Requerido</b> para hacer el campo requerido. Debe de suministrarse un valor para este campo para poder guardar un registro que lo contenga.<br><br> Seleccione la opción <b>Informable</b> para permitir que el campo sea utilizado en filtros y para mostrar datos en Informes.<br><br> Seleccione la opción <b>Auditar</b> para poder realizar un seguimiento de los cambios el campo en el Registro de Cambios.<br><br>Seleccione una de las opciones en el campo <b>Importable</b> para permitir, prohibir o requerir que el campo sea importado mediante el Asistente de Importación.<br><br>Seleccione una opción en el campo <b>Combinar Duplicados</b> para habilitar o no las características de Combinar Duplicados y Búsqueda de Duplicados.<br><br>Para ciertos tipos de datos se podrán establecer propiedades adicionales.',
            'editField' => 'La <b>Etiqueta de Visualización</b> de un campo de SuiteCRM puede ser personalizada. El resto de propiedades del campo no pueden ser personalizadas.<br><br>Haga clic en <b>Clonar</b> para crear un nuevo campo con las mismas propiedades.',
            'mbeditField' => 'La <b>Etiqueta de Visualización</b> de un campo de SuiteCRM puede ser personalizada. El resto de propiedades del campo no pueden ser personalizadas.<br><br>Haga clic en <b>Clonar</b> para crear un nuevo campo con las mismas propiedades.<br><br>Para quitar un campo plantilla de modo que no aparezca en el módulo, quite el campo de los <b>Diseños</b> correspondientes.'

        ),
        'exportcustom' => array(
            'exportHelp' => 'Exporta les personalitzacions fetes en estudi per construir alguns paquets que es poden carregar en una altra instància de SuiteCRM mitjançant el <b>Module Loader</b>. <br><br>Primer, proporcionar un <b>Nom del paquet</b>.  Vostè pot proporcionar informació <b>autor</b> i <b>Descripció</b> de paquet, així. <br><br>Selecciona els mòduls que contenen les personalitzacions que voleu exportar.Només apareixeran per ser  seleccionats els mòduls  que contenen les personalitzacions . <br><br>Llavors fes clic <b>d’exportació</b> per crear un fitxer. zip paquet que contenen les personalitzacions.',
            'exportCustomBtn' => 'Haga clic en <b>Exportar</b> para crear un archivo .zip para el paquete que contenga las personalizaciones que desea exportar.',
            'name' => 'Aquest és el <b>Nom</b> del paquet. Aquest nom serà mostrat durant la instal·lació.',
            'author' => 'Aquest és <b>l’Autor</b> que és mostrat durant la instal·lació com el nom de la entitat que ha creat el paquet. L’autor pot ser una companyia o una persona individual.',
            'description' => 'Esta es la <b>Descripción</b> del paquete que se muestra durante la instalación.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Bienvenido al área de <b>Herramientas de Desarrollo</b>. <br/><br/>Use las herramientas de este área para crear y gestionar módulos y campos tanto estándar como personalizados.',
            'studioBtn' => 'Use el <b>Estudio</b> para personalizar los módulos desplegados.',
            'mbBtn' => 'Use el <b>Constructor de Módulos</b> para crear nuevos módulos.',
            'sugarPortalBtn' => 'Utilitzi <b>L’editor del portal SuiteCRM</b> per a gestionar i personalitzar el portal de SuiteCRM.',
            'dropDownEditorBtn' => 'Use el <b>Editor de Listas Desplegables</b> para agregar y editar listas desplegables globales para campos de lista desplegable.',
            'appBtn' => 'El modo de aplicación le permite personalizar varias propiedades del programa, como por ejemplo, cuántos informes se muestran en la página de inicio',
            'backBtn' => 'Volver al paso previo.',
            'studioHelp' => 'Utilice el <b>Estudio</b> para establecer qué información del módulo se muestra y cómo lo hace.',
            'moduleBtn' => 'Haga clic para editar este módulo.',
            'moduleHelp' => 'Los componentes del módulo que puede personalizar aparecen aquí.<br><br>Haga clic en un icono para seleccionar el componente a editar.',
            'fieldsBtn' => 'Crear y personalizar los <b>Campos</b> que almacenan la información en el módulo.',
            'labelsBtn' => 'Editar las <b>Etiquetas</b> mostradas para los campos y otros títulos del módulo.',
            'relationshipsBtn' => 'Agregar nuevas <b>Relaciones</b> del módulo o ver las existentes.',
            'layoutsBtn' => 'Personalizar los <b>Diseños</b> del módulo.  Los diseños son las diferentes vistas del módulo que contienen campos.<br><br>Puede establecer qué campos aparecen y cómo son organizados en cada diseño.',
            'subpanelBtn' => 'Determina qué campos aparecen en los <b>Subpaneles</b> del módulo.',
            'portalBtn' => 'Personalitzar el mòdul <b>Dissenys</b> que apareix al <b>Portal de SuiteCRM</b>.',
            'layoutsHelp' => 'Los <b>Diseños</b> de un módulo que pueden ser personalizados aparecen aquí.<br><br>Los diseños muestran los campos y sus datos.<br><br>Haga clic en un icono para seleccionar el diseño a editar.',
            'subpanelHelp' => 'Los <b>Subpaneles</b> de un módulo que pueden ser personalizados aparecen aquí.<br><br>Haga clic en un icono para seleccionar el módulo a editar.',
            'newPackage' => 'Haga clic en <b>Nuevo Paquete</b> para crear un nuevo paquete.',
            'exportBtn' => 'Haga clic en <b>Exportar Personalizaciones</b> para crear y descargar un paquete que contenga las personalizaciones que ha realizado en el Estudio a varios módulos específicos.',
            'mbHelp' => 'Use el <b>Constructor de Módulos</b> para crear paquetes que contengan módulos personalizados basados en objetos estándar o personalizados.',
            'viewBtnEditView' => 'Personalizar el diseño de <b>Vista de Edición</b> del módulo.<br><br>La Vista de Edición es el formulario que contiene los campos de entrada para capturar los datos introducidos por el usuario.',
            'viewBtnDetailView' => 'Personalizar el diseño <b>Vista de Detalle</b> del módulo.<br><br>La Vista de Detalle muestra datos de campos introducidos por el usuario.',
            'viewBtnDashlet' => 'Personalitzar <b>SuiteCRM Dashlet</b>, incloent-hi el SuiteCRM Dashlet ListView i cerca del mòdul. <br><br>El SuiteCRM Dashlet estarà disponible per afegir a les pàgines del mòdul de casa.',
            'viewBtnListView' => 'Personalizar el diseño <b>Vista de Lista</b> del módulo.<br><br>Los resultados de la Búsqueda aparecen en la Vista de Lista.',
            'searchBtn' => 'Personalizar los diseños de <b>Búsqueda</b> del módulo.<br><br>Determina qué campos pueden ser utilizados para filtrar los registros que aparecen en la Vista de Lista.',
            'viewBtnQuickCreate' => 'Personalitzar el disseny <b>Creació ràpida</b> de mòdul.<br><br>El formulari de creació ràpida apareix als subpanells i en el mòdul de correu electrònic.',
            'addLayoutHelp' => "Per crear un disseny personalitzat per a un grup de seguretat, seleccioneu el grup de seguretat adequat i el disseny del qual voleu partir.",
            'searchHelp' => 'Els formularis de <b>Filtre</b> que poden ser personalitzats apareixen aquí. <br><br> Els formularis de Filtres contenen camps per filtrar registres. <br><br> Fes clic en un icona per seleccionar el disseny de filtre a editar.',
            'dashletHelp' => 'Les disposicions <b>SuiteCRM Dashlet</b> que es poden personalitzar apareixen aquí. <br><br>El SuiteCRM Dashlet estarà disponible per afegir a les pàgines del mòdul de casa.',
            'DashletListViewBtn' => 'El <b>SuiteCRM Dashlet ListView</b> Mostra registres basats en els filtres de cerca de SuiteCRM Dashlet.',
            'DashletSearchViewBtn' => 'El <b>SuiteCRM Dashlet cerca</b> filtres registrats per la listview de SuiteCRM Dashlet.',
            'popupHelp' => 'Els dissenys de <b>Finestres emergents</ b> que es poden personalitzar apareixen aquí.<br>',
            'PopupListViewBtn' => 'El <b>Desplegable ListView</b> Mostra registres basats en les vistes de recerca emergent.',
            'PopupSearchViewBtn' => 'La <b>Cerca emergent</b> mostra la visualització de les llistes emergents.',
            'BasicSearchBtn' => 'Modifiqueu el formulari de <b>Filtre Ràpid</b> que apareix a la pestanya de Filtre Ràpid en l’àrea per al Filtrat al mòdul.',
            'AdvancedSearchBtn' => 'Modifiqueu el formulari de <b>Filtre avançat</b> que apareix a la pestanya de Filtre avançat en l’àrea per al Filtrat al mòdul.',
            'portalHelp' => 'Gestionar i personalitzar el <b>Portal de SuiteCRM</b>.',
            'SPUploadCSS' => 'Puja a <b> Full d’estil </b> per al Portal SuiteCRM.',
            'SPSync' => 'Personalitzacions de <b>sincronització</b> a la instància del SuiteCRM Portal.',
            'Layouts' => 'Personalitzeu els <b> Dissenys </b> dels mòduls del Portal de SuiteCRM.',
            'portalLayoutHelp' => 'Els mòduls dins del Portal SuiteCRM apareixen en aquesta àrea..<br><br> Seleccioneu un mòdul per editar els <b>Dissenys</ b>.',
            'relationshipsHelp' => 'Todas las <b>Relaciones</b> que existen entre el módulo y otros módulos desplegados aparecen aquí.<br><br>El <b>Nombre</b> de la relación es un nombre generado por el sistema para la relación.<br><br>El <b>Módulo Principal</b> es el módulo que posee las relaciones.  Por ejemplo, todas las propiedades de las relaciones para las que el módulo de Cuentas es el módulo principal se almacenan en las tablas de base de datos de Cuentas.<br><br>El <b>Tipo</b> es el tipo de relación existente entre el Módulo Principal y el <b>Módulo Relacionado</b>.<br><br>Haga clic en el título de una columna para ordenar por la columna.<br><br>Haga clic en una fila de la tabla de la relación para ver y editar las propiedades asociadas con la relación.<br><br>Haga clic en <b>Agregar Relación</b> para crear una nueva relación.<br><br>Se pueden crear relaciones entre dos módulos desplegados cualesquiera.',
            'relationshipHelp' => 'Las <b>Relaciones</b> pueden ser creadas entre el módulo y otro módulo personalizado o desplegado.<br><br> Las relaciones se expresan visualmente a través de subpaneles y relacionan campos de los registros del módulo.<br><br>Seleccione uno de los siguientes <b>Tipos</b> de relación para el módulo:<br><br> <b>Uno-a-Uno</b> - Los registros de ambos módulos contendrán campos relacionados.<br><br> <b>Uno-a-Muchos</b> - Los registros del Módulo Principal contendrán un subpanel, y los registros del Módulo Relacionado contendrán un campo relacionado.<br><br> <b>Muchos-a-Muchos</b> - Los registros de ambos módulos mostrarán subpaneles.<br><br> Seleccione el <b>Módulo Relacionado</b> para la relación. <br><br>Si el tipo de relación implica el uso de subpaneles, seleccione la vista de subpanel para los módulos correspondientes.<br><br> Haga clic en <b>Guardar</b> para crear la relación.',
            'convertLeadHelp' => 'Aquí podeu afegir mòduls per a la disposició de convertir la pantalla i modificar els dissenys existents. <br/> Pot reordenar els mòduls arrossegant les seves files a la taula. <br/><br/><b> Mòdul: </b> El nom del mòdul. <br/> <br/><b> Requerit: </b> Els mòduls requerits han de ser creats o seleccionats abans que el plom es pot convertir. <br/><br/> <b> Copiar dades: </b> Si està activat, els camps de la iniciativa es copiaran a camps amb el mateix nom en els registres acabats de crear. <br/><br/> <b> Permetre la selecció: </b> Els Mòduls amb un camp de relació en els contactes poden ser seleccionats en lloc de creats durant el procés de convertir plom. <br/> <br/> <b> Edició: </b> Modificar el disseny de convertir per a aquest mòdul. <br/> <br/> <b> Esborrar: </b> Eliminar aquest mòdul de la disposició de convertir. <br/> <br/>',


            'editDropDownBtn' => 'Editar una Lista Desplegable global',
            'addDropDownBtn' => 'Agregar una nueva Lista Desplegable global',
        ),
        'fieldsHelp' => array(
            'default' => 'Els <b> Camps </b> del mòdul apareixen aquí llistats per Nom de Camp.<br><br>La plantilla del mòdul inclou un conjunt predeterminat de camps. <br><br> Per crear un nou camp, feu clic a <b> Afegeix camp </b>.<br><br> Per editar un camp, feu clic al <b> Nom de camp </b>.<br/><br/> Després de la implantació del mòdul, els nous camps creats en el Constructor de mòduls, així com els camps de la plantilla, es tractaran com a camps estàndard en l’Estudi.',
        ),
        'relationshipsHelp' => array(
            'default' => 'Les <b> Relacions </b> que han estat creades entre el mòdul i altres mòduls apareixen aquí. <br><br>El <b> Nom </b> de la relació és un nom generat pel sistema per a la relació. <br><br> El <b> mòdul Principal</b> és el mòdul que posseeix les relacions. Les propietats de la relació són guardades en taules de la base de dades pertanyents al mòdul primari. <br><br>El <b> Tipus </b> és el tipus de relació existent entre el Mòdul Principal i el <b> Mòdul relacionat </b>. <br><br>Feu clic al títol d’una columna per ordenar per la columna. <br><br>Feu clic a una fila de la taula de la relació per veure i editar les propietats associades amb la relació. <br><br>Feu clic a <b> Afegir relació </b> per crear una nova relació.',
            'addrelbtn' => 'mogui el ratolí fora de l’ajuda per afegir relació...',
            'addRelationship' => 'Las <b>Relaciones</b> pueden ser creadas entre el módulo y otro módulo personalizado o desplegado.<br><br> Las relaciones se expresan visualmente a través de subpaneles y relacionan campos de los registros del módulo.<br><br>Seleccione uno de los siguientes <b>Tipos</b> de relación para el módulo:<br><br> <b>Uno-a-Uno</b> - Los registros de ambos módulos contendrán campos relacionados.<br><br> <b>Uno-a-Muchos</b> - Los registros del Módulo Principal contendrán un subpanel, y los registros del Módulo Relacionado contendrán un campo relacionado.<br><br> <b>Muchos-a-Muchos</b> - Los registros de ambos módulos mostrarán subpaneles.<br><br> Seleccione el <b>Módulo Relacionado</b> para la relación. <br><br>Si el tipo de relación implica el uso de subpaneles, seleccione la vista de subpanel para los módulos correspondientes.<br><br> Haga clic en <b>Guardar</b> para crear la relación.',
        ),
        'labelsHelp' => array(
            'default' => 'Les <b>Etiquetes</b> per tots els camps i altres títols en el mòdul es poden canviar. <br><br>Pot editar l’etiqueta fent clic en l’àmbit, introduint un nou segell i fent clic a <b>salvar</b>. <br> <br>A qualsevol paquet de llengua instal·lat en l’aplicació, podeu seleccionar l’ <b>idioma</b> a utilitzar per a les etiquetes.',
            'saveBtn' => 'Cliqui <b>Desar</b> per desar tots els canvis.',
            'publishBtn' => 'Feu clic a <b>Desa i Desplegar</b> per guardar tots els canvis i fer que s’activin.',
        ),
        'portalSync' => array(
            'default' => 'Introduïu l’ <b>URL de Portal SuiteCRM</b> de la instància del portal a actualitzar, i cliqueu a <b>anar</b>. <br><br>A continuació, introduïu un nom d’usuari SuiteCRM vàlid i contrasenya, i feu clic a <b>Començar sincronització</b>. <br> <br>Les personalitzacions fetes al SuiteCRM Portal <b>disposicions</b>, juntament amb el <b>Full d’estil</b> si un va ser pujat, es transferiran a especificar la instància del portal.',
        ),
        'portalStyle' => array(
            'default' => 'Vostè pot personalitzar l’aspecte del Portal SuiteCRM mitjançant l’ús d’un full d’estil. <br><br> Seleccioneu una <b> Full d’estil </b> per a carregar. <br> El full d’estil es durà a terme al Portal SuiteCRM la propera alhora una sincronització es porta a terme.',
        ),
    ),

    'assistantHelp' => array(
        'package' => array(
            //custom begin
            'nopackages' => 'Para empezar un proyecto, haga clic en <b>Nuevo Paquete</b> y creará un nuevo paquete en el que albergar sus módulos personalizados. <br/><br/>Cada paquete puede contener uno o más módulos.<br/><br/>Por ejemplo, puede querer crear un paquete que contenga un módulo personalizado relacionado con el módulo estándar de Cuentas. O puede querer crear un paquete que contenga varios módulos nuevos que trabajan de forma conjunta como un proyecto y que están relacionados entre si y con otros módulos ya existentes en la aplicación.',
            'somepackages' => 'Un <b>paquete</b> actúa como contenedor de módulos pesonalizados, todos los cuales son parte de un proyecto. El paquete puede contener uno o más <b>módulos</b> personalizados que pueden estar relacionados entre ellos o con otros módulos de la aplicación.<br/><br/>Tras la creación de un paquete para su proyecto, puede crear módulos para el paquete de forma inmediata, o volver al Constructor de Módulos más tarde para completar el proyecto.<br><br>Cuando el proyecto ha sido completado, puede <b>Desplegar</b> el paquete para instalar los módulos personalizados dentro de la aplicación.',
            'afterSave' => 'El seu nou paquet ha de contenir com a mínim un mòdul. Vostè pot crear un o més mòduls personalitzats per al paquet. <br/><br/> Feu clic a <b> Nou Mòdul </b> per crear un mòdul personalitzat per a aquest paquet. <br/><br/> Després de crear com a mínim un mòdul, pot publicar o desplegar en el paquet per fer-ho disponible a la seva instància i / o d’altres instàncies d’usuaris. <br/><br/> Per desplegar el paquet en un pas dins del seu instància de SuiteCRM, feu clic a <b> Desplegar </ b>. qual Feu clic a <b> Publica </b> per guardar el paquet com un arxiu .zip. Després l’arxiu .Zip es guarda en el sistema, utilitzeu el <b> Mòdul de Càrrega </b> per Puja i instal·lar el paquet en la instància de SuiteCRM. <br/><br/> Pot distribuir l’arxiu a altres usuaris per carregar i instal·lar dins de les seves pròpies instàncies de SuiteCRM.',
            'create' => 'Un <b>paquet </b> actua com un contenidor de mòduls personalitzats, que són part d’un projecte. El paquet pot contenir un o més <b> mòduls </b> personalitzats, que poden estar relacionats entre si o amb altres mòduls en l’aplicació. <br/><br/> Després de crear un paquet per al seu projecte, vostè pot crear Mòduls dels paquets immediatament, o pot tornar a la Constructor de mòduls en un altre moment per completar el projecte.',
        ),
        'main' => array(
            'welcome' => 'Use las <b>Herramientas de Desarrollo</b> para crear y administrar módulos y campos tanto estándar como personalizados. <br/><br/>Para administrar los módulos de la aplicación, haga clic en <b>Estudio</b>. <br/><br/>Para crear módulos personalizados, haga clic en <b>Constructor de Módulos</b>.',
            'studioWelcome' => 'Todos los módulos actualmente instalados, incluyendo los objetos estándares así como los cargados por un módulo, son personalizables dentro del Estudio.'
        ),
        'module' => array(
            'somemodules' => "Atès que l'actual paquet conté almenys un mòdul, pot <b>Desplegar</b> els mòduls en el paquet dins de la instància de SuiteCRM o<b>Publicar</b> el paquet que s'instal·larà a l'actual instància de SuiteCRM o una altra Instància utilitzant el <b>Mòdul de Càrrega</b>.<br/><br/>Per instal·lar el paquet directament dins del seu instància de SuiteCRM, feu clic a <b>Desplegar</b>.<br><br>
Per crear una arxiu. zip de el paquet que pot ser carregat i instal lat dins de la instància actual de SuiteCRM i altres casos utilitzant el <b>Mòdul de Càrrega</b>,feu clic a <b>Publicar</b>. <br/> <br/> 
Vostè pot construir els mòduls d'aquest paquet en etapes, i publicar o desplegar quan estigui a punt per fer-ho.<br/><br/>Després de la publicació o el desplegament d'un paquet, pot fer canvis en el conjunt de propietats i personalitzar els mòduls més. Després tornarà a re-publicar o re-desplegar el paquet per aplicar els canvis.",
            'editView' => 'Aquí puede editar los campos existentes. Puede quitar cualquiera de los campos existentes o agregar los campos disponibles en el panel situado a la izquierda.',
            'create' => 'Hora d’escollir el tipus de <b>tipus</b> de mòdul que voleu crear, tingueu en compte els tipus de camps que li agradaria tenir del mòdul. <br/> <br/> Cada mòdul plantilla conté un conjunt de camps a pertanyent al tipus de mòdul descrit pel títol. <br/> <br/> <b>Bàsic</b> - proporciona camps bàsics que apareixen en mòduls estàndards, com ara el nom, ASSIGN a, equip, data de creació i Descripció camps. <br/> <br/> <b>Empresa</b> - proporciona organització específica camps, com ara nom empresa, indústria i adreça de facturació. Utilitzeu aquesta plantilla per crear mòduls que són similars al mòdul estàndard comptes. <br/> <br/> <b>Persona</b> - proporciona camps individual específica, com la salutació, títol, nom, adreça i número de telèfon. Utilitzeu aquesta plantilla per crear mòduls que són similars als mòduls contactes i clients potencials estàndard. <br/> <br/> <b>Tema</b> - proporciona camps cas i error-específiques, com ara nombre, estatus, prioritat i descripció. Utilitzeu aquesta plantilla per crear mòduls que són similars als mòduls casos i errors estàndard. <br/> <br/> Nota: Després de crear el mòdul, vostè pot editar les etiquetes dels camps proporcionats per la plantilla, així com crear camps personalitzats per afegir a les disposicions de mòdul.',
            'afterSave' => 'Personalitzeu el mòdul segons les vostres necessitats editant i creant camps, establint relacions amb altres mòduls i organitzant els camps dels dissenys. <br/> <br/> Per veure els camps de la plantilla i gestionar els camps personalitzats dins del mòdul, feu clic a <b > Veure camps </ b>. <br/> <br/> Per crear i gestionar les relacions entre el mòdul i altres mòduls, ja siguin mòduls ja a l’aplicació o altres mòduls personalitzats del mateix paquet, feu clic a <b> Veure relacions < / b>. <br/> <br/> Per editar els dissenys del mòdul, feu clic a <b> Mostra dissenys </ b>. Podeu canviar la vista de detall, editar vista i visualitzar la llista de dissenys del mòdul tal com ho faria en els mòduls ja en l’aplicació de Studio. <br/> <br/> Per crear un mòdul amb les mateixes propietats que el mòdul actual, feu clic a <b> Duplicar </ b>. Podeu personalitzar encara més el nou mòdul.',
            'viewfields' => 'Los campos del módulo pueden ser personalizados para ajustarse a sus necesidades.<br/><br/>No puede eliminar campos estándar, pero puede quitarlos de los diseños correspondientes dentro de las páginas de Diseños. <br/><br/>Puede editar las etiquetas de los campos estándar. El resto de propiedades de los campos estándar no son editables. No obstante, puede crear fácilmente nuevos campos que tengan propiedades similares haciendo clic en el nombre de un campo y después en <b>Clonar</b> dentro del formulario de <b>Propiedades</b>.  Introduzca cualquier propiedad nueva, y haga clic en <b>Guardar</b>.<br/><br/>Si está personalizando un nuevo módulo, una vez éste haya sido instalado, no todas las propiedades de los campos podrán ser editadas.  Establezca todas las propiedades para los campos estándar y personalizados antes de que publique e instale el paquete que contiene el módulo personalizado.',
            'viewrelationships' => 'Puede crear relaciones muchos-a-muchos entre el módulo actual y cualquier otro módulo del paquete, y/o entre el módulo actual y otros módulos ya instalados en la aplicación.<br><br> Para crear relaciones uno-a-muchos y uno-a-uno, cree campos <b>Relativo a</b> y <b>Posiblemente Relativo a</b> para los módulos.',
            'viewlayouts' => 'Puede controlar qué módulos están disponibles para captura de datos desde la <b>Vista de Edición</b>.  También puede controlar qué datos son mostrados desde la <b>Vista de Detalle</b>.  Las vistas no han de ser iguales. <br/><br/>El formulario de Creación Rápida se muestra cuando hace clic en <b>Crear</b> dentro del subpanel de un módulo. Por defecto, el diseño del formulario de <b>Creación Rápida</b> es el mismo que el diseño por defecto de <b>Vista de Edición</b>. Puede personalizar el formulario de Creación Rápida de forma que contenga menos y/o diferentes campos que el diseño de Vista de Edición. <br><br>Puede establecer la seguridad del módulo utilizando la personalización del Diseño conjuntamente con la <b>Administración de Roles</b>.<br><br>',
            'existingModule' => 'Tras crear y personalizar este módulo, puede crear módulos adicionales o volver al paquete para <b>Publicar</b> o <b>Desplegar</b> el mismo.<br><br>Si desea crear módulos adicionales, haga clic en <b>Duplicar</b> para crear un módulo con las mismas propiedades que el módulo actual, o vuelva a navegar al paquete y haga clic en <b>Nuevo Módulo</b>.<br><br> Si ya está listo para <b>Publicar</b> o <b>Desplegar</b> el paquete que contiene este módulo, vuelva a navegar al paquete para realizar estas funciones. Puede publicar y desplegar paquetes que contengan al menos un módulo.',
            'labels' => 'Las etiquetas de los campos estándar así como las de los campos personalizados pueden ser cambiadas. Los cambios a las etiquetas de los campos no afecta a los datos almacenados en los mismos.',
        ),
        'listViewEditor' => array(
            'modify' => 'A continuació es mostren tres columnes. La columna "Per defecte" conté els camps que es mostren en una llista per defecte, la columna "Addicional" conté camps que un usuari pot elegir a l’hora de crear una vista personalitzada, i la columna "Disponible" mostra columnes disponibles per a vostè com a administrador per a, o bé afegir-les a les columnes per defecte, o a les addicionals perquè siguin usades per usuaris ja que actualment no estan sent utilitzades.',
            'savebtn' => 'Clicant <b>Desar</b> es desaran tots els canvis i es faran efectius.',
            'Hidden' => 'Camps ocults són camps que no estan disponibles actualment per als usuaris per al seu ús en les vistes de llista.',
            'Available' => 'Els camps disponibles són camps que no es mostren per defecte, però es poden activar pels usuaris.',
            'Default' => 'Camps per defecte apareixen als usuaris que no han creat configuració de la vista de llista personalitzat.'
        ),

        'searchViewEditor' => array(
            'modify' => 'Hi ha dues columnes que es mostren a l’esquerra. La columna d "Omissió" conté els camps que es mostraran a la visualització de cerca, i la columna "Oculta" conté camps disponibles per a vostè com un administrador per afegir a la vista.',
            'savebtn' => 'En fer clic a <b> Desa i Desplegar </b> guardar tots els canvis i fer que s’activa.',
            'Hidden' => 'Camps ocults són camps que no es mostren a la vista de cerca.',
            'Default' => 'Camps predeterminats es mostraran a la vista de cerca.'
        ),
        'layoutEditor' => array(
            'default' => 'Hi ha dues columnes que es mostren a l’esquerra. La columna de la dreta, anomenada Disseny actual o Vista preliminar, és on canvia el disseny del mòdul. La columna de l’esquerra, titulada Toolbox, conté elements i eines útils per a l’ús al editar el disseny. <br/> <br/> Si l’àrea de disseny es diu Presentació actual, esteu treballant en una còpia del disseny que utilitza actualment el mòdul per mostrar. <br/> <br/> Si es titula Vista prèvia de disseny, llavors estan treballant en una còpia creada anteriorment mitjançant un clic al botó Desa, que ja podria haver estat modificat a partir de la versió que veuen els usuaris d’aquest mòdul.',
            'saveBtn' => 'Si feu clic a aquest botó guarda la disposició de manera que pot conservar els canvis. Quan torneu a aquest mòdul es començarà des d’aquesta disposició canviada. El seu disseny, no pot ser vist pels usuaris del mòdul fins que faci clic a salvar i publicar botó.',
            'publishBtn' => 'Feu clic a aquest botó per desplegar la disposició. Això significa que aquesta disposició serà immediatament vista pels usuaris d’aquest mòdul.',
            'toolbox' => 'La caixa d’eines conté una varietat de característiques útils per als dissenys d’edició, incloent una àrea d’escombraries, un conjunt d’elements addicionals i un conjunt de camps disponibles. Qualsevol d’ells pot arrossegar i deixar anar en el disseny.',
            'panels' => 'Aquesta àrea mostra com es visualitzarà el vostre disseny als usuaris d’aquest mòdul quan no estigui desplegat. <br/> <br/> Podeu reposicionar elements com ara camps, files i panells arrossegant-los i deixant-los anar; elimineu elements arrossegant-los i deixant-los caure a l’àrea de la paperera a la caixa d’eines o afegiu-ne de nous arrossegant-los des de la caixa d’eines i deixant-los anar al disseny en la posició desitjada.'
        ),
        'dropdownEditor' => array(
            'default' => 'Hi ha dues columnes que es mostren a l’esquerra. La columna de la dreta, anomenada Disseny actual o Vista preliminar, és on canvia el disseny del mòdul. La columna de l’esquerra, titulada Toolbox, conté elements i eines útils per a l’ús al editar el disseny. <br/> <br/> Si l’àrea de disseny es diu Presentació actual, esteu treballant en una còpia del disseny que utilitza actualment el mòdul per mostrar. <br/> <br/> Si es titula Vista prèvia de disseny, llavors estan treballant en una còpia creada anteriorment mitjançant un clic al botó Desa, que ja podria haver estat modificat a partir de la versió que veuen els usuaris d’aquest mòdul.',
            'dropdownaddbtn' => 'Haciendo clic en este botón se añade un nuevo elemento a la lista desplegable.',

        ),
        'exportcustom' => array(
            'exportHelp' => 'Les personalitzacions fetes a l’estudi en aquest cas pot ser envasats i desplegat en un altre cas. <br><br>Proporcionar un <b>Nom del paquet</b>. Vostè pot proporcionar informació <b>d’autor</b> i <b>Descripció</b> per paquet. <br><br>Seleccioneu el module(s) que contenen les personalitzacions que voleu exportar. (Només mòduls que contenen les personalitzacions apareixerà per seleccionar). <br><br>Clic <b>exportar</b> per crear un fitxer. zip paquet que contenen les personalitzacions. El fitxer. zip es poden carregar en un altre cas mitjançant <b>Module Loader</b>.',
            'exportCustomBtn' => 'Haga clic en <b>Exportar</b> para crear un archivo .zip para el paquete que contenga las personalizaciones que desea exportar.',
            'name' => 'El <b> Nom </b> del paquet es mostrarà en el mòdul carregador després que el paquet es carrega per a la instal·lació en estudi.',
            'author' => 'El <b> Autor </b> és el nom de l’entitat que va crear el paquet. L’autor pot ser un individu o una empresa. <br> L’Autor es mostrarà en el mòdul carregador després que el paquet es carrega per a la instal·lació en estudi.',
            'description' => 'El <b> Descripció </b> del paquet es mostrarà en el mòdul carregador després que el paquet es carrega per a la instal·lació en estudi.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Benvingut a la <b> Eines de Desenvolupament </b> zona. <br/><br/> Utilitzeu les eines dins d’aquesta àrea per crear i administrar mòduls i camps estàndard i personalitzats.',
            'studioBtn' => 'Utilitzeu <b> Studio </b> per personalitzar mòduls instal·lats canviant la disposició de camp, la selecció del que es disposa dels camps i la creació de camps de dades personalitzades.',
            'mbBtn' => 'Use el <b>Constructor de Módulos</b> para crear nuevos módulos.',
            'appBtn' => 'Utilitzeu la manera d’aplicació per personalitzar les diferents propietats del programa, com quants es mostren els informes de TPS a la pàgina principal.',
            'backBtn' => 'Volver al paso previo.',
            'studioHelp' => 'Utilitzeu <b>Studio</b> per personalitzar els mòduls instal·lats.',
            'moduleBtn' => 'Haga clic para editar este módulo.',
            'moduleHelp' => 'Seleccioneu el component de mòdul que voleu editar',
            'fieldsBtn' => 'Edita la informació que s’emmagatzema en el mòdul mitjançant el control de la <b> Camps </b> en el mòdul. <br/> Vostè pot editar i crear camps personalitzats aquí.',
            'labelsBtn' => 'Feu clic a <b>Desa</b> per guardar les teves etiquetes personalitzades.',
            'layoutsBtn' => 'Personalitzeu els <b> Layouts </b> de l’Edició, Detall, de llista i buscar punts de vista.',
            'subpanelBtn' => 'Edita la informació que es mostra en els subpanells d’aquest mòdul.',
            'layoutsHelp' => 'Seleccioneu un <b> Disseny per editar </b>.<br/><br/> Per canviar el disseny que conté camps de dades per a la introducció de dades, feu clic a <b> Mostra l’</b>.<br/><br/> Per canviar la presentació que mostra les dades introduïdes en els camps de la vista d’edició, feu clic a <b> Detallat </b>.<br/><br/> Per canviar les columnes que apareixen a la llista predeterminada, feu clic a <b> Vista de llista </b>.<br/><br/> per canviar la recerca de dissenys Bàsic i Avançat, feu clic a <b> Cercar </b>.',
            'subpanelHelp' => 'Seleccioni un <b>Subpanell</b> a editar.',
            'searchHelp' => 'Seleccioneu un disseny de <b>Cerca</b> a editar.',
            'newPackage' => 'Haga clic en <b>Nuevo Paquete</b> para crear un nuevo paquete.',
            'mbHelp' => '<b> Benvinguts al Mòdul Constructor. </b> <br/> ús <b> Mòdul Constructor </b> per crear paquets que continguin mòduls personalitzats en base a objectes estàndard o personalitzats. <br/> Per començar, feu clic a <b> Nou paquet </b> per crear un nou paquet, o seleccionar un paquet per editar. <br/> A <b> Paquet </b > actua com un contenidor per mòduls personalitzats, tots els quals formen part d’un projecte. El paquet pot contenir un o més mòduls personalitzats que poden estar relacionats entre si o amb els mòduls de l’aplicació. <br/> Exemples: Vostè pot ser que desitgi per crear un paquet que conté un mòdul personalitzat que es relaciona amb el mòdul de comptes estàndard. O bé, és possible que vulgueu crear un paquet que conté diversos mòduls nous que funcionen junts com un projecte i que es relacionen entre si i amb els mòduls de l’aplicació.',
            'exportBtn' => 'Cliqui <b>Exportar personalitzacions</b> per a crear un paquet que contingui les personalitzacions realitzades a l’estudi per mòduls específics.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Editor de Llistes Desplegables',

//STUDIO2
    'LBL_MODULEBUILDER' => 'Constructor de Mòduls',
    'LBL_STUDIO' => 'Estudi',
    'LBL_DROPDOWNEDITOR' => 'Editor de Llistes Desplegables',
    'LBL_DEVELOPER_TOOLS' => 'Eines de Desenvolupament',
    'LBL_SUITEPORTAL' => 'Editor del Portal de SuiteCRM',
    'LBL_PACKAGE_LIST' => 'Llista de paquets',
    'LBL_HOME' => 'Inici',
    'LBL_NONE' => '-Cap-',
    'LBL_DEPLOYE_COMPLETE' => 'Desplegament completat',
    'LBL_DEPLOY_FAILED' => 'Hi ha hagut un error durant el desplegament del procés. Es possible que el seu paquet no s’hagi instal·lat correctament',
    'LBL_AVAILABLE_SUBPANELS' => 'Subpanells disponibles',
    'LBL_ADVANCED' => 'Avançat',
    'LBL_ADVANCED_SEARCH' => 'Filtre avançat',
    'LBL_BASIC' => 'Bàsic',
    'LBL_BASIC_SEARCH' => 'Filtre ràpid',
    'LBL_CURRENT_LAYOUT' => 'Disseny',
    'LBL_CURRENCY' => 'Moneda',
    'LBL_DASHLET' => 'Dashlet de SuiteCRM',
    'LBL_DASHLETLISTVIEW' => 'Veure llista de Dashlets de SuiteCRM',
    'LBL_POPUP' => 'Vista de finestra emergent',
    'LBL_POPUPLISTVIEW' => 'Llista de les vistes emergents',
    'LBL_POPUPSEARCH' => 'Cerca de finestra emergent',
    'LBL_DASHLETSEARCHVIEW' => 'Cercar Dashlet de SuiteCRM',
    'LBL_DETAILVIEW' => 'Vista detallada',
    'LBL_DROP_HERE' => '[Deixar Anar Aquí]',
    'LBL_EDIT' => 'Editar',
    'LBL_EDIT_LAYOUT' => 'Editar Diseny',
    'LBL_EDIT_FIELDS' => 'Editar camps',
    'LBL_EDITVIEW' => 'Vista d’Edició',
    'LBL_FILLER' => '(farcit)',
    'LBL_FIELDS' => 'Camps',
    'LBL_FAILED_TO_SAVE' => 'Error al desar',
    'LBL_FAILED_PUBLISHED' => 'Error al Publicar',
    'LBL_HOMEPAGE_PREFIX' => 'El meu',
    'LBL_LAYOUT_PREVIEW' => 'Vista preliminar del disseny',
    'LBL_LAYOUTS' => 'Dissenys',
    'LBL_LISTVIEW' => 'Vista de llista',
    'LBL_MODULES' => 'Mòdul',
    'LBL_MODULE_TITLE' => 'Estudi',
    'LBL_NEW_PACKAGE' => 'Nou paquet',
    'LBL_NEW_PANEL' => 'Nou panell',
    'LBL_NEW_ROW' => 'Nova fila',
    'LBL_PACKAGE_DELETED' => 'Paquet eliminat',
    'LBL_PUBLISHING' => 'Publicant ...',
    'LBL_PUBLISHED' => 'Publicat',
    'LBL_SELECT_FILE' => 'Seleccionar Arxiu',
    'LBL_SUBPANELS' => 'Subpanells',
    'LBL_SUBPANEL' => 'Subpanell',
    'LBL_SUBPANEL_TITLE' => 'Títol:',
    'LBL_SEARCH_FORMS' => 'Cercar',
    'LBL_SEARCH' => 'Cerca',
    'LBL_SEARCH_BUTTON' => 'Cerca',
    'LBL_FILTER' => 'Filtre',
    'LBL_TOOLBOX' => 'Caixa d’Eines',
    'LBL_QUICKCREATE' => 'Creació ràpida',
    'LBL_EDIT_DROPDOWNS' => 'Editar una llista desplegable global',
    'LBL_ADD_DROPDOWN' => 'afegir una nova llista desplegable global',
    'LBL_BLANK' => '-buit-',
    'LBL_TAB_ORDER' => 'ordre de tabulació',
    'LBL_TABDEF_TYPE' => 'Tipus de visualització',
    'LBL_TABDEF_TYPE_HELP' => 'Seleccioni la forma en que s’ha de mostrar aquesta secció. Aquesta opció només tindrà efecte si ha habilitat el mode pestanyes per aquesta vista.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Pestanya',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panell',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Seleccioneu Panell perquè el panell es mostri a la vista inicial o en la vista del panell anterior que s’hagi seleccionat com Pestaña. <br/> Seleccioneu Pestanya per mostrar el panell en una pestanya independent. Quan s’ha seleccionat un panell com Pestaña, els següents panells seleccionats com Panell es mostraran a la vista d’aquesta pestanya. <br/> Sempre que seleccioni un panell com Pestaña serà el primer panell a mostrar en aquesta Pestaña. <br/> Si es selecciona com Pestaña el segon panell o posteriors, el primer panell s’establirà automàticament com Pestanya si s’hagués seleccionat anteriorment com Panell.',
    'LBL_TABDEF_COLLAPSE' => 'Reduir ',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Seleccionar per fer que l’estat per defecte d’aquest panell sigui plegat.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Nom',
    'LBL_DROPDOWN_LANGUAGE' => 'Llenguatge per Defecte',
    'LBL_DROPDOWN_ITEMS' => 'Llista d’elements',
    'LBL_DROPDOWN_ITEM_NAME' => 'Nom de l’element',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Mostrar etiqueta',
    'LBL_SYNC_TO_DETAILVIEW' => 'Sincronitza amb la vista detallada',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Seleccioneu aquesta opció per sincronitzar el disseny de la vista d’Edició amb el corresponent disseny de la vista de Detall. Els camps i la seva col·locació a la vista de Detall seran sincronitzats i guardats automàticament a la vista de Detall en prémer a Desa or Guardar i Desplegar a la vista de Edició. No es podran realitzar canvis en el disseny de la vista de Detall.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Aquest Vista detallada és sincronització amb la Edita la vista corresponent. <br>Camps i col·locació de camp en aquest Vista detallada que reflecteixen els camps i col. locació de camp en la Edita la vista. <br>Els canvis a la Vista detallada no pot ser salvat o desplegat en aquesta pàgina. Feu canvis o no sincronitzeu els dissenys en Edita la vista.',
    'LBL_COPY_FROM_EDITVIEW' => 'Copiar de la vista d’edició',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Els valors són necessaris tant per el nom de l’element com per la etiqueta de visualització. Per afegir un element en blanc, faci clic a Agregar, sense entrar cap valor pel nom de l’element ni per l’etiqueta de visualització.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'La clau ja existeix a la llista',
    'LBL_NO_SAVE_ACTION' => 'No s’ha pogut trobar la opció desar per aquesta vista.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: document mal format.',


//RELATIONSHIPS
    'LBL_MODULE' => 'Mòdul',
    'LBL_LHS_MODULE' => 'Mòdul principal',
    'LBL_CUSTOM_RELATIONSHIPS' => '* relació creada a l’estudi',
    'LBL_RELATIONSHIPS' => 'Relacions',
    'LBL_RELATIONSHIP_EDIT' => 'Editar relació',
    'LBL_REL_NAME' => 'Nom',
    'LBL_REL_LABEL' => 'Etiqueta',
    'LBL_REL_TYPE' => 'Tipus',
    'LBL_RHS_MODULE' => 'Mòdul relacionat',
    'LBL_NO_RELS' => 'Sense relacions',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Condició opcional',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Columna',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Valor',
    'LBL_SUBPANEL_FROM' => 'Subpanell de',
    'LBL_RELATIONSHIP_ONLY' => 'No es crearà cap element visible per aquesta relació, ja que existia anteriorment una relació visible entre aquests dos mòduls.',
    'LBL_ONETOONE' => 'Un a un',
    'LBL_ONETOMANY' => 'Un a molts',
    'LBL_MANYTOONE' => 'Molts a un',
    'LBL_MANYTOMANY' => 'Molts a molts',


//STUDIO QUESTIONS
    'LBL_QUESTION_EDIT' => 'Seleccioni un mòdul a editar.',
    'LBL_QUESTION_LAYOUT' => 'Seleccioni un disseny a editar.',
    'LBL_QUESTION_SUBPANEL' => 'Seleccioni un subpanell a editar.',
    'LBL_QUESTION_SEARCH' => 'Seleccioni un disseny de cerca a editar.',
    'LBL_QUESTION_MODULE' => 'Seleccioni un component de mòdul a editar.',
    'LBL_QUESTION_PACKAGE' => 'Seleccioni un paquet a editar, o creï un nou paquet.',
    'LBL_QUESTION_EDITOR' => 'Seleccioni una eina.',
    'LBL_QUESTION_DASHLET' => 'Seleccioni un disseny de Dashlet a editar.',
    'LBL_QUESTION_POPUP' => 'Seleccioni un disseny de finestra emergent a editar.',
//CUSTOM FIELDS
    'LBL_NAME' => 'Nom',
    'LBL_LABELS' => 'Etiquetes',
    'LBL_MASS_UPDATE' => 'Actualització Massiva',
    'LBL_DEFAULT_VALUE' => 'Valor per Defecte',
    'LBL_REQUIRED' => 'Requerit',
    'LBL_DATA_TYPE' => 'Tipus',
    'LBL_HCUSTOM' => 'PERSONALITZAT',
    'LBL_HDEFAULT' => 'PER DEFECTE',
    'LBL_LANGUAGE' => 'Llenguatge:',
    'LBL_CUSTOM_FIELDS' => '* camp creat a l’estudi',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Editar Etiquetes',
    'LBL_SECTION_PACKAGES' => 'Paquets',
    'LBL_SECTION_PACKAGE' => 'Paquet',
    'LBL_SECTION_MODULES' => 'Mòdul',
    'LBL_SECTION_DROPDOWNS' => 'Menús desplegables',
    'LBL_SECTION_PROPERTIES' => 'Propietats',
    'LBL_SECTION_DROPDOWNED' => 'Editar la llista desplegable',
    'LBL_SECTION_HELP' => 'Ajuda',
    'LBL_SECTION_MAIN' => 'Principal',
    'LBL_SECTION_FIELDEDITOR' => 'Editar camp',
    'LBL_SECTION_DEPLOY' => 'Desplegar',
    'LBL_SECTION_MODULE' => 'Mòdul',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'Per defecte',
    'LBL_HIDDEN' => 'Ocult',
    'LBL_AVAILABLE' => 'Disponible',
    'LBL_LISTVIEW_DESCRIPTION' => 'Hi ha tres columnes que es mostren a continuació. El <b> per defecte </b> la columna conté els camps que es mostren en una vista de llista per defecte. El <b> addicional </b> columna conté els camps que l’usuari pot triar per crear una vista personalitzada. El <b> disponible </b> columna mostra els camps disponibles per a vostè com un administrador per afegir a l’omissió o columnes addicionals per al seu ús pels usuaris.',
    'LBL_LISTVIEW_EDIT' => 'Editor de Llistes',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Vista Preliminar',
    'LBL_MB_RESTORE' => 'Restaurar',
    'LBL_MB_DELETE' => 'Eliminar',
    'LBL_MB_DEFAULT_LAYOUT' => 'Disseny per defecte',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Afegir',
    'LBL_BTN_SAVE' => 'Desar',
    'LBL_BTN_SAVE_CHANGES' => 'Desar els canvis',
    'LBL_BTN_DONT_SAVE' => 'Descartar els canvis',
    'LBL_BTN_CANCEL' => 'Cancel·lar',
    'LBL_BTN_CLOSE' => 'Tancar',
    'LBL_BTN_SAVEPUBLISH' => 'Desar i Publicar',
    'LBL_BTN_CLONE' => 'Clonar',
    'LBL_BTN_ADDROWS' => 'Agregar Files',
    'LBL_BTN_ADDFIELD' => 'Afegir Camp',
    'LBL_BTN_ADDDROPDOWN' => 'Afegir menú desplegable',
    'LBL_BTN_SORT_ASCENDING' => 'Ordenar ascendentment',
    'LBL_BTN_SORT_DESCENDING' => 'Ordenar descendentment',
    'LBL_BTN_EDLABELS' => 'Editar Etiquetes',
    'LBL_BTN_UNDO' => 'Desfer',
    'LBL_BTN_REDO' => 'Repetir',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Agregar Camp Personalitzat',
    'LBL_BTN_EXPORT' => 'Exportar personalitzacions',
    'LBL_BTN_DUPLICATE' => 'Duplicar',
    'LBL_BTN_PUBLISH' => 'Publicar',
    'LBL_BTN_DEPLOY' => 'Desplegar',
    'LBL_BTN_EXP' => 'Exportar',
    'LBL_BTN_DELETE' => 'Eliminar',
    'LBL_BTN_VIEW_LAYOUTS' => 'Veure dissenys',
    'LBL_BTN_VIEW_FIELDS' => 'Veure camps',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'Vure Relacions',
    'LBL_BTN_ADD_RELATIONSHIP' => 'Afegir relació',
    'LBL_BTN_RENAME_MODULE' => 'Canviar el nom del mòdul',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Error: Camp Existent',
    'ERROR_INVALID_KEY_VALUE' => "Error: Valor de Clau No vàlid: [&#39;]",
    'ERROR_NO_HISTORY' => 'No s’han trobat arxius de la historial',
    'ERROR_MINIMUM_FIELDS' => 'El disseny ha de contenir almenys un camp',
    'ERROR_GENERIC_TITLE' => 'Ha ocorregut un error',
    'ERROR_REQUIRED_FIELDS' => 'Està segur que vol continuar? Els següents camps requerits no es troben al disseny:',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Nom del paquet:',
    'LBL_MODULE_NAME' => 'Nom del mòdul:',
    'LBL_AUTHOR' => 'Autor:',
    'LBL_DESCRIPTION' => 'Descripció:',
    'LBL_KEY' => 'Clau:',
    'LBL_ADD_README' => 'Llegiu-me',
    'LBL_LAST_MODIFIED' => 'Última modificació:',
    'LBL_NEW_MODULE' => 'Nou mòdul',
    'LBL_LABEL' => 'Etiqueta:',
    'LBL_LABEL_TITLE' => 'Etiqueta',
    'LBL_WIDTH' => 'Amplada',
    'LBL_PACKAGE' => 'Paquet:',
    'LBL_TYPE' => 'Tipus:',
    'LBL_NAV_TAB' => 'Pestanya de navegació',
    'LBL_CREATE' => 'Crear',
    'LBL_LIST' => 'Llista',
    'LBL_VIEW' => 'Veure',
    'LBL_HISTORY' => 'Veure Històrial',
    'LBL_RESTORE_DEFAULT' => 'Restaurar predeterminat',
    'LBL_ACTIVITIES' => 'Activitats',
    'LBL_NEW' => 'Nou',
    'LBL_TYPE_BASIC' => 'bàsica',
    'LBL_TYPE_COMPANY' => 'Empresa',
    'LBL_TYPE_PERSON' => 'persona',
    'LBL_TYPE_ISSUE' => 'assumpte',
    'LBL_TYPE_SALE' => 'venda',
    'LBL_TYPE_FILE' => 'fitxer',
    'LBL_RSUB' => 'Aquest és el subpanell que es mostrarà al seu mòdul',
    'LBL_MSUB' => 'Aquest en un subpanel que el teu módul proporciona per a que sigui mostrat pel módul relacionat',
    'LBL_MB_IMPORTABLE' => 'Important',

// VISIBILITY EDITOR
    'LBL_PACKAGE_WAS_DELETED' => '[[package]] ha estat eliminat',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Exportar personalitzacions',
    'LBL_EC_NAME' => 'Nom del paquet:',
    'LBL_EC_AUTHOR' => 'Autor:',
    'LBL_EC_DESCRIPTION' => 'Descripció:',
    'LBL_EC_CHECKERROR' => 'Si us plau, seleccioni un mòdul',
    'LBL_EC_CUSTOMFIELD' => 'camp(s) personalitzats',
    'LBL_EC_CUSTOMLAYOUT' => 'disseny(s) personalitzats',
    'LBL_EC_NOCUSTOM' => 'No s’ha personalitzat cap mòdul.',
    'LBL_EC_EMPTYCUSTOM' => 'té personalitzacions buides.',
    'LBL_EC_EXPORTBTN' => 'Exportar',
    'LBL_MODULE_DEPLOYED' => 'El módul s’ha desplegat.',
    'LBL_UNDEFINED' => 'no definit',
    'LBL_EC_VIEWS' => 'vistes personalitzada(s)',
    'LBL_EC_SUITEFEEDS' => 'feeds personalitzat(s)',
    'LBL_EC_DASHLETS' => 'dashlets personalitzat(s)',
    'LBL_EC_CSS' => 'css personalitzat(s)',
    'LBL_EC_TPLS' => 'tpls personalitzat(s)',
    'LBL_EC_IMAGES' => 'imatges personalitzat(s)',
    'LBL_EC_JS' => 'js personalitzat(s)',
    'LBL_EC_QTIP' => 'qtip personalitzat(s)',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'Error al recuperar les dades',
    'LBL_AJAX_LOADING' => 'Carregant...',
    'LBL_AJAX_DELETING' => 'Eliminant...',
    'LBL_AJAX_BUILDPROGRESS' => 'Construcció en progrés...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Desplegament en progres...',

    'LBL_AJAX_RESPONSE_TITLE' => 'Resultat',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'Aquesta operació s’ha realitzat correctament',
    'LBL_AJAX_LOADING_TITLE' => 'En curs...',
    'LBL_AJAX_LOADING_MESSAGE' => 'Si us plau, esperi, carregant...',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'Està segur que vol eliminar aquest paquet? Això eliminarà permanentment tots els fitxers associats a aquest paquet.',
    'LBL_JS_REMOVE_MODULE' => 'Està segur que vol eliminar aquest mòdul? Això eliminarà permanentment tots els fitxers associats amb aquest mòdul.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Qualsevol personalització que vostè va fer en l’estudi es sobreescriuran quan es torna a desplegar aquest mòdul. Esteu segur que voleu continuar?',

    'LBL_DEPLOY_IN_PROGRESS' => 'Desplegant el paquet',
    'LBL_JS_VALIDATE_NAME' => 'Nom - Ha de ser alfanumèric, començar amb una lletra i no contenir espais.',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'El nom del paquet ja existeix',
    'LBL_JS_VALIDATE_KEY' => 'Clau - Ha de ser alfanumèrica, començar amb una lletra i no contenir espais.',
    'LBL_JS_VALIDATE_LABEL' => 'Si us plau, introdueixi l’etiqueta que s’utilitzarà com a nom visible d’aquest mòdul',
    'LBL_JS_VALIDATE_TYPE' => 'Si us plau, seleccioni el tipus de mòdul que vol construir a partir de la llista anterior',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Etiqueta - si us plau, agregui la etiqueta que serà mostrada sobre el subpanell',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'La supressió d’aquest camp personalitzat eliminarà tant el camp personalitzat i totes les dades relacionades amb el camp personalitzat a la base de dades. El camp serà ja no apareixerà a les distribucions de mòduls. \n\n Voleu continuar?',

    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'Està segur que desitja eliminar aquesta relació?',
    'LBL_CONFIRM_DONT_SAVE' => 'Hi ha canvis pendents de ser desats, desitja desar-los ara?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Desar canvis?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'Les dades poden ser truncades i això no es podrà desfer, està segur que desitja continuar?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Seleccioni el tipus de dades apropiat segons el tipus de dades que seran introduides al camp.',

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

    'fieldTypes' => array(
        'varchar' => 'Campo de Texto',
        'int' => 'Entero',
        'float' => 'Decimal',
        'bool' => 'Casilla de Verificación',
        'enum' => 'Desplegable',
        'dynamicenum' => 'Llista desplegable dinàmica',
        'multienum' => 'Selección Múltiple',
        'date' => 'Fecha',
        'phone' => 'Teléfono',
        'currency' => 'Moneda',
        'html' => 'HTML',
        'radioenum' => 'Opción',
        'relate' => 'Relacionado',
        'address' => 'Dirección',
        'text' => 'Área de Texto',
        'url' => 'Enlace',
        'iframe' => 'IFrame',
        'datetimecombo' => 'Data i Hora',
        'decimal' => 'Decimal',
        'image' => 'Imatge',
        'wysiwyg' => 'WYSIWYG',
    ),
    'labelTypes' => array(
        "frequently_used" => "Etiquetes d'ús freqüent",
        "all" => "Totes les etiquetes",
    ),

    'parent' => 'Possiblement relacionat amb ',

    'LBL_CONFIRM_SAVE_DROPDOWN' => "Està seleccionant aquest element per a la seva eliminació de la llista desplegable. Qualsevol camp desplegable que usi aquesta llista amb aquest element com a valor ja no mostrarà aquest valor, i el valor ja no podrà ser seleccionat en els camps desplegables. Esteu segur que voleu continuar?",

    'LBL_ALL_MODULES' => 'Tots els mòduls',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (relacionat {1} ID)',
);
