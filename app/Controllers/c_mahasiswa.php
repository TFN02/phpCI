<?php 

namespace App\Controllers;
use App\Models\m_mahasiswa;

class c_mahasiswa extends BaseController
{
    protected $mahasiswaModel;
    public function __construct()
    {
        $this-> mahasiswaModel = new m_mahasiswa();
    }

    public function display()
    {
        if(!session()->get('login')){
            return redirect()->to('/login');
        }

        $data['mahasiswa'] = $this->mahasiswaModel->getMahasiswa();

        // 
        $data['content_view']= 'v_mahasiswa_table.php';
        return view('v_template',$data);
        

    }

    public function template()
    {
        echo view('v_template');
    }

    public function mahasiswaTable()
    {
        // latihan 5
        $data['mahasiswa'] = $this->mahasiswaModel->getMahasiswa();
        echo view('v_mahasiswa_table', $data);
    }

    // input data
    public function create()
    {
        $data['content_view'] = "v_formCreate";
        $data['title'] = "Mahasiswa";

        echo view('v_template', $data);
        // $data = [
        //     'title' => 'Form Tambah Data Mahasiswa'
        // ];

        // return view('/v_formCreate', $data);
    }

    public function save()
    {
        // dd($this->request->getVar());
        $data = [
            'Nim' => $this->request->getVar('Nim'),
            'Nama' => $this->request->getVar('Nama'),
            'Umur' => $this->request->getVar('Umur'),
            'foto' => $this->request->getVar('foto'),
        ];

        $result = $this->mahasiswaModel->storeMahasiswa($data);
        
        if($result){
            return redirect( )->to('/mahasiswa');
        }
        
    }

    public function viewDetail($id)
    {
        $data['mahasiswa'] = $this->mahasiswaModel->find($id);
        $data['content_view']= 'v_viewDetail.php';
        return view('v_template',$data);
    }

    public function delete($id)
    {
        $this->mahasiswaModel->deleteMahasiswa($id);                  
        return redirect()->to('/mahasiswa');
    }

    function search()
    {
        $data['Nama'] = $this->request->getVar('Nama');
        $data['mahasiswa'] = $this->mahasiswaModel->searchMahasiswa($data);
        $data['content_view'] = "v_mahasiswa_table";

        echo view('v_template', $data);
    }

    public function update($id)
    {
        $data = [
            'id' => $id,
            'Nim'  => $this->request->getVar('Nim'),
            'Nama' => $this->request->getVar('Nama'),
            'Umur' => $this->request->getVar('Umur'),
        ];

        $result = $this->mahasiswaModel->updateMahasiswa($data);

        if ($result) {
            session()->setFlashdata('pesan', 'Data berhasil diupdate');
            return redirect()->route('mahasiswa');
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Data Mahasiswa';
        $data['mahasiswa'] = $this->mahasiswaModel->find($id);
        $data['content_view'] = "v_mahasiswa_edit";
        echo view('v_template', $data);
    }

    public function mainSection()
    {
        if(!session()->get('login')){
            return redirect()->to('/login');
        }
        
        $data['content_view']='v_main.php';
        return view('v_template',$data);
    }
}