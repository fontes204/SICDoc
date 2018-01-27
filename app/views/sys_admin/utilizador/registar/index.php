<?php
$dao=new Database();
$prov=$dao->listarTodos('provincia')->fetchAll(2);
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
        <!-- begin col-12 -->
        <div class="col-md-12">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title">Registar Utilizador</h4>
                </div>
                <div class="panel-body">
                    <form action="<?php echo URL?>utilizador/registoBackEnd" method="POST" class="form-registo-user-back-end" data-parsley-validate="true" name="form-wizard">
                        <div id="wizard">
                            <ol style="font-family: Verdana, Arial, sans-serif">
                                <li>
                                    Dados Pesssoais
                                </li>
                                <li>
                                    Morada & Grau Acadêmico
                                </li>
                                <li>
                                    Contacto
                                </li>
                                <li>
                                    Departamento & Função
                                </li>
                                <li>
                                    Dados de Acesso
                                </li>
                            </ol>
                            <!-- begin wizard step-1 -->
                            <div class="wizard-step-1">
                                <fieldset>
                                    <!-- begin row -->
                                    <div class="row">
                                        <!-- begin col-4 -->
                                        <div class="col-md-4">
                                            <div class="form-group block1">
                                                <label>Nome Completo</label>
                                                <input type="text" name="nomecompleto" autofocus placeholder="António Manuel Francisco" class="form-control" data-parsley-group="wizard-step-1" required />
                                            </div>
                                        </div>
                                        <!-- end col-4 -->
                                        <!-- begin col-4 -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>G&ecirc;nero</label>
                                                <div class="">
                                                    <div id="gender" class="btn-group" style="display: inline" data-toggle="buttons">
                                                        <label class="btn btn-default generoUtente" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                            <input type="radio" class="generoUtente" name="genero" id="select_" value="m">Masculino
                                                        </label>
                                                        <label class="btn btn-primary generoUtente" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                            <input type="radio" class="generoUtente" name="genero" value="f"> Feminino
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col-4 -->
                                        <!-- begin col-4 -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Data de Nascimento</label>

                                                <input type="text" name="datanascimento" id="datepicker-autoClose" placeholder="30-10-1988" class="form-control" data-parsley-group="wizard-step-1" required />
                                            </div>
                                        </div>
                                        <!-- end col-4 -->
                                        <!-- begin col-4 -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>N&uacute;mero do Bilhete</label>
                                                <input type="text" name="numbi" placeholder="002841878ZZ039" class="form-control" data-parsley-group="wizard-step-1" required />
                                            </div>
                                        </div>
                                        <!-- end col-4 -->
                                    </div>
                                    <!-- end row -->
                                </fieldset>
                            </div>
                            <!-- end wizard step-1 -->
                            <!-- begin wizard step-2 -->
                            <div class="wizard-step-2">
                                <fieldset>
                                    <!-- begin row -->
                                    <div class="row">
                                        <!-- begin col-4 -->
                                        <div class="col-md-4">
                                            <div class="form-group block1">
                                                <label>Província</label>
                                                <select class="default-select form-control select-prov" name="_id_provincia">
                                                    <option>Selcione uma província</option>
                                                    <?php foreach ($prov as  $res):?>
                                                        <option value="<?php echo $res['_id'];?>"><?php echo $res['_nome']?></option>
                                                    <?php endforeach;?>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- end col-4 -->
                                        <!-- begin col-4 -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Município</label>
                                                <select class="default-select form-control select-municipio" name="_id_municipio" required></select>
                                            </div>
                                        </div>
                                        <!-- end col-4 -->
                                        <!-- begin col-4 -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Comuna</label>
                                                <select class="default-select form-control select-comuna" name="_id_comuna" required></select>
                                            </div>
                                        </div>
                                        <!-- end col-4 -->

                                        <!-- begin col-4 -->
                                        <div class="col-md-4">
                                            <div class="form-group block2">
                                                <label>Bairro</label>
                                                <select class="default-select form-control select-bairro" name="_id_bairro" required></select>
                                            </div>
                                        </div>
                                        <!-- end col-4 -->
                                        <!-- begin col-4 -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Rua</label>
                                                <select class="default-select form-control select-rua" name="_id_rua" required></select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                              <div class="form-group">
                                                   <label>Nível Escolar</label>
                                                  <select name="nivel_escolar" class="default-select form-control">
                                                      <option value="Técnico de Base">Técnico de Base</option>
                                                      <option value="Técnico Médio">Técnico Médio</option>
                                                      <option value="Bacharel">Bacharel</option>
                                                      <option value="Técnico Superior">Técnico Superior</option>
                                                      <option value="Mestre">Mestre</option>
                                                      <option value="Doutor">Doutor</option>
                                                  </select>
                                              </div>
                                        </div>

                                    </div>
                                    <!-- end row -->
                                </fieldset>
                            </div>
                            <!-- end wizard step-2 -->
                            <!-- begin wizard step-3 -->
                            <div class="wizard-step-3">
                                <fieldset>
                                    <!-- begin row -->
                                    <div class="row">
                                        <!-- begin col-6 -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Telefone</label>
                                                <input type="text" name="telefone" placeholder="9XX 123 456" class="form-control" data-parsley-group="wizard-step-3" data-parsley-type="number" required />
                                            </div>
                                        </div>
                                        <!-- end col-6 -->
                                        <!-- begin col-6 -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>E-mail</label>
                                                <input type="email" name="email" placeholder="ony@example.com" class="form-control" data-parsley-group="wizard-step-3" data-parsley-type="email" required />
                                            </div>
                                        </div>
                                        <!-- end col-6 -->
                                    </div>
                                    <!-- end row -->
                                </fieldset>
                            </div>
                            <!-- end wizard step-3 -->
                            <!-- begin wizard step-4 -->
                            <div class="wizard-step-4">
                                <fieldset>
                                    <!-- begin row -->
                                    <div class="row">
                                        <!-- begin col-6 -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Departamento</label>
                                                <select name="depa" class="departamento-select default-select form-control" required></select>
                                            </div>
                                        </div>
                                        <!-- end col-6 -->
                                        <!-- begin col-6 -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Função</label>
                                                <select name="funcao" class="funcao-select default-select form-control txt" required></select>
                                            </div>
                                        </div>
                                        <!-- end col-6 -->
                                    </div>
                                    <!-- end row -->
                                </fieldset>
                            </div>
                            <!-- end wizard step-4 -->
                            <!-- begin wizard step-4 -->
                            <div class="wizard-step-5">
                                <fieldset>
                                    <!-- begin row -->
                                    <div class="row">
                                        <!-- begin col-6 -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Utilizador</label>
                                                <input type="text" name="username" placeholder="Hacker Xp" class="form-control" data-parsley-group="wizard-step-5" required />
                                            </div>
                                        </div>
                                        <!-- end col-6 -->
                                        <!-- begin col-6 -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Senha</label>
                                                <input type="text" name="senha" placeholder="*************" class="form-control" data-parsley-group="wizard-step-5" required />
                                            </div>
                                        </div>
                                        <!-- end col-6 -->
                                    </div>
                                    <!-- end row -->
                                </fieldset>
                            </div>
                            <!-- end wizard step-4 -->
                        </div>
                    </form>
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-12 -->
    </div>
    <!-- end row -->
</div>
<!-- end #content -->