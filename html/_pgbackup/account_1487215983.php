<?php require "login/loginheader.php"; ?>
<?php include "login/dbconfig.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Bootstrap 3 Admin</title>
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
                    <a class="navbar-brand" href="#">Broadcast Dashboard</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> <?php echo "Blue" ?> <span class="caret"></span></a>
                            <ul id="g-account-menu" class="dropdown-menu" role="menu">
                                <li>
                                    <a href="#">Account Settings</a>
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
                    <a href="#"><strong><i class="glyphicon glyphicon-cog"></i> Account Settings</strong></a>
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
                                    <small>Success</small>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%">
                                            <span class="sr-only">72% Complete</span>
                                        </div>
                                    </div>
                                    <small>Info</small>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                    <small>Warning</small>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                    <small>Danger</small>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <!--/panel-body-->
                            </div>
                            <!--/panel-->
                            <hr>
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
                                        <h4><i class="glyphicon glyphicon-comment"></i></h4> Message ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                                        <p>Quisque mauris augu.</p>
                                    </div>
                                    <div class="tab-pane well" id="settings">
                                        <h4><i class="glyphicon glyphicon-cog"></i></h4> Lorem settings dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                                        <p>Quisque mauris augue, molestie.</p>
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
            <a href="http://streamforcemedia.com/"><strong>StreamForce Media</strong></a>
        </footer>
        <div class="modal" id="addWidgetModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Add Widget</h4>
                    </div>
                    <div class="modal-body">
                        <p>Add a widget stuff here..</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#" data-dismiss="modal" class="btn">Close</a>
                        <a href="#" class="btn btn-primary">Save changes</a>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dalog -->
        </div>
        <!-- /.modal -->
        <!-- script references -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
