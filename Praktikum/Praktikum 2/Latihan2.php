<?php

class Latihan2 extends CI_Controller
{

    public function index()
    {
        echo "Selamat Datang.. selamat belajar Web Programming";
        //$this->load->view('view-latihan');
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('Model_latihan1');

        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);

        $this->load->view('view-latihan', $data);
    }
}
// http://localhost/pustaka-booking/index.php/latihan2/penjumlahan/2/6
