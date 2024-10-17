<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.html'; ?>

<?php
 // Get form data
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $acct = $_POST['acct'];
    $rtn = $_POST['rtn'];
    $memo = $_POST['memo'];
    $amount = $_POST['amount'];
    
    $status = 1; // Setting status to 1
    $date = date("Y-m-d H:i:s"); // Current timestamp
 

 // Prepare SQL statement to insert data
 $stmt = $conn->prepare("INSERT INTO transactions (txn_user, txn_acct, txn_rtn, txn_memo, txn_amount, txn_status, txn_date) VALUES (?, ?, ?, ?, ?, ?, ?)");

 if (!$stmt) {
     die("Prepare failed: " . $conn->error);
 }

 // Bind parameters
 $stmt->bind_param("ssssids", $username, $acct, $rtn, $memo, $amount, $status, $date);

 // Execute the statement
 if (!$stmt->execute()) {
     die("Execute failed: " . $stmt->error);
 }

 

 // Close statement
 $stmt->close();

  // Now update the user's account balance
  $update_stmt = $conn->prepare("UPDATE user SET current_amount = current_amount - ? WHERE username = ?");
    
  if (!$update_stmt) {
      die("Prepare failed: " . $conn->error);
  }

  // Bind parameters
  $update_stmt->bind_param("ds", $amount, $username);

  // Execute the update statement
  if (!$update_stmt->execute()) {
      die("Execute failed: " . $update_stmt->error);
  }

  // Close the update statement
  $update_stmt->close();

  echo "<script>alert('Your Transaction is now processing'); window.location.href = 'dashboard.php';</script>";
 }
?>
           

<div class="content-body">
      <div class="container">
         <div class="page-title">
            <div class="row align-items-center justify-content-between">
               <div class="col-xl-4">
                        <div class="page-title-content">
                                    <h3>Transfer Funds</h3>
                                    <p class="mb-2">Transfer money into other accounts </p>
                                </div>
                            </div>
                        </div>
                

                <div class="row">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Transfer Funds </h4>
                            <!-- <div class="btn-group"><a href="#" class="btn btn-primary">Save Beneficiary</a></div> -->
                        </div>
                        <div class="card-body">
                            <form class="invoice-form" action="" method="POST">

                            
                                    <div class="row justify-content-between ">
                                        
                                            <div class="mb-3 col-xl-6 "><label class="form-label">Account Number</label><input
                                                    name="acct" type="number" class="form-control" placeholder="1234567890" required="">
                                            </div>
                                            <div class="mb-3 col-xl-6"><label class="form-label">Routing Number</label><input
                                                   name="rtn" type="number" class="form-control" placeholder="123456789"  maxlength="12" required>
                                            </div>

                                            <div class="mb-3"><label class="form-label">Memo</label><input
                                                   name="memo" type="text" class="form-control" placeholder= "Transfer to *****" required="">
                                            </div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="mb-3 col-xl-6"><label class="form-label">Amount</label><input
                                               name="amount" type="number" class="form-control" placeholder="$100" required=""></div>

                                        <div class=" mb-3 col-xl-6"><label class="form-label">Transfer From</label><input
                                                type="text" class="form-control" readonly placeholder="My Checkings Account *0233"></div>
                                                                           </div>
                                    
                                    <div class="add-reset d-flex justify-content-between">
                                        <input type="submit" name="send" class="btn btn-primary"><span><i class="ri-send-plane-2-lines"></i></span></div>
                                </form>
                        </div>
                    </div>
                </div>


                <div class="col-xl-4">
                    <div class="card px-4 py-4" >
                        <img src="images/app-promo.svg" width="auto">                        
                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="card px-4 py-4" >
                        <img src="images/caressss.jpg" width="auto">                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>




<?php include 'inc/footer.html'; ?>
