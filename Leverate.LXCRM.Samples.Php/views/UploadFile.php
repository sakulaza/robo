<div>
    <p>
        Configure Leverate LXCRM Services client.<br />
        <small>Please read <a href="Configuration.php">Initial configuration</a> section for details.</small>
        <br /><br />

        <h4>Required parameters:</h4>
        <ul>
            <li><code>AccountId</code> - target account id. Type: <code>Guid</code></li>
            <li><code>FileName</code> - file name. Type: <code>String</code></li>
            <li><code>FileContent</code> - file content. Type: <code>Byte[]</code></li>
        </ul>
        <br />

        Please refer to API documentation (on <code>UpdateAccountDetailsRequest</code>) to find more information about parameters that are available for update.

        Make a call on Leverate LXCRM Services client (<small>See <a href="Configuration.php">Initial configuration</a> for details):</small>
        <br />
    </p>

    <pre><code class="cs">$request = new UploadFile();

$request->ownerUserId = $ownerUserId;
$request->organizationName = $organization;
$request->businessUnitName = $businessUnitName;
$request->accountId = $accountId;
$request->filename = $filename;
$request->fileContent = $fleContent;

$response = $leverateCrm->UploadFile($request);
$result = $response->UploadFileResponse;

if ($result->Result->Code != 'Success') {
    return false;
}</code></pre><br />
<pre><code class="cs">var response = serviceClient.UploadFile(ownerUserId, organizationName, businessUnitName, accountId,
                                        filename, fileContent);

if (response.Code != ResultCode.Success)
    throw new FaultException(response.Message, new FaultCode(response.Code.ToString("G")));</code></pre>
</div>
