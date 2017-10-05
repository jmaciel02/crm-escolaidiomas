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

                <img src="images/icone_rh.png"  width="150px" height="150px" > <a class="logo" href="#"><span>Gestão 3LM</span></a>

                <ul class="nav">
                    <li class="active">
                      <a href="user_profile.php">Usuarios</a>
                    </li>
                    <li>
                      <a href="funcao.php">Listar Alunos</a>
                    </li>
                    <li>
                      <a href="funcionario.php">Funcionarios</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('user/user_logout');?>" >  
                        <button type="button" class="btn-primary">Logout</button>
                      </a>
                    </li>
                </ul>
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