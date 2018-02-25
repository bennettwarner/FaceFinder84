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
  $sql = "SELECT * FROM `cases`  ORDER  BY id DESC LIMIT 10";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
    if ($row['complete']==0) {
      $status="in progress";
    }
    else{
      $status=matchCount($row['id']);
    }
          echo "<tr>";
          echo "<td><a href='cases.php?id=".$row['id']."'>".$row['title']."</td>";
          echo "<td>".$row['user']."</td>";
          echo "<td>".$status."</td>";
          echo "<tr>";
  }
  $conn->close();
      }

  function matchCount($id) {
    global $conn;
    $sql = "SELECT * FROM `matches` WHERE `case_num` = ".$id;
    $result = $conn->query($sql);
    $count = 0;
    while($row = $result->fetch_assoc()) {
      $count++;
        }
    $conn->close();
    return $count;
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