<!doctype html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /> <!-- /Added by HTTrack -->

<head>
    <script type="text/javascript" src="js/common.js"></script>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Banking, Credit Cards, Loans and more - Centralcreditsunion</title>

    <?php require_once("includes/header.php") ?>

</head>

<body>

    <div class="hero_container" data-image-src="images/benchmarkbank-dallas-fall-2020-1880x800.original.jpg">

        <style>
            /* "Mobile" Image */
            .hero_container {
                background-image: url('images/benchmarkbank-dallas-fall-2020-600x343.original.jpg');
            }

            /* "Tablet" Image */
            @media screen and(min-width:768px) {
                .hero_container {
                    background-image: url('images/benchmarkbank-dallas-fall-2020-716x568.original.jpg');
                }
            }

            /* "Desktop" Image */
            @media screen and(min-width:1024px) {
                .hero_container {
                    background-image: url('images/benchmarkbank-dallas-fall-2020-1880x800.original.jpg');
                }
            }
        </style>

        <?php require_once("includes/navigation.php") ?>


        <div class="hero hero--home">

            <div class="hero_content">
                <div class="content">

                    <h1 class="title">
                        Welcome to Centralcreditsunion
                    </h1>

                    <p class="subtitle" style="display:none"></p>

                    <p class="button" style="display:none">
                        <a href="https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/documents/First_Time_Log_in_Instructions.pdf" class="btn"></a>
                    </p>

                </div>
                <!--! end of .content -->
            </div>
            <!--! end of .hero -->


            <div class="login login--home">
                <div class="container">

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
                                <input class="input-login forgot-element" type="text" name="username" autocorrect="off" autocapitalize="none" placeholder="Username">
                            </label>
                            <div class="show_pw">
                                <label class="has-float-label">
                                    <span class="visuallyhidden">Password</span>
                                    <input class="input-login" type="password" name="password" autocorrect="off" autocapitalize="none" placeholder="Password">
                                </label>
                                <div class="showPW">Show</div>
                            </div>


                            <button type="submit" class="submit btn btn--alt">Sign In</button>


                            <p class="util_links">
                                <a href="#" class="forgot-password">Forgot password?</a>
                                <a href="<?= $uri->site ?>register">SignUp?</a>
                            </p>
                        </fieldset>
                    </form>
                    <!--! end of form#personl -->


                </div>
                <!--! end of .container -->
            </div>
            <!--! end of .login.login--home -->
        </div>
        <!--! end of .hero hero--home -->


        <script>
            // Homepage Location Based Content
            var locs = [
                [
                    "35-street", 30.3068295, -97.7520945
                ],
                [
                    "preston-royal", 32.894529, -96.8743079
                ],
                [
                    "uptown", 32.7914875, -96.8723425
                ],
                [
                    "shops-at-legacy", 33.0773385, -96.8892047
                ],
                [
                    "park-cities", 32.8508902, -96.8407922
                ],
                [
                    "westlake", 30.2803528, -97.8435753
                ],
                [
                    "tarrytown", 30.287032, -97.752306
                ],
                [
                    "houston", 29.756528, -95.496727
                ]
            ]
            var loc_content = {
                "35-street": {
                    "slug": "35-street",
                    "title": "Welcome to Centralcreditsunion",
                    "subtitle": "",
                    "btnCopy": "",
                    "btnUrl": "",
                    "img3": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Austin1800x600.original.jpg",
                    "img2": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Austin768x600.original.jpg",
                    "img1": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Austin600x343.original.jpg",
                    "bannerTitle": "We know you by name, not by account number.",
                    "bannerSubtitle": "",
                    "bannerBtn1Copy": "Find your Centralcreditsunion",
                    "bannerBtn1URL": "/locations/",
                    "bannerBtn2Copy": "Contact a Banker",
                    "bannerBtn2URL": "/contact/",
                    "bannerImg2": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/HP-hero-1800x600.original.jpg",
                    "bannerImg1": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/HP-hero-600x800.original.jpg"
                },
                "preston-royal": {
                    "slug": "preston-royal",
                    "title": "Welcome to Centralcreditsunion",
                    "subtitle": "",
                    "btnCopy": "",
                    "btnUrl": "",
                    "img3": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Dallas1800x600.original.jpg",
                    "img2": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Dallas768x600.original.jpg",
                    "img1": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Dallas600x343.original.jpg",
                    "bannerTitle": "Preston & Royal banner headline",
                    "bannerSubtitle": "Preston & Royal banner subheadline",
                    "bannerBtn1Copy": "Preston & Royal button #1",
                    "bannerBtn1URL": "",
                    "bannerBtn2Copy": "Preston & Royal button #2",
                    "bannerBtn2URL": "/contact/",
                    "bannerImg2": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/internal-page-header-large-1800x600.original.png",
                    "bannerImg1": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/home-banner-small-screen-600x800.original.png"
                },
                "uptown": {
                    "slug": "uptown",
                    "title": "Welcome to Centralcreditsunion",
                    "subtitle": "",
                    "btnCopy": "",
                    "btnUrl": "",
                    "img3": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Dallas1800x600.original.jpg",
                    "img2": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Dallas768x600.original.jpg",
                    "img1": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Dallas600x343.original.jpg",
                    "bannerTitle": "We know you by name, not by account number.",
                    "bannerSubtitle": "",
                    "bannerBtn1Copy": "Find your Centralcreditsunion",
                    "bannerBtn1URL": "/locations/",
                    "bannerBtn2Copy": "Contact a Banker",
                    "bannerBtn2URL": "/contact/",
                    "bannerImg2": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/HP-hero-1800x600.original.jpg",
                    "bannerImg1": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/HP-hero-600x800.original.jpg"
                },
                "shops-at-legacy": {
                    "slug": "shops-at-legacy",
                    "title": "Welcome to Centralcreditsunion",
                    "subtitle": "",
                    "btnCopy": "",
                    "btnUrl": "",
                    "img3": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Austin1800x600.original.jpg",
                    "img2": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Austin768x600.original.jpg",
                    "img1": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Austin600x343.original.jpg",
                    "bannerTitle": "We know you by name, not by account number.",
                    "bannerSubtitle": "",
                    "bannerBtn1Copy": "Find your Centralcreditsunion",
                    "bannerBtn1URL": "/locations/",
                    "bannerBtn2Copy": "Contact a Banker",
                    "bannerBtn2URL": "/contact/",
                    "bannerImg2": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/HP-hero-1800x600.original.jpg",
                    "bannerImg1": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/HP-hero-600x800.original.jpg"
                },
                "park-cities": {
                    "slug": "park-cities",
                    "title": "Welcome to Centralcreditsunion",
                    "subtitle": "",
                    "btnCopy": "",
                    "btnUrl": "",
                    "img3": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Dallas1800x600.original.jpg",
                    "img2": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Dallas768x600.original.jpg",
                    "img1": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Dallas600x343.original.jpg",
                    "bannerTitle": "We know you by name, not by account number.",
                    "bannerSubtitle": "",
                    "bannerBtn1Copy": "Find your Centralcreditsunion",
                    "bannerBtn1URL": "/locations/",
                    "bannerBtn2Copy": "Contact a Banker",
                    "bannerBtn2URL": "/contact/",
                    "bannerImg2": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/HP-hero-1800x600.original.jpg",
                    "bannerImg1": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/HP-hero-600x800.original.jpg"
                },
                "westlake": {
                    "slug": "westlake",
                    "title": "Welcome to Centralcreditsunion",
                    "subtitle": "",
                    "btnCopy": "",
                    "btnUrl": "",
                    "img3": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Austin1800x600.original.jpg",
                    "img2": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Austin768x600.original.jpg",
                    "img1": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Austin600x343.original.jpg",
                    "bannerTitle": "We know you by name, not by account number.",
                    "bannerSubtitle": "",
                    "bannerBtn1Copy": "Find your Centralcreditsunion",
                    "bannerBtn1URL": "/locations/",
                    "bannerBtn2Copy": "Contact a Banker",
                    "bannerBtn2URL": "/contact/",
                    "bannerImg2": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/HP-hero-1800x600.original.jpg",
                    "bannerImg1": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/HP-hero-600x800.original.jpg"
                },
                "tarrytown": {
                    "slug": "tarrytown",
                    "title": "Welcome to Centralcreditsunion",
                    "subtitle": "",
                    "btnCopy": "",
                    "btnUrl": "",
                    "img3": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Austin1800x600.original.jpg",
                    "img2": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Austin768x600.original.jpg",
                    "img1": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Austin600x343.original.jpg",
                    "bannerTitle": "",
                    "bannerSubtitle": "",
                    "bannerBtn1Copy": "",
                    "bannerBtn1URL": "",
                    "bannerBtn2Copy": "",
                    "bannerBtn2URL": "",
                    "bannerImg2": "",
                    "bannerImg1": ""
                },
                "houston": {
                    "slug": "houston",
                    "title": "Welcome to Centralcreditsunion",
                    "subtitle": "",
                    "btnCopy": "",
                    "btnUrl": "",
                    "img3": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Houston1800x600.original.jpg",
                    "img2": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Houston768x600.original.jpg",
                    "img1": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Houston600x343.original.jpg",
                    "bannerTitle": "",
                    "bannerSubtitle": "",
                    "bannerBtn1Copy": "",
                    "bannerBtn1URL": "",
                    "bannerBtn2Copy": "",
                    "bannerBtn2URL": "",
                    "bannerImg2": "",
                    "bannerImg1": ""
                }
            }
            var customLoc = false;

            function loadContent(loc) {
                window.clearTimeout(loc_timeout);

                var $heroContainer = document.querySelectorAll('.hero_container')[0],
                    $hero_content = $heroContainer.querySelectorAll('.hero_content')[0],
                    $title = $hero_content.querySelectorAll('.title')[0],
                    $subtitle = $hero_content.querySelectorAll('.subtitle')[0],
                    $button = $hero_content.querySelectorAll('.button')[0],
                    $link = $button.querySelectorAll('a')[0];

                if (loc === 'default') {
                    $heroContainer.classList.add('default');
                    $hero_content.classList.add('show');

                } else {
                    var loc_data = loc_content[loc];
                    customLoc = loc_data['img3'];

                    // Update Copy
                    // $hero_content.fadeTo(300, 0, function(){
                    $hero_content.classList.remove('show');

                    if (loc_data['title'] != '') {
                        $title.style.display = '';
                        $title.textContent = loc_data['title'];
                    } else {
                        $title.style.display = 'none';
                    }
                    if (loc_data['subtitle'] != '') {
                        $subtitle.style.display = '';
                        $subtitle.innerHTML = loc_data['subtitle'];
                    } else {
                        $subtitle.style.display = 'none';
                    }
                    if (loc_data['btnCopy'] != '') {
                        $button.style.display = '';
                        $link.textContent = loc_data['btnCopy'];
                        $link.setAttribute('href', loc_data['btnUrl']);
                    } else {
                        $button.style.display = 'none';
                    }
                    $hero_content.classList.add('show');
                    // $hero_content.css('opacity',1);
                    // });

                    // Update Background Images
                    // Preload image first depending on current viewprt size
                    preloadedImg = new Image();
                    if (window.matchMedia("(max-width: 767px)").matches) {
                        preloadedImg.src = loc_data['img1'];
                    } else if (window.matchMedia("(min-width: 768px) and (max-width: 1024px)").matches) {
                        preloadedImg.src = loc_data['img2'];
                    } else {
                        preloadedImg.src = loc_data['img3'];
                    }
                    preloadedImg.addEventListener('load', function() {
                        // Add <style> to the page
                        var css = document.createElement('style');
                        css.type = 'text/css';

                        var styles = '';
                        styles += '.hero_container {background-image:url(' + loc_data['img1'] + ')!important;}';
                        styles += '@media screen and (min-width:768px) {.hero_container{background-image:url(' + loc_data['img2'] + ')!important; }}';
                        styles += '@media screen and (min-width:1024px) {.hero_container{background-image:url(' + loc_data['img3'] + ')!important; }}';

                        if (css.styleSheet)
                            css.styleSheet.cssText = styles;
                        else
                            css.appendChild(document.createTextNode(styles));

                        document.getElementsByTagName("head")[0].appendChild(css);
                    });

                    // Update Parallax Image
                    $heroContainer.setAttribute('data-image-src', loc_data['img3']);

                }
            }


            // Request GeoLocation
            if (!window.localStorage.usersLocation && 'geolocation' in navigator) {
                // Timeout for no answer
                var loc_timeout = setTimeout(function() {
                    loadContent('default');
                }, 1);

                // Request user's location
                navigator.geolocation.getCurrentPosition(function(position) {
                    // console.info(position.coords.latitude, position.coords.longitude);

                    /* https://github.com/cameronbourke/closest-location */
                    function Deg2Rad(deg) {
                        return deg * Math.PI / 180;
                    }

                    function PythagorasEquirectangular(lat1, lon1, lat2, lon2) {
                        lat1 = Deg2Rad(lat1);
                        lat2 = Deg2Rad(lat2);
                        lon1 = Deg2Rad(lon1);
                        lon2 = Deg2Rad(lon2);
                        var R = 6371; // km
                        var x = (lon2 - lon1) * Math.cos((lat1 + lat2) / 2);
                        var y = (lat2 - lat1);
                        var d = Math.sqrt(x * x + y * y) * R;
                        return d;
                    }

                    function NearestCity(latitude, longitude, locations) {
                        var mindif = 99999;
                        var closest;

                        for (index = 0; index < locations.length; ++index) {
                            var dif = PythagorasEquirectangular(latitude, longitude, locations[index][1], locations[index][2]);
                            if (dif < mindif) {
                                closest = index;
                                mindif = dif;
                            }
                        }

                        // return the nearest location
                        var closestLocation = (locations[closest]);
                        // console.log('The closest location is ' + closestLocation[0]);
                        return closestLocation;
                    }

                    var closest_loc = NearestCity(position.coords.latitude, position.coords.longitude, locs);

                    // Keep this value for when the user returns to the site
                    window.localStorage.usersLocation = closest_loc[0];


                    loadContent(closest_loc[0]);
                });

            } else if (window.localStorage.usersLocation) {
                // Already have the location stored
                loadContent(window.localStorage.usersLocation);


            } else {
                // Can't use geolocation
                loadContent('default');
            }
            // END OF Homepage Location Based Content
        </script>


    </div>
    <!--! end of .hero_container -->


    <div id="main" role="main" class="home">


        <div class="photoCTAs">
            <div class="content_container">


                <div class="CTA">
                    <figure>
                        <a href="contact">

                            <img src="images/A24I0695_330x175.original.jpg" alt="" />
                        </a>
                    </figure>
                    <h2 class="title">
                        <a href="contact">Personal Solutions</a>
                    </h2>
                    <p>
                        Making your finances personal.
                    </p>
                    <p>
                        <a href="contact" class="more">Find your account<svg class="icon">
                                <use xlink:href="#long_arrow" />
                            </svg>
                        </a>
                    </p>
                </div>
                <!--! end of .CTA -->


                <div class="CTA">
                    <figure>
                        <a href="contact">

                            <img src="images/HP-business-services-330x175.original.jpg" alt="" />
                        </a>
                    </figure>
                    <h2 class="title">
                        <a href="contact">Business Services</a>
                    </h2>
                    <p>
                        We offer services to empower your success.
                    </p>
                    <p>
                        <a href="contact" class="more">Explore management services<svg class="icon">
                                <use xlink:href="#long_arrow" />
                            </svg>
                        </a>
                    </p>
                </div>
                <!--! end of .CTA -->


                <div class="CTA">
                    <figure>
                        <a href="lending-services">

                            <img src="images/HP-lending-services-330x175.original.jpg" alt="" />
                        </a>
                    </figure>
                    <h2 class="title">
                        <a href="lending-services">Lending Services</a>
                    </h2>
                    <p>
                        Business or Personal, we have the loan you need.
                    </p>
                    <p>
                        <a href="lending-services" class="more">Learn more<svg class="icon">
                                <use xlink:href="#long_arrow" />
                            </svg>
                        </a>
                    </p>
                </div>
                <!--! end of .CTA -->


            </div>
        </div>


        <div class="hero_banner">

            <div class="bg_img">
                <picture>


                    <source srcset="https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/HP-hero-1800x600.original.jpg" media="(min-width:768px)">
                    <img srcset="https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/HP-hero-600x800.original.jpg" alt="" />
                </picture>
            </div>
            <!--! end of .bg_img -->

            <div class="hero_content">
                <div class="content_container">

                    <p class="title">
                        We know you by name, not by account number.
                    </p>

                    <p class="subtitle"></p>

                    <p class="buttons">

                        <a href="locations" class="btn">
                            <svg class="icon">
                                <use xlink:href="#locations_red" />
                            </svg>
                            Find your Centralcreditsunion
                        </a>
                        <a href="contact" class="btn btn--alt">Contact a Banker</a>
                    </p>

                </div>
                <!--! end of .content -->

            </div>
            <!--! end of .hero -->
        </div>
        <!--! end of .hero_banner -->


        <div class="home_blog_posts">
            <div class="content_container">


                <div class="featured_post">

                    <div class="copy">
                        <p class="date">
                            Blog Post
                            <span>January 05, 2021</span>
                        </p>
                        <h2 class="title">
                            <a href="blog">VIDEO: Thanks For Being Our Neighbors in 2020, When It Mattered Most</a>
                        </h2>
                        <p>
                            <a href="blog">Read more
                                <svg class="icon">
                                    <use xlink:href="#long_arrow" />
                                </svg>
                            </a>
                        </p>
                    </div>
                    <!--! end of .copy -->
                </div>
                <!--! end of .featured_post -->

                <div class="more_links">
                    <h2 class="title">
                        More from Benchmark
                    </h2>
                    <ul>

                        <li><a href="careers">We have several positions available on our Careers page including a Customer Service Representative in Dallas.</a></li>

                    </ul>
                </div>
                <!--! end of .more_links -->

            </div>
            <!--! end of .content_container -->
        </div>
        <!--! end of .home_blog_posts -->


        <div class="hero_banner">

            <div class="bg_img">
                <picture>


                    <source srcset="https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB_Kids2_1800x600.original.jpg" media="(min-width:768px)">
                    <img srcset="https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB_Kids2_600x800.original.jpg" alt="" />
                </picture>
            </div>
            <!--! end of .bg_img -->

            <div class="hero_content">
                <div class="content_container">

                    <p class="title">
                        Kid&#x27;s Corner
                    </p>

                    <p class="subtitle">
                        We are proud to partner with you in teaching the value of spending, saving and giving.
                    </p>

                    <p class="buttons">
                        <a href="community-giving" class="btn btn--alt">Visit our Kid&#x27;s Corner</a>
                    </p>

                </div>
                <!--! end of .content -->

            </div>
            <!--! end of .hero -->
        </div>
        <!--! end of .hero_banner -->


        <script>
            function loadBannerContent(loc) {

                var $heroBanner = document.querySelectorAll('.hero_banner')[0],
                    $bannerPictureSml = $heroBanner.querySelectorAll('picture img')[0],
                    $bannerPictureLrg = $heroBanner.querySelectorAll('picture source')[0],
                    $bannerTitle = $heroBanner.querySelectorAll('.title')[0],
                    $bannerSubtitle = $heroBanner.querySelectorAll('.subtitle')[0],
                    $bannerButton1 = $heroBanner.querySelectorAll('.buttons a')[0],
                    $bannerButton2 = $heroBanner.querySelectorAll('.buttons a')[1];

                if (loc === 'default') {
                    // console.log('location default');
                } else {
                    // console.log('location', loc);
                    var loc_data = loc_content[loc];

                    // Update Copy
                    if (loc_data['bannerTitle'] != '') {
                        $bannerTitle.style.display = '';
                        $bannerTitle.textContent = loc_data['bannerTitle'];
                    } else {
                        $bannerTitle.style.display = 'none';
                    }
                    if (loc_data['bannerSubtitle'] != '') {
                        $bannerSubtitle.style.display = '';
                        $bannerSubtitle.textContent = loc_data['bannerSubtitle'];
                    } else {
                        $bannerSubtitle.style.display = 'none';
                    }
                    if (loc_data['bannerBtn1Copy'] != '') {
                        $bannerButton1.style.display = '';
                        $bannerButton1.textContent = loc_data['bannerBtn1Copy'];
                        $bannerButton1.setAttribute('href', loc_data['bannerBtn1URL']);
                    } else {
                        $bannerButton1.style.display = 'none';
                    }
                    if (loc_data['bannerBtn2Copy'] != '') {
                        $bannerButton2.style.display = '';
                        $bannerButton2.textContent = loc_data['bannerBtn2Copy'];
                        $bannerButton2.setAttribute('href', loc_data['bannerBtn2URL']);
                    } else {
                        $bannerButton2.style.display = 'none';
                    }

                    // Update Background Images
                    $bannerPictureSml.setAttribute('srcset', loc_data['bannerImg1']);
                    $bannerPictureLrg.setAttribute('srcset', loc_data['bannerImg2']);

                }
            }

            if ('geolocation' in navigator) {
                var check = setInterval(function() {
                    if (window.localStorage.usersLocation) {
                        window.clearInterval(check);
                        loadBannerContent(window.localStorage.usersLocation);
                    }
                }, 400);
                var timeout = setTimeout(function() {
                    window.clearInterval(check);
                }, 12000);
            }
        </script>



    </div>
    <!--! end of #main -->



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

</body><!-- Mirrored from www.benchmarkbank.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Sep 2021 11:44:28 GMT -->

</html>