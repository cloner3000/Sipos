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

}
