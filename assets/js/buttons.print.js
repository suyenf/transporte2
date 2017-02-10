/*!
 * Print button for Buttons and DataTables.
 * 2015 SpryMedia Ltd - datatables.net/license
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
      , f = c.createElement("a")
      , g = function(b) {
        var c, d = a(b).clone()[0];
        return "link" === d.nodeName.toLowerCase() && (f.href = d.href,
        c = f.host,
        -1 === c.indexOf("/") && 0 !== f.pathname.indexOf("/") && (c += "/"),
        d.href = f.protocol + "//" + c + f.pathname + f.search),
        d.outerHTML
    };
    return e.ext.buttons.print = {
        className: "buttons-print",
        text: function(a) {
            return a.i18n("buttons.print", "Print")
        },
        action: function(c, d, e, f) {
            var h = d.buttons.exportData(f.exportOptions)
              , i = function(a, b) {
                for (var c = "<tr>", d = 0, e = a.length; e > d; d++)
                    c += "<" + b + ">" + a[d] + "</" + b + ">";
                return c + "</tr>"
            }
              , j = '<table class="' + d.table().node().className + '">';
            f.header && (j += "<thead>" + i(h.header, "th") + "</thead>"),
            j += "<tbody>";
            for (var k = 0, l = h.body.length; l > k; k++)
                j += i(h.body[k], "td");
            j += "</tbody>",
            f.footer && (j += "<tfoot>" + i(h.footer, "th") + "</tfoot>");
            var m = b.open("", "")
              , n = f.title;
            "function" == typeof n && (n = n()),
            -1 !== n.indexOf("*") && (n = n.replace("*", a("title").text())),
            m.document.close();
            var o = "<title>" + n + "</title>";
            a("style, link").each(function() {
                o += g(this)
            }),
            a(m.document.head).html(o),
            a(m.document.body).html("<h1>" + n + "</h1><div>" + f.message + "</div>" + j),
            f.customize && f.customize(m),
            setTimeout(function() {
                f.autoPrint && (m.print(),
                m.close())
            }, 250)
        },
        title: "*",
        message: "",
        exportOptions: {},
        header: !0,
        footer: !1,
        autoPrint: !0,
        customize: null
    },
    e.Buttons
});
