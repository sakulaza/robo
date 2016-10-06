<div>
    <p>
        Configure Leverate LXCRM Services client.<br />
        <small>Please read <a href="Configuration.php">Initial configuration</a> section for details.</small>
        <br /><br />

        <h4>Required parameters:</h4>
        <ul>
            <li><code>TradingPlatformAccountName</code> - trading platform account name. Type: <code>String</code></li>
            <li><code>Email</code> - trading platform account email. Type: <code>String</code></li>
        </ul>
        <br />

        Make a call on Leverate LXCRM Services client (<small>See <a href="Configuration.php">Initial configuration</a> for details):</small>
        <br />
    </p>
<pre><code class="cs">$forgotPassword = new ForgotYourPassword();

$forgotPassword->ownerUserId = $ownerUserId;
$forgotPassword->organizationName = $organization;
$forgotPassword->businessUnitName = $businessUnitName;
$forgotPassword->tradingPlatformAccountName = $tradingPlatformAccountName;
$forgotPassword->email = $email;

$forgotPasswordResponse = new ForgotYourPasswordResponse();
$forgotPasswordResponse = $leverateCrm->ForgotYourPassword($forgotPassword);
$result = $forgotPasswordResponse->ForgotYourPasswordResult;

if ($result->Result->Code != 'Success') {
    return false;
}
return $result->Result->Message; </code></pre><br />

<h4>Try it yourself:</h4>
    <?php if (!$isServicesConfigured): ?>
        <p class="alert alert-danger"><strong>Samples application should be configured properly.</strong><br />Please read <a href="SamplesConfiguration.php">Samples application configuration</a> for details.</p>
    <?php endif ?>
    <?php if ($result != null && $isResultSuccess): ?>
        <p class="alert alert-success"><strong>Success!</strong><br /> <?php echo $result; ?></p>
    <?php elseif (!$isResultSuccess): ?>
        <p class="alert alert-danger"><strong>Failed!</strong><br />Error: <?php echo $errorMessage; ?></p>
    <?php endif ?>
    <div class="panel panel-default">
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" name="sampleForm" id="sampleForm" autocomplete="off">
                <div class="form-group">
                    <label for="inputTradingPlatformAccountName" class="col-sm-3 control-label">Trading platform account</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputTradingPlatformAccountName" name="tradingPlatformAccountName" value="" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="inputEmail" name="email" value="" />
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
