<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\KeyHelper;
use App\Helpers\DateHelper;
use App\Catatan;
use App\Pasangan;
use App\OrangTua;
use App\Anak;
use App\User;
use Auth;

class CrudController extends Controller
{
    public function editCatatan(Request $request)
    {
      if(!KeyHelper::checkKey(Auth::user()->id, $request->key)){
        return 'Token Failed';
      }

      // return DateHelper::convertDate($request->tanggal_meninggal);

      $data = Catatan::find($request->id);
      $data->meninggal = $request->meninggal;
      $data->tanggal_meninggal = DateHelper::DMYtoYMD($request->tanggal_meninggal);
      $data->penyebab_meninggal = $request->penyebab_meninggal;

      $data->save();

      return redirect()->route('catatan');
    }

    public function tambahPasangan(Request $request)
    {

    }
}
