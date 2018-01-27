
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="<?php echo URL.$att->getContoller()?>" class="site_title"><i class="fa fa-file-archive-o"></i> <span class="text-primary">SIC</span>Doc</a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="<?php echo URL?>public/images/img.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Bem-vindo,</span>
                        <h2><?php echo $nome?></h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>Menu de Navegação</h3>
                        <ul class="nav side-menu">
                            <li><a href="<?php echo URL.$att->getContoller()?>"><i class="fa fa-home"></i> Home</a>
                            </li>
                            <li><a><i class="fa fa-file-archive-o"></i> Processo <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="<?php echo URL.$att->getContoller().'/novo/'.base64_encode('processo');?>">Novo Processo</a></li>
                                    <li><a href="form_advanced.html">Editar Processo</a></li>
                                    <li><a href="<?php echo URL.$att->getContoller().'/filtrar/'.base64_encode('processo');?>">Procurar Processo</a></li>
                                    <li><a href="form_wizards.html">Eliminar Processo</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-file"></i> Factura <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="general_elements.html">Nova Factura</a></li>
                                    <li><a href="<?php echo URL.$att->getContoller().'/filtrar/'.base64_encode('factura');?>">Procurar Factura</a></li>
                                    <li><a href="typography.html">Factura Pro-forma</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-group"></i> Gerir Funcionários <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="<?php echo URL.$att->getContoller().'/novo/'.base64_encode('funcionario');?>">Novo Funcionário</a></li>
                                    <li><a href="#">Editar Funcionário</a></li>
                                    <li><a href="typography.html">Listar Todos Funcionários</a></li>
                                    <li><a href="<?php echo URL.$att->getContoller().'/filtrar/'.base64_encode('funcionario');?>">Procurar Funcionário</a></li>
                                    <li><a href="typography.html">Eliminar Funcionário</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-group"></i> Gerir Emolumentos <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="general_elements.html">Novo Emolumento</a></li>
                                    <li><a href="#">Editar Emolumento</a></li>
                                    <li><a href="typography.html">Listar Todos Emolumentos</a></li>
                                    <li><a href="typography.html">Eliminar Emolumento</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->
            </div>
        </div>