<div>
    <p>
        In order to be able to test this sample application you need to set proper values into configuration file.<br/><br/>
        Please follow these steps:
    </p>
    <ul>
        <li>Find <strong>config.php</strong> file in the folder where LXCRM Services application web site deployed.</li>
        <li>
            Set organization-specific values (you should get them from Leverate):
            <ul>
                <li><b>wsdl</b> - Url of the wsdl or file location.</li>
                <li><b>apiLocation</b> - URL of LXCRM services endpoint.</li>
                <li><b>ownerUserId</b> - system user account.</li>
                <li><b>organization</b> - name of target CRM organization.</li>
                <li><b>businessUnitName</b> - name of target business unit.</li>
                <li><b>TradingPlatforms</b> - trading platforms that would be used.</li>
            </ul>
            <br/>
        </li>
        <li>
            Find endpoint configuration that you are going to use. We recommend to use basic HTTP endpoint with message security.<br/>
            Correct URL for target endpoint configuration (you should get it from Leverate explicitly).
        </li>
    </ul>
</div>
