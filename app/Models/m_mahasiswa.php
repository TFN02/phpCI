<?php

namespace App\Models;

use CodeIgniter\Model;

class m_mahasiswa extends Model
{
    protected $table      = 'mahasiswa';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['Nim', 'Nama', 'Umur'];

    function getMahasiswa()
    {

        $db = \Config\Database::connect();
        $data = $db->query('select * from mahasiswa')->getResultArray();
        // $data = $this->findAll();
        return $data;
    }

    function storeMahasiswa($data)
    {
       
        $Nim = $data['Nim'];
        $Nama = $data['Nama'];
        $Umur = $data['Umur'];

    
        $filename = $_FILES['foto']['name'];
        move_uploaded_file($_FILES['foto']['tmp_name'], 'img/'.$filename);
		$file_gambar = $filename;

        $db = \Config\Database::connect();
        $result = $db->query("insert into mahasiswa (file_foto, Nim, Nama, Umur) values('$file_gambar','$Nim', '$Nama', '$Umur')");

        return $result;
    }
    function deleteMahasiswa($id)
    {
        $db = \Config\Database::connect();
        $result = $db->query("delete from mahasiswa where id = $id");
    }

    function searchMahasiswa($data)
    {
        $db = \Config\Database::connect();
        $search = $data['Nama'];
        // dd($data['Nama']);
        $data = $db->query("select * from mahasiswa where Nama like '%$search%' order by Nim")->getResultArray();
        return $data;
    }

    function updateMahasiswa($data)
    {
        $db = \Config\Database::connect();
        $id = $data['id'];
        $Nim = $data['Nim'];
        $Nama = $data['Nama'];
        $Umur = $data['Umur'];

        $result = $db->query("update mahasiswa set Nama='$Nama', Umur='$Umur', Nim='$Nim' where id = '$id'");

        return $result;
    }

    public function login($data) {
        $username = $data["username"];
        $password = md5($data["password"]);
        $db = \Config\Database::connect();
        $mahasiswa = $db->query("SELECT * FROM admin WHERE username = '$username' AND password = '$password'");
        return $mahasiswa->getResult();
    }
    
}
