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
                                    <h3>Security</h3>
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
                                    <h4 class="card-title">2-step verification </h4>
                                </div>
                                <div class="card-body">
                                    <div class="verify-content ">
                                        <div class="d-flex align-items-center">
                                            <span class="me-3 icon-circle bg-primary text-white"><i
                                                    class="ri-smartphone-line"></i></span>
                                            <div class="primary-number">
                                                <p class="mb-0"><strong>+xxx xxxxxxxx60</strong></p>
                                                <small>Keep your primary phone number up-to-date</small>
                                                <br>
                                                <span class="text-success">Required</span>
                                            </div>
                                        </div>
                                        <button class=" btn btn-primary disabled">Manage</button>
                                    </div>
                                    <hr class="dropdown-divider my-4">
                                    <div class="verify-content">
                                        <div class="d-flex align-items-center">
                                            <span class="me-3 icon-circle bg-primary text-white"><i
                                                    class="ri-mail-line"></i></span>
                                            <div class="primary-number">
                                                <p class="mb-0"><strong>helenahough22@mail.com</strong></p>
                                                <small>Keep your primary email up-to-date</small>
                                                <br>
                                                <span class="text-success">Required</span>
                                            </div>
                                        </div>
                                        <button class=" btn btn-primary disabled">Manage</button>
                                    </div>
                                    <hr class="dropdown-divider my-4">
                                    <div class="verify-content">
                                        <div class="d-flex align-items-center">
                                            <span class="me-3 icon-circle bg-primary text-white"><i
                                                    class="ri-key-line"></i></span>
                                            <div class="primary-number">
                                                <p class="mb-0"><strong>*************</strong></p>
                                                <small>You can change your password</small>
                                                <br>
                                                <span class="text-success">Required</span>
                                            </div>
                                        </div>
                                        <button class=" btn btn-primary disabled">Manage</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Identity verification </h4>
                                </div>
                                <div class="card-body">
                                    <div class="verify-content">
                                        <div class="d-flex align-items-center">
                                            <span class="me-3 icon-circle bg-primary text-white"><i
                                                    class="ri-lock-password-line"></i></span>
                                            <div class="primary-number">
                                                <p class="mb-0">xxx xxxxx xxx40</p>
                                                <small>Social Security Number</small>
                                                <br>
                                                <span class="text-success">Verified</span>
                                            </div>
                                        </div>
                                        <button class=" btn btn-primary disabled" data-toggle="modal"
                                            data-target="#idCardModal">Manage</button>
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
<div class="modal fade" id="idCardModal" tabindex="-1" aria-labelledby="idCardModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="idCardModalLabel">Upload your ID card</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="https://intez-html.vercel.app/verify-step-3.html" class="identity-upload">

                    <div class="identity-content">
                        <span>(Driving License or Government ID card)</span>

                        <p>Uploading your ID helps as ensure the safety and security of your founds</p>
                    </div>

                    <div class="form-group">
                        <label class="me-sm-2">Upload Front ID </label>
                        <span class="float-right">Maximum file size is 2mb</span>
                        <div class="file-upload-wrapper" data-text="front.html">
                            <input name="file-upload-field" type="file" class="file-upload-field">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="me-sm-2">Upload Back ID </label>
                        <span class="float-right">Maximum file size is 2mb</span>
                        <div class="file-upload-wrapper" data-text="back.html">
                            <input name="file-upload-field" type="file" class="file-upload-field">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" data-toggle="modal"
                    data-target="#successIdCardModal">Submit</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="successIdCardModal" tabindex="-1" aria-labelledby="successIdCardModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successIdCardModalLabel">Success</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="auth-form">
                    <div class="card-body">
                        <form action="https://intez-html.vercel.app/verify-step-2.html" class="identity-upload">
                            <div class="identity-content">
                                <span class="icon"><i class="icofont-email"></i></span>
                                <h5>Identity Verified</h5>
                                <p>Congrats! your identity has been successfully verified and your investment limit
                                    has been increased.</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'inc/footer.html'; ?>
