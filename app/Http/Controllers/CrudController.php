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
use App\BaseKecamatan as Kecamatan;
use App\BaseDesa as Desa;
use App\BasePosyandu as Posyandu;
use App\RegisterBayi;
use App\PemberianAsi;
use App\PemberianImunisasi;
use App\PemberianNtob;
use App\PemberianVitaminA;
use App\BaseImunisasi;
use App\BaseAsi;
use Auth;

class CrudController extends Controller
{
  public function editCatatan(Request $request)
  {
    $catatan = Catatan::find($request->id);

    if ($catatan == null) {
      return redirect()->back()->with('error', 'Catatan not found')->withInput();
    }

    return $request;

    $catatan->update([
      'meninggal' => $request->meninggal,
      'tanggal_meninggal' => DateHelper::DMYtoYMD($request->tanggal_meninggal),
      'penyebab_meninggal' => $request->penyebab_meninggal
    ]);

    return redirect()->route('pages.catatan')->with('success', 'Update Catatan Successfully');
  }

  public function addPasangan(Request $request)
  {
    $pasangan = Pasangan::create([
      'tanggal_menikah' => DateHelper::DMYtoYMD($request->tanggal_menikah),
      'alamat' => $request->alamat_pasangan,
      'id_desa' => $request->desa_pasangan,
      'id_user' => Auth::user()->id
    ]);

    $ayah = OrangTua::create([
      'nama' => $request->nama_suami,
      'nik' => $request->nik_suami,
      'jenis_kelamin' => 'Laki-Laki',
      'tempat_lahir' => $request->tempat_lahir_suami,
      'tanggal_lahir' => DateHelper::DMYtoYMD($request->tanggal_lahir_suami),
      'pekerjaan' => $request->pekerjaan_suami,
      'status' => 1,
      'id_agama' => $request->agama_suami,
      'id_pendidikan_terakhir' => $request->pendidikan_terakhir_suami,
      'id_pasangan' => $pasangan->id,
      'id_user' => Auth::user()->id
    ]);

    $ibu = OrangTua::create([
      'nama' => $request->nama_istri,
      'nik' => $request->nik_istri,
      'jenis_kelamin' => 'Perempuan',
      'tempat_lahir' => $request->tempat_lahir_istri,
      'tanggal_lahir' => DateHelper::DMYtoYMD($request->tanggal_lahir_istri),
      'pekerjaan' => $request->pekerjaan_istri,
      'status' => 1,
      'id_agama' => $request->agama_istri,
      'id_pendidikan_terakhir' => $request->pendidikan_terakhir_istri,
      'id_pasangan' => $pasangan->id,
      'id_user' => Auth::user()->id
    ]);

    return redirect()->route('pages.pasangan')->with('success', 'Data has been successfully addedccessfully');
  }

  public function editPasangan(Request $request)
  {
    $ayah = OrangTua::find($request->id_suami);
    $ibu = OrangTua::find($request->id_istri);
    $pasangan = Pasangan::find($request->id_pasangan);

    if ($ayah == null || $ibu == null || $pasangan == null) {
      return redirect()->back()->with('error', 'Data Not Found');
    }

    $update_ayah = $ayah->update([
      'nama' => $request->nama_suami,
      'nik' => $request->nik_suami,
      'jenis_kelamin' => 'Laki-Laki',
      'tempat_lahir' => $request->tempat_lahir_suami,
      'tanggal_lahir' => DateHelper::DMYtoYMD($request->tanggal_lahir_suami),
      'pekerjaan' => $request->pekerjaan_suami,
      'status' => 1,
      'id_agama' => $request->agama_suami,
      'id_pendidikan_terakhir' => $request->pendidikan_terakhir_suami,
      'id_pasangan' => $pasangan->id,
      'id_user' => Auth::user()->id
    ]);

    $update_ibu = $ibu->update([
      'nama' => $request->nama_istri,
      'nik' => $request->nik_istri,
      'jenis_kelamin' => 'Perempuan',
      'tempat_lahir' => $request->tempat_lahir_istri,
      'tanggal_lahir' => DateHelper::DMYtoYMD($request->tanggal_lahir_istri),
      'pekerjaan' => $request->pekerjaan_istri,
      'status' => 1,
      'id_agama' => $request->agama_istri,
      'id_pendidikan_terakhir' => $request->pendidikan_terakhir_istri,
      'id_pasangan' => $pasangan->id,
      'id_user' => Auth::user()->id
    ]);

    $update_pasangan = $pasangan->update([
      'tanggal_menikah' => DateHelper::DMYtoYMD($request->tanggal_menikah),
      'alamat' => $request->alamat_pasangan,
      'id_desa' => $request->desa_pasangan,
      'id_user' => Auth::user()->id
    ]);



    if ($update_ayah == 0 || $update_ibu == 0 || $update_pasangan == 0) {
      return redirect()->back()->with('error', 'Update Failed');
    }

    return redirect()->route('pages.pasangan')->with('success', 'Update Successfully');
  }

  public function deletePasangan(Request $request)
  {
    $pasangan = Pasangan::with('anaks', 'ortus')->find($request->id);

    if ($pasangan == null) {
      return redirect()->back()->with('error', 'Data Not Found');
    }

    foreach ($pasangan->anaks as $anak) {
      Anak::find($anak->id)->delete();
      Catatan::where('id_anak', $anak->id)->get()->first()->delete();
    }
    foreach ($pasangan->ortus as $ortu) {
      OrangTua::find($ortu->id)->delete();
    }

    $pasangan->delete();
    return redirect()->route('pages.pasangan')->with('success', 'Delete Successfully');
  }

  public function addAnak(Request $request)
  {
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

    $p = Catatan::create([
      "id_anak" => $d->id,
      "id_user" => Auth::user()->id
    ]);

    $rb = RegisterBayi::create([
      'id_anak' => $d->id,
      'umur' => 0,
      'id_user' => Auth::user()->id
    ]);

    $pn = PemberianNtob::create([
      'id_register' => $rb->id,
      'berat' => $d->berat_bayi_lahir,
      'status' => 'Baru',
      'tanggal' => $d->created_at
    ]);

    return redirect()->route('pages.anak')->with('success', 'Data has been successfully addedccessfully');
  }

  public function deleteAnak(Request $request)
  {
    $data = Anak::find($request->id);
    if ($data == null) {
      return redirect()->route('pages.anak')->with('Error', 'Data Not Found');
    }
    $catatan = Catatan::where('id_anak', $request->id)->get()->first()->delete();
    $data->delete();
    return redirect()->route('pages.anak')->with('success', 'Delete Successfully');
  }

  public function editAnak(Request $request)
  {
    $data = Anak::find($request->id);
    if ($data == null) {
      return redirect()->route('pages.anak')->with('Error', 'Data Not Found');
    }

    $b = $data;

    $update = $data->update([
      "nama_anak" => $request->nama,
      "tempat_lahir" => $request->tempat_lahir,
      "tanggal_lahir" => DateHelper::DMYtoYMD($request->tanggal_lahir),
      "jenis_kelamin" => $request->jenis_kelamin,
      "berat_bayi_lahir" => $request->berat_lahir,
      "id_agama" => $request->agama,
      "status" => 1,
      "id_user" => Auth::user()->id
    ]);

    if ($update == 0) {
      return redirect()->back()->with('error', 'Update Error');
    }
    return redirect()->route('pages.anak')->with('success', 'Update Successfully');
  }

  public function addDesa(Request $request)
  {
    if (Kecamatan::find($request->kecamatan) == null) {
      return redirect()->back()->with('error', 'Kecamatan Not Found')->withInput();
    }

    Desa::create([
      'nama_desa' => $request->nama_desa,
      'id_kecamatan' => $request->kecamatan,
      'id_user' => Auth::user()->id
    ]);

    return redirect()->route('pages.desa')->with('success', 'Data has been successfully added');
  }

  public function editDesa(Request $request)
  {
    $desa = Desa::find($request->id);
    if ($desa == null) {
      return redirect()->route('pages.desa')->with('error', 'Data not found');
    }

    if (Kecamatan::find($request->kecamatan) == null) {
      return redirect()->back()->with('error', 'Kecamatan not found')->withInput();
    }

    $desa->update([
      'nama_desa' => $request->nama_desa,
      'id_kecamatan' => $request->kecamatan,
    ]);

    return redirect()->route('pages.desa')->with('success', 'Update successfully');
  }

  public function deleteDesa(Request $request)
  {
    $desa = Desa::with('posyandus')->find($request->id);
    if ($desa == null) {
      return redirect()->route('pages.desa')->with('error', 'Data not found');
    }

    if (count($desa->posyandus) > 0) {
      return redirect()->route('pages.desa')->with('error', 'Desa has relation with posyandu');
    }

    $desa->delete();
    return redirect()->route('pages.desa')->with('success', 'Delete successfully');
  }

  public function addPosyandu(Request $request)
  {
    if (Desa::find($request->desa) == null) {
      return redirect()->back()->with('error', 'Desa not found')->withInput();
    }

    $p = Posyandu::create([
      'no_posyandu' => $request->no_posyandu,
      'nama_posyandu' => $request->nama_posyandu,
      'alamat' => $request->alamat_posyandu,
      'id_desa' => $request->desa,
      'id_user' => Auth::user()->id
    ]);

    return redirect()->route('pages.posyandu')->with('success', 'Data has been successfully added');
  }

  public function editPosyandu(Request $request)
  {
    if (Desa::find($request->desa) == null) {
      return redirect()->back()->with('error', 'Desa not found')->withInput();
    }

    $posyandu = Posyandu::find($request->id);

    if ($posyandu == null) {
      return redirect()->back()->with('error', 'Posyandu not found')->withInput();
    }

    $posyandu->update([
      'no_posyandu' => $request->no_posyandu,
      'nama_posyandu' => $request->nama_posyandu,
      'alamat' => $request->alamat_posyandu,
      'id_desa' => $request->desa,
      'id_user' => Auth::user()->id
    ]);

    return redirect()->route('pages.posyandu')->with('success', 'Update successfully');
  }

  public function deletePosyandu(Request $request)
  {
    $posyandu = Posyandu::find($request->id);

    if ($posyandu == null) {
      return redirect()->route('pages.posyandu')->with('error', 'Posyandu not found');
    }

    $posyandu->delete();

    return redirect()->route('pages.posyandu')->with('success', 'Delete successfully');
  }

  public function addRegisterBayi(Request $request)
  {
    $date_now = date('Y-m-d');

    $rb = RegisterBayi::where('id_anak', $request->id_anak)->get()->first();
    $ntob_last = PemberianNtob::orderBy('tanggal', 'desc')->where('id_register', $rb->id)->get()->first();
    $m_last = explode('-', $ntob_last->tanggal)[1];
    $m_now = $request->bulan;
    if ($m_now - $m_last > 1) {
      $status = "Tidak Datang";
    } elseif ($request->umur != $rb->umur) {
      $status = "Baru";
    } elseif ($request->berat - $ntob_last->berat > 0) {
      $status = "Naik";
    } else {
      $status = "Turun";
    }

    $ntob = null;

    if ($request->umur != $rb->umur) {

      $rb->update([
        'active' => 0
      ]);

      $rb = RegisterBayi::create([
        'id_anak' => $rb->id_anak,
        'umur' => $request->umur,
        'catatan' => $request->catatan,
        'id_user' => Auth::user()->id
      ]);

      $ntob = PemberianNtob::create([
        'id_register' => $rb->id,
        'berat' => $request->berat,
        'status' => 'Baru',
        'tanggal' => date_create(date("Y") . '-' . ($request->bulan - 1) . '-' . date('d'))
      ]);
    }

    if ($request->vitamin_a != null) {
      PemberianVitaminA::create([
        'id_register' => $rb->id,
        'tanggal' => $date_now
      ]);
    }

    if($ntob == null){
      $ntob = PemberianNtob::create([
        'id_register' => $rb->id,
        'berat' => $request->berat,
        'status' => $status,
        'tanggal' => date_create(date("Y") . '-' . ($request->bulan - 1) . '-' . date('d'))
      ]);
    }

    foreach($request->imunisasi as $imunisasi => $status){
      $imun = explode('-', $imunisasi);
      $nama_imunisasi = $imun[0];
      $no_imunisasi = $imun[1];

      if($status == "on"){
        $id = BaseImunisasi::where('imunisasi', $nama_imunisasi)->get()->first()->id;
        PemberianImunisasi::create([
          'id_register' => $rb->id,
          'id_imunisasi' => $id,
          'nomor_imunisasi' => $no_imunisasi,
          'tanggal_pemberian' => $date_now
        ]);
      }
    }

    foreach($request->asi as $asi => $status){

      if($status == "on"){
        $id = BaseAsi::where('asi', $asi)->get()->first()->id;
        PemberianAsi::create([
          'id_register' => $rb->id,
          'id_asi' => $id,
          'tanggal' => $date_now
        ]);
      }
    }

    return redirect()->route('pages.add.register-bayi')->with('success', 'Data has been added');
  }

  public function editNtobBayi(Request $request)
  {

    return "Saya Menyerah!";

    $ntob = PemberianNtob::find($request->id);
    if($ntob == null){
      return redirect()->back()->with('error', 'Data not found');
    }

    if($ntob->status == 'Baru'){

    }

    // return $request->id_reg;
    $ntob_last = PemberianNtob::orderBy('tanggal', 'desc')->where('id_register', $request->id_reg)->get()[1];
    // return $ntob_last;
    if ($request->berat - $ntob_last->berat > 0) {
      $status = "Naik";
    } else {
      $status = "Turun";
    }
    return $status;

    $ntob->update([

    ]);
    return $ntob;
  }
}
