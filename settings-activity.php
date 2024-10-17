<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.html'; ?>
<div class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-title">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-xl-4">
                                <div class="page-title-content">
                                    <h3>Activity</h3>
                                    <p class="mb-2">Hello, <?php echo $name; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

 <div class="col-xxl-12 col-xl-12">
                    <div class="settings-menu">
    <a href="settings-profile.php">Profile</a>
    <a href="settings-application.php">Application</a>
    <a href="settings-security.php">Security</a>
    <a href="settings-activity.php">Activity</a>
    <!-- <a href="settings-privacy.html">Privacy</a> -->
    <a href="settings-payment-method.php">Payment Method</a>
<!--     <a href="settings-api.php">API</a>
 -->    <!-- <a href="settings-fees.html">Fees</a> -->
</div>

<div class="row">
                        <div class="col-xxl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Third-Party Applications </h4>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <span class="me-3 icon-circle bg-warning text-white"><i
                                                class="ri-question-answer-line"></i></span>
                                        <div>
                                            <h5 class="mb-0">You haven't authorized any applications yet.
                                            </h5>
                                            <p>After connecting an application with your account, you can
                                                manage or revoke its access here.</p>
                                            <a class="btn btn-primary disabled">Authorize now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                   <h4 class="card-title">Web Sessions</h4>
                                   <small>These sessions are currently signed in to your account. Sign out all other sessions</small>
                                </div>
                                <div class="card-body">
                                   <div class="table-responsive table-icon">
                                      <table class="table">
                                         <thead>
                                            <tr>
                                               <th>Signed In</th>
                                               <th>Browser</th>
                                               <th>IP Address</th>
                                               <th>Near</th>
                                               <th>Current</th>
                                            </tr>
                                         </thead>
                                         <tbody>
                                            <tr>
                                               <td>1 day ago</td>
                                               <td>Chrome (Windows)</td>
                                               <td>250.364.239.254</td>
                                               <td>United States, Florida</td>
                                               <td><span><i class="ri-check-line text-success me-1"></i></span><span><i class="ri-close-line text-danger"></i></span></td>
                                            </tr>
                                            <tr>
                                               <td>1 day ago</td>
                                               <td>Chrome (Windows)</td>
                                               <td>250.364.239.254</td>
                                               <td>United States, Florida</td>
                                               <td><span><i class="ri-check-line text-success me-1"></i></span><span><i class="ri-close-line text-danger"></i></span></td>
                                            </tr>
                                            <tr>
                                               <td>1 day ago</td>
                                               <td>Chrome (Windows)</td>
                                               <td>250.364.239.254</td>
                                               <td>United States, Florida</td>
                                               <td><span><i class="ri-check-line text-success me-1"></i></span><span><i class="ri-close-line text-danger"></i></span></td>
                                            </tr>
                                         </tbody>
                                      </table>
                                   </div>
                                </div>
                             </div>
                             <div class="card">
                                <div class="card-header">
                                   <h4 class="card-title">Confirmed Devices</h4>
                                   <small>These devices are currently allowed to access your account. Remove all other devices</small>
                                </div>
                                <div class="card-body">
                                   <div class="table-responsive">
                                      <table class="table">
                                         <thead>
                                            <tr>
                                               <th>Confirmed</th>
                                               <th>Browser</th>
                                               <th>IP Address</th>
                                               <th>Near</th>
                                               <th>Current</th>
                                            </tr>
                                         </thead>
                                         <tbody>
                                            <tr>
                                               <td>1 day ago</td>
                                               <td>Chrome (Windows)</td>
                                               <td> 250.364.239.254</td>
                                               <td>United States, Florida</td>
                                               <td><span><i class="ri-check-line text-success me-1"></i></span><span><i class="ri-close-line text-danger"></i></span></td>
                                            </tr>
                                            <tr>
                                               <td>8 days ago</td>
                                               <td>Chrome (Windows)</td>
                                               <td> 250.364.239.254</td>
                                               <td>United States, Florida</td>
                                               <td><span><i class="ri-check-line text-success me-1"></i></span><span><i class="ri-close-line text-danger"></i></span></td>
                                            </tr>
                                            <tr>
                                               <td>15 days ago</td>
                                               <td>Chrome (Windows)</td>
                                               <td> 250.364.239.254</td>
                                               <td>United States, Florida</td>
                                               <td><span><i class="ri-check-line text-success me-1"></i></span><span><i class="ri-close-line text-danger"></i></span></td>
                                            </tr>
                                         </tbody>
                                      </table>
                                   </div>
                                </div>
                             </div>
                             <div class="card">
                                <div class="card-header">
                                   <h4 class="card-title">Account Activity</h4>
                                   <small>Recent activity on your account.</small>
                                </div>
                                <div class="card-body">
                                   <div class="table-responsive">
                                      <table class="table">
                                         <thead>
                                            <tr>
                                               <th>Action</th>
                                               <th>Source</th>
                                               <th>IP Address</th>
                                               <th>Location</th>
                                               <th>When</th>
                                            </tr>
                                         </thead>
                                         <tbody>
                                            <tr>
                                               <td>verified second factor</td>
                                               <td>api</td>
                                               <td>157.119.239.254</td>
                                               <td>United States</td>
                                               <td><a href="#">about 1 hour ago</a></td>
                                            </tr>
                                            <tr>
                                               <td>verified second factor</td>
                                               <td>api</td>
                                               <td>157.119.239.254</td>
                                               <td>United States</td>
                                               <td><a href="#">about 2 hours ago</a></td>
                                            </tr>
                                            <tr>
                                               <td>second factor failure</td>
                                               <td>api</td>
                                               <td>157.119.239.254</td>
                                               <td>United States</td>
                                               <td><a href="#">about 2 hours ago</a></td>
                                            </tr>
                                            <tr>
                                               <td>device confirmation completed</td>
                                               <td>web</td>
                                               <td>157.119.239.254</td>
                                               <td>United States</td>
                                               <td><a href="#">1 day ago</a></td>
                                            </tr>
                                            <tr>
                                               <td>signin</td>
                                               <td>web</td>
                                               <td>157.119.239.254</td>
                                               <td>United States</td>
                                               <td><a href="#">1 day ago</a></td>
                                            </tr>
                                            <tr>
                                               <td>verified second factor</td>
                                               <td>web</td>
                                               <td>157.119.239.254</td>
                                               <td>United States</td>
                                               <td><a href="#">1 day ago</a></td>
                                            </tr>
                                            <tr>
                                               <td>signout</td>
                                               <td>web</td>
                                               <td>157.119.239.214</td>
                                               <td>United States</td>
                                               <td><a href="#">8 days ago</a></td>
                                            </tr>
                                            <tr>
                                               <td>signin</td>
                                               <td>web</td>
                                               <td>157.119.239.214</td>
                                               <td>United States</td>
                                               <td><a href="#">8 days ago</a></td>
                                            </tr>
                                            <tr>
                                               <td>verified second factor</td>
                                               <td>web</td>
                                               <td>157.119.239.214</td>
                                               <td>United States</td>
                                               <td><a href="#">8 days ago</a></td>
                                            </tr>
                                            <tr>
                                               <td>signout</td>
                                               <td>api</td>
                                               <td>157.119.239.214</td>
                                               <td>United States</td>
                                               <td><a href="#">8 days ago</a></td>
                                            </tr>
                                            <tr>
                                               <td>signout</td>
                                               <td>api</td>
                                               <td>157.119.239.214</td>
                                               <td>United States</td>
                                               <td><a href="#">8 days ago</a></td>
                                            </tr>
                                            <tr>
                                               <td>device confirmation completed</td>
                                               <td>web</td>
                                               <td>157.119.239.214</td>
                                               <td>United States</td>
                                               <td><a href="#">8 days ago</a></td>
                                            </tr>
                                            <tr>
                                               <td>signin</td>
                                               <td>web</td>
                                               <td>157.119.239.214</td>
                                               <td>United States</td>
                                               <td><a href="#">8 days ago</a></td>
                                            </tr>
                                            <tr>
                                               <td>verified second factor</td>
                                               <td>web</td>
                                               <td>157.119.239.214</td>
                                               <td>United States</td>
                                               <td><a href="#">8 days ago</a></td>
                                            </tr>
                                            <tr>
                                               <td>signout</td>
                                               <td>api</td>
                                               <td>157.119.239.214</td>
                                               <td>United States</td>
                                               <td><a href="#">15 days ago</a></td>
                                            </tr>
                                            <tr>
                                               <td>verified second factor</td>
                                               <td>web</td>
                                               <td>157.119.239.214</td>
                                               <td>United States</td>
                                               <td><a href="#">15 days ago</a></td>
                                            </tr>
                                            <tr>
                                               <td>signin</td>
                                               <td>web</td>
                                               <td>157.119.239.214</td>
                                               <td>United States</td>
                                               <td><a href="#">15 days ago</a></td>
                                            </tr>
                                            <tr>
                                               <td>signout</td>
                                               <td>api</td>
                                               <td>157.119.239.214</td>
                                               <td>United States</td>
                                               <td><a href="#">15 days ago</a></td>
                                            </tr>
                                            <tr>
                                               <td>verified second factor</td>
                                               <td>web</td>
                                               <td>23.106.249.39</td>
                                               <td>Singapore</td>
                                               <td><a href="#">15 days ago</a></td>
                                            </tr>
                                            <tr>
                                               <td>verified second factor</td>
                                               <td>api</td>
                                               <td>157.119.239.214</td>
                                               <td>United States</td>
                                               <td><a href="#">15 days ago</a></td>
                                            </tr>
                                            <tr>
                                               <td>phone verified</td>
                                               <td>api</td>
                                               <td>157.119.239.214</td>
                                               <td>United States</td>
                                               <td><a href="#">15 days ago</a></td>
                                            </tr>
                                            <tr>
                                               <td>phone added</td>
                                               <td>api</td>
                                               <td>157.119.239.214</td>
                                               <td>United States</td>
                                               <td><a href="#">15 days ago</a></td>
                                            </tr>
                                            <tr>
                                               <td>signin</td>
                                               <td>api</td>
                                               <td>157.119.239.214</td>
                                               <td>United States</td>
                                               <td><a href="#">15 days ago</a></td>
                                            </tr>
                                         </tbody>
                                      </table>
                                   </div>
                                </div>
                             </div>


                            <div class="card transparent">
                                <div class="card-header">
                                    <h4 class="card-title">Close Account</h4>
                                </div>
                                <div class="card-body">
                                    <p>Withdraw funds and close your BOH account - <span class="text-danger">this
                                            cannot be undone</span></p>
                                    <a href="#" class="btn btn-danger">Close Account</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include 'inc/footer.html'; ?>
