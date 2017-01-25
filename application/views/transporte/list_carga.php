
			<!--</table>-->

<div>
<div class="row">
    <div class="col-xs-11">
        <div class="widget-header">
            <h1 class="widget-title">Listado de Cargas Realizadas</h1>
        </div>

        <div class="clearfix">
            <div class="pull-right tableTools-container"></div>
        </div>
 

        
        <div  margin= "auto">
            <div class="row">
                <div class="col-xs-3">
           
                </div>
                <div class="col-xs-6">
                </div>
            </div>
            </div>
        <br>
        </div>

        <!-- div.table-responsive -->

        <!-- div.dataTables_borderWrap -->
        <div>
            <div class="col-xs-11">
            <table id="dynamic-table" class="table table-striped table-bordered table-hover dataTable" >
                <thead>
                    <tr>
                        
                        <th class="center">
                            <label class="pos-rel">
                                <input type="checkbox" class="ace" />
                                <span class="lbl"></span>
                            </label>
                        </th>
                        
                        <th>#</th>
                        <th>
                            <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                            Fecha
                        </th>
                        <th>Origen</th>
                        <th class="hidden-480">Destino</th>

                        <th class="hidden-480">Unidad</th>
                        <th colspan=""> Opciones</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        
                        <?php if(isset($cargas)){ ?>
				<?php 
					$i = 0;
					foreach ($cargas as $row){ 

					//Campo activo
					if($row->activo)
						$act = "SI";
					else
						$act = "NO";
				?>
                        
                        
                        <td class="center">
                            <label class="pos-rel">
                                <input type="checkbox" class="ace" />
                                <span class="lbl"></span>
                            </label>
                        <!--</td>-->

                         <td> <?php echo ++$i; ?></td>
                         <td> <?php echo $row->fecha; ?></td>
                         <td> <?php echo $row->origen_flete; ?></td>
                         <td> <?php echo $row->destino_flete; ?> </td>
                         <td> <?php echo $row->unidad; ?> </td>
                         <!--<td> <?php // echo $act; ?> </td>-->

                        <td>
                            <div class="hidden-sm hidden-xs action-buttons"margin= "auto">
                                <a class="blue" href="#">
                                    <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                </a>

                                <a href = <?php echo base_url().'index.php/transporte/Transporte/modificar_carga/'.$row->id; ?>><i class="ace-icon fa fa-pencil bigger-130"></i></a>
                                    
                                </a>

                            </div>

                            <div class="hidden-md hidden-lg" margin= "auto">
                                <div class="inline pos-rel">
                                    <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                        <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                        <li>
                                            <a href="#" class="tooltip-info" data-rel="tooltip" title="Ver">
                                                <span class="blue">
                                                    <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                </span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="tooltip-success" data-rel="tooltip" title="Editar">
                                                <span class="green">
                                                    <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                </span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>

            </tr>
         <?php }}else{ print "No hay datos que mostrar<br><br>";  } ?>
                </tbody>
            </table>
        </div>
        </div>
</div>
</div>



<!-- PAGE CONTENT ENDS -->
<div class="col-xs-11">
<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
    <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>

</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script src="<?= base_url('assets/js/jquery-2.1.4.min.js')?>"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
        if('ontouchstart' in document.documentElement) document.write("<script src='<?= base_url('assets/js/jquery.mobile.custom.min.js')?>'>"+"<"+"/script>");
</script>
<script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>

<!-- page specific plugin scripts -->
<script src="<?= base_url('assets/js/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('assets/js/jquery.dataTables.bootstrap.min.js')?>"></script>
<script src="<?= base_url('assets/js/dataTables.buttons.min.js')?>"></script>
<script src="<?= base_url('assets/js/buttons.flash.min.js')?>"></script>
<script src="<?= base_url('assets/js/buttons.html5.min.js')?>"></script>
<script src="<?= base_url('assets/js/buttons.print.min.js')?>"></script>
<script src="<?= base_url('assets/js/buttons.colVis.min.js')?>"></script>
<script src="<?= base_url('assets/js/dataTables.select.min.js')?>"></script>

<!-- ace scripts -->
<script src="<?= base_url('assets/js/ace-elements.min.js')?>"></script>
<script src="<?= base_url('assets/js/ace.min.js')?>"></script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
        jQuery(function($) {
                //initiate dataTables plugin
                var myTable = 
                $('#dynamic-table')
                //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                .DataTable({
                    bAutoWidth: false,
                    "aoColumns": [
                        {"bSortable": false},
                        null, null, null, null, null,
                        {"bSortable": false}
                    ],
                    "aaSorting": [],
                    //"bProcessing": true,
                    //"bServerSide": true,
                    //"sAjaxSource": "http://127.0.0.1/table.php"	,

                    //,
                    //"sScrollY": "200px",
                    //"bPaginate": false,

                    //"sScrollX": "100%",
                    //"sScrollXInner": "120%",
                    //"bScrollCollapse": true,
                    //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
                    //you may want to wrap the table inside a "div.dataTables_borderWrap" element

                    //"iDisplayLength": 50


                    select: {
                        style: 'multi'
                    }
                });



        $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';

        new $.fn.dataTable.Buttons(myTable, {
            buttons: [
//               
               {
                    "extend": "excel",
                     "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Exportar a Excel</span>",
                    "className": "btn btn-white btn-primary btn-bold"
                 },
//        
//               
                {
                    "extend": "print",
                    "text": "<i class='fa fa-print bigger-110 pink'></i> <span class='hidden'>Imprimir</span>",                    
                    "className": "btn btn-white btn-primary btn-bold",
                    autoPrint: true,
                    message: 'Esta impresión se produjo utilizando el botón Imprimir'
                }
            ]
        });
        myTable.buttons().container().appendTo($('.tableTools-container'));

        //style the message box
        var defaultCopyAction = myTable.button(1).action();
        myTable.button(1).action(function (e, dt, button, config) {
            defaultCopyAction(e, dt, button, config);
            $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
        });


        var defaultColvisAction = myTable.button(0).action();
        myTable.button(0).action(function (e, dt, button, config) {

            defaultColvisAction(e, dt, button, config);


            if ($('.dt-button-collection > .dropdown-menu').length == 0) {
                $('.dt-button-collection')
                        .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
                        .find('a').attr('href', '#').wrap("<li />")
            }
            $('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
        });

        ////

        setTimeout(function () {
            $($('.tableTools-container')).find('a.dt-button').each(function () {
                var div = $(this).find(' > div').first();
                if (div.length == 1)
                    div.tooltip({container: 'body', title: div.parent().text()});
                else
                    $(this).tooltip({container: 'body', title: $(this).text()});
            });
        }, 500);





        myTable.on('select', function (e, dt, type, index) {
            if (type === 'row') {
                $(myTable.row(index).node()).find('input:checkbox').prop('checked', true);
            }
        });
        myTable.on('deselect', function (e, dt, type, index) {
            if (type === 'row') {
                $(myTable.row(index).node()).find('input:checkbox').prop('checked', false);
            }
        });




        /////////////////////////////////
        //table checkboxes
        $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

        //select/deselect all rows according to table header checkbox
        $('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function () {
            var th_checked = this.checked;//checkbox inside "TH" table header

            $('#dynamic-table').find('tbody > tr').each(function () {
                var row = this;
                if (th_checked)
                    myTable.row(row).select();
                else
                    myTable.row(row).deselect();
            });
        });

        //select/deselect a row when the checkbox is checked/unchecked
        $('#dynamic-table').on('click', 'td input[type=checkbox]', function () {
            var row = $(this).closest('tr').get(0);
            if (this.checked)
                myTable.row(row).deselect();
            else
                myTable.row(row).select();
        });



        $(document).on('click', '#dynamic-table .dropdown-toggle', function (e) {
            e.stopImmediatePropagation();
            e.stopPropagation();
            e.preventDefault();
        });



        //And for the first simple table, which doesn't have TableTools or dataTables
        //select/deselect all rows according to table header checkbox
        var active_class = 'active';
        $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function () {
            var th_checked = this.checked;//checkbox inside "TH" table header

            $(this).closest('table').find('tbody > tr').each(function () {
                var row = this;
                if (th_checked)
                    $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                else
                    $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
            });
        });

        //select/deselect a row when the checkbox is checked/unchecked
        $('#simple-table').on('click', 'td input[type=checkbox]', function () {
            var $row = $(this).closest('tr');
            if ($row.is('.detail-row '))
                return;
            if (this.checked)
                $row.addClass(active_class);
            else
                $row.removeClass(active_class);
        });



        /********************************/
        //add tooltip for small view action buttons in dropdown menu
        $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});

        //tooltip placement on right or left
        function tooltip_placement(context, source) {
            var $source = $(source);
            var $parent = $source.closest('table')
            var off1 = $parent.offset();
            var w1 = $parent.width();

            var off2 = $source.offset();
            //var w2 = $source.width();

            if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2))
                return 'right';
            return 'left';
        }




        /***************/
        $('.show-details-btn').on('click', function (e) {
            e.preventDefault();
            $(this).closest('tr').next().toggleClass('open');
            $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
        });
        /***************/





        /**
         //add horizontal scrollbars to a simple table
         $('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
         {
         horizontal: true,
         styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
         size: 2000,
         mouseWheelLock: true
         }
         ).css('padding-top', '12px');
         */


    })
</script>	