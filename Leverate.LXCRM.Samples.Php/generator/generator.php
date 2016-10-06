<?php 
include(dirname(__FILE__) . '/../config.php');

require(dirname(__FILE__) . '/SoapProxy.php');
require(dirname(__FILE__) . '/SoapProxyGenerator.php');

$proxyGenerator = new SoapProxyGenerator($config['wsdl'], array('trace' => true));
$proxyGenerator->serviceAlias = 'LeverateCrm';
$proxyGenerator->outputFile = dirname(__FILE__) . '/../LeverateCrm.php';

$proxyGenerator->generateCode();
