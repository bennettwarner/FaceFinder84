<?php require "dbconf.php"; ?>
<?php

//Setup Database Connection
$conn = new mysqli($host, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


function getUsername() {
  return $_SESSION['username'];
}

function getID() {
  global $conn;
  $sql = "SELECT id FROM members WHERE username = '".$_SESSION['username']."' LIMIT 1";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
          return $row["id"];
  }
  $conn->close();
    }

function getEmail() {
  global $conn;
  $sql = "SELECT email FROM members WHERE username = '".$_SESSION['username']."' LIMIT 1";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
          return $row["email"];
  }
  $conn->close();
    }
?>
