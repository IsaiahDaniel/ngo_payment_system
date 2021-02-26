<?php

  $db = mysqli_connect('localhost', 'root', '', 'can_ngo');

  if (!$db) {
    echo "sorry can't connect to the database" . mysqli_error($db);
  }


