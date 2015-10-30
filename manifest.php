<?PHP
/*******************************************************************
 * SuiteCRM Translation by bTactic and SuiteCRM Community
 * @URL: https://github.com/btactic/suitecrm-catala
 * @author bTactic
 * SuiteCRM Community: https://www.transifex.com/projects/p/suitecrm
 *******************************************************************/

$manifest = array(
	'name' => 'Català',
	'description' => 'Traducció al Català de SuiteCRM',
	'type' => 'langpack',
	'is_uninstallable' => 'Yes',
	'acceptable_sugar_versions' =>
		  array (),
	'acceptable_sugar_flavors' =>
		  array('CE', 'PRO', 'CORP', 'ENT', 'ULT'),
	'author' => 'bTactic and Transifex',
	'version' => '7.3.2',
	'published_date' => '30/10/2015',
);

$installdefs = array(
	'id'=> 'ca',
	'image_dir'=>'<basepath>/images',
	'copy' => array(
	array('from'=> '<basepath>/include','to'=>'include'),
	array('from'=> '<basepath>/modules','to'=>'modules'),
	array('from'=> '<basepath>/install','to'=>'install'),
	array('from'=> '<basepath>/custom','to'=>'custom'))
);

?>
