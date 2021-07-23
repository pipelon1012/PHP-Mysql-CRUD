<?php
  
include ("db.php");

  if (isset ($_POST['save_task'])){
       
      $title = $_POST['title'];
      $description = $_POST['description'];

      $query = "INSERT INTO task(titulo,description)VALUES($title,$description)";
      mysqli_query($conn,$query);
      

  }

?>