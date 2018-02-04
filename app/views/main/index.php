
<?php
$perfil = Session::get('id_user');

switch (Session::get('type'))
{
    case 'sys':
        include_once ('op/sys-menu.php');
        break;
    case 'SCT':
        include_once ('op/op1.php');
        break;
    case 'GRC':
        include_once ('op/op2.php');
        break;
    case 'TEC':
        include_once ('op/op3.php');
        break;
}
?>

<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user"></i> &nbsp;<?php echo $nome?>
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="<?php echo URL . $att->getContoller() . '/perfil/'. base64_encode($perfil);?>"><i class="fa fa-user pull-right"></i> Perfil</a></li>
                        <li><a href="<?php echo URL.'logout/exit_'?>"><i class="fa fa-sign-out pull-right"></i> Sair</a></li>
                    </ul>
                </li>

                <li role="presentation" class="dropdown">
                    <a href="<?php echo URL.$att->getContoller().'/listarTodos/'.base64_encode('concluidos');?>">
                        <i class="fa fa-folder"></i>
                        <span>Concluídos</span>
                    </a>
                </li>

                <li role="presentation" class="dropdown">
                    <a href="<?php echo URL.$att->getContoller().'/listarTodos/'.base64_encode('conservatoria');?>">
                        <i class="fa fa-folder"></i>
                        <span>Conservatória Predial</span>
                    </a>
                </li>

                <li role="presentation" class="dropdown">
                    <a href="<?php echo URL.$att->getContoller().'/listarTodos/'.base64_encode('cartorio');?>">
                        <i class="fa fa-folder"></i>
                        <span>Cartório</span>
                    </a>
                </li>

                <li role="presentation" class="dropdown">
                    <a href="<?php echo URL.$att->getContoller().'/listarTodos/'.base64_encode('financas');?>">
                        <i class="fa fa-folder"></i>
                        <span>Finanças</span>
                    </a>
                </li>

                <li role="presentation" class="dropdown">
                    <a href="<?php echo URL.$att->getContoller().'/listarTodos/'.base64_encode('pre-resgisto');?>">
                        <i class="fa fa-folder"></i>
                        <span>Pré-Registo</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->
