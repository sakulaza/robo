<div>
    <p>
        Configure Leverate LXCRM Services client.<br />
        <small>Please read <a href="Configuration.php">Initial configuration</a> section for details.</small>
        <br /><br />

        <h4>Required parameters:</h4>
        <ul>
            <!-- <li><code>TradingPlatformAccountId</code> - target trading platform account id. Type: <code>Guid</code></li>
            <li><code>CaseTitle</code> - title of case that would be created. Type: <code>String</code></li>
            <li><code>Amount</code> - amount to withdraw. Type: <code>Double</code></li>
            <li><code>InternalComment</code> - optional comment. Type: <code>String</code></li> -->
        </ul>
        <br />
		<br/>
		Make a call on Leverate LXCRM Services client (<small>See <a href="Configuration.php">Initial configuration</a> for details):</small>
		<br />
	</p>

    <pre>
		<code class="cs">
		</code>
	</pre>
	<br />

    <h4>Try it yourself:</h4>
    <?php if (!$isServicesConfigured): ?>
        <p class="alert alert-danger"><strong>Samples application should be configured properly.</strong><br />Please read <a href="SamplesConfiguration.php">Samples application configuration</a> for details.</p>
    <?php endif ?>
    <?php if ($result != null && $isResultSuccess): ?>
        <p class="alert alert-success"><strong>Success!</strong><br />Transaction id: <?php echo $result; ?><br/>Message: <?php echo $errorMessage; ?></p>
    <?php elseif (!$isResultSuccess): ?>
        <p class="alert alert-danger"><strong>Failed!</strong><br />Error: <?php echo $errorMessage; ?></p>
    <?php endif ?>
    <div class="panel panel-default">
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" name="sampleForm" id="sampleForm" autocomplete="off">
                <div class="form-group">
                    <label for="tradingPlatformAccountId" class="col-sm-3 control-label">Trading Platform Account Id</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputTradingPlatformAccountId" name="tradingPlatformAccountId" placeholder="tradingPlatformAccountId" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="amount" class="col-sm-3 control-label">Amount</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputamount" name="amount" placeholder="amount" />
                    </div>
                </div>
				<hr/>
                <div class="form-group">
                    <label for="shouldAutoApprove" class="col-sm-3 control-label">Should Auto Approve</label>
                    <div class="col-sm-9">
                        <input type="checkbox" class="form-control" name="shouldAutoApprove" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="updateTPOnApprove" class="col-sm-3 control-label">Update TP On Approve</label>
                    <div class="col-sm-9">
                        <input type="checkbox" class="form-control" name="updateTPOnApprove" checked />
                    </div>
                </div>
                <div class="form-group">
                    <label for="withdrawalReasonValue" class="col-sm-3 control-label">Withdrawal Reason</label>
                    <div class="col-sm-9">
                        <select name="withdrawalReasonValue" class="form-control">
                            <?php foreach ($withdrawalReasons as $withdrawalReason): ?>
								<option value="<?php echo $withdrawalReason->Value;?>"><?php echo $withdrawalReason->Name; ?></option>
                            <?php endforeach; ?>
                        </select>
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
