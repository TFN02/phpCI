<?php 

namespace App\Controllers;
use App\Models\m_mahasiswa;
 
class Login extends BaseController{
 
	// function __construct(){
	// 	parent::__construct();		
	// 	$this->load->model('m_login');
 
	// }
 
	// function display(){
	// 	$this->load->view('v_login');
	// }
    protected $mahasiswaLogin;
    public function __construct()
    {
        $this->mahasiswaLogin = new m_mahasiswa();
    }

    public function display()
    {
        // 
        $data['content_view']= 'v_login.php';
        return view('v_login');
        

    }
 
	function aksi_login(){
		$username = $this->request->getPost('username');
		$password = $this->request->getPost('password');
        $data = [
			'username' => $this->request->getPost('username'),
			'password' => $this->request->getPost('password'),
		];
        $model = new m_mahasiswa();
		if($model->login($data) != null){
            session()->set('login', $data['username']);
            return redirect()->to('/main');
        } else {
            return redirect()->to('/login');
        }
	}
 
	function logout(){
		session()->destroy();
        return redirect()->to('/login');
	}
}