<?php
  require_once 'connect_db.php';

  $connect = connect_mysql();

  // The code below is a test the DB connection

  $table_name = 'docker_db_table';

  $query = "SELECT * FROM $table_name";

  $response = mysqli_query($connect, $query);
  
  echo "<strong>$table_name: </strong>";

  while($i = mysqli_fetch_assoc($response)) {
    echo "<p>".$i['title']."</p>";
    echo "<p>".$i['body']."</p>";
    echo "<p>".$i['date_created']."</p>";
  }