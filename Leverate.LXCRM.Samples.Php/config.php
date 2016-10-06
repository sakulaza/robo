<?php
$config = array(
    'wsdl' => 'http://dev.crmdev.local:8810/mex',
    'apiLocation' => 'https://dev.crmdev.local:8811/CrmServiceBasic',
    'organization' => 'org',
    'businessUnitName' => 'Primary',
    'ownerUserId' => '01C19FDD-6DD1-E411-80D7-00505698302C',
    'username' => 'org',
    'password' => '123456',
    'tradingPlatforms' => array(
        'DEMO' => array(
            'name' => 'org Primary Sirix Demo',
            'id' => 'ACDB0CE4-6DD1-E411-80D7-00505698302C'),
        'REAL' => array(
            'name' => 'org Primary Sirix Real',
            'id' =>  'ADDB0CE4-6DD1-E411-80D7-00505698302C',
        ),
    ),
    'wsdlCache' => WSDL_CACHE_MEMORY
);