<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.html'; ?>
<div class="content-body">
      <div class="container">
         <div class="page-title">
            <div class="row align-items-center justify-content-between">
               <div class="col-xl-4">
                  <div class="page-title-content">
                     <h3>Welcome, <?php  echo $name; ?> </h3>
                     <p class="mb-2"> <?php  echo $email; ?> </p>
                  </div>
               </div>
                </div>
         </div>
         <div class="row">
            <div class="col-xxl-8 col-xl-6 col-lg-6">
               <div class="card">
                  <div class="card-header">
                     <h4 class="card-title">Balance Details</h4>
                  </div>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-12">
                           <div class="total-balance">
                              <p>Total Balance</p>
                              <h2>$<?php  echo $current_amount; ?> </h2>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                           <div class="balance-stats active">
                              <p>Available Balance</p>
                              <h3>$<?php  echo $current_amount ?> </h3>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                           <div class="balance-stats">
                              <p>Credit Balance</p>
                              <h3>$33,450.00</h3>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                           <div class="balance-stats">
                              <p>Taxes</p>
                              <h3>$0.00</h3>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                           <div class="balance-stats">
                              <p>Debt</p>
                              <h3>$0.00</h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            

            

               <!-- Expenses --> 
            <div class="col-xl-4 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">PARD Progress Bar</h4>
                        </div>
                        <div class="card-body">
                            <div class="budget-content">
                                <ul>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex flex-grow-2">
                                            <div class="budget-icon me-3 mt-1"><img src="images/social/shield.svg"
                                                    alt="" width="40"></div>
                                            <div class="budget-info flex-grow-2 me-3">
                                                <div class="d-flex justify-content-between mb-1">
                                                    <h5 class="mb-1">Level 1 </h5>
                                                    <p class="mb-0"><strong><?php  echo $level; ?> </strong>/ 100</p>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: <?php  echo $level;?>%;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       </li>

                                       <li class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex flex-grow-2">
                                            <div class="budget-icon me-3 mt-1"><img src="images/social/smelllo.svg"
                                                    alt="" width="40"></div>
                                            <div class="budget-info flex-grow-2 me-3">
                                                <div class="d-flex justify-content-between mb-1">
                                                    <h5 class="mb-1">Level 2</h5>
                                                    <p class="mb-0"><strong><?php  echo $level + 28; ?> </strong>/ 100</p>
                                                </div>
                                                <div class="progress">  
                                                    <div class="progress-bar" role="progressbar" style="width: <?php  echo $level + 28;?>%;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       </li>

                                       <li class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex flex-grow-2">
                                            <div class="budget-icon me-3 mt-1"><img src="images/social/smartt.svg"
                                                    alt="" width="40"></div>
                                            <div class="budget-info flex-grow-2 me-3">
                                                <div class="d-flex justify-content-between mb-1">
                                                    <h5 class="mb-1">Level 3</h5>
                                                    <p class="mb-0"><strong><?php  echo $level -15 ; ?> </strong>/ 100</p>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: <?php  echo $level + 15 ;?>%;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       </li>


                                       <li class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex flex-grow-2">
                                            <div class="budget-icon me-3 mt-1"><img src="images/social/skyy.svg"
                                                    alt="" width="40"></div>
                                            <div class="budget-info flex-grow-2 me-3">
                                                <div class="d-flex justify-content-between mb-1">
                                                    <h5 class="mb-1">Level 4</h5>
                                                    <p class="mb-0"><strong><?php  echo $level + 37; ?> </strong>/ 100</p>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: <?php  echo $level + 37;?>%;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       </li>
</ul>
                        </div>
               </div>
                     </div>
               </div>


               <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Transaction History</h4>
                            <a href="activities.php">See more</a>
                        </div>

                        <div class="card-body">
                                          <div class="invoice-content">
                        
                                    <!-- // Transaction History  -->
                                        <ul>
                                        <?php 
                                    $sql = "SELECT * FROM transactions WHERE txn_user = '$username' LIMIT 5";
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
                                              <h5 class="mb-2">$<?php echo $txn_amount; ?> </h5>
                                              
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





            <div class="col-xxl-6 col-xl-6 col-lg-6">
                  <div class="row">
                  <div class="col-xxl-12 col-xl-12 col-lg-12">
                     <div class="credit-card visa">
                        <div class="type-brand">
                           <h4>Debit Card</h4>
                           <img src="images/cc/visa.png" alt="">
                        </div>
                        <div class="cc-number">
                           <h6>5658</h6>
                           <h6>4258</h6>
                           <h6>6358</h6>
                           <h6>4756</h6>
                        </div>
                        <div class="cc-holder-exp">
                           <h5><?php  echo $name; ?></h5>
                           <div class="exp"><span>EXP:</span><strong>12/28</strong></div>
                        </div>
                        <div class="cc-info">
                           <div class="row justify-content-between align-items-center">
                              <div class="col-5">
                                 <div class="d-flex">
                                    <p class="me-3">Status</p>
                                    <p><strong>Active</strong></p>
                                 </div>
                                 <div class="d-flex">
                                    <p class="me-3">Currency</p>
                                    <p><strong>USD</strong></p>
                                 </div>
                              </div>
                              <div class="col-xl-7">
                                 <div class="d-flex justify-content-between">
                                    <div class="ms-3">
                                       <p>Credit Limit</p>
                                       <p><strong>2000 USD</strong></p>
                                    </div>
                                    <div id="circle1"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-12 col-xl-12 col-lg-12">
                     <div class="credit-card payoneer">
                        <div class="type-brand">
                           <h4>Debit Card</h4>
                           <img src="images/cc/payoneer.png" alt="">
                        </div>
                        <div class="cc-number">
                           <h6>5567</h6>
                           <h6>7863</h6>
                           <h6>0216</h6>
                           <h6>0200</h6>
                        </div>
                        <div class="cc-holder-exp">
                           <h5><?php  echo $name; ?></h5>
                           <div class="exp"><span>EXP:</span><strong>09/23</strong></div>
                        </div>
                        <div class="cc-info">
                           <div class="row">
                              <div class="col-5">
                                 <div class="d-flex">
                                    <p class="me-3">Status</p>
                                    <p><strong>Active</strong></p>
                                 </div>
                                 <div class="d-flex">
                                    <p class="me-3">Currency</p>
                                    <p><strong>USD</strong></p>
                                 </div>
                              </div>
                              <div class="col-xl-7">
                                 <div class="d-flex justify-content-between">
                                    <div class="ms-3">
                                       <p>Credit Limit</p>
                                       <p><strong>1500/2000 USD</strong></p>
                                    </div>
                                    <div id="circle3"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                           <img src="images/2d.svg" width="auto">
                            
                        </div>
                    </div>
                </div>

                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                           <img src="images/at.svg" width="auto">
                            
                        </div>
                    </div>
                </div>

                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                           <img src="images/rd.svg" width="auto">
                            
                        </div>
                    </div>
                </div>

                <div class="col-xxl-6 col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Unpaid Bills</h4>
                        </div>
                        <div class="card-body">
                            <div class="unpaid-content">
                                <ul>
                                    <li>
                                        <p class="mb-0">Service</p>
                                        <h5 class="mb-0"> Bi-annual Insurance</h5>
                                    </li>
                                    <li>
                                        <p class="mb-0">Issued</p>
                                        <h5 class="mb-0"> <?php date("Y-m-d H:i:s"); ?></h5>
                                    </li>
                                    <li>
                                        <p class="mb-0">Payment Due</p>
                                        <h5 class="mb-0">10 Days</h5>
                                    </li>
                                    <li>
                                        <p class="mb-0">Paid</p>
                                        <h5 class="mb-0">0.00</h5>
                                    </li>
                                    <li>
                                        <p class="mb-0">Amount to pay</p>
                                        <h5 class="mb-0">$ 532.69</h5>
                                    </li>
                                    <li>
                                        <p class="mb-0">Payment Method</p>
                                        <h5 class="mb-0">Credit Card</h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
       <!---------------------------------Expenses ---------->

       <div class="col-xl-6 col-lg-6 col-md-6">
                    <div id="user-activity" class="card" data-aos="fade-up">
                        <div class="card-header">
                            <h4 class="card-title">Expenses</h4>
                        </div>
                        <div class="card-body">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <canvas id="activity"></canvas>
                        </div>
                    </div>
                </div>
                
                
             </div>
      </div>
   </div>
</div>





<?php include 'inc/footer.html'; ?>
