<?php require_once("includes/authentication.php") ?>
<?php require_once("includes/dashboard_header.php") ?>
<?php require_once("includes/dashboard_sidebar.php") ?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto" style="background-color: white;">
              <div style="width: 100%; height:70px;padding-top:10px;">
                <img src="<?=$company->favicon2 ?>" alt="Centralcreditsunion Logo" class="logo" />
              </div>
              <div class="col-lg-4 d-flex">
                <div class="statistics-details d-flex align-items-center justify-content-between">
                  <div class="row flex-grow" style="height:270px;">
                    <div class="col-12 grid-margin stretch-card">
                      <div class="card card-rounded">
                        <div class="card-body">
                          <div class="d-sm-flex justify-content-between align-items-start" style="width:100% !important;">
                            <div class="det">
                              <h3 class=" card-title card-title-dash" class="desc" style="text-align: center; font-size:20px !important; margin-bottom:10px;"><?= $user->first_name ?>&nbsp; <?= $user->last_name ?></h3>
                              <div style="text-align: center;">
                                <img src="<?= $user->picture_ref ?>" alt="image" style="border-radius: 48%; width:80px;height: 80px;" />
                              </div>
                              <h6 class="card-subtitle card-title-dash" class="desc" style="text-align: center; font-size:12px !important; margin-bottom:10px;">Account Holder</h6>
                              <h6 class="card-subtitle card-title-dash" class="desc" style="text-align: center; font-size:12px !important; margin-bottom:10px;">Greetings <?= $user->first_name ?>&nbsp; <?= $user->last_name ?></h6>
                              <h6 class="card-subtitle card-title-dash" class="desc" style="text-align: center; font-size:12px !important; margin-bottom:10px;"><?= $user->account_type ?></h6>
                              <h6 class="card-subtitle card-title-dash" class="desc" style="text-align: center; font-size:12px !important; margin-bottom:10px;">Account Number: <?= $user->account_number ?></h6>
                              <h6 class="card-subtitle card-title-dash" class="desc" style="text-align: center; font-size:12px !important; margin-bottom:10px;">Login ID: <?= $user->username ?></h6>
                            </div>
                            <div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="auth-form-light text-left px-4 px-sm-5">
                <div class="mb-2">
                  <button type="button" class="btn btn-block auth-form-btn btn-lg mb-3" style="width: 100% !important; margin-top:10px; background-color:rgb(232,10, 42); color:white;">
                    <i class="ti-lock me-2" style="margin-left: -18px;"></i><span style="font-size:10px;">Account</span>&nbsp;<span style="font-size:10px;">Suspended</span>
                  </button>
                </div>
                <p></p>
                <h4 style="line-height: 25px; text-align: center;">DEAR CUSTOMER, YOUR ACCOUNT HAS BEEN SUSPENDED AND YOUR TRANSFER CANNOT BE COMPLETED BECAUSE WE NOTICED IT WAS LOGGED IN FROM A DIFFERENT IP LOCATION</h4>
                <p></p>

                <div class="mb-2 mt-5">
                  <h6 style="text-align: center; margin-top:2px; font-size:12px;">Contact our frontline staff for assistance at </h6>
                  <h6 style="text-align: center; margin-top:5px; font-size:10px;"><a href="mailto:customercare@centralcreditsunion.com">customercare@centralcreditsunion.com</a></h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
  </div>

  <!-- content-wrapper ends -->
  <?php require_once("includes/dashboard_footer.php") ?>

  </html>