<?php
$user_id=$this->session->userdata('user_id');

if(!$user_id){

  redirect('user/login_view');
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>


    <div class="wrapper">
      <div class="box">
        <div class="row">

          <!-- sidebar -->
            <div class="column col-sm-3" id="sidebar">

                <img src="<?php echo base_url('assets/images/iconeEscola.png'); ?>"  width="150px" height="150px" > 
                  <a class="logo" href="#">
                    <span>Gestão Escola Idiomas</span>
                  </a>

                <ul class="nav">
                    <li class="active">
                      <a href="<?php echo base_url('user/user_profile');?>" >Usuarios</a>
                    </li>

                    <li>
                      <a href="<?php echo base_url('aluno/listaAlunos');?>">Alunos</a>
                    </li>

                    <li>
                      <a href="<?php echo base_url('aluno/cobranças');?>">Cobranças</a>
                    </li>

                    <li>
                      <a href="<?php echo base_url('user/user_logout');?>" >  
                        <button type="button" class="btn-primary">Logout</button>
                      </a>
                    </li>
                </ul>

                <!-- main -->
                <div class="column col-sm-9" id="main">
                    <div class="padding">
                        <div class="full col-sm-9">

                            <!-- content -->
                            <div class="col-sm-5" id="featured">
                            <div class="page-header text-muted">Usuario: <?php echo $_SESSION['usuarioLogado'];  ?></div>

                            <form class="form-horizontal" action="<?=$destino; ?>" method="post">
                              <fieldset>

                              <!-- Form Name -->
                              <legend> <?php echo $tituloformulario; ?> </legend>

                            <!-- Text input-->
                              <div class="control-group">
                                <label class="control-label" for="nomeUsuario">Matricula Usuario</label>
                                <div class="controls">
                                  <input id="codigoUsuario" name="codigoUsuario" type="text" value="<?php echo isset($usuario)?$usuario['codigoUsuario']:""; ?>" autocomplete="off" />

                                </div>
                              </div>

                            <!-- Text input-->
                            <div class="control-group">
                              <label class="control-label" for="nomeUsuario">Nome Usuario</label>
                                <div class="controls">
                                <input id="nomeUsuario" name="nomeUsuario" type="text" value="<?php echo isset($usuario)?$usuario['nomeUsuario']:""; ?>"  autocomplete="off" />

                              </div>
                            </div>


                            <!-- Text input-->
                            <div class="control-group">
                              <label class="control-label" for="senhaUsuario">Senha Usuario</label>
                              <div class="controls">
                                <input id="senhaUsuario" name="senhaUsuario" type="password" value="<?php echo isset($usuario)?$usuario['senhaUsuario']:""; ?>" autocomplete="off">

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


                        </div> <!--col-sm-9 -->
                    </div><!-- padding-->
                </div><!-- main-->



                <ul class="nav hidden-xs" id="sidebar-footer">
                    <li>
                      <a href="#">
                              <h3>Gestão Escola Idiomas</h3>
                              Mangue3.com
                      </a>
                    </li>
                </ul>
            </div>
            <!-- /sidebar -->

        </div><!-- row -->
      </div><!-- box -->
    </div><!-- wrapper-->



  



  </body>
</html>