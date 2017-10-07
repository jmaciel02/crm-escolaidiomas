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
        $test=json_decode($dados,true);
        

        echo $test[0]["nome"];
        echo "<br>";
        echo $test[0]["email"];
        echo "<br>";

        var_dump($test);
        

         while($linha = mysql_fetch_assoc($dados)){
        
        ?> 
            <tr>
              <td class="col-md-1">
                <a class="btn btn-default" href="" role="button">Alterar</a>
            </td>


            <td class="col-md-6">
              <?php echo $linha['0']->nome; ?>
            </td>

            <td class="col-md-1">

            </td>

            <td class="col-md-1">
              <a class="btn btn-danger" href="" role="button">Excluir</a>
            </td>
            </tr>

          <?php } ?>

        </table>