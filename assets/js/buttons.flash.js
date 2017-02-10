/*!
 * Flash export buttons for Buttons and DataTables.
 * 2015 SpryMedia Ltd - datatables.net/license
 *
 * ZeroClipbaord - MIT license
 * Copyright (c) 2012 Joseph Huckaby
 */
!function(a) {
    "function" == typeof define && define.amd ? define(["jquery", "datatables.net", "datatables.net-buttons"], function(b) {
        return a(b, window, document)
    }) : "object" == typeof exports ? module.exports = function(b, c) {
        return b || (b = window),
        c && c.fn.dataTable || (c = require("datatables.net")(b, c).$),
        c.fn.dataTable.Buttons || require("datatables.net-buttons")(b, c),
        a(c, b, b.document)
    }
    : a(jQuery, window, document)
}(function(a, b, c, d) {
    "use strict";
    var e = a.fn.dataTable
      , f = {
        version: "1.0.4-TableTools2",
        clients: {},
        moviePath: "",
        nextId: 1,
        $: function(a) {
            return "string" == typeof a && (a = c.getElementById(a)),
            a.addClass || (a.hide = function() {
                this.style.display = "none"
            }
            ,
            a.show = function() {
                this.style.display = ""
            }
            ,
            a.addClass = function(a) {
                this.removeClass(a),
                this.className += " " + a
            }
            ,
            a.removeClass = function(a) {
                this.className = this.className.replace(new RegExp("\\s*" + a + "\\s*"), " ").replace(/^\s+/, "").replace(/\s+$/, "")
            }
            ,
            a.hasClass = function(a) {
                return !!this.className.match(new RegExp("\\s*" + a + "\\s*"))
            }
            ),
            a
        },
        setMoviePath: function(a) {
            this.moviePath = a
        },
        dispatch: function(a, b, c) {
            var d = this.clients[a];
            d && d.receiveEvent(b, c)
        },
        register: function(a, b) {
            this.clients[a] = b
        },
        getDOMObjectPosition: function(a) {
            var b = {
                left: 0,
                top: 0,
                width: a.width ? a.width : a.offsetWidth,
                height: a.height ? a.height : a.offsetHeight
            };
            for ("" !== a.style.width && (b.width = a.style.width.replace("px", "")),
            "" !== a.style.height && (b.height = a.style.height.replace("px", "")); a; )
                b.left += a.offsetLeft,
                b.top += a.offsetTop,
                a = a.offsetParent;
            return b
        },
        Client: function(a) {
            this.handlers = {},
            this.id = f.nextId++,
            this.movieId = "ZeroClipboard_TableToolsMovie_" + this.id,
            f.register(this.id, this),
            a && this.glue(a)
        }
    };
    f.Client.prototype = {
        id: 0,
        ready: !1,
        movie: null,
        clipText: "",
        fileName: "",
        action: "copy",
        handCursorEnabled: !0,
        cssEffects: !0,
        handlers: null,
        sized: !1,
        sheetName: "",
        glue: function(a, b) {
            this.domElement = f.$(a);
            var d = 99;
            this.domElement.style.zIndex && (d = parseInt(this.domElement.style.zIndex, 10) + 1);
            var e = f.getDOMObjectPosition(this.domElement);
            this.div = c.createElement("div");
            var g = this.div.style;
            g.position = "absolute",
            g.left = "0px",
            g.top = "0px",
            g.width = e.width + "px",
            g.height = e.height + "px",
            g.zIndex = d,
            "undefined" != typeof b && "" !== b && (this.div.title = b),
            0 !== e.width && 0 !== e.height && (this.sized = !0),
            this.domElement && (this.domElement.appendChild(this.div),
            this.div.innerHTML = this.getHTML(e.width, e.height).replace(/&/g, "&amp;"))
        },
        positionElement: function() {
            var a = f.getDOMObjectPosition(this.domElement)
              , b = this.div.style;
            if (b.position = "absolute",
            b.width = a.width + "px",
            b.height = a.height + "px",
            0 !== a.width && 0 !== a.height) {
                this.sized = !0;
                var c = this.div.childNodes[0];
                c.width = a.width,
                c.height = a.height
            }
        },
        getHTML: function(a, b) {
            var c = ""
              , d = "id=" + this.id + "&width=" + a + "&height=" + b;
            if (navigator.userAgent.match(/MSIE/)) {
                var e = location.href.match(/^https/i) ? "https://" : "http://";
                c += '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="' + e + 'download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0" width="' + a + '" height="' + b + '" id="' + this.movieId + '" align="middle"><param name="allowScriptAccess" value="always" /><param name="allowFullScreen" value="false" /><param name="movie" value="' + f.moviePath + '" /><param name="loop" value="false" /><param name="menu" value="false" /><param name="quality" value="best" /><param name="bgcolor" value="#ffffff" /><param name="flashvars" value="' + d + '"/><param name="wmode" value="transparent"/></object>'
            } else
                c += '<embed id="' + this.movieId + '" src="' + f.moviePath + '" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="' + a + '" height="' + b + '" name="' + this.movieId + '" align="middle" allowScriptAccess="always" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="' + d + '" wmode="transparent" />';
            return c
        },
        hide: function() {
            this.div && (this.div.style.left = "-2000px")
        },
        show: function() {
            this.reposition()
        },
        destroy: function() {
            var b = this;
            this.domElement && this.div && (a(this.div).remove(),
            this.domElement = null,
            this.div = null,
            a.each(f.clients, function(a, c) {
                c === b && delete f.clients[a]
            }))
        },
        reposition: function(a) {
            if (a && (this.domElement = f.$(a),
            this.domElement || this.hide()),
            this.domElement && this.div) {
                var b = f.getDOMObjectPosition(this.domElement)
                  , c = this.div.style;
                c.left = "" + b.left + "px",
                c.top = "" + b.top + "px"
            }
        },
        clearText: function() {
            this.clipText = "",
            this.ready && this.movie.clearText()
        },
        appendText: function(a) {
            this.clipText += a,
            this.ready && this.movie.appendText(a)
        },
        setText: function(a) {
            this.clipText = a,
            this.ready && this.movie.setText(a)
        },
        setFileName: function(a) {
            this.fileName = a,
            this.ready && this.movie.setFileName(a)
        },
        setSheetName: function(a) {
            this.sheetName = a,
            this.ready && this.movie.setSheetName(a)
        },
        setAction: function(a) {
            this.action = a,
            this.ready && this.movie.setAction(a)
        },
        addEventListener: function(a, b) {
            a = a.toString().toLowerCase().replace(/^on/, ""),
            this.handlers[a] || (this.handlers[a] = []),
            this.handlers[a].push(b)
        },
        setHandCursor: function(a) {
            this.handCursorEnabled = a,
            this.ready && this.movie.setHandCursor(a)
        },
        setCSSEffects: function(a) {
            this.cssEffects = !!a
        },
        receiveEvent: function(a, d) {
            var e;
            switch (a = a.toString().toLowerCase().replace(/^on/, "")) {
            case "load":
                if (this.movie = c.getElementById(this.movieId),
                !this.movie)
                    return e = this,
                    void setTimeout(function() {
                        e.receiveEvent("load", null)
                    }, 1);
                if (!this.ready && navigator.userAgent.match(/Firefox/) && navigator.userAgent.match(/Windows/))
                    return e = this,
                    setTimeout(function() {
                        e.receiveEvent("load", null)
                    }, 100),
                    void (this.ready = !0);
                this.ready = !0,
                this.movie.clearText(),
                this.movie.appendText(this.clipText),
                this.movie.setFileName(this.fileName),
                this.movie.setAction(this.action),
                this.movie.setHandCursor(this.handCursorEnabled);
                break;
            case "mouseover":
                this.domElement && this.cssEffects && this.recoverActive && this.domElement.addClass("active");
                break;
            case "mouseout":
                this.domElement && this.cssEffects && (this.recoverActive = !1,
                this.domElement.hasClass("active") && (this.domElement.removeClass("active"),
                this.recoverActive = !0));
                break;
            case "mousedown":
                this.domElement && this.cssEffects && this.domElement.addClass("active");
                break;
            case "mouseup":
                this.domElement && this.cssEffects && (this.domElement.removeClass("active"),
                this.recoverActive = !1)
            }
            if (this.handlers[a])
                for (var f = 0, g = this.handlers[a].length; g > f; f++) {
                    var h = this.handlers[a][f];
                    "function" == typeof h ? h(this, d) : "object" == typeof h && 2 == h.length ? h[0][h[1]](this, d) : "string" == typeof h && b[h](this, d)
                }
        }
    },
    f.hasFlash = function() {
        try {
            var a = new ActiveXObject("ShockwaveFlash.ShockwaveFlash");
            if (a)
                return !0
        } catch (b) {
            if (navigator.mimeTypes && navigator.mimeTypes["application/x-shockwave-flash"] !== d && navigator.mimeTypes["application/x-shockwave-flash"].enabledPlugin)
                return !0
        }
        return !1
    }
    ,
    b.ZeroClipboard_TableTools = f;
    var g = function(a, b) {
        b.attr("id");
        b.parents("html").length ? a.glue(b[0], "") : setTimeout(function() {
            g(a, b)
        }, 500)
    }
      , h = function(b, c) {
        var e = "*" === b.filename && "*" !== b.title && b.title !== d ? b.title : b.filename;
        return "function" == typeof e && (e = e()),
        -1 !== e.indexOf("*") && (e = e.replace("*", a("title").text())),
        e = e.replace(/[^a-zA-Z0-9_\u00A1-\uFFFF\.,\-_ !\(\)]/g, ""),
        c === d || c === !0 ? e + b.extension : e
    }
      , i = function(a) {
        var b = "Sheet1";
        return a.sheetName && (b = a.sheetName.replace(/[\[\]\*\/\\\?\:]/g, "")),
        b
    }
      , j = function(b) {
        var c = b.title;
        return "function" == typeof c && (c = c()),
        -1 !== c.indexOf("*") ? c.replace("*", a("title").text()) : c
    }
      , k = function(a, b) {
        var c = b.match(/[\s\S]{1,8192}/g) || [];
        a.clearText();
        for (var d = 0, e = c.length; e > d; d++)
            a.appendText(c[d])
    }
      , l = function(a) {
        return a.newline ? a.newline : navigator.userAgent.match(/Windows/) ? "\r\n" : "\n"
    }
      , m = function(a, b) {
        for (var c = l(b), e = a.buttons.exportData(b.exportOptions), f = b.fieldBoundary, g = b.fieldSeparator, h = new RegExp(f,"g"), i = b.escapeChar !== d ? b.escapeChar : "\\", j = function(a) {
            for (var b = "", c = 0, d = a.length; d > c; c++)
                c > 0 && (b += g),
                b += f ? f + ("" + a[c]).replace(h, i + f) + f : a[c];
            return b
        }, k = b.header ? j(e.header) + c : "", m = b.footer && e.footer ? c + j(e.footer) : "", n = [], o = 0, p = e.body.length; p > o; o++)
            n.push(j(e.body[o]));
        return {
            str: k + n.join(c) + m,
            rows: n.length
        }
    }
      , n = {
        available: function() {
            return f.hasFlash()
        },
        init: function(a, b, c) {
            f.moviePath = e.Buttons.swfPath;
            var d = new f.Client;
            d.setHandCursor(!0),
            d.addEventListener("mouseDown", function(d) {
                c._fromFlash = !0,
                a.button(b[0]).trigger(),
                c._fromFlash = !1
            }),
            g(d, b),
            c._flash = d
        },
        destroy: function(a, b, c) {
            c._flash.destroy()
        },
        fieldSeparator: ",",
        fieldBoundary: '"',
        exportOptions: {},
        title: "*",
        filename: "*",
        extension: ".csv",
        header: !0,
        footer: !1
    };
    return e.Buttons.swfPath = "assets/swf/flashExport.swf",
    e.Api.register("buttons.resize()", function() {
        a.each(f.clients, function(a, b) {
            b.domElement !== d && b.domElement.parentNode && b.positionElement()
        })
    }),
    e.ext.buttons.copyFlash = a.extend({}, n, {
        className: "buttons-copy buttons-flash",
        text: function(a) {
            return a.i18n("buttons.copy", "Copy")
        },
        action: function(a, b, c, d) {
            if (d._fromFlash) {
                var e = d._flash
                  , f = m(b, d)
                  , g = d.customize ? d.customize(f.str, d) : f.str;
                e.setAction("copy"),
                k(e, g),
                b.buttons.info(b.i18n("buttons.copyTitle", "Copy to clipboard"), b.i18n("buttons.copyInfo", {
                    _: "Copied %d rows to clipboard",
                    1: "Copied 1 row to clipboard"
                }, f.rows), 3e3)
            }
        },
        fieldSeparator: "	",
        fieldBoundary: ""
    }),
    e.ext.buttons.csvFlash = a.extend({}, n, {
        className: "buttons-csv buttons-flash",
        text: function(a) {
            return a.i18n("buttons.csv", "CSV")
        },
        action: function(a, b, c, d) {
            var e = d._flash
              , f = m(b, d)
              , g = d.customize ? d.customize(f.str, d) : f.str;
            e.setAction("csv"),
            e.setFileName(h(d)),
            k(e, g)
        },
        escapeChar: '"'
    }),
    e.ext.buttons.excelFlash = a.extend({}, n, {
        className: "buttons-excel buttons-flash",
        text: function(a) {
            return a.i18n("buttons.excel", "Excel")
        },
        action: function(b, c, e, f) {
            var g = ""
              , j = f._flash
              , l = c.buttons.exportData(f.exportOptions)
              , m = function(b) {
                for (var c = [], e = 0, f = b.length; f > e; e++)
                    null !== b[e] && b[e] !== d || (b[e] = ""),
                    c.push("number" == typeof b[e] || b[e].match && a.trim(b[e]).match(/^-?\d+(\.\d+)?$/) && "0" !== b[e].charAt(0) ? '<c t="n"><v>' + b[e] + "</v></c>" : '<c t="inlineStr"><is><t>' + (b[e].replace ? b[e].replace(/&(?!amp;)/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/[\x00-\x1F\x7F-\x9F]/g, "") : b[e]) + "</t></is></c>");
                return "<row>" + c.join("") + "</row>"
            };
            f.header && (g += m(l.header));
            for (var n = 0, o = l.body.length; o > n; n++)
                g += m(l.body[n]);
            f.footer && (g += m(l.footer)),
            j.setAction("excel"),
            j.setFileName(h(f)),
            j.setSheetName(i(f)),
            k(j, g)
        },
        extension: ".xlsx"
    }),
    e.ext.buttons.pdfFlash = a.extend({}, n, {
        className: "buttons-pdf buttons-flash",
        text: function(a) {
            return a.i18n("buttons.pdf", "PDF")
        },
        action: function(a, b, c, d) {
            var e = d._flash
              , f = b.buttons.exportData(d.exportOptions)
              , g = b.table().node().offsetWidth
              , i = b.columns(d.columns).indexes().map(function(a) {
                return b.column(a).header().offsetWidth / g
            });
            e.setAction("pdf"),
            e.setFileName(j(d)),
            k(e, JSON.stringify({
                title: h(d, !1),
                message: d.message,
                colWidth: i.toArray(),
                orientation: d.orientation,
                size: d.pageSize,
                header: d.header ? f.header : null,
                footer: d.footer ? f.footer : null,
                body: f.body
            }))
        },
        extension: ".pdf",
        orientation: "portrait",
        pageSize: "A4",
        message: "",
        newline: "\n"
    }),
    e.Buttons
});
