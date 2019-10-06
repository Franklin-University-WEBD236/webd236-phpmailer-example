<?php
  include_once "include/util.php";

  function post_index() {
    $output = `sqlite3 money.db3 < money.sql`;
    redirectRelative("index");
  }
?>