<?php
include_once 'models/db.php';

function findAllTransactions() {
  return adHocQuery('SELECT * FROM transactions');
}

?>