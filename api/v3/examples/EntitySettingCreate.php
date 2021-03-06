<?php
/**
 * Test Generated example of using entity_setting create API
 * *
 */
function entity_setting_create_example(){
$params = [
  'entity_id' => 1,
  'entity_type' => 'Relationship',
  'key' => 'test_key',
  'settings' => [
      'test_setting' => [
          '0' => 1,
          '1' => 2,
          '2' => 3,
          '3' => 4,
      ],
      'another_setting' => 'Monster',
  ],
];

try{
  $result = civicrm_api3('entity_setting', 'create', $params);
}
catch (CiviCRM_API3_Exception $e) {
  // handle error here
  $errorMessage = $e->getMessage();
  $errorCode = $e->getErrorCode();
  $errorData = $e->getExtraParams();
  return ['error' => $errorMessage, 'error_code' => $errorCode, 'error_data' => $errorData];
}

return $result;
}

/**
 * Function returns array of result expected from previous function
 */
function entity_setting_create_expectedresult(){

  $expectedResult = [
  'is_error' => 0,
  'version' => 3,
  'count' => 1,
  'id' => 1,
  'values' => [
      '1' => [
          'id' => '1',
          'entity_id' => '1',
          'entity_type' => 'Relationship',
          'setting_data' => '{\"test_key\":{\"test_setting\":[\"1\",\"2\",\"3\",\"4\"],\"another_setting\":\"Monster\"}}',
      ],
  ],
  ];

  return $expectedResult;
}


/*
* This example has been generated from the API test suite. The test that created it is called
*
* testCreate and can be found in
* http://svn.civicrm.org/civicrm/trunk/tests/phpunit/CiviTest/api/v3/EntitySettingTest.php
*
* You can see the outcome of the API tests at
* http://tests.dev.civicrm.org/trunk/results-api_v3
*
* To Learn about the API read
* http://book.civicrm.org/developer/current/techniques/api/
*
* and review the wiki at
* http://wiki.civicrm.org/confluence/display/CRMDOC/CiviCRM+Public+APIs
*
* Read more about testing here
* http://wiki.civicrm.org/confluence/display/CRM/Testing
*
* API Standards documentation:
* http://wiki.civicrm.org/confluence/display/CRM/API+Architecture+Standards
*/
