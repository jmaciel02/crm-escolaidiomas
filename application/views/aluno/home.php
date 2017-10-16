<?php
    $user_id=$this->session->userdata('user_id');

    $dados=$this->aluno_model->ListarAlunos();

    if(!$user_id){
      redirect('aluno/login_view');
    }
 

 ?>

<!DOCTYPE html>
<html>
  <head>
  	<title>CRM Escola Idiomas</title>
    <meta charset="utf-8">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  </head>
  <body>

 	<div class="wrapper">
      <div class="box">
        <div class="row">

			<?php 

				include "siderbar.php";   
        include "list.php";
        include "form.php";
				include "rodape.php";

			?>


        </div><!-- row -->
      </div><!-- box -->
    </div><!-- wrapper-->


    <!-- script references -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

  </body>
</html>