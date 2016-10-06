<div>
    <p>
        Configure Leverate LXCRM Services client.<br />
        <small>Please read <a href="Configuration.php">Initial configuration</a> section for details.</small>
        <br /><br />

        <h4>Required parameters:</h4>
        <ul>
            <li><code>TradingPlatformAccountId</code> - target trading platfrom account id. Type: <code>Guid</code></li>
        </ul>
        <br />

        Please refer to API documentation (on <code>UpdateAccountDetailsRequest</code>) to find more information about parameters that are available for update.

        Make a call on Leverate LXCRM Services client (<small>See <a href="Configuration.php">Initial configuration</a> for details):</small>
        <br />
    </p>

    <pre><code class="cs">$request = new GetTradingPlatformAccountDetails();

$request->ownerUserId = $ownerUserId;
$request->organizationName = $organization;
$request->businessUnitName = $businessUnitName;
$request->tradingPlatformAccountId = $tradingPlatformAccountId

$response = $leverateCrm->GetTradingPlatformAccountDetails($request);
$result = $response->GetTradingPlatformAccountDetailsResponse;

if ($result->Result->Code != 'Success') {
    return false;
}
return $result->TradingPlatformAccountInfo; </code></pre><br />
</div>
