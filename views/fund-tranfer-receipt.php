<?php require_once("includes/authentication.php") ?>
<?php require_once("includes/dashboard_header.php") ?>
<?php require_once("includes/dashboard_sidebar.php") ?>
<!-- partial -->
<?php 

$get_transaction_id = $uri;
// see($get_transaction_id->content_id);
$transaction = $generic->getFromTable("transaction", "tx_no={$get_transaction_id->content_id}");
$transaction = reset($transaction);
// see($transaction);

?>
<div class="main-panel">
    <div class="content-wrapper">
    <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto" style="background-color: white;">
              
            <div class="auth-form-light text-left" style="background-image: url('../images/logo-v.png'); background-repeat: no-repeat;background-position: 50% 50%; background-size: contain;height:100%; width: 100%;">
                          <div class="brand-logo" style="height:40px; padding:3px;">
              <h1 style="text-align: center; color:green;">Successful!</h1>
              </div>
             <img src="<?= $uri->site?>images/logo-v1.png" alt="Centralcreditsunion Logo" style="width: 150px; height: 70px" class="logo"/>
              <div class="mb-2">
                  <button type="button" class="btn btn-block auth-form-btn btn-lg mb-3" style="width: 100% !important; margin-top:10px; background-color:#3333ff; color:white;">
                    <h3>Receipt</h3>
                  </button>
                  <h5 style="text-align: center; margin-top:5px">Bank Transfer to <?= $transaction->fullname?></h5>
                  <h5 style="text-align: center; margin-top:2px; color:green;">***Approved***</h5>
                </div>
                <p></p>
                <p><span><b>TID</b></span><span style="float: right;"><b>2082RV21</b></span></p>
                <p><span><b>TNX TID</b></span><span style="float: right;"><b>2058UA67</b></span></p>
                <p><span><b>VID</b></span><span style="float: right;"><b>2UP1T011</b></span></p>
                <p><span><b>WID</b></span><span style="float: right;"><b>85681550</b></span></p>
                <p><span><b>REF</b></span><span style="float: right;"><b><?= $transaction->tx_no?></b></span></p>
                <p style="font-size:11px"><span><b>PAYMENT METHOD</b></span><span style="float: right;"><b><?= $transaction->tx_details?></b></span></p>
                <p style="font-size:12px"><span><b>DESCRIPTION</b></span></br><span><b><?= $transaction->description?></b></span></p>
                <p><span><b>DATE</b></span><span style="float: right;"><b><?= $transaction->date?></b></span></p>
                <p></p>
                
                <div class="mb-2">
                    <h5 style="text-align: center; margin-top:5px">***************</h5>
                    <h5 style="text-align: center; margin-top:2px; color:green;">&#163;<?= $transaction->amount?></h5>
                    <h5 style="text-align: center; margin-top:5px">***************</h5>
                </div>
                <!-- <div class="mb-2">  
                    <p><span style="color: white;">DATE</span><span style="float: right;"><a href="#">print</a></span></p>
                </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>

    <!-- content-wrapper ends -->
    <?php require_once("includes/dashboard_footer.php") ?>

    </html>

