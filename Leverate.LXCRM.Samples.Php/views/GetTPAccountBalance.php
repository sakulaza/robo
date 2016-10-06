<div>
	<p>Configure Leverate LXCRM Services client. Please read <a href="Configuration.php">Initial configuration</a> section for details.
		<br />
		<h4>Required parameters:</h4>
		<ul>
			<li><code>TradingPlatformAccountName</code> - target trading platform account name. Type: <code>String</code></li>
		</ul>
	</p>

	<pre><code class="cs">$request = new GetTradingPlatformAccountBalance();
$request->ownerUserId = $config['ownerUserId'];
$request->organizationName = $config['organization'];
$request->businessUnitName = $config['businessUnitName'];
$request->tradingPlatformAccountName = $tradingPlatformAccountName;

$response = $leverateCrm->GetTradingPlatformAccountBalance($request)->GetTradingPlatformAccountBalanceResult;
if ($response->Result->Code != 'Success') {
	return null;
}

return $response->TradingPlatformAccountBalance; </code></pre><br />

	<h4>Try it yourself:</h4>
	<?php if (!$isServicesConfigured): ?>
	<p class="alert alert-danger"><strong>Samples application should be configured properly.</strong><br />Please read <a href="SamplesConfiguration.php">Samples application configuration</a> for details.</p>
	<?php endif ?>
	<?php if ($result != null && $isResultSuccess): ?>
		<div class="alert alert-success">
			<strong>Success!</strong><br />
			Transaction id: <strong><?php echo $requestId; ?></strong><br />
			Message: <strong><?php echo $message; ?></strong><br />
			Trading platform account id: <strong><?php echo $tpAccountId ?></strong><br />
			Balance: <strong><?php echo $balance ?></strong><br />
			Credit: <strong><?php echo $credit ?></strong><br />
			Equity: <strong><?php echo $margin ?></strong><br />
			Margin: <strong><?php echo $equity ?></strong><br />
		</div>
	<?php elseif (!$isResultSuccess): ?>
	<p class="alert alert-danger"><strong>Failed!</strong><br />Error: <?php echo $message; ?></p>
	<?php endif ?>
	<div class="panel panel-default">
		<div class="panel-body">
			<form class="form-horizontal" role="form" method="POST" name="sampleForm" id="sampleForm" autocomplete="off">
				<div class="form-group">
					<label for="inputTpAccountName" class="col-sm-3 control-label">Trading platform account</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="inputTpAccountName" name="tradingPlatformAccountName" placeholder="account name" value="" />
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
