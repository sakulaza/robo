<div>
    <p>
        Configure Leverate LXCRM Services client.<br />
        <small>Please read <a href="Configuration.php">Initial configuration</a> section for details.</small>
        <br /><br />

        <h4>Required parameters:</h4>
        <ul>
            <li><code>TradingPlatformAccountId</code> - target trading platform account id. Type: <code>Guid</code></li>
            <li><code>CaseTitle</code> - title of case that would be created. Type: <code>String</code></li>
            <li><code>Amount</code> - amount to withdraw. Type: <code>Double</code></li>
            <li><code>InternalComment</code> - optional comment. Type: <code>String</code></li>
        </ul>
        <br />
        
        <p class="alert alert-danger">
            <strong>Currently only deposits are supported.</strong><br/>
            <small><strong>Note:</strong> DepositRequest is a derived class from MonetaryTransactionRequest. In the future more transaction types will be supported as derived classes.</small><br />
        </p>
        <br />

        <h4>Available methods of payments:</h4>
        <ul>
            <li>Credit Card</li>
            <li>Wire Transfer</li>
            <li>Cash</li>
            <li>Cheque</li>
            <li>EWallet</li>
            <li>Money Bookers</li>
            <li>Neteller</li>
            <li>PayPal</li>
            <li>WebMoney</li>
            <li>Western Union</li>
        </ul>
        <small>Note: The PaymentInfo parameter can be of any of the above types. Note that EWallet is a possible PaymentInfo and so are any of its derived types.</small>
        <br/><br />

        <h4>When the deposit is marked for auto approval (see Note below) then:</h4>
        <ul>
            <li>Under the CRM account, a new monetary transaction is created and automatically approved.</li>
            <li>The trading platform account balance is updated with the deposited amount.</li>
            <li>The client receives an e-mail according to the e-mail template set under 'deposit confirmation' (can be found under the entity 'Business Unit settings').</li>
            <li>The title of the new case created in the CRM: Automatic Deposit Approval. The case will contain the following details: link to monetary transaction, TP account, Account., and under description: amount, currency, method of payment, creation date, first  time deposit yes/no.</li>
        </ul>
    <br/>

        Make a call on Leverate LXCRM Services client (<small>See <a href="Configuration.php">Initial configuration</a> for details):</small>
        <br />
</p>

    <pre><code class="cs">
$info = new MonetaryTransactionRequestInfo();
$info->Amount = $amount;		
$info->TradingPlatformAccountId = $tradingPlatformAccountId;
$info->PaymentInfo = new CashPaymentInfo();
$info->OriginalAmount = null;
$info->OriginalCurrency = null; 
				
$dynamicAttributeInt = new DynamicAttributeInfo();
$dynamicAttributeInt->Name = 'lv_withdrawalreason';		
$dynamicAttributeInt->DynamicAttributeType = 'Picklist';				
$dynamicAttributeInt->Value = new SoapVar(3, XSD_INT, "int", "http://www.w3.org/2001/XMLSchema");	
		
$dynamicAttributeString = new DynamicAttributeInfo();
$dynamicAttributeString->Name = 'lv_internalcomment';		
$dynamicAttributeString->DynamicAttributeType = 'String';				
$dynamicAttributeString->Value = new SoapVar("some string", XSD_STRING, "string", "http://www.w3.org/2001/XMLSchema");	
		
$dynamicAttributeBit = new DynamicAttributeInfo();
$dynamicAttributeBit->Name = 'lv_managementapproval';		
$dynamicAttributeBit->DynamicAttributeType = 'Bit';				
$dynamicAttributeBit->Value = new SoapVar(true, XSD_BOOLEAN, "boolean", "http://www.w3.org/2001/XMLSchema");		

$request = new DepositRequest();
$request->IsCancellationTransaction = false;
$request->ShouldAutoApprove = true;
$request->UpdateTPOnApprove = true;
$request->MonetaryTransactionRequestInfo = $info;
$request->AdditionalAttributes = array($dynamicAttributeInt, $dynamicAttributeString, $dynamicAttributeBit);

$query = new CreateMonetaryTransaction();
$query->ownerUserId = $config['ownerUserId'];
$query->organizationName = $config['organization'];
$query->businessUnitName = $config['businessUnitName'];
$query->monetaryTransactionRequest = $request;
		
$response = $leverateCrm->CreateMonetaryTransaction($query);
		
$ResultInfo = new ResultInfo();
$ResultInfo = $response->CreateMonetaryTransactionResult->Result;
		
$result = $ResultInfo->RequestId;
$success = $ResultInfo->Code;
$message = $ResultInfo->Message;

if ($result->Result->Code != 'Success') {
	return false;
}
		
</code></pre><br />

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
                    <label for="tradingPlatformAccountId" class="col-sm-3 control-label">tradingPlatformAccountId</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputTradingPlatformAccountId" name="tradingPlatformAccountId" placeholder="tradingPlatformAccountId" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="amount" class="col-sm-3 control-label">amount</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputamount" name="amount" placeholder="amount" />
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
