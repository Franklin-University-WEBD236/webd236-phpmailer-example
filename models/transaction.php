<?php
include_once 'models/db.php';

function findAllTransactions() {
  return adHocQuery('SELECT * FROM transactions');
}
      
function inserTransaction($amount, $subject, $message, $sender, $receiver, $date) {
    global $db;
    $st = $db -> prepare("INSERT INTO transactions (amount, subject, message, sender, receiver, date) VALUES ('$amount', '$subject', '$message', '$sender', '$receiver', '$date')");
    $st -> execute();
    return $st -> fetchAll(PDO::FETCH_ASSOC);
}
function deleteTransaction($id) {
    global $db;
    $st = $db -> prepare("DELETE FROM transactions WHERE id = $id");
    $st -> execute();
    return $st -> fetchAll(PDO::FETCH_ASSOC);
}
function findTransactionsByID($id) {
    global $db;
    $st = $db -> prepare("SELECT * FROM transactions WHERE id = $id");
    $st -> execute();
    return $st -> fetch(PDO::FETCH_ASSOC);
}

?>