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

function getSourceIMG($id) {
  global $conn;
  $sql = "SELECT `img_path` FROM `cases` WHERE `id` = '".$id."' LIMIT 1";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
          return $row["img_path"];
  }
  $conn->close();
    }

function inProgress($id) {
  global $conn;
  $sql = "SELECT `complete` FROM `cases` WHERE `id` = '".$id."' LIMIT 1";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
          return $row["complete"];
  }
  //$conn->close();
    }

    function match($id) {
      global $conn;
      $sql = "SELECT `face_id` FROM `matches` WHERE `case_num` = '".$id."'";
      $matches = array();
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc()) {
               array_push($matches, $row['face_id']);
      }
      return $matches;
      $conn->close();
        }

function matchTable($id) {
    global $conn;
    $sql = "SELECT * FROM `faces` WHERE `ID` = '".$id."'";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>".$row['time']."</td>";
      echo "<td>".$row['location']."</td>";
      echo "<td><a href='".substr($row['img_path'], 5)."'>Match</a></td>";
      echo "<tr>";
    }
    $conn->close();
      }

function getTitle($title) {
  global $conn;
  $sql = "SELECT `title` FROM `cases` WHERE `id` = '".$title."' LIMIT 1";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
          return $row["title"];
  }
  $conn->close();
    }

function getNotes($id) {
  global $conn;
  $sql = "SELECT `notes` FROM `cases` WHERE `id` = '".$id."' LIMIT 1";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
          return $row["notes"];
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
          echo "<td><a href='case.php?id=".$row['id']."'>".$row['title']."</td>";
          echo "<td>".$row['user']."</td>";
          echo "<td>".$status."</td>";
          echo "<tr>";
  }
  //$conn->close();
      }

  function fullCasesTable() {
    global $conn;
    $sql = "SELECT * FROM `cases`  ORDER  BY id DESC";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
      if ($row['complete']==0) {
        $status="in progress";
      }
      else{
        $status=matchCount($row['id']);
      }
            echo "<tr>";
            echo "<td><a href='case.php?id=".$row['id']."'>".$row['title']."</td>";
            echo "<td>".$row['user']."</td>";
            echo "<td>".$status."</td>";
            echo "<tr>";
    }
    $conn->close();
        }


  function addCase($title, $notes, $img_path, $user) {
    global $conn;
    $sql = "INSERT INTO `cases` (`id`, `title`, `notes`, `img_path`, `user`, `creation_time`, `complete`) VALUES (NULL, '".$title."', '".$notes."', '".$img_path."', '".$user."', CURRENT_TIMESTAMP, '0');
";
    $result = $conn->query($sql);
    //$conn->close();
        }

  function jobsTable() {
    global $conn;
    $sql = "SELECT * FROM `cases` WHERE `complete` = 0 ORDER  BY id DESC";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td><a href='case.php?id=".$row['id']."'>".$row['title']."</td>";
            echo "<td>".$row['user']."</td>";
            echo "<td>".$row['creation_time']."</td>";
            echo "<td><div class='loader'></div></td>";
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

  function newCaseID(){
    global $conn;
    $sql = "SELECT `id` FROM `cases` ORDER  BY id DESC LIMIT 1";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
      return ($row["id"]+1);        }
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
