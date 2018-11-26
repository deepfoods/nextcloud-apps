<?php
/*
\OC::$server->getNavigationManager()->add(array(
	'id'    => 'twainwebscan',
	'order' => 75,
	'href' => \OCP\Util::linkToRoute('twainwebscan_index'),
	'icon'  => \OCP\Util::imagePath('twainwebscan', 'scan.svg'),
	'name' => \OC::$server->getL10N('twainwebscan')->t('Scan and Upload')
));
*/

\OC::$server->getNavigationManager()->add(array(
	'id'    => 'twainwebscan',
	'order' => 6,
	'icon'  => \OCP\Util::imagePath('twainwebscan', 'scan.svg'),
	'name'  => \OC::$server->getL10N('twainwebscan')->t('Scan and Upload')
));

//====
//\OCP\Util::addScript('twainwebscan', 'scanner');
//\OCP\Util::addStyle('twainwebscan', 'scanner');


\OCP\Util::addStyle('twainwebscan', 'tws_style');
\OCP\Util::addScript('twainwebscan', 'tws_script');