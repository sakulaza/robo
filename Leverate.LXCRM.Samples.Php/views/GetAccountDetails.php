<div>
    <p>
        Configure Leverate LXCRM Services client.<br />
        <small>Please read <a href="Configuration.php">Initial configuration</a> section for details.</small>
        <br /><br />

        <h4>Required parameters:</h4>
        <ul>
            <li><code>FilterType</code> - enum value which is indicating what field to use. Type: <code>AccountDetailsRequestFilterType</code></li>
            <li><code>FilterValue</code> - value to find. Type: <code>String</code></li>
        </ul>
        <br />

        Make a call on Leverate LXCRM Services client (<small>See <a href="Configuration.php">Initial configuration</a> for details):</small>
        <br />
    </p>

    <pre><code class="cs">$request = new AccountDetailsRequest();
$request->FilterType = 'Email';
$request->FilterValue = $email;

$request->AdditionalAttributesNames = array('new_testdynamicfield', 'new_testdynamicfield2');

$getAccountDetails = new GetAccountDetails();
$getAccountDetails->ownerUserId = $ownerUserId;
$getAccountDetails->organizationName = $organization;
$getAccountDetails->businessUnitName = $businessUnitName;
$getAccountDetails->accountDetailsRequest = $request;

$result = $leverateCrm->GetAccountDetails($getAccountDetails);
if ($result->Result->Code != 'Success') {
    return false;
}
return $result->GetAccountDetailsResult->AccountsInfo; </code></pre><br />

    <h4>Try it yourself:</h4>
    <?php if (!$isServicesConfigured): ?>
        <p class="alert alert-danger"><strong>Samples application should be configured properly.</strong><br />Please read <a href="SamplesConfiguration.php">Samples application configuration</a> for details.</p>
    <?php endif ?>
    <?php if ($result != null && $isResultSuccess): ?>
        <div class="alert alert-success">
            <strong>Success!</strong><br /><br/>

            <strong>Results:</strong>
            <ul>
                <?php foreach($result as $row): ?>
                <li><?php echo $row->LastName . ' ' . $row->FirstName . ' (' . $row->Email . ') AdditionalAttributes={{' . $row->AdditionalAttributes->DynamicAttributeInfo[0]->Name . ': ' . $row->AdditionalAttributes->DynamicAttributeInfo[0]->Value . '},{' . $row->AdditionalAttributes->DynamicAttributeInfo[1]->Name . ': ' . $row->AdditionalAttributes->DynamicAttributeInfo[1]->Value . '}}'; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php elseif (!$isResultSuccess): ?>
        <p class="alert alert-danger"><strong>Failed!</strong><br />Error: <?php echo $errorMessage; ?></p>
    <?php endif ?>
    <div class="panel panel-default">
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" name="sampleForm" id="sampleForm" autocomplete="off">
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Filter value (email)</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEmail" name="email" value="" />
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
