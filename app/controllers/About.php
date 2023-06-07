<?php

class About {
    public function index()
    {
        echo 'About/index';
    }
    public function page()
    {
        echo 'About/page';
    }
    public function coba($nama = 'Rizky', $pekerjaan = 'Illustrator')
    {
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan.";
    }
}