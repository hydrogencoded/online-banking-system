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
                                    <h3>Profile</h3>
                                    <p class="mb-2">Welcome, <?php  echo $name; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

 <div class="col-xxl-12 col-xl-12">
                    <div class="settings-menu">
    <a href="settings-profile.php">Profile</a>
     <a href="settings-api.php">API</a>
  <!-- <a href="settings-fees.html">Fees</a> -->
</div>
    <a href="settings-application.php">Application</a>
    <a href="settings-security.php">Security</a>
    <a href="settings-activity.php">Activity</a>
    <!-- <a href="settings-privacy.html">Privacy</a> -->
    <a href="settings-payment-method.php">Payment Method</a>
<div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="card welcome-profile">
                        <div class="card-body">
                            <img src="images/profile/3.png" alt="">
                            <h4>Welcome, <?php  echo $name; ?></h4>
                            <p>View account Information</p>
                            <ul>
                                <li><a href="#"><span class="verified"><i class="ri-check-line"></i></span>Verify
                                        account</a></li>
                                <li><a href="#"><span class="not-verified"><i
                                                class="ri-shield-check-line"></i></span>Two-factor authentication
                                        (2FA)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Download App</h4>
                        </div>
                        <div class="card-body">
                            <div class="app-link">
                                <h5>Get Verified On Our Mobile App</h5>
                                <p>Verifying your identity on our mobile app more secure, faster, and reliable.</p>
                                <a href="#" class="btn btn-primary disabled"><img src="images/android.svg" alt=""></a><br>
                                <div class="mt-3"></div>
                                <a href="#" class="btn btn-primary disabled"><img src="images/apple.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> UPGRADE YOUR ACCOUNT</h4>
                        </div>
                        <div class="card-body">
                            <h5>Account Status :<span class="text-success"> Active <i
                                        class="icofont-warning"></i></span></h5>
                            <p>Upgrade your account to enable maximum usage.</p>
                            <a href="settings-profile.php" class="btn btn-primary disabled">Get Verified</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Earn 30% Commission </h4>
                        </div>
                        <div class="card-body">
                            <p>Refer your friends and earn 30% of their trading fees.</p>
                            <a href="#" class="btn btn-primary disabled">Referral Program</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-12">
                    <div class="card">
                        <div class="card-header flex-row">
                            <h4 class="card-title">Information </h4>
                            <a class="btn btn-primary" href="settings-profile.php">Edit</a>
                        </div>
                        <div class="card-body">
                            <form class="row">
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                    <div class="user-info">
                                        <span>USER ID</span>
                                        <h4>818778</h4>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                    <div class="user-info">
                                        <span>EMAIL ADDRESS</span>
                                        <h4><?php  echo $email; ?></h4>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                    <div class="user-info">
                                        <span>COUNTRY OF RESIDENCE</span>
                                        <h4>United States of America</h4>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                    <div class="user-info">
                                        <span>JOINED SINCE</span>
                                        <h4>20/10/2020</h4>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                    <div class="user-info">
                                        <span>TYPE</span>
                                        <h4>Personal</h4>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php include 'inc/footer.html'; ?>
