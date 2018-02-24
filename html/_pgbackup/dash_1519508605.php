<?php require "login/loginheader.php"; ?> 
<?php include "login/dbconfig.php"; ?> 
<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8"> 
        <title>StreamForce Broadcast</title>         
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
                    <a class="navbar-brand" href="#">Welcome to FaceFinder 84™</a> 
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
                                <a href="#"><i class="glyphicon glyphicon-home"></i> Home</a>
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
                                <a href="#"><i class="glyphicon glyphicon-flag"></i>&nbsp;Account</a>
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
                                <a href="#" class="btn btn-primary col-sm-3"> <i class="glyphicon glyphicon-cloud"></i> <br> Cloud</a> 
                                <a href="#" class="btn btn-primary col-sm-3"> <i class="glyphicon glyphicon-cog"></i> <br> Settings </a> 
                                <a href="#" class="btn btn-primary col-sm-3"> <i class="glyphicon glyphicon-question-sign"></i> <br> Help</a> 
                            </div>                             
                            <hr>
                            <div class="panel panel-default"> 
                                <div class="panel-heading"> 
                                    <h4>Recent Cases</h4>
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
                                    <p>Welcome to FF84™. If you would like to create a new case plese select "new case"</p> 
                                    <p>Visit the Bootstrap Playground at <a href="http://bootply.com">Bootply</a> to tweak this layout or discover more useful code snippets.</p> 
                                </div>                                 
                            </div>                             
                            <div class="panel panel-default"> 
                                <div class="panel-heading"> 
                                    <h4>Camera Feeds</h4>
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
