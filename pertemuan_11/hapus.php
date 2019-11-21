<?php

include 'config.php';

$id = $_GET['id'];

$kata = "DELETE FROM printer WHERE no='$id'";
$query = mysqli_query($conn, $kata);

if ($query) {
  header('Location: index.php?success=1');
} else {
  header('Location: index.php?success=2');
}

?>
