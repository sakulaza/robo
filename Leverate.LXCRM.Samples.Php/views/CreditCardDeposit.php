<div>
    <p>
        Configure Leverate LXCRM Services client.<br />
        <small>Please read <a href="Configuration.php">Initial configuration</a> section for details.</small>
        <br /><br />

        <h4>Required parameters:</h4>
        <ul>
            <li><code>TradingPlatformAccountId</code> - target trading platform account id. Type: <code>String</code></li>
            <li><code>Amount</code> - amount to withdraw. Type: <code>Double</code></li>
            <li><code>CardType</code> - type of card. Type: <code>PickListInfo</code></li>
            <li><code>CardAcquirer</code> - card acquirer. Type: <code>PickListInfo</code></li>
            <li><code>CardAcquirerReference</code> - card acquirer reference. Type: <code>String</code></li>
            <li><code>CardExpirationYear</code> - card expiration year. Type: <code>String</code></li>
            <li><code>CardExpirationMonth</code> - card expiration month. Type: <code>String</code></li>
            <li><code>CardHolderIdentityNumber</code> - cardholder identity number. Type: <code>String</code></li>
            <li><code>CardHolderName</code> - cardholder name. Type: <code>String</code></li>
            <li><code>CardIssuingBank</code> - card issuing bank. Type: <code>String</code></li>
            <li><code>CardLast4Digits</code> - card last 4 digits. Type: <code>String</code></li>
            <li><code>OriginalCurrency</code> - original currency. Type: <code>PickListInfo</code></li>
        </ul>
        <br />

        <h4>As a response, the following will happen:</h4>
        <ul>
            <li>An automatic e-mail will be sent to the client regarding their request</li>
            <li>A new case will be create in CRM containing the withdrawal request details</li>
        </ul><br />

        Make a call on Leverate LXCRM Services client (<small>See <a href="Configuration.php">Initial configuration</a> for details):</small>
        <br />
    </p>

<pre><code class="cs">$deatils = new CreditCardDepositRequest();
    $details->TradingPlatformAccountId = $tradingPlatformAccountId;
    $details->Amount = $amount;
    $details->CardType = $cardType;
    $details->CardAcquirer = $cardAcquirer;
    $details->CardAcquirerReference = $cardAcquirerReference;
    $details->CardExpirationYear = $cardExpirationYear;
    $details->CardExpirationMonth = $cardExpirationMonth;
    $details->CardHolderIdentityNumber = $cardHolderIdentityNumber;
    $details->CardHolderName = $cardHolderName;
    $details->CardIssuingBank = $cardIssuingBank;
    $details->CardLast4Digits = $cardLast4Digits;
    $details->OriginalCurrency = $originalCurrency;

    $request = new CreateCreditCardDepositRequest();
    $request->ownerUserId = $ownerUserId;
    $request->organizationName = $organization;
    $request->businessUnitName = $businessUnitName;
    $request->CreditCardDepositRequest= $details;

    $response = $liverateCrm->CreateCreditCardDepositRequest($request);

    if ($result->Result->Code != 'Success') {
    return false;
    } </code></pre>
</div>
