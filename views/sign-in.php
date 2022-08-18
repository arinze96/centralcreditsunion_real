<!doctype html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /> <!-- /Added by HTTrack -->

<head>
  <script type="text/javascript" src="js/common.js"></script>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Sign-in</title>

  <?php require_once("includes/header.php") ?>

</head>

<body>

  <div class="hero_container">


    <style>
      /* "Mobile" Image */
      .hero_container {
        background-image: url(images/img/subpage-default-hero-small.373952d9b076.jpg);
      }

      /* "Tablet" Image */
      @media screen and (min-width:768px) {
        .hero_container {
          background-image: url(images/img/subpage-default-hero-med.0656af2226c8.jpg);
        }
      }

      /* "Desktop" Image */
      @media screen and (min-width:1024px) {
        .hero_container {
          background-image: url(images/img/subpage-default-hero.38bcdc8303bb.jpg);
        }
      }
    </style>


    <?php require_once("includes/navigation.php") ?>


    <div class="hero hero--short">
      <!-- hero--short -->

      <div class="hero_content">
        <div class="content">
          <h1 class="title">

            Welcome back. Log in here.

          </h1>

        </div>
        <!--! end of .content -->
      </div>
      <!--! end of .hero -->

    </div>
    <!--! end of .home_hero -->




  </div>
  <!--! end of .hero_container -->


  <div id="container">

    <div id="main" role="main">

      <div class="content_container">


        <div class="login">
          <div class="container">

            <div>
              <div class="tabs">
                <ul>
                  <li class="active">
                    Online Banking Login
                  </li>
                </ul>
              </div>
              <!--! end of .tabs -->

              <form method="post" id="retail" name="retail" novalidate>
                <fieldset class="float_labels">
                  <label class="has-float-label">
                    <span class="visuallyhidden">Access ID</span>
                    <input class="input-login forgot-element" type="text" name="username" autocorrect="off" autocapitalize="none" placeholder="Username" />
                  </label>
                  <div class="show_pw">
                    <label class="has-float-label">
                      <span class="visuallyhidden">Password</span>
                      <input class="input-login" type="password" name="password" autocorrect="off" autocapitalize="none" placeholder="Password" />
                    </label>
                    <div class="showPW">Show</div>
                  </div>

                  <button type="submit" class="submit btn btn--alt">Sign In</button>


                  <p class="util_links">
                    <a href="#" class="forgot-password">Forgot password?</a>
                    <a href="<?= $uri->site ?>register">New Account?</a>
                  </p>

                  <div class="apps">
                    <h4>
                      Manage your accounts on the go.
                    </h4>
                    <p>
                      Download the Centralcreditsunion app&nbsp;today.
                    </p>

                    <ul>
                      <li>
                        <a href="https://apps.apple.com/us/app/benchmark-bank-ebanking-app/id1455854469?ls=1" title="Download on the App Store">
                          <img src="images/img/AppleAppStore.2928664fe1fc.svg" alt="Download on the App Store" />
                        </a>
                      </li>
                      <li>
                        <a href="https://play.google.com/store/apps/details?id=com.benchmarkbank3856.mobile" title="Get it on Google Play">
                          <img src="images/img/GooglePlay.11cf280b847f.svg" alt="Get it on Google Play" />
                        </a>
                      </li>
                    </ul>

                    <p>
                      <a href="../personal/mobile-online/index.html" class="more">Learn more about online &amp; mobile&nbsp;banking.<svg class="icon">
                          <use xlink:href="#long_arrow" />
                        </svg></a>
                    </p>
                  </div>
                  <!--! end of .apps -->
                </fieldset>
              </form>
              <!--! end of form#personl -->
            </div>

          </div>
          <!--! end of .container -->
        </div>
        <!--! end of .login -->


      </div>
      <!--! end of .content_container -->



    </div>
    <!--! end of #main -->

  </div>
  <!--! end of #container -->




  <?php require_once("includes/footer.php") ?>
  <script src="<?= $uri->backend ?>js/controllers.js"></script>
  <script>
    $(document).ready(function() {
      $("#retail").loginForm({
        formName: "loginMembers",
        forgoTPassword: true
      }, function(response) {
        let page_url = window.location.href;
        let part = page_url.split('=');
        if (!part[1]) part[1] = "dash-board";
        window.location = `${site.domain}${part[1]}`
      })
    });
  </script>
</body>

</html>