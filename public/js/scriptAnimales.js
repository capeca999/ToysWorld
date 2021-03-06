! function(t, e) {
    "function" == typeof define && define.amd ? define("ev-emitter/ev-emitter", e) : "object" == typeof module && module.exports ? module.exports = e() : t.EvEmitter = e()
}("undefined" != typeof window ? window : this, function() {
    function t() {}
    var e = t.prototype;
    return e.on = function(t, e) {
        if (t && e) {
            var r = this._events = this._events || {},
                i = r[t] = r[t] || [];
            return -1 == i.indexOf(e) && i.push(e), this
        }
    }, e.once = function(t, e) {
        if (t && e) {
            this.on(t, e);
            var r = this._onceEvents = this._onceEvents || {};
            return (r[t] = r[t] || {})[e] = !0, this
        }
    }, e.off = function(t, e) {
        var r = this._events && this._events[t];
        if (r && r.length) {
            var i = r.indexOf(e);
            return -1 != i && r.splice(i, 1), this
        }
    }, e.emitEvent = function(t, e) {
        var r = this._events && this._events[t];
        if (r && r.length) {
            r = r.slice(0), e = e || [];
            for (var i = this._onceEvents && this._onceEvents[t], n = 0; n < r.length; n++) {
                var o = r[n];
                i && i[o] && (this.off(t, o), delete i[o]), o.apply(this, e)
            }
            return this
        }
    }, e.allOff = function() {
        delete this._events, delete this._onceEvents
    }, t
}),
function(t, e) {
    "use strict";
    "function" == typeof define && define.amd ? define(["ev-emitter/ev-emitter"], function(r) {
        return e(t, r)
    }) : "object" == typeof module && module.exports ? module.exports = e(t, require("ev-emitter")) : t.imagesLoaded = e(t, t.EvEmitter)
}("undefined" != typeof window ? window : this, function(t, e) {
    function r(t, e) {
        for (var r in e) t[r] = e[r];
        return t
    }

    function i(t, e, n) {
        if (!(this instanceof i)) return new i(t, e, n);
        var o = t;
        return "string" == typeof t && (o = document.querySelectorAll(t)), o ? (this.elements = function(t) {
            return Array.isArray(t) ? t : "object" == typeof t && "number" == typeof t.length ? l.call(t) : [t]
        }(o), this.options = r({}, this.options), "function" == typeof e ? n = e : r(this.options, e), n && this.on("always", n), this.getImages(), s && (this.jqDeferred = new s.Deferred), void setTimeout(this.check.bind(this))) : void a.error("Bad element for imagesLoaded " + (o || t))
    }

    function n(t) {
        this.img = t
    }

    function o(t, e) {
        this.url = t, this.element = e, this.img = new Image
    }
    var s = t.jQuery,
        a = t.console,
        l = Array.prototype.slice;
    i.prototype = Object.create(e.prototype), i.prototype.options = {}, i.prototype.getImages = function() {
        this.images = [], this.elements.forEach(this.addElementImages, this)
    }, i.prototype.addElementImages = function(t) {
        "IMG" == t.nodeName && this.addImage(t), !0 === this.options.background && this.addElementBackgroundImages(t);
        var e = t.nodeType;
        if (e && u[e]) {
            for (var r = t.querySelectorAll("img"), i = 0; i < r.length; i++) {
                var n = r[i];
                this.addImage(n)
            }
            if ("string" == typeof this.options.background) {
                var o = t.querySelectorAll(this.options.background);
                for (i = 0; i < o.length; i++) {
                    var s = o[i];
                    this.addElementBackgroundImages(s)
                }
            }
        }
    };
    var u = {
        1: !0,
        9: !0,
        11: !0
    };
    return i.prototype.addElementBackgroundImages = function(t) {
        var e = getComputedStyle(t);
        if (e)
            for (var r = /url\((['"])?(.*?)\1\)/gi, i = r.exec(e.backgroundImage); null !== i;) {
                var n = i && i[2];
                n && this.addBackground(n, t), i = r.exec(e.backgroundImage)
            }
    }, i.prototype.addImage = function(t) {
        var e = new n(t);
        this.images.push(e)
    }, i.prototype.addBackground = function(t, e) {
        var r = new o(t, e);
        this.images.push(r)
    }, i.prototype.check = function() {
        function t(t, r, i) {
            setTimeout(function() {
                e.progress(t, r, i)
            })
        }
        var e = this;
        return this.progressedCount = 0, this.hasAnyBroken = !1, this.images.length ? void this.images.forEach(function(e) {
            e.once("progress", t), e.check()
        }) : void this.complete()
    }, i.prototype.progress = function(t, e, r) {
        this.progressedCount++, this.hasAnyBroken = this.hasAnyBroken || !t.isLoaded, this.emitEvent("progress", [this, t, e]), this.jqDeferred && this.jqDeferred.notify && this.jqDeferred.notify(this, t), this.progressedCount == this.images.length && this.complete(), this.options.debug && a && a.log("progress: " + r, t, e)
    }, i.prototype.complete = function() {
        var t = this.hasAnyBroken ? "fail" : "done";
        if (this.isComplete = !0, this.emitEvent(t, [this]), this.emitEvent("always", [this]), this.jqDeferred) {
            var e = this.hasAnyBroken ? "reject" : "resolve";
            this.jqDeferred[e](this)
        }
    }, n.prototype = Object.create(e.prototype), n.prototype.check = function() {
        return this.getIsImageComplete() ? void this.confirm(0 !== this.img.naturalWidth, "naturalWidth") : (this.proxyImage = new Image, this.proxyImage.addEventListener("load", this), this.proxyImage.addEventListener("error", this), this.img.addEventListener("load", this), this.img.addEventListener("error", this), void(this.proxyImage.src = this.img.src))
    }, n.prototype.getIsImageComplete = function() {
        return this.img.complete && this.img.naturalWidth
    }, n.prototype.confirm = function(t, e) {
        this.isLoaded = t, this.emitEvent("progress", [this, this.img, e])
    }, n.prototype.handleEvent = function(t) {
        var e = "on" + t.type;
        this[e] && this[e](t)
    }, n.prototype.onload = function() {
        this.confirm(!0, "onload"), this.unbindEvents()
    }, n.prototype.onerror = function() {
        this.confirm(!1, "onerror"), this.unbindEvents()
    }, n.prototype.unbindEvents = function() {
        this.proxyImage.removeEventListener("load", this), this.proxyImage.removeEventListener("error", this), this.img.removeEventListener("load", this), this.img.removeEventListener("error", this)
    }, o.prototype = Object.create(n.prototype), o.prototype.check = function() {
        this.img.addEventListener("load", this), this.img.addEventListener("error", this), this.img.src = this.url, this.getIsImageComplete() && (this.confirm(0 !== this.img.naturalWidth, "naturalWidth"), this.unbindEvents())
    }, o.prototype.unbindEvents = function() {
        this.img.removeEventListener("load", this), this.img.removeEventListener("error", this)
    }, o.prototype.confirm = function(t, e) {
        this.isLoaded = t, this.emitEvent("progress", [this, this.element, e])
    }, i.makeJQueryPlugin = function(e) {
        (e = e || t.jQuery) && ((s = e).fn.imagesLoaded = function(t, e) {
            return new i(this, t, e).jqDeferred.promise(s(this))
        })
    }, i.makeJQueryPlugin(), i
}),
function(t) {
    function e(i) {
        if (r[i]) return r[i].exports;
        var n = r[i] = {
            i: i,
            l: !1,
            exports: {}
        };
        return t[i].call(n.exports, n, n.exports, e), n.l = !0, n.exports
    }
    var r = {};
    e.m = t, e.c = r, e.d = function(t, r, i) {
        e.o(t, r) || Object.defineProperty(t, r, {
            configurable: !1,
            enumerable: !0,
            get: i
        })
    }, e.n = function(t) {
        var r = t && t.__esModule ? function() {
            return t.default
        } : function() {
            return t
        };
        return e.d(r, "a", r), r
    }, e.o = function(t, e) {
        return Object.prototype.hasOwnProperty.call(t, e)
    }, e.p = "", e(e.s = 4)
}([function(t, e, r) {
    "use strict";
    r.d(e, "b", function() {
        return n
    }), r.d(e, "h", function() {
        return o
    }), r.d(e, "i", function() {
        return s
    }), r.d(e, "g", function() {
        return a
    }), r.d(e, "e", function() {
        return l
    }), r.d(e, "j", function() {
        return u
    }), r.d(e, "f", function() {
        return c
    }), r.d(e, "k", function() {
        return f
    }), r.d(e, "c", function() {
        return h
    }), r.d(e, "d", function() {
        return p
    }), r.d(e, "l", function() {
        return d
    }), r.d(e, "a", function() {
        return v
    });
    var i = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(t) {
            return typeof t
        } : function(t) {
            return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
        },
        n = function(t, e) {
            for (var r = 0; r < t.length; r++) {
                for (var i = !1, n = t[r], o = 0; o < e.length; o++) n === e[o] && (i = !0);
                if (!i) return !1
            }
            return !0
        },
        o = function(t) {
            var e = {};
            for (var r in t) e[r] = t[r];
            return e
        },
        s = function t(e, r) {
            var n = o(r);
            for (var s in e) s in n ? "object" !== i(n[s]) || "object" !== i(e[s]) || Array.isArray(e[s]) || (n[s] = t("object" === i(n[s]) ? n[s] : {}, e[s])) : n[s] = e[s];
            return n
        },
        a = function(t, e) {
            return Array.prototype.filter.call(t, function(t) {
                return e.includes(t)
            })
        },
        l = function(t, e, r) {
            var i = void 0;
            return function() {
                var n = this,
                    o = arguments;
                clearTimeout(i), i = setTimeout(function() {
                    i = null, r || t.apply(n, o)
                }, e), r && !i && t.apply(n, o)
            }
        },
        u = function(t) {
            for (var e = t.slice(0), r = []; 0 !== e.length;) {
                var i = Math.floor(e.length * Math.random());
                r.push(e[i]), e.splice(i, 1)
            }
            return r
        },
        c = function(t, e) {
            if (t.length !== e.length) return !1;
            for (var r = 0; r < t.length; r++)
                if (t[r].props.index !== e[r].props.index) return !1;
            return !0
        },
        f = function(t, e) {
            return t.slice(0).sort(function(t) {
                return function(e, r) {
                    var i = t(e),
                        n = t(r);
                    return i < n ? -1 : i > n ? 1 : 0
                }
            }(e))
        },
        h = function(t, e, r, n, o) {
            if (void 0 !== e) {
                var s = new Error('Filterizr: expected type of option "' + t + '" to be "' + r + '", but its type is: "' + (void 0 === e ? "undefined" : i(e)) + '"'),
                    a = !1,
                    l = !1,
                    u = r.includes("array");
                if ((void 0 === e ? "undefined" : i(e)).match(r) ? a = !0 : !a && u && (l = Array.isArray(e)), !a && !u) throw s;
                if (!a && u && !l) throw s;
                var c = function(t) {
                    return t ? " For further help read here: " + t : ""
                };
                if (Array.isArray(n)) {
                    var f = !1;
                    if (n.forEach(function(t) {
                            t === e && (f = !0)
                        }), !f) throw new Error('Filterizr: allowed values for option "' + t + '" are: ' + n.map(function(t) {
                        return '"' + t + '"'
                    }).join(", ") + '. Value received: "' + e + '".' + c(o))
                } else if (n instanceof RegExp) {
                    if (!e.match(n)) throw new Error('Filterizr: invalid value "' + e + '" for option "' + t + '" received.' + c(o))
                }
            }
        },
        p = /(^linear$)|(^ease-in-out$)|(^ease-in$)|(^ease-out$)|(^ease$)|(^step-start$)|(^step-end$)|(^steps\(\d\s*,\s*(end|start)\))$|(^cubic-bezier\((\d*\.*\d+)\s*,\s*(\d*\.*\d+)\s*,\s*(\d*\.*\d+)\s*,\s*(\d*\.*\d+)\))$/,
        d = "\n  webkitTransitionEnd.Filterizr \n  otransitionend.Filterizr \n  oTransitionEnd.Filterizr \n  msTransitionEnd.Filterizr \n  transitionend.Filterizr\n",
        v = {
            IDLE: "IDLE",
            FILTERING: "FILTERING",
            SORTING: "SORTING",
            SHUFFLING: "SHUFFLING"
        }
}, function(t, e, r) {
    "use strict";
    var i = r(2),
        n = r(0),
        o = function() {
            function t(t, e) {
                for (var r = 0; r < e.length; r++) {
                    var i = e[r];
                    i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
                }
            }
            return function(e, r, i) {
                return r && t(e.prototype, r), i && t(e, i), e
            }
        }(),
        s = window.jQuery,
        a = function() {
            function t() {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : ".filtr-container",
                    r = arguments[1];
                (function(t, e) {
                    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
                })(this, t), this.$node = s(e), this.props = {
                    FilterItems: this.getFilterItems(r),
                    w: this.getWidth(),
                    h: 0
                }, this.$node.css({
                    padding: 0,
                    position: "relative"
                }), this.updateFilterItemsDimensions()
            }
            return o(t, [{
                key: "destroy",
                value: function() {
                    this.$node.attr("style", "").find(".filtr-item").attr("style", ""), this.unbindEvents()
                }
            }, {
                key: "getFilterItems",
                value: function(t) {
                    return s.map(this.$node.find(".filtr-item"), function(e, r) {
                        return new i.a(s(e), r, t)
                    })
                }
            }, {
                key: "push",
                value: function(t, e) {
                    var r = this.props.FilterItems;
                    this.$node.append(t);
                    var n = r.length,
                        o = new i.a(t, n, e);
                    this.props.FilterItems.push(o)
                }
            }, {
                key: "calcColumns",
                value: function() {
                    return Math.round(this.props.w / this.props.FilterItems[0].props.w)
                }
            }, {
                key: "updateFilterItemsTransitionStyle",
                value: function(t, e, r, i) {
                    this.props.FilterItems.forEach(function(n) {
                        return n.$node.css({
                            transition: "all " + t + "s " + e + " " + n.calcDelay(r, i) + "ms"
                        })
                    })
                }
            }, {
                key: "updateHeight",
                value: function(t) {
                    this.props.h = t, this.$node.css("height", t)
                }
            }, {
                key: "updateWidth",
                value: function() {
                    this.props.w = this.getWidth()
                }
            }, {
                key: "updateFilterItemsDimensions",
                value: function() {
                    this.props.FilterItems.forEach(function(t) {
                        return t.updateDimensions()
                    })
                }
            }, {
                key: "getWidth",
                value: function() {
                    return this.$node.innerWidth()
                }
            }, {
                key: "bindTransitionEnd",
                value: function(t, e) {
                    this.$node.on(n.l, Object(n.e)(function() {
                        t()
                    }, e))
                }
            }, {
                key: "bindEvents",
                value: function(t) {
                    this.$node.on("filteringStart.Filterizr", t.onFilteringStart), this.$node.on("filteringEnd.Filterizr", t.onFilteringEnd), this.$node.on("shufflingStart.Filterizr", t.onShufflingStart), this.$node.on("shufflingEnd.Filterizr", t.onShufflingEnd), this.$node.on("sortingStart.Filterizr", t.onSortingStart), this.$node.on("sortingEnd.Filterizr", t.onSortingEnd)
                }
            }, {
                key: "unbindEvents",
                value: function() {
                    this.$node.off(n.l + "\n      filteringStart.Filterizr \n      filteringEnd.Filterizr \n      shufflingStart.Filterizr \n      shufflingEnd.Filterizr \n      sortingStart.Filterizr \n      sortingEnd.Filterizr")
                }
            }, {
                key: "trigger",
                value: function(t) {
                    this.$node.trigger(t)
                }
            }]), t
        }();
    e.a = a
}, function(t, e, r) {
    "use strict";
    var i = r(0),
        n = function() {
            function t(t, e) {
                for (var r = 0; r < e.length; r++) {
                    var i = e[r];
                    i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
                }
            }
            return function(e, r, i) {
                return r && t(e.prototype, r), i && t(e, i), e
            }
        }(),
        o = function() {
            function t(e, r, i) {
                var n = this;
                ! function(t, e) {
                    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
                }(this, t);
                var o = i.delay,
                    s = i.delayMode,
                    a = i.filterOutCss,
                    l = i.animationDuration,
                    u = i.easing;
                this.$node = e, this.props = {
                    data: function() {
                        var t = n.$node.data();
                        return delete t.category, delete t.sort, t
                    }(),
                    index: r,
                    sortData: this.$node.data("sort"),
                    lastPosition: {
                        left: 0,
                        top: 0
                    },
                    filteredOut: !1,
                    w: this.getWidth(),
                    h: this.getHeight()
                }, this.$node.css(a).css({
                    "-webkit-backface-visibility": "hidden",
                    perspective: "1000px",
                    "-webkit-perspective": "1000px",
                    "-webkit-transform-style": "preserve-3d",
                    position: "absolute",
                    transition: "all " + l + "s " + u + " " + this.calcDelay(o, s) + "ms"
                }), this.bindEvents()
            }
            return n(t, [{
                key: "filterIn",
                value: function(t, e) {
                    var r = Object(i.h)(e);
                    r.transform += " translate3d(" + t.left + "px," + t.top + "px, 0)", this.$node.css(r), this.props.lastPosition = t, this.props.filteredOut = !1
                }
            }, {
                key: "filterOut",
                value: function(t) {
                    var e = Object(i.h)(t),
                        r = this.props.lastPosition;
                    e.transform += " translate3d(" + r.left + "px," + r.top + "px, 0)", this.$node.css(e), this.props.filteredOut = !0
                }
            }, {
                key: "calcDelay",
                value: function(t, e) {
                    var r = 0;
                    return "progressive" === e ? r = t * this.props.index : this.props.index % 2 == 0 && (r = t), r
                }
            }, {
                key: "contentsMatchSearch",
                value: function(t) {
                    return Boolean(this.getContentsLowercase().includes(t))
                }
            }, {
                key: "getContentsLowercase",
                value: function() {
                    return this.$node.text().toLowerCase()
                }
            }, {
                key: "getCategories",
                value: function() {
                    return this.$node.attr("data-category").split(/\s*,\s*/g)
                }
            }, {
                key: "getHeight",
                value: function() {
                    return this.$node.innerHeight()
                }
            }, {
                key: "getWidth",
                value: function() {
                    return this.$node.innerWidth()
                }
            }, {
                key: "trigger",
                value: function(t) {
                    this.$node.trigger(t)
                }
            }, {
                key: "updateDimensions",
                value: function() {
                    this.props.w = this.getWidth(), this.props.h = this.getHeight()
                }
            }, {
                key: "bindEvents",
                value: function() {
                    var t = this;
                    this.$node.on(i.l, function() {
                        var e = t.props.filteredOut;
                        t.$node.toggleClass("filteredOut", e), t.$node.css("z-index", e ? -1e3 : "")
                    })
                }
            }, {
                key: "unbindEvents",
                value: function() {
                    this.$node.off(i.l)
                }
            }]), t
        }();
    e.a = o
}, function(t, e, r) {
    "use strict";
    e.a = {
        animationDuration: .5,
        callbacks: {
            onFilteringStart: function() {},
            onFilteringEnd: function() {},
            onShufflingStart: function() {},
            onShufflingEnd: function() {},
            onSortingStart: function() {},
            onSortingEnd: function() {}
        },
        controlsSelector: "",
        delay: 0,
        delayMode: "progressive",
        easing: "ease-out",
        filter: "all",
        filterOutCss: {
            opacity: 0,
            transform: "scale(0.5)"
        },
        filterInCss: {
            opacity: 1,
            transform: "scale(1)"
        },
        layout: "sameSize",
        multifilterLogicalOperator: "or",
        setupControls: !0
    }
}, function(t, e, r) {
    t.exports = r(5)
}, function(t, e, r) {
    "use strict";

    function i(t) {
        if (Array.isArray(t)) {
            for (var e = 0, r = Array(t.length); e < t.length; e++) r[e] = t[e];
            return r
        }
        return Array.from(t)
    }
    Object.defineProperty(e, "__esModule", {
        value: !0
    });
    var n = r(6),
        o = r(1),
        s = r(2),
        a = r(3);
    r.d(e, "Filterizr", function() {
        return n.a
    }), r.d(e, "FilterContainer", function() {
        return o.a
    }), r.d(e, "FilterItem", function() {
        return s.a
    }), r.d(e, "DefaultOptions", function() {
        return a.a
    });
    var l, u, c = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(t) {
        return typeof t
    } : function(t) {
        return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
    };
    l = u = window.jQuery,
        function(t) {
            if (!t) throw new Error("Filterizr requires jQuery to work.");
            t.fn.filterizr = function() {
                var e = "." + t.trim(this.get(0).className).replace(/\s+/g, "."),
                    r = arguments;
                if (!this._fltr && 0 === r.length || 1 === r.length && "object" === c(r[0])) {
                    var o = r.length > 0 ? r[0] : a.a;
                    this._fltr = new n.a(e, o)
                } else if (r.length >= 1 && "string" == typeof r[0]) {
                    var s = r[0],
                        l = Array.prototype.slice.call(r, 1),
                        u = this._fltr;
                    switch (s) {
                        case "filter":
                            return u.filter.apply(u, i(l)), this;
                        case "insertItem":
                            return u.insertItem.apply(u, i(l)), this;
                        case "toggleFilter":
                            return u.toggleFilter.apply(u, i(l)), this;
                        case "sort":
                            return u.sort.apply(u, i(l)), this;
                        case "shuffle":
                            return u.shuffle.apply(u, i(l)), this;
                        case "search":
                            return u.search.apply(u, i(l)), this;
                        case "setOptions":
                            return u.setOptions.apply(u, i(l)), this;
                        case "destroy":
                            return u.destroy.apply(u, i(l)), delete this._fltr, this;
                        default:
                            throw new Error("Filterizr: " + s + " is not part of the Filterizr API. Please refer to the docs for more information.")
                    }
                }
                return this
            }
        }(u), e.default = l, r(15)
}, function(t, e, r) {
    "use strict";
    var i = r(7),
        n = r(1),
        o = r(8),
        s = r(3),
        a = r(0),
        l = function() {
            function t(t, e) {
                for (var r = 0; r < e.length; r++) {
                    var i = e[r];
                    i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
                }
            }
            return function(e, r, i) {
                return r && t(e.prototype, r), i && t(e, i), e
            }
        }(),
        u = window.jQuery,
        c = function() {
            function t() {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : ".filtr-container",
                    r = arguments[1];
                (function(t, e) {
                    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
                })(this, t), this.options = Object(a.i)(s.a, r);
                var o = new n.a(e, this.options);
                if (!o.$node.length) throw new Error("Filterizr: could not find a container with the selector " + e + ", to initialize Filterizr.");
                new i.a(this, this.options.controlsSelector), this.props = {
                    filterizrState: a.a.IDLE,
                    searchTerm: "",
                    sort: "index",
                    sortOrder: "asc",
                    FilterContainer: o,
                    FilterItems: o.props.FilterItems,
                    FilteredItems: []
                }, this.bindEvents(), this.filter(this.options.filter)
            }
            return l(t, [{
                key: "filter",
                value: function(t) {
                    var e = this.props,
                        r = e.searchTerm,
                        i = e.FilterContainer,
                        n = e.FilterItems;
                    i.trigger("filteringStart"), this.props.filterizrState = a.a.FILTERING, t = Array.isArray(t) ? t.map(function(t) {
                        return t.toString()
                    }) : t.toString();
                    var o = this.searchFilterItems(this.filterFilterItems(n, t), r);
                    this.props.FilteredItems = o, this.render(o)
                }
            }, {
                key: "destroy",
                value: function() {
                    var t = this.props.FilterContainer,
                        e = this.options.controlsSelector;
                    t.destroy(), u(window).off("resize.Filterizr"), u(e + "[data-filter]").off("click.Filterizr"), u(e + "[data-multifilter]").off("click.Filterizr"), u(e + "[data-shuffle]").off("click.Filterizr"), u(e + "[data-search]").off("keyup.Filterizr"), u(e + "[data-sortAsc]").off("click.Filterizr"), u(e + "[data-sortDesc]").off("click.Filterizr")
                }
            }, {
                key: "insertItem",
                value: function(t) {
                    var e = this.props.FilterContainer,
                        r = t.clone().attr("style", "");
                    e.push(r, this.options);
                    var i = this.filterFilterItems(this.props.FilterItems, this.options.filter);
                    this.render(i)
                }
            }, {
                key: "sort",
                value: function() {
                    var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "index",
                        e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "asc",
                        r = this.props,
                        i = r.FilterContainer,
                        n = r.FilterItems;
                    i.trigger("sortingStart"), this.props.filterizrState = a.a.SORTING, this.props.FilterItems = this.sortFilterItems(n, t, e);
                    var o = this.filterFilterItems(this.props.FilterItems, this.options.filter);
                    this.props.FilteredItems = o, this.render(o)
                }
            }, {
                key: "search",
                value: function() {
                    var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : this.props.searchTerm,
                        e = this.props.FilterItems,
                        r = this.searchFilterItems(this.filterFilterItems(e, this.options.filter), t);
                    this.props.FilteredItems = r, this.render(r)
                }
            }, {
                key: "shuffle",
                value: function() {
                    var t = this.props,
                        e = t.FilterContainer,
                        r = t.FilteredItems;
                    e.trigger("shufflingStart"), this.props.filterizrState = a.a.SHUFFLING;
                    var i = this.shuffleFilterItems(r);
                    this.props.FilteredItems = i, this.render(i)
                }
            }, {
                key: "setOptions",
                value: function(t) {
                    Object(a.c)("animationDuration", t.animationDuration, "number"), Object(a.c)("callbacks", t.callbacks, "object"), Object(a.c)("controlsSelector", t.controlsSelector, "string"), Object(a.c)("delay", t.delay, "number"), Object(a.c)("easing", t.easing, "string", a.d, "https://www.w3schools.com/cssref/css3_pr_transition-timing-function.asp"), Object(a.c)("delayMode", t.delayMode, "string", ["progressive", "alternate"]), Object(a.c)("filter", t.filter, "string|number|array"), Object(a.c)("filterOutCss", t.filterOutCss, "object"), Object(a.c)("filterInCss", t.filterOutCss, "object"), Object(a.c)("layout", t.layout, "string", ["sameSize", "vertical", "horizontal", "sameHeight", "sameWidth", "packed"]), Object(a.c)("multifilterLogicalOperator", t.multifilterLogicalOperator, "string", ["and", "or"]), Object(a.c)("setupControls", t.setupControls, "boolean"), this.options = Object(a.i)(this.options, t), (t.animationDuration || t.delay || t.delayMode || t.easing) && this.props.FilterContainer.updateFilterItemsTransitionStyle(t.animationDuration, t.easing, t.delay, t.delayMode), (t.callbacks || t.animationDuration) && this.rebindFilterContainerEvents(), t.filter && this.filter(t.filter), t.multifilterLogicalOperator && this.filter(this.options.filter)
                }
            }, {
                key: "toggleFilter",
                value: function(t) {
                    var e = this.options.filter;
                    "all" === e ? e = t : Array.isArray(e) ? e.includes(t) ? 1 === (e = e.filter(function(e) {
                        return e !== t
                    })).length && (e = e[0]) : e.push(t) : e = e === t ? "all" : [e, t], this.options.filter = e, this.filter(this.options.filter)
                }
            }, {
                key: "filterFilterItems",
                value: function(t, e) {
                    var r = this.options.multifilterLogicalOperator;
                    return "all" === e ? t : t.filter(function(t) {
                        var i = t.getCategories();
                        return Array.isArray(e) ? "or" === r ? Object(a.g)(i, e).length : Object(a.b)(e, i) : i.includes(e)
                    })
                }
            }, {
                key: "sortFilterItems",
                value: function(t) {
                    var e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "index",
                        r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : "asc",
                        i = Object(a.k)(t, function(t) {
                            return "index" !== e && "sortData" !== e ? t.props.data[e] : t.props[e]
                        });
                    return "asc" === r ? i : i.reverse()
                }
            }, {
                key: "searchFilterItems",
                value: function(t) {
                    var e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : this.props.searchTerm;
                    return e ? t.filter(function(t) {
                        return t.contentsMatchSearch(e)
                    }) : t
                }
            }, {
                key: "shuffleFilterItems",
                value: function(t) {
                    for (var e = Object(a.j)(t); t.length > 1 && Object(a.f)(t, e);) e = Object(a.j)(t);
                    return e
                }
            }, {
                key: "render",
                value: function(t) {
                    var e = this,
                        r = this.options,
                        i = r.filter,
                        n = r.filterInCss,
                        s = r.filterOutCss,
                        l = r.layout,
                        u = r.multifilterLogicalOperator;
                    this.props.FilterItems.filter(function(t) {
                        var r = t.getCategories(),
                            n = Array.isArray(i),
                            o = t.contentsMatchSearch(e.props.searchTerm);
                        return !(n ? "or" === u ? Object(a.g)(r, i).length : Object(a.b)(i, r) : r.includes(i)) || !o
                    }).forEach(function(t) {
                        t.filterOut(s)
                    });
                    var c = Object(o.a)(l, this);
                    t.forEach(function(t, e) {
                        t.filterIn(c[e], n)
                    })
                }
            }, {
                key: "onTransitionEndCallback",
                value: function() {
                    var t = this.props,
                        e = t.filterizrState,
                        r = t.FilterContainer;
                    switch (e) {
                        case a.a.FILTERING:
                            r.trigger("filteringEnd");
                            break;
                        case a.a.SORTING:
                            r.trigger("sortingEnd");
                            break;
                        case a.a.SHUFFLING:
                            r.trigger("shufflingEnd")
                    }
                    this.props.filterizrState = a.a.IDLE
                }
            }, {
                key: "rebindFilterContainerEvents",
                value: function() {
                    var t = this,
                        e = this.props.FilterContainer,
                        r = this.options,
                        i = r.animationDuration,
                        n = r.callbacks;
                    e.unbindEvents(), e.bindEvents(n), e.bindTransitionEnd(function() {
                        t.onTransitionEndCallback()
                    }, i)
                }
            }, {
                key: "bindEvents",
                value: function() {
                    var t = this,
                        e = this.props.FilterContainer;
                    this.rebindFilterContainerEvents(), u(window).on("resize.Filterizr", Object(a.e)(function() {
                        e.updateWidth(), e.updateFilterItemsDimensions(), t.filter(t.options.filter)
                    }, 250))
                }
            }]), t
        }();
    e.a = c
}, function(t, e, r) {
    "use strict";
    var i = r(0),
        n = function() {
            function t(t, e) {
                for (var r = 0; r < e.length; r++) {
                    var i = e[r];
                    i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
                }
            }
            return function(e, r, i) {
                return r && t(e.prototype, r), i && t(e, i), e
            }
        }(),
        o = window.jQuery,
        s = function() {
            function t(e) {
                var r = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "";
                (function(t, e) {
                    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
                })(this, t), this.props = {
                    Filterizr: e,
                    selector: r
                }, this.setupFilterControls(), this.setupShuffleControls(), this.setupSearchControls(), this.setupSortControls()
            }
            return n(t, [{
                key: "setupFilterControls",
                value: function() {
                    var t = this.props,
                        e = t.Filterizr,
                        r = t.selector;
                    o(r + "[data-filter]").on("click.Filterizr", function(t) {
                        var r = o(t.currentTarget).attr("data-filter");
                        e.options.filter = r, e.filter(e.options.filter)
                    }), o(r + "[data-multifilter]").on("click.Filterizr", function(t) {
                        var r = o(t.target).attr("data-multifilter");
                        e.toggleFilter(r)
                    })
                }
            }, {
                key: "setupShuffleControls",
                value: function() {
                    var t = this.props,
                        e = t.Filterizr,
                        r = t.selector;
                    o(r + "[data-shuffle]").on("click.Filterizr", function() {
                        e.shuffle()
                    })
                }
            }, {
                key: "setupSearchControls",
                value: function() {
                    var t = this.props,
                        e = t.Filterizr,
                        r = t.selector;
                    o(r + "[data-search]").on("keyup.Filterizr", Object(i.e)(function(t) {
                        var r = o(t.target).val();
                        e.props.searchTerm = r.toLowerCase(), e.search(e.props.searchTerm)
                    }, 250))
                }
            }, {
                key: "setupSortControls",
                value: function() {
                    var t = this.props,
                        e = t.Filterizr,
                        r = t.selector;
                    o(r + "[data-sortAsc]").on("click.Filterizr", function() {
                        var t = o(r + "[data-sortOrder]").val();
                        e.props.sortOrder = "asc", e.sort(t, "asc")
                    }), o(r + "[data-sortDesc]").on("click.Filterizr", function() {
                        var t = o(r + "[data-sortOrder]").val();
                        e.props.sortOrder = "desc", e.sort(t, "desc")
                    })
                }
            }]), t
        }();
    e.a = s
}, function(t, e, r) {
    "use strict";
    var i = r(9),
        n = r(10),
        o = r(11),
        s = r(12),
        a = r(13),
        l = r(14);
    e.a = function(t, e) {
        switch (t) {
            case "horizontal":
                return Object(i.a)(e);
            case "vertical":
                return Object(n.a)(e);
            case "sameHeight":
                return Object(o.a)(e);
            case "sameWidth":
                return Object(s.a)(e);
            case "sameSize":
                return Object(a.a)(e);
            case "packed":
                return Object(l.a)(e);
            default:
                return Object(a.a)(e)
        }
    }
}, function(t, e, r) {
    "use strict";
    e.a = function(t) {
        var e = t.props,
            r = e.FilterContainer,
            i = e.FilteredItems,
            n = 0,
            o = 0,
            s = i.map(function(t) {
                var e = t.props,
                    r = e.w,
                    i = e.h,
                    s = {
                        left: n,
                        top: 0
                    };
                return n += r, i > o && (o = i), s
            });
        return r.updateHeight(o), s
    }
}, function(t, e, r) {
    "use strict";
    e.a = function(t) {
        var e = t.props,
            r = e.FilterContainer,
            i = e.FilteredItems,
            n = 0,
            o = i.map(function(t) {
                var e = t.props.h,
                    r = {
                        left: 0,
                        top: n
                    };
                return n += e, r
            });
        return r.updateHeight(n), o
    }
}, function(t, e, r) {
    "use strict";
    e.a = function(t) {
        var e = t.props,
            r = e.FilterContainer,
            i = e.FilteredItems,
            n = r.props.w,
            o = i[0].props.h,
            s = 0,
            a = 0,
            l = i.map(function(t) {
                var e = t.props.w;
                a + e > n && (s++, a = 0);
                var r = {
                    left: a,
                    top: o * s
                };
                return a += e, r
            });
        return r.updateHeight((s + 1) * i[0].props.h), l
    }
}, function(t, e, r) {
    "use strict";
    var i = function(t, e, r) {
        var i = 0;
        if (r < e - 1) return 0;
        for (r -= e; r >= 0;) i += t[r].props.h, r -= e;
        return i
    };
    e.a = function(t) {
        var e = t.props,
            r = e.FilterContainer,
            n = e.FilteredItems,
            o = r.calcColumns(),
            s = 0,
            a = Array.apply(null, Array(o)).map(Number.prototype.valueOf, 0),
            l = n.map(function(t, e) {
                var r = t.props,
                    l = r.w,
                    u = r.h;
                e % o == 0 && e >= o && s++;
                var c = e - o * s;
                return a[c] += u, {
                    left: c * l,
                    top: i(n, o, e)
                }
            });
        return r.updateHeight(Math.max.apply(Math, function(t) {
            if (Array.isArray(t)) {
                for (var e = 0, r = Array(t.length); e < t.length; e++) r[e] = t[e];
                return r
            }
            return Array.from(t)
        }(a))), l
    }
}, function(t, e, r) {
    "use strict";
    e.a = function(t) {
        var e = t.props,
            r = e.FilterContainer,
            i = e.FilteredItems,
            n = r.calcColumns(),
            o = 0,
            s = i.map(function(t, e) {
                return e % n == 0 && e >= n && o++, {
                    left: (e - n * o) * t.props.w,
                    top: o * t.props.h
                }
            }),
            a = i[0] && i[0].props.h || 0;
        return r.updateHeight((o + 1) * a), s
    }
}, function(t, e, r) {
    "use strict";
    var i = function(t) {
        this.init(t)
    };
    i.prototype = {
        init: function(t) {
            this.root = {
                x: 0,
                y: 0,
                w: t
            }
        },
        fit: function(t) {
            var e, r, i, n = t.length,
                o = n > 0 ? t[0].h : 0;
            for (this.root.h = o, e = 0; e < n; e++) i = t[e], (r = this.findNode(this.root, i.w, i.h)) ? i.fit = this.splitNode(r, i.w, i.h) : i.fit = this.growDown(i.w, i.h)
        },
        findNode: function(t, e, r) {
            return t.used ? this.findNode(t.right, e, r) || this.findNode(t.down, e, r) : e <= t.w && r <= t.h ? t : null
        },
        splitNode: function(t, e, r) {
            return t.used = !0, t.down = {
                x: t.x,
                y: t.y + r,
                w: t.w,
                h: t.h - r
            }, t.right = {
                x: t.x + e,
                y: t.y,
                w: t.w - e,
                h: r
            }, t
        },
        growDown: function(t, e) {
            var r;
            return this.root = {
                used: !0,
                x: 0,
                y: 0,
                w: this.root.w,
                h: this.root.h + e,
                down: {
                    x: 0,
                    y: this.root.h,
                    w: this.root.w,
                    h: e
                },
                right: this.root
            }, (r = this.findNode(this.root, t, e)) ? this.splitNode(r, t, e) : null
        }
    }, e.a = function(t) {
        var e = t.props,
            r = e.FilterContainer,
            n = e.FilteredItems,
            o = new i(r.props.w),
            s = n.map(function(t) {
                var e = t.props;
                return {
                    w: e.w,
                    h: e.h
                }
            });
        o.fit(s);
        var a = s.map(function(t) {
            var e = t.fit;
            return {
                left: e.x,
                top: e.y
            }
        });
        return r.updateHeight(o.root.h), a
    }
}, function(t, e, r) {}]), $(document).ready(function() {
    $(".filtr-container").css("visibility", "hidden"), $(".filtr-controls").after('<div class="filtr-loading"></div>'), options = {
        layout: "sameWidth"
    }, $(".filtr-container").imagesLoaded(function() {
        $(".filtr-container").filterizr(options);
        $(".filtr-container").css("visibility", "visible"), $(".filtr-loading").remove()
    }), $(".filtr-controls").on("click", "span", function() {
        $(".filtr-controls").find("span").removeClass("active"), $(this).addClass("active")
    })
});