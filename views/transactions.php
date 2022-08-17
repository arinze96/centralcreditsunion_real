<?php require_once("includes/authentication.php") ?>
<?php require_once "includes/dashboard_header.php" ?>
<?php require_once "includes/dashboard_sidebar.php" ?>

<?php

$all_transaction = $generic->getFromTable("transaction", "user_id={$user->id}");
// $transaction = reset($transaction);
// see($all_transaction);

?>
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row" id="transasc">
        <div style="width:100%; height:50px; background-color:white; margin-bottom:20px;border-radius:10px;">
                  <h4 style="text-align:center; padding:20px; color:grey;">TRANSACTIONS</h4>
              </div>
      <div class="col-lg-12 grid-margin stretch-card" >
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Transactions Table</h4>
            <p class="card-description">
              Add class <code>.table-striped</code>
            </p>
            <div class="table-responsive">
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
              foreach (array_reverse($all_transaction) as $value => $value_obj) {
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
                    <span style='font-size: 30px; color:green;'>&#163; $value_obj->amount</span>
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
  <!-- content-wrapper ends -->
  <?php require_once "includes/dashboard_footer.php" ?>
  </body>

  </html>