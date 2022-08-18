<?php require_once("includes/authentication.php") ?>
<?php require_once("includes/dashboard_header.php") ?>
<?php require_once("includes/dashboard_sidebar.php") ?>
<?php $accounts = $paramControl->load_sources("account_type") ?>
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper" style="margin-top: 10px;">
    <div class="row">
      <div class="row" style="justify-content: space-between !important;">
      </div>

      <div class="col-12 grid-margin" id="bgd">
          
        <div style="width:100%; height:50px; background-color:white; margin-bottom:20px; margin-top:10px;border-radius:10px;">
                  <h4 style="text-align:center; padding:20px; color:grey;">APPLY FOR LOAN</h4>
              </div>
        <div class="card" id="bgd0">
          <div class="card-body">
            <h4 class="card-title" id="info1">Apply For a Loan</h4>
            <form class="form-sample bgd1" id="sendmoney" method="post" onsubmit="submitData(this)" action="javascript:;">
              <!--<p class="card-description" id="capsion">-->
              <!--    Personal info-->
              <!--</p>-->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label id="capsion" style="margin-bottom:8px">Loan type</label>
                    <div class="col-sm-9">
                      <select class="form-control" placeholder="Select Loan Typee" name="loan_type" id="loan_type" type text>
                        <option value="" disabled selected hidden>Select Loan Type</option>
                        <option value="Consumer loan">Consumer loan</option>
                        <option value="Commercial lending">Commercial lending</option>
                        <option value="Warehouse lending">Warehouse lending</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label id="capsion" style="margin-bottom:8px">Account Number</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="account_number" name="account_number" placeholder="Account Number" required />
                      <span id="acct_no_err" style="color:white; font-size:10px;"></span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label id="capsion" style="margin-bottom:8px">Amount</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="amount" placeholder="Amount" required />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label id="capsion" style="margin-bottom:8px">FullName</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" value="" id="fullname" name="fullname" placeholder="FullName" required />
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
                  <label id="capsion" style="margin-bottom:8px">Zip Code</label>
                  <div class="col-sm-9">
                    <input type="text" id="zip_code" value="" class="form-control" name="zip_code" placeholder="Zip Code" required />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label id="capsion" style="margin-bottom:8px">City</label>
                  <div class="col-sm-9">
                    <input type="text" id="city" value="" class="form-control" name="city" placeholder="City" required />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label id="capsion" style="margin-bottom:8px">State</label>
                  <div class="col-sm-9">
                    <input type="text" id="state" value="" class="form-control" name="state" placeholder="State" required />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label id="capsion" style="margin-bottom:8px">Select Country</label>
                  <div class="col-sm-9">
                      <select class="form-control" placeholder="Select Country" name="country" id="country" required type text>
                      <option value="" disabled selected hidden>Select Country</option>
                        <option value="Afganistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bermuda">Bermuda</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bonaire">Bonaire</option>
                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brazil">Brazil</option>
                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Canary Islands">Canary Islands</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Channel Islands">Channel Islands</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Christmas Island">Christmas Island</option>
                        <option value="Cocos Island">Cocos Island</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote DIvoire">Cote DIvoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Curaco">Curacao</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="East Timor">East Timor</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Falkland Islands">Falkland Islands</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="French Southern Ter">French Southern Ter</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Great Britain">Great Britain</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="India">India</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Isle of Man">Isle of Man</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea North">Korea North</option>
                        <option value="Korea Sout">Korea South</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Laos">Laos</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libya">Libya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macau">Macau</option>
                        <option value="Macedonia">Macedonia</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Midway Islands">Midway Islands</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Nambia">Nambia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherland Antilles">Netherland Antilles</option>
                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                        <option value="Nevis">Nevis</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau Island">Palau Island</option>
                        <option value="Palestine">Palestine</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Phillipines">Philippines</option>
                        <option value="Pitcairn Island">Pitcairn Island</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                        <option value="Republic of Serbia">Republic of Serbia</option>
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="St Barthelemy">St Barthelemy</option>
                        <option value="St Eustatius">St Eustatius</option>
                        <option value="St Helena">St Helena</option>
                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                        <option value="St Lucia">St Lucia</option>
                        <option value="St Maarten">St Maarten</option>
                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                        <option value="Saipan">Saipan</option>
                        <option value="Samoa">Samoa</option>
                        <option value="Samoa American">Samoa American</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syria</option>
                        <option value="Tahiti">Tahiti</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Erimates">United Arab Emirates</option>
                        <option value="United States of America">United States of America</option>
                        <option value="Uraguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Vatican City State">Vatican City State</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                        <option value="Wake Island">Wake Island</option>
                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zaire">Zaire</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                      </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label id="capsion" style="margin-bottom:8px">Swift Code</label>
                  <div class="col-sm-9">
                    <input type="text" id="swift_code" value="" class="form-control" name="swift_code" placeholder="Swift Code" required />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label id="capsion" style="margin-bottom:8px">IBAN code</label>
                  <div class="col-sm-9">
                    <input type="text" id="iban_code" value="" class="form-control" name="iban_code" placeholder="IBAN Code" required />
                  </div>
                </div>
              </div>
              
              <div class="col-md-6">
                  <div class="form-group row">
                    <label id="capsion" style="margin-bottom:8px">Why Do You Want a Loan</label>
                    <div class="col-sm-9">
                      <input type="text" id="description" value="" class="form-control" name="description" placeholder="Why Do You Want a Loan" required />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label id="capsion" style="margin-bottom:8px">Loan Duration</label>
                    <div class="col-sm-9">
                      <select class="form-control" placeholder="Duration" name="duration" id="duration" required type text>
                        <option value="" disabled selected hidden>Select Loan Duration</option>
                        <option value="3 months">3 months</option>
                        <option value="6 months">6 months</option>
                        <option value="12 months">12 months</option>
                      </select>
                    </div>
                  </div>
                </div>
              <input type="hidden" name="user_id" value="<?= $user->id ?>">
              <input type="hidden" name="tx_no" value="<?= uniqid($user->id) ?>">
              <input type="hidden" name="tx_details" value="Loan">
              <button class="submit" id="myBtn" style="border: none; border-radius:8px; background-color:rgb(232,10, 42); height:60px; width:200px; color:white;" type="submit">Send</button>


              <div id="myModal" class="modal">
                <div class="modal-content">
                  <span class="close"><span class="pascode">enter a secure passcode</span> &times;</span>
                  <div class="popup">
                    <img src=" <?= $uri->site ?>images/img/Benchmark-Bank-Logo-Color.431cb650a123.svg"" alt=" Centralcreditsunion Logo" class="logo" />
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
                // console.log(alldata.data.account_holder);
                if (alldata.status == 1) {
                  document.getElementById('fullname').value = alldata.data.account_holder;
                  document.getElementById('swift_code').value = alldata.data.swift_code;
                  document.getElementById('iban_code').value = alldata.data.iban_number;
                  document.getElementById('zip_code').value = alldata.user.zip_code;
                  document.getElementById('country').value = alldata.user.country;
                  document.getElementById('city').value = alldata.user.city;
                  document.getElementById('state').value = alldata.user.state;
                } else {
                  document.getElementById('acct_no_err').innerHTML = alldata.message;
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
              value: "loan"
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
                if (!obj.locked) {
                  toast('your successful applied for a loan');
                  swal("Successfull Applied!", "", "success");
                }
                setTimeout(function() {
                  document.location = `<?= $uri->site ?>dash-board`;
                }, 3000);
              }
            })
          }

        }
      </script>


      </html>