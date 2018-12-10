<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaderController extends Controller
{
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

    public function getRegisterBayiPage()
    {
      return view('pages.register-bayi');
    }

    public function getRegisterBayiDataPage($id_bayi)
    {
      return view('pages.register-bayi-data');
    }
    public function getPengunjungBalita012blnPage()
    {
      return view('pages.Pengunjung-balita-0-12bulan-data');
    }

    public function getPengunjungBalita15thnPage()
    {
      return view('pages.Pengunjung-balita-1-5tahun-data');
    }
    public function getPengunjungIbuPage()
    {
      return view('pages.Pengunjung-ibu-data');
    }
    public function getAbsensikaderpkkPage()
    {
      return view('pages.Absensi-kader-pkk-data');
    }
    public function getAbsensikaderposyPage()
    {
      return view('pages.Absensi-kader-POSY-data');
    }
    public function getAbsensiplkbPage()
    {
      return view('pages.Absensi-PLKB-data');
    }
    public function getAbsensimedisparamedisPage()
    {
      return view('pages.Absensi-medisparamedis-data');
    }
    public function getjmlhbayilahirPage()
    {
      return view('pages.JumlahBayi-lahir-data');
    }
    public function getjmlhbayimeninggalPage()
    {
      return view('pages.JumlahBayi-meninggal-data');
    }
}
