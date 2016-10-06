<div>
    <p>
        Configure Leverate LXCRM Services client.<br />
        <small>Please read <a href="Configuration.php">Initial configuration</a> section for details.</small>
        <br /><br />

        <h4>Required parameters:</h4>
        <ul>
            <li><code>AccountId</code> - target account id. Type: <code>Guid</code></li>
        </ul>
        <br />

        Please refer to API documentation (on <code>UpdateAccountDetailsRequest</code>) to find more information about parameters that are available for update.
        <br/><br/>

        Make a call on Leverate LXCRM Services client (<small>See <a href="Configuration.php">Initial configuration</a> for details):</small>
        <br />
    </p>

    <pre><code class="cs">$request = new UpdateAccountDetailsRequest();
$request->AccountId = $accountId;
$request->MobileNumber = $mobileNumber;

$dynamicAttributeString1 = new DynamicAttributeInfo();
$dynamicAttributeString1->Name = 'new_testdynamicfield';		
$dynamicAttributeString1->DynamicAttributeType = 'String';				
$dynamicAttributeString1->Value = new SoapVar("Sample Value 1", XSD_STRING, "string", "http://www.w3.org/2001/XMLSchema");	

$dynamicAttributeString2 = new DynamicAttributeInfo();
$dynamicAttributeString2->Name = 'new_testdynamicfield2';		
$dynamicAttributeString2->DynamicAttributeType = 'String';				
$dynamicAttributeString2->Value = new SoapVar("Other sample value", XSD_STRING, "string", "http://www.w3.org/2001/XMLSchema");	

$request->AdditionalAttributes = array($dynamicAttributeString1, $dynamicAttributeString2);
$details = new UpdateAccountDetails();

$details->ownerUserId = $ownerUserId;
$details->organizationName = $organization;
$details->businessUnitName = $businessUnitName;
$details->tradingPlatformAccountName = $tradingPlatformAccountName;
$details->updateAccountDetailsRequest = $request;

$response = $leverateCrm->UpdateAccountDetails($details);
$result = $response->UpdateAccountDetailsResult;

if ($result->Result->Code != 'Success') {
    return false;
}
return $result->AccountInfo; </code></pre><br />

    <h4>Try it yourself:</h4>
    <?php if (!$isServicesConfigured): ?>
        <p class="alert alert-danger"><strong>Samples application should be configured properly.</strong><br />Please read <a href="SamplesConfiguration.php">Samples application configuration</a> for details.</p>
    <?php endif ?>
    <?php if ($result != null && $isResultSuccess): ?>
        <p class="alert alert-success"><strong>Success!</strong><br />Transaction id: <?php echo $result; ?><br/>Message: <?php echo $errorMessage; ?><br/><pre><?php print_r($accountInfo) ?></pre></p>
    <?php elseif (!$isResultSuccess): ?>
        <p class="alert alert-danger"><strong>Failed!</strong><br />Error: <?php echo $errorMessage; ?></p>
    <?php endif ?>

    <div class="panel panel-default">
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" name="sampleForm" id="sampleForm" autocomplete="off">
                <div class="form-group">
                    <label for="accountId" class="col-sm-3 control-label">accountId</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputTradingPlatformAccountId" name="accountId" placeholder="accountId" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
	
</div>
