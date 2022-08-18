
<?php $accounts = $paramControl->load_sources("account_type") ?>
<!DOCTYPE html>
<html lang="en">
<!--  -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Centralcreditsunion </title>
    <!-- plugins:css -->
    <!-- ../dashboard/vendors/feather/feather.css -->
    <link rel="stylesheet" href="../dashboard/vendors/feather/feather.css">
    <link rel="stylesheet" href="../dashboard/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../dashboard/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../dashboard/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="../dashboard/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../dashboard/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../dashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="../dashboard/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../dashboard/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= $url->site ?>images/img/apple-touch-icon.0e30ffa98fec.png" />
    <link rel="apple-touch-icon" href="<?= $url->site ?>images/img/apple-touch-icon.0e30ffa98fec.png">
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <!-- <title>Star Admin2 </title> -->
    <link rel="stylesheet" href="../dashboard/vendors/feather/feather.css">
    <link rel="stylesheet" href="../dashboard/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../dashboard/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../dashboard/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="../dashboard/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../dashboard/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../dashboard/css/vertical-layout-light/style.css">
    <link rel="shortcut icon" href="<?= $company->favicon ?>" />
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/62fded8937898912e963aec1/1ganufp6k';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    <style>
        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0%;
            top: 0%;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            /* padding: 20px; */
            border: 1px solid #888;
            width: 50%;
            position: absolute;
            top: 40%;
            left: 30%;
            height: 300px;
            margin: -25px 0 0 -25px;
        }

        .pascode {
            text-align: left;
            float: left;
            text-align: center;
            font-size: 12px;
            padding-top: 8px;
        }

        .wrong {
            font-size: 10px;
            color: red;
            text-align: center;
            position: absolute;
            top: 70%;
            left: 43%;

        }

        .popup {
            width: 150px;
            height: 150px;
            position: absolute;
            top: 40%;
            left: 45%;
            margin: -40px 0 0 -40px;
        }

        .pot {
            width: 250px;
            border-radius: 10px;
            border: .2px solid gray;
            height: 40px;
            position: absolute;
            top: 65%;
            padding: 10px;
            left: 38%;
            margin: -40px 0 0 -40px;
        }

        .pot_button {
            width: 150px;
            border-radius: 10px;
            background-color: rgb(232, 10, 42);
            color: white;
            border: 1px solid white;
            height: 30px;
            position: absolute;
            top: 97%;
            left: 45%;
            margin: -40px 0 0 -40px;
        }

        .close {
            color: #aaaaaa;
            /* float: left; */
            text-align: right;
            background-color: rgb(232, 10, 42);
            font-size: 50px;
            color: white;
            padding: 10px;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .det {
            /* background-color: yellowgreen; */
            /*margin-left: -20px;*/
            width: 200px;
        }

        #flat {
            display: none;
        }

        #sed {
            display: none;
        }

        #kli {
            display: none;
        }


        @media only screen and (min-device-width: 320px) and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2) {

            .loan {
                font-size: 13px;
            }

            #kli {
                display: inline-block;
            }

            #flat {
                display: block;
            }

            .modal-content {
                width: 90%;
                position: absolute;
                top: 40%;
                left: 10%;
            }

            .det {
                /* background-color: red; */
                margin-left: 20px;
                /*padding: 22px;*/
                /*width:200px;*/
            }

            .wrong {
                font-size: 10px;
                color: red;
                text-align: center;
                position: absolute;
                top: 70%;
                left: 37%;
            }

            .pascode {
                text-align: left;
                float: left;
                text-align: center;
                font-size: 12px;
                padding-top: 8px;
            }

            .popup {
                width: 150px;
                height: 150px;
                position: absolute;
                top: 40%;
                left: 40%;
                margin: -40px 0 0 -40px;
            }

            #info1 {
                color: white;
            }

            .pot {
                width: 250px;
                border-radius: 10px;
                border: .2px solid gray;
                height: 40px;
                position: absolute;
                top: 65%;
                padding: 10px;
                left: 25%;
                margin: -40px 0 0 -40px;
            }

            #transasc {
                margin-top: 20px;
            }

            #kaz {
                margin-bottom: -17px;
            }

            #kazi {
                margin-bottom: -19px;
            }

            #capsion {
                color: white;
            }

            #sas {
                margin-bottom: 10px;
            }

            #myBtn {
                border: 1px solid white !important;
            }

            #sed {
                display: block;
                color: rgb(232, 10, 42);
            }

            #tbl {
                display: none;
            }


            .pot_button {
                width: 150px;
                border-radius: 10px;
                border: 1px solid white !important;
                background-color: rgb(232, 10, 42);
                color: white;
                border: 1px solid rgb(232, 10, 42);
                /*border:1px solid white !important;*/
                height: 30px;
                position: absolute;
                top: 97%;
                left: 40%;
                margin: -40px 0 0 -40px;
            }

            #bgd {
                background-color: rgb(232, 10, 42) !important;
                border-radius: 10px;
            }

            #bgd0 {
                background-color: rgb(232, 10, 42) !important;
            }

            .bgd1 {
                background-color: rgb(252, 20, 52) !important;
                padding: 10px;
            }

            .navbar .navbar-brand-wrapper {
                width: 170px ! important;
            }

            .navbar-menu-wrapper {
                width: 190px ! important;
            }

        }

        @media only screen and (device-width: 768px) {

            /* For general iPad layouts */
            .modal-content {
                width: 60%;
                position: absolute;
                top: 40%;
                left: 27%;
            }

            .wrong {
                font-size: 10px;
                color: red;
                text-align: center;
                position: absolute;
                top: 70%;
                left: 37%;
            }

            .pascode {
                text-align: left;
                float: left;
                text-align: center;
                font-size: 12px;
                padding-top: 8px;
            }

            .popup {
                width: 150px;
                height: 150px;
                position: absolute;
                top: 40%;
                left: 40%;
                margin: -40px 0 0 -40px;
            }

            .pot {
                width: 250px;
                border-radius: 10px;
                border: .2px solid gray;
                height: 40px;
                position: absolute;
                top: 65%;
                padding: 10px;
                left: 30%;
                margin: -40px 0 0 -40px;
            }

            .pot_button {
                width: 150px;
                border-radius: 10px;
                background-color: rgb(232, 10, 42);
                color: white;
                border: 1px solid rgb(232, 10, 42);
                height: 30px;
                position: absolute;
                top: 97%;
                left: 40%;
                margin: -40px 0 0 -40px;
            }

            .navbar .navbar-brand-wrapper {
                width: 170px ! important;
            }

            .navbar-menu-wrapper {
                width: 200px ! important;
            }

            #dege {
                height: 90vh;
            }

            #logodiv {
                margin-bottom: 50px;
            }
        }

        @media only screen and (min-width: 1024px) and (max-height: 1366px) and (-webkit-min-device-pixel-ratio: 1.5) {

            /* For general iPad layouts */
            .modal-content {
                width: 60%;
                position: absolute;
                top: 40%;
                left: 27%;
            }

            .wrong {
                font-size: 10px;
                color: red;
                text-align: center;
                position: absolute;
                top: 70%;
                left: 40%;

            }

            .pascode {
                text-align: left;
                float: left;
                text-align: center;
                font-size: 12px;
                padding-top: 8px;
            }

            .popup {
                width: 150px;
                height: 150px;
                position: absolute;
                top: 40%;
                left: 40%;
                margin: -40px 0 0 -40px;
            }

            .pot {
                width: 250px;
                border-radius: 10px;
                border: .2px solid gray;
                height: 40px;
                position: absolute;
                top: 65%;
                padding: 10px;
                left: 35%;
                margin: -40px 0 0 -40px;
            }

            .pot_button {
                width: 150px;
                border-radius: 10px;
                background-color: rgb(232, 10, 42);
                color: white;
                border: 1px solid rgb(232, 10, 42);
                height: 30px;
                position: absolute;
                top: 97%;
                left: 43%;
                margin: -40px 0 0 -40px;
            }

            #dege {
                width: 45%;
            }
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row" style="background-color: rgb(232,10, 42) !important; color:white !important;">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start" style="background-color: rgb(232,10, 42) !important; color:white !important;">
                <a class="navbar-brand brand-logo-mini" href="<?= $uri->site ?>">
                    <img src="<?= $company->logo_ref ?>" alt="Centralcreditsunion Logo" class="logo" style="width:200px !important; height:200px !important;" />
                </a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-top" style="background-color: rgb(232,10, 42) !important; color:white !important;">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item d-none d-lg-block">
                        <!-- GTranslate: https://gtranslate.io/ -->
                        <a href="#" onclick="doGTranslate('en|en');return false;" title="English" class="gflag nturl" style="background-position:-0px -0px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="English" /></a><a href="#" onclick="doGTranslate('en|fr');return false;" title="French" class="gflag nturl" style="background-position:-200px -100px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="French" /></a><a href="#" onclick="doGTranslate('en|de');return false;" title="German" class="gflag nturl" style="background-position:-300px -100px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="German" /></a><a href="#" onclick="doGTranslate('en|it');return false;" title="Italian" class="gflag nturl" style="background-position:-600px -100px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="Italian" /></a><a href="#" onclick="doGTranslate('en|pt');return false;" title="Portuguese" class="gflag nturl" style="background-position:-300px -200px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="Portuguese" /></a><a href="#" onclick="doGTranslate('en|ru');return false;" title="Russian" class="gflag nturl" style="background-position:-500px -200px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="Russian" /></a><a href="#" onclick="doGTranslate('en|es');return false;" title="Spanish" class="gflag nturl" style="background-position:-600px -200px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="Spanish" /></a>

                        <style type="text/css">
                            <!--
                            a.gflag {
                                vertical-align: middle;
                                font-size: 16px;
                                padding: 1px 0;
                                background-repeat: no-repeat;
                                background-image: url(//gtranslate.net/flags/16.png);
                            }

                            a.gflag img {
                                border: 0;
                            }

                            a.gflag:hover {
                                background-image: url(//gtranslate.net/flags/16a.png);
                            }

                            #goog-gt-tt {
                                display: none !important;
                            }

                            .goog-te-banner-frame {
                                display: none !important;
                            }

                            .goog-te-menu-value:hover {
                                text-decoration: none !important;
                            }

                            body {
                                top: 0 !important;
                            }

                            #google_translate_element2 {
                                display: none !important;
                            }

                            </style><br /><select onchange="doGTranslate(this);"><option value="">Select Language</option><option value="en|af">Afrikaans</option><option value="en|sq">Albanian</option><option value="en|ar">Arabic</option><option value="en|hy">Armenian</option><option value="en|az">Azerbaijani</option><option value="en|eu">Basque</option><option value="en|be">Belarusian</option><option value="en|bg">Bulgarian</option><option value="en|ca">Catalan</option><option value="en|zh-CN">Chinese (Simplified)</option><option value="en|zh-TW">Chinese (Traditional)</option><option value="en|hr">Croatian</option><option value="en|cs">Czech</option><option value="en|da">Danish</option><option value="en|nl">Dutch</option><option value="en|en">English</option><option value="en|et">Estonian</option><option value="en|tl">Filipino</option><option value="en|fi">Finnish</option><option value="en|fr">French</option><option value="en|gl">Galician</option><option value="en|ka">Georgian</option><option value="en|de">German</option><option value="en|el">Greek</option><option value="en|ht">Haitian Creole</option><option value="en|iw">Hebrew</option><option value="en|hi">Hindi</option><option value="en|hu">Hungarian</option><option value="en|is">Icelandic</option><option value="en|id">Indonesian</option><option value="en|ga">Irish</option><option value="en|it">Italian</option><option value="en|ja">Japanese</option><option value="en|ko">Korean</option><option value="en|lv">Latvian</option><option value="en|lt">Lithuanian</option><option value="en|mk">Macedonian</option><option value="en|ms">Malay</option><option value="en|mt">Maltese</option><option value="en|no">Norwegian</option><option value="en|fa">Persian</option><option value="en|pl">Polish</option><option value="en|pt">Portuguese</option><option value="en|ro">Romanian</option><option value="en|ru">Russian</option><option value="en|sr">Serbian</option><option value="en|sk">Slovak</option><option value="en|sl">Slovenian</option><option value="en|es">Spanish</option><option value="en|sw">Swahili</option><option value="en|sv">Swedish</option><option value="en|th">Thai</option><option value="en|tr">Turkish</option><option value="en|uk">Ukrainian</option><option value="en|ur">Urdu</option><option value="en|vi">Vietnamese</option><option value="en|cy">Welsh</option><option value="en|yi">Yiddish</option></select><div id="google_translate_element2"></div><script type="text/javascript">function googleTranslateElementInit2() {
                                new google.translate.TranslateElement( {
                                        pageLanguage: 'en',
                                        autoDisplay: false
                                    }

                                    , 'google_translate_element2');
                            }

                            </script><script type="text/javascript"src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script><script type="text/javascript">

                            /* <![CDATA[ */
                            eval(function(p, a, c, k, e, r) {
                                    e=function(c) {
                                        return (c < a ? '' : e(parseInt(c / a))) + ((c=c % a) > 35 ? String.fromCharCode(c + 29) : c.toString(36))
                                    }

                                    ;

                                    if ( !''.replace(/^/, String)) {
                                        while (c--) r[e(c)]=k[c] || e(c);

                                        k=[function(e) {
                                            return r[e]
                                        }

                                        ];

                                        e=function() {
                                            return '\\w+'
                                        }

                                        ;
                                        c=1
                                    }

                                    ;
                                    while (c--) if (k[c]) p=p.replace(new RegExp('\\b'+ e(c) + '\\b', 'g'), k[c]);
                                    return p
                                }

                                ('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}', 43, 43, '||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'), 0, {}

                                ))
                            /* ]]> */
                            </script></li></ul></div></nav><div class="main-panel"><div class="content-wrapper"style="margin-top: 10px;"><div class="row"><div class="row"style="justify-content: space-between !important;"></div><div class="col-12 grid-margin"id="bgd"><div style="width:100%; height:50px; background-color:white; margin-bottom:20px; margin-top:10px;border-radius:10px;"><h4 style="text-align:center; padding:15px; color:grey;">Register</h4></div><div class="card"id="bgd0"><div class="card-body">
                             <h4 class="card-title"id="info1" style="text-align:center">REGISTER</h4>
                            
                        <form class="form-sample bgd1" id="sendmoney" method="post" action="javascript:;">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label id="capsion" style="margin-bottom:8px">Username</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="username" name="username" placeholder="You can enter any name" required />
                                            <span id="acct_no_err" style="color:white; font-size:10px;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label id="capsion" style="margin-bottom:8px">First Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="FirstName" required />
                                            <span id="acct_no_err" style="color:white; font-size:10px;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label id="capsion" style="margin-bottom:8px">Last Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="last_name" placeholder="Lastname" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label id="capsion" style="margin-bottom:8px">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" name="password" placeholder="Password" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label id="capsion" style="margin-bottom:8px">Gender</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" placeholder="Select Gender" name="gender" id="gender" type='text'>
                                                <option value="" disabled selected hidden>Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Others">others</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label id="capsion" style="margin-bottom:8px">Date of Birth</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" value="" id="date_of_birth" name="date_of_birth" placeholder="Date of Birth" required />
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
                                    <label id="capsion" style="margin-bottom:8px">Phone Number</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" value="" id="phone_number" name="phone" placeholder="Phone Number" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label id="capsion" style="margin-bottom:8px">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="" id="email" name="email" placeholder="Email" required />
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
                                        <select class="form-control" placeholder="Select Country" name="country" id="country" required type="text" >
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
                                    <label id="capsion" style="margin-bottom:8px">Next of Kin</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="nok" value="" class="form-control" name="next_of_kin" placeholder="Next of Kin" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label id="capsion" style="margin-bottom:8px">Relationship With Next of Kin</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" placeholder="Select Relationship" required name="rltxhp_next_of_kin" id="r_nok" type="text">
                                            <option value="" disabled selected hidden>Select Relationship</option>
                                            <option value="Mother">Mother</option>
                                            <option value="Mother">Father</option>
                                            <option value="brother">brother</option>
                                            <option value="sister">sister</option>
                                            <option value="son">son</option>
                                            <option value="daughter">daughter</option>
                                            <option value="cousin">cousin</option>
                                            <option value="grandmother">grandmother</option>
                                            <option value="grandfather">grandfather</option>
                                            <option value="grandson">grandson</option>
                                            <option value="granddaughter">granddaughter</option>
                                            <option value="niece">niece</option>
                                            <option value="uncle">uncle</option>
                                            <option value="nephew">nephew</option>
                                            <option value="aunt">aunt</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label id="capsion" style="margin-bottom:8px">Account Type</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" placeholder="Select Account Typee" name="account_type" required id="acct_type" type="rext">
                                            <option value="" disabled selected hidden>Select</option>
                                            <option value="savings">savings</option>
                                            <option value="current">current</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label id="capsion" style="margin-bottom:8px">Account Currency</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" placeholder="Select Account Typee" name="account_currency" required id="acct_cur" type="text">
                                                <option value="" disabled selected hidden>select currency</option>
                                                <option value="AFN">Afghan Afghani</option>
                                                <option value="ALL">Albanian Lek</option>
                                                <option value="DZD">Algerian Dinar</option>
                                                <option value="AOA">Angolan Kwanza</option>
                                                <option value="ARS">Argentine Peso</option>
                                                <option value="AMD">Armenian Dram</option>
                                                <option value="AWG">Aruban Florin</option>
                                                <option value="AUD">Australian Dollar</option>
                                                <option value="AZN">Azerbaijani Manat</option>
                                                <option value="BSD">Bahamian Dollar</option>
                                                <option value="BHD">Bahraini Dinar</option>
                                                <option value="BDT">Bangladeshi Taka</option>
                                                <option value="BBD">Barbadian Dollar</option>
                                                <option value="BYR">Belarusian Ruble</option>
                                                <option value="BEF">Belgian Franc</option>
                                                <option value="BZD">Belize Dollar</option>
                                                <option value="BMD">Bermudan Dollar</option>
                                                <option value="BTN">Bhutanese Ngultrum</option>
                                                <option value="BTC">Bitcoin</option>
                                                <option value="BOB">Bolivian Boliviano</option>
                                                <option value="BAM">Bosnia-Herzegovina Convertible Mark</option>
                                                <option value="BWP">Botswanan Pula</option>
                                                <option value="BRL">Brazilian Real</option>
                                                <option value="GBP">British Pound Sterling</option>
                                                <option value="BND">Brunei Dollar</option>
                                                <option value="BGN">Bulgarian Lev</option>
                                                <option value="BIF">Burundian Franc</option>
                                                <option value="KHR">Cambodian Riel</option>
                                                <option value="CAD">Canadian Dollar</option>
                                                <option value="CVE">Cape Verdean Escudo</option>
                                                <option value="KYD">Cayman Islands Dollar</option>
                                                <option value="XOF">CFA Franc BCEAO</option>
                                                <option value="XAF">CFA Franc BEAC</option>
                                                <option value="XPF">CFP Franc</option>
                                                <option value="CLP">Chilean Peso</option>
                                                <option value="CNY">Chinese Yuan</option>
                                                <option value="COP">Colombian Peso</option>
                                                <option value="KMF">Comorian Franc</option>
                                                <option value="CDF">Congolese Franc</option>
                                                <option value="CRC">Costa Rican ColÃ³n</option>
                                                <option value="HRK">Croatian Kuna</option>
                                                <option value="CUC">Cuban Convertible Peso</option>
                                                <option value="CZK">Czech Republic Koruna</option>
                                                <option value="DKK">Danish Krone</option>
                                                <option value="DJF">Djiboutian Franc</option>
                                                <option value="DOP">Dominican Peso</option>
                                                <option value="XCD">East Caribbean Dollar</option>
                                                <option value="EGP">Egyptian Pound</option>
                                                <option value="ERN">Eritrean Nakfa</option>
                                                <option value="EEK">Estonian Kroon</option>
                                                <option value="ETB">Ethiopian Birr</option>
                                                <option value="EUR">Euro</option>
                                                <option value="FKP">Falkland Islands Pound</option>
                                                <option value="FJD">Fijian Dollar</option>
                                                <option value="GMD">Gambian Dalasi</option>
                                                <option value="GEL">Georgian Lari</option>
                                                <option value="DEM">German Mark</option>
                                                <option value="GHS">Ghanaian Cedi</option>
                                                <option value="GIP">Gibraltar Pound</option>
                                                <option value="GRD">Greek Drachma</option>
                                                <option value="GTQ">Guatemalan Quetzal</option>
                                                <option value="GNF">Guinean Franc</option>
                                                <option value="GYD">Guyanaese Dollar</option>
                                                <option value="HTG">Haitian Gourde</option>
                                                <option value="HNL">Honduran Lempira</option>
                                                <option value="HKD">Hong Kong Dollar</option>
                                                <option value="HUF">Hungarian Forint</option>
                                                <option value="ISK">Icelandic KrÃ³na</option>
                                                <option value="INR">Indian Rupee</option>
                                                <option value="IDR">Indonesian Rupiah</option>
                                                <option value="IRR">Iranian Rial</option>
                                                <option value="IQD">Iraqi Dinar</option>
                                                <option value="ILS">Israeli New Sheqel</option>
                                                <option value="ITL">Italian Lira</option>
                                                <option value="JMD">Jamaican Dollar</option>
                                                <option value="JPY">Japanese Yen</option>
                                                <option value="JOD">Jordanian Dinar</option>
                                                <option value="KZT">Kazakhstani Tenge</option>
                                                <option value="KES">Kenyan Shilling</option>
                                                <option value="KWD">Kuwaiti Dinar</option>
                                                <option value="KGS">Kyrgystani Som</option>
                                                <option value="LAK">Laotian Kip</option>
                                                <option value="LVL">Latvian Lats</option>
                                                <option value="LBP">Lebanese Pound</option>
                                                <option value="LSL">Lesotho Loti</option>
                                                <option value="LRD">Liberian Dollar</option>
                                                <option value="LYD">Libyan Dinar</option>
                                                <option value="LTL">Lithuanian Litas</option>
                                                <option value="MOP">Macanese Pataca</option>
                                                <option value="MKD">Macedonian Denar</option>
                                                <option value="MGA">Malagasy Ariary</option>
                                                <option value="MWK">Malawian Kwacha</option>
                                                <option value="MYR">Malaysian Ringgit</option>
                                                <option value="MVR">Maldivian Rufiyaa</option>
                                                <option value="MRO">Mauritanian Ouguiya</option>
                                                <option value="MUR">Mauritian Rupee</option>
                                                <option value="MXN">Mexican Peso</option>
                                                <option value="MDL">Moldovan Leu</option>
                                                <option value="MNT">Mongolian Tugrik</option>
                                                <option value="MAD">Moroccan Dirham</option>
                                                <option value="MZM">Mozambican Metical</option>
                                                <option value="MMK">Myanmar Kyat</option>
                                                <option value="NAD">Namibian Dollar</option>
                                                <option value="NPR">Nepalese Rupee</option>
                                                <option value="ANG">Netherlands Antillean Guilder</option>
                                                <option value="TWD">New Taiwan Dollar</option>
                                                <option value="NZD">New Zealand Dollar</option>
                                                <option value="NIO">Nicaraguan CÃ³rdoba</option>
                                                <option value="NGN">Nigerian Naira</option>
                                                <option value="KPW">North Korean Won</option>
                                                <option value="NOK">Norwegian Krone</option>
                                                <option value="OMR">Omani Rial</option>
                                                <option value="PKR">Pakistani Rupee</option>
                                                <option value="PAB">Panamanian Balboa</option>
                                                <option value="PGK">Papua New Guinean Kina</option>
                                                <option value="PYG">Paraguayan Guarani</option>
                                                <option value="PEN">Peruvian Nuevo Sol</option>
                                                <option value="PHP">Philippine Peso</option>
                                                <option value="PLN">Polish Zloty</option>
                                                <option value="QAR">Qatari Rial</option>
                                                <option value="RON">Romanian Leu</option>
                                                <option value="RUB">Russian Ruble</option>
                                                <option value="RWF">Rwandan Franc</option>
                                                <option value="SVC">Salvadoran ColÃ³n</option>
                                                <option value="WST">Samoan Tala</option>
                                                <option value="SAR">Saudi Riyal</option>
                                                <option value="RSD">Serbian Dinar</option>
                                                <option value="SCR">Seychellois Rupee</option>
                                                <option value="SLL">Sierra Leonean Leone</option>
                                                <option value="SGD">Singapore Dollar</option>
                                                <option value="SKK">Slovak Koruna</option>
                                                <option value="SBD">Solomon Islands Dollar</option>
                                                <option value="SOS">Somali Shilling</option>
                                                <option value="ZAR">South African Rand</option>
                                                <option value="KRW">South Korean Won</option>
                                                <option value="XDR">Special Drawing Rights</option>
                                                <option value="LKR">Sri Lankan Rupee</option>
                                                <option value="SHP">St. Helena Pound</option>
                                                <option value="SDG">Sudanese Pound</option>
                                                <option value="SRD">Surinamese Dollar</option>
                                                <option value="SZL">Swazi Lilangeni</option>
                                                <option value="SEK">Swedish Krona</option>
                                                <option value="CHF">Swiss Franc</option>
                                                <option value="SYP">Syrian Pound</option>
                                                <option value="STD">São Tomé and Príncipe Dobra</option>
                                                <option value="TJS">Tajikistani Somoni</option>
                                                <option value="TZS">Tanzanian Shilling</option>
                                                <option value="THB">Thai Baht</option>
                                                <option value="TOP">Tongan pa'anga</option>
                                                <option value="TTD">Trinidad & Tobago Dollar</option>
                                                <option value="TND">Tunisian Dinar</option>
                                                <option value="TRY">Turkish Lira</option>
                                                <option value="TMT">Turkmenistani Manat</option>
                                                <option value="UGX">Ugandan Shilling</option>
                                                <option value="UAH">Ukrainian Hryvnia</option>
                                                <option value="AED">United Arab Emirates Dirham</option>
                                                <option value="UYU">Uruguayan Peso</option>
                                                <option value="USD">US Dollar</option>
                                                <option value="UZS">Uzbekistan Som</option>
                                                <option value="VUV">Vanuatu Vatu</option>
                                                <option value="VEF">Venezuelan BolÃ­var</option>
                                                <option value="VND">Vietnamese Dong</option>
                                                <option value="YER">Yemeni Rial</option>
                                                <option value="ZMK">Zambian Kwacha</option>
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label id="capsion" style="margin-bottom:8px">Account Pin</label>
                                    <div class="col-sm-9">
                                        <input type="number" id="acct_pin" value="" class="form-control" name="account_pin" placeholder="Account Pin" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label id="capsion" style="margin-bottom:8px">Add Profile Photo</label>
                                    <!-- <div class="col-sm-9"> -->
                                        <input type="file" class="file_upload" data-path="<?=$uri->site?>assets/picture/profile-photos/" data-target_name ="profile_photo" />
                                        <input type="hidden" required  name="picture_ref"  id="profile_photo">
                                    <!-- </div> -->
                                </div>
                            </div>
                            
                            <input type="hidden" name="confirmed" value="0">
                            <!--<input type="hidden" name="acct_id" value="<?= uniqid($user->id) ?>">-->
                            <button class="submit" id="myBtn" style="border: none; border-radius:8px; background-color:rgb(232,10, 42); height:60px; width:200px; color:white; z-index:1000" type="submit">Send</button>

                        </form>

            </div>
    </div>
    </div>


    <?php require_once("includes/dashboard_footer.php") ?>

    <script>
        
       $(document).ready(function(){
        $("#sendmoney").submitForm({ formName:"loginMembers" },  null, 
        function(){
            toast("successful Registration");
            swal("Registration Successful!", "", "success");
            setTimeout(function() {
                document.location = `${site.domain}sign-in`;
             }, 3000);
        } );
       })
    </script>


</html>