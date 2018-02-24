<?php require "login/loginheader.php"; ?>
<?php include "login/dbconfig.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>FaceFinder 84</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/yeti/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <!-- header -->
        <div id="top-nav" class="navbar navbar-inverse navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./dash.php">FaceFinder 84</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> <?php echo "Blue" ?> <span class="caret"></span></a>
                            <ul id="g-account-menu" class="dropdown-menu" role="menu">
                                <li>
                                    <a href="./account.php">Account Settings</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="login/logout.php"><i class="glyphicon glyphicon-lock"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /container -->
        </div>
        <div class="container-fluid">
            <div class="row">
                <!-- /col-3 -->
                <div class="col-sm-12">
                    <!-- column 2 -->
                    <a href="./dash.php"><strong><i class="glyphicon glyphicon-chevron-left"></i> Account Settings</strong></a>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
</div>
                        <!-- center left-->
                        <div class="col-md-8">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4>Profile</h4>
                                </div>
                                <div class="panel-body">
                                    <form id="edit-profile" class="form-horizontal">
                                    <center>
                                    <table cellspacing="10">
                                      <tr>
                                            <td align="right">  <label for="username">Username &nbsp; &nbsp; &nbsp;</label></td>
                                            <td>  <input type="text" class="input-medium disabled" id="username" value="<?php echo $_SESSION['username'] ?>i" disabled></td>
                                      </tr>
                                      <tr>        <td></td><td align="right"><p class="help-block">Your username cannot be changed.</p><br></td></tr>
                                      <tr>
                                                <td align="right"><label for="email">Email Address &nbsp; &nbsp; &nbsp;</label><br><br></td>
                                                <td><input type="text" class="input-large" id="email" value="rod.howard@example.com"><br><br></td>
                                      </tr>
                                      <tr>
                                                <td align="right"><label for="password1">Password &nbsp; &nbsp; &nbsp;</label><br><br></td>
                                                <td><input type="password" class="input-medium" id="password1" value="password"><br><br></td>
                                      </tr>
                                      <tr>
                                                <td align="right"><label for="password2">Confirm &nbsp; &nbsp; &nbsp;</label><br><br></td>
                                                <td><input type="password" class="input-medium" id="password2" value="password"><br><br></td>
                                      </tr>
                                                <br />
                                      <tr>
                                                <td align="right"><button type="submit" class="btn btn-primary">Save</button> &nbsp; &nbsp; &nbsp;<br></td>
                                                <td><button class="btn">Cancel</button></td>
                                      </tr>
                                    </table>
                                    <br>
                                    </center>
                                    </form>
                                </div>
                                <!--/panel-body-->
                            </div>
                            <!--/panel-->
                            <br>
                            <!--tabs-->
                            <div class="panel">
                                <ul class="nav nav-tabs" id="myTab">
                                    <li class="active">
                                        <a href="#profile" data-toggle="tab">Current Subscription Status</a>
                                    </li>
                                    <li>
                                        <a href="#messages" data-toggle="tab">Add Subscription</a>
                                    </li>
                                    <li>
                                        <a href="#settings" data-toggle="tab">Payment History</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active well" id="profile">
                                        <h4><i class="glyphicon glyphicon-user"></i></h4> Lorem profile dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                                        <p>Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi.</p>
                                    </div>
                                    <div class="tab-pane well" id="messages">
                                        <center>
                                            <h3>Add one month of service to your account.</h3>
                                            <br>
                                            <form action="./charge.php" method="POST">
                                                <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="pk_test_yAXifZWCUKoT11uWnNxOG8wC" data-amount="9999" data-name="StreamForce Broadcast" data-description="One month of streaming services." data-image="https://stripe.com/img/documentation/checkout/marketplace.png" data-locale="auto">
                                                </script>
                                            </form>
                                            <br>
                                        </center>
                                    </div>
                                    <div class="tab-pane well" id="settings">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1/21/2016</td>
                                                    <td>$99.99</td>
                                                </tr>
                                                <tr>
                                                    <td>2/14/2016</td>
                                                    <td>$99.99</td>
                                                </tr>
                                                <tr>
                                                    <td>12/15/2017</td>
                                                    <td>$99.99</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <center>
                                            <p>If you have any questions about billing, please<br>feel free&nbsp;to email <a href="mailto:support@streamforcemedia.com">support@streamforcemedia.com</a></p>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <!--/tabs-->
                        </div>
                        <!--/col-->
                        <!--/col-span-6-->
                    </div>
                    <!--/row-->
                </div>
                <!--/col-span-9-->
            </div>
        </div>
        <!-- /Header -->
        <!-- Main -->
        <!-- /Main -->
        <footer class="text-center">This service is provided by
            <a href="/"><strong>FaceFinder 84</strong></a>
        </footer>
        <!-- script references -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
