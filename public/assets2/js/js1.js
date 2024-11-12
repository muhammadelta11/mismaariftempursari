
//<![CDATA[
/*! jQuery v3.6.0 | (c) OpenJS Foundation and other contributors | jquery.org/license */
!function(e, t) {
    "use strict";
    "object" == typeof module && "object" == typeof module.exports ? module.exports = e.document ? t(e, !0) : function(e) {
        if (!e.document)
            throw new Error("jQuery requires a window with a document");
        return t(e)
    }
    : t(e)
}("undefined" != typeof window ? window : this, function(C, e) {
    "use strict";
    var t = []
      , r = Object.getPrototypeOf
      , s = t.slice
      , g = t.flat ? function(e) {
        return t.flat.call(e)
    }
    : function(e) {
        return t.concat.apply([], e)
    }
      , u = t.push
      , i = t.indexOf
      , n = {}
      , o = n.toString
      , v = n.hasOwnProperty
      , a = v.toString
      , l = a.call(Object)
      , y = {}
      , m = function(e) {
        return "function" == typeof e && "number" != typeof e.nodeType && "function" != typeof e.item
    }
      , x = function(e) {
        return null != e && e === e.window
    }
      , E = C.document
      , c = {
        type: !0,
        src: !0,
        nonce: !0,
        noModule: !0
    };
    function b(e, t, n) {
        var r, i, o = (n = n || E).createElement("script");
        if (o.text = e,
        t)
            for (r in c)
                (i = t[r] || t.getAttribute && t.getAttribute(r)) && o.setAttribute(r, i);
        n.head.appendChild(o).parentNode.removeChild(o)
    }
    function w(e) {
        return null == e ? e + "" : "object" == typeof e || "function" == typeof e ? n[o.call(e)] || "object" : typeof e
    }
    var f = "3.6.0"
      , S = function(e, t) {
        return new S.fn.init(e,t)
    };
    function p(e) {
        var t = !!e && "length"in e && e.length
          , n = w(e);
        return !m(e) && !x(e) && ("array" === n || 0 === t || "number" == typeof t && 0 < t && t - 1 in e)
    }
    S.fn = S.prototype = {
        jquery: f,
        constructor: S,
        length: 0,
        toArray: function() {
            return s.call(this)
        },
        get: function(e) {
            return null == e ? s.call(this) : e < 0 ? this[e + this.length] : this[e]
        },
        pushStack: function(e) {
            var t = S.merge(this.constructor(), e);
            return t.prevObject = this,
            t
        },
        each: function(e) {
            return S.each(this, e)
        },
        map: function(n) {
            return this.pushStack(S.map(this, function(e, t) {
                return n.call(e, t, e)
            }))
        },
        slice: function() {
            return this.pushStack(s.apply(this, arguments))
        },
        first: function() {
            return this.eq(0)
        },
        last: function() {
            return this.eq(-1)
        },
        even: function() {
            return this.pushStack(S.grep(this, function(e, t) {
                return (t + 1) % 2
            }))
        },
        odd: function() {
            return this.pushStack(S.grep(this, function(e, t) {
                return t % 2
            }))
        },
        eq: function(e) {
            var t = this.length
              , n = +e + (e < 0 ? t : 0);
            return this.pushStack(0 <= n && n < t ? [this[n]] : [])
        },
        end: function() {
            return this.prevObject || this.constructor()
        },
        push: u,
        sort: t.sort,
        splice: t.splice
    },
    S.extend = S.fn.extend = function() {
        var e, t, n, r, i, o, a = arguments[0] || {}, s = 1, u = arguments.length, l = !1;
        for ("boolean" == typeof a && (l = a,
        a = arguments[s] || {},
        s++),
        "object" == typeof a || m(a) || (a = {}),
        s === u && (a = this,
        s--); s < u; s++)
            if (null != (e = arguments[s]))
                for (t in e)
                    r = e[t],
                    "__proto__" !== t && a !== r && (l && r && (S.isPlainObject(r) || (i = Array.isArray(r))) ? (n = a[t],
                    o = i && !Array.isArray(n) ? [] : i || S.isPlainObject(n) ? n : {},
                    i = !1,
                    a[t] = S.extend(l, o, r)) : void 0 !== r && (a[t] = r));
        return a
    }
    ,
    S.extend({
        expando: "jQuery" + (f + Math.random()).replace(/\D/g, ""),
        isReady: !0,
        error: function(e) {
            throw new Error(e)
        },
        noop: function() {},
        isPlainObject: function(e) {
            var t, n;
            return !(!e || "[object Object]" !== o.call(e)) && (!(t = r(e)) || "function" == typeof (n = v.call(t, "constructor") && t.constructor) && a.call(n) === l)
        },
        isEmptyObject: function(e) {
            var t;
            for (t in e)
                return !1;
            return !0
        },
        globalEval: function(e, t, n) {
            b(e, {
                nonce: t && t.nonce
            }, n)
        },
        each: function(e, t) {
            var n, r = 0;
            if (p(e)) {
                for (n = e.length; r < n; r++)
                    if (!1 === t.call(e[r], r, e[r]))
                        break
            } else
                for (r in e)
                    if (!1 === t.call(e[r], r, e[r]))
                        break;
            return e
        },
        makeArray: function(e, t) {
            var n = t || [];
            return null != e && (p(Object(e)) ? S.merge(n, "string" == typeof e ? [e] : e) : u.call(n, e)),
            n
        },
        inArray: function(e, t, n) {
            return null == t ? -1 : i.call(t, e, n)
        },
        merge: function(e, t) {
            for (var n = +t.length, r = 0, i = e.length; r < n; r++)
                e[i++] = t[r];
            return e.length = i,
            e
        },
        grep: function(e, t, n) {
            for (var r = [], i = 0, o = e.length, a = !n; i < o; i++)
                !t(e[i], i) !== a && r.push(e[i]);
            return r
        },
        map: function(e, t, n) {
            var r, i, o = 0, a = [];
            if (p(e))
                for (r = e.length; o < r; o++)
                    null != (i = t(e[o], o, n)) && a.push(i);
            else
                for (o in e)
                    null != (i = t(e[o], o, n)) && a.push(i);
            return g(a)
        },
        guid: 1,
        support: y
    }),
    "function" == typeof Symbol && (S.fn[Symbol.iterator] = t[Symbol.iterator]),
    S.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), function(e, t) {
        n["[object " + t + "]"] = t.toLowerCase()
    });
    var d = function(n) {
        var e, d, b, o, i, h, f, g, w, u, l, T, C, a, E, v, s, c, y, S = "sizzle" + 1 * new Date, p = n.document, k = 0, r = 0, m = ue(), x = ue(), A = ue(), N = ue(), j = function(e, t) {
            return e === t && (l = !0),
            0
        }, D = {}.hasOwnProperty, t = [], q = t.pop, L = t.push, H = t.push, O = t.slice, P = function(e, t) {
            for (var n = 0, r = e.length; n < r; n++)
                if (e[n] === t)
                    return n;
            return -1
        }, R = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped", M = "[\\x20\\t\\r\\n\\f]", I = "(?:\\\\[\\da-fA-F]{1,6}" + M + "?|\\\\[^\\r\\n\\f]|[\\w-]|[^\0-\\x7f])+", W = "\\[" + M + "*(" + I + ")(?:" + M + "*([*^$|!~]?=)" + M + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + I + "))|)" + M + "*\\]", F = ":(" + I + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + W + ")*)|.*)\\)|)", B = new RegExp(M + "+","g"), $ = new RegExp("^" + M + "+|((?:^|[^\\\\])(?:\\\\.)*)" + M + "+$","g"), _ = new RegExp("^" + M + "*," + M + "*"), z = new RegExp("^" + M + "*([>+~]|" + M + ")" + M + "*"), U = new RegExp(M + "|>"), X = new RegExp(F), V = new RegExp("^" + I + "$"), G = {
            ID: new RegExp("^#(" + I + ")"),
            CLASS: new RegExp("^\\.(" + I + ")"),
            TAG: new RegExp("^(" + I + "|[*])"),
            ATTR: new RegExp("^" + W),
            PSEUDO: new RegExp("^" + F),
            CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + M + "*(even|odd|(([+-]|)(\\d*)n|)" + M + "*(?:([+-]|)" + M + "*(\\d+)|))" + M + "*\\)|)","i"),
            bool: new RegExp("^(?:" + R + ")$","i"),
            needsContext: new RegExp("^" + M + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + M + "*((?:-\\d)?\\d*)" + M + "*\\)|)(?=[^-]|$)","i")
        }, Y = /HTML$/i, Q = /^(?:input|select|textarea|button)$/i, J = /^h\d$/i, K = /^[^{]+\{\s*\[native \w/, Z = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/, ee = /[+~]/, te = new RegExp("\\\\[\\da-fA-F]{1,6}" + M + "?|\\\\([^\\r\\n\\f])","g"), ne = function(e, t) {
            var n = "0x" + e.slice(1) - 65536;
            return t || (n < 0 ? String.fromCharCode(n + 65536) : String.fromCharCode(n >> 10 | 55296, 1023 & n | 56320))
        }, re = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g, ie = function(e, t) {
            return t ? "\0" === e ? "\ufffd" : e.slice(0, -1) + "\\" + e.charCodeAt(e.length - 1).toString(16) + " " : "\\" + e
        }, oe = function() {
            T()
        }, ae = be(function(e) {
            return !0 === e.disabled && "fieldset" === e.nodeName.toLowerCase()
        }, {
            dir: "parentNode",
            next: "legend"
        });
        try {
            H.apply(t = O.call(p.childNodes), p.childNodes),
            t[p.childNodes.length].nodeType
        } catch (e) {
            H = {
                apply: t.length ? function(e, t) {
                    L.apply(e, O.call(t))
                }
                : function(e, t) {
                    var n = e.length
                      , r = 0;
                    while (e[n++] = t[r++])
                        ;
                    e.length = n - 1
                }
            }
        }
        function se(t, e, n, r) {
            var i, o, a, s, u, l, c, f = e && e.ownerDocument, p = e ? e.nodeType : 9;
            if (n = n || [],
            "string" != typeof t || !t || 1 !== p && 9 !== p && 11 !== p)
                return n;
            if (!r && (T(e),
            e = e || C,
            E)) {
                if (11 !== p && (u = Z.exec(t)))
                    if (i = u[1]) {
                        if (9 === p) {
                            if (!(a = e.getElementById(i)))
                                return n;
                            if (a.id === i)
                                return n.push(a),
                                n
                        } else if (f && (a = f.getElementById(i)) && y(e, a) && a.id === i)
                            return n.push(a),
                            n
                    } else {
                        if (u[2])
                            return H.apply(n, e.getElementsByTagName(t)),
                            n;
                        if ((i = u[3]) && d.getElementsByClassName && e.getElementsByClassName)
                            return H.apply(n, e.getElementsByClassName(i)),
                            n
                    }
                if (d.qsa && !N[t + " "] && (!v || !v.test(t)) && (1 !== p || "object" !== e.nodeName.toLowerCase())) {
                    if (c = t,
                    f = e,
                    1 === p && (U.test(t) || z.test(t))) {
                        (f = ee.test(t) && ye(e.parentNode) || e) === e && d.scope || ((s = e.getAttribute("id")) ? s = s.replace(re, ie) : e.setAttribute("id", s = S)),
                        o = (l = h(t)).length;
                        while (o--)
                            l[o] = (s ? "#" + s : ":scope") + " " + xe(l[o]);
                        c = l.join(",")
                    }
                    try {
                        return H.apply(n, f.querySelectorAll(c)),
                        n
                    } catch (e) {
                        N(t, !0)
                    } finally {
                        s === S && e.removeAttribute("id")
                    }
                }
            }
            return g(t.replace($, "$1"), e, n, r)
        }
        function ue() {
            var r = [];
            return function e(t, n) {
                return r.push(t + " ") > b.cacheLength && delete e[r.shift()],
                e[t + " "] = n
            }
        }
        function le(e) {
            return e[S] = !0,
            e
        }
        function ce(e) {
            var t = C.createElement("fieldset");
            try {
                return !!e(t)
            } catch (e) {
                return !1
            } finally {
                t.parentNode && t.parentNode.removeChild(t),
                t = null
            }
        }
        function fe(e, t) {
            var n = e.split("|")
              , r = n.length;
            while (r--)
                b.attrHandle[n[r]] = t
        }
        function pe(e, t) {
            var n = t && e
              , r = n && 1 === e.nodeType && 1 === t.nodeType && e.sourceIndex - t.sourceIndex;
            if (r)
                return r;
            if (n)
                while (n = n.nextSibling)
                    if (n === t)
                        return -1;
            return e ? 1 : -1
        }
        function de(t) {
            return function(e) {
                return "input" === e.nodeName.toLowerCase() && e.type === t
            }
        }
        function he(n) {
            return function(e) {
                var t = e.nodeName.toLowerCase();
                return ("input" === t || "button" === t) && e.type === n
            }
        }
        function ge(t) {
            return function(e) {
                return "form"in e ? e.parentNode && !1 === e.disabled ? "label"in e ? "label"in e.parentNode ? e.parentNode.disabled === t : e.disabled === t : e.isDisabled === t || e.isDisabled !== !t && ae(e) === t : e.disabled === t : "label"in e && e.disabled === t
            }
        }
        function ve(a) {
            return le(function(o) {
                return o = +o,
                le(function(e, t) {
                    var n, r = a([], e.length, o), i = r.length;
                    while (i--)
                        e[n = r[i]] && (e[n] = !(t[n] = e[n]))
                })
            })
        }
        function ye(e) {
            return e && "undefined" != typeof e.getElementsByTagName && e
        }
        for (e in d = se.support = {},
        i = se.isXML = function(e) {
            var t = e && e.namespaceURI
              , n = e && (e.ownerDocument || e).documentElement;
            return !Y.test(t || n && n.nodeName || "HTML")
        }
        ,
        T = se.setDocument = function(e) {
            var t, n, r = e ? e.ownerDocument || e : p;
            return r != C && 9 === r.nodeType && r.documentElement && (a = (C = r).documentElement,
            E = !i(C),
            p != C && (n = C.defaultView) && n.top !== n && (n.addEventListener ? n.addEventListener("unload", oe, !1) : n.attachEvent && n.attachEvent("onunload", oe)),
            d.scope = ce(function(e) {
                return a.appendChild(e).appendChild(C.createElement("div")),
                "undefined" != typeof e.querySelectorAll && !e.querySelectorAll(":scope fieldset div").length
            }),
            d.attributes = ce(function(e) {
                return e.className = "i",
                !e.getAttribute("className")
            }),
            d.getElementsByTagName = ce(function(e) {
                return e.appendChild(C.createComment("")),
                !e.getElementsByTagName("*").length
            }),
            d.getElementsByClassName = K.test(C.getElementsByClassName),
            d.getById = ce(function(e) {
                return a.appendChild(e).id = S,
                !C.getElementsByName || !C.getElementsByName(S).length
            }),
            d.getById ? (b.filter.ID = function(e) {
                var t = e.replace(te, ne);
                return function(e) {
                    return e.getAttribute("id") === t
                }
            }
            ,
            b.find.ID = function(e, t) {
                if ("undefined" != typeof t.getElementById && E) {
                    var n = t.getElementById(e);
                    return n ? [n] : []
                }
            }
            ) : (b.filter.ID = function(e) {
                var n = e.replace(te, ne);
                return function(e) {
                    var t = "undefined" != typeof e.getAttributeNode && e.getAttributeNode("id");
                    return t && t.value === n
                }
            }
            ,
            b.find.ID = function(e, t) {
                if ("undefined" != typeof t.getElementById && E) {
                    var n, r, i, o = t.getElementById(e);
                    if (o) {
                        if ((n = o.getAttributeNode("id")) && n.value === e)
                            return [o];
                        i = t.getElementsByName(e),
                        r = 0;
                        while (o = i[r++])
                            if ((n = o.getAttributeNode("id")) && n.value === e)
                                return [o]
                    }
                    return []
                }
            }
            ),
            b.find.TAG = d.getElementsByTagName ? function(e, t) {
                return "undefined" != typeof t.getElementsByTagName ? t.getElementsByTagName(e) : d.qsa ? t.querySelectorAll(e) : void 0
            }
            : function(e, t) {
                var n, r = [], i = 0, o = t.getElementsByTagName(e);
                if ("*" === e) {
                    while (n = o[i++])
                        1 === n.nodeType && r.push(n);
                    return r
                }
                return o
            }
            ,
            b.find.CLASS = d.getElementsByClassName && function(e, t) {
                if ("undefined" != typeof t.getElementsByClassName && E)
                    return t.getElementsByClassName(e)
            }
            ,
            s = [],
            v = [],
            (d.qsa = K.test(C.querySelectorAll)) && (ce(function(e) {
                var t;
                a.appendChild(e).innerHTML = "<a id='" + S + "'></a><select id='" + S + "-\r\\' msallowcapture=''><option selected=''></option></select>",
                e.querySelectorAll("[msallowcapture^='']").length && v.push("[*^$]=" + M + "*(?:''|\"\")"),
                e.querySelectorAll("[selected]").length || v.push("\\[" + M + "*(?:value|" + R + ")"),
                e.querySelectorAll("[id~=" + S + "-]").length || v.push("~="),
                (t = C.createElement("input")).setAttribute("name", ""),
                e.appendChild(t),
                e.querySelectorAll("[name='']").length || v.push("\\[" + M + "*name" + M + "*=" + M + "*(?:''|\"\")"),
                e.querySelectorAll(":checked").length || v.push(":checked"),
                e.querySelectorAll("a#" + S + "+*").length || v.push(".#.+[+~]"),
                e.querySelectorAll("\\\f"),
                v.push("[\\r\\n\\f]")
            }),
            ce(function(e) {
                e.innerHTML = "<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";
                var t = C.createElement("input");
                t.setAttribute("type", "hidden"),
                e.appendChild(t).setAttribute("name", "D"),
                e.querySelectorAll("[name=d]").length && v.push("name" + M + "*[*^$|!~]?="),
                2 !== e.querySelectorAll(":enabled").length && v.push(":enabled", ":disabled"),
                a.appendChild(e).disabled = !0,
                2 !== e.querySelectorAll(":disabled").length && v.push(":enabled", ":disabled"),
                e.querySelectorAll("*,:x"),
                v.push(",.*:")
            })),
            (d.matchesSelector = K.test(c = a.matches || a.webkitMatchesSelector || a.mozMatchesSelector || a.oMatchesSelector || a.msMatchesSelector)) && ce(function(e) {
                d.disconnectedMatch = c.call(e, "*"),
                c.call(e, "[s!='']:x"),
                s.push("!=", F)
            }),
            v = v.length && new RegExp(v.join("|")),
            s = s.length && new RegExp(s.join("|")),
            t = K.test(a.compareDocumentPosition),
            y = t || K.test(a.contains) ? function(e, t) {
                var n = 9 === e.nodeType ? e.documentElement : e
                  , r = t && t.parentNode;
                return e === r || !(!r || 1 !== r.nodeType || !(n.contains ? n.contains(r) : e.compareDocumentPosition && 16 & e.compareDocumentPosition(r)))
            }
            : function(e, t) {
                if (t)
                    while (t = t.parentNode)
                        if (t === e)
                            return !0;
                return !1
            }
            ,
            j = t ? function(e, t) {
                if (e === t)
                    return l = !0,
                    0;
                var n = !e.compareDocumentPosition - !t.compareDocumentPosition;
                return n || (1 & (n = (e.ownerDocument || e) == (t.ownerDocument || t) ? e.compareDocumentPosition(t) : 1) || !d.sortDetached && t.compareDocumentPosition(e) === n ? e == C || e.ownerDocument == p && y(p, e) ? -1 : t == C || t.ownerDocument == p && y(p, t) ? 1 : u ? P(u, e) - P(u, t) : 0 : 4 & n ? -1 : 1)
            }
            : function(e, t) {
                if (e === t)
                    return l = !0,
                    0;
                var n, r = 0, i = e.parentNode, o = t.parentNode, a = [e], s = [t];
                if (!i || !o)
                    return e == C ? -1 : t == C ? 1 : i ? -1 : o ? 1 : u ? P(u, e) - P(u, t) : 0;
                if (i === o)
                    return pe(e, t);
                n = e;
                while (n = n.parentNode)
                    a.unshift(n);
                n = t;
                while (n = n.parentNode)
                    s.unshift(n);
                while (a[r] === s[r])
                    r++;
                return r ? pe(a[r], s[r]) : a[r] == p ? -1 : s[r] == p ? 1 : 0
            }
            ),
            C
        }
        ,
        se.matches = function(e, t) {
            return se(e, null, null, t)
        }
        ,
        se.matchesSelector = function(e, t) {
            if (T(e),
            d.matchesSelector && E && !N[t + " "] && (!s || !s.test(t)) && (!v || !v.test(t)))
                try {
                    var n = c.call(e, t);
                    if (n || d.disconnectedMatch || e.document && 11 !== e.document.nodeType)
                        return n
                } catch (e) {
                    N(t, !0)
                }
            return 0 < se(t, C, null, [e]).length
        }
        ,
        se.contains = function(e, t) {
            return (e.ownerDocument || e) != C && T(e),
            y(e, t)
        }
        ,
        se.attr = function(e, t) {
            (e.ownerDocument || e) != C && T(e);
            var n = b.attrHandle[t.toLowerCase()]
              , r = n && D.call(b.attrHandle, t.toLowerCase()) ? n(e, t, !E) : void 0;
            return void 0 !== r ? r : d.attributes || !E ? e.getAttribute(t) : (r = e.getAttributeNode(t)) && r.specified ? r.value : null
        }
        ,
        se.escape = function(e) {
            return (e + "").replace(re, ie)
        }
        ,
        se.error = function(e) {
            throw new Error("Syntax error, unrecognized expression: " + e)
        }
        ,
        se.uniqueSort = function(e) {
            var t, n = [], r = 0, i = 0;
            if (l = !d.detectDuplicates,
            u = !d.sortStable && e.slice(0),
            e.sort(j),
            l) {
                while (t = e[i++])
                    t === e[i] && (r = n.push(i));
                while (r--)
                    e.splice(n[r], 1)
            }
            return u = null,
            e
        }
        ,
        o = se.getText = function(e) {
            var t, n = "", r = 0, i = e.nodeType;
            if (i) {
                if (1 === i || 9 === i || 11 === i) {
                    if ("string" == typeof e.textContent)
                        return e.textContent;
                    for (e = e.firstChild; e; e = e.nextSibling)
                        n += o(e)
                } else if (3 === i || 4 === i)
                    return e.nodeValue
            } else
                while (t = e[r++])
                    n += o(t);
            return n
        }
        ,
        (b = se.selectors = {
            cacheLength: 50,
            createPseudo: le,
            match: G,
            attrHandle: {},
            find: {},
            relative: {
                ">": {
                    dir: "parentNode",
                    first: !0
                },
                " ": {
                    dir: "parentNode"
                },
                "+": {
                    dir: "previousSibling",
                    first: !0
                },
                "~": {
                    dir: "previousSibling"
                }
            },
            preFilter: {
                ATTR: function(e) {
                    return e[1] = e[1].replace(te, ne),
                    e[3] = (e[3] || e[4] || e[5] || "").replace(te, ne),
                    "~=" === e[2] && (e[3] = " " + e[3] + " "),
                    e.slice(0, 4)
                },
                CHILD: function(e) {
                    return e[1] = e[1].toLowerCase(),
                    "nth" === e[1].slice(0, 3) ? (e[3] || se.error(e[0]),
                    e[4] = +(e[4] ? e[5] + (e[6] || 1) : 2 * ("even" === e[3] || "odd" === e[3])),
                    e[5] = +(e[7] + e[8] || "odd" === e[3])) : e[3] && se.error(e[0]),
                    e
                },
                PSEUDO: function(e) {
                    var t, n = !e[6] && e[2];
                    return G.CHILD.test(e[0]) ? null : (e[3] ? e[2] = e[4] || e[5] || "" : n && X.test(n) && (t = h(n, !0)) && (t = n.indexOf(")", n.length - t) - n.length) && (e[0] = e[0].slice(0, t),
                    e[2] = n.slice(0, t)),
                    e.slice(0, 3))
                }
            },
            filter: {
                TAG: function(e) {
                    var t = e.replace(te, ne).toLowerCase();
                    return "*" === e ? function() {
                        return !0
                    }
                    : function(e) {
                        return e.nodeName && e.nodeName.toLowerCase() === t
                    }
                },
                CLASS: function(e) {
                    var t = m[e + " "];
                    return t || (t = new RegExp("(^|" + M + ")" + e + "(" + M + "|$)")) && m(e, function(e) {
                        return t.test("string" == typeof e.className && e.className || "undefined" != typeof e.getAttribute && e.getAttribute("class") || "")
                    })
                },
                ATTR: function(n, r, i) {
                    return function(e) {
                        var t = se.attr(e, n);
                        return null == t ? "!=" === r : !r || (t += "",
                        "=" === r ? t === i : "!=" === r ? t !== i : "^=" === r ? i && 0 === t.indexOf(i) : "*=" === r ? i && -1 < t.indexOf(i) : "$=" === r ? i && t.slice(-i.length) === i : "~=" === r ? -1 < (" " + t.replace(B, " ") + " ").indexOf(i) : "|=" === r && (t === i || t.slice(0, i.length + 1) === i + "-"))
                    }
                },
                CHILD: function(h, e, t, g, v) {
                    var y = "nth" !== h.slice(0, 3)
                      , m = "last" !== h.slice(-4)
                      , x = "of-type" === e;
                    return 1 === g && 0 === v ? function(e) {
                        return !!e.parentNode
                    }
                    : function(e, t, n) {
                        var r, i, o, a, s, u, l = y !== m ? "nextSibling" : "previousSibling", c = e.parentNode, f = x && e.nodeName.toLowerCase(), p = !n && !x, d = !1;
                        if (c) {
                            if (y) {
                                while (l) {
                                    a = e;
                                    while (a = a[l])
                                        if (x ? a.nodeName.toLowerCase() === f : 1 === a.nodeType)
                                            return !1;
                                    u = l = "only" === h && !u && "nextSibling"
                                }
                                return !0
                            }
                            if (u = [m ? c.firstChild : c.lastChild],
                            m && p) {
                                d = (s = (r = (i = (o = (a = c)[S] || (a[S] = {}))[a.uniqueID] || (o[a.uniqueID] = {}))[h] || [])[0] === k && r[1]) && r[2],
                                a = s && c.childNodes[s];
                                while (a = ++s && a && a[l] || (d = s = 0) || u.pop())
                                    if (1 === a.nodeType && ++d && a === e) {
                                        i[h] = [k, s, d];
                                        break
                                    }
                            } else if (p && (d = s = (r = (i = (o = (a = e)[S] || (a[S] = {}))[a.uniqueID] || (o[a.uniqueID] = {}))[h] || [])[0] === k && r[1]),
                            !1 === d)
                                while (a = ++s && a && a[l] || (d = s = 0) || u.pop())
                                    if ((x ? a.nodeName.toLowerCase() === f : 1 === a.nodeType) && ++d && (p && ((i = (o = a[S] || (a[S] = {}))[a.uniqueID] || (o[a.uniqueID] = {}))[h] = [k, d]),
                                    a === e))
                                        break;
                            return (d -= v) === g || d % g == 0 && 0 <= d / g
                        }
                    }
                },
                PSEUDO: function(e, o) {
                    var t, a = b.pseudos[e] || b.setFilters[e.toLowerCase()] || se.error("unsupported pseudo: " + e);
                    return a[S] ? a(o) : 1 < a.length ? (t = [e, e, "", o],
                    b.setFilters.hasOwnProperty(e.toLowerCase()) ? le(function(e, t) {
                        var n, r = a(e, o), i = r.length;
                        while (i--)
                            e[n = P(e, r[i])] = !(t[n] = r[i])
                    }) : function(e) {
                        return a(e, 0, t)
                    }
                    ) : a
                }
            },
            pseudos: {
                not: le(function(e) {
                    var r = []
                      , i = []
                      , s = f(e.replace($, "$1"));
                    return s[S] ? le(function(e, t, n, r) {
                        var i, o = s(e, null, r, []), a = e.length;
                        while (a--)
                            (i = o[a]) && (e[a] = !(t[a] = i))
                    }) : function(e, t, n) {
                        return r[0] = e,
                        s(r, null, n, i),
                        r[0] = null,
                        !i.pop()
                    }
                }),
                has: le(function(t) {
                    return function(e) {
                        return 0 < se(t, e).length
                    }
                }),
                contains: le(function(t) {
                    return t = t.replace(te, ne),
                    function(e) {
                        return -1 < (e.textContent || o(e)).indexOf(t)
                    }
                }),
                lang: le(function(n) {
                    return V.test(n || "") || se.error("unsupported lang: " + n),
                    n = n.replace(te, ne).toLowerCase(),
                    function(e) {
                        var t;
                        do {
                            if (t = E ? e.lang : e.getAttribute("xml:lang") || e.getAttribute("lang"))
                                return (t = t.toLowerCase()) === n || 0 === t.indexOf(n + "-")
                        } while ((e = e.parentNode) && 1 === e.nodeType);
                        return !1
                    }
                }),
                target: function(e) {
                    var t = n.location && n.location.hash;
                    return t && t.slice(1) === e.id
                },
                root: function(e) {
                    return e === a
                },
                focus: function(e) {
                    return e === C.activeElement && (!C.hasFocus || C.hasFocus()) && !!(e.type || e.href || ~e.tabIndex)
                },
                enabled: ge(!1),
                disabled: ge(!0),
                checked: function(e) {
                    var t = e.nodeName.toLowerCase();
                    return "input" === t && !!e.checked || "option" === t && !!e.selected
                },
                selected: function(e) {
                    return e.parentNode && e.parentNode.selectedIndex,
                    !0 === e.selected
                },
                empty: function(e) {
                    for (e = e.firstChild; e; e = e.nextSibling)
                        if (e.nodeType < 6)
                            return !1;
                    return !0
                },
                parent: function(e) {
                    return !b.pseudos.empty(e)
                },
                header: function(e) {
                    return J.test(e.nodeName)
                },
                input: function(e) {
                    return Q.test(e.nodeName)
                },
                button: function(e) {
                    var t = e.nodeName.toLowerCase();
                    return "input" === t && "button" === e.type || "button" === t
                },
                text: function(e) {
                    var t;
                    return "input" === e.nodeName.toLowerCase() && "text" === e.type && (null == (t = e.getAttribute("type")) || "text" === t.toLowerCase())
                },
                first: ve(function() {
                    return [0]
                }),
                last: ve(function(e, t) {
                    return [t - 1]
                }),
                eq: ve(function(e, t, n) {
                    return [n < 0 ? n + t : n]
                }),
                even: ve(function(e, t) {
                    for (var n = 0; n < t; n += 2)
                        e.push(n);
                    return e
                }),
                odd: ve(function(e, t) {
                    for (var n = 1; n < t; n += 2)
                        e.push(n);
                    return e
                }),
                lt: ve(function(e, t, n) {
                    for (var r = n < 0 ? n + t : t < n ? t : n; 0 <= --r; )
                        e.push(r);
                    return e
                }),
                gt: ve(function(e, t, n) {
                    for (var r = n < 0 ? n + t : n; ++r < t; )
                        e.push(r);
                    return e
                })
            }
        }).pseudos.nth = b.pseudos.eq,
        {
            radio: !0,
            checkbox: !0,
            file: !0,
            password: !0,
            image: !0
        })
            b.pseudos[e] = de(e);
        for (e in {
            submit: !0,
            reset: !0
        })
            b.pseudos[e] = he(e);
        function me() {}
        function xe(e) {
            for (var t = 0, n = e.length, r = ""; t < n; t++)
                r += e[t].value;
            return r
        }
        function be(s, e, t) {
            var u = e.dir
              , l = e.next
              , c = l || u
              , f = t && "parentNode" === c
              , p = r++;
            return e.first ? function(e, t, n) {
                while (e = e[u])
                    if (1 === e.nodeType || f)
                        return s(e, t, n);
                return !1
            }
            : function(e, t, n) {
                var r, i, o, a = [k, p];
                if (n) {
                    while (e = e[u])
                        if ((1 === e.nodeType || f) && s(e, t, n))
                            return !0
                } else
                    while (e = e[u])
                        if (1 === e.nodeType || f)
                            if (i = (o = e[S] || (e[S] = {}))[e.uniqueID] || (o[e.uniqueID] = {}),
                            l && l === e.nodeName.toLowerCase())
                                e = e[u] || e;
                            else {
                                if ((r = i[c]) && r[0] === k && r[1] === p)
                                    return a[2] = r[2];
                                if ((i[c] = a)[2] = s(e, t, n))
                                    return !0
                            }
                return !1
            }
        }
        function we(i) {
            return 1 < i.length ? function(e, t, n) {
                var r = i.length;
                while (r--)
                    if (!i[r](e, t, n))
                        return !1;
                return !0
            }
            : i[0]
        }
        function Te(e, t, n, r, i) {
            for (var o, a = [], s = 0, u = e.length, l = null != t; s < u; s++)
                (o = e[s]) && (n && !n(o, r, i) || (a.push(o),
                l && t.push(s)));
            return a
        }
        function Ce(d, h, g, v, y, e) {
            return v && !v[S] && (v = Ce(v)),
            y && !y[S] && (y = Ce(y, e)),
            le(function(e, t, n, r) {
                var i, o, a, s = [], u = [], l = t.length, c = e || function(e, t, n) {
                    for (var r = 0, i = t.length; r < i; r++)
                        se(e, t[r], n);
                    return n
                }(h || "*", n.nodeType ? [n] : n, []), f = !d || !e && h ? c : Te(c, s, d, n, r), p = g ? y || (e ? d : l || v) ? [] : t : f;
                if (g && g(f, p, n, r),
                v) {
                    i = Te(p, u),
                    v(i, [], n, r),
                    o = i.length;
                    while (o--)
                        (a = i[o]) && (p[u[o]] = !(f[u[o]] = a))
                }
                if (e) {
                    if (y || d) {
                        if (y) {
                            i = [],
                            o = p.length;
                            while (o--)
                                (a = p[o]) && i.push(f[o] = a);
                            y(null, p = [], i, r)
                        }
                        o = p.length;
                        while (o--)
                            (a = p[o]) && -1 < (i = y ? P(e, a) : s[o]) && (e[i] = !(t[i] = a))
                    }
                } else
                    p = Te(p === t ? p.splice(l, p.length) : p),
                    y ? y(null, t, p, r) : H.apply(t, p)
            })
        }
        function Ee(e) {
            for (var i, t, n, r = e.length, o = b.relative[e[0].type], a = o || b.relative[" "], s = o ? 1 : 0, u = be(function(e) {
                return e === i
            }, a, !0), l = be(function(e) {
                return -1 < P(i, e)
            }, a, !0), c = [function(e, t, n) {
                var r = !o && (n || t !== w) || ((i = t).nodeType ? u(e, t, n) : l(e, t, n));
                return i = null,
                r
            }
            ]; s < r; s++)
                if (t = b.relative[e[s].type])
                    c = [be(we(c), t)];
                else {
                    if ((t = b.filter[e[s].type].apply(null, e[s].matches))[S]) {
                        for (n = ++s; n < r; n++)
                            if (b.relative[e[n].type])
                                break;
                        return Ce(1 < s && we(c), 1 < s && xe(e.slice(0, s - 1).concat({
                            value: " " === e[s - 2].type ? "*" : ""
                        })).replace($, "$1"), t, s < n && Ee(e.slice(s, n)), n < r && Ee(e = e.slice(n)), n < r && xe(e))
                    }
                    c.push(t)
                }
            return we(c)
        }
        return me.prototype = b.filters = b.pseudos,
        b.setFilters = new me,
        h = se.tokenize = function(e, t) {
            var n, r, i, o, a, s, u, l = x[e + " "];
            if (l)
                return t ? 0 : l.slice(0);
            a = e,
            s = [],
            u = b.preFilter;
            while (a) {
                for (o in n && !(r = _.exec(a)) || (r && (a = a.slice(r[0].length) || a),
                s.push(i = [])),
                n = !1,
                (r = z.exec(a)) && (n = r.shift(),
                i.push({
                    value: n,
                    type: r[0].replace($, " ")
                }),
                a = a.slice(n.length)),
                b.filter)
                    !(r = G[o].exec(a)) || u[o] && !(r = u[o](r)) || (n = r.shift(),
                    i.push({
                        value: n,
                        type: o,
                        matches: r
                    }),
                    a = a.slice(n.length));
                if (!n)
                    break
            }
            return t ? a.length : a ? se.error(e) : x(e, s).slice(0)
        }
        ,
        f = se.compile = function(e, t) {
            var n, v, y, m, x, r, i = [], o = [], a = A[e + " "];
            if (!a) {
                t || (t = h(e)),
                n = t.length;
                while (n--)
                    (a = Ee(t[n]))[S] ? i.push(a) : o.push(a);
                (a = A(e, (v = o,
                m = 0 < (y = i).length,
                x = 0 < v.length,
                r = function(e, t, n, r, i) {
                    var o, a, s, u = 0, l = "0", c = e && [], f = [], p = w, d = e || x && b.find.TAG("*", i), h = k += null == p ? 1 : Math.random() || .1, g = d.length;
                    for (i && (w = t == C || t || i); l !== g && null != (o = d[l]); l++) {
                        if (x && o) {
                            a = 0,
                            t || o.ownerDocument == C || (T(o),
                            n = !E);
                            while (s = v[a++])
                                if (s(o, t || C, n)) {
                                    r.push(o);
                                    break
                                }
                            i && (k = h)
                        }
                        m && ((o = !s && o) && u--,
                        e && c.push(o))
                    }
                    if (u += l,
                    m && l !== u) {
                        a = 0;
                        while (s = y[a++])
                            s(c, f, t, n);
                        if (e) {
                            if (0 < u)
                                while (l--)
                                    c[l] || f[l] || (f[l] = q.call(r));
                            f = Te(f)
                        }
                        H.apply(r, f),
                        i && !e && 0 < f.length && 1 < u + y.length && se.uniqueSort(r)
                    }
                    return i && (k = h,
                    w = p),
                    c
                }
                ,
                m ? le(r) : r))).selector = e
            }
            return a
        }
        ,
        g = se.select = function(e, t, n, r) {
            var i, o, a, s, u, l = "function" == typeof e && e, c = !r && h(e = l.selector || e);
            if (n = n || [],
            1 === c.length) {
                if (2 < (o = c[0] = c[0].slice(0)).length && "ID" === (a = o[0]).type && 9 === t.nodeType && E && b.relative[o[1].type]) {
                    if (!(t = (b.find.ID(a.matches[0].replace(te, ne), t) || [])[0]))
                        return n;
                    l && (t = t.parentNode),
                    e = e.slice(o.shift().value.length)
                }
                i = G.needsContext.test(e) ? 0 : o.length;
                while (i--) {
                    if (a = o[i],
                    b.relative[s = a.type])
                        break;
                    if ((u = b.find[s]) && (r = u(a.matches[0].replace(te, ne), ee.test(o[0].type) && ye(t.parentNode) || t))) {
                        if (o.splice(i, 1),
                        !(e = r.length && xe(o)))
                            return H.apply(n, r),
                            n;
                        break
                    }
                }
            }
            return (l || f(e, c))(r, t, !E, n, !t || ee.test(e) && ye(t.parentNode) || t),
            n
        }
        ,
        d.sortStable = S.split("").sort(j).join("") === S,
        d.detectDuplicates = !!l,
        T(),
        d.sortDetached = ce(function(e) {
            return 1 & e.compareDocumentPosition(C.createElement("fieldset"))
        }),
        ce(function(e) {
            return e.innerHTML = "<a href='#'></a>",
            "#" === e.firstChild.getAttribute("href")
        }) || fe("type|href|height|width", function(e, t, n) {
            if (!n)
                return e.getAttribute(t, "type" === t.toLowerCase() ? 1 : 2)
        }),
        d.attributes && ce(function(e) {
            return e.innerHTML = "<input/>",
            e.firstChild.setAttribute("value", ""),
            "" === e.firstChild.getAttribute("value")
        }) || fe("value", function(e, t, n) {
            if (!n && "input" === e.nodeName.toLowerCase())
                return e.defaultValue
        }),
        ce(function(e) {
            return null == e.getAttribute("disabled")
        }) || fe(R, function(e, t, n) {
            var r;
            if (!n)
                return !0 === e[t] ? t.toLowerCase() : (r = e.getAttributeNode(t)) && r.specified ? r.value : null
        }),
        se
    }(C);
    S.find = d,
    S.expr = d.selectors,
    S.expr[":"] = S.expr.pseudos,
    S.uniqueSort = S.unique = d.uniqueSort,
    S.text = d.getText,
    S.isXMLDoc = d.isXML,
    S.contains = d.contains,
    S.escapeSelector = d.escape;
    var h = function(e, t, n) {
        var r = []
          , i = void 0 !== n;
        while ((e = e[t]) && 9 !== e.nodeType)
            if (1 === e.nodeType) {
                if (i && S(e).is(n))
                    break;
                r.push(e)
            }
        return r
    }
      , T = function(e, t) {
        for (var n = []; e; e = e.nextSibling)
            1 === e.nodeType && e !== t && n.push(e);
        return n
    }
      , k = S.expr.match.needsContext;
    function A(e, t) {
        return e.nodeName && e.nodeName.toLowerCase() === t.toLowerCase()
    }
    var N = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;
    function j(e, n, r) {
        return m(n) ? S.grep(e, function(e, t) {
            return !!n.call(e, t, e) !== r
        }) : n.nodeType ? S.grep(e, function(e) {
            return e === n !== r
        }) : "string" != typeof n ? S.grep(e, function(e) {
            return -1 < i.call(n, e) !== r
        }) : S.filter(n, e, r)
    }
    S.filter = function(e, t, n) {
        var r = t[0];
        return n && (e = ":not(" + e + ")"),
        1 === t.length && 1 === r.nodeType ? S.find.matchesSelector(r, e) ? [r] : [] : S.find.matches(e, S.grep(t, function(e) {
            return 1 === e.nodeType
        }))
    }
    ,
    S.fn.extend({
        find: function(e) {
            var t, n, r = this.length, i = this;
            if ("string" != typeof e)
                return this.pushStack(S(e).filter(function() {
                    for (t = 0; t < r; t++)
                        if (S.contains(i[t], this))
                            return !0
                }));
            for (n = this.pushStack([]),
            t = 0; t < r; t++)
                S.find(e, i[t], n);
            return 1 < r ? S.uniqueSort(n) : n
        },
        filter: function(e) {
            return this.pushStack(j(this, e || [], !1))
        },
        not: function(e) {
            return this.pushStack(j(this, e || [], !0))
        },
        is: function(e) {
            return !!j(this, "string" == typeof e && k.test(e) ? S(e) : e || [], !1).length
        }
    });
    var D, q = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;
    (S.fn.init = function(e, t, n) {
        var r, i;
        if (!e)
            return this;
        if (n = n || D,
        "string" == typeof e) {
            if (!(r = "<" === e[0] && ">" === e[e.length - 1] && 3 <= e.length ? [null, e, null] : q.exec(e)) || !r[1] && t)
                return !t || t.jquery ? (t || n).find(e) : this.constructor(t).find(e);
            if (r[1]) {
                if (t = t instanceof S ? t[0] : t,
                S.merge(this, S.parseHTML(r[1], t && t.nodeType ? t.ownerDocument || t : E, !0)),
                N.test(r[1]) && S.isPlainObject(t))
                    for (r in t)
                        m(this[r]) ? this[r](t[r]) : this.attr(r, t[r]);
                return this
            }
            return (i = E.getElementById(r[2])) && (this[0] = i,
            this.length = 1),
            this
        }
        return e.nodeType ? (this[0] = e,
        this.length = 1,
        this) : m(e) ? void 0 !== n.ready ? n.ready(e) : e(S) : S.makeArray(e, this)
    }
    ).prototype = S.fn,
    D = S(E);
    var L = /^(?:parents|prev(?:Until|All))/
      , H = {
        children: !0,
        contents: !0,
        next: !0,
        prev: !0
    };
    function O(e, t) {
        while ((e = e[t]) && 1 !== e.nodeType)
            ;
        return e
    }
    S.fn.extend({
        has: function(e) {
            var t = S(e, this)
              , n = t.length;
            return this.filter(function() {
                for (var e = 0; e < n; e++)
                    if (S.contains(this, t[e]))
                        return !0
            })
        },
        closest: function(e, t) {
            var n, r = 0, i = this.length, o = [], a = "string" != typeof e && S(e);
            if (!k.test(e))
                for (; r < i; r++)
                    for (n = this[r]; n && n !== t; n = n.parentNode)
                        if (n.nodeType < 11 && (a ? -1 < a.index(n) : 1 === n.nodeType && S.find.matchesSelector(n, e))) {
                            o.push(n);
                            break
                        }
            return this.pushStack(1 < o.length ? S.uniqueSort(o) : o)
        },
        index: function(e) {
            return e ? "string" == typeof e ? i.call(S(e), this[0]) : i.call(this, e.jquery ? e[0] : e) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
        },
        add: function(e, t) {
            return this.pushStack(S.uniqueSort(S.merge(this.get(), S(e, t))))
        },
        addBack: function(e) {
            return this.add(null == e ? this.prevObject : this.prevObject.filter(e))
        }
    }),
    S.each({
        parent: function(e) {
            var t = e.parentNode;
            return t && 11 !== t.nodeType ? t : null
        },
        parents: function(e) {
            return h(e, "parentNode")
        },
        parentsUntil: function(e, t, n) {
            return h(e, "parentNode", n)
        },
        next: function(e) {
            return O(e, "nextSibling")
        },
        prev: function(e) {
            return O(e, "previousSibling")
        },
        nextAll: function(e) {
            return h(e, "nextSibling")
        },
        prevAll: function(e) {
            return h(e, "previousSibling")
        },
        nextUntil: function(e, t, n) {
            return h(e, "nextSibling", n)
        },
        prevUntil: function(e, t, n) {
            return h(e, "previousSibling", n)
        },
        siblings: function(e) {
            return T((e.parentNode || {}).firstChild, e)
        },
        children: function(e) {
            return T(e.firstChild)
        },
        contents: function(e) {
            return null != e.contentDocument && r(e.contentDocument) ? e.contentDocument : (A(e, "template") && (e = e.content || e),
            S.merge([], e.childNodes))
        }
    }, function(r, i) {
        S.fn[r] = function(e, t) {
            var n = S.map(this, i, e);
            return "Until" !== r.slice(-5) && (t = e),
            t && "string" == typeof t && (n = S.filter(t, n)),
            1 < this.length && (H[r] || S.uniqueSort(n),
            L.test(r) && n.reverse()),
            this.pushStack(n)
        }
    });
    var P = /[^\x20\t\r\n\f]+/g;
    function R(e) {
        return e
    }
    function M(e) {
        throw e
    }
    function I(e, t, n, r) {
        var i;
        try {
            e && m(i = e.promise) ? i.call(e).done(t).fail(n) : e && m(i = e.then) ? i.call(e, t, n) : t.apply(void 0, [e].slice(r))
        } catch (e) {
            n.apply(void 0, [e])
        }
    }
    S.Callbacks = function(r) {
        var e, n;
        r = "string" == typeof r ? (e = r,
        n = {},
        S.each(e.match(P) || [], function(e, t) {
            n[t] = !0
        }),
        n) : S.extend({}, r);
        var i, t, o, a, s = [], u = [], l = -1, c = function() {
            for (a = a || r.once,
            o = i = !0; u.length; l = -1) {
                t = u.shift();
                while (++l < s.length)
                    !1 === s[l].apply(t[0], t[1]) && r.stopOnFalse && (l = s.length,
                    t = !1)
            }
            r.memory || (t = !1),
            i = !1,
            a && (s = t ? [] : "")
        }, f = {
            add: function() {
                return s && (t && !i && (l = s.length - 1,
                u.push(t)),
                function n(e) {
                    S.each(e, function(e, t) {
                        m(t) ? r.unique && f.has(t) || s.push(t) : t && t.length && "string" !== w(t) && n(t)
                    })
                }(arguments),
                t && !i && c()),
                this
            },
            remove: function() {
                return S.each(arguments, function(e, t) {
                    var n;
                    while (-1 < (n = S.inArray(t, s, n)))
                        s.splice(n, 1),
                        n <= l && l--
                }),
                this
            },
            has: function(e) {
                return e ? -1 < S.inArray(e, s) : 0 < s.length
            },
            empty: function() {
                return s && (s = []),
                this
            },
            disable: function() {
                return a = u = [],
                s = t = "",
                this
            },
            disabled: function() {
                return !s
            },
            lock: function() {
                return a = u = [],
                t || i || (s = t = ""),
                this
            },
            locked: function() {
                return !!a
            },
            fireWith: function(e, t) {
                return a || (t = [e, (t = t || []).slice ? t.slice() : t],
                u.push(t),
                i || c()),
                this
            },
            fire: function() {
                return f.fireWith(this, arguments),
                this
            },
            fired: function() {
                return !!o
            }
        };
        return f
    }
    ,
    S.extend({
        Deferred: function(e) {
            var o = [["notify", "progress", S.Callbacks("memory"), S.Callbacks("memory"), 2], ["resolve", "done", S.Callbacks("once memory"), S.Callbacks("once memory"), 0, "resolved"], ["reject", "fail", S.Callbacks("once memory"), S.Callbacks("once memory"), 1, "rejected"]]
              , i = "pending"
              , a = {
                state: function() {
                    return i
                },
                always: function() {
                    return s.done(arguments).fail(arguments),
                    this
                },
                "catch": function(e) {
                    return a.then(null, e)
                },
                pipe: function() {
                    var i = arguments;
                    return S.Deferred(function(r) {
                        S.each(o, function(e, t) {
                            var n = m(i[t[4]]) && i[t[4]];
                            s[t[1]](function() {
                                var e = n && n.apply(this, arguments);
                                e && m(e.promise) ? e.promise().progress(r.notify).done(r.resolve).fail(r.reject) : r[t[0] + "With"](this, n ? [e] : arguments)
                            })
                        }),
                        i = null
                    }).promise()
                },
                then: function(t, n, r) {
                    var u = 0;
                    function l(i, o, a, s) {
                        return function() {
                            var n = this
                              , r = arguments
                              , e = function() {
                                var e, t;
                                if (!(i < u)) {
                                    if ((e = a.apply(n, r)) === o.promise())
                                        throw new TypeError("Thenable self-resolution");
                                    t = e && ("object" == typeof e || "function" == typeof e) && e.then,
                                    m(t) ? s ? t.call(e, l(u, o, R, s), l(u, o, M, s)) : (u++,
                                    t.call(e, l(u, o, R, s), l(u, o, M, s), l(u, o, R, o.notifyWith))) : (a !== R && (n = void 0,
                                    r = [e]),
                                    (s || o.resolveWith)(n, r))
                                }
                            }
                              , t = s ? e : function() {
                                try {
                                    e()
                                } catch (e) {
                                    S.Deferred.exceptionHook && S.Deferred.exceptionHook(e, t.stackTrace),
                                    u <= i + 1 && (a !== M && (n = void 0,
                                    r = [e]),
                                    o.rejectWith(n, r))
                                }
                            }
                            ;
                            i ? t() : (S.Deferred.getStackHook && (t.stackTrace = S.Deferred.getStackHook()),
                            C.setTimeout(t))
                        }
                    }
                    return S.Deferred(function(e) {
                        o[0][3].add(l(0, e, m(r) ? r : R, e.notifyWith)),
                        o[1][3].add(l(0, e, m(t) ? t : R)),
                        o[2][3].add(l(0, e, m(n) ? n : M))
                    }).promise()
                },
                promise: function(e) {
                    return null != e ? S.extend(e, a) : a
                }
            }
              , s = {};
            return S.each(o, function(e, t) {
                var n = t[2]
                  , r = t[5];
                a[t[1]] = n.add,
                r && n.add(function() {
                    i = r
                }, o[3 - e][2].disable, o[3 - e][3].disable, o[0][2].lock, o[0][3].lock),
                n.add(t[3].fire),
                s[t[0]] = function() {
                    return s[t[0] + "With"](this === s ? void 0 : this, arguments),
                    this
                }
                ,
                s[t[0] + "With"] = n.fireWith
            }),
            a.promise(s),
            e && e.call(s, s),
            s
        },
        when: function(e) {
            var n = arguments.length
              , t = n
              , r = Array(t)
              , i = s.call(arguments)
              , o = S.Deferred()
              , a = function(t) {
                return function(e) {
                    r[t] = this,
                    i[t] = 1 < arguments.length ? s.call(arguments) : e,
                    --n || o.resolveWith(r, i)
                }
            };
            if (n <= 1 && (I(e, o.done(a(t)).resolve, o.reject, !n),
            "pending" === o.state() || m(i[t] && i[t].then)))
                return o.then();
            while (t--)
                I(i[t], a(t), o.reject);
            return o.promise()
        }
    });
    var W = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;
    S.Deferred.exceptionHook = function(e, t) {
        C.console && C.console.warn && e && W.test(e.name) && C.console.warn("jQuery.Deferred exception: " + e.message, e.stack, t)
    }
    ,
    S.readyException = function(e) {
        C.setTimeout(function() {
            throw e
        })
    }
    ;
    var F = S.Deferred();
    function B() {
        E.removeEventListener("DOMContentLoaded", B),
        C.removeEventListener("load", B),
        S.ready()
    }
    S.fn.ready = function(e) {
        return F.then(e)["catch"](function(e) {
            S.readyException(e)
        }),
        this
    }
    ,
    S.extend({
        isReady: !1,
        readyWait: 1,
        ready: function(e) {
            (!0 === e ? --S.readyWait : S.isReady) || (S.isReady = !0) !== e && 0 < --S.readyWait || F.resolveWith(E, [S])
        }
    }),
    S.ready.then = F.then,
    "complete" === E.readyState || "loading" !== E.readyState && !E.documentElement.doScroll ? C.setTimeout(S.ready) : (E.addEventListener("DOMContentLoaded", B),
    C.addEventListener("load", B));
    var $ = function(e, t, n, r, i, o, a) {
        var s = 0
          , u = e.length
          , l = null == n;
        if ("object" === w(n))
            for (s in i = !0,
            n)
                $(e, t, s, n[s], !0, o, a);
        else if (void 0 !== r && (i = !0,
        m(r) || (a = !0),
        l && (a ? (t.call(e, r),
        t = null) : (l = t,
        t = function(e, t, n) {
            return l.call(S(e), n)
        }
        )),
        t))
            for (; s < u; s++)
                t(e[s], n, a ? r : r.call(e[s], s, t(e[s], n)));
        return i ? e : l ? t.call(e) : u ? t(e[0], n) : o
    }
      , _ = /^-ms-/
      , z = /-([a-z])/g;
    function U(e, t) {
        return t.toUpperCase()
    }
    function X(e) {
        return e.replace(_, "ms-").replace(z, U)
    }
    var V = function(e) {
        return 1 === e.nodeType || 9 === e.nodeType || !+e.nodeType
    };
    function G() {
        this.expando = S.expando + G.uid++
    }
    G.uid = 1,
    G.prototype = {
        cache: function(e) {
            var t = e[this.expando];
            return t || (t = {},
            V(e) && (e.nodeType ? e[this.expando] = t : Object.defineProperty(e, this.expando, {
                value: t,
                configurable: !0
            }))),
            t
        },
        set: function(e, t, n) {
            var r, i = this.cache(e);
            if ("string" == typeof t)
                i[X(t)] = n;
            else
                for (r in t)
                    i[X(r)] = t[r];
            return i
        },
        get: function(e, t) {
            return void 0 === t ? this.cache(e) : e[this.expando] && e[this.expando][X(t)]
        },
        access: function(e, t, n) {
            return void 0 === t || t && "string" == typeof t && void 0 === n ? this.get(e, t) : (this.set(e, t, n),
            void 0 !== n ? n : t)
        },
        remove: function(e, t) {
            var n, r = e[this.expando];
            if (void 0 !== r) {
                if (void 0 !== t) {
                    n = (t = Array.isArray(t) ? t.map(X) : (t = X(t))in r ? [t] : t.match(P) || []).length;
                    while (n--)
                        delete r[t[n]]
                }
                (void 0 === t || S.isEmptyObject(r)) && (e.nodeType ? e[this.expando] = void 0 : delete e[this.expando])
            }
        },
        hasData: function(e) {
            var t = e[this.expando];
            return void 0 !== t && !S.isEmptyObject(t)
        }
    };
    var Y = new G
      , Q = new G
      , J = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/
      , K = /[A-Z]/g;
    function Z(e, t, n) {
        var r, i;
        if (void 0 === n && 1 === e.nodeType)
            if (r = "data-" + t.replace(K, "-$&").toLowerCase(),
            "string" == typeof (n = e.getAttribute(r))) {
                try {
                    n = "true" === (i = n) || "false" !== i && ("null" === i ? null : i === +i + "" ? +i : J.test(i) ? JSON.parse(i) : i)
                } catch (e) {}
                Q.set(e, t, n)
            } else
                n = void 0;
        return n
    }
    S.extend({
        hasData: function(e) {
            return Q.hasData(e) || Y.hasData(e)
        },
        data: function(e, t, n) {
            return Q.access(e, t, n)
        },
        removeData: function(e, t) {
            Q.remove(e, t)
        },
        _data: function(e, t, n) {
            return Y.access(e, t, n)
        },
        _removeData: function(e, t) {
            Y.remove(e, t)
        }
    }),
    S.fn.extend({
        data: function(n, e) {
            var t, r, i, o = this[0], a = o && o.attributes;
            if (void 0 === n) {
                if (this.length && (i = Q.get(o),
                1 === o.nodeType && !Y.get(o, "hasDataAttrs"))) {
                    t = a.length;
                    while (t--)
                        a[t] && 0 === (r = a[t].name).indexOf("data-") && (r = X(r.slice(5)),
                        Z(o, r, i[r]));
                    Y.set(o, "hasDataAttrs", !0)
                }
                return i
            }
            return "object" == typeof n ? this.each(function() {
                Q.set(this, n)
            }) : $(this, function(e) {
                var t;
                if (o && void 0 === e)
                    return void 0 !== (t = Q.get(o, n)) ? t : void 0 !== (t = Z(o, n)) ? t : void 0;
                this.each(function() {
                    Q.set(this, n, e)
                })
            }, null, e, 1 < arguments.length, null, !0)
        },
        removeData: function(e) {
            return this.each(function() {
                Q.remove(this, e)
            })
        }
    }),
    S.extend({
        queue: function(e, t, n) {
            var r;
            if (e)
                return t = (t || "fx") + "queue",
                r = Y.get(e, t),
                n && (!r || Array.isArray(n) ? r = Y.access(e, t, S.makeArray(n)) : r.push(n)),
                r || []
        },
        dequeue: function(e, t) {
            t = t || "fx";
            var n = S.queue(e, t)
              , r = n.length
              , i = n.shift()
              , o = S._queueHooks(e, t);
            "inprogress" === i && (i = n.shift(),
            r--),
            i && ("fx" === t && n.unshift("inprogress"),
            delete o.stop,
            i.call(e, function() {
                S.dequeue(e, t)
            }, o)),
            !r && o && o.empty.fire()
        },
        _queueHooks: function(e, t) {
            var n = t + "queueHooks";
            return Y.get(e, n) || Y.access(e, n, {
                empty: S.Callbacks("once memory").add(function() {
                    Y.remove(e, [t + "queue", n])
                })
            })
        }
    }),
    S.fn.extend({
        queue: function(t, n) {
            var e = 2;
            return "string" != typeof t && (n = t,
            t = "fx",
            e--),
            arguments.length < e ? S.queue(this[0], t) : void 0 === n ? this : this.each(function() {
                var e = S.queue(this, t, n);
                S._queueHooks(this, t),
                "fx" === t && "inprogress" !== e[0] && S.dequeue(this, t)
            })
        },
        dequeue: function(e) {
            return this.each(function() {
                S.dequeue(this, e)
            })
        },
        clearQueue: function(e) {
            return this.queue(e || "fx", [])
        },
        promise: function(e, t) {
            var n, r = 1, i = S.Deferred(), o = this, a = this.length, s = function() {
                --r || i.resolveWith(o, [o])
            };
            "string" != typeof e && (t = e,
            e = void 0),
            e = e || "fx";
            while (a--)
                (n = Y.get(o[a], e + "queueHooks")) && n.empty && (r++,
                n.empty.add(s));
            return s(),
            i.promise(t)
        }
    });
    var ee = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source
      , te = new RegExp("^(?:([+-])=|)(" + ee + ")([a-z%]*)$","i")
      , ne = ["Top", "Right", "Bottom", "Left"]
      , re = E.documentElement
      , ie = function(e) {
        return S.contains(e.ownerDocument, e)
    }
      , oe = {
        composed: !0
    };
    re.getRootNode && (ie = function(e) {
        return S.contains(e.ownerDocument, e) || e.getRootNode(oe) === e.ownerDocument
    }
    );
    var ae = function(e, t) {
        return "none" === (e = t || e).style.display || "" === e.style.display && ie(e) && "none" === S.css(e, "display")
    };
    function se(e, t, n, r) {
        var i, o, a = 20, s = r ? function() {
            return r.cur()
        }
        : function() {
            return S.css(e, t, "")
        }
        , u = s(), l = n && n[3] || (S.cssNumber[t] ? "" : "px"), c = e.nodeType && (S.cssNumber[t] || "px" !== l && +u) && te.exec(S.css(e, t));
        if (c && c[3] !== l) {
            u /= 2,
            l = l || c[3],
            c = +u || 1;
            while (a--)
                S.style(e, t, c + l),
                (1 - o) * (1 - (o = s() / u || .5)) <= 0 && (a = 0),
                c /= o;
            c *= 2,
            S.style(e, t, c + l),
            n = n || []
        }
        return n && (c = +c || +u || 0,
        i = n[1] ? c + (n[1] + 1) * n[2] : +n[2],
        r && (r.unit = l,
        r.start = c,
        r.end = i)),
        i
    }
    var ue = {};
    function le(e, t) {
        for (var n, r, i, o, a, s, u, l = [], c = 0, f = e.length; c < f; c++)
            (r = e[c]).style && (n = r.style.display,
            t ? ("none" === n && (l[c] = Y.get(r, "display") || null,
            l[c] || (r.style.display = "")),
            "" === r.style.display && ae(r) && (l[c] = (u = a = o = void 0,
            a = (i = r).ownerDocument,
            s = i.nodeName,
            (u = ue[s]) || (o = a.body.appendChild(a.createElement(s)),
            u = S.css(o, "display"),
            o.parentNode.removeChild(o),
            "none" === u && (u = "block"),
            ue[s] = u)))) : "none" !== n && (l[c] = "none",
            Y.set(r, "display", n)));
        for (c = 0; c < f; c++)
            null != l[c] && (e[c].style.display = l[c]);
        return e
    }
    S.fn.extend({
        show: function() {
            return le(this, !0)
        },
        hide: function() {
            return le(this)
        },
        toggle: function(e) {
            return "boolean" == typeof e ? e ? this.show() : this.hide() : this.each(function() {
                ae(this) ? S(this).show() : S(this).hide()
            })
        }
    });
    var ce, fe, pe = /^(?:checkbox|radio)$/i, de = /<([a-z][^\/\0>\x20\t\r\n\f]*)/i, he = /^$|^module$|\/(?:java|ecma)script/i;
    ce = E.createDocumentFragment().appendChild(E.createElement("div")),
    (fe = E.createElement("input")).setAttribute("type", "radio"),
    fe.setAttribute("checked", "checked"),
    fe.setAttribute("name", "t"),
    ce.appendChild(fe),
    y.checkClone = ce.cloneNode(!0).cloneNode(!0).lastChild.checked,
    ce.innerHTML = "<textarea>x</textarea>",
    y.noCloneChecked = !!ce.cloneNode(!0).lastChild.defaultValue,
    ce.innerHTML = "<option></option>",
    y.option = !!ce.lastChild;
    var ge = {
        thead: [1, "<table>", "</table>"],
        col: [2, "<table><colgroup>", "</colgroup></table>"],
        tr: [2, "<table><tbody>", "</tbody></table>"],
        td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
        _default: [0, "", ""]
    };
    function ve(e, t) {
        var n;
        return n = "undefined" != typeof e.getElementsByTagName ? e.getElementsByTagName(t || "*") : "undefined" != typeof e.querySelectorAll ? e.querySelectorAll(t || "*") : [],
        void 0 === t || t && A(e, t) ? S.merge([e], n) : n
    }
    function ye(e, t) {
        for (var n = 0, r = e.length; n < r; n++)
            Y.set(e[n], "globalEval", !t || Y.get(t[n], "globalEval"))
    }
    ge.tbody = ge.tfoot = ge.colgroup = ge.caption = ge.thead,
    ge.th = ge.td,
    y.option || (ge.optgroup = ge.option = [1, "<select multiple='multiple'>", "</select>"]);
    var me = /<|&#?\w+;/;
    function xe(e, t, n, r, i) {
        for (var o, a, s, u, l, c, f = t.createDocumentFragment(), p = [], d = 0, h = e.length; d < h; d++)
            if ((o = e[d]) || 0 === o)
                if ("object" === w(o))
                    S.merge(p, o.nodeType ? [o] : o);
                else if (me.test(o)) {
                    a = a || f.appendChild(t.createElement("div")),
                    s = (de.exec(o) || ["", ""])[1].toLowerCase(),
                    u = ge[s] || ge._default,
                    a.innerHTML = u[1] + S.htmlPrefilter(o) + u[2],
                    c = u[0];
                    while (c--)
                        a = a.lastChild;
                    S.merge(p, a.childNodes),
                    (a = f.firstChild).textContent = ""
                } else
                    p.push(t.createTextNode(o));
        f.textContent = "",
        d = 0;
        while (o = p[d++])
            if (r && -1 < S.inArray(o, r))
                i && i.push(o);
            else if (l = ie(o),
            a = ve(f.appendChild(o), "script"),
            l && ye(a),
            n) {
                c = 0;
                while (o = a[c++])
                    he.test(o.type || "") && n.push(o)
            }
        return f
    }
    var be = /^([^.]*)(?:\.(.+)|)/;
    function we() {
        return !0
    }
    function Te() {
        return !1
    }
    function Ce(e, t) {
        return e === function() {
            try {
                return E.activeElement
            } catch (e) {}
        }() == ("focus" === t)
    }
    function Ee(e, t, n, r, i, o) {
        var a, s;
        if ("object" == typeof t) {
            for (s in "string" != typeof n && (r = r || n,
            n = void 0),
            t)
                Ee(e, s, n, r, t[s], o);
            return e
        }
        if (null == r && null == i ? (i = n,
        r = n = void 0) : null == i && ("string" == typeof n ? (i = r,
        r = void 0) : (i = r,
        r = n,
        n = void 0)),
        !1 === i)
            i = Te;
        else if (!i)
            return e;
        return 1 === o && (a = i,
        (i = function(e) {
            return S().off(e),
            a.apply(this, arguments)
        }
        ).guid = a.guid || (a.guid = S.guid++)),
        e.each(function() {
            S.event.add(this, t, i, r, n)
        })
    }
    function Se(e, i, o) {
        o ? (Y.set(e, i, !1),
        S.event.add(e, i, {
            namespace: !1,
            handler: function(e) {
                var t, n, r = Y.get(this, i);
                if (1 & e.isTrigger && this[i]) {
                    if (r.length)
                        (S.event.special[i] || {}).delegateType && e.stopPropagation();
                    else if (r = s.call(arguments),
                    Y.set(this, i, r),
                    t = o(this, i),
                    this[i](),
                    r !== (n = Y.get(this, i)) || t ? Y.set(this, i, !1) : n = {},
                    r !== n)
                        return e.stopImmediatePropagation(),
                        e.preventDefault(),
                        n && n.value
                } else
                    r.length && (Y.set(this, i, {
                        value: S.event.trigger(S.extend(r[0], S.Event.prototype), r.slice(1), this)
                    }),
                    e.stopImmediatePropagation())
            }
        })) : void 0 === Y.get(e, i) && S.event.add(e, i, we)
    }
    S.event = {
        global: {},
        add: function(t, e, n, r, i) {
            var o, a, s, u, l, c, f, p, d, h, g, v = Y.get(t);
            if (V(t)) {
                n.handler && (n = (o = n).handler,
                i = o.selector),
                i && S.find.matchesSelector(re, i),
                n.guid || (n.guid = S.guid++),
                (u = v.events) || (u = v.events = Object.create(null)),
                (a = v.handle) || (a = v.handle = function(e) {
                    return "undefined" != typeof S && S.event.triggered !== e.type ? S.event.dispatch.apply(t, arguments) : void 0
                }
                ),
                l = (e = (e || "").match(P) || [""]).length;
                while (l--)
                    d = g = (s = be.exec(e[l]) || [])[1],
                    h = (s[2] || "").split(".").sort(),
                    d && (f = S.event.special[d] || {},
                    d = (i ? f.delegateType : f.bindType) || d,
                    f = S.event.special[d] || {},
                    c = S.extend({
                        type: d,
                        origType: g,
                        data: r,
                        handler: n,
                        guid: n.guid,
                        selector: i,
                        needsContext: i && S.expr.match.needsContext.test(i),
                        namespace: h.join(".")
                    }, o),
                    (p = u[d]) || ((p = u[d] = []).delegateCount = 0,
                    f.setup && !1 !== f.setup.call(t, r, h, a) || t.addEventListener && t.addEventListener(d, a)),
                    f.add && (f.add.call(t, c),
                    c.handler.guid || (c.handler.guid = n.guid)),
                    i ? p.splice(p.delegateCount++, 0, c) : p.push(c),
                    S.event.global[d] = !0)
            }
        },
        remove: function(e, t, n, r, i) {
            var o, a, s, u, l, c, f, p, d, h, g, v = Y.hasData(e) && Y.get(e);
            if (v && (u = v.events)) {
                l = (t = (t || "").match(P) || [""]).length;
                while (l--)
                    if (d = g = (s = be.exec(t[l]) || [])[1],
                    h = (s[2] || "").split(".").sort(),
                    d) {
                        f = S.event.special[d] || {},
                        p = u[d = (r ? f.delegateType : f.bindType) || d] || [],
                        s = s[2] && new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)"),
                        a = o = p.length;
                        while (o--)
                            c = p[o],
                            !i && g !== c.origType || n && n.guid !== c.guid || s && !s.test(c.namespace) || r && r !== c.selector && ("**" !== r || !c.selector) || (p.splice(o, 1),
                            c.selector && p.delegateCount--,
                            f.remove && f.remove.call(e, c));
                        a && !p.length && (f.teardown && !1 !== f.teardown.call(e, h, v.handle) || S.removeEvent(e, d, v.handle),
                        delete u[d])
                    } else
                        for (d in u)
                            S.event.remove(e, d + t[l], n, r, !0);
                S.isEmptyObject(u) && Y.remove(e, "handle events")
            }
        },
        dispatch: function(e) {
            var t, n, r, i, o, a, s = new Array(arguments.length), u = S.event.fix(e), l = (Y.get(this, "events") || Object.create(null))[u.type] || [], c = S.event.special[u.type] || {};
            for (s[0] = u,
            t = 1; t < arguments.length; t++)
                s[t] = arguments[t];
            if (u.delegateTarget = this,
            !c.preDispatch || !1 !== c.preDispatch.call(this, u)) {
                a = S.event.handlers.call(this, u, l),
                t = 0;
                while ((i = a[t++]) && !u.isPropagationStopped()) {
                    u.currentTarget = i.elem,
                    n = 0;
                    while ((o = i.handlers[n++]) && !u.isImmediatePropagationStopped())
                        u.rnamespace && !1 !== o.namespace && !u.rnamespace.test(o.namespace) || (u.handleObj = o,
                        u.data = o.data,
                        void 0 !== (r = ((S.event.special[o.origType] || {}).handle || o.handler).apply(i.elem, s)) && !1 === (u.result = r) && (u.preventDefault(),
                        u.stopPropagation()))
                }
                return c.postDispatch && c.postDispatch.call(this, u),
                u.result
            }
        },
        handlers: function(e, t) {
            var n, r, i, o, a, s = [], u = t.delegateCount, l = e.target;
            if (u && l.nodeType && !("click" === e.type && 1 <= e.button))
                for (; l !== this; l = l.parentNode || this)
                    if (1 === l.nodeType && ("click" !== e.type || !0 !== l.disabled)) {
                        for (o = [],
                        a = {},
                        n = 0; n < u; n++)
                            void 0 === a[i = (r = t[n]).selector + " "] && (a[i] = r.needsContext ? -1 < S(i, this).index(l) : S.find(i, this, null, [l]).length),
                            a[i] && o.push(r);
                        o.length && s.push({
                            elem: l,
                            handlers: o
                        })
                    }
            return l = this,
            u < t.length && s.push({
                elem: l,
                handlers: t.slice(u)
            }),
            s
        },
        addProp: function(t, e) {
            Object.defineProperty(S.Event.prototype, t, {
                enumerable: !0,
                configurable: !0,
                get: m(e) ? function() {
                    if (this.originalEvent)
                        return e(this.originalEvent)
                }
                : function() {
                    if (this.originalEvent)
                        return this.originalEvent[t]
                }
                ,
                set: function(e) {
                    Object.defineProperty(this, t, {
                        enumerable: !0,
                        configurable: !0,
                        writable: !0,
                        value: e
                    })
                }
            })
        },
        fix: function(e) {
            return e[S.expando] ? e : new S.Event(e)
        },
        special: {
            load: {
                noBubble: !0
            },
            click: {
                setup: function(e) {
                    var t = this || e;
                    return pe.test(t.type) && t.click && A(t, "input") && Se(t, "click", we),
                    !1
                },
                trigger: function(e) {
                    var t = this || e;
                    return pe.test(t.type) && t.click && A(t, "input") && Se(t, "click"),
                    !0
                },
                _default: function(e) {
                    var t = e.target;
                    return pe.test(t.type) && t.click && A(t, "input") && Y.get(t, "click") || A(t, "a")
                }
            },
            beforeunload: {
                postDispatch: function(e) {
                    void 0 !== e.result && e.originalEvent && (e.originalEvent.returnValue = e.result)
                }
            }
        }
    },
    S.removeEvent = function(e, t, n) {
        e.removeEventListener && e.removeEventListener(t, n)
    }
    ,
    S.Event = function(e, t) {
        if (!(this instanceof S.Event))
            return new S.Event(e,t);
        e && e.type ? (this.originalEvent = e,
        this.type = e.type,
        this.isDefaultPrevented = e.defaultPrevented || void 0 === e.defaultPrevented && !1 === e.returnValue ? we : Te,
        this.target = e.target && 3 === e.target.nodeType ? e.target.parentNode : e.target,
        this.currentTarget = e.currentTarget,
        this.relatedTarget = e.relatedTarget) : this.type = e,
        t && S.extend(this, t),
        this.timeStamp = e && e.timeStamp || Date.now(),
        this[S.expando] = !0
    }
    ,
    S.Event.prototype = {
        constructor: S.Event,
        isDefaultPrevented: Te,
        isPropagationStopped: Te,
        isImmediatePropagationStopped: Te,
        isSimulated: !1,
        preventDefault: function() {
            var e = this.originalEvent;
            this.isDefaultPrevented = we,
            e && !this.isSimulated && e.preventDefault()
        },
        stopPropagation: function() {
            var e = this.originalEvent;
            this.isPropagationStopped = we,
            e && !this.isSimulated && e.stopPropagation()
        },
        stopImmediatePropagation: function() {
            var e = this.originalEvent;
            this.isImmediatePropagationStopped = we,
            e && !this.isSimulated && e.stopImmediatePropagation(),
            this.stopPropagation()
        }
    },
    S.each({
        altKey: !0,
        bubbles: !0,
        cancelable: !0,
        changedTouches: !0,
        ctrlKey: !0,
        detail: !0,
        eventPhase: !0,
        metaKey: !0,
        pageX: !0,
        pageY: !0,
        shiftKey: !0,
        view: !0,
        "char": !0,
        code: !0,
        charCode: !0,
        key: !0,
        keyCode: !0,
        button: !0,
        buttons: !0,
        clientX: !0,
        clientY: !0,
        offsetX: !0,
        offsetY: !0,
        pointerId: !0,
        pointerType: !0,
        screenX: !0,
        screenY: !0,
        targetTouches: !0,
        toElement: !0,
        touches: !0,
        which: !0
    }, S.event.addProp),
    S.each({
        focus: "focusin",
        blur: "focusout"
    }, function(e, t) {
        S.event.special[e] = {
            setup: function() {
                return Se(this, e, Ce),
                !1
            },
            trigger: function() {
                return Se(this, e),
                !0
            },
            _default: function() {
                return !0
            },
            delegateType: t
        }
    }),
    S.each({
        mouseenter: "mouseover",
        mouseleave: "mouseout",
        pointerenter: "pointerover",
        pointerleave: "pointerout"
    }, function(e, i) {
        S.event.special[e] = {
            delegateType: i,
            bindType: i,
            handle: function(e) {
                var t, n = e.relatedTarget, r = e.handleObj;
                return n && (n === this || S.contains(this, n)) || (e.type = r.origType,
                t = r.handler.apply(this, arguments),
                e.type = i),
                t
            }
        }
    }),
    S.fn.extend({
        on: function(e, t, n, r) {
            return Ee(this, e, t, n, r)
        },
        one: function(e, t, n, r) {
            return Ee(this, e, t, n, r, 1)
        },
        off: function(e, t, n) {
            var r, i;
            if (e && e.preventDefault && e.handleObj)
                return r = e.handleObj,
                S(e.delegateTarget).off(r.namespace ? r.origType + "." + r.namespace : r.origType, r.selector, r.handler),
                this;
            if ("object" == typeof e) {
                for (i in e)
                    this.off(i, t, e[i]);
                return this
            }
            return !1 !== t && "function" != typeof t || (n = t,
            t = void 0),
            !1 === n && (n = Te),
            this.each(function() {
                S.event.remove(this, e, n, t)
            })
        }
    });
    var ke = /<script|<style|<link/i
      , Ae = /checked\s*(?:[^=]|=\s*.checked.)/i
      , Ne = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;
    function je(e, t) {
        return A(e, "table") && A(11 !== t.nodeType ? t : t.firstChild, "tr") && S(e).children("tbody")[0] || e
    }
    function De(e) {
        return e.type = (null !== e.getAttribute("type")) + "/" + e.type,
        e
    }
    function qe(e) {
        return "true/" === (e.type || "").slice(0, 5) ? e.type = e.type.slice(5) : e.removeAttribute("type"),
        e
    }
    function Le(e, t) {
        var n, r, i, o, a, s;
        if (1 === t.nodeType) {
            if (Y.hasData(e) && (s = Y.get(e).events))
                for (i in Y.remove(t, "handle events"),
                s)
                    for (n = 0,
                    r = s[i].length; n < r; n++)
                        S.event.add(t, i, s[i][n]);
            Q.hasData(e) && (o = Q.access(e),
            a = S.extend({}, o),
            Q.set(t, a))
        }
    }
    function He(n, r, i, o) {
        r = g(r);
        var e, t, a, s, u, l, c = 0, f = n.length, p = f - 1, d = r[0], h = m(d);
        if (h || 1 < f && "string" == typeof d && !y.checkClone && Ae.test(d))
            return n.each(function(e) {
                var t = n.eq(e);
                h && (r[0] = d.call(this, e, t.html())),
                He(t, r, i, o)
            });
        if (f && (t = (e = xe(r, n[0].ownerDocument, !1, n, o)).firstChild,
        1 === e.childNodes.length && (e = t),
        t || o)) {
            for (s = (a = S.map(ve(e, "script"), De)).length; c < f; c++)
                u = e,
                c !== p && (u = S.clone(u, !0, !0),
                s && S.merge(a, ve(u, "script"))),
                i.call(n[c], u, c);
            if (s)
                for (l = a[a.length - 1].ownerDocument,
                S.map(a, qe),
                c = 0; c < s; c++)
                    u = a[c],
                    he.test(u.type || "") && !Y.access(u, "globalEval") && S.contains(l, u) && (u.src && "module" !== (u.type || "").toLowerCase() ? S._evalUrl && !u.noModule && S._evalUrl(u.src, {
                        nonce: u.nonce || u.getAttribute("nonce")
                    }, l) : b(u.textContent.replace(Ne, ""), u, l))
        }
        return n
    }
    function Oe(e, t, n) {
        for (var r, i = t ? S.filter(t, e) : e, o = 0; null != (r = i[o]); o++)
            n || 1 !== r.nodeType || S.cleanData(ve(r)),
            r.parentNode && (n && ie(r) && ye(ve(r, "script")),
            r.parentNode.removeChild(r));
        return e
    }
    S.extend({
        htmlPrefilter: function(e) {
            return e
        },
        clone: function(e, t, n) {
            var r, i, o, a, s, u, l, c = e.cloneNode(!0), f = ie(e);
            if (!(y.noCloneChecked || 1 !== e.nodeType && 11 !== e.nodeType || S.isXMLDoc(e)))
                for (a = ve(c),
                r = 0,
                i = (o = ve(e)).length; r < i; r++)
                    s = o[r],
                    u = a[r],
                    void 0,
                    "input" === (l = u.nodeName.toLowerCase()) && pe.test(s.type) ? u.checked = s.checked : "input" !== l && "textarea" !== l || (u.defaultValue = s.defaultValue);
            if (t)
                if (n)
                    for (o = o || ve(e),
                    a = a || ve(c),
                    r = 0,
                    i = o.length; r < i; r++)
                        Le(o[r], a[r]);
                else
                    Le(e, c);
            return 0 < (a = ve(c, "script")).length && ye(a, !f && ve(e, "script")),
            c
        },
        cleanData: function(e) {
            for (var t, n, r, i = S.event.special, o = 0; void 0 !== (n = e[o]); o++)
                if (V(n)) {
                    if (t = n[Y.expando]) {
                        if (t.events)
                            for (r in t.events)
                                i[r] ? S.event.remove(n, r) : S.removeEvent(n, r, t.handle);
                        n[Y.expando] = void 0
                    }
                    n[Q.expando] && (n[Q.expando] = void 0)
                }
        }
    }),
    S.fn.extend({
        detach: function(e) {
            return Oe(this, e, !0)
        },
        remove: function(e) {
            return Oe(this, e)
        },
        text: function(e) {
            return $(this, function(e) {
                return void 0 === e ? S.text(this) : this.empty().each(function() {
                    1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || (this.textContent = e)
                })
            }, null, e, arguments.length)
        },
        append: function() {
            return He(this, arguments, function(e) {
                1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || je(this, e).appendChild(e)
            })
        },
        prepend: function() {
            return He(this, arguments, function(e) {
                if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                    var t = je(this, e);
                    t.insertBefore(e, t.firstChild)
                }
            })
        },
        before: function() {
            return He(this, arguments, function(e) {
                this.parentNode && this.parentNode.insertBefore(e, this)
            })
        },
        after: function() {
            return He(this, arguments, function(e) {
                this.parentNode && this.parentNode.insertBefore(e, this.nextSibling)
            })
        },
        empty: function() {
            for (var e, t = 0; null != (e = this[t]); t++)
                1 === e.nodeType && (S.cleanData(ve(e, !1)),
                e.textContent = "");
            return this
        },
        clone: function(e, t) {
            return e = null != e && e,
            t = null == t ? e : t,
            this.map(function() {
                return S.clone(this, e, t)
            })
        },
        html: function(e) {
            return $(this, function(e) {
                var t = this[0] || {}
                  , n = 0
                  , r = this.length;
                if (void 0 === e && 1 === t.nodeType)
                    return t.innerHTML;
                if ("string" == typeof e && !ke.test(e) && !ge[(de.exec(e) || ["", ""])[1].toLowerCase()]) {
                    e = S.htmlPrefilter(e);
                    try {
                        for (; n < r; n++)
                            1 === (t = this[n] || {}).nodeType && (S.cleanData(ve(t, !1)),
                            t.innerHTML = e);
                        t = 0
                    } catch (e) {}
                }
                t && this.empty().append(e)
            }, null, e, arguments.length)
        },
        replaceWith: function() {
            var n = [];
            return He(this, arguments, function(e) {
                var t = this.parentNode;
                S.inArray(this, n) < 0 && (S.cleanData(ve(this)),
                t && t.replaceChild(e, this))
            }, n)
        }
    }),
    S.each({
        appendTo: "append",
        prependTo: "prepend",
        insertBefore: "before",
        insertAfter: "after",
        replaceAll: "replaceWith"
    }, function(e, a) {
        S.fn[e] = function(e) {
            for (var t, n = [], r = S(e), i = r.length - 1, o = 0; o <= i; o++)
                t = o === i ? this : this.clone(!0),
                S(r[o])[a](t),
                u.apply(n, t.get());
            return this.pushStack(n)
        }
    });
    var Pe = new RegExp("^(" + ee + ")(?!px)[a-z%]+$","i")
      , Re = function(e) {
        var t = e.ownerDocument.defaultView;
        return t && t.opener || (t = C),
        t.getComputedStyle(e)
    }
      , Me = function(e, t, n) {
        var r, i, o = {};
        for (i in t)
            o[i] = e.style[i],
            e.style[i] = t[i];
        for (i in r = n.call(e),
        t)
            e.style[i] = o[i];
        return r
    }
      , Ie = new RegExp(ne.join("|"),"i");
    function We(e, t, n) {
        var r, i, o, a, s = e.style;
        return (n = n || Re(e)) && ("" !== (a = n.getPropertyValue(t) || n[t]) || ie(e) || (a = S.style(e, t)),
        !y.pixelBoxStyles() && Pe.test(a) && Ie.test(t) && (r = s.width,
        i = s.minWidth,
        o = s.maxWidth,
        s.minWidth = s.maxWidth = s.width = a,
        a = n.width,
        s.width = r,
        s.minWidth = i,
        s.maxWidth = o)),
        void 0 !== a ? a + "" : a
    }
    function Fe(e, t) {
        return {
            get: function() {
                if (!e())
                    return (this.get = t).apply(this, arguments);
                delete this.get
            }
        }
    }
    !function() {
        function e() {
            if (l) {
                u.style.cssText = "position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0",
                l.style.cssText = "position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%",
                re.appendChild(u).appendChild(l);
                var e = C.getComputedStyle(l);
                n = "1%" !== e.top,
                s = 12 === t(e.marginLeft),
                l.style.right = "60%",
                o = 36 === t(e.right),
                r = 36 === t(e.width),
                l.style.position = "absolute",
                i = 12 === t(l.offsetWidth / 3),
                re.removeChild(u),
                l = null
            }
        }
        function t(e) {
            return Math.round(parseFloat(e))
        }
        var n, r, i, o, a, s, u = E.createElement("div"), l = E.createElement("div");
        l.style && (l.style.backgroundClip = "content-box",
        l.cloneNode(!0).style.backgroundClip = "",
        y.clearCloneStyle = "content-box" === l.style.backgroundClip,
        S.extend(y, {
            boxSizingReliable: function() {
                return e(),
                r
            },
            pixelBoxStyles: function() {
                return e(),
                o
            },
            pixelPosition: function() {
                return e(),
                n
            },
            reliableMarginLeft: function() {
                return e(),
                s
            },
            scrollboxSize: function() {
                return e(),
                i
            },
            reliableTrDimensions: function() {
                var e, t, n, r;
                return null == a && (e = E.createElement("table"),
                t = E.createElement("tr"),
                n = E.createElement("div"),
                e.style.cssText = "position:absolute;left:-11111px;border-collapse:separate",
                t.style.cssText = "border:1px solid",
                t.style.height = "1px",
                n.style.height = "9px",
                n.style.display = "block",
                re.appendChild(e).appendChild(t).appendChild(n),
                r = C.getComputedStyle(t),
                a = parseInt(r.height, 10) + parseInt(r.borderTopWidth, 10) + parseInt(r.borderBottomWidth, 10) === t.offsetHeight,
                re.removeChild(e)),
                a
            }
        }))
    }();
    var Be = ["Webkit", "Moz", "ms"]
      , $e = E.createElement("div").style
      , _e = {};
    function ze(e) {
        var t = S.cssProps[e] || _e[e];
        return t || (e in $e ? e : _e[e] = function(e) {
            var t = e[0].toUpperCase() + e.slice(1)
              , n = Be.length;
            while (n--)
                if ((e = Be[n] + t)in $e)
                    return e
        }(e) || e)
    }
    var Ue = /^(none|table(?!-c[ea]).+)/
      , Xe = /^--/
      , Ve = {
        position: "absolute",
        visibility: "hidden",
        display: "block"
    }
      , Ge = {
        letterSpacing: "0",
        fontWeight: "400"
    };
    function Ye(e, t, n) {
        var r = te.exec(t);
        return r ? Math.max(0, r[2] - (n || 0)) + (r[3] || "px") : t
    }
    function Qe(e, t, n, r, i, o) {
        var a = "width" === t ? 1 : 0
          , s = 0
          , u = 0;
        if (n === (r ? "border" : "content"))
            return 0;
        for (; a < 4; a += 2)
            "margin" === n && (u += S.css(e, n + ne[a], !0, i)),
            r ? ("content" === n && (u -= S.css(e, "padding" + ne[a], !0, i)),
            "margin" !== n && (u -= S.css(e, "border" + ne[a] + "Width", !0, i))) : (u += S.css(e, "padding" + ne[a], !0, i),
            "padding" !== n ? u += S.css(e, "border" + ne[a] + "Width", !0, i) : s += S.css(e, "border" + ne[a] + "Width", !0, i));
        return !r && 0 <= o && (u += Math.max(0, Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - o - u - s - .5)) || 0),
        u
    }
    function Je(e, t, n) {
        var r = Re(e)
          , i = (!y.boxSizingReliable() || n) && "border-box" === S.css(e, "boxSizing", !1, r)
          , o = i
          , a = We(e, t, r)
          , s = "offset" + t[0].toUpperCase() + t.slice(1);
        if (Pe.test(a)) {
            if (!n)
                return a;
            a = "auto"
        }
        return (!y.boxSizingReliable() && i || !y.reliableTrDimensions() && A(e, "tr") || "auto" === a || !parseFloat(a) && "inline" === S.css(e, "display", !1, r)) && e.getClientRects().length && (i = "border-box" === S.css(e, "boxSizing", !1, r),
        (o = s in e) && (a = e[s])),
        (a = parseFloat(a) || 0) + Qe(e, t, n || (i ? "border" : "content"), o, r, a) + "px"
    }
    function Ke(e, t, n, r, i) {
        return new Ke.prototype.init(e,t,n,r,i)
    }
    S.extend({
        cssHooks: {
            opacity: {
                get: function(e, t) {
                    if (t) {
                        var n = We(e, "opacity");
                        return "" === n ? "1" : n
                    }
                }
            }
        },
        cssNumber: {
            animationIterationCount: !0,
            columnCount: !0,
            fillOpacity: !0,
            flexGrow: !0,
            flexShrink: !0,
            fontWeight: !0,
            gridArea: !0,
            gridColumn: !0,
            gridColumnEnd: !0,
            gridColumnStart: !0,
            gridRow: !0,
            gridRowEnd: !0,
            gridRowStart: !0,
            lineHeight: !0,
            opacity: !0,
            order: !0,
            orphans: !0,
            widows: !0,
            zIndex: !0,
            zoom: !0
        },
        cssProps: {},
        style: function(e, t, n, r) {
            if (e && 3 !== e.nodeType && 8 !== e.nodeType && e.style) {
                var i, o, a, s = X(t), u = Xe.test(t), l = e.style;
                if (u || (t = ze(s)),
                a = S.cssHooks[t] || S.cssHooks[s],
                void 0 === n)
                    return a && "get"in a && void 0 !== (i = a.get(e, !1, r)) ? i : l[t];
                "string" === (o = typeof n) && (i = te.exec(n)) && i[1] && (n = se(e, t, i),
                o = "number"),
                null != n && n == n && ("number" !== o || u || (n += i && i[3] || (S.cssNumber[s] ? "" : "px")),
                y.clearCloneStyle || "" !== n || 0 !== t.indexOf("background") || (l[t] = "inherit"),
                a && "set"in a && void 0 === (n = a.set(e, n, r)) || (u ? l.setProperty(t, n) : l[t] = n))
            }
        },
        css: function(e, t, n, r) {
            var i, o, a, s = X(t);
            return Xe.test(t) || (t = ze(s)),
            (a = S.cssHooks[t] || S.cssHooks[s]) && "get"in a && (i = a.get(e, !0, n)),
            void 0 === i && (i = We(e, t, r)),
            "normal" === i && t in Ge && (i = Ge[t]),
            "" === n || n ? (o = parseFloat(i),
            !0 === n || isFinite(o) ? o || 0 : i) : i
        }
    }),
    S.each(["height", "width"], function(e, u) {
        S.cssHooks[u] = {
            get: function(e, t, n) {
                if (t)
                    return !Ue.test(S.css(e, "display")) || e.getClientRects().length && e.getBoundingClientRect().width ? Je(e, u, n) : Me(e, Ve, function() {
                        return Je(e, u, n)
                    })
            },
            set: function(e, t, n) {
                var r, i = Re(e), o = !y.scrollboxSize() && "absolute" === i.position, a = (o || n) && "border-box" === S.css(e, "boxSizing", !1, i), s = n ? Qe(e, u, n, a, i) : 0;
                return a && o && (s -= Math.ceil(e["offset" + u[0].toUpperCase() + u.slice(1)] - parseFloat(i[u]) - Qe(e, u, "border", !1, i) - .5)),
                s && (r = te.exec(t)) && "px" !== (r[3] || "px") && (e.style[u] = t,
                t = S.css(e, u)),
                Ye(0, t, s)
            }
        }
    }),
    S.cssHooks.marginLeft = Fe(y.reliableMarginLeft, function(e, t) {
        if (t)
            return (parseFloat(We(e, "marginLeft")) || e.getBoundingClientRect().left - Me(e, {
                marginLeft: 0
            }, function() {
                return e.getBoundingClientRect().left
            })) + "px"
    }),
    S.each({
        margin: "",
        padding: "",
        border: "Width"
    }, function(i, o) {
        S.cssHooks[i + o] = {
            expand: function(e) {
                for (var t = 0, n = {}, r = "string" == typeof e ? e.split(" ") : [e]; t < 4; t++)
                    n[i + ne[t] + o] = r[t] || r[t - 2] || r[0];
                return n
            }
        },
        "margin" !== i && (S.cssHooks[i + o].set = Ye)
    }),
    S.fn.extend({
        css: function(e, t) {
            return $(this, function(e, t, n) {
                var r, i, o = {}, a = 0;
                if (Array.isArray(t)) {
                    for (r = Re(e),
                    i = t.length; a < i; a++)
                        o[t[a]] = S.css(e, t[a], !1, r);
                    return o
                }
                return void 0 !== n ? S.style(e, t, n) : S.css(e, t)
            }, e, t, 1 < arguments.length)
        }
    }),
    ((S.Tween = Ke).prototype = {
        constructor: Ke,
        init: function(e, t, n, r, i, o) {
            this.elem = e,
            this.prop = n,
            this.easing = i || S.easing._default,
            this.options = t,
            this.start = this.now = this.cur(),
            this.end = r,
            this.unit = o || (S.cssNumber[n] ? "" : "px")
        },
        cur: function() {
            var e = Ke.propHooks[this.prop];
            return e && e.get ? e.get(this) : Ke.propHooks._default.get(this)
        },
        run: function(e) {
            var t, n = Ke.propHooks[this.prop];
            return this.options.duration ? this.pos = t = S.easing[this.easing](e, this.options.duration * e, 0, 1, this.options.duration) : this.pos = t = e,
            this.now = (this.end - this.start) * t + this.start,
            this.options.step && this.options.step.call(this.elem, this.now, this),
            n && n.set ? n.set(this) : Ke.propHooks._default.set(this),
            this
        }
    }).init.prototype = Ke.prototype,
    (Ke.propHooks = {
        _default: {
            get: function(e) {
                var t;
                return 1 !== e.elem.nodeType || null != e.elem[e.prop] && null == e.elem.style[e.prop] ? e.elem[e.prop] : (t = S.css(e.elem, e.prop, "")) && "auto" !== t ? t : 0
            },
            set: function(e) {
                S.fx.step[e.prop] ? S.fx.step[e.prop](e) : 1 !== e.elem.nodeType || !S.cssHooks[e.prop] && null == e.elem.style[ze(e.prop)] ? e.elem[e.prop] = e.now : S.style(e.elem, e.prop, e.now + e.unit)
            }
        }
    }).scrollTop = Ke.propHooks.scrollLeft = {
        set: function(e) {
            e.elem.nodeType && e.elem.parentNode && (e.elem[e.prop] = e.now)
        }
    },
    S.easing = {
        linear: function(e) {
            return e
        },
        swing: function(e) {
            return .5 - Math.cos(e * Math.PI) / 2
        },
        _default: "swing"
    },
    S.fx = Ke.prototype.init,
    S.fx.step = {};
    var Ze, et, tt, nt, rt = /^(?:toggle|show|hide)$/, it = /queueHooks$/;
    function ot() {
        et && (!1 === E.hidden && C.requestAnimationFrame ? C.requestAnimationFrame(ot) : C.setTimeout(ot, S.fx.interval),
        S.fx.tick())
    }
    function at() {
        return C.setTimeout(function() {
            Ze = void 0
        }),
        Ze = Date.now()
    }
    function st(e, t) {
        var n, r = 0, i = {
            height: e
        };
        for (t = t ? 1 : 0; r < 4; r += 2 - t)
            i["margin" + (n = ne[r])] = i["padding" + n] = e;
        return t && (i.opacity = i.width = e),
        i
    }
    function ut(e, t, n) {
        for (var r, i = (lt.tweeners[t] || []).concat(lt.tweeners["*"]), o = 0, a = i.length; o < a; o++)
            if (r = i[o].call(n, t, e))
                return r
    }
    function lt(o, e, t) {
        var n, a, r = 0, i = lt.prefilters.length, s = S.Deferred().always(function() {
            delete u.elem
        }), u = function() {
            if (a)
                return !1;
            for (var e = Ze || at(), t = Math.max(0, l.startTime + l.duration - e), n = 1 - (t / l.duration || 0), r = 0, i = l.tweens.length; r < i; r++)
                l.tweens[r].run(n);
            return s.notifyWith(o, [l, n, t]),
            n < 1 && i ? t : (i || s.notifyWith(o, [l, 1, 0]),
            s.resolveWith(o, [l]),
            !1)
        }, l = s.promise({
            elem: o,
            props: S.extend({}, e),
            opts: S.extend(!0, {
                specialEasing: {},
                easing: S.easing._default
            }, t),
            originalProperties: e,
            originalOptions: t,
            startTime: Ze || at(),
            duration: t.duration,
            tweens: [],
            createTween: function(e, t) {
                var n = S.Tween(o, l.opts, e, t, l.opts.specialEasing[e] || l.opts.easing);
                return l.tweens.push(n),
                n
            },
            stop: function(e) {
                var t = 0
                  , n = e ? l.tweens.length : 0;
                if (a)
                    return this;
                for (a = !0; t < n; t++)
                    l.tweens[t].run(1);
                return e ? (s.notifyWith(o, [l, 1, 0]),
                s.resolveWith(o, [l, e])) : s.rejectWith(o, [l, e]),
                this
            }
        }), c = l.props;
        for (!function(e, t) {
            var n, r, i, o, a;
            for (n in e)
                if (i = t[r = X(n)],
                o = e[n],
                Array.isArray(o) && (i = o[1],
                o = e[n] = o[0]),
                n !== r && (e[r] = o,
                delete e[n]),
                (a = S.cssHooks[r]) && "expand"in a)
                    for (n in o = a.expand(o),
                    delete e[r],
                    o)
                        n in e || (e[n] = o[n],
                        t[n] = i);
                else
                    t[r] = i
        }(c, l.opts.specialEasing); r < i; r++)
            if (n = lt.prefilters[r].call(l, o, c, l.opts))
                return m(n.stop) && (S._queueHooks(l.elem, l.opts.queue).stop = n.stop.bind(n)),
                n;
        return S.map(c, ut, l),
        m(l.opts.start) && l.opts.start.call(o, l),
        l.progress(l.opts.progress).done(l.opts.done, l.opts.complete).fail(l.opts.fail).always(l.opts.always),
        S.fx.timer(S.extend(u, {
            elem: o,
            anim: l,
            queue: l.opts.queue
        })),
        l
    }
    S.Animation = S.extend(lt, {
        tweeners: {
            "*": [function(e, t) {
                var n = this.createTween(e, t);
                return se(n.elem, e, te.exec(t), n),
                n
            }
            ]
        },
        tweener: function(e, t) {
            m(e) ? (t = e,
            e = ["*"]) : e = e.match(P);
            for (var n, r = 0, i = e.length; r < i; r++)
                n = e[r],
                lt.tweeners[n] = lt.tweeners[n] || [],
                lt.tweeners[n].unshift(t)
        },
        prefilters: [function(e, t, n) {
            var r, i, o, a, s, u, l, c, f = "width"in t || "height"in t, p = this, d = {}, h = e.style, g = e.nodeType && ae(e), v = Y.get(e, "fxshow");
            for (r in n.queue || (null == (a = S._queueHooks(e, "fx")).unqueued && (a.unqueued = 0,
            s = a.empty.fire,
            a.empty.fire = function() {
                a.unqueued || s()
            }
            ),
            a.unqueued++,
            p.always(function() {
                p.always(function() {
                    a.unqueued--,
                    S.queue(e, "fx").length || a.empty.fire()
                })
            })),
            t)
                if (i = t[r],
                rt.test(i)) {
                    if (delete t[r],
                    o = o || "toggle" === i,
                    i === (g ? "hide" : "show")) {
                        if ("show" !== i || !v || void 0 === v[r])
                            continue;
                        g = !0
                    }
                    d[r] = v && v[r] || S.style(e, r)
                }
            if ((u = !S.isEmptyObject(t)) || !S.isEmptyObject(d))
                for (r in f && 1 === e.nodeType && (n.overflow = [h.overflow, h.overflowX, h.overflowY],
                null == (l = v && v.display) && (l = Y.get(e, "display")),
                "none" === (c = S.css(e, "display")) && (l ? c = l : (le([e], !0),
                l = e.style.display || l,
                c = S.css(e, "display"),
                le([e]))),
                ("inline" === c || "inline-block" === c && null != l) && "none" === S.css(e, "float") && (u || (p.done(function() {
                    h.display = l
                }),
                null == l && (c = h.display,
                l = "none" === c ? "" : c)),
                h.display = "inline-block")),
                n.overflow && (h.overflow = "hidden",
                p.always(function() {
                    h.overflow = n.overflow[0],
                    h.overflowX = n.overflow[1],
                    h.overflowY = n.overflow[2]
                })),
                u = !1,
                d)
                    u || (v ? "hidden"in v && (g = v.hidden) : v = Y.access(e, "fxshow", {
                        display: l
                    }),
                    o && (v.hidden = !g),
                    g && le([e], !0),
                    p.done(function() {
                        for (r in g || le([e]),
                        Y.remove(e, "fxshow"),
                        d)
                            S.style(e, r, d[r])
                    })),
                    u = ut(g ? v[r] : 0, r, p),
                    r in v || (v[r] = u.start,
                    g && (u.end = u.start,
                    u.start = 0))
        }
        ],
        prefilter: function(e, t) {
            t ? lt.prefilters.unshift(e) : lt.prefilters.push(e)
        }
    }),
    S.speed = function(e, t, n) {
        var r = e && "object" == typeof e ? S.extend({}, e) : {
            complete: n || !n && t || m(e) && e,
            duration: e,
            easing: n && t || t && !m(t) && t
        };
        return S.fx.off ? r.duration = 0 : "number" != typeof r.duration && (r.duration in S.fx.speeds ? r.duration = S.fx.speeds[r.duration] : r.duration = S.fx.speeds._default),
        null != r.queue && !0 !== r.queue || (r.queue = "fx"),
        r.old = r.complete,
        r.complete = function() {
            m(r.old) && r.old.call(this),
            r.queue && S.dequeue(this, r.queue)
        }
        ,
        r
    }
    ,
    S.fn.extend({
        fadeTo: function(e, t, n, r) {
            return this.filter(ae).css("opacity", 0).show().end().animate({
                opacity: t
            }, e, n, r)
        },
        animate: function(t, e, n, r) {
            var i = S.isEmptyObject(t)
              , o = S.speed(e, n, r)
              , a = function() {
                var e = lt(this, S.extend({}, t), o);
                (i || Y.get(this, "finish")) && e.stop(!0)
            };
            return a.finish = a,
            i || !1 === o.queue ? this.each(a) : this.queue(o.queue, a)
        },
        stop: function(i, e, o) {
            var a = function(e) {
                var t = e.stop;
                delete e.stop,
                t(o)
            };
            return "string" != typeof i && (o = e,
            e = i,
            i = void 0),
            e && this.queue(i || "fx", []),
            this.each(function() {
                var e = !0
                  , t = null != i && i + "queueHooks"
                  , n = S.timers
                  , r = Y.get(this);
                if (t)
                    r[t] && r[t].stop && a(r[t]);
                else
                    for (t in r)
                        r[t] && r[t].stop && it.test(t) && a(r[t]);
                for (t = n.length; t--; )
                    n[t].elem !== this || null != i && n[t].queue !== i || (n[t].anim.stop(o),
                    e = !1,
                    n.splice(t, 1));
                !e && o || S.dequeue(this, i)
            })
        },
        finish: function(a) {
            return !1 !== a && (a = a || "fx"),
            this.each(function() {
                var e, t = Y.get(this), n = t[a + "queue"], r = t[a + "queueHooks"], i = S.timers, o = n ? n.length : 0;
                for (t.finish = !0,
                S.queue(this, a, []),
                r && r.stop && r.stop.call(this, !0),
                e = i.length; e--; )
                    i[e].elem === this && i[e].queue === a && (i[e].anim.stop(!0),
                    i.splice(e, 1));
                for (e = 0; e < o; e++)
                    n[e] && n[e].finish && n[e].finish.call(this);
                delete t.finish
            })
        }
    }),
    S.each(["toggle", "show", "hide"], function(e, r) {
        var i = S.fn[r];
        S.fn[r] = function(e, t, n) {
            return null == e || "boolean" == typeof e ? i.apply(this, arguments) : this.animate(st(r, !0), e, t, n)
        }
    }),
    S.each({
        slideDown: st("show"),
        slideUp: st("hide"),
        slideToggle: st("toggle"),
        fadeIn: {
            opacity: "show"
        },
        fadeOut: {
            opacity: "hide"
        },
        fadeToggle: {
            opacity: "toggle"
        }
    }, function(e, r) {
        S.fn[e] = function(e, t, n) {
            return this.animate(r, e, t, n)
        }
    }),
    S.timers = [],
    S.fx.tick = function() {
        var e, t = 0, n = S.timers;
        for (Ze = Date.now(); t < n.length; t++)
            (e = n[t])() || n[t] !== e || n.splice(t--, 1);
        n.length || S.fx.stop(),
        Ze = void 0
    }
    ,
    S.fx.timer = function(e) {
        S.timers.push(e),
        S.fx.start()
    }
    ,
    S.fx.interval = 13,
    S.fx.start = function() {
        et || (et = !0,
        ot())
    }
    ,
    S.fx.stop = function() {
        et = null
    }
    ,
    S.fx.speeds = {
        slow: 600,
        fast: 200,
        _default: 400
    },
    S.fn.delay = function(r, e) {
        return r = S.fx && S.fx.speeds[r] || r,
        e = e || "fx",
        this.queue(e, function(e, t) {
            var n = C.setTimeout(e, r);
            t.stop = function() {
                C.clearTimeout(n)
            }
        })
    }
    ,
    tt = E.createElement("input"),
    nt = E.createElement("select").appendChild(E.createElement("option")),
    tt.type = "checkbox",
    y.checkOn = "" !== tt.value,
    y.optSelected = nt.selected,
    (tt = E.createElement("input")).value = "t",
    tt.type = "radio",
    y.radioValue = "t" === tt.value;
    var ct, ft = S.expr.attrHandle;
    S.fn.extend({
        attr: function(e, t) {
            return $(this, S.attr, e, t, 1 < arguments.length)
        },
        removeAttr: function(e) {
            return this.each(function() {
                S.removeAttr(this, e)
            })
        }
    }),
    S.extend({
        attr: function(e, t, n) {
            var r, i, o = e.nodeType;
            if (3 !== o && 8 !== o && 2 !== o)
                return "undefined" == typeof e.getAttribute ? S.prop(e, t, n) : (1 === o && S.isXMLDoc(e) || (i = S.attrHooks[t.toLowerCase()] || (S.expr.match.bool.test(t) ? ct : void 0)),
                void 0 !== n ? null === n ? void S.removeAttr(e, t) : i && "set"in i && void 0 !== (r = i.set(e, n, t)) ? r : (e.setAttribute(t, n + ""),
                n) : i && "get"in i && null !== (r = i.get(e, t)) ? r : null == (r = S.find.attr(e, t)) ? void 0 : r)
        },
        attrHooks: {
            type: {
                set: function(e, t) {
                    if (!y.radioValue && "radio" === t && A(e, "input")) {
                        var n = e.value;
                        return e.setAttribute("type", t),
                        n && (e.value = n),
                        t
                    }
                }
            }
        },
        removeAttr: function(e, t) {
            var n, r = 0, i = t && t.match(P);
            if (i && 1 === e.nodeType)
                while (n = i[r++])
                    e.removeAttribute(n)
        }
    }),
    ct = {
        set: function(e, t, n) {
            return !1 === t ? S.removeAttr(e, n) : e.setAttribute(n, n),
            n
        }
    },
    S.each(S.expr.match.bool.source.match(/\w+/g), function(e, t) {
        var a = ft[t] || S.find.attr;
        ft[t] = function(e, t, n) {
            var r, i, o = t.toLowerCase();
            return n || (i = ft[o],
            ft[o] = r,
            r = null != a(e, t, n) ? o : null,
            ft[o] = i),
            r
        }
    });
    var pt = /^(?:input|select|textarea|button)$/i
      , dt = /^(?:a|area)$/i;
    function ht(e) {
        return (e.match(P) || []).join(" ")
    }
    function gt(e) {
        return e.getAttribute && e.getAttribute("class") || ""
    }
    function vt(e) {
        return Array.isArray(e) ? e : "string" == typeof e && e.match(P) || []
    }
    S.fn.extend({
        prop: function(e, t) {
            return $(this, S.prop, e, t, 1 < arguments.length)
        },
        removeProp: function(e) {
            return this.each(function() {
                delete this[S.propFix[e] || e]
            })
        }
    }),
    S.extend({
        prop: function(e, t, n) {
            var r, i, o = e.nodeType;
            if (3 !== o && 8 !== o && 2 !== o)
                return 1 === o && S.isXMLDoc(e) || (t = S.propFix[t] || t,
                i = S.propHooks[t]),
                void 0 !== n ? i && "set"in i && void 0 !== (r = i.set(e, n, t)) ? r : e[t] = n : i && "get"in i && null !== (r = i.get(e, t)) ? r : e[t]
        },
        propHooks: {
            tabIndex: {
                get: function(e) {
                    var t = S.find.attr(e, "tabindex");
                    return t ? parseInt(t, 10) : pt.test(e.nodeName) || dt.test(e.nodeName) && e.href ? 0 : -1
                }
            }
        },
        propFix: {
            "for": "htmlFor",
            "class": "className"
        }
    }),
    y.optSelected || (S.propHooks.selected = {
        get: function(e) {
            var t = e.parentNode;
            return t && t.parentNode && t.parentNode.selectedIndex,
            null
        },
        set: function(e) {
            var t = e.parentNode;
            t && (t.selectedIndex,
            t.parentNode && t.parentNode.selectedIndex)
        }
    }),
    S.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function() {
        S.propFix[this.toLowerCase()] = this
    }),
    S.fn.extend({
        addClass: function(t) {
            var e, n, r, i, o, a, s, u = 0;
            if (m(t))
                return this.each(function(e) {
                    S(this).addClass(t.call(this, e, gt(this)))
                });
            if ((e = vt(t)).length)
                while (n = this[u++])
                    if (i = gt(n),
                    r = 1 === n.nodeType && " " + ht(i) + " ") {
                        a = 0;
                        while (o = e[a++])
                            r.indexOf(" " + o + " ") < 0 && (r += o + " ");
                        i !== (s = ht(r)) && n.setAttribute("class", s)
                    }
            return this
        },
        removeClass: function(t) {
            var e, n, r, i, o, a, s, u = 0;
            if (m(t))
                return this.each(function(e) {
                    S(this).removeClass(t.call(this, e, gt(this)))
                });
            if (!arguments.length)
                return this.attr("class", "");
            if ((e = vt(t)).length)
                while (n = this[u++])
                    if (i = gt(n),
                    r = 1 === n.nodeType && " " + ht(i) + " ") {
                        a = 0;
                        while (o = e[a++])
                            while (-1 < r.indexOf(" " + o + " "))
                                r = r.replace(" " + o + " ", " ");
                        i !== (s = ht(r)) && n.setAttribute("class", s)
                    }
            return this
        },
        toggleClass: function(i, t) {
            var o = typeof i
              , a = "string" === o || Array.isArray(i);
            return "boolean" == typeof t && a ? t ? this.addClass(i) : this.removeClass(i) : m(i) ? this.each(function(e) {
                S(this).toggleClass(i.call(this, e, gt(this), t), t)
            }) : this.each(function() {
                var e, t, n, r;
                if (a) {
                    t = 0,
                    n = S(this),
                    r = vt(i);
                    while (e = r[t++])
                        n.hasClass(e) ? n.removeClass(e) : n.addClass(e)
                } else
                    void 0 !== i && "boolean" !== o || ((e = gt(this)) && Y.set(this, "__className__", e),
                    this.setAttribute && this.setAttribute("class", e || !1 === i ? "" : Y.get(this, "__className__") || ""))
            })
        },
        hasClass: function(e) {
            var t, n, r = 0;
            t = " " + e + " ";
            while (n = this[r++])
                if (1 === n.nodeType && -1 < (" " + ht(gt(n)) + " ").indexOf(t))
                    return !0;
            return !1
        }
    });
    var yt = /\r/g;
    S.fn.extend({
        val: function(n) {
            var r, e, i, t = this[0];
            return arguments.length ? (i = m(n),
            this.each(function(e) {
                var t;
                1 === this.nodeType && (null == (t = i ? n.call(this, e, S(this).val()) : n) ? t = "" : "number" == typeof t ? t += "" : Array.isArray(t) && (t = S.map(t, function(e) {
                    return null == e ? "" : e + ""
                })),
                (r = S.valHooks[this.type] || S.valHooks[this.nodeName.toLowerCase()]) && "set"in r && void 0 !== r.set(this, t, "value") || (this.value = t))
            })) : t ? (r = S.valHooks[t.type] || S.valHooks[t.nodeName.toLowerCase()]) && "get"in r && void 0 !== (e = r.get(t, "value")) ? e : "string" == typeof (e = t.value) ? e.replace(yt, "") : null == e ? "" : e : void 0
        }
    }),
    S.extend({
        valHooks: {
            option: {
                get: function(e) {
                    var t = S.find.attr(e, "value");
                    return null != t ? t : ht(S.text(e))
                }
            },
            select: {
                get: function(e) {
                    var t, n, r, i = e.options, o = e.selectedIndex, a = "select-one" === e.type, s = a ? null : [], u = a ? o + 1 : i.length;
                    for (r = o < 0 ? u : a ? o : 0; r < u; r++)
                        if (((n = i[r]).selected || r === o) && !n.disabled && (!n.parentNode.disabled || !A(n.parentNode, "optgroup"))) {
                            if (t = S(n).val(),
                            a)
                                return t;
                            s.push(t)
                        }
                    return s
                },
                set: function(e, t) {
                    var n, r, i = e.options, o = S.makeArray(t), a = i.length;
                    while (a--)
                        ((r = i[a]).selected = -1 < S.inArray(S.valHooks.option.get(r), o)) && (n = !0);
                    return n || (e.selectedIndex = -1),
                    o
                }
            }
        }
    }),
    S.each(["radio", "checkbox"], function() {
        S.valHooks[this] = {
            set: function(e, t) {
                if (Array.isArray(t))
                    return e.checked = -1 < S.inArray(S(e).val(), t)
            }
        },
        y.checkOn || (S.valHooks[this].get = function(e) {
            return null === e.getAttribute("value") ? "on" : e.value
        }
        )
    }),
    y.focusin = "onfocusin"in C;
    var mt = /^(?:focusinfocus|focusoutblur)$/
      , xt = function(e) {
        e.stopPropagation()
    };
    S.extend(S.event, {
        trigger: function(e, t, n, r) {
            var i, o, a, s, u, l, c, f, p = [n || E], d = v.call(e, "type") ? e.type : e, h = v.call(e, "namespace") ? e.namespace.split(".") : [];
            if (o = f = a = n = n || E,
            3 !== n.nodeType && 8 !== n.nodeType && !mt.test(d + S.event.triggered) && (-1 < d.indexOf(".") && (d = (h = d.split(".")).shift(),
            h.sort()),
            u = d.indexOf(":") < 0 && "on" + d,
            (e = e[S.expando] ? e : new S.Event(d,"object" == typeof e && e)).isTrigger = r ? 2 : 3,
            e.namespace = h.join("."),
            e.rnamespace = e.namespace ? new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)") : null,
            e.result = void 0,
            e.target || (e.target = n),
            t = null == t ? [e] : S.makeArray(t, [e]),
            c = S.event.special[d] || {},
            r || !c.trigger || !1 !== c.trigger.apply(n, t))) {
                if (!r && !c.noBubble && !x(n)) {
                    for (s = c.delegateType || d,
                    mt.test(s + d) || (o = o.parentNode); o; o = o.parentNode)
                        p.push(o),
                        a = o;
                    a === (n.ownerDocument || E) && p.push(a.defaultView || a.parentWindow || C)
                }
                i = 0;
                while ((o = p[i++]) && !e.isPropagationStopped())
                    f = o,
                    e.type = 1 < i ? s : c.bindType || d,
                    (l = (Y.get(o, "events") || Object.create(null))[e.type] && Y.get(o, "handle")) && l.apply(o, t),
                    (l = u && o[u]) && l.apply && V(o) && (e.result = l.apply(o, t),
                    !1 === e.result && e.preventDefault());
                return e.type = d,
                r || e.isDefaultPrevented() || c._default && !1 !== c._default.apply(p.pop(), t) || !V(n) || u && m(n[d]) && !x(n) && ((a = n[u]) && (n[u] = null),
                S.event.triggered = d,
                e.isPropagationStopped() && f.addEventListener(d, xt),
                n[d](),
                e.isPropagationStopped() && f.removeEventListener(d, xt),
                S.event.triggered = void 0,
                a && (n[u] = a)),
                e.result
            }
        },
        simulate: function(e, t, n) {
            var r = S.extend(new S.Event, n, {
                type: e,
                isSimulated: !0
            });
            S.event.trigger(r, null, t)
        }
    }),
    S.fn.extend({
        trigger: function(e, t) {
            return this.each(function() {
                S.event.trigger(e, t, this)
            })
        },
        triggerHandler: function(e, t) {
            var n = this[0];
            if (n)
                return S.event.trigger(e, t, n, !0)
        }
    }),
    y.focusin || S.each({
        focus: "focusin",
        blur: "focusout"
    }, function(n, r) {
        var i = function(e) {
            S.event.simulate(r, e.target, S.event.fix(e))
        };
        S.event.special[r] = {
            setup: function() {
                var e = this.ownerDocument || this.document || this
                  , t = Y.access(e, r);
                t || e.addEventListener(n, i, !0),
                Y.access(e, r, (t || 0) + 1)
            },
            teardown: function() {
                var e = this.ownerDocument || this.document || this
                  , t = Y.access(e, r) - 1;
                t ? Y.access(e, r, t) : (e.removeEventListener(n, i, !0),
                Y.remove(e, r))
            }
        }
    });
    var bt = C.location
      , wt = {
        guid: Date.now()
    }
      , Tt = /\?/;
    S.parseXML = function(e) {
        var t, n;
        if (!e || "string" != typeof e)
            return null;
        try {
            t = (new C.DOMParser).parseFromString(e, "text/xml")
        } catch (e) {}
        return n = t && t.getElementsByTagName("parsererror")[0],
        t && !n || S.error("Invalid XML: " + (n ? S.map(n.childNodes, function(e) {
            return e.textContent
        }).join("\n") : e)),
        t
    }
    ;
    var Ct = /\[\]$/
      , Et = /\r?\n/g
      , St = /^(?:submit|button|image|reset|file)$/i
      , kt = /^(?:input|select|textarea|keygen)/i;
    function At(n, e, r, i) {
        var t;
        if (Array.isArray(e))
            S.each(e, function(e, t) {
                r || Ct.test(n) ? i(n, t) : At(n + "[" + ("object" == typeof t && null != t ? e : "") + "]", t, r, i)
            });
        else if (r || "object" !== w(e))
            i(n, e);
        else
            for (t in e)
                At(n + "[" + t + "]", e[t], r, i)
    }
    S.param = function(e, t) {
        var n, r = [], i = function(e, t) {
            var n = m(t) ? t() : t;
            r[r.length] = encodeURIComponent(e) + "=" + encodeURIComponent(null == n ? "" : n)
        };
        if (null == e)
            return "";
        if (Array.isArray(e) || e.jquery && !S.isPlainObject(e))
            S.each(e, function() {
                i(this.name, this.value)
            });
        else
            for (n in e)
                At(n, e[n], t, i);
        return r.join("&")
    }
    ,
    S.fn.extend({
        serialize: function() {
            return S.param(this.serializeArray())
        },
        serializeArray: function() {
            return this.map(function() {
                var e = S.prop(this, "elements");
                return e ? S.makeArray(e) : this
            }).filter(function() {
                var e = this.type;
                return this.name && !S(this).is(":disabled") && kt.test(this.nodeName) && !St.test(e) && (this.checked || !pe.test(e))
            }).map(function(e, t) {
                var n = S(this).val();
                return null == n ? null : Array.isArray(n) ? S.map(n, function(e) {
                    return {
                        name: t.name,
                        value: e.replace(Et, "\r\n")
                    }
                }) : {
                    name: t.name,
                    value: n.replace(Et, "\r\n")
                }
            }).get()
        }
    });
    var Nt = /%20/g
      , jt = /#.*$/
      , Dt = /([?&])_=[^&]*/
      , qt = /^(.*?):[ \t]*([^\r\n]*)$/gm
      , Lt = /^(?:GET|HEAD)$/
      , Ht = /^\/\//
      , Ot = {}
      , Pt = {}
      , Rt = "*/".concat("*")
      , Mt = E.createElement("a");
    function It(o) {
        return function(e, t) {
            "string" != typeof e && (t = e,
            e = "*");
            var n, r = 0, i = e.toLowerCase().match(P) || [];
            if (m(t))
                while (n = i[r++])
                    "+" === n[0] ? (n = n.slice(1) || "*",
                    (o[n] = o[n] || []).unshift(t)) : (o[n] = o[n] || []).push(t)
        }
    }
    function Wt(t, i, o, a) {
        var s = {}
          , u = t === Pt;
        function l(e) {
            var r;
            return s[e] = !0,
            S.each(t[e] || [], function(e, t) {
                var n = t(i, o, a);
                return "string" != typeof n || u || s[n] ? u ? !(r = n) : void 0 : (i.dataTypes.unshift(n),
                l(n),
                !1)
            }),
            r
        }
        return l(i.dataTypes[0]) || !s["*"] && l("*")
    }
    function Ft(e, t) {
        var n, r, i = S.ajaxSettings.flatOptions || {};
        for (n in t)
            void 0 !== t[n] && ((i[n] ? e : r || (r = {}))[n] = t[n]);
        return r && S.extend(!0, e, r),
        e
    }
    Mt.href = bt.href,
    S.extend({
        active: 0,
        lastModified: {},
        etag: {},
        ajaxSettings: {
            url: bt.href,
            type: "GET",
            isLocal: /^(?:about|app|app-storage|.+-extension|file|res|widget):$/.test(bt.protocol),
            global: !0,
            processData: !0,
            async: !0,
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            accepts: {
                "*": Rt,
                text: "text/plain",
                html: "text/html",
                xml: "application/xml, text/xml",
                json: "application/json, text/javascript"
            },
            contents: {
                xml: /\bxml\b/,
                html: /\bhtml/,
                json: /\bjson\b/
            },
            responseFields: {
                xml: "responseXML",
                text: "responseText",
                json: "responseJSON"
            },
            converters: {
                "* text": String,
                "text html": !0,
                "text json": JSON.parse,
                "text xml": S.parseXML
            },
            flatOptions: {
                url: !0,
                context: !0
            }
        },
        ajaxSetup: function(e, t) {
            return t ? Ft(Ft(e, S.ajaxSettings), t) : Ft(S.ajaxSettings, e)
        },
        ajaxPrefilter: It(Ot),
        ajaxTransport: It(Pt),
        ajax: function(e, t) {
            "object" == typeof e && (t = e,
            e = void 0),
            t = t || {};
            var c, f, p, n, d, r, h, g, i, o, v = S.ajaxSetup({}, t), y = v.context || v, m = v.context && (y.nodeType || y.jquery) ? S(y) : S.event, x = S.Deferred(), b = S.Callbacks("once memory"), w = v.statusCode || {}, a = {}, s = {}, u = "canceled", T = {
                readyState: 0,
                getResponseHeader: function(e) {
                    var t;
                    if (h) {
                        if (!n) {
                            n = {};
                            while (t = qt.exec(p))
                                n[t[1].toLowerCase() + " "] = (n[t[1].toLowerCase() + " "] || []).concat(t[2])
                        }
                        t = n[e.toLowerCase() + " "]
                    }
                    return null == t ? null : t.join(", ")
                },
                getAllResponseHeaders: function() {
                    return h ? p : null
                },
                setRequestHeader: function(e, t) {
                    return null == h && (e = s[e.toLowerCase()] = s[e.toLowerCase()] || e,
                    a[e] = t),
                    this
                },
                overrideMimeType: function(e) {
                    return null == h && (v.mimeType = e),
                    this
                },
                statusCode: function(e) {
                    var t;
                    if (e)
                        if (h)
                            T.always(e[T.status]);
                        else
                            for (t in e)
                                w[t] = [w[t], e[t]];
                    return this
                },
                abort: function(e) {
                    var t = e || u;
                    return c && c.abort(t),
                    l(0, t),
                    this
                }
            };
            if (x.promise(T),
            v.url = ((e || v.url || bt.href) + "").replace(Ht, bt.protocol + "//"),
            v.type = t.method || t.type || v.method || v.type,
            v.dataTypes = (v.dataType || "*").toLowerCase().match(P) || [""],
            null == v.crossDomain) {
                r = E.createElement("a");
                try {
                    r.href = v.url,
                    r.href = r.href,
                    v.crossDomain = Mt.protocol + "//" + Mt.host != r.protocol + "//" + r.host
                } catch (e) {
                    v.crossDomain = !0
                }
            }
            if (v.data && v.processData && "string" != typeof v.data && (v.data = S.param(v.data, v.traditional)),
            Wt(Ot, v, t, T),
            h)
                return T;
            for (i in (g = S.event && v.global) && 0 == S.active++ && S.event.trigger("ajaxStart"),
            v.type = v.type.toUpperCase(),
            v.hasContent = !Lt.test(v.type),
            f = v.url.replace(jt, ""),
            v.hasContent ? v.data && v.processData && 0 === (v.contentType || "").indexOf("application/x-www-form-urlencoded") && (v.data = v.data.replace(Nt, "+")) : (o = v.url.slice(f.length),
            v.data && (v.processData || "string" == typeof v.data) && (f += (Tt.test(f) ? "&" : "?") + v.data,
            delete v.data),
            !1 === v.cache && (f = f.replace(Dt, "$1"),
            o = (Tt.test(f) ? "&" : "?") + "_=" + wt.guid++ + o),
            v.url = f + o),
            v.ifModified && (S.lastModified[f] && T.setRequestHeader("If-Modified-Since", S.lastModified[f]),
            S.etag[f] && T.setRequestHeader("If-None-Match", S.etag[f])),
            (v.data && v.hasContent && !1 !== v.contentType || t.contentType) && T.setRequestHeader("Content-Type", v.contentType),
            T.setRequestHeader("Accept", v.dataTypes[0] && v.accepts[v.dataTypes[0]] ? v.accepts[v.dataTypes[0]] + ("*" !== v.dataTypes[0] ? ", " + Rt + "; q=0.01" : "") : v.accepts["*"]),
            v.headers)
                T.setRequestHeader(i, v.headers[i]);
            if (v.beforeSend && (!1 === v.beforeSend.call(y, T, v) || h))
                return T.abort();
            if (u = "abort",
            b.add(v.complete),
            T.done(v.success),
            T.fail(v.error),
            c = Wt(Pt, v, t, T)) {
                if (T.readyState = 1,
                g && m.trigger("ajaxSend", [T, v]),
                h)
                    return T;
                v.async && 0 < v.timeout && (d = C.setTimeout(function() {
                    T.abort("timeout")
                }, v.timeout));
                try {
                    h = !1,
                    c.send(a, l)
                } catch (e) {
                    if (h)
                        throw e;
                    l(-1, e)
                }
            } else
                l(-1, "No Transport");
            function l(e, t, n, r) {
                var i, o, a, s, u, l = t;
                h || (h = !0,
                d && C.clearTimeout(d),
                c = void 0,
                p = r || "",
                T.readyState = 0 < e ? 4 : 0,
                i = 200 <= e && e < 300 || 304 === e,
                n && (s = function(e, t, n) {
                    var r, i, o, a, s = e.contents, u = e.dataTypes;
                    while ("*" === u[0])
                        u.shift(),
                        void 0 === r && (r = e.mimeType || t.getResponseHeader("Content-Type"));
                    if (r)
                        for (i in s)
                            if (s[i] && s[i].test(r)) {
                                u.unshift(i);
                                break
                            }
                    if (u[0]in n)
                        o = u[0];
                    else {
                        for (i in n) {
                            if (!u[0] || e.converters[i + " " + u[0]]) {
                                o = i;
                                break
                            }
                            a || (a = i)
                        }
                        o = o || a
                    }
                    if (o)
                        return o !== u[0] && u.unshift(o),
                        n[o]
                }(v, T, n)),
                !i && -1 < S.inArray("script", v.dataTypes) && S.inArray("json", v.dataTypes) < 0 && (v.converters["text script"] = function() {}
                ),
                s = function(e, t, n, r) {
                    var i, o, a, s, u, l = {}, c = e.dataTypes.slice();
                    if (c[1])
                        for (a in e.converters)
                            l[a.toLowerCase()] = e.converters[a];
                    o = c.shift();
                    while (o)
                        if (e.responseFields[o] && (n[e.responseFields[o]] = t),
                        !u && r && e.dataFilter && (t = e.dataFilter(t, e.dataType)),
                        u = o,
                        o = c.shift())
                            if ("*" === o)
                                o = u;
                            else if ("*" !== u && u !== o) {
                                if (!(a = l[u + " " + o] || l["* " + o]))
                                    for (i in l)
                                        if ((s = i.split(" "))[1] === o && (a = l[u + " " + s[0]] || l["* " + s[0]])) {
                                            !0 === a ? a = l[i] : !0 !== l[i] && (o = s[0],
                                            c.unshift(s[1]));
                                            break
                                        }
                                if (!0 !== a)
                                    if (a && e["throws"])
                                        t = a(t);
                                    else
                                        try {
                                            t = a(t)
                                        } catch (e) {
                                            return {
                                                state: "parsererror",
                                                error: a ? e : "No conversion from " + u + " to " + o
                                            }
                                        }
                            }
                    return {
                        state: "success",
                        data: t
                    }
                }(v, s, T, i),
                i ? (v.ifModified && ((u = T.getResponseHeader("Last-Modified")) && (S.lastModified[f] = u),
                (u = T.getResponseHeader("etag")) && (S.etag[f] = u)),
                204 === e || "HEAD" === v.type ? l = "nocontent" : 304 === e ? l = "notmodified" : (l = s.state,
                o = s.data,
                i = !(a = s.error))) : (a = l,
                !e && l || (l = "error",
                e < 0 && (e = 0))),
                T.status = e,
                T.statusText = (t || l) + "",
                i ? x.resolveWith(y, [o, l, T]) : x.rejectWith(y, [T, l, a]),
                T.statusCode(w),
                w = void 0,
                g && m.trigger(i ? "ajaxSuccess" : "ajaxError", [T, v, i ? o : a]),
                b.fireWith(y, [T, l]),
                g && (m.trigger("ajaxComplete", [T, v]),
                --S.active || S.event.trigger("ajaxStop")))
            }
            return T
        },
        getJSON: function(e, t, n) {
            return S.get(e, t, n, "json")
        },
        getScript: function(e, t) {
            return S.get(e, void 0, t, "script")
        }
    }),
    S.each(["get", "post"], function(e, i) {
        S[i] = function(e, t, n, r) {
            return m(t) && (r = r || n,
            n = t,
            t = void 0),
            S.ajax(S.extend({
                url: e,
                type: i,
                dataType: r,
                data: t,
                success: n
            }, S.isPlainObject(e) && e))
        }
    }),
    S.ajaxPrefilter(function(e) {
        var t;
        for (t in e.headers)
            "content-type" === t.toLowerCase() && (e.contentType = e.headers[t] || "")
    }),
    S._evalUrl = function(e, t, n) {
        return S.ajax({
            url: e,
            type: "GET",
            dataType: "script",
            cache: !0,
            async: !1,
            global: !1,
            converters: {
                "text script": function() {}
            },
            dataFilter: function(e) {
                S.globalEval(e, t, n)
            }
        })
    }
    ,
    S.fn.extend({
        wrapAll: function(e) {
            var t;
            return this[0] && (m(e) && (e = e.call(this[0])),
            t = S(e, this[0].ownerDocument).eq(0).clone(!0),
            this[0].parentNode && t.insertBefore(this[0]),
            t.map(function() {
                var e = this;
                while (e.firstElementChild)
                    e = e.firstElementChild;
                return e
            }).append(this)),
            this
        },
        wrapInner: function(n) {
            return m(n) ? this.each(function(e) {
                S(this).wrapInner(n.call(this, e))
            }) : this.each(function() {
                var e = S(this)
                  , t = e.contents();
                t.length ? t.wrapAll(n) : e.append(n)
            })
        },
        wrap: function(t) {
            var n = m(t);
            return this.each(function(e) {
                S(this).wrapAll(n ? t.call(this, e) : t)
            })
        },
        unwrap: function(e) {
            return this.parent(e).not("body").each(function() {
                S(this).replaceWith(this.childNodes)
            }),
            this
        }
    }),
    S.expr.pseudos.hidden = function(e) {
        return !S.expr.pseudos.visible(e)
    }
    ,
    S.expr.pseudos.visible = function(e) {
        return !!(e.offsetWidth || e.offsetHeight || e.getClientRects().length)
    }
    ,
    S.ajaxSettings.xhr = function() {
        try {
            return new C.XMLHttpRequest
        } catch (e) {}
    }
    ;
    var Bt = {
        0: 200,
        1223: 204
    }
      , $t = S.ajaxSettings.xhr();
    y.cors = !!$t && "withCredentials"in $t,
    y.ajax = $t = !!$t,
    S.ajaxTransport(function(i) {
        var o, a;
        if (y.cors || $t && !i.crossDomain)
            return {
                send: function(e, t) {
                    var n, r = i.xhr();
                    if (r.open(i.type, i.url, i.async, i.username, i.password),
                    i.xhrFields)
                        for (n in i.xhrFields)
                            r[n] = i.xhrFields[n];
                    for (n in i.mimeType && r.overrideMimeType && r.overrideMimeType(i.mimeType),
                    i.crossDomain || e["X-Requested-With"] || (e["X-Requested-With"] = "XMLHttpRequest"),
                    e)
                        r.setRequestHeader(n, e[n]);
                    o = function(e) {
                        return function() {
                            o && (o = a = r.onload = r.onerror = r.onabort = r.ontimeout = r.onreadystatechange = null,
                            "abort" === e ? r.abort() : "error" === e ? "number" != typeof r.status ? t(0, "error") : t(r.status, r.statusText) : t(Bt[r.status] || r.status, r.statusText, "text" !== (r.responseType || "text") || "string" != typeof r.responseText ? {
                                binary: r.response
                            } : {
                                text: r.responseText
                            }, r.getAllResponseHeaders()))
                        }
                    }
                    ,
                    r.onload = o(),
                    a = r.onerror = r.ontimeout = o("error"),
                    void 0 !== r.onabort ? r.onabort = a : r.onreadystatechange = function() {
                        4 === r.readyState && C.setTimeout(function() {
                            o && a()
                        })
                    }
                    ,
                    o = o("abort");
                    try {
                        r.send(i.hasContent && i.data || null)
                    } catch (e) {
                        if (o)
                            throw e
                    }
                },
                abort: function() {
                    o && o()
                }
            }
    }),
    S.ajaxPrefilter(function(e) {
        e.crossDomain && (e.contents.script = !1)
    }),
    S.ajaxSetup({
        accepts: {
            script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
        },
        contents: {
            script: /\b(?:java|ecma)script\b/
        },
        converters: {
            "text script": function(e) {
                return S.globalEval(e),
                e
            }
        }
    }),
    S.ajaxPrefilter("script", function(e) {
        void 0 === e.cache && (e.cache = !1),
        e.crossDomain && (e.type = "GET")
    }),
    S.ajaxTransport("script", function(n) {
        var r, i;
        if (n.crossDomain || n.scriptAttrs)
            return {
                send: function(e, t) {
                    r = S("<script>").attr(n.scriptAttrs || {}).prop({
                        charset: n.scriptCharset,
                        src: n.url
                    }).on("load error", i = function(e) {
                        r.remove(),
                        i = null,
                        e && t("error" === e.type ? 404 : 200, e.type)
                    }
                    ),
                    E.head.appendChild(r[0])
                },
                abort: function() {
                    i && i()
                }
            }
    });
    var _t, zt = [], Ut = /(=)\?(?=&|$)|\?\?/;
    S.ajaxSetup({
        jsonp: "callback",
        jsonpCallback: function() {
            var e = zt.pop() || S.expando + "_" + wt.guid++;
            return this[e] = !0,
            e
        }
    }),
    S.ajaxPrefilter("json jsonp", function(e, t, n) {
        var r, i, o, a = !1 !== e.jsonp && (Ut.test(e.url) ? "url" : "string" == typeof e.data && 0 === (e.contentType || "").indexOf("application/x-www-form-urlencoded") && Ut.test(e.data) && "data");
        if (a || "jsonp" === e.dataTypes[0])
            return r = e.jsonpCallback = m(e.jsonpCallback) ? e.jsonpCallback() : e.jsonpCallback,
            a ? e[a] = e[a].replace(Ut, "$1" + r) : !1 !== e.jsonp && (e.url += (Tt.test(e.url) ? "&" : "?") + e.jsonp + "=" + r),
            e.converters["script json"] = function() {
                return o || S.error(r + " was not called"),
                o[0]
            }
            ,
            e.dataTypes[0] = "json",
            i = C[r],
            C[r] = function() {
                o = arguments
            }
            ,
            n.always(function() {
                void 0 === i ? S(C).removeProp(r) : C[r] = i,
                e[r] && (e.jsonpCallback = t.jsonpCallback,
                zt.push(r)),
                o && m(i) && i(o[0]),
                o = i = void 0
            }),
            "script"
    }),
    y.createHTMLDocument = ((_t = E.implementation.createHTMLDocument("").body).innerHTML = "<form></form><form></form>",
    2 === _t.childNodes.length),
    S.parseHTML = function(e, t, n) {
        return "string" != typeof e ? [] : ("boolean" == typeof t && (n = t,
        t = !1),
        t || (y.createHTMLDocument ? ((r = (t = E.implementation.createHTMLDocument("")).createElement("base")).href = E.location.href,
        t.head.appendChild(r)) : t = E),
        o = !n && [],
        (i = N.exec(e)) ? [t.createElement(i[1])] : (i = xe([e], t, o),
        o && o.length && S(o).remove(),
        S.merge([], i.childNodes)));
        var r, i, o
    }
    ,
    S.fn.load = function(e, t, n) {
        var r, i, o, a = this, s = e.indexOf(" ");
        return -1 < s && (r = ht(e.slice(s)),
        e = e.slice(0, s)),
        m(t) ? (n = t,
        t = void 0) : t && "object" == typeof t && (i = "POST"),
        0 < a.length && S.ajax({
            url: e,
            type: i || "GET",
            dataType: "html",
            data: t
        }).done(function(e) {
            o = arguments,
            a.html(r ? S("<div>").append(S.parseHTML(e)).find(r) : e)
        }).always(n && function(e, t) {
            a.each(function() {
                n.apply(this, o || [e.responseText, t, e])
            })
        }
        ),
        this
    }
    ,
    S.expr.pseudos.animated = function(t) {
        return S.grep(S.timers, function(e) {
            return t === e.elem
        }).length
    }
    ,
    S.offset = {
        setOffset: function(e, t, n) {
            var r, i, o, a, s, u, l = S.css(e, "position"), c = S(e), f = {};
            "static" === l && (e.style.position = "relative"),
            s = c.offset(),
            o = S.css(e, "top"),
            u = S.css(e, "left"),
            ("absolute" === l || "fixed" === l) && -1 < (o + u).indexOf("auto") ? (a = (r = c.position()).top,
            i = r.left) : (a = parseFloat(o) || 0,
            i = parseFloat(u) || 0),
            m(t) && (t = t.call(e, n, S.extend({}, s))),
            null != t.top && (f.top = t.top - s.top + a),
            null != t.left && (f.left = t.left - s.left + i),
            "using"in t ? t.using.call(e, f) : c.css(f)
        }
    },
    S.fn.extend({
        offset: function(t) {
            if (arguments.length)
                return void 0 === t ? this : this.each(function(e) {
                    S.offset.setOffset(this, t, e)
                });
            var e, n, r = this[0];
            return r ? r.getClientRects().length ? (e = r.getBoundingClientRect(),
            n = r.ownerDocument.defaultView,
            {
                top: e.top + n.pageYOffset,
                left: e.left + n.pageXOffset
            }) : {
                top: 0,
                left: 0
            } : void 0
        },
        position: function() {
            if (this[0]) {
                var e, t, n, r = this[0], i = {
                    top: 0,
                    left: 0
                };
                if ("fixed" === S.css(r, "position"))
                    t = r.getBoundingClientRect();
                else {
                    t = this.offset(),
                    n = r.ownerDocument,
                    e = r.offsetParent || n.documentElement;
                    while (e && (e === n.body || e === n.documentElement) && "static" === S.css(e, "position"))
                        e = e.parentNode;
                    e && e !== r && 1 === e.nodeType && ((i = S(e).offset()).top += S.css(e, "borderTopWidth", !0),
                    i.left += S.css(e, "borderLeftWidth", !0))
                }
                return {
                    top: t.top - i.top - S.css(r, "marginTop", !0),
                    left: t.left - i.left - S.css(r, "marginLeft", !0)
                }
            }
        },
        offsetParent: function() {
            return this.map(function() {
                var e = this.offsetParent;
                while (e && "static" === S.css(e, "position"))
                    e = e.offsetParent;
                return e || re
            })
        }
    }),
    S.each({
        scrollLeft: "pageXOffset",
        scrollTop: "pageYOffset"
    }, function(t, i) {
        var o = "pageYOffset" === i;
        S.fn[t] = function(e) {
            return $(this, function(e, t, n) {
                var r;
                if (x(e) ? r = e : 9 === e.nodeType && (r = e.defaultView),
                void 0 === n)
                    return r ? r[i] : e[t];
                r ? r.scrollTo(o ? r.pageXOffset : n, o ? n : r.pageYOffset) : e[t] = n
            }, t, e, arguments.length)
        }
    }),
    S.each(["top", "left"], function(e, n) {
        S.cssHooks[n] = Fe(y.pixelPosition, function(e, t) {
            if (t)
                return t = We(e, n),
                Pe.test(t) ? S(e).position()[n] + "px" : t
        })
    }),
    S.each({
        Height: "height",
        Width: "width"
    }, function(a, s) {
        S.each({
            padding: "inner" + a,
            content: s,
            "": "outer" + a
        }, function(r, o) {
            S.fn[o] = function(e, t) {
                var n = arguments.length && (r || "boolean" != typeof e)
                  , i = r || (!0 === e || !0 === t ? "margin" : "border");
                return $(this, function(e, t, n) {
                    var r;
                    return x(e) ? 0 === o.indexOf("outer") ? e["inner" + a] : e.document.documentElement["client" + a] : 9 === e.nodeType ? (r = e.documentElement,
                    Math.max(e.body["scroll" + a], r["scroll" + a], e.body["offset" + a], r["offset" + a], r["client" + a])) : void 0 === n ? S.css(e, t, i) : S.style(e, t, n, i)
                }, s, n ? e : void 0, n)
            }
        })
    }),
    S.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function(e, t) {
        S.fn[t] = function(e) {
            return this.on(t, e)
        }
    }),
    S.fn.extend({
        bind: function(e, t, n) {
            return this.on(e, null, t, n)
        },
        unbind: function(e, t) {
            return this.off(e, null, t)
        },
        delegate: function(e, t, n, r) {
            return this.on(t, e, n, r)
        },
        undelegate: function(e, t, n) {
            return 1 === arguments.length ? this.off(e, "**") : this.off(t, e || "**", n)
        },
        hover: function(e, t) {
            return this.mouseenter(e).mouseleave(t || e)
        }
    }),
    S.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "), function(e, n) {
        S.fn[n] = function(e, t) {
            return 0 < arguments.length ? this.on(n, null, e, t) : this.trigger(n)
        }
    });
    var Xt = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
    S.proxy = function(e, t) {
        var n, r, i;
        if ("string" == typeof t && (n = e[t],
        t = e,
        e = n),
        m(e))
            return r = s.call(arguments, 2),
            (i = function() {
                return e.apply(t || this, r.concat(s.call(arguments)))
            }
            ).guid = e.guid = e.guid || S.guid++,
            i
    }
    ,
    S.holdReady = function(e) {
        e ? S.readyWait++ : S.ready(!0)
    }
    ,
    S.isArray = Array.isArray,
    S.parseJSON = JSON.parse,
    S.nodeName = A,
    S.isFunction = m,
    S.isWindow = x,
    S.camelCase = X,
    S.type = w,
    S.now = Date.now,
    S.isNumeric = function(e) {
        var t = S.type(e);
        return ("number" === t || "string" === t) && !isNaN(e - parseFloat(e))
    }
    ,
    S.trim = function(e) {
        return null == e ? "" : (e + "").replace(Xt, "")
    }
    ,
    "function" == typeof define && define.amd && define("jquery", [], function() {
        return S
    });
    var Vt = C.jQuery
      , Gt = C.$;
    return S.noConflict = function(e) {
        return C.$ === S && (C.$ = Gt),
        e && C.jQuery === S && (C.jQuery = Vt),
        S
    }
    ,
    "undefined" == typeof e && (C.jQuery = C.$ = S),
    S
});

/*! lazysizes - v4.1.8 */
!function(a, b) {
    var c = b(a, a.document);
    a.lazySizes = c,
    "object" == typeof module && module.exports && (module.exports = c)
}(window, function(a, b) {
    "use strict";
    if (b.getElementsByClassName) {
        var c, d, e = b.documentElement, f = a.Date, g = a.HTMLPictureElement, h = "addEventListener", i = "getAttribute", j = a[h], k = a.setTimeout, l = a.requestAnimationFrame || k, m = a.requestIdleCallback, n = /^picture$/i, o = ["load", "error", "lazyincluded", "_lazyloaded"], p = {}, q = Array.prototype.forEach, r = function(a, b) {
            return p[b] || (p[b] = new RegExp("(\\s|^)" + b + "(\\s|$)")),
            p[b].test(a[i]("class") || "") && p[b]
        }, s = function(a, b) {
            r(a, b) || a.setAttribute("class", (a[i]("class") || "").trim() + " " + b)
        }, t = function(a, b) {
            var c;
            (c = r(a, b)) && a.setAttribute("class", (a[i]("class") || "").replace(c, " "))
        }, u = function(a, b, c) {
            var d = c ? h : "removeEventListener";
            c && u(a, b),
            o.forEach(function(c) {
                a[d](c, b)
            })
        }, v = function(a, d, e, f, g) {
            var h = b.createEvent("Event");
            return e || (e = {}),
            e.instance = c,
            h.initEvent(d, !f, !g),
            h.detail = e,
            a.dispatchEvent(h),
            h
        }, w = function(b, c) {
            var e;
            !g && (e = a.picturefill || d.pf) ? (c && c.src && !b[i]("srcset") && b.setAttribute("srcset", c.src),
            e({
                reevaluate: !0,
                elements: [b]
            })) : c && c.src && (b.src = c.src)
        }, x = function(a, b) {
            return (getComputedStyle(a, null) || {})[b]
        }, y = function(a, b, c) {
            for (c = c || a.offsetWidth; c < d.minSize && b && !a._lazysizesWidth; )
                c = b.offsetWidth,
                b = b.parentNode;
            return c
        }, z = function() {
            var a, c, d = [], e = [], f = d, g = function() {
                var b = f;
                for (f = d.length ? e : d,
                a = !0,
                c = !1; b.length; )
                    b.shift()();
                a = !1
            }, h = function(d, e) {
                a && !e ? d.apply(this, arguments) : (f.push(d),
                c || (c = !0,
                (b.hidden ? k : l)(g)))
            };
            return h._lsFlush = g,
            h
        }(), A = function(a, b) {
            return b ? function() {
                z(a)
            }
            : function() {
                var b = this
                  , c = arguments;
                z(function() {
                    a.apply(b, c)
                })
            }
        }, B = function(a) {
            var b, c = 0, e = d.throttleDelay, g = d.ricTimeout, h = function() {
                b = !1,
                c = f.now(),
                a()
            }, i = m && g > 49 ? function() {
                m(h, {
                    timeout: g
                }),
                g !== d.ricTimeout && (g = d.ricTimeout)
            }
            : A(function() {
                k(h)
            }, !0);
            return function(a) {
                var d;
                (a = !0 === a) && (g = 33),
                b || (b = !0,
                d = e - (f.now() - c),
                d < 0 && (d = 0),
                a || d < 9 ? i() : k(i, d))
            }
        }, C = function(a) {
            var b, c, d = 99, e = function() {
                b = null,
                a()
            }, g = function() {
                var a = f.now() - c;
                a < d ? k(g, d - a) : (m || e)(e)
            };
            return function() {
                c = f.now(),
                b || (b = k(g, d))
            }
        };
        !function() {
            var b, c = {
                lazyClass: "lazyload",
                loadedClass: "lazyloaded",
                loadingClass: "lazyloading",
                preloadClass: "lazypreload",
                errorClass: "lazyerror",
                autosizesClass: "lazyautosizes",
                srcAttr: "data-src",
                srcsetAttr: "data-srcset",
                sizesAttr: "data-sizes",
                minSize: 40,
                customMedia: {},
                init: !0,
                expFactor: 1.5,
                hFac: .8,
                loadMode: 2,
                loadHidden: !0,
                ricTimeout: 0,
                throttleDelay: 125
            };
            d = a.lazySizesConfig || a.lazysizesConfig || {};
            for (b in c)
                b in d || (d[b] = c[b]);
            a.lazySizesConfig = d,
            k(function() {
                d.init && F()
            })
        }();
        var D = function() {
            var g, l, m, o, p, y, D, F, G, H, I, J, K = /^img$/i, L = /^iframe$/i, M = "onscroll"in a && !/(gle|ing)bot/.test(navigator.userAgent), N = 0, O = 0, P = 0, Q = -1, R = function(a) {
                P--,
                (!a || P < 0 || !a.target) && (P = 0)
            }, S = function(a) {
                return null == J && (J = "hidden" == x(b.body, "visibility")),
                J || "hidden" != x(a.parentNode, "visibility") && "hidden" != x(a, "visibility")
            }, T = function(a, c) {
                var d, f = a, g = S(a);
                for (F -= c,
                I += c,
                G -= c,
                H += c; g && (f = f.offsetParent) && f != b.body && f != e; )
                    (g = (x(f, "opacity") || 1) > 0) && "visible" != x(f, "overflow") && (d = f.getBoundingClientRect(),
                    g = H > d.left && G < d.right && I > d.top - 1 && F < d.bottom + 1);
                return g
            }, U = function() {
                var a, f, h, j, k, m, n, p, q, r, s, t, u = c.elements;
                if ((o = d.loadMode) && P < 8 && (a = u.length)) {
                    for (f = 0,
                    Q++,
                    r = !d.expand || d.expand < 1 ? e.clientHeight > 500 && e.clientWidth > 500 ? 500 : 370 : d.expand,
                    c._defEx = r,
                    s = r * d.expFactor,
                    t = d.hFac,
                    J = null,
                    O < s && P < 1 && Q > 2 && o > 2 && !b.hidden ? (O = s,
                    Q = 0) : O = o > 1 && Q > 1 && P < 6 ? r : N; f < a; f++)
                        if (u[f] && !u[f]._lazyRace)
                            if (M)
                                if ((p = u[f][i]("data-expand")) && (m = 1 * p) || (m = O),
                                q !== m && (y = innerWidth + m * t,
                                D = innerHeight + m,
                                n = -1 * m,
                                q = m),
                                h = u[f].getBoundingClientRect(),
                                (I = h.bottom) >= n && (F = h.top) <= D && (H = h.right) >= n * t && (G = h.left) <= y && (I || H || G || F) && (d.loadHidden || S(u[f])) && (l && P < 3 && !p && (o < 3 || Q < 4) || T(u[f], m))) {
                                    if (aa(u[f]),
                                    k = !0,
                                    P > 9)
                                        break
                                } else
                                    !k && l && !j && P < 4 && Q < 4 && o > 2 && (g[0] || d.preloadAfterLoad) && (g[0] || !p && (I || H || G || F || "auto" != u[f][i](d.sizesAttr))) && (j = g[0] || u[f]);
                            else
                                aa(u[f]);
                    j && !k && aa(j)
                }
            }, V = B(U), W = function(a) {
                var b = a.target;
                if (b._lazyCache)
                    return void delete b._lazyCache;
                R(a),
                s(b, d.loadedClass),
                t(b, d.loadingClass),
                u(b, Y),
                v(b, "lazyloaded")
            }, X = A(W), Y = function(a) {
                X({
                    target: a.target
                })
            }, Z = function(a, b) {
                try {
                    a.contentWindow.location.replace(b)
                } catch (c) {
                    a.src = b
                }
            }, $ = function(a) {
                var b, c = a[i](d.srcsetAttr);
                (b = d.customMedia[a[i]("data-media") || a[i]("media")]) && a.setAttribute("media", b),
                c && a.setAttribute("srcset", c)
            }, _ = A(function(a, b, c, e, f) {
                var g, h, j, l, o, p;
                (o = v(a, "lazybeforeunveil", b)).defaultPrevented || (e && (c ? s(a, d.autosizesClass) : a.setAttribute("sizes", e)),
                h = a[i](d.srcsetAttr),
                g = a[i](d.srcAttr),
                f && (j = a.parentNode,
                l = j && n.test(j.nodeName || "")),
                p = b.firesLoad || "src"in a && (h || g || l),
                o = {
                    target: a
                },
                s(a, d.loadingClass),
                p && (clearTimeout(m),
                m = k(R, 2500),
                u(a, Y, !0)),
                l && q.call(j.getElementsByTagName("source"), $),
                h ? a.setAttribute("srcset", h) : g && !l && (L.test(a.nodeName) ? Z(a, g) : a.src = g),
                f && (h || l) && w(a, {
                    src: g
                })),
                a._lazyRace && delete a._lazyRace,
                t(a, d.lazyClass),
                z(function() {
                    var b = a.complete && a.naturalWidth > 1;
                    p && !b || (b && s(a, "ls-is-cached"),
                    W(o),
                    a._lazyCache = !0,
                    k(function() {
                        "_lazyCache"in a && delete a._lazyCache
                    }, 9))
                }, !0)
            }), aa = function(a) {
                var b, c = K.test(a.nodeName), e = c && (a[i](d.sizesAttr) || a[i]("sizes")), f = "auto" == e;
                (!f && l || !c || !a[i]("src") && !a.srcset || a.complete || r(a, d.errorClass) || !r(a, d.lazyClass)) && (b = v(a, "lazyunveilread").detail,
                f && E.updateElem(a, !0, a.offsetWidth),
                a._lazyRace = !0,
                P++,
                _(a, b, f, e, c))
            }, ba = function() {
                if (!l) {
                    if (f.now() - p < 999)
                        return void k(ba, 999);
                    var a = C(function() {
                        d.loadMode = 3,
                        V()
                    });
                    l = !0,
                    d.loadMode = 3,
                    V(),
                    j("scroll", function() {
                        3 == d.loadMode && (d.loadMode = 2),
                        a()
                    }, !0)
                }
            };
            return {
                _: function() {
                    p = f.now(),
                    c.elements = b.getElementsByClassName(d.lazyClass),
                    g = b.getElementsByClassName(d.lazyClass + " " + d.preloadClass),
                    j("scroll", V, !0),
                    j("resize", V, !0),
                    a.MutationObserver ? new MutationObserver(V).observe(e, {
                        childList: !0,
                        subtree: !0,
                        attributes: !0
                    }) : (e[h]("DOMNodeInserted", V, !0),
                    e[h]("DOMAttrModified", V, !0),
                    setInterval(V, 999)),
                    j("hashchange", V, !0),
                    ["focus", "mouseover", "click", "load", "transitionend", "animationend", "webkitAnimationEnd"].forEach(function(a) {
                        b[h](a, V, !0)
                    }),
                    /d$|^c/.test(b.readyState) ? ba() : (j("load", ba),
                    b[h]("DOMContentLoaded", V),
                    k(ba, 2e4)),
                    c.elements.length ? (U(),
                    z._lsFlush()) : V()
                },
                checkElems: V,
                unveil: aa
            }
        }()
          , E = function() {
            var a, c = A(function(a, b, c, d) {
                var e, f, g;
                if (a._lazysizesWidth = d,
                d += "px",
                a.setAttribute("sizes", d),
                n.test(b.nodeName || ""))
                    for (e = b.getElementsByTagName("source"),
                    f = 0,
                    g = e.length; f < g; f++)
                        e[f].setAttribute("sizes", d);
                c.detail.dataAttr || w(a, c.detail)
            }), e = function(a, b, d) {
                var e, f = a.parentNode;
                f && (d = y(a, f, d),
                e = v(a, "lazybeforesizes", {
                    width: d,
                    dataAttr: !!b
                }),
                e.defaultPrevented || (d = e.detail.width) && d !== a._lazysizesWidth && c(a, f, e, d))
            }, f = function() {
                var b, c = a.length;
                if (c)
                    for (b = 0; b < c; b++)
                        e(a[b])
            }, g = C(f);
            return {
                _: function() {
                    a = b.getElementsByClassName(d.autosizesClass),
                    j("resize", g)
                },
                checkElems: g,
                updateElem: e
            }
        }()
          , F = function() {
            F.i || (F.i = !0,
            E._(),
            D._())
        };
        return c = {
            cfg: d,
            autoSizer: E,
            loader: D,
            init: F,
            uP: w,
            aC: s,
            rC: t,
            hC: r,
            fire: v,
            gW: y,
            rAF: z
        }
    }
});
window.lazySizesConfig = window.lazySizesConfig || {},
window.lazySizesConfig.rias = window.lazySizesConfig.rias || {
    prefix: "",
    absUrl: !0
},
window.lazySizesConfig.expand = 9;

// clone
$(function() {
    $(".social-top").clone().appendTo(".socialmobile");
});

// DarkMode  
var darkMode;
if (localStorage.getItem('dark-mode')) {
    darkMode = localStorage.getItem('dark-mode')
} else {
    darkMode = 'light'
}
localStorage.setItem('dark-mode', darkMode);
if (localStorage.getItem('dark-mode') == 'dark') {
    $('body').addClass('dark');
    $('.dark-button').hide();
    $('.light-button').show()
}
$('.dark-button').on('click', function() {
    $('.dark-button').hide();
    $('.light-button').show();
    $('body').addClass('dark');
    localStorage.setItem('dark-mode', 'dark')
});
$('.light-button').on('click', function() {
    $('.light-button').hide();
    $('.dark-button').show();
    $('body').removeClass('dark');
    localStorage.setItem('dark-mode', 'light')
});
//]]>

//<![CDATA[
//Menu
"use strict";
function toggleMenu() {
    overlay.classList.toggle("active"),
    menu.classList.toggle("active")
}
$(function() {
    $("#main-menu").each(function() {
        for (var e = $(this).find(".LinkList ul > li").children("a"), a = e.length, s = 0; a > s; s++) {
            var t = e.eq(s)
              , n = t.text();
            if ("_" !== n.charAt(0)) {
                var i = e.eq(s + 1)
                  , l = i.text();
                if ("_" === l.charAt(0)) {
                    var r = t.parent();
                    r.append('<ul class="sub-menu m-sub"/>')
                }
            }
            "_" === n.charAt(0) && (t.text(n.replace("_", "")),
            t.parent().appendTo(r.children(".sub-menu")))
        }
        for (s = 0; a > s; s++)
            t = e.eq(s),
            n = t.text(),
            "_" !== n.charAt(0) && (i = e.eq(s + 1),
            l = i.text(),
            "_" === l.charAt(0) && (r = t.parent(),
            r.append('<ul class="sub-menu2 m-sub"/>'))),
            "_" === n.charAt(0) && (t.text(n.replace("_", "")),
            t.parent().appendTo(r.children(".sub-menu2")));
        $("#main-menu ul li ul").parent("li").addClass("has-sub"),
        $("#main-menu .widget").addClass("show-menu")
    }),
    $("#main-menu-nav").clone().appendTo(".mobile-menu"),
    $(".mobile-menu .has-sub").append('<div class="submenu-toggle"/>'),
    $(".mobile-menu ul > li a").each(function() {
        var e = $(this)
          , a = e.attr("href").trim()
          , s = a.toLowerCase()
          , t = a.split("/")
          , n = t[0];
        s.match("mega-menu") && e.attr("href", "/search/label/" + n + "?&max-results=" + postPerPage)
    }),
    $(".slide-menu-toggle").on("click", function() {
        $("body").toggleClass("nav-active")
    }),
    $(".mobile-menu ul li .submenu-toggle").on("click", function(e) {
        $(this).parent().hasClass("has-sub") && (e.preventDefault(),
        $(this).parent().hasClass("show") ? $(this).parent().removeClass("show").find("> .m-sub").slideToggle(170) : $(this).parent().addClass("show").children(".m-sub").slideToggle(170))
    })
});
var overlay = document.querySelector(".overlay")
  , menu = document.querySelector(".menu");
$(".sidebar-dropdown > a").click(function() {
    $(".sidebar-submenu").slideUp(200),
    $(this).parent().hasClass("active") ? ($(".sidebar-dropdown").removeClass("active"),
    $(this).parent().removeClass("active")) : ($(".sidebar-dropdown").removeClass("active"),
    $(this).next(".sidebar-submenu").slideDown(200),
    $(this).parent().addClass("active"))
});

// backtop
function scrollToTop() {
    verticalOffset = "undefined" != typeof verticalOffset ? verticalOffset : 0,
    element = $("body"),
    offset = element.offset(),
    offsetTop = offset.top,
    $("html, body").animate({
        scrollTop: offsetTop
    }, 600, "linear")
}
$(function() {
    $(document).on("scroll", function() {
        100 < $(window).scrollTop() ? $(".backtop").addClass("show") : $(".backtop").removeClass("show")
    }),
    $(".backtop").on("click", scrollToTop)
});

//Sticky heade
$(document).scroll(function() {
    var e = $(document).scrollTop();
    e > 70 ? $(".header-wrapper").addClass("sticky") : $(".header-wrapper").removeClass("sticky")
});
//recent option
var no_image = "data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFwBBAQEBAQEBAQEBAYGBQYGCAcHBwcIDAkJCQkJDBMMDgwMDgwTERQQDxAUER4XFRUXHiIdGx0iKiUlKjQyNEREXP/CABEIAM0BewMBIgACEQEDEQH/xAAcAAEAAwEAAwEAAAAAAAAAAAAABQcIBgECBAP/2gAIAQEAAAAA3cAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAfBW/r72LIgAAAARnEfMAOK4s7e0+w9gAAABXtFysoAA/Pmuo0H9YAAACAzNeFj+QACPzzO3yAAAApzl9FgeIWO6T6By/0z/JZ01h9AAAAFGLzBFUPyD6rjs8zHLaGissanlQAAAKMXmHpmv9Luk+BpW/u8Qn7SsVljU8qAAABRi8w47O2ppQo6B0eEVljU8qAAABRi8wrWntVisKn1OEVljU8qAAABRi8w5rNGl+lM+edBBFZY1PKgAAAUYvMGfOauCVrqv9H9SEVljU8qAAABRi8wfhTddfL0lz9eCKyxqeVAAAAqXgNMeQPX0/UBwdE6t/UAAACOzDYFwfWAA8cnRFj3CAAAAcxREF7AAPHtaFy+4AAAA8QHygAPM59oAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB//xAAUAQEAAAAAAAAAAAAAAAAAAAAA/9oACAECEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP/EABQBAQAAAAAAAAAAAAAAAAAAAAD/2gAIAQMQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/8QALBAAAAYBAwQCAAYDAAAAAAAAAQIDBAUGAAcTFhAgNUARFxIUFSEwMTJwgP/aAAgBAQABCAD/AILk5NpEM1nz0+qTUDmBP7TRwmqTQTACsVKs5lmm+Ze/ITMXFkE8gvqdDpmOVD7SY59pMc+0mOfaTHPtJjn2kxz7SY59pMc+0mOfaTHLbbOR/lE0etOtSFcM9I7ir3ASYgmYhyKFKcnuXC6hCGNHR7hy4drHcOmFcnJIhVGXBLRnBLRnBLRnBLRnBLRnBLRnBLRnBLRnBLRnBLRnBLRnBLRnBLRnBLRilItCRBOLhs4aKmQdVu3yFfOCQsXzaSaIPWntWaYLBw7p7iiiq6p1FKhSW8eijIyoAAB8F/nkYphKtztX1ora1df7OaeTgsJP9MX9rVF4YVYxgWixiUnYEN/vEfj9xe2SDjhMV0jd6yuqCRW7tq7JuNeydt0TAKFQdQdkjLAQ4scu0YlJV96J0lVEFUl0WiwOGrZcvs6neZZ5pj5l53zMyxg2R3r6dukvNHUTL0ZvnkesVwyqt/K/USjpnrak10rHMlc6epuD2ZqdHJzw0p0gvDRftam+ZaZpj5l53KHImQyh7TYFrBJHXGsVZ5Y1zCWPqNfjikBJeGiXBNtew6dNF0jOYQxTpnMQ9EsSkzHmaO+krXIeaEp5GLhYyFTOlG5OeGlOkH4aL9rU7zLTNMfMvO6+PjMq29AhSmOYpCQkanERbNgn11KigbSTaTTo78WNkYiPbOeGlOkH4aL9rU3zLTNMfMvO7U8ojDMjBEGISWjDKh/QdmqJiBGRxRgiCpNRBQ7Zzw0p0g/DRftam+ZaZpj5l53W6NGUgH7cmVSbSnIhut1/oPkb7Npy8uVFtp7Gi9n0nJ+2c8NKdIPw0X7WpvmWmaY+Zed93rJ4V8L1vETD6EdkeMYvUqJcEAskrf6wmQThYtQHcqisyj0UlXCySCNSrwV+MBI/bOeGlOkH4aL9rU7zLTNMRD9aeB3uWyDxBRs5ntOHSB1XEG6jn7I4puykOcfgkZUJ+VMXZrVPYV8gLD3TogENKiOQfyENFgPs6oR6hko+TJU5YsNONHaoCBgAQ7xIU3+RUECh8F/g1BmCR8KoyIxaKv3jVkggkCKKSIezLxqEvHOo9eQj3cW7WYvanfBjUk42Yaysa+ICjTeRzeRzeRzeRzeRzeRzeRzeRzeRzeRzeRzeRzeRzeRwV0QARGbu8LEpmBKXl3s29UfPtOK8puDPOvbstYZWJt8KTNal4M4/nQESj8l3D5uHzcPm4fNw+bh83D5uHzcPm4fNw+bh83D5uHz8ZxxJFVdQiKFa08XVVTdzyaZEUyJJe4YoGASmc1Wvux/Erwms5wms5wms5wms5wms5wms5wms5wms5wms5wms5wms5wms5wms5wms4Wl1kogINI1gwASsv9//AP/EADoQAAIBAgIGBwYFBAMBAAAAAAECAwARBJEFITFBUbISIEBUYZPREBMiMnGSI0JSYoEUMIDBUHKCov/aAAgBAQAJPwD/AALlCRJmzHYo4k1oqVkv8JZwpIrRL+aK0VKF/a6sakDxvqPFW3g/8BjooQBezH4j9FGs1g8TLb5Wsqq2ZrRc/wB61ouf71rRc/3rWi5/vWtFz/etaLn+9a0XP961ouf71rRc/wB61ouf71qF4YYSzFGPzMdhNttt3UhllhnCkCO11ZfAkCsR/SzHYmI+AH/1spgykXBBuD21Q+OKXZ21rFfw3mpnlmc3Z3PSY1oyd422OR0ENuDPYVo0edH61o0edH61o0edH61o0edH61o0edH61o0edH61o0edH61o0edH61o0edH61o0edH61o0edH61o0edH61o0edH61o0edH61otmA/RIjHIGoJIZV2pKhRhfwNEz4E7YGb5fFOFSB4ZVDKf8AX17WR723u4VP5pG2D/dMzyyOWZjrZmY7frUQkxzgOsba1hG7VvagAOwYZJI2+4HiDuNEyYWUFoJTtI/Sf3CpLYbGGy3vYTbrf9tna3PQCvM67idimrmPDKcRZTa7IQFyJ/sahWk4FddqBuk4seA11pJVJNrurIuZFqxMUyXt0o3DrceI6rvJiCA3uohdgp3ncKkIkjALxOLOt/YG6eGQ4mOx2Mg9KcpJG4dGG0MpuDTXEkSuDxuPDtXdRzGu6nmHXkso1Ig+d2/So41KcNgzsgiPO20+3EPDKp1MhtQWPEuejHONSSE7iNzdS/SOKd1vr+BzdP8A5Ir5Eimabh0ChHMR7O6y8p9ndYuUdq7qOY13U8w6xARQSSdVrVdcNFdII+CA/N9Wo+6wcTASzEb/ANKcWtlWjo5HXZJMPePfjc1o3DOp3GJatBOLkwsfw38Bf5TQKupsQdoIo3xWECoXJ+dCPhb66tftwaySKOiHBKOB9VIrCrEHN2IuWb6k6z7O6y8vs7rFy9q7qOY13U8w6xs+I6MA+jn4s1pSWYgADaSaA/CjAYj8znWx6igJi0KvYfnj3n6ijZJ+lA/iHHqAet3WXl9ndYuXtXdRzGu6nmHWUm2LFzwBU0PgGLhLar6g46q3c4klTwASlJvjINQ4Bx1u6y8vs7rFy9q7qOY13U8w6ygzKgki8GQg6vqBb2SKcTGgSdN4car24NtHUcPhsIpRWGxnb5iKUGLCIZWv+sghfXrd1l5fZ3WLl7V3Ucxrup5h1wTgcS5KmwHQkNyU1Zipeiw+ZDrRxwYVFJhJeIHvIyLcRrrHNIRsVIn6RzAFQnDYZ2sXJ/FdAfD5fGkLyyOERRtZmNgKbpYma0k5sNTfpHgvW7rLy+zusXL2ruw5q2/0h5h14lkikUqysLgg0ffQa2EDt+IvgDvrBTwtwkQrlSkngBesC8UZF/ezgxpb+dZo+/xxFmmbYBwUbuuQAMJNyn2AgjDRjJe1IOhGWhkO/wCPWtMRCxMU1jb4H3nwU2NbCP7Cg1CgHAKP7L2xGN/DUA2IT85+m6lvJPKsa/VjWxEC5DtRISZLXG1SNYP8Goik0RsRuN9hHEGiz4ZNUU41tGv6SBrK8Kx0EqkA/C4Nr8eB8DUqZipUzFSpmKlTMVKmYqVMxUqZipUzFSpmKlTMVKmYqVMxUqZipUzFTIAP3Cp0xeK3Qwtf7mGoVJ0nOpVHyog2IvhUdkClMKG331M/+h2we7xcan3Mw2j9rcVrDEw3sJ0u0Z/nd/NEg07Z07Z07Z07Z07Z07Z07Z07Z07Z07Z07Z07Z07Z07Z0xzqJ5JHNlRAWYnwApPdwrrGGB+NiNnTtsFIqIihVVRYKBsAHbQCCN9aKgud6p0Ccq0YmbVoxM2rRiZtWjEzatGJm1aMTNq0YmbVoxM2rRiZtWjEzatGJm1aMTNq0YmbVoxM2rRcf8kkVg4YAdvu0C3y/wA//xAAUEQEAAAAAAAAAAAAAAAAAAACA/9oACAECAQE/ABx//8QAFBEBAAAAAAAAAAAAAAAAAAAAgP/aAAgBAwEBPwAcf//Z"
  , imglazy = "data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
  , month_format = [, "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]
  , widthZise = "363"
  , heightZise = "272";
//]]>

//<![CDATA[
// JS Time Post
function datepost() {
    $(".timestamp-link .published").each(function() {
        var t = $(this).attr("title")
          , s = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
        if ("" != t)
            var a = t.substring(0, 10)
              , n = a.substring(0, 4)
              , i = a.substring(5, 7)
              , e = a.substring(8, 10)
              , r = s[parseInt(i, 10) - 1];
        var u = $(this).parents(".scinfo")
          , h = u.children(".scdate");
        $(".day", h).html(e),
        $(".month", h).html(r),
        $(".year", h).html(n)
    })
}
datepost();
//]]>

//<![CDATA[
// JS Recent 
$("#rcwrapper2").each(function() {
    var t = $(this).find("span").attr("data-label")
      , e = ($(this).find("span").attr("data-no"),
    $(this).parent().attr("id"))
      , a = $(this).find("span").attr("data-type");
    a.match("rcsimple") && $.ajax({
        url: "/feeds/posts/default/-/" + t + "?alt=json-in-script&max-results=6",
        type: "get",
        dataType: "jsonp",
        success: function(t) {
            for (var a = "", i = "<ol>", s = 0; s < t.feed.entry.length; s++) {
                for (var n = 0; n < t.feed.entry[s].link.length; n++)
                    if ("alternate" == t.feed.entry[s].link[n].rel) {
                        a = t.feed.entry[s].link[n].href;
                        break
                    }
                var r = t.feed.entry[s].title.$t
                  , l = t.feed.entry[s].published.$t
                  , d = l.substring(0, 4)
                  , c = l.substring(5, 7)
                  , f = l.substring(8, 10)
                  , h = month_format[parseInt(c, 10)] + " " + f + ", " + d;
                $("<div>").html(h);
                i += '<li><div class="listinfo"><h2 class="seo-title"><a href="' + a + '" title="' + r + '">' + r + '</a></h2><div class="post-meta"><span class="post-date">' + h + "</span></div></li>"
            }
            i += "</ol>",
            $("#rcwrapper2").each(function() {
                var t = $(this).parent().attr("id");
                t == e && ($(this).html(i),
                $(this).parent().addClass("rcsimple"))
            })
        }
    })
}),
$(".recentid .widget-content").each(function() {
    var t = $(this).find("span").attr("data-label")
      , e = $(this).find("span").attr("data-no")
      , a = $(this).parent().attr("id")
      , i = $(this).find("span").attr("data-type");
    i.match("rcgallery") && $.ajax({
        url: "/feeds/posts/default/-/" + t + "?alt=json-in-script&max-results=" + e,
        type: "get",
        dataType: "jsonp",
        success: function(t) {
            for (var e = "", i = "<ul>", s = 0; s < t.feed.entry.length; s++) {
                for (var n = 0; n < t.feed.entry[s].link.length; n++)
                    if ("alternate" == t.feed.entry[s].link[n].rel) {
                        e = t.feed.entry[s].link[n].href;
                        break
                    }
                var r = t.feed.entry[s].title.$t
                  , l = (t.feed.entry[s].category[0].term,
                t.feed.entry[s].content.$t)
                  , d = (t.feed.entry[s].author[0].name.$t,
                t.feed.entry[s].published.$t)
                  , c = d.substring(0, 4)
                  , f = d.substring(5, 7)
                  , h = d.substring(8, 10)
                  , p = (month_format[parseInt(f, 10)] + " " + h + ", " + c,
                $("<div>").html(l))
                  , o = l.replace(/<\S[^>]*>/g, "");
                if (50 < o.length && (o = o.substring(0, 130) + "..."),
                -1 < l.indexOf("//www.youtube.com/embed/"))
                    var u = t.feed.entry[s].media$thumbnail.url;
                else
                    u = -1 < l.indexOf("<img") ? p.find("img:first").attr("src") : no_image;
                i += '<li><div class="rcimg"><div class="rec-image"><img class="lazyload" alt="' + r + '" data-src="' + u + '" src="' + imglazy + '" data-sizes="auto" width="' + widthZise + '" height="' + heightZise + '"/></div></div></div><div class="caption"><div class="sch-icon"><a data-fancybox="gallery" href="' + u + '"><i class="fal fa-image"></i><span class="recent-title">' + r + '</span></a><a href="' + e + '"><i class="fal fa-link"></i><span class="recent-title">' + r + "</span></a></div></div></li>"
            }
            i += "</ul>",
            $(".recentid .widget-content").each(function() {
                $(this).parent().attr("id") == a && ($(this).html(i),
                $(this).parent().addClass("rcgallery").each(function() {
                    $(this).attr("style", function() {})
                }))
            })
        }
    })
});

// @fancyapps/ui/Fancybox v4.0.27
!function(t, e) {
    "object" == typeof exports && "undefined" != typeof module ? e(exports) : "function" == typeof define && define.amd ? define(["exports"], e) : e((t = "undefined" != typeof globalThis ? globalThis : t || self).window = t.window || {})
}(this, (function(t) {
    "use strict";
    function e(t, e) {
        var i = Object.keys(t);
        if (Object.getOwnPropertySymbols) {
            var n = Object.getOwnPropertySymbols(t);
            e && (n = n.filter((function(e) {
                return Object.getOwnPropertyDescriptor(t, e).enumerable
            }
            ))),
            i.push.apply(i, n)
        }
        return i
    }
    function i(t) {
        for (var i = 1; i < arguments.length; i++) {
            var n = null != arguments[i] ? arguments[i] : {};
            i % 2 ? e(Object(n), !0).forEach((function(e) {
                r(t, e, n[e])
            }
            )) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(n)) : e(Object(n)).forEach((function(e) {
                Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(n, e))
            }
            ))
        }
        return t
    }
    function n(t) {
        return n = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(t) {
            return typeof t
        }
        : function(t) {
            return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
        }
        ,
        n(t)
    }
    function o(t, e) {
        if (!(t instanceof e))
            throw new TypeError("Cannot call a class as a function")
    }
    function a(t, e) {
        for (var i = 0; i < e.length; i++) {
            var n = e[i];
            n.enumerable = n.enumerable || !1,
            n.configurable = !0,
            "value"in n && (n.writable = !0),
            Object.defineProperty(t, n.key, n)
        }
    }
    function s(t, e, i) {
        return e && a(t.prototype, e),
        i && a(t, i),
        Object.defineProperty(t, "prototype", {
            writable: !1
        }),
        t
    }
    function r(t, e, i) {
        return e in t ? Object.defineProperty(t, e, {
            value: i,
            enumerable: !0,
            configurable: !0,
            writable: !0
        }) : t[e] = i,
        t
    }
    function l(t, e) {
        if ("function" != typeof e && null !== e)
            throw new TypeError("Super expression must either be null or a function");
        t.prototype = Object.create(e && e.prototype, {
            constructor: {
                value: t,
                writable: !0,
                configurable: !0
            }
        }),
        Object.defineProperty(t, "prototype", {
            writable: !1
        }),
        e && h(t, e)
    }
    function c(t) {
        return c = Object.setPrototypeOf ? Object.getPrototypeOf : function(t) {
            return t.__proto__ || Object.getPrototypeOf(t)
        }
        ,
        c(t)
    }
    function h(t, e) {
        return h = Object.setPrototypeOf || function(t, e) {
            return t.__proto__ = e,
            t
        }
        ,
        h(t, e)
    }
    function d(t) {
        if (void 0 === t)
            throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
        return t
    }
    function u(t, e) {
        if (e && ("object" == typeof e || "function" == typeof e))
            return e;
        if (void 0 !== e)
            throw new TypeError("Derived constructors may only return object or undefined");
        return d(t)
    }
    function f(t) {
        var e = function() {
            if ("undefined" == typeof Reflect || !Reflect.construct)
                return !1;
            if (Reflect.construct.sham)
                return !1;
            if ("function" == typeof Proxy)
                return !0;
            try {
                return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function() {}
                ))),
                !0
            } catch (t) {
                return !1
            }
        }();
        return function() {
            var i, n = c(t);
            if (e) {
                var o = c(this).constructor;
                i = Reflect.construct(n, arguments, o)
            } else
                i = n.apply(this, arguments);
            return u(this, i)
        }
    }
    function v(t, e) {
        for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = c(t)); )
            ;
        return t
    }
    function p() {
        return p = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function(t, e, i) {
            var n = v(t, e);
            if (n) {
                var o = Object.getOwnPropertyDescriptor(n, e);
                return o.get ? o.get.call(arguments.length < 3 ? t : i) : o.value
            }
        }
        ,
        p.apply(this, arguments)
    }
    function g(t, e) {
        return function(t) {
            if (Array.isArray(t))
                return t
        }(t) || function(t, e) {
            var i = null == t ? null : "undefined" != typeof Symbol && t[Symbol.iterator] || t["@@iterator"];
            if (null == i)
                return;
            var n, o, a = [], s = !0, r = !1;
            try {
                for (i = i.call(t); !(s = (n = i.next()).done) && (a.push(n.value),
                !e || a.length !== e); s = !0)
                    ;
            } catch (t) {
                r = !0,
                o = t
            } finally {
                try {
                    s || null == i.return || i.return()
                } finally {
                    if (r)
                        throw o
                }
            }
            return a
        }(t, e) || y(t, e) || function() {
            throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
        }()
    }
    function m(t) {
        return function(t) {
            if (Array.isArray(t))
                return b(t)
        }(t) || function(t) {
            if ("undefined" != typeof Symbol && null != t[Symbol.iterator] || null != t["@@iterator"])
                return Array.from(t)
        }(t) || y(t) || function() {
            throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
        }()
    }
    function y(t, e) {
        if (t) {
            if ("string" == typeof t)
                return b(t, e);
            var i = Object.prototype.toString.call(t).slice(8, -1);
            return "Object" === i && t.constructor && (i = t.constructor.name),
            "Map" === i || "Set" === i ? Array.from(t) : "Arguments" === i || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(i) ? b(t, e) : void 0
        }
    }
    function b(t, e) {
        (null == e || e > t.length) && (e = t.length);
        for (var i = 0, n = new Array(e); i < e; i++)
            n[i] = t[i];
        return n
    }
    function x(t, e) {
        var i = "undefined" != typeof Symbol && t[Symbol.iterator] || t["@@iterator"];
        if (!i) {
            if (Array.isArray(t) || (i = y(t)) || e && t && "number" == typeof t.length) {
                i && (t = i);
                var n = 0
                  , o = function() {};
                return {
                    s: o,
                    n: function() {
                        return n >= t.length ? {
                            done: !0
                        } : {
                            done: !1,
                            value: t[n++]
                        }
                    },
                    e: function(t) {
                        throw t
                    },
                    f: o
                }
            }
            throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
        }
        var a, s = !0, r = !1;
        return {
            s: function() {
                i = i.call(t)
            },
            n: function() {
                var t = i.next();
                return s = t.done,
                t
            },
            e: function(t) {
                r = !0,
                a = t
            },
            f: function() {
                try {
                    s || null == i.return || i.return()
                } finally {
                    if (r)
                        throw a
                }
            }
        }
    }
    var w = function(t) {
        return "object" === n(t) && null !== t && t.constructor === Object && "[object Object]" === Object.prototype.toString.call(t)
    }
      , k = function t() {
        for (var e = !1, i = arguments.length, o = new Array(i), a = 0; a < i; a++)
            o[a] = arguments[a];
        "boolean" == typeof o[0] && (e = o.shift());
        var s = o[0];
        if (!s || "object" !== n(s))
            throw new Error("extendee must be an object");
        for (var r = o.slice(1), l = r.length, c = 0; c < l; c++) {
            var h = r[c];
            for (var d in h)
                if (h.hasOwnProperty(d)) {
                    var u = h[d];
                    if (e && (Array.isArray(u) || w(u))) {
                        var f = Array.isArray(u) ? [] : {};
                        s[d] = t(!0, s.hasOwnProperty(d) ? s[d] : f, u)
                    } else
                        s[d] = u
                }
        }
        return s
    }
      , S = function(t) {
        var e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 1e4;
        return t = parseFloat(t) || 0,
        Math.round((t + Number.EPSILON) * e) / e
    }
      , C = function t(e) {
        return !!(e && "object" === n(e) && e instanceof Element && e !== document.body) && (!e.__Panzoom && (function(t) {
            var e = getComputedStyle(t)["overflow-y"]
              , i = getComputedStyle(t)["overflow-x"]
              , n = ("scroll" === e || "auto" === e) && Math.abs(t.scrollHeight - t.clientHeight) > 1
              , o = ("scroll" === i || "auto" === i) && Math.abs(t.scrollWidth - t.clientWidth) > 1;
            return n || o
        }(e) ? e : t(e.parentNode)))
    }
      , $ = "undefined" != typeof window && window.ResizeObserver || function() {
        function t(e) {
            o(this, t),
            this.observables = [],
            this.boundCheck = this.check.bind(this),
            this.boundCheck(),
            this.callback = e
        }
        return s(t, [{
            key: "observe",
            value: function(t) {
                if (!this.observables.some((function(e) {
                    return e.el === t
                }
                ))) {
                    var e = {
                        el: t,
                        size: {
                            height: t.clientHeight,
                            width: t.clientWidth
                        }
                    };
                    this.observables.push(e)
                }
            }
        }, {
            key: "unobserve",
            value: function(t) {
                this.observables = this.observables.filter((function(e) {
                    return e.el !== t
                }
                ))
            }
        }, {
            key: "disconnect",
            value: function() {
                this.observables = []
            }
        }, {
            key: "check",
            value: function() {
                var t = this.observables.filter((function(t) {
                    var e = t.el.clientHeight
                      , i = t.el.clientWidth;
                    if (t.size.height !== e || t.size.width !== i)
                        return t.size.height = e,
                        t.size.width = i,
                        !0
                }
                )).map((function(t) {
                    return t.el
                }
                ));
                t.length > 0 && this.callback(t),
                window.requestAnimationFrame(this.boundCheck)
            }
        }]),
        t
    }()
      , E = s((function t(e) {
        o(this, t),
        this.id = self.Touch && e instanceof Touch ? e.identifier : -1,
        this.pageX = e.pageX,
        this.pageY = e.pageY,
        this.clientX = e.clientX,
        this.clientY = e.clientY
    }
    ))
      , P = function(t, e) {
        return e ? Math.sqrt(Math.pow(e.clientX - t.clientX, 2) + Math.pow(e.clientY - t.clientY, 2)) : 0
    }
      , T = function(t, e) {
        return e ? {
            clientX: (t.clientX + e.clientX) / 2,
            clientY: (t.clientY + e.clientY) / 2
        } : t
    }
      , L = function(t) {
        return "changedTouches"in t
    }
      , _ = function() {
        function t(e) {
            var i = this
              , n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {}
              , a = n.start
              , s = void 0 === a ? function() {
                return !0
            }
            : a
              , r = n.move
              , l = void 0 === r ? function() {}
            : r
              , c = n.end
              , h = void 0 === c ? function() {}
            : c;
            o(this, t),
            this._element = e,
            this.startPointers = [],
            this.currentPointers = [],
            this._pointerStart = function(t) {
                if (!(t.buttons > 0 && 0 !== t.button)) {
                    var e = new E(t);
                    i.currentPointers.some((function(t) {
                        return t.id === e.id
                    }
                    )) || i._triggerPointerStart(e, t) && (window.addEventListener("mousemove", i._move),
                    window.addEventListener("mouseup", i._pointerEnd))
                }
            }
            ,
            this._touchStart = function(t) {
                for (var e = 0, n = Array.from(t.changedTouches || []); e < n.length; e++) {
                    var o = n[e];
                    i._triggerPointerStart(new E(o), t)
                }
            }
            ,
            this._move = function(t) {
                var e, n = i.currentPointers.slice(), o = L(t) ? Array.from(t.changedTouches).map((function(t) {
                    return new E(t)
                }
                )) : [new E(t)], a = [], s = x(o);
                try {
                    var r = function() {
                        var t = e.value
                          , n = i.currentPointers.findIndex((function(e) {
                            return e.id === t.id
                        }
                        ));
                        if (n < 0)
                            return "continue";
                        a.push(t),
                        i.currentPointers[n] = t
                    };
                    for (s.s(); !(e = s.n()).done; )
                        r()
                } catch (t) {
                    s.e(t)
                } finally {
                    s.f()
                }
                i._moveCallback(n, i.currentPointers.slice(), t)
            }
            ,
            this._triggerPointerEnd = function(t, e) {
                var n = i.currentPointers.findIndex((function(e) {
                    return e.id === t.id
                }
                ));
                return !(n < 0) && (i.currentPointers.splice(n, 1),
                i.startPointers.splice(n, 1),
                i._endCallback(t, e),
                !0)
            }
            ,
            this._pointerEnd = function(t) {
                t.buttons > 0 && 0 !== t.button || i._triggerPointerEnd(new E(t), t) && (window.removeEventListener("mousemove", i._move, {
                    passive: !1
                }),
                window.removeEventListener("mouseup", i._pointerEnd, {
                    passive: !1
                }))
            }
            ,
            this._touchEnd = function(t) {
                for (var e = 0, n = Array.from(t.changedTouches || []); e < n.length; e++) {
                    var o = n[e];
                    i._triggerPointerEnd(new E(o), t)
                }
            }
            ,
            this._startCallback = s,
            this._moveCallback = l,
            this._endCallback = h,
            this._element.addEventListener("mousedown", this._pointerStart, {
                passive: !1
            }),
            this._element.addEventListener("touchstart", this._touchStart, {
                passive: !1
            }),
            this._element.addEventListener("touchmove", this._move, {
                passive: !1
            }),
            this._element.addEventListener("touchend", this._touchEnd),
            this._element.addEventListener("touchcancel", this._touchEnd)
        }
        return s(t, [{
            key: "stop",
            value: function() {
                this._element.removeEventListener("mousedown", this._pointerStart, {
                    passive: !1
                }),
                this._element.removeEventListener("touchstart", this._touchStart, {
                    passive: !1
                }),
                this._element.removeEventListener("touchmove", this._move, {
                    passive: !1
                }),
                this._element.removeEventListener("touchend", this._touchEnd),
                this._element.removeEventListener("touchcancel", this._touchEnd),
                window.removeEventListener("mousemove", this._move),
                window.removeEventListener("mouseup", this._pointerEnd)
            }
        }, {
            key: "_triggerPointerStart",
            value: function(t, e) {
                return !!this._startCallback(t, e) && (this.currentPointers.push(t),
                this.startPointers.push(t),
                !0)
            }
        }]),
        t
    }()
      , A = function(t, e) {
        return t.split(".").reduce((function(t, e) {
            return t && t[e]
        }
        ), e)
    }
      , O = function() {
        function t() {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
            o(this, t),
            this.options = k(!0, {}, e),
            this.plugins = [],
            this.events = {};
            for (var i = 0, n = ["on", "once"]; i < n.length; i++)
                for (var a = n[i], s = 0, r = Object.entries(this.options[a] || {}); s < r.length; s++) {
                    var l = r[s];
                    this[a].apply(this, m(l))
                }
        }
        return s(t, [{
            key: "option",
            value: function(t, e) {
                t = String(t);
                var i = A(t, this.options);
                if ("function" == typeof i) {
                    for (var n, o = arguments.length, a = new Array(o > 2 ? o - 2 : 0), s = 2; s < o; s++)
                        a[s - 2] = arguments[s];
                    i = (n = i).call.apply(n, [this, this].concat(a))
                }
                return void 0 === i ? e : i
            }
        }, {
            key: "localize",
            value: function(t) {
                var e = this
                  , i = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : [];
                return t = (t = String(t).replace(/\{\{(\w+).?(\w+)?\}\}/g, (function(t, n, o) {
                    var a = "";
                    o ? a = e.option("".concat(n[0] + n.toLowerCase().substring(1), ".l10n.").concat(o)) : n && (a = e.option("l10n.".concat(n))),
                    a || (a = t);
                    for (var s = 0; s < i.length; s++)
                        a = a.split(i[s][0]).join(i[s][1]);
                    return a
                }
                ))).replace(/\{\{(.*)\}\}/, (function(t, e) {
                    return e
                }
                ))
            }
        }, {
            key: "on",
            value: function(t, e) {
                var i = this;
                if (w(t)) {
                    for (var n = 0, o = Object.entries(t); n < o.length; n++) {
                        var a = o[n];
                        this.on.apply(this, m(a))
                    }
                    return this
                }
                return String(t).split(" ").forEach((function(t) {
                    var n = i.events[t] = i.events[t] || [];
                    -1 == n.indexOf(e) && n.push(e)
                }
                )),
                this
            }
        }, {
            key: "once",
            value: function(t, e) {
                var i = this;
                if (w(t)) {
                    for (var n = 0, o = Object.entries(t); n < o.length; n++) {
                        var a = o[n];
                        this.once.apply(this, m(a))
                    }
                    return this
                }
                return String(t).split(" ").forEach((function(t) {
                    var n = function n() {
                        i.off(t, n);
                        for (var o = arguments.length, a = new Array(o), s = 0; s < o; s++)
                            a[s] = arguments[s];
                        e.call.apply(e, [i, i].concat(a))
                    };
                    n._ = e,
                    i.on(t, n)
                }
                )),
                this
            }
        }, {
            key: "off",
            value: function(t, e) {
                var i = this;
                if (!w(t))
                    return t.split(" ").forEach((function(t) {
                        var n = i.events[t];
                        if (!n || !n.length)
                            return i;
                        for (var o = -1, a = 0, s = n.length; a < s; a++) {
                            var r = n[a];
                            if (r && (r === e || r._ === e)) {
                                o = a;
                                break
                            }
                        }
                        -1 != o && n.splice(o, 1)
                    }
                    )),
                    this;
                for (var n = 0, o = Object.entries(t); n < o.length; n++) {
                    var a = o[n];
                    this.off.apply(this, m(a))
                }
            }
        }, {
            key: "trigger",
            value: function(t) {
                for (var e = arguments.length, i = new Array(e > 1 ? e - 1 : 0), n = 1; n < e; n++)
                    i[n - 1] = arguments[n];
                var o, a = x(m(this.events[t] || []).slice());
                try {
                    for (a.s(); !(o = a.n()).done; ) {
                        var s = o.value;
                        if (s && !1 === s.call.apply(s, [this, this].concat(i)))
                            return !1
                    }
                } catch (t) {
                    a.e(t)
                } finally {
                    a.f()
                }
                var r, l = x(m(this.events["*"] || []).slice());
                try {
                    for (l.s(); !(r = l.n()).done; ) {
                        var c = r.value;
                        if (c && !1 === c.call.apply(c, [this, t, this].concat(i)))
                            return !1
                    }
                } catch (t) {
                    l.e(t)
                } finally {
                    l.f()
                }
                return !0
            }
        }, {
            key: "attachPlugins",
            value: function(t) {
                for (var e = {}, i = 0, n = Object.entries(t || {}); i < n.length; i++) {
                    var o = g(n[i], 2)
                      , a = o[0]
                      , s = o[1];
                    !1 === this.options[a] || this.plugins[a] || (this.options[a] = k({}, s.defaults || {}, this.options[a]),
                    e[a] = new s(this))
                }
                for (var r = 0, l = Object.entries(e); r < l.length; r++) {
                    var c = g(l[r], 2);
                    c[0],
                    c[1].attach(this)
                }
                return this.plugins = Object.assign({}, this.plugins, e),
                this
            }
        }, {
            key: "detachPlugins",
            value: function() {
                for (var t in this.plugins) {
                    var e = void 0;
                    (e = this.plugins[t]) && "function" == typeof e.detach && e.detach(this)
                }
                return this.plugins = {},
                this
            }
        }]),
        t
    }()
      , z = {
        touch: !0,
        zoom: !0,
        pinchToZoom: !0,
        panOnlyZoomed: !1,
        lockAxis: !1,
        friction: .64,
        decelFriction: .88,
        zoomFriction: .74,
        bounceForce: .2,
        baseScale: 1,
        minScale: 1,
        maxScale: 2,
        step: .5,
        textSelection: !1,
        click: "toggleZoom",
        wheel: "zoom",
        wheelFactor: 42,
        wheelLimit: 5,
        draggableClass: "is-draggable",
        draggingClass: "is-dragging",
        ratio: 1
    }
      , M = function(t) {
        l(n, t);
        var e = f(n);
        function n(t) {
            var i, a = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
            o(this, n),
            (i = e.call(this, k(!0, {}, z, a))).state = "init",
            i.$container = t;
            for (var s = 0, r = ["onLoad", "onWheel", "onClick"]; s < r.length; s++) {
                var l = r[s];
                i[l] = i[l].bind(d(i))
            }
            return i.initLayout(),
            i.resetValues(),
            i.attachPlugins(n.Plugins),
            i.trigger("init"),
            i.updateMetrics(),
            i.attachEvents(),
            i.trigger("ready"),
            !1 === i.option("centerOnStart") ? i.state = "ready" : i.panTo({
                friction: 0
            }),
            t.__Panzoom = d(i),
            i
        }
        return s(n, [{
            key: "initLayout",
            value: function() {
                var t = this.$container;
                if (!(t instanceof HTMLElement))
                    throw new Error("Panzoom: Container not found");
                var e = this.option("content") || t.querySelector(".panzoom__content");
                if (!e)
                    throw new Error("Panzoom: Content not found");
                this.$content = e;
                var i, n = this.option("viewport") || t.querySelector(".panzoom__viewport");
                n || !1 === this.option("wrapInner") || ((n = document.createElement("div")).classList.add("panzoom__viewport"),
                (i = n).append.apply(i, m(t.childNodes)),
                t.appendChild(n));
                this.$viewport = n || e.parentNode
            }
        }, {
            key: "resetValues",
            value: function() {
                this.updateRate = this.option("updateRate", /iPhone|iPad|iPod|Android/i.test(navigator.userAgent) ? 250 : 24),
                this.container = {
                    width: 0,
                    height: 0
                },
                this.viewport = {
                    width: 0,
                    height: 0
                },
                this.content = {
                    origWidth: 0,
                    origHeight: 0,
                    width: 0,
                    height: 0,
                    x: this.option("x", 0),
                    y: this.option("y", 0),
                    scale: this.option("baseScale")
                },
                this.transform = {
                    x: 0,
                    y: 0,
                    scale: 1
                },
                this.resetDragPosition()
            }
        }, {
            key: "onLoad",
            value: function(t) {
                this.updateMetrics(),
                this.panTo({
                    scale: this.option("baseScale"),
                    friction: 0
                }),
                this.trigger("load", t)
            }
        }, {
            key: "onClick",
            value: function(t) {
                if (!t.defaultPrevented)
                    if (this.option("textSelection") && window.getSelection().toString().length)
                        t.stopPropagation();
                    else {
                        var e = this.$content.getClientRects()[0];
                        if ("ready" !== this.state && (this.dragPosition.midPoint || Math.abs(e.top - this.dragStart.rect.top) > 1 || Math.abs(e.left - this.dragStart.rect.left) > 1))
                            return t.preventDefault(),
                            void t.stopPropagation();
                        !1 !== this.trigger("click", t) && this.option("zoom") && "toggleZoom" === this.option("click") && (t.preventDefault(),
                        t.stopPropagation(),
                        this.zoomWithClick(t))
                    }
            }
        }, {
            key: "onWheel",
            value: function(t) {
                !1 !== this.trigger("wheel", t) && this.option("zoom") && this.option("wheel") && this.zoomWithWheel(t)
            }
        }, {
            key: "zoomWithWheel",
            value: function(t) {
                void 0 === this.changedDelta && (this.changedDelta = 0);
                var e = Math.max(-1, Math.min(1, -t.deltaY || -t.deltaX || t.wheelDelta || -t.detail))
                  , i = this.content.scale
                  , n = i * (100 + e * this.option("wheelFactor")) / 100;
                if (e < 0 && Math.abs(i - this.option("minScale")) < .01 || e > 0 && Math.abs(i - this.option("maxScale")) < .01 ? (this.changedDelta += Math.abs(e),
                n = i) : (this.changedDelta = 0,
                n = Math.max(Math.min(n, this.option("maxScale")), this.option("minScale"))),
                !(this.changedDelta > this.option("wheelLimit")) && (t.preventDefault(),
                n !== i)) {
                    var o = this.$content.getBoundingClientRect()
                      , a = t.clientX - o.left
                      , s = t.clientY - o.top;
                    this.zoomTo(n, {
                        x: a,
                        y: s
                    })
                }
            }
        }, {
            key: "zoomWithClick",
            value: function(t) {
                var e = this.$content.getClientRects()[0]
                  , i = t.clientX - e.left
                  , n = t.clientY - e.top;
                this.toggleZoom({
                    x: i,
                    y: n
                })
            }
        }, {
            key: "attachEvents",
            value: function() {
                var t = this;
                this.$content.addEventListener("load", this.onLoad),
                this.$container.addEventListener("wheel", this.onWheel, {
                    passive: !1
                }),
                this.$container.addEventListener("click", this.onClick, {
                    passive: !1
                }),
                this.initObserver();
                var e = new _(this.$container,{
                    start: function(i, n) {
                        if (!t.option("touch"))
                            return !1;
                        if (t.velocity.scale < 0)
                            return !1;
                        var o = n.composedPath()[0];
                        if (!e.currentPointers.length) {
                            if (-1 !== ["BUTTON", "TEXTAREA", "OPTION", "INPUT", "SELECT", "VIDEO"].indexOf(o.nodeName))
                                return !1;
                            if (t.option("textSelection") && function(t, e, i) {
                                for (var n = t.childNodes, o = document.createRange(), a = 0; a < n.length; a++) {
                                    var s = n[a];
                                    if (s.nodeType === Node.TEXT_NODE) {
                                        o.selectNodeContents(s);
                                        var r = o.getBoundingClientRect();
                                        if (e >= r.left && i >= r.top && e <= r.right && i <= r.bottom)
                                            return s
                                    }
                                }
                                return !1
                            }(o, i.clientX, i.clientY))
                                return !1
                        }
                        return !C(o) && (!1 !== t.trigger("touchStart", n) && ("mousedown" === n.type && n.preventDefault(),
                        t.state = "pointerdown",
                        t.resetDragPosition(),
                        t.dragPosition.midPoint = null,
                        t.dragPosition.time = Date.now(),
                        !0))
                    },
                    move: function(i, n, o) {
                        if ("pointerdown" === t.state)
                            if (!1 !== t.trigger("touchMove", o)) {
                                if (!(n.length < 2 && !0 === t.option("panOnlyZoomed") && t.content.width <= t.viewport.width && t.content.height <= t.viewport.height && t.transform.scale <= t.option("baseScale")) && (!(n.length > 1) || t.option("zoom") && !1 !== t.option("pinchToZoom"))) {
                                    var a = T(i[0], i[1])
                                      , s = T(n[0], n[1])
                                      , r = s.clientX - a.clientX
                                      , l = s.clientY - a.clientY
                                      , c = P(i[0], i[1])
                                      , h = P(n[0], n[1])
                                      , d = c && h ? h / c : 1;
                                    t.dragOffset.x += r,
                                    t.dragOffset.y += l,
                                    t.dragOffset.scale *= d,
                                    t.dragOffset.time = Date.now() - t.dragPosition.time;
                                    var u = 1 === t.dragStart.scale && t.option("lockAxis");
                                    if (u && !t.lockAxis) {
                                        if (Math.abs(t.dragOffset.x) < 6 && Math.abs(t.dragOffset.y) < 6)
                                            return void o.preventDefault();
                                        var f = Math.abs(180 * Math.atan2(t.dragOffset.y, t.dragOffset.x) / Math.PI);
                                        t.lockAxis = f > 45 && f < 135 ? "y" : "x"
                                    }
                                    if ("xy" === u || "y" !== t.lockAxis) {
                                        if (o.preventDefault(),
                                        o.stopPropagation(),
                                        o.stopImmediatePropagation(),
                                        t.lockAxis && (t.dragOffset["x" === t.lockAxis ? "y" : "x"] = 0),
                                        t.$container.classList.add(t.option("draggingClass")),
                                        t.transform.scale === t.option("baseScale") && "y" === t.lockAxis || (t.dragPosition.x = t.dragStart.x + t.dragOffset.x),
                                        t.transform.scale === t.option("baseScale") && "x" === t.lockAxis || (t.dragPosition.y = t.dragStart.y + t.dragOffset.y),
                                        t.dragPosition.scale = t.dragStart.scale * t.dragOffset.scale,
                                        n.length > 1) {
                                            var v = T(e.startPointers[0], e.startPointers[1])
                                              , p = v.clientX - t.dragStart.rect.x
                                              , g = v.clientY - t.dragStart.rect.y
                                              , m = t.getZoomDelta(t.content.scale * t.dragOffset.scale, p, g)
                                              , y = m.deltaX
                                              , b = m.deltaY;
                                            t.dragPosition.x -= y,
                                            t.dragPosition.y -= b,
                                            t.dragPosition.midPoint = s
                                        } else
                                            t.setDragResistance();
                                        t.transform = {
                                            x: t.dragPosition.x,
                                            y: t.dragPosition.y,
                                            scale: t.dragPosition.scale
                                        },
                                        t.startAnimation()
                                    }
                                }
                            } else
                                o.preventDefault()
                    },
                    end: function(n, o) {
                        if ("pointerdown" === t.state)
                            if (t._dragOffset = i({}, t.dragOffset),
                            e.currentPointers.length)
                                t.resetDragPosition();
                            else if (t.state = "decel",
                            t.friction = t.option("decelFriction"),
                            t.recalculateTransform(),
                            t.$container.classList.remove(t.option("draggingClass")),
                            !1 !== t.trigger("touchEnd", o) && "decel" === t.state) {
                                var a = t.option("minScale");
                                if (t.transform.scale < a)
                                    t.zoomTo(a, {
                                        friction: .64
                                    });
                                else {
                                    var s = t.option("maxScale");
                                    if (t.transform.scale - s > .01) {
                                        var r = t.dragPosition.midPoint || n
                                          , l = t.$content.getClientRects()[0];
                                        t.zoomTo(s, {
                                            friction: .64,
                                            x: r.clientX - l.left,
                                            y: r.clientY - l.top
                                        })
                                    } else
                                        ;
                                }
                            }
                    }
                });
                this.pointerTracker = e
            }
        }, {
            key: "initObserver",
            value: function() {
                var t = this;
                this.resizeObserver || (this.resizeObserver = new $((function() {
                    t.updateTimer || (t.updateTimer = setTimeout((function() {
                        var e = t.$container.getBoundingClientRect();
                        e.width && e.height ? ((Math.abs(e.width - t.container.width) > 1 || Math.abs(e.height - t.container.height) > 1) && (t.isAnimating() && t.endAnimation(!0),
                        t.updateMetrics(),
                        t.panTo({
                            x: t.content.x,
                            y: t.content.y,
                            scale: t.option("baseScale"),
                            friction: 0
                        })),
                        t.updateTimer = null) : t.updateTimer = null
                    }
                    ), t.updateRate))
                }
                )),
                this.resizeObserver.observe(this.$container))
            }
        }, {
            key: "resetDragPosition",
            value: function() {
                this.lockAxis = null,
                this.friction = this.option("friction"),
                this.velocity = {
                    x: 0,
                    y: 0,
                    scale: 0
                };
                var t = this.content
                  , e = t.x
                  , n = t.y
                  , o = t.scale;
                this.dragStart = {
                    rect: this.$content.getBoundingClientRect(),
                    x: e,
                    y: n,
                    scale: o
                },
                this.dragPosition = i(i({}, this.dragPosition), {}, {
                    x: e,
                    y: n,
                    scale: o
                }),
                this.dragOffset = {
                    x: 0,
                    y: 0,
                    scale: 1,
                    time: 0
                }
            }
        }, {
            key: "updateMetrics",
            value: function(t) {
                !0 !== t && this.trigger("beforeUpdate");
                var e, n = this.$container, o = this.$content, a = this.$viewport, s = o instanceof HTMLImageElement, r = this.option("zoom"), l = this.option("resizeParent", r), c = this.option("width"), h = this.option("height"), d = c || (e = o,
                Math.max(parseFloat(e.naturalWidth || 0), parseFloat(e.width && e.width.baseVal && e.width.baseVal.value || 0), parseFloat(e.offsetWidth || 0), parseFloat(e.scrollWidth || 0))), u = h || function(t) {
                    return Math.max(parseFloat(t.naturalHeight || 0), parseFloat(t.height && t.height.baseVal && t.height.baseVal.value || 0), parseFloat(t.offsetHeight || 0), parseFloat(t.scrollHeight || 0))
                }(o);
                Object.assign(o.style, {
                    width: c ? "".concat(c, "px") : "",
                    height: h ? "".concat(h, "px") : "",
                    maxWidth: "",
                    maxHeight: ""
                }),
                l && Object.assign(a.style, {
                    width: "",
                    height: ""
                });
                var f = this.option("ratio");
                c = d = S(d * f),
                h = u = S(u * f);
                var v = o.getBoundingClientRect()
                  , p = a.getBoundingClientRect()
                  , g = a == n ? p : n.getBoundingClientRect()
                  , m = Math.max(a.offsetWidth, S(p.width))
                  , y = Math.max(a.offsetHeight, S(p.height))
                  , b = window.getComputedStyle(a);
                if (m -= parseFloat(b.paddingLeft) + parseFloat(b.paddingRight),
                y -= parseFloat(b.paddingTop) + parseFloat(b.paddingBottom),
                this.viewport.width = m,
                this.viewport.height = y,
                r) {
                    if (Math.abs(d - v.width) > .1 || Math.abs(u - v.height) > .1) {
                        var x = function(t, e, i, n) {
                            var o = Math.min(i / t || 0, n / e);
                            return {
                                width: t * o || 0,
                                height: e * o || 0
                            }
                        }(d, u, Math.min(d, v.width), Math.min(u, v.height));
                        c = S(x.width),
                        h = S(x.height)
                    }
                    Object.assign(o.style, {
                        width: "".concat(c, "px"),
                        height: "".concat(h, "px"),
                        transform: ""
                    })
                }
                if (l && (Object.assign(a.style, {
                    width: "".concat(c, "px"),
                    height: "".concat(h, "px")
                }),
                this.viewport = i(i({}, this.viewport), {}, {
                    width: c,
                    height: h
                })),
                s && r && "function" != typeof this.options.maxScale) {
                    var w = this.option("maxScale");
                    this.options.maxScale = function() {
                        return this.content.origWidth > 0 && this.content.fitWidth > 0 ? this.content.origWidth / this.content.fitWidth : w
                    }
                }
                this.content = i(i({}, this.content), {}, {
                    origWidth: d,
                    origHeight: u,
                    fitWidth: c,
                    fitHeight: h,
                    width: c,
                    height: h,
                    scale: 1,
                    isZoomable: r
                }),
                this.container = {
                    width: g.width,
                    height: g.height
                },
                !0 !== t && this.trigger("afterUpdate")
            }
        }, {
            key: "zoomIn",
            value: function(t) {
                this.zoomTo(this.content.scale + (t || this.option("step")))
            }
        }, {
            key: "zoomOut",
            value: function(t) {
                this.zoomTo(this.content.scale - (t || this.option("step")))
            }
        }, {
            key: "toggleZoom",
            value: function() {
                var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {}
                  , e = this.option("maxScale")
                  , i = this.option("baseScale")
                  , n = this.content.scale > i + .5 * (e - i) ? i : e;
                this.zoomTo(n, t)
            }
        }, {
            key: "zoomTo",
            value: function() {
                var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : this.option("baseScale")
                  , e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {}
                  , i = e.x
                  , n = void 0 === i ? null : i
                  , o = e.y
                  , a = void 0 === o ? null : o;
                t = Math.max(Math.min(t, this.option("maxScale")), this.option("minScale"));
                var s = S(this.content.scale / (this.content.width / this.content.fitWidth), 1e7);
                null === n && (n = this.content.width * s * .5),
                null === a && (a = this.content.height * s * .5);
                var r = this.getZoomDelta(t, n, a)
                  , l = r.deltaX
                  , c = r.deltaY;
                n = this.content.x - l,
                a = this.content.y - c,
                this.panTo({
                    x: n,
                    y: a,
                    scale: t,
                    friction: this.option("zoomFriction")
                })
            }
        }, {
            key: "getZoomDelta",
            value: function(t) {
                var e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0
                  , i = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 0
                  , n = this.content.fitWidth * this.content.scale
                  , o = this.content.fitHeight * this.content.scale
                  , a = e > 0 && n ? e / n : 0
                  , s = i > 0 && o ? i / o : 0
                  , r = this.content.fitWidth * t
                  , l = this.content.fitHeight * t
                  , c = (r - n) * a
                  , h = (l - o) * s;
                return {
                    deltaX: c,
                    deltaY: h
                }
            }
        }, {
            key: "panTo",
            value: function() {
                var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {}
                  , e = t.x
                  , n = void 0 === e ? this.content.x : e
                  , o = t.y
                  , a = void 0 === o ? this.content.y : o
                  , s = t.scale
                  , r = t.friction
                  , l = void 0 === r ? this.option("friction") : r
                  , c = t.ignoreBounds
                  , h = void 0 !== c && c;
                if (s = s || this.content.scale || 1,
                !h) {
                    var d = this.getBounds(s)
                      , u = d.boundX
                      , f = d.boundY;
                    u && (n = Math.max(Math.min(n, u.to), u.from)),
                    f && (a = Math.max(Math.min(a, f.to), f.from))
                }
                this.friction = l,
                this.transform = i(i({}, this.transform), {}, {
                    x: n,
                    y: a,
                    scale: s
                }),
                l ? (this.state = "panning",
                this.velocity = {
                    x: (1 / this.friction - 1) * (n - this.content.x),
                    y: (1 / this.friction - 1) * (a - this.content.y),
                    scale: (1 / this.friction - 1) * (s - this.content.scale)
                },
                this.startAnimation()) : this.endAnimation()
            }
        }, {
            key: "startAnimation",
            value: function() {
                var t = this;
                this.rAF ? cancelAnimationFrame(this.rAF) : this.trigger("startAnimation"),
                this.rAF = requestAnimationFrame((function() {
                    return t.animate()
                }
                ))
            }
        }, {
            key: "animate",
            value: function() {
                var t = this;
                if (this.setEdgeForce(),
                this.setDragForce(),
                this.velocity.x *= this.friction,
                this.velocity.y *= this.friction,
                this.velocity.scale *= this.friction,
                this.content.x += this.velocity.x,
                this.content.y += this.velocity.y,
                this.content.scale += this.velocity.scale,
                this.isAnimating())
                    this.setTransform();
                else if ("pointerdown" !== this.state)
                    return void this.endAnimation();
                this.rAF = requestAnimationFrame((function() {
                    return t.animate()
                }
                ))
            }
        }, {
            key: "getBounds",
            value: function(t) {
                var e = this.boundX
                  , i = this.boundY;
                if (void 0 !== e && void 0 !== i)
                    return {
                        boundX: e,
                        boundY: i
                    };
                e = {
                    from: 0,
                    to: 0
                },
                i = {
                    from: 0,
                    to: 0
                },
                t = t || this.transform.scale;
                var n = this.content.fitWidth * t
                  , o = this.content.fitHeight * t
                  , a = this.viewport.width
                  , s = this.viewport.height;
                if (n < a) {
                    var r = S(.5 * (a - n));
                    e.from = r,
                    e.to = r
                } else
                    e.from = S(a - n);
                if (o < s) {
                    var l = .5 * (s - o);
                    i.from = l,
                    i.to = l
                } else
                    i.from = S(s - o);
                return {
                    boundX: e,
                    boundY: i
                }
            }
        }, {
            key: "setEdgeForce",
            value: function() {
                if ("decel" === this.state) {
                    var t, e, i, n, o = this.option("bounceForce"), a = this.getBounds(Math.max(this.transform.scale, this.content.scale)), s = a.boundX, r = a.boundY;
                    if (s && (t = this.content.x < s.from,
                    e = this.content.x > s.to),
                    r && (i = this.content.y < r.from,
                    n = this.content.y > r.to),
                    t || e) {
                        var l = ((t ? s.from : s.to) - this.content.x) * o
                          , c = this.content.x + (this.velocity.x + l) / this.friction;
                        c >= s.from && c <= s.to && (l += this.velocity.x),
                        this.velocity.x = l,
                        this.recalculateTransform()
                    }
                    if (i || n) {
                        var h = ((i ? r.from : r.to) - this.content.y) * o
                          , d = this.content.y + (h + this.velocity.y) / this.friction;
                        d >= r.from && d <= r.to && (h += this.velocity.y),
                        this.velocity.y = h,
                        this.recalculateTransform()
                    }
                }
            }
        }, {
            key: "setDragResistance",
            value: function() {
                if ("pointerdown" === this.state) {
                    var t, e, i, n, o = this.getBounds(this.dragPosition.scale), a = o.boundX, s = o.boundY;
                    if (a && (t = this.dragPosition.x < a.from,
                    e = this.dragPosition.x > a.to),
                    s && (i = this.dragPosition.y < s.from,
                    n = this.dragPosition.y > s.to),
                    (t || e) && (!t || !e)) {
                        var r = t ? a.from : a.to
                          , l = r - this.dragPosition.x;
                        this.dragPosition.x = r - .3 * l
                    }
                    if ((i || n) && (!i || !n)) {
                        var c = i ? s.from : s.to
                          , h = c - this.dragPosition.y;
                        this.dragPosition.y = c - .3 * h
                    }
                }
            }
        }, {
            key: "setDragForce",
            value: function() {
                "pointerdown" === this.state && (this.velocity.x = this.dragPosition.x - this.content.x,
                this.velocity.y = this.dragPosition.y - this.content.y,
                this.velocity.scale = this.dragPosition.scale - this.content.scale)
            }
        }, {
            key: "recalculateTransform",
            value: function() {
                this.transform.x = this.content.x + this.velocity.x / (1 / this.friction - 1),
                this.transform.y = this.content.y + this.velocity.y / (1 / this.friction - 1),
                this.transform.scale = this.content.scale + this.velocity.scale / (1 / this.friction - 1)
            }
        }, {
            key: "isAnimating",
            value: function() {
                return !(!this.friction || !(Math.abs(this.velocity.x) > .05 || Math.abs(this.velocity.y) > .05 || Math.abs(this.velocity.scale) > .05))
            }
        }, {
            key: "setTransform",
            value: function(t) {
                var e, n, o, a, s;
                (t ? (e = S(this.transform.x),
                n = S(this.transform.y),
                o = this.transform.scale,
                this.content = i(i({}, this.content), {}, {
                    x: e,
                    y: n,
                    scale: o
                })) : (e = S(this.content.x),
                n = S(this.content.y),
                o = this.content.scale / (this.content.width / this.content.fitWidth),
                this.content = i(i({}, this.content), {}, {
                    x: e,
                    y: n
                })),
                this.trigger("beforeTransform"),
                e = S(this.content.x),
                n = S(this.content.y),
                t && this.option("zoom")) ? (a = S(this.content.fitWidth * o),
                s = S(this.content.fitHeight * o),
                this.content.width = a,
                this.content.height = s,
                this.transform = i(i({}, this.transform), {}, {
                    width: a,
                    height: s,
                    scale: o
                }),
                Object.assign(this.$content.style, {
                    width: "".concat(a, "px"),
                    height: "".concat(s, "px"),
                    maxWidth: "none",
                    maxHeight: "none",
                    transform: "translate3d(".concat(e, "px, ").concat(n, "px, 0) scale(1)")
                })) : this.$content.style.transform = "translate3d(".concat(e, "px, ").concat(n, "px, 0) scale(").concat(o, ")");
                this.trigger("afterTransform")
            }
        }, {
            key: "endAnimation",
            value: function(t) {
                cancelAnimationFrame(this.rAF),
                this.rAF = null,
                this.velocity = {
                    x: 0,
                    y: 0,
                    scale: 0
                },
                this.setTransform(!0),
                this.state = "ready",
                this.handleCursor(),
                !0 !== t && this.trigger("endAnimation")
            }
        }, {
            key: "handleCursor",
            value: function() {
                var t = this.option("draggableClass");
                t && this.option("touch") && (1 == this.option("panOnlyZoomed") && this.content.width <= this.viewport.width && this.content.height <= this.viewport.height && this.transform.scale <= this.option("baseScale") ? this.$container.classList.remove(t) : this.$container.classList.add(t))
            }
        }, {
            key: "detachEvents",
            value: function() {
                this.$content.removeEventListener("load", this.onLoad),
                this.$container.removeEventListener("wheel", this.onWheel, {
                    passive: !1
                }),
                this.$container.removeEventListener("click", this.onClick, {
                    passive: !1
                }),
                this.pointerTracker && (this.pointerTracker.stop(),
                this.pointerTracker = null),
                this.resizeObserver && (this.resizeObserver.disconnect(),
                this.resizeObserver = null)
            }
        }, {
            key: "destroy",
            value: function() {
                "destroy" !== this.state && (this.state = "destroy",
                clearTimeout(this.updateTimer),
                this.updateTimer = null,
                cancelAnimationFrame(this.rAF),
                this.rAF = null,
                this.detachEvents(),
                this.detachPlugins(),
                this.resetDragPosition())
            }
        }]),
        n
    }(O);
    M.version = "4.0.27",
    M.Plugins = {};
    var I = function(t, e) {
        var i = 0;
        return function() {
            var n = (new Date).getTime();
            if (!(n - i < e))
                return i = n,
                t.apply(void 0, arguments)
        }
    }
      , R = function() {
        function t(e) {
            o(this, t),
            this.$container = null,
            this.$prev = null,
            this.$next = null,
            this.carousel = e,
            this.onRefresh = this.onRefresh.bind(this)
        }
        return s(t, [{
            key: "option",
            value: function(t) {
                return this.carousel.option("Navigation.".concat(t))
            }
        }, {
            key: "createButton",
            value: function(t) {
                var e, i = this, n = document.createElement("button");
                n.setAttribute("title", this.carousel.localize("{{".concat(t.toUpperCase(), "}}")));
                var o = this.option("classNames.button") + " " + this.option("classNames.".concat(t));
                return (e = n.classList).add.apply(e, m(o.split(" "))),
                n.setAttribute("tabindex", "0"),
                n.innerHTML = this.carousel.localize(this.option("".concat(t, "Tpl"))),
                n.addEventListener("click", (function(e) {
                    e.preventDefault(),
                    e.stopPropagation(),
                    i.carousel["slide".concat("next" === t ? "Next" : "Prev")]()
                }
                )),
                n
            }
        }, {
            key: "build",
            value: function() {
                var t;
                this.$container || (this.$container = document.createElement("div"),
                (t = this.$container.classList).add.apply(t, m(this.option("classNames.main").split(" "))),
                this.carousel.$container.appendChild(this.$container));
                this.$next || (this.$next = this.createButton("next"),
                this.$container.appendChild(this.$next)),
                this.$prev || (this.$prev = this.createButton("prev"),
                this.$container.appendChild(this.$prev))
            }
        }, {
            key: "onRefresh",
            value: function() {
                var t = this.carousel.pages.length;
                t <= 1 || t > 1 && this.carousel.elemDimWidth < this.carousel.wrapDimWidth && !Number.isInteger(this.carousel.option("slidesPerPage")) ? this.cleanup() : (this.build(),
                this.$prev.removeAttribute("disabled"),
                this.$next.removeAttribute("disabled"),
                this.carousel.option("infiniteX", this.carousel.option("infinite")) || (this.carousel.page <= 0 && this.$prev.setAttribute("disabled", ""),
                this.carousel.page >= t - 1 && this.$next.setAttribute("disabled", "")))
            }
        }, {
            key: "cleanup",
            value: function() {
                this.$prev && this.$prev.remove(),
                this.$prev = null,
                this.$next && this.$next.remove(),
                this.$next = null,
                this.$container && this.$container.remove(),
                this.$container = null
            }
        }, {
            key: "attach",
            value: function() {
                this.carousel.on("refresh change", this.onRefresh)
            }
        }, {
            key: "detach",
            value: function() {
                this.carousel.off("refresh change", this.onRefresh),
                this.cleanup()
            }
        }]),
        t
    }();
    R.defaults = {
        prevTpl: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" tabindex="-1"><path d="M15 3l-9 9 9 9"/></svg>',
        nextTpl: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" tabindex="-1"><path d="M9 3l9 9-9 9"/></svg>',
        classNames: {
            main: "carousel__nav",
            button: "carousel__button",
            next: "is-next",
            prev: "is-prev"
        }
    };
    var F = function() {
        function t(e) {
            o(this, t),
            this.carousel = e,
            this.$list = null,
            this.events = {
                change: this.onChange.bind(this),
                refresh: this.onRefresh.bind(this)
            }
        }
        return s(t, [{
            key: "buildList",
            value: function() {
                var t = this;
                if (!(this.carousel.pages.length < this.carousel.option("Dots.minSlideCount"))) {
                    var e = document.createElement("ol");
                    return e.classList.add("carousel__dots"),
                    e.addEventListener("click", (function(e) {
                        if ("page"in e.target.dataset) {
                            e.preventDefault(),
                            e.stopPropagation();
                            var i = parseInt(e.target.dataset.page, 10)
                              , n = t.carousel;
                            i !== n.page && (n.pages.length < 3 && n.option("infinite") ? n[0 == i ? "slidePrev" : "slideNext"]() : n.slideTo(i))
                        }
                    }
                    )),
                    this.$list = e,
                    this.carousel.$container.appendChild(e),
                    this.carousel.$container.classList.add("has-dots"),
                    e
                }
            }
        }, {
            key: "removeList",
            value: function() {
                this.$list && (this.$list.parentNode.removeChild(this.$list),
                this.$list = null),
                this.carousel.$container.classList.remove("has-dots")
            }
        }, {
            key: "rebuildDots",
            value: function() {
                var t = this
                  , e = this.$list
                  , i = !!e
                  , n = this.carousel.pages.length;
                if (n < 2)
                    i && this.removeList();
                else {
                    i || (e = this.buildList());
                    var o = this.$list.children.length;
                    if (o > n)
                        for (var a = n; a < o; a++)
                            this.$list.removeChild(this.$list.lastChild);
                    else {
                        for (var s = function(e) {
                            var i = document.createElement("li");
                            i.classList.add("carousel__dot"),
                            i.dataset.page = e,
                            i.setAttribute("role", "button"),
                            i.setAttribute("tabindex", "0"),
                            i.setAttribute("title", t.carousel.localize("{{GOTO}}", [["%d", e + 1]])),
                            i.addEventListener("keydown", (function(t) {
                                var e, n = t.code;
                                "Enter" === n || "NumpadEnter" === n ? e = i : "ArrowRight" === n ? e = i.nextSibling : "ArrowLeft" === n && (e = i.previousSibling),
                                e && e.click()
                            }
                            )),
                            t.$list.appendChild(i)
                        }, r = o; r < n; r++)
                            s(r);
                        this.setActiveDot()
                    }
                }
            }
        }, {
            key: "setActiveDot",
            value: function() {
                if (this.$list) {
                    this.$list.childNodes.forEach((function(t) {
                        t.classList.remove("is-selected")
                    }
                    ));
                    var t = this.$list.childNodes[this.carousel.page];
                    t && t.classList.add("is-selected")
                }
            }
        }, {
            key: "onChange",
            value: function() {
                this.setActiveDot()
            }
        }, {
            key: "onRefresh",
            value: function() {
                this.rebuildDots()
            }
        }, {
            key: "attach",
            value: function() {
                this.carousel.on(this.events)
            }
        }, {
            key: "detach",
            value: function() {
                this.removeList(),
                this.carousel.off(this.events),
                this.carousel = null
            }
        }]),
        t
    }()
      , N = function() {
        function t(e) {
            o(this, t),
            this.carousel = e,
            this.selectedIndex = null,
            this.friction = 0,
            this.onNavReady = this.onNavReady.bind(this),
            this.onNavClick = this.onNavClick.bind(this),
            this.onNavCreateSlide = this.onNavCreateSlide.bind(this),
            this.onTargetChange = this.onTargetChange.bind(this)
        }
        return s(t, [{
            key: "addAsTargetFor",
            value: function(t) {
                this.target = this.carousel,
                this.nav = t,
                this.attachEvents()
            }
        }, {
            key: "addAsNavFor",
            value: function(t) {
                this.target = t,
                this.nav = this.carousel,
                this.attachEvents()
            }
        }, {
            key: "attachEvents",
            value: function() {
                this.nav.options.initialSlide = this.target.options.initialPage,
                this.nav.on("ready", this.onNavReady),
                this.nav.on("createSlide", this.onNavCreateSlide),
                this.nav.on("Panzoom.click", this.onNavClick),
                this.target.on("change", this.onTargetChange),
                this.target.on("Panzoom.afterUpdate", this.onTargetChange)
            }
        }, {
            key: "onNavReady",
            value: function() {
                this.onTargetChange(!0)
            }
        }, {
            key: "onNavClick",
            value: function(t, e, i) {
                var n = i.target.closest(".carousel__slide");
                if (n) {
                    i.stopPropagation();
                    var o = parseInt(n.dataset.index, 10)
                      , a = this.target.findPageForSlide(o);
                    this.target.page !== a && this.target.slideTo(a, {
                        friction: this.friction
                    }),
                    this.markSelectedSlide(o)
                }
            }
        }, {
            key: "onNavCreateSlide",
            value: function(t, e) {
                e.index === this.selectedIndex && this.markSelectedSlide(e.index)
            }
        }, {
            key: "onTargetChange",
            value: function() {
                var t = this.target.pages[this.target.page].indexes[0]
                  , e = this.nav.findPageForSlide(t);
                this.nav.slideTo(e),
                this.markSelectedSlide(t)
            }
        }, {
            key: "markSelectedSlide",
            value: function(t) {
                this.selectedIndex = t,
                m(this.nav.slides).filter((function(t) {
                    return t.$el && t.$el.classList.remove("is-nav-selected")
                }
                ));
                var e = this.nav.slides[t];
                e && e.$el && e.$el.classList.add("is-nav-selected")
            }
        }, {
            key: "attach",
            value: function(t) {
                var e = t.options.Sync;
                (e.target || e.nav) && (e.target ? this.addAsNavFor(e.target) : e.nav && this.addAsTargetFor(e.nav),
                this.friction = e.friction)
            }
        }, {
            key: "detach",
            value: function() {
                this.nav && (this.nav.off("ready", this.onNavReady),
                this.nav.off("Panzoom.click", this.onNavClick),
                this.nav.off("createSlide", this.onNavCreateSlide)),
                this.target && (this.target.off("Panzoom.afterUpdate", this.onTargetChange),
                this.target.off("change", this.onTargetChange))
            }
        }]),
        t
    }();
    N.defaults = {
        friction: .92
    };
    var D = {
        Navigation: R,
        Dots: F,
        Sync: N
    }
      , B = {
        slides: [],
        preload: 0,
        slidesPerPage: "auto",
        initialPage: null,
        initialSlide: null,
        friction: .92,
        center: !0,
        infinite: !0,
        fill: !0,
        dragFree: !1,
        prefix: "",
        classNames: {
            viewport: "carousel__viewport",
            track: "carousel__track",
            slide: "carousel__slide",
            slideSelected: "is-selected"
        },
        l10n: {
            NEXT: "Next slide",
            PREV: "Previous slide",
            GOTO: "Go to slide #%d"
        }
    }
      , H = function(t) {
        l(n, t);
        var e = f(n);
        function n(t) {
            var i, a = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
            if (o(this, n),
            a = k(!0, {}, B, a),
            (i = e.call(this, a)).state = "init",
            i.$container = t,
            !(i.$container instanceof HTMLElement))
                throw new Error("No root element provided");
            return i.slideNext = I(i.slideNext.bind(d(i)), 250),
            i.slidePrev = I(i.slidePrev.bind(d(i)), 250),
            i.init(),
            t.__Carousel = d(i),
            i
        }
        return s(n, [{
            key: "init",
            value: function() {
                this.pages = [],
                this.page = this.pageIndex = null,
                this.prevPage = this.prevPageIndex = null,
                this.attachPlugins(n.Plugins),
                this.trigger("init"),
                this.initLayout(),
                this.initSlides(),
                this.updateMetrics(),
                this.$track && this.pages.length && (this.$track.style.transform = "translate3d(".concat(-1 * this.pages[this.page].left, "px, 0px, 0) scale(1)")),
                this.manageSlideVisiblity(),
                this.initPanzoom(),
                this.state = "ready",
                this.trigger("ready")
            }
        }, {
            key: "initLayout",
            value: function() {
                var t, e, i, n, o = this.option("prefix"), a = this.option("classNames");
                (this.$viewport = this.option("viewport") || this.$container.querySelector(".".concat(o).concat(a.viewport)),
                this.$viewport) || (this.$viewport = document.createElement("div"),
                (t = this.$viewport.classList).add.apply(t, m((o + a.viewport).split(" "))),
                (e = this.$viewport).append.apply(e, m(this.$container.childNodes)),
                this.$container.appendChild(this.$viewport));
                (this.$track = this.option("track") || this.$container.querySelector(".".concat(o).concat(a.track)),
                this.$track) || (this.$track = document.createElement("div"),
                (i = this.$track.classList).add.apply(i, m((o + a.track).split(" "))),
                (n = this.$track).append.apply(n, m(this.$viewport.childNodes)),
                this.$viewport.appendChild(this.$track))
            }
        }, {
            key: "initSlides",
            value: function() {
                var t = this;
                this.slides = [],
                this.$viewport.querySelectorAll(".".concat(this.option("prefix")).concat(this.option("classNames.slide"))).forEach((function(e) {
                    var i = {
                        $el: e,
                        isDom: !0
                    };
                    t.slides.push(i),
                    t.trigger("createSlide", i, t.slides.length)
                }
                )),
                Array.isArray(this.options.slides) && (this.slides = k(!0, m(this.slides), this.options.slides))
            }
        }, {
            key: "updateMetrics",
            value: function() {
                var t, e = this, n = 0, o = [];
                this.slides.forEach((function(i, a) {
                    var s = i.$el
                      , r = i.isDom || !t ? e.getSlideMetrics(s) : t;
                    i.index = a,
                    i.width = r,
                    i.left = n,
                    t = r,
                    n += r,
                    o.push(a)
                }
                ));
                var a = Math.max(this.$track.offsetWidth, S(this.$track.getBoundingClientRect().width))
                  , s = getComputedStyle(this.$track);
                a -= parseFloat(s.paddingLeft) + parseFloat(s.paddingRight),
                this.contentWidth = n,
                this.viewportWidth = a;
                var r = []
                  , l = this.option("slidesPerPage");
                if (Number.isInteger(l) && n > a)
                    for (var c = 0; c < this.slides.length; c += l)
                        r.push({
                            indexes: o.slice(c, c + l),
                            slides: this.slides.slice(c, c + l)
                        });
                else
                    for (var h = 0, d = 0, u = 0; u < this.slides.length; u += 1) {
                        var f = this.slides[u];
                        (!r.length || d + f.width > a) && (r.push({
                            indexes: [],
                            slides: []
                        }),
                        h = r.length - 1,
                        d = 0),
                        d += f.width,
                        r[h].indexes.push(u),
                        r[h].slides.push(f)
                    }
                var v = this.option("center")
                  , p = this.option("fill");
                r.forEach((function(t, i) {
                    t.index = i,
                    t.width = t.slides.reduce((function(t, e) {
                        return t + e.width
                    }
                    ), 0),
                    t.left = t.slides[0].left,
                    v && (t.left += .5 * (a - t.width) * -1),
                    p && !e.option("infiniteX", e.option("infinite")) && n > a && (t.left = Math.max(t.left, 0),
                    t.left = Math.min(t.left, n - a))
                }
                ));
                var g, y = [];
                r.forEach((function(t) {
                    var e = i({}, t);
                    g && e.left === g.left ? (g.width += e.width,
                    g.slides = [].concat(m(g.slides), m(e.slides)),
                    g.indexes = [].concat(m(g.indexes), m(e.indexes))) : (e.index = y.length,
                    g = e,
                    y.push(e))
                }
                )),
                this.pages = y;
                var b = this.page;
                if (null === b) {
                    var x = this.option("initialSlide");
                    b = null !== x ? this.findPageForSlide(x) : parseInt(this.option("initialPage", 0), 10) || 0,
                    y[b] || (b = y.length && b > y.length ? y[y.length - 1].index : 0),
                    this.page = b,
                    this.pageIndex = b
                }
                this.updatePanzoom(),
                this.trigger("refresh")
            }
        }, {
            key: "getSlideMetrics",
            value: function(t) {
                if (!t) {
                    var e, i, n = this.slides[0];
                    if ((t = document.createElement("div")).dataset.isTestEl = 1,
                    t.style.visibility = "hidden",
                    (e = t.classList).add.apply(e, m((this.option("prefix") + this.option("classNames.slide")).split(" "))),
                    n.customClass)
                        (i = t.classList).add.apply(i, m(n.customClass.split(" ")));
                    this.$track.prepend(t)
                }
                var o = Math.max(t.offsetWidth, S(t.getBoundingClientRect().width))
                  , a = t.currentStyle || window.getComputedStyle(t);
                return o = o + (parseFloat(a.marginLeft) || 0) + (parseFloat(a.marginRight) || 0),
                t.dataset.isTestEl && t.remove(),
                o
            }
        }, {
            key: "findPageForSlide",
            value: function(t) {
                t = parseInt(t, 10) || 0;
                var e = this.pages.find((function(e) {
                    return e.indexes.indexOf(t) > -1
                }
                ));
                return e ? e.index : null
            }
        }, {
            key: "slideNext",
            value: function() {
                this.slideTo(this.pageIndex + 1)
            }
        }, {
            key: "slidePrev",
            value: function() {
                this.slideTo(this.pageIndex - 1)
            }
        }, {
            key: "slideTo",
            value: function(t) {
                var e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {}
                  , i = e.x
                  , n = void 0 === i ? -1 * this.setPage(t, !0) : i
                  , o = e.y
                  , a = void 0 === o ? 0 : o
                  , s = e.friction
                  , r = void 0 === s ? this.option("friction") : s;
                this.Panzoom.content.x === n && !this.Panzoom.velocity.x && r || (this.Panzoom.panTo({
                    x: n,
                    y: a,
                    friction: r,
                    ignoreBounds: !0
                }),
                "ready" === this.state && "ready" === this.Panzoom.state && this.trigger("settle"))
            }
        }, {
            key: "initPanzoom",
            value: function() {
                var t = this;
                this.Panzoom && this.Panzoom.destroy();
                var e = k(!0, {}, {
                    content: this.$track,
                    wrapInner: !1,
                    resizeParent: !1,
                    zoom: !1,
                    click: !1,
                    lockAxis: "x",
                    x: this.pages.length ? -1 * this.pages[this.page].left : 0,
                    centerOnStart: !1,
                    textSelection: function() {
                        return t.option("textSelection", !1)
                    },
                    panOnlyZoomed: function() {
                        return this.content.width <= this.viewport.width
                    }
                }, this.option("Panzoom"));
                this.Panzoom = new M(this.$container,e),
                this.Panzoom.on({
                    "*": function(e) {
                        for (var i = arguments.length, n = new Array(i > 1 ? i - 1 : 0), o = 1; o < i; o++)
                            n[o - 1] = arguments[o];
                        return t.trigger.apply(t, ["Panzoom.".concat(e)].concat(n))
                    },
                    afterUpdate: function() {
                        t.updatePage()
                    },
                    beforeTransform: this.onBeforeTransform.bind(this),
                    touchEnd: this.onTouchEnd.bind(this),
                    endAnimation: function() {
                        t.trigger("settle")
                    }
                }),
                this.updateMetrics(),
                this.manageSlideVisiblity()
            }
        }, {
            key: "updatePanzoom",
            value: function() {
                this.Panzoom && (this.Panzoom.content = i(i({}, this.Panzoom.content), {}, {
                    fitWidth: this.contentWidth,
                    origWidth: this.contentWidth,
                    width: this.contentWidth
                }),
                this.pages.length > 1 && this.option("infiniteX", this.option("infinite")) ? this.Panzoom.boundX = null : this.pages.length && (this.Panzoom.boundX = {
                    from: -1 * this.pages[this.pages.length - 1].left,
                    to: -1 * this.pages[0].left
                }),
                this.option("infiniteY", this.option("infinite")) ? this.Panzoom.boundY = null : this.Panzoom.boundY = {
                    from: 0,
                    to: 0
                },
                this.Panzoom.handleCursor())
            }
        }, {
            key: "manageSlideVisiblity",
            value: function() {
                var t = this
                  , e = this.contentWidth
                  , i = this.viewportWidth
                  , n = this.Panzoom ? -1 * this.Panzoom.content.x : this.pages.length ? this.pages[this.page].left : 0
                  , o = this.option("preload")
                  , a = this.option("infiniteX", this.option("infinite"))
                  , s = parseFloat(getComputedStyle(this.$viewport, null).getPropertyValue("padding-left"))
                  , r = parseFloat(getComputedStyle(this.$viewport, null).getPropertyValue("padding-right"));
                this.slides.forEach((function(l) {
                    var c, h, d = 0;
                    c = n - s,
                    h = n + i + r,
                    c -= o * (i + s + r),
                    h += o * (i + s + r);
                    var u = l.left + l.width > c && l.left < h;
                    c = n + e - s,
                    h = n + e + i + r,
                    c -= o * (i + s + r);
                    var f = a && l.left + l.width > c && l.left < h;
                    c = n - e - s,
                    h = n - e + i + r,
                    c -= o * (i + s + r);
                    var v = a && l.left + l.width > c && l.left < h;
                    f || u || v ? (t.createSlideEl(l),
                    u && (d = 0),
                    f && (d = -1),
                    v && (d = 1),
                    l.left + l.width > n && l.left <= n + i + r && (d = 0)) : t.removeSlideEl(l),
                    l.hasDiff = d
                }
                ));
                var l = 0
                  , c = 0;
                this.slides.forEach((function(t, i) {
                    var n = 0;
                    t.$el ? (i !== l || t.hasDiff ? n = c + t.hasDiff * e : c = 0,
                    t.$el.style.left = Math.abs(n) > .1 ? "".concat(c + t.hasDiff * e, "px") : "",
                    l++) : c += t.width
                }
                )),
                this.markSelectedSlides()
            }
        }, {
            key: "createSlideEl",
            value: function(t) {
                var e;
                if (t) {
                    if (!t.$el) {
                        var i, n = document.createElement("div");
                        if (n.dataset.index = t.index,
                        (e = n.classList).add.apply(e, m((this.option("prefix") + this.option("classNames.slide")).split(" "))),
                        t.customClass)
                            (i = n.classList).add.apply(i, m(t.customClass.split(" ")));
                        t.html && (n.innerHTML = t.html);
                        var o = [];
                        this.slides.forEach((function(t, e) {
                            t.$el && o.push(e)
                        }
                        ));
                        var a = t.index
                          , s = null;
                        if (o.length) {
                            var r = o.reduce((function(t, e) {
                                return Math.abs(e - a) < Math.abs(t - a) ? e : t
                            }
                            ));
                            s = this.slides[r]
                        }
                        return this.$track.insertBefore(n, s && s.$el ? s.index < t.index ? s.$el.nextSibling : s.$el : null),
                        t.$el = n,
                        this.trigger("createSlide", t, a),
                        t
                    }
                    var l, c = t.$el.dataset.index;
                    c && parseInt(c, 10) === t.index || (t.$el.dataset.index = t.index,
                    t.$el.querySelectorAll("[data-lazy-srcset]").forEach((function(t) {
                        t.srcset = t.dataset.lazySrcset
                    }
                    )),
                    t.$el.querySelectorAll("[data-lazy-src]").forEach((function(t) {
                        var e = t.dataset.lazySrc;
                        t instanceof HTMLImageElement ? t.src = e : t.style.backgroundImage = "url('".concat(e, "')")
                    }
                    )),
                    (l = t.$el.dataset.lazySrc) && (t.$el.style.backgroundImage = "url('".concat(l, "')")),
                    t.state = "ready")
                }
            }
        }, {
            key: "removeSlideEl",
            value: function(t) {
                t.$el && !t.isDom && (this.trigger("removeSlide", t),
                t.$el.remove(),
                t.$el = null)
            }
        }, {
            key: "markSelectedSlides",
            value: function() {
                var t = this
                  , e = this.option("classNames.slideSelected")
                  , i = "aria-hidden";
                this.slides.forEach((function(n, o) {
                    var a = n.$el;
                    if (a) {
                        var s = t.pages[t.page];
                        s && s.indexes && s.indexes.indexOf(o) > -1 ? (e && !a.classList.contains(e) && (a.classList.add(e),
                        t.trigger("selectSlide", n)),
                        a.removeAttribute(i)) : (e && a.classList.contains(e) && (a.classList.remove(e),
                        t.trigger("unselectSlide", n)),
                        a.setAttribute(i, !0))
                    }
                }
                ))
            }
        }, {
            key: "updatePage",
            value: function() {
                this.updateMetrics(),
                this.slideTo(this.page, {
                    friction: 0
                })
            }
        }, {
            key: "onBeforeTransform",
            value: function() {
                this.option("infiniteX", this.option("infinite")) && this.manageInfiniteTrack(),
                this.manageSlideVisiblity()
            }
        }, {
            key: "manageInfiniteTrack",
            value: function() {
                var t = this.contentWidth
                  , e = this.viewportWidth;
                if (!(!this.option("infiniteX", this.option("infinite")) || this.pages.length < 2 || t < e)) {
                    var i = this.Panzoom
                      , n = !1;
                    return i.content.x < -1 * (t - e) && (i.content.x += t,
                    this.pageIndex = this.pageIndex - this.pages.length,
                    n = !0),
                    i.content.x > e && (i.content.x -= t,
                    this.pageIndex = this.pageIndex + this.pages.length,
                    n = !0),
                    n && "pointerdown" === i.state && i.resetDragPosition(),
                    n
                }
            }
        }, {
            key: "onTouchEnd",
            value: function(t, e) {
                var i = this.option("dragFree");
                if (!i && this.pages.length > 1 && t.dragOffset.time < 350 && Math.abs(t.dragOffset.y) < 1 && Math.abs(t.dragOffset.x) > 5)
                    this[t.dragOffset.x < 0 ? "slideNext" : "slidePrev"]();
                else if (i) {
                    var n = g(this.getPageFromPosition(-1 * t.transform.x), 2)[1];
                    this.setPage(n)
                } else
                    this.slideToClosest()
            }
        }, {
            key: "slideToClosest",
            value: function() {
                var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {}
                  , e = this.getPageFromPosition(-1 * this.Panzoom.content.x)
                  , i = g(e, 2)
                  , n = i[1];
                this.slideTo(n, t)
            }
        }, {
            key: "getPageFromPosition",
            value: function(t) {
                var e = this.pages.length;
                this.option("center") && (t += .5 * this.viewportWidth);
                var i = Math.floor(t / this.contentWidth);
                t -= i * this.contentWidth;
                var n = this.slides.find((function(e) {
                    return e.left <= t && e.left + e.width > t
                }
                ));
                if (n) {
                    var o = this.findPageForSlide(n.index);
                    return [o, o + i * e]
                }
                return [0, 0]
            }
        }, {
            key: "setPage",
            value: function(t, e) {
                var i = 0
                  , n = parseInt(t, 10) || 0
                  , o = this.page
                  , a = this.pageIndex
                  , s = this.pages.length
                  , r = this.contentWidth
                  , l = this.viewportWidth;
                if (t = (n % s + s) % s,
                this.option("infiniteX", this.option("infinite")) && r > l) {
                    var c = Math.floor(n / s) || 0
                      , h = r;
                    if (i = this.pages[t].left + c * h,
                    !0 === e && s > 2) {
                        var d = -1 * this.Panzoom.content.x
                          , u = i - h
                          , f = i + h
                          , v = Math.abs(d - i)
                          , p = Math.abs(d - u)
                          , g = Math.abs(d - f);
                        g < v && g <= p ? (i = f,
                        n += s) : p < v && p < g && (i = u,
                        n -= s)
                    }
                } else
                    t = n = Math.max(0, Math.min(n, s - 1)),
                    i = this.pages.length ? this.pages[t].left : 0;
                return this.page = t,
                this.pageIndex = n,
                null !== o && t !== o && (this.prevPage = o,
                this.prevPageIndex = a,
                this.trigger("change", t, o)),
                i
            }
        }, {
            key: "destroy",
            value: function() {
                var t = this;
                this.state = "destroy",
                this.slides.forEach((function(e) {
                    t.removeSlideEl(e)
                }
                )),
                this.slides = [],
                this.Panzoom.destroy(),
                this.detachPlugins()
            }
        }]),
        n
    }(O);
    H.version = "4.0.27",
    H.Plugins = D;
    var W = !("undefined" == typeof window || !window.document || !window.document.createElement)
      , j = null
      , X = ["a[href]", "area[href]", 'input:not([disabled]):not([type="hidden"]):not([aria-hidden])', "select:not([disabled]):not([aria-hidden])", "textarea:not([disabled]):not([aria-hidden])", "button:not([disabled]):not([aria-hidden])", "iframe", "object", "embed", "video", "audio", "[contenteditable]", '[tabindex]:not([tabindex^="-"]):not([disabled]):not([aria-hidden])']
      , q = function(t) {
        if (t && W) {
            null === j && document.createElement("div").focus({
                get preventScroll() {
                    return j = !0,
                    !1
                }
            });
            try {
                if (t.setActive)
                    t.setActive();
                else if (j)
                    t.focus({
                        preventScroll: !0
                    });
                else {
                    var e = window.pageXOffset || document.body.scrollTop
                      , i = window.pageYOffset || document.body.scrollLeft;
                    t.focus(),
                    document.body.scrollTo({
                        top: e,
                        left: i,
                        behavior: "auto"
                    })
                }
            } catch (t) {}
        }
    }
      , U = function() {
        function t(e) {
            o(this, t),
            this.fancybox = e,
            this.viewport = null,
            this.pendingUpdate = null;
            for (var i = 0, n = ["onReady", "onResize", "onTouchstart", "onTouchmove"]; i < n.length; i++) {
                var a = n[i];
                this[a] = this[a].bind(this)
            }
        }
        return s(t, [{
            key: "onReady",
            value: function() {
                var t = window.visualViewport;
                t && (this.viewport = t,
                this.startY = 0,
                t.addEventListener("resize", this.onResize),
                this.updateViewport()),
                window.addEventListener("touchstart", this.onTouchstart, {
                    passive: !1
                }),
                window.addEventListener("touchmove", this.onTouchmove, {
                    passive: !1
                }),
                window.addEventListener("wheel", this.onWheel, {
                    passive: !1
                })
            }
        }, {
            key: "onResize",
            value: function() {
                this.updateViewport()
            }
        }, {
            key: "updateViewport",
            value: function() {
                var t = this.fancybox
                  , e = this.viewport
                  , i = e.scale || 1
                  , n = t.$container;
                if (n) {
                    var o = ""
                      , a = ""
                      , s = "";
                    i - 1 > .1 && (o = "".concat(e.width * i, "px"),
                    a = "".concat(e.height * i, "px"),
                    s = "translate3d(".concat(e.offsetLeft, "px, ").concat(e.offsetTop, "px, 0) scale(").concat(1 / i, ")")),
                    n.style.width = o,
                    n.style.height = a,
                    n.style.transform = s
                }
            }
        }, {
            key: "onTouchstart",
            value: function(t) {
                this.startY = t.touches ? t.touches[0].screenY : t.screenY
            }
        }, {
            key: "onTouchmove",
            value: function(t) {
                var e = this.startY
                  , i = window.innerWidth / window.document.documentElement.clientWidth;
                if (t.cancelable && !(t.touches.length > 1 || 1 !== i)) {
                    var n = C(t.composedPath()[0]);
                    if (n) {
                        var o = window.getComputedStyle(n)
                          , a = parseInt(o.getPropertyValue("height"), 10)
                          , s = t.touches ? t.touches[0].screenY : t.screenY
                          , r = e <= s && 0 === n.scrollTop
                          , l = e >= s && n.scrollHeight - n.scrollTop === a;
                        (r || l) && t.preventDefault()
                    } else
                        t.preventDefault()
                }
            }
        }, {
            key: "onWheel",
            value: function(t) {
                C(t.composedPath()[0]) || t.preventDefault()
            }
        }, {
            key: "cleanup",
            value: function() {
                this.pendingUpdate && (cancelAnimationFrame(this.pendingUpdate),
                this.pendingUpdate = null);
                var t = this.viewport;
                t && (t.removeEventListener("resize", this.onResize),
                this.viewport = null),
                window.removeEventListener("touchstart", this.onTouchstart, !1),
                window.removeEventListener("touchmove", this.onTouchmove, !1),
                window.removeEventListener("wheel", this.onWheel, {
                    passive: !1
                })
            }
        }, {
            key: "attach",
            value: function() {
                this.fancybox.on("initLayout", this.onReady)
            }
        }, {
            key: "detach",
            value: function() {
                this.fancybox.off("initLayout", this.onReady),
                this.cleanup()
            }
        }]),
        t
    }()
      , Y = function() {
        function t(e) {
            o(this, t),
            this.fancybox = e,
            this.$container = null,
            this.state = "init";
            for (var i = 0, n = ["onPrepare", "onClosing", "onKeydown"]; i < n.length; i++) {
                var a = n[i];
                this[a] = this[a].bind(this)
            }
            this.events = {
                prepare: this.onPrepare,
                closing: this.onClosing,
                keydown: this.onKeydown
            }
        }
        return s(t, [{
            key: "onPrepare",
            value: function() {
                this.getSlides().length < this.fancybox.option("Thumbs.minSlideCount") ? this.state = "disabled" : !0 === this.fancybox.option("Thumbs.autoStart") && this.fancybox.Carousel.Panzoom.content.height >= this.fancybox.option("Thumbs.minScreenHeight") && this.build()
            }
        }, {
            key: "onClosing",
            value: function() {
                this.Carousel && this.Carousel.Panzoom.detachEvents()
            }
        }, {
            key: "onKeydown",
            value: function(t, e) {
                e === t.option("Thumbs.key") && this.toggle()
            }
        }, {
            key: "build",
            value: function() {
                var t = this;
                if (!this.$container) {
                    var e = document.createElement("div");
                    e.classList.add("fancybox__thumbs"),
                    this.fancybox.$carousel.parentNode.insertBefore(e, this.fancybox.$carousel.nextSibling),
                    this.Carousel = new H(e,k(!0, {
                        Dots: !1,
                        Navigation: !1,
                        Sync: {
                            friction: 0
                        },
                        infinite: !1,
                        center: !0,
                        fill: !0,
                        dragFree: !0,
                        slidesPerPage: 1,
                        preload: 1
                    }, this.fancybox.option("Thumbs.Carousel"), {
                        Sync: {
                            target: this.fancybox.Carousel
                        },
                        slides: this.getSlides()
                    })),
                    this.Carousel.Panzoom.on("wheel", (function(e, i) {
                        i.preventDefault(),
                        t.fancybox[i.deltaY < 0 ? "prev" : "next"]()
                    }
                    )),
                    this.$container = e,
                    this.state = "visible"
                }
            }
        }, {
            key: "getSlides",
            value: function() {
                var t, e = [], i = x(this.fancybox.items);
                try {
                    for (i.s(); !(t = i.n()).done; ) {
                        var n = t.value
                          , o = n.thumb;
                        o && e.push({
                            html: '<div class="fancybox__thumb" style="background-image:url(\''.concat(o, "')\"></div>"),
                            customClass: "has-thumb has-".concat(n.type || "image")
                        })
                    }
                } catch (t) {
                    i.e(t)
                } finally {
                    i.f()
                }
                return e
            }
        }, {
            key: "toggle",
            value: function() {
                "visible" === this.state ? this.hide() : "hidden" === this.state ? this.show() : this.build()
            }
        }, {
            key: "show",
            value: function() {
                "hidden" === this.state && (this.$container.style.display = "",
                this.Carousel.Panzoom.attachEvents(),
                this.state = "visible")
            }
        }, {
            key: "hide",
            value: function() {
                "visible" === this.state && (this.Carousel.Panzoom.detachEvents(),
                this.$container.style.display = "none",
                this.state = "hidden")
            }
        }, {
            key: "cleanup",
            value: function() {
                this.Carousel && (this.Carousel.destroy(),
                this.Carousel = null),
                this.$container && (this.$container.remove(),
                this.$container = null),
                this.state = "init"
            }
        }, {
            key: "attach",
            value: function() {
                this.fancybox.on(this.events)
            }
        }, {
            key: "detach",
            value: function() {
                this.fancybox.off(this.events),
                this.cleanup()
            }
        }]),
        t
    }();
    Y.defaults = {
        minSlideCount: 2,
        minScreenHeight: 500,
        autoStart: !0,
        key: "t",
        Carousel: {}
    };
    var V = function(t, e) {
        for (var i = new URL(t), n = new URLSearchParams(i.search), o = new URLSearchParams, a = 0, s = [].concat(m(n), m(Object.entries(e))); a < s.length; a++) {
            var r = g(s[a], 2)
              , l = r[0]
              , c = r[1];
            "t" === l ? o.set("start", parseInt(c)) : o.set(l, c)
        }
        o = o.toString();
        var h = t.match(/#t=((.*)?\d+s)/);
        return h && (o += "#t=".concat(h[1])),
        o
    }
      , Z = {
        video: {
            autoplay: !0,
            ratio: 16 / 9
        },
        youtube: {
            autohide: 1,
            fs: 1,
            rel: 0,
            hd: 1,
            wmode: "transparent",
            enablejsapi: 1,
            html5: 1
        },
        vimeo: {
            hd: 1,
            show_title: 1,
            show_byline: 1,
            show_portrait: 0,
            fullscreen: 1
        },
        html5video: {
            tpl: '<video class="fancybox__html5video" playsinline controls controlsList="nodownload" poster="{{poster}}">\n  <source src="{{src}}" type="{{format}}" />Sorry, your browser doesn\'t support embedded videos.</video>',
            format: ""
        }
    }
      , G = function() {
        function t(e) {
            o(this, t),
            this.fancybox = e;
            for (var i = 0, n = ["onInit", "onReady", "onCreateSlide", "onRemoveSlide", "onSelectSlide", "onUnselectSlide", "onRefresh", "onMessage"]; i < n.length; i++) {
                var a = n[i];
                this[a] = this[a].bind(this)
            }
            this.events = {
                init: this.onInit,
                ready: this.onReady,
                "Carousel.createSlide": this.onCreateSlide,
                "Carousel.removeSlide": this.onRemoveSlide,
                "Carousel.selectSlide": this.onSelectSlide,
                "Carousel.unselectSlide": this.onUnselectSlide,
                "Carousel.refresh": this.onRefresh
            }
        }
        return s(t, [{
            key: "onInit",
            value: function() {
                var t, e = x(this.fancybox.items);
                try {
                    for (e.s(); !(t = e.n()).done; ) {
                        var i = t.value;
                        this.processType(i)
                    }
                } catch (t) {
                    e.e(t)
                } finally {
                    e.f()
                }
            }
        }, {
            key: "processType",
            value: function(t) {
                if (t.html)
                    return t.src = t.html,
                    t.type = "html",
                    void delete t.html;
                var e = t.src || ""
                  , i = t.type || this.fancybox.options.type
                  , n = null;
                if (!e || "string" == typeof e) {
                    if (n = e.match(/(?:youtube\.com|youtu\.be|youtube\-nocookie\.com)\/(?:watch\?(?:.*&)?v=|v\/|u\/|embed\/?)?(videoseries\?list=(?:.*)|[\w-]{11}|\?listType=(?:.*)&list=(?:.*))(?:.*)/i)) {
                        var o = V(e, this.fancybox.option("Html.youtube"))
                          , a = encodeURIComponent(n[1]);
                        t.videoId = a,
                        t.src = "https://www.youtube-nocookie.com/embed/".concat(a, "?").concat(o),
                        t.thumb = t.thumb || "https://i.ytimg.com/vi/".concat(a, "/mqdefault.jpg"),
                        t.vendor = "youtube",
                        i = "video"
                    } else if (n = e.match(/^.+vimeo.com\/(?:\/)?([\d]+)(.*)?/)) {
                        var s = V(e, this.fancybox.option("Html.vimeo"))
                          , r = encodeURIComponent(n[1]);
                        t.videoId = r,
                        t.src = "https://player.vimeo.com/video/".concat(r, "?").concat(s),
                        t.vendor = "vimeo",
                        i = "video"
                    } else
                        (n = e.match(/(?:maps\.)?google\.([a-z]{2,3}(?:\.[a-z]{2})?)\/(?:(?:(?:maps\/(?:place\/(?:.*)\/)?\@(.*),(\d+.?\d+?)z))|(?:\?ll=))(.*)?/i)) ? (t.src = "//maps.google.".concat(n[1], "/?ll=").concat((n[2] ? n[2] + "&z=" + Math.floor(n[3]) + (n[4] ? n[4].replace(/^\//, "&") : "") : n[4] + "").replace(/\?/, "&"), "&output=").concat(n[4] && n[4].indexOf("layer=c") > 0 ? "svembed" : "embed"),
                        i = "map") : (n = e.match(/(?:maps\.)?google\.([a-z]{2,3}(?:\.[a-z]{2})?)\/(?:maps\/search\/)(.*)/i)) && (t.src = "//maps.google.".concat(n[1], "/maps?q=").concat(n[2].replace("query=", "q=").replace("api=1", ""), "&output=embed"),
                        i = "map");
                    i || ("#" === e.charAt(0) ? i = "inline" : (n = e.match(/\.(mp4|mov|ogv|webm)((\?|#).*)?$/i)) ? (i = "html5video",
                    t.format = t.format || "video/" + ("ogv" === n[1] ? "ogg" : n[1])) : e.match(/(^data:image\/[a-z0-9+\/=]*,)|(\.(jp(e|g|eg)|gif|png|bmp|webp|svg|ico)((\?|#).*)?$)/i) ? i = "image" : e.match(/\.(pdf)((\?|#).*)?$/i) && (i = "pdf")),
                    t.type = i || this.fancybox.option("defaultType", "image"),
                    "html5video" !== i && "video" !== i || (t.video = k({}, this.fancybox.option("Html.video"), t.video),
                    t._width && t._height ? t.ratio = parseFloat(t._width) / parseFloat(t._height) : t.ratio = t.ratio || t.video.ratio || Z.video.ratio)
                }
            }
        }, {
            key: "onReady",
            value: function() {
                var t = this;
                this.fancybox.Carousel.slides.forEach((function(e) {
                    e.$el && (t.setContent(e),
                    e.index === t.fancybox.getSlide().index && t.playVideo(e))
                }
                ))
            }
        }, {
            key: "onCreateSlide",
            value: function(t, e, i) {
                "ready" === this.fancybox.state && this.setContent(i)
            }
        }, {
            key: "loadInlineContent",
            value: function(t) {
                var e;
                if (t.src instanceof HTMLElement)
                    e = t.src;
                else if ("string" == typeof t.src) {
                    var i = t.src.split("#", 2)
                      , n = 2 === i.length && "" === i[0] ? i[1] : i[0];
                    e = document.getElementById(n)
                }
                if (e) {
                    if ("clone" === t.type || e.$placeHolder) {
                        var o = (e = e.cloneNode(!0)).getAttribute("id");
                        o = o ? "".concat(o, "--clone") : "clone-".concat(this.fancybox.id, "-").concat(t.index),
                        e.setAttribute("id", o)
                    } else {
                        var a = document.createElement("div");
                        a.classList.add("fancybox-placeholder"),
                        e.parentNode.insertBefore(a, e),
                        e.$placeHolder = a
                    }
                    this.fancybox.setContent(t, e)
                } else
                    this.fancybox.setError(t, "{{ELEMENT_NOT_FOUND}}")
            }
        }, {
            key: "loadAjaxContent",
            value: function(t) {
                var e = this.fancybox
                  , i = new XMLHttpRequest;
                e.showLoading(t),
                i.onreadystatechange = function() {
                    i.readyState === XMLHttpRequest.DONE && "ready" === e.state && (e.hideLoading(t),
                    200 === i.status ? e.setContent(t, i.responseText) : e.setError(t, 404 === i.status ? "{{AJAX_NOT_FOUND}}" : "{{AJAX_FORBIDDEN}}"))
                }
                ;
                var n = t.ajax || null;
                i.open(n ? "POST" : "GET", t.src),
                i.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"),
                i.setRequestHeader("X-Requested-With", "XMLHttpRequest"),
                i.send(n),
                t.xhr = i
            }
        }, {
            key: "loadIframeContent",
            value: function(t) {
                var e = this
                  , i = this.fancybox
                  , n = document.createElement("iframe");
                if (n.className = "fancybox__iframe",
                n.setAttribute("id", "fancybox__iframe_".concat(i.id, "_").concat(t.index)),
                n.setAttribute("allow", "autoplay; fullscreen"),
                n.setAttribute("scrolling", "auto"),
                t.$iframe = n,
                "iframe" !== t.type || !1 === t.preload)
                    return n.setAttribute("src", t.src),
                    this.fancybox.setContent(t, n),
                    void this.resizeIframe(t);
                i.showLoading(t);
                var o = document.createElement("div");
                o.style.visibility = "hidden",
                this.fancybox.setContent(t, o),
                o.appendChild(n),
                n.onerror = function() {
                    i.setError(t, "{{IFRAME_ERROR}}")
                }
                ,
                n.onload = function() {
                    i.hideLoading(t);
                    var o = !1;
                    n.isReady || (n.isReady = !0,
                    o = !0),
                    n.src.length && (n.parentNode.style.visibility = "",
                    e.resizeIframe(t),
                    o && i.revealContent(t))
                }
                ,
                n.setAttribute("src", t.src)
            }
        }, {
            key: "setAspectRatio",
            value: function(t) {
                var e = t.$content
                  , i = t.ratio;
                if (e) {
                    var n = t._width
                      , o = t._height;
                    if (i || n && o) {
                        Object.assign(e.style, {
                            width: n && o ? "100%" : "",
                            height: n && o ? "100%" : "",
                            maxWidth: "",
                            maxHeight: ""
                        });
                        var a = e.offsetWidth
                          , s = e.offsetHeight;
                        if (o = o || s,
                        (n = n || a) > a || o > s) {
                            var r = Math.min(a / n, s / o);
                            n *= r,
                            o *= r
                        }
                        Math.abs(n / o - i) > .01 && (i < n / o ? n = o * i : o = n / i),
                        Object.assign(e.style, {
                            width: "".concat(n, "px"),
                            height: "".concat(o, "px")
                        })
                    }
                }
            }
        }, {
            key: "resizeIframe",
            value: function(t) {
                var e = t.$iframe;
                if (e) {
                    var i = t._width || 0
                      , n = t._height || 0;
                    i && n && (t.autoSize = !1);
                    var o = e.parentNode
                      , a = o && o.style;
                    if (!1 !== t.preload && !1 !== t.autoSize && a)
                        try {
                            var s = window.getComputedStyle(o)
                              , r = parseFloat(s.paddingLeft) + parseFloat(s.paddingRight)
                              , l = parseFloat(s.paddingTop) + parseFloat(s.paddingBottom)
                              , c = e.contentWindow.document
                              , h = c.getElementsByTagName("html")[0]
                              , d = c.body;
                            a.width = "",
                            d.style.overflow = "hidden",
                            i = i || h.scrollWidth + r,
                            a.width = "".concat(i, "px"),
                            d.style.overflow = "",
                            a.flex = "0 0 auto",
                            a.height = "".concat(d.scrollHeight, "px"),
                            n = h.scrollHeight + l
                        } catch (t) {}
                    if (i || n) {
                        var u = {
                            flex: "0 1 auto"
                        };
                        i && (u.width = "".concat(i, "px")),
                        n && (u.height = "".concat(n, "px")),
                        Object.assign(a, u)
                    }
                }
            }
        }, {
            key: "onRefresh",
            value: function(t, e) {
                var i = this;
                e.slides.forEach((function(t) {
                    t.$el && (t.$iframe && i.resizeIframe(t),
                    t.ratio && i.setAspectRatio(t))
                }
                ))
            }
        }, {
            key: "setContent",
            value: function(t) {
                if (t && !t.isDom) {
                    switch (t.type) {
                    case "html":
                        this.fancybox.setContent(t, t.src);
                        break;
                    case "html5video":
                        this.fancybox.setContent(t, this.fancybox.option("Html.html5video.tpl").replace(/\{\{src\}\}/gi, t.src).replace("{{format}}", t.format || t.html5video && t.html5video.format || "").replace("{{poster}}", t.poster || t.thumb || ""));
                        break;
                    case "inline":
                    case "clone":
                        this.loadInlineContent(t);
                        break;
                    case "ajax":
                        this.loadAjaxContent(t);
                        break;
                    case "pdf":
                    case "video":
                    case "map":
                        t.preload = !1;
                    case "iframe":
                        this.loadIframeContent(t)
                    }
                    t.ratio && this.setAspectRatio(t)
                }
            }
        }, {
            key: "onSelectSlide",
            value: function(t, e, i) {
                "ready" === t.state && this.playVideo(i)
            }
        }, {
            key: "playVideo",
            value: function(t) {
                if ("html5video" === t.type && t.video.autoplay)
                    try {
                        var e = t.$el.querySelector("video");
                        if (e) {
                            var i = e.play();
                            void 0 !== i && i.then((function() {}
                            )).catch((function(t) {
                                e.muted = !0,
                                e.play()
                            }
                            ))
                        }
                    } catch (t) {}
                if ("video" === t.type && t.$iframe && t.$iframe.contentWindow) {
                    !function e() {
                        if ("done" === t.state && t.$iframe && t.$iframe.contentWindow) {
                            var i;
                            if (t.$iframe.isReady)
                                return t.video && t.video.autoplay && (i = "youtube" == t.vendor ? {
                                    event: "command",
                                    func: "playVideo"
                                } : {
                                    method: "play",
                                    value: "true"
                                }),
                                void (i && t.$iframe.contentWindow.postMessage(JSON.stringify(i), "*"));
                            "youtube" === t.vendor && (i = {
                                event: "listening",
                                id: t.$iframe.getAttribute("id")
                            },
                            t.$iframe.contentWindow.postMessage(JSON.stringify(i), "*"))
                        }
                        t.poller = setTimeout(e, 250)
                    }()
                }
            }
        }, {
            key: "onUnselectSlide",
            value: function(t, e, i) {
                if ("html5video" !== i.type) {
                    var n = !1;
                    "vimeo" == i.vendor ? n = {
                        method: "pause",
                        value: "true"
                    } : "youtube" === i.vendor && (n = {
                        event: "command",
                        func: "pauseVideo"
                    }),
                    n && i.$iframe && i.$iframe.contentWindow && i.$iframe.contentWindow.postMessage(JSON.stringify(n), "*"),
                    clearTimeout(i.poller)
                } else
                    try {
                        i.$el.querySelector("video").pause()
                    } catch (t) {}
            }
        }, {
            key: "onRemoveSlide",
            value: function(t, e, i) {
                i.xhr && (i.xhr.abort(),
                i.xhr = null),
                i.$iframe && (i.$iframe.onload = i.$iframe.onerror = null,
                i.$iframe.src = "//about:blank",
                i.$iframe = null);
                var n = i.$content;
                "inline" === i.type && n && (n.classList.remove("fancybox__content"),
                "none" !== n.style.display && (n.style.display = "none")),
                i.$closeButton && (i.$closeButton.remove(),
                i.$closeButton = null);
                var o = n && n.$placeHolder;
                o && (o.parentNode.insertBefore(n, o),
                o.remove(),
                n.$placeHolder = null)
            }
        }, {
            key: "onMessage",
            value: function(t) {
                try {
                    var e = JSON.parse(t.data);
                    if ("https://player.vimeo.com" === t.origin) {
                        if ("ready" === e.event) {
                            var i, n = x(document.getElementsByClassName("fancybox__iframe"));
                            try {
                                for (n.s(); !(i = n.n()).done; ) {
                                    var o = i.value;
                                    o.contentWindow === t.source && (o.isReady = 1)
                                }
                            } catch (t) {
                                n.e(t)
                            } finally {
                                n.f()
                            }
                        }
                    } else
                        "https://www.youtube-nocookie.com" === t.origin && "onReady" === e.event && (document.getElementById(e.id).isReady = 1)
                } catch (t) {}
            }
        }, {
            key: "attach",
            value: function() {
                this.fancybox.on(this.events),
                window.addEventListener("message", this.onMessage, !1)
            }
        }, {
            key: "detach",
            value: function() {
                this.fancybox.off(this.events),
                window.removeEventListener("message", this.onMessage, !1)
            }
        }]),
        t
    }();
    G.defaults = Z;
    var K = function() {
        function t(e) {
            o(this, t),
            this.fancybox = e;
            for (var i = 0, n = ["onReady", "onClosing", "onDone", "onPageChange", "onCreateSlide", "onRemoveSlide", "onImageStatusChange"]; i < n.length; i++) {
                var a = n[i];
                this[a] = this[a].bind(this)
            }
            this.events = {
                ready: this.onReady,
                closing: this.onClosing,
                done: this.onDone,
                "Carousel.change": this.onPageChange,
                "Carousel.createSlide": this.onCreateSlide,
                "Carousel.removeSlide": this.onRemoveSlide
            }
        }
        return s(t, [{
            key: "onReady",
            value: function() {
                var t = this;
                this.fancybox.Carousel.slides.forEach((function(e) {
                    e.$el && t.setContent(e)
                }
                ))
            }
        }, {
            key: "onDone",
            value: function(t, e) {
                this.handleCursor(e)
            }
        }, {
            key: "onClosing",
            value: function(t) {
                clearTimeout(this.clickTimer),
                this.clickTimer = null,
                t.Carousel.slides.forEach((function(t) {
                    t.$image && (t.state = "destroy"),
                    t.Panzoom && t.Panzoom.detachEvents()
                }
                )),
                "closing" === this.fancybox.state && this.canZoom(t.getSlide()) && this.zoomOut()
            }
        }, {
            key: "onCreateSlide",
            value: function(t, e, i) {
                "ready" === this.fancybox.state && this.setContent(i)
            }
        }, {
            key: "onRemoveSlide",
            value: function(t, e, i) {
                i.$image && (i.$el.classList.remove(t.option("Image.canZoomInClass")),
                i.$image.remove(),
                i.$image = null),
                i.Panzoom && (i.Panzoom.destroy(),
                i.Panzoom = null),
                i.$el && i.$el.dataset && delete i.$el.dataset.imageFit
            }
        }, {
            key: "setContent",
            value: function(t) {
                var e = this;
                if (!(t.isDom || t.html || t.type && "image" !== t.type || t.$image)) {
                    t.type = "image",
                    t.state = "loading";
                    var i = document.createElement("div");
                    i.style.visibility = "hidden";
                    var n = document.createElement("img");
                    n.addEventListener("load", (function(i) {
                        i.stopImmediatePropagation(),
                        e.onImageStatusChange(t)
                    }
                    )),
                    n.addEventListener("error", (function() {
                        e.onImageStatusChange(t)
                    }
                    )),
                    n.src = t.src,
                    n.alt = "",
                    n.draggable = !1,
                    n.classList.add("fancybox__image"),
                    t.srcset && n.setAttribute("srcset", t.srcset),
                    t.sizes && n.setAttribute("sizes", t.sizes),
                    t.$image = n;
                    var o = this.fancybox.option("Image.wrap");
                    if (o) {
                        var a = document.createElement("div");
                        a.classList.add("string" == typeof o ? o : "fancybox__image-wrap"),
                        a.appendChild(n),
                        i.appendChild(a),
                        t.$wrap = a
                    } else
                        i.appendChild(n);
                    t.$el.dataset.imageFit = this.fancybox.option("Image.fit"),
                    this.fancybox.setContent(t, i),
                    n.complete || n.error ? this.onImageStatusChange(t) : this.fancybox.showLoading(t)
                }
            }
        }, {
            key: "onImageStatusChange",
            value: function(t) {
                var e = this
                  , i = t.$image;
                i && "loading" === t.state && (i.complete && i.naturalWidth && i.naturalHeight ? (this.fancybox.hideLoading(t),
                "contain" === this.fancybox.option("Image.fit") && this.initSlidePanzoom(t),
                t.$el.addEventListener("wheel", (function(i) {
                    return e.onWheel(t, i)
                }
                ), {
                    passive: !1
                }),
                t.$content.addEventListener("click", (function(i) {
                    return e.onClick(t, i)
                }
                ), {
                    passive: !1
                }),
                this.revealContent(t)) : this.fancybox.setError(t, "{{IMAGE_ERROR}}"))
            }
        }, {
            key: "initSlidePanzoom",
            value: function(t) {
                var e = this;
                t.Panzoom || (t.Panzoom = new M(t.$el,k(!0, this.fancybox.option("Image.Panzoom", {}), {
                    viewport: t.$wrap,
                    content: t.$image,
                    width: t._width,
                    height: t._height,
                    wrapInner: !1,
                    textSelection: !0,
                    touch: this.fancybox.option("Image.touch"),
                    panOnlyZoomed: !0,
                    click: !1,
                    wheel: !1
                })),
                t.Panzoom.on("startAnimation", (function() {
                    e.fancybox.trigger("Image.startAnimation", t)
                }
                )),
                t.Panzoom.on("endAnimation", (function() {
                    "zoomIn" === t.state && e.fancybox.done(t),
                    e.handleCursor(t),
                    e.fancybox.trigger("Image.endAnimation", t)
                }
                )),
                t.Panzoom.on("afterUpdate", (function() {
                    e.handleCursor(t),
                    e.fancybox.trigger("Image.afterUpdate", t)
                }
                )))
            }
        }, {
            key: "revealContent",
            value: function(t) {
                null === this.fancybox.Carousel.prevPage && t.index === this.fancybox.options.startIndex && this.canZoom(t) ? this.zoomIn() : this.fancybox.revealContent(t)
            }
        }, {
            key: "getZoomInfo",
            value: function(t) {
                var e = t.$thumb.getBoundingClientRect()
                  , i = e.width
                  , n = e.height
                  , o = t.$content.getBoundingClientRect()
                  , a = o.width
                  , s = o.height
                  , r = o.top - e.top
                  , l = o.left - e.left
                  , c = this.fancybox.option("Image.zoomOpacity");
                return "auto" === c && (c = Math.abs(i / n - a / s) > .1),
                {
                    top: r,
                    left: l,
                    scale: a && i ? i / a : 1,
                    opacity: c
                }
            }
        }, {
            key: "canZoom",
            value: function(t) {
                var e = this.fancybox
                  , i = e.$container;
                if (window.visualViewport && 1 !== window.visualViewport.scale)
                    return !1;
                if (t.Panzoom && !t.Panzoom.content.width)
                    return !1;
                if (!e.option("Image.zoom") || "contain" !== e.option("Image.fit"))
                    return !1;
                var n = t.$thumb;
                if (!n || "loading" === t.state)
                    return !1;
                i.classList.add("fancybox__no-click");
                var o, a = n.getBoundingClientRect();
                if (this.fancybox.option("Image.ignoreCoveredThumbnail")) {
                    var s = document.elementFromPoint(a.left + 1, a.top + 1) === n
                      , r = document.elementFromPoint(a.right - 1, a.bottom - 1) === n;
                    o = s && r
                } else
                    o = document.elementFromPoint(a.left + .5 * a.width, a.top + .5 * a.height) === n;
                return i.classList.remove("fancybox__no-click"),
                o
            }
        }, {
            key: "zoomIn",
            value: function() {
                var t = this.fancybox
                  , e = t.getSlide()
                  , i = e.Panzoom
                  , n = this.getZoomInfo(e)
                  , o = n.top
                  , a = n.left
                  , s = n.scale
                  , r = n.opacity;
                t.trigger("reveal", e),
                i.panTo({
                    x: -1 * a,
                    y: -1 * o,
                    scale: s,
                    friction: 0,
                    ignoreBounds: !0
                }),
                e.$content.style.visibility = "",
                e.state = "zoomIn",
                !0 === r && i.on("afterTransform", (function(t) {
                    "zoomIn" !== e.state && "zoomOut" !== e.state || (t.$content.style.opacity = Math.min(1, 1 - (1 - t.content.scale) / (1 - s)))
                }
                )),
                i.panTo({
                    x: 0,
                    y: 0,
                    scale: 1,
                    friction: this.fancybox.option("Image.zoomFriction")
                })
            }
        }, {
            key: "zoomOut",
            value: function() {
                var t = this
                  , e = this.fancybox
                  , i = e.getSlide()
                  , n = i.Panzoom;
                if (n) {
                    i.state = "zoomOut",
                    e.state = "customClosing",
                    i.$caption && (i.$caption.style.visibility = "hidden");
                    var o = this.fancybox.option("Image.zoomFriction")
                      , a = function(e) {
                        var a = t.getZoomInfo(i)
                          , s = a.top
                          , r = a.left
                          , l = a.scale
                          , c = a.opacity;
                        e || c || (o *= .82),
                        n.panTo({
                            x: -1 * r,
                            y: -1 * s,
                            scale: l,
                            friction: o,
                            ignoreBounds: !0
                        }),
                        o *= .98
                    };
                    window.addEventListener("scroll", a),
                    n.once("endAnimation", (function() {
                        window.removeEventListener("scroll", a),
                        e.destroy()
                    }
                    )),
                    a()
                }
            }
        }, {
            key: "handleCursor",
            value: function(t) {
                if ("image" === t.type && t.$el) {
                    var e = t.Panzoom
                      , i = this.fancybox.option("Image.click", !1, t)
                      , n = this.fancybox.option("Image.touch")
                      , o = t.$el.classList
                      , a = this.fancybox.option("Image.canZoomInClass")
                      , s = this.fancybox.option("Image.canZoomOutClass");
                    if (o.remove(s),
                    o.remove(a),
                    e && "toggleZoom" === i)
                        e && 1 === e.content.scale && e.option("maxScale") - e.content.scale > .01 ? o.add(a) : e.content.scale > 1 && !n && o.add(s);
                    else
                        "close" === i && o.add(s)
                }
            }
        }, {
            key: "onWheel",
            value: function(t, e) {
                if ("ready" === this.fancybox.state && !1 !== this.fancybox.trigger("Image.wheel", e))
                    switch (this.fancybox.option("Image.wheel")) {
                    case "zoom":
                        "done" === t.state && t.Panzoom && t.Panzoom.zoomWithWheel(e);
                        break;
                    case "close":
                        this.fancybox.close();
                        break;
                    case "slide":
                        this.fancybox[e.deltaY < 0 ? "prev" : "next"]()
                    }
            }
        }, {
            key: "onClick",
            value: function(t, e) {
                var i = this;
                if ("ready" === this.fancybox.state) {
                    var n = t.Panzoom;
                    if (!n || !n.dragPosition.midPoint && 0 === n.dragOffset.x && 0 === n.dragOffset.y && 1 === n.dragOffset.scale) {
                        if (this.fancybox.Carousel.Panzoom.lockAxis)
                            return !1;
                        var o = function(n) {
                            switch (n) {
                            case "toggleZoom":
                                e.stopPropagation(),
                                t.Panzoom && t.Panzoom.zoomWithClick(e);
                                break;
                            case "close":
                                i.fancybox.close();
                                break;
                            case "next":
                                e.stopPropagation(),
                                i.fancybox.next()
                            }
                        }
                          , a = this.fancybox.option("Image.click")
                          , s = this.fancybox.option("Image.doubleClick");
                        s ? this.clickTimer ? (clearTimeout(this.clickTimer),
                        this.clickTimer = null,
                        o(s)) : this.clickTimer = setTimeout((function() {
                            i.clickTimer = null,
                            o(a)
                        }
                        ), 300) : o(a)
                    }
                }
            }
        }, {
            key: "onPageChange",
            value: function(t, e) {
                var i = t.getSlide();
                e.slides.forEach((function(t) {
                    t.Panzoom && "done" === t.state && t.index !== i.index && t.Panzoom.panTo({
                        x: 0,
                        y: 0,
                        scale: 1,
                        friction: .8
                    })
                }
                ))
            }
        }, {
            key: "attach",
            value: function() {
                this.fancybox.on(this.events)
            }
        }, {
            key: "detach",
            value: function() {
                this.fancybox.off(this.events)
            }
        }]),
        t
    }();
    K.defaults = {
        canZoomInClass: "can-zoom_in",
        canZoomOutClass: "can-zoom_out",
        zoom: !0,
        zoomOpacity: "auto",
        zoomFriction: .82,
        ignoreCoveredThumbnail: !1,
        touch: !0,
        click: "toggleZoom",
        doubleClick: null,
        wheel: "zoom",
        fit: "contain",
        wrap: !1,
        Panzoom: {
            ratio: 1
        }
    };
    var J = function() {
        function t(e) {
            o(this, t),
            this.fancybox = e;
            for (var i = 0, n = ["onChange", "onClosing"]; i < n.length; i++) {
                var a = n[i];
                this[a] = this[a].bind(this)
            }
            this.events = {
                initCarousel: this.onChange,
                "Carousel.change": this.onChange,
                closing: this.onClosing
            },
            this.hasCreatedHistory = !1,
            this.origHash = "",
            this.timer = null
        }
        return s(t, [{
            key: "onChange",
            value: function(t) {
                var e = this
                  , i = t.Carousel;
                this.timer && clearTimeout(this.timer);
                var n = null === i.prevPage
                  , o = t.getSlide()
                  , a = new URL(document.URL).hash
                  , s = !1;
                if (o.slug)
                    s = "#" + o.slug;
                else {
                    var r = o.$trigger && o.$trigger.dataset
                      , l = t.option("slug") || r && r.fancybox;
                    l && l.length && "true" !== l && (s = "#" + l + (i.slides.length > 1 ? "-" + (o.index + 1) : ""))
                }
                n && (this.origHash = a !== s ? a : ""),
                s && a !== s && (this.timer = setTimeout((function() {
                    try {
                        window.history[n ? "pushState" : "replaceState"]({}, document.title, window.location.pathname + window.location.search + s),
                        n && (e.hasCreatedHistory = !0)
                    } catch (t) {}
                }
                ), 300))
            }
        }, {
            key: "onClosing",
            value: function() {
                if (this.timer && clearTimeout(this.timer),
                !0 !== this.hasSilentClose)
                    try {
                        return void window.history.replaceState({}, document.title, window.location.pathname + window.location.search + (this.origHash || ""))
                    } catch (t) {}
            }
        }, {
            key: "attach",
            value: function(t) {
                t.on(this.events)
            }
        }, {
            key: "detach",
            value: function(t) {
                t.off(this.events)
            }
        }], [{
            key: "startFromUrl",
            value: function() {
                var e = t.Fancybox;
                if (e && !e.getInstance() && !1 !== e.defaults.Hash) {
                    var i = t.getParsedURL()
                      , n = i.hash
                      , o = i.slug
                      , a = i.index;
                    if (o) {
                        var s = document.querySelector('[data-slug="'.concat(n, '"]'));
                        if (s && s.dispatchEvent(new CustomEvent("click",{
                            bubbles: !0,
                            cancelable: !0
                        })),
                        !e.getInstance()) {
                            var r = document.querySelectorAll('[data-fancybox="'.concat(o, '"]'));
                            r.length && (null === a && 1 === r.length ? s = r[0] : a && (s = r[a - 1]),
                            s && s.dispatchEvent(new CustomEvent("click",{
                                bubbles: !0,
                                cancelable: !0
                            })))
                        }
                    }
                }
            }
        }, {
            key: "onHashChange",
            value: function() {
                var e = t.getParsedURL()
                  , i = e.slug
                  , n = e.index
                  , o = t.Fancybox
                  , a = o && o.getInstance();
                if (a && a.plugins.Hash) {
                    if (i) {
                        var s = a.Carousel;
                        if (i === a.option("slug"))
                            return s.slideTo(n - 1);
                        var r, l = x(s.slides);
                        try {
                            for (l.s(); !(r = l.n()).done; ) {
                                var c = r.value;
                                if (c.slug && c.slug === i)
                                    return s.slideTo(c.index)
                            }
                        } catch (t) {
                            l.e(t)
                        } finally {
                            l.f()
                        }
                        var h = a.getSlide()
                          , d = h.$trigger && h.$trigger.dataset;
                        if (d && d.fancybox === i)
                            return s.slideTo(n - 1)
                    }
                    a.plugins.Hash.hasSilentClose = !0,
                    a.close()
                }
                t.startFromUrl()
            }
        }, {
            key: "create",
            value: function(e) {
                function i() {
                    window.addEventListener("hashchange", t.onHashChange, !1),
                    t.startFromUrl()
                }
                t.Fancybox = e,
                W && window.requestAnimationFrame((function() {
                    /complete|interactive|loaded/.test(document.readyState) ? i() : document.addEventListener("DOMContentLoaded", i)
                }
                ))
            }
        }, {
            key: "destroy",
            value: function() {
                window.removeEventListener("hashchange", t.onHashChange, !1)
            }
        }, {
            key: "getParsedURL",
            value: function() {
                var t = window.location.hash.substr(1)
                  , e = t.split("-")
                  , i = e.length > 1 && /^\+?\d+$/.test(e[e.length - 1]) && parseInt(e.pop(-1), 10) || null;
                return {
                    hash: t,
                    slug: e.join("-"),
                    index: i
                }
            }
        }]),
        t
    }()
      , Q = {
        pageXOffset: 0,
        pageYOffset: 0,
        element: function() {
            return document.fullscreenElement || document.mozFullScreenElement || document.webkitFullscreenElement
        },
        activate: function(t) {
            Q.pageXOffset = window.pageXOffset,
            Q.pageYOffset = window.pageYOffset,
            t.requestFullscreen ? t.requestFullscreen() : t.mozRequestFullScreen ? t.mozRequestFullScreen() : t.webkitRequestFullscreen ? t.webkitRequestFullscreen() : t.msRequestFullscreen && t.msRequestFullscreen()
        },
        deactivate: function() {
            document.exitFullscreen ? document.exitFullscreen() : document.mozCancelFullScreen ? document.mozCancelFullScreen() : document.webkitExitFullscreen && document.webkitExitFullscreen()
        }
    }
      , tt = function() {
        function t(e) {
            o(this, t),
            this.fancybox = e,
            this.active = !1,
            this.handleVisibilityChange = this.handleVisibilityChange.bind(this)
        }
        return s(t, [{
            key: "isActive",
            value: function() {
                return this.active
            }
        }, {
            key: "setTimer",
            value: function() {
                var t = this;
                if (this.active && !this.timer) {
                    var e = this.fancybox.option("slideshow.delay", 3e3);
                    this.timer = setTimeout((function() {
                        t.timer = null,
                        t.fancybox.option("infinite") || t.fancybox.getSlide().index !== t.fancybox.Carousel.slides.length - 1 ? t.fancybox.next() : t.fancybox.jumpTo(0, {
                            friction: 0
                        })
                    }
                    ), e);
                    var i = this.$progress;
                    i || ((i = document.createElement("div")).classList.add("fancybox__progress"),
                    this.fancybox.$carousel.parentNode.insertBefore(i, this.fancybox.$carousel),
                    this.$progress = i,
                    i.offsetHeight),
                    i.style.transitionDuration = "".concat(e, "ms"),
                    i.style.transform = "scaleX(1)"
                }
            }
        }, {
            key: "clearTimer",
            value: function() {
                clearTimeout(this.timer),
                this.timer = null,
                this.$progress && (this.$progress.style.transitionDuration = "",
                this.$progress.style.transform = "",
                this.$progress.offsetHeight)
            }
        }, {
            key: "activate",
            value: function() {
                this.active || (this.active = !0,
                this.fancybox.$container.classList.add("has-slideshow"),
                "done" === this.fancybox.getSlide().state && this.setTimer(),
                document.addEventListener("visibilitychange", this.handleVisibilityChange, !1))
            }
        }, {
            key: "handleVisibilityChange",
            value: function() {
                this.deactivate()
            }
        }, {
            key: "deactivate",
            value: function() {
                this.active = !1,
                this.clearTimer(),
                this.fancybox.$container.classList.remove("has-slideshow"),
                document.removeEventListener("visibilitychange", this.handleVisibilityChange, !1)
            }
        }, {
            key: "toggle",
            value: function() {
                this.active ? this.deactivate() : this.fancybox.Carousel.slides.length > 1 && this.activate()
            }
        }]),
        t
    }()
      , et = {
        display: ["counter", "zoom", "slideshow", "fullscreen", "thumbs", "close"],
        autoEnable: !0,
        items: {
            counter: {
                position: "left",
                type: "div",
                class: "fancybox__counter",
                html: '<span data-fancybox-index=""></span>&nbsp;/&nbsp;<span data-fancybox-count=""></span>',
                attr: {
                    tabindex: -1
                }
            },
            prev: {
                type: "button",
                class: "fancybox__button--prev",
                label: "PREV",
                html: '<svg viewBox="0 0 24 24"><path d="M15 4l-8 8 8 8"/></svg>',
                attr: {
                    "data-fancybox-prev": ""
                }
            },
            next: {
                type: "button",
                class: "fancybox__button--next",
                label: "NEXT",
                html: '<svg viewBox="0 0 24 24"><path d="M8 4l8 8-8 8"/></svg>',
                attr: {
                    "data-fancybox-next": ""
                }
            },
            fullscreen: {
                type: "button",
                class: "fancybox__button--fullscreen",
                label: "TOGGLE_FULLSCREEN",
                html: '<svg viewBox="0 0 24 24">\n                <g><path d="M3 8 V3h5"></path><path d="M21 8V3h-5"></path><path d="M8 21H3v-5"></path><path d="M16 21h5v-5"></path></g>\n                <g><path d="M7 2v5H2M17 2v5h5M2 17h5v5M22 17h-5v5"/></g>\n            </svg>',
                click: function(t) {
                    t.preventDefault(),
                    Q.element() ? Q.deactivate() : Q.activate(this.fancybox.$container)
                }
            },
            slideshow: {
                type: "button",
                class: "fancybox__button--slideshow",
                label: "TOGGLE_SLIDESHOW",
                html: '<svg viewBox="0 0 24 24">\n                <g><path d="M6 4v16"/><path d="M20 12L6 20"/><path d="M20 12L6 4"/></g>\n                <g><path d="M7 4v15M17 4v15"/></g>\n            </svg>',
                click: function(t) {
                    t.preventDefault(),
                    this.Slideshow.toggle()
                }
            },
            zoom: {
                type: "button",
                class: "fancybox__button--zoom",
                label: "TOGGLE_ZOOM",
                html: '<svg viewBox="0 0 24 24"><circle cx="10" cy="10" r="7"></circle><path d="M16 16 L21 21"></svg>',
                click: function(t) {
                    t.preventDefault();
                    var e = this.fancybox.getSlide().Panzoom;
                    e && e.toggleZoom()
                }
            },
            download: {
                type: "link",
                label: "DOWNLOAD",
                class: "fancybox__button--download",
                html: '<svg viewBox="0 0 24 24"><path d="M12 15V3m0 12l-4-4m4 4l4-4M2 17l.62 2.48A2 2 0 004.56 21h14.88a2 2 0 001.94-1.51L22 17"/></svg>',
                click: function(t) {
                    t.stopPropagation()
                }
            },
            thumbs: {
                type: "button",
                label: "TOGGLE_THUMBS",
                class: "fancybox__button--thumbs",
                html: '<svg viewBox="0 0 24 24"><circle cx="4" cy="4" r="1" /><circle cx="12" cy="4" r="1" transform="rotate(90 12 4)"/><circle cx="20" cy="4" r="1" transform="rotate(90 20 4)"/><circle cx="4" cy="12" r="1" transform="rotate(90 4 12)"/><circle cx="12" cy="12" r="1" transform="rotate(90 12 12)"/><circle cx="20" cy="12" r="1" transform="rotate(90 20 12)"/><circle cx="4" cy="20" r="1" transform="rotate(90 4 20)"/><circle cx="12" cy="20" r="1" transform="rotate(90 12 20)"/><circle cx="20" cy="20" r="1" transform="rotate(90 20 20)"/></svg>',
                click: function(t) {
                    t.stopPropagation();
                    var e = this.fancybox.plugins.Thumbs;
                    e && e.toggle()
                }
            },
            close: {
                type: "button",
                label: "CLOSE",
                class: "fancybox__button--close",
                html: '<svg viewBox="0 0 24 24"><path d="M20 20L4 4m16 0L4 20"></path></svg>',
                attr: {
                    "data-fancybox-close": "",
                    tabindex: 0
                }
            }
        }
    }
      , it = function() {
        function t(e) {
            var i = this;
            o(this, t),
            this.fancybox = e,
            this.$container = null,
            this.state = "init";
            for (var n = 0, a = ["onInit", "onPrepare", "onDone", "onKeydown", "onClosing", "onChange", "onSettle", "onRefresh"]; n < a.length; n++) {
                var s = a[n];
                this[s] = this[s].bind(this)
            }
            this.events = {
                init: this.onInit,
                prepare: this.onPrepare,
                done: this.onDone,
                keydown: this.onKeydown,
                closing: this.onClosing,
                "Carousel.change": this.onChange,
                "Carousel.settle": this.onSettle,
                "Carousel.Panzoom.touchStart": function() {
                    return i.onRefresh()
                },
                "Image.startAnimation": function(t, e) {
                    return i.onRefresh(e)
                },
                "Image.afterUpdate": function(t, e) {
                    return i.onRefresh(e)
                }
            }
        }
        return s(t, [{
            key: "onInit",
            value: function() {
                if (this.fancybox.option("Toolbar.autoEnable")) {
                    var t, e = !1, i = x(this.fancybox.items);
                    try {
                        for (i.s(); !(t = i.n()).done; ) {
                            if ("image" === t.value.type) {
                                e = !0;
                                break
                            }
                        }
                    } catch (t) {
                        i.e(t)
                    } finally {
                        i.f()
                    }
                    if (!e)
                        return void (this.state = "disabled")
                }
                var n, o = x(this.fancybox.option("Toolbar.display"));
                try {
                    for (o.s(); !(n = o.n()).done; ) {
                        var a = n.value;
                        if ("close" === (w(a) ? a.id : a)) {
                            this.fancybox.options.closeButton = !1;
                            break
                        }
                    }
                } catch (t) {
                    o.e(t)
                } finally {
                    o.f()
                }
            }
        }, {
            key: "onPrepare",
            value: function() {
                var t = this.fancybox;
                if ("init" === this.state && (this.build(),
                this.update(),
                this.Slideshow = new tt(t),
                !t.Carousel.prevPage && (t.option("slideshow.autoStart") && this.Slideshow.activate(),
                t.option("fullscreen.autoStart") && !Q.element())))
                    try {
                        Q.activate(t.$container)
                    } catch (t) {}
            }
        }, {
            key: "onFsChange",
            value: function() {
                window.scrollTo(Q.pageXOffset, Q.pageYOffset)
            }
        }, {
            key: "onSettle",
            value: function() {
                var t = this.fancybox
                  , e = this.Slideshow;
                e && e.isActive() && (t.getSlide().index !== t.Carousel.slides.length - 1 || t.option("infinite") ? "done" === t.getSlide().state && e.setTimer() : e.deactivate())
            }
        }, {
            key: "onChange",
            value: function() {
                this.update(),
                this.Slideshow && this.Slideshow.isActive() && this.Slideshow.clearTimer()
            }
        }, {
            key: "onDone",
            value: function(t, e) {
                var i = this.Slideshow;
                e.index === t.getSlide().index && (this.update(),
                i && i.isActive() && (t.option("infinite") || e.index !== t.Carousel.slides.length - 1 ? i.setTimer() : i.deactivate()))
            }
        }, {
            key: "onRefresh",
            value: function(t) {
                t && t.index !== this.fancybox.getSlide().index || (this.update(),
                !this.Slideshow || !this.Slideshow.isActive() || t && "done" !== t.state || this.Slideshow.deactivate())
            }
        }, {
            key: "onKeydown",
            value: function(t, e, i) {
                " " === e && this.Slideshow && (this.Slideshow.toggle(),
                i.preventDefault())
            }
        }, {
            key: "onClosing",
            value: function() {
                this.Slideshow && this.Slideshow.deactivate(),
                document.removeEventListener("fullscreenchange", this.onFsChange)
            }
        }, {
            key: "createElement",
            value: function(t) {
                var e, i;
                ("div" === t.type ? e = document.createElement("div") : (e = document.createElement("link" === t.type ? "a" : "button")).classList.add("carousel__button"),
                e.innerHTML = t.html,
                e.setAttribute("tabindex", t.tabindex || 0),
                t.class) && (i = e.classList).add.apply(i, m(t.class.split(" ")));
                for (var n in t.attr)
                    e.setAttribute(n, t.attr[n]);
                t.label && e.setAttribute("title", this.fancybox.localize("{{".concat(t.label, "}}"))),
                t.click && e.addEventListener("click", t.click.bind(this)),
                "prev" === t.id && e.setAttribute("data-fancybox-prev", ""),
                "next" === t.id && e.setAttribute("data-fancybox-next", "");
                var o = e.querySelector("svg");
                return o && (o.setAttribute("role", "img"),
                o.setAttribute("tabindex", "-1"),
                o.setAttribute("xmlns", "http://www.w3.org/2000/svg")),
                e
            }
        }, {
            key: "build",
            value: function() {
                var t = this;
                this.cleanup();
                var e, i = this.fancybox.option("Toolbar.items"), n = [{
                    position: "left",
                    items: []
                }, {
                    position: "center",
                    items: []
                }, {
                    position: "right",
                    items: []
                }], o = this.fancybox.plugins.Thumbs, a = x(this.fancybox.option("Toolbar.display"));
                try {
                    var s = function() {
                        var a = e.value
                          , s = void 0
                          , r = void 0;
                        if (w(a) ? (s = a.id,
                        r = k({}, i[s], a)) : r = i[s = a],
                        ["counter", "next", "prev", "slideshow"].includes(s) && t.fancybox.items.length < 2)
                            return "continue";
                        if ("fullscreen" === s) {
                            if (!document.fullscreenEnabled || window.fullScreen)
                                return "continue";
                            document.addEventListener("fullscreenchange", t.onFsChange)
                        }
                        if ("thumbs" === s && (!o || "disabled" === o.state))
                            return "continue";
                        if (!r)
                            return "continue";
                        var l = r.position || "right"
                          , c = n.find((function(t) {
                            return t.position === l
                        }
                        ));
                        c && c.items.push(r)
                    };
                    for (a.s(); !(e = a.n()).done; )
                        s()
                } catch (t) {
                    a.e(t)
                } finally {
                    a.f()
                }
                var r = document.createElement("div");
                r.classList.add("fancybox__toolbar");
                for (var l = 0, c = n; l < c.length; l++) {
                    var h = c[l];
                    if (h.items.length) {
                        var d = document.createElement("div");
                        d.classList.add("fancybox__toolbar__items"),
                        d.classList.add("fancybox__toolbar__items--".concat(h.position));
                        var u, f = x(h.items);
                        try {
                            for (f.s(); !(u = f.n()).done; ) {
                                var v = u.value;
                                d.appendChild(this.createElement(v))
                            }
                        } catch (t) {
                            f.e(t)
                        } finally {
                            f.f()
                        }
                        r.appendChild(d)
                    }
                }
                this.fancybox.$carousel.parentNode.insertBefore(r, this.fancybox.$carousel),
                this.$container = r
            }
        }, {
            key: "update",
            value: function() {
                var t, e = this.fancybox.getSlide(), i = e.index, n = this.fancybox.items.length, o = e.downloadSrc || ("image" !== e.type || e.error ? null : e.src), a = x(this.fancybox.$container.querySelectorAll("a.fancybox__button--download"));
                try {
                    for (a.s(); !(t = a.n()).done; ) {
                        var s = t.value;
                        o ? (s.removeAttribute("disabled"),
                        s.removeAttribute("tabindex"),
                        s.setAttribute("href", o),
                        s.setAttribute("download", o),
                        s.setAttribute("target", "_blank")) : (s.setAttribute("disabled", ""),
                        s.setAttribute("tabindex", -1),
                        s.removeAttribute("href"),
                        s.removeAttribute("download"))
                    }
                } catch (t) {
                    a.e(t)
                } finally {
                    a.f()
                }
                var r, l = e.Panzoom, c = l && l.option("maxScale") > l.option("baseScale"), h = x(this.fancybox.$container.querySelectorAll(".fancybox__button--zoom"));
                try {
                    for (h.s(); !(r = h.n()).done; ) {
                        var d = r.value;
                        c ? d.removeAttribute("disabled") : d.setAttribute("disabled", "")
                    }
                } catch (t) {
                    h.e(t)
                } finally {
                    h.f()
                }
                var u, f = x(this.fancybox.$container.querySelectorAll("[data-fancybox-index]"));
                try {
                    for (f.s(); !(u = f.n()).done; ) {
                        u.value.innerHTML = e.index + 1
                    }
                } catch (t) {
                    f.e(t)
                } finally {
                    f.f()
                }
                var v, p = x(this.fancybox.$container.querySelectorAll("[data-fancybox-count]"));
                try {
                    for (p.s(); !(v = p.n()).done; ) {
                        v.value.innerHTML = n
                    }
                } catch (t) {
                    p.e(t)
                } finally {
                    p.f()
                }
                if (!this.fancybox.option("infinite")) {
                    var g, m = x(this.fancybox.$container.querySelectorAll("[data-fancybox-prev]"));
                    try {
                        for (m.s(); !(g = m.n()).done; ) {
                            var y = g.value;
                            0 === i ? y.setAttribute("disabled", "") : y.removeAttribute("disabled")
                        }
                    } catch (t) {
                        m.e(t)
                    } finally {
                        m.f()
                    }
                    var b, w = x(this.fancybox.$container.querySelectorAll("[data-fancybox-next]"));
                    try {
                        for (w.s(); !(b = w.n()).done; ) {
                            var k = b.value;
                            i === n - 1 ? k.setAttribute("disabled", "") : k.removeAttribute("disabled")
                        }
                    } catch (t) {
                        w.e(t)
                    } finally {
                        w.f()
                    }
                }
            }
        }, {
            key: "cleanup",
            value: function() {
                this.Slideshow && this.Slideshow.isActive() && this.Slideshow.clearTimer(),
                this.$container && this.$container.remove(),
                this.$container = null
            }
        }, {
            key: "attach",
            value: function() {
                this.fancybox.on(this.events)
            }
        }, {
            key: "detach",
            value: function() {
                this.fancybox.off(this.events),
                this.cleanup()
            }
        }]),
        t
    }();
    it.defaults = et;
    var nt = {
        ScrollLock: U,
        Thumbs: Y,
        Html: G,
        Toolbar: it,
        Image: K,
        Hash: J
    }
      , ot = {
        startIndex: 0,
        preload: 1,
        infinite: !0,
        showClass: "fancybox-zoomInUp",
        hideClass: "fancybox-fadeOut",
        animated: !0,
        hideScrollbar: !0,
        parentEl: null,
        mainClass: null,
        autoFocus: !0,
        trapFocus: !0,
        placeFocusBack: !0,
        click: "close",
        closeButton: "inside",
        dragToClose: !0,
        keyboard: {
            Escape: "close",
            Delete: "close",
            Backspace: "close",
            PageUp: "next",
            PageDown: "prev",
            ArrowUp: "next",
            ArrowDown: "prev",
            ArrowRight: "next",
            ArrowLeft: "prev"
        },
        template: {
            closeButton: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" tabindex="-1"><path d="M20 20L4 4m16 0L4 20"/></svg>',
            spinner: '<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="25 25 50 50" tabindex="-1"><circle cx="50" cy="50" r="20"/></svg>',
            main: null
        },
        l10n: {
            CLOSE: "Close",
            NEXT: "Next",
            PREV: "Previous",
            MODAL: "You can close this modal content with the ESC key",
            ERROR: "Something Went Wrong, Please Try Again Later",
            IMAGE_ERROR: "Image Not Found",
            ELEMENT_NOT_FOUND: "HTML Element Not Found",
            AJAX_NOT_FOUND: "Error Loading AJAX : Not Found",
            AJAX_FORBIDDEN: "Error Loading AJAX : Forbidden",
            IFRAME_ERROR: "Error Loading Page",
            TOGGLE_ZOOM: "Toggle zoom level",
            TOGGLE_THUMBS: "Toggle thumbnails",
            TOGGLE_SLIDESHOW: "Toggle slideshow",
            TOGGLE_FULLSCREEN: "Toggle full-screen mode",
            DOWNLOAD: "Download"
        }
    }
      , at = new Map
      , st = 0
      , rt = function(t) {
        l(i, t);
        var e = f(i);
        function i(t) {
            var n, a = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
            return o(this, i),
            t = t.map((function(t) {
                return t.width && (t._width = t.width),
                t.height && (t._height = t.height),
                t
            }
            )),
            (n = e.call(this, k(!0, {}, ot, a))).bindHandlers(),
            n.state = "init",
            n.setItems(t),
            n.attachPlugins(i.Plugins),
            n.trigger("init"),
            !0 === n.option("hideScrollbar") && n.hideScrollbar(),
            n.initLayout(),
            n.initCarousel(),
            n.attachEvents(),
            at.set(n.id, d(n)),
            n.trigger("prepare"),
            n.state = "ready",
            n.trigger("ready"),
            n.$container.setAttribute("aria-hidden", "false"),
            n.option("trapFocus") && n.focus(),
            n
        }
        return s(i, [{
            key: "option",
            value: function(t) {
                for (var e, n = this.getSlide(), o = n ? n[t] : void 0, a = arguments.length, s = new Array(a > 1 ? a - 1 : 0), r = 1; r < a; r++)
                    s[r - 1] = arguments[r];
                if (void 0 !== o) {
                    var l;
                    if ("function" == typeof o)
                        o = (l = o).call.apply(l, [this, this].concat(s));
                    return o
                }
                return (e = p(c(i.prototype), "option", this)).call.apply(e, [this, t].concat(s))
            }
        }, {
            key: "bindHandlers",
            value: function() {
                for (var t = 0, e = ["onMousedown", "onKeydown", "onClick", "onFocus", "onCreateSlide", "onSettle", "onTouchMove", "onTouchEnd", "onTransform"]; t < e.length; t++) {
                    var i = e[t];
                    this[i] = this[i].bind(this)
                }
            }
        }, {
            key: "attachEvents",
            value: function() {
                document.addEventListener("mousedown", this.onMousedown),
                document.addEventListener("keydown", this.onKeydown, !0),
                this.option("trapFocus") && document.addEventListener("focus", this.onFocus, !0),
                this.$container.addEventListener("click", this.onClick)
            }
        }, {
            key: "detachEvents",
            value: function() {
                document.removeEventListener("mousedown", this.onMousedown),
                document.removeEventListener("keydown", this.onKeydown, !0),
                document.removeEventListener("focus", this.onFocus, !0),
                this.$container.removeEventListener("click", this.onClick)
            }
        }, {
            key: "initLayout",
            value: function() {
                var t = this;
                this.$root = this.option("parentEl") || document.body;
                var e = this.option("template.main");
                e && (this.$root.insertAdjacentHTML("beforeend", this.localize(e)),
                this.$container = this.$root.querySelector(".fancybox__container")),
                this.$container || (this.$container = document.createElement("div"),
                this.$root.appendChild(this.$container)),
                this.$container.onscroll = function() {
                    return t.$container.scrollLeft = 0,
                    !1
                }
                ,
                Object.entries({
                    class: "fancybox__container",
                    role: "dialog",
                    tabIndex: "-1",
                    "aria-modal": "true",
                    "aria-hidden": "true",
                    "aria-label": this.localize("{{MODAL}}")
                }).forEach((function(e) {
                    var i;
                    return (i = t.$container).setAttribute.apply(i, m(e))
                }
                )),
                this.option("animated") && this.$container.classList.add("is-animated"),
                this.$backdrop = this.$container.querySelector(".fancybox__backdrop"),
                this.$backdrop || (this.$backdrop = document.createElement("div"),
                this.$backdrop.classList.add("fancybox__backdrop"),
                this.$container.appendChild(this.$backdrop)),
                this.$carousel = this.$container.querySelector(".fancybox__carousel"),
                this.$carousel || (this.$carousel = document.createElement("div"),
                this.$carousel.classList.add("fancybox__carousel"),
                this.$container.appendChild(this.$carousel)),
                this.$container.Fancybox = this,
                this.id = this.$container.getAttribute("id"),
                this.id || (this.id = this.options.id || ++st,
                this.$container.setAttribute("id", "fancybox-" + this.id));
                var i, n = this.option("mainClass");
                n && (i = this.$container.classList).add.apply(i, m(n.split(" ")));
                return document.documentElement.classList.add("with-fancybox"),
                this.trigger("initLayout"),
                this
            }
        }, {
            key: "setItems",
            value: function(t) {
                var e, i = [], n = x(t);
                try {
                    for (n.s(); !(e = n.n()).done; ) {
                        var o = e.value
                          , a = o.$trigger;
                        if (a) {
                            var s = a.dataset || {};
                            o.src = s.src || a.getAttribute("href") || o.src,
                            o.type = s.type || o.type,
                            !o.src && a instanceof HTMLImageElement && (o.src = a.currentSrc || o.$trigger.src)
                        }
                        var r = o.$thumb;
                        if (!r) {
                            var l = o.$trigger && o.$trigger.origTarget;
                            l && (r = l instanceof HTMLImageElement ? l : l.querySelector("img:not([aria-hidden])")),
                            !r && o.$trigger && (r = o.$trigger instanceof HTMLImageElement ? o.$trigger : o.$trigger.querySelector("img:not([aria-hidden])"))
                        }
                        o.$thumb = r || null;
                        var c = o.thumb;
                        !c && r && !(c = r.currentSrc || r.src) && r.dataset && (c = r.dataset.lazySrc || r.dataset.src),
                        c || "image" !== o.type || (c = o.src),
                        o.thumb = c || null,
                        o.caption = o.caption || "",
                        i.push(o)
                    }
                } catch (t) {
                    n.e(t)
                } finally {
                    n.f()
                }
                this.items = i
            }
        }, {
            key: "initCarousel",
            value: function() {
                var t = this;
                return this.Carousel = new H(this.$carousel,k(!0, {}, {
                    prefix: "",
                    classNames: {
                        viewport: "fancybox__viewport",
                        track: "fancybox__track",
                        slide: "fancybox__slide"
                    },
                    textSelection: !0,
                    preload: this.option("preload"),
                    friction: .88,
                    slides: this.items,
                    initialPage: this.options.startIndex,
                    slidesPerPage: 1,
                    infiniteX: this.option("infinite"),
                    infiniteY: !0,
                    l10n: this.option("l10n"),
                    Dots: !1,
                    Navigation: {
                        classNames: {
                            main: "fancybox__nav",
                            button: "carousel__button",
                            next: "is-next",
                            prev: "is-prev"
                        }
                    },
                    Panzoom: {
                        textSelection: !0,
                        panOnlyZoomed: function() {
                            return t.Carousel && t.Carousel.pages && t.Carousel.pages.length < 2 && !t.option("dragToClose")
                        },
                        lockAxis: function() {
                            if (t.Carousel) {
                                var e = "x";
                                return t.option("dragToClose") && (e += "y"),
                                e
                            }
                        }
                    },
                    on: {
                        "*": function(e) {
                            for (var i = arguments.length, n = new Array(i > 1 ? i - 1 : 0), o = 1; o < i; o++)
                                n[o - 1] = arguments[o];
                            return t.trigger.apply(t, ["Carousel.".concat(e)].concat(n))
                        },
                        init: function(e) {
                            return t.Carousel = e
                        },
                        createSlide: this.onCreateSlide,
                        settle: this.onSettle
                    }
                }, this.option("Carousel"))),
                this.option("dragToClose") && this.Carousel.Panzoom.on({
                    touchMove: this.onTouchMove,
                    afterTransform: this.onTransform,
                    touchEnd: this.onTouchEnd
                }),
                this.trigger("initCarousel"),
                this
            }
        }, {
            key: "onCreateSlide",
            value: function(t, e) {
                var i = e.caption || "";
                if ("function" == typeof this.options.caption && (i = this.options.caption.call(this, this, this.Carousel, e)),
                "string" == typeof i && i.length) {
                    var n = document.createElement("div")
                      , o = "fancybox__caption_".concat(this.id, "_").concat(e.index);
                    n.className = "fancybox__caption",
                    n.innerHTML = i,
                    n.setAttribute("id", o),
                    e.$caption = e.$el.appendChild(n),
                    e.$el.classList.add("has-caption"),
                    e.$el.setAttribute("aria-labelledby", o)
                }
            }
        }, {
            key: "onSettle",
            value: function() {
                this.option("autoFocus") && this.focus()
            }
        }, {
            key: "onFocus",
            value: function(t) {
                this.focus(t)
            }
        }, {
            key: "onClick",
            value: function(t) {
                if (!t.defaultPrevented) {
                    var e = t.composedPath()[0];
                    if (e.matches("[data-fancybox-close]"))
                        return t.preventDefault(),
                        void i.close(!1, t);
                    if (e.matches("[data-fancybox-next]"))
                        return t.preventDefault(),
                        void i.next();
                    if (e.matches("[data-fancybox-prev]"))
                        return t.preventDefault(),
                        void i.prev();
                    if (e.matches(X) || document.activeElement.blur(),
                    !e.closest(".fancybox__content"))
                        if (!getSelection().toString().length)
                            if (!1 !== this.trigger("click", t))
                                switch (this.option("click")) {
                                case "close":
                                    this.close();
                                    break;
                                case "next":
                                    this.next()
                                }
                }
            }
        }, {
            key: "onTouchMove",
            value: function() {
                var t = this.getSlide().Panzoom;
                return !t || 1 === t.content.scale
            }
        }, {
            key: "onTouchEnd",
            value: function(t) {
                var e = t.dragOffset.y;
                Math.abs(e) >= 150 || Math.abs(e) >= 35 && t.dragOffset.time < 350 ? (this.option("hideClass") && (this.getSlide().hideClass = "fancybox-throwOut".concat(t.content.y < 0 ? "Up" : "Down")),
                this.close()) : "y" === t.lockAxis && t.panTo({
                    y: 0
                })
            }
        }, {
            key: "onTransform",
            value: function(t) {
                if (this.$backdrop) {
                    var e = Math.abs(t.content.y)
                      , i = e < 1 ? "" : Math.max(.33, Math.min(1, 1 - e / t.content.fitHeight * 1.5));
                    this.$container.style.setProperty("--fancybox-ts", i ? "0s" : ""),
                    this.$container.style.setProperty("--fancybox-opacity", i)
                }
            }
        }, {
            key: "onMousedown",
            value: function() {
                "ready" === this.state && document.body.classList.add("is-using-mouse")
            }
        }, {
            key: "onKeydown",
            value: function(t) {
                if (i.getInstance().id === this.id) {
                    document.body.classList.remove("is-using-mouse");
                    var e = t.key
                      , n = this.option("keyboard");
                    if (n && !t.ctrlKey && !t.altKey && !t.shiftKey) {
                        var o = t.composedPath()[0]
                          , a = document.activeElement && document.activeElement.classList
                          , s = a && a.contains("carousel__button");
                        if ("Escape" !== e && !s)
                            if (t.target.isContentEditable || -1 !== ["BUTTON", "TEXTAREA", "OPTION", "INPUT", "SELECT", "VIDEO"].indexOf(o.nodeName))
                                return;
                        if (!1 !== this.trigger("keydown", e, t)) {
                            var r = n[e];
                            "function" == typeof this[r] && this[r]()
                        }
                    }
                }
            }
        }, {
            key: "getSlide",
            value: function() {
                var t = this.Carousel;
                if (!t)
                    return null;
                var e = null === t.page ? t.option("initialPage") : t.page
                  , i = t.pages || [];
                return i.length && i[e] ? i[e].slides[0] : null
            }
        }, {
            key: "focus",
            value: function(t) {
                if (!(i.ignoreFocusChange || ["init", "closing", "customClosing", "destroy"].indexOf(this.state) > -1)) {
                    var e = this.$container
                      , n = this.getSlide()
                      , o = "done" === n.state ? n.$el : null;
                    if (!o || !o.contains(document.activeElement)) {
                        t && t.preventDefault(),
                        i.ignoreFocusChange = !0;
                        for (var a, s = [], r = 0, l = Array.from(e.querySelectorAll(X)); r < l.length; r++) {
                            var c = l[r]
                              , h = c.offsetParent
                              , d = o && o.contains(c)
                              , u = !this.Carousel.$viewport.contains(c);
                            h && (d || u) ? (s.push(c),
                            void 0 !== c.dataset.origTabindex && (c.tabIndex = c.dataset.origTabindex,
                            c.removeAttribute("data-orig-tabindex")),
                            (c.hasAttribute("autoFocus") || !a && d && !c.classList.contains("carousel__button")) && (a = c)) : (c.dataset.origTabindex = void 0 === c.dataset.origTabindex ? c.getAttribute("tabindex") : c.dataset.origTabindex,
                            c.tabIndex = -1)
                        }
                        t ? s.indexOf(t.target) > -1 ? this.lastFocus = t.target : this.lastFocus === e ? q(s[s.length - 1]) : q(e) : this.option("autoFocus") && a ? q(a) : s.indexOf(document.activeElement) < 0 && q(e),
                        this.lastFocus = document.activeElement,
                        i.ignoreFocusChange = !1
                    }
                }
            }
        }, {
            key: "hideScrollbar",
            value: function() {
                if (W) {
                    var t = window.innerWidth - document.documentElement.getBoundingClientRect().width
                      , e = "fancybox-style-noscroll"
                      , i = document.getElementById(e);
                    i || t > 0 && ((i = document.createElement("style")).id = e,
                    i.type = "text/css",
                    i.innerHTML = ".compensate-for-scrollbar {padding-right: ".concat(t, "px;}"),
                    document.getElementsByTagName("head")[0].appendChild(i),
                    document.body.classList.add("compensate-for-scrollbar"))
                }
            }
        }, {
            key: "revealScrollbar",
            value: function() {
                document.body.classList.remove("compensate-for-scrollbar");
                var t = document.getElementById("fancybox-style-noscroll");
                t && t.remove()
            }
        }, {
            key: "clearContent",
            value: function(t) {
                this.Carousel.trigger("removeSlide", t),
                t.$content && (t.$content.remove(),
                t.$content = null),
                t.$closeButton && (t.$closeButton.remove(),
                t.$closeButton = null),
                t._className && t.$el.classList.remove(t._className)
            }
        }, {
            key: "setContent",
            value: function(t, e) {
                var i, n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {}, o = t.$el;
                if (e instanceof HTMLElement)
                    ["img", "iframe", "video", "audio"].indexOf(e.nodeName.toLowerCase()) > -1 ? (i = document.createElement("div")).appendChild(e) : i = e;
                else {
                    var a = document.createRange().createContextualFragment(e);
                    (i = document.createElement("div")).appendChild(a)
                }
                if (t.filter && !t.error && (i = i.querySelector(t.filter)),
                i instanceof Element)
                    return t._className = "has-".concat(n.suffix || t.type || "unknown"),
                    o.classList.add(t._className),
                    i.classList.add("fancybox__content"),
                    "none" !== i.style.display && "none" !== getComputedStyle(i).getPropertyValue("display") || (i.style.display = t.display || this.option("defaultDisplay") || "flex"),
                    t.id && i.setAttribute("id", t.id),
                    t.$content = i,
                    o.prepend(i),
                    this.manageCloseButton(t),
                    "loading" !== t.state && this.revealContent(t),
                    i;
                this.setError(t, "{{ELEMENT_NOT_FOUND}}")
            }
        }, {
            key: "manageCloseButton",
            value: function(t) {
                var e = this
                  , i = void 0 === t.closeButton ? this.option("closeButton") : t.closeButton;
                if (i && ("top" !== i || !this.$closeButton)) {
                    var n = document.createElement("button");
                    n.classList.add("carousel__button", "is-close"),
                    n.setAttribute("title", this.options.l10n.CLOSE),
                    n.innerHTML = this.option("template.closeButton"),
                    n.addEventListener("click", (function(t) {
                        return e.close(t)
                    }
                    )),
                    "inside" === i ? (t.$closeButton && t.$closeButton.remove(),
                    t.$closeButton = t.$content.appendChild(n)) : this.$closeButton = this.$container.insertBefore(n, this.$container.firstChild)
                }
            }
        }, {
            key: "revealContent",
            value: function(t) {
                var e = this;
                this.trigger("reveal", t),
                t.$content.style.visibility = "";
                var i = !1;
                t.error || "loading" === t.state || null !== this.Carousel.prevPage || t.index !== this.options.startIndex || (i = void 0 === t.showClass ? this.option("showClass") : t.showClass),
                i ? (t.state = "animating",
                this.animateCSS(t.$content, i, (function() {
                    e.done(t)
                }
                ))) : this.done(t)
            }
        }, {
            key: "animateCSS",
            value: function(t, e, i) {
                if (t && t.dispatchEvent(new CustomEvent("animationend",{
                    bubbles: !0,
                    cancelable: !0
                })),
                t && e) {
                    t.addEventListener("animationend", (function n(o) {
                        o.currentTarget === this && (t.removeEventListener("animationend", n),
                        i && i(),
                        t.classList.remove(e))
                    }
                    )),
                    t.classList.add(e)
                } else
                    "function" == typeof i && i()
            }
        }, {
            key: "done",
            value: function(t) {
                t.state = "done",
                this.trigger("done", t);
                var e = this.getSlide();
                e && t.index === e.index && this.option("autoFocus") && this.focus()
            }
        }, {
            key: "setError",
            value: function(t, e) {
                t.error = e,
                this.hideLoading(t),
                this.clearContent(t);
                var i = document.createElement("div");
                i.classList.add("fancybox-error"),
                i.innerHTML = this.localize(e || "<p>{{ERROR}}</p>"),
                this.setContent(t, i, {
                    suffix: "error"
                })
            }
        }, {
            key: "showLoading",
            value: function(t) {
                var e = this;
                t.state = "loading",
                t.$el.classList.add("is-loading");
                var i = t.$el.querySelector(".fancybox__spinner");
                i || ((i = document.createElement("div")).classList.add("fancybox__spinner"),
                i.innerHTML = this.option("template.spinner"),
                i.addEventListener("click", (function() {
                    e.Carousel.Panzoom.velocity || e.close()
                }
                )),
                t.$el.prepend(i))
            }
        }, {
            key: "hideLoading",
            value: function(t) {
                var e = t.$el && t.$el.querySelector(".fancybox__spinner");
                e && (e.remove(),
                t.$el.classList.remove("is-loading")),
                "loading" === t.state && (this.trigger("load", t),
                t.state = "ready")
            }
        }, {
            key: "next",
            value: function() {
                var t = this.Carousel;
                t && t.pages.length > 1 && t.slideNext()
            }
        }, {
            key: "prev",
            value: function() {
                var t = this.Carousel;
                t && t.pages.length > 1 && t.slidePrev()
            }
        }, {
            key: "jumpTo",
            value: function() {
                var t;
                this.Carousel && (t = this.Carousel).slideTo.apply(t, arguments)
            }
        }, {
            key: "close",
            value: function(t) {
                var e = this;
                if (t && t.preventDefault(),
                !["closing", "customClosing", "destroy"].includes(this.state) && !1 !== this.trigger("shouldClose", t) && (this.state = "closing",
                this.Carousel.Panzoom.destroy(),
                this.detachEvents(),
                this.trigger("closing", t),
                "destroy" !== this.state)) {
                    this.$container.setAttribute("aria-hidden", "true"),
                    this.$container.classList.add("is-closing");
                    var i = this.getSlide();
                    if (this.Carousel.slides.forEach((function(t) {
                        t.$content && t.index !== i.index && e.Carousel.trigger("removeSlide", t)
                    }
                    )),
                    "closing" === this.state) {
                        var n = void 0 === i.hideClass ? this.option("hideClass") : i.hideClass;
                        this.animateCSS(i.$content, n, (function() {
                            e.destroy()
                        }
                        ), !0)
                    }
                }
            }
        }, {
            key: "destroy",
            value: function() {
                if ("destroy" !== this.state) {
                    this.state = "destroy",
                    this.trigger("destroy");
                    var t = this.option("placeFocusBack") ? this.getSlide().$trigger : null;
                    this.Carousel.destroy(),
                    this.detachPlugins(),
                    this.Carousel = null,
                    this.options = {},
                    this.events = {},
                    this.$container.remove(),
                    this.$container = this.$backdrop = this.$carousel = null,
                    t && q(t),
                    at.delete(this.id);
                    var e = i.getInstance();
                    e ? e.focus() : (document.documentElement.classList.remove("with-fancybox"),
                    document.body.classList.remove("is-using-mouse"),
                    this.revealScrollbar())
                }
            }
        }], [{
            key: "show",
            value: function(t) {
                var e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
                return new i(t,e)
            }
        }, {
            key: "fromEvent",
            value: function(t) {
                var e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
                if (!t.defaultPrevented && !(t.button && 0 !== t.button || t.ctrlKey || t.metaKey || t.shiftKey)) {
                    var n, o, a, s = t.composedPath()[0], r = s;
                    if ((r.matches("[data-fancybox-trigger]") || (r = r.closest("[data-fancybox-trigger]"))) && (n = r && r.dataset && r.dataset.fancyboxTrigger),
                    n) {
                        var l = document.querySelectorAll('[data-fancybox="'.concat(n, '"]'))
                          , c = parseInt(r.dataset.fancyboxIndex, 10) || 0;
                        r = l.length ? l[c] : r
                    }
                    r || (r = s),
                    Array.from(i.openers.keys()).reverse().some((function(e) {
                        a = r;
                        var i = !1;
                        try {
                            a instanceof Element && ("string" == typeof e || e instanceof String) && (i = a.matches(e) || (a = a.closest(e)))
                        } catch (t) {}
                        return !!i && (t.preventDefault(),
                        o = e,
                        !0)
                    }
                    ));
                    var h = !1;
                    if (o) {
                        e.event = t,
                        e.target = a,
                        a.origTarget = s,
                        h = i.fromOpener(o, e);
                        var d = i.getInstance();
                        d && "ready" === d.state && t.detail && document.body.classList.add("is-using-mouse")
                    }
                    return h
                }
            }
        }, {
            key: "fromOpener",
            value: function(t) {
                var e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {}
                  , n = function(t) {
                    for (var e = ["false", "0", "no", "null", "undefined"], i = ["true", "1", "yes"], n = Object.assign({}, t.dataset), o = {}, a = 0, s = Object.entries(n); a < s.length; a++) {
                        var r = g(s[a], 2)
                          , l = r[0]
                          , c = r[1];
                        if ("fancybox" !== l)
                            if ("width" === l || "height" === l)
                                o["_".concat(l)] = c;
                            else if ("string" == typeof c || c instanceof String)
                                if (e.indexOf(c) > -1)
                                    o[l] = !1;
                                else if (i.indexOf(o[l]) > -1)
                                    o[l] = !0;
                                else
                                    try {
                                        o[l] = JSON.parse(c)
                                    } catch (t) {
                                        o[l] = c
                                    }
                            else
                                o[l] = c
                    }
                    return t instanceof Element && (o.$trigger = t),
                    o
                }
                  , o = []
                  , a = e.startIndex || 0
                  , s = e.target || null
                  , r = void 0 !== (e = k({}, e, i.openers.get(t))).groupAll && e.groupAll
                  , l = void 0 === e.groupAttr ? "data-fancybox" : e.groupAttr
                  , c = l && s ? s.getAttribute("".concat(l)) : "";
                if (!s || c || r) {
                    var h = e.root || (s ? s.getRootNode() : document.body);
                    o = [].slice.call(h.querySelectorAll(t))
                }
                if (s && !r && (o = c ? o.filter((function(t) {
                    return t.getAttribute("".concat(l)) === c
                }
                )) : [s]),
                !o.length)
                    return !1;
                var d = i.getInstance();
                return !(d && o.indexOf(d.options.$trigger) > -1) && (a = s ? o.indexOf(s) : a,
                new i(o = o.map(n),k({}, e, {
                    startIndex: a,
                    $trigger: s
                })))
            }
        }, {
            key: "bind",
            value: function(t) {
                var e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
                function n() {
                    document.body.addEventListener("click", i.fromEvent, !1)
                }
                W && (i.openers.size || (/complete|interactive|loaded/.test(document.readyState) ? n() : document.addEventListener("DOMContentLoaded", n)),
                i.openers.set(t, e))
            }
        }, {
            key: "unbind",
            value: function(t) {
                i.openers.delete(t),
                i.openers.size || i.destroy()
            }
        }, {
            key: "destroy",
            value: function() {
                for (var t; t = i.getInstance(); )
                    t.destroy();
                i.openers = new Map,
                document.body.removeEventListener("click", i.fromEvent, !1)
            }
        }, {
            key: "getInstance",
            value: function(t) {
                return t ? at.get(t) : Array.from(at.values()).reverse().find((function(t) {
                    return !["closing", "customClosing", "destroy"].includes(t.state) && t
                }
                )) || null
            }
        }, {
            key: "close",
            value: function() {
                var t = !(arguments.length > 0 && void 0 !== arguments[0]) || arguments[0]
                  , e = arguments.length > 1 ? arguments[1] : void 0;
                if (t) {
                    var n, o = x(at.values());
                    try {
                        for (o.s(); !(n = o.n()).done; ) {
                            var a = n.value;
                            a.close(e)
                        }
                    } catch (t) {
                        o.e(t)
                    } finally {
                        o.f()
                    }
                } else {
                    var s = i.getInstance();
                    s && s.close(e)
                }
            }
        }, {
            key: "next",
            value: function() {
                var t = i.getInstance();
                t && t.next()
            }
        }, {
            key: "prev",
            value: function() {
                var t = i.getInstance();
                t && t.prev()
            }
        }]),
        i
    }(O);
    rt.version = "4.0.27",
    rt.defaults = ot,
    rt.openers = new Map,
    rt.Plugins = nt,
    rt.bind("[data-fancybox]");
    for (var lt = 0, ct = Object.entries(rt.Plugins || {}); lt < ct.length; lt++) {
        var ht = g(ct[lt], 2);
        ht[0];
        var dt = ht[1];
        "function" == typeof dt.create && dt.create(rt)
    }
    t.Carousel = H,
    t.Fancybox = rt,
    t.Panzoom = M
}
));

//Count
!function(t) {
    function e(t, e) {
        return t.toFixed(e.decimals)
    }
    t.fn.countTo = function(e) {
        return e = e || {},
        t(this).each(function() {
            function n() {
                u += l,
                f++,
                o(u),
                "function" == typeof a.onUpdate && a.onUpdate.call(i, u),
                f >= r && (c.removeData("countTo"),
                clearInterval(d.interval),
                u = a.to,
                "function" == typeof a.onComplete && a.onComplete.call(i, u))
            }
            function o(t) {
                var e = a.formatter.call(i, t, a);
                c.html(e)
            }
            var a = t.extend({}, t.fn.countTo.defaults, {
                from: t(this).data("from"),
                to: t(this).data("to"),
                speed: t(this).data("speed"),
                refreshInterval: t(this).data("refresh-interval"),
                decimals: t(this).data("decimals")
            }, e)
              , r = Math.ceil(a.speed / a.refreshInterval)
              , l = (a.to - a.from) / r
              , i = this
              , c = t(this)
              , f = 0
              , u = a.from
              , d = c.data("countTo") || {};
            c.data("countTo", d),
            d.interval && clearInterval(d.interval),
            d.interval = setInterval(n, a.refreshInterval),
            o(u)
        })
    }
    ,
    t.fn.countTo.defaults = {
        from: 0,
        to: 0,
        speed: 5e3,
        refreshInterval: 50,
        decimals: 0,
        formatter: e,
        onUpdate: null,
        onComplete: null
    }
}(jQuery),
jQuery(function(t) {
    function e(e) {
        var n = t(this);
        e = t.extend({}, e || {}, n.data("countToOptions") || {}),
        n.countTo(e)
    }
    t("#count").data("countToOptions", {
        formatter: function(t, e) {
            return t.toFixed(e.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ",")
        }
    }),
    t(".timer").each(e)
});

// Option JS Slider
$(document).ready(function() {
    $(".sliderhome").owlCarousel({
        items: 1,
        smartSpeed: 600,
        nav: !0,
        lazyLoad: !0,
        navText: ["", ""],
        loop: !0,
        autoplay: !0,
        autoplaySpeed: 900,
        dots: !0,
        mouseDrag: !1,
        singleItem: !0,
        animateIn: "fadeIn",
        animateOut: "fadeOut",
        responsiveClass: !0,
        responsive: {
            0: {
                items: 1,
                nav: !1,
                mouseDrag: !0
            },
            601: {
                items: 1,
                nav: !0
            }
        }
    })
}),
$(document).ready(function() {
    $(".teacherslider").owlCarousel({
        items: 5,
        smartSpeed: 1e3,
        nav: !0,
        margin: 30,
        navText: ["", ""],
        loop: !0,
        autoplay: !0,
        autoplaySpeed: 900,
        dots: !0,
        responsiveClass: !0,
        responsive: {
            0: {
                items: 1,
                nav: !1
            },
            380: {
                items: 2,
                margin: 20,
                nav: !1
            },
            480: {
                items: 2,
                nav: !1
            },
            640: {
                items: 3,
                nav: !1
            },
            800: {
                items: 4,
                nav: !1
            },
            980: {
                items: 5,
                nav: !0
            }
        }
    })
});

// Color h3
$('.sliderhome .sch-content h3').each(function() {
    var text = $(this).text().split(' ');
    if (text.length < 1)
        return;
    text[0] = '<span class="FirstWord">' + text[0] + '</span>';
    $(this).html(text.join(' '));
});

/**
* Owl Carousel v2.3.4
* Copyright 2013-2018 David Deutsch
* Licensed under: SEE LICENSE IN https://github.com/OwlCarousel2/OwlCarousel2/blob/master/LICENSE
*/
!function(t, e, i, s) {
    function n(e, i) {
        this.settings = null,
        this.options = t.extend({}, n.Defaults, i),
        this.$element = t(e),
        this._handlers = {},
        this._plugins = {},
        this._supress = {},
        this._current = null,
        this._speed = null,
        this._coordinates = [],
        this._breakpoint = null,
        this._width = null,
        this._items = [],
        this._clones = [],
        this._mergers = [],
        this._widths = [],
        this._invalidated = {},
        this._pipe = [],
        this._drag = {
            time: null,
            target: null,
            pointer: null,
            stage: {
                start: null,
                current: null
            },
            direction: null
        },
        this._states = {
            current: {},
            tags: {
                initializing: ["busy"],
                animating: ["busy"],
                dragging: ["interacting"]
            }
        },
        t.each(["onResize", "onThrottledResize"], t.proxy(function(e, i) {
            this._handlers[i] = t.proxy(this[i], this)
        }, this)),
        t.each(n.Plugins, t.proxy(function(t, e) {
            this._plugins[t.charAt(0).toLowerCase() + t.slice(1)] = new e(this)
        }, this)),
        t.each(n.Workers, t.proxy(function(e, i) {
            this._pipe.push({
                filter: i.filter,
                run: t.proxy(i.run, this)
            })
        }, this)),
        this.setup(),
        this.initialize()
    }
    n.Defaults = {
        items: 3,
        loop: !1,
        center: !1,
        rewind: !1,
        checkVisibility: !0,
        mouseDrag: !0,
        touchDrag: !0,
        pullDrag: !0,
        freeDrag: !1,
        margin: 0,
        stagePadding: 0,
        merge: !1,
        mergeFit: !0,
        autoWidth: !1,
        startPosition: 0,
        rtl: !1,
        smartSpeed: 250,
        fluidSpeed: !1,
        dragEndSpeed: !1,
        responsive: {},
        responsiveRefreshRate: 200,
        responsiveBaseElement: e,
        fallbackEasing: "swing",
        slideTransition: "",
        info: !1,
        nestedItemSelector: !1,
        itemElement: "div",
        stageElement: "div",
        refreshClass: "owl-refresh",
        loadedClass: "owl-loaded",
        loadingClass: "owl-loading",
        rtlClass: "owl-rtl",
        responsiveClass: "owl-responsive",
        dragClass: "owl-drag",
        itemClass: "owl-item",
        stageClass: "owl-stage",
        stageOuterClass: "owl-stage-outer",
        grabClass: "owl-grab"
    },
    n.Width = {
        Default: "default",
        Inner: "inner",
        Outer: "outer"
    },
    n.Type = {
        Event: "event",
        State: "state"
    },
    n.Plugins = {},
    n.Workers = [{
        filter: ["width", "settings"],
        run: function() {
            this._width = this.$element.width()
        }
    }, {
        filter: ["width", "items", "settings"],
        run: function(t) {
            t.current = this._items && this._items[this.relative(this._current)]
        }
    }, {
        filter: ["items", "settings"],
        run: function() {
            this.$stage.children(".cloned").remove()
        }
    }, {
        filter: ["width", "items", "settings"],
        run: function(t) {
            var e = this.settings.margin || ""
              , i = !this.settings.autoWidth
              , s = this.settings.rtl
              , n = {
                width: "auto",
                "margin-left": s ? e : "",
                "margin-right": s ? "" : e
            };
            !i && this.$stage.children().css(n),
            t.css = n
        }
    }, {
        filter: ["width", "items", "settings"],
        run: function(t) {
            var e = (this.width() / this.settings.items).toFixed(3) - this.settings.margin
              , i = null
              , s = this._items.length
              , n = !this.settings.autoWidth
              , o = [];
            for (t.items = {
                merge: !1,
                width: e
            }; s--; )
                i = this._mergers[s],
                i = this.settings.mergeFit && Math.min(i, this.settings.items) || i,
                t.items.merge = i > 1 || t.items.merge,
                o[s] = n ? e * i : this._items[s].width();
            this._widths = o
        }
    }, {
        filter: ["items", "settings"],
        run: function() {
            var e = []
              , i = this._items
              , s = this.settings
              , n = Math.max(2 * s.items, 4)
              , o = 2 * Math.ceil(i.length / 2)
              , r = s.loop && i.length ? s.rewind ? n : Math.max(n, o) : 0
              , a = ""
              , h = "";
            for (r /= 2; r > 0; )
                e.push(this.normalize(e.length / 2, !0)),
                a += i[e[e.length - 1]][0].outerHTML,
                e.push(this.normalize(i.length - 1 - (e.length - 1) / 2, !0)),
                h = i[e[e.length - 1]][0].outerHTML + h,
                r -= 1;
            this._clones = e,
            t(a).addClass("cloned").appendTo(this.$stage),
            t(h).addClass("cloned").prependTo(this.$stage)
        }
    }, {
        filter: ["width", "items", "settings"],
        run: function() {
            for (var t = this.settings.rtl ? 1 : -1, e = this._clones.length + this._items.length, i = -1, s = 0, n = 0, o = []; ++i < e; )
                s = o[i - 1] || 0,
                n = this._widths[this.relative(i)] + this.settings.margin,
                o.push(s + n * t);
            this._coordinates = o
        }
    }, {
        filter: ["width", "items", "settings"],
        run: function() {
            var t = this.settings.stagePadding
              , e = this._coordinates
              , i = {
                width: Math.ceil(Math.abs(e[e.length - 1])) + 2 * t,
                "padding-left": t || "",
                "padding-right": t || ""
            };
            this.$stage.css(i)
        }
    }, {
        filter: ["width", "items", "settings"],
        run: function(t) {
            var e = this._coordinates.length
              , i = !this.settings.autoWidth
              , s = this.$stage.children();
            if (i && t.items.merge)
                for (; e--; )
                    t.css.width = this._widths[this.relative(e)],
                    s.eq(e).css(t.css);
            else
                i && (t.css.width = t.items.width,
                s.css(t.css))
        }
    }, {
        filter: ["items"],
        run: function() {
            this._coordinates.length < 1 && this.$stage.removeAttr("style")
        }
    }, {
        filter: ["width", "items", "settings"],
        run: function(t) {
            t.current = t.current ? this.$stage.children().index(t.current) : 0,
            t.current = Math.max(this.minimum(), Math.min(this.maximum(), t.current)),
            this.reset(t.current)
        }
    }, {
        filter: ["position"],
        run: function() {
            this.animate(this.coordinates(this._current))
        }
    }, {
        filter: ["width", "position", "items", "settings"],
        run: function() {
            var t, e, i, s, n = this.settings.rtl ? 1 : -1, o = 2 * this.settings.stagePadding, r = this.coordinates(this.current()) + o, a = r + this.width() * n, h = [];
            for (i = 0,
            s = this._coordinates.length; s > i; i++)
                t = this._coordinates[i - 1] || 0,
                e = Math.abs(this._coordinates[i]) + o * n,
                (this.op(t, "<=", r) && this.op(t, ">", a) || this.op(e, "<", r) && this.op(e, ">", a)) && h.push(i);
            this.$stage.children(".active").removeClass("active"),
            this.$stage.children(":eq(" + h.join("), :eq(") + ")").addClass("active"),
            this.$stage.children(".center").removeClass("center"),
            this.settings.center && this.$stage.children().eq(this.current()).addClass("center")
        }
    }],
    n.prototype.initializeStage = function() {
        this.$stage = this.$element.find("." + this.settings.stageClass),
        this.$stage.length || (this.$element.addClass(this.options.loadingClass),
        this.$stage = t("<" + this.settings.stageElement + ">", {
            "class": this.settings.stageClass
        }).wrap(t("<div/>", {
            "class": this.settings.stageOuterClass
        })),
        this.$element.append(this.$stage.parent()))
    }
    ,
    n.prototype.initializeItems = function() {
        var e = this.$element.find(".owl-item");
        return e.length ? (this._items = e.get().map(function(e) {
            return t(e)
        }),
        this._mergers = this._items.map(function() {
            return 1
        }),
        void this.refresh()) : (this.replace(this.$element.children().not(this.$stage.parent())),
        this.isVisible() ? this.refresh() : this.invalidate("width"),
        void this.$element.removeClass(this.options.loadingClass).addClass(this.options.loadedClass))
    }
    ,
    n.prototype.initialize = function() {
        if (this.enter("initializing"),
        this.trigger("initialize"),
        this.$element.toggleClass(this.settings.rtlClass, this.settings.rtl),
        this.settings.autoWidth && !this.is("pre-loading")) {
            var t, e, i;
            t = this.$element.find("img"),
            e = this.settings.nestedItemSelector ? "." + this.settings.nestedItemSelector : s,
            i = this.$element.children(e).width(),
            t.length && 0 >= i && this.preloadAutoWidthImages(t)
        }
        this.initializeStage(),
        this.initializeItems(),
        this.registerEventHandlers(),
        this.leave("initializing"),
        this.trigger("initialized")
    }
    ,
    n.prototype.isVisible = function() {
        return this.settings.checkVisibility ? this.$element.is(":visible") : !0
    }
    ,
    n.prototype.setup = function() {
        var e = this.viewport()
          , i = this.options.responsive
          , s = -1
          , n = null;
        i ? (t.each(i, function(t) {
            e >= t && t > s && (s = Number(t))
        }),
        n = t.extend({}, this.options, i[s]),
        "function" == typeof n.stagePadding && (n.stagePadding = n.stagePadding()),
        delete n.responsive,
        n.responsiveClass && this.$element.attr("class", this.$element.attr("class").replace(new RegExp("(" + this.options.responsiveClass + "-)\\S+\\s","g"), "$1" + s))) : n = t.extend({}, this.options),
        this.trigger("change", {
            property: {
                name: "settings",
                value: n
            }
        }),
        this._breakpoint = s,
        this.settings = n,
        this.invalidate("settings"),
        this.trigger("changed", {
            property: {
                name: "settings",
                value: this.settings
            }
        })
    }
    ,
    n.prototype.optionsLogic = function() {
        this.settings.autoWidth && (this.settings.stagePadding = !1,
        this.settings.merge = !1)
    }
    ,
    n.prototype.prepare = function(e) {
        var i = this.trigger("prepare", {
            content: e
        });
        return i.data || (i.data = t("<" + this.settings.itemElement + "/>").addClass(this.options.itemClass).append(e)),
        this.trigger("prepared", {
            content: i.data
        }),
        i.data
    }
    ,
    n.prototype.update = function() {
        for (var e = 0, i = this._pipe.length, s = t.proxy(function(t) {
            return this[t]
        }, this._invalidated), n = {}; i > e; )
            (this._invalidated.all || t.grep(this._pipe[e].filter, s).length > 0) && this._pipe[e].run(n),
            e++;
        this._invalidated = {},
        !this.is("valid") && this.enter("valid")
    }
    ,
    n.prototype.width = function(t) {
        switch (t = t || n.Width.Default) {
        case n.Width.Inner:
        case n.Width.Outer:
            return this._width;
        default:
            return this._width - 2 * this.settings.stagePadding + this.settings.margin
        }
    }
    ,
    n.prototype.refresh = function() {
        this.enter("refreshing"),
        this.trigger("refresh"),
        this.setup(),
        this.optionsLogic(),
        this.$element.addClass(this.options.refreshClass),
        this.update(),
        this.$element.removeClass(this.options.refreshClass),
        this.leave("refreshing"),
        this.trigger("refreshed")
    }
    ,
    n.prototype.onThrottledResize = function() {
        e.clearTimeout(this.resizeTimer),
        this.resizeTimer = e.setTimeout(this._handlers.onResize, this.settings.responsiveRefreshRate)
    }
    ,
    n.prototype.onResize = function() {
        return this._items.length ? this._width === this.$element.width() ? !1 : this.isVisible() ? (this.enter("resizing"),
        this.trigger("resize").isDefaultPrevented() ? (this.leave("resizing"),
        !1) : (this.invalidate("width"),
        this.refresh(),
        this.leave("resizing"),
        void this.trigger("resized"))) : !1 : !1
    }
    ,
    n.prototype.registerEventHandlers = function() {
        t.support.transition && this.$stage.on(t.support.transition.end + ".owl.core", t.proxy(this.onTransitionEnd, this)),
        this.settings.responsive !== !1 && this.on(e, "resize", this._handlers.onThrottledResize),
        this.settings.mouseDrag && (this.$element.addClass(this.options.dragClass),
        this.$stage.on("mousedown.owl.core", t.proxy(this.onDragStart, this)),
        this.$stage.on("dragstart.owl.core selectstart.owl.core", function() {
            return !1
        })),
        this.settings.touchDrag && (this.$stage.on("touchstart.owl.core", t.proxy(this.onDragStart, this)),
        this.$stage.on("touchcancel.owl.core", t.proxy(this.onDragEnd, this)))
    }
    ,
    n.prototype.onDragStart = function(e) {
        var s = null;
        3 !== e.which && (t.support.transform ? (s = this.$stage.css("transform").replace(/.*\(|\)| /g, "").split(","),
        s = {
            x: s[16 === s.length ? 12 : 4],
            y: s[16 === s.length ? 13 : 5]
        }) : (s = this.$stage.position(),
        s = {
            x: this.settings.rtl ? s.left + this.$stage.width() - this.width() + this.settings.margin : s.left,
            y: s.top
        }),
        this.is("animating") && (t.support.transform ? this.animate(s.x) : this.$stage.stop(),
        this.invalidate("position")),
        this.$element.toggleClass(this.options.grabClass, "mousedown" === e.type),
        this.speed(0),
        this._drag.time = (new Date).getTime(),
        this._drag.target = t(e.target),
        this._drag.stage.start = s,
        this._drag.stage.current = s,
        this._drag.pointer = this.pointer(e),
        t(i).on("mouseup.owl.core touchend.owl.core", t.proxy(this.onDragEnd, this)),
        t(i).one("mousemove.owl.core touchmove.owl.core", t.proxy(function(e) {
            var s = this.difference(this._drag.pointer, this.pointer(e));
            t(i).on("mousemove.owl.core touchmove.owl.core", t.proxy(this.onDragMove, this)),
            Math.abs(s.x) < Math.abs(s.y) && this.is("valid") || (e.preventDefault(),
            this.enter("dragging"),
            this.trigger("drag"))
        }, this)))
    }
    ,
    n.prototype.onDragMove = function(t) {
        var e = null
          , i = null
          , s = null
          , n = this.difference(this._drag.pointer, this.pointer(t))
          , o = this.difference(this._drag.stage.start, n);
        this.is("dragging") && (t.preventDefault(),
        this.settings.loop ? (e = this.coordinates(this.minimum()),
        i = this.coordinates(this.maximum() + 1) - e,
        o.x = ((o.x - e) % i + i) % i + e) : (e = this.settings.rtl ? this.coordinates(this.maximum()) : this.coordinates(this.minimum()),
        i = this.settings.rtl ? this.coordinates(this.minimum()) : this.coordinates(this.maximum()),
        s = this.settings.pullDrag ? -1 * n.x / 5 : 0,
        o.x = Math.max(Math.min(o.x, e + s), i + s)),
        this._drag.stage.current = o,
        this.animate(o.x))
    }
    ,
    n.prototype.onDragEnd = function(e) {
        var s = this.difference(this._drag.pointer, this.pointer(e))
          , n = this._drag.stage.current
          , o = s.x > 0 ^ this.settings.rtl ? "left" : "right";
        t(i).off(".owl.core"),
        this.$element.removeClass(this.options.grabClass),
        (0 !== s.x && this.is("dragging") || !this.is("valid")) && (this.speed(this.settings.dragEndSpeed || this.settings.smartSpeed),
        this.current(this.closest(n.x, 0 !== s.x ? o : this._drag.direction)),
        this.invalidate("position"),
        this.update(),
        this._drag.direction = o,
        (Math.abs(s.x) > 3 || (new Date).getTime() - this._drag.time > 300) && this._drag.target.one("click.owl.core", function() {
            return !1
        })),
        this.is("dragging") && (this.leave("dragging"),
        this.trigger("dragged"))
    }
    ,
    n.prototype.closest = function(e, i) {
        var n = -1
          , o = 30
          , r = this.width()
          , a = this.coordinates();
        return this.settings.freeDrag || t.each(a, t.proxy(function(t, h) {
            return "left" === i && e > h - o && h + o > e ? n = t : "right" === i && e > h - r - o && h - r + o > e ? n = t + 1 : this.op(e, "<", h) && this.op(e, ">", a[t + 1] !== s ? a[t + 1] : h - r) && (n = "left" === i ? t + 1 : t),
            -1 === n
        }, this)),
        this.settings.loop || (this.op(e, ">", a[this.minimum()]) ? n = e = this.minimum() : this.op(e, "<", a[this.maximum()]) && (n = e = this.maximum())),
        n
    }
    ,
    n.prototype.animate = function(e) {
        var i = this.speed() > 0;
        this.is("animating") && this.onTransitionEnd(),
        i && (this.enter("animating"),
        this.trigger("translate")),
        t.support.transform3d && t.support.transition ? this.$stage.css({
            transform: "translate3d(" + e + "px,0px,0px)",
            transition: this.speed() / 1e3 + "s" + (this.settings.slideTransition ? " " + this.settings.slideTransition : "")
        }) : i ? this.$stage.animate({
            left: e + "px"
        }, this.speed(), this.settings.fallbackEasing, t.proxy(this.onTransitionEnd, this)) : this.$stage.css({
            left: e + "px"
        })
    }
    ,
    n.prototype.is = function(t) {
        return this._states.current[t] && this._states.current[t] > 0
    }
    ,
    n.prototype.current = function(t) {
        if (t === s)
            return this._current;
        if (0 === this._items.length)
            return s;
        if (t = this.normalize(t),
        this._current !== t) {
            var e = this.trigger("change", {
                property: {
                    name: "position",
                    value: t
                }
            });
            e.data !== s && (t = this.normalize(e.data)),
            this._current = t,
            this.invalidate("position"),
            this.trigger("changed", {
                property: {
                    name: "position",
                    value: this._current
                }
            })
        }
        return this._current
    }
    ,
    n.prototype.invalidate = function(e) {
        return "string" === t.type(e) && (this._invalidated[e] = !0,
        this.is("valid") && this.leave("valid")),
        t.map(this._invalidated, function(t, e) {
            return e
        })
    }
    ,
    n.prototype.reset = function(t) {
        t = this.normalize(t),
        t !== s && (this._speed = 0,
        this._current = t,
        this.suppress(["translate", "translated"]),
        this.animate(this.coordinates(t)),
        this.release(["translate", "translated"]))
    }
    ,
    n.prototype.normalize = function(t, e) {
        var i = this._items.length
          , n = e ? 0 : this._clones.length;
        return !this.isNumeric(t) || 1 > i ? t = s : (0 > t || t >= i + n) && (t = ((t - n / 2) % i + i) % i + n / 2),
        t
    }
    ,
    n.prototype.relative = function(t) {
        return t -= this._clones.length / 2,
        this.normalize(t, !0)
    }
    ,
    n.prototype.maximum = function(t) {
        var e, i, s, n = this.settings, o = this._coordinates.length;
        if (n.loop)
            o = this._clones.length / 2 + this._items.length - 1;
        else if (n.autoWidth || n.merge) {
            if (e = this._items.length)
                for (i = this._items[--e].width(),
                s = this.$element.width(); e-- && (i += this._items[e].width() + this.settings.margin,
                !(i > s)); )
                    ;
            o = e + 1
        } else
            o = n.center ? this._items.length - 1 : this._items.length - n.items;
        return t && (o -= this._clones.length / 2),
        Math.max(o, 0)
    }
    ,
    n.prototype.minimum = function(t) {
        return t ? 0 : this._clones.length / 2
    }
    ,
    n.prototype.items = function(t) {
        return t === s ? this._items.slice() : (t = this.normalize(t, !0),
        this._items[t])
    }
    ,
    n.prototype.mergers = function(t) {
        return t === s ? this._mergers.slice() : (t = this.normalize(t, !0),
        this._mergers[t])
    }
    ,
    n.prototype.clones = function(e) {
        var i = this._clones.length / 2
          , n = i + this._items.length
          , o = function(t) {
            return t % 2 === 0 ? n + t / 2 : i - (t + 1) / 2
        };
        return e === s ? t.map(this._clones, function(t, e) {
            return o(e)
        }) : t.map(this._clones, function(t, i) {
            return t === e ? o(i) : null
        })
    }
    ,
    n.prototype.speed = function(t) {
        return t !== s && (this._speed = t),
        this._speed
    }
    ,
    n.prototype.coordinates = function(e) {
        var i, n = 1, o = e - 1;
        return e === s ? t.map(this._coordinates, t.proxy(function(t, e) {
            return this.coordinates(e)
        }, this)) : (this.settings.center ? (this.settings.rtl && (n = -1,
        o = e + 1),
        i = this._coordinates[e],
        i += (this.width() - i + (this._coordinates[o] || 0)) / 2 * n) : i = this._coordinates[o] || 0,
        i = Math.ceil(i))
    }
    ,
    n.prototype.duration = function(t, e, i) {
        return 0 === i ? 0 : Math.min(Math.max(Math.abs(e - t), 1), 6) * Math.abs(i || this.settings.smartSpeed)
    }
    ,
    n.prototype.to = function(t, e) {
        var i = this.current()
          , s = null
          , n = t - this.relative(i)
          , o = (n > 0) - (0 > n)
          , r = this._items.length
          , a = this.minimum()
          , h = this.maximum();
        this.settings.loop ? (!this.settings.rewind && Math.abs(n) > r / 2 && (n += -1 * o * r),
        t = i + n,
        s = ((t - a) % r + r) % r + a,
        s !== t && h >= s - n && s - n > 0 && (i = s - n,
        t = s,
        this.reset(i))) : this.settings.rewind ? (h += 1,
        t = (t % h + h) % h) : t = Math.max(a, Math.min(h, t)),
        this.speed(this.duration(i, t, e)),
        this.current(t),
        this.isVisible() && this.update()
    }
    ,
    n.prototype.next = function(t) {
        t = t || !1,
        this.to(this.relative(this.current()) + 1, t)
    }
    ,
    n.prototype.prev = function(t) {
        t = t || !1,
        this.to(this.relative(this.current()) - 1, t)
    }
    ,
    n.prototype.onTransitionEnd = function(t) {
        return t !== s && (t.stopPropagation(),
        (t.target || t.srcElement || t.originalTarget) !== this.$stage.get(0)) ? !1 : (this.leave("animating"),
        void this.trigger("translated"))
    }
    ,
    n.prototype.viewport = function() {
        var s;
        return this.options.responsiveBaseElement !== e ? s = t(this.options.responsiveBaseElement).width() : e.innerWidth ? s = e.innerWidth : i.documentElement && i.documentElement.clientWidth ? s = i.documentElement.clientWidth : console.warn("Can not detect viewport width."),
        s
    }
    ,
    n.prototype.replace = function(e) {
        this.$stage.empty(),
        this._items = [],
        e && (e = e instanceof jQuery ? e : t(e)),
        this.settings.nestedItemSelector && (e = e.find("." + this.settings.nestedItemSelector)),
        e.filter(function() {
            return 1 === this.nodeType
        }).each(t.proxy(function(t, e) {
            e = this.prepare(e),
            this.$stage.append(e),
            this._items.push(e),
            this._mergers.push(1 * e.find("[data-merge]").addBack("[data-merge]").attr("data-merge") || 1)
        }, this)),
        this.reset(this.isNumeric(this.settings.startPosition) ? this.settings.startPosition : 0),
        this.invalidate("items")
    }
    ,
    n.prototype.add = function(e, i) {
        var n = this.relative(this._current);
        i = i === s ? this._items.length : this.normalize(i, !0),
        e = e instanceof jQuery ? e : t(e),
        this.trigger("add", {
            content: e,
            position: i
        }),
        e = this.prepare(e),
        0 === this._items.length || i === this._items.length ? (0 === this._items.length && this.$stage.append(e),
        0 !== this._items.length && this._items[i - 1].after(e),
        this._items.push(e),
        this._mergers.push(1 * e.find("[data-merge]").addBack("[data-merge]").attr("data-merge") || 1)) : (this._items[i].before(e),
        this._items.splice(i, 0, e),
        this._mergers.splice(i, 0, 1 * e.find("[data-merge]").addBack("[data-merge]").attr("data-merge") || 1)),
        this._items[n] && this.reset(this._items[n].index()),
        this.invalidate("items"),
        this.trigger("added", {
            content: e,
            position: i
        })
    }
    ,
    n.prototype.remove = function(t) {
        t = this.normalize(t, !0),
        t !== s && (this.trigger("remove", {
            content: this._items[t],
            position: t
        }),
        this._items[t].remove(),
        this._items.splice(t, 1),
        this._mergers.splice(t, 1),
        this.invalidate("items"),
        this.trigger("removed", {
            content: null,
            position: t
        }))
    }
    ,
    n.prototype.preloadAutoWidthImages = function(e) {
        e.each(t.proxy(function(e, i) {
            this.enter("pre-loading"),
            i = t(i),
            t(new Image).one("load", t.proxy(function(t) {
                i.attr("src", t.target.src),
                i.css("opacity", 1),
                this.leave("pre-loading"),
                !this.is("pre-loading") && !this.is("initializing") && this.refresh()
            }, this)).attr("src", i.attr("src") || i.attr("data-src") || i.attr("data-src-retina"))
        }, this))
    }
    ,
    n.prototype.destroy = function() {
        this.$element.off(".owl.core"),
        this.$stage.off(".owl.core"),
        t(i).off(".owl.core"),
        this.settings.responsive !== !1 && (e.clearTimeout(this.resizeTimer),
        this.off(e, "resize", this._handlers.onThrottledResize));
        for (var s in this._plugins)
            this._plugins[s].destroy();
        this.$stage.children(".cloned").remove(),
        this.$stage.unwrap(),
        this.$stage.children().contents().unwrap(),
        this.$stage.children().unwrap(),
        this.$stage.remove(),
        this.$element.removeClass(this.options.refreshClass).removeClass(this.options.loadingClass).removeClass(this.options.loadedClass).removeClass(this.options.rtlClass).removeClass(this.options.dragClass).removeClass(this.options.grabClass).attr("class", this.$element.attr("class").replace(new RegExp(this.options.responsiveClass + "-\\S+\\s","g"), "")).removeData("owl.carousel")
    }
    ,
    n.prototype.op = function(t, e, i) {
        var s = this.settings.rtl;
        switch (e) {
        case "<":
            return s ? t > i : i > t;
        case ">":
            return s ? i > t : t > i;
        case ">=":
            return s ? i >= t : t >= i;
        case "<=":
            return s ? t >= i : i >= t
        }
    }
    ,
    n.prototype.on = function(t, e, i, s) {
        t.addEventListener ? t.addEventListener(e, i, s) : t.attachEvent && t.attachEvent("on" + e, i)
    }
    ,
    n.prototype.off = function(t, e, i, s) {
        t.removeEventListener ? t.removeEventListener(e, i, s) : t.detachEvent && t.detachEvent("on" + e, i)
    }
    ,
    n.prototype.trigger = function(e, i, s) {
        var o = {
            item: {
                count: this._items.length,
                index: this.current()
            }
        }
          , r = t.camelCase(t.grep(["on", e, s], function(t) {
            return t
        }).join("-").toLowerCase())
          , a = t.Event([e, "owl", s || "carousel"].join(".").toLowerCase(), t.extend({
            relatedTarget: this
        }, o, i));
        return this._supress[e] || (t.each(this._plugins, function(t, e) {
            e.onTrigger && e.onTrigger(a)
        }),
        this.register({
            type: n.Type.Event,
            name: e
        }),
        this.$element.trigger(a),
        this.settings && "function" == typeof this.settings[r] && this.settings[r].call(this, a)),
        a
    }
    ,
    n.prototype.enter = function(e) {
        t.each([e].concat(this._states.tags[e] || []), t.proxy(function(t, e) {
            this._states.current[e] === s && (this._states.current[e] = 0),
            this._states.current[e]++
        }, this))
    }
    ,
    n.prototype.leave = function(e) {
        t.each([e].concat(this._states.tags[e] || []), t.proxy(function(t, e) {
            this._states.current[e]--
        }, this))
    }
    ,
    n.prototype.register = function(e) {
        if (e.type === n.Type.Event) {
            if (t.event.special[e.name] || (t.event.special[e.name] = {}),
            !t.event.special[e.name].owl) {
                var i = t.event.special[e.name]._default;
                t.event.special[e.name]._default = function(t) {
                    return !i || !i.apply || t.namespace && -1 !== t.namespace.indexOf("owl") ? t.namespace && t.namespace.indexOf("owl") > -1 : i.apply(this, arguments)
                }
                ,
                t.event.special[e.name].owl = !0
            }
        } else
            e.type === n.Type.State && (this._states.tags[e.name] ? this._states.tags[e.name] = this._states.tags[e.name].concat(e.tags) : this._states.tags[e.name] = e.tags,
            this._states.tags[e.name] = t.grep(this._states.tags[e.name], t.proxy(function(i, s) {
                return t.inArray(i, this._states.tags[e.name]) === s
            }, this)))
    }
    ,
    n.prototype.suppress = function(e) {
        t.each(e, t.proxy(function(t, e) {
            this._supress[e] = !0
        }, this))
    }
    ,
    n.prototype.release = function(e) {
        t.each(e, t.proxy(function(t, e) {
            delete this._supress[e]
        }, this))
    }
    ,
    n.prototype.pointer = function(t) {
        var i = {
            x: null,
            y: null
        };
        return t = t.originalEvent || t || e.event,
        t = t.touches && t.touches.length ? t.touches[0] : t.changedTouches && t.changedTouches.length ? t.changedTouches[0] : t,
        t.pageX ? (i.x = t.pageX,
        i.y = t.pageY) : (i.x = t.clientX,
        i.y = t.clientY),
        i
    }
    ,
    n.prototype.isNumeric = function(t) {
        return !isNaN(parseFloat(t))
    }
    ,
    n.prototype.difference = function(t, e) {
        return {
            x: t.x - e.x,
            y: t.y - e.y
        }
    }
    ,
    t.fn.owlCarousel = function(e) {
        var i = Array.prototype.slice.call(arguments, 1);
        return this.each(function() {
            var s = t(this)
              , o = s.data("owl.carousel");
            o || (o = new n(this,"object" == typeof e && e),
            s.data("owl.carousel", o),
            t.each(["next", "prev", "to", "destroy", "refresh", "replace", "add", "remove"], function(e, i) {
                o.register({
                    type: n.Type.Event,
                    name: i
                }),
                o.$element.on(i + ".owl.carousel.core", t.proxy(function(t) {
                    t.namespace && t.relatedTarget !== this && (this.suppress([i]),
                    o[i].apply(this, [].slice.call(arguments, 1)),
                    this.release([i]))
                }, o))
            })),
            "string" == typeof e && "_" !== e.charAt(0) && o[e].apply(o, i)
        })
    }
    ,
    t.fn.owlCarousel.Constructor = n
}(window.Zepto || window.jQuery, window, document),
function(t, e) {
    var i = function(e) {
        this._core = e,
        this._interval = null,
        this._visible = null,
        this._handlers = {
            "initialized.owl.carousel": t.proxy(function(t) {
                t.namespace && this._core.settings.autoRefresh && this.watch()
            }, this)
        },
        this._core.options = t.extend({}, i.Defaults, this._core.options),
        this._core.$element.on(this._handlers)
    };
    i.Defaults = {
        autoRefresh: !0,
        autoRefreshInterval: 500
    },
    i.prototype.watch = function() {
        this._interval || (this._visible = this._core.isVisible(),
        this._interval = e.setInterval(t.proxy(this.refresh, this), this._core.settings.autoRefreshInterval))
    }
    ,
    i.prototype.refresh = function() {
        this._core.isVisible() !== this._visible && (this._visible = !this._visible,
        this._core.$element.toggleClass("owl-hidden", !this._visible),
        this._visible && this._core.invalidate("width") && this._core.refresh())
    }
    ,
    i.prototype.destroy = function() {
        var t, i;
        e.clearInterval(this._interval);
        for (t in this._handlers)
            this._core.$element.off(t, this._handlers[t]);
        for (i in Object.getOwnPropertyNames(this))
            "function" != typeof this[i] && (this[i] = null)
    }
    ,
    t.fn.owlCarousel.Constructor.Plugins.AutoRefresh = i
}(window.Zepto || window.jQuery, window, document),
function(t, e, i, s) {
    var n = function(e) {
        this._core = e,
        this._loaded = [],
        this._handlers = {
            "initialized.owl.carousel change.owl.carousel resized.owl.carousel": t.proxy(function(e) {
                if (e.namespace && this._core.settings && this._core.settings.lazyLoad && (e.property && "position" == e.property.name || "initialized" == e.type)) {
                    var i = this._core.settings
                      , n = i.center && Math.ceil(i.items / 2) || i.items
                      , o = i.center && -1 * n || 0
                      , r = (e.property && e.property.value !== s ? e.property.value : this._core.current()) + o
                      , a = this._core.clones().length
                      , h = t.proxy(function(t, e) {
                        this.load(e)
                    }, this);
                    for (i.lazyLoadEager > 0 && (n += i.lazyLoadEager,
                    i.loop && (r -= i.lazyLoadEager,
                    n++)); o++ < n; )
                        this.load(a / 2 + this._core.relative(r)),
                        a && t.each(this._core.clones(this._core.relative(r)), h),
                        r++
                }
            }, this)
        },
        this._core.options = t.extend({}, n.Defaults, this._core.options),
        this._core.$element.on(this._handlers)
    };
    n.Defaults = {
        lazyLoad: !1,
        lazyLoadEager: 0
    },
    n.prototype.load = function(i) {
        var s = this._core.$stage.children().eq(i)
          , n = s && s.find(".owl-lazy");
        !n || t.inArray(s.get(0), this._loaded) > -1 || (n.each(t.proxy(function(i, s) {
            var n, o = t(s), r = e.devicePixelRatio > 1 && o.attr("data-src-retina") || o.attr("data-src") || o.attr("data-srcset");
            this._core.trigger("load", {
                element: o,
                url: r
            }, "lazy"),
            o.is("img") ? o.one("load.owl.lazy", t.proxy(function() {
                o.css("opacity", 1),
                this._core.trigger("loaded", {
                    element: o,
                    url: r
                }, "lazy")
            }, this)).attr("src", r) : o.is("source") ? o.one("load.owl.lazy", t.proxy(function() {
                this._core.trigger("loaded", {
                    element: o,
                    url: r
                }, "lazy")
            }, this)).attr("srcset", r) : (n = new Image,
            n.onload = t.proxy(function() {
                o.css({
                    "background-image": 'url("' + r + '")',
                    opacity: "1"
                }),
                this._core.trigger("loaded", {
                    element: o,
                    url: r
                }, "lazy")
            }, this),
            n.src = r)
        }, this)),
        this._loaded.push(s.get(0)))
    }
    ,
    n.prototype.destroy = function() {
        var t, e;
        for (t in this.handlers)
            this._core.$element.off(t, this.handlers[t]);
        for (e in Object.getOwnPropertyNames(this))
            "function" != typeof this[e] && (this[e] = null)
    }
    ,
    t.fn.owlCarousel.Constructor.Plugins.Lazy = n
}(window.Zepto || window.jQuery, window, document),
function(t, e) {
    var i = function(s) {
        this._core = s,
        this._previousHeight = null,
        this._handlers = {
            "initialized.owl.carousel refreshed.owl.carousel": t.proxy(function(t) {
                t.namespace && this._core.settings.autoHeight && this.update()
            }, this),
            "changed.owl.carousel": t.proxy(function(t) {
                t.namespace && this._core.settings.autoHeight && "position" === t.property.name && this.update()
            }, this),
            "loaded.owl.lazy": t.proxy(function(t) {
                t.namespace && this._core.settings.autoHeight && t.element.closest("." + this._core.settings.itemClass).index() === this._core.current() && this.update()
            }, this)
        },
        this._core.options = t.extend({}, i.Defaults, this._core.options),
        this._core.$element.on(this._handlers),
        this._intervalId = null;
        var n = this;
        t(e).on("load", function() {
            n._core.settings.autoHeight && n.update()
        }),
        t(e).resize(function() {
            n._core.settings.autoHeight && (null != n._intervalId && clearTimeout(n._intervalId),
            n._intervalId = setTimeout(function() {
                n.update()
            }, 250))
        })
    };
    i.Defaults = {
        autoHeight: !1,
        autoHeightClass: "owl-height"
    },
    i.prototype.update = function() {
        var e = this._core._current
          , i = e + this._core.settings.items
          , s = this._core.settings.lazyLoad
          , n = this._core.$stage.children().toArray().slice(e, i)
          , o = []
          , r = 0;
        t.each(n, function(e, i) {
            o.push(t(i).height())
        }),
        r = Math.max.apply(null, o),
        1 >= r && s && this._previousHeight && (r = this._previousHeight),
        this._previousHeight = r,
        this._core.$stage.parent().height(r).addClass(this._core.settings.autoHeightClass)
    }
    ,
    i.prototype.destroy = function() {
        var t, e;
        for (t in this._handlers)
            this._core.$element.off(t, this._handlers[t]);
        for (e in Object.getOwnPropertyNames(this))
            "function" != typeof this[e] && (this[e] = null)
    }
    ,
    t.fn.owlCarousel.Constructor.Plugins.AutoHeight = i
}(window.Zepto || window.jQuery, window, document),
function(t, e, i) {
    var s = function(e) {
        this._core = e,
        this._videos = {},
        this._playing = null,
        this._handlers = {
            "initialized.owl.carousel": t.proxy(function(t) {
                t.namespace && this._core.register({
                    type: "state",
                    name: "playing",
                    tags: ["interacting"]
                })
            }, this),
            "resize.owl.carousel": t.proxy(function(t) {
                t.namespace && this._core.settings.video && this.isInFullScreen() && t.preventDefault()
            }, this),
            "refreshed.owl.carousel": t.proxy(function(t) {
                t.namespace && this._core.is("resizing") && this._core.$stage.find(".cloned .owl-video-frame").remove()
            }, this),
            "changed.owl.carousel": t.proxy(function(t) {
                t.namespace && "position" === t.property.name && this._playing && this.stop()
            }, this),
            "prepared.owl.carousel": t.proxy(function(e) {
                if (e.namespace) {
                    var i = t(e.content).find(".owl-video");
                    i.length && (i.css("display", "none"),
                    this.fetch(i, t(e.content)))
                }
            }, this)
        },
        this._core.options = t.extend({}, s.Defaults, this._core.options),
        this._core.$element.on(this._handlers),
        this._core.$element.on("click.owl.video", ".owl-video-play-icon", t.proxy(function(t) {
            this.play(t)
        }, this))
    };
    s.Defaults = {
        video: !1,
        videoHeight: !1,
        videoWidth: !1
    },
    s.prototype.fetch = function(t, e) {
        var i = function() {
            return t.attr("data-vimeo-id") ? "vimeo" : t.attr("data-vzaar-id") ? "vzaar" : "youtube"
        }()
          , s = t.attr("data-vimeo-id") || t.attr("data-youtube-id") || t.attr("data-vzaar-id")
          , n = t.attr("data-width") || this._core.settings.videoWidth
          , o = t.attr("data-height") || this._core.settings.videoHeight
          , r = t.attr("href");
        if (!r)
            throw new Error("Missing video URL.");
        if (s = r.match(/(http:|https:|)\/\/(player.|www.|app.)?(vimeo\.com|youtu(be\.com|\.be|be\.googleapis\.com|be\-nocookie\.com)|vzaar\.com)\/(video\/|videos\/|embed\/|channels\/.+\/|groups\/.+\/|watch\?v=|v\/)?([A-Za-z0-9._%-]*)(\&\S+)?/),
        s[3].indexOf("youtu") > -1)
            i = "youtube";
        else if (s[3].indexOf("vimeo") > -1)
            i = "vimeo";
        else {
            if (!(s[3].indexOf("vzaar") > -1))
                throw new Error("Video URL not supported.");
            i = "vzaar"
        }
        s = s[6],
        this._videos[r] = {
            type: i,
            id: s,
            width: n,
            height: o
        },
        e.attr("data-video", r),
        this.thumbnail(t, this._videos[r])
    }
    ,
    s.prototype.thumbnail = function(e, i) {
        var s, n, o, r = i.width && i.height ? "width:" + i.width + "px;height:" + i.height + "px;" : "", a = e.find("img"), h = "src", l = "", c = this._core.settings, p = function(i) {
            n = '<div class="owl-video-play-icon"></div>',
            s = c.lazyLoad ? t("<div/>", {
                "class": "owl-video-tn " + l,
                srcType: i
            }) : t("<div/>", {
                "class": "owl-video-tn",
                style: "opacity:1;background-image:url(" + i + ")"
            }),
            e.after(s),
            e.after(n)
        };
        return e.wrap(t("<div/>", {
            "class": "owl-video-wrapper",
            style: r
        })),
        this._core.settings.lazyLoad && (h = "data-src",
        l = "owl-lazy"),
        a.length ? (p(a.attr(h)),
        a.remove(),
        !1) : void ("youtube" === i.type ? (o = "//img.youtube.com/vi/" + i.id + "/hqdefault.jpg",
        p(o)) : "vimeo" === i.type ? t.ajax({
            type: "GET",
            url: "//vimeo.com/api/v2/video/" + i.id + ".json",
            jsonp: "callback",
            dataType: "jsonp",
            success: function(t) {
                o = t[0].thumbnail_large,
                p(o)
            }
        }) : "vzaar" === i.type && t.ajax({
            type: "GET",
            url: "//vzaar.com/api/videos/" + i.id + ".json",
            jsonp: "callback",
            dataType: "jsonp",
            success: function(t) {
                o = t.framegrab_url,
                p(o)
            }
        }))
    }
    ,
    s.prototype.stop = function() {
        this._core.trigger("stop", null, "video"),
        this._playing.find(".owl-video-frame").remove(),
        this._playing.removeClass("owl-video-playing"),
        this._playing = null,
        this._core.leave("playing"),
        this._core.trigger("stopped", null, "video")
    }
    ,
    s.prototype.play = function(e) {
        var i, s, n = t(e.target), o = n.closest("." + this._core.settings.itemClass), r = this._videos[o.attr("data-video")], a = r.width || "100%", h = r.height || this._core.$stage.height();
        this._playing || (this._core.enter("playing"),
        this._core.trigger("play", null, "video"),
        o = this._core.items(this._core.relative(o.index())),
        this._core.reset(o.index()),
        i = t('<iframe frameborder="0" allowfullscreen mozallowfullscreen webkitAllowFullScreen ></iframe>'),
        i.attr("height", h),
        i.attr("width", a),
        "youtube" === r.type ? i.attr("src", "//www.youtube.com/embed/" + r.id + "?autoplay=1&rel=0&v=" + r.id) : "vimeo" === r.type ? i.attr("src", "//player.vimeo.com/video/" + r.id + "?autoplay=1") : "vzaar" === r.type && i.attr("src", "//view.vzaar.com/" + r.id + "/player?autoplay=true"),
        s = t(i).wrap('<div class="owl-video-frame" />').insertAfter(o.find(".owl-video")),
        this._playing = o.addClass("owl-video-playing"))
    }
    ,
    s.prototype.isInFullScreen = function() {
        var e = i.fullscreenElement || i.mozFullScreenElement || i.webkitFullscreenElement;
        return e && t(e).parent().hasClass("owl-video-frame")
    }
    ,
    s.prototype.destroy = function() {
        var t, e;
        this._core.$element.off("click.owl.video");
        for (t in this._handlers)
            this._core.$element.off(t, this._handlers[t]);
        for (e in Object.getOwnPropertyNames(this))
            "function" != typeof this[e] && (this[e] = null)
    }
    ,
    t.fn.owlCarousel.Constructor.Plugins.Video = s
}(window.Zepto || window.jQuery, window, document),
function(t, e, i, s) {
    var n = function(e) {
        this.core = e,
        this.core.options = t.extend({}, n.Defaults, this.core.options),
        this.swapping = !0,
        this.previous = s,
        this.next = s,
        this.handlers = {
            "change.owl.carousel": t.proxy(function(t) {
                t.namespace && "position" == t.property.name && (this.previous = this.core.current(),
                this.next = t.property.value)
            }, this),
            "drag.owl.carousel dragged.owl.carousel translated.owl.carousel": t.proxy(function(t) {
                t.namespace && (this.swapping = "translated" == t.type)
            }, this),
            "translate.owl.carousel": t.proxy(function(t) {
                t.namespace && this.swapping && (this.core.options.animateOut || this.core.options.animateIn) && this.swap()
            }, this)
        },
        this.core.$element.on(this.handlers)
    };
    n.Defaults = {
        animateOut: !1,
        animateIn: !1
    },
    n.prototype.swap = function() {
        if (1 === this.core.settings.items && t.support.animation && t.support.transition) {
            this.core.speed(0);
            var e, i = t.proxy(this.clear, this), s = this.core.$stage.children().eq(this.previous), n = this.core.$stage.children().eq(this.next), o = this.core.settings.animateIn, r = this.core.settings.animateOut;
            this.core.current() !== this.previous && (r && (e = this.core.coordinates(this.previous) - this.core.coordinates(this.next),
            s.one(t.support.animation.end, i).css({
                left: e + "px"
            }).addClass("animated owl-animated-out").addClass(r)),
            o && n.one(t.support.animation.end, i).addClass("animated owl-animated-in").addClass(o))
        }
    }
    ,
    n.prototype.clear = function(e) {
        t(e.target).css({
            left: ""
        }).removeClass("animated owl-animated-out owl-animated-in").removeClass(this.core.settings.animateIn).removeClass(this.core.settings.animateOut),
        this.core.onTransitionEnd()
    }
    ,
    n.prototype.destroy = function() {
        var t, e;
        for (t in this.handlers)
            this.core.$element.off(t, this.handlers[t]);
        for (e in Object.getOwnPropertyNames(this))
            "function" != typeof this[e] && (this[e] = null)
    }
    ,
    t.fn.owlCarousel.Constructor.Plugins.Animate = n
}(window.Zepto || window.jQuery, window, document),
function(t, e, i) {
    var s = function(e) {
        this._core = e,
        this._call = null,
        this._time = 0,
        this._timeout = 0,
        this._paused = !0,
        this._handlers = {
            "changed.owl.carousel": t.proxy(function(t) {
                t.namespace && "settings" === t.property.name ? this._core.settings.autoplay ? this.play() : this.stop() : t.namespace && "position" === t.property.name && this._paused && (this._time = 0)
            }, this),
            "initialized.owl.carousel": t.proxy(function(t) {
                t.namespace && this._core.settings.autoplay && this.play()
            }, this),
            "play.owl.autoplay": t.proxy(function(t, e, i) {
                t.namespace && this.play(e, i)
            }, this),
            "stop.owl.autoplay": t.proxy(function(t) {
                t.namespace && this.stop()
            }, this),
            "mouseover.owl.autoplay": t.proxy(function() {
                this._core.settings.autoplayHoverPause && this._core.is("rotating") && this.pause()
            }, this),
            "mouseleave.owl.autoplay": t.proxy(function() {
                this._core.settings.autoplayHoverPause && this._core.is("rotating") && this.play()
            }, this),
            "touchstart.owl.core": t.proxy(function() {
                this._core.settings.autoplayHoverPause && this._core.is("rotating") && this.pause()
            }, this),
            "touchend.owl.core": t.proxy(function() {
                this._core.settings.autoplayHoverPause && this.play()
            }, this)
        },
        this._core.$element.on(this._handlers),
        this._core.options = t.extend({}, s.Defaults, this._core.options)
    };
    s.Defaults = {
        autoplay: !1,
        autoplayTimeout: 5e3,
        autoplayHoverPause: !1,
        autoplaySpeed: !1
    },
    s.prototype._next = function(s) {
        this._call = e.setTimeout(t.proxy(this._next, this, s), this._timeout * (Math.round(this.read() / this._timeout) + 1) - this.read()),
        this._core.is("interacting") || i.hidden || this._core.next(s || this._core.settings.autoplaySpeed)
    }
    ,
    s.prototype.read = function() {
        return (new Date).getTime() - this._time
    }
    ,
    s.prototype.play = function(i, s) {
        var n;
        this._core.is("rotating") || this._core.enter("rotating"),
        i = i || this._core.settings.autoplayTimeout,
        n = Math.min(this._time % (this._timeout || i), i),
        this._paused ? (this._time = this.read(),
        this._paused = !1) : e.clearTimeout(this._call),
        this._time += this.read() % i - n,
        this._timeout = i,
        this._call = e.setTimeout(t.proxy(this._next, this, s), i - n)
    }
    ,
    s.prototype.stop = function() {
        this._core.is("rotating") && (this._time = 0,
        this._paused = !0,
        e.clearTimeout(this._call),
        this._core.leave("rotating"))
    }
    ,
    s.prototype.pause = function() {
        this._core.is("rotating") && !this._paused && (this._time = this.read(),
        this._paused = !0,
        e.clearTimeout(this._call))
    }
    ,
    s.prototype.destroy = function() {
        var t, e;
        this.stop();
        for (t in this._handlers)
            this._core.$element.off(t, this._handlers[t]);
        for (e in Object.getOwnPropertyNames(this))
            "function" != typeof this[e] && (this[e] = null)
    }
    ,
    t.fn.owlCarousel.Constructor.Plugins.autoplay = s
}(window.Zepto || window.jQuery, window, document),
function(t) {
    "use strict";
    var e = function(i) {
        this._core = i,
        this._initialized = !1,
        this._pages = [],
        this._controls = {},
        this._templates = [],
        this.$element = this._core.$element,
        this._overrides = {
            next: this._core.next,
            prev: this._core.prev,
            to: this._core.to
        },
        this._handlers = {
            "prepared.owl.carousel": t.proxy(function(e) {
                e.namespace && this._core.settings.dotsData && this._templates.push('<div class="' + this._core.settings.dotClass + '">' + t(e.content).find("[data-dot]").addBack("[data-dot]").attr("data-dot") + "</div>")
            }, this),
            "added.owl.carousel": t.proxy(function(t) {
                t.namespace && this._core.settings.dotsData && this._templates.splice(t.position, 0, this._templates.pop())
            }, this),
            "remove.owl.carousel": t.proxy(function(t) {
                t.namespace && this._core.settings.dotsData && this._templates.splice(t.position, 1)
            }, this),
            "changed.owl.carousel": t.proxy(function(t) {
                t.namespace && "position" == t.property.name && this.draw()
            }, this),
            "initialized.owl.carousel": t.proxy(function(t) {
                t.namespace && !this._initialized && (this._core.trigger("initialize", null, "navigation"),
                this.initialize(),
                this.update(),
                this.draw(),
                this._initialized = !0,
                this._core.trigger("initialized", null, "navigation"))
            }, this),
            "refreshed.owl.carousel": t.proxy(function(t) {
                t.namespace && this._initialized && (this._core.trigger("refresh", null, "navigation"),
                this.update(),
                this.draw(),
                this._core.trigger("refreshed", null, "navigation"))
            }, this)
        },
        this._core.options = t.extend({}, e.Defaults, this._core.options),
        this.$element.on(this._handlers)
    };
    e.Defaults = {
        nav: !1,
        navText: ['<span aria-label="Previous">&#x2039;</span>', '<span aria-label="Next">&#x203a;</span>'],
        navSpeed: !1,
        navElement: 'button type="button" role="presentation"',
        navContainer: !1,
        navContainerClass: "owl-nav",
        navClass: ["owl-prev", "owl-next"],
        slideBy: 1,
        dotClass: "owl-dot",
        dotsClass: "owl-dots",
        dots: !0,
        dotsEach: !1,
        dotsData: !1,
        dotsSpeed: !1,
        dotsContainer: !1
    },
    e.prototype.initialize = function() {
        var e, i = this._core.settings;
        this._controls.$relative = (i.navContainer ? t(i.navContainer) : t("<div>").addClass(i.navContainerClass).appendTo(this.$element)).addClass("disabled"),
        this._controls.$previous = t("<" + i.navElement + ">").addClass(i.navClass[0]).html(i.navText[0]).prependTo(this._controls.$relative).on("click", t.proxy(function() {
            this.prev(i.navSpeed)
        }, this)),
        this._controls.$next = t("<" + i.navElement + ">").addClass(i.navClass[1]).html(i.navText[1]).appendTo(this._controls.$relative).on("click", t.proxy(function() {
            this.next(i.navSpeed)
        }, this)),
        i.dotsData || (this._templates = [t('<button role="button">').addClass(i.dotClass).append(t("<span>")).prop("outerHTML")]),
        this._controls.$absolute = (i.dotsContainer ? t(i.dotsContainer) : t("<div>").addClass(i.dotsClass).appendTo(this.$element)).addClass("disabled"),
        this._controls.$absolute.on("click", "button", t.proxy(function(e) {
            var s = t(e.target).parent().is(this._controls.$absolute) ? t(e.target).index() : t(e.target).parent().index();
            e.preventDefault(),
            this.to(s, i.dotsSpeed)
        }, this));
        for (e in this._overrides)
            this._core[e] = t.proxy(this[e], this)
    }
    ,
    e.prototype.destroy = function() {
        var t, e, i, s, n;
        n = this._core.settings;
        for (t in this._handlers)
            this.$element.off(t, this._handlers[t]);
        for (e in this._controls)
            "$relative" === e && n.navContainer ? this._controls[e].html("") : this._controls[e].remove();
        for (s in this.overides)
            this._core[s] = this._overrides[s];
        for (i in Object.getOwnPropertyNames(this))
            "function" != typeof this[i] && (this[i] = null)
    }
    ,
    e.prototype.update = function() {
        var t, e, i, s = this._core.clones().length / 2, n = s + this._core.items().length, o = this._core.maximum(!0), r = this._core.settings, a = r.center || r.autoWidth || r.dotsData ? 1 : r.dotsEach || r.items;
        if ("page" !== r.slideBy && (r.slideBy = Math.min(r.slideBy, r.items)),
        r.dots || "page" == r.slideBy)
            for (this._pages = [],
            t = s,
            e = 0,
            i = 0; n > t; t++) {
                if (e >= a || 0 === e) {
                    if (this._pages.push({
                        start: Math.min(o, t - s),
                        end: t - s + a - 1
                    }),
                    Math.min(o, t - s) === o)
                        break;
                    e = 0,
                    ++i
                }
                e += this._core.mergers(this._core.relative(t))
            }
    }
    ,
    e.prototype.draw = function() {
        var e, i = this._core.settings, s = this._core.items().length <= i.items, n = this._core.relative(this._core.current()), o = i.loop || i.rewind;
        this._controls.$relative.toggleClass("disabled", !i.nav || s),
        i.nav && (this._controls.$previous.toggleClass("disabled", !o && n <= this._core.minimum(!0)),
        this._controls.$next.toggleClass("disabled", !o && n >= this._core.maximum(!0))),
        this._controls.$absolute.toggleClass("disabled", !i.dots || s),
        i.dots && (e = this._pages.length - this._controls.$absolute.children().length,
        i.dotsData && 0 !== e ? this._controls.$absolute.html(this._templates.join("")) : e > 0 ? this._controls.$absolute.append(new Array(e + 1).join(this._templates[0])) : 0 > e && this._controls.$absolute.children().slice(e).remove(),
        this._controls.$absolute.find(".active").removeClass("active"),
        this._controls.$absolute.children().eq(t.inArray(this.current(), this._pages)).addClass("active"))
    }
    ,
    e.prototype.onTrigger = function(e) {
        var i = this._core.settings;
        e.page = {
            index: t.inArray(this.current(), this._pages),
            count: this._pages.length,
            size: i && (i.center || i.autoWidth || i.dotsData ? 1 : i.dotsEach || i.items)
        }
    }
    ,
    e.prototype.current = function() {
        var e = this._core.relative(this._core.current());
        return t.grep(this._pages, t.proxy(function(t) {
            return t.start <= e && t.end >= e
        }, this)).pop()
    }
    ,
    e.prototype.getPosition = function(e) {
        var i, s, n = this._core.settings;
        return "page" == n.slideBy ? (i = t.inArray(this.current(), this._pages),
        s = this._pages.length,
        e ? ++i : --i,
        i = this._pages[(i % s + s) % s].start) : (i = this._core.relative(this._core.current()),
        s = this._core.items().length,
        e ? i += n.slideBy : i -= n.slideBy),
        i
    }
    ,
    e.prototype.next = function(e) {
        t.proxy(this._overrides.to, this._core)(this.getPosition(!0), e)
    }
    ,
    e.prototype.prev = function(e) {
        t.proxy(this._overrides.to, this._core)(this.getPosition(!1), e)
    }
    ,
    e.prototype.to = function(e, i, s) {
        var n;
        !s && this._pages.length ? (n = this._pages.length,
        t.proxy(this._overrides.to, this._core)(this._pages[(e % n + n) % n].start, i)) : t.proxy(this._overrides.to, this._core)(e, i)
    }
    ,
    t.fn.owlCarousel.Constructor.Plugins.Navigation = e
}(window.Zepto || window.jQuery, window, document),
function(t, e, i, s) {
    "use strict";
    var n = function(i) {
        this._core = i,
        this._hashes = {},
        this.$element = this._core.$element,
        this._handlers = {
            "initialized.owl.carousel": t.proxy(function(i) {
                i.namespace && "URLHash" === this._core.settings.startPosition && t(e).trigger("hashchange.owl.navigation")
            }, this),
            "prepared.owl.carousel": t.proxy(function(e) {
                if (e.namespace) {
                    var i = t(e.content).find("[data-hash]").addBack("[data-hash]").attr("data-hash");
                    if (!i)
                        return;
                    this._hashes[i] = e.content
                }
            }, this),
            "changed.owl.carousel": t.proxy(function(i) {
                if (i.namespace && "position" === i.property.name) {
                    var s = this._core.items(this._core.relative(this._core.current()))
                      , n = t.map(this._hashes, function(t, e) {
                        return t === s ? e : null
                    }).join();
                    if (!n || e.location.hash.slice(1) === n)
                        return;
                    e.location.hash = n
                }
            }, this)
        },
        this._core.options = t.extend({}, n.Defaults, this._core.options),
        this.$element.on(this._handlers),
        t(e).on("hashchange.owl.navigation", t.proxy(function() {
            var t = e.location.hash.substring(1)
              , i = this._core.$stage.children()
              , n = this._hashes[t] && i.index(this._hashes[t]);
            n !== s && n !== this._core.current() && this._core.to(this._core.relative(n), !1, !0)
        }, this))
    };
    n.Defaults = {
        URLhashListener: !1
    },
    n.prototype.destroy = function() {
        var i, s;
        t(e).off("hashchange.owl.navigation");
        for (i in this._handlers)
            this._core.$element.off(i, this._handlers[i]);
        for (s in Object.getOwnPropertyNames(this))
            "function" != typeof this[s] && (this[s] = null)
    }
    ,
    t.fn.owlCarousel.Constructor.Plugins.Hash = n
}(window.Zepto || window.jQuery, window, document),
function(t, e, i, s) {
    function n(e, i) {
        var n = !1
          , o = e.charAt(0).toUpperCase() + e.slice(1);
        return t.each((e + " " + a.join(o + " ") + o).split(" "), function(t, e) {
            return r[e] !== s ? (n = i ? e : !0,
            !1) : void 0
        }),
        n
    }
    function o(t) {
        return n(t, !0)
    }
    var r = t("<support>").get(0).style
      , a = "Webkit Moz O ms".split(" ")
      , h = {
        transition: {
            end: {
                WebkitTransition: "webkitTransitionEnd",
                MozTransition: "transitionend",
                OTransition: "oTransitionEnd",
                transition: "transitionend"
            }
        },
        animation: {
            end: {
                WebkitAnimation: "webkitAnimationEnd",
                MozAnimation: "animationend",
                OAnimation: "oAnimationEnd",
                animation: "animationend"
            }
        }
    }
      , l = {
        csstransforms: function() {
            return !!n("transform")
        },
        csstransforms3d: function() {
            return !!n("perspective")
        },
        csstransitions: function() {
            return !!n("transition")
        },
        cssanimations: function() {
            return !!n("animation")
        }
    };
    l.csstransitions() && (t.support.transition = new String(o("transition")),
    t.support.transition.end = h.transition.end[t.support.transition]),
    l.cssanimations() && (t.support.animation = new String(o("animation")),
    t.support.animation.end = h.animation.end[t.support.animation]),
    l.csstransforms() && (t.support.transform = new String(o("transform")),
    t.support.transform3d = l.csstransforms3d())
}(window.Zepto || window.jQuery, window, document);
//]]>
