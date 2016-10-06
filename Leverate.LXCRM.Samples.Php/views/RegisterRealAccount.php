<div>
    <p>
        Configure Leverate LXCRM Services client.<br />
        <small>Please read <a href="Configuration.php">Initial configuration</a> section for details.</small>
        <br/><br/>
        
        Create <code>DemoAccountRegistrationRequest</code> object for demo account registration request:
        <h4>Required properties:</h4>
        <ul>
            <li><code>GroupName</code> - group name on trading platform for new account <small>(See <a href="Configuration.php">Initial configuration</a> for details)</small>. Type: <code>String</code></li>
            <li><code>CountryId</code> - country identifier for new account <small>(See <a href="Configuration.php">Initial configuration</a> for details)</small>. Type: <code>Guid</code></li>
            <li><code>FirstName</code> - new account first name. Type: <code>String</code></li>
            <li><code>LastName</code> - new account last name. Type: <code>String</code></li>
            <li><code>PhoneCountryCode</code> - new account phone country code. Type: <code>String</code></li>
            <li><code>PhoneAreaCode</code> - new account phone area code. Type: <code>String</code></li>
            <li><code>PhoneNumber</code> - new account phone number. Type: <code>String</code></li>
            <li><code>Email</code> - new account email. Type: <code>String</code></li>
            <li><code>Password</code> - new account password. Type: <code>String</code></li>
        </ul>
        <br/>
        
        <h4>Application-specific properties:</h4>
        <ul>
            <li><code>TradingPlatformId</code> - trading platform id for new account <small>(See <a href="Configuration.php">Initial configuration</a> for details)</small>. Type: <code>Guid</code></li>
        </ul>
        <br/>
        
        Make a call on Leverate LXCRM Services client (<small>See <a href="Configuration.php">Initial configuration</a> for details):</small>
    </p>

    <pre><code class="cs">$demoAccountRegistrationRequest = new DemoAccountRegistrationRequest();
$demoAccountRegistrationRequest->TradingPlatformId = $tradingPlatformId;
$demoAccountRegistrationRequest->GroupName = $groupName;
$demoAccountRegistrationRequest->CountryId = $countryId;
$demoAccountRegistrationRequest->FirstName = $firstName;
$demoAccountRegistrationRequest->LastName = $lastName;
$demoAccountRegistrationRequest->PhoneCountryCode = $phoneCountryCode;
$demoAccountRegistrationRequest->PhoneAreaCode = $phoneAreaCode;
$demoAccountRegistrationRequest->PhoneNumber = $phoneNumber;
$demoAccountRegistrationRequest->Email = $email;
$demoAccountRegistrationRequest->Password = $password;

$demoAccountRegistrationRequest->LoggedInAccountId = '00000000-0000-0000-0000-000000000000';
$demoAccountRegistrationRequest->PlaceOfBirth = '';

$demoAccountRegistrationRequest->AdditionalInfo = new DynamicAttributeInfo();
$demoAccountRegistrationRequest->EnvironmentInfo = new EnvironmentInfo();
$demoAccountRegistrationRequest->MarketingInfo = new MarketingInfo();

$registerDemoAccount = new RegisterDemoAccount();

$registerDemoAccount->ownerUserId = $ownerUserId;
$registerDemoAccount->organizationName = $organization;
$registerDemoAccount->businessUnitName = $businessUnitName;
$registerDemoAccount->demoAccountRegistrationRequest = $demoAccountRegistrationRequest;

$registerDemoAccountResponse = $leverateCrm->RegisterDemoAccount($registerDemoAccount);
$result = $registerDemoAccountResponse->RegisterDemoAccountResult;
if ($result->Result->Code != 'Success') {
    return false;
}
return $result->AccountId; </code></pre><br />

    <h4>Try it yourself:</h4>
    <?php if (!$isServicesConfigured): ?>
        <p class="alert alert-danger"><strong>Samples application should be configured properly.</strong><br />Please read <a href="SamplesConfiguration.php">Samples application configuration</a> for details.</p>
    <?php endif ?>
    <?php if ($result != null && $isResultSuccess): ?>
        <p class="alert alert-success"><strong>Success!</strong><br />New account id: <?php echo $result; ?></p>
    <?php elseif (!$isResultSuccess): ?>
        <p class="alert alert-danger"><strong>Failed!</strong><br />Error: <?php echo $errorMessage; ?></p>
    <?php endif ?>
    <div class="panel panel-default">
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" name="sampleForm" id="sampleForm" autocomplete="off">
                <div class="form-group">
                    <label for="countryId" class="col-sm-3 control-label">Country</label>
                    <div class="col-sm-9">
                        <select name="countryId" class="form-control">
                            <?php foreach ($countries as $country): ?>
                                <option value="<?php echo $country->Id;?>"><?php echo $country->Name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tradingPlatformGroupName" class="col-sm-3 control-label">Trading platform group</label>
                    <div class="col-sm-9">
                        <select name="tradingPlatformGroupName" class="form-control">
                            <?php foreach ($tradingPlatformGroups as $group): ?>
                                <option value="<?php echo $group;?>"><?php echo $group; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputFirstName" class="col-sm-3 control-label">First name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputFirstName" name="firstName" placeholder="First name" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputLastName" class="col-sm-3 control-label">Last name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputLastName" name="lastName" placeholder="Last name" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Phone number</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="inputPhoneCountryCode" name="phoneCountryCode" placeholder="country" />
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="inputPhoneAreaCode" name="phoneAreaCode" placeholder="area" />
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputPhoneNumber" name="phoneNumber" placeholder="number" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" value="" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="inputPassword" name="password" value="" />
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
