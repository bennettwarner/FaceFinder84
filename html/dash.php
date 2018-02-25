<?php require "login/loginheader.php"; ?>
<?php require "./functions.php"; ?>
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
                    <a class="navbar-brand" href="./dash">FaceFinder 84™</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown">
                            <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> <?php echo getUsername(); ?> <span class="caret"></span></a>
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
        <!-- /Header -->
        <!-- Main -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <!-- Left column -->
                    <a href="#"><strong><i class="glyphicon glyphicon-wrench"></i> Tools</strong></a>
                    <hr>
                    <ul class="nav nav-stacked">
                        <ul class="nav nav-stacked collapse in" id="userMenu">
                            <li class="active">
                                <a href="/dash.php"><i class="glyphicon glyphicon-home"></i> Home</a>
                            </li>
                            <li>
                                <a href="#"><i class="glyphicon glyphicon-plus"></i> New Case <span class="badge badge-info"></span></a>
                            </li>
                            <li>
                                <a href="#"><i class="glyphicon glyphicon-list"></i> Active Cases</a>
                            </li>
                            <li>
                                <a href="#"><i class="glyphicon glyphicon-tasks"></i> Jobs</a>
                            </li>
                            <li></li>
                            <li>
                                <a href="#"><i class="glyphicon glyphicon-flag"></i> Audit</a>
                            </li>
                            <li>
                                <a href="account.php"><i class="glyphicon glyphicon-user"></i> Account</a>
                            </li>
                            <li></li>
                            <li>
                                <a href="#"><i class="glyphicon glyphicon-off"></i> Logout</a>
                            </li>
                        </ul>
                    </ul>
                    <a href="#"></a>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="nav-header"></li>
                    </ul>
                </div>
                <!-- /col-3 -->
                <div class="col-sm-9">
                    <!-- column 2 -->
                    <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i> My Dashboard</strong></a>
                    <hr>
                    <div class="row">
                        <!-- center left-->
                        <div class="col-md-6">
                            <div class="btn-group btn-group-justified">
                                <a href="#" class="btn btn-primary col-sm-3"> <i class="glyphicon glyphicon-plus"></i> <br> New Case </a>
                                <a href="#" class="btn btn-primary col-sm-3"> <i class="glyphicon glyphicon-list"></i> <br> Cases </a>
                                <a href="#" class="btn btn-primary col-sm-3"> <i class="glyphicon glyphicon-tasks"></i> <br> Jobs </a>
                                <a href="#help" class="btn btn-primary col-sm-3" data-toggle="modal" data-target="#help"> <i class="glyphicon glyphicon-question-sign"></i> <br> Help</a>
                            </div>
                            <hr>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4><span class="glyphicon glyphicon-th-list"></span> Recent Cases</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Officer</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>45</td>
                                                <td>2.45%</td>
                                                <td>Direct</td>
                                            </tr>
                                            <tr>
                                                <td>289</td>
                                                <td>56.2%</td>
                                                <td>Referral</td>
                                            </tr>
                                            <tr>
                                                <td>98</td>
                                                <td>25%</td>
                                                <td>Type</td>
                                            </tr>
                                            <tr>
                                                <td>..</td>
                                                <td>..</td>
                                                <td>..</td>
                                            </tr>
                                            <tr>
                                                <td>..</td>
                                                <td>..</td>
                                                <td>..</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--/panel-body-->
                            </div>
                            <!--/panel-->
                            <!--tabs-->
                            <!--/tabs-->
                        </div>
                        <!--/col-->
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4>Welcome</h4>
                                </div>
                                <div class="panel-body">
                                    <p>Welcome to FF84™. To create a new case use the "New Case" button, for further assistance please use the Help button.</p>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4><span class="glyphicon glyphicon-facetime-video"></span> Camera Feeds</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Location</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>45</td>
                                                <td>2.45%</td>
                                            </tr>
                                            <tr>
                                                <td>289</td>
                                                <td>56.2%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--/panel-body-->
                            </div>
                            <!--/panel-->
                            <!--/panel-->
                        </div>
                        <!--/col-span-6-->
                    </div>
                    <!--/row-->
                    <a href="#"></a>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="list-group">
</ul>
                        </div>
                    </div>
                </div>
                <!--/col-span-9-->
            </div>
        </div>
        <!-- /Main -->
        <!-- Modal -->
<div class="modal fade" id="help" tabindex="-1" role="dialog" aria-labelledby="Help" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FaceFinder Help</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="accordion">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  New Case
                </button>
              </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                This creates a new "case" in the system, a "case" is used to initiate a search for the suspect.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Active Cases
                </button>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                This is a directory of all current cases active in your system.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Jobs
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFour">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Audit
                </button>
              </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
              <div class="card-body">
                This is a who initiated which searches to create an accountability trail.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFive">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  Account
                </button>
              </h5>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
              <div class="card-body">
                In this section you can manage and update your account details like email and password.
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
        <!-- script references -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
