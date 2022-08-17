<?php require_once("includes/authentication.php") ?>
<?php require_once("includes/dashboard_header.php") ?>
<?php require_once("includes/dashboard_sidebar.php") ?>
      <!-- partial -->
      <div class="main-panel" style="box-flex-group: red !important;">
          
        <div class="content-wrapper">
            <div style="width:100%; height:50px; background-color:white; margin-bottom:20px; margin-top:10px;border-radius:10px;">
                  <h4 style="text-align:center; padding:20px; color:grey;">ACCOUNT PROFILE</h4>
              </div>
          <!-- <div class="row"> -->
            <div class="container rounded bg-white">
                <div class="row">
                    <div class="col-md-3 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                          <!-- class="rounded-circle mt-5"  -->
                          <img
                          src="<?= $user->picture_ref?>"  style="width:200px; height:200px;"><span class="font-weight-bold"><?= $user->first_name?>&nbsp; <?= $user->last_name?></span>
                          <span class="text-black-50"><?= $user->email?></span><span> </span></div>
                    </div>
                    <div class="col-md-5 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Account Profile </h4>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6" style="margin-bottom: 10px;">
                                    <label class="labels" style="font-size:11px">Firstname</label>
                                    <input type="text" class="form-control" readonly value="<?= $user->first_name?>">
                                </div>
                                <div class="col-md-6" style="margin-bottom: 10px;">
                                    <label class="labels" style="font-size:11px">Lastname</label>
                                    <input type="text" class="form-control" readonly value="<?= $user->last_name?>">
                                </div>
                                <div class="col-md-6" style="margin-bottom: 10px;">
                                    <label class="labels" style="font-size:11px">Gender</label>
                                    <input type="text" class="form-control" readonly value="<?= $user->gender?>">
                                </div>
                                <div class="col-md-6" style="margin-bottom: 10px;">
                                    <label class="labels" style="font-size:11px">Date OF Birth</label>
                                    <input type="text" class="form-control" readonly value="<?= $user->date_of_birth?>">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12" style="margin-bottom: 10px;">
                                    <label class="labels" style="font-size:11px">PhoneNumber</label>
                                    <input type="text" class="form-control" readonly value="<?= $user->phone?>">
                                </div>
                                <div class="col-md-12" style="margin-bottom: 10px;">
                                    <label class="labels" style="font-size:11px">Zip Code</label>
                                    <input value="<?= $user->zip_code?>" type="text" class="form-control" readonly >
                                </div>
                                <div class="col-md-12" style="margin-bottom: 10px;">
                                    <label class="labels" style="font-size:11px">Email </label>
                                    <input type="text" class="form-control" readonly value="<?= $user->email?>">
                                </div>
                                <div class="col-md-12" style="margin-bottom: 10px;">
                                    <label class="labels" style="font-size:11px">Next of Kin</label>
                                    <input type="text" class="form-control" readonly value="<?= $user->next_of_kin?>">
                                </div>
                                <div class="col-md-12" style="margin-bottom: 10px;">
                                    <label class="labels" style="font-size:11px">Relationship With Next of Kin</label>
                                    <input type="text" class="form-control" readonly value="<?= $user->rltxhp_next_of_kin?>">
                                </div>
                            </div>
                            <div class="row mt-3" style="margin-bottom: 10px;">
                                <div class="col-md-6"> 
                                    <label class="labels" style="font-size:11px">Country</label>
                                    <input type="text" class="form-control" readonly value="<?= $user->country?>">
                                </div>
                                <div class="col-md-6" style="margin-bottom: 10px;">
                                    <label class="labels" style="font-size:11px">State</label>
                                    <input type="text" class="form-control" readonly value="<?= $user->state?>">
                                </div>
                                <div class="col-md-6" style="margin-bottom: 10px;">
                                    <label class="labels" style="font-size:11px">City</label>
                                    <input type="text" class="form-control" readonly value="<?= $user->city?>">
                                </div>
                            </div>
                            <!-- <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div> -->
                        </div>
                    </div>
                    <!--<div class="col-md-4">-->
                    <!--    <div class="p-3 py-5">-->
                    <!--        <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>-->
                    <!--        <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>-->
                    <!--        <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
            <!-- </div> -->
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <?php require_once("includes/dashboard_footer.php") ?>
</body>

</html>

