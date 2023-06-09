<?php

class Contact extends Controller {
    public function index()
    {
        $data['judul'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('contact/index');
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'Page';
        $this->view('templates/header', $data);
        $this->view('contact/page');
        $this->view('templates/footer');
    }
    public function coba($nama = 'Rizky', $pekerjaan = 'Illustrator')
    {
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan.";
    }
    public function cobalagi($nama = 'Rizky', $pekerjaan = 'Illustrator', $umur = 19)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $this->view('templates/header');
        $this->view('contact/cobalagi', $data);
        $this->view('templates/footer');
    }

    // public function set($newNama)
    // {
        
    // }
}