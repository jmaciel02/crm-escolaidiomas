<?php
    class User_model extends CI_model{

    /**

    **/

    public function register_user($user){

      $this->db->insert('usuario', $user);

    }

    public function updateuser($user){
      
      $this->db->where('idusuario',$user['idusuario']);
      $this->db->update('usuario', $user);
      

    }    

    public function login_user($email,$pass){

      $this->db->select('*');
      $this->db->from('usuario');
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
      $this->db->from('usuario');
      $this->db->where('email',$email);
      $query=$this->db->get();

      if($query->num_rows()>0){
        return false;
      }else{
        return true;
      }
    }

      public function ListarUsuario(){
        
        $this->db->select('*');
        $this->db->from('usuario');
        $query = $this->db->get();
        
        return $query->result();
     }


    public function buscarUsuario($id){
        
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('idusuario',$id);
        $query = $this->db->get();
        
        return $query->result();
    }



    public function adicionarUsuario($user){

        $this->db->insert('usuario', $user);


    }


    public function excluirUsuario($id){
      $this->db->where('idusuario',$id);
      $this->db->delete('usuario');

    }

}

?>
