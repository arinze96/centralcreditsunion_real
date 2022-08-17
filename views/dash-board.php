<?php require_once("includes/authentication.php") ?>
<?php require_once("includes/dashboard_header.php") ?>
<?php require_once("includes/dashboard_sidebar.php") ?>

<?php
// see($user);
$all_loans = $generic->getFromTable("loan", "user_id={$user->id}", 1, 5);
$all_transaction = $generic->getFromTable("transaction", "user_id={$user->id}", 1, 10);
$last_transaction = $generic->getFromTable("transaction", "user_id={$user->id}",1);
$grouped = array_group($all_transaction, "tx_type");
$creditline = $grouped['credit'];
$no_of_creditline = count($grouped['credit']);
$last_credit = $creditline[$no_of_creditline - 1];
// see($all_loans);

$debit = $credit = 0;
if (isset($grouped['credit'])) $credit = array_sum(array_column($grouped["credit"], "amount"));
if (isset($grouped['debit'])) $debit = array_sum(array_column($grouped["debit"], "amount"));
// see($grouped['debit']);



?>
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper" style="padding-left: 20px;">
    <div class="row" style="margin-top: -10px !important;">
      <div class="col-sm-12">
        <div class="home-tab">
          <div class="tab-content tab-content-basic">
              <div style="width:100%; height:50px; background-color:white; margin-bottom:20px;border-radius:10px;">
                  <h4 style="text-align:center; padding:20px; color:grey;">DASHBOARD </h4>
              </div>
            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
              <div class="row" style="justify-content: space-between !important; display:none">

              </div>
              <div class="row" style="justify-content: space-between !important;">
                <div class="col-lg-4 d-flex">
                  <div class="statistics-details d-flex align-items-center justify-content-between">
                    <div class="row flex-grow">
                      <div class="col-12 grid-margin stretch-card " id="kazi">
                        <div class="card card-rounded">
                          <!-- <img src="images/img/Benchmark-Bank-Logo-Color.431cb650a123.svg" alt="Benchmark Bank Logo" class="logo"/> -->
                          <div class="card-body">
                            <div class="d-sm-flex justify-content-between align-items-start">
                              <div>
                                <h3 class=" card-title card-title-dash" class="desc" style="text-align: center; font-size:20px !important; margin-bottom:10px;">
                                    <?= $user->first_name ?>&nbsp; <?= $user->last_name ?><br><span style="color: white;">ewsfsffsfwwggfvdvsefd<span id="kli">eeee</span></span></h3>
                                <img src="<?= $user->picture_ref ?>" alt="image" style="border-radius: 48%; margin:auto; display:block; width:80px;height: 80px;" />
                                <h6 class="card-subtitle card-title-dash" class="desc" style="text-align: center; font-size:12px !important; margin-bottom:10px;"><b style="color: black;">Greetings <?= $user->first_name ?>&nbsp; <?= $user->last_name ?>, this is your control panel </b></h6>
                                <h6 class="card-subtitle card-title-dash" class="desc" style="text-align: center; font-size:12px !important; margin-bottom:10px;"><?= $user->account_type ?></h6>
                                <h6 class="card-subtitle card-title-dash" class="desc" style="text-align: center; font-size:12px !important; margin-bottom:10px;">Login ID: <?= $user->username ?></h6>
                                <h6 class="card-subtitle card-title-dash" class="desc" style="text-align: center; color:green; font-size:12px !important; margin-bottom:10px;">Account:<?= $user->confirmed == 0 ? "<span style='color:green'>Unverified</span>" : "Confirmed" ?></h6>
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
                <div class="col-lg-4 d-flex">
                  <div class="statistics-details d-flex align-items-center justify-content-between">
                    <div class="row flex-grow">
                      <div class="col-12 grid-margin stretch-card" id="kaz">
                        <div class="card card-rounded">
                          <div class="card-body">
                            <div class="d-sm-flex justify-content-between align-items-start">
                              <div>
                                <h3 class="card-title card-title-dash">Total <span>Current Balance<br> <span style="color: white;">Account csfffcdcsdvsdvscvdsBalance</span></h3>
                                <p class="card-subtitle card-subtitle-dash">Account Type: <span style="font-size: 13px;"><?= $user->account_type ?></p>
                              </div>
                              <div>
                              </div>
                            </div>
                            <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                              <div class="d-sm-flex align-items-center mt-4 justify-content-between">
                                <h2 class="me-2 fw-bold">&#163; <?= $fmn->format($credit - $debit) ?></h2>
                                <!--<h6 class="me-2">USD</h6>-->
                                <!-- <h6 class="text-success">(+1.37%)</h6> -->
                              </div>
                              <div class="me-3">
                                <div id="marketing-overview-legend"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 d-flex ">
                  <div class="statistics-details d-flex align-items-center justify-content-between">
                    <div class="row flex-grow">
                      <div class="col-12 grid-margin stretch-card" id="kaz">
                        <div class="card card-rounded">
                          <div class="card-body">
                            <div class="d-sm-flex justify-content-between align-items-start">
                              <div>
                                <h3 class="card-title card-title-dash">Last Deposit <br> <span style="color: white;">l MonthlyAccount csfffcdcsdvsdsdvscvBalance</span> </h3>
                                <p class="card-subtitle card-subtitle-dash">Account Type: <span style="font-size: 13px;"><?= $user->account_type ?></p>
                              </div>
                              <div>
                              </div>
                            </div>
                            <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                              <div class="d-sm-flex align-items-center mt-4 justify-content-between">
                                <h2 class="me-2 fw-bold">&#163; <?= $fmn->format($last_credit->amount) ?></h2>
                                <!--<h6 class="me-2">USD</h6>-->
                                <!-- <h6 class="text-success">(+1.37%)</h6> -->
                              </div>
                              <div class="me-3">
                                <div id="marketing-overview-legend"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <div class="row">
                <div class="col-lg-4 d-flex flex-column">

                  <div class="row ">
                    <div class="col-lg-4 d-flex ">
                      <div class="statistics-details d-flex align-items-center justify-content-between">
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card" id="kaz">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h3 class="card-title card-title-dash">Total Monthly withdrawals <br> <span style="color: white;">csfffcdcsdvsdsdvscvBalance</span> </h3>
                                    <p class="card-subtitle card-subtitle-dash">Account Type: <span style="font-size: 13px;"><?= $user->account_type ?></p>
                                  </div>
                                  <div>
                                  </div>
                                </div>
                                <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                                  <div class="d-sm-flex align-items-center mt-4 justify-content-between">
                                    <h2 class="me-2 fw-bold">&#163; <?= $fmn->format($debit) ?></h2>
                                    <!--<h6 class="me-2">USD</h6>-->
                                    <!-- <h6 class="text-success">(+1.37%)</h6> -->
                                  </div>
                                  <div class="me-3">
                                    <div id="marketing-overview-legend"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                      <div class="card bg-primary card-rounded" style="background-color: rgb(232, 10, 42) !important;">
                        <div class="card-body pb-0">
                          <h4 class="card-title card-title-dash text-white mb-4">Transaction Status Summary</h4>
                          <div class="row">
                            <div class="col-sm-4">
                              <p class="status-summary-ight-white mb-1">Count Value</p>
                              <h4 class="text-info" style="color: white !important;">3507</h2>
                            </div>
                            <div class="col-sm-8">
                              <div class="status-summary-chart-wrapper pb-4">
                                <canvas id="status-summary" style="color: white !important;"></canvas>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                    <?php
                    foreach (array_reverse($all_loans) as $loan => $loan_obj) {
                      // echo "$value_obj->fullname <br>";
                      echo "<div class='col-md-6 col-lg-12 grid-margin stretch-card'>
                      <div class='card bg-primary card-rounded' style='background-color: rgb(232, 10, 42) !important;'>
                        <div class='card-body pb-0'>
                          <h4 class='card-title card-title-dash text-white mb-4'>Loan Request</h4>
                          <p class='loan' style='color:white'>Request ID.................... $loan_obj->tx_no</p> 
                          <p class='loan' style='color:white'>Amount Requested........... &#163; $loan_obj->amount</p> 
                          <p class='loan' style='color:white'>Loan Status........................". ($loan_obj->status == 0 ? 'Unapproved' : '<span style="color:green;">Approved</span>' ) ." </p> 
                          <p class='loan' style='color:white'>Swift Code........................". ($loan_obj->swift_code_approval == 0 ? 'Unapproved' : '<span style="color:green;">Approved</span>' ) ." </p> 
                          <p class='loan' style='color:white; margin-bottom:20px;' >Loan Duration.................... $loan_obj->duration </p> 
                          <div class='row'>
                          
                          </div>
                        </div>
                      </div>
                    </div>";
                    }
                    ?>
                <!--  <div class="row">-->
                <!--    <div class="col-md-6 col-lg-12 grid-margin stretch-card">-->
                <!--      <div class="card card-rounded">-->
                <!--        <div class="card-body">-->
                <!--          <div class="d-flex align-items-center justify-content-between mb-3">-->
                <!--            <h6 class="card-title card-title-dash" style="font-size:10px;"></h4>-->
                <!--            <p class="mb-0"></p>-->
                <!--          </div>-->
                <!--          <ul class="bullet-line-list">-->
                <!--            <li>-->
                <!--              <div class="d-flex justify-content-between">-->
                <!--                <div><span class="text-light-green"></span></div>-->
                <!--                <p></p>-->
                <!--              </div>-->
                <!--            </li>-->
                <!--            <li>-->
                <!--              <div class="d-flex justify-content-between">-->
                <!--                <div><span class="text-light-green"></span></div>-->
                <!--                <p></p>-->
                <!--              </div>-->
                <!--            </li>-->
                <!--            <li>-->
                <!--              <div class="d-flex justify-content-between">-->
                <!--                <div><span class="text-light-green"></span></div>-->
                <!--                <p></p>-->
                <!--              </div>-->
                <!--            </li>-->
                <!--            <li>-->
                <!--              <div class="d-flex justify-content-between">-->
                <!--                <div><span class="text-light-green"></span></div>-->
                <!--                <p></p>-->
                <!--              </div>-->
                <!--            </li>-->
                <!--            <li>-->
                <!--              <div class="d-flex justify-content-between">-->
                <!--                <div><span class="text-light-green"></span></div>-->
                <!--                <p></p>-->
                <!--              </div>-->
                <!--            </li>-->
                <!--          </ul>-->
                <!--          <div class="list align-items-center pt-3">-->
                <!--            <div class="wrapper w-100">-->
                <!--              <p class="mb-0">-->
                <!--              </p>-->
                <!--            </div>-->
                <!--          </div>-->
                <!--        </div>-->
                <!--      </div>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--</div>-->
                <div class="col-lg-12 d-flex flex-column">
                  <div class="row flex-grow">
                    <div class="col-12 grid-margin stretch-card">
                      <div class="card card-rounded">
                        <div class="card-body">
                          <div class="d-sm-flex justify-content-between align-items-start">
                            <div>
                              <h4 class="card-title card-title-dash">Latest Transactions</h4>
                              <!-- <h6 class="card-title card-title-dash" style="color: gray;">Last month</h6> -->
                            </div>
                          </div>
                          <div class="table-responsive  mt-1">
                            <!-- /////////////////////////////////////////////////////////////////////////////////////// -->
                            <table class="table table-striped" id="tbl">
                              <thead>
                                <tr>
                                  <th>
                                    Fullname
                                  </th>
                                  <th>
                                    Bank
                                  </th>
                                  <th>Transction Type</th>
                                  <th>Transaction Status</th>
                                  <th>
                                    Amount
                                  <th>Transaction Code</th>
                                  </th>
                                  <th>
                                    Date
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                foreach ($all_transaction as $value => $value_obj) {
                                  // echo "$value_obj->fullname <br>";
                                  echo "<tr>
                    <td>$value_obj->fullname</td>
                    <td>$value_obj->select_bank <br> <span style='font-size:10px; color:green;'>$value_obj->account_type</span></td>
                    <td> $value_obj->tx_type <br> <span style='font-size:10px;color:green;'>$value_obj->tx_details</span> </td>
                    <td><div class='badge badge-opacity-success'>Completed</div></td>
                    <td>$ $value_obj->amount </td>
                    <td>$value_obj->tx_no</td>
                    <td>$value_obj->date</td>
                  </tr>";
                                }
                                ?>

                              </tbody>
                            </table>
                            <?php
                            foreach ($all_transaction as $value => $value_obj) {
                              // echo "$value_obj->fullname <br>";

                              echo "
                    <div style='width: 100%; justify-content: center;' id='flat'>
                    <div style='width: 100%;  justify-content: center; background-color: #e6f2ff; border-radius:10px;margin-top: 10px;'>
                    <div style='width: 100%;  background-color: #e6f2ff; padding:5px;'>
                    <h6 style='font-size: 10px;'><span>
                    <i class='mdi mdi-file-document menu-icon' style='color:#ffcccc !important;'></i> Vite</span>&nbsp;
                    <span>Product No:</span><span>$value_obj->tx_no</span>&nbsp; <span>$value_obj->date</span>
                    </h6>
                    </div>
                    <div style='width: 100%;  background-color: #e6f2ff; font-size:13px; padding-left: 5px; '>
                    <span style='font-size: 30px; color:green;'>&#163; $value_obj->amount</span><sup></sup>
                    </div>
                    <div style='width: 100%;  background-color: #e6f2ff; font-size:13px; padding: 5px;'>
                    info: $value_obj->description <h4 style='color:red;''>$value_obj->tx_type</h4>
                    </div>
                    <div style='width: 100%;  background-color: #e6f2ff; font-size:13px; padding: 5px;'>
                    <span>$value_obj->date</span> 
                    </div>
                    <div style='width: 100%;  background-color: #e6f2ff; padding: 5px;'>
                    <button style='border: 1px solid yellowgreen; background-color:yellowgreen; color:white; border-radius:8px;'>Good Luck</button>
                    </div>
                    <div style='width: 100%;  background-color: red; margin-top: 10px;'>
                    </div>
                    </div>
                    </div>
                    ";
                            }
                            ?>
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
      </div>
    </div>
  </div>
  <?php require_once("includes/dashboard_footer.php") ?>
  </body>

  </html>