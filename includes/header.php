<meta name="description" content="Personal and Business Banking, and Lending Services tailored to you, with locations in Austin, Dallas, Houston and Frisco." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">

<!-- Open Graph data -->
<meta property="og:title" content="Banking, Credit Cards, Loans and more - Benchmark Bank" />
<meta property="og:type" content="article" />
<meta property="og:url" content="https://www.benchmarkbank.com/" />


<meta property="og:image" content="images/benchmarkbank-dallas-fall-2020-1880x800.original.jpg" />

<meta property="og:description" content="Personal and Business Banking, and Lending Services tailored to you, with locations in Austin, Dallas, Houston and Frisco." />

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover">

<link rel="shortcut icon" href="<?=$company->favicon?>" />
<link rel="apple-touch-icon" href="<?=$company->favicon?>">
<script>
    /*! loadJS: load a JS file asynchronously. [c]2014 @scottjehl, Filament Group, Inc. (Based on http://goo.gl/REQGQ by Paul Irish). Licensed MIT */
    (function(w) {
        var loadJS = function(src, cb) {
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
    ! function(e) {
        "use strict";
        var n = function(n, t, o) {
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

                    setTimeout(function() {
                        e(n)
                    })
                }(function() {
                    i.parentNode.insertBefore(d, t ? i : i.nextSibling)
                });
            var f = function(e) {
                for (var n = d.href, t = l.length; t--;)
                    if (l[t].href === n)
                        return e();


                setTimeout(function() {
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

<link rel="stylesheet" href="css/styles.css">


<script type="text/javascript">
    /* FONT LOADING */
    (function() {
        // Optimization for Repeat Views
        if (sessionStorage.foutFontsLoaded) {
            document.documentElement.className += " fonts-loaded";
            return;
        }

        /* Font Face Observer v2.0.13 - © Bram Stein. License: BSD-3-Clause */
        (function() {
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
            f = function() {
                setTimeout(m)
            };

            function n(a) {
                this.a = p;
                this.b = void 0;
                this.f = [];
                var b = this;
                try {
                    a(function(a) {
                        q(b, a)
                    }, function(a) {
                        r(b, a)
                    })
                } catch (c) {
                    r(b, c)
                }
            }
            var p = 2;

            function t(a) {
                return new n(function(b, c) {
                    c(a)
                })
            }

            function u(a) {
                return new n(function(b) {
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
                            d.call(b, function(b) {
                                c || q(a, b);
                                c = !0
                            }, function(b) {
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
                l(function() {
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
            n.prototype.g = function(a) {
                return this.c(void 0, a)
            };
            n.prototype.c = function(a, b) {
                var c = this;
                return new n(function(d, e) {
                    c.f.push([a, b, d, e]);
                    v(c)
                })
            };

            function w(a) {
                return new n(function(b, c) {
                    function d(c) {
                        return function(d) {
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
                return new n(function(b, c) {
                    for (var d = 0; d < a.length; d += 1)
                        u(a[d]).c(b, c)

                })
            };
            window.Promise || (window.Promise = n, window.Promise.resolve = u, window.Promise.reject = t, window.Promise.race = x, window.Promise.all = w, window.Promise.prototype.then = n.prototype.c, window.Promise.prototype["catch"] = n.prototype.g);
        }());
        (function() {
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
                        C = !!a && 603 > parseInt(a[1], 10)
                    }
                else
                    C = !1;


                return C
            }

            function J() {
                null === F && (F = !!document.fonts);
                return F
            }

            function K() {
                if (null === E) {
                    var a = document.createElement("div");
                    try {
                        a.style.font = "condensed 100px sans-serif"
                    } catch (b) {}
                    E = "" !== a.style.font
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
            A.prototype.load = function(a, b) {
                var c = this,
                    k = a || "BESbswy",
                    q = 0,
                    D = b || 3E3,
                    H = (new Date).getTime();
                return new Promise(function(a, b) {
                    if (J() && !G()) {
                        var M = new Promise(function(a, b) {
                                function e() {
                                    (new Date).getTime() - H >= D ? b() : document.fonts.load(L(c, '"' + c.family + '"'), k).then(function(c) {
                                        1 <= c.length ? a() : setTimeout(e, 25)
                                    }, function() {
                                        b()
                                    })
                                }
                                e()
                            }),
                            N = new Promise(function(a, c) {
                                q = setTimeout(c, D)
                            });
                        Promise.race([N, M]).then(function() {
                            clearTimeout(q);
                            a(c)
                        }, function() {
                            b(c)
                        })
                    } else
                        m(function() {
                            function u() {
                                var b;
                                if (b = -1 != f && -1 != g || -1 != f && -1 != h || -1 != g && -1 != h)
                                    (b = f != g && f != h && g != h) || (null === B && (b = /AppleWebKit\/([0-9]+)(?:\.([0-9]+))/.exec(window.navigator.userAgent), B = !!b && (536 > parseInt(b[1], 10) || 536 === parseInt(b[1], 10) && 11 >= parseInt(b[2], 10))), b = B && (f == v && g == v && h == v || f == w && g == w && h == w || f == x && g == x && h == x)),
                                    b = !b;

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
                            z(e, function(a) {
                                f = a;
                                u()
                            });
                            t(e, L(c, '"' + c.family + '",sans-serif'));
                            z(n, function(a) {
                                g = a;
                                u()
                            });
                            t(n, L(c, '"' + c.family + '",serif'));
                            z(p, function(a) {
                                h = a;
                                u()
                            });
                            t(p, L(c, '"' + c.family + '",monospace'))
                        })

                })
            };
            "object" === typeof module ? module.exports = A : (window.FontFaceObserver = A, window.FontFaceObserver.prototype.load = A.prototype.load);
        }());

        var fontA = new FontFaceObserver('libertad', {
            weight: 400
        }); // Regular
        var fontB = new FontFaceObserver('libertad', {
            weight: 700
        }); // Bold
        var fontC = new FontFaceObserver('libertad', {
            weight: 800
        }); // Extra Bold

        Promise.all([fontA.load(), fontB.load(), fontC.load()]).then(function() {
            document.documentElement.className += " fonts-loaded";
            sessionStorage.foutFontsLoaded = true;
        });
    })();


    /* Typekit */
    (function(d) {
        var config = {
                kitId: 'skk0zwj',
                scriptTimeout: 3000,
                async: true
            },
            h = d.documentElement,
            t = setTimeout(function() {
                h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
            }, config.scriptTimeout),
            tk = d.createElement("script"),
            f = false,
            s = d.getElementsByTagName("script")[0],
            a;
        h.className += " wf-loading";
        tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
        tk.async = true;
        tk.onload = tk.onreadystatechange = function() {
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
    //     </head>
    // </html>
</script>
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '322e4ecd7d7b5f44045b9717ba3c5d3820bceb23';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>

<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">