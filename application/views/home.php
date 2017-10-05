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

                <img src="<?php echo base_url('assets/images/iconeEscola.png'); ?>"  width="150px" height="150px" style="margin: 30% 0 0 30%;"> 
                  <a class="logo" href="#">
                    <span>Gestão Escola Idiomas</span>
                  </a>

                <ul class="nav">
                    <li class="active">
                      <a href="<? echo site_url('user/user_profile');?>" >Usuarios</a>
                    </li>

                    <li>
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
                </ul>

               



           
            </div>
            <!-- /sidebar -->

        </div><!-- row -->
      </div><!-- box -->
    </div><!-- wrapper-->



  



  </body>
</html>