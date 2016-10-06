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

        Make a call on Leverate LXCRM Services client (<small>See <a href="Configuration.php">Initial configuration</a> for details):</small>
        <br />
    </p>

    <pre><code class="cs">$request = new GetAccountMonetaryStatement();

$request->ownerUserId = $ownerUserId;
$request->organizationName = $organization;
$request->businessUnitName = $businessUnitName;
$request->accountId = $accountId;

$response = $leverateCrm->GetAccountMonetaryStatement($request);
$result = $response->GetAccountMonetaryStatementResponse;

if ($result->Result->Code != 'Success') {
    return false;
}
return $result->MonetaryTransactions; </code></pre><br />
</div>
