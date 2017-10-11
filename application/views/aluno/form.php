 <?php
          //Variavel de destino para o formulario
          $destino = "aluno/novo_aluno";
          $tituloformulario = "Incluir Aluno";

          //se recebemos uma variavel pelo metodo Get, faça o seguinte
          if(!empty($aluno[0])){

            //alterar Destino
            $destino = "aluno/update_aluno";
            $tituloformulario = "Alterar Aluno";
            
          }


       ?>

<!-- main -->
        <div class="column col-sm-9" id="main">
            <div class="padding">
                <div class="full col-sm-9">

                    <!-- content -->
                    <div class="col-sm-5" id="featured">
                      <div class="page-header text-muted">Usuário: <?php  echo $this->session->userdata('user_name');  ?></div>

                        <form class="form-horizontal" action="<?php echo base_url($destino); ?>" method="post">

                        <input type="hidden" name="idaluno" id="idaluno" value="<?php  echo isset($aluno)?$aluno[0]->idaluno:""; ?>">

                          <fieldset>

                            <!-- Form Name -->
                            <legend>  <? echo $tituloformulario; ?></legend>

                                <!-- Text input-->
                                <div class="control-group">
                                  <label class="control-label" for="nomealuno">Nome</label>
                                  <div class="controls">
                                    <input id="nomealuno" name="nomealuno" type="text" value="<?php  echo isset($aluno)?$aluno[0]->nomealuno:""; ?>"  autocomplete="off" />

                                  </div>
                                </div>




                                 <!-- Text input-->
                                <div class="control-group">
                                  <label class="control-label" for="emailaluno">Email</label>
                                  <div class="controls">
                                    <input id="emailaluno" name="emailaluno" type="text" value="<?php echo isset($aluno)?$aluno[0]->emailaluno:""; ?>" autocomplete="off" />

                                  </div>
                                </div>


                                <div class="control-group">
                                  <label class="control-label" for="matricula">Matricula</label>
                                  <div class="controls">
                                    <input id="matricula" name="matricula" type="text" value="<?php echo isset($aluno)?$aluno[0]->matricula:""; ?>" autocomplete="off" />

                                  </div>
                                </div>

                                <div class="control-group">
                                  <label class="control-label" for="endereco">Endereco</label>
                                  <div class="controls">
                                    <input id="endereco" name="endereco" type="text" value="<?php echo isset($aluno)?$aluno[0]->endereco:""; ?>" autocomplete="off" />

                                  </div>
                                </div>


                                <div class="control-group">
                                  <label class="control-label" for="turma">Turma</label>
                                  <div class="controls">
                                    <input id="turma" name="turma" type="text" value="<?php echo isset($aluno)?$aluno[0]->turma:""; ?>" autocomplete="off" />

                                  </div>
                                </div>


                                <div class="control-group">
                                  <label class="control-label" for="email">Nota</label>
                                  <div class="controls">
                                    <input id="notas" name="notas" type="text" value="<?php echo isset($aluno)?$aluno[0]->notas:""; ?>" autocomplete="off" />

                                  </div>
                                </div>


                            <!-- Button -->
                            <div class="control-group">
                              <label class="control-label" for=""></label>
                              <div class="controls">
                                <input type="submit" class="btn btn-inverse" value="Enviar" />
                              </div>
                            </div>

                            </fieldset>
                            </form>
                          </div>
