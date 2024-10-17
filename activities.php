<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.html'; ?>
<div class="content-body">
      <div class="container">
         <div class="page-title">
            <div class="row align-items-center justify-content-between">
               <div class="col-xl-4">
                  <div class="page-title-content">
                     <h3>Transaction History</h3>
                     <p class="mb-2"> <?php  echo $name; ?>, View your recent transactions</p>
                  </div>
               </div>
                </div>
         </div>

         <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="invoice-content">
                               
                                     <!-- // Transaction History  -->
                                     <ul>
                                        <?php 
                                    $sql = "SELECT * FROM transactions WHERE txn_user = '$username' ";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                       while ($row = $result->fetch_assoc()) {
                                           
                                          $txn_name = $row['txn_memo'];
                                          $txn_status = $row['txn_status'];
                                          $curr_amount = $row['txn_amount'];
                                        //   $txn_amount = number_format($curr_amount, 1);
                                          $txn_amount = number_format((float)$curr_amount, 2);
                                          $txn_date = $row['txn_date'];
                                      ?>

                                    <li class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            
                                            <div class="invoice-info">
                                                <h5 class="mb-0"><?php echo $txn_name; ?></h5>
                                                <p><?php echo $txn_date; ?></p>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <h5 class="mb-2"><?php echo $txn_amount; ?></h5>
                                            <?php
                                                  if ($txn_status==1) {
                                                    echo '<span class="text-white bg-danger">Pending</span>';
                                                  } else {
                                                     echo '<span class="text-white bg-success">Sent</span>';
                                                  }  
                                              ?>
                                        </div>
                                    </li>
                                    <?php } }  ?>
                                    

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

</div>
</div>

<?php include 'inc/footer.html'; ?>