<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Model;


class Latihan1 extends Controller
{
    public function index()
    {
        echo "Selamat Datang.. selamat belajar Web Programming";
    }

    public function penjumlahan($n1, $n2)
    {
        // $this->load->model('Model_latihan1');
        // $hasil = $this->Model_latihan1->jumlah($n1, $n2);
        // echo "Hasil Penjumlahan dari" . $n1 . " + " . $n2 . " = "
        //     . $hasil;

        $model = model(\App\Models\Model_latihan1::class);
        $hasil = $model->jumlah($n1, $n2);
        $data['n1'] = $n1;
        $data['n2'] = $n2;
        $data['hasil'] = $hasil;

        // echo "hasil $n1 + $n2 adalah $hasil";
        return view("view-latihan.php", $data);
    }
}
