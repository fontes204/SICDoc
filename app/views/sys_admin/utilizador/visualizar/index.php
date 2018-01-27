<?php
$userDao= new UtilizadorDao();
$user=new Utilizador();
$contaDao=new ContaDao();
$k=$userDao->listarTodos($user->pegarClasse());
$i=0;
?>

<!-- begin #content -->
<div id="content" class="content">
    <!-- begin row -->
    <div class="row">
        <!-- begin col-3 -->
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-green">
                <div class="stats-icon"><i class="fa fa-users"></i></div>
                <div class="stats-info">
                    <h4>Utilizadores</h4>
                    <p>3</p>
                </div>
                <div class="stats-link">
                    <a href="javascript:;">Ver Detalhes <i class="fa fa-arrow-circle-o-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-blue">
                <div class="stats-icon"><i class="fa fa-arrow-circle-up"></i></div>
                <div class="stats-info">
                    <h4>Contas Activadas</h4>
                    <p>20</p>
                </div>
                <div class="stats-link">
                    <a href="javascript:;">Ver Detalhes <i class="fa fa-arrow-circle-o-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-red">
                <div class="stats-icon"><i class="fa fa-lock"></i></div>
                <div class="stats-info">
                    <h4>Contas por Activar</h4>
                    <p>00</p>
                </div>
                <div class="stats-link">
                    <a href="javascript:;">Ver Detalhes <i class="fa fa-arrow-circle-o-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-purple">
                <div class="stats-icon"><i class="fa fa-file-archive-o"></i></div>
                <div class="stats-info">
                    <h4>Todos Processos</h4>
                    <p>23</p>
                </div>
                <div class="stats-link">
                    <a href="javascript:;">Ver Detalhes <i class="fa fa-arrow-circle-o-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
    </div>
    <!-- end row -->
    <!-- begin row -->
    <div class="row">
        <!-- begin col-10 -->
        <div class="col-md-12">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-trash"></i></a>
                    </div>
                    <h4 class="panel-title">Visualizar Utilizador</h4>
                </div>
                <div class="panel-body">
                    <table id="data-table" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Data de Nascimento</th>
                            <th>Gênero</th>
                            <th>Telefone</th>
                            <th>Morada</th>
                            <th>Departamento</th>
                            <th>Função</th>
                            <th>Estado</th>
                            <th>Opções</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($k as $rs):?>

                            <?php $i=$i+1;
                            $data=$user->DataAo($rs->_data_nascimento);
                            $morada=$rs->_morada!=null?$rs->_morada:'por definir';
                            $genero=$rs->_genero!=null?$rs->_genero:'por definir';

                            $funcao=$userDao->listarPorId('funcao',$rs->_id_funcao)->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($funcao as $funcaors)
                            {
                                $nomeFunc=$funcaors['_codigo'];
                                $idDeprtamento=$funcaors['_id_departamento'];
                            }

                            $depa=$userDao->listarPorId('departamento',$idDeprtamento)->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($depa as $depars)
                            {
                                $nomeDepa=$depars['_codigo'];
                            }



                            $conta=$userDao->listarPorId('conta',$rs->_id)->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($conta as $contars)
                            {
                                $estado=$contars['_estado']!=0?'activado':'desactivado';
                                if($estado=='desactivado')
                                    $class="text-danger";
                                else
                                    $class="text-primary";
                            }

                            ?>
                            <tr class="odd gradeX text-center">
                                <td><?php echo $i?></td>
                                <td><?php echo $rs->_nome?></td>
                                <td><?php echo $data?></td>
                                <td><?php echo $genero?></td>
                                <td><?php echo $rs->_telefone?></td>
                                <td><?php echo $morada?></td>
                                <td><?php echo $nomeDepa?></td>
                                <td><?php echo $nomeFunc?></td>
                                <td class="<?php echo $class?>"><?php echo $estado?></td>
                                <td class="text-center">
                                    <p>
                                        <a title="Eliminar" class="btn btn-danger btn-icon btn-circle btn-sm"><i class="fa fa-trash"></i></a>
                                        <a title="Editar" class="btn btn-primary btn-icon btn-circle btn-sm"><i class="fa fa-edit"></i></a>
                                        <a href="<?php echo URL?>sysadmin/maisInfo/<?php echo $rs->_id;?>" title="Ver mais" class="btn btn-success btn-icon btn-circle btn-sm"><i class="fa fa-eye"></i></a>
                                    </p>
                                </td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-10 -->
    </div>
    <!-- end row -->
</div>
<!-- end #content -->