<html lang="en">

    <head>

        <meta charset="utf-8">
        
        <title>VendeCar</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
     <!-- Put favicon.ico and apple-touch-icologo.jpgn(s).png in the images folder -->
        <link href="<?= base_url('assets/images/favicon.ico')?>" rel="shortcut icon" >
        
        <title><?php if(isset($titulo)){echo $titulo;}  ?><?php if (isset($subtitulo)) { echo " - {$subtitulo}"; }  ?></title>
<!--        <title><?php // echo $titulo  ?><?php // if (isset($subtitulo)) { echo " - {$subtitulo}"; }  ?></title>-->

        <!-- Bootstrap Core CSS -->
        <link href="<?= base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
        <link type="text/css" href="<?= base_url('assets/font-awesome/4.5.0/css/font-awesome.min.css') ?>" rel="stylesheet" />

        <!-- page specific plugin styles -->
        <link rel="stylesheet" href="<?= base_url('assets/css/jquery-ui.custom.min.css')?>" />

        
        
        <!-- text fonts -->
        <link href="<?= base_url('assets/css/fonts.googleapis.com.css') ?>" rel="stylesheet">

        <!-- ace styles -->
        <link rel="stylesheet" href="<?= base_url('assets/css/ace.css') ?>" class="ace-main-stylesheet" id="main-ace-style" />


        <!-- skins -->
        <link href="<?= base_url('assets/css/ace-skins.css') ?>" rel="stylesheet">
        <link href="<?= base_url('assets/css/ace-rtl.min.css') ?>" rel="stylesheet">
        <link href="<?= base_url('assets/css/ace-part2.css') ?>" rel="stylesheet">

        <!-- ace settings handler -->
        <link href="<?= base_url('assets/js/ace-extra.min.js') ?>" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?= base_url('assets/css/select2.min.css') ?>" />
   
    
    </head>
    <body>
        <script src="<?= base_url('assets/js/jquery-1.11.3.min.js')?>"></script>
        <script src="<?= base_url('assets/js/jquery-2.1.4.min.js')?>"></script>

        <!-- <![endif]-->

        <script type="text/javascript">
                if('ontouchstart' in document.documentElement) document.write("<script src='<?= base_url ('assets/js/jquery.mobile.custom.min.js')?>>"+"<"+"/script>");
        </script>
          <!-- page specific plugin scripts -->
 
          

        <!--[if lte IE 8]>
          <script src="assets/js/excanvas.min.js"></script>
        <![endif]-->
        <script src="<?= base_url('assets/js/jquery-ui.custom.min.js')?>"></script>
        <script src="<?= base_url('assets/js/jquery.ui.touch-punch.min.js')?>"></script>
        <script src="<?= base_url('assets/js/jquery.easypiechart.min.js')?>"></script>
        <script src="<?= base_url('assets/js/jquery.sparkline.index.min.js')?>"></script>
        <script src="<?= base_url('assets/js/jquery.flot.min.js')?>"></script>
        <script src="<?= base_url('assets/js/jquery.flot.pie.min.js')?>"></script>
        <script src="<?= base_url('assets/js/jquery.flot.resize.min.js')?>"></script>

        <!-- ace scripts -->
        <script src="<?= base_url('assets/js/ace-elements.min.js')?>"></script>

        <!-- inline scripts related to this page -->
        <script type="text/javascript">
                jQuery(function($) {
                        $('.easy-pie-chart.percentage').each(function(){
                                var $box = $(this).closest('.infobox');
                                var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
                                var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
                                var size = parseInt($(this).data('size')) || 50;
                                $(this).easyPieChart({
                                        barColor: barColor,
                                        trackColor: trackColor,
                                        scaleColor: false,
                                        lineCap: 'butt',
                        lineWidth: parseInt(size / 10),
                        animate: ace.vars['old_ie'] ? false : 1000,
                        size: size
                    });
                })

                $('.sparkline').each(function () {
                    var $box = $(this).closest('.infobox');
                    var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
                    $(this).sparkline('html',
                            {
                                tagValuesAttribute: 'data-values',
                                type: 'bar',
                                barColor: barColor,
                                chartRangeMin: $(this).data('min') || 0
                            });
                });


                //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
                //but sometimes it brings up errors with normal resize event handlers
                $.resize.throttleWindow = false;

                var placeholder = $('#piechart-placeholder').css({'width': '90%', 'min-height': '150px'});
                var data = [
                    {label: "social networks", data: 38.7, color: "#68BC31"},
                    {label: "search engines", data: 24.5, color: "#2091CF"},
                    {label: "ad campaigns", data: 8.2, color: "#AF4E96"},
                    {label: "direct traffic", data: 18.6, color: "#DA5430"},
                    {label: "other", data: 10, color: "#FEE074"}
                ]
                function drawPieChart(placeholder, data, position) {
                    $.plot(placeholder, data, {
                        series: {
                            pie: {
                                show: true,
                                tilt: 0.8,
                                highlight: {
                                    opacity: 0.25
                                },
                                stroke: {
                                    color: '#fff',
                                    width: 2
                                },
                                startAngle: 2
                            }
                        },
                        legend: {
                            show: true,
                            position: position || "ne",
                            labelBoxBorderColor: null,
                            margin: [-30, 15]
                        }
                        ,
                        grid: {
                            hoverable: true,
                            clickable: true
                        }
                    })
                }
                drawPieChart(placeholder, data);

                /**
                 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
                 so that's not needed actually.
                 */
                placeholder.data('chart', data);
                placeholder.data('draw', drawPieChart);


                //pie chart tooltip example
                var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
                var previousPoint = null;

                placeholder.on('plothover', function (event, pos, item) {
                    if (item) {
                        if (previousPoint != item.seriesIndex) {
                            previousPoint = item.seriesIndex;
                            var tip = item.series['label'] + " : " + item.series['percent'] + '%';
                            $tooltip.show().children(0).text(tip);
                        }
                        $tooltip.css({top: pos.pageY + 10, left: pos.pageX + 10});
                    } else {
                        $tooltip.hide();
                        previousPoint = null;
                    }

                });

                /////////////////////////////////////
                $(document).one('<?= base_url('ajaxloadstart.page')?>, function (e) {
                    $tooltip.remove();
                });




                var d1 = [];
                for (var i = 0; i < Math.PI * 2; i += 0.5) {
                    d1.push([i, Math.sin(i)]);
                }

                var d2 = [];
                for (var i = 0; i < Math.PI * 2; i += 0.5) {
                    d2.push([i, Math.cos(i)]);
                }

                var d3 = [];
                for (var i = 0; i < Math.PI * 2; i += 0.2) {
                    d3.push([i, Math.tan(i)]);
                }


                var sales_charts = $('#sales-charts').css({'width': '100%', 'height': '220px'});
                $.plot("#sales-charts", [
                    {label: "Domains", data: d1},
                    {label: "Hosting", data: d2},
                    {label: "Services", data: d3}
                ], {
                    hoverable: true,
                    shadowSize: 0,
                    series: {
                        lines: {show: true},
                        points: {show: true}
                    },
                    xaxis: {
                        tickLength: 0
                    },
                    yaxis: {
                        ticks: 10,
                        min: -2,
                        max: 2,
                        tickDecimals: 3
                    },
                    grid: {
                        backgroundColor: {colors: ["#fff", "#fff"]},
                        borderWidth: 1,
                        borderColor: '#555'
                    }
                });


                $('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
                function tooltip_placement(context, source) {
                    var $source = $(source);
                    var $parent = $source.closest('.tab-content')
                    var off1 = $parent.offset();
                    var w1 = $parent.width();

                    var off2 = $source.offset();
                    //var w2 = $source.width();

                    if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2))
                        return 'right';
                    return 'left';
                }


                $('.dialogs,.comments').ace_scroll({
                    size: 300
                });


                //Android's default browser somehow is confused when tapping on label which will lead to dragging the task
                //so disable dragging when clicking on label
                var agent = navigator.userAgent.toLowerCase();
                if (ace.vars['touch'] && ace.vars['android']) {
                    $('#tasks').on('touchstart', function (e) {
                        var li = $(e.target).closest('#tasks li');
                        if (li.length == 0)
                            return;
                        var label = li.find('label.inline').get(0);
                        if (label == e.target || $.contains(label, e.target))
                            e.stopImmediatePropagation();
                    });
                }

                $('#tasks').sortable({
                    opacity: 0.8,
                    revert: true,
                    forceHelperSize: true,
                    placeholder: 'draggable-placeholder',
                    forcePlaceholderSize: true,
                    tolerance: 'pointer',
                    stop: function (event, ui) {
                        //just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
                        $(ui.item).css('z-index', 'auto');
                    }
                }
                );
                $('#tasks').disableSelection();
                $('#tasks input:checkbox').removeAttr('checked').on('click', function () {
                    if (this.checked)
                        $(this).closest('li').addClass('selected');
                    else
                        $(this).closest('li').removeClass('selected');
                });


                //show the dropdowns on top or bottom depending on window height and menu position
                $('#task-tab .dropdown-hover').on('mouseenter', function (e) {
                    var offset = $(this).offset();

                    var $w = $(window)
                    if (offset.top > $w.scrollTop() + $w.innerHeight() - 100)
                        $(this).addClass('dropup');
                    else
                        $(this).removeClass('dropup');
                });

            })
        </script>
     
<!-- ALERTAS -->

<script type="text/javascript">
                        if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
  <script src="assets/js/excanvas.min.js"></script>
<![endif]-->
<script src="<?= base_url('assets/js/jquery-ui.custom.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.ui.touch-punch.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootbox.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.easypiechart.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.gritter.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/spin.js'); ?>"></script>

<!-- ace scripts -->
<script src="<?= base_url('assets/js/ace-elements.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/ace.min.js'); ?>"></script>

<!-- inline scripts related to this page -->
    </body>
