<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Leverate LXCRM Services sample application - <?php echo $pageTitle; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-3 sidebar">
          <ul class="nav nav-sidebar">
              <li class="ul-header">Dashboard</li>
              <li><a href="Configuration.php">Initial configuration</a></li>
              <li><a href="SamplesConfiguration.php">Samples application configuration</a></li>
              <li><a href="RegisterLeadAccount.php">Register new lead account</a></li>
              <li><a href="RegisterRealAccount.php">Register new demo/real account</a></li>
              <li><a href="LoginAccount.php">Login account</a></li>
              <li><a href="ForgotPassword.php">Forgot password</a></li>
              <li><a href="GetAccountDetails.php">Get account details</a></li>
              <li><a href="UpdateAccountDetails.php">Update account details</a></li>
              <li><a href="GetTPAccountDetails.php">Get trading platform account details</a></li>
              <li><a href="GetTPAccountBalance.php">Get trading platform account balance</a></li>
              <li><a href="ChangeTPAccountPassword.php">Change trading platform account password</a></li>
              <li><a href="UploadFile.php">Upload file to account</a></li>
              <li><a href="CreateMonetaryTransaction.php">Create monetary transaction</a></li>
              <li><a href="CreateWithdrawalRequest.php">Create withdrawal</a></li>
              <li><a href="CreditCardDeposit.php">Create credit card deposit</a></li>
              <li><a href="GetMonetaryStatement.php">Get account monetary statement</a></li>
              <li><a href="GetTradingHistory.php">Get trading history</a></li>
			  <li><a href="WithdrawalMonetaryTransactionRequest.php">Create monetary transaction for withdrawal</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-85 col-md-offset-3 main">
          <h1 class="page-header"><?php echo $pageTitle ?></h1>
            <?php include('views/'.$viewName . '.php'); ?>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
