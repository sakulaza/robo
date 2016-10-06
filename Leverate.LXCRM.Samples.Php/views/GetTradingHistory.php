<div>
    <p>
        Configure Leverate LXCRM Services client.<br />
        <small>Please read <a href="Configuration.php">Initial configuration</a> section for details.</small>
        <br /><br />

        <h4>Required parameters:</h4>
        <ul>
            <li><code>TradingPlatformAccountId</code> - target trading platform account id. Type: <code>Guid</code></li>
            <li><code>StartTime</code> - results filter - start time. Type: <code>DateTime</code></li>
            <li><code>EndTime</code> - results filter - end time. Type: <code>DateTime</code></li>
            <li><code>MaxRows</code> - maximum results count. Type: <code>Int</code></li>
        </ul>
        <br />

        Make a call on Leverate LXCRM Services client (<small>See <a href="Configuration.php">Initial configuration</a> for details):</small>
        <br />
    </p>

    <pre><code class="cs">$request = new GetTradingHistory();

$request->ownerUserId = $ownerUserId;
$request->organizationName = $organization;
$request->businessUnitName = $businessUnitName;
$request->tradingPlatformAccountId = $accountId;
$request->startTime = $startTime;
$request->endTime = $endTime;
$request->maxRows = $maxRows;

$response = $leverateCrm->TradingHistory($request);
$result = $response->GetTradingHistoryResponse;

if ($result->Result->Code != 'Success') {
    return false;
}
return $result->ClosedPositions; </code></pre><br />

    <h4>Try it yourself:</h4>
    <?php if (!$isServicesConfigured): ?>
        <p class="alert alert-danger"><strong>Samples application should be configured properly.</strong><br />Please read <a href="SamplesConfiguration.php">Samples application configuration</a> for details.</p>
    <?php endif ?>
    <?php if ($result != null && $isResultSuccess): ?>
        <p class="alert alert-success"><strong>Success!</strong><br />Transaction id: <?php echo $result; ?><br/>Message: <?php echo $errorMessage; ?><br/><pre><?php echo $closedPositionInfo ?></pre></p>
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
