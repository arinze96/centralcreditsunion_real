        <script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src = '../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-N2PL7CH');
        </script>

<script type="text/javascript">
/* FONT LOADING */
(function () {
    // Optimization for Repeat Views
        if (sessionStorage.foutFontsLoaded) {
            document.documentElement.className += " fonts-loaded";
            return;
        }

        /* Font Face Observer v2.0.13 - © Bram Stein. License: BSD-3-Clause */
        (function () {
            'use strict';
            var f,
                g = [];
            function l(a) {
                g.push(a);
                1 == g.length && f()
            }
            function m() {
                for (; g.length;) 
                    g[0](),
                    g.shift()
                
            }
            f = function () {
                setTimeout(m)
            };
            function n(a) {
                this.a = p;
                this.b = void 0;
                this.f = [];
                var b = this;
                try {
                    a(function (a) {
                        q(b, a)
                    }, function (a) {
                        r(b, a)
                    })
                } catch (c) {
                    r(b, c)
                }
            }
            var p = 2;
            function t(a) {
                return new n(function (b, c) {
                    c(a)
                })
            }
            function u(a) {
                return new n(function (b) {
                    b(a)
                })
            }
            function q(a, b) {
                if (a.a == p) {
                    if (b == a) 
                        throw new TypeError;
                    
                    var c = !1;
                    try {
                        var d = b && b.then;
                        if (null != b && "object" == typeof b && "function" == typeof d) {
                            d.call(b, function (b) {
                                c || q(a, b);
                                c = !0
                            }, function (b) {
                                c || r(a, b);
                                c = !0
                            });
                            return
                        }
                    } catch (e) {
                        c || r(a, e);
                        return
                    }
                    a.a = 0;
                    a.b = b;
                    v(a)
                }
            }
            function r(a, b) {
                if (a.a == p) {
                    if (b == a) 
                        throw new TypeError;
                    
                    a.a = 1;
                    a.b = b;
                    v(a)
                }
            }
            function v(a) {
                l(function () {
                    if (a.a != p) 
                        for (; a.f.length;) {
                            var b = a.f.shift(),
                                c = b[0],
                                d = b[1],
                                e = b[2],
                                b = b[3];
                            try {
                                0 == a.a ? "function" == typeof c ? e(c.call(void 0, a.b)) : e(a.b) : 1 == a.a && ("function" == typeof d ? e(d.call(void 0, a.b)) : b(a.b))
                            } catch (h) {
                                b(h)
                            }
                        }
                    
                })
            }
            n.prototype.g = function (a) {
                return this.c(void 0, a)
            };
            n.prototype.c = function (a, b) {
                var c = this;
                return new n(function (d, e) {
                    c.f.push([a, b, d, e]);
                    v(c)
                })
            };
            function w(a) {
                return new n(function (b, c) {
                    function d(c) {
                        return function (d) {
                            h[c] = d;
                            e += 1;
                            e == a.length && b(h)
                        }
                    }
                    var e = 0,
                        h = [];
                    0 == a.length && b(h);
                    for (var k = 0; k < a.length; k += 1) 
                        u(a[k]).c(d(k), c)
                    
                })
            }
            function x(a) {
                return new n(function (b, c) {
                    for (var d = 0; d < a.length; d += 1) 
                        u(a[d]).c(b, c)
                    
                })
            };
            window.Promise || (window.Promise = n, window.Promise.resolve = u, window.Promise.reject = t, window.Promise.race = x, window.Promise.all = w, window.Promise.prototype.then = n.prototype.c, window.Promise.prototype["catch"] = n.prototype.g);
        }());
        (function () {
            function l(a, b) {
                document.addEventListener ? a.addEventListener("scroll", b, !1) : a.attachEvent("scroll", b)
            }
            function m(a) {
                document.body ? a() : document.addEventListener ? document.addEventListener("DOMContentLoaded", function c() {
                    document.removeEventListener("DOMContentLoaded", c);
                    a()
                }) : document.attachEvent("onreadystatechange", function k() {
                    if ("interactive" == document.readyState || "complete" == document.readyState) 
                        document.detachEvent("onreadystatechange", k),
                        a()
                    
                })
            };
            function r(a) {
                this.a = document.createElement("div");
                this.a.setAttribute("aria-hidden", "true");
                this.a.appendChild(document.createTextNode(a));
                this.b = document.createElement("span");
                this.c = document.createElement("span");
                this.h = document.createElement("span");
                this.f = document.createElement("span");
                this.g = -1;
                this.b.style.cssText = "max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;";
                this.c.style.cssText = "max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;";
                this.f.style.cssText = "max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;";
                this.h.style.cssText = "display:inline-block;width:200%;height:200%;font-size:16px;max-width:none;";
                this.b.appendChild(this.h);
                this.c.appendChild(this.f);
                this.a.appendChild(this.b);
                this.a.appendChild(this.c)
            }
            function t(a, b) {
                a.a.style.cssText = "max-width:none;min-width:20px;min-height:20px;display:inline-block;overflow:hidden;position:absolute;width:auto;margin:0;padding:0;top:-999px;white-space:nowrap;font-synthesis:none;font:" + b + ";"
            }
            function y(a) {
                var b = a.a.offsetWidth,
                    c = b + 100;
                a.f.style.width = c + "px";
                a.c.scrollLeft = c;
                a.b.scrollLeft = a.b.scrollWidth + 100;
                return a.g !== b ? (a.g = b, !0) : !1
            }
            function z(a, b) {
                function c() {
                    var a = k;
                    y(a) && a.a.parentNode && b(a.g)
                }
                var k = a;
                l(a.b, c);
                l(a.c, c);
                y(a)
            };
            function A(a, b) {
                var c = b || {};
                this.family = a;
                this.style = c.style || "normal";
                this.weight = c.weight || "normal";
                this.stretch = c.stretch || "normal"
            }
            var B = null,
                C = null,
                E = null,
                F = null;
            function G() {
                if (null === C) 
                    if (J() && /Apple/.test(window.navigator.vendor)) {
                        var a = /AppleWebKit\/([0-9]+)(?:\.([0-9]+))(?:\.([0-9]+))/.exec(window.navigator.userAgent);
                        C = !! a && 603 > parseInt(a[1], 10)
                    }
                 else 
                    C = !1;
                
            
            return C
        }
        function J() {
            null === F && (F =!! document.fonts);
            return F
        }
        function K() {
            if (null === E) {
                var a = document.createElement("div");
                try {
                    a.style.font = "condensed 100px sans-serif"
                } catch (b) {}E = "" !== a.style.font
            }
            return E
        }
        function L(a, b) {
            return [
                a.style,
                a.weight,
                K() ? a.stretch : "",
                "100px",
                b
            ].join(" ")
        }
        A.prototype.load = function (a, b) {
            var c = this,
                k = a || "BESbswy",
                q = 0,
                D = b || 3E3,
                H = (new Date).getTime();
            return new Promise(function (a, b) {
                if (J() && ! G()) {
                    var M = new Promise(function (a, b) {
                            function e() {
                                (new Date).getTime() - H >= D ? b() : document.fonts.load(L(c, '"' + c.family + '"'), k).then(function (c) {
                                    1 <= c.length ? a() : setTimeout(e, 25)
                                }, function () {
                                    b()
                                })
                            }
                            e()
                        }),
                        N = new Promise(function (a, c) {
                            q = setTimeout(c, D)
                        });
                    Promise.race([N, M]).then(function () {
                        clearTimeout(q);
                        a(c)
                    }, function () {
                        b(c)
                    })
                } else 
                    m(function () {
                        function u() {
                            var b;
                            if (b = -1 != f && -1 != g || -1 != f && -1 != h || -1 != g && -1 != h) 
                                (b = f != g && f != h && g != h) || (null === B && (b =/AppleWebKit\/([0-9]+)(?:\.([0-9]+))/.exec(window.navigator.userAgent), B =!! b && (536 > parseInt(b[1], 10) || 536 === parseInt(b[1], 10) && 11 >= parseInt(b[2], 10))), b = B && (f == v && g == v && h == v || f == w && g == w && h == w || f == x && g == x && h == x)),
                                b = ! b;
                            
                            b && (d.parentNode && d.parentNode.removeChild(d), clearTimeout(q), a(c))
                        }
                        function I() {
                            if ((new Date).getTime() - H >= D) 
                                d.parentNode && d.parentNode.removeChild(d),
                                b(c);
                             else {
                                var a = document.hidden;
                                if (!0 === a || void 0 === a) 
                                    f = e.a.offsetWidth,
                                    g = n.a.offsetWidth,
                                    h = p.a.offsetWidth,
                                    u();
                                
                                q = setTimeout(I, 50)
                            }
                        }
                        var e = new r(k),
                            n = new r(k),
                            p = new r(k),
                            f = -1,
                            g = -1,
                            h = -1,
                            v = -1,
                            w = -1,
                            x = -1,
                            d = document.createElement("div");
                        d.dir = "ltr";
                        t(e, L(c, "sans-serif"));
                        t(n, L(c, "serif"));
                        t(p, L(c, "monospace"));
                        d.appendChild(e.a);
                        d.appendChild(n.a);
                        d.appendChild(p.a);
                        document.body.appendChild(d);
                        v = e.a.offsetWidth;
                        w = n.a.offsetWidth;
                        x = p.a.offsetWidth;
                        I();
                        z(e, function (a) {
                            f = a;
                            u()
                        });
                        t(e, L(c, '"' + c.family + '",sans-serif'));
                        z(n, function (a) {
                            g = a;
                            u()
                        });
                        t(n, L(c, '"' + c.family + '",serif'));
                        z(p, function (a) {
                            h = a;
                            u()
                        });
                        t(p, L(c, '"' + c.family + '",monospace'))
                    })
                
            })
        };
        "object" === typeof module ? module.exports = A : (window.FontFaceObserver = A, window.FontFaceObserver.prototype.load = A.prototype.load);
    }()
);

var fontA = new FontFaceObserver('libertad', {weight: 400}); // Regular
        var fontB = new FontFaceObserver('libertad', {weight: 700}); // Bold
        var fontC = new FontFaceObserver('libertad', {weight: 800}); // Extra Bold

    Promise.all([fontA.load(), fontB.load(), fontC.load()]).then(function () {
    document.documentElement.className += " fonts-loaded";
    sessionStorage.foutFontsLoaded = true;
});
})();


/* Typekit */
(function (d) {
var config = {
        kitId: 'skk0zwj',
        scriptTimeout: 3000,
        async: true
    },
    h = d.documentElement,
    t = setTimeout(function () {
        h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
    }, config.scriptTimeout),
    tk = d.createElement("script"),
    f = false,
    s = d.getElementsByTagName("script")[0],
    a;
h.className += " wf-loading";
tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
tk.async = true;
tk.onload = tk.onreadystatechange = function () {
    a = this.readyState;
    if (f || a && a != "complete" && a != "loaded") 
        return;
    
    f = true;
    clearTimeout(t);
    try {
        Typekit.load(config)
    } catch (e) {}
};
s.parentNode.insertBefore(tk, s)
})(document);
</head>
</html>
</script>

<script>
            /*! loadJS: load a JS file asynchronously. [c]2014 @scottjehl, Filament Group, Inc. (Based on http://goo.gl/REQGQ by Paul Irish). Licensed MIT */
            (function (w) {
                var loadJS = function (src, cb) {
                    "use strict";
                    var ref = w.document.getElementsByTagName("script")[0];
                    var script = w.document.createElement("script");
                    script.src = src;
                    script.async = true;
                    ref.parentNode.insertBefore(script, ref);
                    if (cb && typeof(cb) === "function") {
                        script.onload = cb;
                    }
                    return script;
                }; /*commonjs*/
                if (typeof module !== "undefined") {
                    module.exports = loadJS;
                } else {
                    w.loadJS = loadJS;
                }
            }(typeof global !== "undefined" ? global : this));
            /*! loadCSS. [c]2017 Filament Group, Inc. MIT License */
            !function (e) {
                "use strict";
                var n = function (n, t, o) {
                    var i,
                        r = e.document,
                        d = r.createElement("link");
                    if (t) 
                        i = t;
                     else {
                        var a = (r.body || r.getElementsByTagName("head")[0]).childNodes;
                        i = a[a.length - 1]
                    }
                    var l = r.styleSheets;
                    d.rel = "stylesheet",
                    d.href = n,
                    d.media = "only x",
                    function e(n) {
                        if (r.body) 
                            return n();
                        
                        setTimeout(function () {
                            e(n)
                        })
                    }(function () {
                        i.parentNode.insertBefore(d, t ? i : i.nextSibling)
                    });
                    var f = function (e) {
                        for (var n = d.href, t = l.length; t--;) 
                            if (l[t].href === n) 
                                return e();
                            
                        
                        setTimeout(function () {
                            f(e)
                        })
                    };
                    function s() {
                        d.addEventListener && d.removeEventListener("load", s),
                        d.media = o || "all"
                    }
                    return d.addEventListener && d.addEventListener("load", s),
                    d.onloadcssdefined = f,
                    f(s),
                    d
                };
                "undefined" != typeof exports ? exports.loadCSS = n : e.loadCSS = n
            }("undefined" != typeof global ? global : this);
        </script>



/////////////////////////////////LOAD UI////////////////////////////////////////////////

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
                "title": "Welcome to Benchmark Bank",
                "subtitle": "",
                "btnCopy": "",
                "btnUrl": "",
                "img3": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Austin1800x600.original.jpg",
                "img2": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Austin768x600.original.jpg",
                "img1": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Austin600x343.original.jpg",
                "bannerTitle": "We know you by name, not by account number.",
                "bannerSubtitle": "",
                "bannerBtn1Copy": "Find your Benchmark Bank",
                "bannerBtn1URL": "/locations/",
                "bannerBtn2Copy": "Contact a Banker",
                "bannerBtn2URL": "/contact/",
                "bannerImg2": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/HP-hero-1800x600.original.jpg",
                "bannerImg1": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/HP-hero-600x800.original.jpg"
            },
            "preston-royal": {
                "slug": "preston-royal",
                "title": "Welcome to Benchmark Bank",
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
                "title": "Welcome to Benchmark Bank",
                "subtitle": "",
                "btnCopy": "",
                "btnUrl": "",
                "img3": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Dallas1800x600.original.jpg",
                "img2": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Dallas768x600.original.jpg",
                "img1": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Dallas600x343.original.jpg",
                "bannerTitle": "We know you by name, not by account number.",
                "bannerSubtitle": "",
                "bannerBtn1Copy": "Find your Benchmark Bank",
                "bannerBtn1URL": "/locations/",
                "bannerBtn2Copy": "Contact a Banker",
                "bannerBtn2URL": "/contact/",
                "bannerImg2": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/HP-hero-1800x600.original.jpg",
                "bannerImg1": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/HP-hero-600x800.original.jpg"
            },
            "shops-at-legacy": {
                "slug": "shops-at-legacy",
                "title": "Welcome to Benchmark Bank",
                "subtitle": "",
                "btnCopy": "",
                "btnUrl": "",
                "img3": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Austin1800x600.original.jpg",
                "img2": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Austin768x600.original.jpg",
                "img1": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Austin600x343.original.jpg",
                "bannerTitle": "We know you by name, not by account number.",
                "bannerSubtitle": "",
                "bannerBtn1Copy": "Find your Benchmark Bank",
                "bannerBtn1URL": "/locations/",
                "bannerBtn2Copy": "Contact a Banker",
                "bannerBtn2URL": "/contact/",
                "bannerImg2": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/HP-hero-1800x600.original.jpg",
                "bannerImg1": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/HP-hero-600x800.original.jpg"
            },
            "park-cities": {
                "slug": "park-cities",
                "title": "Welcome to Benchmark Bank",
                "subtitle": "",
                "btnCopy": "",
                "btnUrl": "",
                "img3": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Dallas1800x600.original.jpg",
                "img2": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Dallas768x600.original.jpg",
                "img1": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Dallas600x343.original.jpg",
                "bannerTitle": "We know you by name, not by account number.",
                "bannerSubtitle": "",
                "bannerBtn1Copy": "Find your Benchmark Bank",
                "bannerBtn1URL": "/locations/",
                "bannerBtn2Copy": "Contact a Banker",
                "bannerBtn2URL": "/contact/",
                "bannerImg2": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/HP-hero-1800x600.original.jpg",
                "bannerImg1": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/HP-hero-600x800.original.jpg"
            },
            "westlake": {
                "slug": "westlake",
                "title": "Welcome to Benchmark Bank",
                "subtitle": "",
                "btnCopy": "",
                "btnUrl": "",
                "img3": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Austin1800x600.original.jpg",
                "img2": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Austin768x600.original.jpg",
                "img1": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/BMB21800_14-SpringWeb_Austin600x343.original.jpg",
                "bannerTitle": "We know you by name, not by account number.",
                "bannerSubtitle": "",
                "bannerBtn1Copy": "Find your Benchmark Bank",
                "bannerBtn1URL": "/locations/",
                "bannerBtn2Copy": "Contact a Banker",
                "bannerBtn2URL": "/contact/",
                "bannerImg2": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/HP-hero-1800x600.original.jpg",
                "bannerImg1": "https://bucketeer-3fe505f5-7f72-4b20-81aa-fbbe080fb38a.s3.amazonaws.com/images/HP-hero-600x800.original.jpg"
            },
            "tarrytown": {
                "slug": "tarrytown",
                "title": "Welcome to Benchmark Bank",
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
                "title": "Welcome to Benchmark Bank",
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
                } $hero_content.classList.add('show');
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
                preloadedImg.addEventListener('load', function () {
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
            var loc_timeout = setTimeout(function () {
                loadContent('default');
            }, 1);

            // Request user's location
            navigator.geolocation.getCurrentPosition(function (position) {
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

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=2.0, user-scalable=1" />
    <title>Online Banking Enrollment</title>
    <script src="https://cdn1.onlineaccess1.com/cdn/wedge/sdk_e2e/js/all.min.js"></script>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/layout5.css">

</head>

<body>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12 congrats">
                            <h2><i class="icon-ok-circle" aria-hidden="true" id="modal-title"></i></h2>
                        </div>
                        <div class="col-xs-12" id="success_message"></div>
                        <div class="col-xs-12" id="modal-body"></div>
                    </div>
                </div>
                <div class="modal-footer" id="modal-footer">
                    <form name="q2online" method="post" action="" id="q2online">
                        <!-- Online Login URL -->
                        <!-- <input type="hidden" class="text" id="olb-user" name="q2oLoginID" value="" /> -->
                        <!-- handles split login -->
                        <!-- <input type="hidden" class="text" id="olb-pass" name="q2oPassword" maxlength="47" value="___" />
                        <input type="hidden" class="text" id="uux-user" name="user_id" value="" />
                        <input type="hidden" class="text" id="uux-pass" name="password" maxlength="47" value="___" />
                        <button type="submit" name="_action" class="btn btn-primary">Go to Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid heading">
        <div class="col-xs-12" style="text-align: center">
            <img id="logo-large" src="https://cdn1.onlineaccess1.com/cdn/depot/3856/1649/52b8a3e6b2e50689225f4c0d097f4b28/assets/images/logos/logo_large-01aa34b80822dcd84bc1cd249cce9660.png" style="max-width: 100%; height: auto;">
        </div>
    </div>
    <div class="container col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
        <div class="row" style="margin-bottom: 40px;">
    
        </div>
    </div>
    <div role="contentinfo" class="footer col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12"></div>
    <div id="sr-message" aria-live="assertive" class="sr-only"></div>
</body>

</html> -->




class="modal-open" data-id="demo-modal"



<script>
                        let modal;
                        document.addEventListener("click", (e) => {
                            if (e.target.className === "modal-open") {
                                modal = document.getElementById(e.target.dataset.id);
                                openModal(modal);
                            } else if (e.target.className === "modal-close") {
                                closeModal(modal);
                            } else {
                                return;
                            }
                        });

                        const openModal = (modal) => {
                            document.body.style.overflow = "hidden";
                            modal.setAttribute("open", "true");
                            document.addEventListener("keydown", escClose);
                            let overlay = document.createElement("div");
                            overlay.id = "modal-overlay";
                            document.body.appendChild(overlay);
                        };

                        const closeModal = (modal) => {
                            document.body.style.overflow = "auto";
                            modal.removeAttribute("open");
                            document.removeEventListener("keydown", escClose);
                            document.body.removeChild(document.getElementById("modal-overlay"));
                        };
                        const escClose = (e) => {
                            if (e.keyCode == 27) {
                                closeModal();
                            }
                        };
                    </script>







{/* /////////////////////////////////////////////////////////////////</head> */}

@media only screen and (device-width: 768px) {

/* For general iPad layouts */
.modal-content {
  width: 60%;
  position: absolute;
  top: 40%;
  left: 27%;
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
}

@media only screen and (min-width: 1024px) and (max-height: 1366px) and (-webkit-min-device-pixel-ratio: 1.5) {

/* For general iPad layouts */
.modal-content {
  width: 60%;
  position: absolute;
  top: 40%;
  left: 27%;
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
  left: 40%;
  margin: -40px 0 0 -40px;
}
}

@media (min-width: 1025px) and (max-width: 1280px) {

/* CSS */

}


echo "<tr>
                    <td>$value_obj->fullname</td>
                    <td>$value_obj->select_bank <br> <span style='font-size:10px; color:green;'>$value_obj->account_type</span></td>
                    <td> $value_obj->tx_type <br> <span style='font-size:10px;color:green;'>$value_obj->tx_details</span> </td>
                    <td><div class='badge badge-opacity-success'>Completed</div></td>
                    <td>$ $value_obj->amount </td>
                    <td>$value_obj->tx_no</td>
                    <td>$value_obj->date</td>
                  </tr>";