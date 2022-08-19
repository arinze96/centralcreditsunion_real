<footer id="footer">
    <div class="container">

        <div class="top">
            <img src="<?=$company->favicon2?>" alt="Centralcreditsunion Logo" class="logo"/>

            <div class="details">
                <p class="loc">
                    <svg class="icon"><use xlink:href="#footer_bank"/></svg>
                    <a href="#" target="_blank">
                        Bellwood<br/>
                        1001 Mannheim Road<br/>
                        Bellwood. IL 601104<br/>
                    </a>
                </p>

                <p class="loc">
                    <svg class="icon"><use xlink:href="#footer_bank"/></svg>
                    <a href="#" target="_blank">
                        Orlando<br/>
                        9850 W 159th street<br/>
                        Orlando Park IL 60467<br/>
                        Plano, Texas 75024
                    </a>
                </p>

                <div class="email_and_tel">
                    <p class="email">
                        <svg class="icon"><use xlink:href="customercare@centralcreditsunion.com"/></svg>
                        <a href="#">Email Us</a>
                    </p>

                    <p class="tel">
                        <svg class="icon"><use xlink:href="#phone_outline_dark"/></svg>
                        <a href="tel://972.673.4000">708.649.6400</a>
                    </p>
                </div>

                <p class="social">
                    <a class="fb" href="#" target="_blank">
                        <svg class="icon"><use xlink:href="#facebook"/></svg>
                        <span class="label">Facebook</span>
                    </a>
                    <a class="ig" href="#" target="_blank">
                        <svg class="icon"><use xlink:href="#instagram"/></svg>
                        <span class="label">Instagram</span>
                    </a>
                </p>
            </div>
            <!--! end of .details -->

            <nav>
                <ul>
                    <li>
                        Centralcreditsunion
                        <ul>
                            <li><a href="history">History</a></li>
                            <li><a href="business_philosophy">Business Philosophy</a></li>
                            <li><a href="leadership">Leadership Team</a></li>
                            <li><a href="community_giving">Community Giving</a></li>
                            <li><a href="careers">Careers</a></li>
                        </ul>
                    </li>
                </ul>

                <ul>
                    <li>
                        Support
                        <ul>
                            <li><a href="legal">Legal</a></li>
                            <li><a href="contact">Help Center</a></li>
                            <li><a href="contact">Contact Us</a></li>
                        </ul>
                    </li>
                </ul>

                <ul>
                    <li>
                        More
                        <ul>
                            <li><a href="blog">Blog</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <!--! end of .top -->

        <div class="bottom">
            <div class="logos">
                <img src="images/img/footer_logo_bauer.c5e0973fd14b.png" alt=""/>
                <img src="images/img/footer_logo_DMN.7d46b9b338aa.png" alt=""/>
                <img src="images/img/footer_logo_americanBanker.2b23a343a7be.png" alt=""/>
                <img src="images/img/footer_logo_DBJ.932c560ffd2f.png" alt=""/>
            </div>

            <div class="copy">
                <p class="affiliations">
                    <img src="images/img/equal-housing-lender.14075e51e868.png" alt="Equal Housing Lender" class="equal"/>
                    <img src="images/img/FDIC.bc6c87ac4c4c.png" alt="Member FDIC" class="fdic"/>
                </p>

                <ul>
                    <li>
                        <a href="legal/index.html">Disclosures, Security &amp; Financial Privacy Rights</a>
                    </li>
                    <li>
                        NMLS #403379
                    </li>
                </ul>

                <p>
                    Centralcreditsunion Title, LLC and Centralcreditsunion Private Wealth Management, LLC are wholly-owned subsidiaries of Centralcreditsunion. Centralcreditsunion Title and Centralcreditsunion Private Wealth Management products are not FDIC-insured, may lose value, and are not bank guaranteed. Centralcreditsunion Private Wealth Management, LLC is a Registered Investment Advisor.
                </p>

                <p class="copyright">
                    &copy; Copyright 2021 Centralcreditsunion, LLC
                                                &nbsp;&nbsp;&nbsp;
                    <a href="sitemap/index.html">Site Map</a>
                    &nbsp;&nbsp;&nbsp;
                    <a href="http://www.insite.net/" target="_blank" title="Insite">Site by Insite</a>
                </p>
            </div>
        </div>
        <!--! end of .bottom -->

    </div>
    <!--! end of .container -->
</footer>

<script src="<?=$uri->backend?>/js/jquery_3.3.1.min.js"></script>
<script>
    window.jQuery || document.write('<script src="js/jquery-3.3.1.min.html"><\/script>')
</script>

<div class="modal_bg"></div>
<div class="modal">
    <p class="eyelash">Third Party Site Disclosure</p>
    <h2 class="title">You are leaving Centralcreditsunion’s Website.</h2>
    <div class="rich-text">
        <p>Links that may be accessed via this site are for the convenience of informational purposes only. Any products and services accessed through this link are not provided or guaranteed by Centralcreditsunion. The site you are about to visit may have a privacy policy that is different than Centralcreditsunion’s.</p>
        <p>Please review their privacy policy. Centralcreditsunion does not endorse the content contained in these sites, nor the organizations publishing those sites, and hereby disclaims any responsibility for such content.</p>
    </div>
    <p class="ext_link">
        <a href="#" class="btn btn--alt" target="_blank">Continue<span class="link_title"></span>
        </a>
    </p>
    <button class="secondary">Cancel and return to website</button>
</div>
<!--! end of .modal -->

<script>
    var static = 'static/home.php';

    // Async Load of Custom Javascript
    loadJS('js/main.min.c92b2706efe0.js');

    // Load SVG Sprites
    $.get("images/img/sprites.c0a2dbac1319.svg", function (data) {
        var div = document.createElement("div");
        div.innerHTML = new XMLSerializer().serializeToString(data.documentElement);
        document.body.insertBefore(div, document.body.childNodes[0]);
    });
</script>