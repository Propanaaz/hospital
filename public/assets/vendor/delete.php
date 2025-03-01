<?php
    require_once 'connection.php';
    session_start();
    $id=$_GET['id'];
    $sql = "DELETE FROM tbl_user WHERE i_d='$id'";
    if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Record deleted successfully")
      window.location.replace("../../tables-general.php");
      </script>';
    }
?>