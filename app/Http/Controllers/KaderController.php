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
    public function getPengunjungBalta012blnPage()
    {
      return view('pages.Pengunjung-balita-0-12bulan-data');
    }
    public function getPengunjungBalta15thnPage()
    {
      return view('pages.Pengunjung-balita-1-5tahun-data');
    }
}
