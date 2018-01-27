<?php
    $opcao=array(
        new Atributo(),
        new UtilizadorDao(),
        new Utilizador()
        );

    $vl=array($opcao[0]->getParam());
    $campos=array('*');
    $k=$opcao[1]->buscaExaustiva($campos,$opcao[2]->pegarClasse(),'_id=?',$vl)->fetchObject();

    $conta=$opcao[1]->listarPorId('conta',$opcao[0]->getParam())->fetchObject();
    $funcao=$opcao[1]->listarPorId('funcao',$k->_id_funcao)->fetchObject();
    $depa=$opcao[1]->listarPorId('departamento',$funcao->_id_departamento)->fetchObject();

    $opcao[2]->set_nome($k->_nome);
    $opcao[2]->set_genero($k->_genero);
    $opcao[2]->set_dataNascimento($k->_data_nascimento);
    $opcao[2]->set_numBI($k->_num_bi);
    $opcao[2]->set_telefone($k->_telefone);
    $opcao[2]->set_email($k->_email);
    $opcao[2]->set_idfuncao($funcao->_codigo);
    $opcao[2]->set_nivelEscolar($k->_nivel_escolar);


?>

<!-- begin #content -->
<div id="content" class="content">
    <!-- begin page-header -->
    <!-- end page-header -->
    <!-- begin profile-container -->
    <div class="profile-container">
        <!-- begin profile-section -->
        <div class="profile-section">
            <!-- begin profile-left -->
            <div class="profile-left">
                <!-- begin profile-image -->
                <div class="profile-image">
                    <img src="<?php echo URL?>public/assets/img/user-13.jpg" style="width: 100%;height: 100%"/>
                    <i class="fa fa-user hide"></i>
                </div>
                <!-- end profile-image -->
                <div class="m-b-10">
                    <h5 class="text-center"><?php echo $opcao[2]->get_nome()?></h5>
                </div>
                <!-- begin profile-highlight -->
                <div class="profile-highlight">
                    <h4  style="color: #fff"><i class="fa fa-cog"></i> Status</h4>
                    <div class="checkbosx">
                        <?php if($conta->_estado==1){?>
                        <label class="btn-sift-status" style="color: #fff;cursor: pointer"><input id="status" type="checkbox"  data-render="switchery" checked  /> Activado</label>
                        <?php }else{?>
                        <label class="btn-sift-status" style="color: #fff;cursor: pointer"><input id="status" type="checkbox" data-render="switchery"  /> Desactivado</label>
                        <?php }?>
                    </div>
                </div>
                <!-- end profile-highlight -->
            </div>
            <!-- end profile-left -->
            <!-- begin profile-right -->
            <div class="profile-right">
                <!-- begin profile-info -->
                <div class="panel panel-inverse panel-with-tabs" data-sortable-id="ui-unlimited-tabs-1">
                    <div class="panel-heading p-0">
                        <div class="panel-heading-btn m-r-10 m-t-10">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        </div>
                        <!-- begin nav-tabs -->
                        <div class="tab-overflow">
                            <ul class="nav nav-tabs nav-tabs-inverse">
                                <li class="prev-button"><a href="javascript:;" data-click="prev-tab" class="text-success"><i class="fa fa-arrow-left"></i></a></li>
                                <li class="active"><a href="#nav-tab-1" data-toggle="tab"><b><i class="fa fa-user"></i> Dados Pessoais</b></a></li>
                                <li class=""><a href="#nav-tab-2" data-toggle="tab"><b><i class="fa fa-home"></i> Morada & Contacto</b></a></li>
                                <li class=""><a href="#nav-tab-3" data-toggle="tab"><b><i class="fa fa-bank"></i> Departamento & Função</b></a></li>
                                <li class=""><a href="#nav-tab-4" data-toggle="tab"><b><i class="fa fa-graduation-cap"></i> Grau Acadêmico</b></a></li>
                           </ul>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="nav-tab-1">
                            <div class="table-responsive">
                                <table class="table table-profile">
                                    <tbody>
                                    <tr class="highlight">
                                        <td class="field">G&ecirc;nero</td>
                                        <td><?php echo $opcao[2]->get_genero()?></td>
                                    </tr>
                                    <tr class="divider">
                                        <td colspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td class="field">Aniverssário</td>
                                        <td><?php echo $opcao[2]->get_dataNascimento()?></td>
                                    </tr>
                                    <tr>
                                        <td class="field">BI n&ordm;</td>
                                        <td><?php echo $opcao[2]->get_numBI()?></td>
                                    </tr>
                                    <tr>
                                        <td class="field"></td>
                                        <td></td>
                                    </tr>
                                    <tr class="divider">
                                        <td colspan="2"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-2">
                            <div class="table-responsive">
                                <table class="table table-profile">
                                    <tbody>
                                    <tr class="highlight">
                                        <td class="field">Morada</td>
                                        <td><?php echo $opcao[2]->get_genero()?></td>
                                    </tr>
                                    <tr class="divider">
                                        <td colspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td class="field">Telefone</td>
                                        <td><?php echo $opcao[2]->get_telefone()?></td>
                                    </tr>
                                    <tr>
                                        <td class="field">E-mail</td>
                                        <td><?php echo $opcao[2]->get_email()?></td>
                                    </tr>
                                    <tr>
                                        <td class="field"></td>
                                        <td></td>
                                    </tr>
                                    <tr class="divider">
                                        <td colspan="2"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-3">
                            <div class="table-responsive">
                                <table class="table table-profile">
                                    <tbody>
                                    <tr class="highlight">
                                        <td class="field">Departamento</td>
                                        <td><?php echo $depa->_codigo;?></td>
                                    </tr>
                                    <tr class="divider">
                                        <td colspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td class="field">Função</td>
                                        <td><?php echo $funcao->_codigo?></td>
                                    </tr>
                                    <tr>
                                        <td class="field"></td>
                                        <td></td>
                                    </tr>
                                    <tr class="divider">
                                        <td colspan="2"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-4">
                            <div class="table-responsive">
                                <table class="table table-profile">
                                    <tbody>
                                    <tr class="highlight">
                                        <td class="field">Nível</td>
                                        <td><?php echo $opcao[2]->get_nivelEscolar()?></td>
                                    </tr>
                                    <tr class="divider">
                                        <td colspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td class="field"></td>
                                        <td></td>
                                    </tr>
                                    <tr class="divider">
                                        <td colspan="2"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end profile-info -->
            </div>
            <!-- end profile-right -->
        </div>
        <!-- end profile-section -->
        <!-- begin profile-section -->
        <div class="profile-section">
            <!-- begin row -->
            <div class="row">&nbsp;</div>
            <!-- end row -->
        </div>
        <!-- end profile-section -->
    </div>
    <!-- end profile-container -->
</div>
<!-- end #content -->