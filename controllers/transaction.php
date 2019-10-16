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
function post_send() {
  foreach ($_POST as $key => $value) {
    if(empty($value)) {
      $errors[] = $key.' may not be empty';
    }
  }
  if(empty($errors)) {
    inserTransaction($_POST['amount'], $_POST['subject'], $_POST['message'], $_POST['sender'], $_POST['receiver'], $_POST['date']);

    renderTemplate(
      "views/cache_transaction_add.php",
      array(
        'title' => 'My Transactions'
      )
    );
  } else {
    renderTemplate(
      "views/cache_transaction_add.php",
      array(
        'title' => 'My Transactions',
        'errors' => $errors
      )
    );
  }
}
function get_delete($id) {
  deleteTransaction($id);
  redirect('../../index');
}
function get_view($id) {
  $transactions = findTransactionsByID($id);
  print_r($transactions);
  renderTemplate(
    "views/cache_transaction_view.php",
    array(
      'title' => 'My Transactions',
      'transactions' => $transactions
    )
  );
}
?>