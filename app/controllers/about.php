<?php
class about extends Controller{
    public function index( $nama ='fakhri', $pekerjaan = 'guru', $umur =  23)
    {
        $data['judul'] = 'About';
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');

    }


    public function page()
    {
        $data['judul'] = 'About page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}