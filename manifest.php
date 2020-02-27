<?PHP
/******************************************
 * SuiteCRM Translations
 * @URL: https://crowdin.com/project/suitecrmtrans
 * @author SuiteCRM Community via Crowdin
 ******************************************/
$manifest = array( 
	'name' => 'Catalan (Spain)',
	'description' => 'Traducció: www.crowdin.com/project/suitecrmtranslations',
	'type' => 'langpack',
	'is_uninstallable' => 'Yes',
	'acceptable_sugar_versions' =>
		  array (),
	'acceptable_sugar_flavors' =>
		  array('CE'),
	'author' => 'Comunitat SuiteCRM',
	'version' => '7.11.8.06',
	'published_date' => '2019-10-17',
      );
$installdefs = array(
	'id'=> 'ca_ES',
	'image_dir'=>'<basepath>/images',
	'copy' => array(
	array('from'=> '<basepath>/include','to'=>'include'),
	array('from'=> '<basepath>/modules','to'=>'modules'),
	array('from'=> '<basepath>/install','to'=>'install'),
   )
 );
?>
