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
                      <div class="page-header text-muted">aluno: <?php  echo $this->session->userdata('user_name');  ?></div>

                        <form class="form-horizontal" action="<?php echo base_url($destino); ?>" method="post">

                        <input type="hidden" name="idaluno" id="idaluno" value="<?php  echo isset($aluno)?$aluno[0]->idaluno:""; ?>">

                          <fieldset>

                            <!-- Form Name -->
                            <legend>  <? echo $tituloformulario; ?></legend>

                                <!-- Text input-->
                                <div class="control-group">
                                  <label class="control-label" for="nome">Nome aluno</label>
                                  <div class="controls">
                                    <input id="nome" name="nome" type="text" value="<?php  echo isset($aluno)?$aluno[0]->nome:""; ?>"  autocomplete="off" />

                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class="control-group">
                                  <label class="control-label" for="senha">Senha aluno</label>
                                  <div class="controls">
                                    <input id="senha" name="senha" type="password" value="<?php echo isset($aluno)?$aluno[0]->senha:""; ?>" autocomplete="off">

                                  </div>
                                </div>


                                 <!-- Text input-->
                                <div class="control-group">
                                  <label class="control-label" for="email">Email</label>
                                  <div class="controls">
                                    <input id="email" name="email" type="text" value="<?php echo isset($aluno)?$aluno[0]->email:""; ?>" autocomplete="off" />

                                  </div>
                                </div>


                                <div class="control-group">
                                  <label class="control-label" for="email">Status</label>
                                  <div class="controls">
                                    <input id="status" name="status" type="text" value="<?php echo isset($aluno)?$aluno[0]->status:""; ?>" autocomplete="off" />

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
