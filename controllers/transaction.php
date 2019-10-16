<?php
include_once "include/util.php";
include_once "models/transaction.php";

function get_list() {
  $transactions = findAllTransactions();
  $balance = 0;
  if(!empty($transactions)){
    foreach($transactions as $t){
      $balance += $t['amount'];
    }
  }
  renderTemplate(
    "views/index.php",
    array(
      'title' => 'My Transactions',
      'transactions' => $transactions,
      'balance' => $balance
    )
  );
}
function get_send() {
  renderTemplate(
    "views/cache_transaction_add.php",
    array(
      'title' => 'My Transactions'
    )
  );
}

?>