<?php require_once("includes/authentication.php") ?>
<?php require_once("includes/dashboard_header.php") ?>
<?php require_once("includes/dashboard_sidebar.php") ?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="row" style="justify-content: space-between !important;">
            </div>
            <!-- <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12 text-center">
                            <button type="button" class="btn btn-lg btn-block mb-3" id="third" style="background-color: rgb(232,10, 42);color:white; ">LOCAL TRANSFERS</button>
                            <button type="button" class="btn btn-secondary btn-lg btn-block" style="margin-top:-5px;">OTHER BANK TRANSFER</button>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Local transfer of funds we charge $10 for a clumsy local event</h4>
                        <form class="form-sample" id="sendmoney" method="post" onsubmit="modalPopUp()" action="javascript:;">
                            <p class="card-description">
                                Personal info
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label style="margin-bottom:8px">Select Account Type</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="account_type" required>
                                                <option value="current">Current</option>
                                                <option value="savings">Savings</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label style="margin-bottom:8px">Account Number</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="account_number" name="account_number" placeholder="Account Number" required />
                                            <span id="acct_no_err" style="color:red; font-size:10px;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label style="margin-bottom:8px">FullName</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="" id="fullname" readonly name="fullname" placeholder="FullName" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label style="margin-bottom:8px">Amount</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="amount" placeholder="Amount" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="loader"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label style="margin-bottom:8px">Select Bank</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="select_bank" required>
                                            <option value="Benchmark Bank">Benchmark Bank</option>
                                            <option value="Standard Chartered">Standard Chartered</option>
                                            <option value="BOA">BOA</option>
                                            <option value="Wells Fargo">Wells Fargo</option>
                                            <option value="Barclays">Barclays</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label style="margin-bottom:8px">Swift Code</label>
                                    <div class="col-sm-9">
                                        <input type="number" id="swift_code" value="" readonly class="form-control" name="swift_code" placeholder="Swift Code" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label style="margin-bottom:8px">IBAN code</label>
                                    <div class="col-sm-9">
                                        <input type="number" id="iban_code" value="" readonly class="form-control" name="iban_code" placeholder="IBAN Code" required />
                                    </div>
                                </div>
                            </div>
                            <!-- ///////////////////////////////////////////////////////// -->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label style="margin-bottom:8px">Description</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="description" value="" class="form-control" name="description" placeholder="Description" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label style="margin-bottom:8px">Bank Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="bank_address" value="" class="form-control" name="bank_address" placeholder="Bank Address" required />
                                    </div>
                                </div>
                            </div>
                            <!-- ////////////////////////////////////////////////////////// -->
                            <input type="hidden" name="user_id" value="<?= $user->id ?>">
                            <input type="hidden" name="tx_no" value="<?= uniqid($user->id) ?>">
                            <input type="hidden" name="tx_details" value="BANK TRANSFER">
                            <button class="submit" id="myBtn" style="border: none; border-radius:8px; background-color:rgb(232,10, 42); height:60px; width:200px; color:white;" type="submit">Send</button>


                            <div id="myModal" class="modal">
                                <div class="modal-content">
                                    <span class="close"><span class="pascode">enter a secure passcode</span> &times;</span>
                                    <div class="popup">
                                        <img src=" <?=$company->favicon2 ?>" alt="Benchmark Bank Logo" class="logo" />
                                    </div>
                                    <input type="number" placeholder="enter a secure passcode" name="pin" id="pot" class="pot">
                                    <p class="wrong" id="wrong"></p>
                                    <button class="pot_button" type="button" id="pot_button" onclick="submitData(this)">send</button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>


            <?php require_once("includes/dashboard_footer.php") ?>

            <script>
                $(document).ready(function() {
                    $("#account_number").change(function() {
                        let input = $(this);
                        let val = input.val();
                        if (val.length >= 10) {
                            $(".loader").startLoader(true)
                            $.post(`${site.process}custom`, {
                                case: "verify-account",
                                account_number: val
                            }, function(response) {
                                $(".loader").stopLoader(true)
                                let alldata = isJson(response);
                                console.log(alldata);
                                if (alldata.status == 1) {

                                    document.getElementById('fullname').value = alldata.data.account_holder;
                                    document.getElementById('swift_code').value = alldata.data.swift_code;
                                    document.getElementById('iban_code').value = alldata.data.iban_number;
                                } else {
                                    document.getElementById('acct_no_err').innerHTML = alldata.data.message;
                                }
                            })
                        }
                    })

                });
            </script>
            <script>
                var error_note = document.getElementById("wrong");

                function passCodeError() {
                    error_note.style.display = "block";
                }


                var modal = document.getElementById("myModal");
                var btn = document.getElementById("myBtn");
                var span = document.getElementsByClassName("close")[0];

                function modalPopUp() {
                    modal.style.display = "block";
                }

                span.onclick = function() {
                    modal.style.display = "none";
                }

                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }

                function submitData(button) {
                    if ($('#sendmoney')[0].checkValidity()) {
                        let form = $('#sendmoney').serializeArray();
                        form.push({
                            name: "case",
                            value: 1.7
                        });
                        form.push({
                            name: "formName",
                            value: "debit"
                        });
                        $(button).startLoader(true);
                        $.post(`${site.process}controllers`, form, function(response) {
                            let trans_no = form.filter(num => num.name == 'tx_no');
                            let txno = trans_no.pop().value;
                            $(button).stopLoader(true);
                            const obj = JSON.parse(response);
                            if (!obj.status) {
                                document.getElementById('wrong').innerHTML = obj.message;
                                console.log(response);
                            } else {
                                if(!obj.locked){
                                    toast('your transaction is successful');
                                    swal("Good job!", "You clicked the button!", "success");
                                }
                                setTimeout(function() {
                                    document.location = `http://localhost/banking/fund-tranfer-receipt/${txno}`;
                                }, 3000);
                            }
                        })
                    }

                }
            </script>


            </html>