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
                    <a class="navbar-brand" href="./dash.php">FaceFinder 84™</a>
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
        <?php
        if (!inProgress($_GET['id'])) {
          echo '<div class="alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Search is still in progress! Check jobs to see status.</div><div id="returnVal" style="display:none;">false</div>';
      }?>

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
                                <a href="newCase.php"><i class="glyphicon glyphicon-plus"></i> New Case <span class="badge badge-info"></span></a>
                            </li>
                            <li>
                                <a href="cases.php"><i class="glyphicon glyphicon-list"></i> Active Cases</a>
                            </li>
                            <li>
                                <a href="jobs.php"><i class="glyphicon glyphicon-tasks"></i> Jobs</a>
                            </li>
                            <li>
                                <a href="account.php"><i class="glyphicon glyphicon-user"></i> Account</a>
                            </li>
                            <li>
                                <a href="./login/logout.php"><i class="glyphicon glyphicon-off"></i> Logout</a>
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
                    <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i> Case <?php echo $_GET['id']." - ".getTitle($_GET['id'])?></strong></a>
                    <hr>
                    <div class="row">
                        <!-- center left-->
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4>Case Notes</h4>
                                </div>
                                <div class="panel-body">
                                    <p><?php echo getNotes($_GET['id']);?></p>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4>Search Source Photo</h4>
                                </div>
                                <div class="panel-body">
                                    <img src="./<?php echo getSourceIMG($_GET['id'])?>"  style="width:100%;">
                                </div>
                            </div>
                            <!--/panel-->
                            <!--tabs-->
                            <!--/tabs-->
                        </div>
                        <!--/col-->
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4> Matches</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Time</th>
                                                <th>Location</th>
                                                <th>Image</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $matches = match($_GET['id']);
                                            print_r($match);
                                            foreach ($matches as &$value) {
                                            echo matchTable($value);
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!--/panel-body-->
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4> Raw Output</h4>
                                </div>
                                <div class="panel-body">
                                    <p></p>
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
                        <ul>
                            <li>
                                <b>New Case</b> - This creates a new "case" in the system, a "case" is used to initiate a search for the suspect.
                            </li>
                            <li>
                                <b>Active Cases</b> - This is a directory of all current cases active in your system.
                            </li>
                            <li>
                                <b>Jobs</b> - This is where you can check the progress of running searches
                            </li>
                            <li>
                                <b>Audit</b> - This is a who initiated which searches to create an accountability trail.
                            </li>
                            <li>
                                <b>Account</b> - In this section you can manage and update your account details like email and password.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- script references -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
