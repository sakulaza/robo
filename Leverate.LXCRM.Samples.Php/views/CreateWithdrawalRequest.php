<div>
    <p>
        Configure Leverate LXCRM Services client.<br />
        <small>Please read <a href="Configuration.php">Initial configuration</a> section for details.</small>
        <br /><br />

        <h4>Required parameters:</h4>
        <ul>
            <li><code>AccountId</code> - target account id. Type: <code>Guid</code></li>
            <li><code>TradingPlatformAccountName</code> - target trading platform account name. Type: <code>String</code></li>
            <li><code>CaseTitle</code> - title of case that would be created. Type: <code>String</code></li>
            <li><code>Amount</code> - amount to withdraw. Type: <code>Double</code></li>
            <li><code>CurrencyId</code> - target currency id to use. Type: <code>Guid</code></li>
            <li><code>Description</code> - optional description. Type: <code>String</code></li>
            <li><code>WithdrawalMethod</code> - withdrawal method. Type: <code>MoneyTransactionMethod</code></li>
        </ul>
        <br />
        
        <h4>As a response, the following will happen:</h4>
        <ul>
            <li>An automatic e-mail will be sent to the client regarding their request</li>
            <li>A new case will be create in CRM containing the withdrawal request details</li>
        </ul><br/>

        Make a call on Leverate LXCRM Services client (<small>See <a href="Configuration.php">Initial configuration</a> for details):</small>
        <br />
    </p>

    <pre><code class="cs">$details = new WithdrawalRequest()
$details->AccountId = $accountId;
$details->Amount = $amount;
$details->TradingPlatformAccountName = $tradingPlatformAccountName;
$details->CaseTitle = $caseTitle;
$details->CurrencyId = $currencyId;
$details->Description = $description;
$details->WithdrawalMethod = 'Cash';

$request = new CreateWithdrawalRequest();
$request->ownerUserId = $ownerUserId;
$request->organizationName = $organization;
$request->businessUnitName = $businessUnitName;
$request->WithdrawalRequest = $details;

$response = $liverateCrm->CreateWithdrawalRequest($request);

if ($result->Result->Code != 'Success') {
    return false;
} </code></pre>
<br/>

    <h4>Try it yourself:</h4>
    <?php if (!$isServicesConfigured): ?>
        <p class="alert alert-danger"><strong>Samples application should be configured properly.</strong><br />Please read <a href="SamplesConfiguration.php">Samples application configuration</a> for details.</p>
    <?php endif ?>
    <?php if ($result != null && $isResultSuccess): ?>
        <p class="alert alert-success"><strong>Success!</strong><br />Transaction id: <?php echo $result; ?></p>
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
                    <label for="tradingPlatformAccountName" class="col-sm-3 control-label">tradingPlatformAccountName</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputamount" name="tradingPlatformAccountName" placeholder="tradingPlatformAccountName" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="amount" class="col-sm-3 control-label">amount</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputamount" name="amount" placeholder="amount" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="currencyId" class="col-sm-3 control-label">Currency</label>
                    <div class="col-sm-9">
                        <select name="currencyId" class="form-control">
                            <?php foreach ($currencies as $currency): ?>
                                <option value="<?php echo $currency->Id;?>"><?php echo $currency->Name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="cardTypeValue" class="col-sm-3 control-label">cardType (Just PickList example)</label>
                    <div class="col-sm-9">
                        <select name="cardTypeValue" class="form-control">
                            <?php foreach ($cardTypes as $cardType): ?>
								<pre><?php print_r($cardType);?></pre>
								<option value="<?php echo $cardType->Value;?>"><?php echo $cardType->Name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
				<hr/>
                <div class="form-group">
                    <label for="caseTitle" class="col-sm-3 control-label">caseTitle</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputamount" name="caseTitle" placeholder="caseTitle" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-sm-3 control-label">description</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputamount" name="description" placeholder="description" />
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