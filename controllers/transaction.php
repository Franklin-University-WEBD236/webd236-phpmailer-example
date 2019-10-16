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
  $transaction = array('amount' => '', 'subject' => '', 'message' => '', 'sender' => '', 'receiver' => '', 'date' => date('Y-m-d'));

  renderTemplate(
    "views/cache_transaction_add.php",
    array(
      'operation' => 'send',
      'transaction' => $transaction,
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
    $transaction = array('amount' => $_POST['amount'], 'subject' => $_POST['subject'], 'message' => $_POST['message'], 'sender' => $_POST['sender'], 'receiver' => $_POST['receiver'], 'date' => date('Y-m-d'));

    renderTemplate(
      "views/cache_transaction_add.php",
      array(
        'operation' => 'send',
        'title' => 'My Transactions',
        'transaction' => $transaction
      )
    );
    redirect('../../index');
  } else {
    $transaction = array('amount' => $_POST['amount'], 'subject' => $_POST['subject'], 'message' => $_POST['message'], 'sender' => $_POST['sender'], 'receiver' => $_POST['receiver'], 'date' => date('Y-m-d'));
    renderTemplate(
      "views/cache_transaction_add.php",
      array(
        'operation' => 'send',
        'title' => 'My Transactions',
        'errors' => $errors,
        'transaction' => $transaction

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
  renderTemplate(
    "views/cache_transaction_view.php",
    array(
      'title' => 'My Transactions',
      'transaction' => $transactions
    )
  );
}
?>