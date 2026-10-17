<?php
  if ($_REQUEST['id']){
    $id = $_REQUEST['id'];
    $id = (int)$id;
    $conn = new mysqli('localhost', 'root', '', 'legue');
    if ($conn->connect_error){
      die("Connection failed: " . $conn->connect_error);
    }
    else{
      $sql = "DELETE FROM matches WHERE id = ?";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("i", $id);
      if(!($stmt->execute())){
        
      
        echo "Error deleting match: " . $conn->error;
      }
      $stmt->close();
      $conn->close();
      echo "Done";
    }
  }
  else{
    echo "No match ID provided.";
  }
?>