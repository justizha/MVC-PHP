<?php

class Siswa extends Controller{

    public function index()
    {
        $data['judul'] = 'Daftar Siswa';
        $data['sws'] = $this->model('Siswa_model')->getAllSiswa();
        $this->view('templates/header',$data);
        $this->view('siswa/index',$data); 
        $this->view('templates/footer');
    }
    public function detail($id)
    {
        $data['judul'] = 'Detail Siswa';
        $data['sws'] = $this->model('Siswa_model')->getSiswaById($id);
        $this->view('templates/header',$data);
        $this->view('siswa/detail',$data); 
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if ($this->model('Siswa_model')->tambahDataSiswa($_POST) > 0 )
        {
            Flasher::setFlash('berhasil','ditambahkan','success');
            header('Location: '.MAINURL. '/siswa');
            exit;
        }else{
            Flasher::setFlash('gagal','ditambahkan','danger');
            header('Location: '.MAINURL. '/siswa');
            exit; 
        }
    }
    public function hapus($id)
    {
        if ($this->model('Siswa_model')->hapusDataSiswa($id) > 0 )
        {
            Flasher::setFlash('berhasil','dihapus','success');
            header('Location: '.MAINURL. '/siswa');
            exit;
        }else{
            Flasher::setFlash('gagal','dihapus','danger');
            header('Location: '.MAINURL. '/siswa');
            exit; 
        }
    }
    public function getUbah()
    {
      echo json_encode($this->model('Siswa_model')->getSiswaById($_POST['id']));
    }
    public function ubah()
    {
        if ($this->model('Siswa_model')->UbahDataSiswa($_POST) > 0 )
        {
            Flasher::setFlash('berhasil','diubah','success');
            header('Location: '.MAINURL. '/siswa');
            exit;
        }else{
            Flasher::setFlash('gagal','diubah','danger');
            header('Location: '.MAINURL. '/siswa');
            exit; 
        }
    }
}   