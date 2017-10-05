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
     <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
     <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  </head>
  <body>


    <div class="wrapper">
      <div class="box">
        <div class="row">

          <!-- sidebar -->
            <div class="column col-sm-3" id="sidebar">

                <img src="<?php echo base_url('assets/images/iconeEscola.png'); ?>"  width="150px" height="150px"> 
                  <a class="logo" href="#">
                    <span>Gestão Escola Idiomas</span>
                  </a>

                <ul class="nav">
                    <li >
                      <a href="<?php echo site_url('user/user_profile');?>" >Usuarios</a>
                    </li>

                    <li class="active">
                      <a href="<?php base_url('aluno/listaAlunos');?>">Alunos</a>
                    </li>

                    <li>
                      <a href="<?php base_url('aluno/cobranças');?>">Cobranças</a>
                    </li>

                    <li>
                      <a href="<?php echo base_url('user/user_logout');?>" >  
                        <button type="button" class="btn-primary">Logout</button>
                      </a>
                    </li>

                    <ul class="nav hidden-xs" id="sidebar-footer">
                    <li>
                      <a href="#"><h3>Mangue3.com</h3>Sistema de Gestão Escola Idiomas</a>
                    </li>
                    
                </ul>

                </ul>
           
            </div>
            <!-- /sidebar -->

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

                      
                          <hr>

                          <h3 class="text-center">
                            <a href="#" target="ext">Mangue3.com</a>
                          </h3>

                          <hr>


                </div><!-- /col-9 -->
            </div><!-- /padding -->
        </div>
        <!-- /main -->




        </div><!-- row -->
      </div><!-- box -->
    </div><!-- wrapper-->



  

    <!-- script references -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>