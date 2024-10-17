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
                                    <h3>Payment Method</h3>
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
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add a payment method </h4>
                                </div>
                                <div class="card-body">
                                    <div class="verify-content">
                                        <div class="d-flex align-items-center">
                                            <span class="me-3 icon-circle bg-primary text-white"><i
                                                    class="ri-bank-line"></i></span>
                                            <div class="primary-number">
                                                <h5 class="mb-0">Bank of America</h5>
                                                <small>Bank **************5421</small>
                                                <br>
                                                <span class="text-success">Verified</span>
                                            </div>
                                        </div>
                                        <button class=" btn btn-outline-primary">Manage</button>
                                    </div>
                                    <hr class="dropdown-divider my-4">
                                    <div class="verify-content">
                                        <div class="d-flex align-items-center">
                                            <span class="me-3 icon-circle bg-primary text-white"><i
                                                    class="ri-mastercard-line"></i></span>
                                            <div class="primary-number">
                                                <h5 class="mb-0">Master Card</h5>
                                                <small>Credit Card *********5478</small>
                                                <br>
                                                <span class="text-success">Verified</span>
                                            </div>
                                        </div>
                                        <button class=" btn btn-outline-primary">Manage</button>
                                    </div>

                                    <div class="mt-5 text-center">
                                        <button type="button" class="btn btn-primary m-2" data-toggle="modal"
                                            data-target="#addBank">Add New Bank</button>
                                        <button type="button" class="btn btn-primary m-2" data-toggle="modal"
                                            data-target="#addCard">Add New Card</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="addBank" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add bank account</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="https://intez-html.vercel.app/verify-step-6.html" class="identity-upload">
                    <div class="row g-3">
                        <div class="col-xl-12">
                            <label class="form-label">Routing number </label>
                            <input type="text" class="form-control" placeholder="25487">
                        </div>
                        <div class="col-xl-12">
                            <label class="form-label">Account number </label>
                            <input type="text" class="form-control" placeholder="36475">
                        </div>
                        <div class="col-xl-12">
                            <label class="form-label">Fulll name </label>
                            <input type="text" class="form-control" placeholder="Helena Hough">
                        </div>
                        <div class="col-xl-12">
                            <img src="images/routing.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal"
                    data-target="#successBankAccount">Confirm</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="successBankAccount" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Success</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="auth-form">
                    <div class="card-body">
                        <form action="https://intez-html.vercel.app/verify-step-2.html" class="identity-upload">
                            <div class="identity-content">
                                <span class="icon"><i class="icofont-check"></i></span>
                                <p class="text-dark">Congratulation. Your bank added</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="addCard" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCardLabel">Add card</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="identity-upload">
                    <div class="row g-3">
                        <div class="col-xl-12">
                            <label class="form-label">Name on card </label>
                            <input type="text" class="form-control" placeholder="Helena Hough">
                        </div>
                        <div class="col-xl-12">
                            <label class="form-label">Card number </label>
                            <input type="text" class="form-control" placeholder="5658 4258 6358 4756">
                        </div>
                        <div class="col-xl-4">
                            <label class="form-label">Expiration </label>
                            <input type="text" class="form-control" placeholder="10/22">
                        </div>
                        <div class="col-xl-4">
                            <label class="form-label">CVC </label>
                            <input type="text" class="form-control" placeholder="125">
                        </div>
                        <div class="col-xl-4">
                            <label class="form-label">Postal code </label>
                            <input type="text" class="form-control" placeholder="2368">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal"
                    data-target="#successCard">Submit</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="successCard" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Success</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="auth-form">
                    <div class="card-body">
                        <form action="https://intez-html.vercel.app/verify-step-2.html" class="identity-upload">
                            <div class="identity-content">
                                <span class="icon"><i class="icofont-check"></i></span>
                                <p class="text-dark">Congratulation. Your bank added</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'inc/footer.html';?>