<?php require_once("includes/dashboard_header.php") ?>
<?php require_once("includes/dashboard_sidebar.php") ?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="row" style="justify-content: space-between !important;">
            </div>
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create Bank account</h4>
                        <form class="form-sample">
                            <p class="card-description">
                                Personal info
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <!-- <label class="col-sm-3 col-form-label">Select Account Type</label> -->
                                        <div class="col-sm-9">
                                            <select class="form-control">
                                                <option>Select Account Type</option>
                                                <option>Savings</option>
                                                <option>Current</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <!-- <label class="col-sm-3 col-form-label">First Name</label> -->
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="FirstName" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <!-- <label class="col-sm-3 col-form-label">First Name</label> -->
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="LastName" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <!-- <label class="col-sm-3 col-form-label">Last Name</label> -->
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Account Number" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <!-- <label class="col-sm-3 col-form-label">Last Name</label> -->
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Pin" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <!-- <label class="col-sm-3 col-form-label">Bank Address</label> -->
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Login ID" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <!-- <label class="col-sm-3 col-form-label">Bank Address</label> -->
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Swift Code" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <!-- <label class="col-sm-3 col-form-label">Bank Address</label> -->
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="IBAN Code" />
                                    </div>
                                </div>
                            </div>
                        </form>
                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                        <!-- <button type="submit" class="btn btn-primary btn-lg btn-block mb-3 modal-open" data-id="demo-modal">Send</button> -->
                        <!-- <button>Display Modal</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- content-wrapper ends -->
    <?php require_once("includes/dashboard_footer.php") ?>
   

    </html>