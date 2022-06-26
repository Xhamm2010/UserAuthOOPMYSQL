<?php
include "Dbh.php";
$obj = new Dbh();
$conn = $obj->connect();
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $sql = "DELETE FROM students
          WHERE id = '$id' ";
  $result = $conn->query($sql);
  if ($result) {
    echo "<script> alert('Record Deleted Successfully');</script> ";
  }else{
    echo "<script> alert('Deletion Failed');</script> ";
  }
}