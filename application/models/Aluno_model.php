<?php
    class Aluno_model extends CI_model{

    /**

    **/

    public function register_aluno($aluno){

      $this->db->insert('aluno', $aluno);

    }

    public function updatealuno($aluno){
      
      $this->db->where('idaluno',$aluno['idaluno']);
      $this->db->update('aluno', $aluno);
      

    }    

    public function login_aluno($email,$pass){

      $this->db->select('*');
      $this->db->from('aluno');
      $this->db->where('email',$email);
      $this->db->where('senha',$pass);

      if($query=$this->db->get())
      {
        return $query->row_array();
      }
      else{
        return false;
      }

    }



    public function email_check($email){

      $this->db->select('*');
      $this->db->from('aluno');
      $this->db->where('email',$email);
      $query=$this->db->get();

      if($query->num_rows()>0){
        return false;
      }else{
        return true;
      }
    }

      public function ListarAlunos(){
        
        $this->db->select('*');
        $this->db->from('aluno');
        $query = $this->db->get();
        
        return $query->result();
     }


    public function buscaraluno($id){
        
        $this->db->select('*');
        $this->db->from('aluno');
        $this->db->where('idaluno',$id);
        $query = $this->db->get();
        
        return $query->result();
    }



    public function adicionaraluno($aluno){

        $this->db->insert('aluno', $aluno);


    }


    public function excluiraluno($id){
      $this->db->where('idaluno',$id);
      $this->db->delete('aluno');

    }

}

?>
