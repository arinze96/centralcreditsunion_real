<?php require_once("includes/authentication.php") ?>
<?php require_once("includes/dashboard_header.php") ?>
<?php require_once("includes/dashboard_sidebar.php") ?>

<?php
$all_loans = $generic->getFromTable("loan", "user_id={$user->id}", 1, 5);
$all_transaction = $generic->getFromTable("transaction", "user_id={$user->id}", 1, 10);

?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper" style="padding-left: 20px;">
        <div class="row" style="margin-top: -10px !important;">
            <div class="col-sm-12">
                <div class="home-tab">
                    
        <div style="width:100%; height:50px; background-color:white; margin-bottom:20px; margin-top:10px;border-radius:10px;">
                  <h4 style="text-align:center; padding:20px; color:grey;">WALLET ADDRESS</h4>
              </div>
                    <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                            <div class="row" style="justify-content: space-between !important; display:none">

                            </div>
                            <div class="row" style="justify-content: space-between !important;">
                                <div class="col-lg-4 d-flex">
                                    <div class="statistics-details d-flex align-items-center justify-content-between">
                                        <div class="row flex-grow">
                                            <div class="col-12 grid-margin stretch-card " id="kazi">
                                                <div class="card card-rounded">
                                                    <div class="card-body">
                                                        <div class="d-sm-flex justify-content-between align-items-start">
                                                            <div>
                                                                <h3 class=" card-title card-title-dash" class="desc" style="text-align: center; font-size:20px !important; margin-bottom:10px;">
                                                                    Centralcreditsunion<br><span style="color: white;">ewsfsffsfwwggfvdvsefd<span id="kli">eeee</span></span></h3>
                                                                <h6 class="card-subtitle card-title-dash" class="desc" style="text-align: center; margin-top:15px; font-size:12px !important; margin-bottom:10px;"><b style="color: black;">Bitcoin Wallet Address</b></h6>
                                                                <h6 class="card-subtitle card-title-dash" class="desc" style="text-align: center; margin-top:15px; font-size:12px !important; margin-bottom:10px;">h37d73r73e3d737737dg37dg3dg3e747</h6> 
                                                                <h6 style="text-align: center; margin-top:15px; font-size:10px;"><a href="mailto:customercare@benchmarkbanking.com" style="text-decoration: none;">customercare@benchmarkbank.com</a></h6>
                                                                <h6 class="card-subtitle card-title-dash" class="desc" style="text-align: center; margin-top:15px; color:green; font-size:12px !important; margin-bottom:10px;">Confirmed</h6>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <?php require_once("includes/dashboard_footer.php") ?>
</div>
</body>

</html>