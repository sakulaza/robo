    <p>
        In order to be able to communicate with LXCRM services you need to get some system parameters from Leverate:
    </p>
    <ul>
        <li><b>LXCRM services URL</b> - URL of LXCRM services endpoint. Type: <code>String</code></li>
        <li><b>OwnerUserId</b> - system user account. Type: <code>Guid</code></li>
        <li><b>OrganizationName</b> - name of target CRM organization. Type: <code>String</code></li>
        <li><b>BusinessUnitName</b> - name of target business unit. Type: <code>String</code></li>
        <li><b>CertificateName</b> - name of the client certificate (should be installed on client web server). Type: <code>String</code></li>
        <li><b>TradingPlatformId</b> - trading platform that would be used. Type: <code>Guid</code></li>
    </ul>
    <br/>

    <p>
        Each call to LXCRM services is made under specific organization, business unit and user, which is connected using specific certificate.<br/>
        The best practice is to store these parameters as part of configuration that could be changed for each installation or deployment.<br/>
    </p>
    <p class="alert alert-warning">
        Please read <a href="SamplesConfiguration.php">Samples application configuration</a> for suggested best practices.
    </p>
