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
                                <a href="#"><i class="glyphicon glyphicon-search"></i> New Case <span class="badge badge-info"></span></a>
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
                                <a href="#"><i class="glyphicon glyphicon-user"></i>&nbsp;Account</a>
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
                    <pgdiv class="pinegrow-ui-helper pghelper-bs3-column">
                        <pgdiv class="pghelper-bs3-column-inner">
                            <pgspan>sm  3</pgspan>
                        </pgdiv>
                    </pgdiv>
                </div>                 
                <!-- /col-3 -->                 
                <div class="col-sm-9">
                    <!-- column 2 -->
                    <a href="#"><strong><h1>New Case</h1></strong></a>
                    <hr>
                    <div class="row">
                        <!-- center left-->
                        <!--/col-->
                        <!--/col-span-6-->
                    </div>
                    <!--/row-->
                    <a href="#"></a>
                    <div class="row">
</div>
                    <pgdiv class="pinegrow-ui-helper pghelper-bs3-column">
                        <pgdiv class="pghelper-bs3-column-inner">
                            <pgspan>sm  9</pgspan>
                        </pgdiv>
                    </pgdiv>
                </div>                 
                <div class="col-sm-9">
                    <!-- column 2 -->
                    <a href="#"></a>
                    <div class="row">
                        <!-- center left-->
                        <!--/col-->
                        <!--/col-span-6-->
                    </div>
                    <!--/row-->
                    <a href="#"></a>
                    <div class="row">
</div>
                    <pgdiv class="pinegrow-ui-helper pghelper-bs3-column">
                        <pgdiv class="pghelper-bs3-column-inner">
                            <pgspan>sm  9</pgspan>
                        </pgdiv>
                    </pgdiv>
                </div>                 
                <!--/col-span-9-->
                <div class="col-md-9">
                    <h3>Case Title:<input class="form-control" placeholder="Title"></h3> 
                    <pgdiv class="pinegrow-ui-helper pghelper-bs3-column">
                        <pgdiv class="pghelper-bs3-column-inner">
                            <pgspan>md  9</pgspan>
                        </pgdiv>
                    </pgdiv>
                </div>
                <div class="col-md-9">
                    <h3>Notes:<textarea class="form-control" rows="3" placeholder="Enter Notes Here"></textarea></h3> 
                    <pgdiv class="pinegrow-ui-helper pghelper-bs3-column">
                        <pgdiv class="pghelper-bs3-column-inner">
                            <pgspan>md  9</pgspan>
                        </pgdiv>
                    </pgdiv>
                </div>
                <div class="col-md-9">
                    <h3>Choose a picture of the individual to upload:<form> 
                            <div class="form-group"> 
</div>                             
                            <div class="form-group"> 
</div>                             
                            <div class="form-group"> 
                                <label for="exampleInputFile" class="control-label">File input</label>                                 
                                <input type="file" id="exampleInputFile">                                  
                            </div>                             
                            <div class="checkbox">                                  
</div>                             
                            <button type="submit" class="btn btn-default">Submit</button>                             
                            <a href="#" class="btn btn-default" role="button">Cancel</a>
                        </form></h3> 
                    <pgdiv class="pinegrow-ui-helper pghelper-bs3-column">
                        <pgdiv class="pghelper-bs3-column-inner">
                            <pgspan>md  9</pgspan>
                        </pgdiv>
                    </pgdiv>
                </div>
            </div>
        </div>
        <!-- /Main -->
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
