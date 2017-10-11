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
                      <a href="<?php echo base_url('aluno/aluno_profile');?>">Alunos</a>
                    </li>

                    <li>
                      <a href="<?php echo base_url('aluno/cobrancas');?>">Cobranças</a>
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