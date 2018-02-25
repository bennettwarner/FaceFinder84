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

  echo $_POST['password1'];
  if(!empty($_POST['password1']) && !empty($_POST['password2']) && $_POST['password1']!=$_POST['password2']){
    header('Location: ./account.php?mismatch');
  }
  else {
    global $conn;

    $pw_hash = password_hash($_POST['password1'], PASSWORD_DEFAULT);
    $id = getID();

    $sql = "UPDATE `members` SET `password` = '".$pw_hash."'".emailUpdate($_POST['email'])." WHERE members.id = '".$id."'";
echo $sql;
    $conn->query($sql);
    $conn->close();

  }

?>
