<?PHP
/******************************************
 * SuiteCRM Translation.
 * @URL: https://www.transifex.com/projects/p/suitecrm/
 * @author SuiteCRM Community via Transifex
 ******************************************/
$manifest = array( 
	'name' => 'Catalan (Spain)',
	'description' => 'Created by http://www.transifex.com/projects/p/suitecrm',
	'type' => 'langpack',
	'is_uninstallable' => 'Yes',
	'acceptable_sugar_versions' =>
		  array (),
	'acceptable_sugar_flavors' =>
		  array('CE'),
	'author' => 'Transifex',
	'version' => '7.3.0.1',
	'published_date' => '14/08/2015',
      );
$installdefs = array(
	'id'=> 'ca_ES',
	'image_dir'=>'<basepath>/images',
	'copy' => array(
	array('from'=> '<basepath>/include','to'=>'include'),
	array('from'=> '<basepath>/modules','to'=>'modules'),
	array('from'=> '<basepath>/install','to'=>'install'),
	array('from'=> '<basepath>/custom','to'=>'custom')

                        )
 );
?>