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

function dashboardCasesTable() {
  global $conn;
  $sql = "SELECT * FROM `cases`  ORDER  BY id DESC LIMIT 5";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>".$row['title']."</td>";
          echo "<td>".$row['user']."</td>";
          echo "<td>".$row['complete']."</td>";
          echo "<tr>";
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
