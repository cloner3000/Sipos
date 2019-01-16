<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\KeyHelper;
use App\Helpers\DateHelper;
use App\Catatan;
use App\Pasangan;
use App\OrangTua;
use App\Agama;
use App\Kecamatan;
use App\Pendidikan;
use App\Anak;
use App\User;
use App\Desa;
use Auth;

class KaderController extends Controller
{

    public $bulan = array(1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr', 5 => 'Mei', 6 => 'Jun', 7 => 'Jul', 8 => 'Agu', 9 => 'Sept', 10 => 'Okt', 11 => 'Nov', 12 => 'Des');

    public function catatanPage()
    {
      return view('pages.catatan');
    }

    public function addCatatan()
    {
      return view('pages.add.add_catatan');
    }

    public function registerWuspusPage()
    {
      return view('pages.wuspus');
    }

    public function addRegisterWuspus()
    {
      return view('pages.add.wuspus');
    }

    public function registerBayi011()
    {
      $tahun = date("Y");
      return redirect()->route('pages.register.011.thn', compact('tahun'));
    }

    public function registerBayi011Tahun($tahun)
    {
      if(!is_numeric($tahun)){
        return $this->registerBayi011();
      }
      $bulan = $this->bulan;
      return view('pages.register-bayi-011', compact('bulan', 'tahun'));
    }

    public function registerBayi1223()
    {
      $tahun = date("Y");
      return redirect()->route('pages.register.1223.thn', compact('tahun'));
    }

    public function registerBayi1223Tahun($tahun)
    {
      if(!is_numeric($tahun)){
        return $this->registerBayi1223();
      }
      $bulan = $this->bulan;
      return view('pages.register-bayi-1223', compact('bulan', 'tahun'));
    }

    public function registerBayi2435()
    {
      $tahun = date("Y");
      return redirect()->route('pages.register.2435.thn', compact('tahun'));
    }

    public function registerBayi2435Tahun($tahun)
    {
      if(!is_numeric($tahun)){
        return $this->registerBayi2435();
      }
      $bulan = $this->bulan;
      return view('pages.register-bayi-2435', compact('bulan', 'tahun'));
    }

    public function registerBayi3647()
    {
      $tahun = date("Y");
      return redirect()->route('pages.register.3647.thn', compact('tahun'));
    }

    public function registerBayi3647Tahun($tahun)
    {
      if(!is_numeric($tahun)){
        return $this->registerBayi3647();
      }
      $bulan = $this->bulan;
      return view('pages.register-bayi-3647', compact('bulan', 'tahun'));
    }

    public function registerBayi4859()
    {
      $tahun = date("Y");
      return redirect()->route('pages.register.4859.thn', compact('tahun'));
    }

    public function registerBayi4859Tahun($tahun)
    {
      if(!is_numeric($tahun)){
        return $this->registerBayi4859();
      }
      $bulan = $this->bulan;
      return view('pages.register-bayi-4859', compact('bulan', 'tahun'));
    }

    public function registerBayiDataPage($id_bayi)
    {
      return view('pages.register-bayi-data');
    }

    public function registerIbuHamilPage()
    {
      return view('pages.ibu-hamil');
    }

    public function registerIbuHamilDataPage()
    {
      return view('pages.ibu-hamil-data');
    }

    public function listPasangan()
    {
      return view('pages.pasangan');
    }

    public function detailPasangan($id)
    {
      return $id;
    }

    public function addPasangan()
    {
      $agamas = Agama::get();
      $pendidikans = Pendidikan::get();
      $desas = Desa::get();
      return view('pages.add.pasangan', compact('agamas', 'pendidikans', 'desas'));
    }

    public function editPasangan($id)
    {
      $data = Pasangan::with('ortus')->find($id);

      if($data == NULL){
        return redirect()->route('pages.pasangan')->with('error', 'Data not found');
      }

      $agamas = Agama::get();
      $pendidikans = Pendidikan::get();
      $desas = Desa::get();
      $data->ibu = $data->ortus[0]->jenis_kelamin == 'Perempuan' ? $data->ortus[0] : $data->ortus[1];
      $data->ayah = $data->ortus[0]->jenis_kelamin == 'Laki-Laki' ? $data->ortus[0] : $data->ortus[1];
      $data->ayah->tanggal_lahir = DateHelper::YMDtoDMY($data->ayah->tanggal_lahir);
      $data->ibu->tanggal_lahir = DateHelper::YMDtoDMY($data->ibu->tanggal_lahir);
      $data->tanggal_menikah = DateHelper::YMDtoDMY($data->tanggal_menikah);
      return view('pages.edit.pasangan', compact('data', 'agamas', 'pendidikans', 'desas'));
    }

    public function listAnak()
    {
      $key = Auth::user()->token_key;
      return view('pages.anak', compact('key'));
    }

    public function addListAnak()
    {
      $agamas = Agama::get();
      $pasangans = Pasangan::with('ortus')->select('id')->get();
      return view('pages.add.anak', compact('agamas', 'pasangans'));
    }

    public function anakDetail($id)
    {
      $anak = Anak::find($id);
      if($anak == NULL){
        return redirect()->route('pages.anak')->with('error', 'Data not found');
      }
      return view('pages.detail.anak');
    }

    public function anakEdit($id)
    {
      $anak = Anak::find($id);
      $agamas = Agama::get();
      if($anak == NULL){
        return redirect()->route('pages.anak')->with('error', 'Data not found');
      }
      $anak->tanggal_lahir = DateHelper::YMDtoDMY($anak->tanggal_lahir);
      return view('pages.edit.anak', compact('anak', 'agamas'));
    }

    public function listPosyandu()
    {
      return view('pages.posyandu');
    }

    public function addListPosyandu()
    {
      return view('pages.add.posyandu');
    }

    public function listDesa()
    {
      return view('pages.desa');
    }

    public function addDesa()
    {
      $kecamatans = Kecamatan::get();
      return view('pages.add.desa', compact('kecamatans'));
    }

    public function editDesa($id)
    {
      $desa = Desa::find($id);
      if($desa == NULL){
        return redirect()->route('pages.desa')->with('error', 'Data not found');
      }
      $kecamatans = Kecamatan::get();
      return view('pages.edit.desa', compact('kecamatans', 'desa'));
    }

    public function editCatatan($id)
    {
      $data = Catatan::with(['anak.pasangan.ortus', 'anak'])->find($id);

      if($data == NULL){
        return redirect()->route('pages.catatan')->with('error', 'Data not found');
      }

      $data->ibu = $data->anak->pasangan->ortus[0]->jenis_kelamin == 'Perempuan' ? $data->anak->pasangan->ortus[0] : $data->anak->pasangan->ortus[1];
      $data->ayah = $data->anak->pasangan->ortus[0]->jenis_kelamin == 'Laki-Laki' ? $data->anak->pasangan->ortus[0] : $data->anak->pasangan->ortus[1];

      if($data->tanggal_meninggal != NULL){
        $data->tanggal_meninggal = DateHelper::YMDtoDMY($data->tanggal_meninggal);
      }

      $data->anak->tanggal_lahir = DateHelper::YMDtoDMY($data->anak->tanggal_lahir);
      return view('pages.edit.catatan', compact('data', 'key'));
    }

}
