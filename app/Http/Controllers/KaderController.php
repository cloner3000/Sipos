<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaderController extends Controller
{

    public $bulan = array(1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr', 5 => 'Mei', 6 => 'Jun', 7 => 'Jul', 8 => 'Agu', 9 => 'Sept', 10 => 'Okt', 11 => 'Nov', 12 => 'Des');

    public function getCatatanPage()
    {
      return view('pages.catatan');
    }

    public function addCatatan()
    {
      return view('pages.add.add_catatan');
    }

    public function getRegisterWuspusPage()
    {
      return view('pages.register-wuspus');
    }

    public function addRegisterWuspus()
    {
      return view('pages.add.add_register-wuspus');
    }

    public function getRegisterBayi011()
    {
      return $this->getRegisterBayi();
    }

    public function getRegisterBayi011Tahun($tahun)
    {
      $bulan = $this->bulan;
      return view('pages.register-bayi-011', compact('bulan', 'tahun'));
    }

    public function getRegisterBayi1223()
    {
      return $this->getRegisterBayi();
    }

    public function getRegisterBayi1223Tahun($tahun)
    {
      $bulan = $this->bulan;
      return view('pages.register-bayi-1223', compact('bulan', 'tahun'));
    }

    public function getRegisterBayi2435()
    {
      return $this->getRegisterBayi();
    }

    public function getRegisterBayi2435Tahun($tahun)
    {
      $bulan = $this->bulan;
      return view('pages.register-bayi-2435', compact('bulan', 'tahun'));
    }

    public function getRegisterBayi3647()
    {
      return $this->getRegisterBayi();
    }

    public function getRegisterBayi3647Tahun($tahun)
    {
      $bulan = $this->bulan;
      return view('pages.register-bayi-3647', compact('bulan', 'tahun'));
    }

    public function getRegisterBayi4859()
    {
      return $this->getRegisterBayi();
    }

    public function getRegisterBayi4859Tahun($tahun)
    {
      $bulan = $this->bulan;
      return view('pages.register-bayi-4859', compact('bulan', 'tahun'));
    }

    public function getRegisterBayi()
    {
      return view('pages.pilih-tahun-register-bayi');
    }

    public function getRegisterBayiDataPage($id_bayi)
    {
      return view('pages.register-bayi-data');
    }

    public function getRegisterIbuHamilPage()
    {
      return view('pages.register-ibu-hamil');
    }

    public function getRegisterIbuHamilDataPage()
    {
      return view('pages.register-ibu-hamil-data');
    }

    public function getListPasangan()
    {
      return view('pages.list-pasangan');
    }

    public function addListPasangan()
    {
      return view('pages.add.add_list-pasangan');
    }

    public function getListAnak()
    {
      return view('pages.list-anak');
    }

    public function addListAnak()
    {
      return view('pages.add.add_list-anak');
    }

    public function getListPosyandu()
    {
      return view('pages.list-posyandu');
    }

    public function addListPosyandu()
    {
      return view('pages.add.add_list-posyandu');
    }

    public function getListDesa()
    {
      return view('pages.list-desa');
    }

    public function addListDesa()
    {
      return view('pages.add.add_list-desa');
    }

}
