<?php

$transactions = array(
    array(
        "id" => 1,
        "debit"=>2,
        "credit"=>3
    ),
    array(
        "id" => 2,
        "debit"=>15,
        "credit"=>10
    )
);
foreach ($transactions as $transaction) {
    $transactionAmount = abs($transaction["debit"] - $transaction["credit"]);
    echo "Transaction " . $transaction["id"] . " amount: " . $transactionAmount . "\n";
}
?>