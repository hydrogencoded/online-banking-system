<?php

include '../dbconnect.php';
// var_dump($_POST);
// Handle transaction approval
if (isset($_POST['txn_rtn'])) {
    $txnRtn = $_POST['txn_rtn'];

    // Update transaction status to approved (txn_status = 2)
    $sql = "UPDATE transactions SET txn_status = 2 WHERE txn_rtn = '$txnRtn'";

    if ($conn->query($sql) === TRUE) {
        echo "Transaction approved successfully";
    } else {
        echo "Error updating transaction status: " . $conn->error;
    }
}
