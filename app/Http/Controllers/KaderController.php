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

    public function getRegisterBayi011()
    {
      return $this->getRegisterBayi();
    }

    public function getRegisterBayi1223()
    {
      return $this->getRegisterBayi();
    }

    public function getRegisterBayi2435()
    {
      return $this->getRegisterBayi();
    }

    public function getRegisterBayi3647()
    {
      return $this->getRegisterBayi();
    }

    public function getRegisterBayi4859()
    {
      return $this->getRegisterBayi();
    }

    public function getRegisterBayi()
    {
      return view('pages.register-bayi');
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
