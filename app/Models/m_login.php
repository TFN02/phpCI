<?php 
 
 namespace App\Models;

 use CodeIgniter\Model;

class m_login extends Model{	
    protected $table      = 'admin';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['username', 'password'];

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
        if($cek > 0){
            $data_session = array(
                'nama' => $username,
                'status' => "login"
                );
         
            $this->session->set_userdata($data_session);
            redirect(base_url("mahasiswa"));
        }else{
            echo "Username dan password salah !";
        }
    }
    
}?>

