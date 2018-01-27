<!-- begin #sidebar -->
<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <div class="image">
                    <a href="javascript:;"><img src="<?php echo URL?>public/assets/img/user-13.jpg" alt="" /></a>
                </div>
                <div class="info">
                    <?php echo $_SESSION['user'];?>
                    <small>Super Admin</small>
                </div>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
            <li class="nav-header text-center">Menu de Navega&ccedil;&atilde;o</li>
            <li class="has-sub active">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-user"></i>
                    <span>Utilizador</span>
                </a>
                <ul class="sub-menu">
                    <li class="active"><a href="<?php echo URL?>sysadmin/registarUtilizador"><i class="fa fa-plus"></i> Registar</a></li>
                    <li><a href="<?php echo URL?>sysadmin/visualizarUtilizador"><i class="fa fa-eye"></i> Vizualizar</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-sign-in"></i>
                    <span>Entra Como</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="<?php echo URL?>secretariaGeral"><i class="fa fa-user"></i> SGA</a></li>
                    <li><a href="<?php echo URL?>chefeGabAdmin"><i class="fa fa-user"></i> CGA</a></li>
                    <li><a href="<?php echo URL?>dmguuc"><i class="fa fa-user"></i> DMGUUC</a></li>
                    <li><a href="<?php echo URL?>sdmguuc"><i class="fa fa-user"></i> SDMGUUC</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
<!--                    <i class="fa fa-cogs"></i>-->
                    <span><i class="fa fa-plus"></i>Funcionalidades</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="<?php echo URL?>sysadmin/adicionarDepartamento"><i class="fa fa-folder"></i> Departamento</a></li>
                    <li><a href="<?php echo URL?>sysadmin/adicionarFuncao"><i class="fa fa-folder"></i> Função</a></li>
                </ul>
            </li>
            <!-- begin sidebar minify button -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar -->