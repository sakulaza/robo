<div>
    <p>
        Configure Leverate LXCRM Services client.<br />
        <small>Please read <a href="Configuration.php">Initial configuration</a> section for details.</small>
        <br /><br />

        <h4>Required parameters:</h4>
        <ul>
				    <li><code>ownerUserId</code> - owner User Id. Type: <code>Guid</code></li>
            <li><code>organizationName</code> - organization name. Type: <code>String</code></li>
            <li><code>businessUnitName</code> - business unit name. Type: <code>String</code></li>
            <li><code>tradingPlatformAccountName</code> - target trading platfrom account id. Type: <code>String</code></li>
            <li><code>tradingPlatformAccountOldPassword</code> - trading platfrom account old password. Type: <code>String</code></li>
            <li><code>tradingPlatformAccountNewPassword</code> - trading platfrom account new password. Type: <code>String</code></li>
        </ul>
        <br />
        Make a call on Leverate LXCRM Services client (<small>See <a href="Configuration.php">Initial configuration</a> for details):</small>
        <br />
    </p>

<pre><code class="cs">$request = new ChangePassword();       
$request->ownerUserId = $config['ownerUserId'];
$request->organizationName = $config['organization'];
$request->businessUnitName = $config['businessUnitName'];
$request->tradingPlatformAccountName = $tradingPlatformAccountName;
$request->tradingPlatformAccountOldPassword = $tradingPlatformAccountOldPassword;
$request->tradingPlatformAccountNewPassword = $tradingPlatformAccountNewPassword;

$leverateCrm = getCrm($config);

$response = new ChangePasswordResponse();
$response =$leverateCrm->ChangePassword($request);
$result = $response->ChangePasswordResult;
       
$success = $result->Code;
$message = $result->Message;
</code></pre><br/>

    <h4>Try it yourself:</h4>
    <?php if (!$isServicesConfigured): ?>
        <p class="alert alert-danger"><strong>Samples application should be configured properly.</strong><br />Please read <a href="SamplesConfiguration.php">Samples application configuration</a> for details.</p>
    <?php endif ?>
    <?php if ($result != null && $resultCode == 'Success'): ?>
        <p class="alert alert-success"><strong>Success!</strong><br />Result code: <?php echo $resultCode; ?>
				<br />Message: <?php echo $message; ?></p>
    <?php elseif ($resultCode != 'Success'): ?>
        <p class="alert alert-danger"><strong>Failed!</strong><br />Error: <?php echo $message; ?></p>
    <?php endif ?>
    <div class="panel panel-default">
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" name="sampleForm" id="sampleForm" autocomplete="off">
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Trading platform account</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="tradingPlatformAccountName" name="tradingPlatformAccountName" value="" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-sm-3 control-label">Old Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="oldPassword" name="oldPassword" value="" />
                    </div>
                </div>
								 <div class="form-group">
                    <label for="inputPassword" class="col-sm-3 control-label">New Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="newPassword" name="newPassword" value="" />
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

