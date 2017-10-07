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
            <th>Emails</th>
            <th></th>
          </tr>

        <!- Litar Usuarios -->

        <?php
       
        
        // while($linha = mysql_fetch_assoc($dados)){
        foreach ($dados as $linha) {
        
          if($linha != null){
        ?> 
            <tr>
              <td class="col-md-1">
                <a class="btn btn-default" href="" role="button">Alterar</a>
            </td>


            <td class="col-md-2">
              <?php echo $linha->nome; ?>
            </td>

            <td class="col-md-1">
                 <?php echo $linha->email; ?>
            </td>

            <td class="col-md-1">
              <a class="btn btn-danger" href="" role="button">Excluir</a>
            </td>
            </tr>

          <?php 
              }//if
            }//foreach 
          ?>

        </table>