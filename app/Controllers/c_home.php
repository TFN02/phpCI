<?php
namespace App\Controllers;
use App\Models\m_mahasiswa;

    class c_home extends BaseController
    {
        public function display()
        {
            if(!session()->get('login')){
                return redirect()->to('/login');
            }

            $data['content_view']='v_home.php';
            return view('v_template',$data);
        }
    }
