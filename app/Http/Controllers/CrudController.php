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

    public function addPasangan(Request $request)
    {

    }

    public function addAnak(Request $request)
    {
      if(!KeyHelper::checkKey(Auth::user()->id, $request->key)){
        return 'Token Failed';
      }

      $d = Anak::create([
        "id_pasangan" => $request->pasangan,
        "nama_anak" => $request->nama,
        "tempat_lahir" => $request->tempat_lahir,
        "tanggal_lahir" => DateHelper::DMYtoYMD($request->tanggal_lahir),
        "jenis_kelamin" => $request->jenis_kelamin,
        "berat_bayi_lahir" => $request->berat_lahir,
        "id_agama" => $request->agama,
        "status" => 1,
        "id_user" => Auth::user()->id
      ]);

      return redirect()->route('get.page.list-anak');
    }
}
