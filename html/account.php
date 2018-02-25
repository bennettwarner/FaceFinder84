<?php require "login/loginheader.php"; ?>
<?php require "./functions.php"; ?>
<?php
function emailUpdate($email)
{
if (!empty($email)){
  return ", `email` = '".$email."'";
}
else {
  return "";
}
}

print_r($_POST);
$passwordError = false;
if(isset($_POST['password1']))
{
  echo "<h1>Form lololol</h1>";
  if(!empty($_POST['password1']) && !empty($_POST['password2']) && $_POST['password1']!=$_POST['password2']){
    $passwordError = true;
  }
  else {
    global $conn;

    $pw_hash = password_hash($_POST['password1'], PASSWORD_DEFAULT);
    $id = getID();

    $sql = "UPDATE `members` SET `password` = '".$pw_hash."'".emailUpdate($_POST['email'])." WHERE members.id = '".$id."'";

    $conn->query($sql);
    $conn->close();

  }
}
?>


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
                          <?php
                          if ($passwordError == true) {

                            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Password fields must match</div><div id="returnVal" style="display:none;">false</div>';

                        }?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4>Profile</h4>
                                </div>
                                <div class="panel-body">
                                    <form id="edit-profile" class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <center>
                                    <table cellspacing="10">
                                      <tr>
                                            <td align="right">  <label for="username">Username &nbsp; &nbsp; &nbsp;</label></td>
                                            <td>  <input type="text" class="input-medium disabled" id="username" value="<?php echo getUsername(); ?>" disabled></td>
                                      </tr>
                                      <tr>        <td></td><td align="right"><p class="help-block">Your username cannot be changed.</p><br></td></tr>
                                      <tr>
                                                <td align="right"><label for="email">Email Address &nbsp; &nbsp; &nbsp;</label><br><br></td>
                                                <td><input type="text" class="input-large" id="email" placeholder="<?php echo getEmail(); ?>"><br><br></td>
                                      </tr>
                                      <tr>
                                                <td align="right"><label for="password1">Password &nbsp; &nbsp; &nbsp;</label><br><br></td>
                                                <td><input type="password" class="input-medium" id="password1" placeholder="password" required><br><br></td>
                                      </tr>
                                      <tr>
                                                <td align="right"><label for="password2">Confirm &nbsp; &nbsp; &nbsp;</label><br><br></td>
                                                <td><input type="password" class="input-medium" id="password2" placeholder="password" required><br><br></td>
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
