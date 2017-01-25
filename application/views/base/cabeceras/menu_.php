<body  class="skin-1">
    <div id="navbar" class="navbar navbar-default          ace-save-state">
        <div class="navbar-container ace-save-state" id="navbar-container">
            <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                <span class="sr-only">Toggle sidebar</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>
            </button>

            <div class="navbar-header pull-left">
                <a  class="navbar-brand">
                <!--<a href="index.html" class="navbar-brand">-->
                    <small>
                        <i class="fa fa-calculator"></i>
                        VendeCar
                        
                    </small>
                </a>
            </div>

            <div class="navbar-buttons navbar-header pull-right" role="navigation">
                <ul class="nav ace">
                    <li class="light-blue dropdown-modal">
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                            <!--<img class="nav-user-photo" src="<?= base_url('assets/images/avatars/user.jpg')?>" alt="Jason's Photo" />-->
                            <p class="user-info" style="color: #F4F9FD">
                                Admin
                            </p>

                            <i class="ace-icon fa fa-caret-down" style="color: #F4F9FD"></i>
                        </a>
                        <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                            <li>
                                <a href="#">
                                    <i class="ace-icon fa fa-cog"></i>
                                    Ajustes
                                </a>
                            </li>

                            <li>
                                <a href="profile.html">
                                    <i class="ace-icon fa fa-user"></i>
                                    Perfil
                                </a>
                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="#">
                                    <i class="ace-icon fa fa-power-off"></i>
                                    Cerrar Sesión
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!-- /.navbar-container -->
    </div>

    <div class="main-container ace-save-state" id="main-container">
        <script type="text/javascript">
            try {
                ace.settings.loadState('main-container')
            } catch (e) {
            }
        </script>
    </div>
        <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
            <script type="text/javascript">
                try {
                    ace.settings.loadState('sidebar')} catch (e) {
                }
            </script>

            <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                    <!--<div>-->
                    <a href="<?= base_url('index.php/transporte/Transporte/crear_cliente') ?>">   
                        <button  class="btn btn-warning"  >
                            <i class="ace-icon fa fa-user"  title="Reg.de Cliente">
                            </i>
                        </button>
                    </a>     
                    <a href="<?= base_url('index.php/transporte/Transporte/crear_proveedor') ?>">  
                        <button class="btn btn-success">
                            <i class="ace-icon fa fa-users" title="Reg.de Proveedor"></i>
                        </button>
                    </a>   
                    <a href="<?= base_url('index.php/transporte/Transporte/crear_producto') ?>">
                        <button class="btn btn-danger">
                            <i class="ace-icon fa fa-cubes" title="Reg.de Productos"></i>
                        </button>
                    </a> 
                    <a href="<?= base_url('index.php/transporte/Transporte/crear_chofer') ?>">
                        <button class="btn btn-primary">
                            <i class="ace-icon fa fa-user-secret" title="Reg.de Chofer"></i>
                        </button>
                    </a> 
                    <a href="<?= base_url('index.php/transporte/Transporte/crear_vehiculo') ?>">
                        <button class="btn btn-purple">
                            <i class="ace-icon fa fa-bus" title="Reg.de Vehiculos"></i>
                        </button>
                    </a> 
                    <a href="<?= base_url('index.php/transporte/Transporte/crear_carga')?>">                        
                        <button class="btn btn-pink">
                            <i class="ace-icon fa fa-desktop" title="Reg.de Carga"></i>
                        </button>
                    </a> 
<!--                    <button class="btn btn-info">
                        <i class="ace-icon fa fa-list" title="Reportes"></i>
                    </button>-->
                </div>

                <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                    
                    <span class="btn btn-warning"></span>
                    
                    <span class="btn btn-success"></span>

                    <span class="btn btn-danger"></span>

                    <span class="btn btn-primary"></span>
                    
                    <span class="btn btn-purple"></span>
                    
                    <span class="btn btn-pink"></span>
                </div>
            </div><!-- /.sidebar-shortcuts -->

<!-- LISTA VERTICAL -->
            <ul class="nav nav-list">
                <li class="">
                    <a href="<?= base_url('index.php/transporte/Transporte/index')?>">
                    <!--<a href="transporte/home.php">-->
                        <i class="menu-icon fa fa-tachometer"></i>
                        <span class="menu-text"> Inicio </span>
                    </a>
                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-desktop"></i>
                        <span class="menu-text">
                           Carga
                        </span>

                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="">
                            <a href="#" class="dropdown-toggle">
                                <i class="menu-icon fa fa-caret-right"></i>

                                Registros 
                                <b class="arrow fa fa-angle-down"></b>
                            </a>

                            <b class="arrow"></b>

                            <ul class="submenu">
                                <li class="">
                                     <a href="<?= base_url('index.php/transporte/Transporte/crear_cliente')?>">
                                        <i class="menu-icon fa fa-user orange"></i>
                                        Clientes
                                    </a>

                                    <b class="arrow"></b>
                                </li>

                                <li class="">
                                     <a href="<?= base_url('index.php/transporte/Transporte/crear_proveedor')?>">
                                        <i class="menu-icon fa fa-users green"></i>
                                        Proveedores
                                    </a>

                                    <b class="arrow"></b>
                                </li>

                                <li class="">
                                     <a href="<?= base_url('index.php/transporte/Transporte/crear_producto')?>">
                                        <i class="menu-icon fa fa-cubes red"></i>
                                        Productos
                                    </a>

                                    <b class="arrow"></b>
                                </li>

                                <li class="">
                                     <a href="<?= base_url('index.php/transporte/Transporte/crear_chofer')?>">
                                        <i class="menu-icon fa fa-user-plus blue"></i>
                                        Chofer
                                    </a>

                                    <b class="arrow"></b>
                                </li>

                                <li class="">
                                     <a href="<?= base_url('index.php/transporte/Transporte/crear_vehiculo')?>">
                                        <i class="menu-icon fa fa-car purple "></i>
                                        Vehiculo
                                    </a>

                                    <b class="arrow"></b>
                                </li>

                            </ul>
                        </li>
                       <li class="">
                            <a href="#" class="dropdown-toggle">
                                <i class="menu-icon fa fa-caret-right"></i>

                                Entrada de Carga
                                <b class="arrow fa fa-angle-down"></b>
                            </a>

                            <b class="arrow"></b>

                            <ul class="submenu">
                                <li class="">
                                    <a href="<?= base_url('index.php/transporte/Transporte/crear_carga')?>">
                                        <i class="menu-icon fa fa-desktop pink"></i>
                                        Registro de Carga
                                    </a>

                                    <b class="arrow"></b>
                                </li>

                                <li class="">                                     
                                    <a href="<?= base_url('index.php/transporte/Transporte/crear_carga') ?>">
                                        <i class="menu-icon fa fa-pencil orange"></i>

                                        Recibo/Entrada
                                        <!--<b class="arrow fa fa-angle-down"></b>-->
                                    </a>

                                    <b class="arrow"></b>
                     
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-list"></i>
                        <span class="menu-text"> Reportes </span>

                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="">
                            <a href="<?= base_url('index.php/transporte/Transporte/clientes')?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Por Cliente
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="<?= base_url('index.php/transporte/Transporte/proveedores')?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                 Por Proveedor
                            </a>

                            <b class="arrow"></b>
                        </li>
                        
                        <li class="">
                            <a href="<?= base_url('index.php/transporte/Transporte/productos')?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                 Por Producto
                            </a>

                            <b class="arrow"></b>
                        </li>
                        
                        <li class="">
                            <a href="<?= base_url('index.php/transporte/Transporte/choferes')?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                 Por Chofer
                            </a>

                            <b class="arrow"></b>
                        </li>
                        
                        <li class="">
                            <a href="<?= base_url('index.php/transporte/Transporte/vehiculos')?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                 Por Vehiculo
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="<?= base_url('index.php/transporte/Transporte/cargas')?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                 Por Carga
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>

            </ul>

<!-- /.nav-list -->
<!-- LISTA VERTICAL -->
        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
         </div>

        <div class="main-content">
            <div class="main-content-inner">
                <div class="page-content"></div>
                
                    <div class="ace-settings-container" id="ace-settings-container">
                        <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                            <i class="ace-icon fa fa-cog bigger-130"></i>
                        </div>

                        <div class="ace-settings-box clearfix" id="ace-settings-box">
                            <div class="pull-left width-50">
                                <div class="ace-settings-item">
                                    <div class="pull-left">
                                        <select id="skin-colorpicker" class="hide">
                                            <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                            <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                            <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                            <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                        </select>
                                    </div>
                                    <span>&nbsp; Elija el Skin</span>
                                </div>


                            </div><!-- /.pull-left -->

                            <div class="pull-left width-50">
                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" </input>
                                    <label class="lbl" for="ace-settings-hover"> Submenú en Hover</label>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
                                    <label class="lbl" for="ace-settings-compact"> Barra lateral compacta</label>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
                                    <label class="lbl" for="ace-settings-highlight"> Alt. Elemento activo</label>
                                </div>
                            </div><!-- /.pull-left -->
                        </div><!-- /.ace-settings-box -->
                    </div>
                <!-- /.ace-settings-container -->
                </div>
        <!--</div>-->
                    
                      
                    
                        
    <!-- basic scripts -->

    <!--[if !IE]> -->
    <script src="<?= base_url('assets/js/jquery-2.1.4.min.js')?>"></script>

    <!-- <![endif]-->

    <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
    <script type="text/javascript">
                        if ('ontouchstart' in document.documentElement)
                            document.write("<script src='<?= base_url('assets/js/jquery.mobile.custom.min.js')?>>" + "<" + "/script>");
    </script>
    <script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>

    <!-- page specific plugin scripts -->
    <script src="<?= base_url('assets/js/jquery-ui.custom.min.js')?>"></script>
    <script src="<?= base_url('assets/js/jquery.ui.touch-punch.min.js')?>"></script>

    <!-- ace scripts -->
    <script src="<?= base_url('assets/js/ace-elements.min.js')?>"></script>
    <script src="<?= base_url('assets/js/ace.min.js')?>"></script>

    <!-- inline scripts related to this page -->
    <script type="text/javascript">
                        jQuery(function ($) {

                            $('#simple-colorpicker-1').ace_colorpicker({pull_right: true}).on('change', function () {
                                var color_class = $(this).find('option:selected').data('class');
                                var new_class = 'widget-box';
                                if (color_class != 'default')
                                    new_class += ' widget-color-' + color_class;
                                $(this).closest('.widget-box').attr('class', new_class);
                            });


                            // scrollables
                            $('.scrollable').each(function () {
                                var $this = $(this);
                                $(this).ace_scroll({
                                    size: $this.attr('data-size') || 100,
                                    //styleClass: 'scroll-left scroll-margin scroll-thin scroll-dark scroll-light no-track scroll-visible'
                                });
                            });
                            $('.scrollable-horizontal').each(function () {
                                var $this = $(this);
                                $(this).ace_scroll(
                                        {
                                            horizontal: true,
                                            styleClass: 'scroll-top', //show the scrollbars on top(default is bottom)
                                            size: $this.attr('data-size') || 500,
                                            mouseWheelLock: true
                                        }
                                ).css({'padding-top': 12});
                            });

                            $(window).on('resize.scroll_reset', function () {
                                $('.scrollable-horizontal').ace_scroll('reset');
                            });


                            $('#id-checkbox-vertical').prop('checked', false).on('click', function () {
                                $('#widget-toolbox-1').toggleClass('toolbox-vertical')
                                        .find('.btn-group').toggleClass('btn-group-vertical')
                                        .filter(':first').toggleClass('hidden')
                                        .parent().toggleClass('btn-toolbar')
                            });

                            /**
                             //or use slimScroll plugin
                             $('.slim-scrollable').each(function () {
                             var $this = $(this);
                             $this.slimScroll({
                             height: $this.data('height') || 100,
                             railVisible:true
                             });
                             });
                             */


                            /**$('.widget-box').on('setting.ace.widget' , function(e) {
                             e.preventDefault();
                             });*/

                            /**
                             $('.widget-box').on('show.ace.widget', function(e) {
                             //e.preventDefault();
                             //this = the widget-box
                             });
                             $('.widget-box').on('reload.ace.widget', function(e) {
                             //this = the widget-box
                             });
                             */

                            //$('#my-widget-box').widget_box('hide');



                            // widget boxes
                            // widget box drag & drop example
                            $('.widget-container-col').sortable({
                                connectWith: '.widget-container-col',
                                items: '> .widget-box',
                                handle: ace.vars['touch'] ? '.widget-title' : false,
                                cancel: '.fullscreen',
                                opacity: 0.8,
                                revert: true,
                                forceHelperSize: true,
                                placeholder: 'widget-placeholder',
                                forcePlaceholderSize: true,
                                tolerance: 'pointer',
                                start: function (event, ui) {
                                    //when an element is moved, it's parent becomes empty with almost zero height.
                                    //we set a min-height for it to be large enough so that later we can easily drop elements back onto it
                                    ui.item.parent().css({'min-height': ui.item.height()})
                                    //ui.sender.css({'min-height':ui.item.height() , 'background-color' : '#F5F5F5'})
                                },
                                update: function (event, ui) {
                                    ui.item.parent({'min-height': ''})
                                    //p.style.removeProperty('background-color');


                                    //save widget positions
                                    var widget_order = {}
                                    $('.widget-container-col').each(function () {
                                        var container_id = $(this).attr('id');
                                        widget_order[container_id] = []


                                        $(this).find('> .widget-box').each(function () {
                                            var widget_id = $(this).attr('id');
                                            widget_order[container_id].push(widget_id);
                                            //now we know each container contains which widgets
                                        });
                                    });

                                    ace.data.set('demo', 'widget-order', widget_order, null, true);
                                }
                            });


                            ///////////////////////

                            //when a widget is shown/hidden/closed, we save its state for later retrieval
                            $(document).on('shown.ace.widget hidden.ace.widget closed.ace.widget', '.widget-box', function (event) {
                                var widgets = ace.data.get('demo', 'widget-state', true);
                                if (widgets == null)
                                    widgets = {}

                                var id = $(this).attr('id');
                                widgets[id] = event.type;
                                ace.data.set('demo', 'widget-state', widgets, null, true);
                            });


                            (function () {
                                //restore widget order
                                var container_list = ace.data.get('demo', 'widget-order', true);
                                if (container_list) {
                                    for (var container_id in container_list)
                                        if (container_list.hasOwnProperty(container_id)) {

                                            var widgets_inside_container = container_list[container_id];
                                            if (widgets_inside_container.length == 0)
                                                continue;

                                            for (var i = 0; i < widgets_inside_container.length; i++) {
                                                var widget = widgets_inside_container[i];
                                                $('#' + widget).appendTo('#' + container_id);
                                            }

                                        }
                                }


                                //restore widget state
                                var widgets = ace.data.get('demo', 'widget-state', true);
                                if (widgets != null) {
                                    for (var id in widgets)
                                        if (widgets.hasOwnProperty(id)) {
                                            var state = widgets[id];
                                            var widget = $('#' + id);
                                            if
                                                    (
                                                            (state == 'shown' && widget.hasClass('collapsed'))
                                                            ||
                                                            (state == 'hidden' && !widget.hasClass('collapsed'))
                                                            )
                                            {
                                                widget.widget_box('toggleFast');
                                            } else if (state == 'closed') {
                                                widget.widget_box('closeFast');
                                            }
                                        }
                                }


                                $('#main-widget-container').removeClass('invisible');


                                //reset saved positions and states
                                $('#reset-widgets').on('click', function () {
                                    ace.data.remove('demo', 'widget-state');
                                    ace.data.remove('demo', 'widget-order');
                                    document.location.reload();
                                });

                            })();

                        });
    </script>


</body>
