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
                      <a href="#"><h3>Gestão 3LM</h3>Sistema de Gestão RH</a>
                    </li>
                    
                </ul>



                </ul>



           
            </div>
            <!-- /sidebar -->

        </div><!-- row -->
      </div><!-- box -->
    </div><!-- wrapper-->



  



  </body>
</html>