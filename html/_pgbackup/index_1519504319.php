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
                    <a class="navbar-brand" href="#">FaceFinder 84™</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="login/signup.php"><i class="glyphicon glyphicon-flash"></i> Register</a>
                        </li>
                        <li>
                            <a href="login/main_login.php"><i class="glyphicon glyphicon-lock"></i> Login</a>
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
                <!-- /col-3 -->
                <div class="col-sm-12">
                    <!-- column 2 -->
                    <hr>
                    <div class="row">
                        <!-- center left-->
                        <div class="col-md-6">                                 
                                <!--/panel-body-->
                            </div>
                            <!--tabs-->
                            <div class="panel">
                                <ul class="nav nav-tabs" id="myTab">
                                    <li class="active">
                                        <a href="#profile" data-toggle="tab">Profile</a>
                                    </li>
                                    <li>
                                        <a href="#messages" data-toggle="tab">Messages</a>
                                    </li>
                                    <li>
                                        <a href="#settings" data-toggle="tab">Settings</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active well" id="Page Information">
                                        <h4><i class="glyphicon glyphicon-user"></i></h4> Hello! Welcome to our Profhacks 2018 project
                                        <p>This project is FF84, or FaceFinder 84™. A facial recognition software designed to assist </p>
                                    </div>
                                    <div class="tab-pane well" id="Notices">
                                        <h4><i class="glyphicon glyphicon-comment"></i></h4> There are currently no notices.
                                        <p>Thanks for checking though babe <3</p>
                                    </div>
                                    <div class="tab-pane well" id="settings">
                                        <h4><i class="glyphicon glyphicon-cog"></i></h4> butts butts butts butts butts butts butts , but not butttttts.
                                    </div>
                                </div>
                            </div>
                            <!--/tabs-->
                            <hr>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <i class="glyphicon glyphicon-wrench pull-right"></i>
                                        <h4>Post Request</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <form class="form form-vertical">
                                        <div class="control-group">
                                            <label>Name</label>
                                            <div class="controls">
                                                <input type="text" class="form-control" placeholder="Enter Name">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label>Message</label>
                                            <div class="controls">
                                                <textarea class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label>Category</label>
                                            <div class="controls">
                                                <select class="form-control">
                                                    <option>options</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label></label>
                                            <div class="controls">
                                                <button type="submit" class="btn btn-primary">
                                                    Post
												</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--/panel content-->
                            </div>
                            <!--/panel-->
                        </div>
                        <!--/col-span-6-->
                    </div>
                    <!--/row-->
                    <hr>
                </div>
                <!--/col-span-9-->
            </div>
        </div>
        <!-- /Main -->
        <footer class="text-center">This service is provided by 
            <a href="http://streamforcemedia.com/"><strong>StreamForce Media</strong></a>
        </footer>
        <!-- /.modal -->
        <!-- script references -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html> 
