 <?php
          //Variavel de destino para o formulario
          $destino = "inserir_usuario.php";
          $tituloformulario = "Incluir Usuario";

        echo "teste22: ".($usuario[0]->nome);

          //se recebemos uma variavel pelo metodo Get, faça o seguinte
          if(!empty($usuario[0])){
            $codigo = $usuario[0]->id;
            
            
            //alterar Destino
            $destino = "alterar_usuario.php";
            $tituloformulario = "Alterar Usuario";
            
            //ocultar o campo
            $oculto = '<input type="hidden" name="codigo" value="'.$codigo.'"/>';
          }


       ?>

<!-- main -->
        <div class="column col-sm-9" id="main">
            <div class="padding">
                <div class="full col-sm-9">

                    <!-- content -->
                    <div class="col-sm-5" id="featured">
                      <div class="page-header text-muted">Usuario: <?php  echo $this->session->userdata('user_name');  ?></div>

                        <form class="form-horizontal" action="" method="post">
                          <fieldset>

                            <!-- Form Name -->
                            <legend>  <? echo $tituloformulario; ?></legend>

                                <!-- Text input-->
                                <div class="control-group">
                                  <label class="control-label" for="nome">Nome Usuario</label>
                                  <div class="controls">
                                    <input id="nome" name="nome" type="text" value="<?php  echo isset($usuario)?$usuario[0]->nome:""; ?>"  autocomplete="off" />

                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class="control-group">
                                  <label class="control-label" for="senha">Senha Usuario</label>
                                  <div class="controls">
                                    <input id="senha" name="senha" type="password" value="<?php echo isset($usuario)?$usuario[0]->senha:""; ?>" autocomplete="off">

                                  </div>
                                </div>


                                 <!-- Text input-->
                                <div class="control-group">
                                  <label class="control-label" for="email">Email</label>
                                  <div class="controls">
                                    <input id="codigoUsuario" name="codigoUsuario" type="text" value="<?php echo isset($usuario)?$usuario[0]->email:""; ?>" autocomplete="off" />

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
