 <!--Lista aluno no banco -->
   

       <div class="col-sm-12" id="stories">
        <div class="page-header text-muted divider">
          Alunos Matriculados
        </div>
       </div>

        <table class="table table-hover">
          <tr>
            <th></th>
            <th>Matricula</th>
            <th>Aluno</th>
            <th>Emails</th>
            <th>Notas</th>
            <th>Turma</th>
            <th>Pagamento</th>
          </tr>

        <!- Litar Alunos -->

        <?php
          
          //var_dump($dados);

          foreach ($dados as $linha) {
        
          
        ?> 
            <tr>
              <td class="col-md-1">
                <a class="btn btn-default" href="<?php echo base_url('aluno/alterarAluno/'.$linha->idaluno); ?>" role="button">Alterar</a>
            </td>

            <td class="col-md-2">
              <?php echo $linha->matricula; ?>
            </td>

            <td class="col-md-2">
              <?php echo $linha->nomealuno; ?>
            </td>

            <td class="col-md-1">
                 <?php echo $linha->emailaluno; ?>
            </td>

            <td class="col-md-1">
                 <?php echo $linha->notas; ?>
            </td>

             <td class="col-md-1">
                 <?php echo $linha->turma; ?>
            </td>

            <td class="col-md-1">
                 <?php echo $linha->pagamento; ?>
            </td>
            
            <td class="col-md-1">
              <a class="btn btn-danger" href="<?php echo base_url('aluno/excluirAluno/').$linha->idaluno; ?>" role="button">Excluir</a>
            </td>
            </tr>

          <?php 
             
            }//foreach 
          ?>

        </table>