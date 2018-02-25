<?php require "login/loginheader.php"; ?>
<?php require "functions.php"; ?>
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

print_r($_GET);

  echo $_GET['password1'];
  if(!empty($_GET['password1']) && !empty($_GET['password2']) && $_GET['password1']!=$_GET['password2']){
    header('Location: ./account.php?mismatch');
  }
  else {
    global $conn;

    $pw_hash = password_hash($_GET['password1'], PASSWORD_DEFAULT);
    $id = getID();

    $sql = "UPDATE `members` SET `password` = '".$pw_hash."'".emailUpdate($_GET['email'])." WHERE members.id = '".$id."'";
echo $sql;
    $conn->query($sql);
    $conn->close();

  }

?>
