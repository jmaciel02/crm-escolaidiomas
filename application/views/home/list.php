 <!--Lista usuarios no banco -->
       <div class="col-sm-12" id="stories">
        <div class="page-header text-muted divider">
          Usuários Cadastrados
        </div>
       </div>

        <table class="table table-hover">
          <tr>
            <th></th>
            <th>Usuarios</th>
            <th></th>
            <th></th>
          </tr>

        <!- Litar Usuarios -->

        <?php
        $dados=$this->user_model->ListarUsuario();
        echo $dados[0]->nome;
        

        // while($linha = mysql_fetch_assoc($dados)){
        foreach ($dados as $linha) {
        
        ?> 
            <tr>
              <td class="col-md-1">
                <a class="btn btn-default" href="" role="button">Alterar</a>
            </td>


            <td class="col-md-6">
              <?php echo $linha->nome; ?>
            </td>

            <td class="col-md-1">
                 <?php //echo $linha->email; ?>
            </td>

            <td class="col-md-1">
              <a class="btn btn-danger" href="" role="button">Excluir</a>
            </td>
            </tr>

          <?php } ?>

        </table>